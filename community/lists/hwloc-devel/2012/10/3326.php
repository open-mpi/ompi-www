<?
$subject_val = "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 11 12:13:28 2012" -->
<!-- isoreceived="20121011161328" -->
<!-- sent="Thu, 11 Oct 2012 18:13:22 +0200" -->
<!-- isosent="20121011161322" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware" -->
<!-- id="5076F022.7090706_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAN=597Q9vP4oRoLyBEW-=6jPHts7W49tJhUFOSmtJG6sgXfi7A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-11 12:13:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3327.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>Previous message:</strong> <a href="3325.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5.1rc1r4888)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3327.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>Reply:</strong> <a href="3327.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>Reply:</strong> <a href="3328.php">Sebastian Kuzminsky: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(forwarding your mail to the list, and replying)
<br>
<p>Good to know that it works, thanks for testing. I released 1.5.1rc1
<br>
today, it should work fine as well.
<br>
<p>You say that the cpuset does not contain 0-9 by default on this
<br>
hardware. This is something specific to your installation, I guess?
<br>
Nothing that happens by default on a default FreeBSD install, right?
<br>
<p>Is the cpuset-modification a root-only operation on FreeBSD? If so
<br>
lstopo wouldn't be able to expand the cpuset at startup.
<br>
<p>lstopo has a --whole-system option to ignore such limitations.
<br>
Unfortunately the x86 backend that hwloc uses on FreeBSD requires that
<br>
we bind to each individual core to get its locality information, so that
<br>
won't help unless lstopo can indeed remove the cpuset first.
<br>
<p>Brice
<br>
<p><p><p>-------- Message original --------
<br>
Sujet: 	Re: [hwloc-users] hwloc 1.5, freebsd and linux output on the
<br>
same hardware
<br>
Date : 	Thu, 11 Oct 2012 10:02:55 -0600
<br>
De : 	Sebastian Kuzminsky &lt;seb_at_[hidden]&gt;
<br>
Pour : 	Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
<br>
<p><p><p>Ok, it's our fault, sort of.
<br>
<p>We use cpusets, and by default on this hardware CPUs 0-9 are denied to
<br>
most processes (including lstopo).  If I explicitly change the cpuset of
<br>
lstopo to include CPUs 0-9, it runs correctly.
<br>
<p>Maybe lstopo should expand its cpuset to be fully inclusive at startup?
<br>
&nbsp;I'll be happy to test patches if you want.
<br>
<p><p><p><p>On Thu, Oct 11, 2012 at 9:27 AM, Sebastian Kuzminsky
<br>
&lt;seb_at_[hidden] &lt;mailto:seb_at_[hidden]&gt;&gt; wrote:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;On Thu, Oct 11, 2012 at 2:39 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Le 06/10/2012 01:03, Sebastian Kuzminsky a &#233;crit :
<br>
<span class="quotelev1">        &gt; Hm.  It may be that we're doing something funny and reserving
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;those
<br>
<span class="quotelev1">        &gt; CPUs.  I'll run some tests on Monday and get back to you.
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(replying outside of the hwloc mailing list)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Did you have a chance to look at this?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am about to release a hwloc 1.5.1rc1. It'd be good to get your
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;feedback before we do the final 1.5.1 (likely next week).
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;Oops, thanks for the reminder...  I got side tracked on other stuff,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;but I have some time this morning to devote to this. I'll get back
<br>
&nbsp;&nbsp;&nbsp;&nbsp;to you soon.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;-- 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Sebastian Kuzminsky
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Sr Software Engineer, Linerate Systems
<br>
<p><p><p><p><pre>
-- 
Sebastian Kuzminsky
Sr Software Engineer, Linerate Systems
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3326/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3327.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>Previous message:</strong> <a href="3325.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5.1rc1r4888)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3327.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>Reply:</strong> <a href="3327.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>Reply:</strong> <a href="3328.php">Sebastian Kuzminsky: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
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
