<?
$subject_val = "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 11 12:16:27 2010" -->
<!-- isoreceived="20100811161627" -->
<!-- sent="Wed, 11 Aug 2010 10:16:23 -0600" -->
<!-- isosent="20100811161623" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component" -->
<!-- id="2FCDC44B-992C-4BF3-A8B6-C8BBE57728A6_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C88842A7.E8E2%rlgraham_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component<br>
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-11 12:16:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8255.php">Ralph Castain: "[OMPI devel] Trunk appears broken"</a>
<li><strong>Previous message:</strong> <a href="8253.php">Graham, Richard L.: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>In reply to:</strong> <a href="8253.php">Graham, Richard L.: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8257.php">Terry Dontje: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Reply:</strong> <a href="8257.php">Terry Dontje: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rich,
<br>
<p>It's a modification to the existing common sm component.  The  
<br>
modifications do include the addition of a new POSIX shared memory  
<br>
facility, however.
<br>
<p>Sam
<br>
<p>On Aug 11, 2010, at 10:05 AM, Graham, Richard L. wrote:
<br>
<p><span class="quotelev1">&gt; Is this a modification of the existing component, or a new component ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8/10/10 10:52 AM, &quot;Samuel K. Gutierrez&quot; &lt;samuel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wanted to give everyone a heads-up about a new POSIX shared memory
</span><br>
<span class="quotelev1">&gt; component
</span><br>
<span class="quotelev1">&gt; that has been in the works for a while now and is ready to be pushed
</span><br>
<span class="quotelev1">&gt; into the
</span><br>
<span class="quotelev1">&gt; trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://bitbucket.org/samuelkgutierrez/ompi_posix_sm_new">http://bitbucket.org/samuelkgutierrez/ompi_posix_sm_new</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some highlights:
</span><br>
<span class="quotelev1">&gt; o New posix component now the new default.
</span><br>
<span class="quotelev1">&gt;        o May address some of the shared memory performance issues  
</span><br>
<span class="quotelev1">&gt; users
</span><br>
<span class="quotelev1">&gt; encounter
</span><br>
<span class="quotelev1">&gt;           when OMPI's session directories are inadvertently placed  
</span><br>
<span class="quotelev1">&gt; on a non-
</span><br>
<span class="quotelev1">&gt; local
</span><br>
<span class="quotelev1">&gt;           filesystem.
</span><br>
<span class="quotelev1">&gt; o Silent component failover.
</span><br>
<span class="quotelev1">&gt;        o In the default case, if the posix component fails  
</span><br>
<span class="quotelev1">&gt; initialization,
</span><br>
<span class="quotelev1">&gt;           mmap will be selected.
</span><br>
<span class="quotelev1">&gt; o The sysv component will only be queried for selection if it is
</span><br>
<span class="quotelev1">&gt; placed before
</span><br>
<span class="quotelev1">&gt;    the mmap component (for example, -mca mpi_common_sm
</span><br>
<span class="quotelev1">&gt; sysv,posix,mmap).  In the
</span><br>
<span class="quotelev1">&gt;    default case, sysv will never be queried/selected.
</span><br>
<span class="quotelev1">&gt; o Per some on-list discussion, now unlinking mmaped file in both mmap
</span><br>
<span class="quotelev1">&gt; and posix
</span><br>
<span class="quotelev1">&gt;    components (see: &quot;System V Shared Memory for Open MPI: Request for
</span><br>
<span class="quotelev1">&gt; Community
</span><br>
<span class="quotelev1">&gt;    Input and Testing&quot; thread).
</span><br>
<span class="quotelev1">&gt; o  Assuming local process homogeneity with respect to all utilized
</span><br>
<span class="quotelev1">&gt; shared
</span><br>
<span class="quotelev1">&gt;     memory facilities. That is, if one local process deems a
</span><br>
<span class="quotelev1">&gt; particular shared
</span><br>
<span class="quotelev1">&gt;     memory facility acceptable, then ALL local processes should be
</span><br>
<span class="quotelev1">&gt; able to
</span><br>
<span class="quotelev1">&gt;     utilize that facility. As it stands, this is an important point
</span><br>
<span class="quotelev1">&gt; because one
</span><br>
<span class="quotelev1">&gt;     process dictates to all other local processes which common sm
</span><br>
<span class="quotelev1">&gt; component will
</span><br>
<span class="quotelev1">&gt;     be selected based on its own, local run-time test.
</span><br>
<span class="quotelev1">&gt; o Addressed some of George's code reuse concerns.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If there are no major objections by August 17th, I'll commit the code
</span><br>
<span class="quotelev1">&gt; after the
</span><br>
<span class="quotelev1">&gt; Tuesday morning conference call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8255.php">Ralph Castain: "[OMPI devel] Trunk appears broken"</a>
<li><strong>Previous message:</strong> <a href="8253.php">Graham, Richard L.: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>In reply to:</strong> <a href="8253.php">Graham, Richard L.: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8257.php">Terry Dontje: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Reply:</strong> <a href="8257.php">Terry Dontje: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
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
