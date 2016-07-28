<?
$subject_val = "Re: [OMPI users] MPI_COMM_WORLD Error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 20:50:47 2009" -->
<!-- isoreceived="20090527005047" -->
<!-- sent="Tue, 26 May 2009 20:50:38 -0400" -->
<!-- isosent="20090527005038" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMM_WORLD Error" -->
<!-- id="4A1C8E5E.7000206_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="COL117-W460AEF3E120EC6A1B49651E9530_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_COMM_WORLD Error<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-26 20:50:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9434.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Previous message:</strong> <a href="9432.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>In reply to:</strong> <a href="9431.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9436.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Reply:</strong> <a href="9436.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Trent, list
<br>
<p>mtcreekmore_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Thanks for your reply Eugene.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the result of the mpif90 -showme
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; /state/partition1/apps/intel/fce/10.1.015/bin/ifort 
</span><br>
<span class="quotelev1">&gt; -I/share/apps/openmpi-1.2.6-intel/include -pthread 
</span><br>
<span class="quotelev1">&gt; -I/share/apps/openmpi-1.2.6-intel/lib -L/usr/pbs/lib 
</span><br>
<span class="quotelev1">&gt; -L/share/apps/openmpi-1.2.6-intel/lib -lmpi_f90 -lmpi_f77 -lmpi 
</span><br>
<span class="quotelev1">&gt; -lopen-rte -lopen-pal -lrt -lpbs -lnuma -ldl -Wl,--export-dynamic -lnsl 
</span><br>
<span class="quotelev1">&gt; -lutil
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The mpif.h file I got off the site. I used the Google &quot;site: mcs.anl.gov 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.mcs.anl.gov/research/projects/mpi/usingmpi/examples/simplempi/main.htm">http://www.mcs.anl.gov/research/projects/mpi/usingmpi/examples/simplempi/main.htm</a>&gt;  mpif.h&quot; 
</span><br>
<span class="quotelev1">&gt; search and placed it into the same directory as the main program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>Then you are using the MPICH mpif.h file, not the OpenMPI one,
<br>
and the mix is probably the reason for the error.
<br>
You can/should remove it from the directory where your pi.f program is.
<br>
<p>Actually, if you use the OpenMPI wrappers to compile,
<br>
they know exactly where to find the right mpif.h,
<br>
i.e., to compile pi.f just do &quot;mpif90 pi.f&quot;.
<br>
<p>Make sure your PATH is points to the OpenMPI executables (mpif90, 
<br>
mpiexec, etc) ahead of other flavors of MPI that may be installed on
<br>
your system.  Or simply use the full path names to the OpenMPI mpif90
<br>
and to mpiexec.  Inadvertent mix of these executables
<br>
from different MPIs is a common source of frustration too.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p><p><span class="quotelev1">&gt; So if it is the correct one, I am not sure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Trent
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Date: Tue, 26 May 2009 16:54:02 -0700
</span><br>
<span class="quotelev1">&gt; From: Eugene.Loh_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_COMM_WORLD Error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mtcreekmore_at_[hidden] &lt;mailto:mtcreekmore_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     I and new to OpenMPI and  have looked for this, but not getting
</span><br>
<span class="quotelev1">&gt;     anywhere.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     I got an example program off this site:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     The compute PI in Fortran example. 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.mcs.anl.gov/research/projects/mpi/usingmpi/examples/simplempi/main.htm">http://www.mcs.anl.gov/research/projects/mpi/usingmpi/examples/simplempi/main.htm</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Compiled it with &quot;mpif90&quot; and no errors.
</span><br>
<span class="quotelev1">&gt;     Then used the qsub -I and tried both executing directly and &quot;mpirun&quot;
</span><br>
<span class="quotelev1">&gt;     and still receive these errors:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     [MGT-2-1:02994] *** An error occurred in MPI_Comm_rank
</span><br>
<span class="quotelev1">&gt;     [MGT-2-1:02994] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;     [MGT-2-1:02994] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt;     [MGT-2-1:02994] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Any guidance in the right direction would be appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First, the example works fine for me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You seem to be bombing in MPI_Comm_rank and before it asks you for any 
</span><br>
<span class="quotelev1">&gt; input.  I guess it's having problems with the MPI_COMM_WORLD 
</span><br>
<span class="quotelev1">&gt; communicator being passed to MPI_Comm_rank?  Maybe it's having problems 
</span><br>
<span class="quotelev1">&gt; finding the mpif.h include file?  It's finding *some* mpif.h include 
</span><br>
<span class="quotelev1">&gt; file, but presumably not the right one.  Make sure the mpif90 and mpirun 
</span><br>
<span class="quotelev1">&gt; commands are the ones you think you should be getting and, if they are, 
</span><br>
<span class="quotelev1">&gt; try adding -showme to the mpif90 line to see where it's looking for the 
</span><br>
<span class="quotelev1">&gt; mpif.h include file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9434.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Previous message:</strong> <a href="9432.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>In reply to:</strong> <a href="9431.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9436.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Reply:</strong> <a href="9436.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
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
