<?
$subject_val = "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 28 09:30:06 2012" -->
<!-- isoreceived="20121128143006" -->
<!-- sent="Wed, 28 Nov 2012 16:29:52 +0200" -->
<!-- isosent="20121128142952" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CentOS 6.3 &amp;amp; OpenMPI 1.6.3" -->
<!-- id="50B61FE0.9000304_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAFamD4VH02wu5RL9xUvAkXByuELu+zUY6gtnz_BB_s=wNWA0QQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-28 09:29:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20787.php">Brock Palen: "[OMPI users] Java MPI Bindings in 1.6.x"</a>
<li><strong>Previous message:</strong> <a href="20785.php">William Hay: "[OMPI users] BLCR + Qlogic infiniband"</a>
<li><strong>In reply to:</strong> <a href="20782.php">Pavel Mezentsev: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20789.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20789.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20790.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/28/2012 10:52 AM, Pavel Mezentsev wrote:
<br>
<span class="quotelev1">&gt; You can try downloading and installing a fresher version of MXM from mellanox web site. There was a thread on the list with the same problem, you can search for it.
</span><br>
<p>Indeed, that OFED version comes with older version of MXM.
<br>
You can get the newer version here: <a href="http://www.mellanox.com/products/mxm">http://www.mellanox.com/products/mxm</a>
<br>
<p>-- YK
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2012/11/28 Joseph Farran &lt;jfarran_at_[hidden] &lt;mailto:jfarran_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Howdy.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     I a have a stock CentOS 6.3 OS and a Mellanox MT26428 card.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     I installed the Mellanox OFED MLNX_OFED_LINUX-1.5.3-3.1.0-__rhel6.3-x86_64 which installed just fine.   Rebooted the system and when I try building OpenMPI 1.6.3, it aborts with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     mtl_mxm_send.c: In function 'ompi_mtl_mxm_isend':
</span><br>
<span class="quotelev1">&gt;     mtl_mxm_send.c:183: error: 'MXM_REQ_FLAG_SEND_SYNC' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt;     make[2]: *** [mtl_mxm_send.lo] Error 1
</span><br>
<span class="quotelev1">&gt;     make[2]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt;     make[2]: Leaving directory `/data/apps/sources/openmpi-1.__6.3/ompi/mca/mtl/mxm'
</span><br>
<span class="quotelev1">&gt;     make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;     make[1]: Leaving directory `/data/apps/sources/openmpi-1.__6.3/ompi'
</span><br>
<span class="quotelev1">&gt;     make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     My configure options are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          --with-sge                              \
</span><br>
<span class="quotelev1">&gt;          --with-threads                          \
</span><br>
<span class="quotelev1">&gt;          --with-hwloc                            \
</span><br>
<span class="quotelev1">&gt;          --with-openib                           \
</span><br>
<span class="quotelev1">&gt;          --enable-mpi-thread-multiple            \
</span><br>
<span class="quotelev1">&gt;          --with-mxm=/opt/mellanox/mxm            \
</span><br>
<span class="quotelev1">&gt;          --with-mxm-libdir=/opt/__mellanox/mxm/lib \
</span><br>
<span class="quotelev1">&gt;          --with-fca=/opt/mellanox/fca            \
</span><br>
<span class="quotelev1">&gt;          --enable-heterogeneous                  \
</span><br>
<span class="quotelev1">&gt;          --enable-openib-connectx-xrc            \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Has anyone been able to compile OpenMPI 1.6.3 with the Mellanox OFED on CentOS 6.3?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Joseph
</span><br>
<span class="quotelev1">&gt;     _________________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20787.php">Brock Palen: "[OMPI users] Java MPI Bindings in 1.6.x"</a>
<li><strong>Previous message:</strong> <a href="20785.php">William Hay: "[OMPI users] BLCR + Qlogic infiniband"</a>
<li><strong>In reply to:</strong> <a href="20782.php">Pavel Mezentsev: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20789.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20789.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20790.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
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
