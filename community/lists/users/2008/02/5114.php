<?
$subject_val = "Re: [OMPI users] Error compiling open-mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 29 20:21:41 2008" -->
<!-- isoreceived="20080301012141" -->
<!-- sent="Fri, 29 Feb 2008 20:21:34 -0500 (EST)" -->
<!-- isosent="20080301012134" -->
<!-- name="Albert Babinskas" -->
<!-- email="babinsk3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error compiling open-mpi" -->
<!-- id="201514901.3194431204334494545.JavaMail.root_at_zcs.TCNJ.EDU" -->
<!-- charset="utf-8" -->
<!-- inreplyto="514F8317-A317-42F8-81D9-264E71006685_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error compiling open-mpi<br>
<strong>From:</strong> Albert Babinskas (<em>babinsk3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-29 20:21:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/03/5115.php">Giovanni Davide Vergine: "Re: [OMPI users] Loopback Communication"</a>
<li><strong>Previous message:</strong> <a href="5113.php">Elvedin Trnjanin: "[OMPI users] Loopback Communication"</a>
<li><strong>In reply to:</strong> <a href="5107.php">Jeff Squyres: "Re: [OMPI users] Error compiling open-mpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
figured it out,
<br>
reinstalled fresh OS on different computer,
<br>
and was able to compile.
<br>
Thanx for help thought.
<br>
And yes i was able to compile c++ programs, that used std namespaces.
<br>
<p><p>----- Original Message -----
<br>
From: &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Sent: Friday, February 29, 2008 3:29:14 PM (GMT-0500) America/New_York
<br>
Subject: Re: [OMPI users] Error compiling open-mpi
<br>
<p>Can you confirm that your C++ compiler is installed properly such that  
<br>
it is able to create shared libraries that use the STL and the std  
<br>
namespace?
<br>
<p><p>On Feb 27, 2008, at 3:32 PM, Albert Babinskas wrote:
<br>
<p><span class="quotelev1">&gt; Hi i am running Red hat linux in school
</span><br>
<span class="quotelev1">&gt; I am trying to compile open mpi and it gives me
</span><br>
<span class="quotelev1">&gt; this error:
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/acct2/babinsk3/research/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.5/Albert/
</span><br>
<span class="quotelev1">&gt; ompi/mpi/cxx'
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CXX  --mode=link g++  -O3 -DNDEBUG - 
</span><br>
<span class="quotelev1">&gt; m64 -finline
</span><br>
<span class="quotelev1">&gt; -functions -pthread  -export-dynamic   -o libmpi_cxx.la
</span><br>
<span class="quotelev1">&gt; -rpath /usr/local/lib mpicxx.lo intercepts.lo comm.lo datatype.lo  
</span><br>
<span class="quotelev1">&gt; file.lo win.lo
</span><br>
<span class="quotelev1">&gt; -lnsl -lutil  -lm libtool: link: g++ -shared -nostdlib /usr/lib/../ 
</span><br>
<span class="quotelev1">&gt; lib64/crti.o /net/apps/packages
</span><br>
<span class="quotelev1">&gt; /gcc-3.4.1/x86_64-unknown-linux-gnu/lib/gcc/x86_64-unknown-linux-gnu/ 
</span><br>
<span class="quotelev1">&gt; 3.4.1/crtbe
</span><br>
<span class="quotelev1">&gt; ginS.o  .libs/mpicxx.o .libs/intercepts.o .libs/comm.o .libs/ 
</span><br>
<span class="quotelev1">&gt; datatype.o .libs/fi
</span><br>
<span class="quotelev1">&gt; le.o .libs/win.o
</span><br>
<span class="quotelev1">&gt; -lnsl -lutil -L/net/apps/packages/gcc-3.4.1/x86_64-unknown-li
</span><br>
<span class="quotelev1">&gt; nux-gnu/lib/gcc/x86_64-unknown-linux-gnu/3.4.1 -L/net/apps/packages/ 
</span><br>
<span class="quotelev1">&gt; gcc-3.4.1/x8
</span><br>
<span class="quotelev1">&gt; 6_64-unknown-linux-gnu/lib/gcc/x86_64-unknown-linux-gnu/ 
</span><br>
<span class="quotelev1">&gt; 3.4.1/../../../../lib64
</span><br>
<span class="quotelev1">&gt; -L/net/apps/packages/gcc-3.4.1/x86_64-unknown-linux-gnu/lib/gcc/ 
</span><br>
<span class="quotelev1">&gt; x86_64-unknown-l
</span><br>
<span class="quotelev1">&gt; inux-gnu/3.4.1/../../.. -L/lib/../lib64 -L/usr/lib/../lib64 /net/ 
</span><br>
<span class="quotelev1">&gt; apps/packages/g
</span><br>
<span class="quotelev1">&gt; cc-3.4.1/x86_64-unknown-linux-gnu/lib/../lib64/libstdc++.a -L/local/ 
</span><br>
<span class="quotelev1">&gt; home/source/linux/2.4/gcc-3.4.1-obj/x86_64-unknown-linux-gnu/libstdc+ 
</span><br>
<span class="quotelev1">&gt; +-v3/src -L/local/home/source/linux/2.4/gcc-3.4.1-obj/x86_64-unknown- 
</span><br>
<span class="quotelev1">&gt; linux-gnu/libstdc++-v3/src/.libs -L/local/home/source/linux/2.4/ 
</span><br>
<span class="quotelev1">&gt; gcc-3.4.1-obj/gcc -lm -lpthread -lc -lgcc /net/apps/packages/ 
</span><br>
<span class="quotelev1">&gt; gcc-3.4.1/x86_64-unknown-linux-gnu/lib/gcc/x86_64-unknown-linux-gnu/ 
</span><br>
<span class="quotelev1">&gt; 3.4.1/crtendS.o /usr/lib/../lib64/crtn.o  -m64 -pthread   -pthread - 
</span><br>
<span class="quotelev1">&gt; Wl,-soname -Wl,libmpi_cxx.so.0 -o .libs/libmpi_cxx.so.0.0.0
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: /net/apps/packages/gcc-3.4.1/x86_64-unknown-linux-gnu/ 
</span><br>
<span class="quotelev1">&gt; lib/../lib64/libstdc++.a(ios_init.o): relocation R_X86_64_32 against  
</span><br>
<span class="quotelev1">&gt; `std::ios_base::Init::_S_refcount' can not be used when making a  
</span><br>
<span class="quotelev1">&gt; shared object; recompile with -fPIC
</span><br>
<span class="quotelev1">&gt; /net/apps/packages/gcc-3.4.1/x86_64-unknown-linux-gnu/lib/../lib64/ 
</span><br>
<span class="quotelev1">&gt; libstdc++.a:could not read symbols: Bad value
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[3]: *** [libmpi_cxx.la] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when i ran configure i specified
</span><br>
<span class="quotelev1">&gt; ./configure CFLAGS=-m64 CXXFLAGS=-m64 FFLAGS=-m64 FCFLAGS=-m64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanx
</span><br>
<span class="quotelev1">&gt; -- Albert --
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
Cisco Systems
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/03/5115.php">Giovanni Davide Vergine: "Re: [OMPI users] Loopback Communication"</a>
<li><strong>Previous message:</strong> <a href="5113.php">Elvedin Trnjanin: "[OMPI users] Loopback Communication"</a>
<li><strong>In reply to:</strong> <a href="5107.php">Jeff Squyres: "Re: [OMPI users] Error compiling open-mpi"</a>
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
