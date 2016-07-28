<?
$subject_val = "Re: [OMPI devel] Opal atomics question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 26 21:01:16 2015" -->
<!-- isoreceived="20150327010116" -->
<!-- sent="Fri, 27 Mar 2015 01:01:10 +0000" -->
<!-- isosent="20150327010110" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Opal atomics question" -->
<!-- id="20150327100109.1eaa3059cb5c0b08d9b3c071_at_jp.fujitsu.com" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="CAAkFZ5tPUrrj7ZpoOA7gLEaCZAPeM0djJqqG7Hy97QjiuPkMqg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Opal atomics question<br>
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-26 21:01:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17170.php">Orion Poplawski: "Re: [OMPI devel] hangs/crashes with openmpi-1.8.4-99-20150228"</a>
<li><strong>Previous message:</strong> <a href="17168.php">Ralph Castain: "Re: [OMPI devel] Opal atomics question"</a>
<li><strong>In reply to:</strong> <a href="17167.php">Gilles Gouaillardet: "Re: [OMPI devel] Opal atomics question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, Fujitsu MPI is running on sparcv9-compatible CPU.
<br>
Though we currently use only stable-series (v1.6, v1.8),
<br>
they work fine.
<br>
<p>Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>
<p><span class="quotelev1">&gt; Nathan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fujitsu MPI is openmpi based and is running on their sparcv9 like proc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Friday, March 27, 2015, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As a follow-on. How many of our supported architectures should we
</span><br>
<span class="quotelev2">&gt; &gt; continue to support. The current supported list is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; alpha
</span><br>
<span class="quotelev2">&gt; &gt; amd64*
</span><br>
<span class="quotelev2">&gt; &gt; arm*
</span><br>
<span class="quotelev2">&gt; &gt; ia32*
</span><br>
<span class="quotelev2">&gt; &gt; ia64
</span><br>
<span class="quotelev2">&gt; &gt; mips
</span><br>
<span class="quotelev2">&gt; &gt; osx*
</span><br>
<span class="quotelev2">&gt; &gt; powerpc*
</span><br>
<span class="quotelev2">&gt; &gt; sparcv9
</span><br>
<span class="quotelev2">&gt; &gt; sync_builtin*
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; * - known to be in-use.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Additionally, should we continue to support the atomics in opal/asm?
</span><br>
<span class="quotelev2">&gt; &gt; Some of those are known to be wrong and most compilers support in-line
</span><br>
<span class="quotelev2">&gt; &gt; assembly.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Nathan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Mar 26, 2015 at 09:22:39AM -0600, Nathan Hjelm wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am working on cleaning up the atomics in opal and I noticed something
</span><br>
<span class="quotelev3">&gt; &gt; &gt; odd. We define opal_atomic_sub_32 and opal_atomic_sub_64 yet only use
</span><br>
<span class="quotelev3">&gt; &gt; &gt; opal_atomic_sub_32 once:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ./opal/runtime/opal_progress.c:    val =
</span><br>
<span class="quotelev2">&gt; &gt; opal_atomic_sub_32(&amp;num_event_users, 1);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This could easily be changed to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; val = opal_atomic_add_32(&amp;num_event_users, -1);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; And then we could remove all both opal_atomic_sub_32 and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; opal_atomic_sub_64. Is there a reason to leave these functions in opal?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -Nathan
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17170.php">Orion Poplawski: "Re: [OMPI devel] hangs/crashes with openmpi-1.8.4-99-20150228"</a>
<li><strong>Previous message:</strong> <a href="17168.php">Ralph Castain: "Re: [OMPI devel] Opal atomics question"</a>
<li><strong>In reply to:</strong> <a href="17167.php">Gilles Gouaillardet: "Re: [OMPI devel] Opal atomics question"</a>
<!-- nextthread="start" -->
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
