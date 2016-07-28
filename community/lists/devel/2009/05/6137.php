<?
$subject_val = "Re: [OMPI devel] problem in the ORTE notifier framework";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 28 02:59:09 2009" -->
<!-- isoreceived="20090528065909" -->
<!-- sent="Thu, 28 May 2009 08:55:24 +0200" -->
<!-- isosent="20090528065524" -->
<!-- name="Nadia Derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem in the ORTE notifier framework" -->
<!-- id="1243493724.2634.41.camel_at_frecb000730.frec.bull.fr" -->
<!-- inreplyto="D9EF7977-2C13-4674-B394-135D63CC3963_at_cisco.com" -->
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
<strong>From:</strong> Nadia Derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-28 02:55:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6138.php">Holger Mickler: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<li><strong>Previous message:</strong> <a href="6136.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>In reply to:</strong> <a href="6128.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6141.php">Terry Dontje: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6141.php">Terry Dontje: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6144.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6147.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2009-05-27 at 14:25 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Excellent points; Ralph and I chatted about this on the phone today --  
</span><br>
<span class="quotelev1">&gt; we concur with George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bull -- would peruse work for you?  I think you mentioned before that  
</span><br>
<span class="quotelev1">&gt; it didn't seem attractive to you.
</span><br>
<p>Well, it didn't because from what I understood, the MPI program need to
<br>
be changed (register a callback routine for the event, activate the
<br>
event, etc), and this is something we wanted to avoid.
<br>
<p>Now, if we are allowed to 
<br>
1. define new &quot;internal&quot; PERUSE events, 
<br>
2. internally set the associated callback routines
<br>
why not using peruse? This combined with the orte notifier framework,
<br>
could do the job I think.
<br>
<p>Regards,
<br>
Nadia
<br>
<p><span class="quotelev1">&gt;   I think George's point is that we  
</span><br>
<span class="quotelev1">&gt; already have lots of hooks in place in the PML -- and they're called  
</span><br>
<span class="quotelev1">&gt; peruse.  So if we could use those hooks, then a) they're run-time  
</span><br>
<span class="quotelev1">&gt; selectable already, and b) there's no additional cost in performance  
</span><br>
<span class="quotelev1">&gt; critical/not-critical code paths (for the case where these stats are  
</span><br>
<span class="quotelev1">&gt; not being collected) because PERUSE has been in the code base for a  
</span><br>
<span class="quotelev1">&gt; long time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think the idea is that your callbacks could be invoked by the peruse  
</span><br>
<span class="quotelev1">&gt; hooks and then they can do whatever they want -- increment counters,  
</span><br>
<span class="quotelev1">&gt; conditionally invoke the ORTE notifier system, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 27, 2009, at 11:34 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; What is a generic threshold? And what is a counter? We have a policy
</span><br>
<span class="quotelev2">&gt; &gt; against such coding standards, and to be honest I would like to stick
</span><br>
<span class="quotelev2">&gt; &gt; to it. The reason is that the PML is a very complex piece of code, and
</span><br>
<span class="quotelev2">&gt; &gt; I would like to keep it as easy to understand as possible. If people
</span><br>
<span class="quotelev2">&gt; &gt; start adding #if/#endif all over the code, we diverging from this  
</span><br>
<span class="quotelev2">&gt; &gt; goal.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The only way to make this work is to call the notifier or some other
</span><br>
<span class="quotelev2">&gt; &gt; framework in this &quot;slow path&quot; and let this other framework do it's own
</span><br>
<span class="quotelev2">&gt; &gt; logic to determine what and when to print. Of course the cost of this
</span><br>
<span class="quotelev2">&gt; &gt; is a function call plus an atomic operation (which is already not
</span><br>
<span class="quotelev2">&gt; &gt; cheap). It's starting to get expensive, even for a &quot;slow path&quot;, which
</span><br>
<span class="quotelev2">&gt; &gt; in this particular context is just one insertion in an atomic FIFO.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If instead of counting in number of times we try to send the fragment,
</span><br>
<span class="quotelev2">&gt; &gt; and switch to a time base approach, this can be solved with the PERUSE
</span><br>
<span class="quotelev2">&gt; &gt; calls. There is a callback when the request is created, and another
</span><br>
<span class="quotelev2">&gt; &gt; callback when the first fragment is pushed successfully into the
</span><br>
<span class="quotelev2">&gt; &gt; network. Computing the time between these two, allow a tool to figure
</span><br>
<span class="quotelev2">&gt; &gt; out how much time the request was waiting in some internal queues, and
</span><br>
<span class="quotelev2">&gt; &gt; therefore how much delay this added to the execution time.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    george.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 27, 2009, at 06:59 , Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_NOTIFIER_VERBOSE(api, counter, threshold,...)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #if WANT_NOTIFIER_VERBOSE
</span><br>
<span class="quotelev3">&gt; &gt; &gt; opal_atomic_increment(counter);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; if (counter &gt; threshold) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     orte_notifier.api(.....)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; }
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #endif
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<pre>
-- 
Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6138.php">Holger Mickler: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<li><strong>Previous message:</strong> <a href="6136.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>In reply to:</strong> <a href="6128.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6141.php">Terry Dontje: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6141.php">Terry Dontje: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6144.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6147.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
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
