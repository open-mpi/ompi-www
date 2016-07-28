<?
$subject_val = "Re: [OMPI users] MPI_Alltoall with Vector Datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 18:16:57 2014" -->
<!-- isoreceived="20140508221657" -->
<!-- sent="Thu, 8 May 2014 17:16:56 -0500" -->
<!-- isosent="20140508221656" -->
<!-- name="Spenser Gilliland" -->
<!-- email="spenser_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Alltoall with Vector Datatype" -->
<!-- id="CAEBucnBZer5eHV-OAdpiEzPoh91Wi4UcNWvTwj3DQ-3wNNdTjA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="6B15FE48-F896-4DAC-86B3-09A00A32DD4B_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Alltoall with Vector Datatype<br>
<strong>From:</strong> Spenser Gilliland (<em>spenser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-08 18:16:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24327.php">Richard Shaw: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>Previous message:</strong> <a href="24325.php">George Bosilca: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>In reply to:</strong> <a href="24322.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24328.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Reply:</strong> <a href="24328.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p><span class="quotelev1">&gt; Here is basically what is happening. On the top left, I depicted the datatype resulting from the vector type. The two arrows point to the lower bound and upper bound (thus the extent) of the datatype. On the top right, the resized datatype, where the ub is now moved 2 elements after the lb, allowing for a nice interleaving of the data. Then the next line is the unrolled datatype representation, flatten to a 1D. Again it contains in red the data touched by the defined memory layout, as well as the extent (lb and ub).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, let&#226;&#128;&#153;s move on the MPI_Alltoall call. The array is the one without colors, and then I put the datatype starting from the position you specified in the alltoall. As you can see as soon as you don&#226;&#128;&#153;t start at the origin of the allocated memory, you end-up writing outside of your data. This happens deep inside the MPI_Alltoall call (no validation at the MPI level).
</span><br>
<p>Why are the last two elements in the 1D view present?  If that's the
<br>
case I would have to define a new MPI Type for each set of columns
<br>
within a matrix.  Why would it be defined in this manner?  Also, why
<br>
is the extent of the initial vector type equal to 12 when it is
<br>
actually accessing 16 elements (for the 4x4 example).
<br>
<p>So, is this a bug in Alltoall or openmpi?
<br>
<p>I believe it is all to all causing the bug and not vector because the following
<br>
<p>MPI_Aint lb, extent, true_lb, true_extent;
<br>
MPI_Type_get_extent(mpi_all_t, &amp;lb, &amp;extent);
<br>
MPI_Type_get_true_extent(mpi_all_t, &amp;true_lb, &amp;true_extent);
<br>
printf(&quot;mpi_all_t - lb = %d, extent = %d, true_lb = %d, true_extent =
<br>
%d\n&quot;, lb, extent, true_lb, true_extent);
<br>
<p>produces
<br>
<p>mpi_all_t - lb = 0, extent = 16, true_lb = 0, true_extent = 240
<br>
<p>Which means that the size is correct (using 4 byte floats with 2
<br>
processor on an 8x8 array this would be the 30th element).
<br>
<p>There's a similar drawing to what you made attached that's more
<br>
focused on the specific instance in this code.  Hopefully, this clears
<br>
up the algorithm a bit.
<br>
<p>Thanks,
<br>
Spenser
<br>
<p><pre>
-- 
Spenser Gilliland
Computer Engineer
Doctoral Candidate

</pre>
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24326/MPI_Alltoall_Derived_Types.pdf">MPI_Alltoall_Derived_Types.pdf</a>
</ul>
<!-- attachment="MPI_Alltoall_Derived_Types.pdf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24327.php">Richard Shaw: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>Previous message:</strong> <a href="24325.php">George Bosilca: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>In reply to:</strong> <a href="24322.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24328.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Reply:</strong> <a href="24328.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
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
