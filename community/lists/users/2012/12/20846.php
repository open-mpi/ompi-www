<?
$subject_val = "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  2 04:37:45 2012" -->
<!-- isoreceived="20121202093745" -->
<!-- sent="Sun, 2 Dec 2012 11:37:21 +0200" -->
<!-- isosent="20121202093721" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CentOS 6.3 &amp;amp; OpenMPI 1.6.3" -->
<!-- id="CAL3GGtq9b8ZxdYZPG++LX1MpEfXX6V+0WK74-MtdsRdU5Sq+cw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50BB1306.9030303_at_uci.edu" -->
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
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-02 04:37:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20847.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="20845.php">Joseph Farran: "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<li><strong>In reply to:</strong> <a href="20844.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20847.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20847.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
please change &quot;--with-openib&quot; to &quot;--with-openib=/usr&quot;  and retry
<br>
configure/make stage.
<br>
10x
<br>
<p>On Sun, Dec 2, 2012 at 10:36 AM, Joseph Farran &lt;jfarran_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Hi Mike.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the help!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am installing OFED on an NFS share partition so that all compute nodes
</span><br>
<span class="quotelev1">&gt; will have access.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the &quot;--with-openib&quot; option, I don't specify one.   My config file
</span><br>
<span class="quotelev1">&gt; looks like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     CFLAGS=&quot;&quot; FCFLAGS=&quot;&quot; ./configure        \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --with-sge                              \
</span><br>
<span class="quotelev1">&gt;     --with-openib                           \
</span><br>
<span class="quotelev1">&gt;     --enable-openib-connectx-xrc            \
</span><br>
<span class="quotelev1">&gt;     --enable-mpi-thread-multiple            \
</span><br>
<span class="quotelev1">&gt;     --with-threads                          \
</span><br>
<span class="quotelev1">&gt;     --with-hwloc                            \
</span><br>
<span class="quotelev1">&gt;     --enable-heterogeneous                  \
</span><br>
<span class="quotelev1">&gt;     --with-fca=/opt/mellanox/fca            \
</span><br>
<span class="quotelev1">&gt;     --with-mxm-libdir=/opt/mellanox/mxm/lib \
</span><br>
<span class="quotelev1">&gt;     --with-mxm=/opt/mellanox/mxm            \
</span><br>
<span class="quotelev1">&gt;     --prefix=/data/openmpi-1-6.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please advise,
</span><br>
<span class="quotelev1">&gt; Joseph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/1/2012 11:39 PM, Mike Dubman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi Joseph,
</span><br>
<span class="quotelev1">&gt; I guess you install MOFED under /usr, is that right?
</span><br>
<span class="quotelev1">&gt; Could you please specify &quot;--with-openib=/usr&quot; parameter during ompi
</span><br>
<span class="quotelev1">&gt; &quot;configure&quot; stage?
</span><br>
<span class="quotelev1">&gt; 10x
</span><br>
<span class="quotelev1">&gt; M
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Fri, Nov 30, 2012 at 1:11 AM, Joseph Farran &lt;jfarran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi YK:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I have those installed but they are newer versions:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # rpm -qa | grep rdma
</span><br>
<span class="quotelev2">&gt;&gt; librdmacm-1.0.15-1.x86_64
</span><br>
<span class="quotelev2">&gt;&gt; librdmacm-utils-1.0.15-1.x86_64
</span><br>
<span class="quotelev2">&gt;&gt; librdmacm-devel-1.0.15-1.x86_64
</span><br>
<span class="quotelev2">&gt;&gt; # locate librdmacm.la
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here are the RPMs the Mellanox build created for kernel:
</span><br>
<span class="quotelev2">&gt;&gt; 2.6.32-279.14.1.el6.x86_64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # ls *rdma*
</span><br>
<span class="quotelev2">&gt;&gt; librdmacm-1.0.15-1.i686.rpm    librdmacm-devel-1.0.15-1.i686.rpm
</span><br>
<span class="quotelev2">&gt;&gt;  librdmacm-utils-1.0.15-1.i686.rpm
</span><br>
<span class="quotelev2">&gt;&gt; librdmacm-1.0.15-1.x86_64.rpm  librdmacm-devel-1.0.15-1.x86_64.rpm
</span><br>
<span class="quotelev2">&gt;&gt;  librdmacm-utils-1.0.15-1.x86_64.rpm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 11/29/2012 02:59 PM, Yevgeny Kliteynik wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Joseph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You're supposed to have librdmacm installed as part of MLNX_OFED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What does &quot;rpm -qa | grep rdma&quot; tell?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    $ rpm -qa | grep rdma
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    librdmacm-devel-1.0.14.1-1.x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    librdmacm-utils-1.0.14.1-1.x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    librdmacm-1.0.14.1-1.x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    $ locate librdmacm.la
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /usr/local/mofed/1.5.3-4.0.9/lib/librdmacm.la
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- YK
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20846/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20847.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="20845.php">Joseph Farran: "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<li><strong>In reply to:</strong> <a href="20844.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20847.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20847.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
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
