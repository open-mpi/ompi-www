<?
$subject_val = "Re: [OMPI users] Error in openmpi-1.8.2a1r31556 with Sun C 5.12";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 30 12:33:44 2014" -->
<!-- isoreceived="20140430163344" -->
<!-- sent="Wed, 30 Apr 2014 16:33:42 +0000" -->
<!-- isosent="20140430163342" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error in openmpi-1.8.2a1r31556 with Sun C 5.12" -->
<!-- id="000587B7-0A90-46C8-95A3-73EF153E8FC2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201404301440.s3UEeQSj012710_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error in openmpi-1.8.2a1r31556 with Sun C 5.12<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-30 12:33:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/05/24281.php">Ralph Castain: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="24279.php">Ralph Castain: "Re: [OMPI users] Error in openmpi-1.9a1r31561 using gcc or cc"</a>
<li><strong>In reply to:</strong> <a href="24277.php">Siegmar Gross: "[OMPI users] Error in openmpi-1.8.2a1r31556 with Sun C 5.12"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gah.  I thought we had this Fortran stuff finally correct.  :-\
<br>
<p>Let me take this off-list and see if there's something still not quite right, or if the Sun fortran compiler isn't doing something right.
<br>
<p><p>On Apr 30, 2014, at 10:40 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to install openmpi-1.8.2a1r31556 on my machines (openSUSE
</span><br>
<span class="quotelev1">&gt; Linux 12.1 x86_64, Solaris 10 x86_64, and Solaris 10 Sparc) with
</span><br>
<span class="quotelev1">&gt; &quot;Sun C 5.12&quot; and got the following error on all platforms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.8.2a1r31556-Linux.x86_64.64_cc 131 tail -15 log.make.Linux.x86_64.64_cc
</span><br>
<span class="quotelev1">&gt;  PPFC     comm_compare_f08.lo
</span><br>
<span class="quotelev1">&gt;  PPFC     comm_connect_f08.lo
</span><br>
<span class="quotelev1">&gt;  PPFC     comm_create_errhandler_f08.lo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   fn = c_funloc(comm_errhandler_fn)
</span><br>
<span class="quotelev1">&gt;                 ^                   
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.8.2a1r31556/ompi/mpi/fortran/use-mpi-f08/comm_create_errhandler_f08.F90&quot;,
</span><br>
<span class="quotelev1">&gt;  Line = 22, Column = 18: ERROR: C_FUNLOC function argument must
</span><br>
<span class="quotelev1">&gt;  be a procedure that is interoperable or a procedure pointer
</span><br>
<span class="quotelev1">&gt;  associated with an interoperable procedure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; f90comp: 193 SOURCE LINES
</span><br>
<span class="quotelev1">&gt; f90comp: 1 ERRORS, 0 WARNINGS, 0 OTHER MESSAGES, 0 ANSI
</span><br>
<span class="quotelev1">&gt; make[2]: *** [comm_create_errhandler_f08.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `.../ompi/mpi/fortran/use-mpi-f08'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `.../ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.8.2a1r31556-Linux.x86_64.64_cc 132 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I configured with the following command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../openmpi-1.8.2a1r31556/configure --prefix=/usr/local/openmpi-1.8.2_64_cc \
</span><br>
<span class="quotelev1">&gt;  --libdir=/usr/local/openmpi-1.8.2_64_cc/lib64 \
</span><br>
<span class="quotelev1">&gt;  --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev1">&gt;  --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev1">&gt;  JAVA_HOME=/usr/local/jdk1.8.0 \
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
<span class="quotelev1">&gt;  --enable-mpi-cxx \
</span><br>
<span class="quotelev1">&gt;  --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-java \
</span><br>
<span class="quotelev1">&gt;  --enable-heterogeneous \
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;  --with-threads=posix \
</span><br>
<span class="quotelev1">&gt;  --with-hwloc=internal \
</span><br>
<span class="quotelev1">&gt;  --without-verbs \
</span><br>
<span class="quotelev1">&gt;  --with-wrapper-cflags=-m64 \
</span><br>
<span class="quotelev1">&gt;  --enable-debug \
</span><br>
<span class="quotelev1">&gt;  |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful if somebody could solve the problem. Thank
</span><br>
<span class="quotelev1">&gt; you very much for any help in advance.
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/05/24281.php">Ralph Castain: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="24279.php">Ralph Castain: "Re: [OMPI users] Error in openmpi-1.9a1r31561 using gcc or cc"</a>
<li><strong>In reply to:</strong> <a href="24277.php">Siegmar Gross: "[OMPI users] Error in openmpi-1.8.2a1r31556 with Sun C 5.12"</a>
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
