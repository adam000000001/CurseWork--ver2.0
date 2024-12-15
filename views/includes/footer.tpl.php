</div>

    <footer>
        <div class="blocks container">
            <div>
                <span class="logo">logo</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, necessitatibus.</p>
            </div>
            <div>
                <h4>About Us</h4>
                <ul>
                    <li>qwerty</li>
                    <li>qwerty</li>
                    <li>qwerty</li>
                    <li>qwerty</li>
                </ul>
            </div>
            <div>
                <h4>Contact Us</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos, excepturi?</p>
                <p>89913291206</p>
            </div>
        </div>
        <hr>
        <p>Copyright ® 2021 Lorem All rights Rcerved</p>
    </footer>

    <script>
        function checkEmail() {
            let email = document.querySelector('#emailField').value;
            if(!email.includes('@')) alert('Нет символа @');
            else if(!email.includes('.')) alert('Нет символа .');
            else alert('Все Отлично!');
        }
    </script>
</body>

</html>