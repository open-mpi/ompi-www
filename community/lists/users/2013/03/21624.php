<?
$subject_val = "Re: [OMPI users] 32-/64-bit library problem in openmpi-1.7rc8r28176 and openmpi-1.9r28175";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 27 06:44:43 2013" -->
<!-- isoreceived="20130327104443" -->
<!-- sent="Wed, 27 Mar 2013 11:44:36 +0100" -->
<!-- isosent="20130327104436" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 32-/64-bit library problem in openmpi-1.7rc8r28176 and openmpi-1.9r28175" -->
<!-- id="4643825.oBEcWPt7it_at_rico" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] 32-/64-bit library problem in openmpi-1.7rc8r28176 and openmpi-1.9r28175" -->
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
<strong>Subject:</strong> Re: [OMPI users] 32-/64-bit library problem in openmpi-1.7rc8r28176 and openmpi-1.9r28175<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-27 06:44:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21625.php">Javier Garcia Blas: "[OMPI users] Call For Papers: EuroMPI 2013. Submission deadline extended to	April 12th, 2013"</a>
<li><strong>Previous message:</strong> <a href="21623.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Persistent Communication using MPI_SEND_INIT, MPI_RECV_INIT etc."</a>
<li><strong>Maybe in reply to:</strong> <a href="21582.php">Siegmar Gross: "[OMPI users] 32-/64-bit library problem in openmpi-1.7rc8r28176 and openmpi-1.9r28175"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Siegmar,
<br>
<p>the problem is that FCFLAGS is not passed to the Fortran compiler. Fixed in 
<br>
revision 28228.
<br>
<p>Thanks for the hint!
<br>
<p>Kind regards,
<br>
Matthias
<br>
<p><p>On Mar 21, 2013, at 9:29 AM, Siegmar Gross &lt;Siegmar.Gross_at_informatik.hs-
<br>
fulda.de&gt; wrote:
<br>
<p><p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; today I tried to build openmpi-1.7rc8r28176 and openmpi-1.9r28175
</span><br>
<span class="quotelev1">&gt; on &quot;Solaris 10, x86_64&quot; and &quot;Solaris 10, sparc&quot; with &quot;Sun C 5.12&quot;.
</span><br>
<span class="quotelev1">&gt; I used the following commands for openmpi-1.7.x and similar commands
</span><br>
<span class="quotelev1">&gt; for the other package:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../openmpi-1.7rc8r28176/configure --prefix=/usr/local/openmpi-1.7_64_cc \
</span><br>
<span class="quotelev1">&gt;  --libdir=/usr/local/openmpi-1.7_64_cc/lib64 \
</span><br>
<span class="quotelev1">&gt;  --with-jdk-bindir=/usr/local/jdk1.7.0_07/bin/amd64 \
</span><br>
<span class="quotelev1">&gt;  --with-jdk-headers=/usr/local/jdk1.7.0_07/include \
</span><br>
<span class="quotelev1">&gt;  JAVA_HOME=/usr/local/jdk1.7.0_07 \
</span><br>
<span class="quotelev1">&gt;  LDFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;  CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
</span><br>
<span class="quotelev1">&gt;  CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;  CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev1">&gt;  CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;  --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-java \
</span><br>
<span class="quotelev1">&gt;  --enable-heterogeneous \
</span><br>
<span class="quotelev1">&gt;  --enable-opal-multi-threads \
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;  --with-threads=posix \
</span><br>
<span class="quotelev1">&gt;  --with-hwloc=internal \
</span><br>
<span class="quotelev1">&gt;  --without-verbs \
</span><br>
<span class="quotelev1">&gt;  --without-udapl \
</span><br>
<span class="quotelev1">&gt;  --with-wrapper-cflags=-m64 \
</span><br>
<span class="quotelev1">&gt;  --enable-debug \
</span><br>
<span class="quotelev1">&gt;  |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev1">&gt; make |&amp; tee log.make.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;make&quot; breaks with the following error for both packages on both
</span><br>
<span class="quotelev1">&gt; platforms:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9-SunOS.sparc.64_cc 30 tail -15 log.make.SunOS.sparc.64_cc
</span><br>
<span class="quotelev1">&gt;  F77      libvt_fmpi_la-vt_fmpiconst_2.lo
</span><br>
<span class="quotelev1">&gt;  F77LD    libvt-fmpi.la
</span><br>
<span class="quotelev1">&gt; ld: fatal: file .libs/libvt_fmpi_la-vt_fmpiconst_1.o:
</span><br>
<span class="quotelev1">&gt;  wrong ELF class: ELFCLASS32
</span><br>
<span class="quotelev1">&gt; ld: fatal: file processing errors. No output written to
</span><br>
<span class="quotelev1">&gt;  .libs/libvt-fmpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt; make[5]: *** [libvt-fmpi.la] Error 2
</span><br>
<span class="quotelev1">&gt; make[5]: Leaving directory `.../ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev1">&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `.../ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `.../ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `.../ompi/contrib/vt'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/.../ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9-SunOS.sparc.64_cc 31 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr vtlib 39 pwd
</span><br>
<span class="quotelev1">&gt; .../ompi/contrib/vt/vt/vtlib
</span><br>
<span class="quotelev1">&gt; tyr vtlib 40 file * | grep -v 64-bit | grep -v ascii
</span><br>
<span class="quotelev1">&gt; libvt_fmpi_la-vt_fmpiconst_1.o: ELF 32-bit MSB relocatable
</span><br>
<span class="quotelev1">&gt;  SPARC32PLUS Version 1, V8+ Required
</span><br>
<span class="quotelev1">&gt; libvt_fmpi_la-vt_fmpiconst_2.o: ELF 32-bit MSB relocatable
</span><br>
<span class="quotelev1">&gt;  SPARC32PLUS Version 1, V8+ Required
</span><br>
<span class="quotelev1">&gt; tyr vtlib 41 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why are these two files 32-bit while all others are 64-bit as
</span><br>
<span class="quotelev1">&gt; requested in &quot;configure&quot;? I would be grateful, if somebody
</span><br>
<span class="quotelev1">&gt; can fix this problem. Thank you very much for your efforts
</span><br>
<span class="quotelev1">&gt; in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
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
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21624/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21625.php">Javier Garcia Blas: "[OMPI users] Call For Papers: EuroMPI 2013. Submission deadline extended to	April 12th, 2013"</a>
<li><strong>Previous message:</strong> <a href="21623.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Persistent Communication using MPI_SEND_INIT, MPI_RECV_INIT etc."</a>
<li><strong>Maybe in reply to:</strong> <a href="21582.php">Siegmar Gross: "[OMPI users] 32-/64-bit library problem in openmpi-1.7rc8r28176 and openmpi-1.9r28175"</a>
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
