<?
$subject_val = "Re: [OMPI users] /dev/shm";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 19 10:13:52 2008" -->
<!-- isoreceived="20081119151352" -->
<!-- sent="Wed, 19 Nov 2008 15:13:48 +0000" -->
<!-- isosent="20081119151348" -->
<!-- name="John Hearns" -->
<!-- email="hearnsj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] /dev/shm" -->
<!-- id="9f8092cc0811190713l3d7d337cvca390a0d14e86625_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> John Hearns (<em>hearnsj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-19 10:13:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7343.php">Ralph Castain: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Previous message:</strong> <a href="7341.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<li><strong>In reply to:</strong> <a href="7341.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7364.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Reply:</strong> <a href="7364.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2008/11/19 Ray Muno &lt;muno_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Thought I would revisit this one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are still having issues with this. It is not clear to me what is leaving
</span><br>
<span class="quotelev1">&gt; the user files behind in /dev/shm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is not something users are doing directly, they are just compiling
</span><br>
<span class="quotelev1">&gt; their code directly with mpif90 (from OpenMPI), using various compilers.
</span><br>
<span class="quotelev1">&gt; Compilers in use are PGI, Intel, SunStudio and Pathscale.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like every job run leaves something behind in /dev/shm and it
</span><br>
<span class="quotelev1">&gt; slowly fills up.   We are just clearing these out at this point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Could you not run ipcs with the -p flag every few minutes and try to figure
<br>
out what the processes are which are leaving these?
<br>
(by that I mean catch them when they are live, and the creating process is
<br>
still on the system)
<br>
<p>(Currently sitting in a training course on Performance Evaluation and Tuning
<br>
at SGI - so thinking on things like this)
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7342/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7343.php">Ralph Castain: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Previous message:</strong> <a href="7341.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<li><strong>In reply to:</strong> <a href="7341.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7364.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Reply:</strong> <a href="7364.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
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
