<?
$subject_val = "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  7 20:32:26 2011" -->
<!-- isoreceived="20110708003226" -->
<!-- sent="Thu, 7 Jul 2011 20:32:21 -0400" -->
<!-- isosent="20110708003221" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6" -->
<!-- id="1396386E-11A0-450E-BB2B-897E5376A8CF_at_cisco.com" -->
<!-- charset="windows-1252" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-07 20:32:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16851.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16849.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16769.php">Ning Li: "[OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16884.php">Ning Li: "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying.  :-\
<br>
<p>I'm afraid we don't test with the NAG compiler.  :-(
<br>
<p>Would this be something that the NAG would be willing to do for the Open MPI community?  Companies like Absoft do -- we have a light test suite that can be fully automated (i.e., run via cron).  Ping me offline if you would be able to do this.
<br>
<p>I suspect that the version of Libtool we're using doesn't fully understand the NAG compiler.  We get many of the compile-time options by extracting them from Libtool.
<br>
<p>We use Libtool 2.2.6b for OMPI v1.5.  Do you know if that version of Libtool supports the NAG compiler well, or if a more recent version supports it better?  Libtool made some fairly major changes late in the 2.2.x series that we don't really want to have to adapt to in the v1.5 series if we don't have to (i.e., we planned to adapt to them for the v1.7 series).  But perhaps we could patch our Libtool for NAG...?
<br>
<p><p>On Jun 27, 2011, at 5:24 AM, Ning Li wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I built OpenMPI 1.5.3 using NAG compiler v 5.2 on a new system running Fedora 15 (with gcc 4.6). OpenMPI can be built successfully, but when I compile a Fortran MPI application I got an error at link stage:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gcc: error: unrecognized option &#145;--export-dynamic&#146;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that NAG Fortran compiler generates intermediate C code and actually calls gcc to build the application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; GCC 4.6 release note contains the following: &quot;GCC now has stricter checks for invalid command-line options. In particular, when gcc was called to link object files rather than compile source code, it would previously accept and ignore all options starting with --, including linker options such as --as-needed and --export-dynamic, although such options would result in errors if any source code was compiled. Such options, if unknown to the compiler, are now rejected in all cases; if the intent was to pass them to the linker, options such as -Wl,--as-needed should be used.&quot; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My next step was to track down where the illegal syntax was generated, using the '-showme' option provided by the OpenMPI compiler wrapper and '-dryrun' option provided by NAG compiler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [lining_at_combe pi]$ /home/lining/software/openmpi/1.5.3/nag/bin/mpif90 --showme pi.f90 -o pi.exe_nag
</span><br>
<span class="quotelev1">&gt; nagfor pi.f90 -o pi.exe_nag -I/home/lining/software/openmpi/1.5.3/nag/include -pthread -I/home/lining/software/openmpi/1.5.3/nag/lib -L/home/lining/software/openmpi/1.5.3/nag/lib -lmpi_f90 -lmpi_f77 -lmpi -lnsl -lutil -lm -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [lining_at_combe pi]$ /home/lining/software/openmpi/1.5.3/nag/bin/mpif90 -dryrun pi.f90 -o tpi.exe_nag
</span><br>
<span class="quotelev1">&gt; NAG Fortran Compiler Release 5.2(721)
</span><br>
<span class="quotelev1">&gt; Option warning: Unrecognised option -pthread passed to loader
</span><br>
<span class="quotelev1">&gt; /home/lining/software/NAG_Fortran/lib/forcomp -checkversion 5.2 721 -I/home/lining/software/openmpi/1.5.3/nag/include -I/home/lining/software/openmpi/1.5.3/nag/lib -library /home/lining/software/NAG_Fortran/lib -o /tmp/pi.024444.c pi.f90 
</span><br>
<span class="quotelev1">&gt; /usr/bin/gcc -I/home/lining/software/NAG_Fortran/lib -c -DANSI_C -DINT64=long long -funsigned-char -march=i686 -Wno-pointer-sign -o pi.o /tmp/pi.024444.c 
</span><br>
<span class="quotelev1">&gt; /usr/bin/gcc -o pi.exe_nag /home/lining/software/NAG_Fortran/lib/quickfit.o pi.o -pthread -L/home/lining/software/openmpi/1.5.3/nag/lib -lmpi_f90 -lmpi_f77 -lmpi -lnsl -lutil -lm -ldl -lnsl -lutil -lm -ldl -Wl,-rpath,/home/lining/software/NAG_Fortran/lib /home/lining/software/NAG_Fortran/lib/libf52.so /home/lining/software/NAG_Fortran/lib/libf52.a -lm --export-dynamic 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So OpenMPI generates the '-Wl,--export-dynamic' flag. When this is passed to NAG compiler, NAG compiler interprets this as &quot;passing the '--export-dynamic' flag to the linker (gcc)&quot; (which I believe is the correct behaviour). But gcc 4.6 expects to see '-Wl,--export-dynamic'. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My temporary solution as supplied by NAG compiler developers is to edit  share/openmpi/*-wrapper-data.txt and put flag '-Wl,-Wl,,--export-dynamic' there.
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
<li><strong>Next message:</strong> <a href="16851.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16849.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16769.php">Ning Li: "[OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16884.php">Ning Li: "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
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
