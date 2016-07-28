<?
$subject_val = "Re: [OMPI users] MPI_COMM_WORLD Error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 19:50:52 2009" -->
<!-- isoreceived="20090526235052" -->
<!-- sent="Tue, 26 May 2009 16:50:47 -0700" -->
<!-- isosent="20090526235047" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMM_WORLD Error" -->
<!-- id="8AC78B79-3E9A-412B-8BA2-43EFE3076DD9_at_rain.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="COL117-W164EA384CBC32A6EBBA870E9520_at_phx.gbl" -->
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
<strong>From:</strong> Doug Reeder (<em>dlr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-26 19:50:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9429.php">Eugene Loh: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Previous message:</strong> <a href="9427.php">mtcreekmore_at_[hidden]: "[OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>In reply to:</strong> <a href="9427.php">mtcreekmore_at_[hidden]: "[OMPI users] MPI_COMM_WORLD Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9430.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Reply:</strong> <a href="9430.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Trent,
<br>
<p>Did you build openmpi with support for torque, it isn't in the default  
<br>
configure.
<br>
<p>Doug Reeder
<br>
On May 26, 2009, at 4:29 PM, &lt;mtcreekmore_at_[hidden]&gt; &lt;mtcreekmore_at_[hidden] 
<br>
<span class="quotelev1"> &gt; wrote:
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I and new to OpenMPI and  have looked for this, but not getting  
</span><br>
<span class="quotelev1">&gt; anywhere.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
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
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9428/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9429.php">Eugene Loh: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Previous message:</strong> <a href="9427.php">mtcreekmore_at_[hidden]: "[OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>In reply to:</strong> <a href="9427.php">mtcreekmore_at_[hidden]: "[OMPI users] MPI_COMM_WORLD Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9430.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Reply:</strong> <a href="9430.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
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
