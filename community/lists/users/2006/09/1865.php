<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 15 06:09:53 2006" -->
<!-- isoreceived="20060915100953" -->
<!-- sent="Fri, 15 Sep 2006 12:10:44 +0200" -->
<!-- isosent="20060915101044" -->
<!-- name="Marcin Skoczylas" -->
<!-- email="Marcin.Skoczylas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?" -->
<!-- id="450A7C24.1060304_at_lnl.infn.it" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2E97322C-A2E6-43A9-BA08-15483DF58CF3_at_open-mpi.org" -->
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
<strong>From:</strong> Marcin Skoczylas (<em>Marcin.Skoczylas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-15 06:10:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1866.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Previous message:</strong> <a href="1864.php">chris.neale_at_[hidden]: "[OMPI users] tcp short settings"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1580.php">Brian Barrett: "Re: [OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1586.php">Eric Thibodeau: "Re: [OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Jul 5, 2006, at 8:54 AM, Marcin Skoczylas wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I saw some posts ago almost the same question as I have, but it didn't
</span><br>
<span class="quotelev2">&gt;&gt; give me satisfactional answer.
</span><br>
<span class="quotelev2">&gt;&gt; I have setup like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; GUI program on some machine (f.e. laptop)
</span><br>
<span class="quotelev2">&gt;&gt; Head listening on tcpip socket for commands from GUI.
</span><br>
<span class="quotelev2">&gt;&gt; Workers waiting for commands from Head / processing the data.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And now it's problematic. For passing the commands from Head I'm  
</span><br>
<span class="quotelev2">&gt;&gt; using:
</span><br>
<span class="quotelev2">&gt;&gt; while(true)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Recv...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     do whatever head said (process small portion of the data, return
</span><br>
<span class="quotelev2">&gt;&gt; result to head, wait for another commands)
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So in the idle time workers are stuck in MPI_Recv and have 100% CPU
</span><br>
<span class="quotelev2">&gt;&gt; usage, even if they are just waiting for the commands from Head.
</span><br>
<span class="quotelev2">&gt;&gt; Normally, I would not prefer to have this situation as I sometimes  
</span><br>
<span class="quotelev2">&gt;&gt; have
</span><br>
<span class="quotelev2">&gt;&gt; to share the cluster with others. I would prefer not to stop whole mpi
</span><br>
<span class="quotelev2">&gt;&gt; program, but just go into 'idle' mode, and thus make it run again  
</span><br>
<span class="quotelev2">&gt;&gt; soon.
</span><br>
<span class="quotelev2">&gt;&gt; Also I would like to have this aggresive MPI_Recv approach switched on
</span><br>
<span class="quotelev2">&gt;&gt; when I'm alone on the cluster. So is it possible somehow to switch  
</span><br>
<span class="quotelev2">&gt;&gt; this
</span><br>
<span class="quotelev2">&gt;&gt; mode on/off during runtime? Thank you in advance!
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Currently, there is not a way to do this.  Obviously, there's not  
</span><br>
<span class="quotelev1">&gt; going to be a way that is portable (ie, compiles with MPICH), but it  
</span><br>
<span class="quotelev1">&gt; may be possible to add this in the future.  It likely won't happen  
</span><br>
<span class="quotelev1">&gt; for the v1.1 release series, and I can't really speak for releases  
</span><br>
<span class="quotelev1">&gt; past that at this point.  I'll file an enhancement request in our  
</span><br>
<span class="quotelev1">&gt; internal bug tracker, and add you to the list of people to be  
</span><br>
<span class="quotelev1">&gt; notified when the ticket is updated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Is there any solution ready? using MPI_Probe before MPI_Recv didn't help 
<br>
too much.
<br>
<p>greetings, Marcin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1866.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Previous message:</strong> <a href="1864.php">chris.neale_at_[hidden]: "[OMPI users] tcp short settings"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1580.php">Brian Barrett: "Re: [OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1586.php">Eric Thibodeau: "Re: [OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?"</a>
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
