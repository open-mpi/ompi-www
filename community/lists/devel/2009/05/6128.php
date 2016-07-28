<?
$subject_val = "Re: [OMPI devel] problem in the ORTE notifier framework";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 14:26:03 2009" -->
<!-- isoreceived="20090527182603" -->
<!-- sent="Wed, 27 May 2009 14:25:57 -0400" -->
<!-- isosent="20090527182557" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem in the ORTE notifier framework" -->
<!-- id="D9EF7977-2C13-4674-B394-135D63CC3963_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F7F337DC-0A87-41F5-8C77-3732A6541594_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] problem in the ORTE notifier framework<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 14:25:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6129.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
<li><strong>Previous message:</strong> <a href="6127.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300"</a>
<li><strong>In reply to:</strong> <a href="6119.php">George Bosilca: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6132.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6132.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6137.php">Nadia Derbey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Excellent points; Ralph and I chatted about this on the phone today --  
<br>
we concur with George.
<br>
<p>Bull -- would peruse work for you?  I think you mentioned before that  
<br>
it didn't seem attractive to you.  I think George's point is that we  
<br>
already have lots of hooks in place in the PML -- and they're called  
<br>
peruse.  So if we could use those hooks, then a) they're run-time  
<br>
selectable already, and b) there's no additional cost in performance  
<br>
critical/not-critical code paths (for the case where these stats are  
<br>
not being collected) because PERUSE has been in the code base for a  
<br>
long time.
<br>
<p>I think the idea is that your callbacks could be invoked by the peruse  
<br>
hooks and then they can do whatever they want -- increment counters,  
<br>
conditionally invoke the ORTE notifier system, etc.
<br>
<p><p><p>On May 27, 2009, at 11:34 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; What is a generic threshold? And what is a counter? We have a policy
</span><br>
<span class="quotelev1">&gt; against such coding standards, and to be honest I would like to stick
</span><br>
<span class="quotelev1">&gt; to it. The reason is that the PML is a very complex piece of code, and
</span><br>
<span class="quotelev1">&gt; I would like to keep it as easy to understand as possible. If people
</span><br>
<span class="quotelev1">&gt; start adding #if/#endif all over the code, we diverging from this  
</span><br>
<span class="quotelev1">&gt; goal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only way to make this work is to call the notifier or some other
</span><br>
<span class="quotelev1">&gt; framework in this &quot;slow path&quot; and let this other framework do it's own
</span><br>
<span class="quotelev1">&gt; logic to determine what and when to print. Of course the cost of this
</span><br>
<span class="quotelev1">&gt; is a function call plus an atomic operation (which is already not
</span><br>
<span class="quotelev1">&gt; cheap). It's starting to get expensive, even for a &quot;slow path&quot;, which
</span><br>
<span class="quotelev1">&gt; in this particular context is just one insertion in an atomic FIFO.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If instead of counting in number of times we try to send the fragment,
</span><br>
<span class="quotelev1">&gt; and switch to a time base approach, this can be solved with the PERUSE
</span><br>
<span class="quotelev1">&gt; calls. There is a callback when the request is created, and another
</span><br>
<span class="quotelev1">&gt; callback when the first fragment is pushed successfully into the
</span><br>
<span class="quotelev1">&gt; network. Computing the time between these two, allow a tool to figure
</span><br>
<span class="quotelev1">&gt; out how much time the request was waiting in some internal queues, and
</span><br>
<span class="quotelev1">&gt; therefore how much delay this added to the execution time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 27, 2009, at 06:59 , Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_NOTIFIER_VERBOSE(api, counter, threshold,...)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #if WANT_NOTIFIER_VERBOSE
</span><br>
<span class="quotelev2">&gt; &gt; opal_atomic_increment(counter);
</span><br>
<span class="quotelev2">&gt; &gt; if (counter &gt; threshold) {
</span><br>
<span class="quotelev2">&gt; &gt;     orte_notifier.api(.....)
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; #endif
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
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="6129.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
<li><strong>Previous message:</strong> <a href="6127.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300"</a>
<li><strong>In reply to:</strong> <a href="6119.php">George Bosilca: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6132.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6132.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6137.php">Nadia Derbey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
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
