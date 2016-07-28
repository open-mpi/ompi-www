<?
$subject_val = "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 18 19:20:19 2013" -->
<!-- isoreceived="20131219002019" -->
<!-- sent="Thu, 19 Dec 2013 00:20:17 +0000" -->
<!-- isosent="20131219002017" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager" -->
<!-- id="00C4655A-EB4A-411C-9C8C-73AE75195A59_at_cisco.com" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="OFDB5570BE.DB77D324-ON49257C45.0083980E-49257C46.00006EC1_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-18 19:20:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23236.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
<li><strong>Previous message:</strong> <a href="23234.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
<li><strong>In reply to:</strong> <a href="23234.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23236.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 18, 2013, at 7:04 PM, &lt;tmishima_at_[hidden]&gt; &lt;tmishima_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 3) I use PGI compiler. It can not accept compiler switch
</span><br>
<span class="quotelev1">&gt; &quot;-Wno-variadic-macros&quot;, which is
</span><br>
<span class="quotelev1">&gt; included in configure script.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	btl_usnic_CFLAGS=&quot;-Wno-variadic-macros&quot;
</span><br>
<p>Yoinks.  I'll fix (that flag is only intended for our private copy of v1.6 -- trunk/v1.7 are C99, and that flag isn't necessary).
<br>
<p>Thanks for pointing out the problem!
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
<li><strong>Next message:</strong> <a href="23236.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
<li><strong>Previous message:</strong> <a href="23234.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
<li><strong>In reply to:</strong> <a href="23234.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23236.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
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
