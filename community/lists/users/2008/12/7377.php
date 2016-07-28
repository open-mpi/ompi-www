<?
$subject_val = "Re: [OMPI users] Hybrid program";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  1 18:11:31 2008" -->
<!-- isoreceived="20081201231131" -->
<!-- sent="Mon, 1 Dec 2008 18:11:25 -0500" -->
<!-- isosent="20081201231125" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid program" -->
<!-- id="0C6AC14C-1A2B-4B8A-AB4F-7B420C7081FB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A4A8C9C8-E806-45EE-B665-F038C1ECE7AD_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-01 18:11:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7378.php">Gustavo Seabra: "Re: [OMPI users] openmpi-1.2.8 and cygwin..."</a>
<li><strong>Previous message:</strong> <a href="7376.php">Heitor Florido: "Re: [OMPI users] OpenMPI on a LAN"</a>
<li><strong>In reply to:</strong> <a href="../../2008/11/7352.php">Ralph Castain: "Re: [OMPI users] Hybrid program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7380.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Reply:</strong> <a href="7380.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 20, 2008, at 9:43 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Interesting - learn something new every day! :-)
</span><br>
<p>Sorry; I was out for the holiday last week, but a clarification:  
<br>
libnuma's man page says that numa_run_on_node*() binds a &quot;thread&quot;, but  
<br>
it really should say &quot;process&quot;.  I looked at the code, and they're  
<br>
simply implementing a wrapper around sched_setaffinity(), which is a  
<br>
per-process binding.  Not a per-thread binding.
<br>
<p><span class="quotelev1">&gt; On Nov 20, 2008, at 7:34 AM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if you look at recent versions of libnuma, there are two functions  
</span><br>
<span class="quotelev2">&gt;&gt; called numa_run_on_node() and numa_run_on_node_mask(), which allow  
</span><br>
<span class="quotelev2">&gt;&gt; thread-based assignments to CPUs....
</span><br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7378.php">Gustavo Seabra: "Re: [OMPI users] openmpi-1.2.8 and cygwin..."</a>
<li><strong>Previous message:</strong> <a href="7376.php">Heitor Florido: "Re: [OMPI users] OpenMPI on a LAN"</a>
<li><strong>In reply to:</strong> <a href="../../2008/11/7352.php">Ralph Castain: "Re: [OMPI users] Hybrid program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7380.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Reply:</strong> <a href="7380.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
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
