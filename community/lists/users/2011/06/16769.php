<?
$subject_val = "[OMPI users] OpenMPI with NAG compiler and gcc 4.6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 27 05:25:39 2011" -->
<!-- isoreceived="20110627092539" -->
<!-- sent="Mon, 27 Jun 2011 10:24:16 +0100" -->
<!-- isosent="20110627092416" -->
<!-- name="Ning Li" -->
<!-- email="ning.li_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI with NAG compiler and gcc 4.6" -->
<!-- id="4E084C40.8010105_at_nag.co.uk" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI with NAG compiler and gcc 4.6<br>
<strong>From:</strong> Ning Li (<em>ning.li_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-27 05:24:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16770.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<li><strong>Previous message:</strong> <a href="16768.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16812.php">Ning Li: "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16812.php">Ning Li: "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16850.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16884.php">Ning Li: "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I built OpenMPI 1.5.3 using NAG compiler v 5.2 on a new system running 
<br>
Fedora 15 (with gcc 4.6). OpenMPI can be built successfully, but when I 
<br>
compile a Fortran MPI application I got an error at link stage:
<br>
<p>gcc: error: unrecognized option '--export-dynamic'
<br>
<p>Note that NAG Fortran compiler generates intermediate C code and 
<br>
actually calls gcc to build the application.
<br>
<p>GCC 4.6 release note contains the following: &quot;GCC now has stricter 
<br>
checks for invalid command-line options. In particular, when |gcc| was 
<br>
called to link object files rather than compile source code, it would 
<br>
previously accept and ignore all options starting with |--|, including 
<br>
linker options such as |--as-needed| and |--export-dynamic|, although 
<br>
such options would result in errors if any source code was compiled. 
<br>
Such options, if unknown to the compiler, are now rejected in all cases; 
<br>
if the intent was to pass them to the linker, options such as 
<br>
|-Wl,--as-needed| should be used.&quot;
<br>
<p>My next step was to track down where the illegal syntax was generated, 
<br>
using the '-showme' option provided by the OpenMPI compiler wrapper and 
<br>
'-dryrun' option provided by NAG compiler.
<br>
<p>[lining_at_combe pi]$ /home/lining/software/openmpi/1.5.3/nag/bin/mpif90 
<br>
--showme pi.f90 -o pi.exe_nag
<br>
nagfor pi.f90 -o pi.exe_nag 
<br>
-I/home/lining/software/openmpi/1.5.3/nag/include -pthread 
<br>
-I/home/lining/software/openmpi/1.5.3/nag/lib 
<br>
-L/home/lining/software/openmpi/1.5.3/nag/lib -lmpi_f90 -lmpi_f77 -lmpi 
<br>
-lnsl -lutil -lm -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
<br>
<p>[lining_at_combe pi]$ /home/lining/software/openmpi/1.5.3/nag/bin/mpif90 
<br>
-dryrun pi.f90 -o tpi.exe_nag
<br>
NAG Fortran Compiler Release 5.2(721)
<br>
Option warning: Unrecognised option -pthread passed to loader
<br>
/home/lining/software/NAG_Fortran/lib/forcomp -checkversion 5.2 721 
<br>
-I/home/lining/software/openmpi/1.5.3/nag/include 
<br>
-I/home/lining/software/openmpi/1.5.3/nag/lib -library 
<br>
/home/lining/software/NAG_Fortran/lib -o /tmp/pi.024444.c pi.f90
<br>
/usr/bin/gcc -I/home/lining/software/NAG_Fortran/lib -c -DANSI_C 
<br>
-DINT64=long long -funsigned-char -march=i686 -Wno-pointer-sign -o pi.o 
<br>
/tmp/pi.024444.c
<br>
/usr/bin/gcc -o pi.exe_nag 
<br>
/home/lining/software/NAG_Fortran/lib/quickfit.o pi.o -pthread 
<br>
-L/home/lining/software/openmpi/1.5.3/nag/lib -lmpi_f90 -lmpi_f77 -lmpi 
<br>
-lnsl -lutil -lm -ldl -lnsl -lutil -lm -ldl 
<br>
-Wl,-rpath,/home/lining/software/NAG_Fortran/lib 
<br>
/home/lining/software/NAG_Fortran/lib/libf52.so 
<br>
/home/lining/software/NAG_Fortran/lib/libf52.a -lm --export-dynamic
<br>
<p>So OpenMPI generates the '-Wl,--export-dynamic' flag. When this is 
<br>
passed to NAG compiler, NAG compiler interprets this as &quot;passing the 
<br>
'--export-dynamic' flag to the linker (gcc)&quot; (which I believe is the 
<br>
correct behaviour). But gcc 4.6 expects to see '-Wl,--export-dynamic'.
<br>
<p>My temporary solution as supplied by NAG compiler developers is to edit  
<br>
share/openmpi/*-wrapper-data.txt and put flag 
<br>
'-Wl,-Wl,,--export-dynamic' there.
<br>
<p>Ning
<br>
<p><pre>
--
Ning Li
Technical Consultant
Numerical Algorithms Group
________________________________________________________________________
The Numerical Algorithms Group Ltd is a company registered in England
and Wales with company number 1249803. The registered office is:
Wilkinson House, Jordan Hill Road, Oxford OX2 8DR, United Kingdom.
This e-mail has been scanned for all viruses by Star. The service is
powered by MessageLabs. 
________________________________________________________________________
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16769/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16770.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<li><strong>Previous message:</strong> <a href="16768.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16812.php">Ning Li: "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16812.php">Ning Li: "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16850.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16884.php">Ning Li: "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
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
