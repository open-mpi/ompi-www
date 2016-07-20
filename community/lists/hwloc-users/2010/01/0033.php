<?
$subject_val = "Re: [hwloc-users] Istopo question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 13:57:34 2010" -->
<!-- isoreceived="20100128185734" -->
<!-- sent="Thu, 28 Jan 2010 11:57:08 -0700" -->
<!-- isosent="20100128185708" -->
<!-- name="Dan Eaton" -->
<!-- email="daniel.eaton_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Istopo question" -->
<!-- id="AD3E5D661CED404A842D89A45C87D5662970827202_at_axe-post.Acceleware.local" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20100128184725.GF4799_at_const.famille.thibault.fr" -->
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
<strong>Date:</strong> 2010-01-28 13:57:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0034.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Previous message:</strong> <a href="0032.php">Dan Eaton: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>In reply to:</strong> <a href="0031.php">Samuel Thibault: "Re: [hwloc-users] Istopo question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0035.php">Samuel Thibault: "Re: [hwloc-users] Istopo question"</a>
<li><strong>Reply:</strong> <a href="0035.php">Samuel Thibault: "Re: [hwloc-users] Istopo question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel,
<br>
I see the comment TODO: AMD version in topology-x86.c ... do you have any idea when your module might support that?
<br>
<p>I've attached the debug output of lstopo with HT enabled (looks good!).
<br>
Thanks,
<br>
Danny
<br>
<p>-----Original Message-----
<br>
From: hwloc-users-bounces_at_[hidden] [mailto:hwloc-users-bounces_at_[hidden]] On Behalf Of Samuel Thibault
<br>
Sent: Thursday, January 28, 2010 11:47 AM
<br>
To: Hardware locality user list
<br>
Subject: Re: [hwloc-users] Istopo question
<br>
<p>Norman Lo, le Thu 28 Jan 2010 13:39:47 -0500, a &#233;crit :
<br>
<span class="quotelev1">&gt; Sorry for the confusion but lstopo gives a long output.
</span><br>
<p>Ah, maybe you are using a checkout from the trunk, which has all the
<br>
debugging options enabled by default, which happen to include the
<br>
physical information. Use ./configure --disable-debug to get the proper
<br>
lstopo output without debugging.
<br>
<p><span class="quotelev1">&gt; I am actually using hwloc library topology tree. Is there a way to 
</span><br>
<span class="quotelev1">&gt; display the logical number instead of the physical number from the obj ?
</span><br>
<p>That is already the default.
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
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0033/lstopo_ht.out">lstopo_ht.out</a>
</ul>
<!-- attachment="lstopo_ht.out" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0034.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Previous message:</strong> <a href="0032.php">Dan Eaton: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>In reply to:</strong> <a href="0031.php">Samuel Thibault: "Re: [hwloc-users] Istopo question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0035.php">Samuel Thibault: "Re: [hwloc-users] Istopo question"</a>
<li><strong>Reply:</strong> <a href="0035.php">Samuel Thibault: "Re: [hwloc-users] Istopo question"</a>
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
