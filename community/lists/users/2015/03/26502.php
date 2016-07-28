<?
$subject_val = "Re: [OMPI users] how to compile without ib support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 19 12:40:41 2015" -->
<!-- isoreceived="20150319164041" -->
<!-- sent="Thu, 19 Mar 2015 16:40:15 +0000" -->
<!-- isosent="20150319164015" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to compile without ib support" -->
<!-- id="6E0570F0-60E6-47A3-8B32-1ED22C31B197_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8329e52e9e6aeff7fb3232c6e9876658.squirrel_at_mail.riseup.net" -->
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
<strong>Date:</strong> 2015-03-19 12:40:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26503.php">CUDENNEC Loic: "[OMPI users] [CFP MCSoC/GIM2P] Special Session on General Issues in Many-core Programming &amp; Programmability"</a>
<li><strong>Previous message:</strong> <a href="26501.php">Tus: "Re: [OMPI users] how to compile without ib support"</a>
<li><strong>In reply to:</strong> <a href="26501.php">Tus: "Re: [OMPI users] how to compile without ib support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also remove the btl openib.la file in the same dir. 
<br>
<p>Sent from my phone. No type good. 
<br>
<p><span class="quotelev1">&gt; On Mar 19, 2015, at 9:05 AM, Tus &lt;tus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I removed openib.so. I get this error with --mca btl_tcp_if_include p2p1:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [compute-0-7.local:04799] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /share/apps/openmpi-1.8.4/lib/openmpi/mca_btl_openib:
</span><br>
<span class="quotelev1">&gt; /share/apps/openmpi-1.8.4/lib/openmpi/mca_btl_openib.so: cannot open
</span><br>
<span class="quotelev1">&gt; shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with -mca btl ^openib ---&gt; there is no error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; Thanks for your input. I was able to get 50% performance improvemnt
</span><br>
<span class="quotelev1">&gt; forcing it to use our 10G net.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 9, 2015, at 12:19 PM, Tus &lt;tus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I configured and installed 1.8.4 on my system. I was getting openfabric
</span><br>
<span class="quotelev3">&gt;&gt;&gt; erros and started to specify-mca btl ^openib which is working but very
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slow.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would like to complile again excluding openfabric or ib support. I do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have a 10GbE fast network in addition to 1G net. What flags are need to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ignore ib support and how can I verify/force openmpi to use my 10GbE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; net?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You have several options:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. If you did a default Open MPI install, you can simply rm the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mca_btl_openib.so&quot; plugin that was installed under $prefix/lib/openmpi.
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI then won't know that that plugin exists, and it won't try to use
</span><br>
<span class="quotelev2">&gt;&gt; OpenFabrics-based devices.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. You can set a system-wide MCA parameter to ignore the openib BTL.  That
</span><br>
<span class="quotelev2">&gt;&gt; way, you don't have to type it on the mpirun command line every time.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. You can rebuild Open MPI with the --without-verbs configure command
</span><br>
<span class="quotelev2">&gt;&gt; line switch.  This will ultimately have the same effect as #1 (i.e., the
</span><br>
<span class="quotelev2">&gt;&gt; openib plugin won't be in the installation tree).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As for using your 10G, I assume you mean over TCP sockets, right?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If so, you can use --mca btl_tcp_if_include &lt;NAME_OF_10G_DEVICE&gt; or
</span><br>
<span class="quotelev2">&gt;&gt; &lt;CIDR_OF_10G_NETWORK&gt;.  E.g.:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   mpirun --mca btl_tcp_if_include eth1 ...
</span><br>
<span class="quotelev2">&gt;&gt;   mpirun --mca btl_tcp_if_include 10.20.30.0/24 ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26503.php">CUDENNEC Loic: "[OMPI users] [CFP MCSoC/GIM2P] Special Session on General Issues in Many-core Programming &amp; Programmability"</a>
<li><strong>Previous message:</strong> <a href="26501.php">Tus: "Re: [OMPI users] how to compile without ib support"</a>
<li><strong>In reply to:</strong> <a href="26501.php">Tus: "Re: [OMPI users] how to compile without ib support"</a>
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
