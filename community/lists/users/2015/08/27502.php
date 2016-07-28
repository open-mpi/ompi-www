<?
$subject_val = "Re: [OMPI users] MPI_LB in a recursive type";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 27 15:58:19 2015" -->
<!-- isoreceived="20150827195819" -->
<!-- sent="Thu, 27 Aug 2015 15:58:18 -0400" -->
<!-- isosent="20150827195818" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_LB in a recursive type" -->
<!-- id="CAMJJpkUAATN8tqwcYgtC+knVx40uJNKOk0WiaVxY0R1SDeGkyg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="alpine.LRH.2.20.1508252135110.24154_at_spark.ices.utexas.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_LB in a recursive type<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-27 15:58:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27503.php">marcin.krotkiewski: "[OMPI users] Wrong distance calculations in multi-rail setup?"</a>
<li><strong>Previous message:</strong> <a href="27501.php">abhisekpan_at_[hidden]: "[OMPI users] Multiple windows for the same communicator at thesame time"</a>
<li><strong>In reply to:</strong> <a href="27495.php">Roy Stogner: "[OMPI users] MPI_LB in a recursive type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27506.php">Roy Stogner: "Re: [OMPI users] MPI_LB in a recursive type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Roy,
<br>
<p>First and foremost the two datatype markers (MPI_LB and MPI_UB) have been
<br>
deprecated from MPI 3.0 for exactly the reason you encountered. Once a
<br>
datatype is annotated with these markers, they are propagated to all
<br>
derived types, leading to an unnatural datatype definition. This behavior
<br>
is enforced by the definition of the typemap specified by the equation on
<br>
Section 4.1 page 105 line 18. Unfortunately, the only way to circumvent
<br>
this issue, is to manually set the UB to all newly created datatypes.
<br>
<p>Thus, to fix your datatype composition you just have to add an explicit
<br>
MPI_LB (set to 0) when calling the MPI_Type_struct on your second struct
<br>
datatype.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Tue, Aug 25, 2015 at 10:57 PM, Roy Stogner &lt;roystgnr_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be a general MPI question rather than an OpenMPI-specific
</span><br>
<span class="quotelev1">&gt; question.  I apologize if I've picked the wrong mailing list for such,
</span><br>
<span class="quotelev1">&gt; and in that case I'd welcome being redirected to a more appropriate
</span><br>
<span class="quotelev1">&gt; forum.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to debug a problem in a much more complex system, but
</span><br>
<span class="quotelev1">&gt; I've boiled it down to a ~100 line MPI-1 test case which exhibits
</span><br>
<span class="quotelev1">&gt; similarly unexpected behavior.  The test case first uses
</span><br>
<span class="quotelev1">&gt; MPI_Type_struct to create a data type corresponding to a 2D point (two
</span><br>
<span class="quotelev1">&gt; doubles), then again to create a heterogenous pair of a single double
</span><br>
<span class="quotelev1">&gt; preceding the 2D point data type.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I use a single block to create the inner data type, then the result
</span><br>
<span class="quotelev1">&gt; works as expected for all operations I've tested.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I use MPI_LB to indicate a lower bound of 0 on the inner data type
</span><br>
<span class="quotelev1">&gt; (which I believe should be redundant in this case, but which can be
</span><br>
<span class="quotelev1">&gt; necessary for more intricate data types in the complex system), then
</span><br>
<span class="quotelev1">&gt; the result fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifically, the recursive data type then gives corrupt results when
</span><br>
<span class="quotelev1">&gt; communicating vectors of these pairs, and even without communication
</span><br>
<span class="quotelev1">&gt; we can see unexpected behavior by querying its extents: A triplet of
</span><br>
<span class="quotelev1">&gt; doubles should begin at byte 0 and end at byte 24, but querying
</span><br>
<span class="quotelev1">&gt; MPI_Type_lb gives a beginning at byte 8 if MPI_LB has been used in the
</span><br>
<span class="quotelev1">&gt; construction.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running mpicxx on the attached file (equivalently, the code pasted at
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/libMesh/libmesh/issues/631#issuecomment-134800297">https://github.com/libMesh/libmesh/issues/631#issuecomment-134800297</a>
</span><br>
<span class="quotelev1">&gt; in case file attachments get stripped here) demonstrates the problem
</span><br>
<span class="quotelev1">&gt; on my (64-bit) system.  For simplicity the displacements here are
</span><br>
<span class="quotelev1">&gt; hard-coded rather than portable, but the original MPI_Address and
</span><br>
<span class="quotelev1">&gt; MPI_Get_address based routines failed in the same way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our full system only fails with MPICH2, but that may just have been
</span><br>
<span class="quotelev1">&gt; luck?  With this test case I'm seeing failures with both MPICH2 and
</span><br>
<span class="quotelev1">&gt; OpenMPI and so I've got to assume my own code is at fault.  Any help
</span><br>
<span class="quotelev1">&gt; would be appreciated.  If there's anything I can do to make the issue
</span><br>
<span class="quotelev1">&gt; easier to replicate please let me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Roy Stogner
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27495.php">http://www.open-mpi.org/community/lists/users/2015/08/27495.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27502/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27503.php">marcin.krotkiewski: "[OMPI users] Wrong distance calculations in multi-rail setup?"</a>
<li><strong>Previous message:</strong> <a href="27501.php">abhisekpan_at_[hidden]: "[OMPI users] Multiple windows for the same communicator at thesame time"</a>
<li><strong>In reply to:</strong> <a href="27495.php">Roy Stogner: "[OMPI users] MPI_LB in a recursive type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27506.php">Roy Stogner: "Re: [OMPI users] MPI_LB in a recursive type"</a>
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
