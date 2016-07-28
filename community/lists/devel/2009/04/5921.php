<?
$subject_val = "Re: [OMPI devel] Inherent limit on #communicators?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 30 14:20:23 2009" -->
<!-- isoreceived="20090430182023" -->
<!-- sent="Thu, 30 Apr 2009 14:20:18 -0400 (EDT)" -->
<!-- isosent="20090430182018" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Inherent limit on #communicators?" -->
<!-- id="alpine.DEB.1.10.0904301415130.6970_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0904301112l36f88d02ga7c2b4ef2f274124_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Inherent limit on #communicators?<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-30 14:20:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5922.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Previous message:</strong> <a href="5920.php">Ralph Castain: "[OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>In reply to:</strong> <a href="5920.php">Ralph Castain: "[OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5922.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="5922.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 30 Apr 2009, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; We seem to have hit a problem here - it looks like we are seeing a
</span><br>
<span class="quotelev1">&gt; built-in limit on the number of communicators one can create in a
</span><br>
<span class="quotelev1">&gt; program. The program basically does a loop, calling MPI_Comm_split each
</span><br>
<span class="quotelev1">&gt; time through the loop to create a sub-communicator, does a reduce
</span><br>
<span class="quotelev1">&gt; operation on the members of the sub-communicator, and then calls
</span><br>
<span class="quotelev1">&gt; MPI_Comm_free to release it (this is a minimized reproducer for the real
</span><br>
<span class="quotelev1">&gt; code). After 64k times through the loop, the program fails.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This looks remarkably like a 16-bit index that hits a max value and then
</span><br>
<span class="quotelev1">&gt; blocks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have looked at the communicator code, but I don't immediately see such
</span><br>
<span class="quotelev1">&gt; a field. Is anyone aware of some other place where we would have a limit
</span><br>
<span class="quotelev1">&gt; that would cause this problem?
</span><br>
<p>There's a maximum of 32768 communicator ids when using OB1 (each PML can 
<br>
set the max contextid, although the communicator code is the part that 
<br>
actually assigns a cid).  Assuming that comm_free is actually properly 
<br>
called, there should be plenty of cids available for that pattern. 
<br>
However, I'm not sure I understand the block algorithm someone added to 
<br>
cid allocation - I'd have to guess that there's something funny with that 
<br>
routine and cids aren't being recycled properly.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5922.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Previous message:</strong> <a href="5920.php">Ralph Castain: "[OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>In reply to:</strong> <a href="5920.php">Ralph Castain: "[OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5922.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="5922.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
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
