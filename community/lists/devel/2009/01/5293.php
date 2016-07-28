<?
$subject_val = "Re: [OMPI devel] Still troubles with 1.3 and MX";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 10:32:13 2009" -->
<!-- isoreceived="20090123153213" -->
<!-- sent="Fri, 23 Jan 2009 16:32:07 +0100 (CET)" -->
<!-- isosent="20090123153207" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Still troubles with 1.3 and MX" -->
<!-- id="Pine.LNX.4.64.0901231605580.9733_at_kenzo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1062D358-5EE9-4EE4-965B-81A0CC62FB80_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Still troubles with 1.3 and MX<br>
<strong>From:</strong> Bogdan Costescu (<em>Bogdan.Costescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 10:32:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5294.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Previous message:</strong> <a href="5292.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>In reply to:</strong> <a href="5276.php">Scott Atchley: "Re: [OMPI devel] Still troubles with 1.3 and MX"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 22 Jan 2009, Scott Atchley wrote:
<br>
<p><span class="quotelev1">&gt; Can you try a run with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca btl_mx_free_list_max 1000000
</span><br>
<p>Still hangs in Gather on 128 ranks.
<br>
<p><span class="quotelev1">&gt; After that, try a additional runs without the above but with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --mca coll_tuned_use_dynamic_rules 1 --mca coll_tuned_gather_algorithm N
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where N is 0, 1, 2, then 3 (one run for each value).
</span><br>
<p>0	hangs in Gather on 64 ranks (out of 128)
<br>
1	passes Gather, hangs in Alltoall on 64 ranks (out of 128)
<br>
2	passes Gather, hangs in Alltoall on 32 ranks (out of 128)
<br>
3	passes Gather, hangs in Alltoall on 64 ranks (out of 128)
<br>
<p>I've also done a run with nodes=128:ppn=1 (so the sm BTL was not 
<br>
involved) with default options and it has also hung in Gather on 64 
<br>
ranks (out of 128).
<br>
<p><span class="quotelev1">&gt; These are two, overlapped messages from the MX library. It is unable 
</span><br>
<span class="quotelev1">&gt; to send to opt029 (i.e. opt029 is not consuming messages).
</span><br>
<p>Immediately after my test job, another job was run on this node and 
<br>
has finished successfully; that job was certainly not using OpenMPI 
<br>
1.3 (because I've just installed it...), but was certainly using MX. 
<br>
This leads me to believe that there was nothing wrong on the node.
<br>
<p><span class="quotelev1">&gt; Anyone, does 1.3 support rank labeling of stdout? If so, Bogdan 
</span><br>
<span class="quotelev1">&gt; should rerun it with --display-map and the option to support 
</span><br>
<span class="quotelev1">&gt; labeling.
</span><br>
<p>I think that this is only in trunk at the moment, there were some 
<br>
messages on this subject in the past few days...
<br>
<p><span class="quotelev1">&gt; I am under the impression that the MTLs pass all messages to the 
</span><br>
<span class="quotelev1">&gt; interconnect. If so, then MX is handling self, shared memory 
</span><br>
<span class="quotelev1">&gt; (shmem), and host-to-host. Self, by the way, is a single rank 
</span><br>
<span class="quotelev1">&gt; (process) communicating with itself. In your case, you are using 
</span><br>
<span class="quotelev1">&gt; shmem.
</span><br>
<p>Indeed, that was my mistake, I have thought &quot;sm&quot; but written &quot;self&quot;.
<br>
<p><span class="quotelev1">&gt; I would suggest the same test as above with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca btl_mx_free_list_max 1000000
</span><br>
<p>Finishes successfully.
<br>
<p><span class="quotelev1">&gt; Additionally, try the following tuned collectives for alltoallv:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --mca coll_tuned_use_dynamic_rules 1 --mca coll_tuned_alltoallv_algorithm N
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where N is 0, 1, then 2 (one run for each value).
</span><br>
<p>0	finishes successfully
<br>
1	finishes successfully
<br>
2	finishes successfully
<br>
<p>I've also run using CM+MTL on nodes=128:ppn=1 and nodes=128:ppn=2 with 
<br>
default options and they finished successfully. So I guess that the 
<br>
error that I've seen was transient... I'll do some more runs in the 
<br>
same conditions and will write back in case this problem appears 
<br>
again.
<br>
<p><pre>
-- 
Bogdan Costescu
IWR, University of Heidelberg, INF 368, D-69120 Heidelberg, Germany
Phone: +49 6221 54 8240, Fax: +49 6221 54 8850
E-mail: bogdan.costescu_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5294.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Previous message:</strong> <a href="5292.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>In reply to:</strong> <a href="5276.php">Scott Atchley: "Re: [OMPI devel] Still troubles with 1.3 and MX"</a>
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
