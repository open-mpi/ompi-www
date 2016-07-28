<?
$subject_val = "Re: [OMPI users] mpi_leave_pinned is dangerous";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 19:21:41 2012" -->
<!-- isoreceived="20121108002141" -->
<!-- sent="Wed, 7 Nov 2012 18:21:23 -0600" -->
<!-- isosent="20121108002123" -->
<!-- name="Jens Glaser" -->
<!-- email="jglaser_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_leave_pinned is dangerous" -->
<!-- id="2D3781C8-70D2-4966-B280-B6B1CC73B93C_at_umn.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="72542876-5881-42B3-95BC-3E30E1190418_at_umn.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_leave_pinned is dangerous<br>
<strong>From:</strong> Jens Glaser (<em>jglaser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-07 19:21:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20660.php">Jeff Squyres: "Re: [OMPI users] How is hwloc used by OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20658.php">Brice Goglin: "Re: [OMPI users] How is hwloc used by OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="20632.php">Jens Glaser: "[OMPI users] mpi_leave_pinned is dangerous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20663.php">Jeff Squyres: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Reply:</strong> <a href="20663.php">Jeff Squyres: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am replying to my own post, since no one else replied.
<br>
<p>With the help of MVAPICH2 developer S. Potluri the problem was isolated and fixed. It was, as expected, due to the library not intercepting
<br>
the cudaHostAlloc() and cudaFreeHost() calls to register pinned memory, as would be required for the registration cache to work.
<br>
I replaced all of these calls with standard posix_memalign()/cudaHostRegister() calls in my code and the application now runs fine, with MVAPICH2
<br>
and with OpenMPI, and with registration cache enabled.
<br>
<p>It would be desirable to have both libraries intercept the call to cudaHostAlloc/cudaFreeHost() (I assume OpenMPI 1.7 will have some level of cuda support), because
<br>
otherwise applications using GPUDirect are not guaranteed to work correctly with them, that is, they will exhibit undefined behavior.
<br>
<p>Jens
<br>
<p>On Nov 3, 2012, at 10:41 PM, Jens Glaser wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am working on a CUDA/MPI application. It uses page-locked host buffers allocated with cudaHostAlloc(...,cudaHostAllocDefault), to which data from the device is copied before calling MPI.
</span><br>
<span class="quotelev1">&gt; The application, a particle simulation, reproducibly crashed or produced undefined behavior at large particle numbers, and I could not explain why this happened.
</span><br>
<span class="quotelev1">&gt; After some considerable debugging time (trying two different MPI libraries, MVAPICH2 1.9a and OpenMPI 1.6.1) I discovered openmpi's mpi_leave_pinned parameter.
</span><br>
<span class="quotelev1">&gt; Setting mpi_leave_pinned to 0 solved my problem, the crash did not occur again! So far, excellent!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do have a request, however. After looking at the output of
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ompi_info --param mpi all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get
</span><br>
<span class="quotelev1">&gt;                 MCA mpi: parameter &quot;mpi_leave_pinned&quot; (current value: &lt;-1&gt;, data source: default
</span><br>
<span class="quotelev1">&gt;                          value)
</span><br>
<span class="quotelev1">&gt;                          Whether to use the &quot;leave pinned&quot; protocol or not.  Enabling this
</span><br>
<span class="quotelev1">&gt;                          setting can help bandwidth performance when repeatedly sending and
</span><br>
<span class="quotelev1">&gt;                          receiving large messages with the same buffers over RDMA-based networks
</span><br>
<span class="quotelev1">&gt;                          (0 = do not use &quot;leave pinned&quot; protocol, 1 = use &quot;leave pinned&quot;
</span><br>
<span class="quotelev1">&gt;                          protocol, -1 = allow network to choose at runtime).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This seems to indicate that the default is that the network adapter chooses whether to enable or disable MPI. In my case, this default setting turns out to be disastrous.
</span><br>
<span class="quotelev1">&gt; Also, the FAQ is somewhat ambiguous about this parameter and states that mpi_leave_pinned is off by default in one place, but that it is -1 (as above) at another place.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#large-message-leave-pinned">http://www.open-mpi.org/faq/?category=openfabrics#large-message-leave-pinned</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#setting-mpi-leave-pinned-1.3.2">http://www.open-mpi.org/faq/?category=openfabrics#setting-mpi-leave-pinned-1.3.2</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone please explain to me the intricacies of this parameter, and what are the ramifications/benefits of having this particular default value?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Jens
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20660.php">Jeff Squyres: "Re: [OMPI users] How is hwloc used by OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20658.php">Brice Goglin: "Re: [OMPI users] How is hwloc used by OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="20632.php">Jens Glaser: "[OMPI users] mpi_leave_pinned is dangerous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20663.php">Jeff Squyres: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Reply:</strong> <a href="20663.php">Jeff Squyres: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
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
