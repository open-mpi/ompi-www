<?
$subject_val = "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 14:14:07 2009" -->
<!-- isoreceived="20090212191407" -->
<!-- sent="Thu, 12 Feb 2009 11:13:33 -0800" -->
<!-- isosent="20090212191333" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h" -->
<!-- id="499474DD.1000302_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D6E0010-0D78-4B07-A080-16A386CDA3C8_at_cisco.com" -->
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
<strong>Date:</strong> 2009-02-12 14:13:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5404.php">Jeff Squyres: "Re: [OMPI devel] MPI_Op_free crashes in MTT"</a>
<li><strong>Previous message:</strong> <a href="5402.php">George Bosilca: "Re: [OMPI devel] MPI_Op_free crashes in MTT"</a>
<li><strong>In reply to:</strong> <a href="5401.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5405.php">Ralph Castain: "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Reply:</strong> <a href="5405.php">Ralph Castain: "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; This should probably include the disclaimer that we talked about this  
</span><br>
<span class="quotelev1">&gt; extensively yesterday at the sm/btl meeting after the MPI Forum  
</span><br>
<span class="quotelev1">&gt; meeting in San Jose.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eugene has been working on new sm stuff (as he has posted), and we 
</span><br>
<span class="quotelev1">&gt; had  a very productive meeting yesterday discussing what he has done 
</span><br>
<span class="quotelev1">&gt; and  how to get it all into the trunk.  Have a look at his slides at 
</span><br>
<span class="quotelev1">&gt; the  bottom of this wiki page:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="https://svn.open-mpi.org/trac/ompi/wiki/Feb09Meetingsjc">https://svn.open-mpi.org/trac/ompi/wiki/Feb09Meetingsjc</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eugene will be replacing the current sm btl with a new one
</span><br>
<p>Let's downgrade that statement.  I intend to make a series of putbacks 
<br>
to the current sm BTL to improve latency.  I'm not so much &quot;replacing&quot; 
<br>
the current BTL as doing some optimization work.
<br>
<p><span class="quotelev1">&gt; that uses a  single queue and various other improvements.  Hence, the 
</span><br>
<span class="quotelev1">&gt; current  ompi_*fifo.h files will no longer be necessary.  
</span><br>
<span class="quotelev1">&gt; Additionally, we  resolved the &quot;abstraction break&quot; issues that were 
</span><br>
<span class="quotelev1">&gt; discussed here on  the list a little while ago -- we think all the 
</span><br>
<span class="quotelev1">&gt; improvements can be  done in the current architecture without 
</span><br>
<span class="quotelev1">&gt; disrupting the abstraction  barriers.  This RFC is one step in the 
</span><br>
<span class="quotelev1">&gt; process; eliminate some no- longer-necessary kruft.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 12, 2009, at 8:53 AM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; RFC:  Eliminate ompi/class/ompi_[circular_buffer_]fifo.h
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHAT:  Eliminate those two include files.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHY:  These include files are only used by the sm BTL.  They
</span><br>
<span class="quotelev2">&gt;&gt; are not generally usable.  Further, the sm BTL will soon no
</span><br>
<span class="quotelev2">&gt;&gt; longer use them.  The current FIFOs support only a single sender
</span><br>
<span class="quotelev2">&gt;&gt; each and we want multiple senders to be able to share a common
</span><br>
<span class="quotelev2">&gt;&gt; FIFO.  The current FIFOs also can grow without bound, which is
</span><br>
<span class="quotelev2">&gt;&gt; complicated support that we don't think we need.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHERE:  Two include files: ompi/class/ompi_[circular_buffer_]fifo.h
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHEN:  &quot;Immediately&quot;.  Intended for 1.3.x.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: February 20, 2009.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5404.php">Jeff Squyres: "Re: [OMPI devel] MPI_Op_free crashes in MTT"</a>
<li><strong>Previous message:</strong> <a href="5402.php">George Bosilca: "Re: [OMPI devel] MPI_Op_free crashes in MTT"</a>
<li><strong>In reply to:</strong> <a href="5401.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5405.php">Ralph Castain: "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Reply:</strong> <a href="5405.php">Ralph Castain: "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
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
