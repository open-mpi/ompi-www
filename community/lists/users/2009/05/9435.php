<?
$subject_val = "Re: [OMPI users] MPI_COMM_WORLD Error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 21:30:06 2009" -->
<!-- isoreceived="20090527013006" -->
<!-- sent="Wed, 27 May 2009 01:30:02 +0000" -->
<!-- isosent="20090527013002" -->
<!-- name="mtcreekmore_at_[hidden]" -->
<!-- email="mtcreekmore_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMM_WORLD Error" -->
<!-- id="COL117-W2041DF4C3B23E7BF9AC9D6E9530_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="0BEC740D-27B4-458C-9B83-3709DA133B5D_at_cisco.com" -->
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
<strong>Date:</strong> 2009-05-26 21:30:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9436.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Previous message:</strong> <a href="9434.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>In reply to:</strong> <a href="9432.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9433.php">Gus Correa: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I finally got it.
<br>
Thanks
<br>
<p><span class="quotelev1">&gt; From: jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Tue, 26 May 2009 20:49:34 -0400
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_COMM_WORLD Error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Don't use the mpif.h from that site; Open MPI ships with its own.   
</span><br>
<span class="quotelev1">&gt; mpif90 will find it -- you don't need to copy it into the same  
</span><br>
<span class="quotelev1">&gt; directory as your .f sources.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 26, 2009, at 8:21 PM, &lt;mtcreekmore_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev2">&gt; &gt; /state/partition1/apps/intel/fce/10.1.015/bin/ifort -I/share/apps/ 
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.2.6-intel/include -pthread -I/share/apps/openmpi-1.2.6- 
</span><br>
<span class="quotelev2">&gt; &gt; intel/lib -L/usr/pbs/lib -L/share/apps/openmpi-1.2.6-intel/lib - 
</span><br>
<span class="quotelev2">&gt; &gt; lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal -lrt -lpbs -lnuma - 
</span><br>
<span class="quotelev2">&gt; &gt; ldl -Wl,--export-dynamic -lnsl -lutil
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The mpif.h file I got off the site. I used the Google &quot;site:  
</span><br>
<span class="quotelev2">&gt; &gt; mcs.anl.gov  mpif.h&quot; search and placed it into the same directory as  
</span><br>
<span class="quotelev2">&gt; &gt; the main program.
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev2">&gt; &gt; mtcreekmore_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I and new to OpenMPI and  have looked for this, but not getting  
</span><br>
<span class="quotelev2">&gt; &gt; anywhere.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I got an example program off this site:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The compute PI in Fortran example.
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.mcs.anl.gov/research/projects/mpi/usingmpi/examples/simplempi/main.htm">http://www.mcs.anl.gov/research/projects/mpi/usingmpi/examples/simplempi/main.htm</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Compiled it with &quot;mpif90&quot; and no errors.
</span><br>
<span class="quotelev2">&gt; &gt; Then used the qsub -I and tried both executing directly and &quot;mpirun&quot;  
</span><br>
<span class="quotelev2">&gt; &gt; and still receive these errors:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [MGT-2-1:02994] *** An error occurred in MPI_Comm_rank
</span><br>
<span class="quotelev2">&gt; &gt; [MGT-2-1:02994] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; [MGT-2-1:02994] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev2">&gt; &gt; [MGT-2-1:02994] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any guidance in the right direction would be appreciated.
</span><br>
<span class="quotelev2">&gt; &gt; First, the example works fine for me.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You seem to be bombing in MPI_Comm_rank and before it asks you for  
</span><br>
<span class="quotelev2">&gt; &gt; any input.  I guess it's having problems with the MPI_COMM_WORLD  
</span><br>
<span class="quotelev2">&gt; &gt; communicator being passed to MPI_Comm_rank?  Maybe it's having  
</span><br>
<span class="quotelev2">&gt; &gt; problems finding the mpif.h include file?  It's finding *some*  
</span><br>
<span class="quotelev2">&gt; &gt; mpif.h include file, but presumably not the right one.  Make sure  
</span><br>
<span class="quotelev2">&gt; &gt; the mpif90 and mpirun commands are the ones you think you should be  
</span><br>
<span class="quotelev2">&gt; &gt; getting and, if they are, try adding -showme to the mpif90 line to  
</span><br>
<span class="quotelev2">&gt; &gt; see where it's looking for the mpif.h include file.
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9435/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9436.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Previous message:</strong> <a href="9434.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>In reply to:</strong> <a href="9432.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9433.php">Gus Correa: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
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
