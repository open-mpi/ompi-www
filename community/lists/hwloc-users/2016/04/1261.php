<?
$subject_val = "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 24 17:08:43 2016" -->
<!-- isoreceived="20160424210843" -->
<!-- sent="Sun, 24 Apr 2016 23:08:38 +0200" -->
<!-- isosent="20160424210838" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated" -->
<!-- id="571D35D6.5080102_at_inria.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAOQ1qzvcBUtPmQvk-AjHznf2ocoPAtuM631-Z-RbZSkdXt8t+g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-24 17:08:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1262.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>Previous message:</strong> <a href="1260.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>In reply to:</strong> <a href="1260.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1262.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>Reply:</strong> <a href="1262.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
What do you mean with &quot; it can not bind the specified memory section
<br>
(addr, len) to the desired NUMA node&quot;?
<br>
Did it fail? If so, what does errno contain?
<br>
If it didn't fail, what did it do instead?
<br>
thanks
<br>
Brice
<br>
<p><p><p>Le 24/04/2016 23:02, Rezaul Karim Raju a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Hi ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was trying to bind each quarter of an array to 4 different NUMA
</span><br>
<span class="quotelev1">&gt; nodes, and doing as below: 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *//ALLOCATION *
</span><br>
<span class="quotelev1">&gt; *obj_a = hwloc_get_obj_by_type(topology, HWLOC_OBJ_NODE, 0);*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *array =* hwloc_alloc_membind_nodeset( topology, size, obj_a-&gt;nodeset,
</span><br>
<span class="quotelev1">&gt; HWLOC_MEMBIND_BIND, 1);
</span><br>
<span class="quotelev1">&gt; *tmp *= hwloc_alloc_membind_nodeset( topology, size, obj_a-&gt;nodeset,
</span><br>
<span class="quotelev1">&gt; HWLOC_MEMBIND_BIND, 1); 
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *// DISTRIBUTED BINDING  [my system has 8 NUMA nodes (0-7)]*
</span><br>
<span class="quotelev1">&gt; printf(&quot;Address of array:= %p, array+size/4:= %p, array+size/2:= %p,
</span><br>
<span class="quotelev1">&gt; array+3*size/4:= %p \n&quot;, array, array+size/4, array+size/2,
</span><br>
<span class="quotelev1">&gt; array+3*size/4);
</span><br>
<span class="quotelev1">&gt; // bind 1st quarter to node (n-1)
</span><br>
<span class="quotelev1">&gt; hwloc_set_area_membind_nodeset(topology, (array), size/4,
</span><br>
<span class="quotelev1">&gt; obj_a-&gt;nodeset, HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_MIGRATE);
</span><br>
<span class="quotelev1">&gt; hwloc_set_area_membind_nodeset(topology, (tmp), size/4,
</span><br>
<span class="quotelev1">&gt; obj_a-&gt;nodeset, HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_MIGRATE);
</span><br>
<span class="quotelev1">&gt; // bind 2nd quarter to node (2)
</span><br>
<span class="quotelev1">&gt; *obj_b = hwloc_get_obj_by_type(topology, HWLOC_OBJ_NODE,  2);*
</span><br>
<span class="quotelev1">&gt; hwloc_set_area_membind_nodeset(topology, (array+size/4), size/4,
</span><br>
<span class="quotelev1">&gt; obj_b-&gt;nodeset, HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_MIGRATE);
</span><br>
<span class="quotelev1">&gt; hwloc_set_area_membind_nodeset(topology, (tmp +size/4), size/4,
</span><br>
<span class="quotelev1">&gt; obj_b-&gt;nodeset, HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_MIGRATE);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; // bind 3rd quarter to node (4)
</span><br>
<span class="quotelev1">&gt; *obj_c = hwloc_get_obj_by_type(topology, HWLOC_OBJ_NODE, 4);*
</span><br>
<span class="quotelev1">&gt; hwloc_set_area_membind_nodeset(topology, array+size/2, size/4,
</span><br>
<span class="quotelev1">&gt; obj_c-&gt;nodeset, HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_MIGRATE);
</span><br>
<span class="quotelev1">&gt; hwloc_set_area_membind_nodeset(topology, tmp+size/2, size/4,
</span><br>
<span class="quotelev1">&gt; obj_c-&gt;nodeset, HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_MIGRATE);
</span><br>
<span class="quotelev1">&gt; // bind 4th quarter to node (6)
</span><br>
<span class="quotelev1">&gt; *obj_d = hwloc_get_obj_by_type(topology, HWLOC_OBJ_NODE, 6);*
</span><br>
<span class="quotelev1">&gt; hwloc_set_area_membind_nodeset(topology, array+3*size/4, size/4,
</span><br>
<span class="quotelev1">&gt; obj_d-&gt;nodeset, HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_MIGRATE);
</span><br>
<span class="quotelev1">&gt; hwloc_set_area_membind_nodeset(topology, tmp+3*size/4, size/4,
</span><br>
<span class="quotelev1">&gt; obj_d-&gt;nodeset, HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_MIGRATE);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My intention here is to distribute 'array' (which is - long type
</span><br>
<span class="quotelev1">&gt; element:  
</span><br>
<span class="quotelev1">&gt; array = (ELM *) malloc(bots_arg_size * sizeof(ELM));
</span><br>
<span class="quotelev1">&gt; tmp = (ELM *) malloc(bots_arg_size * sizeof(ELM));) over nodes through
</span><br>
<span class="quotelev1">&gt; hwloc memory binding. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1). But except only *obj_a, it can not bind the specified memory
</span><br>
<span class="quotelev1">&gt; section (addr, len) to the desired NUMA node. *
</span><br>
<span class="quotelev1">&gt; 2). I did tried with  MEMBIND_INTERLEAVE policy
</span><br>
<span class="quotelev1">&gt; array = hwloc_alloc_membind_nodeset(topology, size, cset_available,
</span><br>
<span class="quotelev1">&gt; HWLOC_MEMBIND_INTERLEAVE, HWLOC_MEMBIND_MIGRATE);
</span><br>
<span class="quotelev1">&gt; tmp = hwloc_alloc_membind_nodeset(topology, size, cset_available,
</span><br>
<span class="quotelev1">&gt; HWLOC_MEMBIND_INTERLEAVE, HWLOC_MEMBIND_MIGRATE);
</span><br>
<span class="quotelev1">&gt; but I did get it working here as well. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Can you please comment on this..?  *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much in advance..!! 
</span><br>
<span class="quotelev1">&gt; - Raju
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 21, 2016 at 11:25 AM, Rezaul Karim Raju
</span><br>
<span class="quotelev1">&gt; &lt;raju.cse.buet_at_[hidden] &lt;mailto:raju.cse.buet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks, Brice.!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Mon, Mar 21, 2016 at 11:22 AM, Brice Goglin
</span><br>
<span class="quotelev1">&gt;     &lt;Brice.Goglin_at_[hidden] &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         For testing, you can use this tarball:
</span><br>
<span class="quotelev1">&gt;         <a href="https://ci.inria.fr/hwloc/job/zcustombranch-0-tarball/lastSuccessfulBuild/artifact/hwloc-getmemlocation-20160320.2208.gitd2f6537.tar.gz">https://ci.inria.fr/hwloc/job/zcustombranch-0-tarball/lastSuccessfulBuild/artifact/hwloc-getmemlocation-20160320.2208.gitd2f6537.tar.gz</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Le 21/03/2016 17:21, Rezaul Karim Raju a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt;         Hi Brice,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Thanks for your email. 
</span><br>
<span class="quotelev2">&gt;&gt;         I believe it is definitely helpful. Getting memory range
</span><br>
<span class="quotelev2">&gt;&gt;         within the current process will be very good information to
</span><br>
<span class="quotelev2">&gt;&gt;         drill down. 
</span><br>
<span class="quotelev2">&gt;&gt;         Let me use this and I will get back if any
</span><br>
<span class="quotelev2">&gt;&gt;         clarification/comment I have.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Regards-
</span><br>
<span class="quotelev2">&gt;&gt;         Raju 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On Sun, Mar 20, 2016 at 4:26 PM, Brice Goglin
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;Brice.Goglin_at_[hidden] &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             I just pushed a proposal, see
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="https://github.com/open-mpi/hwloc/issues/97">https://github.com/open-mpi/hwloc/issues/97</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Le 18/12/2015 20:45, Brice Goglin a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Yes, we're &quot;thinking&quot; about it. But there are open
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             questions as mentioned in the github issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             By the way, we wouldn't return NULL in case of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             non-physically-allocated buffer, but rather set the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             output nodeset to 0.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             You should comment on the issue directly, instead of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             replying here, otherwise your comments may get lost.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Le 18/12/2015 18:57, Rezaul Karim Raju a &#195;&#169;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Hi Brice, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Thanks for your time and nice explanation. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             I have looked at the issue with location return (the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             page proportion across multiple node &amp; physical
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             allocation). Are you thinking to add this function..?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Like if we think list of node or nodes where the array
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             is allocated (only if physically allocated otherwise
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             NULL) is it possible..? 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             I am looking for getting the physical location of data
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             allocated by OS default policy. Appreciate any better
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             idea and please share with me. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Best Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             - Raju    
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             On Tue, Dec 15, 2015 at 3:28 AM, Brice Goglin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             &lt;Brice.Goglin_at_[hidden] &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Le 15/12/2015 07:21, Brice Goglin a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 Le 15/12/2015 05:57, Rezaul Karim Raju a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 *OUTPUT: *
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 *Policy--&gt;* buffer(Array: A) *membind [default OS
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 binding] Policy is:= 1 [1 refers
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 to *HWLOC_MEMBIND_FIRSTTOUCH
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 &lt;<a href="https://www.open-mpi.org/projects/hwloc/doc/v1.11.1/a00083.php#ggac9764f79505775d06407b40f5e4661e8a979c7aa78dd32780858f30f47a72cca0">https://www.open-mpi.org/projects/hwloc/doc/v1.11.1/a00083.php#ggac9764f79505775d06407b40f5e4661e8a979c7aa78dd32780858f30f47a72cca0</a>&gt;*]*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 *Nodeset --&gt; *buffer(Array: A) bound to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 nodeset*0x000000ff *with contains*:*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 * *node #0 (OS index 0) with 8387047424 bytes of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 memory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                  node #1 (OS index 1) with 8471617536 bytes of memory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                  node #2 (OS index 2) with 8471621632 bytes of memory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                  node #3 (OS index 3) with 8471617536 bytes of memory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                  node #4 (OS index 4) with 8471621632 bytes of memory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                  node #5 (OS index 5) with 8471617536 bytes of memory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                  node #6 (OS index 6) with 8471621632 bytes of memory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                  node #7 (OS index 7) with 8471564288 bytes of memory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 *
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 *
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 *why it shows allocated memory is bound to all
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 available nodeset..? should it not be allocated
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 to a specific nodeset one ..?*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 *
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 *
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 Hello
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 You are confusing the &quot;binding&quot; and the &quot;actual
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 location&quot;. Your memory buffer isn't bound to a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 specific location by default. But Linux has to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 allocate it somewhere. So your buffer is &quot;located&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 in some node after the allocation, but it is not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 &quot;bound&quot; there (what get_area_membind returns)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 which means Linux could have allocated it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 somewhere else.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 hwloc cannot currently return the &quot;location&quot; of a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 memory buffer. I have been thinking about adding
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 this feature in the past, but it looks like you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 are the first actual user requesting this. We
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 could add something like
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 hwloc_get_last_memory_location(topology, input
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 buffer, outputnodeset)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 At least on Linux that's possible.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 For clarity, this is similar to the difference
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 between hwloc_get_cpubind() and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 hwloc_get_last_cpu_location(): A task always runs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 on a specific PU, even if it is not bound to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 anything specific PU.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 By the way, there is already an issue for this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 <a href="https://github.com/open-mpi/hwloc/issues/97">https://github.com/open-mpi/hwloc/issues/97</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Feel to comment there.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Brice
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 hwloc-users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 hwloc-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/12/1226.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/12/1226.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             ------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             RaJu, Rezaul Karim
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Graduate Student (PhD) | Computer Science | University
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             of Houston
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Research in High Performance Computing Tools  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Houston, Texas-77004
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         -- 
</span><br>
<span class="quotelev2">&gt;&gt;         ------------------------
</span><br>
<span class="quotelev2">&gt;&gt;         RaJu, Rezaul Karim
</span><br>
<span class="quotelev2">&gt;&gt;         Graduate Student (PhD) | Computer Science | University of
</span><br>
<span class="quotelev2">&gt;&gt;         Houston
</span><br>
<span class="quotelev2">&gt;&gt;         Research in High Performance Computing Tools  
</span><br>
<span class="quotelev2">&gt;&gt;         Houston, Texas-77004
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     ------------------------
</span><br>
<span class="quotelev1">&gt;     RaJu, Rezaul Karim
</span><br>
<span class="quotelev1">&gt;     Graduate Student (PhD) | Computer Science | University of Houston
</span><br>
<span class="quotelev1">&gt;     Research in High Performance Computing Tools  
</span><br>
<span class="quotelev1">&gt;     Houston, Texas-77004
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ------------------------
</span><br>
<span class="quotelev1">&gt; RaJu, Rezaul Karim
</span><br>
<span class="quotelev1">&gt; Graduate Student (PhD) | Computer Science | University of Houston
</span><br>
<span class="quotelev1">&gt; Research in High Performance Computing Tools  
</span><br>
<span class="quotelev1">&gt; Houston, Texas-77004
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1261/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1262.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>Previous message:</strong> <a href="1260.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>In reply to:</strong> <a href="1260.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1262.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>Reply:</strong> <a href="1262.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
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
