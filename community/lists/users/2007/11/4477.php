<?
$subject_val = "Re: [OMPI users] Error on running large number of processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 15 10:01:18 2007" -->
<!-- isoreceived="20071115150118" -->
<!-- sent="Thu, 15 Nov 2007 07:01:12 -0800" -->
<!-- isosent="20071115150112" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error on running large number of processes" -->
<!-- id="4121DD33-046D-4C32-A4BB-850A1FD023DC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="473C5915.4020501_at_infotech.monash.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error on running large number of processes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-15 10:01:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4478.php">Clement Kam Man Chu: "Re: [OMPI users] Tmpdir work for first process only"</a>
<li><strong>Previous message:</strong> <a href="4476.php">Jeff Squyres: "Re: [OMPI users] Tmpdir work for first process only"</a>
<li><strong>In reply to:</strong> <a href="4475.php">Clement Kam Man Chu: "[OMPI users] Error on running large number of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4483.php">Pak Lui: "Re: [OMPI users] Error on running large number of processes"</a>
<li><strong>Reply:</strong> <a href="4483.php">Pak Lui: "Re: [OMPI users] Error on running large number of processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My guess is that this is similar to the last post: you are  
<br>
oversubscribing the nodes so heavily that the OS is running out of  
<br>
some resources (perhaps regular or registered memory?) such that Open  
<br>
MPI is unable to setup its network transport layers properly.
<br>
<p><p>On Nov 15, 2007, at 6:35 AM, Clement Kam Man Chu wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    I am using openmpi 1.2.3 under ia64 machine and uses pbs job
</span><br>
<span class="quotelev1">&gt; scheduler.  I can successfully run 100 processes on 16 cpus, but I got
</span><br>
<span class="quotelev1">&gt; an error If run 200 processes on the same number of cpus.  The error  
</span><br>
<span class="quotelev1">&gt; is :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  PML add procs failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Temporarily out of resource&quot; (-3) instead of  
</span><br>
<span class="quotelev1">&gt; &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Clement
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Clement Kam Man Chu
</span><br>
<span class="quotelev1">&gt; Research Assistant
</span><br>
<span class="quotelev1">&gt; Faculty of Information Technology
</span><br>
<span class="quotelev1">&gt; Monash University, Caulfield Campus
</span><br>
<span class="quotelev1">&gt; Ph: 61 3 9903 2355
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="4478.php">Clement Kam Man Chu: "Re: [OMPI users] Tmpdir work for first process only"</a>
<li><strong>Previous message:</strong> <a href="4476.php">Jeff Squyres: "Re: [OMPI users] Tmpdir work for first process only"</a>
<li><strong>In reply to:</strong> <a href="4475.php">Clement Kam Man Chu: "[OMPI users] Error on running large number of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4483.php">Pak Lui: "Re: [OMPI users] Error on running large number of processes"</a>
<li><strong>Reply:</strong> <a href="4483.php">Pak Lui: "Re: [OMPI users] Error on running large number of processes"</a>
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
