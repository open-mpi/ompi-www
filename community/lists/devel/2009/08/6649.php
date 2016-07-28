<?
$subject_val = "Re: [OMPI devel] Heads up on new feature to 1.3.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 10:38:54 2009" -->
<!-- isoreceived="20090817143854" -->
<!-- sent="17 Aug 2009 15:38:49 +0100" -->
<!-- isosent="20090817143849" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heads up on new feature to 1.3.4" -->
<!-- id="Prayer.1.3.1.0908171538490.379_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2C16C3AD-EFBA-4813-A66D-D189DEA6E495_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Heads up on new feature to 1.3.4<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-17 10:38:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6650.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6648.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6647.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6650.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 17 2009, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt;On Aug 16, 2009, at 11:02 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think the problem here, Eugene, is that performance benchmarks are  
</span><br>
<span class="quotelev2">&gt;&gt; far from the typical application. We have repeatedly seen this -  
</span><br>
<span class="quotelev2">&gt;&gt; optimizing for benchmarks frequently makes applications run less  
</span><br>
<span class="quotelev2">&gt;&gt; efficiently. So I concur with Chris on this one - let's not go -too-  
</span><br>
<span class="quotelev2">&gt;&gt; benchmark happy and hurt the regular users.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;FWIW, I've seen processor binding help real user codes, too.  Indeed,  
</span><br>
<span class="quotelev1">&gt;on a system where an MPI job has exclusive use of the node, how does  
</span><br>
<span class="quotelev1">&gt;binding hurt you?
</span><br>
<p>Here is how, and I can assure you that's it's not nice, not at all; it can
<br>
kill an application dead.  I have some experience with running large SMP
<br>
systems (Origin, SunFire F15K and POWER3/4 racks) and this area was a
<br>
nightmare.
<br>
<p>Process A is bound, and is waiting briefly for a receive.  All of the
<br>
other cores are busy with the processors bound to them.  There is then some
<br>
action from another process, a daemon or a kernel thread that needs service
<br>
from the kernel.  So it starts a thread on process A's core.  Unfortunately,
<br>
this is a long-running thread (e.g. NFS) so, when the other processors
<br>
finish, and A is the bottleneck, the whole job hangs until that kernel
<br>
thread finishes.
<br>
<p>You can get a similar effect if process A is bound to a CPU which has an 
<br>
I/O device bound to it. When something else entirely starts hammering that 
<br>
device, even if it doesn't tie it up for long each time, bye-bye 
<br>
performance. This is typically a problem on multi-socket systems, of 
<br>
course, but could show up even on quite small ones.
<br>
<p>For this reason, many schedulers ignore binding hints when they 'think' they
<br>
know better - and, no matter what the documentation says, hints is generally
<br>
all they are.  You can then get processes rotating round the processors,
<br>
exercising the inter-cache buses nicely ....  In my experience, binding can
<br>
sometimes make that more likely rather than less, and the best solutions are
<br>
usually different.
<br>
<p>Yes, I used binding, but it was hell to set up, and many people give up,
<br>
saying that it degrades performance.  I advise ordinary users to avoid it
<br>
like the plague, and use more reliable tuning techniques.
<br>
<p><span class="quotelev2">&gt;&gt; UNLESS you have a threaded application, in which case -any- binding  
</span><br>
<span class="quotelev2">&gt;&gt; can be highly detrimental to performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm not quite sure I understand this statement.  Binding is not  
</span><br>
<span class="quotelev1">&gt;inherently contrary to multi-threaded applications.
</span><br>
<p>That is true.  But see above.
<br>
<p>Another circumstance where that is true is when your application is a MPI
<br>
one, but which calls SMP-enabled libraries; this is getting increasingly
<br>
common.  Binding can stop those using spare cores or otherwise confuse
<br>
them; God help you if they start to use a 4-core algorithm on one core!
<br>
<p><p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6650.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6648.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6647.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6650.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
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
