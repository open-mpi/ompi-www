<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul  6 22:06:55 2006" -->
<!-- isoreceived="20060707020655" -->
<!-- sent="Thu, 6 Jul 2006 20:06:18 -0600" -->
<!-- isosent="20060707020618" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?" -->
<!-- id="2E97322C-A2E6-43A9-BA08-15483DF58CF3_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44ABD2B8.30106_at_lnl.infn.it" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-06 22:06:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1581.php">Manal Helal: "[OMPI users] debugging with mpirun"</a>
<li><strong>Previous message:</strong> <a href="1579.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn error messages"</a>
<li><strong>In reply to:</strong> <a href="1550.php">Marcin Skoczylas: "[OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/09/1865.php">Marcin Skoczylas: "Re: [OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/09/1865.php">Marcin Skoczylas: "Re: [OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 5, 2006, at 8:54 AM, Marcin Skoczylas wrote:
<br>
<p><span class="quotelev1">&gt; I saw some posts ago almost the same question as I have, but it didn't
</span><br>
<span class="quotelev1">&gt; give me satisfactional answer.
</span><br>
<span class="quotelev1">&gt; I have setup like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; GUI program on some machine (f.e. laptop)
</span><br>
<span class="quotelev1">&gt; Head listening on tcpip socket for commands from GUI.
</span><br>
<span class="quotelev1">&gt; Workers waiting for commands from Head / processing the data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And now it's problematic. For passing the commands from Head I'm  
</span><br>
<span class="quotelev1">&gt; using:
</span><br>
<span class="quotelev1">&gt; while(true)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     MPI_Recv...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     do whatever head said (process small portion of the data, return
</span><br>
<span class="quotelev1">&gt; result to head, wait for another commands)
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So in the idle time workers are stuck in MPI_Recv and have 100% CPU
</span><br>
<span class="quotelev1">&gt; usage, even if they are just waiting for the commands from Head.
</span><br>
<span class="quotelev1">&gt; Normally, I would not prefer to have this situation as I sometimes  
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev1">&gt; to share the cluster with others. I would prefer not to stop whole mpi
</span><br>
<span class="quotelev1">&gt; program, but just go into 'idle' mode, and thus make it run again  
</span><br>
<span class="quotelev1">&gt; soon.
</span><br>
<span class="quotelev1">&gt; Also I would like to have this aggresive MPI_Recv approach switched on
</span><br>
<span class="quotelev1">&gt; when I'm alone on the cluster. So is it possible somehow to switch  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt; mode on/off during runtime? Thank you in advance!
</span><br>
<p>Currently, there is not a way to do this.  Obviously, there's not  
<br>
going to be a way that is portable (ie, compiles with MPICH), but it  
<br>
may be possible to add this in the future.  It likely won't happen  
<br>
for the v1.1 release series, and I can't really speak for releases  
<br>
past that at this point.  I'll file an enhancement request in our  
<br>
internal bug tracker, and add you to the list of people to be  
<br>
notified when the ticket is updated.
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1581.php">Manal Helal: "[OMPI users] debugging with mpirun"</a>
<li><strong>Previous message:</strong> <a href="1579.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn error messages"</a>
<li><strong>In reply to:</strong> <a href="1550.php">Marcin Skoczylas: "[OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/09/1865.php">Marcin Skoczylas: "Re: [OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/09/1865.php">Marcin Skoczylas: "Re: [OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?"</a>
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
