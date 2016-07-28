<?
$subject_val = "Re: [OMPI devel] configure fails on the trunk since r31390";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 15 01:12:45 2014" -->
<!-- isoreceived="20140415051245" -->
<!-- sent="Mon, 14 Apr 2014 22:11:16 -0700" -->
<!-- isosent="20140415051116" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] configure fails on the trunk since r31390" -->
<!-- id="C1A9644B-70D8-4491-8470-1A85EADCB431_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="534CA193.4080304_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] configure fails on the trunk since r31390<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-15 01:11:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14527.php">Mike Dubman: "Re: [OMPI devel] configure fails on the trunk since r31390"</a>
<li><strong>Previous message:</strong> <a href="14525.php">Gilles Gouaillardet: "[OMPI devel] configure fails on the trunk since r31390"</a>
<li><strong>In reply to:</strong> <a href="14525.php">Gilles Gouaillardet: "[OMPI devel] configure fails on the trunk since r31390"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14527.php">Mike Dubman: "Re: [OMPI devel] configure fails on the trunk since r31390"</a>
<li><strong>Reply:</strong> <a href="14527.php">Mike Dubman: "Re: [OMPI devel] configure fails on the trunk since r31390"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles
<br>
<p>There really isn't any need to open tickets when things like this happen. A simple note to devel is usually considered adequate. The problem will either be repaired by the responsible organization when they return to work, or we will revert the offending commit if the fix is going to take awhile.
<br>
<p>The best solution in most cases is to simply roll your local repo back to a point before the offending commit until it gets fixed. These things happen, though not frequently.
<br>
<p><p>On Apr 14, 2014, at 8:03 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; as reported in <a href="https://svn.open-mpi.org/trac/ompi/ticket/4521">https://svn.open-mpi.org/trac/ompi/ticket/4521</a>, configure fails on the trunk :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear OpenMPI Folks,
</span><br>
<span class="quotelev1">&gt; since r31390, configure fails on the trunk because oshmem/include/pshmem.h.in in missing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i believe r31390 should have moved the profiling api from oshmem/include/shmem.h.in into oshmem/include/pshmem.h.in. instead, r31390 simply removed all the profiling api and did not include oshmem/include/pshmem.h.in
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i am now trying to rebuild oshmem/include/pshmem.h.in in order to get things work again
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14525.php">http://www.open-mpi.org/community/lists/devel/2014/04/14525.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14526/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14527.php">Mike Dubman: "Re: [OMPI devel] configure fails on the trunk since r31390"</a>
<li><strong>Previous message:</strong> <a href="14525.php">Gilles Gouaillardet: "[OMPI devel] configure fails on the trunk since r31390"</a>
<li><strong>In reply to:</strong> <a href="14525.php">Gilles Gouaillardet: "[OMPI devel] configure fails on the trunk since r31390"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14527.php">Mike Dubman: "Re: [OMPI devel] configure fails on the trunk since r31390"</a>
<li><strong>Reply:</strong> <a href="14527.php">Mike Dubman: "Re: [OMPI devel] configure fails on the trunk since r31390"</a>
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
