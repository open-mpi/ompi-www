<?
$subject_val = "Re: [OMPI users] Fwd: Problems installing in Cygwin";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 16:52:22 2008" -->
<!-- isoreceived="20081027205222" -->
<!-- sent="Mon, 27 Oct 2008 16:52:15 -0400" -->
<!-- isosent="20081027205215" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Problems installing in Cygwin" -->
<!-- id="91D05372-3E4E-4059-8950-D74C2438CEF5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f79359b60810220654v28887009q6b58906ff713d0c_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-27 16:52:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7104.php">Lenny Verkhovsky: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Previous message:</strong> <a href="7102.php">Jeff Squyres: "Re: [OMPI users] ADIOI_GEN_DELETE"</a>
<li><strong>In reply to:</strong> <a href="7073.php">Gustavo Seabra: "[OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7115.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7115.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7124.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the lack of reply; several of us were at the MPI Forum  
<br>
meeting last week, and although I can't speak for everyone else, I  
<br>
know that I always fall [way] behind on e-mail when I travel.  :-\
<br>
<p>The windows port is very much a work-in-progress.  I'm not surprised  
<br>
that it doesn't work.  :-\
<br>
<p>The good folks at U. Stuttgart/HLRS are actively working on a real  
<br>
Windows port, but it's off in a side-branch right now.  I don't know  
<br>
the exact status of this port -- George / Rainer / Shiqing, can you  
<br>
comment?
<br>
<p><p>On Oct 22, 2008, at 9:54 AM, Gustavo Seabra wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (Sorry if you already got this message befor, but since I didn't get
</span><br>
<span class="quotelev1">&gt; any answer, I'm assuming it didn't get through to the list.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to install OpenMPI in Cygwin. from a cygwin bash shell, I
</span><br>
<span class="quotelev1">&gt; configured OpenMPI with the command below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ echo $MPI_HOME
</span><br>
<span class="quotelev1">&gt; /home/seabra/local/openmpi-1.2.7
</span><br>
<span class="quotelev1">&gt; $ ./configure --prefix=$MPI_HOME \
</span><br>
<span class="quotelev1">&gt;            --with-mpi-param_check=always \
</span><br>
<span class="quotelev1">&gt;            --with-threads=posix \
</span><br>
<span class="quotelev1">&gt;            --enable-mpi-threads \
</span><br>
<span class="quotelev1">&gt;            --disable-io-romio \
</span><br>
<span class="quotelev1">&gt;            FC=&quot;g95&quot; FFLAGS=&quot;-O0  -fno-second-underscore&quot; \
</span><br>
<span class="quotelev1">&gt;            CXX=&quot;g++&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The configuration *seems* to be OK (it finishes with: &quot;configure: exit
</span><br>
<span class="quotelev1">&gt; 0&quot;). However, when I try to install it, the installation finishes with
</span><br>
<span class="quotelev1">&gt; the error below. I wonder if anyone here could help me figure out what
</span><br>
<span class="quotelev1">&gt; is going wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot!
</span><br>
<span class="quotelev1">&gt; Gustavo.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==============================
</span><br>
<span class="quotelev1">&gt; $ make clean
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; $ make install
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; Making install in mca/timer/windows
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/home/seabra/local/openmpi-1.2.7/opal/mca/timer/windows'
</span><br>
<span class="quotelev1">&gt; depbase=`echo timer_windows_component.lo | sed 's|[^/]*$|.deps/&amp;|;s| 
</span><br>
<span class="quotelev1">&gt; \.lo$||'`;\
</span><br>
<span class="quotelev1">&gt;        /bin/sh ../../../../libtool --tag=CC   --mode=compile gcc
</span><br>
<span class="quotelev1">&gt; -DHAVE_CONFIG_H -I. -I../../../../opal/include
</span><br>
<span class="quotelev1">&gt; -I../../../../orte/include -I../../../../ompi/include   -I../../../..
</span><br>
<span class="quotelev1">&gt; -D_REENTRANT  -O3 -DNDEBUG -finline-functions -fno-strict-aliasing
</span><br>
<span class="quotelev1">&gt; -MT timer_windows_component.lo -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev1">&gt; timer_windows_component.lo timer_windows_component.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt;        mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include
</span><br>
<span class="quotelev1">&gt; -I../../../../orte/include -I../../../../ompi/include -I../../../..
</span><br>
<span class="quotelev1">&gt; -D_REENTRANT -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -MT
</span><br>
<span class="quotelev1">&gt; timer_windows_component.lo -MD -MP -MF
</span><br>
<span class="quotelev1">&gt; .deps/timer_windows_component.Tpo -c timer_windows_component.c
</span><br>
<span class="quotelev1">&gt; -DDLL_EXPORT -DPIC -o .libs/timer_windows_component.o
</span><br>
<span class="quotelev1">&gt; timer_windows_component.c:22:60:
</span><br>
<span class="quotelev1">&gt; opal/mca/timer/windows/timer_windows_component.h: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; timer_windows_component.c:25: error: parse error before
</span><br>
<span class="quotelev1">&gt; &quot;opal_timer_windows_freq&quot;
</span><br>
<span class="quotelev1">&gt; timer_windows_component.c:25: warning: data definition has no type or
</span><br>
<span class="quotelev1">&gt; storage class
</span><br>
<span class="quotelev1">&gt; timer_windows_component.c:26: error: parse error before
</span><br>
<span class="quotelev1">&gt; &quot;opal_timer_windows_start&quot;
</span><br>
<span class="quotelev1">&gt; timer_windows_component.c:26: warning: data definition has no type or
</span><br>
<span class="quotelev1">&gt; storage class
</span><br>
<span class="quotelev1">&gt; timer_windows_component.c: In function `opal_timer_windows_open':
</span><br>
<span class="quotelev1">&gt; timer_windows_component.c:60: error: `LARGE_INTEGER' undeclared (first
</span><br>
<span class="quotelev1">&gt; use in this function)
</span><br>
<span class="quotelev1">&gt; timer_windows_component.c:60: error: (Each undeclared identifier is
</span><br>
<span class="quotelev1">&gt; reported only once
</span><br>
<span class="quotelev1">&gt; timer_windows_component.c:60: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; timer_windows_component.c:60: error: parse error before &quot;now&quot;
</span><br>
<span class="quotelev1">&gt; timer_windows_component.c:62: error: `now' undeclared (first use in
</span><br>
<span class="quotelev1">&gt; this function)
</span><br>
<span class="quotelev1">&gt; make[2]: *** [timer_windows_component.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/seabra/local/openmpi-1.2.7/opal/mca/timer/windows'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/seabra/local/openmpi-1.2.7/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [install-recursive] Error 1
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7104.php">Lenny Verkhovsky: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Previous message:</strong> <a href="7102.php">Jeff Squyres: "Re: [OMPI users] ADIOI_GEN_DELETE"</a>
<li><strong>In reply to:</strong> <a href="7073.php">Gustavo Seabra: "[OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7115.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7115.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7124.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
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
