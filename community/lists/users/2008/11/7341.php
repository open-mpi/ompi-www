<?
$subject_val = "Re: [OMPI users] /dev/shm";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 19 10:05:30 2008" -->
<!-- isoreceived="20081119150530" -->
<!-- sent="Wed, 19 Nov 2008 09:05:19 -0600" -->
<!-- isosent="20081119150519" -->
<!-- name="Ray Muno" -->
<!-- email="muno_at_[hidden]" -->
<!-- subject="Re: [OMPI users] /dev/shm" -->
<!-- id="49242B2F.4070301_at_aem.umn.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0A9A1E88-4834-4FBB-B9FC-C5CFFDBAD7A6_at_cisco.com" -->
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
<strong>From:</strong> Ray Muno (<em>muno_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-19 10:05:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7342.php">John Hearns: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Previous message:</strong> <a href="7340.php">Shiqing Fan: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>In reply to:</strong> <a href="7264.php">Jeff Squyres: "Re: [OMPI users] /dev/shm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7342.php">John Hearns: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Reply:</strong> <a href="7342.php">John Hearns: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Reply:</strong> <a href="7343.php">Ralph Castain: "Re: [OMPI users] /dev/shm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thought I would revisit this one.
<br>
<p>We are still having issues with this. It is not clear to me what is 
<br>
leaving the user files behind in /dev/shm.
<br>
<p>This is not something users are doing directly, they are just compiling 
<br>
their code directly with mpif90 (from OpenMPI), using various compilers. 
<br>
Compilers in use are PGI, Intel, SunStudio and Pathscale.
<br>
<p>It looks like every job run leaves something behind in /dev/shm and it 
<br>
slowly fills up.   We are just clearing these out at this point.
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; That is odd.  Is your user's app crashing or being forcibly killed?  The 
</span><br>
<span class="quotelev1">&gt; ORTE daemon that is silently launched in v1.2 jobs should ensure that 
</span><br>
<span class="quotelev1">&gt; files under /tmp/openmpi-sessions-&lt;userid&gt;@&lt;hostname&gt; are removed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 10, 2008, at 2:14 PM, Ray Muno wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on most systems /dev/shm is limited to half the physical ram.  Was 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the user someone filling up /dev/shm so there was no space?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem is there is a large collection of stale files left in 
</span><br>
<span class="quotelev2">&gt;&gt; there by the users that have run on that node (Rocks based cluster).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to determine why they are left behind.
</span><br>
<p><p><p><pre>
-- 
  Ray Muno
  University of Minnesota
  Aerospace Engineering and Mechanics
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7342.php">John Hearns: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Previous message:</strong> <a href="7340.php">Shiqing Fan: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>In reply to:</strong> <a href="7264.php">Jeff Squyres: "Re: [OMPI users] /dev/shm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7342.php">John Hearns: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Reply:</strong> <a href="7342.php">John Hearns: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Reply:</strong> <a href="7343.php">Ralph Castain: "Re: [OMPI users] /dev/shm"</a>
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
