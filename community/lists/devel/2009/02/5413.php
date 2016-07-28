<?
$subject_val = "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 13 11:05:55 2009" -->
<!-- isoreceived="20090213160555" -->
<!-- sent="Fri, 13 Feb 2009 11:05:45 -0500" -->
<!-- isosent="20090213160545" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h" -->
<!-- id="CD377228-AF79-416F-B8DE-6052FE6FF2B0_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="17A6311C-408C-4485-A85B-0703E3340F36_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-13 11:05:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5414.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Previous message:</strong> <a href="5412.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>In reply to:</strong> <a href="5412.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5414.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Reply:</strong> <a href="5414.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't confirm or deny. The only thing I can tell is that the same  
<br>
test works fine over other BTL, so this tent either to pinpoint a  
<br>
problem in the sm BTL or in a particular path in the PML (the one used  
<br>
by the sm BTL). I'll have to dig a little bit more into it, but I was  
<br>
hoping to do it in the context of the new sm BTL (just to avoid having  
<br>
to do it twice).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 13, 2009, at 08:05 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; George -- can you confirm/deny?  Is this something we need to fix  
</span><br>
<span class="quotelev1">&gt; for v1.3.1?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 12, 2009, at 10:15 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Got it, thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is anyone else looking at that ticket?  I'm still a newbie and I  
</span><br>
<span class="quotelev2">&gt;&gt; suspect someone else could figure this problem out a lot faster  
</span><br>
<span class="quotelev2">&gt;&gt; than I could.  So, I'm curious how much I should be looking at this  
</span><br>
<span class="quotelev2">&gt;&gt; ticket.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If amateurs are allowed to speculate, however, my guess is that  
</span><br>
<span class="quotelev2">&gt;&gt; this isn't really a BTL thing.  It reminds me of trac ticket 1468  
</span><br>
<span class="quotelev2">&gt;&gt; (aka 1516).  In that case, there was a lot of one-way traffic.  We  
</span><br>
<span class="quotelev2">&gt;&gt; needed a way to return frags to the sender.  I guess that was solved.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, the present problem is something different.  My guess is that  
</span><br>
<span class="quotelev2">&gt;&gt; senders are overrunning receivers.  Could it be that some receiver  
</span><br>
<span class="quotelev2">&gt;&gt; (like the root in the MPI_Reduce) ends up with too many in-coming  
</span><br>
<span class="quotelev2">&gt;&gt; messages.  It has to queue up unexpected messages, which slows it  
</span><br>
<span class="quotelev2">&gt;&gt; down further, which means it has to deal with even more unexpected  
</span><br>
<span class="quotelev2">&gt;&gt; messages, etc.  Those messages have to be placed somewhere, which  
</span><br>
<span class="quotelev2">&gt;&gt; means memory is allocated, etc.?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just a theory.  I don't know the PML well enough to judge its  
</span><br>
<span class="quotelev2">&gt;&gt; soundness.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But if this is the case, it's a PML issue rather than a BTL issue.   
</span><br>
<span class="quotelev2">&gt;&gt; Maybe there should be some flow control -- particular in our  
</span><br>
<span class="quotelev2">&gt;&gt; implementation of collectives!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The connection is only that, if you are going to modify the sm BTL  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as  you say, you might at least want to be aware that we have a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem in  it so you (a) don't make it worse than it already is,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and (b) might  keep an eye open for the problem as you are  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; changing things.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 12, 2009, at 3:58 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sorry, what's the connection?  Are we talking about <a href="https://svn.open-mpi.org/trac/ompi/ticket/1791">https://svn.open-mpi.org/trac/ompi/ticket/1791</a> 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   ?  Are you simply saying that if I'm doing some sm BTL work, I   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; should also look at 1791?  I'm trying to figure out if there's  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; some  more specific connection I'm missing.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You might want to look at ticket #1791 while you are doing this  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -  Brad  added some valuable data earlier today.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5414.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Previous message:</strong> <a href="5412.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>In reply to:</strong> <a href="5412.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5414.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Reply:</strong> <a href="5414.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
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
