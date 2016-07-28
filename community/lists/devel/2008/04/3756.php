<?
$subject_val = "Re: [OMPI devel] Fix for XLC + libtool issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 08:01:33 2008" -->
<!-- isoreceived="20080425120133" -->
<!-- sent="Fri, 25 Apr 2008 14:01:26 +0200" -->
<!-- isosent="20080425120126" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fix for XLC + libtool issue" -->
<!-- id="20080425120126.GC18187_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7012B9BC-85F5-4A38-B5D9-9BA95A5768BA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fix for XLC + libtool issue<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-25 08:01:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3757.php">Jeff Squyres: "Re: [OMPI devel] Loadbalancing"</a>
<li><strong>Previous message:</strong> <a href="3755.php">Jeff Squyres: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<li><strong>In reply to:</strong> <a href="3755.php">Jeff Squyres: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3759.php">Sérgio Durigan Júnior: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Jeff Squyres wrote on Fri, Apr 25, 2008 at 01:54:39PM CEST:
<br>
<span class="quotelev1">&gt; On Apr 25, 2008, at 7:40 AM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &lt;<a href="http://thread.gmane.org/gmane.comp.sysutils.autoconf.patches/3985">http://thread.gmane.org/gmane.comp.sysutils.autoconf.patches/3985</a>&gt;
</span><br>
<span class="quotelev1">&gt; Wow -- those timings are impressive!  Quoting that URL (OMPI is [1]):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; For example[1], in a large package with 871 substituted variables, of  
</span><br>
<span class="quotelev1">&gt; which 2*136 are produced by AM_CONDITIONAL, and roughly 210 Makefiles.  
</span><br>
<span class="quotelev1">&gt; './config.status' execution for those Makefiles (no headers, no  
</span><br>
<span class="quotelev1">&gt; depfiles):
</span><br>
<span class="quotelev1">&gt; - with Automake-1.9.6: 78.54user 9.32system 1:38.60elapsed 89%CPU  
</span><br>
<span class="quotelev1">&gt; (0avgtext+0avgdata 0maxresident)k 0inputs+0outputs (0major 
</span><br>
<span class="quotelev1">&gt; +2551217minor)pagefaults 0swaps
</span><br>
<span class="quotelev1">&gt; - with Automake 1.10 (no superfluous $(*_TRUE)/$(*_FALSE) settings):  
</span><br>
<span class="quotelev1">&gt; 56.11user 8.31system 1:16.51elapsed 84%CPU (0avgtext+0avgdata  
</span><br>
<span class="quotelev1">&gt; 0maxresident)k 0inputs+0outputs (0major+2284709minor)pagefaults 0swaps
</span><br>
<span class="quotelev1">&gt; - additionally with the Autoconf patch below: 11.24user 3.62system  
</span><br>
<span class="quotelev1">&gt; 0:21.89elapsed 67%CPU (0avgtext+0avgdata 0maxresident)k 0inputs 
</span><br>
<span class="quotelev1">&gt; +0outputs (0major+935332minor)pagefaults 0swaps
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is the &quot;with the Autoconf patch below&quot; equivalent to AM 1.10 + AC 2.62?
</span><br>
<p>Yes.  The patch from the message made it into Autoconf 2.62.  OMPI is a
<br>
poster child in hitting the quadratic overhead with Autoconf 2.59.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3757.php">Jeff Squyres: "Re: [OMPI devel] Loadbalancing"</a>
<li><strong>Previous message:</strong> <a href="3755.php">Jeff Squyres: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<li><strong>In reply to:</strong> <a href="3755.php">Jeff Squyres: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3759.php">Sérgio Durigan Júnior: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
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
