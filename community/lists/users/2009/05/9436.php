<?
$subject_val = "Re: [OMPI users] MPI_COMM_WORLD Error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 21:30:57 2009" -->
<!-- isoreceived="20090527013057" -->
<!-- sent="Wed, 27 May 2009 01:30:52 +0000" -->
<!-- isosent="20090527013052" -->
<!-- name="mtcreekmore_at_[hidden]" -->
<!-- email="mtcreekmore_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMM_WORLD Error" -->
<!-- id="COL117-W437A698664AC4259E53EB1E9530_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4A1C8E5E.7000206_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> <a href="mailto:mtcreekmore_at_[hidden]?Subject=Re:%20[OMPI%20users]%20MPI_COMM_WORLD%20Error"><em>mtcreekmore_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-05-26 21:30:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9437.php">Michael Kuklik: "[OMPI users] problem with installing openmpi with intel compiler on ubuntu"</a>
<li><strong>Previous message:</strong> <a href="9435.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>In reply to:</strong> <a href="9433.php">Gus Correa: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9434.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank to you also Gus for replying.All of your tips helped.
<br>
Thanks
<br>
Trent
<br>
<span class="quotelev1">&gt; Date: Tue, 26 May 2009 20:50:38 -0400
</span><br>
<span class="quotelev1">&gt; From: gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_COMM_WORLD Error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Trent, list
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mtcreekmore_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your reply Eugene.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Here is the result of the mpif90 -showme
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt; /state/partition1/apps/intel/fce/10.1.015/bin/ifort 
</span><br>
<span class="quotelev2">&gt; &gt; -I/share/apps/openmpi-1.2.6-intel/include -pthread 
</span><br>
<span class="quotelev2">&gt; &gt; -I/share/apps/openmpi-1.2.6-intel/lib -L/usr/pbs/lib 
</span><br>
<span class="quotelev2">&gt; &gt; -L/share/apps/openmpi-1.2.6-intel/lib -lmpi_f90 -lmpi_f77 -lmpi 
</span><br>
<span class="quotelev2">&gt; &gt; -lopen-rte -lopen-pal -lrt -lpbs -lnuma -ldl -Wl,--export-dynamic -lnsl 
</span><br>
<span class="quotelev2">&gt; &gt; -lutil
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The mpif.h file I got off the site. I used the Google &quot;site: mcs.anl.gov 
</span><br>
<span class="quotelev2">&gt; &gt; &lt;<a href="http://www.mcs.anl.gov/research/projects/mpi/usingmpi/examples/simplempi/main.htm">http://www.mcs.anl.gov/research/projects/mpi/usingmpi/examples/simplempi/main.htm</a>&gt;  mpif.h&quot; 
</span><br>
<span class="quotelev2">&gt; &gt; search and placed it into the same directory as the main program.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then you are using the MPICH mpif.h file, not the OpenMPI one,
</span><br>
<span class="quotelev1">&gt; and the mix is probably the reason for the error.
</span><br>
<span class="quotelev1">&gt; You can/should remove it from the directory where your pi.f program is.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, if you use the OpenMPI wrappers to compile,
</span><br>
<span class="quotelev1">&gt; they know exactly where to find the right mpif.h,
</span><br>
<span class="quotelev1">&gt; i.e., to compile pi.f just do &quot;mpif90 pi.f&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Make sure your PATH is points to the OpenMPI executables (mpif90, 
</span><br>
<span class="quotelev1">&gt; mpiexec, etc) ahead of other flavors of MPI that may be installed on
</span><br>
<span class="quotelev1">&gt; your system.  Or simply use the full path names to the OpenMPI mpif90
</span><br>
<span class="quotelev1">&gt; and to mpiexec.  Inadvertent mix of these executables
</span><br>
<span class="quotelev1">&gt; from different MPIs is a common source of frustration too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So if it is the correct one, I am not sure.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Trent
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Date: Tue, 26 May 2009 16:54:02 -0700
</span><br>
<span class="quotelev2">&gt; &gt; From: Eugene.Loh_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] MPI_COMM_WORLD Error
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mtcreekmore_at_[hidden] &lt;mailto:mtcreekmore_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     I and new to OpenMPI and  have looked for this, but not getting
</span><br>
<span class="quotelev2">&gt; &gt;     anywhere.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     I got an example program off this site:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     The compute PI in Fortran example. 
</span><br>
<span class="quotelev2">&gt; &gt;     <a href="http://www.mcs.anl.gov/research/projects/mpi/usingmpi/examples/simplempi/main.htm">http://www.mcs.anl.gov/research/projects/mpi/usingmpi/examples/simplempi/main.htm</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     Compiled it with &quot;mpif90&quot; and no errors.
</span><br>
<span class="quotelev2">&gt; &gt;     Then used the qsub -I and tried both executing directly and &quot;mpirun&quot;
</span><br>
<span class="quotelev2">&gt; &gt;     and still receive these errors:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     [MGT-2-1:02994] *** An error occurred in MPI_Comm_rank
</span><br>
<span class="quotelev2">&gt; &gt;     [MGT-2-1:02994] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt;     [MGT-2-1:02994] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev2">&gt; &gt;     [MGT-2-1:02994] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     Any guidance in the right direction would be appreciated.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; First, the example works fine for me.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; You seem to be bombing in MPI_Comm_rank and before it asks you for any 
</span><br>
<span class="quotelev2">&gt; &gt; input.  I guess it's having problems with the MPI_COMM_WORLD 
</span><br>
<span class="quotelev2">&gt; &gt; communicator being passed to MPI_Comm_rank?  Maybe it's having problems 
</span><br>
<span class="quotelev2">&gt; &gt; finding the mpif.h include file?  It's finding *some* mpif.h include 
</span><br>
<span class="quotelev2">&gt; &gt; file, but presumably not the right one.  Make sure the mpif90 and mpirun 
</span><br>
<span class="quotelev2">&gt; &gt; commands are the ones you think you should be getting and, if they are, 
</span><br>
<span class="quotelev2">&gt; &gt; try adding -showme to the mpif90 line to see where it's looking for the 
</span><br>
<span class="quotelev2">&gt; &gt; mpif.h include file.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9436/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9437.php">Michael Kuklik: "[OMPI users] problem with installing openmpi with intel compiler on ubuntu"</a>
<li><strong>Previous message:</strong> <a href="9435.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>In reply to:</strong> <a href="9433.php">Gus Correa: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9434.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
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
