<?
$subject_val = "[OMPI devel] RFC: Merge PMIx branch to trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 22:44:57 2014" -->
<!-- isoreceived="20140815024457" -->
<!-- sent="Thu, 14 Aug 2014 19:44:56 -0700" -->
<!-- isosent="20140815024456" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Merge PMIx branch to trunk" -->
<!-- id="CAMD57oeN65mCwswNhS1o+AFYXjtrrxysrN8ApZ0s-S+cSpNGJA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Merge PMIx branch to trunk<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-14 22:44:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15657.php">Pritchard Jr., Howard: "Re: [OMPI devel] RFC: Merge PMIx branch to trunk"</a>
<li><strong>Previous message:</strong> <a href="15655.php">George Bosilca: "Re: [OMPI devel] RFC: add opal/threads/spinlock.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15657.php">Pritchard Jr., Howard: "Re: [OMPI devel] RFC: Merge PMIx branch to trunk"</a>
<li><strong>Reply:</strong> <a href="15657.php">Pritchard Jr., Howard: "Re: [OMPI devel] RFC: Merge PMIx branch to trunk"</a>
<li><strong>Reply:</strong> <a href="15659.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Merge PMIx branch to trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT:    Merge the PMIx branch into the devel repo, creating a new
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL &#226;&#128;&#156;lmix&#226;&#128;&#157; framework to abstract PMI support for all RTEs.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Replace the ORTE daemon-level collectives with a new PMIx
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;server and update the ORTE grpcomm framework to support
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;server-to-server collectives
<br>
<p><p>WHY:      We&#226;&#128;&#153;ve had problems dealing with variations in PMI implementations,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and need to extend the existing PMI definitions to meet
<br>
exascale
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;requirements.
<br>
<p><p>WHEN:   Mon, Aug 25
<br>
<p><p>WHERE:  <a href="https://github.com/rhc54/ompi-svn-mirror.git">https://github.com/rhc54/ompi-svn-mirror.git</a>
<br>
<p><p>Several community members have been working on a refactoring of the current
<br>
PMI support within OMPI. Although the APIs are common, Slurm and Cray
<br>
implement a different range of capabilities, and package them differently.
<br>
For example, Cray provides an integrated PMI-1/2 library, while Slurm
<br>
separates the two and requires the user to specify the one to be used at
<br>
runtime. In addition, several bugs in the Slurm implementations have caused
<br>
problems requiring extra coding.
<br>
<p><p>All this has led to a slew of #if&#226;&#128;&#153;s in the PMI code and bugs when the
<br>
corner-case logic for one implementation accidentally traps the other.
<br>
Extending this support to other implementations would have increased this
<br>
complexity to an unacceptable level.
<br>
<p><p>Accordingly, we have:
<br>
<p><p>* created a new OPAL &#226;&#128;&#156;pmix&#226;&#128;&#157; framework to abstract the PMI support, with
<br>
separate components for Cray, Slurm PMI-1, and Slurm PMI-2 implementations.
<br>
<p><p>* Replaced the current ORTE grpcomm daemon-based collective operation with
<br>
an integrated PMIx server, and updated the grpcomm APIs to provide more
<br>
flexible, multi-algorithm support for collective operations. At this time,
<br>
only the xcast and allgather operations are supported.
<br>
<p><p>* Replaced the current global collective id with a signature based on the
<br>
names of the participating procs. The allows an unlimited number of
<br>
collectives to be executed by any group of processes, subject to the
<br>
requirement that only one collective can be active at a time for a unique
<br>
combination of procs. Note that a proc can be involved in any number of
<br>
simultaneous collectives - it is the specific combination of procs that is
<br>
subject to the constraint
<br>
<p><p>* removed the prior OMPI/OPAL modex code
<br>
<p><p>* added new macros for executing modex send/recv to simplify use of the new
<br>
APIs. The send macros allow the caller to specify whether or not the BTL
<br>
supports async modex operations - if so, then the non-blocking &#226;&#128;&#156;fence&#226;&#128;&#157;
<br>
operation is used, if the active PMIx component supports it. Otherwise, the
<br>
default is a full blocking modex exchange as we currently perform.
<br>
<p><p>* retained the current flag that directs us to use a blocking fence
<br>
operation, but only to retrieve data upon demand
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15656/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15657.php">Pritchard Jr., Howard: "Re: [OMPI devel] RFC: Merge PMIx branch to trunk"</a>
<li><strong>Previous message:</strong> <a href="15655.php">George Bosilca: "Re: [OMPI devel] RFC: add opal/threads/spinlock.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15657.php">Pritchard Jr., Howard: "Re: [OMPI devel] RFC: Merge PMIx branch to trunk"</a>
<li><strong>Reply:</strong> <a href="15657.php">Pritchard Jr., Howard: "Re: [OMPI devel] RFC: Merge PMIx branch to trunk"</a>
<li><strong>Reply:</strong> <a href="15659.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Merge PMIx branch to trunk"</a>
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
