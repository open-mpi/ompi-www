#!/usr/bin/perl
use Sys::Hostname;

open (MYFILE, '>>testoutput.txt');


$| = 1;
print        "running on ", hostname, "\n";
print MYFILE "running on ", hostname, "\n";

$SIG{INT}  = sub { print "SIGINT  received\n"; print MYFILE "SIGINT  received\n"; exit 0 };
$SIG{TERM} = sub { print "SIGTERM received\n"; print MYFILE "SIGTERM received\n"; exit 0 };

sleep 1000000000; 

close (MYFILE); 

