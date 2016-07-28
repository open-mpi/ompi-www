<?
$subject_val = "Re: [OMPI devel] race condition in abort can cause mpirun v1.8 hang";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 26 11:46:41 2014" -->
<!-- isoreceived="20141126164641" -->
<!-- sent="Wed, 26 Nov 2014 08:46:37 -0800" -->
<!-- isosent="20141126164637" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] race condition in abort can cause mpirun v1.8 hang" -->
<!-- id="E26EBB55-59FB-42F7-A751-F469999FDF11_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="54758940.1090603_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] race condition in abort can cause mpirun v1.8 hang<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-26 11:46:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16361.php">George Bosilca: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<li><strong>Previous message:</strong> <a href="16359.php">Ralph Castain: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<li><strong>In reply to:</strong> <a href="16357.php">Gilles Gouaillardet: "[OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16363.php">Ralph Castain: "Re: [OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<li><strong>Reply:</strong> <a href="16363.php">Ralph Castain: "Re: [OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm&#133;.yeah, I know we saw this and resolved it in the trunk, but it looks like the fix indeed failed to come over to 1.8. I&#146;ll take a gander (pretty sure I remember how I fixed it) - thanks!
<br>
<p><span class="quotelev1">&gt; On Nov 26, 2014, at 12:03 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i noted several hangs in mtt with the v1.8 branch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a simple way to reproduce it is to use the MPI_Errhandler_fatal_f test
</span><br>
<span class="quotelev1">&gt; from the intel_tests suite,
</span><br>
<span class="quotelev1">&gt; invoke mpirun on one node and run the taks on an other node :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node0$ mpirun -np 3 -host node1 --mca btl tcp,self ./MPI_Errhandler_fatal_f
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* since this is a race condition, you might need to run this in a loop
</span><br>
<span class="quotelev1">&gt; in order to hit the bug */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the attached tarball contains a patch (add debug + temporary hack) and
</span><br>
<span class="quotelev1">&gt; some log files obtained with
</span><br>
<span class="quotelev1">&gt; --mca errmgr_base_verbose 100 --mca odls_base_verbose 100
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; without the hack, i can reproduce the bug with -np 3 (log.ko.txt) , with
</span><br>
<span class="quotelev1">&gt; the hack, i can still reproduce the hang (though it might
</span><br>
<span class="quotelev1">&gt; be a different one) with -np 16 (log.ko.2.txt)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i remember some similar hangs were fixed on the trunk/master a few
</span><br>
<span class="quotelev1">&gt; monthes ago.
</span><br>
<span class="quotelev1">&gt; i tried to backport some commits but it did not help :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; could you please have a look at this ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; &lt;abort_hang.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16357.php">http://www.open-mpi.org/community/lists/devel/2014/11/16357.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16361.php">George Bosilca: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<li><strong>Previous message:</strong> <a href="16359.php">Ralph Castain: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<li><strong>In reply to:</strong> <a href="16357.php">Gilles Gouaillardet: "[OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16363.php">Ralph Castain: "Re: [OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<li><strong>Reply:</strong> <a href="16363.php">Ralph Castain: "Re: [OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
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
