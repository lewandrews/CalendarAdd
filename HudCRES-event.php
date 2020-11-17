header("Content-Type: text/Calendar");
header("Content-Disposition: inline; filename=calendar.ics");
echo "BEGIN:VCALENDAR\n";
echo "VERSION:2.0\n";
echo "PRODID:-//Foobar Corporation//NONSGML Foobar//EN\n";
echo "METHOD:REQUEST\n"; // required by Outlook
echo "BEGIN:VEVENT\n";
echo "UID:".date('Ymd').'T'.date('His')."-".rand()."-example.com\n"; // required by Outlook
echo "DTSTAMP:".date('Ymd').'T'.date('His')."\n"; // required by Outlook
echo "DTSTART:20201118T160000\n"; 
echo "SUMMARY:HudCRES Event\n";
echo "DESCRIPTION: HudCRES Event, Exducation and Extremism\n";
echo "END:VEVENT\n";
echo "END:VCALENDAR\n";
