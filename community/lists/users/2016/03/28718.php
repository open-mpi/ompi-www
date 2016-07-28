<?
$subject_val = "Re: [OMPI users] locked memory and queue pairs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 16:49:31 2016" -->
<!-- isoreceived="20160316204931" -->
<!-- sent="Wed, 16 Mar 2016 20:49:18 +0000" -->
<!-- isosent="20160316204918" -->
<!-- name="Cabral, Matias A" -->
<!-- email="matias.a.cabral_at_[hidden]" -->
<!-- subject="Re: [OMPI users] locked memory and queue pairs" -->
<!-- id="39196F20B4590A4A8337B6A6F7F0FD8D853E3906_at_FMSMSX102.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CABOsP2Nrfki1NK-d8O4LOeUC3YE8M2QPvbfY4sX8tqEJg-gJ9Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Cabral, Matias A (<em>matias.a.cabral_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-16 16:49:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28719.php">Lane, William: "[OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems"</a>
<li><strong>Previous message:</strong> <a href="28717.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>In reply to:</strong> <a href="28717.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28726.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Reply:</strong> <a href="28726.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I didn't go into the code to see who is actually calling this error message, but I suspect this may be a generic error for &quot;out of memory&quot; kind of thing and not specific to the que pair. To confirm please add  -mca pml_base_verbose 100 and add  -mca mtl_base_verbose 100  to see what is being selected. 
<br>
<p>I'm trying to remember some details of IMB  and alltoallv to see if it is indeed requiring more resources that the other micro benchmarks. 
<br>
<p>BTW, did you confirm the limits setup? Also do the nodes have all the same amount of mem? 
<br>
<p>_MAC
<br>
<p><p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Michael Di Domenico
<br>
Sent: Wednesday, March 16, 2016 1:25 PM
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] locked memory and queue pairs
<br>
<p>On Wed, Mar 16, 2016 at 3:37 PM, Cabral, Matias A &lt;matias.a.cabral_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Michael,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I may be missing some context, if you are using the qlogic cards you will always want to use the psm mtl (-mca pml cm -mca mtl psm) and not openib btl. As Tom suggest, confirm the limits are setup on every node: could it be the alltoall is reaching a node that &quot;others&quot; are not? Please share the command line and the error message.
</span><br>
<p><p><p>Yes, under normal circumstances, I use PSM.  i only disabled to see if it affected any kind of change.
<br>
<p>the test i'm running is
<br>
<p>mpirun -n 512 ./IMB-MPI1 alltoallv
<br>
<p>when the system gets to 128 ranks, it freezes and errors out with
<br>
<p><pre>
---
A process failed to create a queue pair. This usually means either the device has run out of queue pairs (too many connections) or there are insufficient resources available to allocate a queue pair (out of memory). The latter can happen if either 1) insufficient memory is available, or 2) no more physical memory can be registered with the device.
For more information on memory registration see the Open MPI FAQs at:
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
Local host:             node001
Local device:           qib0
Queue pair type:        Reliable connected (RC)
---
i've also tried various nodes across the cluster (200+).  i think i ruled out errant switch (qlogic single 12800-120) problems, bad cables, and bad nodes.  that's not to say they're may not be present, i've just not been able to find it _______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28717.php">http://www.open-mpi.org/community/lists/users/2016/03/28717.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28719.php">Lane, William: "[OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems"</a>
<li><strong>Previous message:</strong> <a href="28717.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>In reply to:</strong> <a href="28717.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28726.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Reply:</strong> <a href="28726.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
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
