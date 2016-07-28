<?
$subject_val = "Re: [OMPI users] Begginers question: why does this program hangs?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 10:51:38 2008" -->
<!-- isoreceived="20080318145138" -->
<!-- sent="Tue, 18 Mar 2008 10:51:25 -0400" -->
<!-- isosent="20080318145125" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Begginers question: why does this program hangs?" -->
<!-- id="54D43069-DA28-445F-BDA1-F98E362C800B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F488D31B-9E52-4AFD-A307-AB2D7718880E_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Begginers question: why does this program hangs?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-18 10:51:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5237.php">Andreas Schäfer: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>Previous message:</strong> <a href="5235.php">George Bosilca: "Re: [OMPI users] Begginers question: why does this program"</a>
<li><strong>In reply to:</strong> <a href="5234.php">George Bosilca: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5237.php">Andreas Schäfer: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>Reply:</strong> <a href="5237.php">Andreas Schäfer: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 18, 2008, at 10:32 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Jeff hinted the real problem in his email. Even if the program use  
</span><br>
<span class="quotelev1">&gt; the correct MPI functions, it is not 100% correct.
</span><br>
<p>I think we disagree here -- the sample program is correct according to  
<br>
the MPI spec.  It's an implementation artifact that makes it deadlock.
<br>
<p>The upcoming v1.3 series doesn't suffer from this issue; we revamped  
<br>
our transport system to distinguish between early and normal  
<br>
completions.  The pml_ob1_use_eager_completion MCA param was added to  
<br>
v1.2.6 to allow correct MPI apps to avoid this optimization -- a  
<br>
proper fix is coming in the v1.3 series.
<br>
<p><span class="quotelev1">&gt; It might pass in some situations, but can lead to fake &quot;deadlocks&quot;  
</span><br>
<span class="quotelev1">&gt; in others. The problem come from the flow control. If the messages  
</span><br>
<span class="quotelev1">&gt; are small (which is the case in the test example), Open MPI will  
</span><br>
<span class="quotelev1">&gt; send them eagerly. Without a flow control, these messages will be  
</span><br>
<span class="quotelev1">&gt; buffered by the receiver, which will exhaust the memory on the  
</span><br>
<span class="quotelev1">&gt; receiver. Once this happens, some of the messages may get dropped,  
</span><br>
<span class="quotelev1">&gt; but the most visible result, is that the progress will happens very  
</span><br>
<span class="quotelev1">&gt; (VERY) slowly.
</span><br>
<p>Your text implies that we can actually *drop* (and retransmit)  
<br>
messages in the sm btl.  That doesn't sound right to me -- is that  
<br>
what you meant?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5237.php">Andreas Schäfer: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>Previous message:</strong> <a href="5235.php">George Bosilca: "Re: [OMPI users] Begginers question: why does this program"</a>
<li><strong>In reply to:</strong> <a href="5234.php">George Bosilca: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5237.php">Andreas Schäfer: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>Reply:</strong> <a href="5237.php">Andreas Schäfer: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
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
