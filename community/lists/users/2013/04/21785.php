<?
$subject_val = "Re: [OMPI users] QLogic HCA random crash after prolonged use";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 24 12:32:19 2013" -->
<!-- isoreceived="20130424163219" -->
<!-- sent="Wed, 24 Apr 2013 09:32:10 -0700" -->
<!-- isosent="20130424163210" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] QLogic HCA random crash after prolonged use" -->
<!-- id="E5F279DC-2E74-44D9-BF04-8013B61CD8B5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87haivrkd8.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-24 12:32:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21786.php">Elken, Tom: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Previous message:</strong> <a href="21784.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>In reply to:</strong> <a href="21784.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21792.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Reply:</strong> <a href="21792.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 24, 2013, at 8:58 AM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; &quot;Elken, Tom&quot; &lt;tom.elken_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have seen it recommended to use psm instead of openib for QLogic cards.
</span><br>
<span class="quotelev2">&gt;&gt; [Tom] 
</span><br>
<span class="quotelev2">&gt;&gt; Yes.  PSM will perform better and be more stable when running OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; than using verbs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But unfortunately you won't be able to checkpoint.
</span><br>
<p>True - yet remember that OMPI no longer supports checkpoint/restart after the 1.6 series. Pending a new supporter coming along
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Intel has acquired the InfiniBand assets of QLogic
</span><br>
<span class="quotelev2">&gt;&gt; about a year ago.  These SDR HCAs are no longer supported, but should
</span><br>
<span class="quotelev2">&gt;&gt; still work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you mean they should work with the latest infinipath libraries
</span><br>
<span class="quotelev1">&gt; (despite what it said or implied in the notes for last version I got
</span><br>
<span class="quotelev1">&gt; from QLogic?) or possibly what's in RHEL?  I thought I'd actually tried
</span><br>
<span class="quotelev1">&gt; and failed with later stuff, but may just have gone by the release notes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You can get the driver (ib_qib) and PSM library from OFED 1.5.4.1 or
</span><br>
<span class="quotelev2">&gt;&gt; the current release OFED 3.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wonder if there's a version of the driver that's known to work in a
</span><br>
<span class="quotelev1">&gt; current RHEL5 system with QLE7140.  We get frequent qib-related kernel
</span><br>
<span class="quotelev1">&gt; panics from a vanilla RHEL5.9 kernel -- after running OK under test for
</span><br>
<span class="quotelev1">&gt; a few weeks, and nothing relevant appearing to have changed to cause
</span><br>
<span class="quotelev1">&gt; it...  (There's a trace on the redhat bugzilla with qib in the issue
</span><br>
<span class="quotelev1">&gt; title, for what it's worth.)  I'm currently reverting to old stuff.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's good if Infinipath-land is taking an interest in OMPI again, and
</span><br>
<span class="quotelev1">&gt; that the libraries are now under a free licence.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21786.php">Elken, Tom: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Previous message:</strong> <a href="21784.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>In reply to:</strong> <a href="21784.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21792.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Reply:</strong> <a href="21792.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
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
