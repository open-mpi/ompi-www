<?
$subject_val = "Re: [OMPI users] Question about compatibility issues";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 16:57:53 2009" -->
<!-- isoreceived="20090126215753" -->
<!-- sent="Mon, 26 Jan 2009 13:57:49 -0800 (PST)" -->
<!-- isosent="20090126215749" -->
<!-- name="Ted Yu" -->
<!-- email="tedhyu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about compatibility issues" -->
<!-- id="110737.10892.qm_at_web82706.mail.mud.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Question about compatibility issues" -->
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
<strong>Date:</strong> 2009-01-26 16:57:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7853.php">Samuel Sarholz: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Previous message:</strong> <a href="7851.php">Joe Griffin: "Re: [OMPI users] Cannot compile on Linux Itanium system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7914.php">Jeff Squyres: "Re: [OMPI users] Question about compatibility issues"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7914.php">Jeff Squyres: "Re: [OMPI users] Question about compatibility issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi:
<br>
<p>I'm new to this group.&#160; I'm trying to implement a parallel quantum code called &quot;Seqquest&quot;. 
<br>
I'm trying to figure out why there is an error in the implementation of this code where there is an error:
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This job has allocated 2 cpus
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:(nil)
<br>
[0] func:/usr/lib64/openmpi/libopal.so.0 [0x393af21dc5]
<br>
[1] func:/lib64/tls/libpthread.so.0 [0x393b80c4f0]
<br>
[2] func:/project/source/seqquest/seqquest_source_v261i/hive_CentOS4.5_parallel/build_261i/quest_ompi.x [0x4f5cfd]
<br>
[3] func:/project/source/seqquest/seqquest_source_v261i/hive_CentOS4.5_parallel/build_261i/quest_ompi.x(rhosave_+0x120) [0x4f6a8a]
<br>
[4] func:/project/source/seqquest/seqquest_source_v261i/hive_CentOS4.5_parallel/build_261i/quest_ompi.x(MAIN__+0xb710) [0x431770]
<br>
[5] func:/project/source/seqquest/seqquest_source_v261i/hive_CentOS4.5_parallel/build_261i/quest_ompi.x(main+0xe) [0xa717ee]
<br>
[6] func:/lib64/tls/libc.so.6(__libc_start_main+0xdb) [0x393b11c3fb]
<br>
[7]
<br>
&nbsp;func:/project/source/seqquest/seqquest_source_v261i/hive_CentOS4.5_parallel/build_261i/quest_ompi.x(free+0x3a) [0x425fca]
<br>
*** End of error message ***
<br>
^@mpiexec: Warning: task 0 died with signal 11 (Segmentation fault).
<br>
<p><p>Trying to debug this code, I noticed that the math library is an Intel math library, but all of the codes including scalapack and blacs were compiled using GNU compiler.&#160; Will there be compatibility issues?&#160; 
<br>
<p>Ted
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


      
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7852/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7853.php">Samuel Sarholz: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Previous message:</strong> <a href="7851.php">Joe Griffin: "Re: [OMPI users] Cannot compile on Linux Itanium system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7914.php">Jeff Squyres: "Re: [OMPI users] Question about compatibility issues"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7914.php">Jeff Squyres: "Re: [OMPI users] Question about compatibility issues"</a>
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
