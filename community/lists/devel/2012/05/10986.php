<?
$subject_val = "Re: [OMPI devel] RFC: Update libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  9 09:52:10 2012" -->
<!-- isoreceived="20120509135210" -->
<!-- sent="Wed, 9 May 2012 07:52:00 -0600" -->
<!-- isosent="20120509135200" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Update libevent" -->
<!-- id="DE5344C5-9D38-4412-85E6-743709FC049D_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAANzjEkQM1=1Pcv22yp5ChnVAF=vykK++=2aKncg5OtYLFf7Ew_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-09 09:52:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10987.php">Josh Hursey: "Re: [OMPI devel] RFC: Update libevent"</a>
<li><strong>Previous message:</strong> <a href="10985.php">Ludovic.Hablot_at_[hidden]: "Re: [OMPI devel] 1.6rc3 is out"</a>
<li><strong>In reply to:</strong> <a href="10984.php">Josh Hursey: "Re: [OMPI devel] RFC: Update libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10987.php">Josh Hursey: "Re: [OMPI devel] RFC: Update libevent"</a>
<li><strong>Reply:</strong> <a href="10987.php">Josh Hursey: "Re: [OMPI devel] RFC: Update libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sure! See attached the original note to the libevent folks
<br>
<p><p>
<br><p><strong>attached mail follows:</strong><hr>
<br><p>
<p><p>On May 9, 2012, at 7:45 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; Can you point me to the small reproducer for the libevent bug that was
</span><br>
<span class="quotelev1">&gt; fixed? I'm just curious.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, May 4, 2012 at 4:09 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; FYI: 2.0.19-stable was released yesterday. I have a Mercurial repo all set to go:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://bitbucket.org/rhc/ompi-libevent2019">https://bitbucket.org/rhc/ompi-libevent2019</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please check it out - timeout is now set for May 11th.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 1, 2012, at 8:38 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT:  Update libevent to 2.0.19 release
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHEN:  As soon as it is released, expected around May 11
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY:     The 2.0.19 release contains a critical fix to a bug I recently discovered in the libevent 2.0.x series
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Details:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I discovered a bug in libevent over the last few days that causes it to unexpectedly &quot;invert&quot; event priorities. It is a slightly subtle bug, but we were able to provide a simple reproducer and so the libevent folks were able to quickly implement a fix.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Stated simply, if you were in an event of a given priority and activated an event of higher priority, that new event would not get serviced if any event of the current priority were to become active prior to leaving the current event. In other words, libevent would service all active events of the current priority before even looking to see if a higher priority event was active.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The patch adds the following logic to event_active:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   IF &lt;I am in an event&gt; AND
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       IF &lt;ev-&gt;base&gt; EQ &lt;current-base&gt; AND
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       IF &lt;pri&gt; LT &lt;current-pri&gt;  THEN
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           &lt;rescan queues on next loop&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thus, a rescan only occurs if a higher priority event becomes active during an event of lower priority. Unfortunately, ORTE relies on this behavior to handle errors - without the change, an error reported in a message from a daemon (for example) cannot be serviced until ALL messages that arrive during the processing of the message have been handled. In the case of a large cluster that is receiving a long list of messages, this prevents the error from being handled for quite some time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<p><p><hr>
<ul>
<li>message/rfc822 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10986/Event_priorities.eml">Event_priorities.eml</a>
</ul>
<!-- attachment="Event_priorities.eml" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10987.php">Josh Hursey: "Re: [OMPI devel] RFC: Update libevent"</a>
<li><strong>Previous message:</strong> <a href="10985.php">Ludovic.Hablot_at_[hidden]: "Re: [OMPI devel] 1.6rc3 is out"</a>
<li><strong>In reply to:</strong> <a href="10984.php">Josh Hursey: "Re: [OMPI devel] RFC: Update libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10987.php">Josh Hursey: "Re: [OMPI devel] RFC: Update libevent"</a>
<li><strong>Reply:</strong> <a href="10987.php">Josh Hursey: "Re: [OMPI devel] RFC: Update libevent"</a>
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
