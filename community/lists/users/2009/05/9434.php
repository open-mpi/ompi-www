<?
$subject_val = "Re: [OMPI users] MPI_COMM_WORLD Error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 21:27:26 2009" -->
<!-- isoreceived="20090527012726" -->
<!-- sent="Wed, 27 May 2009 01:27:21 +0000" -->
<!-- isosent="20090527012721" -->
<!-- name="mtcreekmore_at_[hidden]" -->
<!-- email="mtcreekmore_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMM_WORLD Error" -->
<!-- id="COL117-W41ED24DC3360C2416F0FE2E9530_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4A1C811A.7040709_at_sun.com" -->
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
<strong>Date:</strong> 2009-05-26 21:27:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9435.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Previous message:</strong> <a href="9433.php">Gus Correa: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>In reply to:</strong> <a href="9429.php">Eugene Loh: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay Egune, 
<br>
I see what I was doing wrong. The first time I compiled it with ifortran and it is when it gave me an error about the mpif.h file, so I added in.
<br>
I removed the file  and recompiled it. It works great now.
<br>
Thank you.
<br>
Trent
<br>
<p>Date: Tue, 26 May 2009 16:54:02 -0700
<br>
From: Eugene.Loh_at_[hidden]
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] MPI_COMM_WORLD Error
<br>
<p><p><p><p><p><p>&nbsp;&nbsp;
<br>
&nbsp;&nbsp;
<br>
<p><p>mtcreekmore_at_[hidden] wrote:
<br>
<p>&nbsp;&nbsp;
<br>
&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;
<br>
&nbsp;&nbsp;I and new to OpenMPI and  have looked for this, but not getting
<br>
anywhere.
<br>
&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;
<br>
&nbsp;&nbsp;I got an example program off this site:
<br>
&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;
<br>
&nbsp;&nbsp;The compute PI in Fortran example. 
<br>
<p>&nbsp;&nbsp;
<br>
&nbsp;&nbsp;<a href="http://www.mcs.anl.gov/research/projects/mpi/usingmpi/examples/simplempi/main.htm">http://www.mcs.anl.gov/research/projects/mpi/usingmpi/examples/simplempi/main.htm</a>
<br>
<p>&nbsp;&nbsp;
<br>
&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;
<br>
&nbsp;&nbsp;Compiled it with &quot;mpif90&quot; and no errors.
<br>
&nbsp;&nbsp;Then
<br>
used the qsub -I and tried both executing directly and &quot;mpirun&quot; and
<br>
still receive these errors:
<br>
&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;
<br>
&nbsp;&nbsp;[MGT-2-1:02994] *** An error occurred in MPI_Comm_rank
<br>
&nbsp;&nbsp;[MGT-2-1:02994] *** on communicator MPI_COMM_WORLD
<br>
&nbsp;&nbsp;[MGT-2-1:02994] *** MPI_ERR_COMM: invalid communicator
<br>
&nbsp;&nbsp;[MGT-2-1:02994] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;
<br>
&nbsp;&nbsp;Any guidance in the right direction would be appreciated.
<br>
<p>First, the example works fine for me.
<br>
<p><p><p>You seem to be bombing in MPI_Comm_rank and before it asks you for any
<br>
input.  I guess it's having problems with the MPI_COMM_WORLD
<br>
communicator being passed to MPI_Comm_rank?  Maybe it's having problems
<br>
finding the mpif.h include file?  It's finding *some* mpif.h include
<br>
file, but presumably not the right one.  Make sure the mpif90 and
<br>
mpirun commands are the ones you think you should be getting and, if
<br>
they are, try adding -showme to the mpif90 line to see where it's
<br>
looking for the mpif.h include file.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9434/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9435.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Previous message:</strong> <a href="9433.php">Gus Correa: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>In reply to:</strong> <a href="9429.php">Eugene Loh: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
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
