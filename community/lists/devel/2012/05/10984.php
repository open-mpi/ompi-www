<?
$subject_val = "Re: [OMPI devel] RFC: Update libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  9 09:45:56 2012" -->
<!-- isoreceived="20120509134556" -->
<!-- sent="Wed, 9 May 2012 09:45:52 -0400" -->
<!-- isosent="20120509134552" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Update libevent" -->
<!-- id="CAANzjEkQM1=1Pcv22yp5ChnVAF=vykK++=2aKncg5OtYLFf7Ew_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="676A6F12-E80F-4F1B-8936-5E75F9FD4826_at_open-mpi.org" -->
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
<strong>Date:</strong> 2012-05-09 09:45:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10985.php">Ludovic.Hablot_at_[hidden]: "Re: [OMPI devel] 1.6rc3 is out"</a>
<li><strong>Previous message:</strong> <a href="10983.php">Jeff Squyres: "[OMPI devel] 1.6rc3 is out"</a>
<li><strong>In reply to:</strong> <a href="10975.php">Ralph Castain: "Re: [OMPI devel] RFC: Update libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10986.php">Ralph Castain: "Re: [OMPI devel] RFC: Update libevent"</a>
<li><strong>Reply:</strong> <a href="10986.php">Ralph Castain: "Re: [OMPI devel] RFC: Update libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Can you point me to the small reproducer for the libevent bug that was
<br>
fixed? I'm just curious.
<br>
<p>Thanks,
<br>
Josh
<br>
<p>On Fri, May 4, 2012 at 4:09 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; FYI: 2.0.19-stable was released yesterday. I have a Mercurial repo all set to go:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://bitbucket.org/rhc/ompi-libevent2019">https://bitbucket.org/rhc/ompi-libevent2019</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please check it out - timeout is now set for May 11th.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 1, 2012, at 8:38 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: &#160;Update libevent to 2.0.19 release
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHEN: &#160;As soon as it is released, expected around May 11
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHY: &#160; &#160; The 2.0.19 release contains a critical fix to a bug I recently discovered in the libevent 2.0.x series
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Details:
</span><br>
<span class="quotelev2">&gt;&gt; I discovered a bug in libevent over the last few days that causes it to unexpectedly &quot;invert&quot; event priorities. It is a slightly subtle bug, but we were able to provide a simple reproducer and so the libevent folks were able to quickly implement a fix.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stated simply, if you were in an event of a given priority and activated an event of higher priority, that new event would not get serviced if any event of the current priority were to become active prior to leaving the current event. In other words, libevent would service all active events of the current priority before even looking to see if a higher priority event was active.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The patch adds the following logic to event_active:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; IF &lt;I am in an event&gt; AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; IF &lt;ev-&gt;base&gt; EQ &lt;current-base&gt; AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; IF &lt;pri&gt; LT &lt;current-pri&gt; &#160;THEN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &lt;rescan queues on next loop&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thus, a rescan only occurs if a higher priority event becomes active during an event of lower priority. Unfortunately, ORTE relies on this behavior to handle errors - without the change, an error reported in a message from a daemon (for example) cannot be serviced until ALL messages that arrive during the processing of the message have been handled. In the case of a large cluster that is receiving a long list of messages, this prevents the error from being handled for quite some time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="10985.php">Ludovic.Hablot_at_[hidden]: "Re: [OMPI devel] 1.6rc3 is out"</a>
<li><strong>Previous message:</strong> <a href="10983.php">Jeff Squyres: "[OMPI devel] 1.6rc3 is out"</a>
<li><strong>In reply to:</strong> <a href="10975.php">Ralph Castain: "Re: [OMPI devel] RFC: Update libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10986.php">Ralph Castain: "Re: [OMPI devel] RFC: Update libevent"</a>
<li><strong>Reply:</strong> <a href="10986.php">Ralph Castain: "Re: [OMPI devel] RFC: Update libevent"</a>
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
