<?
$subject_val = "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  7 08:02:15 2012" -->
<!-- isoreceived="20120907120215" -->
<!-- sent="Fri, 7 Sep 2012 08:02:10 -0400" -->
<!-- isosent="20120907120210" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] some mpi processes &amp;quot;disappear&amp;quot; on a cluster of servers" -->
<!-- id="09709488-9458-432C-8971-1090942552E0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="35DCAFC1-7244-447B-B066-2FCA220D7D7C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-07 08:02:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20152.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Previous message:</strong> <a href="20150.php">Jeff Squyres: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>In reply to:</strong> <a href="20150.php">Jeff Squyres: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20155.php">Gus Correa: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Reply:</strong> <a href="20155.php">Gus Correa: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 7, 2012, at 5:58 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Also look for hardware errors.  Perhaps you have some bad RAM somewhere.  Is it always the same node that crashes?  And so on.
</span><br>
<p><p>Another thought on hardware errors... I actually have seen bad RAM cause spontaneous reboots with no Linux warnings.
<br>
<p>Do you have any hardware diagnostics from your server vendor that you can run?
<br>
<p>A simple way to test your RAM (it's not completely comprehensive, but it does check for a surprisingly wide array of memory issues) is to do something like this (pseudocode):
<br>
<p>-----
<br>
size_t i, size, increment;
<br>
increment = 1GB;
<br>
size = 1GB;
<br>
int *ptr;
<br>
<p>// Find the biggest amount of memory that you can malloc
<br>
while (increment &gt;= 1024) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ptr = malloc(size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != ptr) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(ptr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size += increment;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size -= increment;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;increment /= 2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
printf(&quot;I can malloc %lu bytes\n&quot;, size);
<br>
<p>// Malloc that huge chunk of memory
<br>
ptr = malloc(size);
<br>
for (i = 0; i &lt; size / sizeof(int); ++i, ++ptr) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;*ptr = 37;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (*ptr != 37) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Readback error!\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
<p>printf(&quot;All done\n&quot;);
<br>
-----
<br>
<p>Depending on how much memory you have, that might take a little while to run (all the memory has to be paged in, etc.).  You might want to add a status output to show progress, and/or write/read a page at a time for better efficiency, etc.  But you get the idea.
<br>
<p>Hope that helps.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20152.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Previous message:</strong> <a href="20150.php">Jeff Squyres: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>In reply to:</strong> <a href="20150.php">Jeff Squyres: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20155.php">Gus Correa: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Reply:</strong> <a href="20155.php">Gus Correa: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
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
