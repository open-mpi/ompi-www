<?
$subject_val = "[OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 27 18:47:10 2012" -->
<!-- isoreceived="20121127234710" -->
<!-- sent="Tue, 27 Nov 2012 15:47:05 -0800" -->
<!-- isosent="20121127234705" -->
<!-- name="Joseph Farran" -->
<!-- email="jfarran_at_[hidden]" -->
<!-- subject="[OMPI users] CentOS 6.3 &amp;amp; OpenMPI 1.6.3" -->
<!-- id="50B550F9.4000206_at_uci.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3<br>
<strong>From:</strong> Joseph Farran (<em>jfarran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-27 18:47:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20780.php">Syed Ahsan Ali: "[OMPI users] Infiniband errors"</a>
<li><strong>Previous message:</strong> <a href="20778.php">George Markomanolis: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20782.php">Pavel Mezentsev: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20782.php">Pavel Mezentsev: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Howdy.
<br>
<p>I a have a stock CentOS 6.3 OS and a Mellanox MT26428 card.
<br>
<p>I installed the Mellanox OFED MLNX_OFED_LINUX-1.5.3-3.1.0-rhel6.3-x86_64 which installed just fine.   Rebooted the system and when I try building OpenMPI 1.6.3, it aborts with:
<br>
<p>mtl_mxm_send.c: In function 'ompi_mtl_mxm_isend':
<br>
mtl_mxm_send.c:183: error: 'MXM_REQ_FLAG_SEND_SYNC' undeclared (first use in this function)
<br>
make[2]: *** [mtl_mxm_send.lo] Error 1
<br>
make[2]: *** Waiting for unfinished jobs....
<br>
make[2]: Leaving directory `/data/apps/sources/openmpi-1.6.3/ompi/mca/mtl/mxm'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/data/apps/sources/openmpi-1.6.3/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>My configure options are:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-sge                              \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-threads                          \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-hwloc                            \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-openib                           \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpi-thread-multiple            \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-mxm=/opt/mellanox/mxm            \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-mxm-libdir=/opt/mellanox/mxm/lib \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-fca=/opt/mellanox/fca            \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-heterogeneous                  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-openib-connectx-xrc            \
<br>
<p><p>Has anyone been able to compile OpenMPI 1.6.3 with the Mellanox OFED on CentOS 6.3?
<br>
<p>Joseph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20780.php">Syed Ahsan Ali: "[OMPI users] Infiniband errors"</a>
<li><strong>Previous message:</strong> <a href="20778.php">George Markomanolis: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20782.php">Pavel Mezentsev: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20782.php">Pavel Mezentsev: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
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
