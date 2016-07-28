<?
$subject_val = "Re: [OMPI users] How to launch mpirun 1.4.2 with --no-daemonize argument in order to run pvserver, is there an equivalent flag??";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 21 18:25:06 2010" -->
<!-- isoreceived="20100721222506" -->
<!-- sent="Wed, 21 Jul 2010 16:24:57 -0600" -->
<!-- isosent="20100721222457" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to launch mpirun 1.4.2 with --no-daemonize argument in order to run pvserver, is there an equivalent flag??" -->
<!-- id="C04BEAA4-D703-4259-8C7B-3695F31A12FD_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTil_DowfvTTZTyPeHcGuOlxoZMneiRWnT_pdxaBo_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to launch mpirun 1.4.2 with --no-daemonize argument in order to run pvserver, is there an equivalent flag??<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-21 18:24:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13738.php">Juan Francisco Alvarez Urquijo: "[OMPI users] Thank you very much - How to launch mpirun 1.4.2 with --no-daemonize argument in order to run pvserver, is there an equivalent flag??&quot;"</a>
<li><strong>Previous message:</strong> <a href="13736.php">Juan Francisco Alvarez Urquijo: "[OMPI users] How to launch mpirun 1.4.2 with --no-daemonize argument in order to run pvserver, is there an equivalent flag??"</a>
<li><strong>In reply to:</strong> <a href="13736.php">Juan Francisco Alvarez Urquijo: "[OMPI users] How to launch mpirun 1.4.2 with --no-daemonize argument in order to run pvserver, is there an equivalent flag??"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry - the cmd line option you are looking for was changed to avoid confusion. It is now --leave-session-attached
<br>
<p>HTH
<br>
Ralph
<br>
<p><p>On Jul 21, 2010, at 4:15 PM, Juan Francisco Alvarez Urquijo wrote:
<br>
<p><span class="quotelev1">&gt; Hi all:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using openmpi-1.4.2. I need to run pvserver(a mpi program of paraview) in a cluster. I have Mac OS X 10.6.4 in all my hosts and in the server. I had configure ssh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with no password.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I try tu run pvserver (The paraview server) in a cluster, using the next comand:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun --hostfile myHostFile -np 12 pvserver -tdx=4 -tdy=3
</span><br>
<span class="quotelev1">&gt; Listen on port: 11111
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Waiting for client...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then in my client i run paraview an I connect to the server
</span><br>
<span class="quotelev1">&gt; $ paraview
</span><br>
<span class="quotelev1">&gt; Waiting for server...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The server tries to open the viewport in the other computers but here is the error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $mpirun --hostfile myHostFile -np 12 pvserver -tdx=4 -tdy=3
</span><br>
<span class="quotelev1">&gt; Listen on port: 11111
</span><br>
<span class="quotelev1">&gt; Waiting for client...
</span><br>
<span class="quotelev1">&gt; Client connected.
</span><br>
<span class="quotelev1">&gt; Tue Jul 20 15:42:16 macMini1.local pvserver[10059] &lt;Error&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; kCGErrorRangeCheck: On-demand launch of the Window Server is allowed for root user only.
</span><br>
<span class="quotelev1">&gt; Tue Jul 20 15:42:16 macMini1.local pvserver[10059] &lt;Error&gt;: kCGErrorFailure: Set a breakpoint @ CGErrorBreakpoint() to catch errors as they are logged.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; .....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I read about that error. I found this thread <a href="http://www.mail-archive.com/paraview&#64;paraview.org/msg06964.html">http://www.mail-archive.com/paraview&#64;paraview.org/msg06964.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here Takuya OSHIMA wrote that we need to run openmpi like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun --no-daemonize --hostfile myHostFile -np 12 pvserver -tdx=4 -tdy=3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But this flag --no-daemonize is not part of mpirun yet, i guess it's not implemented in version 1.4.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My questions are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there an equivalent flag in openmpi-1.4.2 for --no-daemonize??
</span><br>
<span class="quotelev1">&gt; If not, How could I run mpirun in order not to run in background??
</span><br>
<span class="quotelev1">&gt; Does anyone has tried this??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13737/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13738.php">Juan Francisco Alvarez Urquijo: "[OMPI users] Thank you very much - How to launch mpirun 1.4.2 with --no-daemonize argument in order to run pvserver, is there an equivalent flag??&quot;"</a>
<li><strong>Previous message:</strong> <a href="13736.php">Juan Francisco Alvarez Urquijo: "[OMPI users] How to launch mpirun 1.4.2 with --no-daemonize argument in order to run pvserver, is there an equivalent flag??"</a>
<li><strong>In reply to:</strong> <a href="13736.php">Juan Francisco Alvarez Urquijo: "[OMPI users] How to launch mpirun 1.4.2 with --no-daemonize argument in order to run pvserver, is there an equivalent flag??"</a>
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
