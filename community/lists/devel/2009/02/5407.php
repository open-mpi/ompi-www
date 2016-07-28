<?
$subject_val = "Re: [OMPI devel] RFC:	Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 17:59:02 2009" -->
<!-- isoreceived="20090212225902" -->
<!-- sent="Thu, 12 Feb 2009 14:58:17 -0800" -->
<!-- isosent="20090212225817" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC:	Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h" -->
<!-- id="4994A989.5060104_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CECD71BD-F4DC-4BBD-90F6-E7003D56ECB6_at_lanl.gov" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-12 17:58:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5408.php">Ralph Castain: "Re: [OMPI devel] RFC:	Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Previous message:</strong> <a href="5406.php">Tim Mattox: "Re: [OMPI devel] MPI_Op_free crashes in MTT"</a>
<li><strong>In reply to:</strong> <a href="5405.php">Ralph Castain: "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5408.php">Ralph Castain: "Re: [OMPI devel] RFC:	Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Reply:</strong> <a href="5408.php">Ralph Castain: "Re: [OMPI devel] RFC:	Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Reply:</strong> <a href="5409.php">Jeff Squyres: "Re: [OMPI devel] RFC:	Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, what's the connection?  Are we talking about 
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/1791">https://svn.open-mpi.org/trac/ompi/ticket/1791</a> ?  Are you simply saying 
<br>
that if I'm doing some sm BTL work, I should also look at 1791?  I'm 
<br>
trying to figure out if there's some more specific connection I'm missing.
<br>
<p>Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; You might want to look at ticket #1791 while you are doing this - 
</span><br>
<span class="quotelev1">&gt; Brad  added some valuable data earlier today.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 12, 2009, at 12:13 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This should probably include the disclaimer that we talked about  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this  extensively yesterday at the sm/btl meeting after the MPI  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Forum  meeting in San Jose.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eugene has been working on new sm stuff (as he has posted), and we  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; had  a very productive meeting yesterday discussing what he has  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; done and  how to get it all into the trunk.  Have a look at his  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slides at the  bottom of this wiki page:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="https://svn.open-mpi.org/trac/ompi/wiki/Feb09Meetingsjc">https://svn.open-mpi.org/trac/ompi/wiki/Feb09Meetingsjc</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eugene will be replacing the current sm btl with a new one
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let's downgrade that statement.  I intend to make a series of  
</span><br>
<span class="quotelev2">&gt;&gt; putbacks to the current sm BTL to improve latency.  I'm not so much  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;replacing&quot; the current BTL as doing some optimization work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that uses a  single queue and various other improvements.  Hence,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the current  ompi_*fifo.h files will no longer be necessary.   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Additionally, we  resolved the &quot;abstraction break&quot; issues that were  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; discussed here on  the list a little while ago -- we think all the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; improvements can be  done in the current architecture without  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; disrupting the abstraction  barriers.  This RFC is one step in the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process; eliminate some no- longer-necessary kruft.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 12, 2009, at 8:53 AM, Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; RFC:  Eliminate ompi/class/ompi_[circular_buffer_]fifo.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHAT:  Eliminate those two include files.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHY:  These include files are only used by the sm BTL.  They
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are not generally usable.  Further, the sm BTL will soon no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; longer use them.  The current FIFOs support only a single sender
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; each and we want multiple senders to be able to share a common
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FIFO.  The current FIFOs also can grow without bound, which is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; complicated support that we don't think we need.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHERE:  Two include files: ompi/class/ompi_[circular_buffer_]fifo.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHEN:  &quot;Immediately&quot;.  Intended for 1.3.x.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; TIMEOUT: February 20, 2009.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5408.php">Ralph Castain: "Re: [OMPI devel] RFC:	Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Previous message:</strong> <a href="5406.php">Tim Mattox: "Re: [OMPI devel] MPI_Op_free crashes in MTT"</a>
<li><strong>In reply to:</strong> <a href="5405.php">Ralph Castain: "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5408.php">Ralph Castain: "Re: [OMPI devel] RFC:	Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Reply:</strong> <a href="5408.php">Ralph Castain: "Re: [OMPI devel] RFC:	Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Reply:</strong> <a href="5409.php">Jeff Squyres: "Re: [OMPI devel] RFC:	Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
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
