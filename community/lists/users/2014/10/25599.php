<?
$subject_val = "[OMPI users] MPI_Init seems to hang, but works after a minute or two";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 03:32:01 2014" -->
<!-- isoreceived="20141027073201" -->
<!-- sent="Mon, 27 Oct 2014 08:32:07 +0100" -->
<!-- isosent="20141027073207" -->
<!-- name="maxinator333" -->
<!-- email="maxinator333_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Init seems to hang, but works after a minute or two" -->
<!-- id="544DF4F7.8010906_at_googlemail.com" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Init seems to hang, but works after a minute or two<br>
<strong>From:</strong> maxinator333 (<em>maxinator333_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-27 03:32:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25600.php">Oscar Vega-Gisbert: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25598.php">maxinator333: "[OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25601.php">Marco Atzeri: "Re: [OMPI users] MPI_Init seems to hang, but works after a minute or two"</a>
<li><strong>Reply:</strong> <a href="25601.php">Marco Atzeri: "Re: [OMPI users] MPI_Init seems to hang, but works after a minute or two"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p><p>After compiling and running a MPI program, it seems to hang at 
<br>
MPI_Init(), but it eventually will work after a minute or two.
<br>
<p>While the problem occured on my Notebook it did not on my desktop PC. 
<br>
Both run on Win 7, cygwin 64 Bit, OpenMPI version 1.8.3 r32794 
<br>
(ompi_info), g++ v 4.8.3. I actually synced the cygwin installations 
<br>
later on, and it still didn't work, but it did for a short time after a 
<br>
restart...
<br>
<p>When I started a program on my desktop PC my Firewall Comodo 5.10 
<br>
notified me about orterun.exe (mpirun is only a symlink to orterun) and 
<br>
myprogram.exe. After I (permanently) allowed these two programs the 
<br>
started program still didn't resume execution. After canceling the 
<br>
program and restarting it, the program ran without problems, meaning it 
<br>
ran fast. Because of this, it seems to me that OpenMPI maybe has only 
<br>
insufficient error-handling if it can't connect instantly. Maybe this is 
<br>
somehow related to the problem?
<br>
<p>The problem existed quite some months on my notebook, so I DID restart 
<br>
the notebook before without the problem being solved. I also have Ubuntu 
<br>
on that notebook and there I can compile and run MPI programs just fine.
<br>
<p>I'm using Comodo Firewall 5.10. on my Desktop and absolutely no 
<br>
Firewall, not even the Windows Firewall (deactivated) on my Notebook. 
<br>
Installing Comodo 5.10 on my notebook didn't help either. But everything 
<br>
worked after restarting, so maybe the Firewall wasn't completely in 
<br>
place yet? But the Installation program didn't prompt me to restart and 
<br>
the Firewall was already working, so ...
<br>
<p>A compiled version from my desktop PC did run on my notebook with 
<br>
mpirun... Alas I couldn't replicate this and I tried for hours now. 
<br>
Because of this I thought the error lay in the compiler or 
<br>
OpenMPI-libraries, but it seems it only works at complete random times.
<br>
<p>After syncing my cygwin installation on my notebook with the one on my 
<br>
desktop, installing a firewall where I allowed all affected programs and 
<br>
restarting my notebook it also shortly worked, but again after that it 
<br>
didn't, so this &quot;fix&quot; may have coincided with a &quot;good&quot; time.
<br>
<p>Other people have stories of their VPN software interfering with OpenMPI 
<br>
and causing exactly these problems, but I don't have such a software 
<br>
running.
<br>
<p>Things I also fruitlessly tried:
<br>
<p>&nbsp;&nbsp;* closing programs which could jam TCP-IP connections
<br>
&nbsp;&nbsp;* ping 127.0.0.1 works &lt;1ms
<br>
&nbsp;&nbsp;* running bash as administrator
<br>
&nbsp;&nbsp;* running orterun/mpirun from windows cmd instead of cygwin-bash
<br>
&nbsp;&nbsp;* stopping Windows Firewall Service and Windows Defender completely
<br>
&nbsp;&nbsp;* using MPI_Init(NULL,NULL); instead of MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;* compiling with gcc instead of g++
<br>
&nbsp;&nbsp;* the program works fine, if I don't start it with mpirun, but it also
<br>
&nbsp;&nbsp;&nbsp;&nbsp;doesn't work, if I start it with mpirun -n 1
<br>
&nbsp;&nbsp;* update Windows
<br>
&nbsp;&nbsp;* using safe mode (with network drivers)
<br>
&nbsp;&nbsp;* trying to debug it (I can't get a useful backtrace to the MPI_init call)
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25599/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25600.php">Oscar Vega-Gisbert: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25598.php">maxinator333: "[OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25601.php">Marco Atzeri: "Re: [OMPI users] MPI_Init seems to hang, but works after a minute or two"</a>
<li><strong>Reply:</strong> <a href="25601.php">Marco Atzeri: "Re: [OMPI users] MPI_Init seems to hang, but works after a minute or two"</a>
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
