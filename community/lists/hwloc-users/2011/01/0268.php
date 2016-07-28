<?
$subject_val = "Re: [hwloc-users] some questions about hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 29 04:19:08 2011" -->
<!-- isoreceived="20110129091908" -->
<!-- sent="Sat, 29 Jan 2011 10:19:02 +0100" -->
<!-- isosent="20110129091902" -->
<!-- name="guillaume Arnal" -->
<!-- email="guillaume.arnal.35_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] some questions about hwloc" -->
<!-- id="AANLkTim=vDLkNcna_Ar-Z_Bcd46wstveW-Nq3=qEaMoU_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D432CA7.3030807_at_inria.fr" -->
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
<strong>From:</strong> guillaume Arnal (<em>guillaume.arnal.35_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-29 04:19:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/02/0269.php">Hendryk Bockelmann: "[hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>Previous message:</strong> <a href="0267.php">Brice Goglin: "Re: [hwloc-users] some questions about hwloc"</a>
<li><strong>In reply to:</strong> <a href="0267.php">Brice Goglin: "Re: [hwloc-users] some questions about hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0258.php">Samuel Thibault: "Re: [hwloc-users] some questions about hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wonderful !
<br>
<p>Tank you very much everybody.
<br>
Guillaume
<br>
<p>2011/1/28 Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; You have to choose 5 cores manually:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* get all my core objects */
</span><br>
<span class="quotelev1">&gt; hwloc_obj_t core1 = hwloc_get_obj_by_type(topology, HWLOC_OBJ_CORE,
</span><br>
<span class="quotelev1">&gt; &lt;first_core_number&gt;);
</span><br>
<span class="quotelev1">&gt; hwloc_obj_t core2 = hwloc_get_obj_by_type(topology, HWLOC_OBJ_CORE,
</span><br>
<span class="quotelev1">&gt; &lt;second_core_number&gt;);
</span><br>
<span class="quotelev1">&gt; hwloc_obj_t core3 = hwloc_get_obj_by_type(topology, HWLOC_OBJ_CORE,
</span><br>
<span class="quotelev1">&gt; &lt;third_core_number&gt;);
</span><br>
<span class="quotelev1">&gt; hwloc_obj_t core4 = hwloc_get_obj_by_type(topology, HWLOC_OBJ_CORE,
</span><br>
<span class="quotelev1">&gt; &lt;fourth_core_number&gt;);
</span><br>
<span class="quotelev1">&gt; hwloc_obj_t core5 = hwloc_get_obj_by_type(topology, HWLOC_OBJ_CORE,
</span><br>
<span class="quotelev1">&gt; &lt;fifth_core_number&gt;);
</span><br>
<span class="quotelev1">&gt; /* allocate a cpuset and fill it */
</span><br>
<span class="quotelev1">&gt; hwloc_cpuset set = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_or(set, set, core1-&gt;cpuset);
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_or(set, set, core2-&gt;cpuset);
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_or(set, set, core3-&gt;cpuset);
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_or(set, set, core4-&gt;cpuset);
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_or(set, set, core5-&gt;cpuset);
</span><br>
<span class="quotelev1">&gt; /* bind the process */
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind(topology, set, HWLOC_CPUBIND_PROCESS);
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_free(set);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Use HWLOC_OBJ_PU instead of CORE if you want hardware thread instead of
</span><br>
<span class="quotelev1">&gt; cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that core_numbers above are logical numbers, not the physical numbers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 28/01/2011 19:35, Jim Burnes a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Yes.  There is a way to do that.  You bind it to a cpuset.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It will be easier if you know the set of cpu cores you want to bind
</span><br>
<span class="quotelev2">&gt; &gt; to, but I suppose you could dynamically alter the cpuset.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I haven't tried that though.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Jan 28, 2011 at 11:33 AM, guillaume Arnal
</span><br>
<span class="quotelev2">&gt; &gt; &lt;guillaume.arnal.35_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Yes, this helps.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; However, I complete my second question : is there a way to force my
</span><br>
<span class="quotelev1">&gt; current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; process to run on 'n' cores ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For example : I have 20 cores for real in my architecture (I'm dreaming
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ...), but I wish that my process run on only 5 cores. Is it possible
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hwloc ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Essayez avec cette orthographe : je completerai ma deuxi&#232;me
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Saisissez du texte, l'adresse d'un site Web ou importez un document &#224;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; traduire.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Annuler
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &#201;couter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Lire phon&#233;tiquement
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks for your help.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Guillaume
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2011/1/28 Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Le 28/01/2011 15:32, guillaume Arnal a &#233;crit :
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I'm beginner in using hwloc and I have some questions.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; First: I'm looking for a way to find which core is using by the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; current thread. (maybe with hwloc_get_thread_cpubind ??)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Second: is there a way to set the number of core usable for the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; current process ?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thank you in advance for your help.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Guillaume Arnal
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; First, are you talking about cores for real (one core that may contain
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; multiple hyperthread), or are physical processors ok (those that you
</span><br>
<span class="quotelev1">&gt; see
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; in /proc/cpuinfo) ?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; hwloc_get_thread_cpubind() returns the binding of a thread specified by
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; its Linux thread id number. For the current thread, you may also use
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; hwloc_get_cpubind() with flag HWLOC_CPUBIND_THREAD. Both give a cpuset
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; listing all physical processors where the thread is currently allowed
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; run. Processes are not bound by default, so the cpuset would contain
</span><br>
<span class="quotelev1">&gt; all
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; existing processors, even if your thread actually uses a single core.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; hwloc_cpuset_t cpuset = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; hwloc_get_cpubind(topology, cpuset, HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Once you have a cpuset, you may get the corresponding cores with:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; hwloc_obj_t prev = NULL;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; while ((prev = hwloc_get_next_obj_inside_cpuset_by_type(topology,
</span><br>
<span class="quotelev1">&gt; cpuset,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; HWLOC_OBJ_CORE, prev)) != NULL)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   /* do what you want with object core */
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If the thread is bound to a single physical processors, you can get its
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; physical id with:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; hwloc_bitmap_first(cpuset);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If you want to force your current process to run on the 3rd core, you
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; can do something like:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; hwloc_obj_t core = hwloc_get_obj_by_type(topology, HWLOC_OBJ_CORE, 2);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; hwloc_set_cpubind(topology, core-&gt;cpuset, HWLOC_CPUBIND_PROCESS);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hope this helps,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Brice
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0268/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/02/0269.php">Hendryk Bockelmann: "[hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>Previous message:</strong> <a href="0267.php">Brice Goglin: "Re: [hwloc-users] some questions about hwloc"</a>
<li><strong>In reply to:</strong> <a href="0267.php">Brice Goglin: "Re: [hwloc-users] some questions about hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0258.php">Samuel Thibault: "Re: [hwloc-users] some questions about hwloc"</a>
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
