<?
$subject_val = "Re: [OMPI devel] problem in the ORTE notifier framework";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 20:14:49 2009" -->
<!-- isoreceived="20090528001449" -->
<!-- sent="Wed, 27 May 2009 18:14:43 -0600" -->
<!-- isosent="20090528001443" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem in the ORTE notifier framework" -->
<!-- id="71d2d8cc0905271714j4f1ece99x4373d232e34231a7_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 20:14:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6133.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>Previous message:</strong> <a href="6131.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21285"</a>
<li><strong>In reply to:</strong> <a href="6128.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6137.php">Nadia Derbey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think it depends upon what is being monitored. As I understand it, we
<br>
could use the peruse link to generate notifications based on the number of
<br>
times someone calls &quot;MPI_Send&quot;, for example. I concur with George's concerns
<br>
about performance in this area and would agree that using the peruse hooks
<br>
makes some sense.
<br>
<p>However, if one wants to generate a notification when an error occurs (e.g.,
<br>
too many IB retries) that might not be fatal, but only wants that
<br>
notification to go out every xx times that happens, then I don't think the
<br>
peruse option will work. In this scenario, though, I don't think performance
<br>
is an issue any longer - this code path would only be followed when tracking
<br>
errors, and thus can flow slower.
<br>
<p>So I think a combination of the two approaches makes the most sense. All the
<br>
ORTE_NOTIFIER_VERBOSE method does is provide a means of enabling the second
<br>
option in a configure-it-in/out way that is fairly clean as it just mirrors
<br>
the current OPAL_OUTPUT_VERBOSE methodology. Using peruse for the first
<br>
option sounds like a reasonable approach.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p>On Wed, May 27, 2009 at 12:25 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Excellent points; Ralph and I chatted about this on the phone today -- we
</span><br>
<span class="quotelev1">&gt; concur with George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bull -- would peruse work for you?  I think you mentioned before that it
</span><br>
<span class="quotelev1">&gt; didn't seem attractive to you.  I think George's point is that we already
</span><br>
<span class="quotelev1">&gt; have lots of hooks in place in the PML -- and they're called peruse.  So if
</span><br>
<span class="quotelev1">&gt; we could use those hooks, then a) they're run-time selectable already, and
</span><br>
<span class="quotelev1">&gt; b) there's no additional cost in performance critical/not-critical code
</span><br>
<span class="quotelev1">&gt; paths (for the case where these stats are not being collected) because
</span><br>
<span class="quotelev1">&gt; PERUSE has been in the code base for a long time.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 27, 2009, at 11:34 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  What is a generic threshold? And what is a counter? We have a policy
</span><br>
<span class="quotelev2">&gt;&gt; against such coding standards, and to be honest I would like to stick
</span><br>
<span class="quotelev2">&gt;&gt; to it. The reason is that the PML is a very complex piece of code, and
</span><br>
<span class="quotelev2">&gt;&gt; I would like to keep it as easy to understand as possible. If people
</span><br>
<span class="quotelev2">&gt;&gt; start adding #if/#endif all over the code, we diverging from this goal.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The only way to make this work is to call the notifier or some other
</span><br>
<span class="quotelev2">&gt;&gt; framework in this &quot;slow path&quot; and let this other framework do it's own
</span><br>
<span class="quotelev2">&gt;&gt; logic to determine what and when to print. Of course the cost of this
</span><br>
<span class="quotelev2">&gt;&gt; is a function call plus an atomic operation (which is already not
</span><br>
<span class="quotelev2">&gt;&gt; cheap). It's starting to get expensive, even for a &quot;slow path&quot;, which
</span><br>
<span class="quotelev2">&gt;&gt; in this particular context is just one insertion in an atomic FIFO.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If instead of counting in number of times we try to send the fragment,
</span><br>
<span class="quotelev2">&gt;&gt; and switch to a time base approach, this can be solved with the PERUSE
</span><br>
<span class="quotelev2">&gt;&gt; calls. There is a callback when the request is created, and another
</span><br>
<span class="quotelev2">&gt;&gt; callback when the first fragment is pushed successfully into the
</span><br>
<span class="quotelev2">&gt;&gt; network. Computing the time between these two, allow a tool to figure
</span><br>
<span class="quotelev2">&gt;&gt; out how much time the request was waiting in some internal queues, and
</span><br>
<span class="quotelev2">&gt;&gt; therefore how much delay this added to the execution time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 27, 2009, at 06:59 , Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ORTE_NOTIFIER_VERBOSE(api, counter, threshold,...)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #if WANT_NOTIFIER_VERBOSE
</span><br>
<span class="quotelev3">&gt;&gt; &gt; opal_atomic_increment(counter);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; if (counter &gt; threshold) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     orte_notifier.api(.....)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; }
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6132/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6133.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>Previous message:</strong> <a href="6131.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21285"</a>
<li><strong>In reply to:</strong> <a href="6128.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6137.php">Nadia Derbey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
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
