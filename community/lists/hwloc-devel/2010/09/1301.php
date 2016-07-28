<?
$subject_val = "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 16 11:03:44 2010" -->
<!-- isoreceived="20100916150344" -->
<!-- sent="Thu, 16 Sep 2010 17:03:48 +0200" -->
<!-- isosent="20100916150348" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch" -->
<!-- id="4C9231D4.9090308_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C922292.4040206_at_au1.ibm.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-16 11:03:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1302.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Previous message:</strong> <a href="1300.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Maybe in reply to:</strong> <a href="1289.php">Alexey Kardashevskiy: "[hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1322.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(replying to Alexey's mail which got rejected from the list)
<br>
<p><p>Le 16/09/2010 15:58, Alexey Kardashevskiy a &#233;crit :
<br>
<span class="quotelev1">&gt; On 16/09/10 21:58, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Le 16/09/2010 13:52, Alexey Kardashevskiy a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 16/09/10 20:50, Brice Goglin wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; We'll likely apply it, we just need to figure out where to put it if
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; it's reusable for AIX.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Good! And what is about messages coming twice in this maillist? Am I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the only person who experiences that? :)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      
</span><br>
<span class="quotelev2">&gt; &gt; I thought it was my mailer replying to both you and the mailing list,
</span><br>
<span class="quotelev2">&gt; &gt; but you were actually subscribed twice, I just fixed this.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; The attached patch should do what you need for sparse numa number
</span><br>
<span class="quotelev2">&gt; &gt; properly. I had to rework the code a bit because my local tests with
</span><br>
<span class="quotelev2">&gt; &gt; fake topologies reported numa nodes out of order, causing the distance
</span><br>
<span class="quotelev2">&gt; &gt; matrix to be misordered. So I am now placing all node indexes in the
</span><br>
<span class="quotelev2">&gt; &gt; cpuset, then I fill the index array by reading the cpuset in order, and
</span><br>
<span class="quotelev2">&gt; &gt; then I read distances from sysfs. Could you confirm that it works for
</span><br>
<span class="quotelev2">&gt; &gt; you too?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, it works just fine:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Ok thanks for testing so quickly, I just pushed this part to SVN.
<br>
<p>Brice
<br>
<p><p><span class="quotelev1">&gt; numa distance indexes:  0 1 4 5 8 9 12 13
</span><br>
<span class="quotelev1">&gt; os node 0 has cpuset 0xffffffff
</span><br>
<span class="quotelev1">&gt; os node 1 has cpuset 0xffffffff,0x0
</span><br>
<span class="quotelev1">&gt; os node 4 has cpuset 0xffffffff,,0x0
</span><br>
<span class="quotelev1">&gt; os node 5 has cpuset 0xffffffff,,,0x0
</span><br>
<span class="quotelev1">&gt; os node 8 has cpuset 0xffffffff,,,,0x0
</span><br>
<span class="quotelev1">&gt; os node 9 has cpuset 0xffffffff,,,,,0x0
</span><br>
<span class="quotelev1">&gt; os node 12 has cpuset 0xffffffff,,,,,,0x0
</span><br>
<span class="quotelev1">&gt; os node 13 has cpuset 0xffffffff,,,,,,,0x0
</span><br>
<span class="quotelev1">&gt; node distance matrix:
</span><br>
<span class="quotelev1">&gt;       0   1   4   5   8   9  12  13
</span><br>
<span class="quotelev1">&gt;   0  10  20  40  40  40  40  40  40
</span><br>
<span class="quotelev1">&gt;   1  20  10  40  40  40  40  40  40
</span><br>
<span class="quotelev1">&gt;   4  40  40  10  20  40  40  40  40
</span><br>
<span class="quotelev1">&gt;   5  40  40  20  10  40  40  40  40
</span><br>
<span class="quotelev1">&gt;   8  40  40  40  40  10  20  40  40
</span><br>
<span class="quotelev1">&gt;   9  40  40  40  40  20  10  40  40
</span><br>
<span class="quotelev1">&gt;  12  40  40  40  40  40  40  10  20
</span><br>
<span class="quotelev1">&gt;  13  40  40  40  40  40  40  20  10
</span><br>
<span class="quotelev1">&gt; trying to group NUMANode objects into misc objects according to physical 
</span><br>
<span class="quotelev1">&gt; distances
</span><br>
<span class="quotelev1">&gt; found minimal distance 20 between objects
</span><br>
<span class="quotelev1">&gt; object 1 is minimally connected to 0
</span><br>
<span class="quotelev1">&gt; found transitive graph with 2 objects with minimal distance 20
</span><br>
<span class="quotelev1">&gt; object 3 is minimally connected to 2
</span><br>
<span class="quotelev1">&gt; found transitive graph with 2 objects with minimal distance 20
</span><br>
<span class="quotelev1">&gt; object 5 is minimally connected to 4
</span><br>
<span class="quotelev1">&gt; found transitive graph with 2 objects with minimal distance 20
</span><br>
<span class="quotelev1">&gt; object 7 is minimally connected to 6
</span><br>
<span class="quotelev1">&gt; found transitive graph with 2 objects with minimal distance 20
</span><br>
<span class="quotelev1">&gt; adding misc object with 2 objects and cpuset 0xffffffff,0xffffffff
</span><br>
<span class="quotelev1">&gt; adding misc object with 2 objects and cpuset 0xffffffff,0xffffffff,,0x0
</span><br>
<span class="quotelev1">&gt; adding misc object with 2 objects and cpuset 0xffffffff,0xffffffff,,,,0x0
</span><br>
<span class="quotelev1">&gt; adding misc object with 2 objects and cpuset 0xffffffff,0xffffffff,,,,,,0x0
</span><br>
<span class="quotelev1">&gt; group distances:
</span><br>
<span class="quotelev1">&gt; 15 40 40 40
</span><br>
<span class="quotelev1">&gt; 40 15 40 40
</span><br>
<span class="quotelev1">&gt; 40 40 15 40
</span><br>
<span class="quotelev1">&gt; 40 40 40 15
</span><br>
<span class="quotelev1">&gt; trying to group Group objects into misc objects according to physical 
</span><br>
<span class="quotelev1">&gt; distances
</span><br>
<span class="quotelev1">&gt; found minimal distance 40 between objects
</span><br>
<span class="quotelev1">&gt; object 1 is minimally connected to 0
</span><br>
<span class="quotelev1">&gt; object 2 is minimally connected to 0
</span><br>
<span class="quotelev1">&gt; object 3 is minimally connected to 0
</span><br>
<span class="quotelev1">&gt; found transitive graph with 4 objects with minimal distance 40
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1302.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Previous message:</strong> <a href="1300.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Maybe in reply to:</strong> <a href="1289.php">Alexey Kardashevskiy: "[hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1322.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
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
