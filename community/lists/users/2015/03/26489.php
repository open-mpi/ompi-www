<?
$subject_val = "Re: [OMPI users] how to compile without ib support";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 17 17:01:26 2015" -->
<!-- isoreceived="20150317210126" -->
<!-- sent="Tue, 17 Mar 2015 20:58:21 +0000 (UTC)" -->
<!-- isosent="20150317205821" -->
<!-- name="Ahmed Salama" -->
<!-- email="ah_salama_eng_eg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to compile without ib support" -->
<!-- id="1715146617.140673.1426625901254.JavaMail.yahoo_at_mail.yahoo.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1DDCCFF4-340C-4E21-9C38-A3232EE8990F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] how to compile without ib support<br>
<strong>From:</strong> Ahmed Salama (<em>ah_salama_eng_eg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-17 16:58:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26490.php">Nathan Hjelm: "Re: [OMPI users] Questions regarding xpmem"</a>
<li><strong>Previous message:</strong> <a href="26488.php">Ahmed Salama: "[OMPI users] openmpi 1.8 error"</a>
<li><strong>In reply to:</strong> <a href="26445.php">Jeff Squyres (jsquyres): "Re: [OMPI users] how to compile without ib support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26497.php">Jeff Squyres (jsquyres): "Re: [OMPI users] how to compile without ib support"</a>
<li><strong>Reply:</strong> <a href="26497.php">Jeff Squyres (jsquyres): "Re: [OMPI users] how to compile without ib support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
&nbsp;To: &quot;tus_at_[hidden]&quot; &lt;tus_at_[hidden]&gt;; Open MPI User's List &lt;users_at_[hidden]&gt; 
<br>
&nbsp;Sent: Monday, 9 March 2015, 18:53:17
<br>
&nbsp;Subject: Re: [OMPI users] how to compile without ib support
<br>
&nbsp;&nbsp;&nbsp;
<br>
On Mar 9, 2015, at 12:19 PM, Tus &lt;tus_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I configured and installed 1.8.4 on my system. I was getting openfabric
</span><br>
<span class="quotelev1">&gt; erros and started to specify -mca btl ^openib which is working but very
</span><br>
<span class="quotelev1">&gt; slow.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would like to complile again excluding openfabric or ib support. I do
</span><br>
<span class="quotelev1">&gt; have a 10GbE fast network in addition to 1G net. What flags are need to
</span><br>
<span class="quotelev1">&gt; ignore ib support and how can I verify/force openmpi to use my 10GbE net?
</span><br>
<p>You have several options:
<br>
<p>1. If you did a default Open MPI install, you can simply rm the &quot;mca_btl_openib.so&quot; plugin that was installed under $prefix/lib/openmpi.&#194;&#160; Open MPI then won't know that that plugin exists, and it won't try to use OpenFabrics-based devices.
<br>
<p>2. You can set a system-wide MCA parameter to ignore the openib BTL.&#194;&#160; That way, you don't have to type it on the mpirun command line every time.
<br>
<p>3. You can rebuild Open MPI with the --without-verbs configure command line switch.&#194;&#160; This will ultimately have the same effect as #1 (i.e., the openib plugin won't be in the installation tree).
<br>
<p>As for using your 10G, I assume you mean over TCP sockets, right?
<br>
<p>If so, you can use --mca btl_tcp_if_include &lt;NAME_OF_10G_DEVICE&gt; or &lt;CIDR_OF_10G_NETWORK&gt;.&#194;&#160; E.g.:
<br>
<p>&#194;&#160; mpirun --mca btl_tcp_if_include eth1 ...
<br>
&#194;&#160; mpirun --mca btl_tcp_if_include 10.20.30.0/24 ...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26445.php">http://www.open-mpi.org/community/lists/users/2015/03/26445.php</a>
  
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26489/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26490.php">Nathan Hjelm: "Re: [OMPI users] Questions regarding xpmem"</a>
<li><strong>Previous message:</strong> <a href="26488.php">Ahmed Salama: "[OMPI users] openmpi 1.8 error"</a>
<li><strong>In reply to:</strong> <a href="26445.php">Jeff Squyres (jsquyres): "Re: [OMPI users] how to compile without ib support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26497.php">Jeff Squyres (jsquyres): "Re: [OMPI users] how to compile without ib support"</a>
<li><strong>Reply:</strong> <a href="26497.php">Jeff Squyres (jsquyres): "Re: [OMPI users] how to compile without ib support"</a>
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
