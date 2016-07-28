<?
$subject_val = "Re: [OMPI devel] 1.7.x support statement";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  4 19:35:38 2013" -->
<!-- isoreceived="20131004233538" -->
<!-- sent="Fri, 4 Oct 2013 23:35:36 +0000" -->
<!-- isosent="20131004233536" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.x support statement" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F9202D6_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="524EB6D4.70303_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.x support statement<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-04 19:35:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13058.php">Jeff Squyres (jsquyres): "[OMPI devel] Dev meeting"</a>
<li><strong>Previous message:</strong> <a href="13056.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem 32 bit compile failures"</a>
<li><strong>In reply to:</strong> <a href="13053.php">marco atzeri: "Re: [OMPI devel] 1.7.x support statement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13059.php">marco atzeri: "Re: [OMPI devel] 1.7.x support statement"</a>
<li><strong>Reply:</strong> <a href="13059.php">marco atzeri: "Re: [OMPI devel] 1.7.x support statement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 4, 2013, at 8:38 AM, marco atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; At first glance it does not seems particular user friendly nor with a clear HOWTO guide for good start.
</span><br>
<p>How's this for a start:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/mtt/wiki/OMPITesting">https://svn.open-mpi.org/trac/mtt/wiki/OMPITesting</a>
<br>
<p><span class="quotelev1">&gt; Additional LWP::Protocol::https is not available so
</span><br>
<span class="quotelev1">&gt; some expectation are not fullfilled.
</span><br>
<p>We might be able to work around this.
<br>
<p><span class="quotelev1">&gt; Anything as simple as
</span><br>
<span class="quotelev1">&gt;   <a href="http://mvapich.cse.ohio-state.edu/benchmarks/">http://mvapich.cse.ohio-state.edu/benchmarks/</a>
</span><br>
<span class="quotelev1">&gt; is available for performing MTT tests ?
</span><br>
<p>Let me clarify: MTT is the engine to run MPI tests -- it's not MPI tests or benchmarks itself.  MTT is simply a way to download the nightly tarball, build it N ways, get lots of tests (e.g., the OSU benchmarks), compile each of them against each of the N OMPI builds, and then run each of those tests M different ways, and then submit those results up to our community database.
<br>
<p>Once you have MTT up and running, it can run fairly largely automated -- mine runs in a cron job, for example.
<br>
<p>Make sense?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13058.php">Jeff Squyres (jsquyres): "[OMPI devel] Dev meeting"</a>
<li><strong>Previous message:</strong> <a href="13056.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem 32 bit compile failures"</a>
<li><strong>In reply to:</strong> <a href="13053.php">marco atzeri: "Re: [OMPI devel] 1.7.x support statement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13059.php">marco atzeri: "Re: [OMPI devel] 1.7.x support statement"</a>
<li><strong>Reply:</strong> <a href="13059.php">marco atzeri: "Re: [OMPI devel] 1.7.x support statement"</a>
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
