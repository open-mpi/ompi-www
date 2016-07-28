<?
$subject_val = "Re: [OMPI users] QLogic HCA random crash after prolonged use";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 24 11:58:34 2013" -->
<!-- isoreceived="20130424155834" -->
<!-- sent="Wed, 24 Apr 2013 16:58:27 +0100" -->
<!-- isosent="20130424155827" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] QLogic HCA random crash after prolonged use" -->
<!-- id="87haivrkd8.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1182FB2B5679CE4B8BAD97725F014BB7327DA763_at_ORSMSX154.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] QLogic HCA random crash after prolonged use<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-24 11:58:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21785.php">Ralph Castain: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Previous message:</strong> <a href="21783.php">Thomas Watson: "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<li><strong>In reply to:</strong> <a href="21757.php">Elken, Tom: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21785.php">Ralph Castain: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Reply:</strong> <a href="21785.php">Ralph Castain: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Reply:</strong> <a href="21786.php">Elken, Tom: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Elken, Tom&quot; &lt;tom.elken_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev2">&gt;&gt; I have seen it recommended to use psm instead of openib for QLogic cards.
</span><br>
<span class="quotelev1">&gt; [Tom] 
</span><br>
<span class="quotelev1">&gt; Yes.  PSM will perform better and be more stable when running OpenMPI
</span><br>
<span class="quotelev1">&gt; than using verbs.
</span><br>
<p>But unfortunately you won't be able to checkpoint.
<br>
<p><span class="quotelev1">&gt; Intel has acquired the InfiniBand assets of QLogic
</span><br>
<span class="quotelev1">&gt; about a year ago.  These SDR HCAs are no longer supported, but should
</span><br>
<span class="quotelev1">&gt; still work.
</span><br>
<p>Do you mean they should work with the latest infinipath libraries
<br>
(despite what it said or implied in the notes for last version I got
<br>
from QLogic?) or possibly what's in RHEL?  I thought I'd actually tried
<br>
and failed with later stuff, but may just have gone by the release notes.
<br>
<p><span class="quotelev1">&gt; You can get the driver (ib_qib) and PSM library from OFED 1.5.4.1 or
</span><br>
<span class="quotelev1">&gt; the current release OFED 3.5.
</span><br>
<p>I wonder if there's a version of the driver that's known to work in a
<br>
current RHEL5 system with QLE7140.  We get frequent qib-related kernel
<br>
panics from a vanilla RHEL5.9 kernel -- after running OK under test for
<br>
a few weeks, and nothing relevant appearing to have changed to cause
<br>
it...  (There's a trace on the redhat bugzilla with qib in the issue
<br>
title, for what it's worth.)  I'm currently reverting to old stuff.
<br>
<p>It's good if Infinipath-land is taking an interest in OMPI again, and
<br>
that the libraries are now under a free licence.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21785.php">Ralph Castain: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Previous message:</strong> <a href="21783.php">Thomas Watson: "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<li><strong>In reply to:</strong> <a href="21757.php">Elken, Tom: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21785.php">Ralph Castain: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Reply:</strong> <a href="21785.php">Ralph Castain: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Reply:</strong> <a href="21786.php">Elken, Tom: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
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
