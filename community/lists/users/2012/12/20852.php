<?
$subject_val = "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  2 16:46:24 2012" -->
<!-- isoreceived="20121202214624" -->
<!-- sent="Sun, 02 Dec 2012 13:46:16 -0800" -->
<!-- isosent="20121202214616" -->
<!-- name="Joseph Farran" -->
<!-- email="jfarran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CentOS 6.3 &amp;amp; OpenMPI 1.6.3" -->
<!-- id="50BBCC28.9010403_at_uci.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50BBC297.50104_at_uci.edu" -->
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
<strong>Date:</strong> 2012-12-02 16:46:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20853.php">Valentin Clement: "[OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
<li><strong>Previous message:</strong> <a href="20851.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="20851.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20854.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No cigar with MLNX_OFED_LINUX-1.5.3-3.1.0-rhel6.3-x86_64
<br>
<p>Here are my steps:
<br>
<p>- Removed OFED-1.5.4.1 &amp; rebooted
<br>
- Installed MLNX_OFED_LINUX-1.5.3-3.1.0-rhel6.3-x86_64
<br>
- rpm -e mxm
<br>
- rpm -i mxm-1.1.3a5e745-1.x86_64-rhel6u3.rpm   &lt;--- The new mxm you built.
<br>
- Rebooted
<br>
<p>Check:
<br>
# rpm -qa | egrep &quot;1.5.3|mxm|fca&quot;
<br>
kernel-ib-devel-1.5.3-2.6.32_279.14.1.el6.x86_64.x86_64
<br>
ofed-scripts-1.5.3-OFED.1.5.3.3.1.0.x86_64
<br>
mxm-1.1.3a5e745-1.x86_64
<br>
tree-1.5.3-2.el6.x86_64
<br>
kernel-ib-1.5.3-2.6.32_279.14.1.el6.x86_64.x86_64
<br>
fca-2.1.12028-1.x86_64
<br>
mlnxofed-docs-1.5.3-3.1.0.noarch
<br>
<p>Try compiling OpenMPI 1.6.3 and get the same results:
<br>
<p>make[2]: Entering directory `/data/apps/sources/openmpi-1.6.3/ompi/mca/mtl/mxm'
<br>
&nbsp;&nbsp;&nbsp;CC     mtl_mxm.lo
<br>
&nbsp;&nbsp;&nbsp;CC     mtl_mxm_cancel.lo
<br>
&nbsp;&nbsp;&nbsp;CC     mtl_mxm_recv.lo
<br>
t.lo
<br>
&nbsp;&nbsp;&nbsp;CC     mtl_mxm_endpoint.lo
<br>
&nbsp;&nbsp;&nbsp;CC     mtl_mxm_probe.lo
<br>
&nbsp;&nbsp;&nbsp;CC     mtl_mxm_send.lo
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
<p><p># ls /usr/local/mofed-inst
<br>
ls: cannot access /usr/local/mofed-inst: No such file or directory
<br>
#
<br>
# ls /usr/local
<br>
bin  etc  include  lib  lib64  libexec  sbin  share  src
<br>
#
<br>
# find  /usr -name &quot;*mofed*&quot; -print
<br>
#
<br>
&lt;nothing&gt;
<br>
<p><p><p>On 12/2/2012 1:05 PM, Joseph Farran wrote:
<br>
<span class="quotelev1">&gt; Next I will try MLNX_OFED_LINUX-1.5.3-3.1.0-rhel6.3-x86_64, with the mxm and try again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Joseph
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20853.php">Valentin Clement: "[OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
<li><strong>Previous message:</strong> <a href="20851.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="20851.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20854.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
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
