<?
$subject_val = "Re: [OMPI users] Configure issue with/without HWLOC when PGI used and	CUDA support enabled";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 14 12:16:17 2014" -->
<!-- isoreceived="20140214171617" -->
<!-- sent="Fri, 14 Feb 2014 09:15:42 -0800" -->
<!-- isosent="20140214171542" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure issue with/without HWLOC when PGI used and	CUDA support enabled" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F36019C96F20_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4AC6D007-EC88-46D9-8C86-BC025D4C6CA4_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configure issue with/without HWLOC when PGI used and	CUDA support enabled<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-14 12:15:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23617.php">Gustavo Correa: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Previous message:</strong> <a href="23615.php">Ralph Castain: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>In reply to:</strong> <a href="23614.php">Filippo Spiga: "[OMPI users] Configure issue with/without HWLOC when PGI used and CUDA support enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23618.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configure issue with/without HWLOC when PGI used and	CUDA support enabled"</a>
<li><strong>Reply:</strong> <a href="23618.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configure issue with/without HWLOC when PGI used and	CUDA support enabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I assume your first issue is happening because you configured hwloc with cuda support which creates a dependency on libcudart.so.  Not sure why that would mess up Open MPI.  Can you send me how you configured hwloc?
<br>
<p>I am not sure I understand the second issue.  Open MPI puts everything in lib even though you may be building for 64 bits.  So all of these are fine.
<br>
&nbsp;&nbsp;-I/usr/local/Cluster-Users/fs395/openmpi-1.7.4/pgi-14.1_cuda-6.0RC/lib 
<br>
&nbsp;-Wl,-rpath -Wl,/usr/local/Cluster-Users/fs395/openmpi-1.7.4/pgi-14.1_cuda-6.0RC/lib 
<br>
&nbsp;-L/usr/local/Cluster-Users/fs395/openmpi-1.7.4/pgi-14.1_cuda-6.0RC/lib
<br>
<p>Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Filippo Spiga
</span><br>
<span class="quotelev1">&gt;Sent: Friday, February 14, 2014 9:44 AM
</span><br>
<span class="quotelev1">&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI users] Configure issue with/without HWLOC when PGI used
</span><br>
<span class="quotelev1">&gt;and CUDA support enabled
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Dear Open MPI developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I just want to point to a weird behavior of the configure procedure I
</span><br>
<span class="quotelev1">&gt;discovered. I am compiling Open MPI 1.7.4 with CUDA support (CUDA 6.0 RC)
</span><br>
<span class="quotelev1">&gt;and PGI 14.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;If I explicitly compile against a self-compiled version of HWLOC (1.8.1) using
</span><br>
<span class="quotelev1">&gt;this configure line ../configure CC=pgcc CXX=pgCC FC=pgf90 F90=pgf90 --
</span><br>
<span class="quotelev1">&gt;prefix=/usr/local/Cluster-Users/fs395/openmpi-1.7.4/pgi-14.1_cuda-6.0RC  --
</span><br>
<span class="quotelev1">&gt;enable-mpirun-prefix-by-default --with-fca=$FCA_DIR --with-
</span><br>
<span class="quotelev1">&gt;mxm=$MXM_DIR --with-knem=$KNEM_DIR --with-hwloc=/usr/local/Cluster-
</span><br>
<span class="quotelev1">&gt;Users/fs395/hwlock-1.8.1/gcc-4.4.7_cuda-6.0RC --with-
</span><br>
<span class="quotelev1">&gt;slurm=/usr/local/Cluster-Apps/slurm  --with-cuda=/usr/local/Cluster-
</span><br>
<span class="quotelev1">&gt;Users/fs395/cuda/6.0-RC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;make fails telling me that it cannot find &quot;-lcudart&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;If I compile without HWLOC using this configure line:
</span><br>
<span class="quotelev1">&gt;../configure CC=pgcc CXX=pgCC FC=pgf90 F90=pgf90 --
</span><br>
<span class="quotelev1">&gt;prefix=/usr/local/Cluster-Users/fs395/openmpi-1.7.4/pgi-14.1_cuda-6.0RC  --
</span><br>
<span class="quotelev1">&gt;enable-mpirun-prefix-by-default --with-fca=$FCA_DIR --with-
</span><br>
<span class="quotelev1">&gt;mxm=$MXM_DIR --with-knem=$KNEM_DIR  --with-slurm=/usr/local/Cluster-
</span><br>
<span class="quotelev1">&gt;Apps/slurm  --with-cuda=/usr/local/Cluster-Users/fs395/cuda/6.0-RC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;make succeeds and I have Open MPI compiled properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;$ mpif90 -show
</span><br>
<span class="quotelev1">&gt;pgf90 -I/usr/local/Cluster-Users/fs395/openmpi-1.7.4/pgi-14.1_cuda-
</span><br>
<span class="quotelev1">&gt;6.0RC/include -I/usr/local/Cluster-Users/fs395/openmpi-1.7.4/pgi-14.1_cuda-
</span><br>
<span class="quotelev1">&gt;6.0RC/lib -Wl,-rpath -Wl,/usr/local/Cluster-Users/fs395/openmpi-1.7.4/pgi-
</span><br>
<span class="quotelev1">&gt;14.1_cuda-6.0RC/lib -L/usr/local/Cluster-Users/fs395/openmpi-1.7.4/pgi-
</span><br>
<span class="quotelev1">&gt;14.1_cuda-6.0RC/lib -lmpi_usempif08 -lmpi_usempi_ignore_tkr -lmpi_mpifh -
</span><br>
<span class="quotelev1">&gt;lmpi $ ompi_info --all | grep btl_openib_have_cuda_gdr
</span><br>
<span class="quotelev1">&gt;                 MCA btl: informational &quot;btl_openib_have_cuda_gdr&quot; (current value:
</span><br>
<span class="quotelev1">&gt;&quot;true&quot;, data source: default, level: 5 tuner/detail, type: bool)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I wonder why the configure picks up lib instead of lib64. I will test the build
</span><br>
<span class="quotelev1">&gt;using real codes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Cheers,
</span><br>
<span class="quotelev1">&gt;Filippo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;Mr. Filippo SPIGA, M.Sc.
</span><br>
<span class="quotelev1">&gt;<a href="http://www.linkedin.com/in/filippospiga">http://www.linkedin.com/in/filippospiga</a> ~ skype: filippo.spiga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&lt;Nobody will drive us out of Cantor's paradise.&gt; ~ David Hilbert
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;*****
</span><br>
<span class="quotelev1">&gt;Disclaimer: &quot;Please note this message and any attachments are
</span><br>
<span class="quotelev1">&gt;CONFIDENTIAL and may be privileged or otherwise protected from disclosure.
</span><br>
<span class="quotelev1">&gt;The contents are not to be disclosed to anyone other than the addressee.
</span><br>
<span class="quotelev1">&gt;Unauthorized recipients are requested to preserve this confidentiality and to
</span><br>
<span class="quotelev1">&gt;advise the sender immediately of any error in transmission.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23617.php">Gustavo Correa: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Previous message:</strong> <a href="23615.php">Ralph Castain: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>In reply to:</strong> <a href="23614.php">Filippo Spiga: "[OMPI users] Configure issue with/without HWLOC when PGI used and CUDA support enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23618.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configure issue with/without HWLOC when PGI used and	CUDA support enabled"</a>
<li><strong>Reply:</strong> <a href="23618.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configure issue with/without HWLOC when PGI used and	CUDA support enabled"</a>
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
