<?
$subject_val = "Re: [OMPI devel] RFC: Update libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  9 09:58:00 2012" -->
<!-- isoreceived="20120509135800" -->
<!-- sent="Wed, 9 May 2012 09:57:55 -0400" -->
<!-- isosent="20120509135755" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Update libevent" -->
<!-- id="CAANzjE=hNAWMauk7j4Uy=-eiKu-CLC00qCgWANb8EBZKcvTB9g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DE5344C5-9D38-4412-85E6-743709FC049D_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Update libevent<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-09 09:57:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10988.php">Jeff Squyres: "[OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>Previous message:</strong> <a href="10986.php">Ralph Castain: "Re: [OMPI devel] RFC: Update libevent"</a>
<li><strong>In reply to:</strong> <a href="10986.php">Ralph Castain: "Re: [OMPI devel] RFC: Update libevent"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!
<br>
<p>On Wed, May 9, 2012 at 9:52 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Sure! See attached the original note to the libevent folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm working with priorities in events using libevent 2.0.13. Since I'm not using the most current release, I thought I'd ask about a behavior we are seeing that might be a potential bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have attached a simple reproducer of the problem. In short, suppose I have setup 8 priorities for my event base. I then execute an event at priority 4. In that callback, I setup and activate two new events - first one at priority 4, and then another at priority 0. We then cycle back through the event loop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Given the prioritized event base, I would expect the event at priority 0 to be called back first. However, this isn't what happens. Instead, the first event to be defined (in this case, the one at priority 4) is called back first.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this the expected behavior? Can someone point me to the error in this reproducer that might be causing the problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: I found that if I adjust the initial event's priority to something different than 4 (i.e., the level of the next event to be defined), then I get the expected behavior. So it appears that the problem is that when we return to the loop, we trigger any pending event of the same priority as the one we were in, instead of looping around to check the highest priority first.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 9, 2012, at 7:45 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you point me to the small reproducer for the libevent bug that was
</span><br>
<span class="quotelev2">&gt;&gt; fixed? I'm just curious.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, May 4, 2012 at 4:09 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FYI: 2.0.19-stable was released yesterday. I have a Mercurial repo all set to go:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://bitbucket.org/rhc/ompi-libevent2019">https://bitbucket.org/rhc/ompi-libevent2019</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please check it out - timeout is now set for May 11th.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 1, 2012, at 8:38 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHAT: &#160;Update libevent to 2.0.19 release
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHEN: &#160;As soon as it is released, expected around May 11
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHY: &#160; &#160; The 2.0.19 release contains a critical fix to a bug I recently discovered in the libevent 2.0.x series
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Details:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I discovered a bug in libevent over the last few days that causes it to unexpectedly &quot;invert&quot; event priorities. It is a slightly subtle bug, but we were able to provide a simple reproducer and so the libevent folks were able to quickly implement a fix.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Stated simply, if you were in an event of a given priority and activated an event of higher priority, that new event would not get serviced if any event of the current priority were to become active prior to leaving the current event. In other words, libevent would service all active events of the current priority before even looking to see if a higher priority event was active.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The patch adds the following logic to event_active:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; IF &lt;I am in an event&gt; AND
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; IF &lt;ev-&gt;base&gt; EQ &lt;current-base&gt; AND
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; IF &lt;pri&gt; LT &lt;current-pri&gt; &#160;THEN
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &lt;rescan queues on next loop&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thus, a rescan only occurs if a higher priority event becomes active during an event of lower priority. Unfortunately, ORTE relies on this behavior to handle errors - without the change, an error reported in a message from a daemon (for example) cannot be serviced until ALL messages that arrive during the processing of the message have been handled. In the case of a large cluster that is receiving a long list of messages, this prevents the error from being handled for quite some time.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10988.php">Jeff Squyres: "[OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>Previous message:</strong> <a href="10986.php">Ralph Castain: "Re: [OMPI devel] RFC: Update libevent"</a>
<li><strong>In reply to:</strong> <a href="10986.php">Ralph Castain: "Re: [OMPI devel] RFC: Update libevent"</a>
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
