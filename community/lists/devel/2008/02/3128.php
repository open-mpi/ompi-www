<?
$subject_val = "Re: [OMPI devel] xensocket - callbacks through OPAL/libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 10:57:48 2008" -->
<!-- isoreceived="20080205155748" -->
<!-- sent="Tue, 5 Feb 2008 09:57:31 -0600 (CST)" -->
<!-- isosent="20080205155731" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] xensocket - callbacks through OPAL/libevent" -->
<!-- id="Pine.LNX.4.64.0802050949430.10238_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="724266.30605.qm_at_web52103.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] xensocket - callbacks through OPAL/libevent<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-05 10:57:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3129.php">Andreas Knüpfer: "Re: [OMPI devel] VT in trunk + how to disable"</a>
<li><strong>Previous message:</strong> <a href="3127.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>In reply to:</strong> <a href="3126.php">Muhammad Atif: "[OMPI devel] xensocket - callbacks through OPAL/libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3151.php">Muhammad Atif: "Re: [OMPI devel] xensocket - callbacks through OPAL/libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 4 Feb 2008, Muhammad Atif wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to port xensockets to openmpi. In principle, I have the 
</span><br>
<span class="quotelev1">&gt; framework and everything, but there seems to be a small issue, I cannot 
</span><br>
<span class="quotelev1">&gt; get libevent (or OPAL) to give callbacks for receive (or send) for 
</span><br>
<span class="quotelev1">&gt; xensockets. I have tried to implement native code for xensockets with 
</span><br>
<span class="quotelev1">&gt; libevent library, again the same issue.  No call backs! . With normal 
</span><br>
<span class="quotelev1">&gt; sockets, callbacks do come easily.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So question is, do the socket/file descriptors have to have some special 
</span><br>
<span class="quotelev1">&gt; mechanism attached to them to support callbacks for libevent/opal? i.e 
</span><br>
<span class="quotelev1">&gt; some structure/magic?. i.e. maybe the developers of xensockets did not 
</span><br>
<span class="quotelev1">&gt; add that callback/interrupt thing at the time of creation. Xensockets is 
</span><br>
<span class="quotelev1">&gt; open source, but my knowledge about these issues is limited. So I though 
</span><br>
<span class="quotelev1">&gt; some pointer in right direction might be useful.
</span><br>
<p>Yes and no :).  As you discovered, the OPAL interface just repackages a 
<br>
library called libevent to handle its socket multiplexing.  Libevent can 
<br>
use a number of different mechanisms to look for activity on sockets, 
<br>
including select() and poll() calls.  On Linux, it will generally use 
<br>
poll().  poll() requires some kernel support to do its thing, so if 
<br>
Xensockets doesn't implement the right magic to trigger poll() events, 
<br>
then libevent won't work for Xensockets.  There's really nothing you can 
<br>
do from the Open MPI front to work around this issue -- it would have to 
<br>
be fixed as part of Xensockets.
<br>
<p><span class="quotelev1">&gt; Second question is, what if we cannot have the callbacks. What is the 
</span><br>
<span class="quotelev1">&gt; recommended way to implement the btl component for such a device? Do we 
</span><br>
<span class="quotelev1">&gt; need to do this with event timers?
</span><br>
<p>Have a look at any of the BTLs that isn't TCP -- none of them use libevent 
<br>
callbacks for progress.  Instead, they provide a progress function as part 
<br>
of the BTL interface, which is called on a regular basis whenever progress 
<br>
needs to be made.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3129.php">Andreas Knüpfer: "Re: [OMPI devel] VT in trunk + how to disable"</a>
<li><strong>Previous message:</strong> <a href="3127.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>In reply to:</strong> <a href="3126.php">Muhammad Atif: "[OMPI devel] xensocket - callbacks through OPAL/libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3151.php">Muhammad Atif: "Re: [OMPI devel] xensocket - callbacks through OPAL/libevent"</a>
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
