<?
$subject_val = "Re: [OMPI devel] autoconf warnings: openib BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  6 07:08:42 2014" -->
<!-- isoreceived="20140306120842" -->
<!-- sent="Thu, 06 Mar 2014 14:08:38 +0200" -->
<!-- isosent="20140306120838" -->
<!-- name="Vasily Filipov" -->
<!-- email="vasily_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autoconf warnings: openib BTL" -->
<!-- id="53186546.5000105_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0681A424-C525-409B-A745-526F4447D3FB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] autoconf warnings: openib BTL<br>
<strong>From:</strong> Vasily Filipov (<em>vasily_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-06 07:08:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14306.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Previous message:</strong> <a href="14304.php">Ralph Castain: "Re: [OMPI devel] Bad parameter in file oob_tcp.c"</a>
<li><strong>In reply to:</strong> <a href="14297.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14306.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Reply:</strong> <a href="14306.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05-Mar-14 18:08, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Mar 3, 2014, at 10:59 PM, Vasily Filipov &lt;vasily_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, it is possible, but there is some different if I will do it this way -
</span><br>
<span class="quotelev2">&gt;&gt;   With the current implementation (today into a trunk) if AC_RUN_IFELSE fails =&gt; old code of RDMACM will rise,
</span><br>
<span class="quotelev2">&gt;&gt;   And by way you suggest, if we postpone the decision to a run time and the check fails =&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   we have to abort  RDMACM  at all, because it was compiled for working with AF_IB.
</span><br>
<span class="quotelev2">&gt;&gt;   So my question to you, if we take into account all this stuff above -
</span><br>
<span class="quotelev2">&gt;&gt;    What's the right way to implement it ? What do you think ?
</span><br>
<span class="quotelev1">&gt; I'm not sure I understand.  Can't you write something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #if HAVE_DECL_AF_IB
</span><br>
<span class="quotelev1">&gt;     rc = try_using_af_ib();
</span><br>
<span class="quotelev1">&gt;     if (OMPI_ERR_NOT_AVAILABLE == rc) {
</span><br>
<span class="quotelev1">&gt;         rc = try_the_other_way();
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;     rc = try_the_other_way();
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I mean I cannot  use &quot;another way&quot; if func call for 
<br>
&quot;try_using_af_ib&quot; fails (call for &quot;try_the_other_way()&quot;) because RDMACM 
<br>
was compiled for AF_IB   usage (different fields in structs, different 
<br>
functions prototypes).
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14306.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Previous message:</strong> <a href="14304.php">Ralph Castain: "Re: [OMPI devel] Bad parameter in file oob_tcp.c"</a>
<li><strong>In reply to:</strong> <a href="14297.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14306.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Reply:</strong> <a href="14306.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
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
