<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 12 09:54:07 2007" -->
<!-- isoreceived="20070712135407" -->
<!-- sent="Thu, 12 Jul 2007 07:53:58 -0600" -->
<!-- isosent="20070712135358" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Orte update" -->
<!-- id="C2BB8E96.9EA2%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-12 09:53:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1856.php">Brian Barrett: "Re: [OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
<li><strong>Previous message:</strong> <a href="1854.php">Lisandro Dalcin: "Re: [OMPI devel] failures runing mpi4py testsuite, perhaps Comm.Split()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1865.php">Ralph H Castain: "Re: [OMPI devel] Orte update"</a>
<li><strong>Reply:</strong> <a href="1865.php">Ralph H Castain: "Re: [OMPI devel] Orte update"</a>
<li><strong>Reply:</strong> <a href="1877.php">Sven Stork: "Re: [OMPI devel] Orte update"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo all
<br>
<p>I have a fairly significant change coming to the orte part of the code base
<br>
that will require an autogen (sorry). I'll check it in late this afternoon
<br>
(can't do it at night as it is on my office desktop).
<br>
<p>The commit will fix the singleton operations, including singleton
<br>
comm_spawn. It also takes the first step towards removing event-driven
<br>
operations, replacing them with more serial code (to be explained
<br>
separately). As part of all this, I had to modify the various pls
<br>
components. For those I could not compile, I made a first cut at them that
<br>
should (hopefully) allow them to continue to operate.
<br>
<p>Any of you using TM: we discovered that the trunk is not working currently
<br>
on that environment. We are investigating - it has nothing to do with this
<br>
commit, but predates it.
<br>
<p>Just wanted to give you a heads-up. Please refrain from making changes to
<br>
the orte codebase today, if you could - it would simplify the commit and
<br>
ensure we don't lose your changes.
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1856.php">Brian Barrett: "Re: [OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
<li><strong>Previous message:</strong> <a href="1854.php">Lisandro Dalcin: "Re: [OMPI devel] failures runing mpi4py testsuite, perhaps Comm.Split()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1865.php">Ralph H Castain: "Re: [OMPI devel] Orte update"</a>
<li><strong>Reply:</strong> <a href="1865.php">Ralph H Castain: "Re: [OMPI devel] Orte update"</a>
<li><strong>Reply:</strong> <a href="1877.php">Sven Stork: "Re: [OMPI devel] Orte update"</a>
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
