<?
$subject_val = "Re: [OMPI users] mpi_wtime implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 19 13:56:03 2014" -->
<!-- isoreceived="20141119185603" -->
<!-- sent="Wed, 19 Nov 2014 12:56:02 -0600" -->
<!-- isosent="20141119185602" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_wtime implementation" -->
<!-- id="679EB04D-924B-4D56-8CE1-7DE1BFDEF2ED_at_icl.utk.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="87wq6re8up.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_wtime implementation<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-19 13:56:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25846.php">Jerry Mersel: "Re: [OMPI users] job running out of memory"</a>
<li><strong>Previous message:</strong> <a href="25844.php">Dave Love: "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>In reply to:</strong> <a href="25844.php">Dave Love: "Re: [OMPI users] mpi_wtime implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25859.php">George Bosilca: "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>Reply:</strong> <a href="25859.php">George Bosilca: "Re: [OMPI users] mpi_wtime implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave,
<br>
<p>You&#226;&#128;&#153;re right, we screwed up (some #define not correctly set). I have a patch, I&#226;&#128;&#153;ll push it asap.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><span class="quotelev1">&gt; On Nov 19, 2014, at 05:19 , Dave Love &lt;d.love_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;Daniels, Marcus G&quot; &lt;mdaniels_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, 2014-11-17 at 17:31 +0000, Dave Love wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I discovered from looking at the mpiP profiler that OMPI always uses
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gettimeofday rather than clock_gettime to implement mpi_wtime on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GNU/Linux, and that looks sub-optimal. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It can be very expensive in practice, especially for codes that have
</span><br>
<span class="quotelev2">&gt;&gt; fine-grained instrumentation. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OK, but I assumed VT would take that sort of thing into account for
</span><br>
<span class="quotelev1">&gt; platforms I don't have.  clock_gettime(CLOCK_MONOTONIC,) is as fast as
</span><br>
<span class="quotelev1">&gt; gettimeofday on our mainstream sort of system (RHEL6, sandybridge);
</span><br>
<span class="quotelev1">&gt; CLOCK_MONOTONIC_COARSE is about three times faster.  [I can't find that
</span><br>
<span class="quotelev1">&gt; sort of information in Linux doc.]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps there should be a choice via an MCA parameter, but it looks as
</span><br>
<span class="quotelev1">&gt; though it should default to clock_gettime on x86_64 Linux.  I suppose
</span><br>
<span class="quotelev1">&gt; one can argue what &quot;high resolution&quot; means in the mpi_wtime doc, but I'd
</span><br>
<span class="quotelev1">&gt; rather not.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25844.php">http://www.open-mpi.org/community/lists/users/2014/11/25844.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25846.php">Jerry Mersel: "Re: [OMPI users] job running out of memory"</a>
<li><strong>Previous message:</strong> <a href="25844.php">Dave Love: "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>In reply to:</strong> <a href="25844.php">Dave Love: "Re: [OMPI users] mpi_wtime implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25859.php">George Bosilca: "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>Reply:</strong> <a href="25859.php">George Bosilca: "Re: [OMPI users] mpi_wtime implementation"</a>
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
