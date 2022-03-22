{extends file="main.tpl"}

{block name=top}

    <div class="l-content">
        <div class="information pure-g">
            <div class="pure-u-1 pure-u-md-1-1">
                <div class="l-box">
                    <h3 class="information-head">Panel moderatora</h3>
                    <p>Lista rezerwacji do zaakceptowania:</p>
                    <table id="tab_people" class="pure-table pure-table-bordered">
                        <thead>
                        <tr>
                            <th>Numer <br />zamówienia</th>
                            <th>Imię <br />zamawiającego</th>
                            <th>Nazwisko <br />zamawiającego</th>
                            <th>Marka <br />samochodu</th>
                            <th>Model <br />samochodu</th>
                            <th>Opcje</th>
                        </tr>
                        </thead>
                        <tbody>
                        {foreach $people as $p}
                            {strip}
                                <tr>
                                    <td>{$p["id"]}</td>
                                    <td>{$p["name"]}</td>
                                    <td>{$p["surname"]}</td>
                                    <td>{$p["marka"]}</td>
                                    <td>{$p["model"]}</td>
                                    <td>
                                        <a class="button-small pure-button" href="{$conf->action_url}resAccept/{$p['id']}">Zatwierdź</a>
                                        &nbsp;
                                        <a class="button-small pure-button" href="{$conf->action_url}resDelete/{$p['id']}">Anuluj</a>
                                    </td>
                                </tr>
                            {/strip}
                        {/foreach}
                        </tbody>
                    </table>


                </div>
            </div>
            <div class="pure-u-1 pure-u-md-1-1">
                <div class="l-box">
                    <p>Lista zaakceptowanych rezerwacji:</p>
                    <table id="tab_people" class="pure-table pure-table-bordered">
                        <thead>
                        <tr>
                            <th>Numer <br />zamówienia</th>
                            <th>Imię <br />zamawiającego</th>
                            <th>Nazwisko <br />zamawiającego</th>
                            <th>Marka <br />samochodu</th>
                            <th>Model <br />samochodu</th>
                            <th>Opcje</th>
                        </tr>
                        </thead>
                        <tbody>
                        {foreach $people2 as $p}
                            {strip}
                                <tr>
                                    <td>{$p["id"]}</td>
                                    <td>{$p["name"]}</td>
                                    <td>{$p["surname"]}</td>
                                    <td>{$p["marka"]}</td>
                                    <td>{$p["model"]}</td>
                                    <td>
                                        <a class="button-small pure-button" href="{$conf->action_url}resDelete/{$p['id']}">Anuluj</a>
                                    </td>
                                </tr>
                            {/strip}
                        {/foreach}
                        </tbody>
                    </table>


                </div>
            </div>
        </div> <!-- end information -->
    </div> <!-- end l-content -->

{/block}