<?
$subject_val = "[OMPI devel] OpenMPI without RSH";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 29 13:39:13 2009" -->
<!-- isoreceived="20090429173913" -->
<!-- sent="Wed, 29 Apr 2009 10:38:26 -0700" -->
<!-- isosent="20090429173826" -->
<!-- name="Jerry Ye" -->
<!-- email="jerryye_at_[hidden]" -->
<!-- subject="[OMPI devel] OpenMPI without RSH" -->
<!-- id="C61DDEA2.482C%jerryye_at_yahoo-inc.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] OpenMPI without RSH<br>
<strong>From:</strong> Jerry Ye (<em>jerryye_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-29 13:38:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5905.php">Jeff Squyres: "[OMPI devel] what I liked about scons (was: RFC: proposed GPLv3 license exception draft)"</a>
<li><strong>Previous message:</strong> <a href="5903.php">Brian Blank: "[OMPI devel] Fwd: Purify found bugs inside open-mpi library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5906.php">Rayson Ho: "Re: [OMPI devel] OpenMPI without RSH"</a>
<li><strong>Reply:</strong> <a href="5906.php">Rayson Ho: "Re: [OMPI devel] OpenMPI without RSH"</a>
<li><strong>Reply:</strong> <a href="5907.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI without RSH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I'm currently working in an environment where I cannot use SSH to launch child processes.  Instead, the process with rank 0 skips the ssh_child function in plm_rsh_module.c and the child processes are all started at the same time on different machines.  Coordination is done with static jobids and ports.  I have sucessfully modified the code to get the hello_c example working.  However, I'm having problems with inter-process communication when using MPI_Bcast.  Is there something else that I'm obviously missing?
<br>
<p>Thanks.
<br>
<p>- jerry
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5904/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5905.php">Jeff Squyres: "[OMPI devel] what I liked about scons (was: RFC: proposed GPLv3 license exception draft)"</a>
<li><strong>Previous message:</strong> <a href="5903.php">Brian Blank: "[OMPI devel] Fwd: Purify found bugs inside open-mpi library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5906.php">Rayson Ho: "Re: [OMPI devel] OpenMPI without RSH"</a>
<li><strong>Reply:</strong> <a href="5906.php">Rayson Ho: "Re: [OMPI devel] OpenMPI without RSH"</a>
<li><strong>Reply:</strong> <a href="5907.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI without RSH"</a>
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
