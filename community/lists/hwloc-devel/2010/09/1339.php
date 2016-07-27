<?
$subject_val = "Re: [hwloc-devel] roadmap";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 10:50:23 2010" -->
<!-- isoreceived="20100922145023" -->
<!-- sent="Wed, 22 Sep 2010 16:50:14 +0200" -->
<!-- isosent="20100922145014" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] roadmap" -->
<!-- id="20100922145014.GD23167_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="384287262.1097060.1285157600418.JavaMail.root_at_zmbs2.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] roadmap<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 10:50:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1340.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Previous message:</strong> <a href="1338.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Maybe in reply to:</strong> <a href="1333.php">Brice Goglin: "[hwloc-devel] roadmap"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/10/1371.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/10/1371.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please people on the list tell us what your needs are, else we can't for
<br>
sure design things a proper way!
<br>
<p>Brice Goglin, le Wed 22 Sep 2010 14:13:20 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 22/09/2010 13:36, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 22, 2010, at 4:38 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; There are still some problems to solve in the membind branch:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; * Some OS bind the process too when you bind memory. I see the following
</span><br>
<span class="quotelev3">&gt; &gt;&gt; solutions:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  + Add a flag such as HWLOC_MEMBIND_EVEN_IF_FAR_FROM_PROCESS so that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the user can explicitly refuse memory binding if it may break process
</span><br>
<span class="quotelev3">&gt; &gt;&gt; binding
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  + Drop hwloc_set_membind on these OSes and add a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hwloc_set_cpumembind() to bind both
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  + Make both process and memory binding do nothing if the STRICT flag
</span><br>
<span class="quotelev3">&gt; &gt;&gt; is given. But I'd rather not play too much with this flag.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  + Drop support for memory binding on these OS.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  + Drop these OS.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev2">&gt; &gt; What OS's are you specifically referring to?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IIRC, it was AIX and Solaris.
</span><br>
<p>Yes:
<br>
topology-aix.c:/* TODO: set_membind set_proc_membind, document that it binds threads too. */
<br>
topology-solaris.c:/* TODO: set_membind set_proc_membind thanks to lgrp_affinity, document that it binds threads too. */ 
<br>
<p><span class="quotelev2">&gt; &gt;  How about adding a query function that says what will happen for hwloc_set_membind()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I like it, we can put this in the output of hwloc_topology_get_support.
</span><br>
<p>A concern is that most people will probably not bother checking that.
<br>
Note that in some cases cpubind could do the membinding too. For
<br>
instance, the extension we have added to the Solaris port to use lgrp
<br>
for cpubind will actually also bind memory.
<br>
<p>Also, it would be helpful if the function to allocate memory on some
<br>
given node was allowed to change the default allocation policy, because
<br>
in such case we'd be able to say that it works on all OSes. For now it
<br>
won't.
<br>
<p>A typical scenario I see is:
<br>
<p>- allocate memory in the main thread, explicitly directed to some
<br>
&nbsp;&nbsp;places.
<br>
- start threads, bind them.
<br>
<p>or
<br>
<p>- allocate memory in the main thread, with a first-touch policy.
<br>
- start threads, bind them, let them touch data.
<br>
<p>or
<br>
<p>- start threads, bind them (and their memory), let them allocate data.
<br>
<p>set_cpumembind() here should be fine for all cases. One case that
<br>
wouldn't work is for instance
<br>
<p>- main thread binds itself, starts some other threads, which bind
<br>
&nbsp;&nbsp;themselves somewhere else.
<br>
- while other threads are busy, main thread allocates some data for
<br>
&nbsp;&nbsp;other threads, and thus needs to change the allocation policy, which
<br>
&nbsp;&nbsp;may unbind it.
<br>
<p>But in such case (for which the OS doesn't provide any facility to
<br>
address it better anyway), one could assume that the OS will just
<br>
schedule the main thread where it is alone, and achieve directed
<br>
allocation. Re-binding the thread might however be a good thing to do
<br>
after doing the memory allocation, to be better confident with the cpu
<br>
binding.
<br>
<p>Another point that comes to mind is whether people really want to
<br>
control both where a thread executes and where it allocates memory _at
<br>
the same time_. Letting cpubind change the memory allocation policy and
<br>
letting membind change the cpu scheduling policy is fine, provided the
<br>
user knows that one might influence the other, and thus if he calls
<br>
set_cpubind and set_membind with different cpu sets, after calling one
<br>
for some reason, he'll have to call the other one again.
<br>
<p>I think that's where we can't provide portability by just providing
<br>
functions, but we also need to provide methodology documentation.
<br>
<p><span class="quotelev1">&gt; I wonder if there are some other cases where the STRICT flag could be
</span><br>
<span class="quotelev1">&gt; dropped in favor of such an informative stuff.
</span><br>
<p>In all cases I know, STRICT is not to be dropped because it indeed
<br>
selects between strict binding (never execute somwhere else, at worse
<br>
fail) or not.
<br>
<p><span class="quotelev2">&gt; &gt; Just curious -- on these OS's, what happens if you:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - bind proc to A
</span><br>
<span class="quotelev2">&gt; &gt; - bind memory to B (which then also re-binds proc to B)
</span><br>
<span class="quotelev2">&gt; &gt; - re-bind proc to A
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is the memory binding then lost?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll let Samuel comment on this.
</span><br>
<p>That would depend on the OS of course :) Data migration is actually
<br>
quite rare in OSes, it's often really implemented only for machine
<br>
partitioning.
<br>
<p>For process binding, I believe OSes will tend to do the data migration.
<br>
For thread binding, I doubt any OS would do the data migration, as data
<br>
aren't supposed to be attached to any particular thread of the process.
<br>
<p><span class="quotelev3">&gt; &gt;&gt; * cpuset and nodeset structures are the same, they are both manipulated
</span><br>
<span class="quotelev3">&gt; &gt;&gt; with hwloc_cpuset_foo functions. So maybe rename into hwloc_set_t and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hwloc_set_foo functions. With #define and aliases to not break API/ABIs.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev2">&gt; &gt; I'm in favor of this -- it would end the overloading of the term &quot;cpuset&quot; between hwloc and cpuset.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc_set_*? hwloc_objset* ? Anything better?
</span><br>
<p>objset would be confusing with hwloc objects.
<br>
<p>hwloc_bitset_*?
<br>
<p><span class="quotelev1">&gt; hwloc_set_* might not be the best since we would have a hwloc_set_set()
</span><br>
<span class="quotelev1">&gt; function to set one bit :)
</span><br>
<p>:)
<br>
<p><span class="quotelev1">&gt; By the way, hwloc_cpuset_cpu() and hwloc_cpuset_all_but_cpu() should be
</span><br>
<span class="quotelev1">&gt; renamed too. hwloc_set_onlyone() and hwloc_set_allbutone() maybe?
</span><br>
<p>For instance, I'd let a native english speaker decide, however :)
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1340.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Previous message:</strong> <a href="1338.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Maybe in reply to:</strong> <a href="1333.php">Brice Goglin: "[hwloc-devel] roadmap"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/10/1371.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/10/1371.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
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
