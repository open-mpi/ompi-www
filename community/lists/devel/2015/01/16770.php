<?
$subject_val = "Re: [OMPI devel] Changed behaviour with PSM on master";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  9 15:04:33 2015" -->
<!-- isoreceived="20150109200433" -->
<!-- sent="Fri, 9 Jan 2015 21:04:32 +0100" -->
<!-- isosent="20150109200432" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Changed behaviour with PSM on master" -->
<!-- id="20150109200432.GB4553_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj5Hf=uDEZN-FrPhpcLafn8k56RCOC1uk97AoZ1xiZ2XCw_at_mail.gmail.com" -->
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
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-09 15:04:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16771.php">Ralph Castain: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>Previous message:</strong> <a href="16769.php">Howard Pritchard: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>In reply to:</strong> <a href="16769.php">Howard Pritchard: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16771.php">Ralph Castain: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>Reply:</strong> <a href="16771.php">Ralph Castain: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>Reply:</strong> <a href="16772.php">Howard Pritchard: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Should I still open a ticket? Will these be changed or do I always have
<br>
to provide '--mca mtl psm' in the future?
<br>
<p>On Fri, Jan 09, 2015 at 12:27:59PM -0700, Howard Pritchard wrote:
<br>
<span class="quotelev1">&gt; HI Adrian, Andrew,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry try again,  both the libfabric psm provider and the open mpi psm
</span><br>
<span class="quotelev1">&gt; mtl are trying to use psm_init.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, to avoid this problem, add
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --mca mtl psm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to your mpirun command line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for the confusion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2015-01-09 7:52 GMT-07:00 Friedley, Andrew &lt;andrew.friedley_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; No this is not expected behavior.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The PSM MTL code has not changed in 2 months, when I fixed that unused
</span><br>
<span class="quotelev2">&gt; &gt; variable warning for you.  That suggests something above the PSM MTL broke
</span><br>
<span class="quotelev2">&gt; &gt; things.  I see no reason your older software install should suddenly
</span><br>
<span class="quotelev2">&gt; &gt; stopping working if all you are updating is OMPI master -- at least with
</span><br>
<span class="quotelev2">&gt; &gt; respect to PSM anyway.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The error message is right, it's not possible to open more than one
</span><br>
<span class="quotelev2">&gt; &gt; context per process.  This hasn't changed.  It does indicate that maybe
</span><br>
<span class="quotelev2">&gt; &gt; something is causing the MTL to be opened twice in each process?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Andrew
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Adrian
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Reber
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Sent: Friday, January 9, 2015 4:13 AM
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: [OMPI devel] Changed behaviour with PSM on master
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Running the mpi_test_suite on master used to work with no problems. At
</span><br>
<span class="quotelev3">&gt; &gt; &gt; some point in time it stopped working however and now I get only error
</span><br>
<span class="quotelev3">&gt; &gt; &gt; messages from PSM:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;&quot;&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; n050301:3.0.In PSM version 1.14, it is not possible to open more than
</span><br>
<span class="quotelev2">&gt; &gt; one
</span><br>
<span class="quotelev3">&gt; &gt; &gt; context per process
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n050301:26526] Open MPI detected an unexpected PSM error in opening an
</span><br>
<span class="quotelev3">&gt; &gt; &gt; endpoint: In PSM version 1.14, it is not possible to open more than one
</span><br>
<span class="quotelev3">&gt; &gt; &gt; context per process &quot;&quot;&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I know that I do not have the newest version of the PSM library and that
</span><br>
<span class="quotelev2">&gt; &gt; I
</span><br>
<span class="quotelev3">&gt; &gt; &gt; need to update the library but as this requires many software packages
</span><br>
<span class="quotelev2">&gt; &gt; to be
</span><br>
<span class="quotelev3">&gt; &gt; &gt; re-compiled we are trying to avoid it on our CentOS6 based system.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; My main question (probably for Andrew) is if this is an expected
</span><br>
<span class="quotelev2">&gt; &gt; behaviour
</span><br>
<span class="quotelev3">&gt; &gt; &gt; on master. It works on 1.8.x and it used to work on master at least
</span><br>
<span class="quotelev2">&gt; &gt; until 2014-
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 12-08.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This is the last MTT entry for working PSM (with my older version)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://mtt.open-mpi.org/index.php?do_redir=2226">http://mtt.open-mpi.org/index.php?do_redir=2226</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and since a few days it fails on master
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://mtt.open-mpi.org/index.php?do_redir=2225">http://mtt.open-mpi.org/index.php?do_redir=2225</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On another system (RHEL7) with newer PSM libraries there is no such
</span><br>
<span class="quotelev2">&gt; &gt; error.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;               Adrian
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16766.php">http://www.open-mpi.org/community/lists/devel/2015/01/16766.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16769.php">http://www.open-mpi.org/community/lists/devel/2015/01/16769.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16771.php">Ralph Castain: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>Previous message:</strong> <a href="16769.php">Howard Pritchard: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>In reply to:</strong> <a href="16769.php">Howard Pritchard: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16771.php">Ralph Castain: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>Reply:</strong> <a href="16771.php">Ralph Castain: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>Reply:</strong> <a href="16772.php">Howard Pritchard: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
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
