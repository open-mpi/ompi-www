<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 20 05:58:24 2007" -->
<!-- isoreceived="20070620095824" -->
<!-- sent="Wed, 20 Jun 2007 11:58:19 +0200" -->
<!-- isosent="20070620095819" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error -- libtool unsupported hardcode properties" -->
<!-- id="1182333499.29096.85.camel_at_fkpc167.phc.chalmers.se" -->
<!-- inreplyto="129BF926-1E0F-4196-B5B0-F2F37244877C_at_cisco.com" -->
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
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-20 05:58:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3513.php">Jeff Squyres: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
<li><strong>Previous message:</strong> <a href="3511.php">Marcin Skoczylas: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>In reply to:</strong> <a href="3509.php">Jeff Squyres: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3513.php">Jeff Squyres: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
<li><strong>Reply:</strong> <a href="3513.php">Jeff Squyres: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Isn't this another case of trying to use two different Fortran compilers
<br>
at the same time?
<br>
<p><p>On Tue, 2007-06-19 at 20:04 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I have not seen this before -- did you look in the libtool  
</span><br>
<span class="quotelev1">&gt; documentation?  (&quot;See the libtool documentation for more information.&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 19, 2007, at 6:46 PM, Andrew Friedley wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm trying to build Open MPI v1.2.2 with gcc/g++/g77 3.4.4 and  
</span><br>
<span class="quotelev2">&gt; &gt; pathf90 v2.4 on a linux system, and see this error when compiling  
</span><br>
<span class="quotelev2">&gt; &gt; ompi_info:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /bin/sh ../../../libtool --tag=CXX --mode=link g++  -g -O2 -finline- 
</span><br>
<span class="quotelev2">&gt; &gt; functions -pthread  -export-dynamic   -o ompi_info components.o  
</span><br>
<span class="quotelev2">&gt; &gt; ompi_info.o output.o param.o version.o ../../../ompi/libmpi.la - 
</span><br>
<span class="quotelev2">&gt; &gt; lnsl -lutil  -lm
</span><br>
<span class="quotelev2">&gt; &gt; libtool: link: unsupported hardcode properties
</span><br>
<span class="quotelev2">&gt; &gt; libtool: link: See the libtool documentation for more information.
</span><br>
<span class="quotelev2">&gt; &gt; libtool: link: Fatal configuration error.
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [ompi_info] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Leaving directory `/g/g21/afriedle/work/ompibuild/ 
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.2.2/ompi/tools/ompi_info'
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Google didn't turn anything up.  Strange thing is, gcc 3.4.5 works  
</span><br>
<span class="quotelev2">&gt; &gt; just fine on this system.  I'm using this to build:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; export CC=gcc
</span><br>
<span class="quotelev2">&gt; &gt; export CXX=g++
</span><br>
<span class="quotelev2">&gt; &gt; export F77=g77
</span><br>
<span class="quotelev2">&gt; &gt; export FC=pathf90
</span><br>
<span class="quotelev2">&gt; &gt; export CFLAGS=&quot;-g -O2&quot;
</span><br>
<span class="quotelev2">&gt; &gt; export CXXFLAGS=&quot;-g -O2&quot;
</span><br>
<span class="quotelev2">&gt; &gt; export FFLAGS=&quot;-fno-second-underscore -g -O2&quot;
</span><br>
<span class="quotelev2">&gt; &gt; export FCFLAGS=&quot;-fno-second-underscore -g -O2&quot;
</span><br>
<span class="quotelev2">&gt; &gt; export PREFIX=$ROOT/gnudbg
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=$PREFIX --enable-debug --enable-mpi-f77 -- 
</span><br>
<span class="quotelev2">&gt; &gt; enable-mpi-f90 --with-openib=/usr
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've attached the config.log.. any ideas?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Andrew
</span><br>
<span class="quotelev2">&gt; &gt; &lt;config.log.bz2&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;mime-attachment.txt&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3513.php">Jeff Squyres: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
<li><strong>Previous message:</strong> <a href="3511.php">Marcin Skoczylas: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>In reply to:</strong> <a href="3509.php">Jeff Squyres: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3513.php">Jeff Squyres: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
<li><strong>Reply:</strong> <a href="3513.php">Jeff Squyres: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
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
