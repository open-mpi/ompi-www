<?
$subject_val = "Re: [OMPI users] Openmpi compilation errors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 29 11:19:11 2015" -->
<!-- isoreceived="20150529151911" -->
<!-- sent="Fri, 29 May 2015 15:19:01 +0000" -->
<!-- isosent="20150529151901" -->
<!-- name="Timothy Brown" -->
<!-- email="Timothy.Brown-1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi compilation errors" -->
<!-- id="1FD21BCE-570A-4B14-8E3A-4A956A77ECE9_at_colorado.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="404DEA45-73B0-4AD6-847F-74B352A8055D_at_cisco.com" -->
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
<strong>Date:</strong> 2015-05-29 11:19:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26983.php">Blosch, Edwin L: "[OMPI users] How can I discover valid values for MCA parameters?"</a>
<li><strong>Previous message:</strong> <a href="26981.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>In reply to:</strong> <a href="26974.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26998.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Reply:</strong> <a href="26998.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On May 29, 2015, at 5:07 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 29, 2015, at 6:54 AM, Bruno Queiros &lt;bqueiros_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The name of the binary is correct: pgf90 the name of the file is also correct .pgf90.rc i do have some doubts about the content of the file. Is this enough?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; switch -pthread is replace(-lpthread) positional(linker)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not a Portland customer -- I don't know.  You'll need to check their documentation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Here I have a siterc file within the PGI bin directory, for example:
<br>
<p>/some/long/path/pgi/15.3/bin/siterc
<br>
<p>I have exactly the same line as you have specified. 
<br>
<p>If you are unable to put it in the PGI installation bin directory you can put it in a file ${HOME}/.mypgf90rc, as is described in section 1.8.2 (page 14) of the PGI Compilers Users Guide ( <a href="http://www.pgroup.com/doc/pgiug.pdf">http://www.pgroup.com/doc/pgiug.pdf</a> ).
<br>
&nbsp;
<br>
<p><span class="quotelev2">&gt;&gt; If i do a source .pgf90.rc i do get errors:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -bash: ./.pgf90.rc: line 1: syntax error near unexpected token `('
</span><br>
<span class="quotelev2">&gt;&gt; -bash: ./.pgf90.rc: line 1: `switch -pthread is replace(-lpthread) positional(linker)'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm guessing that this file is not intended to be sourced by the shell, but rather noticed and read/used by the pgf90 compiler when it is invoked.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Jeff, your right. It's not for your shell to source it'd for the compiler to read.
<br>
<p><p><span class="quotelev1">&gt; Sidenote: isn't there a pgfortran compiler executable that is supposed to be preferred over &quot;pgf90&quot; these days?  (remember my disclaimer: I'm not a Portland customer, so I could be totally off base here...)  Have you tried pgfortran to see if it accepts the -pthread option?  Sometimes the different compiler executable entry points behave slightly differently...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I've built Openmpi 1.8.5 with the following configure line:
<br>
<p>./configure  \
<br>
&nbsp;&nbsp;--prefix=/curc/tools/x86_64/rh6/software/openmpi/1.8.5/pgi/15.3 \
<br>
&nbsp;&nbsp;--with-threads=posix \
<br>
&nbsp;&nbsp;--enable-mpi-thread-multiple \
<br>
&nbsp;&nbsp;--with-slurm \
<br>
&nbsp;&nbsp;--with-pmi=/curc/slurm/slurm/current/
<br>
<p>Please note, I am using the following environment variables:
<br>
CC=pgcc
<br>
FC=pgfortran
<br>
F90=pgf90
<br>
F77=pgf77
<br>
CXX=pgc++
<br>
<p>I do not use pgprepro for CPP as I found it to be flaky.
<br>
<p>Hope this helps.
<br>
Timothy<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26983.php">Blosch, Edwin L: "[OMPI users] How can I discover valid values for MCA parameters?"</a>
<li><strong>Previous message:</strong> <a href="26981.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>In reply to:</strong> <a href="26974.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26998.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Reply:</strong> <a href="26998.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
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
