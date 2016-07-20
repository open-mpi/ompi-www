<?
$subject_val = "Re: [hwloc-users] some questions about hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 28 13:35:46 2011" -->
<!-- isoreceived="20110128183546" -->
<!-- sent="Fri, 28 Jan 2011 11:35:42 -0700" -->
<!-- isosent="20110128183542" -->
<!-- name="Jim Burnes" -->
<!-- email="jvburnes_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] some questions about hwloc" -->
<!-- id="AANLkTim=z6Y_iZJfrhO+ZgsQhBH5oYs3pYpMjbsMWH-5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTinjBjQaRo-i5AcyHStOSHgeH0+93zgVVTgekuw8_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] some questions about hwloc<br>
<strong>From:</strong> Jim Burnes (<em>jvburnes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-28 13:35:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0267.php">Brice Goglin: "Re: [hwloc-users] some questions about hwloc"</a>
<li><strong>Previous message:</strong> <a href="0265.php">guillaume Arnal: "Re: [hwloc-users] some questions about hwloc"</a>
<li><strong>In reply to:</strong> <a href="0265.php">guillaume Arnal: "Re: [hwloc-users] some questions about hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0267.php">Brice Goglin: "Re: [hwloc-users] some questions about hwloc"</a>
<li><strong>Reply:</strong> <a href="0267.php">Brice Goglin: "Re: [hwloc-users] some questions about hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes.  There is a way to do that.  You bind it to a cpuset.
<br>
<p>It will be easier if you know the set of cpu cores you want to bind
<br>
to, but I suppose you could dynamically alter the cpuset.
<br>
<p>I haven't tried that though.
<br>
<p><p><p>On Fri, Jan 28, 2011 at 11:33 AM, guillaume Arnal
<br>
&lt;guillaume.arnal.35_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Yes, this helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I complete my second question : is there a way to force my current
</span><br>
<span class="quotelev1">&gt; process to run on 'n' cores ?
</span><br>
<span class="quotelev1">&gt; For example : I have 20 cores for real in my architecture (I'm dreaming
</span><br>
<span class="quotelev1">&gt; ...), but I wish that my process run on only 5 cores. Is it possible with
</span><br>
<span class="quotelev1">&gt; hwloc ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Essayez avec cette orthographe : je completerai ma deuxi&#232;me
</span><br>
<span class="quotelev1">&gt; Saisissez du texte, l'adresse d'un site Web ou importez un document &#224;
</span><br>
<span class="quotelev1">&gt; traduire.
</span><br>
<span class="quotelev1">&gt; Annuler
</span><br>
<span class="quotelev1">&gt; &#201;couter
</span><br>
<span class="quotelev1">&gt; Lire phon&#233;tiquement
</span><br>
<span class="quotelev1">&gt; Thanks for your help.
</span><br>
<span class="quotelev1">&gt; Guillaume
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2011/1/28 Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 28/01/2011 15:32, guillaume Arnal a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi everyone,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I'm beginner in using hwloc and I have some questions.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; First: I'm looking for a way to find which core is using by the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; current thread. (maybe with hwloc_get_thread_cpubind ??)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Second: is there a way to set the number of core usable for the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; current process ?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thank you in advance for your help.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Guillaume Arnal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; First, are you talking about cores for real (one core that may contain
</span><br>
<span class="quotelev2">&gt;&gt; multiple hyperthread), or are physical processors ok (those that you see
</span><br>
<span class="quotelev2">&gt;&gt; in /proc/cpuinfo) ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_get_thread_cpubind() returns the binding of a thread specified by
</span><br>
<span class="quotelev2">&gt;&gt; its Linux thread id number. For the current thread, you may also use
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_get_cpubind() with flag HWLOC_CPUBIND_THREAD. Both give a cpuset
</span><br>
<span class="quotelev2">&gt;&gt; listing all physical processors where the thread is currently allowed to
</span><br>
<span class="quotelev2">&gt;&gt; run. Processes are not bound by default, so the cpuset would contain all
</span><br>
<span class="quotelev2">&gt;&gt; existing processors, even if your thread actually uses a single core.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_cpuset_t cpuset = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_get_cpubind(topology, cpuset, HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Once you have a cpuset, you may get the corresponding cores with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_obj_t prev = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; while ((prev = hwloc_get_next_obj_inside_cpuset_by_type(topology, cpuset,
</span><br>
<span class="quotelev2">&gt;&gt; HWLOC_OBJ_CORE, prev)) != NULL)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; /* do what you want with object core */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If the thread is bound to a single physical processors, you can get its
</span><br>
<span class="quotelev2">&gt;&gt; physical id with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_bitmap_first(cpuset);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you want to force your current process to run on the 3rd core, you
</span><br>
<span class="quotelev2">&gt;&gt; can do something like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_obj_t core = hwloc_get_obj_by_type(topology, HWLOC_OBJ_CORE, 2);
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_set_cpubind(topology, core-&gt;cpuset, HWLOC_CPUBIND_PROCESS);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0267.php">Brice Goglin: "Re: [hwloc-users] some questions about hwloc"</a>
<li><strong>Previous message:</strong> <a href="0265.php">guillaume Arnal: "Re: [hwloc-users] some questions about hwloc"</a>
<li><strong>In reply to:</strong> <a href="0265.php">guillaume Arnal: "Re: [hwloc-users] some questions about hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0267.php">Brice Goglin: "Re: [hwloc-users] some questions about hwloc"</a>
<li><strong>Reply:</strong> <a href="0267.php">Brice Goglin: "Re: [hwloc-users] some questions about hwloc"</a>
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
