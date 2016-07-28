<?
$subject_val = "Re: [OMPI users] btl_tcp_if_include setting";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 14 11:40:54 2013" -->
<!-- isoreceived="20131014154054" -->
<!-- sent="Mon, 14 Oct 2013 11:40:33 -0400" -->
<!-- isosent="20131014154033" -->
<!-- name="Ray Sheppard" -->
<!-- email="rsheppar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_tcp_if_include setting" -->
<!-- id="525C1071.3060708_at_iu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F9581E1_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] btl_tcp_if_include setting<br>
<strong>From:</strong> Ray Sheppard (<em>rsheppar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-14 11:40:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22790.php">Jeff Squyres (jsquyres): "Re: [OMPI users] btl_tcp_if_include setting"</a>
<li><strong>Previous message:</strong> <a href="22788.php">Jeff Squyres (jsquyres): "Re: [OMPI users] btl_tcp_if_include setting"</a>
<li><strong>In reply to:</strong> <a href="22788.php">Jeff Squyres (jsquyres): "Re: [OMPI users] btl_tcp_if_include setting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22790.php">Jeff Squyres (jsquyres): "Re: [OMPI users] btl_tcp_if_include setting"</a>
<li><strong>Reply:</strong> <a href="22790.php">Jeff Squyres (jsquyres): "Re: [OMPI users] btl_tcp_if_include setting"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
&nbsp;&nbsp;&nbsp;On the Cray are two modes. ESM is the preferred method but some 
<br>
packages require the CCM (cluster compatibility mode).  In ESM, MPI is 
<br>
transparent and works great. In CCM, an external MPI is needed.  There 
<br>
is supposed to a translator to make the Gemini switch look like IB, but 
<br>
it does not exactly work.  So, I am stuck with the TCP interface for 
<br>
message passing.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ray
<br>
<p><p>On 10/14/2013 11:28 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Just curious -- why are you using the TCP transport on a Cray?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 14, 2013, at 11:00 AM, Ray Sheppard &lt;rsheppar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Ralph, Thanks Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;   I should have written sooner. I spent the weekend trying to set it as a configure option.
</span><br>
<span class="quotelev2">&gt;&gt;                            Ray
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22790.php">Jeff Squyres (jsquyres): "Re: [OMPI users] btl_tcp_if_include setting"</a>
<li><strong>Previous message:</strong> <a href="22788.php">Jeff Squyres (jsquyres): "Re: [OMPI users] btl_tcp_if_include setting"</a>
<li><strong>In reply to:</strong> <a href="22788.php">Jeff Squyres (jsquyres): "Re: [OMPI users] btl_tcp_if_include setting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22790.php">Jeff Squyres (jsquyres): "Re: [OMPI users] btl_tcp_if_include setting"</a>
<li><strong>Reply:</strong> <a href="22790.php">Jeff Squyres (jsquyres): "Re: [OMPI users] btl_tcp_if_include setting"</a>
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
