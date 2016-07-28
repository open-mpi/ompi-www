<?
$subject_val = "Re: [hwloc-devel] lstopo --top";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 21 07:57:24 2013" -->
<!-- isoreceived="20130621115724" -->
<!-- sent="Fri, 21 Jun 2013 13:57:15 +0200" -->
<!-- isosent="20130621115715" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] lstopo --top" -->
<!-- id="51C43F9B.2010902_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CALT_uBQ+ArfnMQGeQAkpY7x7RTyVQ9a9GYTwgvNT4OQsBtj3Nw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] lstopo --top<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-21 07:57:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3819.php">Samuel Thibault: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>Previous message:</strong> <a href="3817.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5.3rc1r5697)"</a>
<li><strong>In reply to:</strong> <a href="3812.php">Jiri Hladky: "Re: [hwloc-devel] lstopo --top"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3819.php">Samuel Thibault: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>Reply:</strong> <a href="3819.php">Samuel Thibault: "Re: [hwloc-devel] lstopo --top"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think there's currently any way to do that. Coloring Misc
<br>
objects with user-given colors shouldn't be hard to do, assuming we have
<br>
a real need to put that feature in the official hwloc?
<br>
<p>Brice
<br>
<p><p>Le 20/06/2013 21:33, Jiri Hladky a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 18, 2013 at 5:32 PM, Samuel Thibault
</span><br>
<span class="quotelev1">&gt; &lt;samuel.thibault_at_[hidden] &lt;mailto:samuel.thibault_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Jiri Hladky, le Tue 18 Jun 2013 17:18:15 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;     &gt; I would like to check the possibilities to visualize the results
</span><br>
<span class="quotelev1">&gt;     to the output
</span><br>
<span class="quotelev2">&gt;     &gt; similar to lstopo --top (see the attachment). I would like to
</span><br>
<span class="quotelev1">&gt;     write a simple
</span><br>
<span class="quotelev2">&gt;     &gt; utility which will
</span><br>
<span class="quotelev2">&gt;     &gt;  * parse the above file
</span><br>
<span class="quotelev2">&gt;     &gt;  * foreach timestep create an output similar to lstopo --top
</span><br>
<span class="quotelev1">&gt;     output showing,
</span><br>
<span class="quotelev2">&gt;     &gt; where each job was running
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     It should be easy to do: create a program which
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     - detects the topology as usual
</span><br>
<span class="quotelev1">&gt;     - for each of these lines:
</span><br>
<span class="quotelev1">&gt;     PID #CPU #CPU #CPU #CPU
</span><br>
<span class="quotelev1">&gt;     PID #CPU #CPU #CPU
</span><br>
<span class="quotelev1">&gt;     call hwloc_topology_insert_misc_object_by_cpuset(topology, cpuset,
</span><br>
<span class="quotelev1">&gt;     PID)
</span><br>
<span class="quotelev1">&gt;     - export the topology as xml file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     and then for each job output, run it and run lstopo on the
</span><br>
<span class="quotelev1">&gt;     generated xml
</span><br>
<span class="quotelev1">&gt;     file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Samuel
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt;     hwloc-devel_at_[hidden] &lt;mailto:hwloc-devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Samuel,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks for the advice, I got it working! :-) It's a little bit
</span><br>
<span class="quotelev1">&gt; overhead with a XML file but the C program is really short and easy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now comes a hard question - can the background color of the created
</span><br>
<span class="quotelev1">&gt; box in lstopo output be easily changed? The idea is to have time axes
</span><br>
<span class="quotelev1">&gt; color coded. So for the format
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PID #CPU #CPU #CPU #CPU
</span><br>
<span class="quotelev1">&gt; PID #CPU #CPU #CPU
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For time=1 use color red
</span><br>
<span class="quotelev1">&gt; For time=2 use color blue
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and so on. The idea is to display the file above in one PNG picture so
</span><br>
<span class="quotelev1">&gt; that you can easily see if more jobs were running on the same CPU
</span><br>
<span class="quotelev1">&gt; simultaneously.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Jirka
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3818/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3819.php">Samuel Thibault: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>Previous message:</strong> <a href="3817.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5.3rc1r5697)"</a>
<li><strong>In reply to:</strong> <a href="3812.php">Jiri Hladky: "Re: [hwloc-devel] lstopo --top"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3819.php">Samuel Thibault: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>Reply:</strong> <a href="3819.php">Samuel Thibault: "Re: [hwloc-devel] lstopo --top"</a>
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
