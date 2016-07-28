<?
$subject_val = "Re: [OMPI users] Wrappers should put include path *after* user args";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 16:33:21 2009" -->
<!-- isoreceived="20091204213321" -->
<!-- sent="Fri, 04 Dec 2009 22:34:01 +0100" -->
<!-- isosent="20091204213401" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Wrappers should put include path *after* user args" -->
<!-- id="87tyw6xw3a.fsf_at_59A2.org" -->
<!-- inreplyto="C3C3C592-0870-4507-B90D-784C0C9085A3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Wrappers should put include path *after* user args<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-04 16:34:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11430.php">Qing Pang: "Re: [OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time"</a>
<li><strong>Previous message:</strong> <a href="11428.php">Jeff Squyres: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<li><strong>In reply to:</strong> <a href="11428.php">Jeff Squyres: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11821.php">Justin Bronder: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 4 Dec 2009 16:20:23 -0500, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Oy -- more specifically, we should not be putting -I/usr/include on
</span><br>
<span class="quotelev1">&gt; the command line *at all* (because it's special and already included
</span><br>
<span class="quotelev1">&gt; by the compiler search paths; similar for /usr/lib and /usr/lib64).
</span><br>
<p>If I remember correctly, the issue was that some versions of gfortran
<br>
were not searching /usr/include for mpif.h.
<br>
<p><span class="quotelev1">&gt; Can you send the contents of your $prefix/share/openmpi/mpif90-wrapper-data.txt?
</span><br>
<p>Attached.
<br>
<p>Jed
<br>
<p><p>
<br><p>
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
version=1.3.4
<br>
language=Fortran 90
<br>
compiler_env=FC
<br>
compiler_flags_env=FCFLAGS
<br>
compiler=/usr/bin/gfortran
<br>
module_option=-I
<br>
extra_includes=
<br>
preprocessor_flags=
<br>
compiler_flags=-pthread  
<br>
linker_flags=    
<br>
libs=-lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal   -ldl   -Wl,--export-dynamic -lnsl -lutil -lm -ldl 
<br>
required_file=
<br>
includedir=${includedir}
<br>
libdir=${libdir}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11430.php">Qing Pang: "Re: [OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time"</a>
<li><strong>Previous message:</strong> <a href="11428.php">Jeff Squyres: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<li><strong>In reply to:</strong> <a href="11428.php">Jeff Squyres: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11821.php">Justin Bronder: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
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
