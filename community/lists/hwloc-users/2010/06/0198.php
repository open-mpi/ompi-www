<?
$subject_val = "[hwloc-users] hwloc is failing for Pentium D";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 21 17:40:22 2010" -->
<!-- isoreceived="20100621214022" -->
<!-- sent="Mon, 21 Jun 2010 23:40:14 +0200" -->
<!-- isosent="20100621214014" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="[hwloc-users] hwloc is failing for Pentium D" -->
<!-- id="201006212340.14989.jhladky_at_redhat.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [hwloc-users] hwloc is failing for Pentium D<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-21 17:40:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0199.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-devel]  hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="0197.php">Jirka Hladky: "[hwloc-users] hwloc will be soon available as package in Fedora"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0202.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-devel] hwloc is failing for Pentium D"</a>
<li><strong>Reply:</strong> <a href="0202.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-devel] hwloc is failing for Pentium D"</a>
<li><strong>Reply:</strong> <a href="0203.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-devel] hwloc is failing for Pentium D"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys,
<br>
<p>I have been always impressed how well hwloc works. Now it seems like I have 
<br>
found a bug on Pentium D, but it might be bug in linux kernel as well.
<br>
<p><a href="http://en.wikipedia.org/wiki/List_of_Intel_Pentium_D_microprocessors">http://en.wikipedia.org/wiki/List_of_Intel_Pentium_D_microprocessors</a>
<br>
<p>I have reproduced the bug on
<br>
Pentium D 820 (at Dell's PowerEdge SC430)
<br>
Pentium D 840 (at Dell's PowerEdge SC430)
<br>
<p>It's dual core CPU with 2x1MB L2 cache. hwloc reports correct result only on 
<br>
RHEL6.0 (public beta2) with kernel 2.6.32.
<br>
<p>hwloc fails to report correct results on RHEL 5.5 (kernel 2.6.18) and RHEL 4.8 
<br>
(kernel 2.6.9). Please see attached pdf files.
<br>
<p>I have attached /proc/cpuinfo files as well. It might be a kernel bug as well 
<br>
since 
<br>
<p>===================================================
<br>
physical id	: 0
<br>
siblings	: 2
<br>
core id		: 0
<br>
cpu cores	: 2
<br>
apicid		: 0
<br>
initial apicid	: 0
<br>
===================================================
<br>
<p>is missing in /proc/cpuinfo on RHEL4.8 and RHEL5.5 for one the two CPUs.
<br>
<p>I would welcome any feedback on this. Please let me know if you need more 
<br>
information.
<br>
<p>Thanks a lot!
<br>
Jirka
<br>
<p><p><p><p>





<br><hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0198/2.6.9-89.ELsmp_dell-pesc430-03.rhts.eng.bos.redhat.com.pdf">2.6.9-89.ELsmp_dell-pesc430-03.rhts.eng.bos.redhat.com.pdf</a>
</ul>
<!-- attachment="2.6.9-89.ELsmp_dell-pesc430-03.rhts.eng.bos.redhat.com.pdf" -->
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0198/2.6.18-194.el5_dell-pesc430-03.rhts.eng.bos.redhat.com.pdf">2.6.18-194.el5_dell-pesc430-03.rhts.eng.bos.redhat.com.pdf</a>
</ul>
<!-- attachment="2.6.18-194.el5_dell-pesc430-03.rhts.eng.bos.redhat.com.pdf" -->
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0198/2.6.32-22.el6.x86_64_dell-pesc430-03.rhts.eng.bos.redhat.com.pdf">2.6.32-22.el6.x86_64_dell-pesc430-03.rhts.eng.bos.redhat.com.pdf</a>
</ul>
<!-- attachment="2.6.32-22.el6.x86_64_dell-pesc430-03.rhts.eng.bos.redhat.com.pdf" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0198/2.6.9-89.ELsmp_x86_64_dell-pesc430-03.rhts.eng.bos.redhat.com.cpu.info">2.6.9-89.ELsmp_x86_64_dell-pesc430-03.rhts.eng.bos.redhat.com.cpu.info</a>
</ul>
<!-- attachment="2.6.9-89.ELsmp_x86_64_dell-pesc430-03.rhts.eng.bos.redhat.com.cpu.info" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0198/2.6.18-194.el5_x86_64_dell-pesc430-03.rhts.eng.bos.redhat.com.cpu.info">2.6.18-194.el5_x86_64_dell-pesc430-03.rhts.eng.bos.redhat.com.cpu.info</a>
</ul>
<!-- attachment="2.6.18-194.el5_x86_64_dell-pesc430-03.rhts.eng.bos.redhat.com.cpu.info" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0198/2.6.32-22.el6.x86_64_dell-pesc430-03.rhts.eng.bos.redhat.com.cpu.info">2.6.32-22.el6.x86_64_dell-pesc430-03.rhts.eng.bos.redhat.com.cpu.info</a>
</ul>
<!-- attachment="2.6.32-22.el6.x86_64_dell-pesc430-03.rhts.eng.bos.redhat.com.cpu.info" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0199.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-devel]  hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="0197.php">Jirka Hladky: "[hwloc-users] hwloc will be soon available as package in Fedora"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0202.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-devel] hwloc is failing for Pentium D"</a>
<li><strong>Reply:</strong> <a href="0202.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-devel] hwloc is failing for Pentium D"</a>
<li><strong>Reply:</strong> <a href="0203.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-devel] hwloc is failing for Pentium D"</a>
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
