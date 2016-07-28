<?
$subject_val = "Re: [OMPI users] MPI_Alltoall with Vector Datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 18:57:44 2014" -->
<!-- isoreceived="20140508225744" -->
<!-- sent="Thu, 8 May 2014 17:57:43 -0500" -->
<!-- isosent="20140508225743" -->
<!-- name="Spenser Gilliland" -->
<!-- email="spenser_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Alltoall with Vector Datatype" -->
<!-- id="CAEBucnAJXFZUozngLX1hxhtaoDkvzA+jQJXRLMOb86bWA96SyA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAEBucnB=jbNPWej75DhTwmmD9rceheGsUb2-To+tMQ7sF-fbew_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-05-08 18:57:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24331.php">Wijnberg, Tom: "[OMPI users] No output when adding host to hostfile"</a>
<li><strong>Previous message:</strong> <a href="24329.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>In reply to:</strong> <a href="24329.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>I figured it out.  The defined type was
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_vector(N, wrows, N, MPI_FLOAT, &amp;mpi_all_unaligned_t);
<br>
<p>Where it should have been
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_vector(wrows, wrows, N, MPI_FLOAT, &amp;mpi_all_unaligned_t);
<br>
<p>This clears up all the errors.
<br>
<p>Thanks,
<br>
Spenser
<br>
<p>On Thu, May 8, 2014 at 5:43 PM, Spenser Gilliland
<br>
&lt;spenser_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The alltoall exchanges data from all nodes to all nodes, including the
</span><br>
<span class="quotelev2">&gt;&gt; local participant. So every participant will write the same amount of
</span><br>
<span class="quotelev2">&gt;&gt; data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I believe that is what my code is doing.  However, I'm not sure
</span><br>
<span class="quotelev1">&gt; why the out of bounds is occurring.  Can you be more specific?  I
</span><br>
<span class="quotelev1">&gt; really want to get this working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Spenser
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><p><pre>
-- 
Spenser Gilliland
Computer Engineer
Doctoral Candidate
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24331.php">Wijnberg, Tom: "[OMPI users] No output when adding host to hostfile"</a>
<li><strong>Previous message:</strong> <a href="24329.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>In reply to:</strong> <a href="24329.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
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
