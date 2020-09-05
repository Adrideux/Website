from flask import Flask, render_template
import mimetypes
from flask_sqlalchemy import SQLAlchemy
from datetime import datetime
import locale
locale.setlocale(locale.LC_TIME, "fr_FR") #french


#=================== INIT ===================#

app = Flask(__name__, static_folder = "static", static_url_path='/static')

#================== INIT Databases ======================#

app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///database/events.sqlite3'
app.config['SQLALCHEMY_BINDS'] = {
    'events_db': 'sqlite:///database/events.sqlite3',
    'groups_db': 'sqlite:///database/groups.sqlite3'
}
app.config['SQLALCHEMY_TRACK_MODIFICATIONS'] = False
db = SQLAlchemy(app)

#========== Databases ========================#

class Event(db.Model):
    __bind_key__ = 'events_db'

    id = db.Column(db.Integer, primary_key=True)
    name = db.Column(db.String(80), nullable=False)
    date = db.Column(db.DateTime, nullable=False)
    place = db.Column(db.String(120), nullable=False)

    tickets = db.Column(db.String(255), nullable=True)
    price = db.Column(db.Integer, nullable=True)
    web = db.Column(db.String(255), nullable=True)
    mail = db.Column(db.String(80), nullable=True)
    fb = db.Column(db.String(80), nullable=True)
    insta = db.Column(db.String(80), nullable=True)
    yt = db.Column(db.String(80), nullable=True)
    display_socials = db.Column(db.Integer, nullable=True)

    canceled = db.Column(db.Integer, nullable=True)
    reported = db.Column(db.Integer, nullable=True)
    soldout = db.Column(db.Integer, nullable=True)

    def __repr__(self):
        return '<Event "{}">'.format(self.name)

def sort_by_date(x):
    return x.date.strftime("%Y%m%d%H%M")

class Groups(db.Model):
    __bind_key__ = 'groups_db'

    id = db.Column(db.Integer, primary_key=True)
    name = db.Column(db.String(80), nullable=False)
    description = db.Column(db.String(1024), nullable=True)
    styles = db.Column(db.String(64), nullable=True)
    web_link = db.Column(db.String(1024),nullable=True)
    groups_photo = db.Column(db.String(64),nullable=True)
    groups_photo_description = db.Column(db.String(64),nullable=True)

    album1_photo = db.Column(db.String(64),nullable=True)
    album1_name = db.Column(db.String(64),nullable=True)
    album1_web_link = db.Column(db.String(64),nullable=True)

    album2_photo = db.Column(db.String(64),nullable=True)
    album2_name = db.Column(db.String(64),nullable=True)
    album2_web_link = db.Column(db.String(64),nullable=True)

    album3_photo = db.Column(db.String(64),nullable=True)
    album3_name = db.Column(db.String(64),nullable=True)
    album3_web_link = db.Column(db.String(64),nullable=True)

    def __repr__(self):
        return '<Groups "{}">'.format(self.name)

# ================== Web Router ====================#
@app.context_processor
def inject_events():
    e=Event.query.all()
    e.sort(key=sort_by_date)
    return dict(EVENTS=e)

@app.context_processor
def inject_groups():
    return dict(GROUPS=Groups.query.all())

@app.context_processor
def inject_year():
    return dict(datetime=datetime.now())

@app.route('/')
def home():
    return render_template('pages/home.html')

@app.route('/about/')
def about():
    return render_template('pages/about.html')

@app.route('/cv/')
def cv():
    return render_template('pages/cv.html')

@app.route('/contact/')
def contact():
    return render_template('pages/contact.html')

@app.errorhandler(404)
def error_404(e):
    return render_template('errors/404.html')

if __name__ == '__main__':
    db.create_all()
    app.run(debug=True, port=5000)
    print(mimetypes.guess_type('static/style.css'))
