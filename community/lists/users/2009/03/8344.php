<?
$subject_val = "Re: [OMPI users] &quot;casual&quot; error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 18:23:57 2009" -->
<!-- isoreceived="20090305232357" -->
<!-- sent="Thu, 5 Mar 2009 18:23:50 -0500" -->
<!-- isosent="20090305232350" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;casual&amp;quot; error" -->
<!-- id="8CCF2415-9262-45FC-8A66-B0233429E80B_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49B05428.4050206_at_swansea.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;casual&quot; error<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 18:23:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8345.php">Biagio Lucini: "Re: [OMPI users] &quot;casual&quot; error"</a>
<li><strong>Previous message:</strong> <a href="8343.php">Ralph Castain: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<li><strong>In reply to:</strong> <a href="8342.php">Biagio Lucini: "[OMPI users] &quot;casual&quot; error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8345.php">Biagio Lucini: "Re: [OMPI users] &quot;casual&quot; error"</a>
<li><strong>Reply:</strong> <a href="8345.php">Biagio Lucini: "Re: [OMPI users] &quot;casual&quot; error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Absolutely :) The last few entries on the stack are from OPAL (one of  
<br>
the Open MPI libraries) that trap the segfault. Everything else  
<br>
indicates where the segfault happened. What I can tell from this stack  
<br>
trace is the following: the problem started in your function  
<br>
wait_thread which called one of the functions from the libstdc++  
<br>
(based on the C++ naming conventions and the name from the stack  
<br>
_ZNSt13basic_filebufIcSt11char_traitsIcEE4openEPKcSt13_ I guess it was  
<br>
open), which called some undetermined function from the libc ... which  
<br>
segfault.
<br>
<p>It is pretty strange to segfault in a standard function, they are  
<br>
usually pretty well protected, except if you do something blatantly  
<br>
wrong (such as messing up the memory). I suggest using some memory  
<br>
checker tools such as valgrind to check the memory consistency of your  
<br>
application.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 5, 2009, at 17:37 , Biagio Lucini wrote:
<br>
<p><span class="quotelev1">&gt; We have an application that runs for a very long time with 16  
</span><br>
<span class="quotelev1">&gt; processes (the time is order a few months; we do have check points,  
</span><br>
<span class="quotelev1">&gt; but this won't be the issue). It has happened twice that it fails  
</span><br>
<span class="quotelev1">&gt; with the error message appended below after running undisturbed for  
</span><br>
<span class="quotelev1">&gt; 20-25 days. It has happened twice so far. This error is not  
</span><br>
<span class="quotelev1">&gt; systematically reproducible, and I believe this is not just because  
</span><br>
<span class="quotelev1">&gt; the program is parallel. We use openmpi-1.2.5 as distributed in the  
</span><br>
<span class="quotelev1">&gt; RH 5.2-clone Scientific Linux, on which our cluster is based. Is  
</span><br>
<span class="quotelev1">&gt; this stack suggesting anything to eyes more trained than main?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks,
</span><br>
<span class="quotelev1">&gt; Biagio Lucini
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [node20:04178] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [node20:04178] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [node20:04178] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [node20:04178] Failing at address: 0x2aaadb8b31a0
</span><br>
<span class="quotelev1">&gt; [node20:04178] [ 0] /lib64/libpthread.so.0 [0x2b5d9c3ebe80]
</span><br>
<span class="quotelev1">&gt; [node20:04178] [ 1] /usr/lib64/openmpi/1.2.5-gcc/lib/libopen-pal.so. 
</span><br>
<span class="quotelev1">&gt; 0(_int_malloc+0x1d4) [0x2b5d9ccb2
</span><br>
<span class="quotelev1">&gt; f84]
</span><br>
<span class="quotelev1">&gt; [node20:04178] [ 2] /usr/lib64/openmpi/1.2.5-gcc/lib/libopen-pal.so. 
</span><br>
<span class="quotelev1">&gt; 0(malloc+0x93) [0x2b5d9ccb4d93]
</span><br>
<span class="quotelev1">&gt; [node20:04178] [ 3] /lib64/libc.so.6 [0x2b5d9d77729a]
</span><br>
<span class="quotelev1">&gt; [node20:04178] [ 4] /usr/lib64/libstdc++.so. 
</span><br>
<span class="quotelev1">&gt; 6(_ZNSt12__basic_fileIcE4openEPKcSt13_Ios_Openmodei+0x54)
</span><br>
<span class="quotelev1">&gt; [0x2b5d9bf05cb4]
</span><br>
<span class="quotelev1">&gt; [node20:04178] [ 5] /usr/lib64/libstdc++.so. 
</span><br>
<span class="quotelev1">&gt; 6(_ZNSt13basic_filebufIcSt11char_traitsIcEE4openEPKcSt13_
</span><br>
<span class="quotelev1">&gt; Ios_Openmode+0x83) [0x2b5d9beb45c3]
</span><br>
<span class="quotelev1">&gt; [node20:04178] [ 6] ./k-string(wait_thread_+0x2a1) [0x42e101]
</span><br>
<span class="quotelev1">&gt; [node20:04178] [ 7] ./k-string(MAIN__+0x2a72) [0x4212d2]
</span><br>
<span class="quotelev1">&gt; [node20:04178] [ 8] ./k-string(main+0xe) [0x42e2ce]
</span><br>
<span class="quotelev1">&gt; [node20:04178] [ 9] /lib64/libc.so.6(__libc_start_main+0xf4)  
</span><br>
<span class="quotelev1">&gt; [0x2b5d9d7338b4]
</span><br>
<span class="quotelev1">&gt; [node20:04178] [10] ./k-string(__gxx_personality_v0+0xb9) [0x404719]
</span><br>
<span class="quotelev1">&gt; [node20:04178] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 4152 on node node19 exited  
</span><br>
<span class="quotelev1">&gt; on signal 15 (Terminated).
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8345.php">Biagio Lucini: "Re: [OMPI users] &quot;casual&quot; error"</a>
<li><strong>Previous message:</strong> <a href="8343.php">Ralph Castain: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<li><strong>In reply to:</strong> <a href="8342.php">Biagio Lucini: "[OMPI users] &quot;casual&quot; error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8345.php">Biagio Lucini: "Re: [OMPI users] &quot;casual&quot; error"</a>
<li><strong>Reply:</strong> <a href="8345.php">Biagio Lucini: "Re: [OMPI users] &quot;casual&quot; error"</a>
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
