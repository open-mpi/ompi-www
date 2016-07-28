<?
$subject_val = "Re: [OMPI users] /dev/shm";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 14:30:37 2008" -->
<!-- isoreceived="20081110193037" -->
<!-- sent="Mon, 10 Nov 2008 14:30:18 -0500" -->
<!-- isosent="20081110193018" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] /dev/shm" -->
<!-- id="0A9A1E88-4834-4FBB-B9FC-C5CFFDBAD7A6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49188804.5030305_at_aem.umn.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] /dev/shm<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-10 14:30:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7265.php">Hodgess, Erin: "Re: [OMPI users] dual cores"</a>
<li><strong>Previous message:</strong> <a href="7263.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>In reply to:</strong> <a href="7260.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7267.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Reply:</strong> <a href="7267.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Reply:</strong> <a href="7341.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That is odd.  Is your user's app crashing or being forcibly killed?   
<br>
The ORTE daemon that is silently launched in v1.2 jobs should ensure  
<br>
that files under /tmp/openmpi-sessions-&lt;userid&gt;@&lt;hostname&gt; are removed.
<br>
<p><p>On Nov 10, 2008, at 2:14 PM, Ray Muno wrote:
<br>
<p><span class="quotelev1">&gt; Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt;&gt; on most systems /dev/shm is limited to half the physical ram.  Was  
</span><br>
<span class="quotelev2">&gt;&gt; the user someone filling up /dev/shm so there was no space?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is there is a large collection of stale files left in  
</span><br>
<span class="quotelev1">&gt; there by the users that have run on that node (Rocks based cluster).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to determine why they are left behind.
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ray Muno
</span><br>
<span class="quotelev1">&gt; University of Minnesota
</span><br>
<span class="quotelev1">&gt; Aerospace Engineering and Mechanics
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7265.php">Hodgess, Erin: "Re: [OMPI users] dual cores"</a>
<li><strong>Previous message:</strong> <a href="7263.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>In reply to:</strong> <a href="7260.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7267.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Reply:</strong> <a href="7267.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Reply:</strong> <a href="7341.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
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
