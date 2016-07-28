<?
$subject_val = "[OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  5 07:32:38 2016" -->
<!-- isoreceived="20160505113238" -->
<!-- sent="Thu, 5 May 2016 07:32:35 -0400" -->
<!-- isosent="20160505113235" -->
<!-- name="Andy Riebs" -->
<!-- email="andy.riebs_at_[hidden]" -->
<!-- subject="[OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1" -->
<!-- id="572B2F53.1000907_at_hpe.com" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1<br>
<strong>From:</strong> Andy Riebs (<em>andy.riebs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-05 07:32:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29095.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Previous message:</strong> <a href="29093.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29100.php">Joshua Ladd: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<li><strong>Reply:</strong> <a href="29100.php">Joshua Ladd: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've built 1.10.2 with all my favorite configuration options, but I get 
<br>
messages such as this (one for each rank with 
<br>
orte_base_help_aggregate=0) when I try to run on a MOFED system:
<br>
<p>$ shmemrun -H hades02,hades03 $PWD/shmem.out
<br>
--------------------------------------------------------------------------
<br>
No OpenFabrics connection schemes reported that they were able to be
<br>
used on a specific port.  As such, the openib BTL (OpenFabrics
<br>
support) will be disabled for this port.
<br>
<p>&nbsp;&nbsp;&nbsp;Local host:           hades03
<br>
&nbsp;&nbsp;&nbsp;Local device:         mlx4_0
<br>
&nbsp;&nbsp;&nbsp;Local port:           2
<br>
&nbsp;&nbsp;&nbsp;CPCs attempted:       rdmacm, udcm
<br>
--------------------------------------------------------------------------
<br>
<p>My configure options:
<br>
config_opts=&quot;--prefix=${INSTALL_DIR} \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--without-mpi-param-check \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-knem=/opt/mellanox/hpcx/knem \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-mxm=/opt/mellanox/mxm  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-mxm-libdir=/opt/mellanox/mxm/lib \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-fca=/opt/mellanox/fca \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-pmi=${INSTALL_ROOT}/slurm \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--without-psm --disable-dlopen \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-vt \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-orterun-prefix-by-default \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-debug-symbols&quot;
<br>
<p><p>There aren't any obvious error messages in the build log -- what am I 
<br>
missing?
<br>
<p>Andy
<br>
<p><pre>
-- 
Andy Riebs
andy.riebs_at_[hidden]
Hewlett-Packard Enterprise
High Performance Computing Software Engineering
+1 404 648 9024
My opinions are not necessarily those of HPE
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29095.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Previous message:</strong> <a href="29093.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29100.php">Joshua Ladd: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<li><strong>Reply:</strong> <a href="29100.php">Joshua Ladd: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
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
