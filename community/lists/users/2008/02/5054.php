<?
$subject_val = "Re: [OMPI users] Error while make install all";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 20 16:17:42 2008" -->
<!-- isoreceived="20080220211742" -->
<!-- sent="Wed, 20 Feb 2008 13:12:35 -0800" -->
<!-- isosent="20080220211235" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error while make install all" -->
<!-- id="5B1CCE3C-75E8-406C-AC98-7D73A0892E41_at_rain.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="479616744.197741203539990612.JavaMail.root_at_zcs.TCNJ.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error while make install all<br>
<strong>From:</strong> Doug Reeder (<em>dlr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-20 16:12:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5055.php">R C Pasianot: "[OMPI users] Specifying -wdir"</a>
<li><strong>Previous message:</strong> <a href="5053.php">Albert Babinskas: "[OMPI users] Error while make install all"</a>
<li><strong>In reply to:</strong> <a href="5053.php">Albert Babinskas: "[OMPI users] Error while make install all"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Albert,
<br>
<p>You appear to be linking against 64 bit libraries. Did you build  
<br>
openmpi as 64 bit. I think you need to add -m64 to the CFLAGS and  
<br>
CXXFLAGS to the configure for openmpi.
<br>
<p>Doug Reeder
<br>
On Feb 20, 2008, at 12:39 PM, Albert Babinskas wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; i am a beginner user.
</span><br>
<span class="quotelev1">&gt; I wanted to run OMPI, i configured, and then when i want to compile  
</span><br>
<span class="quotelev1">&gt; or make install all.
</span><br>
<span class="quotelev1">&gt; It gives me this error :
</span><br>
<span class="quotelev1">&gt; Also i am running linux, in school which are connected to a server,  
</span><br>
<span class="quotelev1">&gt; and it has KDE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making install in cxx
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/acct2/babinsk3/research/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.5/ompi/mpi/cxx'
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CXX   --mode=link g++  -O3 -DNDEBUG - 
</span><br>
<span class="quotelev1">&gt; finline-functions -pthread  -export-dynamic   -o libmpi_cxx.la - 
</span><br>
<span class="quotelev1">&gt; rpath /home/acct2/babinsk3/research/openmpi-1.2.5/Albert/lib  
</span><br>
<span class="quotelev1">&gt; mpicxx.lo intercepts.lo comm.lo datatype.lo file.lo win.lo  -lnsl - 
</span><br>
<span class="quotelev1">&gt; lutil  -lm
</span><br>
<span class="quotelev1">&gt; libtool: link: g++ -shared -nostdlib /usr/lib/../lib64/crti.o /net/ 
</span><br>
<span class="quotelev1">&gt; apps/packages/gcc-3.4.1/x86_64-unknown-linux-gnu/lib/gcc/x86_64- 
</span><br>
<span class="quotelev1">&gt; unknown-linux-gnu/3.4.1/crtbeginS.o  .libs/mpicxx.o .libs/ 
</span><br>
<span class="quotelev1">&gt; intercepts.o .libs/comm.o .libs/datatype.o .libs/file.o .libs/ 
</span><br>
<span class="quotelev1">&gt; win.o   -lnsl -lutil -L/net/apps/packages/gcc-3.4.1/x86_64-unknown- 
</span><br>
<span class="quotelev1">&gt; linux-gnu/lib/gcc/x86_64-unknown-linux-gnu/3.4.1 -L/net/apps/ 
</span><br>
<span class="quotelev1">&gt; packages/gcc-3.4.1/x86_64-unknown-linux-gnu/lib/gcc/x86_64-unknown- 
</span><br>
<span class="quotelev1">&gt; linux-gnu/3.4.1/../../../../lib64 -L/net/apps/packages/gcc-3.4.1/ 
</span><br>
<span class="quotelev1">&gt; x86_64-unknown-linux-gnu/lib/gcc/x86_64-unknown-linux-gnu/ 
</span><br>
<span class="quotelev1">&gt; 3.4.1/../../.. -L/lib/../lib64 -L/usr/lib/../lib64 /net/apps/ 
</span><br>
<span class="quotelev1">&gt; packages/gcc-3.4.1/x86_64-unknown-linux-gnu/lib/../lib64/libstdc+ 
</span><br>
<span class="quotelev1">&gt; +.a -L/local/home/source/linux/2.4/gcc-3.4.1-obj/x86_64-unknown- 
</span><br>
<span class="quotelev1">&gt; linux-gnu/libstdc++-v3/src -L/local/home/source/linux/2.4/gcc-3.4.1- 
</span><br>
<span class="quotelev1">&gt; obj/x86_64-unknown-linux-gnu/libstdc++-v3/src/.libs -L/local/home/ 
</span><br>
<span class="quotelev1">&gt; source/linux/2.4/gcc-3.4.1-obj/gcc -lm -lpthread -lc -lgcc /net/ 
</span><br>
<span class="quotelev1">&gt; apps/packages/gcc-3.4.1/x86_64-u!
</span><br>
<span class="quotelev1">&gt;  nknown-linux-gnu/lib/gcc/x86_64-unknown-linux-gnu/3.4.1/crtendS.o / 
</span><br>
<span class="quotelev1">&gt; usr/lib/../lib64/crtn.o  -pthread   -pthread -Wl,-soname - 
</span><br>
<span class="quotelev1">&gt; Wl,libmpi_cxx.so.0 -o .libs/libmpi_cxx.so.0.0.0
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: /net/apps/packages/gcc-3.4.1/x86_64-unknown-linux-gnu/ 
</span><br>
<span class="quotelev1">&gt; lib/../lib64/libstdc++.a(ios_init.o): relocation R_X86_64_32  
</span><br>
<span class="quotelev1">&gt; against `std::ios_base::Init::_S_refcount' can not be used when  
</span><br>
<span class="quotelev1">&gt; making a shared object; recompile with -fPIC
</span><br>
<span class="quotelev1">&gt; /net/apps/packages/gcc-3.4.1/x86_64-unknown-linux-gnu/lib/../lib64/ 
</span><br>
<span class="quotelev1">&gt; libstdc++.a: could not read symbols: Bad value
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[3]: *** [libmpi_cxx.la] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/acct2/babinsk3/research/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.5/ompi/mpi/cxx'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/acct2/babinsk3/research/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.5/ompi/mpi'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/acct2/babinsk3/research/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.5/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; [babinsk3_at_snake openmpi-1.2.5]$ libmpi_cxx.la
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not sure what to do and where to look for fix.
</span><br>
<span class="quotelev1">&gt; I tried FAQ's, and users archives but it didnt give me an answer.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5055.php">R C Pasianot: "[OMPI users] Specifying -wdir"</a>
<li><strong>Previous message:</strong> <a href="5053.php">Albert Babinskas: "[OMPI users] Error while make install all"</a>
<li><strong>In reply to:</strong> <a href="5053.php">Albert Babinskas: "[OMPI users] Error while make install all"</a>
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
