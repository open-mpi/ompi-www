<?
$subject_val = "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 14:37:41 2009" -->
<!-- isoreceived="20090519183741" -->
<!-- sent="Tue, 19 May 2009 14:37:35 -0400" -->
<!-- isosent="20090519183735" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile" -->
<!-- id="E01E0A74-25E3-4938-BE67-75FA81EF5CC3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6730142D-2731-45EC-98B6-03D6D88DE09B_at_swarthmore.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-19 14:37:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9396.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Previous message:</strong> <a href="9394.php">John Boccio: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>In reply to:</strong> <a href="9394.php">John Boccio: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9397.php">John Boccio: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>Reply:</strong> <a href="9397.php">John Boccio: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 19, 2009, at 2:07 PM, John Boccio wrote:
<br>
<p><span class="quotelev1">&gt; I tired the whole thing again from scratch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is g95 and xcode info.
</span><br>
<span class="quotelev1">&gt; Using openmpi-1.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Any reason you're not using 1.3.2?  (the latest release)
<br>
<p><span class="quotelev1">&gt; sudo ./configure --enable-mpi-f77 --enable-mpi-f90 F77=&quot;/usr/bin/g95&quot;
</span><br>
<span class="quotelev1">&gt; FC=&quot;/usr/bin/g95&quot; &gt; config.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sudo make clean
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sudo make clean prefix=/usr/local/openmpi-1.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sudo make &gt; make.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>FWIW, as long as you have filesystem write permissions, you don't need  
<br>
sudo for the above steps.
<br>
<p><span class="quotelev1">&gt; sudo make install prefix=/usr/local/openmpi-1.3 &gt; make-install.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Just to be complete: you might need sudo here because normal users  
<br>
don't usually have write permissions to /usr/local.
<br>
<p><span class="quotelev1">&gt; /usr/local/openmpi-1.3/bin/mpif90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev1">&gt; Fortran 90 support.  As such, the mpif90 compiler is non-functional.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                                                                                                                                                         ****** NEW 
</span><br>
<span class="quotelev1">&gt;  *******
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3/bin/ompi_info
</span><br>
<span class="quotelev1">&gt; dyld: Symbol not found: _opal_memchecker_base_components_opened
</span><br>
<span class="quotelev1">&gt;    Referenced from: /usr/local/openmpi-1.3/bin/./ompi_info
</span><br>
<span class="quotelev1">&gt;    Expected in: /usr/lib/libopen-pal.0.dylib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Set your LD_LIBRARY_PATH to /usr/local/openmpi-1.3/lib; this will make  
<br>
it look there *first* (before /usr/lib), and therefore find the  
<br>
&quot;right&quot; libopen-pal.*.
<br>
<p>...ah, looking closer, I see the problem.  You're specifying  
<br>
prefix=&lt;foo&gt; to &quot;make&quot;, not &quot;configure&quot;.  You should be doing the  
<br>
following:
<br>
<p>-----
<br>
rm -rf openmpi-1.3
<br>
tar zxf openmpi-1.3.2
<br>
cd openmpi-1.3.2
<br>
./configure --enable-mpi-f77 --enable-mpi-f90 --prefix=/usr/local/ 
<br>
openmpi-1.3.2 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;F77=/usr/bin/g95 FC=/usr/bin/g95 2&gt;&amp;1 &gt; config.out
<br>
make -j 4 2&gt;&amp;1 &gt; make.out
<br>
sudo make install 2&gt;&amp;1 &gt; make-install.out
<br>
-----
<br>
<p><p>If you specify &quot;prefix=&lt;foo&gt;&quot; to &quot;make install&quot;, it'll actually  
<br>
install to the &lt;foo&gt; free, but the compiled-in default location from  
<br>
configure (i.e., defaulting to /usr/local, not &lt;foo&gt;) will be wrong.   
<br>
Bad things will happen from there (e.g., finding the wrong shared  
<br>
libraries, thinking it doesn't have Fortran support, etc.).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9396.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Previous message:</strong> <a href="9394.php">John Boccio: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>In reply to:</strong> <a href="9394.php">John Boccio: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9397.php">John Boccio: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>Reply:</strong> <a href="9397.php">John Boccio: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
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
