<?
$subject_val = "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 08:46:59 2011" -->
<!-- isoreceived="20110321124659" -->
<!-- sent="Mon, 21 Mar 2011 05:46:42 -0700" -->
<!-- isosent="20110321124642" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3" -->
<!-- id="4D8748B2.5000008_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D870AA2.23623.7B2A2DCA_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-21 08:46:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15925.php">Prentice Bisbal: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<li><strong>Previous message:</strong> <a href="15923.php">Dave Love: "[OMPI users] 1.5.3 and SGE integration?"</a>
<li><strong>In reply to:</strong> <a href="15922.php">yanyg_at_[hidden]: "[OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15967.php">Jeff Squyres: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 3/21/2011 5:21 AM, yanyg_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to compile our codes with open mpi 1.4.3, by intel
</span><br>
<span class="quotelev1">&gt; compilers 8.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (1) For open mpi 1.4.3 installation on linux beowulf cluster, I use:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/yiguang/dmp-setup/openmpi-1.4.3
</span><br>
<span class="quotelev1">&gt; CC=icc
</span><br>
<span class="quotelev1">&gt; CXX=icpc F77=ifort FC=ifort --enable-static LDFLAGS=&quot;-i-static -
</span><br>
<span class="quotelev1">&gt; static-libcxa&quot; --with-wrapper-ldflags=&quot;-i-static -static-libcxa&quot; 2&gt;&amp;1 |
</span><br>
<span class="quotelev1">&gt; tee config.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make all install 2&gt;&amp;1 | tee install.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The issue is that I am trying to build open mpi 1.4.3 with intel
</span><br>
<span class="quotelev1">&gt; compiler libraries statically linked to it, so that when we run
</span><br>
<span class="quotelev1">&gt; mpirun/orterun, it does not need to dynamically load any intel
</span><br>
<span class="quotelev1">&gt; libraries. But what I got is mpirun always asks for some intel
</span><br>
<span class="quotelev1">&gt; library(e.g. libsvml.so) if I do not put intel library path on library
</span><br>
<span class="quotelev1">&gt; search path($LD_LIBRARY_PATH). I checked the open mpi user
</span><br>
<span class="quotelev1">&gt; archive, it seems only some kind user mentioned to use
</span><br>
<span class="quotelev1">&gt; &quot;-i-static&quot;(in my case) or &quot;-static-intel&quot; in ldflags, this is what I did,
</span><br>
<span class="quotelev1">&gt; but it seems not working, and I did not get any confirmation whether
</span><br>
<span class="quotelev1">&gt; or not this works for anyone else from the user archive. could
</span><br>
<span class="quotelev1">&gt; anyone help me on this? thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>If you are to use such an ancient compiler (apparently a 32-bit one), 
<br>
you must read the docs which come with it, rather than relying on 
<br>
comments about a more recent version.  libsvml isn't included 
<br>
automatically at link time by that 32-bit compiler, unless you specify 
<br>
an SSE option, such as -xW.
<br>
It's likely that no one has verified OpenMPI with a compiler of that 
<br>
vintage.  We never used the 32-bit compiler for MPI, and we encountered 
<br>
run-time library bugs for the ifort x86_64 which weren't fixed until 
<br>
later versions.
<br>
<p><p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15925.php">Prentice Bisbal: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<li><strong>Previous message:</strong> <a href="15923.php">Dave Love: "[OMPI users] 1.5.3 and SGE integration?"</a>
<li><strong>In reply to:</strong> <a href="15922.php">yanyg_at_[hidden]: "[OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15967.php">Jeff Squyres: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
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
