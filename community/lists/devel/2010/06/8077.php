<?
$subject_val = "Re: [OMPI devel] amd64 atomic.h warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  9 08:06:38 2010" -->
<!-- isoreceived="20100609120638" -->
<!-- sent="Wed, 9 Jun 2010 08:06:34 -0400" -->
<!-- isosent="20100609120634" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] amd64 atomic.h warnings" -->
<!-- id="25FC8181-60ED-4503-A6C4-4C6CBBAA614B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C0E8F88.2040201_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] amd64 atomic.h warnings<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-09 08:06:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8078.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="8076.php">Eugene Loh: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<li><strong>In reply to:</strong> <a href="8076.php">Eugene Loh: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 8, 2010, at 2:44 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; What does &quot;disabling threads&quot; mean?  
</span><br>
<p>I was specifically referring to --disable-opal-multi-threads and --disable-mpi-thread-multiple (couldn't remember the names of the options when I typed this up).
<br>
<p>One thing I just noticed -- these warnings only applied to the C++ compiler.  Everything appeared to be fine for the C compiler.  Hmm.
<br>
<p><span class="quotelev1">&gt; E.g., does it mean disabling single
</span><br>
<span class="quotelev1">&gt; receive queues?  Sorry for asking bonehead questions, but I thought
</span><br>
<span class="quotelev1">&gt; these atomics weren't just needed for multithreading usage, but for
</span><br>
<span class="quotelev1">&gt; managing interactions of multiple (even single-threaded) processes in
</span><br>
<span class="quotelev1">&gt; shared memory.
</span><br>
<p>Oy.  That sounds right... ouch.
<br>
<p>George -- can you confirm?  (I only have a hazy understanding of the issue)  Is this problem that at least some of the atomics are not supported, and therefore the sm btl is borked?
<br>
<p>The compiler warnings that I cited at the beginning of this thread can be seen here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2010/06/8060.php">http://www.open-mpi.org/community/lists/devel/2010/06/8060.php</a>
<br>
<p>Given that these only appear with the C++ compiler, I wonder if we should just disable the C++ bindings and VT...?
<br>
<p>Additionally, all the stuff I sent to George was for the C compiler -- George -- did those show problems, too?  Or should I send the assembly from the C++ compiler, too?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8078.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="8076.php">Eugene Loh: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<li><strong>In reply to:</strong> <a href="8076.php">Eugene Loh: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<!-- nextthread="start" -->
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
