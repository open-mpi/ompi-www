<?
$subject_val = "[OMPI users] Error while make install all";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 20 15:40:04 2008" -->
<!-- isoreceived="20080220204004" -->
<!-- sent="Wed, 20 Feb 2008 15:39:50 -0500 (EST)" -->
<!-- isosent="20080220203950" -->
<!-- name="Albert Babinskas" -->
<!-- email="babinsk3_at_[hidden]" -->
<!-- subject="[OMPI users] Error while make install all" -->
<!-- id="479616744.197741203539990612.JavaMail.root_at_zcs.TCNJ.EDU" -->
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
<strong>Subject:</strong> [OMPI users] Error while make install all<br>
<strong>From:</strong> Albert Babinskas (<em>babinsk3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-20 15:39:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5054.php">Doug Reeder: "Re: [OMPI users] Error while make install all"</a>
<li><strong>Previous message:</strong> <a href="5052.php">jessie puls: "Re: [OMPI users] openmpi/openib problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5054.php">Doug Reeder: "Re: [OMPI users] Error while make install all"</a>
<li><strong>Reply:</strong> <a href="5054.php">Doug Reeder: "Re: [OMPI users] Error while make install all"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
i am a beginner user.
<br>
I wanted to run OMPI, i configured, and then when i want to compile or make install all.
<br>
It gives me this error :
<br>
Also i am running linux, in school which are connected to a server, and it has KDE.
<br>
<p>Making install in cxx
<br>
make[3]: Entering directory `/home/acct2/babinsk3/research/openmpi-1.2.5/ompi/mpi/cxx'
<br>
/bin/sh ../../../libtool --tag=CXX   --mode=link g++  -O3 -DNDEBUG -finline-functions -pthread  -export-dynamic   -o libmpi_cxx.la -rpath /home/acct2/babinsk3/research/openmpi-1.2.5/Albert/lib mpicxx.lo intercepts.lo comm.lo datatype.lo file.lo win.lo  -lnsl -lutil  -lm
<br>
libtool: link: g++ -shared -nostdlib /usr/lib/../lib64/crti.o /net/apps/packages/gcc-3.4.1/x86_64-unknown-linux-gnu/lib/gcc/x86_64-unknown-linux-gnu/3.4.1/crtbeginS.o  .libs/mpicxx.o .libs/intercepts.o .libs/comm.o .libs/datatype.o .libs/file.o .libs/win.o   -lnsl -lutil -L/net/apps/packages/gcc-3.4.1/x86_64-unknown-linux-gnu/lib/gcc/x86_64-unknown-linux-gnu/3.4.1 -L/net/apps/packages/gcc-3.4.1/x86_64-unknown-linux-gnu/lib/gcc/x86_64-unknown-linux-gnu/3.4.1/../../../../lib64 -L/net/apps/packages/gcc-3.4.1/x86_64-unknown-linux-gnu/lib/gcc/x86_64-unknown-linux-gnu/3.4.1/../../.. -L/lib/../lib64 -L/usr/lib/../lib64 /net/apps/packages/gcc-3.4.1/x86_64-unknown-linux-gnu/lib/../lib64/libstdc++.a -L/local/home/source/linux/2.4/gcc-3.4.1-obj/x86_64-unknown-linux-gnu/libstdc++-v3/src -L/local/home/source/linux/2.4/gcc-3.4.1-obj/x86_64-unknown-linux-gnu/libstdc++-v3/src/.libs -L/local/home/source/linux/2.4/gcc-3.4.1-obj/gcc -lm -lpthread -lc -lgcc /net/apps/packages/gcc-3.4.1/x86_64-unknown-linux-gnu/lib/gcc/x86_64-un<br>
known-linux-gnu/3.4.1/crtendS.o /usr/lib/../lib64/crtn.o  -pthread   -pthread -Wl,-soname -Wl,libmpi_cxx.so.0 -o .libs/libmpi_cxx.so.0.0.0
<br>
/usr/bin/ld: /net/apps/packages/gcc-3.4.1/x86_64-unknown-linux-gnu/lib/../lib64/libstdc++.a(ios_init.o): relocation R_X86_64_32 against `std::ios_base::Init::_S_refcount' can not be used when making a shared object; recompile with -fPIC
<br>
/net/apps/packages/gcc-3.4.1/x86_64-unknown-linux-gnu/lib/../lib64/libstdc++.a: could not read symbols: Bad value
<br>
collect2: ld returned 1 exit status
<br>
make[3]: *** [libmpi_cxx.la] Error 1
<br>
make[3]: Leaving directory `/home/acct2/babinsk3/research/openmpi-1.2.5/ompi/mpi/cxx'
<br>
make[2]: *** [install-recursive] Error 1
<br>
make[2]: Leaving directory `/home/acct2/babinsk3/research/openmpi-1.2.5/ompi/mpi'
<br>
make[1]: *** [install-recursive] Error 1
<br>
make[1]: Leaving directory `/home/acct2/babinsk3/research/openmpi-1.2.5/ompi'
<br>
make: *** [install-recursive] Error 1
<br>
[babinsk3_at_snake openmpi-1.2.5]$ libmpi_cxx.la
<br>
<p>I am not sure what to do and where to look for fix.
<br>
I tried FAQ's, and users archives but it didnt give me an answer.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5054.php">Doug Reeder: "Re: [OMPI users] Error while make install all"</a>
<li><strong>Previous message:</strong> <a href="5052.php">jessie puls: "Re: [OMPI users] openmpi/openib problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5054.php">Doug Reeder: "Re: [OMPI users] Error while make install all"</a>
<li><strong>Reply:</strong> <a href="5054.php">Doug Reeder: "Re: [OMPI users] Error while make install all"</a>
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
