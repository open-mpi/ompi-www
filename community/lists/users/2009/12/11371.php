<?
$subject_val = "Re: [OMPI users] ompi-restart using different nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  2 12:02:07 2009" -->
<!-- isoreceived="20091202170207" -->
<!-- sent="Wed, 02 Dec 2009 12:01:56 -0500" -->
<!-- isosent="20091202170156" -->
<!-- name="Jonathan Ferland" -->
<!-- email="jonathan.ferland_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-restart using different nodes" -->
<!-- id="4B169D84.2000605_at_rqchp.qc.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D4C2CFB2-A917-44C8-8960-1BA4D9DB959E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi-restart using different nodes<br>
<strong>From:</strong> Jonathan Ferland (<em>jonathan.ferland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-02 12:01:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11372.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Previous message:</strong> <a href="11370.php">Josh Hursey: "Re: [OMPI users] ompi-restart using different nodes"</a>
<li><strong>In reply to:</strong> <a href="11370.php">Josh Hursey: "Re: [OMPI users] ompi-restart using different nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11455.php">Jonathan Ferland: "Re: [OMPI users] ompi-restart using different nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh,
<br>
<p>In case it help, I am running 1.3.3 compiled as follow :
<br>
&nbsp;../configure --enable-ft-thread --with-ft=cr --enable-mpi-threads 
<br>
--with-blcr=... --with-blcr-libdir=...--disable-openib-rdmacm --prefix=....
<br>
<p>I ran my application like this :
<br>
mpirun -am ft-enable-cr --hostfile host -np 2 ./a.out
<br>
<p>where host contains:
<br>
node1
<br>
node2
<br>
<p>This way it work if I checkpoint restart :
<br>
ompi-restart -hostfile host ompi_global_snapshot_....ckpt
<br>
<p>but if I then change the host to (just swapping nodes):
<br>
node2
<br>
node1
<br>
<p>then it crash...
<br>
<p>thanks
<br>
<p>Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; Though I do not test this scenario (using hostfiles) very often, it 
</span><br>
<span class="quotelev1">&gt; used to work. The ompi-restart command takes a --hostfile (or 
</span><br>
<span class="quotelev1">&gt; --machinefile) argument that is passed directly to the mpirun command. 
</span><br>
<span class="quotelev1">&gt; I wonder if something broke recently with this handoff. I can 
</span><br>
<span class="quotelev1">&gt; certainly checkpoint with one set of nodes/allocation and restart with 
</span><br>
<span class="quotelev1">&gt; another, but most/all of my testing occurs in a SLURM environment, so 
</span><br>
<span class="quotelev1">&gt; no need for an explicit hostfile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll take a look to see if I can reproduce, but probably will not be 
</span><br>
<span class="quotelev1">&gt; until next week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 2, 2009, at 9:54 AM, Jonathan Ferland wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to use BLCR checkpointing in mpi. I am currently able to 
</span><br>
<span class="quotelev2">&gt;&gt; run my application using some hostfile, checkpoint the run, and then 
</span><br>
<span class="quotelev2">&gt;&gt; restart the application using the same hostfile. The thing I would 
</span><br>
<span class="quotelev2">&gt;&gt; like to do is to restart the application with a different hostfile. 
</span><br>
<span class="quotelev2">&gt;&gt; But this leads to a segfault using 1.3.3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it possible to restart the application using a different hostfile 
</span><br>
<span class="quotelev2">&gt;&gt; (we are using pbs to create the hostfile, so each new restart might 
</span><br>
<span class="quotelev2">&gt;&gt; be on different nodes), how can we do that? If no, do you plan to 
</span><br>
<span class="quotelev2">&gt;&gt; include this in a future release?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11372.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Previous message:</strong> <a href="11370.php">Josh Hursey: "Re: [OMPI users] ompi-restart using different nodes"</a>
<li><strong>In reply to:</strong> <a href="11370.php">Josh Hursey: "Re: [OMPI users] ompi-restart using different nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11455.php">Jonathan Ferland: "Re: [OMPI users] ompi-restart using different nodes"</a>
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
