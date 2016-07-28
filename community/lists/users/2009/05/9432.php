<?
$subject_val = "Re: [OMPI users] MPI_COMM_WORLD Error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 20:49:39 2009" -->
<!-- isoreceived="20090527004939" -->
<!-- sent="Tue, 26 May 2009 20:49:34 -0400" -->
<!-- isosent="20090527004934" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMM_WORLD Error" -->
<!-- id="0BEC740D-27B4-458C-9B83-3709DA133B5D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-26 20:49:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9433.php">Gus Correa: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Previous message:</strong> <a href="9431.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>In reply to:</strong> <a href="9431.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9435.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Reply:</strong> <a href="9435.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Don't use the mpif.h from that site; Open MPI ships with its own.   
<br>
mpif90 will find it -- you don't need to copy it into the same  
<br>
directory as your .f sources.
<br>
<p><p>On May 26, 2009, at 8:21 PM, &lt;mtcreekmore_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for your reply Eugene.
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
<span class="quotelev1">&gt; /state/partition1/apps/intel/fce/10.1.015/bin/ifort -I/share/apps/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.6-intel/include -pthread -I/share/apps/openmpi-1.2.6- 
</span><br>
<span class="quotelev1">&gt; intel/lib -L/usr/pbs/lib -L/share/apps/openmpi-1.2.6-intel/lib - 
</span><br>
<span class="quotelev1">&gt; lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal -lrt -lpbs -lnuma - 
</span><br>
<span class="quotelev1">&gt; ldl -Wl,--export-dynamic -lnsl -lutil
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The mpif.h file I got off the site. I used the Google &quot;site:  
</span><br>
<span class="quotelev1">&gt; mcs.anl.gov  mpif.h&quot; search and placed it into the same directory as  
</span><br>
<span class="quotelev1">&gt; the main program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So if it is the correct one, I am not sure.
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
<span class="quotelev1">&gt; mtcreekmore_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I and new to OpenMPI and  have looked for this, but not getting  
</span><br>
<span class="quotelev1">&gt; anywhere.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got an example program off this site:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The compute PI in Fortran example.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mcs.anl.gov/research/projects/mpi/usingmpi/examples/simplempi/main.htm">http://www.mcs.anl.gov/research/projects/mpi/usingmpi/examples/simplempi/main.htm</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compiled it with &quot;mpif90&quot; and no errors.
</span><br>
<span class="quotelev1">&gt; Then used the qsub -I and tried both executing directly and &quot;mpirun&quot;  
</span><br>
<span class="quotelev1">&gt; and still receive these errors:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [MGT-2-1:02994] *** An error occurred in MPI_Comm_rank
</span><br>
<span class="quotelev1">&gt; [MGT-2-1:02994] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [MGT-2-1:02994] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [MGT-2-1:02994] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any guidance in the right direction would be appreciated.
</span><br>
<span class="quotelev1">&gt; First, the example works fine for me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You seem to be bombing in MPI_Comm_rank and before it asks you for  
</span><br>
<span class="quotelev1">&gt; any input.  I guess it's having problems with the MPI_COMM_WORLD  
</span><br>
<span class="quotelev1">&gt; communicator being passed to MPI_Comm_rank?  Maybe it's having  
</span><br>
<span class="quotelev1">&gt; problems finding the mpif.h include file?  It's finding *some*  
</span><br>
<span class="quotelev1">&gt; mpif.h include file, but presumably not the right one.  Make sure  
</span><br>
<span class="quotelev1">&gt; the mpif90 and mpirun commands are the ones you think you should be  
</span><br>
<span class="quotelev1">&gt; getting and, if they are, try adding -showme to the mpif90 line to  
</span><br>
<span class="quotelev1">&gt; see where it's looking for the mpif.h include file.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9433.php">Gus Correa: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Previous message:</strong> <a href="9431.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>In reply to:</strong> <a href="9431.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9435.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Reply:</strong> <a href="9435.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
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
