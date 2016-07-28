<?
$subject_val = "Re: [OMPI users] Openmpi compilation errors";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 30 11:30:01 2015" -->
<!-- isoreceived="20150530153001" -->
<!-- sent="Sat, 30 May 2015 15:29:57 +0000" -->
<!-- isosent="20150530152957" -->
<!-- name="Timothy Brown" -->
<!-- email="Timothy.Brown-1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi compilation errors" -->
<!-- id="BA1EA27A-F34B-461F-99D3-E4ED7E05E441_at_colorado.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="74A01648-6193-4F54-AC63-098FD68A067E_at_cisco.com" -->
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
<strong>From:</strong> Timothy Brown (<em>Timothy.Brown-1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-30 11:29:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27004.php">Hammond, Simon David (-EXP): "Re: [OMPI users] [EXTERNAL]  MPI-Checker - Static Analyzer"</a>
<li><strong>Previous message:</strong> <a href="27002.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>In reply to:</strong> <a href="26998.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On May 30, 2015, at 4:34 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 29, 2015, at 11:19 AM, Timothy Brown &lt;Timothy.Brown-1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've built Openmpi 1.8.5 with the following configure line:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ./configure  \
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/curc/tools/x86_64/rh6/software/openmpi/1.8.5/pgi/15.3 \
</span><br>
<span class="quotelev2">&gt;&gt; --with-threads=posix \
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev2">&gt;&gt; --with-slurm \
</span><br>
<span class="quotelev2">&gt;&gt; --with-pmi=/curc/slurm/slurm/current/
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please note, I am using the following environment variables:
</span><br>
<span class="quotelev2">&gt;&gt; CC=pgcc
</span><br>
<span class="quotelev2">&gt;&gt; FC=pgfortran
</span><br>
<span class="quotelev2">&gt;&gt; F90=pgf90
</span><br>
<span class="quotelev2">&gt;&gt; F77=pgf77
</span><br>
<span class="quotelev2">&gt;&gt; CXX=pgc++
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sweet -- thanks for the info, Tim.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One extremely minor tweak that I would recommend is to do this, instead:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure  \
</span><br>
<span class="quotelev1">&gt; CC=pgcc \
</span><br>
<span class="quotelev1">&gt; FC=pgfortran \
</span><br>
<span class="quotelev1">&gt; F90=pgf90 \
</span><br>
<span class="quotelev1">&gt; F77=pgf77 \
</span><br>
<span class="quotelev1">&gt; CXX=pgc++ \
</span><br>
<span class="quotelev1">&gt; --prefix=/curc/tools/x86_64/rh6/software/openmpi/1.8.5/pgi/15.3 \
</span><br>
<span class="quotelev1">&gt; --with-threads=posix \
</span><br>
<span class="quotelev1">&gt; --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt; --with-slurm \
</span><br>
<span class="quotelev1">&gt; --with-pmi=/curc/slurm/slurm/current/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I.e., set those environment variables on the configure command line instead of having them in your environment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The end effect is exactly the same -- the only difference is that these environment variables will be explicitly listed right at the top in the config.log file that is generated when you run configure.  It's a very minor thing -- just for helping your future self when remembering exactly how your copy of Open MPI was built.
</span><br>
<p><p>Hi Jeff,
<br>
<p>Yes, I have often gone back to a build and tried to figure out how it was actually built. We're investigating using EasyBuild ( <a href="https://github.com/hpcugent/easybuild">https://github.com/hpcugent/easybuild</a> ) however we haven't taken the plunge yet.
<br>
<p>We do use Lmod ( <a href="https://github.com/TACC/Lmod">https://github.com/TACC/Lmod</a> ) and so I have modules loaded into our environment.
<br>
<p>All this being said, I wrote a quick and dirty script that logs the modules loaded and the configure line from the config.log to a DB. The script also queries the DB and can produce the configure command (including module loads) and update the prefix based upon the source directory your in (it only does this for patch version updates only (i.e 1.8.4 -&gt; 1.8.5), I decided anything larger than this you really should read the docs/configure options to see if your doing things correctly). It's an ugly script that I'm not proud of but it works!
<br>
<p>Regards
<br>
Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27004.php">Hammond, Simon David (-EXP): "Re: [OMPI users] [EXTERNAL]  MPI-Checker - Static Analyzer"</a>
<li><strong>Previous message:</strong> <a href="27002.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>In reply to:</strong> <a href="26998.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
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
