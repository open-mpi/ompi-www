<?
$subject_val = "[OMPI users] --mca btl_openib_if_include";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 16 21:11:34 2008" -->
<!-- isoreceived="20081017011134" -->
<!-- sent="Thu, 16 Oct 2008 18:10:46 -0700 (PDT)" -->
<!-- isosent="20081017011046" -->
<!-- name="Mostyn Lewis" -->
<!-- email="Mostyn.Lewis_at_[hidden]" -->
<!-- subject="[OMPI users] --mca btl_openib_if_include" -->
<!-- id="Pine.GSO.4.64.0810161806180.13210_at_aragorn.brc.West.Sun.COM" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] --mca btl_openib_if_include<br>
<strong>From:</strong> Mostyn Lewis (<em>Mostyn.Lewis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-16 21:10:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7007.php">Francesco Iannone: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<li><strong>Previous message:</strong> <a href="7005.php">Mostyn Lewis: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7026.php">Jeff Squyres: "Re: [OMPI users] --mca btl_openib_if_include"</a>
<li><strong>Reply:</strong> <a href="7026.php">Jeff Squyres: "Re: [OMPI users] --mca btl_openib_if_include"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Using today's SVN 1.4a1r19757
<br>
<p>with
<br>
MCA='--mca btl_openib_verbose 1 --mca btl openib,self --mca btl_openib_if_include &quot;mlx4_0:1,mlx4_1:1&quot;'
<br>
<p>ibstatus (OFED 1.3.1) gives:
<br>
Infiniband device 'mlx4_0' port 1 status:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default gid:     fe80:0000:0000:0000:0003:ba00:0100:71a1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;base lid:        0x2f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm lid:          0x1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:           4: ACTIVE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys state:      5: LinkUp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rate:            20 Gb/sec (4X DDR)
<br>
<p>Infiniband device 'mlx4_0' port 2 status:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default gid:     fe80:0000:0000:0000:0003:ba00:0100:71a2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;base lid:        0x0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm lid:          0x0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:           1: DOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys state:      2: Polling
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rate:            10 Gb/sec (4X)
<br>
<p>Infiniband device 'mlx4_1' port 1 status:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default gid:     fe80:0000:0000:0000:0003:ba00:0100:70b9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;base lid:        0x30
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm lid:          0x1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:           4: ACTIVE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys state:      5: LinkUp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rate:            20 Gb/sec (4X DDR)
<br>
<p>Infiniband device 'mlx4_1' port 2 status:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default gid:     fe80:0000:0000:0000:0003:ba00:0100:70ba
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;base lid:        0x0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm lid:          0x0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:           1: DOWN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys state:      2: Polling
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rate:            10 Gb/sec (4X)
<br>
<p>OpenMPI says for a:
<br>
mpirun --prefix /tools/openmpi/1.4a1r19757_svn/connectx/gcc64/4.1.2/openib/rh_EL_4/x86_64/xeon -x LD_LIBRARY_PATH --mca btl_openib_verbose 1 --mca btl openib,self --mca btl_openib_if_include &quot;mlx4_0:1,mlx4_1:1&quot; -np 4 -machinefile dhosts ./IMB-MPI1.openmpi
<br>
<p>--------------------------------------------------------------------------
<br>
WARNING: One or more nonexistent OpenFabrics devices/ports were
<br>
specified:
<br>
<p>&nbsp;&nbsp;&nbsp;Host:                 r4450_3
<br>
&nbsp;&nbsp;&nbsp;MCA parameter:        mca_btl_if_include
<br>
&nbsp;&nbsp;&nbsp;Nonexistent entities: &quot;mlx4_0:1,mlx4_1:1&quot;
<br>
<p>These entities will be ignored.  You can disable this warning by
<br>
setting the btl_openib_warn_nonexistent_if MCA parameter to 0.
<br>
--------------------------------------------------------------------------
<br>
<p>Scali 5.6 works in dual-rail mode with this as does mvapich2-1.2rc2.
<br>
<p>What am I doing wrong, please?
<br>
<p>DM
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7007.php">Francesco Iannone: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<li><strong>Previous message:</strong> <a href="7005.php">Mostyn Lewis: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7026.php">Jeff Squyres: "Re: [OMPI users] --mca btl_openib_if_include"</a>
<li><strong>Reply:</strong> <a href="7026.php">Jeff Squyres: "Re: [OMPI users] --mca btl_openib_if_include"</a>
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
