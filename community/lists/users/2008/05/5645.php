<?
$subject_val = "Re: [OMPI users] machines swapping in running job[Scanned]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 07:36:20 2008" -->
<!-- isoreceived="20080508113620" -->
<!-- sent="Thu, 8 May 2008 07:36:11 -0400" -->
<!-- isosent="20080508113611" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] machines swapping in running job[Scanned]" -->
<!-- id="A019DABE-62C7-40C4-B1EE-58A668F29586_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4821D3EE.1080709_at_ocf.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] machines swapping in running job[Scanned]<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-08 07:36:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5646.php">Mukesh K Srivastava: "[OMPI users] OpenMPI-v1.3.1 Tentatives dates release eversion"</a>
<li><strong>Previous message:</strong> <a href="5644.php">Jeff Squyres: "Re: [OMPI users] Leading /usr/lib64 in LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="5620.php">Arif Ali: "Re: [OMPI users] machines swapping in running job[Scanned]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 7, 2008, at 12:08 PM, Arif Ali wrote:
<br>
<p><span class="quotelev1">&gt; thanks, that's great, that worked
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; we are also using IBM machines (IBM x3455) but we are using the gcc
</span><br>
<span class="quotelev1">&gt; compiler that comes default with SLES 10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have successfully run the HPCC using values 2048, 4096 and 8192; I
</span><br>
<span class="quotelev1">&gt; have kept this now at 2048 and continue testing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it better if this value to be high or low?
</span><br>
<p>It depends.  :-)
<br>
<p>The purpose of this value is to limit how much memory Open MPI uses  
<br>
internally.  If you have lots of memory, setting it high shouldn't be  
<br>
a problem.  If you're memory-constrained, then setting it to a lower  
<br>
number would be good.  The best thing to do would be to check the  
<br>
overall performance of both values -- limiting OMPI's memory *can*  
<br>
impact performance if it introduces message passing stalls, etc.
<br>
<p>So it's unfortunately not a simple question to answer: it essentially  
<br>
is [can be] a tradeoff of space vs. time, and that very much depends  
<br>
on your specific hardware setup, the message passing patterns of your  
<br>
application, etc.
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
<li><strong>Next message:</strong> <a href="5646.php">Mukesh K Srivastava: "[OMPI users] OpenMPI-v1.3.1 Tentatives dates release eversion"</a>
<li><strong>Previous message:</strong> <a href="5644.php">Jeff Squyres: "Re: [OMPI users] Leading /usr/lib64 in LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="5620.php">Arif Ali: "Re: [OMPI users] machines swapping in running job[Scanned]"</a>
<!-- nextthread="start" -->
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
