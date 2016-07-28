<?
$subject_val = "[OMPI users] How to launch mpirun 1.4.2 with --no-daemonize argument in order to run pvserver, is there an equivalent flag??";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 21 18:15:33 2010" -->
<!-- isoreceived="20100721221533" -->
<!-- sent="Wed, 21 Jul 2010 17:15:28 -0500" -->
<!-- isosent="20100721221528" -->
<!-- name="Juan Francisco Alvarez Urquijo" -->
<!-- email="fkoner.meego_at_[hidden]" -->
<!-- subject="[OMPI users] How to launch mpirun 1.4.2 with --no-daemonize argument in order to run pvserver, is there an equivalent flag??" -->
<!-- id="AANLkTil_DowfvTTZTyPeHcGuOlxoZMneiRWnT_pdxaBo_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] How to launch mpirun 1.4.2 with --no-daemonize argument in order to run pvserver, is there an equivalent flag??<br>
<strong>From:</strong> Juan Francisco Alvarez Urquijo (<em>fkoner.meego_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-21 18:15:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13737.php">Ralph Castain: "Re: [OMPI users] How to launch mpirun 1.4.2 with --no-daemonize argument in order to run pvserver, is there an equivalent flag??"</a>
<li><strong>Previous message:</strong> <a href="13735.php">Dave Goodell: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13737.php">Ralph Castain: "Re: [OMPI users] How to launch mpirun 1.4.2 with --no-daemonize argument in order to run pvserver, is there an equivalent flag??"</a>
<li><strong>Reply:</strong> <a href="13737.php">Ralph Castain: "Re: [OMPI users] How to launch mpirun 1.4.2 with --no-daemonize argument in order to run pvserver, is there an equivalent flag??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all:
<br>
<p>I'm using openmpi-1.4.2. I need to run pvserver(a mpi program of
<br>
paraview) in a cluster. I have Mac OS X 10.6.4 in all my hosts and in
<br>
the server. I had configure ssh
<br>
with no password.
<br>
<p><p>I try tu run pvserver (The paraview server) in a cluster, using the next
<br>
comand:
<br>
<p>$ mpirun --hostfile myHostFile -np 12 pvserver -tdx=4 -tdy=3
<br>
Listen on port: 11111
<br>
Waiting for client...
<br>
<p><p>Then in my client i run paraview an I connect to the server
<br>
$ paraview
<br>
Waiting for server...
<br>
<p><p>The server tries to open the viewport in the other computers but here
<br>
is the error
<br>
<p>$mpirun --hostfile myHostFile -np 12 pvserver -tdx=4 -tdy=3
<br>
Listen on port: 11111
<br>
Waiting for client...
<br>
Client connected.
<br>
Tue Jul 20 15:42:16 macMini1.local pvserver[10059] &lt;Error&gt;:
<br>
kCGErrorRangeCheck: On-demand launch of the Window Server is allowed
<br>
for root user only.
<br>
Tue Jul 20 15:42:16 macMini1.local pvserver[10059] &lt;Error&gt;:
<br>
kCGErrorFailure: Set a breakpoint @ CGErrorBreakpoint() to catch
<br>
errors as they are logged.
<br>
<p>.....
<br>
<p><p><p>I read about that error. I found this thread
<br>
<a href="http://www.mail-archive.com/paraview&#64;paraview.org/msg06964.html">http://www.mail-archive.com/paraview&#64;paraview.org/msg06964.html</a>
<br>
<p>Here Takuya OSHIMA wrote that we need to run openmpi like this:
<br>
<p>$ mpirun --no-daemonize --hostfile myHostFile -np 12 pvserver -tdx=4 -tdy=3
<br>
<p>But this flag --no-daemonize is not part of mpirun yet, i guess it's
<br>
not implemented in version 1.4.2.
<br>
<p>My questions are:
<br>
<p>Is there an equivalent flag in openmpi-1.4.2 for --no-daemonize??
<br>
If not, How could I run mpirun in order not to run in background??
<br>
Does anyone has tried this??
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13736/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13737.php">Ralph Castain: "Re: [OMPI users] How to launch mpirun 1.4.2 with --no-daemonize argument in order to run pvserver, is there an equivalent flag??"</a>
<li><strong>Previous message:</strong> <a href="13735.php">Dave Goodell: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13737.php">Ralph Castain: "Re: [OMPI users] How to launch mpirun 1.4.2 with --no-daemonize argument in order to run pvserver, is there an equivalent flag??"</a>
<li><strong>Reply:</strong> <a href="13737.php">Ralph Castain: "Re: [OMPI users] How to launch mpirun 1.4.2 with --no-daemonize argument in order to run pvserver, is there an equivalent flag??"</a>
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
