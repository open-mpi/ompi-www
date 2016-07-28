<?
$subject_val = "Re: [OMPI devel] Error in ./configure for Yocto";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  9 11:38:37 2015" -->
<!-- isoreceived="20150709153837" -->
<!-- sent="Thu, 9 Jul 2015 15:38:36 +0000" -->
<!-- isosent="20150709153836" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error in ./configure for Yocto" -->
<!-- id="28F9C623-293D-4623-85B5-F1DAA9F98910_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAK5mteyHzZuVnNskX9QLuvRGZkju06=OgB_nyz+JG7D+-YKu-g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Error in ./configure for Yocto<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-09 11:38:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17604.php">Ralph Castain: "[OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>Previous message:</strong> <a href="17602.php">Victor Rodriguez: "[OMPI devel] Error in ./configure for Yocto"</a>
<li><strong>In reply to:</strong> <a href="17602.php">Victor Rodriguez: "[OMPI devel] Error in ./configure for Yocto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17605.php">Christopher Samuel: "Re: [OMPI devel] Error in ./configure for Yocto"</a>
<li><strong>Reply:</strong> <a href="17605.php">Christopher Samuel: "Re: [OMPI devel] Error in ./configure for Yocto"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 9, 2015, at 10:59 AM, Victor Rodriguez &lt;vm.rod25_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am porting open mpi to Yocto but at moment of ./configure I have this problem
</span><br>
<p>Just curious -- what's Yocto?
<br>
<p><span class="quotelev1">&gt; checking whether the C compiler works... yes
</span><br>
<span class="quotelev1">&gt; checking for C compiler default output file name... a.out
</span><br>
<span class="quotelev1">&gt; checking for suffix of executables...
</span><br>
<span class="quotelev1">&gt; checking whether we are cross compiling... configure: error: in
</span><br>
<span class="quotelev1">&gt; `/home/vrodri3/poky/build/tmp/work/corei7-64-poky-linux/openmpi/1.8.6-r0/openmpi-1.8.6':
</span><br>
<span class="quotelev1">&gt; configure: error: cannot run C compiled programs.
</span><br>
<span class="quotelev1">&gt; If you meant to cross compile, use `--host'.
</span><br>
<span class="quotelev1">&gt; See `config.log' for more details
</span><br>
<p>Please send the config.log file (please compress), and we'll have a look.
<br>
<p><span class="quotelev1">&gt; DO you know if there is any flag that I should enable to disable check cross compiling
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also Yocto do not support fortran , how can I disable fortran ?
</span><br>
<p>Don't worry; it should disable itself.
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
<li><strong>Next message:</strong> <a href="17604.php">Ralph Castain: "[OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>Previous message:</strong> <a href="17602.php">Victor Rodriguez: "[OMPI devel] Error in ./configure for Yocto"</a>
<li><strong>In reply to:</strong> <a href="17602.php">Victor Rodriguez: "[OMPI devel] Error in ./configure for Yocto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17605.php">Christopher Samuel: "Re: [OMPI devel] Error in ./configure for Yocto"</a>
<li><strong>Reply:</strong> <a href="17605.php">Christopher Samuel: "Re: [OMPI devel] Error in ./configure for Yocto"</a>
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
