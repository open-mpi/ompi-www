<?
$subject_val = "Re: [hwloc-devel] lstopo --top";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 20 15:33:32 2013" -->
<!-- isoreceived="20130620193332" -->
<!-- sent="Thu, 20 Jun 2013 21:33:23 +0200" -->
<!-- isosent="20130620193323" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] lstopo --top" -->
<!-- id="CALT_uBQ+ArfnMQGeQAkpY7x7RTyVQ9a9GYTwgvNT4OQsBtj3Nw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20130618153248.GE7095_at_type.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2013-06-20 15:33:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3813.php">Jiri Hladky: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>Previous message:</strong> <a href="3811.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7.2rc1r5685)"</a>
<li><strong>In reply to:</strong> <a href="3808.php">Samuel Thibault: "Re: [hwloc-devel] lstopo --top"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3813.php">Jiri Hladky: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>Reply:</strong> <a href="3813.php">Jiri Hladky: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>Reply:</strong> <a href="3818.php">Brice Goglin: "Re: [hwloc-devel] lstopo --top"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jun 18, 2013 at 5:32 PM, Samuel Thibault
<br>
&lt;samuel.thibault_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jiri Hladky, le Tue 18 Jun 2013 17:18:15 +0200, a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; I would like to check the possibilities to visualize the results to the
</span><br>
<span class="quotelev1">&gt; output
</span><br>
<span class="quotelev2">&gt; &gt; similar to lstopo --top (see the attachment). I would like to write a
</span><br>
<span class="quotelev1">&gt; simple
</span><br>
<span class="quotelev2">&gt; &gt; utility which will
</span><br>
<span class="quotelev2">&gt; &gt;  * parse the above file
</span><br>
<span class="quotelev2">&gt; &gt;  * foreach timestep create an output similar to lstopo --top output
</span><br>
<span class="quotelev1">&gt; showing,
</span><br>
<span class="quotelev2">&gt; &gt; where each job was running
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It should be easy to do: create a program which
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - detects the topology as usual
</span><br>
<span class="quotelev1">&gt; - for each of these lines:
</span><br>
<span class="quotelev1">&gt; PID #CPU #CPU #CPU #CPU
</span><br>
<span class="quotelev1">&gt; PID #CPU #CPU #CPU
</span><br>
<span class="quotelev1">&gt; call hwloc_topology_insert_misc_object_by_cpuset(topology, cpuset, PID)
</span><br>
<span class="quotelev1">&gt; - export the topology as xml file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and then for each job output, run it and run lstopo on the generated xml
</span><br>
<span class="quotelev1">&gt; file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hi Samuel,
<br>
<p>thanks for the advice, I got it working! :-) It's a little bit overhead
<br>
with a XML file but the C program is really short and easy.
<br>
<p>Now comes a hard question - can the background color of the created box in
<br>
lstopo output be easily changed? The idea is to have time axes color coded.
<br>
So for the format
<br>
<p>PID #CPU #CPU #CPU #CPU
<br>
PID #CPU #CPU #CPU
<br>
<p>For time=1 use color red
<br>
For time=2 use color blue
<br>
<p>and so on. The idea is to display the file above in one PNG picture so that
<br>
you can easily see if more jobs were running on the same CPU simultaneously.
<br>
<p>Thanks
<br>
Jirka
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3812/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3813.php">Jiri Hladky: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>Previous message:</strong> <a href="3811.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7.2rc1r5685)"</a>
<li><strong>In reply to:</strong> <a href="3808.php">Samuel Thibault: "Re: [hwloc-devel] lstopo --top"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3813.php">Jiri Hladky: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>Reply:</strong> <a href="3813.php">Jiri Hladky: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>Reply:</strong> <a href="3818.php">Brice Goglin: "Re: [hwloc-devel] lstopo --top"</a>
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
