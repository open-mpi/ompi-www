<?
$subject_val = "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 14:21:37 2009" -->
<!-- isoreceived="20090212192137" -->
<!-- sent="Thu, 12 Feb 2009 12:21:25 -0700" -->
<!-- isosent="20090212192125" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h" -->
<!-- id="CECD71BD-F4DC-4BBD-90F6-E7003D56ECB6_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="499474DD.1000302_at_sun.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-12 14:21:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5406.php">Tim Mattox: "Re: [OMPI devel] MPI_Op_free crashes in MTT"</a>
<li><strong>Previous message:</strong> <a href="5404.php">Jeff Squyres: "Re: [OMPI devel] MPI_Op_free crashes in MTT"</a>
<li><strong>In reply to:</strong> <a href="5403.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5407.php">Eugene Loh: "Re: [OMPI devel] RFC:	Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Reply:</strong> <a href="5407.php">Eugene Loh: "Re: [OMPI devel] RFC:	Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might want to look at ticket #1791 while you are doing this - Brad  
<br>
added some valuable data earlier today.
<br>
<p>On Feb 12, 2009, at 12:13 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This should probably include the disclaimer that we talked about  
</span><br>
<span class="quotelev2">&gt;&gt; this  extensively yesterday at the sm/btl meeting after the MPI  
</span><br>
<span class="quotelev2">&gt;&gt; Forum  meeting in San Jose.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eugene has been working on new sm stuff (as he has posted), and we  
</span><br>
<span class="quotelev2">&gt;&gt; had  a very productive meeting yesterday discussing what he has  
</span><br>
<span class="quotelev2">&gt;&gt; done and  how to get it all into the trunk.  Have a look at his  
</span><br>
<span class="quotelev2">&gt;&gt; slides at the  bottom of this wiki page:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="https://svn.open-mpi.org/trac/ompi/wiki/Feb09Meetingsjc">https://svn.open-mpi.org/trac/ompi/wiki/Feb09Meetingsjc</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eugene will be replacing the current sm btl with a new one
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let's downgrade that statement.  I intend to make a series of  
</span><br>
<span class="quotelev1">&gt; putbacks to the current sm BTL to improve latency.  I'm not so much  
</span><br>
<span class="quotelev1">&gt; &quot;replacing&quot; the current BTL as doing some optimization work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; that uses a  single queue and various other improvements.  Hence,  
</span><br>
<span class="quotelev2">&gt;&gt; the current  ompi_*fifo.h files will no longer be necessary.   
</span><br>
<span class="quotelev2">&gt;&gt; Additionally, we  resolved the &quot;abstraction break&quot; issues that were  
</span><br>
<span class="quotelev2">&gt;&gt; discussed here on  the list a little while ago -- we think all the  
</span><br>
<span class="quotelev2">&gt;&gt; improvements can be  done in the current architecture without  
</span><br>
<span class="quotelev2">&gt;&gt; disrupting the abstraction  barriers.  This RFC is one step in the  
</span><br>
<span class="quotelev2">&gt;&gt; process; eliminate some no- longer-necessary kruft.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 12, 2009, at 8:53 AM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RFC:  Eliminate ompi/class/ompi_[circular_buffer_]fifo.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT:  Eliminate those two include files.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY:  These include files are only used by the sm BTL.  They
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are not generally usable.  Further, the sm BTL will soon no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; longer use them.  The current FIFOs support only a single sender
</span><br>
<span class="quotelev3">&gt;&gt;&gt; each and we want multiple senders to be able to share a common
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FIFO.  The current FIFOs also can grow without bound, which is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; complicated support that we don't think we need.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHERE:  Two include files: ompi/class/ompi_[circular_buffer_]fifo.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHEN:  &quot;Immediately&quot;.  Intended for 1.3.x.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TIMEOUT: February 20, 2009.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="5406.php">Tim Mattox: "Re: [OMPI devel] MPI_Op_free crashes in MTT"</a>
<li><strong>Previous message:</strong> <a href="5404.php">Jeff Squyres: "Re: [OMPI devel] MPI_Op_free crashes in MTT"</a>
<li><strong>In reply to:</strong> <a href="5403.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5407.php">Eugene Loh: "Re: [OMPI devel] RFC:	Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Reply:</strong> <a href="5407.php">Eugene Loh: "Re: [OMPI devel] RFC:	Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
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
