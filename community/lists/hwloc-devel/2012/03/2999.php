<?
$subject_val = "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 28 14:22:56 2012" -->
<!-- isoreceived="20120328182256" -->
<!-- sent="Wed, 28 Mar 2012 14:22:51 -0400" -->
<!-- isosent="20120328182251" -->
<!-- name="Daniel Ibanez" -->
<!-- email="dan.a.ibanez_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Fwd: BGQ empty topology with MPI" -->
<!-- id="CADcFuaYKPuPkpWXq6waQ6THr=QVSQWyeKfLkBGF5XSkGQ0=X4w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4F6EBE9E.7000803_at_inria.fr" -->
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
<strong>From:</strong> Daniel Ibanez (<em>dan.a.ibanez_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-28 14:22:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3000.php">Brice Goglin: "[hwloc-devel] interoperability with X displays"</a>
<li><strong>Previous message:</strong> <a href="2998.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4417"</a>
<li><strong>In reply to:</strong> <a href="2990.php">Brice Goglin: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2991.php">Christopher Samuel: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The machine is back in working order.
<br>
I tried this patch and it works great: I get cpus and my whole program runs
<br>
as expected.
<br>
I'm now looking into what failed in look_sysfscpu.
<br>
<p>On Sun, Mar 25, 2012 at 2:43 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Le 24/03/2012 23:04, Daniel Ibanez a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; The fundamental difference is in
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; src/topology-linux.c:3251
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; when this if statement is true, hwloc_setup_pu_level
</span><br>
<span class="quotelev2">&gt; &gt; finds the PU objects.
</span><br>
<span class="quotelev2">&gt; &gt; When it is false, it fails with empty topology.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I checked HWLOC_LINUX_USE_CPUINFO,
</span><br>
<span class="quotelev2">&gt; &gt; and it is not detected even when I set it from the front end.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That means the difference is whether hwloc can access
</span><br>
<span class="quotelev2">&gt; &gt; the various /sys/devices and /sys/bus files.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Additional printfs confirm that with MPI in the code,
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_accessat succeeds on the various /sys/ directories,
</span><br>
<span class="quotelev2">&gt; &gt; but the overall procedure for getting PUs from these fails.
</span><br>
<span class="quotelev2">&gt; &gt; Without MPI, access to /sys/ directories fails but
</span><br>
<span class="quotelev2">&gt; &gt; the fallback hwloc_setup_pu_level works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I understand correctly, in the MPI case, look_sysfscpu() ends up
</span><br>
<span class="quotelev1">&gt; being called. There are two instances of it because of a possible
</span><br>
<span class="quotelev1">&gt; renaming of /sys/devices/system/cpu in the future, so it's expected that
</span><br>
<span class="quotelev1">&gt; the one succeeds and the other fails. Can you check whether both fail ?
</span><br>
<span class="quotelev1">&gt; Or just try the attached patch which adds a fallback for this case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But it'd be good to understand what's going on in /sys on this machine.
</span><br>
<span class="quotelev1">&gt; And I still don't understand why MPI changes things here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- src/topology-linux.c        (r&#195;&#169;vision 4420)
</span><br>
<span class="quotelev1">&gt; +++ src/topology-linux.c        (copie de travail)
</span><br>
<span class="quotelev1">&gt; @@ -3270,7 +3270,15 @@
</span><br>
<span class="quotelev1">&gt;       if (numprocs &lt;= 0)
</span><br>
<span class="quotelev1">&gt;        Lprocs = NULL;
</span><br>
<span class="quotelev1">&gt;       if (look_sysfscpu(topology, &quot;/sys/bus/cpu/devices&quot;, Lprocs,
</span><br>
<span class="quotelev1">&gt; numprocs) &lt; 0)
</span><br>
<span class="quotelev1">&gt; -        look_sysfscpu(topology, &quot;/sys/devices/system/cpu&quot;, Lprocs,
</span><br>
<span class="quotelev1">&gt; numprocs);
</span><br>
<span class="quotelev1">&gt; +        if (look_sysfscpu(topology, &quot;/sys/devices/system/cpu&quot;, Lprocs,
</span><br>
<span class="quotelev1">&gt; numprocs) &lt; 0) {
</span><br>
<span class="quotelev1">&gt; +         /* sysfs but we failed to read cpu topology, fallback */
</span><br>
<span class="quotelev1">&gt; +          if (topology-&gt;is_thissystem)
</span><br>
<span class="quotelev1">&gt; +            hwloc_setup_pu_level(topology,
</span><br>
<span class="quotelev1">&gt; hwloc_fallback_nbprocessors(topology));
</span><br>
<span class="quotelev1">&gt; +          else
</span><br>
<span class="quotelev1">&gt; +            /* fsys-root but not this system, no way, assume there's just
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; +             * processor :/ */
</span><br>
<span class="quotelev1">&gt; +            hwloc_setup_pu_level(topology, 1);
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt;       if (Lprocs)
</span><br>
<span class="quotelev1">&gt;        hwloc_linux_free_cpuinfo(Lprocs, numprocs);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Dan Ibanez
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2999/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3000.php">Brice Goglin: "[hwloc-devel] interoperability with X displays"</a>
<li><strong>Previous message:</strong> <a href="2998.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4417"</a>
<li><strong>In reply to:</strong> <a href="2990.php">Brice Goglin: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2991.php">Christopher Samuel: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
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
