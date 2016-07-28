<?
$subject_val = "[OMPI devel] Checkpoint/restart question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 25 19:36:35 2010" -->
<!-- isoreceived="20100825233635" -->
<!-- sent="Thu, 26 Aug 2010 01:36:27 +0200 (CEST)" -->
<!-- isosent="20100825233627" -->
<!-- name="Tomas Oppelstrup" -->
<!-- email="tomaso_at_[hidden]" -->
<!-- subject="[OMPI devel] Checkpoint/restart question" -->
<!-- id="Pine.LNX.4.58.1008260121100.23969_at_kcse01.nada.kth.se" -->
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
<strong>Subject:</strong> [OMPI devel] Checkpoint/restart question<br>
<strong>From:</strong> Tomas Oppelstrup (<em>tomaso_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-25 19:36:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8367.php">Paul H. Hargrove: "[OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8365.php">Paul H. Hargrove: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8378.php">Joshua Hursey: "Re: [OMPI devel] Checkpoint/restart question"</a>
<li><strong>Reply:</strong> <a href="8378.php">Joshua Hursey: "Re: [OMPI devel] Checkpoint/restart question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I have a question about checkpoint-restart operation with opem-mpi. I
<br>
hope this is an apropriate forum for my question.
<br>
<p>I do not have access to recopmile the kernel or load kernel modules,
<br>
so I would like to use the condor checkpoint-restart library. Can
<br>
that me made to work with openmpi's checkpoint-restart
<br>
infrastructure?
<br>
<p>The condor library, upon recept of a signal or calling its checkpoint
<br>
function from within the program, generates a file containing the
<br>
complete (as complete as possible) state of the process, including
<br>
the state of libraries, e.g. openmpi. On restart, the process
<br>
image/state is loaded into memory and execution is resumed at the
<br>
checkpoint location.
<br>
<p>On restart, I assume that some information in the mpi-state may need
<br>
to be reinitalized, since e.g. the names of the hosts of the
<br>
mpi-process, and pids of possible support processes will have
<br>
changed.
<br>
<p>Is this tricky to fix (that code must somehow be there for the BLCR
<br>
compatibility)?
<br>
<p>Perhaps it can be achieved by (in violation of the mpi-standard)
<br>
calling MPI_Finalize before the checkpoint, and MPI_Init after
<br>
restart? This seems like a conceptually appealing solution, but may
<br>
not be allowed nor to the correct thing in openmpi?!
<br>
<p>&nbsp;&nbsp;Thanks for any ideas/help/pointers to more information!
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tomas
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8367.php">Paul H. Hargrove: "[OMPI devel] &quot;make check&quot; (libtool?) failure on Solaris/SPARC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8365.php">Paul H. Hargrove: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8378.php">Joshua Hursey: "Re: [OMPI devel] Checkpoint/restart question"</a>
<li><strong>Reply:</strong> <a href="8378.php">Joshua Hursey: "Re: [OMPI devel] Checkpoint/restart question"</a>
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
