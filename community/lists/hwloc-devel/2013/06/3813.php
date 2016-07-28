<?
$subject_val = "Re: [hwloc-devel] lstopo --top";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 20 16:07:09 2013" -->
<!-- isoreceived="20130620200709" -->
<!-- sent="Thu, 20 Jun 2013 22:07:04 +0200" -->
<!-- isosent="20130620200704" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] lstopo --top" -->
<!-- id="CALT_uBQPKnAAFjMUGKXA5OcWi8q4T9sOt7e8B_uU0b+bVyaH=A_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-20 16:07:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3814.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5702)"</a>
<li><strong>Previous message:</strong> <a href="3812.php">Jiri Hladky: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>In reply to:</strong> <a href="3812.php">Jiri Hladky: "Re: [hwloc-devel] lstopo --top"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3820.php">Samuel Thibault: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>Reply:</strong> <a href="3820.php">Samuel Thibault: "Re: [hwloc-devel] lstopo --top"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Samuel,
<br>
<p>lstopo has obviously some logic how to sort the data inserted
<br>
by hwloc_topology_insert_misc_object_by_cpuset. Could be data displayed in
<br>
the same order as inserted?
<br>
<p>While parsing
<br>
245 0 0 0 0 0 1 1 3 0 0
<br>
246 1 1 1 1 1 2 2 3 1 1
<br>
<p>I'm trying to display the data in lstopo in format
<br>
time: PID
<br>
<p>However, data are inserted in the different order. See attached png.
<br>
<p>I have called hwloc_topology_insert_misc_object_by_cpuset in this
<br>
chronological order:
<br>
1: 245
<br>
1: 246
<br>
2: 245
<br>
2: 246
<br>
3: 245
<br>
3: 246
<br>
4: 245
<br>
4: 246
<br>
5: 245
<br>
5: 246
<br>
6: 245
<br>
6: 246
<br>
7: 245
<br>
7: 246
<br>
8: 245
<br>
8: 246
<br>
9: 245
<br>
9: 246
<br>
10: 245
<br>
10: 246
<br>
<p>Thanks
<br>
Jirka
<br>
<p>On Thu, Jun 20, 2013 at 9:33 PM, Jiri Hladky &lt;hladky.jiri_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 18, 2013 at 5:32 PM, Samuel Thibault &lt;samuel.thibault_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jiri Hladky, le Tue 18 Jun 2013 17:18:15 +0200, a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I would like to check the possibilities to visualize the results to the
</span><br>
<span class="quotelev2">&gt;&gt; output
</span><br>
<span class="quotelev3">&gt;&gt; &gt; similar to lstopo --top (see the attachment). I would like to write a
</span><br>
<span class="quotelev2">&gt;&gt; simple
</span><br>
<span class="quotelev3">&gt;&gt; &gt; utility which will
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  * parse the above file
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  * foreach timestep create an output similar to lstopo --top output
</span><br>
<span class="quotelev2">&gt;&gt; showing,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; where each job was running
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It should be easy to do: create a program which
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - detects the topology as usual
</span><br>
<span class="quotelev2">&gt;&gt; - for each of these lines:
</span><br>
<span class="quotelev2">&gt;&gt; PID #CPU #CPU #CPU #CPU
</span><br>
<span class="quotelev2">&gt;&gt; PID #CPU #CPU #CPU
</span><br>
<span class="quotelev2">&gt;&gt; call hwloc_topology_insert_misc_object_by_cpuset(topology, cpuset, PID)
</span><br>
<span class="quotelev2">&gt;&gt; - export the topology as xml file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and then for each job output, run it and run lstopo on the generated xml
</span><br>
<span class="quotelev2">&gt;&gt; file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Samuel
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Samuel,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks for the advice, I got it working! :-) It's a little bit overhead
</span><br>
<span class="quotelev1">&gt; with a XML file but the C program is really short and easy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now comes a hard question - can the background color of the created box in
</span><br>
<span class="quotelev1">&gt; lstopo output be easily changed? The idea is to have time axes color coded.
</span><br>
<span class="quotelev1">&gt; So for the format
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
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3813/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/hwloc-devel/att-3813/a.png" alt="a.png">
<!-- attachment="a.png" -->
<hr>
<ul>
<li>text/xml attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3813/a.xml">a.xml</a>
</ul>
<!-- attachment="a.xml" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3814.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5702)"</a>
<li><strong>Previous message:</strong> <a href="3812.php">Jiri Hladky: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>In reply to:</strong> <a href="3812.php">Jiri Hladky: "Re: [hwloc-devel] lstopo --top"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3820.php">Samuel Thibault: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>Reply:</strong> <a href="3820.php">Samuel Thibault: "Re: [hwloc-devel] lstopo --top"</a>
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
