<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Mar 18 07:23:43 2007" -->
<!-- isoreceived="20070318112343" -->
<!-- sent="Sun, 18 Mar 2007 07:23:35 -0400" -->
<!-- isosent="20070318112335" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9" -->
<!-- id="1925D196-7DBD-4B48-8347-A888E5C3E9EE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="82367DB0-EBC6-4438-BBC2-D7896318633E_at_physics.aamu.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-18 07:23:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2825.php">David Bronke: "Re: [OMPI users] Signal 13"</a>
<li><strong>Previous message:</strong> <a href="2823.php">Bala: "[OMPI users] orted takes 100 percent cpu, how to avoid this??"</a>
<li><strong>In reply to:</strong> <a href="2819.php">Marius Schamschula: "[OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2842.php">Brian Barrett: "Re: [OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Whoops -- looks like we're missing an #include statement (we do all  
<br>
of our testing on OS X 10.4, not 10.3).
<br>
<p>I'm not sure offhand which 10.3 #include file provides the definition  
<br>
for &quot;struct iovec&quot; -- can you try adding a few #includes to the top  
<br>
of the file (e.g., &lt;stdio.h&gt;) and let us know which one fixes the  
<br>
problem?
<br>
<p>Thanks.
<br>
<p><p><p>On Mar 16, 2007, at 7:42 PM, Marius Schamschula wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was building open-mpi 1.2 on my G4 running Mac OS X 10.3.9 and  
</span><br>
<span class="quotelev1">&gt; had a build failure with the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; depbase=`echo runtime/ompi_mpi_preconnect.lo | sed 's|[^/]*$|.deps/ 
</span><br>
<span class="quotelev1">&gt; &amp;|;s|\.lo$||'`; \
</span><br>
<span class="quotelev1">&gt; if /bin/sh ../libtool --tag=CC --mode=compile gcc -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev1">&gt; I. -I. -I../opal/include -I../orte/include -I../ompi/include -I../ 
</span><br>
<span class="quotelev1">&gt; ompi/include   -I..  -D_REENTRANT  -O3 -DNDEBUG -finline-functions - 
</span><br>
<span class="quotelev1">&gt; fno-strict-aliasing  -MT runtime/ompi_mpi_preconnect.lo -MD -MP -MF  
</span><br>
<span class="quotelev1">&gt; &quot;$depbase.Tpo&quot; -c -o runtime/ompi_mpi_preconnect.lo runtime/ 
</span><br>
<span class="quotelev1">&gt; ompi_mpi_preconnect.c; \
</span><br>
<span class="quotelev1">&gt; then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f  
</span><br>
<span class="quotelev1">&gt; &quot;$depbase.Tpo&quot;; exit 1; fi
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I. -I../opal/include - 
</span><br>
<span class="quotelev1">&gt; I../orte/include -I../ompi/include -I../ompi/include -I.. - 
</span><br>
<span class="quotelev1">&gt; D_REENTRANT -O3 -DNDEBUG -finline-functions -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; MT runtime/ompi_mpi_preconnect.lo -MD -MP -MF runtime/.deps/ 
</span><br>
<span class="quotelev1">&gt; ompi_mpi_preconnect.Tpo -c runtime/ompi_mpi_preconnect.c  -fno- 
</span><br>
<span class="quotelev1">&gt; common -DPIC -o runtime/.libs/ompi_mpi_preconnect.o
</span><br>
<span class="quotelev1">&gt; runtime/ompi_mpi_preconnect.c: In function  
</span><br>
<span class="quotelev1">&gt; `ompi_init_do_oob_preconnect':
</span><br>
<span class="quotelev1">&gt; runtime/ompi_mpi_preconnect.c:74: error: storage size of `msg'  
</span><br>
<span class="quotelev1">&gt; isn't known
</span><br>
<span class="quotelev1">&gt; make[2]: *** [runtime/ompi_mpi_preconnect.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ gcc -v
</span><br>
<span class="quotelev1">&gt; Reading specs from /usr/libexec/gcc/darwin/ppc/3.3/specs
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 3.3 20030304 (Apple Computer, Inc. build 1495)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ g77 -v
</span><br>
<span class="quotelev1">&gt; Reading specs from /usr/local/lib/gcc/powerpc-apple- 
</span><br>
<span class="quotelev1">&gt; darwin7.3.0/3.5.0/specs
</span><br>
<span class="quotelev1">&gt; Configured with: ../gcc/configure --enable-threads=posix --enable- 
</span><br>
<span class="quotelev1">&gt; languages=f77
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 3.5.0 20040429 (experimental)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (g77 from hpc.sf.net)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note: I had no such problem under Mac OS X 10.4.9 with my ppc and  
</span><br>
<span class="quotelev1">&gt; x86 builds. However, I did notice that the configure script did not  
</span><br>
<span class="quotelev1">&gt; detect g95 from g95.org correctly:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** Fortran 90/95 compiler
</span><br>
<span class="quotelev1">&gt; checking for gfortran... no
</span><br>
<span class="quotelev1">&gt; checking for f95... no
</span><br>
<span class="quotelev1">&gt; checking for fort... no
</span><br>
<span class="quotelev1">&gt; checking for xlf95... no
</span><br>
<span class="quotelev1">&gt; checking for ifort... no
</span><br>
<span class="quotelev1">&gt; checking for ifc... no
</span><br>
<span class="quotelev1">&gt; checking for efc... no
</span><br>
<span class="quotelev1">&gt; checking for pgf95... no
</span><br>
<span class="quotelev1">&gt; checking for lf95... no
</span><br>
<span class="quotelev1">&gt; checking for f90... no
</span><br>
<span class="quotelev1">&gt; checking for xlf90... no
</span><br>
<span class="quotelev1">&gt; checking for pgf90... no
</span><br>
<span class="quotelev1">&gt; checking for epcf90... no
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU Fortran compiler... no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure --help doesn't give any hint about specifying F95.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIA,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Marius
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Marius Schamschula,  Alabama A &amp; M University, Department of Physics
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The Center for Hydrology Soil Climatology and Remote Sensing
</span><br>
<span class="quotelev1">&gt;    <a href="http://optics.physics.aamu.edu/">http://optics.physics.aamu.edu/</a> - <a href="http://www.physics.aamu.edu/">http://www.physics.aamu.edu/</a>
</span><br>
<span class="quotelev1">&gt;           <a href="http://wx.aamu.edu/">http://wx.aamu.edu/</a> - <a href="http://www.aamu.edu/hscars/">http://www.aamu.edu/hscars/</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2825.php">David Bronke: "Re: [OMPI users] Signal 13"</a>
<li><strong>Previous message:</strong> <a href="2823.php">Bala: "[OMPI users] orted takes 100 percent cpu, how to avoid this??"</a>
<li><strong>In reply to:</strong> <a href="2819.php">Marius Schamschula: "[OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2842.php">Brian Barrett: "Re: [OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9"</a>
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
