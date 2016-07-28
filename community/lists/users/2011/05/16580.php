<?
$subject_val = "Re: [OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 21:23:00 2011" -->
<!-- isoreceived="20110520012300" -->
<!-- sent="Thu, 19 May 2011 21:22:48 -0400" -->
<!-- isosent="20110520012248" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup" -->
<!-- id="278274F0-BF00-4498-950F-9779E0083C5A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BAY149-w61CF414E9D3384C26A9E10EC8E0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-19 21:22:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16581.php">Jeff Squyres: "Re: [OMPI users] Error: Entry Point Not Found"</a>
<li><strong>Previous message:</strong> <a href="16579.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test"</a>
<li><strong>In reply to:</strong> <a href="16568.php">Jason Mackay: "[OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16598.php">Jason Mackay: "Re: [OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, our Windows guy (Shiqing) is off getting married and will be out for a little while.  :-(
<br>
<p>All that I can cite is the README.WINDOWS.txt file in the top-level directory.  I'm afraid that I don't know much else about Windows.  :-(
<br>
<p><p>On May 18, 2011, at 8:17 PM, Jason Mackay wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; My thanks to all those involved for putting together this Windows binary release of OpenMPI!  I am hoping to use it in a small Windows based OpenMPI cluster at home.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Unfortunately my experience so far has not exactly been trouble free.  It seems that, due to the fact that this release is using WMI, there are a number of settings that must be configured on the machines in order to get this to work. These settings are not documented in the distribution at all. I have been experimenting with it for over a week on and off and as soon as I solve one problem, another one arises.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Currently, after much searching, reading, and tinkering with DCOM settings etc..., I can remotely start processes on all my machines using mpirun but those processes cannot access network shares (e.g. for binary distribution) and HPL (which works on any one node) does not seem to work if I run it across multiple nodes, also indicating a network issue (CPU sits at 100% in all processes with no network traffic and never terminates). To eliminate premission issues that may be caused by UAC I tried the same setup on two domain machines using an administrative account to launch and the behavior was the same. I have read that WMI processes cannot access network resources and I am at a loss for a solution to this newest of problems. If anyone knows how to make this work I would appreciate the help. I assume that someone has gotten this working and has the answers.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I have searched the mailing list archives and I found other users with similar problems but no clear guidance on the threads. Some threads make references to Microsoft KB articles but do not explicitly tell the user what needs to be done, leaving each new user to rediscover the tricks on their own. One thread made it appear that testing had only been done on Windows XP. Needless to say, security has changed dramatically in Windows since XP!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I would like to see OpenMPI for Windows be usable by a newcomer without all of this pain.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; What would be fantastic would be:
</span><br>
<span class="quotelev1">&gt; 1) a step-by-step procedure for how to get OpenMPI 1.5 working on Windows
</span><br>
<span class="quotelev1">&gt;       a) preferably in a bare Windows 7 workgroup environment with nothing else (i.e. no Microsoft Cluster Compute Pack, no domain etc...)
</span><br>
<span class="quotelev1">&gt; 2) inclusion of these steps in the binary distribution
</span><br>
<span class="quotelev1">&gt; 3) bonus points for a script which accomplishes these things automatically
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; If someone can help with (1), I would happily volunteer my time to work on (3).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Jason
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16581.php">Jeff Squyres: "Re: [OMPI users] Error: Entry Point Not Found"</a>
<li><strong>Previous message:</strong> <a href="16579.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test"</a>
<li><strong>In reply to:</strong> <a href="16568.php">Jason Mackay: "[OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16598.php">Jason Mackay: "Re: [OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup"</a>
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
