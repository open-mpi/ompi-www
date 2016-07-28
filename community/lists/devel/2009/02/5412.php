<?
$subject_val = "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 13 08:05:43 2009" -->
<!-- isoreceived="20090213130543" -->
<!-- sent="Fri, 13 Feb 2009 05:05:36 -0800" -->
<!-- isosent="20090213130536" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h" -->
<!-- id="17A6311C-408C-4485-A85B-0703E3340F36_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49951006.8040007_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-13 08:05:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5413.php">George Bosilca: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Previous message:</strong> <a href="5411.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>In reply to:</strong> <a href="5411.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5413.php">George Bosilca: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Reply:</strong> <a href="5413.php">George Bosilca: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George -- can you confirm/deny?  Is this something we need to fix for  
<br>
v1.3.1?
<br>
<p>On Feb 12, 2009, at 10:15 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Got it, thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is anyone else looking at that ticket?  I'm still a newbie and I  
</span><br>
<span class="quotelev1">&gt; suspect someone else could figure this problem out a lot faster than  
</span><br>
<span class="quotelev1">&gt; I could.  So, I'm curious how much I should be looking at this ticket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If amateurs are allowed to speculate, however, my guess is that this  
</span><br>
<span class="quotelev1">&gt; isn't really a BTL thing.  It reminds me of trac ticket 1468 (aka  
</span><br>
<span class="quotelev1">&gt; 1516).  In that case, there was a lot of one-way traffic.  We needed  
</span><br>
<span class="quotelev1">&gt; a way to return frags to the sender.  I guess that was solved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, the present problem is something different.  My guess is that  
</span><br>
<span class="quotelev1">&gt; senders are overrunning receivers.  Could it be that some receiver  
</span><br>
<span class="quotelev1">&gt; (like the root in the MPI_Reduce) ends up with too many in-coming  
</span><br>
<span class="quotelev1">&gt; messages.  It has to queue up unexpected messages, which slows it  
</span><br>
<span class="quotelev1">&gt; down further, which means it has to deal with even more unexpected  
</span><br>
<span class="quotelev1">&gt; messages, etc.  Those messages have to be placed somewhere, which  
</span><br>
<span class="quotelev1">&gt; means memory is allocated, etc.?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just a theory.  I don't know the PML well enough to judge its  
</span><br>
<span class="quotelev1">&gt; soundness.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But if this is the case, it's a PML issue rather than a BTL issue.   
</span><br>
<span class="quotelev1">&gt; Maybe there should be some flow control -- particular in our  
</span><br>
<span class="quotelev1">&gt; implementation of collectives!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The connection is only that, if you are going to modify the sm BTL  
</span><br>
<span class="quotelev2">&gt;&gt; as  you say, you might at least want to be aware that we have a  
</span><br>
<span class="quotelev2">&gt;&gt; problem in  it so you (a) don't make it worse than it already is,  
</span><br>
<span class="quotelev2">&gt;&gt; and (b) might  keep an eye open for the problem as you are changing  
</span><br>
<span class="quotelev2">&gt;&gt; things.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 12, 2009, at 3:58 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry, what's the connection?  Are we talking about <a href="https://svn.open-mpi.org/trac/ompi/ticket/1791">https://svn.open-mpi.org/trac/ompi/ticket/1791</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ?  Are you simply saying that if I'm doing some sm BTL work, I   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should also look at 1791?  I'm trying to figure out if there's  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some  more specific connection I'm missing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You might want to look at ticket #1791 while you are doing this  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -  Brad  added some valuable data earlier today.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5413.php">George Bosilca: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Previous message:</strong> <a href="5411.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>In reply to:</strong> <a href="5411.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5413.php">George Bosilca: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Reply:</strong> <a href="5413.php">George Bosilca: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
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
