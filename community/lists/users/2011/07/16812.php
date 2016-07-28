<?
$subject_val = "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  4 15:37:18 2011" -->
<!-- isoreceived="20110704193718" -->
<!-- sent="Mon, 04 Jul 2011 20:35:52 +0100" -->
<!-- isosent="20110704193552" -->
<!-- name="Ning Li" -->
<!-- email="ning.li_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6" -->
<!-- id="4E121618.8090000_at_nag.co.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E084C40.8010105_at_nag.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6<br>
<strong>From:</strong> Ning Li (<em>ning.li_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-04 15:35:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16813.php">Miguel Vargas Felix: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<li><strong>Previous message:</strong> <a href="16811.php">Ralph Castain: "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16769.php">Ning Li: "[OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16850.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can someone comments on my post below? I just wonder if this is 
<br>
something that should be fixed in OMPI's configure script or elsewhere.
<br>
<p>Ning
<br>
<p>On 27/06/11 10:24, Ning Li wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I built OpenMPI 1.5.3 using NAG compiler v 5.2 on a new system running 
</span><br>
<span class="quotelev1">&gt; Fedora 15 (with gcc 4.6). OpenMPI can be built successfully, but when 
</span><br>
<span class="quotelev1">&gt; I compile a Fortran MPI application I got an error at link stage:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gcc: error: unrecognized option '--export-dynamic'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that NAG Fortran compiler generates intermediate C code and 
</span><br>
<span class="quotelev1">&gt; actually calls gcc to build the application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; GCC 4.6 release note contains the following: &quot;GCC now has stricter 
</span><br>
<span class="quotelev1">&gt; checks for invalid command-line options. In particular, when |gcc| was 
</span><br>
<span class="quotelev1">&gt; called to link object files rather than compile source code, it would 
</span><br>
<span class="quotelev1">&gt; previously accept and ignore all options starting with |--|, including 
</span><br>
<span class="quotelev1">&gt; linker options such as |--as-needed| and |--export-dynamic|, although 
</span><br>
<span class="quotelev1">&gt; such options would result in errors if any source code was compiled. 
</span><br>
<span class="quotelev1">&gt; Such options, if unknown to the compiler, are now rejected in all 
</span><br>
<span class="quotelev1">&gt; cases; if the intent was to pass them to the linker, options such as 
</span><br>
<span class="quotelev1">&gt; |-Wl,--as-needed| should be used.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My next step was to track down where the illegal syntax was generated, 
</span><br>
<span class="quotelev1">&gt; using the '-showme' option provided by the OpenMPI compiler wrapper 
</span><br>
<span class="quotelev1">&gt; and '-dryrun' option provided by NAG compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [lining_at_combe pi]$ /home/lining/software/openmpi/1.5.3/nag/bin/mpif90 
</span><br>
<span class="quotelev1">&gt; --showme pi.f90 -o pi.exe_nag
</span><br>
<span class="quotelev1">&gt; nagfor pi.f90 -o pi.exe_nag 
</span><br>
<span class="quotelev1">&gt; -I/home/lining/software/openmpi/1.5.3/nag/include -pthread 
</span><br>
<span class="quotelev1">&gt; -I/home/lining/software/openmpi/1.5.3/nag/lib 
</span><br>
<span class="quotelev1">&gt; -L/home/lining/software/openmpi/1.5.3/nag/lib -lmpi_f90 -lmpi_f77 
</span><br>
<span class="quotelev1">&gt; -lmpi -lnsl -lutil -lm -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [lining_at_combe pi]$ /home/lining/software/openmpi/1.5.3/nag/bin/mpif90 
</span><br>
<span class="quotelev1">&gt; -dryrun pi.f90 -o tpi.exe_nag
</span><br>
<span class="quotelev1">&gt; NAG Fortran Compiler Release 5.2(721)
</span><br>
<span class="quotelev1">&gt; Option warning: Unrecognised option -pthread passed to loader
</span><br>
<span class="quotelev1">&gt; /home/lining/software/NAG_Fortran/lib/forcomp -checkversion 5.2 721 
</span><br>
<span class="quotelev1">&gt; -I/home/lining/software/openmpi/1.5.3/nag/include 
</span><br>
<span class="quotelev1">&gt; -I/home/lining/software/openmpi/1.5.3/nag/lib -library 
</span><br>
<span class="quotelev1">&gt; /home/lining/software/NAG_Fortran/lib -o /tmp/pi.024444.c pi.f90
</span><br>
<span class="quotelev1">&gt; /usr/bin/gcc -I/home/lining/software/NAG_Fortran/lib -c -DANSI_C 
</span><br>
<span class="quotelev1">&gt; -DINT64=long long -funsigned-char -march=i686 -Wno-pointer-sign -o 
</span><br>
<span class="quotelev1">&gt; pi.o /tmp/pi.024444.c
</span><br>
<span class="quotelev1">&gt; /usr/bin/gcc -o pi.exe_nag 
</span><br>
<span class="quotelev1">&gt; /home/lining/software/NAG_Fortran/lib/quickfit.o pi.o -pthread 
</span><br>
<span class="quotelev1">&gt; -L/home/lining/software/openmpi/1.5.3/nag/lib -lmpi_f90 -lmpi_f77 
</span><br>
<span class="quotelev1">&gt; -lmpi -lnsl -lutil -lm -ldl -lnsl -lutil -lm -ldl 
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath,/home/lining/software/NAG_Fortran/lib 
</span><br>
<span class="quotelev1">&gt; /home/lining/software/NAG_Fortran/lib/libf52.so 
</span><br>
<span class="quotelev1">&gt; /home/lining/software/NAG_Fortran/lib/libf52.a -lm --export-dynamic
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So OpenMPI generates the '-Wl,--export-dynamic' flag. When this is 
</span><br>
<span class="quotelev1">&gt; passed to NAG compiler, NAG compiler interprets this as &quot;passing the 
</span><br>
<span class="quotelev1">&gt; '--export-dynamic' flag to the linker (gcc)&quot; (which I believe is the 
</span><br>
<span class="quotelev1">&gt; correct behaviour). But gcc 4.6 expects to see '-Wl,--export-dynamic'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My temporary solution as supplied by NAG compiler developers is to 
</span><br>
<span class="quotelev1">&gt; edit  share/openmpi/*-wrapper-data.txt and put flag 
</span><br>
<span class="quotelev1">&gt; '-Wl,-Wl,,--export-dynamic' there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ning
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ning Li
</span><br>
<span class="quotelev1">&gt; Technical Consultant
</span><br>
<span class="quotelev1">&gt; Numerical Algorithms Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________________________________________________
</span><br>
<span class="quotelev1">&gt; The Numerical Algorithms Group Ltd is a company registered in England
</span><br>
<span class="quotelev1">&gt; and Wales with company number 1249803. The registered office is:
</span><br>
<span class="quotelev1">&gt; Wilkinson House, Jordan Hill Road, Oxford OX2 8DR, United Kingdom.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This e-mail has been scanned for all viruses by Star. The service is
</span><br>
<span class="quotelev1">&gt; powered by MessageLabs.
</span><br>
<span class="quotelev1">&gt; ________________________________________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________________________________________________
</span><br>
<span class="quotelev1">&gt; This e-mail has been scanned for all viruses by Star.
</span><br>
<span class="quotelev1">&gt; ________________________________________________________________________
</span><br>
<span class="quotelev1">&gt;
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
<p><p><p>________________________________________________________________________
<br>
The Numerical Algorithms Group Ltd is a company registered in England
<br>
and Wales with company number 1249803. The registered office is:
<br>
Wilkinson House, Jordan Hill Road, Oxford OX2 8DR, United Kingdom.
<br>
<p>This e-mail has been scanned for all viruses by Star. The service is
<br>
powered by MessageLabs. 
<br>
________________________________________________________________________
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16812/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16813.php">Miguel Vargas Felix: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<li><strong>Previous message:</strong> <a href="16811.php">Ralph Castain: "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16769.php">Ning Li: "[OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16850.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
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
