<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  8 17:10:10 2007" -->
<!-- isoreceived="20071008211010" -->
<!-- sent="Mon, 8 Oct 2007 16:09:44 -0500" -->
<!-- isosent="20071008210944" -->
<!-- name="Sajjad Tabib" -->
<!-- email="stabib_at_[hidden]" -->
<!-- subject="[OMPI devel] Module Design Concept" -->
<!-- id="OF576E71F0.02D22306-ON8625736E.0070F02A-8625736E.00743F72_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Sajjad Tabib (<em>stabib_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-08 17:09:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2408.php">Jeff Squyres: "Re: [OMPI devel] Any info regarding sm availible?"</a>
<li><strong>Previous message:</strong> <a href="2406.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party software in OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2409.php">Richard Graham: "Re: [OMPI devel] Module Design Concept"</a>
<li><strong>Reply:</strong> <a href="2409.php">Richard Graham: "Re: [OMPI devel] Module Design Concept"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm implementing a new MTL component that uses message queues to keep 
<br>
track of posted and unexpected messages. I intended to do this by creating 
<br>
two global queues, one for posted and one for unexpected, until I found 
<br>
that the portals MTL uses a different approach in their queue 
<br>
implemenation. The portal code uses handles to the queues from inside 
<br>
their mca_mtl_portals_module_t to post messages. I couldn't help but 
<br>
wonder, why are the queue handles here? What are the design implications 
<br>
of defining these handle queues in this module struct rather than globally 
<br>
defining them? 
<br>
I'm an Open MPI newbie and sort of confused on the modular approach taken 
<br>
here and was hoping somebody could point out the pros and the cons of the 
<br>
two approaches. I guess my next question would be: In general, what would 
<br>
you put into a module struct and what wouldn't you?
<br>
I will appreciate any pointers that you could give me to help me 
<br>
understand this concept.
<br>
<p>Thanks in advance,
<br>
<p>Sajjad Tabib
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2407/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2408.php">Jeff Squyres: "Re: [OMPI devel] Any info regarding sm availible?"</a>
<li><strong>Previous message:</strong> <a href="2406.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party software in OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2409.php">Richard Graham: "Re: [OMPI devel] Module Design Concept"</a>
<li><strong>Reply:</strong> <a href="2409.php">Richard Graham: "Re: [OMPI devel] Module Design Concept"</a>
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
