<?
$subject_val = "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 13 11:42:46 2009" -->
<!-- isoreceived="20090213164246" -->
<!-- sent="Fri, 13 Feb 2009 08:42:14 -0800" -->
<!-- isosent="20090213164214" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h" -->
<!-- id="4995A2E6.1000708_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CD377228-AF79-416F-B8DE-6052FE6FF2B0_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-13 11:42:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5415.php">Eugene Loh: "[OMPI devel] svn commit"</a>
<li><strong>Previous message:</strong> <a href="5413.php">George Bosilca: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>In reply to:</strong> <a href="5413.php">George Bosilca: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5427.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] RFC:	Eliminateompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Reply:</strong> <a href="5427.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] RFC:	Eliminateompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Reply:</strong> <a href="5428.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] RFC:	Eliminateompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I can't confirm or deny. The only thing I can tell is that the same  
</span><br>
<span class="quotelev1">&gt; test works fine over other BTL, so this tent either to pinpoint a  
</span><br>
<span class="quotelev1">&gt; problem in the sm BTL or in a particular path in the PML (the one 
</span><br>
<span class="quotelev1">&gt; used  by the sm BTL). I'll have to dig a little bit more into it, but 
</span><br>
<span class="quotelev1">&gt; I was  hoping to do it in the context of the new sm BTL (just to avoid 
</span><br>
<span class="quotelev1">&gt; having  to do it twice).
</span><br>
<p>Okay.  I'll try to get &quot;single queue&quot; put back soon and might look at 
<br>
1791 along the way.
<br>
<p>But here is what I wonder.  Let's say you have one-way traffic -- either 
<br>
rank A sending rank B messages without ever any traffic in the other 
<br>
direction, or repeated MPI_Reduce operations always with the same root 
<br>
-- and the senders somehow get well ahead of the receiver.  Say, A wants 
<br>
to pump 1,000,000 messages over and B is busy doing something else.  
<br>
What should happen?  What should the PML and BTL do?  The conditions 
<br>
could range from B not being in MPI at all, or B listening to the BTL 
<br>
without yet having the posted receives to match.  Should the connection 
<br>
become congested and force the sender to wait -- and if so, is this in 
<br>
the BTL or PML?  Or, should B keep on queueing up the unexpected messages?
<br>
<p>After some basic &quot;single queue&quot; putbacks, I'll try to look at the code 
<br>
and understand what the PML is doing in cases like this.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5415.php">Eugene Loh: "[OMPI devel] svn commit"</a>
<li><strong>Previous message:</strong> <a href="5413.php">George Bosilca: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>In reply to:</strong> <a href="5413.php">George Bosilca: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5427.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] RFC:	Eliminateompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Reply:</strong> <a href="5427.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] RFC:	Eliminateompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Reply:</strong> <a href="5428.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] RFC:	Eliminateompi/class/ompi_[circular_buffer_]fifo.h"</a>
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
