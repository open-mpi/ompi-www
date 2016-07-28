<?
$subject_val = "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  2 16:05:36 2012" -->
<!-- isoreceived="20121202210536" -->
<!-- sent="Sun, 02 Dec 2012 13:05:27 -0800" -->
<!-- isosent="20121202210527" -->
<!-- name="Joseph Farran" -->
<!-- email="jfarran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CentOS 6.3 &amp;amp; OpenMPI 1.6.3" -->
<!-- id="50BBC297.50104_at_uci.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50BBB439.8020104_at_uci.edu" -->
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
<strong>Date:</strong> 2012-12-02 16:05:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20852.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="20850.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="20850.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20852.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20852.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Next I will try MLNX_OFED_LINUX-1.5.3-3.1.0-rhel6.3-x86_64, with the mxm and try again.
<br>
<p>Joseph
<br>
<p>On 12/2/2012 12:04 PM, Joseph Farran wrote:
<br>
<span class="quotelev1">&gt; Hi again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Had to get some sleep :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Same thing.     Let me outline the steps I took in case I missed something.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a stock CentOS 6.3 with kernel 2.6.32-279.14.1.el6.x86_64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Install OFED-1.5.4.1 as follows:
</span><br>
<span class="quotelev1">&gt; cd OFED-1.5.4.1
</span><br>
<span class="quotelev1">&gt; ./install.pl --all --print-available
</span><br>
<span class="quotelev1">&gt; grep -v debuginfo ofed-all.conf  &gt; ofed.conf
</span><br>
<span class="quotelev1">&gt; ./install.pl -c ofed.conf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After a while, OFED 1.5.4.1 says it installed successfully.   I reboot and commands like ibhost, etc work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I now install mxm amd fca as follows ( using your new mxm ):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # rpm -e mxm     &lt;--- To make sure.
</span><br>
<span class="quotelev1">&gt; # cd /tmp
</span><br>
<span class="quotelev1">&gt; # rpm -i /tmp/mxm/v1.1/per-ofed/1.5.3-3.1.0/mxm-1.1.3a5e745-1.x86_64-rhel6u3.rpm
</span><br>
<span class="quotelev1">&gt; # rpm -qa | grep mxm
</span><br>
<span class="quotelev1">&gt; mxm-1.1.3a5e745-1.x86_64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I try compiling OpenMPI 1.6.3 with the config:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     CFLAGS=&quot;&quot; FCFLAGS=&quot;&quot; ./configure        \
</span><br>
<span class="quotelev1">&gt;     --with-sge                              \
</span><br>
<span class="quotelev1">&gt;     --with-openib=/usr                      \
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And it again fails with the new 1.5.3-3.1.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/data/apps/sources/openmpi-1.6.3/ompi/mca/mtl/mxm'
</span><br>
<span class="quotelev1">&gt;   CC     mtl_mxm.lo
</span><br>
<span class="quotelev1">&gt;   CC     mtl_mxm_component.lo
</span><br>
<span class="quotelev1">&gt;   CC     mtl_mxm_endpoint.lo
</span><br>
<span class="quotelev1">&gt;   CC     mtl_mxm_recv.lo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   CC     mtl_mxm_send.lo
</span><br>
<span class="quotelev1">&gt;   CCLD   mca_mtl_mxm.la
</span><br>
<span class="quotelev1">&gt; /bin/grep: /usr/local/mofed-inst/1.5.3-3.1.0/lib/librdmacm.la: No such file or directory
</span><br>
<span class="quotelev1">&gt; /bin/sed: can't read /usr/local/mofed-inst/1.5.3-3.1.0/lib/librdmacm.la: No such file or directory
</span><br>
<span class="quotelev1">&gt; libtool: link: `/usr/local/mofed-inst/1.5.3-3.1.0/lib/librdmacm.la' is not a valid libtool archive
</span><br>
<span class="quotelev1">&gt; make[2]: *** [mca_mtl_mxm.la] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/data/apps/sources/openmpi-1.6.3/ompi/mca/mtl/mxm'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/data/apps/sources/openmpi-1.6.3/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note:  I don't see a /usr/local/mofed-inst
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # ls /usr/local
</span><br>
<span class="quotelev1">&gt; bin  etc  include  lib  lib64  libexec  sbin  share  src
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Question.   When I built the OFED 1.5.4.1 above, I skipped the debug packages ( grep -v debuginfo ofed-all.conf  &gt; ofed.conf ).   I don't think I need them?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any other suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/2/2012 2:56 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev2">&gt;&gt; please redownload from <a href="http://mellanox.com/downloads/hpc/mxm/v1.1/mxm-latest.tar">http://mellanox.com/downloads/hpc/mxm/v1.1/mxm-latest.tar</a>
</span><br>
<span class="quotelev2">&gt;&gt; it contains binaries compiled with mofed 1.5.3-3.1.0
</span><br>
<span class="quotelev2">&gt;&gt; M
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20852.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="20850.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="20850.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20852.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20852.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
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
