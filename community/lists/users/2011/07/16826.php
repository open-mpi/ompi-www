<?
$subject_val = "[OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  5 16:14:15 2011" -->
<!-- isoreceived="20110705201415" -->
<!-- sent="Tue, 5 Jul 2011 13:14:06 -0700" -->
<!-- isosent="20110705201406" -->
<!-- name="Steve Kargl" -->
<!-- email="sgk_at_[hidden]" -->
<!-- subject="[OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD" -->
<!-- id="20110705201406.GA63225_at_troutmask.apl.washington.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD<br>
<strong>From:</strong> Steve Kargl (<em>sgk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-05 16:14:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16827.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16825.php">Ralph Castain: "Re: [OMPI users] Running MPI jobs from external Hard Disk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16827.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="16827.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have an application that appears to function as I expect
<br>
when compiled with openmpi-1.4.2 on FreeBSD 9.0.  But, it
<br>
appears to hang during communication between nodes.  What
<br>
follows is the long version.
<br>
<p>I configure 1.4.2 with 
<br>
<p>./configure --prefix=/usr/local/openmpi-1.4.2 \
<br>
--enable-mpirun-prefix-by-default --disable-shared --enable-static
<br>
<p>The Fortran compiler is gfortran 4.5.3.  I rebuild my application
<br>
and launch the app from node10 with
<br>
<p>% /usr/local/openmpi-1.4.2/bin/mpiexec -mca btl tcp,self -machinefile mf1 \
<br>
&nbsp;&nbsp;-np 4 sasmp sas.in
<br>
<p>where the machine file is
<br>
<p>% cat mf1
<br>
node10 slots=3
<br>
node11 slots=4
<br>
<p>Using top(1) on node10 and node11, I see 
<br>
<p>node10
<br>
&nbsp;&nbsp;PID USERNAME    THR PRI NICE   SIZE    RES STATE   C   TIME   WCPU COMMAND
<br>
74158 kargl         1  65    0   302M   293M CPU1    1  57:06 99.12% sasmp
<br>
74160 kargl         1  65    0   306M   298M CPU0    0  57:06 99.07% sasmp
<br>
74159 kargl         1  65    0   306M   298M CPU3    3  57:06 99.02% sasmp
<br>
<p>node11
<br>
&nbsp;&nbsp;PID USERNAME    THR PRI NICE   SIZE    RES STATE   C   TIME   WCPU COMMAND
<br>
13144 kargl         1  48    0   306M   297M CPU3    3  55:55 99.02% sasmp
<br>
<p>The above is the expected process information, and more important
<br>
the application is producing the right answer.
<br>
<p>Now, if I repeat everything above for 1.4.3, I get
<br>
<p>./configure --prefix=/usr/local/openmpi-1.4.3 \
<br>
--enable-mpirun-prefix-by-default --disable-shared --enable-static
<br>
<p>Rebuild my application and launch the app from node10 with
<br>
<p>% /usr/local/openmpi-1.4.3/bin/mpiexec -mca btl tcp,self -machinefile mf1 \
<br>
&nbsp;&nbsp;-np 4 sasmp sas.in
<br>
<p>node10
<br>
&nbsp;&nbsp;PID USERNAME    THR PRI NICE   SIZE    RES STATE   C   TIME   WCPU COMMAND
<br>
74460 kargl         1  66    0   302M   291M CPU2    2   3:15 99.03% sasmp
<br>
74462 kargl         1  66    0   302M   291M CPU3    3   3:15 99.03% sasmp
<br>
74461 kargl         1  66    0 14472K  4616K CPU1    1   3:15 99.03% sasmp
<br>
<p>node11
<br>
&nbsp;&nbsp;PID USERNAME    THR PRI NICE   SIZE    RES STATE   C   TIME   WCPU COMMAND
<br>
13298 kargl         1  49    0 14472K  3336K CPU3    3   3:11 99.03% sasmp
<br>
<p>I've left the application running for up to 12 minutes, and it never
<br>
reaches the ~300 MB SIZE nor 293M RES on node11 and the one process
<br>
of node10.
<br>
<p>Now, if I reduce -np from 4 to 3, then only 3 processes are started
<br>
on node10, and I get the expected results.  So, as soon as I try to
<br>
send something over tcp, the application stalls.  Any idea on how
<br>
I might debug this problem?
<br>
<p><pre>
-- 
Steve
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16827.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16825.php">Ralph Castain: "Re: [OMPI users] Running MPI jobs from external Hard Disk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16827.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="16827.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
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
