<?
$subject_val = "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 11:22:03 2014" -->
<!-- isoreceived="20140311152203" -->
<!-- sent="Tue, 11 Mar 2014 16:22:01 +0100" -->
<!-- isosent="20140311152201" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled" -->
<!-- id="531F2A19.8030907_at_hpc2n.umu.se" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="685ECC3F-765E-48F1-BFDB-39470B9A70F6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-11 11:22:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23800.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>Previous message:</strong> <a href="23798.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox	HCOLL enabled"</a>
<li><strong>In reply to:</strong> <a href="23798.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox	HCOLL enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23800.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>Reply:</strong> <a href="23800.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/11/2014 04:12 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; I don't see the config.log and make.log attached - can you send all the info requested here (including config.log and config.out):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you also send &quot;make V=1&quot; output as well?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 25, 2014, at 6:22 PM, Filippo Spiga &lt;spiga.filippo_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I came across another small issue while I was compiling Open MPI 1.7.4 using PGI 14.2 and building the support for Mellanox Hierarchical Collectives (--with-hcoll). Here you how configure Open MPI:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; export MXM_DIR=/opt/mellanox/mxm
</span><br>
<span class="quotelev2">&gt;&gt; export KNEM_DIR=$(find /opt -maxdepth 1 -type d -name &quot;knem*&quot; -print0)
</span><br>
<span class="quotelev2">&gt;&gt; export FCA_DIR=/opt/mellanox/fca
</span><br>
<span class="quotelev2">&gt;&gt; export HCOLL_DIR=/opt/mellanox/hcoll
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../configure  CC=pgcc CXX=pgCC FC=pgf90 F90=pgf90 --prefix=/usr/local/Cluster-Users/fs395/openmpi-1.7.4/pgi-14.2_cuda-6.0RC  --enable-mpirun-prefix-by-default --with-hcoll=$HCOLL_DIR --with-fca=$FCA_DIR --with-mxm=$MXM_DIR --with-knem=$KNEM_DIR --with-slurm=/usr/local/Cluster-Apps/slurm  --with-cuda=$CUDA_INSTALL_PATH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At some point the compile process fails with this error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/fs395/archive/openmpi-1.7.4/build/ompi/mca/coll/hierarch'
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/coll/hcoll
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/home/fs395/archive/openmpi-1.7.4/build/ompi/mca/coll/hcoll'
</span><br>
<span class="quotelev2">&gt;&gt;   CC       coll_hcoll_module.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC       coll_hcoll_component.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC       coll_hcoll_rte.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC       coll_hcoll_ops.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CCLD     mca_coll_hcoll.la
</span><br>
<span class="quotelev2">&gt;&gt; pgcc-Error-Unknown switch: -pthread
</span><br>
<p>You have to remove the -pthread from inherited_linker_flags=
<br>
in libpmi.la libslurm.la from your slurm build.
<br>
pgi doesn't under stand it and the default slurm build (with gcc at 
<br>
least) adds that causing the problem.
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90-580 14
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23800.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>Previous message:</strong> <a href="23798.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox	HCOLL enabled"</a>
<li><strong>In reply to:</strong> <a href="23798.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox	HCOLL enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23800.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>Reply:</strong> <a href="23800.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
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
