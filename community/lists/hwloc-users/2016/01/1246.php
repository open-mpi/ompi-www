<?
$subject_val = "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 27 03:34:51 2016" -->
<!-- isoreceived="20160127083451" -->
<!-- sent="Wed, 27 Jan 2016 09:34:48 +0100" -->
<!-- isosent="20160127083448" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated" -->
<!-- id="56A88128.8030301_at_inria.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAOQ1qztmpg1H69NUwS50oTYH_w0EJcPCezXh3d5V2Sth27yXjg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-01-27 03:34:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1247.php">Jianjun Wen: "[hwloc-users] lstopo hangs for centos 7"</a>
<li><strong>Previous message:</strong> <a href="1245.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>In reply to:</strong> <a href="1245.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/04/1260.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
get_area_membind() would return a full nodeset if you don't membind first.
<br>
<p>By the way, mydata_ptr is not a physical address, it's a virtual address.
<br>
<p>Brice
<br>
<p><p><p>Le 27/01/2016 02:23, Rezaul Karim Raju a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am interested to know about what 'hwloc_bind'  does beyond malloc()-
</span><br>
<span class="quotelev1">&gt; the OS call. 
</span><br>
<span class="quotelev1">&gt; If I do like this: 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         int mydata=11;
</span><br>
<span class="quotelev1">&gt; int * mydata_ptr;
</span><br>
<span class="quotelev1">&gt; *mydata_ptr = (int *)malloc(sizeof(int));  *
</span><br>
<span class="quotelev1">&gt; * *
</span><br>
<span class="quotelev1">&gt; *or,***
</span><br>
<span class="quotelev1">&gt; *       mydata_ptr = (int *) hwloc_alloc (topology, (sizeof(int)));*
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; *        mydata_ptr = &amp;mydata; *
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; and then call: 
</span><br>
<span class="quotelev1">&gt; *hwloc_get_area_membind_nodeset (*topology, *mydata_ptr,* sizeof(int),
</span><br>
<span class="quotelev1">&gt; *nodeset,* &amp;nodepolicy, flags); flags:= 0/1 process / thread   
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it gives me the all available nodesets.
</span><br>
<span class="quotelev1">&gt; According to Brice previous reply: hwloc (get_area_membind ) returns
</span><br>
<span class="quotelev1">&gt; once Linux could have allocated (bound) memory buffer (the physical
</span><br>
<span class="quotelev1">&gt; address I am sending as *mydata_ptr*). 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Is this something hwloc can only returns locations (&amp; corresponding
</span><br>
<span class="quotelev1">&gt; nodeset) once it is bound (*set_area_membind*) prior ..? *
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; Thank you in advance.
</span><br>
<span class="quotelev1">&gt; - Raju
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 18, 2015 at 11:57 AM, Rezaul Karim Raju
</span><br>
<span class="quotelev1">&gt; &lt;raju.cse.buet_at_[hidden] &lt;mailto:raju.cse.buet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi Brice, 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks for your time and nice explanation. 
</span><br>
<span class="quotelev1">&gt;     I have looked at the issue with location return (the page
</span><br>
<span class="quotelev1">&gt;     proportion across multiple node &amp; physical allocation). Are you
</span><br>
<span class="quotelev1">&gt;     thinking to add this function..? Like if we think list of node or
</span><br>
<span class="quotelev1">&gt;     nodes where the array is allocated (only if physically allocated
</span><br>
<span class="quotelev1">&gt;     otherwise NULL) is it possible..? 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I am looking for getting the physical location of data allocated
</span><br>
<span class="quotelev1">&gt;     by OS default policy. Appreciate any better idea and please share
</span><br>
<span class="quotelev1">&gt;     with me. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Best Regards,
</span><br>
<span class="quotelev1">&gt;     - Raju    
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Tue, Dec 15, 2015 at 3:28 AM, Brice Goglin
</span><br>
<span class="quotelev1">&gt;     &lt;Brice.Goglin_at_[hidden] &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Le 15/12/2015 07:21, Brice Goglin a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Le 15/12/2015 05:57, Rezaul Karim Raju a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         *OUTPUT: *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         *Policy--&gt;* buffer(Array: A) *membind [default OS binding]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Policy is:= 1 [1 refers to *HWLOC_MEMBIND_FIRSTTOUCH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &lt;<a href="https://www.open-mpi.org/projects/hwloc/doc/v1.11.1/a00083.php#ggac9764f79505775d06407b40f5e4661e8a979c7aa78dd32780858f30f47a72cca0">https://www.open-mpi.org/projects/hwloc/doc/v1.11.1/a00083.php#ggac9764f79505775d06407b40f5e4661e8a979c7aa78dd32780858f30f47a72cca0</a>&gt;*]*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         *Nodeset --&gt; *buffer(Array: A) bound to nodeset*0x000000ff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         *with contains*:*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         * *node #0 (OS index 0) with 8387047424 bytes of memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          node #1 (OS index 1) with 8471617536 bytes of memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          node #2 (OS index 2) with 8471621632 bytes of memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          node #3 (OS index 3) with 8471617536 bytes of memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          node #4 (OS index 4) with 8471621632 bytes of memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          node #5 (OS index 5) with 8471617536 bytes of memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          node #6 (OS index 6) with 8471621632 bytes of memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          node #7 (OS index 7) with 8471564288 bytes of memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         *why it shows allocated memory is bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         nodeset..? should it not be allocated to a specific nodeset
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         one ..?*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         *
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         You are confusing the &quot;binding&quot; and the &quot;actual location&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;         Your memory buffer isn't bound to a specific location by
</span><br>
<span class="quotelev2">&gt;&gt;         default. But Linux has to allocate it somewhere. So your
</span><br>
<span class="quotelev2">&gt;&gt;         buffer is &quot;located&quot; in some node after the allocation, but it
</span><br>
<span class="quotelev2">&gt;&gt;         is not &quot;bound&quot; there (what get_area_membind returns) which
</span><br>
<span class="quotelev2">&gt;&gt;         means Linux could have allocated it somewhere else.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         hwloc cannot currently return the &quot;location&quot; of a memory
</span><br>
<span class="quotelev2">&gt;&gt;         buffer. I have been thinking about adding this feature in the
</span><br>
<span class="quotelev2">&gt;&gt;         past, but it looks like you are the first actual user
</span><br>
<span class="quotelev2">&gt;&gt;         requesting this. We could add something like
</span><br>
<span class="quotelev2">&gt;&gt;         hwloc_get_last_memory_location(topology, input buffer,
</span><br>
<span class="quotelev2">&gt;&gt;         outputnodeset)
</span><br>
<span class="quotelev2">&gt;&gt;         At least on Linux that's possible.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         For clarity, this is similar to the difference between
</span><br>
<span class="quotelev2">&gt;&gt;         hwloc_get_cpubind() and hwloc_get_last_cpu_location(): A task
</span><br>
<span class="quotelev2">&gt;&gt;         always runs on a specific PU, even if it is not bound to
</span><br>
<span class="quotelev2">&gt;&gt;         anything specific PU.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         By the way, there is already an issue for this:
</span><br>
<span class="quotelev1">&gt;         <a href="https://github.com/open-mpi/hwloc/issues/97">https://github.com/open-mpi/hwloc/issues/97</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Feel to comment there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt;         hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         Subscription:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;         Link to this post:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/12/1226.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/12/1226.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1246/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1247.php">Jianjun Wen: "[hwloc-users] lstopo hangs for centos 7"</a>
<li><strong>Previous message:</strong> <a href="1245.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>In reply to:</strong> <a href="1245.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/04/1260.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
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
