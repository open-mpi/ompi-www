<?
$subject_val = "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  2 15:04:19 2012" -->
<!-- isoreceived="20121202200419" -->
<!-- sent="Sun, 02 Dec 2012 12:04:09 -0800" -->
<!-- isosent="20121202200409" -->
<!-- name="Joseph Farran" -->
<!-- email="jfarran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CentOS 6.3 &amp;amp; OpenMPI 1.6.3" -->
<!-- id="50BBB439.8020104_at_uci.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAL3GGto0K0kz8yxq7iBzQd-HQrf4yoFeOwQfkRn7TDN=u0db6g_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-12-02 15:04:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20851.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="20849.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="20849.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20851.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20851.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20854.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again.
<br>
<p>Had to get some sleep :-)
<br>
<p>Same thing.     Let me outline the steps I took in case I missed something.
<br>
<p>I have a stock CentOS 6.3 with kernel 2.6.32-279.14.1.el6.x86_64
<br>
<p>Install OFED-1.5.4.1 as follows:
<br>
cd OFED-1.5.4.1
<br>
./install.pl --all --print-available
<br>
grep -v debuginfo ofed-all.conf  &gt; ofed.conf
<br>
./install.pl -c ofed.conf
<br>
<p>After a while, OFED 1.5.4.1 says it installed successfully.   I reboot and commands like ibhost, etc work.
<br>
<p>I now install mxm amd fca as follows ( using your new mxm ):
<br>
<p># rpm -e mxm     &lt;--- To make sure.
<br>
# cd /tmp
<br>
# rpm -i /tmp/mxm/v1.1/per-ofed/1.5.3-3.1.0/mxm-1.1.3a5e745-1.x86_64-rhel6u3.rpm
<br>
# rpm -qa | grep mxm
<br>
mxm-1.1.3a5e745-1.x86_64
<br>
<p>Now I try compiling OpenMPI 1.6.3 with the config:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CFLAGS=&quot;&quot; FCFLAGS=&quot;&quot; ./configure        \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-sge                              \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-openib=/usr                      \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-openib-connectx-xrc            \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpi-thread-multiple            \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-threads                          \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-hwloc                            \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-heterogeneous                  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-fca=/opt/mellanox/fca            \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-mxm-libdir=/opt/mellanox/mxm/lib \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-mxm=/opt/mellanox/mxm            \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--prefix=/data/openmpi-1-6.3
<br>
<p><p>And it again fails with the new 1.5.3-3.1.0
<br>
<p>make[2]: Entering directory `/data/apps/sources/openmpi-1.6.3/ompi/mca/mtl/mxm'
<br>
&nbsp;&nbsp;&nbsp;CC     mtl_mxm.lo
<br>
&nbsp;&nbsp;&nbsp;CC     mtl_mxm_component.lo
<br>
&nbsp;&nbsp;&nbsp;CC     mtl_mxm_endpoint.lo
<br>
&nbsp;&nbsp;&nbsp;CC     mtl_mxm_recv.lo
<br>
<p>&nbsp;&nbsp;&nbsp;CC     mtl_mxm_send.lo
<br>
&nbsp;&nbsp;&nbsp;CCLD   mca_mtl_mxm.la
<br>
/bin/grep: /usr/local/mofed-inst/1.5.3-3.1.0/lib/librdmacm.la: No such file or directory
<br>
/bin/sed: can't read /usr/local/mofed-inst/1.5.3-3.1.0/lib/librdmacm.la: No such file or directory
<br>
libtool: link: `/usr/local/mofed-inst/1.5.3-3.1.0/lib/librdmacm.la' is not a valid libtool archive
<br>
make[2]: *** [mca_mtl_mxm.la] Error 1
<br>
make[2]: Leaving directory `/data/apps/sources/openmpi-1.6.3/ompi/mca/mtl/mxm'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/data/apps/sources/openmpi-1.6.3/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>Note:  I don't see a /usr/local/mofed-inst
<br>
<p># ls /usr/local
<br>
bin  etc  include  lib  lib64  libexec  sbin  share  src
<br>
<p>Question.   When I built the OFED 1.5.4.1 above, I skipped the debug packages ( grep -v debuginfo ofed-all.conf  &gt; ofed.conf ).   I don't think I need them?
<br>
<p>Any other suggestions?
<br>
<p><p>On 12/2/2012 2:56 AM, Mike Dubman wrote:
<br>
<span class="quotelev1">&gt; please redownload from <a href="http://mellanox.com/downloads/hpc/mxm/v1.1/mxm-latest.tar">http://mellanox.com/downloads/hpc/mxm/v1.1/mxm-latest.tar</a>
</span><br>
<span class="quotelev1">&gt; it contains binaries compiled with mofed 1.5.3-3.1.0
</span><br>
<span class="quotelev1">&gt; M
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20851.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="20849.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="20849.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20851.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20851.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20854.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
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
