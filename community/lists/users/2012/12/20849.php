<?
$subject_val = "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  2 05:56:31 2012" -->
<!-- isoreceived="20121202105631" -->
<!-- sent="Sun, 2 Dec 2012 12:56:06 +0200" -->
<!-- isosent="20121202105606" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CentOS 6.3 &amp;amp; OpenMPI 1.6.3" -->
<!-- id="CAL3GGto0K0kz8yxq7iBzQd-HQrf4yoFeOwQfkRn7TDN=u0db6g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAL3GGtoM9PAkqCDV76ioPAmkCEjKrqguQ77bEUBWztx7_RAchQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-12-02 05:56:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20850.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="20848.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="20848.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20850.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20850.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
please redownload from
<br>
<a href="http://mellanox.com/downloads/hpc/mxm/v1.1/mxm-latest.tar">http://mellanox.com/downloads/hpc/mxm/v1.1/mxm-latest.tar</a>
<br>
it contains binaries compiled with mofed 1.5.3-3.1.0
<br>
M
<br>
<p>On Sun, Dec 2, 2012 at 12:13 PM, Mike Dubman &lt;mike.ompi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that your active mofed is 1.5.3-3.1.0, while installed mxm was
</span><br>
<span class="quotelev1">&gt; compiled with 1.5.3-3.0.0
</span><br>
<span class="quotelev1">&gt; MOFED is not binary compatible, let me check and send you the link for mxm
</span><br>
<span class="quotelev1">&gt; compiled with mofed that you have.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, MOFED contains ompi 1.6.0 which is already compiled with mxm
</span><br>
<span class="quotelev1">&gt; (/usr/mpi/...)
</span><br>
<span class="quotelev1">&gt; On Sun, Dec 2, 2012 at 12:01 PM, Joseph Farran &lt;jfarran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Same thing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My new config:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     CFLAGS=&quot;&quot; FCFLAGS=&quot;&quot; ./configure        \
</span><br>
<span class="quotelev2">&gt;&gt;     --with-sge                              \
</span><br>
<span class="quotelev2">&gt;&gt;     --with-openib=/usr                      \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     --enable-openib-connectx-xrc            \
</span><br>
<span class="quotelev2">&gt;&gt;     --enable-mpi-thread-multiple            \
</span><br>
<span class="quotelev2">&gt;&gt;     --with-threads                          \
</span><br>
<span class="quotelev2">&gt;&gt;     --with-hwloc                            \
</span><br>
<span class="quotelev2">&gt;&gt;     --enable-heterogeneous                  \
</span><br>
<span class="quotelev2">&gt;&gt;     --with-fca=/opt/mellanox/fca            \
</span><br>
<span class="quotelev2">&gt;&gt;     --with-mxm-libdir=/opt/mellanox/mxm/lib \
</span><br>
<span class="quotelev2">&gt;&gt;     --with-mxm=/opt/mellanox/mxm            \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Fails at the same spot:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; `/data/apps/sources/openmpi-1.6.3/ompi/mca/mtl/mxm'
</span><br>
<span class="quotelev2">&gt;&gt;   CC     mtl_mxm.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC     mtl_mxm_cancel.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC     mtl_mxm_endpoint.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC     mtl_mxm_probe.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC     mtl_mxm_recv.lo
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   CCLD   mca_mtl_mxm.la
</span><br>
<span class="quotelev2">&gt;&gt; /bin/grep: /usr/local/mofed-inst/1.5.3-3.0.0/lib/librdmacm.la: No such
</span><br>
<span class="quotelev2">&gt;&gt; file or directory
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sed: can't read /usr/local/mofed-inst/1.5.3-3.0.0/lib/librdmacm.la:
</span><br>
<span class="quotelev2">&gt;&gt; No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: `/usr/local/mofed-inst/1.5.3-3.0.0/lib/librdmacm.la' is
</span><br>
<span class="quotelev2">&gt;&gt; not a valid libtool archive
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [mca_mtl_mxm.la] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/data/apps/sources/openmpi-1.6.3/ompi/mca/mtl/mxm'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/data/apps/sources/openmpi-1.6.3/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 12/2/2012 1:37 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  please change &quot;--with-openib&quot; to &quot;--with-openib=/usr&quot;  and retry
</span><br>
<span class="quotelev2">&gt;&gt; configure/make stage.
</span><br>
<span class="quotelev2">&gt;&gt; 10x
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  On Sun, Dec 2, 2012 at 10:36 AM, Joseph Farran &lt;jfarran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Hi Mike.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for the help!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am installing OFED on an NFS share partition so that all compute nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will have access.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For the &quot;--with-openib&quot; option, I don't specify one.   My config file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; looks like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     CFLAGS=&quot;&quot; FCFLAGS=&quot;&quot; ./configure        \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --with-sge                              \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --with-openib                           \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --enable-openib-connectx-xrc            \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --enable-mpi-thread-multiple            \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --with-threads                          \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --with-hwloc                            \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --enable-heterogeneous                  \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --with-fca=/opt/mellanox/fca            \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      --with-mxm-libdir=/opt/mellanox/mxm/lib \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --with-mxm=/opt/mellanox/mxm            \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --prefix=/data/openmpi-1-6.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please advise,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Joseph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 12/1/2012 11:39 PM, Mike Dubman wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Hi Joseph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I guess you install MOFED under /usr, is that right?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you please specify &quot;--with-openib=/usr&quot; parameter during ompi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;configure&quot; stage?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 10x
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  On Fri, Nov 30, 2012 at 1:11 AM, Joseph Farran &lt;jfarran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi YK:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes, I have those installed but they are newer versions:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # rpm -qa | grep rdma
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; librdmacm-1.0.15-1.x86_64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; librdmacm-utils-1.0.15-1.x86_64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; librdmacm-devel-1.0.15-1.x86_64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # locate librdmacm.la
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here are the RPMs the Mellanox build created for kernel:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2.6.32-279.14.1.el6.x86_64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # ls *rdma*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; librdmacm-1.0.15-1.i686.rpm    librdmacm-devel-1.0.15-1.i686.rpm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  librdmacm-utils-1.0.15-1.i686.rpm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; librdmacm-1.0.15-1.x86_64.rpm  librdmacm-devel-1.0.15-1.x86_64.rpm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  librdmacm-utils-1.0.15-1.x86_64.rpm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 11/29/2012 02:59 PM, Yevgeny Kliteynik wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Joseph,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You're supposed to have librdmacm installed as part of MLNX_OFED
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; installation.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What does &quot;rpm -qa | grep rdma&quot; tell?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $ rpm -qa | grep rdma
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    librdmacm-devel-1.0.14.1-1.x86_64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    librdmacm-utils-1.0.14.1-1.x86_64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    librdmacm-1.0.14.1-1.x86_64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    $ locate librdmacm.la
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    /usr/local/mofed/1.5.3-4.0.9/lib/librdmacm.la
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- YK
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20849/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20850.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="20848.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="20848.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20850.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20850.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
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
