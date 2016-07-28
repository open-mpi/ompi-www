<?
$subject_val = "Re: [OMPI devel] shmem error msg";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 25 12:16:18 2011" -->
<!-- isoreceived="20110725161618" -->
<!-- sent="Mon, 25 Jul 2011 10:16:13 -0600" -->
<!-- isosent="20110725161613" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] shmem error msg" -->
<!-- id="EECB4024-C50E-4D12-AA28-DCAA4E66BDFB_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44362.128.165.0.81.1311476049.squirrel_at_webmail.lanl.gov" -->
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
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-25 12:16:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9552.php">Ralph Castain: "Re: [OMPI devel] shmem error msg"</a>
<li><strong>Previous message:</strong> <a href="9550.php">Samuel K. Gutierrez: "Re: [OMPI devel] shmem error msg"</a>
<li><strong>In reply to:</strong> <a href="9550.php">Samuel K. Gutierrez: "Re: [OMPI devel] shmem error msg"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9552.php">Ralph Castain: "Re: [OMPI devel] shmem error msg"</a>
<li><strong>Reply:</strong> <a href="9552.php">Ralph Castain: "Re: [OMPI devel] shmem error msg"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>It seems as if this issue is related to a missing shm_unlink wrapper  
<br>
within Valgrind.  I'm going to disable posix by default and commit  
<br>
later today.
<br>
<p>Thanks,
<br>
<pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On Jul 23, 2011, at 8:54 PM, Samuel K. Gutierrez wrote:
&gt; Hi Ralph,
&gt;
&gt; That's mine - I'll take a look.
&gt;
&gt; Thanks,
&gt;
&gt; Sam
&gt;
&gt;&gt; Whenever I run valgrind on orterun (or any OMPI tool), I get the  
&gt;&gt; following
&gt;&gt; error msg:
&gt;&gt;
&gt;&gt; --------------------------------------------------------------------------
&gt;&gt; A system call failed during shared memory initialization that should
&gt;&gt; not have.  It is likely that your MPI job will now either abort or
&gt;&gt; experience performance degradation.
&gt;&gt;
&gt;&gt;  Local host:  Ralph
&gt;&gt;  System call: shm_unlink(2)
&gt;&gt;  Error:       Function not implemented (errno 78)
&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;
&gt;&gt; It's coming out of open-rte/help-opal-shmem-posix.txt.
&gt;&gt;
&gt;&gt; Everything continues, so I'm not sure what this is all about. Anyone
&gt;&gt; recognize this???
&gt;&gt;
&gt;&gt; It's on the trunk, running on a Mac, vanilla configure.
&gt;&gt; Ralph
&gt;&gt;
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9552.php">Ralph Castain: "Re: [OMPI devel] shmem error msg"</a>
<li><strong>Previous message:</strong> <a href="9550.php">Samuel K. Gutierrez: "Re: [OMPI devel] shmem error msg"</a>
<li><strong>In reply to:</strong> <a href="9550.php">Samuel K. Gutierrez: "Re: [OMPI devel] shmem error msg"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9552.php">Ralph Castain: "Re: [OMPI devel] shmem error msg"</a>
<li><strong>Reply:</strong> <a href="9552.php">Ralph Castain: "Re: [OMPI devel] shmem error msg"</a>
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
