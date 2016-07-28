<?
$subject_val = "Re: [OMPI devel] v1.5 r25914 DOA";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 22 15:23:52 2012" -->
<!-- isoreceived="20120222202352" -->
<!-- sent="Wed, 22 Feb 2012 21:23:46 +0100" -->
<!-- isosent="20120222202346" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5 r25914 DOA" -->
<!-- id="4F454ED2.1090106_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F4540D7.2010200_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.5 r25914 DOA<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-22 15:23:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10567.php">Jeffrey Squyres: "[OMPI devel] 1.5 supported systems"</a>
<li><strong>Previous message:</strong> <a href="10565.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<li><strong>In reply to:</strong> <a href="10563.php">Eugene Loh: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10550.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 22/02/2012 20:24, Eugene Loh a &#233;crit :
<br>
<span class="quotelev1">&gt; On 2/22/2012 11:08 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 22, 2012, at 11:59 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 22/02/2012 17:48, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Feb 22, 2012, at 9:39 AM, Eugene Loh wrote
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 2/21/2012 10:31 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ...  &quot;sockets&quot; is unknown and hwloc returns 0 for num_sockets and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; OMPI pukes on divide by zero.  OS info was listed in the original
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; message (below).  Might we want to do something else?  E.g.,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; assume num_sockets==1 when num_sockets==0 (if you know what I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mean)?  So, which one (or more) of the following should be fixed?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *) on this platform, hwloc finds no socket level
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *) therefore hwloc returns num_sockets==0 to OMPI
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *) OMPI divides by 0 and barfs on basically everything
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Okay.  So, Brice's other e-mail indicates that the first two are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;not really uncommon&quot;:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 2/22/2012 7:55 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Anyway, we have seen other systems (mostly non-Linux) where lstopo
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; reports nothing interesting (only one machine object with
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; multiple PU
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; children). So numsockets==0 isn't really uncommon.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So, it seems to me that OMPI needs to handle the num_sockets==0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; case rather than just dividing by num_sockets.  This is v1.5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; orte_odls_base_open() since r25914.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Unfortunately, just artificially setting the num_sockets to 1 won't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; solve much - you'll get past that point in the code, but attempts
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to bind are likely to fail down the road. Fixing it will require
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; some significant effort.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Given we haven't heard reports of this before, I'm not convinced it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is a widespread problem.
</span><br>
<span class="quotelev1">&gt; I assume we don't see the problem as widespread because it was only
</span><br>
<span class="quotelev1">&gt; introduced into  v1.5 in r25914.  In my mind, the real question is how
</span><br>
<span class="quotelev1">&gt; common it is for hwloc to decide numsockets==0.  On that one, Brice
</span><br>
<span class="quotelev1">&gt; asserts it &quot;isn't really uncommon.&quot;
</span><br>
<p>On Linux, it's uncommon: it only happens on some platforms with very old
<br>
kernels (2.6.10 or so).
<br>
Solaris, Darwin and Windows should get sockets in some/most cases.
<br>
FreeBSD should get x86 sockets correctly because we use cpuid directly
<br>
there.
<br>
<p>Unless I am missing something, others have nothing related to sockets in
<br>
their driver: AIX, HPUX, OSF.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10567.php">Jeffrey Squyres: "[OMPI devel] 1.5 supported systems"</a>
<li><strong>Previous message:</strong> <a href="10565.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<li><strong>In reply to:</strong> <a href="10563.php">Eugene Loh: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10550.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
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
