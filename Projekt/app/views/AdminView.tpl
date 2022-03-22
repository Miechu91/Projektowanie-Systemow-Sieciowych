{extends file="main.tpl"}

{block name=top}

    <div class="l-content">
        <div class="information pure-g">
            <div class="pure-u-1 pure-u-md-1-1">
                <div class="l-box">
                    <h3 class="information-head">Panel administratora</h3>
                    <table id="tab_people" class="pure-table pure-table-bordered">
                        <p>Lista użytkowników w systemie:</p>
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Imię</th>
                            <th>Nazwisko</th>
                            <th>Adres e-mail</th>
                            <th>Login</th>
                            <th>Rola</th>
                        </tr>
                        </thead>
                        <tbody>
                        {foreach $users as $u}
                            {strip}
                                <tr>
                                    <td>{$u["id"]}</td>
                                    <td>{$u["name"]}</td>
                                    <td>{$u["surname"]}</td>
                                    <td>{$u["mail"]}</td>
                                    <td>{$u["login"]}</td>
                                    {if $u["id_role"] == 1}
                                        <td>{$u["id_role"]} - Admin</td>
                                    {elseif $u["id_role"] == 2}
                                        <td>{$u["id_role"]} - Moderator</td>
                                    {else}
                                        <td>{$u["id_role"]} - User</td>
                                    {/if}
                                </tr>
                            {/strip}
                        {/foreach}
                        </tbody>
                    </table>
                    <p>Aby zmienić rolę użytkownikowi wprować jego ID oraz numer roli która chcesz mu przypisać:</p>
                    <p>Legenda - role:</p>
                    1 - Admin <br />
                    2 - Moderator<br />
                    3 - User<br />
                    <p>
                    <form action="{$conf->action_root}changerole" method="post" class="pure-form pure-form-aligned">
                        <fieldset>
                            <div class="pure-control-group">
                                <label for="id_user">ID użytkownika: </label>
                                <input id="id_user" type="text" name="id_user" />
                            </div>
                            <div class="pure-control-group">
                                <label for="id_role">Numer roli: </label>
                                <input id="id_role" type="text" name="id_role" />
                            </div>
                            <div class="pure-controls">
                                <input type="submit" value="Zmień rolę" class="button-choose pure-button"/>
                            </div>
                        </fieldset>
                    </form>
                    </p>
                </div>
            </div>
        </div> <!-- end information -->
    </div> <!-- end l-content -->

{/block}