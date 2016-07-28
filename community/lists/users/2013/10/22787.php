<?
$subject_val = "Re: [OMPI users] btl_tcp_if_include setting";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 14 11:00:55 2013" -->
<!-- isoreceived="20131014150055" -->
<!-- sent="Mon, 14 Oct 2013 11:00:20 -0400" -->
<!-- isosent="20131014150020" -->
<!-- name="Ray Sheppard" -->
<!-- email="rsheppar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_tcp_if_include setting" -->
<!-- id="525C0704.8090102_at_iu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F957CA4_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-10-14 11:00:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22788.php">Jeff Squyres (jsquyres): "Re: [OMPI users] btl_tcp_if_include setting"</a>
<li><strong>Previous message:</strong> <a href="22786.php">Jeff Squyres (jsquyres): "Re: [OMPI users] btl_tcp_if_include setting"</a>
<li><strong>In reply to:</strong> <a href="22786.php">Jeff Squyres (jsquyres): "Re: [OMPI users] btl_tcp_if_include setting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22788.php">Jeff Squyres (jsquyres): "Re: [OMPI users] btl_tcp_if_include setting"</a>
<li><strong>Reply:</strong> <a href="22788.php">Jeff Squyres (jsquyres): "Re: [OMPI users] btl_tcp_if_include setting"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph, Thanks Jeff,
<br>
&nbsp;&nbsp;&nbsp;I should have written sooner. I spent the weekend trying to set it as 
<br>
a configure option.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ray
<br>
<p><p>On 10/14/2013 10:42 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; More info on Ralph's comment is available here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 14, 2013, at 10:36 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It won't be a configure switch, but you can put the following in your default system mca param file:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_if_include=ipogif0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You'll find that file in &lt;prefix&gt;/etc - it is called openmpi-mca-params.conf. Users won't have to enter it after that since we pick that file up by default.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 14, 2013, at 7:27 AM, Ray Sheppard &lt;rsheppar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   I am setting up version 1.7.2 for a Cray XE-6.  The build nodes have different interfaces than the compute nodes. I have been able to set it up, but users need to embed the following into their mpirun command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --mca btl_tcp_if_include ipogif0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22788.php">Jeff Squyres (jsquyres): "Re: [OMPI users] btl_tcp_if_include setting"</a>
<li><strong>Previous message:</strong> <a href="22786.php">Jeff Squyres (jsquyres): "Re: [OMPI users] btl_tcp_if_include setting"</a>
<li><strong>In reply to:</strong> <a href="22786.php">Jeff Squyres (jsquyres): "Re: [OMPI users] btl_tcp_if_include setting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22788.php">Jeff Squyres (jsquyres): "Re: [OMPI users] btl_tcp_if_include setting"</a>
<li><strong>Reply:</strong> <a href="22788.php">Jeff Squyres (jsquyres): "Re: [OMPI users] btl_tcp_if_include setting"</a>
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
