<?
$subject_val = "[OMPI devel] rankfile syntax";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 13:18:54 2009" -->
<!-- isoreceived="20090723171854" -->
<!-- sent="Thu, 23 Jul 2009 10:19:02 -0700" -->
<!-- isosent="20090723171902" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] rankfile syntax" -->
<!-- id="4A689B86.1040107_at_sun.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] rankfile syntax<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 13:19:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6514.php">Ralph Castain: "Re: [OMPI devel] rankfile syntax"</a>
<li><strong>Previous message:</strong> <a href="6512.php">Brian W. Barrett: "Re: [OMPI devel] RFC: meaning of &quot;btl_XXX_eager_limit&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6514.php">Ralph Castain: "Re: [OMPI devel] rankfile syntax"</a>
<li><strong>Reply:</strong> <a href="6514.php">Ralph Castain: "Re: [OMPI devel] rankfile syntax"</a>
<li><strong>Reply:</strong> <a href="6515.php">Ralph Castain: "Re: [OMPI devel] rankfile syntax"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh ye gods of rankfiles:
<br>
<p>I have a node that has two sockets, each with four cores.  If I use a 
<br>
rankfile, I can bind to a specific core, a specific range of cores, or a 
<br>
specific core or range of cores of a specific socket.  I'm having 
<br>
trouble binding to all cores of a specific socket.  It's looking for 
<br>
core 4 on socket 0.  I understand why it can't find it, but I don't 
<br>
understand why it's looking for it.  Bug?  My error/misunderstanding?  
<br>
Here's what the flight recorder black box says:
<br>
<p><p>% cat rankfile
<br>
rank 0=saem9 slot=0:*
<br>
% mpirun -np 1 --host saem9 --rankfile rankfile --mca 
<br>
paffinity_base_verbose 5 ./a.out
<br>
[saem9:20649] mca:base:select:(paffinity) Querying component [linux]
<br>
[saem9:20649] mca:base:select:(paffinity) Query of component [linux] set 
<br>
priority to 10
<br>
[saem9:20649] mca:base:select:(paffinity) Selected component [linux]
<br>
[saem9:20650] mca:base:select:(paffinity) Querying component [linux]
<br>
[saem9:20650] mca:base:select:(paffinity) Query of component [linux] set 
<br>
priority to 10
<br>
[saem9:20650] mca:base:select:(paffinity) Selected component [linux]
<br>
[saem9:20650] paffinity slot assignment: slot_list == 0:*
<br>
[saem9:20650] Rank 0: PAFFINITY cannot get physical core id for logical 
<br>
core 4 in physical socket 0 (0)
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;opal_paffinity_base_slot_list_set() returned an error
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[saem9:20650] Abort before MPI_INIT completed successfully; not able to 
<br>
guarantee that all other processes were killed!
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 20650 on
<br>
node saem9 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6514.php">Ralph Castain: "Re: [OMPI devel] rankfile syntax"</a>
<li><strong>Previous message:</strong> <a href="6512.php">Brian W. Barrett: "Re: [OMPI devel] RFC: meaning of &quot;btl_XXX_eager_limit&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6514.php">Ralph Castain: "Re: [OMPI devel] rankfile syntax"</a>
<li><strong>Reply:</strong> <a href="6514.php">Ralph Castain: "Re: [OMPI devel] rankfile syntax"</a>
<li><strong>Reply:</strong> <a href="6515.php">Ralph Castain: "Re: [OMPI devel] rankfile syntax"</a>
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
