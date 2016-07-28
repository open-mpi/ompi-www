<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 15 10:51:34 2005" -->
<!-- isoreceived="20050815155134" -->
<!-- sent="Mon, 15 Aug 2005 09:51:30 -0600" -->
<!-- isosent="20050815155130" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re:  linux paffinity component" -->
<!-- id="4300BA02.4050903_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b328e497c2a07a523c17572bd1a17d22_at_open-mpi.org" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-15 10:51:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0154.php">Jeff Squyres: "Re:  linux paffinity component"</a>
<li><strong>Previous message:</strong> <a href="0152.php">Jeff Squyres: "linux paffinity component"</a>
<li><strong>In reply to:</strong> <a href="0152.php">Jeff Squyres: "linux paffinity component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0154.php">Jeff Squyres: "Re:  linux paffinity component"</a>
<li><strong>Reply:</strong> <a href="0154.php">Jeff Squyres: "Re:  linux paffinity component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is a problem in the linux code:
<br>
<p><p>[twoodall_at_roadkill linux]$ svn diff
<br>
Index: paffinity_linux_module.c
<br>
===================================================================
<br>
--- paffinity_linux_module.c    (revision 6884)
<br>
+++ paffinity_linux_module.c    (working copy)
<br>
@@ -162,7 +162,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We do not have the CPU_ZERO(), CPU_SET(), CPU_ISSET(), etc. macros.
<br>
&nbsp;&nbsp;&nbsp;************************************************************************/
<br>
<p>-static int make_mask(unsigned int &amp;len, unsigned long **mask)
<br>
+static int make_mask(unsigned int *len, unsigned long **mask)
<br>
&nbsp;&nbsp;{
<br>
<p><p>Tim
<br>
<p><p>[twoodall_at_roadkill linux]$
<br>
<p><span class="quotelev1">&gt; Is anyone having problems compiling the &quot;linux&quot; paffinity component?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It turns out that there are *3* different implementations of the Linux 
</span><br>
<span class="quotelev1">&gt; system call sched_setaffinity() (and 3 different corresponding 
</span><br>
<span class="quotelev1">&gt; prototypes -- #@$@#$%!!!).  The differences seem to be loosely 
</span><br>
<span class="quotelev1">&gt; categorized as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. implementation that was back-ported to 2.4 kernels (the one that is 
</span><br>
<span class="quotelev1">&gt; listed in sched_setaffinity(2))
</span><br>
<span class="quotelev1">&gt; 2. implementation in early 2.6 kernels
</span><br>
<span class="quotelev1">&gt; 3. implementation in later 2.6 kernels
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (although there seem to be some exceptions to the above categorization)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Plus, at least some 2.4 kernels seem to have broken aspects.  Or is it 
</span><br>
<span class="quotelev1">&gt; glibc?  Who knows, who cares: in some places, the CPU_ZERO() macro 
</span><br>
<span class="quotelev1">&gt; won't compile.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The default code path is for case #3.  I have fixes for all cases ready 
</span><br>
<span class="quotelev1">&gt; to commit, but they involve changes to that component's configure.m4, 
</span><br>
<span class="quotelev1">&gt; which means making everyone re-run autogen.sh.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unless someone is actively running into compilation problems now, I was 
</span><br>
<span class="quotelev1">&gt; planning until waiting until tonight to commit (observing the &quot;try not 
</span><br>
<span class="quotelev1">&gt; to cause people to re-run autogen.sh during the US work day&quot; rule).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0154.php">Jeff Squyres: "Re:  linux paffinity component"</a>
<li><strong>Previous message:</strong> <a href="0152.php">Jeff Squyres: "linux paffinity component"</a>
<li><strong>In reply to:</strong> <a href="0152.php">Jeff Squyres: "linux paffinity component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0154.php">Jeff Squyres: "Re:  linux paffinity component"</a>
<li><strong>Reply:</strong> <a href="0154.php">Jeff Squyres: "Re:  linux paffinity component"</a>
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
