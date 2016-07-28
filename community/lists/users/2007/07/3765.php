<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 25 10:22:41 2007" -->
<!-- isoreceived="20070725142241" -->
<!-- sent="Wed, 25 Jul 2007 17:22:28 +0300 (IDT)" -->
<!-- isosent="20070725142228" -->
<!-- name="David Erukhimovich" -->
<!-- email="daviderukh_at_[hidden]" -->
<!-- subject="[OMPI users] Error message when running openmpi on multiple machines" -->
<!-- id="010707251713001.1871_at_os-09.cs.huji.ac.il" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> David Erukhimovich (<em>daviderukh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-25 10:22:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3766.php">Ricardo Reis: "Re: [OMPI users] open-mpi 1.2.3 on Linux ia32 and Intel 10.0.25"</a>
<li><strong>Previous message:</strong> <a href="3764.php">Andrey Kaliazin: "Re: [OMPI users] openmpi support ignored"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3778.php">Jeff Squyres: "Re: [OMPI users] Error message when running openmpi on multiple machines"</a>
<li><strong>Reply:</strong> <a href="3778.php">Jeff Squyres: "Re: [OMPI users] Error message when running openmpi on multiple machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I've downloaded the 1.2.3 version of openmpi and compiled it just as said 
<br>
in the README.
<br>
Now I an trying to run ot on the University grid.
<br>
I've set the env. var OMPI_MCA_pls_rsh_agent to rsh.
<br>
<p>When I'm running the followind cmd:
<br>
<p>mpiexec -np 2 hostname
<br>
<p>it runs fine.
<br>
<p>But when I trying to run it on more computers with the attached 
<br>
machinefile:
<br>
<p>mpiexec --machinefile mpd.hosts -np 2 hostname
<br>
<p>I get the following error massage:
<br>
<p>[mos31:31104] [0,0,0] ORTE_ERROR_LOG: Data unpack had inadequate space in 
<br>
file dss/dss_unpack.c at line 90
<br>
[mos31:31104] [0,0,0] ORTE_ERROR_LOG: Data unpack had inadequate space in 
<br>
file gpr_replica_cmd_processor.c at line 361
<br>
<p>reapeted many times.
<br>
<p>Also when I try to run it the debugger (gdb) it runs fine.
<br>
<p>Anybody know where is the problem?
<br>
<p>Regards
<br>
<p>--David
<br>
<p>

<br><hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3765/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<hr>
<ul>
<li>TEXT/PLAIN attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3765/mpd.hosts">mpd.hosts</a>
</ul>
<!-- attachment="mpd.hosts" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3766.php">Ricardo Reis: "Re: [OMPI users] open-mpi 1.2.3 on Linux ia32 and Intel 10.0.25"</a>
<li><strong>Previous message:</strong> <a href="3764.php">Andrey Kaliazin: "Re: [OMPI users] openmpi support ignored"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3778.php">Jeff Squyres: "Re: [OMPI users] Error message when running openmpi on multiple machines"</a>
<li><strong>Reply:</strong> <a href="3778.php">Jeff Squyres: "Re: [OMPI users] Error message when running openmpi on multiple machines"</a>
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
