<?
$subject_val = "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3 (Tim Prince)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 22 09:00:29 2011" -->
<!-- isoreceived="20110322130029" -->
<!-- sent="Tue, 22 Mar 2011 09:00:28 -0400" -->
<!-- isosent="20110322130028" -->
<!-- name="yanyg_at_[hidden]" -->
<!-- email="yanyg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3 (Tim Prince)" -->
<!-- id="4D88652C.8863.8073DA79_at_localhost" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.11.1300723203.9751.users_at_open-mpi.org" -->
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
<strong>From:</strong> <a href="mailto:yanyg_at_[hidden]?Subject=Re:%20[OMPI%20users]%20intel%20compiler%20linking%20issue%20and%20issue%20of%20environment%20variable%20on%20remote%20node,%20with%20open%20mpi%201.4.3%20(Tim%20Prince)"><em>yanyg_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-03-22 09:00:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15959.php">Ralph Castain: "Re: [OMPI users] Is there an mca parameter equivalent to -bind-to-core?"</a>
<li><strong>Previous message:</strong> <a href="15957.php">Dave Love: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15961.php">Ralph Castain: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3 (Tim Prince)"</a>
<li><strong>Reply:</strong> <a href="15961.php">Ralph Castain: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3 (Tim Prince)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you very much for the comments and hints. I will try to 
<br>
upgrade our intel compiler collections. As for my second issue, 
<br>
with open mpi, is there any way to propagate enviroment variables 
<br>
of the current process on the master node to other slave nodes, 
<br>
such that orted daemon could run on slave nodes too?
<br>
<p>Thanks,
<br>
Yiguang
<br>
<p><span class="quotelev1">&gt; On 3/21/2011 5:21 AM, yanyg_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to compile our codes with open mpi 1.4.3, by intel
</span><br>
<span class="quotelev2">&gt; &gt; compilers 8.1.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (1) For open mpi 1.4.3 installation on linux beowulf cluster, I use:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=/home/yiguang/dmp-setup/openmpi-1.4.3
</span><br>
<span class="quotelev2">&gt; &gt; CC=icc
</span><br>
<span class="quotelev2">&gt; &gt; CXX=icpc F77=ifort FC=ifort --enable-static LDFLAGS=&quot;-i-static -
</span><br>
<span class="quotelev2">&gt; &gt; static-libcxa&quot; --with-wrapper-ldflags=&quot;-i-static -static-libcxa&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 2&gt;&amp;1 | tee config.log
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; make all install 2&gt;&amp;1 | tee install.log
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The issue is that I am trying to build open mpi 1.4.3 with intel
</span><br>
<span class="quotelev2">&gt; &gt; compiler libraries statically linked to it, so that when we run
</span><br>
<span class="quotelev2">&gt; &gt; mpirun/orterun, it does not need to dynamically load any intel
</span><br>
<span class="quotelev2">&gt; &gt; libraries. But what I got is mpirun always asks for some intel
</span><br>
<span class="quotelev2">&gt; &gt; library(e.g. libsvml.so) if I do not put intel library path on
</span><br>
<span class="quotelev2">&gt; &gt; library search path($LD_LIBRARY_PATH). I checked the open mpi user
</span><br>
<span class="quotelev2">&gt; &gt; archive, it seems only some kind user mentioned to use
</span><br>
<span class="quotelev2">&gt; &gt; &quot;-i-static&quot;(in my case) or &quot;-static-intel&quot; in ldflags, this is what
</span><br>
<span class="quotelev2">&gt; &gt; I did, but it seems not working, and I did not get any confirmation
</span><br>
<span class="quotelev2">&gt; &gt; whether or not this works for anyone else from the user archive.
</span><br>
<span class="quotelev2">&gt; &gt; could anyone help me on this? thanks!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you are to use such an ancient compiler (apparently a 32-bit one),
</span><br>
<span class="quotelev1">&gt; you must read the docs which come with it, rather than relying on
</span><br>
<span class="quotelev1">&gt; comments about a more recent version.  libsvml isn't included
</span><br>
<span class="quotelev1">&gt; automatically at link time by that 32-bit compiler, unless you specify
</span><br>
<span class="quotelev1">&gt; an SSE option, such as -xW. It's likely that no one has verified
</span><br>
<span class="quotelev1">&gt; OpenMPI with a compiler of that vintage.  We never used the 32-bit
</span><br>
<span class="quotelev1">&gt; compiler for MPI, and we encountered run-time library bugs for the
</span><br>
<span class="quotelev1">&gt; ifort x86_64 which weren't fixed until later versions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Prince
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15959.php">Ralph Castain: "Re: [OMPI users] Is there an mca parameter equivalent to -bind-to-core?"</a>
<li><strong>Previous message:</strong> <a href="15957.php">Dave Love: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15961.php">Ralph Castain: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3 (Tim Prince)"</a>
<li><strong>Reply:</strong> <a href="15961.php">Ralph Castain: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3 (Tim Prince)"</a>
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
