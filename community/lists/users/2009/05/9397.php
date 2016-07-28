<?
$subject_val = "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 16:14:49 2009" -->
<!-- isoreceived="20090519201449" -->
<!-- sent="Tue, 19 May 2009 16:14:44 -0400" -->
<!-- isosent="20090519201444" -->
<!-- name="John Boccio" -->
<!-- email="boccio_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile" -->
<!-- id="D0DB349F-AA80-4480-81B4-C99BB5E78A63_at_swarthmore.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E01E0A74-25E3-4938-BE67-75FA81EF5CC3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile<br>
<strong>From:</strong> John Boccio (<em>boccio_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-19 16:14:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9398.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9396.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>In reply to:</strong> <a href="9395.php">Jeff Squyres: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a million Jeff. That last email did the trick.
<br>
<p>It has now compiled with Fortran bindings.
<br>
<p>John Boccio
<br>
On May 19, 2009, at 2:37 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 19, 2009, at 2:07 PM, John Boccio wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tired the whole thing again from scratch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is g95 and xcode info.
</span><br>
<span class="quotelev2">&gt;&gt; Using openmpi-1.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any reason you're not using 1.3.2?  (the latest release)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sudo ./configure --enable-mpi-f77 --enable-mpi-f90 F77=&quot;/usr/bin/g95&quot;
</span><br>
<span class="quotelev2">&gt;&gt; FC=&quot;/usr/bin/g95&quot; &gt; config.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sudo make clean
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sudo make clean prefix=/usr/local/openmpi-1.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sudo make &gt; make.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, as long as you have filesystem write permissions, you don't  
</span><br>
<span class="quotelev1">&gt; need sudo for the above steps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sudo make install prefix=/usr/local/openmpi-1.3 &gt; make-install.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to be complete: you might need sudo here because normal users  
</span><br>
<span class="quotelev1">&gt; don't usually have write permissions to /usr/local.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi-1.3/bin/mpif90
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev2">&gt;&gt; Fortran 90 support.  As such, the mpif90 compiler is non-functional.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;                                                                                                                                                        ****** NEW 
</span><br>
<span class="quotelev2">&gt;&gt;  *******
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi-1.3/bin/ompi_info
</span><br>
<span class="quotelev2">&gt;&gt; dyld: Symbol not found: _opal_memchecker_base_components_opened
</span><br>
<span class="quotelev2">&gt;&gt;   Referenced from: /usr/local/openmpi-1.3/bin/./ompi_info
</span><br>
<span class="quotelev2">&gt;&gt;   Expected in: /usr/lib/libopen-pal.0.dylib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Set your LD_LIBRARY_PATH to /usr/local/openmpi-1.3/lib; this will  
</span><br>
<span class="quotelev1">&gt; make it look there *first* (before /usr/lib), and therefore find the  
</span><br>
<span class="quotelev1">&gt; &quot;right&quot; libopen-pal.*.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...ah, looking closer, I see the problem.  You're specifying  
</span><br>
<span class="quotelev1">&gt; prefix=&lt;foo&gt; to &quot;make&quot;, not &quot;configure&quot;.  You should be doing the  
</span><br>
<span class="quotelev1">&gt; following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; rm -rf openmpi-1.3
</span><br>
<span class="quotelev1">&gt; tar zxf openmpi-1.3.2
</span><br>
<span class="quotelev1">&gt; cd openmpi-1.3.2
</span><br>
<span class="quotelev1">&gt; ./configure --enable-mpi-f77 --enable-mpi-f90 --prefix=/usr/local/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.2 \
</span><br>
<span class="quotelev1">&gt;    F77=/usr/bin/g95 FC=/usr/bin/g95 2&gt;&amp;1 &gt; config.out
</span><br>
<span class="quotelev1">&gt; make -j 4 2&gt;&amp;1 &gt; make.out
</span><br>
<span class="quotelev1">&gt; sudo make install 2&gt;&amp;1 &gt; make-install.out
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you specify &quot;prefix=&lt;foo&gt;&quot; to &quot;make install&quot;, it'll actually  
</span><br>
<span class="quotelev1">&gt; install to the &lt;foo&gt; free, but the compiled-in default location from  
</span><br>
<span class="quotelev1">&gt; configure (i.e., defaulting to /usr/local, not &lt;foo&gt;) will be  
</span><br>
<span class="quotelev1">&gt; wrong.  Bad things will happen from there (e.g., finding the wrong  
</span><br>
<span class="quotelev1">&gt; shared libraries, thinking it doesn't have Fortran support, etc.).
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9398.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9396.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>In reply to:</strong> <a href="9395.php">Jeff Squyres: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
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
