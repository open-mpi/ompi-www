<?
$subject_val = "Re: [OMPI devel] RFC: Remove Darwin backtrace support";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  2 11:27:17 2013" -->
<!-- isoreceived="20130702152717" -->
<!-- sent="Tue, 2 Jul 2013 15:27:05 +0000" -->
<!-- isosent="20130702152705" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove Darwin backtrace support" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F6CD2FD_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CDF84C1F.11D55%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove Darwin backtrace support<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-02 11:27:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12527.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<li><strong>Previous message:</strong> <a href="12525.php">Barrett, Brian W: "[OMPI devel] RFC: Remove Darwin backtrace support"</a>
<li><strong>In reply to:</strong> <a href="12525.php">Barrett, Brian W: "[OMPI devel] RFC: Remove Darwin backtrace support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1
<br>
<p>On Jul 2, 2013, at 11:21 AM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; All -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would like to remove the Darwin backtrace component.  Since 10.5.0, OS X
</span><br>
<span class="quotelev1">&gt; has supported the execinfo() interface supported by Linux, which is both
</span><br>
<span class="quotelev1">&gt; easier to use and less fragile.  So the impact will be a loss of stack
</span><br>
<span class="quotelev1">&gt; traces on failure on OS X versions prior to 10.5.0, which should be a
</span><br>
<span class="quotelev1">&gt; small set of users.  If no one objects before Friday, July 5th, I'll
</span><br>
<span class="quotelev1">&gt; remove it then.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12527.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<li><strong>Previous message:</strong> <a href="12525.php">Barrett, Brian W: "[OMPI devel] RFC: Remove Darwin backtrace support"</a>
<li><strong>In reply to:</strong> <a href="12525.php">Barrett, Brian W: "[OMPI devel] RFC: Remove Darwin backtrace support"</a>
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
