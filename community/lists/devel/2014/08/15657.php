<?
$subject_val = "Re: [OMPI devel] RFC: Merge PMIx branch to trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 15 11:16:46 2014" -->
<!-- isoreceived="20140815151646" -->
<!-- sent="Fri, 15 Aug 2014 15:16:44 +0000" -->
<!-- isosent="20140815151644" -->
<!-- name="Pritchard Jr., Howard" -->
<!-- email="howardp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Merge PMIx branch to trunk" -->
<!-- id="5F6FB0CDAF4F98419A0D970E1F65ED05AD330D_at_ECS-EXG-P-MB05.win.lanl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAMD57oeN65mCwswNhS1o+AFYXjtrrxysrN8ApZ0s-S+cSpNGJA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Merge PMIx branch to trunk<br>
<strong>From:</strong> Pritchard Jr., Howard (<em>howardp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-15 11:16:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15658.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="15656.php">Ralph Castain: "[OMPI devel] RFC: Merge PMIx branch to trunk"</a>
<li><strong>In reply to:</strong> <a href="15656.php">Ralph Castain: "[OMPI devel] RFC: Merge PMIx branch to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15659.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Merge PMIx branch to trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>

<br>
I would also add that the branch has the advantage that one can actually launch jobs on
<br>
crays using aprun.  That direct launch capability is busted in trunk at this point.
<br>

<br>
Howard
<br>

<br>

<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Thursday, August 14, 2014 8:45 PM
<br>
To: Open MPI Developers
<br>
Subject: [OMPI devel] RFC: Merge PMIx branch to trunk
<br>

<br>

<br>
WHAT:    Merge the PMIx branch into the devel repo, creating a new
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL &#226;&#128;&#156;lmix&#226;&#128;&#157; framework to abstract PMI support for all RTEs.
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Replace the ORTE daemon-level collectives with a new PMIx
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;server and update the ORTE grpcomm framework to support
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;server-to-server collectives
<br>

<br>

<br>

<br>
WHY:      We&#226;&#128;&#153;ve had problems dealing with variations in PMI implementations,
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and need to extend the existing PMI definitions to meet exascale
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;requirements.
<br>

<br>

<br>

<br>
WHEN:   Mon, Aug 25
<br>

<br>

<br>

<br>
WHERE:  <a href="https://github.com/rhc54/ompi-svn-mirror.git">https://github.com/rhc54/ompi-svn-mirror.git</a>
<br>

<br>

<br>

<br>
Several community members have been working on a refactoring of the current PMI support within OMPI. Although the APIs are common, Slurm and Cray implement a different range of capabilities, and package them differently. For example, Cray provides an integrated PMI-1/2 library, while Slurm separates the two and requires the user to specify the one to be used at runtime. In addition, several bugs in the Slurm implementations have caused problems requiring extra coding.
<br>

<br>

<br>

<br>
All this has led to a slew of #if&#226;&#128;&#153;s in the PMI code and bugs when the corner-case logic for one implementation accidentally traps the other. Extending this support to other implementations would have increased this complexity to an unacceptable level.
<br>

<br>

<br>

<br>
Accordingly, we have:
<br>

<br>

<br>

<br>
* created a new OPAL &#226;&#128;&#156;pmix&#226;&#128;&#157; framework to abstract the PMI support, with separate components for Cray, Slurm PMI-1, and Slurm PMI-2 implementations.
<br>

<br>

<br>

<br>
* Replaced the current ORTE grpcomm daemon-based collective operation with an integrated PMIx server, and updated the grpcomm APIs to provide more flexible, multi-algorithm support for collective operations. At this time, only the xcast and allgather operations are supported.
<br>

<br>

<br>

<br>
* Replaced the current global collective id with a signature based on the names of the participating procs. The allows an unlimited number of collectives to be executed by any group of processes, subject to the requirement that only one collective can be active at a time for a unique combination of procs. Note that a proc can be involved in any number of simultaneous collectives - it is the specific combination of procs that is subject to the constraint
<br>

<br>

<br>

<br>
* removed the prior OMPI/OPAL modex code
<br>

<br>

<br>

<br>
* added new macros for executing modex send/recv to simplify use of the new APIs. The send macros allow the caller to specify whether or not the BTL supports async modex operations - if so, then the non-blocking &#226;&#128;&#156;fence&#226;&#128;&#157; operation is used, if the active PMIx component supports it. Otherwise, the default is a full blocking modex exchange as we currently perform.
<br>

<br>

<br>

<br>
* retained the current flag that directs us to use a blocking fence operation, but only to retrieve data upon demand
<br>

<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15657/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15658.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="15656.php">Ralph Castain: "[OMPI devel] RFC: Merge PMIx branch to trunk"</a>
<li><strong>In reply to:</strong> <a href="15656.php">Ralph Castain: "[OMPI devel] RFC: Merge PMIx branch to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15659.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Merge PMIx branch to trunk"</a>
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
