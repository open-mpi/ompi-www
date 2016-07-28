<?
$subject_val = "Re: [OMPI users] Waitall never returns [solved]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 10 16:40:53 2014" -->
<!-- isoreceived="20140410204053" -->
<!-- sent="Thu, 10 Apr 2014 13:40:52 -0700" -->
<!-- isosent="20140410204052" -->
<!-- name="Ross Boylan" -->
<!-- email="ross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Waitall never returns [solved]" -->
<!-- id="534701D4.1030108_at_biostat.ucsf.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5346F9B8.5010906_at_biostat.ucsf.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Waitall never returns [solved]<br>
<strong>From:</strong> Ross Boylan (<em>ross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-10 16:40:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24146.php">Saliya Ekanayake: "[OMPI users] Optimal mapping/binding when threads are used?"</a>
<li><strong>Previous message:</strong> <a href="24144.php">Gan, Qi                    PW: "Re: [OMPI users] How to set a process on a host but not bound to any core"</a>
<li><strong>In reply to:</strong> <a href="24143.php">Ross Boylan: "Re: [OMPI users] Waitall never returns"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Waitall was not returning for the mundane reason that not all messages 
<br>
sent were received.  I'm not sure why the dump command seemed to say 
<br>
there was nothing waiting.  Ironically, the bug would never appear in 
<br>
production, only in testing.
<br>
<p>I fixed up my shutdown logic and all seems well now.
<br>
<p>Ross
<br>
On 4/10/2014 1:06 PM, Ross Boylan wrote:
<br>
<span class="quotelev1">&gt; On 4/10/2014 11:48 AM, Ross Boylan wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 4/9/2014 5:26 PM, Ross Boylan wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, 2014-04-04 at 22:40 -0400, George Bosilca wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ross,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I&#226;&#128;&#153;m not familiar with the R implementation you are using, but bear 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with me and I will explain how you can all Open MPI about the list 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of all pending requests on a process. Disclosure: This is Open MPI 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; deep voodoo, an extreme way to debug applications that might save 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you quite some time.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The only thing you need is the communicator you posted your 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; requests into, or at least a pointer to it. Then you attach to your 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; process (or processes) with your preferred debugger and call
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    mca_pml_ob1_dump(struct ompi_communicator_t* comm, int verbose)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; With gdb this should look like &#226;&#128;&#156;call mca_pml_ob1_dump(my_comm, 1)&#226;&#128;&#157;. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This will dump human readable information about all the requests 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pending on a communicator (both sends and receives).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you so much for the tip.  After inserting a barrier failed to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; help
</span><br>
<span class="quotelev1">&gt; I managed to reproduce the problem with all ranks on one node.  I see
</span><br>
<span class="quotelev1">&gt; BTL SM 0x7fe9970ae660 endpoint 0x1f13470 [smp_rank 5] [peer_rank 0]
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; BTL SM 0x7fe9970ae660 endpoint 0x20eebb0 [smp_rank 5] [peer_rank 12]
</span><br>
<span class="quotelev1">&gt; which, if my previous theory of mca_mpl_ob1_dump is correct, means 
</span><br>
<span class="quotelev1">&gt; there are no outstanding requests since there are no items listed 
</span><br>
<span class="quotelev1">&gt; under the BTL lines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This again has me wondering if requests can be closed without some 
</span><br>
<span class="quotelev1">&gt; kind of Wait or Test command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sometimes the system runs to completion; the trigger seems to be 
</span><br>
<span class="quotelev1">&gt; having some ranks that finish rapidly because there are more such 
</span><br>
<span class="quotelev1">&gt; processes than work for them to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24146.php">Saliya Ekanayake: "[OMPI users] Optimal mapping/binding when threads are used?"</a>
<li><strong>Previous message:</strong> <a href="24144.php">Gan, Qi                    PW: "Re: [OMPI users] How to set a process on a host but not bound to any core"</a>
<li><strong>In reply to:</strong> <a href="24143.php">Ross Boylan: "Re: [OMPI users] Waitall never returns"</a>
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
