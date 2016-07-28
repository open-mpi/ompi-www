<?
$subject_val = "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 11:48:27 2014" -->
<!-- isoreceived="20140311154827" -->
<!-- sent="Tue, 11 Mar 2014 15:48:25 +0000" -->
<!-- isosent="20140311154825" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled" -->
<!-- id="1F112565-12CE-4C00-9809-2DADC6531E28_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="531F2A19.8030907_at_hpc2n.umu.se" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-11 11:48:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23801.php">raha khalili: "Re: [OMPI users] ssh error"</a>
<li><strong>Previous message:</strong> <a href="23799.php">&#197;ke Sandgren: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>In reply to:</strong> <a href="23799.php">&#197;ke Sandgren: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23862.php">Filippo Spiga: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>Reply:</strong> <a href="23862.php">Filippo Spiga: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 11, 2014, at 11:22 AM, &#197;ke Sandgren &lt;ake.sandgren_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; ../configure  CC=pgcc CXX=pgCC FC=pgf90 F90=pgf90 --prefix=/usr/local/Cluster-Users/fs395/openmpi-1.7.4/pgi-14.2_cuda-6.0RC  --enable-mpirun-prefix-by-default --with-hcoll=$HCOLL_DIR --with-fca=$FCA_DIR --with-mxm=$MXM_DIR --with-knem=$KNEM_DIR --with-slurm=/usr/local/Cluster-Apps/slurm  --with-cuda=$CUDA_INSTALL_PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At some point the compile process fails with this error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory `/home/fs395/archive/openmpi-1.7.4/build/ompi/mca/coll/hierarch'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making all in mca/coll/hcoll
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Entering directory `/home/fs395/archive/openmpi-1.7.4/build/ompi/mca/coll/hcoll'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CC       coll_hcoll_module.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CC       coll_hcoll_component.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CC       coll_hcoll_rte.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CC       coll_hcoll_ops.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CCLD     mca_coll_hcoll.la
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pgcc-Error-Unknown switch: -pthread
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You have to remove the -pthread from inherited_linker_flags=
</span><br>
<span class="quotelev1">&gt; in libpmi.la libslurm.la from your slurm build.
</span><br>
<p>With the configure line given above, I don't think he should be linking against libslurm.
<br>
<p>But I wonder if the underlying issue is actually correct: perhaps the inherited_linker_flags from libhcoll.la has -pthreads in it.
<br>
<p><span class="quotelev1">&gt; pgi doesn't under stand it and the default slurm build (with gcc at least) adds that causing the problem.
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23801.php">raha khalili: "Re: [OMPI users] ssh error"</a>
<li><strong>Previous message:</strong> <a href="23799.php">&#197;ke Sandgren: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>In reply to:</strong> <a href="23799.php">&#197;ke Sandgren: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23862.php">Filippo Spiga: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>Reply:</strong> <a href="23862.php">Filippo Spiga: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
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
