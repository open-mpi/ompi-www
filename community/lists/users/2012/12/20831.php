<?
$subject_val = "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  2 02:39:46 2012" -->
<!-- isoreceived="20121202073946" -->
<!-- sent="Sun, 2 Dec 2012 09:39:18 +0200" -->
<!-- isosent="20121202073918" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CentOS 6.3 &amp;amp; OpenMPI 1.6.3" -->
<!-- id="CAL3GGtoPA2OOLCQ0UzGh6rFp1bFGvctZXpEzR37Y=5u=36uqpQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50B7EB99.4090808_at_uci.edu" -->
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
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-02 02:39:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20832.php">Mike Dubman: "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<li><strong>Previous message:</strong> <a href="20830.php">shiny knight: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>In reply to:</strong> <a href="../../2012/11/20807.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20833.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20833.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Joseph,
<br>
I guess you install MOFED under /usr, is that right?
<br>
Could you please specify &quot;--with-openib=/usr&quot; parameter during ompi
<br>
&quot;configure&quot; stage?
<br>
10x
<br>
M
<br>
<p>On Fri, Nov 30, 2012 at 1:11 AM, Joseph Farran &lt;jfarran_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi YK:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I have those installed but they are newer versions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # rpm -qa | grep rdma
</span><br>
<span class="quotelev1">&gt; librdmacm-1.0.15-1.x86_64
</span><br>
<span class="quotelev1">&gt; librdmacm-utils-1.0.15-1.x86_**64
</span><br>
<span class="quotelev1">&gt; librdmacm-devel-1.0.15-1.x86_**64
</span><br>
<span class="quotelev1">&gt; # locate librdmacm.la
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here are the RPMs the Mellanox build created for kernel:
</span><br>
<span class="quotelev1">&gt; 2.6.32-279.14.1.el6.x86_64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # ls *rdma*
</span><br>
<span class="quotelev1">&gt; librdmacm-1.0.15-1.i686.rpm    librdmacm-devel-1.0.15-1.i686.**rpm
</span><br>
<span class="quotelev1">&gt;  librdmacm-utils-1.0.15-1.i686.**rpm
</span><br>
<span class="quotelev1">&gt; librdmacm-1.0.15-1.x86_64.rpm  librdmacm-devel-1.0.15-1.x86_**64.rpm
</span><br>
<span class="quotelev1">&gt;  librdmacm-utils-1.0.15-1.x86_**64.rpm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/29/2012 02:59 PM, Yevgeny Kliteynik wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Joseph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You're supposed to have librdmacm installed as part of MLNX_OFED
</span><br>
<span class="quotelev2">&gt;&gt; installation.
</span><br>
<span class="quotelev2">&gt;&gt; What does &quot;rpm -qa | grep rdma&quot; tell?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    $ rpm -qa | grep rdma
</span><br>
<span class="quotelev2">&gt;&gt;    librdmacm-devel-1.0.14.1-1.**x86_64
</span><br>
<span class="quotelev2">&gt;&gt;    librdmacm-utils-1.0.14.1-1.**x86_64
</span><br>
<span class="quotelev2">&gt;&gt;    librdmacm-1.0.14.1-1.x86_64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    $ locate librdmacm.la
</span><br>
<span class="quotelev2">&gt;&gt;    /usr/local/mofed/1.5.3-4.0.9/**lib/librdmacm.la
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- YK
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-20831/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20832.php">Mike Dubman: "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<li><strong>Previous message:</strong> <a href="20830.php">shiny knight: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>In reply to:</strong> <a href="../../2012/11/20807.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20833.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20833.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
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
