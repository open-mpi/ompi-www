<?
$subject_val = "Re: [OMPI users] Question about compatibility issues";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  1 06:28:24 2009" -->
<!-- isoreceived="20090201112824" -->
<!-- sent="Sun, 1 Feb 2009 06:28:18 -0500" -->
<!-- isosent="20090201112818" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about compatibility issues" -->
<!-- id="FE45DA0C-52ED-4742-B38B-88E00E239A05_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="110737.10892.qm_at_web82706.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-01 06:28:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7915.php">Jeff Squyres: "Re: [OMPI users] Compilers"</a>
<li><strong>Previous message:</strong> <a href="7913.php">Jeff Squyres: "Re: [OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7852.php">Ted Yu: "Re: [OMPI users] Question about compatibility issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7922.php">Ted Yu: "Re: [OMPI users] Question about compatibility issues"</a>
<li><strong>Reply:</strong> <a href="7922.php">Ted Yu: "Re: [OMPI users] Question about compatibility issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 26, 2009, at 4:57 PM, Ted Yu wrote:
<br>
<p><span class="quotelev1">&gt; I'm new to this group.  I'm trying to implement a parallel quantum  
</span><br>
<span class="quotelev1">&gt; code called &quot;Seqquest&quot;.
</span><br>
<span class="quotelev1">&gt; I'm trying to figure out why there is an error in the implementation  
</span><br>
<span class="quotelev1">&gt; of this code where there is an error:
</span><br>
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
<span class="quotelev1">&gt; [2] func:/project/source/seqquest/seqquest_source_v261i/ 
</span><br>
<span class="quotelev1">&gt; hive_CentOS4.5_parallel/build_261i/quest_ompi.x [0x4f5cfd]
</span><br>
<span class="quotelev1">&gt; [3] func:/project/source/seqquest/seqquest_source_v261i/ 
</span><br>
<span class="quotelev1">&gt; hive_CentOS4.5_parallel/build_261i/quest_ompi.x(rhosave_+0x120)  
</span><br>
<span class="quotelev1">&gt; [0x4f6a8a]
</span><br>
<span class="quotelev1">&gt; [4] func:/project/source/seqquest/seqquest_source_v261i/ 
</span><br>
<span class="quotelev1">&gt; hive_CentOS4.5_parallel/build_261i/quest_ompi.x(MAIN__+0xb710)  
</span><br>
<span class="quotelev1">&gt; [0x431770]
</span><br>
<span class="quotelev1">&gt; [5] func:/project/source/seqquest/seqquest_source_v261i/ 
</span><br>
<span class="quotelev1">&gt; hive_CentOS4.5_parallel/build_261i/quest_ompi.x(main+0xe) [0xa717ee]
</span><br>
<span class="quotelev1">&gt; [6] func:/lib64/tls/libc.so.6(__libc_start_main+0xdb) [0x393b11c3fb]
</span><br>
<span class="quotelev1">&gt; [7] func:/project/source/seqquest/seqquest_source_v261i/ 
</span><br>
<span class="quotelev1">&gt; hive_CentOS4.5_parallel/build_261i/quest_ompi.x(free+0x3a) [0x425fca]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; ^@mpiexec: Warning: task 0 died with signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Trying to debug this code, I noticed that the math library is an  
</span><br>
<span class="quotelev1">&gt; Intel math library, but all of the codes including scalapack and  
</span><br>
<span class="quotelev1">&gt; blacs were compiled using GNU compiler.  Will there be compatibility  
</span><br>
<span class="quotelev1">&gt; issues?
</span><br>
<p><p>There *could* be.  Have you tried to compile everything with the GNU  
<br>
compiler?
<br>
<p>You might also try to examine what exactly in free() is going bad --  
<br>
are you passing a bad address to free?  Can you run the code through a  
<br>
debugger and/or examine corefiles?
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
<li><strong>Next message:</strong> <a href="7915.php">Jeff Squyres: "Re: [OMPI users] Compilers"</a>
<li><strong>Previous message:</strong> <a href="7913.php">Jeff Squyres: "Re: [OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7852.php">Ted Yu: "Re: [OMPI users] Question about compatibility issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7922.php">Ted Yu: "Re: [OMPI users] Question about compatibility issues"</a>
<li><strong>Reply:</strong> <a href="7922.php">Ted Yu: "Re: [OMPI users] Question about compatibility issues"</a>
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
