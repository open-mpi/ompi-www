<?
$subject_val = "Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 11 09:13:11 2009" -->
<!-- isoreceived="20090211141311" -->
<!-- sent="Wed, 11 Feb 2009 09:13:07 -0500" -->
<!-- isosent="20090211141307" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers" -->
<!-- id="4992DCF3.804_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20090210195445.GA1479_at_DOME" -->
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
<strong>Subject:</strong> Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-11 09:13:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8019.php">Ralph Castain: "Re: [OMPI users] Bug in openmpi 1.3 orte/mca/plm/tm/Makefile.am"</a>
<li><strong>Previous message:</strong> <a href="8017.php">&#197;ke Sandgren: "[OMPI users] Bug in openmpi 1.3 orte/mca/plm/tm/Makefile.am"</a>
<li><strong>In reply to:</strong> <a href="8011.php">Douglas Guptill: "Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8021.php">Ashley Pittman: "Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
<li><strong>Reply:</strong> <a href="8021.php">Ashley Pittman: "Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Douglas Guptill wrote:
<br>
<span class="quotelev1">&gt; Hello Prentice:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Feb 10, 2009 at 12:04:47PM -0500, Prentice Bisbal wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I need to support multiple compilers: Portland, Intel and GCC, so I've
</span><br>
<span class="quotelev2">&gt;&gt; been compiling OpenMPI with each compiler, to avoid the Fortran symbol
</span><br>
<span class="quotelev2">&gt;&gt; naming problems. When compiling, I'd use the --prefix and -exec-prefix
</span><br>
<span class="quotelev2">&gt;&gt; switches like so:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; GCC:
</span><br>
<span class="quotelev2">&gt;&gt; ../configure CC=gcc CXX=g++ F77=gfortran FC=gfortran
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/usr/local/openmpi-1.2.8
</span><br>
<span class="quotelev2">&gt;&gt; --exec-prefix=/usr/local/openmpi-1.2.8/gcc-4.1.2/x86
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...&lt;snip&gt;...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does each compiler need a completely separate tree under --prefix?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is how I do it.  I haven't needed &quot;--exec-prefix&quot;.  Here is part
</span><br>
<span class="quotelev1">&gt; of my openmpi-confiure:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OPENMPI_BASE=/usr/local/openmpi-1.2.8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Create a name for the build directory
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; BUILD_DIR=${OPENMPI_BASE}/build_${COMPILER}-${OPTIONS}
</span><br>
<span class="quotelev1">&gt; echo &quot;building in ${BUILD_DIR}&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # create the build directory
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; [[ -d ${BUILD_DIR} ]] || mkdir ${BUILD_DIR}
</span><br>
<span class="quotelev1">&gt; [[ -d ${BUILD_DIR} ]] || { 
</span><br>
<span class="quotelev1">&gt;     echo &quot;Failed to create ${BUILD_DIR}.  exit.&quot;
</span><br>
<span class="quotelev1">&gt;     exit 0
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # make the configure command
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; COM=&quot;../configure --prefix=${BUILD_DIR} &quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope that helps,
</span><br>
<span class="quotelev1">&gt; Douglas.
</span><br>
<p>Thanks. I did end up building for all the compilers under separate
<br>
trees. It looks like the --exec-prefix option is only of use if your
<br>
compiling 32-bit and 64-bit versions using the same compiler.
<br>
<p>$PREFIX/share/openmpi contains files that specify switches for the
<br>
compilers, and these won't be the same for different compilers, so each
<br>
compiler (gcc, pgi, intel, etc.), will need it's own
<br>
$PREFIX/share/openmpi directory.
<br>
<p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8019.php">Ralph Castain: "Re: [OMPI users] Bug in openmpi 1.3 orte/mca/plm/tm/Makefile.am"</a>
<li><strong>Previous message:</strong> <a href="8017.php">&#197;ke Sandgren: "[OMPI users] Bug in openmpi 1.3 orte/mca/plm/tm/Makefile.am"</a>
<li><strong>In reply to:</strong> <a href="8011.php">Douglas Guptill: "Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8021.php">Ashley Pittman: "Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
<li><strong>Reply:</strong> <a href="8021.php">Ashley Pittman: "Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
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
