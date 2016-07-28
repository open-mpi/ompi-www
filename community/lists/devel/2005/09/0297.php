<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep  2 03:13:27 2005" -->
<!-- isoreceived="20050902081327" -->
<!-- sent="Fri, 2 Sep 2005 10:13:12 +0200" -->
<!-- isosent="20050902081312" -->
<!-- name="Peter Kjellstr&#246;m" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re:  configure hangs in libtool.." -->
<!-- id="200509021013.19466.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20050826173751.GA2989_at_uni-bonn.de" -->
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
<strong>From:</strong> Peter Kjellstr&#246;m (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-02 03:13:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0298.php">Jeff Squyres: "IMPORTANT: Libtool version"</a>
<li><strong>Previous message:</strong> <a href="0296.php">Brian Barrett: "Re:  gm configure status"</a>
<li><strong>In reply to:</strong> <a href="../../2005/08/0253.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Friday 26 August 2005 19.37, Ralf Wildenhues wrote:
<br>
<span class="quotelev1">&gt; * Peter Kjellstr&#246;m wrote on Fri, Aug 26, 2005 at 06:24:43PM CEST:
</span><br>
<span class="quotelev2">&gt; &gt; On Friday 26 August 2005 18.04, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Libtool version previous to 1.5.16 had a bug in the macro to detect
</span><br>
<span class="quotelev3">&gt; &gt; &gt; this; it was often wrong before.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; my libtool is indeed rather ancient compared to 1.5.16, I knew ompi
</span><br>
<span class="quotelev2">&gt; &gt; needed a recent one but had assumed that an updated centos-4.1 (rhel4u1)
</span><br>
<span class="quotelev2">&gt; &gt; would be enough... (I have 1.5.6)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Either way, I have managed to build ompi before so I looked deeper and
</span><br>
<span class="quotelev2">&gt; &gt; found out that the intel compilers had been updated under my feet (-027
</span><br>
<span class="quotelev2">&gt; &gt; to -029). Switching back made configure run just fine...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK.  But see, I'd still like to know whether libtool-1.5.18 copes with
</span><br>
<span class="quotelev1">&gt; your newer icc.  I can't fix it (given there is something to fix) unless
</span><br>
<span class="quotelev1">&gt; I know about the failure.
</span><br>
<p>Just to end this thread nicely, I was able to build svn7132 with icc-8.1e-029 
<br>
just fine (now with recommended libtool&amp;co). I think we fixed a bug in our 
<br>
compiler installation too so I'm not sure if it was the libtool upgrade or 
<br>
not but either way it works now :-)
<br>
<p>/Peter
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<p>
<br><p>
<p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="../../att-0297/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0298.php">Jeff Squyres: "IMPORTANT: Libtool version"</a>
<li><strong>Previous message:</strong> <a href="0296.php">Brian Barrett: "Re:  gm configure status"</a>
<li><strong>In reply to:</strong> <a href="../../2005/08/0253.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
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
