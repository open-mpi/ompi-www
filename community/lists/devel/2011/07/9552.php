<?
$subject_val = "Re: [OMPI devel] shmem error msg";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 25 13:05:13 2011" -->
<!-- isoreceived="20110725170513" -->
<!-- sent="Mon, 25 Jul 2011 11:05:04 -0600" -->
<!-- isosent="20110725170504" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] shmem error msg" -->
<!-- id="F946CEB7-B5F6-49E5-A967-59C8B79FA155_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EECB4024-C50E-4D12-AA28-DCAA4E66BDFB_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] shmem error msg<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-25 13:05:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9553.php">Samuel K. Gutierrez: "Re: [OMPI devel] shmem error msg"</a>
<li><strong>Previous message:</strong> <a href="9551.php">Samuel K. Gutierrez: "Re: [OMPI devel] shmem error msg"</a>
<li><strong>In reply to:</strong> <a href="9551.php">Samuel K. Gutierrez: "Re: [OMPI devel] shmem error msg"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9553.php">Samuel K. Gutierrez: "Re: [OMPI devel] shmem error msg"</a>
<li><strong>Reply:</strong> <a href="9553.php">Samuel K. Gutierrez: "Re: [OMPI devel] shmem error msg"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 25, 2011, at 10:16 AM, Samuel K. Gutierrez wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems as if this issue is related to a missing shm_unlink wrapper within Valgrind.  I'm going to disable posix by default and commit later today.
</span><br>
<p>Is that the right solution? If the problem is something in valgrind, then let's not disable something just for their problem. Is there a way we can wrap it ourselves so the error doesn't cause the message?
<br>
<p>Like I said, everything worked just fine - the message just implied the proc would die, and it doesn't.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 23, 2011, at 8:54 PM, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That's mine - I'll take a look.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sam
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Whenever I run valgrind on orterun (or any OMPI tool), I get the following
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error msg:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A system call failed during shared memory initialization that should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not have.  It is likely that your MPI job will now either abort or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; experience performance degradation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Local host:  Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; System call: shm_unlink(2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error:       Function not implemented (errno 78)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's coming out of open-rte/help-opal-shmem-posix.txt.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Everything continues, so I'm not sure what this is all about. Anyone
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recognize this???
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's on the trunk, running on a Mac, vanilla configure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="9553.php">Samuel K. Gutierrez: "Re: [OMPI devel] shmem error msg"</a>
<li><strong>Previous message:</strong> <a href="9551.php">Samuel K. Gutierrez: "Re: [OMPI devel] shmem error msg"</a>
<li><strong>In reply to:</strong> <a href="9551.php">Samuel K. Gutierrez: "Re: [OMPI devel] shmem error msg"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9553.php">Samuel K. Gutierrez: "Re: [OMPI devel] shmem error msg"</a>
<li><strong>Reply:</strong> <a href="9553.php">Samuel K. Gutierrez: "Re: [OMPI devel] shmem error msg"</a>
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
