<?
$subject_val = "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 28 12:44:21 2012" -->
<!-- isoreceived="20121128174421" -->
<!-- sent="Wed, 28 Nov 2012 09:44:12 -0800" -->
<!-- isosent="20121128174412" -->
<!-- name="Joseph Farran" -->
<!-- email="jfarran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CentOS 6.3 &amp;amp; OpenMPI 1.6.3" -->
<!-- id="50B64D6C.2010706_at_uci.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50B61FE0.9000304_at_dev.mellanox.co.il" -->
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
<strong>Date:</strong> 2012-11-28 12:44:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20791.php">Brock Palen: "Re: [OMPI users] Java MPI Bindings in 1.6.x"</a>
<li><strong>Previous message:</strong> <a href="20789.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="20786.php">Yevgeny Kliteynik: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20793.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20793.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Question on the version to use.      The tar files contains the following RPMS:
<br>
<p># ls | grep -v debug
<br>
mxm-1.1.3a5e745-1.x86_64-centos5u6.rpm
<br>
mxm-1.1.3a5e745-1.x86_64-centos5u7.rpm
<br>
mxm-1.1.3a5e745-1.x86_64-centos6u0.rpm
<br>
mxm-1.1.3a5e745-1.x86_64-rhel5u5.rpm
<br>
mxm-1.1.3a5e745-1.x86_64-rhel6u1.rpm
<br>
mxm-1.1.3a5e745-1.x86_64-rhel6u2.rpm
<br>
mxm-1.1.3a5e745-1.x86_64-rhel6u3.rpm
<br>
mxm-1.1.3a5e745-1.x86_64-sles10sp4.rpm
<br>
mxm-1.1.3a5e745-1.x86_64-sles11sp1.rpm
<br>
mxm-1.1.3a5e745-1.x86_64-sles11sp2.rpm
<br>
<p>For CentOS 6.3, which one do I use?
<br>
<p>Will mxm-1.1.3a5e745-1.x86_64-centos6u0.rpm work, or do I need update 3 ( mxm-1.1.3a5e745-1.x86_64-rhel6u3.rpm )?
<br>
<p>Joseph
<br>
<p><p>On 11/28/2012 06:29 AM, Yevgeny Kliteynik wrote:
<br>
<span class="quotelev1">&gt; On 11/28/2012 10:52 AM, Pavel Mezentsev wrote:
</span><br>
<span class="quotelev2">&gt;&gt; You can try downloading and installing a fresher version of MXM from mellanox web site. There was a thread on the list with the same problem, you can search for it.
</span><br>
<span class="quotelev1">&gt; Indeed, that OFED version comes with older version of MXM.
</span><br>
<span class="quotelev1">&gt; You can get the newer version here: <a href="http://www.mellanox.com/products/mxm">http://www.mellanox.com/products/mxm</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- YK
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2012/11/28 Joseph Farran&lt;jfarran_at_[hidden]&lt;mailto:jfarran_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      Howdy.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      I a have a stock CentOS 6.3 OS and a Mellanox MT26428 card.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      I installed the Mellanox OFED MLNX_OFED_LINUX-1.5.3-3.1.0-__rhel6.3-x86_64 which installed just fine.   Rebooted the system and when I try building OpenMPI 1.6.3, it aborts with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      mtl_mxm_send.c: In function 'ompi_mtl_mxm_isend':
</span><br>
<span class="quotelev2">&gt;&gt;      mtl_mxm_send.c:183: error: 'MXM_REQ_FLAG_SEND_SYNC' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt;&gt;      make[2]: *** [mtl_mxm_send.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;      make[2]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev2">&gt;&gt;      make[2]: Leaving directory `/data/apps/sources/openmpi-1.__6.3/ompi/mca/mtl/mxm'
</span><br>
<span class="quotelev2">&gt;&gt;      make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;      make[1]: Leaving directory `/data/apps/sources/openmpi-1.__6.3/ompi'
</span><br>
<span class="quotelev2">&gt;&gt;      make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      My configure options are:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           --with-sge                              \
</span><br>
<span class="quotelev2">&gt;&gt;           --with-threads                          \
</span><br>
<span class="quotelev2">&gt;&gt;           --with-hwloc                            \
</span><br>
<span class="quotelev2">&gt;&gt;           --with-openib                           \
</span><br>
<span class="quotelev2">&gt;&gt;           --enable-mpi-thread-multiple            \
</span><br>
<span class="quotelev2">&gt;&gt;           --with-mxm=/opt/mellanox/mxm            \
</span><br>
<span class="quotelev2">&gt;&gt;           --with-mxm-libdir=/opt/__mellanox/mxm/lib \
</span><br>
<span class="quotelev2">&gt;&gt;           --with-fca=/opt/mellanox/fca            \
</span><br>
<span class="quotelev2">&gt;&gt;           --enable-heterogeneous                  \
</span><br>
<span class="quotelev2">&gt;&gt;           --enable-openib-connectx-xrc            \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      Has anyone been able to compile OpenMPI 1.6.3 with the Mellanox OFED on CentOS 6.3?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      Joseph
</span><br>
<span class="quotelev2">&gt;&gt;      _________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;      users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;      users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20791.php">Brock Palen: "Re: [OMPI users] Java MPI Bindings in 1.6.x"</a>
<li><strong>Previous message:</strong> <a href="20789.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="20786.php">Yevgeny Kliteynik: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20793.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20793.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
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
