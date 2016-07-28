<?
$subject_val = "Re: [OMPI users] MPI_COMM_WORLD Error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 20:01:08 2009" -->
<!-- isoreceived="20090527000108" -->
<!-- sent="Wed, 27 May 2009 00:01:04 +0000" -->
<!-- isosent="20090527000104" -->
<!-- name="mtcreekmore_at_[hidden]" -->
<!-- email="mtcreekmore_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMM_WORLD Error" -->
<!-- id="COL117-W582092B6ADCA7B5E943CBEE9530_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="8AC78B79-3E9A-412B-8BA2-43EFE3076DD9_at_rain.org" -->
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
<strong>Date:</strong> 2009-05-26 20:01:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9431.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Previous message:</strong> <a href="9429.php">Eugene Loh: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>In reply to:</strong> <a href="9428.php">Doug Reeder: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9429.php">Eugene Loh: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the reply Doug.
<br>
I was not responsible for the build. It was already setup on one of the university's computers.
<br>
I would have to ask the administrator about that.
<br>
Trent
<br>
<p>From: dlr_at_[hidden]
<br>
To: users_at_[hidden]
<br>
Date: Tue, 26 May 2009 16:50:47 -0700
<br>
Subject: Re: [OMPI users] MPI_COMM_WORLD Error
<br>
<p>Trent,
<br>
Did you build openmpi with support for torque, it isn't in the default configure.
<br>
Doug Reeder
<br>
On May 26, 2009, at 4:29 PM, &lt;mtcreekmore_at_[hidden]&gt; &lt;mtcreekmore_at_[hidden]&gt; wrote:I and new to OpenMPI and  have looked for this, but not getting anywhere.
<br>
<p>I got an example program off this site:
<br>
The compute PI in Fortran example. 
<br>
<a href="http://www.mcs.anl.gov/research/projects/mpi/usingmpi/examples/simplempi/main.htm">http://www.mcs.anl.gov/research/projects/mpi/usingmpi/examples/simplempi/main.htm</a>
<br>
<p>Compiled it with &quot;mpif90&quot; and no errors.Then used the qsub -I and tried both executing directly and &quot;mpirun&quot; and still receive these errors:
<br>
[MGT-2-1:02994] *** An error occurred in MPI_Comm_rank[MGT-2-1:02994] *** on communicator MPI_COMM_WORLD[MGT-2-1:02994] *** MPI_ERR_COMM: invalid communicator[MGT-2-1:02994] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
Any guidance in the right direction would be appreciated.
<br>
Thanks
<br>
Trent
<br>
<p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9430/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9431.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Previous message:</strong> <a href="9429.php">Eugene Loh: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>In reply to:</strong> <a href="9428.php">Doug Reeder: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9429.php">Eugene Loh: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
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
