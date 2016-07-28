<?
$subject_val = "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 11 12:33:35 2012" -->
<!-- isoreceived="20121011163335" -->
<!-- sent="Thu, 11 Oct 2012 10:33:31 -0600" -->
<!-- isosent="20121011163331" -->
<!-- name="Sebastian Kuzminsky" -->
<!-- email="seb_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware" -->
<!-- id="CAN=597SGYWveO-yaBf_+hOmgGXWOmZRStNd9RQ=VSNy2fvrXkg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5076F022.7090706_at_inria.fr" -->
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
<strong>From:</strong> Sebastian Kuzminsky (<em>seb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-11 12:33:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3329.php">Sebastian Kuzminsky: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>Previous message:</strong> <a href="3327.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>In reply to:</strong> <a href="3326.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3329.php">Sebastian Kuzminsky: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>Reply:</strong> <a href="3329.php">Sebastian Kuzminsky: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The modification of the default cpuset (to exclude CPUs 0-9) is done by our
<br>
local installation.  I assume the vanilla FreeBSD 7.3 that we're based on
<br>
does not monkey with the default cpuset.
<br>
<p>I believe modifying your own cpuset is not a privileged operation in
<br>
FreeBSD.  The cpuset executable is not setuid root and is usable by regular
<br>
users.
<br>
<p>I think you can move the lstopo process to cpuset 0 (which includes all
<br>
CPUs) by calling cpuset_setid(), and that should take care of the issue.
<br>
<p><p>On Thu, Oct 11, 2012 at 10:13 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;  (forwarding your mail to the list, and replying)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good to know that it works, thanks for testing. I released 1.5.1rc1 today,
</span><br>
<span class="quotelev1">&gt; it should work fine as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You say that the cpuset does not contain 0-9 by default on this hardware.
</span><br>
<span class="quotelev1">&gt; This is something specific to your installation, I guess? Nothing that
</span><br>
<span class="quotelev1">&gt; happens by default on a default FreeBSD install, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the cpuset-modification a root-only operation on FreeBSD? If so lstopo
</span><br>
<span class="quotelev1">&gt; wouldn't be able to expand the cpuset at startup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lstopo has a --whole-system option to ignore such limitations.
</span><br>
<span class="quotelev1">&gt; Unfortunately the x86 backend that hwloc uses on FreeBSD requires that we
</span><br>
<span class="quotelev1">&gt; bind to each individual core to get its locality information, so that won't
</span><br>
<span class="quotelev1">&gt; help unless lstopo can indeed remove the cpuset first.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------- Message original --------  Sujet: Re: [hwloc-users] hwloc 1.5,
</span><br>
<span class="quotelev1">&gt; freebsd and linux output on the same hardware  Date : Thu, 11 Oct 2012
</span><br>
<span class="quotelev1">&gt; 10:02:55 -0600  De : Sebastian Kuzminsky &lt;seb_at_[hidden]&gt;&lt;seb_at_[hidden]&gt;  Pour :
</span><br>
<span class="quotelev1">&gt; Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, it's our fault, sort of.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  We use cpusets, and by default on this hardware CPUs 0-9 are denied to
</span><br>
<span class="quotelev1">&gt; most processes (including lstopo).  If I explicitly change the cpuset of
</span><br>
<span class="quotelev1">&gt; lstopo to include CPUs 0-9, it runs correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Maybe lstopo should expand its cpuset to be fully inclusive at startup?
</span><br>
<span class="quotelev1">&gt;  I'll be happy to test patches if you want.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Oct 11, 2012 at 9:27 AM, Sebastian Kuzminsky &lt;
</span><br>
<span class="quotelev1">&gt; seb_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   On Thu, Oct 11, 2012 at 2:39 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 06/10/2012 01:03, Sebastian Kuzminsky a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hm.  It may be that we're doing something funny and reserving those
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; CPUs.  I'll run some tests on Monday and get back to you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  (replying outside of the hwloc mailing list)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did you have a chance to look at this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am about to release a hwloc 1.5.1rc1. It'd be good to get your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; feedback before we do the final 1.5.1 (likely next week).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Oops, thanks for the reminder...  I got side tracked on other stuff,
</span><br>
<span class="quotelev2">&gt;&gt; but I have some time this morning to devote to this. I'll get back to you
</span><br>
<span class="quotelev2">&gt;&gt; soon.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  --
</span><br>
<span class="quotelev2">&gt;&gt; Sebastian Kuzminsky
</span><br>
<span class="quotelev2">&gt;&gt; Sr Software Engineer, Linerate Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt; Sebastian Kuzminsky
</span><br>
<span class="quotelev1">&gt; Sr Software Engineer, Linerate Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Sebastian Kuzminsky
Sr Software Engineer, Linerate Systems
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3328/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3329.php">Sebastian Kuzminsky: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>Previous message:</strong> <a href="3327.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>In reply to:</strong> <a href="3326.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3329.php">Sebastian Kuzminsky: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>Reply:</strong> <a href="3329.php">Sebastian Kuzminsky: "Re: [hwloc-devel] [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
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
