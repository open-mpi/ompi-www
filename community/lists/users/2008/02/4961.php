<?
$subject_val = "Re: [OMPI users] openmpi credits for eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 13:56:12 2008" -->
<!-- isoreceived="20080204185612" -->
<!-- sent="Mon, 4 Feb 2008 11:49:38 -0700" -->
<!-- isosent="20080204184938" -->
<!-- name="Brightwell, Ronald" -->
<!-- email="rbbrigh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi credits for eager messages" -->
<!-- id="20080204184938.GD20614_at_ratbert.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF6C53C841.482EF7EA-ON852573E5.00636DC0-852573E5.006593BA_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi credits for eager messages<br>
<strong>From:</strong> Brightwell, Ronald (<em>rbbrigh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-04 13:49:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4962.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4960.php">Richard Treumann: "[OMPI users] Fw:  openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4959.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4963.php">Patrick Geoffray: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4963.php">Patrick Geoffray: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am well aware of the scaling problems related to the standard
</span><br>
<span class="quotelev1">&gt; send requirements in MPI. I t is a very difficult issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, here is what the standard says: MPI 1.2, page 32 lines 29-37
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<p>I'm well aware of those words.  They are highlighted (in pink no less) in on
<br>
page 50 of my copy of &quot;MPI: The complete reference, Volume 1, The MPI Core&quot; :)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If there are people who want to argue that this is unclear or that
</span><br>
<span class="quotelev1">&gt; it should be changed, the MPI Forum can and should take up the
</span><br>
<span class="quotelev1">&gt; discussion. I think this particular wording is pretty clear.
</span><br>
<p>I don't dispute that they are clear, but I think they should be changed :)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The piece of MPI standard wording you quote is somewhat ambiguous:
</span><br>
<span class="quotelev1">&gt; ============
</span><br>
<span class="quotelev1">&gt; The amount
</span><br>
<span class="quotelev1">&gt; of space available for buffering will be much smaller than program data
</span><br>
<span class="quotelev1">&gt; memory on many systems. Then, it will be easy to write programs that
</span><br>
<span class="quotelev1">&gt; overrun available buffer space.
</span><br>
<span class="quotelev1">&gt; ============
</span><br>
<span class="quotelev1">&gt; But note that this wording mentions a problem that an application
</span><br>
<span class="quotelev1">&gt; can create but does not say the MPI implementation can fail the
</span><br>
<span class="quotelev1">&gt; job.
</span><br>
<p>What kind of errors are meant by &quot;Errors may occur when lack of resources
<br>
prevent the execution of an MPI call.&quot;?
<br>
<p><span class="quotelev1">&gt; The language I have pointed to is where the standard says what
</span><br>
<span class="quotelev1">&gt; the MPI implementation must do.
</span><br>
<p>Understood.
<br>
<p>There's also this advice to users in the Standard:
<br>
<p>&nbsp;&nbsp;A program is ``safe'' if no message buffering is required for the program to
<br>
&nbsp;&nbsp;complete. One can replace all sends in such program with synchronous sends,
<br>
&nbsp;&nbsp;and the program will still run correctly. This conservative programming style
<br>
&nbsp;&nbsp;provides the best portability, since program completion does not depend on
<br>
&nbsp;&nbsp;the amount of buffer space available or in the communication protocol used.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The &quot;lack of resource&quot; statement is more about send and receive
</span><br>
<span class="quotelev1">&gt; descriptors than buffer space. If I write a program with an infinite
</span><br>
<span class="quotelev1">&gt; loop of MPI_IRECV postings the standard allows that to fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Agreed.  And it doesn't need to be infinite.  We've had to explain to our
<br>
users that they can't have a loop that posts a receive for every other
<br>
process in the job....
<br>
<p>Not to muddy the point, but if there's enough ambiguity in the Standard
<br>
for people to ignore the progress rule, then I think (hope) there's enough
<br>
ambiguity for people to ignore the sender throttling issue too ;)
<br>
<p>-Ron
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4962.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4960.php">Richard Treumann: "[OMPI users] Fw:  openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4959.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4963.php">Patrick Geoffray: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4963.php">Patrick Geoffray: "Re: [OMPI users] openmpi credits for eager messages"</a>
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
