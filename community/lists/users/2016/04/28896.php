<?
$subject_val = "Re: [OMPI users] resolution of MPI_Wtime";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  6 05:42:10 2016" -->
<!-- isoreceived="20160406094210" -->
<!-- sent="Wed, 06 Apr 2016 10:42:08 +0100" -->
<!-- isosent="20160406094208" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] resolution of MPI_Wtime" -->
<!-- id="87zit7ysy7.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="CAMJJpkUe0kGCQnZFADbrb86wDy2Om7-jwdbSYbW=AnmS9G8q-A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] resolution of MPI_Wtime<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-06 05:42:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28897.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28895.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28892.php">George Bosilca: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28897.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28897.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca &lt;bosilca_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; In opal/mca/linux/timer_linux_component.c. The timer is a special component
</span><br>
<span class="quotelev1">&gt; which is statically included during the build process (via
</span><br>
<span class="quotelev1">&gt; the MCA_timer_IMPLEMENTATION_HEADER define in opal/mca/timer/base/base.h
</span><br>
<span class="quotelev1">&gt; line 48). Thus the symbol should appear directly in the libmpi.a
</span><br>
<p>Are you talking about different source?
<br>
opal/mca/linux/timer_linux_component.c doesn't exist in the unpacked
<br>
1.10.2.  Could you explain how the function gets picked up when it's
<br>
apparently not in the source so that I might be able to debug it?  (I
<br>
went through this before, but have forgotten.)
<br>
MCA_timer_IMPLEMENTATION_HEADER is opal/mca/timer/linux/timer_linux.h,
<br>
and timer_linux_component.c seems to be about obtaining the CPU
<br>
frequency, which I don't understand.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28897.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28895.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28892.php">George Bosilca: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28897.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28897.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
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
