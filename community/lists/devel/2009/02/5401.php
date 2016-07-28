<?
$subject_val = "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 12:24:08 2009" -->
<!-- isoreceived="20090212172408" -->
<!-- sent="Thu, 12 Feb 2009 09:24:02 -0800" -->
<!-- isosent="20090212172402" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h" -->
<!-- id="4D6E0010-0D78-4B07-A080-16A386CDA3C8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4994541D.1030801_at_sun.com" -->
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
<strong>Date:</strong> 2009-02-12 12:24:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5402.php">George Bosilca: "Re: [OMPI devel] MPI_Op_free crashes in MTT"</a>
<li><strong>Previous message:</strong> <a href="5400.php">Tim Mattox: "[OMPI devel] MPI_Op_free crashes in MTT"</a>
<li><strong>In reply to:</strong> <a href="5399.php">Eugene Loh: "[OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5403.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Reply:</strong> <a href="5403.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This should probably include the disclaimer that we talked about this  
<br>
extensively yesterday at the sm/btl meeting after the MPI Forum  
<br>
meeting in San Jose.
<br>
<p>Eugene has been working on new sm stuff (as he has posted), and we had  
<br>
a very productive meeting yesterday discussing what he has done and  
<br>
how to get it all into the trunk.  Have a look at his slides at the  
<br>
bottom of this wiki page:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/Feb09Meetingsjc">https://svn.open-mpi.org/trac/ompi/wiki/Feb09Meetingsjc</a>
<br>
<p>Eugene will be replacing the current sm btl with a new one that uses a  
<br>
single queue and various other improvements.  Hence, the current  
<br>
ompi_*fifo.h files will no longer be necessary.  Additionally, we  
<br>
resolved the &quot;abstraction break&quot; issues that were discussed here on  
<br>
the list a little while ago -- we think all the improvements can be  
<br>
done in the current architecture without disrupting the abstraction  
<br>
barriers.  This RFC is one step in the process; eliminate some no- 
<br>
longer-necessary kruft.
<br>
<p><p>On Feb 12, 2009, at 8:53 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; RFC:  Eliminate ompi/class/ompi_[circular_buffer_]fifo.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHAT:  Eliminate those two include files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY:  These include files are only used by the sm BTL.  They
</span><br>
<span class="quotelev1">&gt; are not generally usable.  Further, the sm BTL will soon no
</span><br>
<span class="quotelev1">&gt; longer use them.  The current FIFOs support only a single sender
</span><br>
<span class="quotelev1">&gt; each and we want multiple senders to be able to share a common
</span><br>
<span class="quotelev1">&gt; FIFO.  The current FIFOs also can grow without bound, which is
</span><br>
<span class="quotelev1">&gt; complicated support that we don't think we need.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE:  Two include files: ompi/class/ompi_[circular_buffer_]fifo.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHEN:  &quot;Immediately&quot;.  Intended for 1.3.x.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT: February 20, 2009.
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
<li><strong>Next message:</strong> <a href="5402.php">George Bosilca: "Re: [OMPI devel] MPI_Op_free crashes in MTT"</a>
<li><strong>Previous message:</strong> <a href="5400.php">Tim Mattox: "[OMPI devel] MPI_Op_free crashes in MTT"</a>
<li><strong>In reply to:</strong> <a href="5399.php">Eugene Loh: "[OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5403.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Reply:</strong> <a href="5403.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
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
