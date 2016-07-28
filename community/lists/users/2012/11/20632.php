<?
$subject_val = "[OMPI users] mpi_leave_pinned is dangerous";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  3 23:41:54 2012" -->
<!-- isoreceived="20121104034154" -->
<!-- sent="Sat, 3 Nov 2012 22:41:43 -0500" -->
<!-- isosent="20121104034143" -->
<!-- name="Jens Glaser" -->
<!-- email="jglaser_at_[hidden]" -->
<!-- subject="[OMPI users] mpi_leave_pinned is dangerous" -->
<!-- id="72542876-5881-42B3-95BC-3E30E1190418_at_umn.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] mpi_leave_pinned is dangerous<br>
<strong>From:</strong> Jens Glaser (<em>jglaser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-03 23:41:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20633.php">George Markomanolis: "[OMPI users] Question about oversubscribing"</a>
<li><strong>Previous message:</strong> <a href="20631.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20659.php">Jens Glaser: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Reply:</strong> <a href="20659.php">Jens Glaser: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am working on a CUDA/MPI application. It uses page-locked host buffers allocated with cudaHostAlloc(...,cudaHostAllocDefault), to which data from the device is copied before calling MPI.
<br>
The application, a particle simulation, reproducibly crashed or produced undefined behavior at large particle numbers, and I could not explain why this happened.
<br>
After some considerable debugging time (trying two different MPI libraries, MVAPICH2 1.9a and OpenMPI 1.6.1) I discovered openmpi's mpi_leave_pinned parameter.
<br>
Setting mpi_leave_pinned to 0 solved my problem, the crash did not occur again! So far, excellent!
<br>
<p>I do have a request, however. After looking at the output of
<br>
<p>$ ompi_info --param mpi all
<br>
<p>I get
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpi: parameter &quot;mpi_leave_pinned&quot; (current value: &lt;-1&gt;, data source: default
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Whether to use the &quot;leave pinned&quot; protocol or not.  Enabling this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;setting can help bandwidth performance when repeatedly sending and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;receiving large messages with the same buffers over RDMA-based networks
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(0 = do not use &quot;leave pinned&quot; protocol, 1 = use &quot;leave pinned&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;protocol, -1 = allow network to choose at runtime).
<br>
<p>This seems to indicate that the default is that the network adapter chooses whether to enable or disable MPI. In my case, this default setting turns out to be disastrous.
<br>
Also, the FAQ is somewhat ambiguous about this parameter and states that mpi_leave_pinned is off by default in one place, but that it is -1 (as above) at another place.
<br>
<p><a href="http://www.open-mpi.org/faq/?category=openfabrics#large-message-leave-pinned">http://www.open-mpi.org/faq/?category=openfabrics#large-message-leave-pinned</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#setting-mpi-leave-pinned-1.3.2">http://www.open-mpi.org/faq/?category=openfabrics#setting-mpi-leave-pinned-1.3.2</a>
<br>
<p>Can anyone please explain to me the intricacies of this parameter, and what are the ramifications/benefits of having this particular default value?
<br>
<p>Thanks
<br>
Jens
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20633.php">George Markomanolis: "[OMPI users] Question about oversubscribing"</a>
<li><strong>Previous message:</strong> <a href="20631.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20659.php">Jens Glaser: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Reply:</strong> <a href="20659.php">Jens Glaser: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
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
