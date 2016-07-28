<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 18 09:25:58 2005" -->
<!-- isoreceived="20050818142558" -->
<!-- sent="Thu, 18 Aug 2005 09:25:57 -0500" -->
<!-- isosent="20050818142557" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="opal_progress changes" -->
<!-- id="3E16F269-0CE7-48FB-9CA5-52C29FA37851_at_open-mpi.org" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-18 09:25:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0194.php">Tim S. Woodall: "Re:  ob1 -&gt; default?"</a>
<li><strong>Previous message:</strong> <a href="0192.php">Brian Barrett: "Re:  Compile error with latest code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>Just to let you know that last night I committed some more changes to  
<br>
opal_progress(), along with a bunch of code to access cycle counters  
<br>
or high resolution, low overhead timers on a bunch of platforms.   
<br>
opal_progress() now makes the decision of whether to tick the event  
<br>
library based on how long it has been since the last time it ticked  
<br>
the event library (the default is 10ms - I'm open to suggestions on  
<br>
an optimal value), rather than number of times opal_event has been  
<br>
called since the last time the event library has been ticked.  If  
<br>
high resolution timers are not available, the code falls back to  
<br>
using the # of times since the last event tick method that has always  
<br>
been used.  Currently, opal contains support for:
<br>
<p>&nbsp;&nbsp;&nbsp;Linux (x86, x86_64, IA64)
<br>
&nbsp;&nbsp;&nbsp;Sun Solaris (x86 &amp; Sparc)
<br>
&nbsp;&nbsp;&nbsp;Mac OS X / Darwin (x86 &amp; PowerPC)
<br>
<p>I'll be adding support for:
<br>
<p>&nbsp;&nbsp;&nbsp;AIX (POWER &amp; PowerPC)
<br>
&nbsp;&nbsp;&nbsp;Linux (PowerPC)
<br>
&nbsp;&nbsp;&nbsp;Altix (while IA64 Linux, there's special global timer stuff)
<br>
<p>In theory, other than some Intel tests now passing on InfiniBand, you  
<br>
really shouldn't notice too much of a difference.  Oh, and  
<br>
opal_progress() got even uglier.  Which I didn't know was really  
<br>
possible.
<br>
<p><p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0194.php">Tim S. Woodall: "Re:  ob1 -&gt; default?"</a>
<li><strong>Previous message:</strong> <a href="0192.php">Brian Barrett: "Re:  Compile error with latest code"</a>
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
