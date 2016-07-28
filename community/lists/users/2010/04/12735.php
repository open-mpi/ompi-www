<?
$subject_val = "Re: [OMPI users] How to debug Open MPI programs with gdb";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 22 13:25:14 2010" -->
<!-- isoreceived="20100422172514" -->
<!-- sent="Thu, 22 Apr 2010 12:25:51 -0500" -->
<!-- isosent="20100422172551" -->
<!-- name="Trent Creekmore" -->
<!-- email="mtcreekmore_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to debug Open MPI programs with gdb" -->
<!-- id="COL117-DS87B5AD9C944661E50EA15E9080_at_phx.gbl" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201004221311.50053.nemanja.ilic.81_at_gmail.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] How to debug Open MPI programs with gdb<br>
<strong>From:</strong> Trent Creekmore (<em>mtcreekmore_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-22 13:25:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12736.php">Jon Hitchcock: "[OMPI users] Treatment of SIGHUP by mpirun"</a>
<li><strong>Previous message:</strong> <a href="12734.php">Jed Brown: "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<li><strong>In reply to:</strong> <a href="12729.php">&#208;&#157;&#208;&#181;&#208;&#188;&#208;&#176;&#209;&#154;&#208;&#176; &#208;&#152;&#208;&#187;&#208;&#184;&#209;&#155; (Nemanja Ilic): "[OMPI users] How to debug Open MPI programs with gdb"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can run a X-windows server on your local machine and use the GUI for
<br>
gdb, or use Eclipse Parallel Tools Platform (<a href="http://www.eclipse.org/ptp/">http://www.eclipse.org/ptp/</a>)
<br>
that has a debugger and turn on X-Forwarding in your Secure Shell client.
<br>
<p><p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of ?????? ???? (Nemanja Ilic)
<br>
Sent: Thursday, April 22, 2010 6:12 AM
<br>
To: Open MPI User List
<br>
Subject: [OMPI users] How to debug Open MPI programs with gdb
<br>
<p>Hello,
<br>
<p>I tried to debug with command: &quot;mpirun -debugger gdb -debug -np 4
<br>
my_program&quot;
<br>
Surely,  it starts the debugger, but it doesn't start the debugging nor it
<br>
loads any of the my_program threads into the debugger. If I start debugging
<br>
manually (&quot;file my_program&quot;, then &quot;run&quot;), I can start only one thread of
<br>
my_program.
<br>
On the contrary when I debug with &quot;mpirun -np 4 xterm -e gdb
<br>
my_mpi_application&quot; the four debugger windows are started with separate
<br>
thread each, just as it should be.
<br>
Since I will be using debugger on a remote computer I can only run gdb in
<br>
console mode. Can anyone help me with this?
<br>
<p>Thank you in advance,
<br>
Best regards,
<br>
Nemanja Ilic
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12736.php">Jon Hitchcock: "[OMPI users] Treatment of SIGHUP by mpirun"</a>
<li><strong>Previous message:</strong> <a href="12734.php">Jed Brown: "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<li><strong>In reply to:</strong> <a href="12729.php">&#208;&#157;&#208;&#181;&#208;&#188;&#208;&#176;&#209;&#154;&#208;&#176; &#208;&#152;&#208;&#187;&#208;&#184;&#209;&#155; (Nemanja Ilic): "[OMPI users] How to debug Open MPI programs with gdb"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
