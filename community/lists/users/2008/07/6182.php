<?
$subject_val = "Re: [OMPI users] TCP Latency";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 07:57:42 2008" -->
<!-- isoreceived="20080729115742" -->
<!-- sent="Tue, 29 Jul 2008 07:57:37 -0400" -->
<!-- isosent="20080729115737" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] TCP Latency" -->
<!-- id="07133EA8-204B-429E-9AB5-01572C92058E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="350E3691-B460-4C08-9911-BD6F253E4EAB_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] TCP Latency<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-29 07:57:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6183.php">Jeff Squyres: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>Previous message:</strong> <a href="6181.php">Jeff Squyres: "Re: [OMPI users] TCP Latency"</a>
<li><strong>In reply to:</strong> <a href="6178.php">George Bosilca: "Re: [OMPI users] TCP Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6181.php">Jeff Squyres: "Re: [OMPI users] TCP Latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 29, 2008, at 6:01 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I just want to make sure that I correctly understand your statement.  
</span><br>
<span class="quotelev1">&gt; You're saying that running NetPIPE (NPtcp) directly over TCP give  
</span><br>
<span class="quotelev1">&gt; you a latency of 12us, but running NetPIPE (NPmpi) over Open MPI  
</span><br>
<span class="quotelev1">&gt; bring this latency up to 45us ?
</span><br>
<p>That does sound pretty fishy.
<br>
<p>IIRC, Chelsio NICs have two modes of operation: &quot;normal&quot; and offload.   
<br>
Are you using the normal mode of operation (i.e., go through the  
<br>
normal Linux kernel TCP stack, etc. -- just like any other TCP/ 
<br>
ethernet NIC) or are you using the offload mode, where OS bypass is  
<br>
used and all TCP processing is done on the NIC itself?  I have not  
<br>
done any testing myself, but I suspect that there could be a large  
<br>
difference in latency between the two.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6183.php">Jeff Squyres: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>Previous message:</strong> <a href="6181.php">Jeff Squyres: "Re: [OMPI users] TCP Latency"</a>
<li><strong>In reply to:</strong> <a href="6178.php">George Bosilca: "Re: [OMPI users] TCP Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6181.php">Jeff Squyres: "Re: [OMPI users] TCP Latency"</a>
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
