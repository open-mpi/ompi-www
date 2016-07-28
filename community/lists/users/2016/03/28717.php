<?
$subject_val = "Re: [OMPI users] locked memory and queue pairs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 16:25:24 2016" -->
<!-- isoreceived="20160316202524" -->
<!-- sent="Wed, 16 Mar 2016 16:25:23 -0400" -->
<!-- isosent="20160316202523" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="Re: [OMPI users] locked memory and queue pairs" -->
<!-- id="CABOsP2Nrfki1NK-d8O4LOeUC3YE8M2QPvbfY4sX8tqEJg-gJ9Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="39196F20B4590A4A8337B6A6F7F0FD8D853E37E0_at_FMSMSX102.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] locked memory and queue pairs<br>
<strong>From:</strong> Michael Di Domenico (<em>mdidomenico4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-16 16:25:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28718.php">Cabral, Matias A: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Previous message:</strong> <a href="28716.php">Cabral, Matias A: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>In reply to:</strong> <a href="28716.php">Cabral, Matias A: "Re: [OMPI users] locked memory and queue pairs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28718.php">Cabral, Matias A: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Reply:</strong> <a href="28718.php">Cabral, Matias A: "Re: [OMPI users] locked memory and queue pairs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Mar 16, 2016 at 3:37 PM, Cabral, Matias A
<br>
&lt;matias.a.cabral_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Michael,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I may be missing some context, if you are using the qlogic cards you will always want to use the psm mtl (-mca pml cm -mca mtl psm) and not openib btl. As Tom suggest, confirm the limits are setup on every node: could it be the alltoall is reaching a node that &quot;others&quot; are not? Please share the command line and the error message.
</span><br>
<p><p><p>Yes, under normal circumstances, I use PSM.  i only disabled to see if
<br>
it affected any kind of change.
<br>
<p>the test i'm running is
<br>
<p>mpirun -n 512 ./IMB-MPI1 alltoallv
<br>
<p>when the system gets to 128 ranks, it freezes and errors out with
<br>
<p><pre>
---
A process failed to create a queue pair. This usually means either
the device has run out of queue pairs (too many connections) or
there are insufficient resources available to allocate a queue pair
(out of memory). The latter can happen if either 1) insufficient
memory is available, or 2) no more physical memory can be registered
with the device.
For more information on memory registration see the Open MPI FAQs at:
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
Local host:             node001
Local device:           qib0
Queue pair type:        Reliable connected (RC)
---
i've also tried various nodes across the cluster (200+).  i think i
ruled out errant switch (qlogic single 12800-120) problems, bad
cables, and bad nodes.  that's not to say they're may not be present,
i've just not been able to find it
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28718.php">Cabral, Matias A: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Previous message:</strong> <a href="28716.php">Cabral, Matias A: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>In reply to:</strong> <a href="28716.php">Cabral, Matias A: "Re: [OMPI users] locked memory and queue pairs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28718.php">Cabral, Matias A: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Reply:</strong> <a href="28718.php">Cabral, Matias A: "Re: [OMPI users] locked memory and queue pairs"</a>
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
