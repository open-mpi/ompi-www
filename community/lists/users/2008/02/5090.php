<?
$subject_val = "[OMPI users] Error compiling open-mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 27 15:32:45 2008" -->
<!-- isoreceived="20080227203245" -->
<!-- sent="Wed, 27 Feb 2008 15:32:38 -0500 (EST)" -->
<!-- isosent="20080227203238" -->
<!-- name="Albert Babinskas" -->
<!-- email="babinsk3_at_[hidden]" -->
<!-- subject="[OMPI users] Error compiling open-mpi" -->
<!-- id="543618616.2399531204144358520.JavaMail.root_at_zcs.TCNJ.EDU" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Error compiling open-mpi<br>
<strong>From:</strong> Albert Babinskas (<em>babinsk3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-27 15:32:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5091.php">Brian W. Barrett: "Re: [OMPI users] Help understanding build option and warning messages, OMPI 1.2.4"</a>
<li><strong>Previous message:</strong> <a href="5089.php">Rainer Keller: "Re: [OMPI users] Help understanding build option and warning messages, OMPI 1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5107.php">Jeff Squyres: "Re: [OMPI users] Error compiling open-mpi"</a>
<li><strong>Reply:</strong> <a href="5107.php">Jeff Squyres: "Re: [OMPI users] Error compiling open-mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi i am running Red hat linux in school
<br>
I am trying to compile open mpi and it gives me
<br>
this error: 
<br>
make[3]: Entering directory `/home/acct2/babinsk3/research/openmpi-1.2.5/Albert/
<br>
ompi/mpi/cxx'
<br>
/bin/sh ../../../libtool --tag=CXX  --mode=link g++  -O3 -DNDEBUG -m64 -finline
<br>
-functions -pthread  -export-dynamic   -o libmpi_cxx.la 
<br>
-rpath /usr/local/lib mpicxx.lo intercepts.lo comm.lo datatype.lo file.lo win.lo  
<br>
-lnsl -lutil  -lm libtool: link: g++ -shared -nostdlib /usr/lib/../lib64/crti.o /net/apps/packages
<br>
/gcc-3.4.1/x86_64-unknown-linux-gnu/lib/gcc/x86_64-unknown-linux-gnu/3.4.1/crtbe
<br>
ginS.o  .libs/mpicxx.o .libs/intercepts.o .libs/comm.o .libs/datatype.o .libs/fi
<br>
le.o .libs/win.o 
<br>
-lnsl -lutil -L/net/apps/packages/gcc-3.4.1/x86_64-unknown-li
<br>
nux-gnu/lib/gcc/x86_64-unknown-linux-gnu/3.4.1 -L/net/apps/packages/gcc-3.4.1/x8
<br>
6_64-unknown-linux-gnu/lib/gcc/x86_64-unknown-linux-gnu/3.4.1/../../../../lib64
<br>
-L/net/apps/packages/gcc-3.4.1/x86_64-unknown-linux-gnu/lib/gcc/x86_64-unknown-l
<br>
inux-gnu/3.4.1/../../.. -L/lib/../lib64 -L/usr/lib/../lib64 /net/apps/packages/g
<br>
cc-3.4.1/x86_64-unknown-linux-gnu/lib/../lib64/libstdc++.a -L/local/home/source/linux/2.4/gcc-3.4.1-obj/x86_64-unknown-linux-gnu/libstdc++-v3/src -L/local/home/source/linux/2.4/gcc-3.4.1-obj/x86_64-unknown-linux-gnu/libstdc++-v3/src/.libs -L/local/home/source/linux/2.4/gcc-3.4.1-obj/gcc -lm -lpthread -lc -lgcc /net/apps/packages/gcc-3.4.1/x86_64-unknown-linux-gnu/lib/gcc/x86_64-unknown-linux-gnu/3.4.1/crtendS.o /usr/lib/../lib64/crtn.o  -m64 -pthread   -pthread -Wl,-soname -Wl,libmpi_cxx.so.0 -o .libs/libmpi_cxx.so.0.0.0
<br>
/usr/bin/ld: /net/apps/packages/gcc-3.4.1/x86_64-unknown-linux-gnu/lib/../lib64/libstdc++.a(ios_init.o): relocation R_X86_64_32 against `std::ios_base::Init::_S_refcount' can not be used when making a shared object; recompile with -fPIC
<br>
/net/apps/packages/gcc-3.4.1/x86_64-unknown-linux-gnu/lib/../lib64/libstdc++.a:could not read symbols: Bad value
<br>
collect2: ld returned 1 exit status
<br>
make[3]: *** [libmpi_cxx.la] Error 1
<br>
<p><p>when i ran configure i specified 
<br>
./configure CFLAGS=-m64 CXXFLAGS=-m64 FFLAGS=-m64 FCFLAGS=-m64
<br>
<p>thanx 
<br>
-- Albert --
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5091.php">Brian W. Barrett: "Re: [OMPI users] Help understanding build option and warning messages, OMPI 1.2.4"</a>
<li><strong>Previous message:</strong> <a href="5089.php">Rainer Keller: "Re: [OMPI users] Help understanding build option and warning messages, OMPI 1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5107.php">Jeff Squyres: "Re: [OMPI users] Error compiling open-mpi"</a>
<li><strong>Reply:</strong> <a href="5107.php">Jeff Squyres: "Re: [OMPI users] Error compiling open-mpi"</a>
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
