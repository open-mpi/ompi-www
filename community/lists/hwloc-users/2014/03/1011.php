<?
$subject_val = "Re: [hwloc-users] distributing across cores with hwloc-distrib";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 30 12:00:05 2014" -->
<!-- isoreceived="20140330160005" -->
<!-- sent="Sun, 30 Mar 2014 12:00:03 -0400" -->
<!-- isosent="20140330160003" -->
<!-- name="Tim Creech" -->
<!-- email="tcreech_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] distributing across cores with hwloc-distrib" -->
<!-- id="20140330160003.GA5050_at_brio.tcreech.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="53383916.10604_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] distributing across cores with hwloc-distrib<br>
<strong>From:</strong> Tim Creech (<em>tcreech_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-30 12:00:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1012.php">Brice Goglin: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
<li><strong>Previous message:</strong> <a href="1010.php">Brice Goglin: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
<li><strong>In reply to:</strong> <a href="1010.php">Brice Goglin: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1012.php">Brice Goglin: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
<li><strong>Reply:</strong> <a href="1012.php">Brice Goglin: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks! This is very helpful. With the patch in place I see very
<br>
reasonable output.
<br>
<p>Might this patch (eventually) make it into a hwloc release?
<br>
<p>-Tim
<br>
<p>On Sun, Mar 30, 2014 at 05:32:38PM +0200, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Don't worry, binding multithreaded processes is not a corner case. I was
</span><br>
<span class="quotelev1">&gt; rather talking about the general &quot;distributing less processes than there
</span><br>
<span class="quotelev1">&gt; are object and returning cpusets as large as possible&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The attached patch should help. Please let me know.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 30/03/2014 17:08, Tim Creech a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Hi Brice,
</span><br>
<span class="quotelev2">&gt; &gt;   First, my apologies if this email starts a new thread. For some reason I
</span><br>
<span class="quotelev2">&gt; &gt; never received your response through Mailman and can only see it through the
</span><br>
<span class="quotelev2">&gt; &gt; web archive interface. I'm constructing this reponse without things like
</span><br>
<span class="quotelev2">&gt; &gt; &quot;In-Reply-To&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you for your very helpful response. I'll use your explanation of the
</span><br>
<span class="quotelev2">&gt; &gt; algorithm and try to understand the implementation. I was indeed expecting
</span><br>
<span class="quotelev2">&gt; &gt; expecting hwloc-distrib to help me to bind multithreaded processes, although I
</span><br>
<span class="quotelev2">&gt; &gt; certainly can understand that this is considered a corner case. Could you
</span><br>
<span class="quotelev2">&gt; &gt; please consider fixing this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Tim
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brice Goglin wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Hello,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This is the main corner case of hwloc-distrib. It can return objects
</span><br>
<span class="quotelev3">&gt; &gt;&gt; only, not groups of objects. The distrib algorithms is:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1) start at the root, where there are M children, and you have to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; distribute N processes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2) if there are no children, or if N is 1, return the entire object
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 3) split N into Ni (N = sum of Ni) into M pieces based on each children
</span><br>
<span class="quotelev3">&gt; &gt;&gt; weight (the number of PUs under each)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    If N&gt;=M, all Ni can be &gt; 0, all children will get some process
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    if N&lt;M, you can't split N into M integer pieces, some Ni will be 0,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; these objects won't get any process
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 4) go back to (2) recurse in each children object with Ni instead of N
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Your case is step 3 with N=2 and M=4. It basically means that we
</span><br>
<span class="quotelev3">&gt; &gt;&gt; distribute across cores without &quot;assembling group of cores if needed&quot;.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In your case, when you bind to 2 cores of 4 PUs each, your task only
</span><br>
<span class="quotelev3">&gt; &gt;&gt; uses one PU in the end, 1 core and 3 PU are ignored as well. They *may*
</span><br>
<span class="quotelev3">&gt; &gt;&gt; be used, but the operating system scheduler is free to ignore them. So
</span><br>
<span class="quotelev3">&gt; &gt;&gt; binding to 2 cores or binding to 1 core or binding to 1 PU is almost
</span><br>
<span class="quotelev3">&gt; &gt;&gt; equivalent. At least the latter is included in the former. And most
</span><br>
<span class="quotelev3">&gt; &gt;&gt; people pass --single to get a single PU anyway.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The case where it's not equivalent is when you bind multithreaded
</span><br>
<span class="quotelev3">&gt; &gt;&gt; processes. If you have 8 threads, it's better to use 2 cores than 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; single one. If this case matters to you, I will look into fixing this
</span><br>
<span class="quotelev3">&gt; &gt;&gt; corner case.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Le 30/03/2014 07:56, Tim Creech a &#233;crit :
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   I would like to use hwloc_distrib for a project, but I'm having some
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; trouble understanding how it distributes. Specifically, it seems to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; avoid distributing multiple processes across cores, and I'm not sure
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; why.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; As an example, consider the actual output of:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; $ hwloc-distrib -i &quot;4 4&quot; 2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0x0000000f
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0x000000f0
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I'm expecting hwloc-distrib to tell me how to distribute 2 processes
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; across the 16 PUs (4 cores by 4 PUs), but the answer only involves 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; PUs, leaving the other 8 unused. If there were more cores on the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; machine, then potentially the vast majority of them would be unused.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; In other words, I might expect the output to use all of the PUs across
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; cores, for example:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; $ hwloc-distrib -i &quot;4 4&quot; 2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0x000000ff
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0x0000ff00
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Why does hwloc-distrib leave PUs unused? I'm using hwloc-1.9. Any help
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; in understanding where I'm going wrong is greatly appreciated!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Tim
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
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; diff --git a/include/hwloc/helper.h b/include/hwloc/helper.h
</span><br>
<span class="quotelev1">&gt; index 750f404..62fbba4 100644
</span><br>
<span class="quotelev1">&gt; --- a/include/hwloc/helper.h
</span><br>
<span class="quotelev1">&gt; +++ b/include/hwloc/helper.h
</span><br>
<span class="quotelev1">&gt; @@ -685,6 +685,7 @@ hwloc_distrib(hwloc_topology_t topology,
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    unsigned i;
</span><br>
<span class="quotelev1">&gt;    unsigned tot_weight;
</span><br>
<span class="quotelev1">&gt; +  unsigned given, givenweight;
</span><br>
<span class="quotelev1">&gt;    hwloc_cpuset_t *cpusetp = set;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;    if (flags &amp; ~HWLOC_DISTRIB_FLAG_REVERSE) {
</span><br>
<span class="quotelev1">&gt; @@ -697,23 +698,40 @@ hwloc_distrib(hwloc_topology_t topology,
</span><br>
<span class="quotelev1">&gt;      if (roots[i]-&gt;cpuset)
</span><br>
<span class="quotelev1">&gt;        tot_weight += hwloc_bitmap_weight(roots[i]-&gt;cpuset);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -  for (i = 0; i &lt; n_roots &amp;&amp; tot_weight; i++) {
</span><br>
<span class="quotelev1">&gt; -    /* Give to roots[] a portion proportional to its weight */
</span><br>
<span class="quotelev1">&gt; +  for (i = 0, given = 0, givenweight = 0; i &lt; n_roots; i++) {
</span><br>
<span class="quotelev1">&gt; +    unsigned chunk, weight;
</span><br>
<span class="quotelev1">&gt;      hwloc_obj_t root = roots[flags &amp; HWLOC_DISTRIB_FLAG_REVERSE ? n_roots-1-i : i];
</span><br>
<span class="quotelev1">&gt; -    unsigned weight = root-&gt;cpuset ? hwloc_bitmap_weight(root-&gt;cpuset) : 0;
</span><br>
<span class="quotelev1">&gt; -    unsigned chunk = (n * weight + tot_weight-1) / tot_weight;
</span><br>
<span class="quotelev1">&gt; -    if (!root-&gt;arity || chunk == 1 || root-&gt;depth &gt;= until) {
</span><br>
<span class="quotelev1">&gt; +    hwloc_cpuset_t cpuset = root-&gt;cpuset;
</span><br>
<span class="quotelev1">&gt; +    if (!cpuset)
</span><br>
<span class="quotelev1">&gt; +      continue;
</span><br>
<span class="quotelev1">&gt; +    weight = hwloc_bitmap_weight(cpuset);
</span><br>
<span class="quotelev1">&gt; +    if (!weight)
</span><br>
<span class="quotelev1">&gt; +      continue;
</span><br>
<span class="quotelev1">&gt; +    /* Give to roots[] a chunk proportional to its weight.
</span><br>
<span class="quotelev1">&gt; +     * If previous chunks got rounded-up, we'll get a bit less. */
</span><br>
<span class="quotelev1">&gt; +    chunk = (( (givenweight+weight) * n  + tot_weight-1) / tot_weight)
</span><br>
<span class="quotelev1">&gt; +          - ((  givenweight         * n  + tot_weight-1) / tot_weight);
</span><br>
<span class="quotelev1">&gt; +    if (!root-&gt;arity || chunk &lt;= 1 || root-&gt;depth &gt;= until) {
</span><br>
<span class="quotelev1">&gt;        /* Got to the bottom, we can't split any more, put everything there.  */
</span><br>
<span class="quotelev1">&gt; -      unsigned j;
</span><br>
<span class="quotelev1">&gt; -      for (j=0; j&lt;n; j++)
</span><br>
<span class="quotelev1">&gt; -	cpusetp[j] = hwloc_bitmap_dup(root-&gt;cpuset);
</span><br>
<span class="quotelev1">&gt; +      if (chunk) {
</span><br>
<span class="quotelev1">&gt; +	/* Fill cpusets with ours */
</span><br>
<span class="quotelev1">&gt; +	unsigned j;
</span><br>
<span class="quotelev1">&gt; +	for (j=0; j &lt; chunk; j++)
</span><br>
<span class="quotelev1">&gt; +	  cpusetp[j] = hwloc_bitmap_dup(cpuset);
</span><br>
<span class="quotelev1">&gt; +      } else {
</span><br>
<span class="quotelev1">&gt; +	/* We got no chunk, just add our cpuset to a previous one
</span><br>
<span class="quotelev1">&gt; +	 * so that we don't get ignored.
</span><br>
<span class="quotelev1">&gt; +	 * (the first chunk cannot be empty). */
</span><br>
<span class="quotelev1">&gt; +	assert(given);
</span><br>
<span class="quotelev1">&gt; +	hwloc_bitmap_or(cpusetp[-1], cpusetp[-1], cpuset);
</span><br>
<span class="quotelev1">&gt; +      }
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;        /* Still more to distribute, recurse into children */
</span><br>
<span class="quotelev1">&gt;        hwloc_distrib(topology, root-&gt;children, root-&gt;arity, cpusetp, chunk, until, flags);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      cpusetp += chunk;
</span><br>
<span class="quotelev1">&gt; -    tot_weight -= weight;
</span><br>
<span class="quotelev1">&gt; -    n -= chunk;
</span><br>
<span class="quotelev1">&gt; +    given += chunk;
</span><br>
<span class="quotelev1">&gt; +    givenweight += weight;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1012.php">Brice Goglin: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
<li><strong>Previous message:</strong> <a href="1010.php">Brice Goglin: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
<li><strong>In reply to:</strong> <a href="1010.php">Brice Goglin: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1012.php">Brice Goglin: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
<li><strong>Reply:</strong> <a href="1012.php">Brice Goglin: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
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
