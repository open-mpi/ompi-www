<?
$subject_val = "Re: [OMPI devel] 1.7.x support statement";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct  6 15:13:07 2013" -->
<!-- isoreceived="20131006191307" -->
<!-- sent="Sun, 06 Oct 2013 21:13:00 +0200" -->
<!-- isosent="20131006191300" -->
<!-- name="marco atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.x support statement" -->
<!-- id="5251B63C.1050007_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F9202D6_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> marco atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-06 15:13:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13060.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  Dev meeting"</a>
<li><strong>Previous message:</strong> <a href="13058.php">Jeff Squyres (jsquyres): "[OMPI devel] Dev meeting"</a>
<li><strong>In reply to:</strong> <a href="13057.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.x support statement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13067.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.x support statement"</a>
<li><strong>Reply:</strong> <a href="13067.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.x support statement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Il 10/5/2013 1:35 AM, Jeff Squyres (jsquyres) ha scritto:
<br>
<span class="quotelev1">&gt; On Oct 4, 2013, at 8:38 AM, marco atzeri  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At first glance it does not seems particular user friendly nor with a clear HOWTO guide for good start.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How's this for a start:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="https://svn.open-mpi.org/trac/mtt/wiki/OMPITesting">https://svn.open-mpi.org/trac/mtt/wiki/OMPITesting</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Additional LWP::Protocol::https is not available so
</span><br>
<span class="quotelev2">&gt;&gt; some expectation are not fullfilled.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We might be able to work around this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anything as simple as
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://mvapich.cse.ohio-state.edu/benchmarks/">http://mvapich.cse.ohio-state.edu/benchmarks/</a>
</span><br>
<span class="quotelev2">&gt;&gt; is available for performing MTT tests ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me clarify: MTT is the engine to run MPI tests -- it's not MPI tests or benchmarks itself.  MTT is simply a way to download the nightly tarball, build it N ways, get lots of tests (e.g., the OSU benchmarks), compile each of them against each of the N OMPI builds, and then run each of those tests M different ways, and then submit those results up to our community database.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once you have MTT up and running, it can run fairly largely automated -- mine runs in a cron job, for example.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Jeff,
<br>
automating build on my hardware is a bit too much ;-)
<br>
as it is just a normal notebook and building on cygwin is a
<br>
slow process.
<br>
<p>Attached the outcome of testing with the default developer.ini
<br>
and the installed 1.7.2.
<br>
I assume mtt is working as expected. Correct ?
<br>
<p>Regards
<br>
Marco
<br>
<p><p><p><p><p>

<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13059/All_phase-summary.txt">All_phase-summary.txt</a>
</ul>
<!-- attachment="All_phase-summary.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13059/02-part">stored</a>
</ul>
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13060.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  Dev meeting"</a>
<li><strong>Previous message:</strong> <a href="13058.php">Jeff Squyres (jsquyres): "[OMPI devel] Dev meeting"</a>
<li><strong>In reply to:</strong> <a href="13057.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.x support statement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13067.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.x support statement"</a>
<li><strong>Reply:</strong> <a href="13067.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.x support statement"</a>
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
