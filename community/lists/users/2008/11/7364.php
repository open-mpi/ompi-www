<?
$subject_val = "Re: [OMPI users] /dev/shm";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 20 16:22:38 2008" -->
<!-- isoreceived="20081120212238" -->
<!-- sent="Thu, 20 Nov 2008 15:22:32 -0600" -->
<!-- isosent="20081120212232" -->
<!-- name="Ray Muno" -->
<!-- email="muno_at_[hidden]" -->
<!-- subject="Re: [OMPI users] /dev/shm" -->
<!-- id="4925D518.8030205_at_aem.umn.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9f8092cc0811190713l3d7d337cvca390a0d14e86625_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-11-20 16:22:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7365.php">Tim Mattox: "Re: [OMPI users] infiniband problem"</a>
<li><strong>Previous message:</strong> <a href="7363.php">Michael Oevermann: "Re: [OMPI users] infiniband problem"</a>
<li><strong>In reply to:</strong> <a href="7342.php">John Hearns: "Re: [OMPI users] /dev/shm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7366.php">John Hearns: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Reply:</strong> <a href="7366.php">John Hearns: "Re: [OMPI users] /dev/shm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
John Hearns wrote:
<br>
<span class="quotelev1">&gt; 2008/11/19 Ray Muno &lt;muno_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thought I would revisit this one.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We are still having issues with this. It is not clear to me what is leaving
</span><br>
<span class="quotelev2">&gt;&gt; the user files behind in /dev/shm.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is not something users are doing directly, they are just compiling
</span><br>
<span class="quotelev2">&gt;&gt; their code directly with mpif90 (from OpenMPI), using various compilers.
</span><br>
<span class="quotelev2">&gt;&gt; Compilers in use are PGI, Intel, SunStudio and Pathscale.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like every job run leaves something behind in /dev/shm and it
</span><br>
<span class="quotelev2">&gt;&gt; slowly fills up.   We are just clearing these out at this point.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you not run ipcs with the -p flag every few minutes and try to figure
</span><br>
<span class="quotelev1">&gt; out what the processes are which are leaving these?
</span><br>
<span class="quotelev1">&gt; (by that I mean catch them when they are live, and the creating process is
</span><br>
<span class="quotelev1">&gt; still on the system)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>OK, what should I be seeing when I run &quot;ipcs -p&quot;?
<br>
<p>I have a set of nodes that has a user job running on it. It wrote a file 
<br>
in /dev/shm when it started.  The job is still running.
<br>
<p>I see....
<br>
<p># ipcs -p
<br>
<p>------ Shared Memory Creator/Last-op --------
<br>
shmid      owner      cpid       lpid
<br>
<p><p>------ Message Queues PIDs --------
<br>
msqid      owner      lspid      lrpid
<br>
<p><p><p><p><pre>
-- 
  Ray Muno
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7365.php">Tim Mattox: "Re: [OMPI users] infiniband problem"</a>
<li><strong>Previous message:</strong> <a href="7363.php">Michael Oevermann: "Re: [OMPI users] infiniband problem"</a>
<li><strong>In reply to:</strong> <a href="7342.php">John Hearns: "Re: [OMPI users] /dev/shm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7366.php">John Hearns: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Reply:</strong> <a href="7366.php">John Hearns: "Re: [OMPI users] /dev/shm"</a>
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
