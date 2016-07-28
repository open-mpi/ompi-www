<?
$subject_val = "[OMPI users] Help: OpenMPI Compilation in Raspberry Pi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 04:28:16 2013" -->
<!-- isoreceived="20130103092816" -->
<!-- sent="Thu, 3 Jan 2013 17:28:12 +0800" -->
<!-- isosent="20130103092812" -->
<!-- name="Lee Eric" -->
<!-- email="openlinuxsource_at_[hidden]" -->
<!-- subject="[OMPI users] Help: OpenMPI Compilation in Raspberry Pi" -->
<!-- id="CAOJJ1ZoXQmq6y_MnT0fE1kWE-fJzqFpcGSD-OWaQVRS7Xq2LTA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Lee Eric (<em>openlinuxsource_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-03 04:28:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21043.php">Ake Sandgren: "[OMPI users] grpcomm component hier gone..."</a>
<li><strong>Previous message:</strong> <a href="../../2012/12/21041.php">Jed Brown: "Re: [OMPI users] One-sided bugs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21084.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Reply:</strong> <a href="21084.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Maybe reply:</strong> <a href="21140.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am going to compile OpenMPI 1.6.3 in Raspberry Pi and encounter following
<br>
errors.
<br>
<p>make[2]: Entering directory `/root/openmpi-1.6.3/opal'
<br>
&nbsp;&nbsp;CC     class/opal_bitmap.lo
<br>
&nbsp;&nbsp;CC     class/opal_free_list.lo
<br>
&nbsp;&nbsp;CC     class/opal_hash_table.lo
<br>
&nbsp;&nbsp;CC     class/opal_list.lo
<br>
&nbsp;&nbsp;CC     class/opal_object.lo
<br>
/tmp/ccniCtj0.s: Assembler messages:
<br>
/tmp/ccniCtj0.s:83: Error: selected processor does not support ARM mode
<br>
`ldrex r3,[r1]'
<br>
/tmp/ccniCtj0.s:86: Error: selected processor does not support ARM mode
<br>
`strex r4,r0,[r1]'
<br>
make[2]: *** [class/opal_object.lo] Error 1
<br>
make[2]: Leaving directory `/root/openmpi-1.6.3/opal'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/root/openmpi-1.6.3/opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p>Can anyone have any idea to fix that issue?
<br>
<p>I'm using Fedora 17 rootfs and kernel version is &quot;Linux fedora-arm 3.6.11+
<br>
#1 PREEMPT Wed Jan 2 15:14:23 CST 2013 armv6l armv6l armv6l GNU/Linux&quot;.
<br>
<p>Thanks.
<br>
<p>Eric Lee
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-21042/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21043.php">Ake Sandgren: "[OMPI users] grpcomm component hier gone..."</a>
<li><strong>Previous message:</strong> <a href="../../2012/12/21041.php">Jed Brown: "Re: [OMPI users] One-sided bugs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21084.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Reply:</strong> <a href="21084.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Maybe reply:</strong> <a href="21140.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
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
