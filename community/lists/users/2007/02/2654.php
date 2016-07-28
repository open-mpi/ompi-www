<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  8 21:15:31 2007" -->
<!-- isoreceived="20070209021531" -->
<!-- sent="Thu, 8 Feb 2007 21:15:26 -0500" -->
<!-- isosent="20070209021526" -->
<!-- name="Alex Tumanov" -->
<!-- email="atumanov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI/OpenIB Error/Problem" -->
<!-- id="2453e2900702081815j3632e229k9dce979941db972b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="op.tngjxjrwzidtg1_at_rygel.lnxi.com" -->
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
<strong>From:</strong> Alex Tumanov (<em>atumanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-08 21:15:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2655.php">Brian W. Barrett: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Previous message:</strong> <a href="2653.php">Troy Telford: "[OMPI users] Open MPI/OpenIB Error/Problem"</a>
<li><strong>In reply to:</strong> <a href="2653.php">Troy Telford: "[OMPI users] Open MPI/OpenIB Error/Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2656.php">Brian W. Barrett: "Re: [OMPI users] Open MPI/OpenIB Error/Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Troy,
<br>
<p>This issue is fairly common and has to do with the maximum amount of
<br>
memory allowed to be allocated. See this FAQ for more detail:
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
<br>
<p>I had the same issue and the FAQ resolves it.
<br>
<p>Good luck,
<br>
Alex.
<br>
<p>On 2/8/07, Troy Telford &lt;ttelford.groups_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I've got a system that is running Open MPI 1.1.2, SLES 10, with the OFED
</span><br>
<span class="quotelev1">&gt; 1.0 drivers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code runs over Gigabit Ethernet/TCP without issues on Open MPI...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code does some memory allocation, communication, etc - the developer
</span><br>
<span class="quotelev1">&gt; wrote it to stress the network fabric, and can be submitted if necessary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The job is being run on four nodes (two dual-core CPUs each, 16 cores
</span><br>
<span class="quotelev1">&gt; total), with DDR IB.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Non-MPI bandwidth tests don't seem to be having issues; but that doesn't
</span><br>
<span class="quotelev1">&gt; necessarily mean things work great over MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error is (upon job start), something to the extent of (transcribed
</span><br>
<span class="quotelev1">&gt;  from phone):
</span><br>
<span class="quotelev1">&gt;   mca_mpool_openib_register:  cannot allocate memory
</span><br>
<span class="quotelev1">&gt;    .
</span><br>
<span class="quotelev1">&gt;    .
</span><br>
<span class="quotelev1">&gt;    .
</span><br>
<span class="quotelev1">&gt;   Error creating low priority CQ for MTHCA0:  Cannot allocate memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What has to happen for this message to get thrown?  (I've seen IB fabric
</span><br>
<span class="quotelev1">&gt; instability with OpenIB before, and I don't recall this being one of the
</span><br>
<span class="quotelev1">&gt; errors I've seen).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, is there any chance that the error can be caused by mismatched
</span><br>
<span class="quotelev1">&gt; libraries (from a different compile of Open MPI?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (And I apologize for firing off this without knowing more; I'm still
</span><br>
<span class="quotelev1">&gt; gathering data as I learn more...)
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Troy Telford
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2655.php">Brian W. Barrett: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Previous message:</strong> <a href="2653.php">Troy Telford: "[OMPI users] Open MPI/OpenIB Error/Problem"</a>
<li><strong>In reply to:</strong> <a href="2653.php">Troy Telford: "[OMPI users] Open MPI/OpenIB Error/Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2656.php">Brian W. Barrett: "Re: [OMPI users] Open MPI/OpenIB Error/Problem"</a>
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
