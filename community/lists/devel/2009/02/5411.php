<?
$subject_val = "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 13 01:16:18 2009" -->
<!-- isoreceived="20090213061618" -->
<!-- sent="Thu, 12 Feb 2009 22:15:34 -0800" -->
<!-- isosent="20090213061534" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h" -->
<!-- id="49951006.8040007_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF84FDB9-C664-4FE0-8188-0DC2C6B45108_at_lanl.gov" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-13 01:15:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5412.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Previous message:</strong> <a href="5410.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>In reply to:</strong> <a href="5408.php">Ralph Castain: "Re: [OMPI devel] RFC:	Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5412.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Reply:</strong> <a href="5412.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Got it, thanks.
<br>
<p>Is anyone else looking at that ticket?  I'm still a newbie and I suspect 
<br>
someone else could figure this problem out a lot faster than I could.  
<br>
So, I'm curious how much I should be looking at this ticket.
<br>
<p>If amateurs are allowed to speculate, however, my guess is that this 
<br>
isn't really a BTL thing.  It reminds me of trac ticket 1468 (aka 
<br>
1516).  In that case, there was a lot of one-way traffic.  We needed a 
<br>
way to return frags to the sender.  I guess that was solved.
<br>
<p>So, the present problem is something different.  My guess is that 
<br>
senders are overrunning receivers.  Could it be that some receiver (like 
<br>
the root in the MPI_Reduce) ends up with too many in-coming messages.  
<br>
It has to queue up unexpected messages, which slows it down further, 
<br>
which means it has to deal with even more unexpected messages, etc.  
<br>
Those messages have to be placed somewhere, which means memory is 
<br>
allocated, etc.?
<br>
<p>Just a theory.  I don't know the PML well enough to judge its soundness.
<br>
<p>But if this is the case, it's a PML issue rather than a BTL issue.  
<br>
Maybe there should be some flow control -- particular in our 
<br>
implementation of collectives!
<br>
<p>Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; The connection is only that, if you are going to modify the sm BTL as  
</span><br>
<span class="quotelev1">&gt; you say, you might at least want to be aware that we have a problem 
</span><br>
<span class="quotelev1">&gt; in  it so you (a) don't make it worse than it already is, and (b) 
</span><br>
<span class="quotelev1">&gt; might  keep an eye open for the problem as you are changing things.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 12, 2009, at 3:58 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry, what's the connection?  Are we talking about 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1791">https://svn.open-mpi.org/trac/ompi/ticket/1791</a>  ?  Are you simply 
</span><br>
<span class="quotelev2">&gt;&gt; saying that if I'm doing some sm BTL work, I  should also look at 
</span><br>
<span class="quotelev2">&gt;&gt; 1791?  I'm trying to figure out if there's some  more specific 
</span><br>
<span class="quotelev2">&gt;&gt; connection I'm missing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You might want to look at ticket #1791 while you are doing this -  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brad  added some valuable data earlier today.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5412.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Previous message:</strong> <a href="5410.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>In reply to:</strong> <a href="5408.php">Ralph Castain: "Re: [OMPI devel] RFC:	Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5412.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Reply:</strong> <a href="5412.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
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
