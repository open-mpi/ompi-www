<?
$subject_val = "Re: [OMPI devel] Changed behaviour with PSM on master";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  9 14:25:27 2015" -->
<!-- isoreceived="20150109192527" -->
<!-- sent="Fri, 9 Jan 2015 12:25:27 -0700" -->
<!-- isosent="20150109192527" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Changed behaviour with PSM on master" -->
<!-- id="CAF1Cqj7p8jMiwmHzX9q7K8YkbfMo6PV=J=5eU2PQ94XBQSVfHA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="0429C22EBDB44040B478F8F77EF14518C951B2_at_ORSMSX114.amr.corp.intel.com" -->
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
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-09 14:25:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16769.php">Howard Pritchard: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>Previous message:</strong> <a href="16767.php">Howard Pritchard: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>In reply to:</strong> <a href="16766.php">Friedley, Andrew: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16769.php">Howard Pritchard: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI Folks,
<br>
<p>Sorry for my stupidity.  I now see the problem.  App is calling pmi_init
<br>
twice because
<br>
of the new ofiwg libfabric mtl.
<br>
<p>You can try
<br>
<p>mpirun blah blah blah --mca btl
<br>
<p>and things should work.
<br>
<p><p>Howard
<br>
<p><p>2015-01-09 7:52 GMT-07:00 Friedley, Andrew &lt;andrew.friedley_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; No this is not expected behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The PSM MTL code has not changed in 2 months, when I fixed that unused
</span><br>
<span class="quotelev1">&gt; variable warning for you.  That suggests something above the PSM MTL broke
</span><br>
<span class="quotelev1">&gt; things.  I see no reason your older software install should suddenly
</span><br>
<span class="quotelev1">&gt; stopping working if all you are updating is OMPI master -- at least with
</span><br>
<span class="quotelev1">&gt; respect to PSM anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error message is right, it's not possible to open more than one
</span><br>
<span class="quotelev1">&gt; context per process.  This hasn't changed.  It does indicate that maybe
</span><br>
<span class="quotelev1">&gt; something is causing the MTL to be opened twice in each process?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Adrian
</span><br>
<span class="quotelev2">&gt; &gt; Reber
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Friday, January 9, 2015 4:13 AM
</span><br>
<span class="quotelev2">&gt; &gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: [OMPI devel] Changed behaviour with PSM on master
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Running the mpi_test_suite on master used to work with no problems. At
</span><br>
<span class="quotelev2">&gt; &gt; some point in time it stopped working however and now I get only error
</span><br>
<span class="quotelev2">&gt; &gt; messages from PSM:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;&quot;&quot;
</span><br>
<span class="quotelev2">&gt; &gt; n050301:3.0.In PSM version 1.14, it is not possible to open more than
</span><br>
<span class="quotelev1">&gt; one
</span><br>
<span class="quotelev2">&gt; &gt; context per process
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [n050301:26526] Open MPI detected an unexpected PSM error in opening an
</span><br>
<span class="quotelev2">&gt; &gt; endpoint: In PSM version 1.14, it is not possible to open more than one
</span><br>
<span class="quotelev2">&gt; &gt; context per process &quot;&quot;&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I know that I do not have the newest version of the PSM library and that
</span><br>
<span class="quotelev1">&gt; I
</span><br>
<span class="quotelev2">&gt; &gt; need to update the library but as this requires many software packages
</span><br>
<span class="quotelev1">&gt; to be
</span><br>
<span class="quotelev2">&gt; &gt; re-compiled we are trying to avoid it on our CentOS6 based system.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My main question (probably for Andrew) is if this is an expected
</span><br>
<span class="quotelev1">&gt; behaviour
</span><br>
<span class="quotelev2">&gt; &gt; on master. It works on 1.8.x and it used to work on master at least
</span><br>
<span class="quotelev1">&gt; until 2014-
</span><br>
<span class="quotelev2">&gt; &gt; 12-08.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is the last MTT entry for working PSM (with my older version)
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://mtt.open-mpi.org/index.php?do_redir=2226">http://mtt.open-mpi.org/index.php?do_redir=2226</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and since a few days it fails on master
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://mtt.open-mpi.org/index.php?do_redir=2225">http://mtt.open-mpi.org/index.php?do_redir=2225</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On another system (RHEL7) with newer PSM libraries there is no such
</span><br>
<span class="quotelev1">&gt; error.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               Adrian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16766.php">http://www.open-mpi.org/community/lists/devel/2015/01/16766.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16768/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16769.php">Howard Pritchard: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>Previous message:</strong> <a href="16767.php">Howard Pritchard: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>In reply to:</strong> <a href="16766.php">Friedley, Andrew: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16769.php">Howard Pritchard: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
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
