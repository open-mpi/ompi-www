<?
$subject_val = "Re: [OMPI devel] RFC:	Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 18:10:10 2009" -->
<!-- isoreceived="20090212231010" -->
<!-- sent="Thu, 12 Feb 2009 16:09:59 -0700" -->
<!-- isosent="20090212230959" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC:	Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h" -->
<!-- id="EF84FDB9-C664-4FE0-8188-0DC2C6B45108_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4994A989.5060104_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC:	Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-12 18:09:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5409.php">Jeff Squyres: "Re: [OMPI devel] RFC:	Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Previous message:</strong> <a href="5407.php">Eugene Loh: "Re: [OMPI devel] RFC:	Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>In reply to:</strong> <a href="5407.php">Eugene Loh: "Re: [OMPI devel] RFC:	Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5411.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Reply:</strong> <a href="5411.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The connection is only that, if you are going to modify the sm BTL as  
<br>
you say, you might at least want to be aware that we have a problem in  
<br>
it so you (a) don't make it worse than it already is, and (b) might  
<br>
keep an eye open for the problem as you are changing things.
<br>
<p><p>On Feb 12, 2009, at 3:58 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Sorry, what's the connection?  Are we talking about <a href="https://svn.open-mpi.org/trac/ompi/ticket/1791">https://svn.open-mpi.org/trac/ompi/ticket/1791</a> 
</span><br>
<span class="quotelev1">&gt;  ?  Are you simply saying that if I'm doing some sm BTL work, I  
</span><br>
<span class="quotelev1">&gt; should also look at 1791?  I'm trying to figure out if there's some  
</span><br>
<span class="quotelev1">&gt; more specific connection I'm missing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You might want to look at ticket #1791 while you are doing this -  
</span><br>
<span class="quotelev2">&gt;&gt; Brad  added some valuable data earlier today.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 12, 2009, at 12:13 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This should probably include the disclaimer that we talked about   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this  extensively yesterday at the sm/btl meeting after the MPI   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Forum  meeting in San Jose.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Eugene has been working on new sm stuff (as he has posted), and  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; we  had  a very productive meeting yesterday discussing what he  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; has  done and  how to get it all into the trunk.  Have a look at  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; his  slides at the  bottom of this wiki page:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    <a href="https://svn.open-mpi.org/trac/ompi/wiki/Feb09Meetingsjc">https://svn.open-mpi.org/trac/ompi/wiki/Feb09Meetingsjc</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Eugene will be replacing the current sm btl with a new one
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let's downgrade that statement.  I intend to make a series of   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; putbacks to the current sm BTL to improve latency.  I'm not so  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; much  &quot;replacing&quot; the current BTL as doing some optimization work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that uses a  single queue and various other improvements.   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hence,  the current  ompi_*fifo.h files will no longer be  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; necessary.   Additionally, we  resolved the &quot;abstraction break&quot;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; issues that were  discussed here on  the list a little while ago  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- we think all the  improvements can be  done in the current  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; architecture without  disrupting the abstraction  barriers.  This  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; RFC is one step in the  process; eliminate some no- longer- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; necessary kruft.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Feb 12, 2009, at 8:53 AM, Eugene Loh wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; RFC:  Eliminate ompi/class/ompi_[circular_buffer_]fifo.h
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHAT:  Eliminate those two include files.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHY:  These include files are only used by the sm BTL.  They
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; are not generally usable.  Further, the sm BTL will soon no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; longer use them.  The current FIFOs support only a single sender
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; each and we want multiple senders to be able to share a common
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; FIFO.  The current FIFOs also can grow without bound, which is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; complicated support that we don't think we need.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHERE:  Two include files: ompi/class/ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi_[circular_buffer_]fifo.h
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHEN:  &quot;Immediately&quot;.  Intended for 1.3.x.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; TIMEOUT: February 20, 2009.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="5409.php">Jeff Squyres: "Re: [OMPI devel] RFC:	Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Previous message:</strong> <a href="5407.php">Eugene Loh: "Re: [OMPI devel] RFC:	Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>In reply to:</strong> <a href="5407.php">Eugene Loh: "Re: [OMPI devel] RFC:	Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5411.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Reply:</strong> <a href="5411.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
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
