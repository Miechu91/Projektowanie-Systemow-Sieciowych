{extends file="main.tpl"}

{block name=top}

    <div class="l-content">
        <div class="information pure-g">
            <div class="pure-u-1 pure-u-md-1-1">
                <div class="l-box">
                    <h3 class="information-head">Logowanie</h3>
                    <p>
                    <form action="{$conf->action_root}logged" method="post" class="pure-form pure-form-aligned">
                        <fieldset>
                            <div class="pure-control-group">
                                <label for="login">Login: </label>
                                <input id="login" type="text" name="login" />
                            </div>
                            <div class="pure-control-group">
                                <label for="pass">Hasło: </label>
                                <input id="pass" type="password" name="pass" />
                            </div>
                            <div class="pure-controls">
                                <input type="submit" value="Zaloguj" class="button-choose pure-button"/>
                            </div>
                        </fieldset>
                    </form>
                    </p>
                </div>
            </div>
        </div> <!-- end information -->
    </div> <!-- end l-content -->

{/block}