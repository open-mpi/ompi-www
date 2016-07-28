<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 19 20:04:27 2007" -->
<!-- isoreceived="20070620000427" -->
<!-- sent="Tue, 19 Jun 2007 20:04:02 -0400" -->
<!-- isosent="20070620000402" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error -- libtool unsupported hardcode properties" -->
<!-- id="129BF926-1E0F-4196-B5B0-F2F37244877C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46785CDD.7000906_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-06-19 20:04:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3510.php">Gleb Natapov: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="3508.php">Andrew Friedley: "[OMPI users] error -- libtool unsupported hardcode properties"</a>
<li><strong>In reply to:</strong> <a href="3508.php">Andrew Friedley: "[OMPI users] error -- libtool unsupported hardcode properties"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3512.php">Terry Frankcombe: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
<li><strong>Reply:</strong> <a href="3512.php">Terry Frankcombe: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have not seen this before -- did you look in the libtool  
<br>
documentation?  (&quot;See the libtool documentation for more information.&quot;)
<br>
<p>On Jun 19, 2007, at 6:46 PM, Andrew Friedley wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to build Open MPI v1.2.2 with gcc/g++/g77 3.4.4 and  
</span><br>
<span class="quotelev1">&gt; pathf90 v2.4 on a linux system, and see this error when compiling  
</span><br>
<span class="quotelev1">&gt; ompi_info:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CXX --mode=link g++  -g -O2 -finline- 
</span><br>
<span class="quotelev1">&gt; functions -pthread  -export-dynamic   -o ompi_info components.o  
</span><br>
<span class="quotelev1">&gt; ompi_info.o output.o param.o version.o ../../../ompi/libmpi.la - 
</span><br>
<span class="quotelev1">&gt; lnsl -lutil  -lm
</span><br>
<span class="quotelev1">&gt; libtool: link: unsupported hardcode properties
</span><br>
<span class="quotelev1">&gt; libtool: link: See the libtool documentation for more information.
</span><br>
<span class="quotelev1">&gt; libtool: link: Fatal configuration error.
</span><br>
<span class="quotelev1">&gt; make[2]: *** [ompi_info] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/g/g21/afriedle/work/ompibuild/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.2/ompi/tools/ompi_info'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Google didn't turn anything up.  Strange thing is, gcc 3.4.5 works  
</span><br>
<span class="quotelev1">&gt; just fine on this system.  I'm using this to build:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export CC=gcc
</span><br>
<span class="quotelev1">&gt; export CXX=g++
</span><br>
<span class="quotelev1">&gt; export F77=g77
</span><br>
<span class="quotelev1">&gt; export FC=pathf90
</span><br>
<span class="quotelev1">&gt; export CFLAGS=&quot;-g -O2&quot;
</span><br>
<span class="quotelev1">&gt; export CXXFLAGS=&quot;-g -O2&quot;
</span><br>
<span class="quotelev1">&gt; export FFLAGS=&quot;-fno-second-underscore -g -O2&quot;
</span><br>
<span class="quotelev1">&gt; export FCFLAGS=&quot;-fno-second-underscore -g -O2&quot;
</span><br>
<span class="quotelev1">&gt; export PREFIX=$ROOT/gnudbg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=$PREFIX --enable-debug --enable-mpi-f77 -- 
</span><br>
<span class="quotelev1">&gt; enable-mpi-f90 --with-openib=/usr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've attached the config.log.. any ideas?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt; &lt;config.log.bz2&gt;
</span><br>
<span class="quotelev1">&gt; &lt;mime-attachment.txt&gt;
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
<li><strong>Next message:</strong> <a href="3510.php">Gleb Natapov: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="3508.php">Andrew Friedley: "[OMPI users] error -- libtool unsupported hardcode properties"</a>
<li><strong>In reply to:</strong> <a href="3508.php">Andrew Friedley: "[OMPI users] error -- libtool unsupported hardcode properties"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3512.php">Terry Frankcombe: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
<li><strong>Reply:</strong> <a href="3512.php">Terry Frankcombe: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
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
