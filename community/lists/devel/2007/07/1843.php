<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 11 07:02:37 2007" -->
<!-- isoreceived="20070711110237" -->
<!-- sent="Wed, 11 Jul 2007 07:02:27 -0400" -->
<!-- isosent="20070711110227" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Off topic: ptpd for time synchronization" -->
<!-- id="754395F4-7658-4435-864B-7088D5A5B890_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-11 07:02:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1844.php">Christoph Niethammer: "[OMPI devel] patch for btl_sm.c fixing segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="1842.php">Galen Shipman: "Re: [OMPI devel] [devel-core] Collective Communications Optimization - MeetingScheduled in Albuquerque!"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is a bit off-topic for this list, but I was wondering if anyone  
<br>
has any experience working with ptpd (precision time protocol daemon;  
<br>
following the IEEE 1588 spec).  The point of ptpd is to give better  
<br>
time precision than NTP; NTP gives accuracy on the order of  
<br>
miliseconds where ptpd/IEEE 1588 gives accuracy on the order of  
<br>
microseconds.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://ptpd.sourceforge.net/">http://ptpd.sourceforge.net/</a>
<br>
<p>Having coordination accuracy within miliseconds could be quite  
<br>
helpful to MPI in multiple ways: giving more accurate MPI tracing  
<br>
outputs, the possibility of scheduling communication (particularly  
<br>
for MPI collectives) in oversubscribed networks, etc.
<br>
<p>I'd like to give ptpd a whirl, but there's very little documentation  
<br>
and I can't find any mailing lists or other points of contact where  
<br>
to ask a few questions.
<br>
<p>In particular, I would like to run ptpd in a way that I'm guessing  
<br>
would be fairly common in HPC environments: use NTP to get the time  
<br>
to my cluster's head node and then use ptpd to synchronize my cluster  
<br>
to the NTP'ed head node.  However, it's not clear to me how ptpd  
<br>
works -- how do I designate one head node as the &quot;master&quot;?  What,  
<br>
exactly, do all the command line options to ptpd mean?  (there's only  
<br>
a limited &quot;--help&quot; kind of message to explain them)  And so on.
<br>
<p>I have a busy/active cluster, so I don't want to muck up the clock  
<br>
(and therefore potentially muck up NFS file timestamps) -- some level  
<br>
of experimentation is ok, but I don't want to unintentionally cause a  
<br>
large/bad effect (particularly in terms of NFS) if possible.  I'm  
<br>
also curious as to how much network overhead ptpd incurs, both at  
<br>
startup and in its steady state operation.
<br>
<p>If anyone has any insight or experience with ptpd, I'd love to hear  
<br>
it.  Thanks!
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1844.php">Christoph Niethammer: "[OMPI devel] patch for btl_sm.c fixing segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="1842.php">Galen Shipman: "Re: [OMPI devel] [devel-core] Collective Communications Optimization - MeetingScheduled in Albuquerque!"</a>
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
