<?
$subject_val = "Re: [OMPI users] Question about compatibility issues";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  1 11:28:30 2009" -->
<!-- isoreceived="20090201162830" -->
<!-- sent="Sun, 1 Feb 2009 08:28:25 -0800 (PST)" -->
<!-- isosent="20090201162825" -->
<!-- name="Ted Yu" -->
<!-- email="tedhyu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about compatibility issues" -->
<!-- id="843125.25665.qm_at_web82706.mail.mud.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FE45DA0C-52ED-4742-B38B-88E00E239A05_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about compatibility issues<br>
<strong>From:</strong> Ted Yu (<em>tedhyu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-01 11:28:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7923.php">Reuti: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>Previous message:</strong> <a href="7921.php">Sangamesh B: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>In reply to:</strong> <a href="7914.php">Jeff Squyres: "Re: [OMPI users] Question about compatibility issues"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanx for the info.&#160; It turned out to be a problem with the software, and not an open-mpi issue.
<br>
<p>Ted
<br>
<p>--- On Sun, 2/1/09, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Question about compatibility issues
<br>
To: tedhyu_at_[hidden], &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Sunday, February 1, 2009, 3:28 AM
<br>
<p>On Jan 26, 2009, at 4:57 PM, Ted Yu wrote:
<br>
<p><span class="quotelev1">&gt; I'm new to this group.  I'm trying to implement a parallel quantum
</span><br>
code called &quot;Seqquest&quot;.
<br>
<span class="quotelev1">&gt; I'm trying to figure out why there is an error in the implementation
</span><br>
of this code where there is an error:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This job has allocated 2 cpus
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:(nil)
</span><br>
<span class="quotelev1">&gt; [0] func:/usr/lib64/openmpi/libopal.so.0 [0x393af21dc5]
</span><br>
<span class="quotelev1">&gt; [1] func:/lib64/tls/libpthread.so.0 [0x393b80c4f0]
</span><br>
<span class="quotelev1">&gt; [2]
</span><br>
func:/project/source/seqquest/seqquest_source_v261i/hive_CentOS4.5_parallel/build_261i/quest_ompi.x
<br>
[0x4f5cfd]
<br>
<span class="quotelev1">&gt; [3]
</span><br>
func:/project/source/seqquest/seqquest_source_v261i/hive_CentOS4.5_parallel/build_261i/quest_ompi.x(rhosave_+0x120)
<br>
[0x4f6a8a]
<br>
<span class="quotelev1">&gt; [4]
</span><br>
func:/project/source/seqquest/seqquest_source_v261i/hive_CentOS4.5_parallel/build_261i/quest_ompi.x(MAIN__+0xb710)
<br>
[0x431770]
<br>
<span class="quotelev1">&gt; [5]
</span><br>
func:/project/source/seqquest/seqquest_source_v261i/hive_CentOS4.5_parallel/build_261i/quest_ompi.x(main+0xe)
<br>
[0xa717ee]
<br>
<span class="quotelev1">&gt; [6] func:/lib64/tls/libc.so.6(__libc_start_main+0xdb) [0x393b11c3fb]
</span><br>
<span class="quotelev1">&gt; [7]
</span><br>
func:/project/source/seqquest/seqquest_source_v261i/hive_CentOS4.5_parallel/build_261i/quest_ompi.x(free+0x3a)
<br>
[0x425fca]
<br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; ^@mpiexec: Warning: task 0 died with signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Trying to debug this code, I noticed that the math library is an Intel
</span><br>
math library, but all of the codes including scalapack and blacs were compiled
<br>
using GNU compiler.  Will there be compatibility issues?
<br>
<p><p>There *could* be.  Have you tried to compile everything with the GNU compiler?
<br>
<p>You might also try to examine what exactly in free() is going bad -- are you
<br>
passing a bad address to free?  Can you run the code through a debugger and/or
<br>
examine corefiles?
<br>
<p>--Jeff Squyres
<br>
Cisco Systems
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7922/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7923.php">Reuti: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>Previous message:</strong> <a href="7921.php">Sangamesh B: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>In reply to:</strong> <a href="7914.php">Jeff Squyres: "Re: [OMPI users] Question about compatibility issues"</a>
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
