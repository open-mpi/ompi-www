<?
$subject_val = "Re: [OMPI devel] Device failover on ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  3 11:23:30 2009" -->
<!-- isoreceived="20090803152330" -->
<!-- sent="Mon, 3 Aug 2009 11:23:25 -0400 (EDT)" -->
<!-- isosent="20090803152325" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Device failover on ob1" -->
<!-- id="alpine.DEB.1.10.0908031114240.6847_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FBADE741-D12C-490A-BFC2-A07F1AD84358_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Device failover on ob1<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-03 11:23:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6562.php">Rolf Vandevaart: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Previous message:</strong> <a href="6560.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>In reply to:</strong> <a href="6551.php">Ralph Castain: "Re: [OMPI devel] Device failover on ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6557.php">Mouhamed Gueye: "Re: [OMPI devel] Device failover on ob1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, 2 Aug 2009, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Perhaps a bigger question needs to be addressed - namely, does the ob1 code 
</span><br>
<span class="quotelev1">&gt; need to be refactored?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Having been involved a little in the early discussion with bull when we 
</span><br>
<span class="quotelev1">&gt; debated over where to put this, I know the primary concern was that the code 
</span><br>
<span class="quotelev1">&gt; not suffer the same fate as the dr module. We have since run into a similar 
</span><br>
<span class="quotelev1">&gt; issue with the checksum module, so I know where they are coming from.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is that the code base is adjusted to support changes in ob1, 
</span><br>
<span class="quotelev1">&gt; which is still being debugged. On the order of 95% of the code in ob1 is 
</span><br>
<span class="quotelev1">&gt; required to be common across all the pml modules, so the rest of us have to 
</span><br>
<span class="quotelev1">&gt; (a) watch carefully all the commits to see if someone touches ob1, and then 
</span><br>
<span class="quotelev1">&gt; (b) manually mirror the change in our modules.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is not a supportable model over the long-term, which is why dr has died, 
</span><br>
<span class="quotelev1">&gt; and checksum is considering integrating into ob1 using configure #if's to 
</span><br>
<span class="quotelev1">&gt; avoid impacting non-checksum users. Likewise, device failover has been 
</span><br>
<span class="quotelev1">&gt; treated similarly here - i.e., configure out the added code unless someone 
</span><br>
<span class="quotelev1">&gt; wants it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This -does- lead to messier source code with these #if's in it. If we can 
</span><br>
<span class="quotelev1">&gt; refactor the ob1 code so the common functionality resides in the base, then 
</span><br>
<span class="quotelev1">&gt; perhaps we can avoid this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible?
</span><br>
<p>I think Ralph raises a good point - we need to think about how to allow 
<br>
better use of OB1's code base between consumers like checksum and 
<br>
failover.  The current situation is problematic to me, for the reasons 
<br>
Ralph cited.  However, since the ob1 structures and code have little use 
<br>
for PMLs such as CM, I'd rather not push the code into the base - in the 
<br>
end, it's very specific to a particular PML implementation and the code 
<br>
pushed into the base already made things much more interesting in 
<br>
implementing CM than I would have liked.  DR is different in this 
<br>
conversation, as it was almost entirely a seperate implementation from ob1 
<br>
by the end, due to the removal of many features and the addition of many 
<br>
others.
<br>
<p>However, I think there's middle ground here which could greatly improve 
<br>
the current situation.  With the proper refactoring, there's no technical 
<br>
reason why we couldn't move the checksum functionality into ob1 and add 
<br>
the failover to ob1, with no impact on performance when the functionality 
<br>
isn't used and little impact on code readability.
<br>
<p>So, in summary, refactor OB1 to support checksum / failover good, pushing 
<br>
ob1 code into base bad.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6562.php">Rolf Vandevaart: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Previous message:</strong> <a href="6560.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>In reply to:</strong> <a href="6551.php">Ralph Castain: "Re: [OMPI devel] Device failover on ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6557.php">Mouhamed Gueye: "Re: [OMPI devel] Device failover on ob1"</a>
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
