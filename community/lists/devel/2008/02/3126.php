<?
$subject_val = "[OMPI devel] xensocket - callbacks through OPAL/libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 20:38:42 2008" -->
<!-- isoreceived="20080205013842" -->
<!-- sent="Mon, 4 Feb 2008 17:38:24 -0800 (PST)" -->
<!-- isosent="20080205013824" -->
<!-- name="Muhammad Atif" -->
<!-- email="m_atif_s_at_[hidden]" -->
<!-- subject="[OMPI devel] xensocket - callbacks through OPAL/libevent" -->
<!-- id="724266.30605.qm_at_web52103.mail.re2.yahoo.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] xensocket - callbacks through OPAL/libevent<br>
<strong>From:</strong> Muhammad Atif (<em>m_atif_s_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-04 20:38:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3127.php">Andreas Knüpfer: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Previous message:</strong> <a href="3125.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3128.php">Brian W. Barrett: "Re: [OMPI devel] xensocket - callbacks through OPAL/libevent"</a>
<li><strong>Reply:</strong> <a href="3128.php">Brian W. Barrett: "Re: [OMPI devel] xensocket - callbacks through OPAL/libevent"</a>
<li><strong>Maybe reply:</strong> <a href="3151.php">Muhammad Atif: "Re: [OMPI devel] xensocket - callbacks through OPAL/libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Developers
<br>
I am back.. This time i am actually facing a problem. I should have send the problem to eventlib mailing list first, but I thought your guys must be more current with what I am doing, so i tried this list first. 
<br>
<p>I am trying to port xensockets to openmpi. In principle, I have the framework and everything, but there seems to be a small issue, I cannot get libevent (or OPAL) to give callbacks for receive (or send) for xensockets. I have tried to implement  native code  for xensockets  with libevent library,  again the same issue.  No  call backs! . With normal sockets, callbacks do come easily. 
<br>
<p>So question is,  do the socket/file descriptors have to have some special mechanism attached to them to support callbacks for libevent/opal? i.e some structure/magic?. i.e. maybe the developers of xensockets did not add that callback/interrupt thing at the time of creation. Xensockets is open source, but my knowledge about these issues is limited. So I though some pointer in right direction might be useful. 
<br>
<p>Second question is, what if we cannot have the callbacks. What is the recommended way to implement the btl component for such a device? Do we need to do this with event timers?
<br>
&nbsp;
<br>
Best Regards,
<br>
Muhammad AtifPS: google was not helpful. :)
<br>
<p><p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;____________________________________________________________________________________
<br>
Be a better friend, newshound, and 
<br>
know-it-all with Yahoo! Mobile.  Try it now.  <a href="http://mobile.yahoo.com/;_ylt=Ahu06i62sR8HDtDypao8Wcj9tAcJ">http://mobile.yahoo.com/;_ylt=Ahu06i62sR8HDtDypao8Wcj9tAcJ</a> 
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3126/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3127.php">Andreas Knüpfer: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Previous message:</strong> <a href="3125.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3128.php">Brian W. Barrett: "Re: [OMPI devel] xensocket - callbacks through OPAL/libevent"</a>
<li><strong>Reply:</strong> <a href="3128.php">Brian W. Barrett: "Re: [OMPI devel] xensocket - callbacks through OPAL/libevent"</a>
<li><strong>Maybe reply:</strong> <a href="3151.php">Muhammad Atif: "Re: [OMPI devel] xensocket - callbacks through OPAL/libevent"</a>
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
