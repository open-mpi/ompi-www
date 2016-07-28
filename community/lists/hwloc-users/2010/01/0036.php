<?
$subject_val = "Re: [hwloc-users] Istopo question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 14:09:59 2010" -->
<!-- isoreceived="20100128190959" -->
<!-- sent="Thu, 28 Jan 2010 12:09:34 -0700" -->
<!-- isosent="20100128190934" -->
<!-- name="Dan Eaton" -->
<!-- email="daniel.eaton_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Istopo question" -->
<!-- id="AD3E5D661CED404A842D89A45C87D5662970827205_at_axe-post.Acceleware.local" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20100128190444.GJ4799_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Istopo question<br>
<strong>From:</strong> Dan Eaton (<em>daniel.eaton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 14:09:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2010/02/0037.php">Samuel Thibault: "Re: [hwloc-users] New to hwloc."</a>
<li><strong>Previous message:</strong> <a href="0035.php">Samuel Thibault: "Re: [hwloc-users] Istopo question"</a>
<li><strong>In reply to:</strong> <a href="0035.php">Samuel Thibault: "Re: [hwloc-users] Istopo question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Does Linux announce things correctly in /proc/cpuinfo in that case?
</span><br>
Yes.
<br>
<p>I've now also run the two versions (stable + patched nightly release) on a dual-socket AMD Opteron 2216 machine. No surprise, the x86 path doesn't return any cache info :) but gets the hierarchy right.
<br>
<p>The stable version (using the OS path I'm guessing?) does correctly print the hierarchy though.
<br>
<p>Also, consistent with Brice's assertion, libnuma doesn't work at detecting NUMA (it reports none) on either of the NUMA machines I've tested it on (Nehalem, Opteron)... I hadn't tried that before, and just assumed that whenever I got to trying it out it would work out of the box on whatever Linux version that supported it.
<br>
<p>Ahh Linux, when is that ever the case? ;)
<br>
<p>Kind regards,
<br>
Dan
<br>
<p>-----Original Message-----
<br>
From: hwloc-users-bounces_at_[hidden] [mailto:hwloc-users-bounces_at_[hidden]] On Behalf Of Samuel Thibault
<br>
Sent: Thursday, January 28, 2010 12:05 PM
<br>
To: Hardware locality user list
<br>
Subject: Re: [hwloc-users] Istopo question
<br>
<p>Dan Eaton, le Thu 28 Jan 2010 11:57:08 -0700, a &#233;crit :
<br>
<span class="quotelev1">&gt; I see the comment TODO: AMD version in topology-x86.c ... do you have any idea when your module might support that?
</span><br>
<p>When I get the time to parse AMD's documentation :)
<br>
<p><span class="quotelev1">&gt; I've attached the debug output of lstopo with HT enabled (looks good!).
</span><br>
<p>Good :)
<br>
<p>Does Linux announce things correctly in /proc/cpuinfo in that case?
<br>
<p>Samuel
<br>
_______________________________________________
<br>
hwloc-users mailing list
<br>
hwloc-users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2010/02/0037.php">Samuel Thibault: "Re: [hwloc-users] New to hwloc."</a>
<li><strong>Previous message:</strong> <a href="0035.php">Samuel Thibault: "Re: [hwloc-users] Istopo question"</a>
<li><strong>In reply to:</strong> <a href="0035.php">Samuel Thibault: "Re: [hwloc-users] Istopo question"</a>
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
