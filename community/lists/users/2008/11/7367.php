<?
$subject_val = "Re: [OMPI users] infiniband problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 21 15:58:11 2008" -->
<!-- isoreceived="20081121205811" -->
<!-- sent="Fri, 21 Nov 2008 15:58:05 -0500" -->
<!-- isosent="20081121205805" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] infiniband problem" -->
<!-- id="39ECA5F1-E667-46F3-BE2A-A4BFB2FCF006_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4925D398.2050509_at_tu-berlin.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] infiniband problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-21 15:58:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7368.php">Pavel Shamis (Pasha): "Re: [OMPI users] infiniband problem"</a>
<li><strong>Previous message:</strong> <a href="7366.php">John Hearns: "Re: [OMPI users] /dev/shm"</a>
<li><strong>In reply to:</strong> <a href="7363.php">Michael Oevermann: "Re: [OMPI users] infiniband problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 20, 2008, at 4:16 PM, Michael Oevermann wrote:
<br>
<p><span class="quotelev1">&gt; with a blank behind /machine. Anyway, your suggested options -mca  
</span><br>
<span class="quotelev1">&gt; btl openib,sm,self
</span><br>
<span class="quotelev1">&gt; did help!!!
</span><br>
<p>The specific tip here is that on Linux, you want to use the openib  
<br>
BTL, not the udapl BTL.  Specifying &quot;--mca btl openib,sm,self&quot; means  
<br>
that Open MPI will use those 3 BTLs instead of attempting to auto- 
<br>
select (apparently the auto-selection will include udapl).
<br>
<p>Since you never want to use udapl on Linux, it's safe to entirely  
<br>
remove it from the system:
<br>
<p>&nbsp;&nbsp;&nbsp;cd /where/you/installed/ompi
<br>
&nbsp;&nbsp;&nbsp;cd lib/openmpi
<br>
&nbsp;&nbsp;&nbsp;rm *udapl*
<br>
<p>Then you won't need to include &quot;--mca btl openib,sm,self&quot; on the  
<br>
command line any more.
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
<li><strong>Next message:</strong> <a href="7368.php">Pavel Shamis (Pasha): "Re: [OMPI users] infiniband problem"</a>
<li><strong>Previous message:</strong> <a href="7366.php">John Hearns: "Re: [OMPI users] /dev/shm"</a>
<li><strong>In reply to:</strong> <a href="7363.php">Michael Oevermann: "Re: [OMPI users] infiniband problem"</a>
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
