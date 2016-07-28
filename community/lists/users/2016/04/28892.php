<?
$subject_val = "Re: [OMPI users] resolution of MPI_Wtime";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  5 12:39:53 2016" -->
<!-- isoreceived="20160405163953" -->
<!-- sent="Tue, 5 Apr 2016 12:39:52 -0400" -->
<!-- isosent="20160405163952" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] resolution of MPI_Wtime" -->
<!-- id="CAMJJpkUe0kGCQnZFADbrb86wDy2Om7-jwdbSYbW=AnmS9G8q-A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="87fuv010gl.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-05 12:39:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28893.php">Emani, Murali: "Re: [OMPI users] Question on MPI_Comm_spawn timing"</a>
<li><strong>Previous message:</strong> <a href="28891.php">Nathan Hjelm: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28890.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28896.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28896.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In opal/mca/linux/timer_linux_component.c. The timer is a special component
<br>
which is statically included during the build process (via
<br>
the MCA_timer_IMPLEMENTATION_HEADER define in opal/mca/timer/base/base.h
<br>
line 48). Thus the symbol should appear directly in the libmpi.a
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p>On Tue, Apr 5, 2016 at 12:31 PM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Aur&#195;&#169;lien Bouteiller &lt;bouteill_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI uses clock_gettime when it is available, and defaults to
</span><br>
<span class="quotelev2">&gt; &gt; gettimeofday only when this better option can't be found. Check that
</span><br>
<span class="quotelev2">&gt; &gt; your system has clock_gettime and the resolution of this timer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's what I thought after I raised this originally, but where
</span><br>
<span class="quotelev1">&gt; (assuming I'm not using these components)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   openmpi-1.10.2]$ grep -r -l clock_gettime | egrep -v /libevent\|/vt/
</span><br>
<span class="quotelev1">&gt;   ompi/mca/common/cuda/common_cuda.c
</span><br>
<span class="quotelev1">&gt;   ompi/mca/btl/scif/btl_scif_get.c
</span><br>
<span class="quotelev1">&gt;   ompi/mca/btl/scif/btl_scif_send.c
</span><br>
<span class="quotelev1">&gt;   ompi/mca/btl/scif/btl_scif_put.c
</span><br>
<span class="quotelev1">&gt;   ompi/mca/btl/scif/btl_scif.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is on RHEL6, but I doubt there's a current distribution without
</span><br>
<span class="quotelev1">&gt; clock_gettime.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28890.php">http://www.open-mpi.org/community/lists/users/2016/04/28890.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28892/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28893.php">Emani, Murali: "Re: [OMPI users] Question on MPI_Comm_spawn timing"</a>
<li><strong>Previous message:</strong> <a href="28891.php">Nathan Hjelm: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28890.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28896.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28896.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
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
