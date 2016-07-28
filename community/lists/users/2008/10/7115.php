<?
$subject_val = "Re: [OMPI users] Fwd: Problems installing in Cygwin";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 09:06:50 2008" -->
<!-- isoreceived="20081028130650" -->
<!-- sent="Tue, 28 Oct 2008 09:06:40 -0400" -->
<!-- isosent="20081028130640" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Problems installing in Cygwin" -->
<!-- id="D16405B3-70C7-402A-9551-AA1F847C7D96_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="91D05372-3E4E-4059-8950-D74C2438CEF5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: Problems installing in Cygwin<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-28 09:06:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7116.php">Gabriele Fatigati: "[OMPI users] C++ Exceptions"</a>
<li><strong>Previous message:</strong> <a href="7114.php">Julien Devriendt: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
<li><strong>In reply to:</strong> <a href="7103.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7117.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7117.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is complaining about a missing file. This is a file from the Open  
<br>
MPI distribution, I wonder how it can be missing. Can you verify that  
<br>
the file opal/mca/timer/windows/timer_windows_component.h is there ?
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p><p>On Oct 27, 2008, at 4:52 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Sorry for the lack of reply; several of us were at the MPI Forum  
</span><br>
<span class="quotelev1">&gt; meeting last week, and although I can't speak for everyone else, I  
</span><br>
<span class="quotelev1">&gt; know that I always fall [way] behind on e-mail when I travel.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The windows port is very much a work-in-progress.  I'm not surprised  
</span><br>
<span class="quotelev1">&gt; that it doesn't work.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The good folks at U. Stuttgart/HLRS are actively working on a real  
</span><br>
<span class="quotelev1">&gt; Windows port, but it's off in a side-branch right now.  I don't know  
</span><br>
<span class="quotelev1">&gt; the exact status of this port -- George / Rainer / Shiqing, can you  
</span><br>
<span class="quotelev1">&gt; comment?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 22, 2008, at 9:54 AM, Gustavo Seabra wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (Sorry if you already got this message befor, but since I didn't get
</span><br>
<span class="quotelev2">&gt;&gt; any answer, I'm assuming it didn't get through to the list.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to install OpenMPI in Cygwin. from a cygwin bash shell, I
</span><br>
<span class="quotelev2">&gt;&gt; configured OpenMPI with the command below:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ echo $MPI_HOME
</span><br>
<span class="quotelev2">&gt;&gt; /home/seabra/local/openmpi-1.2.7
</span><br>
<span class="quotelev2">&gt;&gt; $ ./configure --prefix=$MPI_HOME \
</span><br>
<span class="quotelev2">&gt;&gt;           --with-mpi-param_check=always \
</span><br>
<span class="quotelev2">&gt;&gt;           --with-threads=posix \
</span><br>
<span class="quotelev2">&gt;&gt;           --enable-mpi-threads \
</span><br>
<span class="quotelev2">&gt;&gt;           --disable-io-romio \
</span><br>
<span class="quotelev2">&gt;&gt;           FC=&quot;g95&quot; FFLAGS=&quot;-O0  -fno-second-underscore&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;           CXX=&quot;g++&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The configuration *seems* to be OK (it finishes with: &quot;configure:  
</span><br>
<span class="quotelev2">&gt;&gt; exit
</span><br>
<span class="quotelev2">&gt;&gt; 0&quot;). However, when I try to install it, the installation finishes  
</span><br>
<span class="quotelev2">&gt;&gt; with
</span><br>
<span class="quotelev2">&gt;&gt; the error below. I wonder if anyone here could help me figure out  
</span><br>
<span class="quotelev2">&gt;&gt; what
</span><br>
<span class="quotelev2">&gt;&gt; is going wrong.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks a lot!
</span><br>
<span class="quotelev2">&gt;&gt; Gustavo.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==============================
</span><br>
<span class="quotelev2">&gt;&gt; $ make clean
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt; $ make install
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt; Making install in mca/timer/windows
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; `/home/seabra/local/openmpi-1.2.7/opal/mca/timer/windows'
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo timer_windows_component.lo | sed 's|[^/]*$|.deps/&amp;|;s| 
</span><br>
<span class="quotelev2">&gt;&gt; \.lo$||'`;\
</span><br>
<span class="quotelev2">&gt;&gt;       /bin/sh ../../../../libtool --tag=CC   --mode=compile gcc
</span><br>
<span class="quotelev2">&gt;&gt; -DHAVE_CONFIG_H -I. -I../../../../opal/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../../orte/include -I../../../../ompi/include   -I../../../..
</span><br>
<span class="quotelev2">&gt;&gt; -D_REENTRANT  -O3 -DNDEBUG -finline-functions -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -MT timer_windows_component.lo -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; timer_windows_component.lo timer_windows_component.c &amp;&amp;\
</span><br>
<span class="quotelev2">&gt;&gt;       mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../../orte/include -I../../../../ompi/include -I../../../..
</span><br>
<span class="quotelev2">&gt;&gt; -D_REENTRANT -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -MT
</span><br>
<span class="quotelev2">&gt;&gt; timer_windows_component.lo -MD -MP -MF
</span><br>
<span class="quotelev2">&gt;&gt; .deps/timer_windows_component.Tpo -c timer_windows_component.c
</span><br>
<span class="quotelev2">&gt;&gt; -DDLL_EXPORT -DPIC -o .libs/timer_windows_component.o
</span><br>
<span class="quotelev2">&gt;&gt; timer_windows_component.c:22:60:
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/timer/windows/timer_windows_component.h: No such file or
</span><br>
<span class="quotelev2">&gt;&gt; directory
</span><br>
<span class="quotelev2">&gt;&gt; timer_windows_component.c:25: error: parse error before
</span><br>
<span class="quotelev2">&gt;&gt; &quot;opal_timer_windows_freq&quot;
</span><br>
<span class="quotelev2">&gt;&gt; timer_windows_component.c:25: warning: data definition has no type or
</span><br>
<span class="quotelev2">&gt;&gt; storage class
</span><br>
<span class="quotelev2">&gt;&gt; timer_windows_component.c:26: error: parse error before
</span><br>
<span class="quotelev2">&gt;&gt; &quot;opal_timer_windows_start&quot;
</span><br>
<span class="quotelev2">&gt;&gt; timer_windows_component.c:26: warning: data definition has no type or
</span><br>
<span class="quotelev2">&gt;&gt; storage class
</span><br>
<span class="quotelev2">&gt;&gt; timer_windows_component.c: In function `opal_timer_windows_open':
</span><br>
<span class="quotelev2">&gt;&gt; timer_windows_component.c:60: error: `LARGE_INTEGER' undeclared  
</span><br>
<span class="quotelev2">&gt;&gt; (first
</span><br>
<span class="quotelev2">&gt;&gt; use in this function)
</span><br>
<span class="quotelev2">&gt;&gt; timer_windows_component.c:60: error: (Each undeclared identifier is
</span><br>
<span class="quotelev2">&gt;&gt; reported only once
</span><br>
<span class="quotelev2">&gt;&gt; timer_windows_component.c:60: error: for each function it appears  
</span><br>
<span class="quotelev2">&gt;&gt; in.)
</span><br>
<span class="quotelev2">&gt;&gt; timer_windows_component.c:60: error: parse error before &quot;now&quot;
</span><br>
<span class="quotelev2">&gt;&gt; timer_windows_component.c:62: error: `now' undeclared (first use in
</span><br>
<span class="quotelev2">&gt;&gt; this function)
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [timer_windows_component.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/home/seabra/local/openmpi-1.2.7/opal/mca/timer/windows'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/home/seabra/local/openmpi-1.2.7/opal'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [install-recursive] Error 1
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7115/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7116.php">Gabriele Fatigati: "[OMPI users] C++ Exceptions"</a>
<li><strong>Previous message:</strong> <a href="7114.php">Julien Devriendt: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
<li><strong>In reply to:</strong> <a href="7103.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7117.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7117.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
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
