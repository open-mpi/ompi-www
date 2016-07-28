<?
$subject_val = "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3 (Tim Prince)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 22 09:45:10 2011" -->
<!-- isoreceived="20110322134510" -->
<!-- sent="Tue, 22 Mar 2011 07:44:53 -0600" -->
<!-- isosent="20110322134453" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3 (Tim Prince)" -->
<!-- id="1D4CBC74-AE25-4E46-A737-72ACB75457D0_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D88652C.8863.8073DA79_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3 (Tim Prince)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-22 09:44:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15962.php">Eli Cohen: "[OMPI users] &quot;Re:  RoCE (IBoE) &amp; OpenMPI&quot;"</a>
<li><strong>Previous message:</strong> <a href="15960.php">Ralph Castain: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<li><strong>In reply to:</strong> <a href="15958.php">yanyg_at_[hidden]: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3 (Tim Prince)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On a beowulf cluster? So you are using bproc?
<br>
<p>If so, you have to use the OMPI 1.2 series - we discontinued bproc support at the start of 1.3. Bproc will take care of the envars.
<br>
<p>If not bproc, then I assume you will use ssh for launching? Usually, the environment is taken care of by setting up your .bashrc (or equiv for your shell) on the remote nodes (which usually have a shared file system so all binaries are available on all nodes).
<br>
<p><p>On Mar 22, 2011, at 7:00 AM, yanyg_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much for the comments and hints. I will try to 
</span><br>
<span class="quotelev1">&gt; upgrade our intel compiler collections. As for my second issue, 
</span><br>
<span class="quotelev1">&gt; with open mpi, is there any way to propagate enviroment variables 
</span><br>
<span class="quotelev1">&gt; of the current process on the master node to other slave nodes, 
</span><br>
<span class="quotelev1">&gt; such that orted daemon could run on slave nodes too?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Yiguang
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 3/21/2011 5:21 AM, yanyg_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to compile our codes with open mpi 1.4.3, by intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilers 8.1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (1) For open mpi 1.4.3 installation on linux beowulf cluster, I use:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/home/yiguang/dmp-setup/openmpi-1.4.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC=icc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CXX=icpc F77=ifort FC=ifort --enable-static LDFLAGS=&quot;-i-static -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static-libcxa&quot; --with-wrapper-ldflags=&quot;-i-static -static-libcxa&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2&gt;&amp;1 | tee config.log
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make all install 2&gt;&amp;1 | tee install.log
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The issue is that I am trying to build open mpi 1.4.3 with intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiler libraries statically linked to it, so that when we run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun/orterun, it does not need to dynamically load any intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libraries. But what I got is mpirun always asks for some intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; library(e.g. libsvml.so) if I do not put intel library path on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; library search path($LD_LIBRARY_PATH). I checked the open mpi user
</span><br>
<span class="quotelev3">&gt;&gt;&gt; archive, it seems only some kind user mentioned to use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;-i-static&quot;(in my case) or &quot;-static-intel&quot; in ldflags, this is what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I did, but it seems not working, and I did not get any confirmation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; whether or not this works for anyone else from the user archive.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could anyone help me on this? thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you are to use such an ancient compiler (apparently a 32-bit one),
</span><br>
<span class="quotelev2">&gt;&gt; you must read the docs which come with it, rather than relying on
</span><br>
<span class="quotelev2">&gt;&gt; comments about a more recent version.  libsvml isn't included
</span><br>
<span class="quotelev2">&gt;&gt; automatically at link time by that 32-bit compiler, unless you specify
</span><br>
<span class="quotelev2">&gt;&gt; an SSE option, such as -xW. It's likely that no one has verified
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI with a compiler of that vintage.  We never used the 32-bit
</span><br>
<span class="quotelev2">&gt;&gt; compiler for MPI, and we encountered run-time library bugs for the
</span><br>
<span class="quotelev2">&gt;&gt; ifort x86_64 which weren't fixed until later versions.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Tim Prince
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15962.php">Eli Cohen: "[OMPI users] &quot;Re:  RoCE (IBoE) &amp; OpenMPI&quot;"</a>
<li><strong>Previous message:</strong> <a href="15960.php">Ralph Castain: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<li><strong>In reply to:</strong> <a href="15958.php">yanyg_at_[hidden]: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3 (Tim Prince)"</a>
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
