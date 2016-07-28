<?
$subject_val = "Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 10 14:59:13 2009" -->
<!-- isoreceived="20090210195913" -->
<!-- sent="Tue, 10 Feb 2009 15:54:45 -0400" -->
<!-- isosent="20090210195445" -->
<!-- name="Douglas Guptill" -->
<!-- email="douglas.guptill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers" -->
<!-- id="20090210195445.GA1479_at_DOME" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4991B3AF.7040306_at_ias.edu" -->
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
<strong>From:</strong> Douglas Guptill (<em>douglas.guptill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-10 14:54:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8012.php">simone marras: "[OMPI users] again on &quot;...mpif90, mpif77 compiler is non-functional&quot;"</a>
<li><strong>Previous message:</strong> <a href="8010.php">Ralph Castain: "Re: [OMPI users] Problem redirecting standard input"</a>
<li><strong>In reply to:</strong> <a href="8008.php">Prentice Bisbal: "[OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8018.php">Prentice Bisbal: "Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
<li><strong>Reply:</strong> <a href="8018.php">Prentice Bisbal: "Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Prentice:
<br>
<p>On Tue, Feb 10, 2009 at 12:04:47PM -0500, Prentice Bisbal wrote:
<br>
<span class="quotelev1">&gt; I need to support multiple compilers: Portland, Intel and GCC, so I've
</span><br>
<span class="quotelev1">&gt; been compiling OpenMPI with each compiler, to avoid the Fortran symbol
</span><br>
<span class="quotelev1">&gt; naming problems. When compiling, I'd use the --prefix and -exec-prefix
</span><br>
<span class="quotelev1">&gt; switches like so:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; GCC:
</span><br>
<span class="quotelev1">&gt; ../configure CC=gcc CXX=g++ F77=gfortran FC=gfortran
</span><br>
<span class="quotelev1">&gt; --prefix=/usr/local/openmpi-1.2.8
</span><br>
<span class="quotelev1">&gt; --exec-prefix=/usr/local/openmpi-1.2.8/gcc-4.1.2/x86
</span><br>
<p>...&lt;snip&gt;...
<br>
<p><span class="quotelev1">&gt; Does each compiler need a completely separate tree under --prefix?
</span><br>
<p>That is how I do it.  I haven't needed &quot;--exec-prefix&quot;.  Here is part
<br>
of my openmpi-confiure:
<br>
<p><p>OPENMPI_BASE=/usr/local/openmpi-1.2.8
<br>
<p># Create a name for the build directory
<br>
#
<br>
BUILD_DIR=${OPENMPI_BASE}/build_${COMPILER}-${OPTIONS}
<br>
echo &quot;building in ${BUILD_DIR}&quot;
<br>
<p># create the build directory
<br>
#
<br>
[[ -d ${BUILD_DIR} ]] || mkdir ${BUILD_DIR}
<br>
[[ -d ${BUILD_DIR} ]] || { 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;Failed to create ${BUILD_DIR}.  exit.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;exit 0
<br>
}
<br>
<p># make the configure command
<br>
#
<br>
COM=&quot;../configure --prefix=${BUILD_DIR} &quot;
<br>
<p>Hope that helps,
<br>
Douglas.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8012.php">simone marras: "[OMPI users] again on &quot;...mpif90, mpif77 compiler is non-functional&quot;"</a>
<li><strong>Previous message:</strong> <a href="8010.php">Ralph Castain: "Re: [OMPI users] Problem redirecting standard input"</a>
<li><strong>In reply to:</strong> <a href="8008.php">Prentice Bisbal: "[OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8018.php">Prentice Bisbal: "Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
<li><strong>Reply:</strong> <a href="8018.php">Prentice Bisbal: "Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
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
