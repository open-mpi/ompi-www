<?
$subject_val = "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 11:30:32 2010" -->
<!-- isoreceived="20100128163032" -->
<!-- sent="Thu, 28 Jan 2010 09:30:06 -0700" -->
<!-- isosent="20100128163006" -->
<!-- name="Dan Eaton" -->
<!-- email="daniel.eaton_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8" -->
<!-- id="AD3E5D661CED404A842D89A45C87D56629708271C0_at_axe-post.Acceleware.local" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20100128162045.GL4873_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8<br>
<strong>From:</strong> Dan Eaton (<em>daniel.eaton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 11:30:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0012.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Previous message:</strong> <a href="0010.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>In reply to:</strong> <a href="0010.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0012.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Reply:</strong> <a href="0012.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Reply:</strong> <a href="0013.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Samuel,
<br>
<p>Thank you for your quick reply.
<br>
<p>I've inlined /proc/cpuinfo at the end of this message. 
<br>
<p>Yes, the cache path you indicated doesn't exist! Is there any reliable alternate way to retrieve cache information (without CPUID) for those older kernels (/proc/cpuinfo only appears to report L3 cache)?
<br>
<p>Kind regards,
<br>
<p>Dan
<br>
<p>processor	: 0
<br>
vendor_id	: GenuineIntel
<br>
cpu family	: 6
<br>
model		: 26
<br>
model name	: Intel(R) Xeon(R) CPU           X5550  @ 2.67GHz
<br>
stepping	: 5
<br>
cpu MHz		: 1596.000
<br>
cache size	: 8192 KB
<br>
physical id	: 16
<br>
siblings	: 1
<br>
core id		: 255
<br>
cpu cores	: 1
<br>
fpu		: yes
<br>
fpu_exception	: yes
<br>
cpuid level	: 11
<br>
wp		: yes
<br>
flags		: fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm syscall nx rdtscp lm pni monitor ds_cpl est tm2 cx16 xtpr popcnt lahf_lm
<br>
bogomips	: 5324.34
<br>
clflush size	: 64
<br>
cache_alignment	: 64
<br>
address sizes	: 40 bits physical, 48 bits virtual
<br>
power management:
<br>
<p>processor	: 1
<br>
vendor_id	: GenuineIntel
<br>
cpu family	: 6
<br>
model		: 26
<br>
model name	: Intel(R) Xeon(R) CPU           X5550  @ 2.67GHz
<br>
stepping	: 5
<br>
cpu MHz		: 1596.000
<br>
cache size	: 8192 KB
<br>
physical id	: 18
<br>
siblings	: 1
<br>
core id		: 255
<br>
cpu cores	: 1
<br>
fpu		: yes
<br>
fpu_exception	: yes
<br>
cpuid level	: 11
<br>
wp		: yes
<br>
flags		: fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm syscall nx rdtscp lm pni monitor ds_cpl est tm2 cx16 xtpr popcnt lahf_lm
<br>
bogomips	: 5319.97
<br>
clflush size	: 64
<br>
cache_alignment	: 64
<br>
address sizes	: 40 bits physical, 48 bits virtual
<br>
power management:
<br>
<p>processor	: 2
<br>
vendor_id	: GenuineIntel
<br>
cpu family	: 6
<br>
model		: 26
<br>
model name	: Intel(R) Xeon(R) CPU           X5550  @ 2.67GHz
<br>
stepping	: 5
<br>
cpu MHz		: 1596.000
<br>
cache size	: 8192 KB
<br>
physical id	: 20
<br>
siblings	: 1
<br>
core id		: 255
<br>
cpu cores	: 1
<br>
fpu		: yes
<br>
fpu_exception	: yes
<br>
cpuid level	: 11
<br>
wp		: yes
<br>
flags		: fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm syscall nx rdtscp lm pni monitor ds_cpl est tm2 cx16 xtpr popcnt lahf_lm
<br>
bogomips	: 5319.95
<br>
clflush size	: 64
<br>
cache_alignment	: 64
<br>
address sizes	: 40 bits physical, 48 bits virtual
<br>
power management:
<br>
<p>processor	: 3
<br>
vendor_id	: GenuineIntel
<br>
cpu family	: 6
<br>
model		: 26
<br>
model name	: Intel(R) Xeon(R) CPU           X5550  @ 2.67GHz
<br>
stepping	: 5
<br>
cpu MHz		: 1596.000
<br>
cache size	: 8192 KB
<br>
physical id	: 22
<br>
siblings	: 1
<br>
core id		: 255
<br>
cpu cores	: 1
<br>
fpu		: yes
<br>
fpu_exception	: yes
<br>
cpuid level	: 11
<br>
wp		: yes
<br>
flags		: fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm syscall nx rdtscp lm pni monitor ds_cpl est tm2 cx16 xtpr popcnt lahf_lm
<br>
bogomips	: 5319.96
<br>
clflush size	: 64
<br>
cache_alignment	: 64
<br>
address sizes	: 40 bits physical, 48 bits virtual
<br>
power management:
<br>
<p>processor	: 4
<br>
vendor_id	: GenuineIntel
<br>
cpu family	: 6
<br>
model		: 26
<br>
model name	: Intel(R) Xeon(R) CPU           X5550  @ 2.67GHz
<br>
stepping	: 5
<br>
cpu MHz		: 1596.000
<br>
cache size	: 8192 KB
<br>
physical id	: 0
<br>
siblings	: 1
<br>
core id		: 255
<br>
cpu cores	: 1
<br>
fpu		: yes
<br>
fpu_exception	: yes
<br>
cpuid level	: 11
<br>
wp		: yes
<br>
flags		: fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm syscall nx rdtscp lm pni monitor ds_cpl est tm2 cx16 xtpr popcnt lahf_lm
<br>
bogomips	: 5320.00
<br>
clflush size	: 64
<br>
cache_alignment	: 64
<br>
address sizes	: 40 bits physical, 48 bits virtual
<br>
power management:
<br>
<p>processor	: 5
<br>
vendor_id	: GenuineIntel
<br>
cpu family	: 6
<br>
model		: 26
<br>
model name	: Intel(R) Xeon(R) CPU           X5550  @ 2.67GHz
<br>
stepping	: 5
<br>
cpu MHz		: 1596.000
<br>
cache size	: 8192 KB
<br>
physical id	: 2
<br>
siblings	: 1
<br>
core id		: 255
<br>
cpu cores	: 1
<br>
fpu		: yes
<br>
fpu_exception	: yes
<br>
cpuid level	: 11
<br>
wp		: yes
<br>
flags		: fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm syscall nx rdtscp lm pni monitor ds_cpl est tm2 cx16 xtpr popcnt lahf_lm
<br>
bogomips	: 5319.96
<br>
clflush size	: 64
<br>
cache_alignment	: 64
<br>
address sizes	: 40 bits physical, 48 bits virtual
<br>
power management:
<br>
<p>processor	: 6
<br>
vendor_id	: GenuineIntel
<br>
cpu family	: 6
<br>
model		: 26
<br>
model name	: Intel(R) Xeon(R) CPU           X5550  @ 2.67GHz
<br>
stepping	: 5
<br>
cpu MHz		: 1596.000
<br>
cache size	: 8192 KB
<br>
physical id	: 4
<br>
siblings	: 1
<br>
core id		: 255
<br>
cpu cores	: 1
<br>
fpu		: yes
<br>
fpu_exception	: yes
<br>
cpuid level	: 11
<br>
wp		: yes
<br>
flags		: fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm syscall nx rdtscp lm pni monitor ds_cpl est tm2 cx16 xtpr popcnt lahf_lm
<br>
bogomips	: 5319.99
<br>
clflush size	: 64
<br>
cache_alignment	: 64
<br>
address sizes	: 40 bits physical, 48 bits virtual
<br>
power management:
<br>
<p>processor	: 7
<br>
vendor_id	: GenuineIntel
<br>
cpu family	: 6
<br>
model		: 26
<br>
model name	: Intel(R) Xeon(R) CPU           X5550  @ 2.67GHz
<br>
stepping	: 5
<br>
cpu MHz		: 1596.000
<br>
cache size	: 8192 KB
<br>
physical id	: 6
<br>
siblings	: 1
<br>
core id		: 255
<br>
cpu cores	: 1
<br>
fpu		: yes
<br>
fpu_exception	: yes
<br>
cpuid level	: 11
<br>
wp		: yes
<br>
flags		: fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm syscall nx rdtscp lm pni monitor ds_cpl est tm2 cx16 xtpr popcnt lahf_lm
<br>
bogomips	: 5320.23
<br>
clflush size	: 64
<br>
cache_alignment	: 64
<br>
address sizes	: 40 bits physical, 48 bits virtual
<br>
power management:
<br>
<p><p>-----Original Message-----
<br>
From: hwloc-users-bounces_at_[hidden] [mailto:hwloc-users-bounces_at_[hidden]] On Behalf Of Samuel Thibault
<br>
Sent: Thursday, January 28, 2010 9:21 AM
<br>
To: Hardware locality user list
<br>
Subject: Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8
<br>
<p>Dan Eaton, le Thu 28 Jan 2010 08:44:38 -0700, a &#233;crit :
<br>
<span class="quotelev1">&gt; Is this expected behaviour on those Linux versions? I would be surprised if
</span><br>
<span class="quotelev1">&gt; this was the case, because it's possible to fully reconstruct the hiarachy from
</span><br>
<span class="quotelev1">&gt; /proc/cpuinfo alone on them (caches aside).
</span><br>
<p>Could you send us that /proc/cpuinfo so we too can have a look? :)
<br>
<p>About caches, do you have /sys/devices/system/cpu/cpu0/cache
<br>
directories?  IIRC RHEL has old kernels, so I wouldn't be surprised that
<br>
the information isn't available.
<br>
<p>You can as well just use the tests/linux/gather-topology.sh script to
<br>
automatically fetch all the useful files from /proc and /sys
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
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0011/cpuinfo">cpuinfo</a>
</ul>
<!-- attachment="cpuinfo" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0012.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Previous message:</strong> <a href="0010.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>In reply to:</strong> <a href="0010.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0012.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Reply:</strong> <a href="0012.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Reply:</strong> <a href="0013.php">Samuel Thibault: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
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
