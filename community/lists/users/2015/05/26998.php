<?
$subject_val = "Re: [OMPI users] Openmpi compilation errors";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 30 06:34:44 2015" -->
<!-- isoreceived="20150530103444" -->
<!-- sent="Sat, 30 May 2015 10:34:24 +0000" -->
<!-- isosent="20150530103424" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi compilation errors" -->
<!-- id="74A01648-6193-4F54-AC63-098FD68A067E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1FD21BCE-570A-4B14-8E3A-4A956A77ECE9_at_colorado.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi compilation errors<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-30 06:34:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26999.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Previous message:</strong> <a href="26997.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How can I discover valid values for MCA parameters?"</a>
<li><strong>In reply to:</strong> <a href="26982.php">Timothy Brown: "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27003.php">Timothy Brown: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Reply:</strong> <a href="27003.php">Timothy Brown: "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 29, 2015, at 11:19 AM, Timothy Brown &lt;Timothy.Brown-1_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've built Openmpi 1.8.5 with the following configure line:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure  \
</span><br>
<span class="quotelev1">&gt;  --prefix=/curc/tools/x86_64/rh6/software/openmpi/1.8.5/pgi/15.3 \
</span><br>
<span class="quotelev1">&gt;  --with-threads=posix \
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;  --with-slurm \
</span><br>
<span class="quotelev1">&gt;  --with-pmi=/curc/slurm/slurm/current/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please note, I am using the following environment variables:
</span><br>
<span class="quotelev1">&gt; CC=pgcc
</span><br>
<span class="quotelev1">&gt; FC=pgfortran
</span><br>
<span class="quotelev1">&gt; F90=pgf90
</span><br>
<span class="quotelev1">&gt; F77=pgf77
</span><br>
<span class="quotelev1">&gt; CXX=pgc++
</span><br>
<p>Sweet -- thanks for the info, Tim.
<br>
<p>One extremely minor tweak that I would recommend is to do this, instead:
<br>
<p>./configure  \
<br>
&nbsp;CC=pgcc \
<br>
&nbsp;FC=pgfortran \
<br>
&nbsp;F90=pgf90 \
<br>
&nbsp;F77=pgf77 \
<br>
&nbsp;CXX=pgc++ \
<br>
&nbsp;--prefix=/curc/tools/x86_64/rh6/software/openmpi/1.8.5/pgi/15.3 \
<br>
&nbsp;--with-threads=posix \
<br>
&nbsp;--enable-mpi-thread-multiple \
<br>
&nbsp;--with-slurm \
<br>
&nbsp;--with-pmi=/curc/slurm/slurm/current/
<br>
<p>I.e., set those environment variables on the configure command line instead of having them in your environment.
<br>
<p>The end effect is exactly the same -- the only difference is that these environment variables will be explicitly listed right at the top in the config.log file that is generated when you run configure.  It's a very minor thing -- just for helping your future self when remembering exactly how your copy of Open MPI was built.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26999.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Previous message:</strong> <a href="26997.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How can I discover valid values for MCA parameters?"</a>
<li><strong>In reply to:</strong> <a href="26982.php">Timothy Brown: "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27003.php">Timothy Brown: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Reply:</strong> <a href="27003.php">Timothy Brown: "Re: [OMPI users] Openmpi compilation errors"</a>
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
