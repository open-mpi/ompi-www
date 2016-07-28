<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 15 11:25:15 2005" -->
<!-- isoreceived="20050815162515" -->
<!-- sent="Mon, 15 Aug 2005 12:25:15 -0400" -->
<!-- isosent="20050815162515" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  linux paffinity component" -->
<!-- id="4bb62230de737d7675b19e7f7c0eec32_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4300BA02.4050903_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-15 11:25:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0155.php">Brian Barrett: "another mind bending mca configure update from Brian"</a>
<li><strong>Previous message:</strong> <a href="0153.php">Tim S. Woodall: "Re:  linux paffinity component"</a>
<li><strong>In reply to:</strong> <a href="0153.php">Tim S. Woodall: "Re:  linux paffinity component"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ya -- that's part of the fixes for case 1.
<br>
<p>I just committed that one fix -- assumedly that's enough for you for  
<br>
the time being? (or do you want me to commit the rest of the fixes?)
<br>
<p>Nothing calls this code yet, so if it compiles/links, you're fine.
<br>
<p><p><p>On Aug 15, 2005, at 11:51 AM, Tim S. Woodall wrote:
<br>
<p><span class="quotelev1">&gt; There is a problem in the linux code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [twoodall_at_roadkill linux]$ svn diff
</span><br>
<span class="quotelev1">&gt; Index: paffinity_linux_module.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- paffinity_linux_module.c    (revision 6884)
</span><br>
<span class="quotelev1">&gt; +++ paffinity_linux_module.c    (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -162,7 +162,7 @@
</span><br>
<span class="quotelev1">&gt;      We do not have the CPU_ZERO(), CPU_SET(), CPU_ISSET(), etc.  
</span><br>
<span class="quotelev1">&gt; macros.
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; *********************************************************************** 
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -static int make_mask(unsigned int &amp;len, unsigned long **mask)
</span><br>
<span class="quotelev1">&gt; +static int make_mask(unsigned int *len, unsigned long **mask)
</span><br>
<span class="quotelev1">&gt;   {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [twoodall_at_roadkill linux]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is anyone having problems compiling the &quot;linux&quot; paffinity component?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It turns out that there are *3* different implementations of the Linux
</span><br>
<span class="quotelev2">&gt;&gt; system call sched_setaffinity() (and 3 different corresponding
</span><br>
<span class="quotelev2">&gt;&gt; prototypes -- #@$@#$%!!!).  The differences seem to be loosely
</span><br>
<span class="quotelev2">&gt;&gt; categorized as:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. implementation that was back-ported to 2.4 kernels (the one that is
</span><br>
<span class="quotelev2">&gt;&gt; listed in sched_setaffinity(2))
</span><br>
<span class="quotelev2">&gt;&gt; 2. implementation in early 2.6 kernels
</span><br>
<span class="quotelev2">&gt;&gt; 3. implementation in later 2.6 kernels
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (although there seem to be some exceptions to the above  
</span><br>
<span class="quotelev2">&gt;&gt; categorization)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Plus, at least some 2.4 kernels seem to have broken aspects.  Or is it
</span><br>
<span class="quotelev2">&gt;&gt; glibc?  Who knows, who cares: in some places, the CPU_ZERO() macro
</span><br>
<span class="quotelev2">&gt;&gt; won't compile.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The default code path is for case #3.  I have fixes for all cases  
</span><br>
<span class="quotelev2">&gt;&gt; ready
</span><br>
<span class="quotelev2">&gt;&gt; to commit, but they involve changes to that component's configure.m4,
</span><br>
<span class="quotelev2">&gt;&gt; which means making everyone re-run autogen.sh.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unless someone is actively running into compilation problems now, I  
</span><br>
<span class="quotelev2">&gt;&gt; was
</span><br>
<span class="quotelev2">&gt;&gt; planning until waiting until tonight to commit (observing the &quot;try not
</span><br>
<span class="quotelev2">&gt;&gt; to cause people to re-run autogen.sh during the US work day&quot; rule).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0155.php">Brian Barrett: "another mind bending mca configure update from Brian"</a>
<li><strong>Previous message:</strong> <a href="0153.php">Tim S. Woodall: "Re:  linux paffinity component"</a>
<li><strong>In reply to:</strong> <a href="0153.php">Tim S. Woodall: "Re:  linux paffinity component"</a>
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
