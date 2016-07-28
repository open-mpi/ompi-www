<?
$subject_val = "Re: [OMPI users] libnuma under ompi 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 10:32:08 2009" -->
<!-- isoreceived="20090304153208" -->
<!-- sent="Wed, 04 Mar 2009 10:32:03 -0500" -->
<!-- isosent="20090304153203" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libnuma under ompi 1.3" -->
<!-- id="49AE9EF3.6040505_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1236135631.5834.123.camel_at_rscpc28.anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] libnuma under ompi 1.3<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-04 10:32:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8285.php">Prentice Bisbal: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>Previous message:</strong> <a href="8283.php">Jeff Squyres: "Re: [OMPI users] Lahey 64 bit and openmpi 1.3?"</a>
<li><strong>In reply to:</strong> <a href="8275.php">Terry Frankcombe: "[OMPI users] libnuma under ompi 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8304.php">Terry Frankcombe: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>Reply:</strong> <a href="8304.php">Terry Frankcombe: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry Frankcombe wrote:
<br>
<span class="quotelev1">&gt; Having just downloaded and installed Open MPI 1.3 with ifort and gcc, I
</span><br>
<span class="quotelev1">&gt; merrily went off to compile my application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my final link with mpif90 I get the error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: cannot find -lnuma
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Adding --showme reveals that
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -I/home/terry/bin/Local/include -pthread -I/home/terry/bin/Local/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is added to the compile early in the aggregated ifort command, and 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -L/home/terry/bin/Local/lib -lmpi_f90 -lmpi_f77 -lmpi -lopen-rte
</span><br>
<span class="quotelev1">&gt; -lopen-pal -lpbs -lnuma -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is added to the end.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I note than when compiling Open MPI -lnuma was visible in the gcc
</span><br>
<span class="quotelev1">&gt; arguments, with no added -L.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On this system libnuma.so exists in /usr/lib64.  My (somewhat long!)
</span><br>
<span class="quotelev1">&gt; configure command was
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --enable-static --disable-shared
</span><br>
<span class="quotelev1">&gt; --prefix=/home/terry/bin/Local --enable-picky --disable-heterogeneous
</span><br>
<span class="quotelev1">&gt; --without-slurm --without-alps --without-xgrid --without-sge
</span><br>
<span class="quotelev1">&gt; --without-loadleveler --without-lsf F77=ifort
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should mpif90 have bundled a -L/usr/lib64 in there somewhere?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Terry
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I had the same exact problem with my PGI compilers, (no problems
<br>
reported yet with my intel compilers). I have a fix for you.
<br>
<p>You would think that the compiler would automatically look in
<br>
/usr/lib64, since that's one of the system's default lib directories,
<br>
but the PGI compilers don't for some reason.
<br>
<p>A quick fix is to do
<br>
<p>OMPI_LDFLAGS=&quot;-L/usr/lib64&quot;
<br>
<p>or
<br>
<p>OMPI_MPIF90_LDFLAGS=&quot;-L/usr/lib64&quot;
<br>
<p>A more permanent fix is to edit
<br>
INSTALL_DIR/share/openmpi/mpif90-wrapper-data.txt
<br>
<p>and change
<br>
<p>linker_flags=
<br>
<p>to
<br>
<p>linker_flags=-L/usr/lib64
<br>
<p>In my case, I also had to add the OpenMPI lib directory for the PGI
<br>
compilers, too. You may or may not need to add them, too:
<br>
<p>linker_flags=-L/usr/lib64 -L/usr/local/openmpi/pgi/x86_64/lib
<br>
<p>You may want to test all your compilers and makea similar change to all
<br>
your *wrapper-data.txt files
<br>
<p>Not sure if this is a problem with the compilers not picking up the
<br>
system's lib dirs, or an OpenMPI configuration/build problem.
<br>
<p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8285.php">Prentice Bisbal: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>Previous message:</strong> <a href="8283.php">Jeff Squyres: "Re: [OMPI users] Lahey 64 bit and openmpi 1.3?"</a>
<li><strong>In reply to:</strong> <a href="8275.php">Terry Frankcombe: "[OMPI users] libnuma under ompi 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8304.php">Terry Frankcombe: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>Reply:</strong> <a href="8304.php">Terry Frankcombe: "Re: [OMPI users] libnuma under ompi 1.3"</a>
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
