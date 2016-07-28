<?
$subject_val = "Re: [OMPI users] How to run OpenMPI C code under Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 22 19:09:58 2015" -->
<!-- isoreceived="20151123000958" -->
<!-- sent="Sun, 22 Nov 2015 19:09:52 -0500" -->
<!-- isosent="20151123000952" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to run OpenMPI C code under Windows 7" -->
<!-- id="56525950.1090202_at_aol.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20151122150412.1c953d03de16b6167e9703e6814645d8.0674b95200.wbe_at_email01.secureserver.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to run OpenMPI C code under Windows 7<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-22 19:09:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28094.php">Philip Bitar: "Re: [OMPI users] How to run OpenMPI C code under Windows 7"</a>
<li><strong>Previous message:</strong> <a href="28092.php">Marco Atzeri: "Re: [OMPI users] How to run OpenMPI C code under Windows 7"</a>
<li><strong>In reply to:</strong> <a href="28091.php">Philip Bitar: "[OMPI users] How to run OpenMPI C code under Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28094.php">Philip Bitar: "Re: [OMPI users] How to run OpenMPI C code under Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/22/2015 5:04 PM, Philip Bitar wrote:
<br>
<span class="quotelev1">&gt; *How to run OpenMPI C code under Windows 7*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to get OpenMPI C code to run under Windows 7 any way that I
</span><br>
<span class="quotelev1">&gt; can. Evidently there is no current support for running OpenMPI
</span><br>
<span class="quotelev1">&gt; directly under Windows 7, so I installed Cygwin. Is there a better way
</span><br>
<span class="quotelev1">&gt; to run OpenMPI C code under Windows 7?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Under Cygwin, I installed a GCC C compiler, which works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also installed an OpenMPI package. Here is a link to a list of the
</span><br>
<span class="quotelev1">&gt; files in the Cygwin OpenMPI package:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://cygwin.com/cgi-bin2/package-cat.cgi?file=x86%2Flibopenmpi%2Flibopenmpi-1.8.6-1&amp;grep=openmpi">https://cygwin.com/cgi-bin2/package-cat.cgi?file=x86%2Flibopenmpi%2Flibopenmpi-1.8.6-1&amp;grep=openmpi</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My PATH variable is as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/bin:/usr/bin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicc will compile, but it won't link. It can't find the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -lmpi
</span><br>
<span class="quotelev1">&gt; -lopen-rte
</span><br>
<span class="quotelev1">&gt; -lopen-pal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The test program includes stdio.h and is nothing more than printf
</span><br>
<span class="quotelev1">&gt; hello world. I can compile and run it using the GCC C compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Presumably I need to update the PATH variable so that the link step
</span><br>
<span class="quotelev1">&gt; will find the missing components. Are those components file names or
</span><br>
<span class="quotelev1">&gt; info contained in some other files? Can I verify that the needed files
</span><br>
<span class="quotelev1">&gt; have been installed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would also be pleased to obtain a link to material that explains the
</span><br>
<span class="quotelev1">&gt; OpenMPI system, in general, and the OpenMPI C functions, in
</span><br>
<span class="quotelev1">&gt; particular, so that I can write C programs to use the OpenMPI system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I looked for this kind of info on the web, but I haven't found it yet.
</span><br>
<span class="quotelev1">&gt; Maybe it's on the OpenMPI site, and I missed it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
You probably want the libopenmpi-devel package from cygwin setup.exe as
<br>
well.  If you have windows 7 X64, the x86_64 cygwin is probably
<br>
preferable to 32-bit (can't see which you started with).
<br>
An alternative, with a build of mingw x86-64, is Walt Brainerd's CAF
<br>
build.  If this wasn't discussed in the OpenMPI archives, but has not
<br>
been withdrawn, you might ask the author, e.g.
<br>
<a href="https://groups.google.com/forum/#!searchin/comp.lang.fortran/coarray$20fortran/comp.lang.fortran/P5si9Fj1yIY/ptjM8DMUUzUJ">https://groups.google.com/forum/#!searchin/comp.lang.fortran/coarray$20fortran/comp.lang.fortran/P5si9Fj1yIY/ptjM8DMUUzUJ</a>
<br>
It's a little difficult to use if you have another MPI installed, as
<br>
Windows MPI (like the MPI which comes with linux distros) don't observe
<br>
normal methods for keeping distinct paths.
<br>
I doubt there is a separate version of OpenMPI docs specific to Windows.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28094.php">Philip Bitar: "Re: [OMPI users] How to run OpenMPI C code under Windows 7"</a>
<li><strong>Previous message:</strong> <a href="28092.php">Marco Atzeri: "Re: [OMPI users] How to run OpenMPI C code under Windows 7"</a>
<li><strong>In reply to:</strong> <a href="28091.php">Philip Bitar: "[OMPI users] How to run OpenMPI C code under Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28094.php">Philip Bitar: "Re: [OMPI users] How to run OpenMPI C code under Windows 7"</a>
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
