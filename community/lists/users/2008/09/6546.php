<?
$subject_val = "Re: [OMPI users] Why compilig in global paths (only) for	configuretion files?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 15 14:16:05 2008" -->
<!-- isoreceived="20080915181605" -->
<!-- sent="Mon, 15 Sep 2008 14:15:59 -0400" -->
<!-- isosent="20080915181559" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why compilig in global paths (only) for	configuretion files?" -->
<!-- id="885CE054-705E-49A5-9D93-0C89B04BF47F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48CE7D9B.8070207_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Why compilig in global paths (only) for	configuretion files?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-15 14:15:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6547.php">Jeff Squyres: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<li><strong>Previous message:</strong> <a href="6545.php">Jeff Squyres: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>In reply to:</strong> <a href="6540.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths (only) for	configuretion files?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6562.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths (only)	for	configuretion files?"</a>
<li><strong>Reply:</strong> <a href="6562.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths (only)	for	configuretion files?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 15, 2008, at 11:22 AM, Paul Kapinos wrote:
<br>
<p><span class="quotelev1">&gt; But the setting of the environtemt variable OPAL_PREFIX to an  
</span><br>
<span class="quotelev1">&gt; appropriate value (assuming PATH and LD_LIBRARY_PATH are setted too)  
</span><br>
<span class="quotelev1">&gt; is not enough to let the OpenMPI rock&amp;roll from the new lokation.
</span><br>
<p>Hmm.  It should be.
<br>
<p><span class="quotelev1">&gt; Because of the fact, that all the files containing settings for  
</span><br>
<span class="quotelev1">&gt; opal_wrapper, which are located in share/openmpi/ and called e.g.  
</span><br>
<span class="quotelev1">&gt; mpif77-wrapper-data.txt, contain (defined by installation with -- 
</span><br>
<span class="quotelev1">&gt; prefix) hard-coded paths, too.
</span><br>
<p>Hmm; they should not.  In my 1.2.7 install, I see the following:
<br>
<p>-----
<br>
[11:14] svbu-mpi:/home/jsquyres/bogus/share/openmpi % cat mpif77- 
<br>
wrapper-data.txt
<br>
# There can be multiple blocks of configuration data, chosen by
<br>
# compiler flags (using the compiler_args key to chose which block
<br>
# should be activated.  This can be useful for multilib builds.  See the
<br>
# multilib page at:
<br>
#    <a href="https://svn.open-mpi.org/trac/ompi/wiki/compilerwrapper3264">https://svn.open-mpi.org/trac/ompi/wiki/compilerwrapper3264</a>
<br>
# for more information.
<br>
<p>project=Open MPI
<br>
project_short=OMPI
<br>
version=1.2.7rc6r19546
<br>
language=Fortran 77
<br>
compiler_env=F77
<br>
compiler_flags_env=FFLAGS
<br>
compiler=gfortran
<br>
extra_includes=
<br>
preprocessor_flags=
<br>
compiler_flags=
<br>
linker_flags=
<br>
libs=-lmpi_f77 -lmpi -lopen-rte -lopen-pal   -ldl   -Wl,--export- 
<br>
dynamic -lnsl -lutil -lm -ldl
<br>
required_file=not supported
<br>
includedir=${includedir}
<br>
libdir=${libdir}
<br>
[11:14] svbu-mpi:/home/jsquyres/bogus/share/openmpi %
<br>
-----
<br>
<p>Note the &quot;includedir&quot; and &quot;libdir&quot; lines -- they're expressed in terms  
<br>
of ${foo}, which we can replace when OPAL_PREFIX (or related) is used.
<br>
<p>What version of OMPI are you using?
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
<li><strong>Next message:</strong> <a href="6547.php">Jeff Squyres: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<li><strong>Previous message:</strong> <a href="6545.php">Jeff Squyres: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>In reply to:</strong> <a href="6540.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths (only) for	configuretion files?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6562.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths (only)	for	configuretion files?"</a>
<li><strong>Reply:</strong> <a href="6562.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths (only)	for	configuretion files?"</a>
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
