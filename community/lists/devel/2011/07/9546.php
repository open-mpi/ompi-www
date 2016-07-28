<?
$subject_val = "[OMPI devel] shmem error msg";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 23 16:02:09 2011" -->
<!-- isoreceived="20110723200209" -->
<!-- sent="Sat, 23 Jul 2011 14:02:01 -0600" -->
<!-- isosent="20110723200201" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] shmem error msg" -->
<!-- id="311472A5-3B16-4686-BEB1-740DA3133D9B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] shmem error msg<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-23 16:02:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9547.php">Ralph Castain: "Re: [OMPI devel] orte question"</a>
<li><strong>Previous message:</strong> <a href="9545.php">bin wang: "[OMPI devel] need help to add a module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9550.php">Samuel K. Gutierrez: "Re: [OMPI devel] shmem error msg"</a>
<li><strong>Reply:</strong> <a href="9550.php">Samuel K. Gutierrez: "Re: [OMPI devel] shmem error msg"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Whenever I run valgrind on orterun (or any OMPI tool), I get the following error msg:
<br>
<p>--------------------------------------------------------------------------
<br>
A system call failed during shared memory initialization that should
<br>
not have.  It is likely that your MPI job will now either abort or
<br>
experience performance degradation.
<br>
<p>&nbsp;&nbsp;Local host:  Ralph
<br>
&nbsp;&nbsp;System call: shm_unlink(2) 
<br>
&nbsp;&nbsp;Error:       Function not implemented (errno 78)
<br>
--------------------------------------------------------------------------
<br>
<p>It's coming out of open-rte/help-opal-shmem-posix.txt.
<br>
<p>Everything continues, so I'm not sure what this is all about. Anyone recognize this???
<br>
<p>It's on the trunk, running on a Mac, vanilla configure.
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9547.php">Ralph Castain: "Re: [OMPI devel] orte question"</a>
<li><strong>Previous message:</strong> <a href="9545.php">bin wang: "[OMPI devel] need help to add a module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9550.php">Samuel K. Gutierrez: "Re: [OMPI devel] shmem error msg"</a>
<li><strong>Reply:</strong> <a href="9550.php">Samuel K. Gutierrez: "Re: [OMPI devel] shmem error msg"</a>
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
