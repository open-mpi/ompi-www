<?
$subject_val = "Re: [OMPI users] MPI_Alltoall with Vector Datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 18:19:55 2014" -->
<!-- isoreceived="20140508221955" -->
<!-- sent="Thu, 8 May 2014 18:19:53 -0400" -->
<!-- isosent="20140508221953" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Alltoall with Vector Datatype" -->
<!-- id="CAMJJpkVEhAfv3VeyjTi8Sxo08+AQ5tze+c4B_-doF2za7T1f7g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAEBucnBZer5eHV-OAdpiEzPoh91Wi4UcNWvTwj3DQ-3wNNdTjA_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-08 18:19:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24329.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Previous message:</strong> <a href="24327.php">Richard Shaw: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>In reply to:</strong> <a href="24326.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24329.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Reply:</strong> <a href="24329.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The alltoall exchanges data from all nodes to all nodes, including the
<br>
local participant. So every participant will write the same amount of
<br>
data.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Thu, May 8, 2014 at 6:16 PM, Spenser Gilliland
<br>
&lt;spenser_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is basically what is happening. On the top left, I depicted the datatype resulting from the vector type. The two arrows point to the lower bound and upper bound (thus the extent) of the datatype. On the top right, the resized datatype, where the ub is now moved 2 elements after the lb, allowing for a nice interleaving of the data. Then the next line is the unrolled datatype representation, flatten to a 1D. Again it contains in red the data touched by the defined memory layout, as well as the extent (lb and ub).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now, let&#226;&#128;&#153;s move on the MPI_Alltoall call. The array is the one without colors, and then I put the datatype starting from the position you specified in the alltoall. As you can see as soon as you don&#226;&#128;&#153;t start at the origin of the allocated memory, you end-up writing outside of your data. This happens deep inside the MPI_Alltoall call (no validation at the MPI level).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why are the last two elements in the 1D view present?  If that's the
</span><br>
<span class="quotelev1">&gt; case I would have to define a new MPI Type for each set of columns
</span><br>
<span class="quotelev1">&gt; within a matrix.  Why would it be defined in this manner?  Also, why
</span><br>
<span class="quotelev1">&gt; is the extent of the initial vector type equal to 12 when it is
</span><br>
<span class="quotelev1">&gt; actually accessing 16 elements (for the 4x4 example).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, is this a bug in Alltoall or openmpi?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe it is all to all causing the bug and not vector because the following
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Aint lb, extent, true_lb, true_extent;
</span><br>
<span class="quotelev1">&gt; MPI_Type_get_extent(mpi_all_t, &amp;lb, &amp;extent);
</span><br>
<span class="quotelev1">&gt; MPI_Type_get_true_extent(mpi_all_t, &amp;true_lb, &amp;true_extent);
</span><br>
<span class="quotelev1">&gt; printf(&quot;mpi_all_t - lb = %d, extent = %d, true_lb = %d, true_extent =
</span><br>
<span class="quotelev1">&gt; %d\n&quot;, lb, extent, true_lb, true_extent);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; produces
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpi_all_t - lb = 0, extent = 16, true_lb = 0, true_extent = 240
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which means that the size is correct (using 4 byte floats with 2
</span><br>
<span class="quotelev1">&gt; processor on an 8x8 array this would be the 30th element).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's a similar drawing to what you made attached that's more
</span><br>
<span class="quotelev1">&gt; focused on the specific instance in this code.  Hopefully, this clears
</span><br>
<span class="quotelev1">&gt; up the algorithm a bit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Spenser
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Spenser Gilliland
</span><br>
<span class="quotelev1">&gt; Computer Engineer
</span><br>
<span class="quotelev1">&gt; Doctoral Candidate
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
<li><strong>Next message:</strong> <a href="24329.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Previous message:</strong> <a href="24327.php">Richard Shaw: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>In reply to:</strong> <a href="24326.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24329.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Reply:</strong> <a href="24329.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
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
