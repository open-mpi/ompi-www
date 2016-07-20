<?
$subject_val = "Re: [hwloc-users] meaning of &quot;physical CPU&quot; for get_last_cpu_location()";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct  5 01:59:40 2013" -->
<!-- isoreceived="20131005055940" -->
<!-- sent="Sat, 05 Oct 2013 07:59:36 +0200" -->
<!-- isosent="20131005055936" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] meaning of &amp;quot;physical CPU&amp;quot; for get_last_cpu_location()" -->
<!-- id="524FAAC8.50207_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="260923FC-3A5F-4D1F-B613-2D83483EAC70_at_demoninsight.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] meaning of &quot;physical CPU&quot; for get_last_cpu_location()<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-05 01:59:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2013/11/0912.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
<li><strong>Previous message:</strong> <a href="0910.php">Vlad: "[hwloc-users] meaning of &quot;physical CPU&quot; for get_last_cpu_location()"</a>
<li><strong>In reply to:</strong> <a href="0910.php">Vlad: "[hwloc-users] meaning of &quot;physical CPU&quot; for get_last_cpu_location()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>The doc says &quot;get the last physical CPU where the current process or
<br>
thread ran&quot;. As usual, there's no well-defined portable way to identify
<br>
those things. On AMD, it's a core. On Intel, it's a hyperthread, and
<br>
could also be a core if HT is disabled. On other archs/systems, it may
<br>
be called &quot;logical processor&quot; or &quot;execution unit&quot; instead. We try to
<br>
explain that at the end of the glossary
<br>
<a href="http://www.open-mpi.org/projects/hwloc/doc/v1.7.2/a00001.php">http://www.open-mpi.org/projects/hwloc/doc/v1.7.2/a00001.php</a> but we
<br>
can't repeat that everywhere.
<br>
<p>the actually returns a cpuset, so it doesn't actually return any object,
<br>
but you can convert the cpuset into what you want. It sets a single bit
<br>
in that cpuset (once per thread if you look at an entire processor), so
<br>
that corresponds to a single HT thread on Intel, but that's also a
<br>
single core on Intel without HT.
<br>
<p>Brice
<br>
<p><p><p><p>Le 05/10/2013 02:45, Vlad a &#233;crit :
<br>
<span class="quotelev1">&gt; Greetings,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	I've been a user for a while and have just noticed an area where the API documentation is either unclear or the version I am using (1.7 on Fedora 17) returns a wrong topology object type. Specifically, I took the &quot;physical CPU&quot; wording to mean HWLOC_OBJ_CORE but on a machine that has hyperthreading enabled the above method appears to return HWLOC_OBJ_PU).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Most likely, all is well (returning the smallest processing element of hardware kind of makes more sense) and I'd misunderstood the API all along (I work mostly on machines with HT disabled), but it would be useful to confirm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; Vlad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2013/11/0912.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
<li><strong>Previous message:</strong> <a href="0910.php">Vlad: "[hwloc-users] meaning of &quot;physical CPU&quot; for get_last_cpu_location()"</a>
<li><strong>In reply to:</strong> <a href="0910.php">Vlad: "[hwloc-users] meaning of &quot;physical CPU&quot; for get_last_cpu_location()"</a>
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
