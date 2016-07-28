<?
$subject_val = "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 28 03:52:44 2012" -->
<!-- isoreceived="20121128085244" -->
<!-- sent="Wed, 28 Nov 2012 12:52:39 +0400" -->
<!-- isosent="20121128085239" -->
<!-- name="Pavel Mezentsev" -->
<!-- email="pavel.mezentsev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CentOS 6.3 &amp;amp; OpenMPI 1.6.3" -->
<!-- id="CAFamD4VH02wu5RL9xUvAkXByuELu+zUY6gtnz_BB_s=wNWA0QQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50B550F9.4000206_at_uci.edu" -->
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
<strong>From:</strong> Pavel Mezentsev (<em>pavel.mezentsev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-28 03:52:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20783.php">Syed Ahsan Ali: "Re: [OMPI users] Infiniband errors"</a>
<li><strong>Previous message:</strong> <a href="20781.php">John Hearns: "Re: [OMPI users] Infiniband errors"</a>
<li><strong>In reply to:</strong> <a href="20779.php">Joseph Farran: "[OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20786.php">Yevgeny Kliteynik: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20786.php">Yevgeny Kliteynik: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can try downloading and installing a fresher version of MXM from
<br>
mellanox web site. There was a thread on the list with the same problem,
<br>
you can search for it.
<br>
<p><p>2012/11/28 Joseph Farran &lt;jfarran_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Howdy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I a have a stock CentOS 6.3 OS and a Mellanox MT26428 card.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I installed the Mellanox OFED MLNX_OFED_LINUX-1.5.3-3.1.0-**rhel6.3-x86_64
</span><br>
<span class="quotelev1">&gt; which installed just fine.   Rebooted the system and when I try building
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.6.3, it aborts with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mtl_mxm_send.c: In function 'ompi_mtl_mxm_isend':
</span><br>
<span class="quotelev1">&gt; mtl_mxm_send.c:183: error: 'MXM_REQ_FLAG_SEND_SYNC' undeclared (first use
</span><br>
<span class="quotelev1">&gt; in this function)
</span><br>
<span class="quotelev1">&gt; make[2]: *** [mtl_mxm_send.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/data/apps/sources/openmpi-1.**
</span><br>
<span class="quotelev1">&gt; 6.3/ompi/mca/mtl/mxm'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/data/apps/sources/openmpi-1.**6.3/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My configure options are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --with-sge                              \
</span><br>
<span class="quotelev1">&gt;     --with-threads                          \
</span><br>
<span class="quotelev1">&gt;     --with-hwloc                            \
</span><br>
<span class="quotelev1">&gt;     --with-openib                           \
</span><br>
<span class="quotelev1">&gt;     --enable-mpi-thread-multiple            \
</span><br>
<span class="quotelev1">&gt;     --with-mxm=/opt/mellanox/mxm            \
</span><br>
<span class="quotelev1">&gt;     --with-mxm-libdir=/opt/**mellanox/mxm/lib \
</span><br>
<span class="quotelev1">&gt;     --with-fca=/opt/mellanox/fca            \
</span><br>
<span class="quotelev1">&gt;     --enable-heterogeneous                  \
</span><br>
<span class="quotelev1">&gt;     --enable-openib-connectx-xrc            \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone been able to compile OpenMPI 1.6.3 with the Mellanox OFED on
</span><br>
<span class="quotelev1">&gt; CentOS 6.3?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Joseph
</span><br>
<span class="quotelev1">&gt; ______________________________**_________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20782/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20783.php">Syed Ahsan Ali: "Re: [OMPI users] Infiniband errors"</a>
<li><strong>Previous message:</strong> <a href="20781.php">John Hearns: "Re: [OMPI users] Infiniband errors"</a>
<li><strong>In reply to:</strong> <a href="20779.php">Joseph Farran: "[OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20786.php">Yevgeny Kliteynik: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20786.php">Yevgeny Kliteynik: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
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
