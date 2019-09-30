<?php   


    use App\Command;
    use App\Product;
    use App\Tissus;

        $products = Product::all();
        $commands = Command::all();
        $tissuses = Tissus::all();

       // nb commands / mois
        $beginMonth =date('y-m-d h:i:s',strtotime('-15days')) ;
        $endMonth =date('y-m-d h:i:s',strtotime('+15days')) ;
        $commandsMonth = DB::table('commands')->whereBetween('created_at',[$beginMonth, $endMonth])->get();

        $jan = date('2019-01-01 00:00:00');
        $feb = date('2019-02-01 00:00:00');
        $mar = date('2019-03-01 00:00:00');
        $apr = date('2019-04-01 00:00:00');
        $may = date('2019-05-01 00:00:00');
        $jun = date('2019-06-01 00:00:00');
        $jul = date('2019-07-01 00:00:00');
        $aug = date('2019-08-01 00:00:00');
        $sep = date('2019-09-01 00:00:00');
        $oct = date('2019-010-01 00:00:00');
        $nov = date('2019-011-01 00:00:00');
        $dec = date('2019-12-01 00:00:00');
        $jan_1 = date('2019-12-31 23:59:59');

        $commandsJan = DB::table('commands')->whereBetween('created_at',[$jan,$feb])->get();
        $commandsFeb = DB::table('commands')->whereBetween('created_at',[$feb,$mar])->get();
        $commandsMar = DB::table('commands')->whereBetween('created_at',[$mar,$apr])->get();
        $commandsApr = DB::table('commands')->whereBetween('created_at',[$apr,$may])->get();
        $commandsMay = DB::table('commands')->whereBetween('created_at',[$may,$jun])->get();
        $commandsJun = DB::table('commands')->whereBetween('created_at',[$jun,$jul])->get();
        $commandsJul = DB::table('commands')->whereBetween('created_at',[$jul,$aug])->get();
        $commandsAug = DB::table('commands')->whereBetween('created_at',[$aug,$sep])->get();
        $commandsSep = DB::table('commands')->whereBetween('created_at',[$sep,$oct])->get();
        $commandsOct = DB::table('commands')->whereBetween('created_at',[$oct,$nov])->get();
        $commandsNov = DB::table('commands')->whereBetween('created_at',[$nov,$dec])->get();
        $commandsDec = DB::table('commands')->whereBetween('created_at',[$dec,$jan_1])->get();

        // nb commands en cours : 0 = envoyé | 1 = en cours 
        $commandsInProgress =  DB::table('commands')->where('statut', '=', 1)->get();

?>