<?
$subject_val = "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 25 02:43:52 2012" -->
<!-- isoreceived="20120325064352" -->
<!-- sent="Sun, 25 Mar 2012 08:43:42 +0200" -->
<!-- isosent="20120325064342" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Fwd: BGQ empty topology with MPI" -->
<!-- id="4F6EBE9E.7000803_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CADcFuab==3qB=grs_584aoaM-90Hh78xgG_T3e8LevyP+nCx7A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Fwd: BGQ empty topology with MPI<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-25 02:43:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2991.php">Christopher Samuel: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Previous message:</strong> <a href="2989.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.2a1r4421)"</a>
<li><strong>In reply to:</strong> <a href="2988.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2992.php">Christopher Samuel: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Reply:</strong> <a href="2992.php">Christopher Samuel: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Reply:</strong> <a href="2999.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 24/03/2012 23:04, Daniel Ibanez a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; The fundamental difference is in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; src/topology-linux.c:3251
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when this if statement is true, hwloc_setup_pu_level
</span><br>
<span class="quotelev1">&gt; finds the PU objects.
</span><br>
<span class="quotelev1">&gt; When it is false, it fails with empty topology.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I checked HWLOC_LINUX_USE_CPUINFO,
</span><br>
<span class="quotelev1">&gt; and it is not detected even when I set it from the front end.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That means the difference is whether hwloc can access
</span><br>
<span class="quotelev1">&gt; the various /sys/devices and /sys/bus files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additional printfs confirm that with MPI in the code,
</span><br>
<span class="quotelev1">&gt; hwloc_accessat succeeds on the various /sys/ directories,
</span><br>
<span class="quotelev1">&gt; but the overall procedure for getting PUs from these fails.
</span><br>
<span class="quotelev1">&gt; Without MPI, access to /sys/ directories fails but
</span><br>
<span class="quotelev1">&gt; the fallback hwloc_setup_pu_level works.
</span><br>
<p>If I understand correctly, in the MPI case, look_sysfscpu() ends up
<br>
being called. There are two instances of it because of a possible
<br>
renaming of /sys/devices/system/cpu in the future, so it's expected that
<br>
the one succeeds and the other fails. Can you check whether both fail ?
<br>
Or just try the attached patch which adds a fallback for this case.
<br>
<p>But it'd be good to understand what's going on in /sys on this machine.
<br>
And I still don't understand why MPI changes things here.
<br>
<p>Brice
<br>
<p>--- src/topology-linux.c	(r&#195;&#169;vision 4420)
<br>
+++ src/topology-linux.c	(copie de travail)
<br>
@@ -3270,7 +3270,15 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (numprocs &lt;= 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lprocs = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (look_sysfscpu(topology, &quot;/sys/bus/cpu/devices&quot;, Lprocs, numprocs) &lt; 0)
<br>
-        look_sysfscpu(topology, &quot;/sys/devices/system/cpu&quot;, Lprocs, numprocs);
<br>
+        if (look_sysfscpu(topology, &quot;/sys/devices/system/cpu&quot;, Lprocs, numprocs) &lt; 0) {
<br>
+	  /* sysfs but we failed to read cpu topology, fallback */
<br>
+          if (topology-&gt;is_thissystem)
<br>
+            hwloc_setup_pu_level(topology, hwloc_fallback_nbprocessors(topology));
<br>
+          else
<br>
+            /* fsys-root but not this system, no way, assume there's just 1
<br>
+             * processor :/ */
<br>
+            hwloc_setup_pu_level(topology, 1);
<br>
+        }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (Lprocs)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_linux_free_cpuinfo(Lprocs, numprocs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2991.php">Christopher Samuel: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Previous message:</strong> <a href="2989.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.2a1r4421)"</a>
<li><strong>In reply to:</strong> <a href="2988.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2992.php">Christopher Samuel: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Reply:</strong> <a href="2992.php">Christopher Samuel: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Reply:</strong> <a href="2999.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
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
