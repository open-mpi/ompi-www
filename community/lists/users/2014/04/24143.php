<?
$subject_val = "Re: [OMPI users] Waitall never returns";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 10 16:06:18 2014" -->
<!-- isoreceived="20140410200618" -->
<!-- sent="Thu, 10 Apr 2014 13:06:16 -0700" -->
<!-- isosent="20140410200616" -->
<!-- name="Ross Boylan" -->
<!-- email="ross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Waitall never returns" -->
<!-- id="5346F9B8.5010906_at_biostat.ucsf.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5346E793.9010601_at_biostat.ucsf.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Waitall never returns<br>
<strong>From:</strong> Ross Boylan (<em>ross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-10 16:06:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24144.php">Gan, Qi                    PW: "Re: [OMPI users] How to set a process on a host but not bound to any core"</a>
<li><strong>Previous message:</strong> <a href="24142.php">Ross Boylan: "Re: [OMPI users] Waitall never returns"</a>
<li><strong>In reply to:</strong> <a href="24142.php">Ross Boylan: "Re: [OMPI users] Waitall never returns"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24145.php">Ross Boylan: "Re: [OMPI users] Waitall never returns [solved]"</a>
<li><strong>Reply:</strong> <a href="24145.php">Ross Boylan: "Re: [OMPI users] Waitall never returns [solved]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/10/2014 11:48 AM, Ross Boylan wrote:
<br>
<span class="quotelev1">&gt; On 4/9/2014 5:26 PM, Ross Boylan wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, 2014-04-04 at 22:40 -0400, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ross,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#226;&#128;&#153;m not familiar with the R implementation you are using, but bear 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with me and I will explain how you can all Open MPI about the list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of all pending requests on a process. Disclosure: This is Open MPI 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; deep voodoo, an extreme way to debug applications that might save 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you quite some time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The only thing you need is the communicator you posted your requests 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; into, or at least a pointer to it. Then you attach to your process 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (or processes) with your preferred debugger and call
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mca_pml_ob1_dump(struct ompi_communicator_t* comm, int verbose)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With gdb this should look like &#226;&#128;&#156;call mca_pml_ob1_dump(my_comm, 1)&#226;&#128;&#157;. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This will dump human readable information about all the requests 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pending on a communicator (both sends and receives).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you so much for the tip.  After inserting a barrier failed to help
</span><br>
I managed to reproduce the problem with all ranks on one node.  I see
<br>
BTL SM 0x7fe9970ae660 endpoint 0x1f13470 [smp_rank 5] [peer_rank 0]
<br>
....
<br>
BTL SM 0x7fe9970ae660 endpoint 0x20eebb0 [smp_rank 5] [peer_rank 12]
<br>
which, if my previous theory of mca_mpl_ob1_dump is correct, means there 
<br>
are no outstanding requests since there are no items listed under the 
<br>
BTL lines.
<br>
<p>This again has me wondering if requests can be closed without some kind 
<br>
of Wait or Test command.
<br>
<p>Sometimes the system runs to completion; the trigger seems to be having 
<br>
some ranks that finish rapidly because there are more such processes 
<br>
than work for them to do.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24144.php">Gan, Qi                    PW: "Re: [OMPI users] How to set a process on a host but not bound to any core"</a>
<li><strong>Previous message:</strong> <a href="24142.php">Ross Boylan: "Re: [OMPI users] Waitall never returns"</a>
<li><strong>In reply to:</strong> <a href="24142.php">Ross Boylan: "Re: [OMPI users] Waitall never returns"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24145.php">Ross Boylan: "Re: [OMPI users] Waitall never returns [solved]"</a>
<li><strong>Reply:</strong> <a href="24145.php">Ross Boylan: "Re: [OMPI users] Waitall never returns [solved]"</a>
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
