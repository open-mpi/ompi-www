<?
$subject_val = "Re: [OMPI users] /dev/shm";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 19 10:14:45 2008" -->
<!-- isoreceived="20081119151445" -->
<!-- sent="Wed, 19 Nov 2008 08:14:38 -0700" -->
<!-- isosent="20081119151438" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] /dev/shm" -->
<!-- id="9A46CAA3-847C-42CF-838A-F43337720190_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49242B2F.4070301_at_aem.umn.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-19 10:14:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7344.php">François PELLEGRINI: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>Previous message:</strong> <a href="7342.php">John Hearns: "Re: [OMPI users] /dev/shm"</a>
<li><strong>In reply to:</strong> <a href="7341.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7348.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Reply:</strong> <a href="7348.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ray
<br>
<p>Are the jobs that leave files behind terminating normally or aborting?  
<br>
Are there any warnings/error messages out of mpirun?
<br>
<p>Just trying to determine if this is an abnormal termination issue or a  
<br>
bug in OMPI itself.
<br>
<p>Ralph
<br>
<p><p>On Nov 19, 2008, at 8:05 AM, Ray Muno wrote:
<br>
<p><span class="quotelev1">&gt; Thought I would revisit this one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are still having issues with this. It is not clear to me what is  
</span><br>
<span class="quotelev1">&gt; leaving the user files behind in /dev/shm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is not something users are doing directly, they are just  
</span><br>
<span class="quotelev1">&gt; compiling their code directly with mpif90 (from OpenMPI), using  
</span><br>
<span class="quotelev1">&gt; various compilers. Compilers in use are PGI, Intel, SunStudio and  
</span><br>
<span class="quotelev1">&gt; Pathscale.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like every job run leaves something behind in /dev/shm and  
</span><br>
<span class="quotelev1">&gt; it slowly fills up.   We are just clearing these out at this point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; That is odd.  Is your user's app crashing or being forcibly  
</span><br>
<span class="quotelev2">&gt;&gt; killed?  The ORTE daemon that is silently launched in v1.2 jobs  
</span><br>
<span class="quotelev2">&gt;&gt; should ensure that files under /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;userid&gt;@&lt;hostname&gt; are removed.
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 10, 2008, at 2:14 PM, Ray Muno wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brock Palen wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on most systems /dev/shm is limited to half the physical ram.   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Was the user someone filling up /dev/shm so there was no space?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem is there is a large collection of stale files left in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there by the users that have run on that node (Rocks based cluster).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to determine why they are left behind.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7344.php">François PELLEGRINI: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>Previous message:</strong> <a href="7342.php">John Hearns: "Re: [OMPI users] /dev/shm"</a>
<li><strong>In reply to:</strong> <a href="7341.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7348.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Reply:</strong> <a href="7348.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
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
