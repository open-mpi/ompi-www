<?
$subject_val = "Re: [OMPI devel] ompi_mpi_init: orte_init failed";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 20 18:34:55 2011" -->
<!-- isoreceived="20110120233455" -->
<!-- sent="Thu, 20 Jan 2011 15:34:50 -0800" -->
<!-- isosent="20110120233450" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_mpi_init: orte_init failed" -->
<!-- id="13763C0E-0FF0-4DFD-B491-240FFB64FE6F_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="508040D7-F8AB-475C-959E-E658397F65F1_at_uwaterloo.ca" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ompi_mpi_init: orte_init failed<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-20 18:34:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8914.php">Jeff Squyres: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<li><strong>Previous message:</strong> <a href="8912.php">Nathan Hjelm: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<li><strong>In reply to:</strong> <a href="8911.php">Francis Poulin: "[OMPI devel] ompi_mpi_init: orte_init failed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Francis,
<br>
<p>I cannot address your situation specifically, but I can tell you from  
<br>
experience that you must pay close attention to the version of Mac OS  
<br>
X for 32-bit/64-bit compiling.  gcc/gfortran defaults to 32-bit on OS  
<br>
X 10.5.  I am told they default to 64-bit on OS X 10.6.  Thus, to  
<br>
compile and link with the proper 64-bit libraries, you may have to  
<br>
specify -m64 at every step: when creating the OpenMPI library, when  
<br>
compiling your application, and when linking your application  
<br>
(presumably, the last two steps are done by an OpenMPI wrapper script  
<br>
for you).
<br>
<p>On my (desktop) OS X 10.5 Mac, I used the following commands to patch  
<br>
(using my own patch script) and make OpenMPI 1.4.2:
<br>
<p><span class="quotelev1">&gt; # Patch OpenMPI 1.4.2
</span><br>
<span class="quotelev1">&gt; tar -xjf openmpi-1.4.2.tar.bz2
</span><br>
<span class="quotelev1">&gt; source patch-openmpi-1.4.2.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Configure OpenMPI 1.4.2 for GNU compilers
</span><br>
<span class="quotelev1">&gt; cd openmpi-1.4.2
</span><br>
<span class="quotelev1">&gt; ./configure &gt;configure.log 2&gt;&amp;1 \
</span><br>
<span class="quotelev1">&gt;    --prefix=$HOME/Desktop/Software/OpenMPI/gnu \
</span><br>
<span class="quotelev1">&gt;    CC=&quot;gcc -m64&quot; \
</span><br>
<span class="quotelev1">&gt;    CFLAGS=&quot;-g -fast&quot; \
</span><br>
<span class="quotelev1">&gt;    CXX=&quot;g++ -m64&quot; \
</span><br>
<span class="quotelev1">&gt;    CXXFLAGS=&quot;-g -fast&quot; \
</span><br>
<span class="quotelev1">&gt;    FC=&quot;gfortran -m64&quot; \
</span><br>
<span class="quotelev1">&gt;    FCFLAGS=&quot;-g -fast&quot; \
</span><br>
<span class="quotelev1">&gt;    F77=&quot;gfortran -m64&quot; \
</span><br>
<span class="quotelev1">&gt;    FFLAGS=&quot;-g -fast&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Make the library
</span><br>
<span class="quotelev1">&gt; make &gt;make.log 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Validate the library
</span><br>
<span class="quotelev1">&gt; make check &gt;check.log 2&gt;&amp;1
</span><br>
<p>Then, I used the following commands to install it:
<br>
<p><span class="quotelev1">&gt; # Install OpenMPI 1.4.2
</span><br>
<span class="quotelev1">&gt; cd openmpi-1.4.2
</span><br>
<span class="quotelev1">&gt; make install &gt;install.log 2&gt;&amp;1
</span><br>
<p>Maybe the first thing you could try is to run make check on your  
<br>
laptop.  I don't have a laptop to try to replicate your failure.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>On Jan 20, 2011, at 2:00 PM, Francis Poulin wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to build OpenMPI with fortran on my Mac OS machines using  
</span><br>
<span class="quotelev1">&gt; gfortran.  I'm using the 64-bit option and trying to install 1.4.2.   
</span><br>
<span class="quotelev1">&gt; It seems to build ok and when I compile and run simple programs it  
</span><br>
<span class="quotelev1">&gt; works.  When I try a more complicated case it works on my desktop  
</span><br>
<span class="quotelev1">&gt; but not my laptop.  The error that I get is shown below.   The fact  
</span><br>
<span class="quotelev1">&gt; that it works on my desktop shows me there's a problem with my build  
</span><br>
<span class="quotelev1">&gt; on my laptop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas where I can look to fix it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Francis
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file runtime/ 
</span><br>
<span class="quotelev1">&gt; orte_init.c at line 125
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  orte_ess_base_select failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process  
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or  
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Not found&quot; (-13) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8914.php">Jeff Squyres: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<li><strong>Previous message:</strong> <a href="8912.php">Nathan Hjelm: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<li><strong>In reply to:</strong> <a href="8911.php">Francis Poulin: "[OMPI devel] ompi_mpi_init: orte_init failed"</a>
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
