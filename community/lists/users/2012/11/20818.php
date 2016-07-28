<?
$subject_val = "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 29 18:11:28 2012" -->
<!-- isoreceived="20121129231128" -->
<!-- sent="Thu, 29 Nov 2012 15:11:21 -0800" -->
<!-- isosent="20121129231121" -->
<!-- name="Joseph Farran" -->
<!-- email="jfarran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CentOS 6.3 &amp;amp; OpenMPI 1.6.3" -->
<!-- id="50B7EB99.4090808_at_uci.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50B7E8D0.6070806_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3<br>
<strong>From:</strong> Joseph Farran (<em>jfarran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-29 18:11:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20819.php">Yevgeny Kliteynik: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<li><strong>Previous message:</strong> <a href="20817.php">Yevgeny Kliteynik: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="20817.php">Yevgeny Kliteynik: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/20842.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/20842.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi YK:
<br>
<p>Yes, I have those installed but they are newer versions:
<br>
<p># rpm -qa | grep rdma
<br>
librdmacm-1.0.15-1.x86_64
<br>
librdmacm-utils-1.0.15-1.x86_64
<br>
librdmacm-devel-1.0.15-1.x86_64
<br>
# locate librdmacm.la
<br>
#
<br>
<p>Here are the RPMs the Mellanox build created for kernel: 2.6.32-279.14.1.el6.x86_64
<br>
<p># ls *rdma*
<br>
librdmacm-1.0.15-1.i686.rpm    librdmacm-devel-1.0.15-1.i686.rpm    librdmacm-utils-1.0.15-1.i686.rpm
<br>
librdmacm-1.0.15-1.x86_64.rpm  librdmacm-devel-1.0.15-1.x86_64.rpm  librdmacm-utils-1.0.15-1.x86_64.rpm
<br>
<p><p>On 11/29/2012 02:59 PM, Yevgeny Kliteynik wrote:
<br>
<span class="quotelev1">&gt; Joseph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You're supposed to have librdmacm installed as part of MLNX_OFED installation.
</span><br>
<span class="quotelev1">&gt; What does &quot;rpm -qa | grep rdma&quot; tell?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    $ rpm -qa | grep rdma
</span><br>
<span class="quotelev1">&gt;    librdmacm-devel-1.0.14.1-1.x86_64
</span><br>
<span class="quotelev1">&gt;    librdmacm-utils-1.0.14.1-1.x86_64
</span><br>
<span class="quotelev1">&gt;    librdmacm-1.0.14.1-1.x86_64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    $ locate librdmacm.la
</span><br>
<span class="quotelev1">&gt;    /usr/local/mofed/1.5.3-4.0.9/lib/librdmacm.la
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- YK
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20819.php">Yevgeny Kliteynik: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<li><strong>Previous message:</strong> <a href="20817.php">Yevgeny Kliteynik: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="20817.php">Yevgeny Kliteynik: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/20842.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/20842.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
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
