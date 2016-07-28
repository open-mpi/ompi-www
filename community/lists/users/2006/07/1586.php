<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul  7 11:17:07 2006" -->
<!-- isoreceived="20060707151707" -->
<!-- sent="Fri, 7 Jul 2006 11:16:47 -0400" -->
<!-- isosent="20060707151647" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?" -->
<!-- id="200607071116.47659.kyron_at_neuralbs.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Eric Thibodeau (<em>kyron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-07 11:16:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1587.php">s anwar: "[OMPI users] readline and mpirun"</a>
<li><strong>Previous message:</strong> <a href="1585.php">Manal Helal: "Re: [OMPI users] debugging with mpirun"</a>
<li><strong>In reply to:</strong> <a href="1550.php">Marcin Skoczylas: "[OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Although it will add some overhead, have you tried using MPI_Probe before calling MPI_Recv. I am curious to know if the Probe is less CPU intensive than a direct call to MPI_Recv. An example of how I use it:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Probe(MPI_ANY_SOURCE,MPI_ANY_TAG,MPI_COMM_WORLD,&amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(DispBuff,height,MPI_UNSIGNED_LONG,status.MPI_SOURCE,status.MPI_TAG,MPI_COMM_WORLD,&amp;rstatus);
<br>
<p>(This is used to receive known data from an unknown source)
<br>
<p>Eric
<br>
<p>Le mercredi 5 juillet 2006 10:54, Marcin Skoczylas a &#233;crit&#160;:
<br>
<span class="quotelev1">&gt; Dear open-mpi users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I saw some posts ago almost the same question as I have, but it didn't 
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
<span class="quotelev1">&gt; And now it's problematic. For passing the commands from Head I'm using:
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
<span class="quotelev1">&gt; Normally, I would not prefer to have this situation as I sometimes have 
</span><br>
<span class="quotelev1">&gt; to share the cluster with others. I would prefer not to stop whole mpi 
</span><br>
<span class="quotelev1">&gt; program, but just go into 'idle' mode, and thus make it run again soon. 
</span><br>
<span class="quotelev1">&gt; Also I would like to have this aggresive MPI_Recv approach switched on 
</span><br>
<span class="quotelev1">&gt; when I'm alone on the cluster. So is it possible somehow to switch this 
</span><br>
<span class="quotelev1">&gt; mode on/off during runtime? Thank you in advance!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                             greetings, Marcin
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
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Eric Thibodeau
Neural Bucket Solutions Inc.
T. (514) 736-1436
C. (514) 710-0517
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1587.php">s anwar: "[OMPI users] readline and mpirun"</a>
<li><strong>Previous message:</strong> <a href="1585.php">Manal Helal: "Re: [OMPI users] debugging with mpirun"</a>
<li><strong>In reply to:</strong> <a href="1550.php">Marcin Skoczylas: "[OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?"</a>
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
