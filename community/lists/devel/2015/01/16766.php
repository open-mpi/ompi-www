<?
$subject_val = "Re: [OMPI devel] Changed behaviour with PSM on master";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  9 09:52:23 2015" -->
<!-- isoreceived="20150109145223" -->
<!-- sent="Fri, 9 Jan 2015 14:52:22 +0000" -->
<!-- isosent="20150109145222" -->
<!-- name="Friedley, Andrew" -->
<!-- email="andrew.friedley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Changed behaviour with PSM on master" -->
<!-- id="0429C22EBDB44040B478F8F77EF14518C951B2_at_ORSMSX114.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150109121234.GK23217_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Changed behaviour with PSM on master<br>
<strong>From:</strong> Friedley, Andrew (<em>andrew.friedley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-09 09:52:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16767.php">Howard Pritchard: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>Previous message:</strong> <a href="16765.php">Adrian Reber: "[OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>In reply to:</strong> <a href="16765.php">Adrian Reber: "[OMPI devel] Changed behaviour with PSM on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16767.php">Howard Pritchard: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>Reply:</strong> <a href="16767.php">Howard Pritchard: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>Reply:</strong> <a href="16768.php">Howard Pritchard: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>Reply:</strong> <a href="16769.php">Howard Pritchard: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No this is not expected behavior.
<br>
<p>The PSM MTL code has not changed in 2 months, when I fixed that unused variable warning for you.  That suggests something above the PSM MTL broke things.  I see no reason your older software install should suddenly stopping working if all you are updating is OMPI master -- at least with respect to PSM anyway.
<br>
<p>The error message is right, it's not possible to open more than one context per process.  This hasn't changed.  It does indicate that maybe something is causing the MTL to be opened twice in each process?
<br>
<p>Andrew
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Adrian
</span><br>
<span class="quotelev1">&gt; Reber
</span><br>
<span class="quotelev1">&gt; Sent: Friday, January 9, 2015 4:13 AM
</span><br>
<span class="quotelev1">&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] Changed behaviour with PSM on master
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Running the mpi_test_suite on master used to work with no problems. At
</span><br>
<span class="quotelev1">&gt; some point in time it stopped working however and now I get only error
</span><br>
<span class="quotelev1">&gt; messages from PSM:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;&quot;&quot;
</span><br>
<span class="quotelev1">&gt; n050301:3.0.In PSM version 1.14, it is not possible to open more than one
</span><br>
<span class="quotelev1">&gt; context per process
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [n050301:26526] Open MPI detected an unexpected PSM error in opening an
</span><br>
<span class="quotelev1">&gt; endpoint: In PSM version 1.14, it is not possible to open more than one
</span><br>
<span class="quotelev1">&gt; context per process &quot;&quot;&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know that I do not have the newest version of the PSM library and that I
</span><br>
<span class="quotelev1">&gt; need to update the library but as this requires many software packages to be
</span><br>
<span class="quotelev1">&gt; re-compiled we are trying to avoid it on our CentOS6 based system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My main question (probably for Andrew) is if this is an expected behaviour
</span><br>
<span class="quotelev1">&gt; on master. It works on 1.8.x and it used to work on master at least until 2014-
</span><br>
<span class="quotelev1">&gt; 12-08.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the last MTT entry for working PSM (with my older version)
</span><br>
<span class="quotelev1">&gt; <a href="http://mtt.open-mpi.org/index.php?do_redir=2226">http://mtt.open-mpi.org/index.php?do_redir=2226</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and since a few days it fails on master
</span><br>
<span class="quotelev1">&gt; <a href="http://mtt.open-mpi.org/index.php?do_redir=2225">http://mtt.open-mpi.org/index.php?do_redir=2225</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On another system (RHEL7) with newer PSM libraries there is no such error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		Adrian
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16767.php">Howard Pritchard: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>Previous message:</strong> <a href="16765.php">Adrian Reber: "[OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>In reply to:</strong> <a href="16765.php">Adrian Reber: "[OMPI devel] Changed behaviour with PSM on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16767.php">Howard Pritchard: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>Reply:</strong> <a href="16767.php">Howard Pritchard: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>Reply:</strong> <a href="16768.php">Howard Pritchard: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>Reply:</strong> <a href="16769.php">Howard Pritchard: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
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
