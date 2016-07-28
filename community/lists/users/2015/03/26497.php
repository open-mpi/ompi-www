<?
$subject_val = "Re: [OMPI users] how to compile without ib support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 18 11:38:14 2015" -->
<!-- isoreceived="20150318153814" -->
<!-- sent="Wed, 18 Mar 2015 15:38:12 +0000" -->
<!-- isosent="20150318153812" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to compile without ib support" -->
<!-- id="F44F762A-3BB4-40F0-8A0B-B9623BB4BBEA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1715146617.140673.1426625901254.JavaMail.yahoo_at_mail.yahoo.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-18 11:38:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26498.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Previous message:</strong> <a href="26496.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.8 error"</a>
<li><strong>In reply to:</strong> <a href="26489.php">Ahmed Salama: "Re: [OMPI users] how to compile without ib support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26501.php">Tus: "Re: [OMPI users] how to compile without ib support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ahmed --
<br>
<p>Did you have a further question?  I didn't see any additional / new text in the reply below.
<br>
<p><p><span class="quotelev1">&gt; On Mar 17, 2015, at 1:58 PM, Ahmed Salama &lt;ah_salama_eng_eg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: &quot;tus_at_[hidden]&quot; &lt;tus_at_[hidden]&gt;; Open MPI User's List &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Sent: Monday, 9 March 2015, 18:53:17
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] how to compile without ib support
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 9, 2015, at 12:19 PM, Tus &lt;tus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I configured and installed 1.8.4 on my system. I was getting openfabric
</span><br>
<span class="quotelev2">&gt; &gt; erros and started to specify -mca btl ^openib which is working but very
</span><br>
<span class="quotelev2">&gt; &gt; slow.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I would like to complile again excluding openfabric or ib support. I do
</span><br>
<span class="quotelev2">&gt; &gt; have a 10GbE fast network in addition to 1G net. What flags are need to
</span><br>
<span class="quotelev2">&gt; &gt; ignore ib support and how can I verify/force openmpi to use my 10GbE net?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You have several options:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. If you did a default Open MPI install, you can simply rm the &quot;mca_btl_openib.so&quot; plugin that was installed under $prefix/lib/openmpi.  Open MPI then won't know that that plugin exists, and it won't try to use OpenFabrics-based devices.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. You can set a system-wide MCA parameter to ignore the openib BTL.  That way, you don't have to type it on the mpirun command line every time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. You can rebuild Open MPI with the --without-verbs configure command line switch.  This will ultimately have the same effect as #1 (i.e., the openib plugin won't be in the installation tree).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As for using your 10G, I assume you mean over TCP sockets, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If so, you can use --mca btl_tcp_if_include &lt;NAME_OF_10G_DEVICE&gt; or &lt;CIDR_OF_10G_NETWORK&gt;.  E.g.:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   mpirun --mca btl_tcp_if_include eth1 ...
</span><br>
<span class="quotelev1">&gt;   mpirun --mca btl_tcp_if_include 10.20.30.0/24 ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26445.php">http://www.open-mpi.org/community/lists/users/2015/03/26445.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26489.php">http://www.open-mpi.org/community/lists/users/2015/03/26489.php</a>
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
<li><strong>Next message:</strong> <a href="26498.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Previous message:</strong> <a href="26496.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.8 error"</a>
<li><strong>In reply to:</strong> <a href="26489.php">Ahmed Salama: "Re: [OMPI users] how to compile without ib support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26501.php">Tus: "Re: [OMPI users] how to compile without ib support"</a>
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
