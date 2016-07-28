<?
$subject_val = "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 03:16:28 2016" -->
<!-- isoreceived="20160615071628" -->
<!-- sent="Wed, 15 Jun 2016 09:16:25 +0200" -->
<!-- isosent="20160615071625" -->
<!-- name="Peter Kjellstr&#195;&#182;m" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Big jump from OFED 1.5.4.1 -&amp;gt; recent (stable). Any suggestions?" -->
<!-- id="20160615091625.0d307aa8_at_yaydoe" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D385989A.B0111%Grigory.Shamov_at_ad.umanitoba.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?<br>
<strong>From:</strong> Peter Kjellstr&#195;&#182;m (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-15 03:16:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29449.php">Peter Kjellström: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>Previous message:</strong> <a href="29447.php">Mehmet Belgin: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>In reply to:</strong> <a href="29436.php">Grigory Shamov: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 14 Jun 2016 16:20:42 +0000
<br>
Grigory Shamov &lt;Grigory.Shamov_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 2016-06-14, 3:42 AM, &quot;users on behalf of Peter Kjellstr&#195;&#182;m&quot;
</span><br>
<span class="quotelev1">&gt; &lt;users-bounces_at_[hidden] on behalf of cap_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;On Mon, 13 Jun 2016 19:04:59 -0400
</span><br>
<span class="quotelev2">&gt; &gt;Mehmet Belgin &lt;mehmet.belgin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Greetings!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; We have not upgraded our OFED stack for a very long time, and still
</span><br>
<span class="quotelev3">&gt; &gt;&gt; running on an ancient version (1.5.4.1, yeah we know). We are now
</span><br>
<span class="quotelev3">&gt; &gt;&gt; considering a big jump from this version to a tested and stable
</span><br>
<span class="quotelev3">&gt; &gt;&gt; recent version and would really appreciate any suggestions from the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; community.  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Some thoughts on the subject.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;* Not installing an external ibstack is quite attractive imo.
</span><br>
<span class="quotelev2">&gt; &gt;  RHEL/CentOS stack (not based on any direct OFED version) works fine
</span><br>
<span class="quotelev2">&gt; &gt;  for us. It simplifies cluster maintenance (kernel updates etc.).  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am curious on how Redhat stack is &#194;&#179;not based on any direct OFED
</span><br>
<span class="quotelev1">&gt; version&#194;&#178;? 
</span><br>
<span class="quotelev1">&gt; Doesn&#194;&#185;t Redhat just ship an old OFED build, or they do their own
</span><br>
<span class="quotelev1">&gt; changes to it like to the kernel?
</span><br>
<p>No, let's define things a bit.
<br>
<p>OFED is a packaging of many opensource components with various
<br>
upstreams. Simplified it draws upon kernel.org/linux-rdma for kernel
<br>
side stuff and many spread out user side projects (mostly under the
<br>
openfabrics umbrella).
<br>
<p>If you run an upstream kernel and pull+build, for example, the current
<br>
master branch of the libraries you need you're not running any form of
<br>
OFED. 
<br>
<p>OFED does (mainly) three things in my view 1) pick a set of versions
<br>
and test it together 2) backport the kernel side to popular enterprisy
<br>
kernels 3) put it all in a complete package.
<br>
<p>Redhat does not base its ib stack on a specific OFED release.
<br>
Functionality is cherry picked and backported from upstream (kernel)
<br>
and user space packages are pulled directly for their respective places
<br>
(and updated when needed).
<br>
<p>/Peter K
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29449.php">Peter Kjellström: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>Previous message:</strong> <a href="29447.php">Mehmet Belgin: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>In reply to:</strong> <a href="29436.php">Grigory Shamov: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
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
