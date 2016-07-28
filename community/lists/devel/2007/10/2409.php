<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  9 04:08:40 2007" -->
<!-- isoreceived="20071009080840" -->
<!-- sent="Tue, 09 Oct 2007 04:02:58 -0400" -->
<!-- isosent="20071009080258" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Module Design Concept" -->
<!-- id="C330ADF2.F8A0%rlgraham_at_ornl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF576E71F0.02D22306-ON8625736E.0070F02A-8625736E.00743F72_at_us.ibm.com" -->
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
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-09 04:02:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2410.php">Jeff Squyres: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party software in OMPI"</a>
<li><strong>Previous message:</strong> <a href="2408.php">Jeff Squyres: "Re: [OMPI devel] Any info regarding sm availible?"</a>
<li><strong>In reply to:</strong> <a href="2407.php">Sajjad Tabib: "[OMPI devel] Module Design Concept"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One of the assumptions about the MTL&#185;s is that only a given MTL can handle
<br>
the message
<br>
&nbsp;matching for communications.  This is done to accommodate mpi-like network
<br>
stack that
<br>
&nbsp;also handle the MPI message matching, which often do not expose their
<br>
internal data
<br>
&nbsp;structures used for matching.  Open MPI&#185;s point-to-point selection
<br>
currently forces the
<br>
&nbsp;choice of single pml, and if CM is chosen, only a single MTL.  Under those
<br>
constraints
<br>
&nbsp;any MTL internal structs can be kept within the scope of the MTL, w/o
<br>
polluting the global
<br>
&nbsp;name-space.
<br>
<p>Rich
<br>
<p><p>On 10/8/07 5:09 PM, &quot;Sajjad Tabib&quot; &lt;stabib_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm implementing a new MTL component that uses message queues to keep track of
</span><br>
<span class="quotelev1">&gt; posted and unexpected messages. I intended to do this by creating two global
</span><br>
<span class="quotelev1">&gt; queues, one for posted and one for unexpected, until I found that the portals
</span><br>
<span class="quotelev1">&gt; MTL uses a different approach in their queue implemenation. The portal code
</span><br>
<span class="quotelev1">&gt; uses handles to the queues from inside their mca_mtl_portals_module_t to post
</span><br>
<span class="quotelev1">&gt; messages. I couldn't help but wonder, why are the queue handles here? What are
</span><br>
<span class="quotelev1">&gt; the design implications of defining these handle queues in this module struct
</span><br>
<span class="quotelev1">&gt; rather than globally defining them?
</span><br>
<span class="quotelev1">&gt; I'm an Open MPI newbie and sort of confused on the modular approach taken here
</span><br>
<span class="quotelev1">&gt; and was hoping somebody could point out the pros and the cons of the two
</span><br>
<span class="quotelev1">&gt; approaches. I guess my next question would be: In general, what would you put
</span><br>
<span class="quotelev1">&gt; into a module struct and what wouldn't you?
</span><br>
<span class="quotelev1">&gt; I will appreciate any pointers that you could give me to help me understand
</span><br>
<span class="quotelev1">&gt; this concept. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sajjad Tabib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2409/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2410.php">Jeff Squyres: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party software in OMPI"</a>
<li><strong>Previous message:</strong> <a href="2408.php">Jeff Squyres: "Re: [OMPI devel] Any info regarding sm availible?"</a>
<li><strong>In reply to:</strong> <a href="2407.php">Sajjad Tabib: "[OMPI devel] Module Design Concept"</a>
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
