<?
$subject_val = "Re: [OMPI users] Why compilig in global paths (only)	for	configuretion files?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 05:49:20 2008" -->
<!-- isoreceived="20080917094920" -->
<!-- sent="Wed, 17 Sep 2008 11:49:16 +0200" -->
<!-- isosent="20080917094916" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why compilig in global paths (only)	for	configuretion files?" -->
<!-- id="48D0D29C.3090101_at_rz.rwth-aachen.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="885CE054-705E-49A5-9D93-0C89B04BF47F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Why compilig in global paths (only)	for	configuretion files?<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-17 05:49:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6563.php">Santolo Felaco: "Re: [OMPI users] Where is ompi-chekpoint?"</a>
<li><strong>Previous message:</strong> <a href="6561.php">Matthias Hovestadt: "Re: [OMPI users] Where is ompi-chekpoint?"</a>
<li><strong>In reply to:</strong> <a href="6546.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths (only) for	configuretion files?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6571.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths (only)	for	configuretion files?"</a>
<li><strong>Reply:</strong> <a href="6571.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths (only)	for	configuretion files?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff again!
<br>
<p><span class="quotelev2">&gt;&gt; But the setting of the environtemt variable OPAL_PREFIX to an 
</span><br>
<span class="quotelev2">&gt;&gt; appropriate value (assuming PATH and LD_LIBRARY_PATH are setted too) 
</span><br>
<span class="quotelev2">&gt;&gt; is not enough to let the OpenMPI rock&amp;roll from the new lokation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm.  It should be.
</span><br>
<p>(update) it works with &quot;truly&quot; OpenMPI, but it works *not* with SUN 
<br>
Cluster Tools 8.0 (which is also an OpenMPI). So, it seems be an SUN 
<br>
problem and not general problem of openMPI. Sorry for false relating the 
<br>
problem.
<br>
<p><p>The only trouble we have now are the error messages like
<br>
<p>--------------------------------------------------------------------------
<br>
Sorry!  You were supposed to get help about:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;no hca params found
<br>
from the file:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;help-mpi-btl-openib.txt
<br>
But I couldn't find any file matching that name.  Sorry!
<br>
--------------------------------------------------------------------------
<br>
<p>(the job still runs without problems! :o)
<br>
<p>if running openmpi from new location, and the old location being 
<br>
removed. (if the old location being also persistense there is no error, 
<br>
so it seems to be an attempt to access to an file on old path).
<br>
<p>Maybe we have to explicitly pass the OPAL_PREFIX environment variable to 
<br>
all processes?
<br>
<p><p><p><span class="quotelev2">&gt;&gt; Because of the fact, that all the files containing settings for 
</span><br>
<span class="quotelev2">&gt;&gt; opal_wrapper, which are located in share/openmpi/ and called e.g. 
</span><br>
<span class="quotelev2">&gt;&gt; mpif77-wrapper-data.txt, contain (defined by installation with 
</span><br>
<span class="quotelev2">&gt;&gt; --prefix) hard-coded paths, too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm; they should not.  In my 1.2.7 install, I see the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; [11:14] svbu-mpi:/home/jsquyres/bogus/share/openmpi % cat 
</span><br>
<span class="quotelev1">&gt; mpif77-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; # There can be multiple blocks of configuration data, chosen by
</span><br>
<span class="quotelev1">&gt; # compiler flags (using the compiler_args key to chose which block
</span><br>
<span class="quotelev1">&gt; # should be activated.  This can be useful for multilib builds.  See the
</span><br>
<span class="quotelev1">&gt; # multilib page at:
</span><br>
<span class="quotelev1">&gt; #    <a href="https://svn.open-mpi.org/trac/ompi/wiki/compilerwrapper3264">https://svn.open-mpi.org/trac/ompi/wiki/compilerwrapper3264</a>
</span><br>
<span class="quotelev1">&gt; # for more information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; project=Open MPI
</span><br>
<span class="quotelev1">&gt; project_short=OMPI
</span><br>
<span class="quotelev1">&gt; version=1.2.7rc6r19546
</span><br>
<span class="quotelev1">&gt; language=Fortran 77
</span><br>
<span class="quotelev1">&gt; compiler_env=F77
</span><br>
<span class="quotelev1">&gt; compiler_flags_env=FFLAGS
</span><br>
<span class="quotelev1">&gt; compiler=gfortran
</span><br>
<span class="quotelev1">&gt; extra_includes=
</span><br>
<span class="quotelev1">&gt; preprocessor_flags=
</span><br>
<span class="quotelev1">&gt; compiler_flags=
</span><br>
<span class="quotelev1">&gt; linker_flags=
</span><br>
<span class="quotelev1">&gt; libs=-lmpi_f77 -lmpi -lopen-rte -lopen-pal   -ldl   -Wl,--export-dynamic 
</span><br>
<span class="quotelev1">&gt; -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt; required_file=not supported
</span><br>
<span class="quotelev1">&gt; includedir=${includedir}
</span><br>
<span class="quotelev1">&gt; libdir=${libdir}
</span><br>
<span class="quotelev1">&gt; [11:14] svbu-mpi:/home/jsquyres/bogus/share/openmpi %
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note the &quot;includedir&quot; and &quot;libdir&quot; lines -- they're expressed in terms 
</span><br>
<span class="quotelev1">&gt; of ${foo}, which we can replace when OPAL_PREFIX (or related) is used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What version of OMPI are you using?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Note one of configure files contained in Sun ClusterMPI 8.0 (see 
<br>
attached file). The paths are really hard-coded in instead of usage of 
<br>
variables; this makes the package really not relocable without parsing 
<br>
the configure files.
<br>
<p>Did you (or anyone reading this message) have any contact to SUN 
<br>
developers to point to this circumstance? *Why* do them use hard-coded 
<br>
paths? :o)
<br>
<p>best regards,
<br>
<p>Paul Kapinos
<br>
<p>
<br><p>
#
<br>
# Default word-size (used when -m flag is supplied to wrapper compiler)
<br>
#
<br>
compiler_args=
<br>
<p>project=Open MPI
<br>
project_short=OMPI
<br>
version=r19400-ct8.0-b31c-r29
<br>
<p>language=Fortran 90
<br>
compiler_env=FC
<br>
compiler_flags_env=FCFLAGS
<br>
compiler=f90
<br>
module_option=-M
<br>
extra_includes=
<br>
preprocessor_flags=
<br>
compiler_flags=
<br>
libs=-lmpi -lopen-rte -lopen-pal -lnsl -lrt -lm -ldl -lutil -lpthread -lmpi_f77 -lmpi_f90
<br>
linker_flags=-R/opt/mx/lib/lib64 -R/opt/SUNWhpc/HPC8.0/lib/lib64 
<br>
required_file=
<br>
includedir=/opt/SUNWhpc/HPC8.0/include/64
<br>
libdir=/opt/SUNWhpc/HPC8.0/lib/lib64
<br>
<p>#
<br>
# Alternative word-size (used when -m flag is not supplied to wrapper compiler)
<br>
#
<br>
compiler_args=-m32
<br>
<p>project=Open MPI
<br>
project_short=OMPI
<br>
version=r19400-ct8.0-b31c-r29
<br>
<p>language=Fortran 90
<br>
compiler_env=FC
<br>
compiler_flags_env=FCFLAGS
<br>
compiler=f90
<br>
module_option=-M
<br>
extra_includes=
<br>
preprocessor_flags=
<br>
compiler_flags=-m32
<br>
libs=-lmpi -lopen-rte -lopen-pal -lnsl -lrt -lm -ldl -lutil -lpthread -lmpi_f77 -lmpi_f90
<br>
linker_flags=-R/opt/mx/lib -R/opt/SUNWhpc/HPC8.0/lib 
<br>
required_file=
<br>
includedir=/opt/SUNWhpc/HPC8.0/include
<br>
libdir=/opt/SUNWhpc/HPC8.0/lib
<br>
<p>
<br><p>
<p>
<br><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6562/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6563.php">Santolo Felaco: "Re: [OMPI users] Where is ompi-chekpoint?"</a>
<li><strong>Previous message:</strong> <a href="6561.php">Matthias Hovestadt: "Re: [OMPI users] Where is ompi-chekpoint?"</a>
<li><strong>In reply to:</strong> <a href="6546.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths (only) for	configuretion files?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6571.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths (only)	for	configuretion files?"</a>
<li><strong>Reply:</strong> <a href="6571.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths (only)	for	configuretion files?"</a>
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
