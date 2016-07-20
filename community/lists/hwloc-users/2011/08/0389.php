<?
$subject_val = "Re: [hwloc-users] hwloc get cpubind function";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 11 04:31:00 2011" -->
<!-- isoreceived="20110811083100" -->
<!-- sent="Thu, 11 Aug 2011 10:30:54 +0200" -->
<!-- isosent="20110811083054" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc get cpubind function" -->
<!-- id="CAJNPZUW-sRz+Dc3dyuu7-Q+-iOuaYZcS05+SR3+j9w0jNY=D3g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJNPZUUXJKgBxv4gjsznfBVJaw=kFBXzQ=ua=YQzs6Eahpi=mQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc get cpubind function<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-11 04:30:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0390.php">Samuel Thibault: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>Previous message:</strong> <a href="0388.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>In reply to:</strong> <a href="0388.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0390.php">Samuel Thibault: "Re: [hwloc-users] hwloc get cpubind function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Samuel,
<br>
<p>I'm using hwloc-1.3a1r3606.  Now hwloc_get_last_cpu_location() works well:
<br>
<p>thread 0  bind:  0x00000008   as core number 3
<br>
thread 1 bind: 0x00000800 as core number 11
<br>
<p>but hwloc_linux_get_tid_cpubind() has still some problems because after
<br>
binding one thread on just one core it give me:
<br>
<p>thread 0 bind:  0x00000008   as core number 3
<br>
thread 1 bind: &quot;0x00ffffff&quot;  as all available cores!!
<br>
<p><p><p>2011/8/10 Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Ok,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2011/8/10 Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Samuel Thibault, le Wed 10 Aug 2011 16:24:39 +0200, a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Gabriele Fatigati, le Wed 10 Aug 2011 16:13:27 +0200, a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; there is something wrong. I'm using two thread, the first one is bound
</span><br>
<span class="quotelev2">&gt;&gt; on
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; HWLOC_OBJ_PU number 2, the second one on  HWLOC_OBJ_PU number 10,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; It seems that hwloc_linux_get_tid_last_cpu_location erroneously assume
</span><br>
<span class="quotelev3">&gt;&gt; &gt; that /proc/self/stat points to its own thread state indeed, we need to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; fix that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This should now be fixed in the trunk and the v1.2 branch. You can
</span><br>
<span class="quotelev2">&gt;&gt; either upgrade from svn, or wait for this night's snapshot.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Samuel
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HPC specialist
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SuperComputing Applications and Innovation Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Ing. Gabriele Fatigati
HPC specialist
SuperComputing Applications and Innovation Department
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0389/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0390.php">Samuel Thibault: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>Previous message:</strong> <a href="0388.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>In reply to:</strong> <a href="0388.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0390.php">Samuel Thibault: "Re: [hwloc-users] hwloc get cpubind function"</a>
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
