<?
$subject_val = "Re: [OMPI users] Configure issue with/without HWLOC when PGI used and	CUDA support enabled";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 14 12:58:32 2014" -->
<!-- isoreceived="20140214175832" -->
<!-- sent="Fri, 14 Feb 2014 17:58:30 +0000" -->
<!-- isosent="20140214175830" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure issue with/without HWLOC when PGI used and	CUDA support enabled" -->
<!-- id="3E57B272-5119-4563-B8C4-A531DF3C9C78_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F36019C96F20_at_HQMAIL02.nvidia.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-14 12:58:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23619.php">Saliya Ekanayake: "Re: [OMPI users] Does sendrecv guarantee order?"</a>
<li><strong>Previous message:</strong> <a href="23617.php">Gustavo Correa: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>In reply to:</strong> <a href="23616.php">Rolf vandeVaart: "Re: [OMPI users] Configure issue with/without HWLOC when PGI used and	CUDA support enabled"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To avoid a few back-n-forths in email, you might want to send all the diagnostic info here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>On Feb 14, 2014, at 12:15 PM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I assume your first issue is happening because you configured hwloc with cuda support which creates a dependency on libcudart.so.  Not sure why that would mess up Open MPI.  Can you send me how you configured hwloc?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not sure I understand the second issue.  Open MPI puts everything in lib even though you may be building for 64 bits.  So all of these are fine.
</span><br>
<span class="quotelev1">&gt;  -I/usr/local/Cluster-Users/fs395/openmpi-1.7.4/pgi-14.1_cuda-6.0RC/lib 
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath -Wl,/usr/local/Cluster-Users/fs395/openmpi-1.7.4/pgi-14.1_cuda-6.0RC/lib 
</span><br>
<span class="quotelev1">&gt; -L/usr/local/Cluster-Users/fs395/openmpi-1.7.4/pgi-14.1_cuda-6.0RC/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Filippo Spiga
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, February 14, 2014 9:44 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] Configure issue with/without HWLOC when PGI used
</span><br>
<span class="quotelev2">&gt;&gt; and CUDA support enabled
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear Open MPI developers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I just want to point to a weird behavior of the configure procedure I
</span><br>
<span class="quotelev2">&gt;&gt; discovered. I am compiling Open MPI 1.7.4 with CUDA support (CUDA 6.0 RC)
</span><br>
<span class="quotelev2">&gt;&gt; and PGI 14.1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If I explicitly compile against a self-compiled version of HWLOC (1.8.1) using
</span><br>
<span class="quotelev2">&gt;&gt; this configure line ../configure CC=pgcc CXX=pgCC FC=pgf90 F90=pgf90 --
</span><br>
<span class="quotelev2">&gt;&gt; prefix=/usr/local/Cluster-Users/fs395/openmpi-1.7.4/pgi-14.1_cuda-6.0RC  --
</span><br>
<span class="quotelev2">&gt;&gt; enable-mpirun-prefix-by-default --with-fca=$FCA_DIR --with-
</span><br>
<span class="quotelev2">&gt;&gt; mxm=$MXM_DIR --with-knem=$KNEM_DIR --with-hwloc=/usr/local/Cluster-
</span><br>
<span class="quotelev2">&gt;&gt; Users/fs395/hwlock-1.8.1/gcc-4.4.7_cuda-6.0RC --with-
</span><br>
<span class="quotelev2">&gt;&gt; slurm=/usr/local/Cluster-Apps/slurm  --with-cuda=/usr/local/Cluster-
</span><br>
<span class="quotelev2">&gt;&gt; Users/fs395/cuda/6.0-RC
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; make fails telling me that it cannot find &quot;-lcudart&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If I compile without HWLOC using this configure line:
</span><br>
<span class="quotelev2">&gt;&gt; ../configure CC=pgcc CXX=pgCC FC=pgf90 F90=pgf90 --
</span><br>
<span class="quotelev2">&gt;&gt; prefix=/usr/local/Cluster-Users/fs395/openmpi-1.7.4/pgi-14.1_cuda-6.0RC  --
</span><br>
<span class="quotelev2">&gt;&gt; enable-mpirun-prefix-by-default --with-fca=$FCA_DIR --with-
</span><br>
<span class="quotelev2">&gt;&gt; mxm=$MXM_DIR --with-knem=$KNEM_DIR  --with-slurm=/usr/local/Cluster-
</span><br>
<span class="quotelev2">&gt;&gt; Apps/slurm  --with-cuda=/usr/local/Cluster-Users/fs395/cuda/6.0-RC
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; make succeeds and I have Open MPI compiled properly.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ mpif90 -show
</span><br>
<span class="quotelev2">&gt;&gt; pgf90 -I/usr/local/Cluster-Users/fs395/openmpi-1.7.4/pgi-14.1_cuda-
</span><br>
<span class="quotelev2">&gt;&gt; 6.0RC/include -I/usr/local/Cluster-Users/fs395/openmpi-1.7.4/pgi-14.1_cuda-
</span><br>
<span class="quotelev2">&gt;&gt; 6.0RC/lib -Wl,-rpath -Wl,/usr/local/Cluster-Users/fs395/openmpi-1.7.4/pgi-
</span><br>
<span class="quotelev2">&gt;&gt; 14.1_cuda-6.0RC/lib -L/usr/local/Cluster-Users/fs395/openmpi-1.7.4/pgi-
</span><br>
<span class="quotelev2">&gt;&gt; 14.1_cuda-6.0RC/lib -lmpi_usempif08 -lmpi_usempi_ignore_tkr -lmpi_mpifh -
</span><br>
<span class="quotelev2">&gt;&gt; lmpi $ ompi_info --all | grep btl_openib_have_cuda_gdr
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: informational &quot;btl_openib_have_cuda_gdr&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;true&quot;, data source: default, level: 5 tuner/detail, type: bool)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I wonder why the configure picks up lib instead of lib64. I will test the build
</span><br>
<span class="quotelev2">&gt;&gt; using real codes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Filippo
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Mr. Filippo SPIGA, M.Sc.
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.linkedin.com/in/filippospiga">http://www.linkedin.com/in/filippospiga</a> ~ skype: filippo.spiga
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Nobody will drive us out of Cantor's paradise.&gt; ~ David Hilbert
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; *****
</span><br>
<span class="quotelev2">&gt;&gt; Disclaimer: &quot;Please note this message and any attachments are
</span><br>
<span class="quotelev2">&gt;&gt; CONFIDENTIAL and may be privileged or otherwise protected from disclosure.
</span><br>
<span class="quotelev2">&gt;&gt; The contents are not to be disclosed to anyone other than the addressee.
</span><br>
<span class="quotelev2">&gt;&gt; Unauthorized recipients are requested to preserve this confidentiality and to
</span><br>
<span class="quotelev2">&gt;&gt; advise the sender immediately of any error in transmission.&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="23619.php">Saliya Ekanayake: "Re: [OMPI users] Does sendrecv guarantee order?"</a>
<li><strong>Previous message:</strong> <a href="23617.php">Gustavo Correa: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>In reply to:</strong> <a href="23616.php">Rolf vandeVaart: "Re: [OMPI users] Configure issue with/without HWLOC when PGI used and	CUDA support enabled"</a>
<!-- nextthread="start" -->
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
