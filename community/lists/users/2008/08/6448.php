<?
$subject_val = "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 29 14:54:03 2008" -->
<!-- isoreceived="20080829185403" -->
<!-- sent="Fri, 29 Aug 2008 14:53:54 -0400" -->
<!-- isosent="20080829185354" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7" -->
<!-- id="48B845C2.7020004_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48B83684.3070803_at_Sun.COM" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-29 14:53:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6449.php">Jeff Squyres: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<li><strong>Previous message:</strong> <a href="6447.php">Rolf Vandevaart: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<li><strong>In reply to:</strong> <a href="6447.php">Rolf Vandevaart: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6450.php">Jeff Squyres: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Again Paul:
<br>
<p>A workaround for your issue is to add the following to your configure line.
<br>
<p>--without-threads
<br>
<p>This will prevent the synch.h from being included as it is not needed 
<br>
anyways.  We will have to figure out a better solution but for now I 
<br>
think that will get you passed your mpicxx.cc issue.
<br>
<p>Rolf
<br>
<p>On 08/29/08 13:48, Rolf Vandevaart wrote:
<br>
<span class="quotelev1">&gt; Hi Paul:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can comment on why you are seeing the mpicxx problem, but I am not 
</span><br>
<span class="quotelev1">&gt; sure what to do about it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the file mpicxx.cc there is a declaration near the bottom that looks 
</span><br>
<span class="quotelev1">&gt; like this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; const int LOCK_SHARED = MPI_LOCK_SHARED;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The preprocessor is going through that file and replacing LOCK_SHARED 
</span><br>
<span class="quotelev1">&gt; with 0x01.  Then when it tries to compile it you are trying to compile a 
</span><br>
<span class="quotelev1">&gt; line that looks like this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; const int 0x01 = 2;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is why you see the error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In our case I noticed that newer versions of Solaris have an include 
</span><br>
<span class="quotelev1">&gt; file called /usr/include/sys/synch.h with a define for LOCK_SHARED.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here it is from the file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define LOCK_SHARED             0x01      /* same as USYNC_PROCESS */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, what to do about it?  I am not sure yet.  I will check around a little.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 08/29/08 12:03, Paul Kapinos wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just tried to install the 1.2.7 version of OpenMPI alongside to our 
</span><br>
<span class="quotelev2">&gt;&gt; used 1.2.5 and 1.2.6.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Because we use gcc, intel, studio and pgi compilers on three OSes 
</span><br>
<span class="quotelev2">&gt;&gt; (Linux, Solaris/Sparc/ Solaris/Opteron), we have at least 15 Versions 
</span><br>
<span class="quotelev2">&gt;&gt; to compile (not all compilers are available everywere). Some versions 
</span><br>
<span class="quotelev2">&gt;&gt; are configured and compiled well (so, I don't check them yet, but they 
</span><br>
<span class="quotelev2">&gt;&gt; compiled and installed...)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But 8 of versions beraks the compilation with some crude error 
</span><br>
<span class="quotelev2">&gt;&gt; messages. Mostly there were logs like
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/usr/include/infiniband/kern-abi.h&quot;, line 144: zero-sized struct/union
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_openib_component.c&quot;, line 293: warning: syntax error:  empty 
</span><br>
<span class="quotelev2">&gt;&gt; declaration
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Six of 8 broken versions stopped the compilation on the file 
</span><br>
<span class="quotelev2">&gt;&gt; ./ompi/mpi/cxx/mpicxx.cc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +++++++++++++++++++++++++
</span><br>
<span class="quotelev2">&gt;&gt; ......
</span><br>
<span class="quotelev2">&gt;&gt; Making all in cxx
</span><br>
<span class="quotelev2">&gt;&gt; gmake[3]: Entering directory 
</span><br>
<span class="quotelev2">&gt;&gt; `/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.7_SolX86_studio/ompi/mpi/cxx' 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; source='mpicxx.cc' object='mpicxx.lo' libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt;         DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt;         /bin/bash ../../../libtool --tag=CXX   --mode=compile CC 
</span><br>
<span class="quotelev2">&gt;&gt; -DHAVE_CONFIG_H -I. -I../../../opal/include -I../../../orte/include 
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../ompi/include  -DOMPI_BUILDING_CXX_BINDINGS_LIBRARY=1 
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_SKIP_MPICXX=1 -I../../..    -DNDEBUG -O2 -m64 -mt -c -o 
</span><br>
<span class="quotelev2">&gt;&gt; mpicxx.lo mpicxx.cc
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile:  CC -DHAVE_CONFIG_H -I. -I../../../opal/include 
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../orte/include -I../../../ompi/include 
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_BUILDING_CXX_BINDINGS_LIBRARY=1 -DOMPI_SKIP_MPICXX=1 -I../../.. 
</span><br>
<span class="quotelev2">&gt;&gt; -DNDEBUG -O2 -m64 -mt -c mpicxx.cc  -KPIC -DPIC -o .libs/mpicxx.o
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpicxx.cc&quot;, line 293: Error: A declaration does not specify a tag or 
</span><br>
<span class="quotelev2">&gt;&gt; an identifier.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpicxx.cc&quot;, line 293: Error: Use &quot;;&quot; to terminate declarations.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpicxx.cc&quot;, line 293: Error: A declaration was expected instead of 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0x01&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 3 Error(s) detected
</span><br>
<span class="quotelev2">&gt;&gt; .......
</span><br>
<span class="quotelev2">&gt;&gt; +++++++++++++++++++++++++
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, it seems to me, there is somewhat nasty with one or more 
</span><br>
<span class="quotelev2">&gt;&gt; declarations  somewhere...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does somebody have any idea what I am doing wrong? Or maybe there is 
</span><br>
<span class="quotelev2">&gt;&gt; an bug in 1.2.7?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards
</span><br>
<span class="quotelev2">&gt;&gt; Paul Kapinos
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; P.S. I Used quite straght forward configuretion like following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --enable-static --with-devel-headers CFLAGS=&quot;-O2 -m64&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; CXXFLAGS=&quot;-O2 -m64&quot; F77=f77 FFLAGS=&quot;-O2 -m64&quot; FCFLAGS=&quot;-O2 -m64&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; LDFLAGS=&quot;-O2 -m64&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/rwthfs/rz/SW/MPI/openmpi-1.2.7/solx8664/studio
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Of course other versions (32bit, other compiler) are configured with 
</span><br>
<span class="quotelev2">&gt;&gt; adapted settings ;-) The very same settings applied to 1.2.5 and 1.2.6 
</span><br>
<span class="quotelev2">&gt;&gt; does not produce any problems in the past.
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6449.php">Jeff Squyres: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<li><strong>Previous message:</strong> <a href="6447.php">Rolf Vandevaart: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<li><strong>In reply to:</strong> <a href="6447.php">Rolf Vandevaart: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6450.php">Jeff Squyres: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
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
