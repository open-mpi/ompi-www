<?
$subject_val = "Re: [OMPI devel] 1.5rc5 has been posted";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  1 20:10:03 2010" -->
<!-- isoreceived="20100902001003" -->
<!-- sent="Wed, 1 Sep 2010 17:09:58 -0700" -->
<!-- isosent="20100902000958" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5rc5 has been posted" -->
<!-- id="05D2613B-C54F-41CE-8569-5CEFC33453B4_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E90B71C7-2B75-4613-9F41-E6D0F2939F61_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5rc5 has been posted<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-01 20:09:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8444.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH"</a>
<li><strong>Previous message:</strong> <a href="8442.php">Steve Wise: "[OMPI devel] openib btl - fatal errors don't abort the job"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8284.php">Jeff Squyres: "[OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8460.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>Reply:</strong> <a href="8460.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OpenMPI 1.4.x and 1.5x fail to link a program that calls Subroutine  
<br>
MPI_SIZEOF using the PGI 10.3 compilers:
<br>
<p><span class="quotelev1">&gt; $ cat junk.f90
</span><br>
<span class="quotelev1">&gt;       Use MPI
</span><br>
<span class="quotelev1">&gt;       Implicit None
</span><br>
<span class="quotelev1">&gt;       Integer var, size, err
</span><br>
<span class="quotelev1">&gt;       Call MPI_SIZEOF( var, size, err )
</span><br>
<span class="quotelev1">&gt;       Write (*,*) 'Size of Integer var is ', size, ' bytes.'
</span><br>
<span class="quotelev1">&gt;       Stop
</span><br>
<span class="quotelev1">&gt;       End
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ /opt/pgi/linux86-64/current/openmpi/bin/mpif90 -o junk junk.f90
</span><br>
<span class="quotelev1">&gt; /opt/pgi/linux86-64/10.3/openmpi/lib/libmpi_f90.so: undefined  
</span><br>
<span class="quotelev1">&gt; reference to `mpi_sizeof1dl_'
</span><br>
<span class="quotelev1">&gt; /opt/pgi/linux86-64/10.3/openmpi/lib/libmpi_f90.so: undefined  
</span><br>
<span class="quotelev1">&gt; reference to `mpi_sizeof4dch_'
</span><br>
<span class="quotelev1">&gt; /opt/pgi/linux86-64/10.3/openmpi/lib/libmpi_f90.so: undefined  
</span><br>
<span class="quotelev1">&gt; reference to `mpi_sizeof3dl_'
</span><br>
<span class="quotelev1">&gt; /opt/pgi/linux86-64/10.3/openmpi/lib/libmpi_f90.so: undefined  
</span><br>
<span class="quotelev1">&gt; reference to `mpi_sizeof4dl_'
</span><br>
<span class="quotelev1">&gt; /opt/pgi/linux86-64/10.3/openmpi/lib/libmpi_f90.so: undefined  
</span><br>
<span class="quotelev1">&gt; reference to `mpi_sizeof2dch_'
</span><br>
<span class="quotelev1">&gt; /opt/pgi/linux86-64/10.3/openmpi/lib/libmpi_f90.so: undefined  
</span><br>
<span class="quotelev1">&gt; reference to `mpi_sizeof2dl_'
</span><br>
<span class="quotelev1">&gt; /opt/pgi/linux86-64/10.3/openmpi/lib/libmpi_f90.so: undefined  
</span><br>
<span class="quotelev1">&gt; reference to `mpi_sizeof3dch_'
</span><br>
<span class="quotelev1">&gt; /opt/pgi/linux86-64/10.3/openmpi/lib/libmpi_f90.so: undefined  
</span><br>
<span class="quotelev1">&gt; reference to `mpi_sizeof1dch_'
</span><br>
<span class="quotelev1">&gt; /opt/pgi/linux86-64/10.3/openmpi/lib/libmpi_f90.so: undefined  
</span><br>
<span class="quotelev1">&gt; reference to `mpi_sizeof0dl_'
</span><br>
<span class="quotelev1">&gt; /opt/pgi/linux86-64/10.3/openmpi/lib/libmpi_f90.so: undefined  
</span><br>
<span class="quotelev1">&gt; reference to `mpi_sizeof0dch_'
</span><br>
<span class="quotelev1">&gt; make: *** [junk] Error 2
</span><br>
<p>This is because the specific procedures declared in ompi/mpi/f90/mpi- 
<br>
f90-interfaces.h are not all implemented in ompi/mpi/f90/ 
<br>
mpi_sizeof.f90.  It does not seem to matter to gfortran, but PGI  
<br>
Fortran 90 cares.
<br>
<p>The root of the problem is the inconsistency between the methods used  
<br>
to enumerate the specific procedures in ompi/mpi/f90/scripts/mpi-f90- 
<br>
interfaces.h.sh (the declarations) and ompi/mpi/f90/scripts/ 
<br>
mpi_sizeof.f90.sh (the implementations).  The Character and Logical  
<br>
implementations are missing.  mpi_sizeof.f90.sh generates lkinds  
<br>
specific Logical procedure implementations.  However, since lkinds is  
<br>
not defined in ompi/mpi/f90/fortran_kinds.sh, there are none.  Even if  
<br>
lkinds were defined, mpi-f90-interfaces.h.sh declares a single  
<br>
(nameless) kind of Logical procedure, while mpi_sizeof.f90.sh (would,  
<br>
if there were any) decorates the name of each Logical procedure  
<br>
implementation with the kind.  And, mpi_sizeof.f90.sh completely  
<br>
leaves out the Character procedure implementations.
<br>
<p>I will work out a fix for this in the next few days, unless the author  
<br>
wants to.  Is that okay?
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>On Aug 17, 2010, at 2:18 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; We still have one known possible regression:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/ticket/2530">https://svn.open-mpi.org/trac/ompi/ticket/2530</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But we posted rc5 anyway (there's a bunch of stuff that has been  
</span><br>
<span class="quotelev1">&gt; pending for a while that is now in).  Please test!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.5/">http://www.open-mpi.org/software/ompi/v1.5/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="8444.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH"</a>
<li><strong>Previous message:</strong> <a href="8442.php">Steve Wise: "[OMPI devel] openib btl - fatal errors don't abort the job"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8284.php">Jeff Squyres: "[OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8460.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>Reply:</strong> <a href="8460.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
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
