<div class="header_container">
    <div class ="header">
        <a href="{{ route('home') }}">
            <div class="logo">
                <span><b>I</b></span>
                <span><b>N</b></span>
                <span><b>F</b></span>
                <span><b>O</b></span>
                <span>P</span>
                <span>E</span>
                <span>L</span>
                <span>I</span>
                <span>S</span>
            </div>
        </a>
        <div class="mv_icons">
            <span class="movies_icon">
                <a href="{{ route('directors') }}">🎬</a>
                <p>Directores</p>
            </span>
            <span class="movies_icon">
                <a href="{{ route('actors') }}">👤</a>
                <p>Actores</p>
            </span>
            <span class="movies_icon">
                <a href="{{ route('addMovie') }}">➕</a>
                <p>Añadir Película</p>
            </span>
            <span class="movies_icon">
                <a href="{{ route('list') }}">🎞️</a>
                <p>Películas</p>
            </span>
        </div>

    </div>
</div>
