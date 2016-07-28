<?
$subject_val = "[OMPI devel] TCP BTL routability (was: ticket #972)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 15:25:19 2008" -->
<!-- isoreceived="20080729192519" -->
<!-- sent="Tue, 29 Jul 2008 15:25:00 -0400" -->
<!-- isosent="20080729192500" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] TCP BTL routability (was: ticket #972)" -->
<!-- id="6B1D1169-AAF6-407F-8CD4-8C1991B147EF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="488F6D96.2070804_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI devel] TCP BTL routability (was: ticket #972)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-29 15:25:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4487.php">Adrian Knoth: "Re: [OMPI devel] TCP BTL routability (was: ticket #972)"</a>
<li><strong>Previous message:</strong> <a href="4485.php">Terry Dontje: "[OMPI devel] ticket #972"</a>
<li><strong>In reply to:</strong> <a href="4485.php">Terry Dontje: "[OMPI devel] ticket #972"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4487.php">Adrian Knoth: "Re: [OMPI devel] TCP BTL routability (was: ticket #972)"</a>
<li><strong>Reply:</strong> <a href="4487.php">Adrian Knoth: "Re: [OMPI devel] TCP BTL routability (was: ticket #972)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 29, 2008, at 3:20 PM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; So, we've pinged ticket #972 several times to see if the issue it  
</span><br>
<span class="quotelev1">&gt; covers has been fixed and have not really gotten a response in the  
</span><br>
<span class="quotelev1">&gt; last few months.  While talking with Jeff about a recent thread on  
</span><br>
<span class="quotelev1">&gt; the users list about this issue he has found the code in  
</span><br>
<span class="quotelev1">&gt; btl_tcp_proc.c that determines whether the tcp btl can be used has  
</span><br>
<span class="quotelev1">&gt; changed significantly between 1.2 and 1.3.  So a question is has  
</span><br>
<span class="quotelev1">&gt; these changes changed the rules of whether connections between two  
</span><br>
<span class="quotelev1">&gt; nodes should use the tcp btl as described on the FAQ?  If so we  
</span><br>
<span class="quotelev1">&gt; should update the FAQ.
</span><br>
<p><p>For reference, the FAQ entry is here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-routability">http://www.open-mpi.org/faq/?category=tcp#tcp-routability</a>
<br>
<p>It looks like we now *always* assume that two TCP peers are routable.   
<br>
The code in question is in btl_tcp_proc.c with the loop starting at  
<br>
line 413.
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
<li><strong>Next message:</strong> <a href="4487.php">Adrian Knoth: "Re: [OMPI devel] TCP BTL routability (was: ticket #972)"</a>
<li><strong>Previous message:</strong> <a href="4485.php">Terry Dontje: "[OMPI devel] ticket #972"</a>
<li><strong>In reply to:</strong> <a href="4485.php">Terry Dontje: "[OMPI devel] ticket #972"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4487.php">Adrian Knoth: "Re: [OMPI devel] TCP BTL routability (was: ticket #972)"</a>
<li><strong>Reply:</strong> <a href="4487.php">Adrian Knoth: "Re: [OMPI devel] TCP BTL routability (was: ticket #972)"</a>
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
