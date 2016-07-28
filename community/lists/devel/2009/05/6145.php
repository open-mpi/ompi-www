<?
$subject_val = "Re: [OMPI devel] problem in the ORTE notifier framework";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 28 08:15:49 2009" -->
<!-- isoreceived="20090528121549" -->
<!-- sent="Thu, 28 May 2009 14:12:03 +0200" -->
<!-- isosent="20090528121203" -->
<!-- name="Nadia Derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem in the ORTE notifier framework" -->
<!-- id="1243512723.2634.63.camel_at_frecb000730.frec.bull.fr" -->
<!-- inreplyto="71d2d8cc0905280457t7ad12f6fu95007128d35befbc_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-05-28 08:12:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6146.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6144.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>In reply to:</strong> <a href="6144.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6147.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2009-05-28 at 05:57 -0600, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I agree with Terry here about being careful in pursuing this path.
</span><br>
<span class="quotelev1">&gt; What I wouldn't want to have happen is to force anyone wanting to be
</span><br>
<span class="quotelev1">&gt; notified of error events to have to also turn on peruse, which impacts
</span><br>
<span class="quotelev1">&gt; the non-error code path.
</span><br>
<p>Agreed, I missed that part!
<br>
<p>Regards,
<br>
Nadia
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, I'm not entirely sure what you are trying to do here. As I
</span><br>
<span class="quotelev1">&gt; understood the original RFC, it sounded like you wanted to track
</span><br>
<span class="quotelev1">&gt; errors but only report them when they occurred a controlled number of
</span><br>
<span class="quotelev1">&gt; times (as opposed to every time). I think this would better be done
</span><br>
<span class="quotelev1">&gt; outside of peruse.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you are trying to track normal performance (e.g., trying to alert
</span><br>
<span class="quotelev1">&gt; sys admins when networks aren't running as fast as they should), then
</span><br>
<span class="quotelev1">&gt; that probably should be done inside of peruse. However, that
</span><br>
<span class="quotelev1">&gt; definitely will impact the critical code path, so Terry's caution is
</span><br>
<span class="quotelev1">&gt; definitely a concern.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, May 28, 2009 at 12:55 AM, Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;         On Wed, 2009-05-27 at 14:25 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;         &gt; Excellent points; Ralph and I chatted about this on the
</span><br>
<span class="quotelev1">&gt;         phone today --
</span><br>
<span class="quotelev2">&gt;         &gt; we concur with George.
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; Bull -- would peruse work for you?  I think you mentioned
</span><br>
<span class="quotelev1">&gt;         before that
</span><br>
<span class="quotelev2">&gt;         &gt; it didn't seem attractive to you.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Well, it didn't because from what I understood, the MPI
</span><br>
<span class="quotelev1">&gt;         program need to
</span><br>
<span class="quotelev1">&gt;         be changed (register a callback routine for the event,
</span><br>
<span class="quotelev1">&gt;         activate the
</span><br>
<span class="quotelev1">&gt;         event, etc), and this is something we wanted to avoid.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Now, if we are allowed to
</span><br>
<span class="quotelev1">&gt;         1. define new &quot;internal&quot; PERUSE events,
</span><br>
<span class="quotelev1">&gt;         2. internally set the associated callback routines
</span><br>
<span class="quotelev1">&gt;         why not using peruse? This combined with the orte notifier
</span><br>
<span class="quotelev1">&gt;         framework,
</span><br>
<span class="quotelev1">&gt;         could do the job I think.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Regards,
</span><br>
<span class="quotelev1">&gt;         Nadia
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev2">&gt;         &gt;   I think George's point is that we
</span><br>
<span class="quotelev2">&gt;         &gt; already have lots of hooks in place in the PML -- and
</span><br>
<span class="quotelev1">&gt;         they're called
</span><br>
<span class="quotelev2">&gt;         &gt; peruse.  So if we could use those hooks, then a) they're
</span><br>
<span class="quotelev1">&gt;         run-time
</span><br>
<span class="quotelev2">&gt;         &gt; selectable already, and b) there's no additional cost in
</span><br>
<span class="quotelev1">&gt;         performance
</span><br>
<span class="quotelev2">&gt;         &gt; critical/not-critical code paths (for the case where these
</span><br>
<span class="quotelev1">&gt;         stats are
</span><br>
<span class="quotelev2">&gt;         &gt; not being collected) because PERUSE has been in the code
</span><br>
<span class="quotelev1">&gt;         base for a
</span><br>
<span class="quotelev2">&gt;         &gt; long time.
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; I think the idea is that your callbacks could be invoked by
</span><br>
<span class="quotelev1">&gt;         the peruse
</span><br>
<span class="quotelev2">&gt;         &gt; hooks and then they can do whatever they want -- increment
</span><br>
<span class="quotelev1">&gt;         counters,
</span><br>
<span class="quotelev2">&gt;         &gt; conditionally invoke the ORTE notifier system, etc.
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; On May 27, 2009, at 11:34 AM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; What is a generic threshold? And what is a counter? We
</span><br>
<span class="quotelev1">&gt;         have a policy
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; against such coding standards, and to be honest I would
</span><br>
<span class="quotelev1">&gt;         like to stick
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; to it. The reason is that the PML is a very complex piece
</span><br>
<span class="quotelev1">&gt;         of code, and
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; I would like to keep it as easy to understand as possible.
</span><br>
<span class="quotelev1">&gt;         If people
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; start adding #if/#endif all over the code, we diverging
</span><br>
<span class="quotelev1">&gt;         from this
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; goal.
</span><br>
<span class="quotelev3">&gt;         &gt; &gt;
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; The only way to make this work is to call the notifier or
</span><br>
<span class="quotelev1">&gt;         some other
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; framework in this &quot;slow path&quot; and let this other framework
</span><br>
<span class="quotelev1">&gt;         do it's own
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; logic to determine what and when to print. Of course the
</span><br>
<span class="quotelev1">&gt;         cost of this
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; is a function call plus an atomic operation (which is
</span><br>
<span class="quotelev1">&gt;         already not
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; cheap). It's starting to get expensive, even for a &quot;slow
</span><br>
<span class="quotelev1">&gt;         path&quot;, which
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; in this particular context is just one insertion in an
</span><br>
<span class="quotelev1">&gt;         atomic FIFO.
</span><br>
<span class="quotelev3">&gt;         &gt; &gt;
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; If instead of counting in number of times we try to send
</span><br>
<span class="quotelev1">&gt;         the fragment,
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; and switch to a time base approach, this can be solved
</span><br>
<span class="quotelev1">&gt;         with the PERUSE
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; calls. There is a callback when the request is created,
</span><br>
<span class="quotelev1">&gt;         and another
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; callback when the first fragment is pushed successfully
</span><br>
<span class="quotelev1">&gt;         into the
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; network. Computing the time between these two, allow a
</span><br>
<span class="quotelev1">&gt;         tool to figure
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; out how much time the request was waiting in some internal
</span><br>
<span class="quotelev1">&gt;         queues, and
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; therefore how much delay this added to the execution time.
</span><br>
<span class="quotelev3">&gt;         &gt; &gt;
</span><br>
<span class="quotelev3">&gt;         &gt; &gt;    george.
</span><br>
<span class="quotelev3">&gt;         &gt; &gt;
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; On May 27, 2009, at 06:59 , Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;         &gt; &gt;
</span><br>
<span class="quotelev4">&gt;         &gt; &gt; &gt; ORTE_NOTIFIER_VERBOSE(api, counter, threshold,...)
</span><br>
<span class="quotelev4">&gt;         &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;         &gt; &gt; &gt; #if WANT_NOTIFIER_VERBOSE
</span><br>
<span class="quotelev4">&gt;         &gt; &gt; &gt; opal_atomic_increment(counter);
</span><br>
<span class="quotelev4">&gt;         &gt; &gt; &gt; if (counter &gt; threshold) {
</span><br>
<span class="quotelev4">&gt;         &gt; &gt; &gt;     orte_notifier.api(.....)
</span><br>
<span class="quotelev4">&gt;         &gt; &gt; &gt; }
</span><br>
<span class="quotelev4">&gt;         &gt; &gt; &gt; #endif
</span><br>
<span class="quotelev3">&gt;         &gt; &gt;
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;         &gt; &gt;
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev1">&gt;         --
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         devel mailing list
</span><br>
<span class="quotelev1">&gt;         devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;         
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
<pre>
-- 
Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6146.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6144.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>In reply to:</strong> <a href="6144.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6147.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
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
