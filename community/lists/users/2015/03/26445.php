<?
$subject_val = "Re: [OMPI users] how to compile without ib support";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  9 12:53:19 2015" -->
<!-- isoreceived="20150309165319" -->
<!-- sent="Mon, 9 Mar 2015 16:53:17 +0000" -->
<!-- isosent="20150309165317" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to compile without ib support" -->
<!-- id="1DDCCFF4-340C-4E21-9C38-A3232EE8990F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1b1c1e333d78c8828288d33cf4691c0e.squirrel_at_mail.riseup.net" -->
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
<strong>Date:</strong> 2015-03-09 12:53:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26446.php">Khalid Hasanov: "[OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="26444.php">Tus: "[OMPI users] how to compile without ib support"</a>
<li><strong>In reply to:</strong> <a href="26444.php">Tus: "[OMPI users] how to compile without ib support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26489.php">Ahmed Salama: "Re: [OMPI users] how to compile without ib support"</a>
<li><strong>Reply:</strong> <a href="26489.php">Ahmed Salama: "Re: [OMPI users] how to compile without ib support"</a>
<li><strong>Reply:</strong> <a href="26501.php">Tus: "Re: [OMPI users] how to compile without ib support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
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
<p>1. If you did a default Open MPI install, you can simply rm the &quot;mca_btl_openib.so&quot; plugin that was installed under $prefix/lib/openmpi.  Open MPI then won't know that that plugin exists, and it won't try to use OpenFabrics-based devices.
<br>
<p>2. You can set a system-wide MCA parameter to ignore the openib BTL.  That way, you don't have to type it on the mpirun command line every time.
<br>
<p>3. You can rebuild Open MPI with the --without-verbs configure command line switch.  This will ultimately have the same effect as #1 (i.e., the openib plugin won't be in the installation tree).
<br>
<p>As for using your 10G, I assume you mean over TCP sockets, right?
<br>
<p>If so, you can use --mca btl_tcp_if_include &lt;NAME_OF_10G_DEVICE&gt; or &lt;CIDR_OF_10G_NETWORK&gt;.  E.g.:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun --mca btl_tcp_if_include eth1 ...
<br>
&nbsp;&nbsp;&nbsp;mpirun --mca btl_tcp_if_include 10.20.30.0/24 ...
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
<li><strong>Next message:</strong> <a href="26446.php">Khalid Hasanov: "[OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="26444.php">Tus: "[OMPI users] how to compile without ib support"</a>
<li><strong>In reply to:</strong> <a href="26444.php">Tus: "[OMPI users] how to compile without ib support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26489.php">Ahmed Salama: "Re: [OMPI users] how to compile without ib support"</a>
<li><strong>Reply:</strong> <a href="26489.php">Ahmed Salama: "Re: [OMPI users] how to compile without ib support"</a>
<li><strong>Reply:</strong> <a href="26501.php">Tus: "Re: [OMPI users] how to compile without ib support"</a>
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
