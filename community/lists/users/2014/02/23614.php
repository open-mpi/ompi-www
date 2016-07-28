<?
$subject_val = "[OMPI users] Configure issue with/without HWLOC when PGI used and CUDA support enabled";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 14 09:43:42 2014" -->
<!-- isoreceived="20140214144342" -->
<!-- sent="Fri, 14 Feb 2014 14:43:38 +0000" -->
<!-- isosent="20140214144338" -->
<!-- name="Filippo Spiga" -->
<!-- email="spiga.filippo_at_[hidden]" -->
<!-- subject="[OMPI users] Configure issue with/without HWLOC when PGI used and CUDA support enabled" -->
<!-- id="4AC6D007-EC88-46D9-8C86-BC025D4C6CA4_at_gmail.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Configure issue with/without HWLOC when PGI used and CUDA support enabled<br>
<strong>From:</strong> Filippo Spiga (<em>spiga.filippo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-14 09:43:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23615.php">Ralph Castain: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Previous message:</strong> <a href="23613.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions on MPI I/O and ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23616.php">Rolf vandeVaart: "Re: [OMPI users] Configure issue with/without HWLOC when PGI used and	CUDA support enabled"</a>
<li><strong>Reply:</strong> <a href="23616.php">Rolf vandeVaart: "Re: [OMPI users] Configure issue with/without HWLOC when PGI used and	CUDA support enabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI developers,
<br>
<p>I just want to point to a weird behavior of the configure procedure I discovered. I am compiling Open MPI 1.7.4 with CUDA support (CUDA 6.0 RC) and PGI 14.1
<br>
<p>If I explicitly compile against a self-compiled version of HWLOC (1.8.1) using this configure line
<br>
../configure CC=pgcc CXX=pgCC FC=pgf90 F90=pgf90 --prefix=/usr/local/Cluster-Users/fs395/openmpi-1.7.4/pgi-14.1_cuda-6.0RC  --enable-mpirun-prefix-by-default --with-fca=$FCA_DIR --with-mxm=$MXM_DIR --with-knem=$KNEM_DIR --with-hwloc=/usr/local/Cluster-Users/fs395/hwlock-1.8.1/gcc-4.4.7_cuda-6.0RC --with-slurm=/usr/local/Cluster-Apps/slurm  --with-cuda=/usr/local/Cluster-Users/fs395/cuda/6.0-RC
<br>
<p>make fails telling me that it cannot find &quot;-lcudart&quot;.
<br>
<p><p>If I compile without HWLOC using this configure line:
<br>
../configure CC=pgcc CXX=pgCC FC=pgf90 F90=pgf90 --prefix=/usr/local/Cluster-Users/fs395/openmpi-1.7.4/pgi-14.1_cuda-6.0RC  --enable-mpirun-prefix-by-default --with-fca=$FCA_DIR --with-mxm=$MXM_DIR --with-knem=$KNEM_DIR  --with-slurm=/usr/local/Cluster-Apps/slurm  --with-cuda=/usr/local/Cluster-Users/fs395/cuda/6.0-RC
<br>
<p>make succeeds and I have Open MPI compiled properly. 
<br>
<p>$ mpif90 -show
<br>
pgf90 -I/usr/local/Cluster-Users/fs395/openmpi-1.7.4/pgi-14.1_cuda-6.0RC/include -I/usr/local/Cluster-Users/fs395/openmpi-1.7.4/pgi-14.1_cuda-6.0RC/lib -Wl,-rpath -Wl,/usr/local/Cluster-Users/fs395/openmpi-1.7.4/pgi-14.1_cuda-6.0RC/lib -L/usr/local/Cluster-Users/fs395/openmpi-1.7.4/pgi-14.1_cuda-6.0RC/lib -lmpi_usempif08 -lmpi_usempi_ignore_tkr -lmpi_mpifh -lmpi
<br>
$ ompi_info --all | grep btl_openib_have_cuda_gdr
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: informational &quot;btl_openib_have_cuda_gdr&quot; (current value: &quot;true&quot;, data source: default, level: 5 tuner/detail, type: bool)
<br>
<p>I wonder why the configure picks up lib instead of lib64. I will test the build using real codes.
<br>
<p>Cheers,
<br>
Filippo
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="23615.php">Ralph Castain: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Previous message:</strong> <a href="23613.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions on MPI I/O and ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23616.php">Rolf vandeVaart: "Re: [OMPI users] Configure issue with/without HWLOC when PGI used and	CUDA support enabled"</a>
<li><strong>Reply:</strong> <a href="23616.php">Rolf vandeVaart: "Re: [OMPI users] Configure issue with/without HWLOC when PGI used and	CUDA support enabled"</a>
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
