<?
$subject_val = "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 29 09:36:57 2013" -->
<!-- isoreceived="20130829133657" -->
<!-- sent="Thu, 29 Aug 2013 15:36:56 +0200" -->
<!-- isosent="20130829133656" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction" -->
<!-- id="CALT_uBQjnmWSk77ZdVe7zuQW+e6XZR5Wba+aGStwEnE3uROapw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20130829082007.GC5422_at_type.youpi.perso.aquilenet.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction<br>
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-29 09:36:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3852.php">Brice Goglin: "Re: [hwloc-devel] lstopo - please add the information about the kernel to the graphical output"</a>
<li><strong>Previous message:</strong> <a href="3850.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
<li><strong>In reply to:</strong> <a href="3850.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
Hi Samuel,
<br>
<p>it seems I have done poor job explaining how I'm using hwloc-distrib. Let
<br>
me repair it.
<br>
<p>On 128 core system for example, we do run series of parallel jobs:
<br>
<p>1 job
<br>
2 jobs
<br>
4 jobs
<br>
8 jobs
<br>
12 jobs
<br>
and so on upto 128 jobs.
<br>
<p>Parallel jobs are synchronized via semaphores and we measure the total
<br>
runtime for each serie and watch how linux job scheduler perform. We do run
<br>
jobs using
<br>
* no restrictions at all
<br>
* bound to a CPU via taskset
<br>
* bound to a NUMA node via numactl
<br>
<p>We compare the results again each other and also against different versions
<br>
of Linux kernel. We use hwloc-distrib to distribute the jobs the best
<br>
possible way for the taskset command. The idea is that Linux scheduler
<br>
should distribute the jobs to get the same performance as achieved
<br>
by hwloc-distrib &amp; taskset
<br>
<p>So we run series of hwloc-distrib commands
<br>
<p>hwloc-distrib --single --taskset 1
<br>
hwloc-distrib --single --taskset 2
<br>
hwloc-distrib --single --taskset 4
<br>
hwloc-distrib --single --taskset 8
<br>
<p>&nbsp;and so on. We do always use the full output of hwloc-distrib command to
<br>
start the jobs via taskset.  Right now, on a 8 socket server we are getting
<br>
this output
<br>
<p>hwloc-distrib --single --taskset 1 =&gt; Socket0, core 0
<br>
hwloc-distrib --single --taskset 2 =&gt;Socket0, core 0 &amp; Socket1, core 0
<br>
hwloc-distrib --single --taskset 4 =&gt; Socket0, core 0 &amp; Socket1, core 0 &amp;
<br>
Socket3, core 0, &amp; Socket4, core 0
<br>
hwloc-distrib --single --taskset 8 =&gt; Socket0, core 0 &amp; Socket1, core 0 &amp;
<br>
Socket3, core 0, &amp; Socket4, core 0 &amp; Socket5, core 0 &amp; Socket6, core 0 &amp;
<br>
Socket7, core 0, &amp; Socket8, core 0
<br>
<p>This is not optimal since core#0 is always the one used by OS at most. With
<br>
proposed --reverse option I expect to get this output:
<br>
hwloc-distrib --single --taskset 1 =&gt; Socket7, core 7
<br>
hwloc-distrib --single --taskset 2 =&gt; Socket7, core 7 &amp; Socket6, core 7
<br>
hwloc-distrib --single --taskset 4 =&gt; Socket7, core 7 &amp; Socket6, core 7 &amp;
<br>
Socket5, core 7, &amp; Socket4, core 7
<br>
<p>I do not care about the order in which hwloc-distrib sorts the results. For
<br>
example, the two possible outputs of hwloc-distrib --single --taskset 2
<br>
Socket7, core 7 &amp; Socket6, core 7
<br>
and
<br>
Socket6, core 7 &amp; Socket7, core 7
<br>
<p>are equival for me.
<br>
<p>What do I need is that hwloc-distrib starts from the last Socket and last
<br>
core in that Socket when distributing the jobs. Right now it starts from
<br>
Socket0, core0.
<br>
<p>I have attached the /proc/interrupts for that server. It has 8 sockets,
<br>
each socket has 8 physical cores, 16 PUs with HT. Please see the peaks for
<br>
interrupts for CORE 0, 8, 16, 24, 32, 40, 48,56. It corresponds to CORE#0
<br>
in each Socket. Please be sure to turn off the line wrapping when
<br>
inspecting that file.
<br>
<p>Hopefully you got the point. Please let me know if you have questions.
<br>
<p>What do think about this? Does it make sense to you?
<br>
<p>Thanks!
<br>
Jirka
<br>
<p><p><p>On Thu, Aug 29, 2013 at 10:20 AM, Samuel Thibault
<br>
&lt;samuel.thibault_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Brice Goglin, le Thu 29 Aug 2013 09:58:17 +0200, a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Anyway, reversing the loop just move the core you don't want to the end
</span><br>
<span class="quotelev1">&gt; of the
</span><br>
<span class="quotelev2">&gt; &gt; list. But if you use the entire list, you end up using the exact same
</span><br>
<span class="quotelev1">&gt; cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; He wants that, yes.
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
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3851/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3851/interrupts.bz2">interrupts.bz2</a>
</ul>
<!-- attachment="interrupts.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3852.php">Brice Goglin: "Re: [hwloc-devel] lstopo - please add the information about the kernel to the graphical output"</a>
<li><strong>Previous message:</strong> <a href="3850.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
<li><strong>In reply to:</strong> <a href="3850.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
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
