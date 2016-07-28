<?
$subject_val = "Re: [OMPI devel] 1.5rc5 has been posted";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  3 15:42:39 2010" -->
<!-- isoreceived="20100903194239" -->
<!-- sent="Fri, 3 Sep 2010 12:42:33 -0700" -->
<!-- isosent="20100903194233" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5rc5 has been posted" -->
<!-- id="D1E060B5-4C10-4BBC-A8EF-E28E90751E12_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="05D2613B-C54F-41CE-8569-5CEFC33453B4_at_usgs.gov" -->
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
<strong>Date:</strong> 2010-09-03 15:42:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8461.php">Bogdan Costescu: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Previous message:</strong> <a href="8459.php">Jeff Squyres: "Re: [OMPI devel] 1.5rc5 over MX"</a>
<li><strong>In reply to:</strong> <a href="8443.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Using MPI-2 (Gropp et al.) says MPI_SIZEOF() only supports numeric  
<br>
intrinsic data types.  So, I patched OpenMPI 1.4.2 to remove the  
<br>
declarations of the undefined Logical and Character specific  
<br>
procedures in ompi/mpi/f90/scripts/mpi-f90-interfaces.h.sh:
<br>
<p><span class="quotelev1">&gt;   output_197 MPI_Sizeof ${rank} CH &quot;character${dim}&quot;
</span><br>
<span class="quotelev1">&gt;   output_197 MPI_Sizeof ${rank} L &quot;logical${dim}&quot;
</span><br>
<p>I also changed all the dummy array declarations in the INTERFACE  
<br>
declarations to use assumed-shape arrays, which is the correct Fortran  
<br>
90 method to declare the rank and extent of any actual array arguments.
<br>
<p>I simplified both ompi/mpi/f90/scripts/mpi-f90-interfaces.h.sh and  
<br>
ompi/mpi/f90/scripts/mpi_sizeof.f90.sh.  In mpi-f90-interfaces.h.sh, I  
<br>
defined an array, array_dims, with the DIMENSION declarations, then  
<br>
replaced all the copies of dim= throughout the code with a reference  
<br>
to array_dims by rank:
<br>
<p><span class="quotelev1">&gt; array_dims[0]=''
</span><br>
<span class="quotelev1">&gt; array_dims[1]=', dimension(:)'
</span><br>
<span class="quotelev1">&gt; array_dims[2]=', dimension(:,:)'
</span><br>
<span class="quotelev1">&gt; array_dims[3]=', dimension(:,:,:)'
</span><br>
<span class="quotelev1">&gt; array_dims[4]=', dimension(:,:,:,:)'
</span><br>
<span class="quotelev1">&gt; array_dims[5]=', dimension(:,:,:,:,:)'
</span><br>
<span class="quotelev1">&gt; array_dims[6]=', dimension(:,:,:,:,:,:)'
</span><br>
<span class="quotelev1">&gt; array_dims[7]=', dimension(:,:,:,:,:,:,:)'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for rank in $allranks
</span><br>
<span class="quotelev1">&gt; do
</span><br>
<span class="quotelev1">&gt;   dim=${array_dims[${rank}]}
</span><br>
<p>In mpi_sizeof.f90.sh, I copied the method to enumerate rank 0 with all  
<br>
the other ranks from the code in mpi-f90-interfaces.h.sh:
<br>
<p><span class="quotelev1">&gt; allranks=&quot;0 $ranks&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for rank in $allranks
</span><br>
<span class="quotelev1">&gt; do
</span><br>
<span class="quotelev1">&gt;   case &quot;$rank&quot; in  0)  dim=''  ;  esac
</span><br>
<span class="quotelev1">&gt;   case &quot;$rank&quot; in  1)  dim=', dimension(:)'  ;  esac
</span><br>
<span class="quotelev1">&gt;   case &quot;$rank&quot; in  2)  dim=', dimension(:,:)'  ;  esac
</span><br>
<span class="quotelev1">&gt;   case &quot;$rank&quot; in  3)  dim=', dimension(:,:,:)'  ;  esac
</span><br>
<span class="quotelev1">&gt;   case &quot;$rank&quot; in  4)  dim=', dimension(:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev1">&gt;   case &quot;$rank&quot; in  5)  dim=', dimension(:,:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev1">&gt;   case &quot;$rank&quot; in  6)  dim=', dimension(:,:,:,:,:,:)'  ;  esac
</span><br>
<span class="quotelev1">&gt;   case &quot;$rank&quot; in  7)  dim=', dimension(:,:,:,:,:,:,:)'  ;  esac
</span><br>
<p>Here's the patch I used for OpenMPI 1.4.2:
<br>
<p><span class="quotelev1">&gt; # Remove declarations of Logical and Character specific procedures  
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev1">&gt; # Generic Subroutine MPI_SIZEOF and fix dummy arrays to be assumed- 
</span><br>
<span class="quotelev1">&gt; shape
</span><br>
<span class="quotelev1">&gt; mv openmpi-1.4.2/ompi/mpi/f90/scripts/mpi-f90- 
</span><br>
<span class="quotelev1">&gt; interfaces.h.sh{,.original}
</span><br>
<span class="quotelev1">&gt; sed -e $'34{p;
</span><br>
<span class="quotelev1">&gt;             s/^.*$/array_dims[0]=\'\'/;p;
</span><br>
<span class="quotelev1">&gt;             s/^.*$/array_dims[1]=\', dimension(:)\'/;p;
</span><br>
<span class="quotelev1">&gt;             s/^.*$/array_dims[2]=\', dimension(:,:)\'/;p;
</span><br>
<span class="quotelev1">&gt;             s/^.*$/array_dims[3]=\', dimension(:,:,:)\'/;p;
</span><br>
<span class="quotelev1">&gt;             s/^.*$/array_dims[4]=\', dimension(:,:,:,:)\'/;p;
</span><br>
<span class="quotelev1">&gt;             s/^.*$/array_dims[5]=\', dimension(:,:,:,:,:)\'/;p;
</span><br>
<span class="quotelev1">&gt;             s/^.*$/array_dims[6]=\', dimension(:,:,:,:,:,:)\'/;p;
</span><br>
<span class="quotelev1">&gt;             s/^.*$/array_dims[7]=\', dimension(:,:,:,:,:,:,:)\'/;p;
</span><br>
<span class="quotelev1">&gt;             s/^.*$//;}' \
</span><br>
<span class="quotelev1">&gt;     -e '/case &quot;$rank&quot; in  [0-6])  dim=/d' \
</span><br>
<span class="quotelev1">&gt;     -e '/case &quot;$rank&quot; in  7)  dim=.*$/s//dim=${array_dims[$ 
</span><br>
<span class="quotelev1">&gt; {rank}]}/' \
</span><br>
<span class="quotelev1">&gt;     -e '7129,7130d' \
</span><br>
<span class="quotelev1">&gt;     openmpi-1.4.2/ompi/mpi/f90/scripts/mpi-f90- 
</span><br>
<span class="quotelev1">&gt; interfaces.h.sh.original \
</span><br>
<span class="quotelev2">&gt;     &gt;openmpi-1.4.2/ompi/mpi/f90/scripts/mpi-f90-interfaces.h.sh
</span><br>
<span class="quotelev1">&gt; chmod +x openmpi-1.4.2/ompi/mpi/f90/scripts/mpi-f90-interfaces.h.sh
</span><br>
<span class="quotelev1">&gt; mv openmpi-1.4.2/ompi/mpi/f90/scripts/mpi_sizeof.f90.sh{,.original}
</span><br>
<span class="quotelev1">&gt; sed -e '25,84d' \
</span><br>
<span class="quotelev1">&gt;     -e '85s/^.*$/allranks=&quot;0 $ranks&quot;/' \
</span><br>
<span class="quotelev1">&gt;     -e '87s/\$ranks/$allranks/' \
</span><br>
<span class="quotelev1">&gt;     -e $'88{p;s/^.*$/  case &quot;$rank&quot; in  0)  dim=\'\'  ;  esac/;}' \
</span><br>
<span class="quotelev1">&gt;     -e $'89,95{s/dim=\'/dim=\', dimension(/;s/1,/:,/g;s/\*\'/:) 
</span><br>
<span class="quotelev1">&gt; \'/;}' \
</span><br>
<span class="quotelev1">&gt;     -e '97,110d' \
</span><br>
<span class="quotelev1">&gt;     -e '118s/, dimension(\${dim})/${dim}/' \
</span><br>
<span class="quotelev1">&gt;     -e '133s/, dimension(\${dim})/${dim}/' \
</span><br>
<span class="quotelev1">&gt;     -e '148s/, dimension(\${dim})/${dim}/' \
</span><br>
<span class="quotelev1">&gt;     openmpi-1.4.2/ompi/mpi/f90/scripts/mpi_sizeof.f90.sh.original \
</span><br>
<span class="quotelev2">&gt;     &gt;openmpi-1.4.2/ompi/mpi/f90/scripts/mpi_sizeof.f90.sh
</span><br>
<span class="quotelev1">&gt; chmod +x openmpi-1.4.2/ompi/mpi/f90/scripts/mpi_sizeof.f90.sh
</span><br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>On Sep 1, 2010, at 5:09 PM, Larry Baker wrote:
<br>
<p><span class="quotelev1">&gt; OpenMPI 1.4.x and 1.5x fail to link a program that calls Subroutine  
</span><br>
<span class="quotelev1">&gt; MPI_SIZEOF using the PGI 10.3 compilers:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ cat junk.f90
</span><br>
<span class="quotelev2">&gt;&gt;      Use MPI
</span><br>
<span class="quotelev2">&gt;&gt;      Implicit None
</span><br>
<span class="quotelev2">&gt;&gt;      Integer var, size, err
</span><br>
<span class="quotelev2">&gt;&gt;      Call MPI_SIZEOF( var, size, err )
</span><br>
<span class="quotelev2">&gt;&gt;      Write (*,*) 'Size of Integer var is ', size, ' bytes.'
</span><br>
<span class="quotelev2">&gt;&gt;      Stop
</span><br>
<span class="quotelev2">&gt;&gt;      End
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ /opt/pgi/linux86-64/current/openmpi/bin/mpif90 -o junk junk.f90
</span><br>
<span class="quotelev2">&gt;&gt; /opt/pgi/linux86-64/10.3/openmpi/lib/libmpi_f90.so: undefined  
</span><br>
<span class="quotelev2">&gt;&gt; reference to `mpi_sizeof1dl_'
</span><br>
<span class="quotelev2">&gt;&gt; /opt/pgi/linux86-64/10.3/openmpi/lib/libmpi_f90.so: undefined  
</span><br>
<span class="quotelev2">&gt;&gt; reference to `mpi_sizeof4dch_'
</span><br>
<span class="quotelev2">&gt;&gt; /opt/pgi/linux86-64/10.3/openmpi/lib/libmpi_f90.so: undefined  
</span><br>
<span class="quotelev2">&gt;&gt; reference to `mpi_sizeof3dl_'
</span><br>
<span class="quotelev2">&gt;&gt; /opt/pgi/linux86-64/10.3/openmpi/lib/libmpi_f90.so: undefined  
</span><br>
<span class="quotelev2">&gt;&gt; reference to `mpi_sizeof4dl_'
</span><br>
<span class="quotelev2">&gt;&gt; /opt/pgi/linux86-64/10.3/openmpi/lib/libmpi_f90.so: undefined  
</span><br>
<span class="quotelev2">&gt;&gt; reference to `mpi_sizeof2dch_'
</span><br>
<span class="quotelev2">&gt;&gt; /opt/pgi/linux86-64/10.3/openmpi/lib/libmpi_f90.so: undefined  
</span><br>
<span class="quotelev2">&gt;&gt; reference to `mpi_sizeof2dl_'
</span><br>
<span class="quotelev2">&gt;&gt; /opt/pgi/linux86-64/10.3/openmpi/lib/libmpi_f90.so: undefined  
</span><br>
<span class="quotelev2">&gt;&gt; reference to `mpi_sizeof3dch_'
</span><br>
<span class="quotelev2">&gt;&gt; /opt/pgi/linux86-64/10.3/openmpi/lib/libmpi_f90.so: undefined  
</span><br>
<span class="quotelev2">&gt;&gt; reference to `mpi_sizeof1dch_'
</span><br>
<span class="quotelev2">&gt;&gt; /opt/pgi/linux86-64/10.3/openmpi/lib/libmpi_f90.so: undefined  
</span><br>
<span class="quotelev2">&gt;&gt; reference to `mpi_sizeof0dl_'
</span><br>
<span class="quotelev2">&gt;&gt; /opt/pgi/linux86-64/10.3/openmpi/lib/libmpi_f90.so: undefined  
</span><br>
<span class="quotelev2">&gt;&gt; reference to `mpi_sizeof0dch_'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [junk] Error 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is because the specific procedures declared in ompi/mpi/f90/mpi- 
</span><br>
<span class="quotelev1">&gt; f90-interfaces.h are not all implemented in ompi/mpi/f90/ 
</span><br>
<span class="quotelev1">&gt; mpi_sizeof.f90.  It does not seem to matter to gfortran, but PGI  
</span><br>
<span class="quotelev1">&gt; Fortran 90 cares.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The root of the problem is the inconsistency between the methods  
</span><br>
<span class="quotelev1">&gt; used to enumerate the specific procedures in ompi/mpi/f90/scripts/ 
</span><br>
<span class="quotelev1">&gt; mpi-f90-interfaces.h.sh (the declarations) and ompi/mpi/f90/scripts/ 
</span><br>
<span class="quotelev1">&gt; mpi_sizeof.f90.sh (the implementations).  The Character and Logical  
</span><br>
<span class="quotelev1">&gt; implementations are missing.  mpi_sizeof.f90.sh generates lkinds  
</span><br>
<span class="quotelev1">&gt; specific Logical procedure implementations.  However, since lkinds  
</span><br>
<span class="quotelev1">&gt; is not defined in ompi/mpi/f90/fortran_kinds.sh, there are none.   
</span><br>
<span class="quotelev1">&gt; Even if lkinds were defined, mpi-f90-interfaces.h.sh declares a  
</span><br>
<span class="quotelev1">&gt; single (nameless) kind of Logical procedure, while mpi_sizeof.f90.sh  
</span><br>
<span class="quotelev1">&gt; (would, if there were any) decorates the name of each Logical  
</span><br>
<span class="quotelev1">&gt; procedure implementation with the kind.  And, mpi_sizeof.f90.sh  
</span><br>
<span class="quotelev1">&gt; completely leaves out the Character procedure implementations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will work out a fix for this in the next few days, unless the  
</span><br>
<span class="quotelev1">&gt; author wants to.  Is that okay?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Larry Baker
</span><br>
<span class="quotelev1">&gt; US Geological Survey
</span><br>
<span class="quotelev1">&gt; 650-329-5608
</span><br>
<span class="quotelev1">&gt; baker_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 17, 2010, at 2:18 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We still have one known possible regression:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="https://svn.open-mpi.org/trac/ompi/ticket/2530">https://svn.open-mpi.org/trac/ompi/ticket/2530</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But we posted rc5 anyway (there's a bunch of stuff that has been  
</span><br>
<span class="quotelev2">&gt;&gt; pending for a while that is now in).  Please test!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/software/ompi/v1.5/">http://www.open-mpi.org/software/ompi/v1.5/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="8461.php">Bogdan Costescu: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Previous message:</strong> <a href="8459.php">Jeff Squyres: "Re: [OMPI devel] 1.5rc5 over MX"</a>
<li><strong>In reply to:</strong> <a href="8443.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
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
