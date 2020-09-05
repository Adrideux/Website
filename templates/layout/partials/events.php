
<aside id="event">
    <h1>Prochaines Dates</h1>

    {% for event in EVENTS %}
        {% if event.date.strftime("%Y%m%d%H%M") > datetime.strftime("%Y%m%d%H%M") %}
            <section class="card">
                <h1> {{ event.name }}</h1>
                <p class="date"> {{ event.date.strftime("%A %d %B %Y") }} </p>
                <p class="time"> {{ event.date.strftime("%Hh%M")}}</p>
                <p class="lieu"> {{ event.place }} </p>

                {% if event.mail != None %}
                    <a href="event.mail"> <i class="fas fa-envelope"></i> </a>
                {% endif %}
                {% if event.fb != None %}
                    <a href="event.mail"> <i class="fas fa-envelope"></i> </a>
                {% endif %}
                {% if event.insta != None %}
                    <a href="event.mail"> <i class="fas fa-envelope"></i> </a>
                {% endif %}
                {% if event.yt != None %}
                    <a href="#"></a>
                {% endif %}

                {% if event.display_socials != 0 %}
                {% include 'layout/partials/socials.html'%}
                {% endif %}

                {% if event.canceled == 1 %}
                    <h2 class="canceled">ANNULÉ</h2>
                {% endif %}
                {% if event.soldout == 1 %}
                    <h2 class="canceled">PLUS DE PLACE DISPONIBLE</h2>
                {% endif %}
                {% if event.reported == 1 %}
                    <h2 class="canceled">EVENEMENT REPORTÉ</h2>
                {% endif %}
            </section>
        {% endif %}
   {% endfor %}
</aside>
