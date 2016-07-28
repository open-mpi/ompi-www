<?
$subject_val = "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 16 11:22:23 2014" -->
<!-- isoreceived="20140316152223" -->
<!-- sent="Sun, 16 Mar 2014 15:22:18 +0000" -->
<!-- isosent="20140316152218" -->
<!-- name="Filippo Spiga" -->
<!-- email="spiga.filippo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled" -->
<!-- id="0D915EFD-EED4-4C67-81D8-B4177CC6C415_at_gmail.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1F112565-12CE-4C00-9809-2DADC6531E28_at_cisco.com" -->
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
<strong>From:</strong> Filippo Spiga (<em>spiga.filippo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-16 11:22:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23863.php">Ralph Castain: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>Previous message:</strong> <a href="23861.php">Ralph Castain: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>In reply to:</strong> <a href="23800.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23863.php">Ralph Castain: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>Reply:</strong> <a href="23863.php">Ralph Castain: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff, Hi Ake,
<br>
<p>removing --with-slurm and keeping --with-hcoll seems to work. The error disappears at compile time, I have not yet tried to run a job. I can copy config.log and the make.log is needed.
<br>
<p>Cheers,
<br>
F
<br>
<p>On Mar 11, 2014, at 4:48 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Mar 11, 2014, at 11:22 AM, &#197;ke Sandgren &lt;ake.sandgren_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../configure  CC=pgcc CXX=pgCC FC=pgf90 F90=pgf90 --prefix=/usr/local/Cluster-Users/fs395/openmpi-1.7.4/pgi-14.2_cuda-6.0RC  --enable-mpirun-prefix-by-default --with-hcoll=$HCOLL_DIR --with-fca=$FCA_DIR --with-mxm=$MXM_DIR --with-knem=$KNEM_DIR --with-slurm=/usr/local/Cluster-Apps/slurm  --with-cuda=$CUDA_INSTALL_PATH
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; At some point the compile process fails with this error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Leaving directory `/home/fs395/archive/openmpi-1.7.4/build/ompi/mca/coll/hierarch'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Making all in mca/coll/hcoll
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Entering directory `/home/fs395/archive/openmpi-1.7.4/build/ompi/mca/coll/hcoll'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CC       coll_hcoll_module.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CC       coll_hcoll_component.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CC       coll_hcoll_rte.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CC       coll_hcoll_ops.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CCLD     mca_coll_hcoll.la
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pgcc-Error-Unknown switch: -pthread
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You have to remove the -pthread from inherited_linker_flags=
</span><br>
<span class="quotelev2">&gt;&gt; in libpmi.la libslurm.la from your slurm build.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With the configure line given above, I don't think he should be linking against libslurm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I wonder if the underlying issue is actually correct: perhaps the inherited_linker_flags from libhcoll.la has -pthreads in it.
</span><br>
<p><p><pre>
--
Mr. Filippo SPIGA, M.Sc.
<a href="http://www.linkedin.com/in/filippospiga">http://www.linkedin.com/in/filippospiga</a> ~ skype: filippo.spiga
&#171;Nobody will drive us out of Cantor's paradise.&#187; ~ David Hilbert
*****
Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23863.php">Ralph Castain: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>Previous message:</strong> <a href="23861.php">Ralph Castain: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>In reply to:</strong> <a href="23800.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23863.php">Ralph Castain: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>Reply:</strong> <a href="23863.php">Ralph Castain: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
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
