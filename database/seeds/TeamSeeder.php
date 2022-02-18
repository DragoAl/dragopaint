<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'team_name'=> 'Acf Fiorentina',
            'start_championship_year' => 1981,
            'end_championship_year' => 1982,
            'production_date' => '2015-09-01',
            'jersey' => 'Prima maglia', 
            'championship' => 'Serie A' 

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Acf Fiorentina',
            'start_championship_year' => 1999,
            'end_championship_year' => 2000,
            'production_date' => '2015-09-01',
            'championship' => 'Serie A'           

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Acf Fiorentina',
            'start_championship_year' => 2012,
            'end_championship_year' => 2013,
            'production_date' => '2015-10-01',
            'championship' => 'Serie A'           

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Acf Fiorentina',
            'start_championship_year' => 1984,
            'end_championship_year' => 1985,
            'production_date' => '2015-10-01',
            'championship' => 'Serie A'           

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Acf Fiorentina',
            'start_championship_year' => 1995,
            'end_championship_year' => 1996,
            'production_date' => '2015-10-01',
            'jersey' => 'Seconda maglia',
            'championship' => 'Serie A',           
            'competition' => 'Coppa Italia'
        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Hellas Verona',
            'start_championship_year' => 1984,
            'end_championship_year' => 1985,
            'production_date' => '2015-11-01',
            'championship' => 'Serie A'           

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Aek Atene',
            'start_championship_year' => 1994,
            'end_championship_year' => 1995,
            'production_date' => '2015-12-01',
            'championship' => 'Souper Ligka Ellada',
            'competition' => 'Champions League'
        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Germania',
            'start_championship_year' => 1990,
            'end_championship_year' => 1990,
            'production_date' => '2015-12-01',
            'championship' => 'Nazionali'
        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Manchester City',
            'start_championship_year' => 2013,
            'end_championship_year' => 2014,
            'production_date' => '2016-01-01',
            'jersey' => 'Seconda maglia',
            'championship' => 'Premier League'

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Torino Fc',
            'start_championship_year' => 2015,
            'end_championship_year' => 2016,
            'production_date' => '2016-01-01',
            'jersey' => 'Terza maglia',
            'championship' => 'Serie A'

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Juventus Fc',
            'start_championship_year' => 1994,
            'end_championship_year' => 1995,
            'production_date' => '2016-01-01',
            'jersey' => 'Seconda Maglia',
            'championship' => 'Serie A',
            'competition' => 'Champions League'

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Aek Atene',
            'start_championship_year' => 1993,
            'end_championship_year' => 1994,
            'production_date' => '2016-01-01',
            'championship' => 'Souper Ligka Ellada',
            
        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Ac Milan',
            'start_championship_year' => 2015,
            'end_championship_year' => 2016,
            'production_date' => '2016-01-01',
            'jersey' => 'Seconda Maglia',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'As Roma',
            'start_championship_year' => 2015,
            'end_championship_year' => 2016,
            'production_date' => '2016-02-01',
            'jersey' => 'terza Maglia',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'West Ham United',
            'start_championship_year' => 2002,
            'end_championship_year' => 2003,
            'production_date' => '2016-01-01',
            'jersey' => 'Seconda Maglia',
            'championship' => 'Premier League',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Celtic Fc',
            'start_championship_year' => 2015,
            'end_championship_year' => 2016,
            'production_date' => '2016-03-01',
            'jersey' => 'Seconda Maglia',
            'championship' => 'Scottish Premiership',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Manchester United',
            'start_championship_year' => 1967,
            'end_championship_year' => 1968,
            'production_date' => '2016-03-01',
            'jersey' => 'Seconda Maglia',
            'championship' => 'Premier League',
            'competition' => 'Champions League'

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Sheffield Wednesday',
            'start_championship_year' => 2015,
            'end_championship_year' => 2016,
            'production_date' => '2016-03-01',
            'jersey' => 'Prima Maglia',
            'championship' => 'Championship',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Wycombe Wanderers',
            'start_championship_year' => 2011,
            'end_championship_year' => 2012,
            'production_date' => '2016-03-01',
            'jersey' => 'Prima Maglia',
            'championship' => 'League One',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'VfL Wolfsburg',
            'start_championship_year' => 2013,
            'end_championship_year' => 2014,
            'production_date' => '2016-03-01',
            'jersey' => 'Prima Maglia',
            'championship' => 'Bundesliga',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Leicester City',
            'start_championship_year' => 2014,
            'end_championship_year' => 2015,
            'production_date' => '2016-04-01',
            'jersey' => 'Prima Maglia',
            'championship' => 'Premier League',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Tottenham Hotspur',
            'start_championship_year' => 2014,
            'end_championship_year' => 2015,
            'production_date' => '2016-05-01',
            'jersey' => 'Prima Maglia',
            'championship' => 'Premier League',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Birmingham City',
            'start_championship_year' => 2014,
            'end_championship_year' => 2015,
            'production_date' => '2016-06-01',
            'jersey' => 'Seconda Maglia',
            'championship' => 'Premier League',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Inghilterra',
            'start_championship_year' => 1982,
            'end_championship_year' => 1982,
            'production_date' => '2016-05-01',
            'jersey' => 'Seconda Maglia',
            'championship' => 'Nazionali',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'SS Lazio',
            'start_championship_year' => 2009,
            'end_championship_year' => 2010,
            'production_date' => '2016-06-01',
            'jersey' => 'Terza Maglia',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Celtic Fc',
            'start_championship_year' => 1987,
            'end_championship_year' => 1988,
            'production_date' => '2016-06-01',
            'jersey' => 'Prima Maglia',
            'championship' => 'Scottish Premiership',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Liverpool Fc',
            'start_championship_year' => 2013,
            'end_championship_year' => 2014,
            'production_date' => '2016-09-01',
            'jersey' => 'Terza Maglia',
            'championship' => 'Premier League',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'SSC Napoli',
            'start_championship_year' => 2015,
            'end_championship_year' => 2016,
            'production_date' => '2016-07-01',
            'jersey' => 'Prima Maglia',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Olanda',
            'start_championship_year' => 2013,
            'end_championship_year' => 2013,
            'production_date' => '2016-10-01',
            'jersey' => 'Seconda Maglia',
            'championship' => 'Nazionali',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Werder Brema',
            'start_championship_year' => 1990,
            'end_championship_year' => 1991,
            'production_date' => '2016-06-01',
            'jersey' => 'Seconda Maglia',
            'championship' => 'Bundesliga',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Portogallo',
            'start_championship_year' => 2012,
            'end_championship_year' => 2012,
            'production_date' => '2016-09-01',
            'jersey' => 'Seconda Maglia',
            'championship' => 'Nazionali',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Fc Crotone',
            'start_championship_year' => 2015,
            'end_championship_year' => 2016,
            'production_date' => '2016-09-01',
            'jersey' => 'Seconda Maglia',
            'championship' => 'Serie B',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Fc Inter',
            'start_championship_year' => 2010,
            'end_championship_year' => 2011,
            'production_date' => '2016-09-01',
            'jersey' => 'Terza Maglia',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Juventus Fc',
            'start_championship_year' => 2014,
            'end_championship_year' => 2015,
            'production_date' => '2016-07-01',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Tottenham Hotspur',
            'start_championship_year' => 2015,
            'end_championship_year' => 2016,
            'production_date' => '2016-09-01',
            'jersey' => 'Seconda Maglia',
            'championship' => 'Premier League',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Montevarchi',
            'production_date' => '2016-09-01',
            'championship' => 'Serie D',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Juventus Fc',
            'start_championship_year' => 2016,
            'end_championship_year' => 2017,
            'production_date' => '2016-09-01',
            'jersey' => 'Terza Maglia',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Hellas Verona',
            'start_championship_year' => 1988,
            'end_championship_year' => 1989,
            'production_date' => '2017-04-01',
            'jersey' => 'Seconda Maglia',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Pescara Calcio',
            'production_date' => '2017-04-01',
            'championship' => 'Serie B',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Arsenal Fc',
            'start_championship_year' => 2005,
            'end_championship_year' => 2006,
            'production_date' => '2016-09-01',
            'jersey' => 'Seconda Maglia',
            'championship' => 'Premier League',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Subbuteo Lab',
            'production_date' => '2016-09-01',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Juventus Fc',
            'start_championship_year' => 2016,
            'end_championship_year' => 2017,
            'production_date' => '2016-10-01',
            'jersey' => 'Prima Maglia',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Club Subbuteo Castelfiorentino',
            'production_date' => '2016-09-01',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Geona',
            'start_championship_year' => 1996,
            'end_championship_year' => 1997,
            'production_date' => '2016-10-01',
            'jersey' => 'Seconda Maglia',
            'championship' => 'Serie B',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'As Roma',
            'start_championship_year' => 1983,
            'end_championship_year' => 1984,
            'production_date' => '2016-11-01',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Torino Fc',
            'start_championship_year' => 2016,
            'end_championship_year' => 2017,
            'production_date' => '2017-01-01',
            'jersey' => 'Seconda Maglia',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'SSC Napoli',
            'start_championship_year' => 2016,
            'end_championship_year' => 2017,
            'production_date' => '2017-01-01',
            'jersey' => 'Seconda Maglia',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Olympique Marsiglia',
            'start_championship_year' => 2016,
            'end_championship_year' => 2017,
            'production_date' => '2017-01-01',
            'jersey' => 'Prima Maglia',
            'championship' => 'Ligue 1',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'FC St.Pauli',
            'start_championship_year' => 2016,
            'end_championship_year' => 2017,
            'production_date' => '2017-05-01',
            'jersey' => 'Seconda Maglia',
            'championship' => '2.Bundesliga',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'As Roma',
            'start_championship_year' => 2002,
            'end_championship_year' => 2003,
            'production_date' => '2016-11-01',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Geona',
            'start_championship_year' => 1986,
            'end_championship_year' => 1987,
            'production_date' => '2016-12-01',
            'jersey' => 'Seconda Maglia',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Acf Fiorentina',
            'start_championship_year' => 2016,
            'end_championship_year' => 2017,
            'production_date' => '2016-12-01',
            'jersey' => 'Seconda Maglia',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Us Lecce',
            'start_championship_year' => 1999,
            'end_championship_year' => 2000,
            'production_date' => '2016-11-01',
            'jersey' => 'Terza Maglia',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'SS Lazio',
            'start_championship_year' => 1999,
            'end_championship_year' => 2000,
            'production_date' => '2016-11-01',
            'jersey' => 'Terza Maglia',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Acf Fiorentina',
            'start_championship_year' => 1981,
            'end_championship_year' => 1982,
            'production_date' => '2017-03-01',
            'jersey' => 'Seconda Maglia',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Fc Barcellona',
            'start_championship_year' => 2014,
            'end_championship_year' => 2015,
            'production_date' => '2016-11-01',
            'jersey' => 'Prima Maglia',
            'championship' => 'LaLiga',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Real Madrid',
            'start_championship_year' => 2015,
            'end_championship_year' => 2016,
            'production_date' => '2017-03-01',
            'jersey' => 'Prima Maglia',
            'championship' => 'LaLiga',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Crystal palace',
            'start_championship_year' => 2016,
            'end_championship_year' => 2017,
            'production_date' => '2017-01-01',
            'jersey' => 'Seconda Maglia',
            'championship' => 'Premier League',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Real Madrid',
            'start_championship_year' => 2015,
            'end_championship_year' => 2016,
            'production_date' => '2017-03-01',
            'jersey' => 'Seconda Maglia',
            'championship' => 'LaLiga',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Geona',
            'start_championship_year' => 1983,
            'end_championship_year' => 1984,
            'production_date' => '2016-12-01',
            'jersey' => 'Prima Maglia',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Juventus Fc',
            'start_championship_year' => 1985,
            'end_championship_year' => 1986,
            'production_date' => '2016-12-01',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Flamengo',
            'production_date' => '2017-01-01',
            'championship' => 'Campeonato Brasileiro Série A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Grêmio',
            'production_date' => '2017-01-01',
            'championship' => 'Campeonato Brasileiro Série A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Juventus Fc',
            'start_championship_year' => 2005,
            'end_championship_year' => 2006,
            'production_date' => '2017-01-01',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Ac Milan',
            'start_championship_year' => 1978,
            'end_championship_year' => 1979,
            'production_date' => '2017-01-01',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Ternana Calcio',
            'start_championship_year' => 1972,
            'end_championship_year' => 1973,
            'production_date' => '2017-01-01',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Ternana Calcio',
            'start_championship_year' => 2016,
            'end_championship_year' => 2017,
            'production_date' => '2017-01-01',
            'jersey' => 'Terza Maglia',
            'championship' => 'Serie B',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Manchester United',
            'start_championship_year' => 1999,
            'end_championship_year' => 2000,
            'production_date' => '2017-02-01',
            'championship' => 'Premier League',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'As Argentana',
            'start_championship_year' => 1991,
            'end_championship_year' => 1992,
            'production_date' => '2017-02-01',
            'championship' => 'Eccellenza Emilia-Romagna',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Ac ChievoVerona',
            'start_championship_year' => 2002,
            'end_championship_year' => 2003,
            'production_date' => '2017-02-01',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Cagliari',
            'start_championship_year' => 1985,
            'end_championship_year' => 1986,
            'production_date' => '2017-03-01',
            'championship' => 'Serie B',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Udinese Calcio',
            'start_championship_year' => 1997,
            'end_championship_year' => 1998,
            'production_date' => '2017-03-01',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Fc Barcellona',
            'start_championship_year' => 2016,
            'end_championship_year' => 2017,
            'production_date' => '2017-04-01',
            'jersey' => 'Seconda Maglia',
            'championship' => 'LaLiga',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'SS Lazio',
            'start_championship_year' => 1979,
            'end_championship_year' => 1980,
            'production_date' => '2017-03-01',
            'jersey' => 'Seconda Maglia',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Chelsea Fc',
            'start_championship_year' => 2016,
            'end_championship_year' => 2017,
            'production_date' => '2017-04-01',
            'jersey' => 'Seconda Maglia',
            'championship' => 'Premier League',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'US Sampdoria',
            'start_championship_year' => 2016,
            'end_championship_year' => 2017,
            'production_date' => '2017-04-01',
            'jersey' => 'Seconda Maglia',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Ajax',
            'start_championship_year' => 1994,
            'end_championship_year' => 1995,
            'production_date' => '2017-04-01',
            'championship' => 'Eredivise',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Atalanta Bc',
            'start_championship_year' => 2016,
            'end_championship_year' => 2017,
            'production_date' => '2017-04-01',
            'jersey' => 'prima Maglia',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Ac Milan',
            'start_championship_year' => 2011,
            'end_championship_year' => 2012,
            'production_date' => '2017-05-01',
            'jersey' => 'Prima Maglia',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Inter Fc',
            'start_championship_year' => 2009,
            'end_championship_year' => 2010,
            'production_date' => '2017-05-01',
            'jersey' => 'Prima Maglia',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'SS Lazio',
            'start_championship_year' => 2014,
            'end_championship_year' => 2015,
            'production_date' => '2017-05-01',
            'jersey' => 'Prima Maglia girone Ritorno',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Us Catanzaro',
            'start_championship_year' => 1979,
            'end_championship_year' => 1980,
            'production_date' => '2017-06-01',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Pescara Calcio',
            'start_championship_year' => 1979,
            'end_championship_year' => 1980,
            'production_date' => '2017-06-01',
            'championship' => 'Serie B',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Ac Pisa',
            'start_championship_year' => 1985,
            'end_championship_year' => 1986,
            'production_date' => '2017-05-01',
            'jersey' => 'Seconda Maglia',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Noi la Sorgente Verona',
            'production_date' => '2017-05-01',
            'championship' => 'Seconda Categoria',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'SS Lazio',
            'start_championship_year' => 1982,
            'end_championship_year' => 1983,
            'production_date' => '2017-04-01',
            'jersey' => 'Prima Maglia',
            'championship' => 'Serie B',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Senegal',
            'start_championship_year' => 2017,
            'end_championship_year' => 2017,
            'production_date' => '2017-05-01',
            'jersey' => 'Seconda Maglia',
            'championship' => 'Nazionali',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Borussia Dortumund',
            'start_championship_year' => 2012,
            'end_championship_year' => 2013,
            'production_date' => '2017-05-01',
            'championship' => 'Bundesliga',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Ac Pisa',
            'start_championship_year' => 1987,
            'end_championship_year' => 1988,
            'production_date' => '2017-05-01',
            'jersey' => 'Seconda Maglia',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Perugia',
            'start_championship_year' => 1978,
            'end_championship_year' => 1979,
            'production_date' => '2017-05-01',
            'jersey' => 'Terza Maglia',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Real Madrid',
            'start_championship_year' => 2016,
            'end_championship_year' => 2017,
            'production_date' => '2017-07-01',
            'jersey' => 'Terza Maglia',
            'championship' => 'LaLiga',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Ac Milan',
            'start_championship_year' => 2004,
            'end_championship_year' => 2005,
            'production_date' => '2017-07-01',
            'jersey' => 'Prima Maglia',
            'championship' => 'Serie A',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Ac Monza',
            'start_championship_year' => 1988,
            'end_championship_year' => 1989,
            'production_date' => '2017-07-01',
            'jersey' => 'Prima Maglia',
            'championship' => 'Serie B',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Ac Monza',
            'start_championship_year' => 2016,
            'end_championship_year' => 2017,
            'production_date' => '2017-07-01',
            'jersey' => 'Terza Maglia',
            'championship' => 'Serie D',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Borussia Dortmund',
            'start_championship_year' => 2016,
            'end_championship_year' => 2017,
            'production_date' => '2017-07-01',
            'championship' => 'Bundesliga',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Tottenham Hotspur',
            'start_championship_year' => 2017,
            'end_championship_year' => 2018,
            'production_date' => '2017-07-01',
            'championship' => 'Premier League',

        ]);
        DB::table('teams')->insert([
            'team_name'=> 'Tottenham Hotspur',
            'start_championship_year' => 2015,
            'end_championship_year' => 2016,
            'production_date' => '2017-07-01',
            'jersey' => 'Seconda Maglia',
            'championship' => 'Premier League',

        ]);
        

        
    }
}
