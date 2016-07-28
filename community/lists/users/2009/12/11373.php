<?
$subject_val = "Re: [OMPI users] Program deadlocks, on simple send/recv loop";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  2 13:11:11 2009" -->
<!-- isoreceived="20091202181111" -->
<!-- sent="Wed, 2 Dec 2009 13:11:05 -0500" -->
<!-- isosent="20091202181105" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program deadlocks, on simple send/recv loop" -->
<!-- id="05BC6B6E-76C4-4EF5-888D-8E39E70E8D73_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1259684130.3532.293.camel_at_alpha" -->
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
<strong>Subject:</strong> Re: [OMPI users] Program deadlocks, on simple send/recv loop<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-02 13:11:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11374.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Previous message:</strong> <a href="11372.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>In reply to:</strong> <a href="11312.php">Ashley Pittman: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11396.php">Ashley Pittman: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Reply:</strong> <a href="11396.php">Ashley Pittman: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 1, 2009, at 11:15 AM, Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, 2009-12-01 at 10:46 -0500, Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The attached code, is an example where openmpi/1.3.2 will lock up, if
</span><br>
<span class="quotelev2">&gt;&gt; ran on 48 cores, of IB (4 cores per node),
</span><br>
<span class="quotelev2">&gt;&gt; The code loops over recv from all processors on rank 0 and sends from
</span><br>
<span class="quotelev2">&gt;&gt; all other ranks, as far as I know this should work, and I can't see
</span><br>
<span class="quotelev2">&gt;&gt; why not.
</span><br>
<span class="quotelev2">&gt;&gt; Note yes I know we can do the same thing with a gather, this is a
</span><br>
<span class="quotelev2">&gt;&gt; simple case to demonstrate the issue.
</span><br>
<span class="quotelev2">&gt;&gt; Note that if I increase the openib eager limit, the program runs,
</span><br>
<span class="quotelev2">&gt;&gt; which normally means improper MPI, but I can't on my own figure out
</span><br>
<span class="quotelev2">&gt;&gt; the problem with this code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What are you increasing the eager limit from and too?
</span><br>
<p>The same value as ethernet on our system,
<br>
mpirun --mca btl_openib_eager_limit 655360 --mca  
<br>
btl_openib_max_send_size 655360 ./a.out
<br>
<p>Huge values compared to the defaults, but works,
<br>
<p><span class="quotelev1">&gt;  There is a
</span><br>
<span class="quotelev1">&gt; moderate amount of data flowing and as the receives are made
</span><br>
<span class="quotelev1">&gt; synchronously and in order it could be that you there are several
</span><br>
<span class="quotelev1">&gt; thousand unexpected messages arriving before the one you are looking  
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev1">&gt; which will lead to long receive queues and a need to buffer lots of
</span><br>
<span class="quotelev1">&gt; data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any input on why code like this locks up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you ran padb against this code when it had locked up you should be
</span><br>
<span class="quotelev1">&gt; able to get some more information, in particular the message queues  
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev1">&gt; rank zero.  Hopefully this information would be useful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk/full-report.html">http://padb.pittman.org.uk/full-report.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley Pittman.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11374.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Previous message:</strong> <a href="11372.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>In reply to:</strong> <a href="11312.php">Ashley Pittman: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11396.php">Ashley Pittman: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Reply:</strong> <a href="11396.php">Ashley Pittman: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
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
