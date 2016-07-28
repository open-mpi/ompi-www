<?
$subject_val = "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 24 07:31:54 2011" -->
<!-- isoreceived="20110924113154" -->
<!-- sent="Sat, 24 Sep 2011 07:31:47 -0400" -->
<!-- isosent="20110924113147" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*" -->
<!-- id="EFA0688C-9983-4473-99D5-7FC14AB3B677_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAGR4S9H4D-WugN_Py0GD7BwttAGQu-EeWOLv7sqjKmGhrbHFSw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-24 07:31:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17424.php">Dmitry N. Mikushin: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<li><strong>Previous message:</strong> <a href="17422.php">Jeff Squyres: "Re: [OMPI users] PATH settings"</a>
<li><strong>In reply to:</strong> <a href="17389.php">Dmitry N. Mikushin: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17424.php">Dmitry N. Mikushin: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<li><strong>Reply:</strong> <a href="17424.php">Dmitry N. Mikushin: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How does the target application compile / link itself?
<br>
<p>Try running &quot;file&quot; on the Open MPI libraries and/or your target application .o files to see what their bitness is, etc.
<br>
<p><p>On Sep 22, 2011, at 3:15 PM, Dmitry N. Mikushin wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You're right because I also tried 1.4.3, and it's the same issue
</span><br>
<span class="quotelev1">&gt; there. But what could be wrong? I'm using the simplest form -
</span><br>
<span class="quotelev1">&gt; ../configure --prefix=/opt/openmpi_gcc-1.4.3/ and only installed
</span><br>
<span class="quotelev1">&gt; compilers are system-default gcc and gfortran 4.6.1. Distro is ubuntu
</span><br>
<span class="quotelev1">&gt; 11.10. There is no any mpi installed from packages, and no -m32
</span><br>
<span class="quotelev1">&gt; options around. What else could be the source?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; - D.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2011/9/22 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; This usually means that you're mixing compiler/linker flags somehow (e.g., built something with 32 bit, built something else with 64 bit, try to link them together).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you verify that everything was built with all the same 32/64?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 22, 2011, at 1:21 PM, Dmitry N. Mikushin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI 1.5.4 compiled with gcc 4.6.1 and linked with target app gives
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a load of linker messages like this one:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/bin/ld: ../../lib/libutil.a(parallel_utilities.o)(.debug_info+0x529d):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unresolvable R_X86_64_64 relocation against symbol
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `mpi_fortran_argv_null_
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are a lot of similar messages about other mpi_fortran_ symbols.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it a known issue?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - D.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; 
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17424.php">Dmitry N. Mikushin: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<li><strong>Previous message:</strong> <a href="17422.php">Jeff Squyres: "Re: [OMPI users] PATH settings"</a>
<li><strong>In reply to:</strong> <a href="17389.php">Dmitry N. Mikushin: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17424.php">Dmitry N. Mikushin: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<li><strong>Reply:</strong> <a href="17424.php">Dmitry N. Mikushin: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
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
