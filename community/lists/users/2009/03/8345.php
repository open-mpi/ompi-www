<?
$subject_val = "Re: [OMPI users] &quot;casual&quot; error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 18:43:37 2009" -->
<!-- isoreceived="20090305234337" -->
<!-- sent="Thu, 05 Mar 2009 23:43:32 +0000" -->
<!-- isosent="20090305234332" -->
<!-- name="Biagio Lucini" -->
<!-- email="B.Lucini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;casual&amp;quot; error" -->
<!-- id="49B063A4.1000100_at_swansea.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8CCF2415-9262-45FC-8A66-B0233429E80B_at_eecs.utk.edu" -->
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
<strong>From:</strong> Biagio Lucini (<em>B.Lucini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 18:43:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8346.php">Shinta Bonnefoy: "Re: [OMPI users] Runtime error only on one node."</a>
<li><strong>Previous message:</strong> <a href="8344.php">George Bosilca: "Re: [OMPI users] &quot;casual&quot; error"</a>
<li><strong>In reply to:</strong> <a href="8344.php">George Bosilca: "Re: [OMPI users] &quot;casual&quot; error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Many thanks for your help, it was not clear to me whether it was opal, 
<br>
my application or the standard C libs that were causing the segfault. It 
<br>
is already good news that the problem is not at the level of OpenMPI, 
<br>
since this would have meant upgrading that library. My first reaction 
<br>
would be to say that there is nothing wrong with my code (which has 
<br>
already passed the valgrind test) and the problem should be in the libc, 
<br>
but I agree with you that this is a very unlikely possibility, 
<br>
especially given that we do some remapping of the memory. Hence, I will 
<br>
give a second look with valgrind and a third with efence, and see if 
<br>
there is some bug that managed to survive the extensive testing that the 
<br>
code has undergone up to now.
<br>
<p>Thanks again,
<br>
Biagio
<br>
<p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Absolutely :) The last few entries on the stack are from OPAL (one of 
</span><br>
<span class="quotelev1">&gt; the Open MPI libraries) that trap the segfault. Everything else 
</span><br>
<span class="quotelev1">&gt; indicates where the segfault happened. What I can tell from this stack 
</span><br>
<span class="quotelev1">&gt; trace is the following: the problem started in your function 
</span><br>
<span class="quotelev1">&gt; wait_thread which called one of the functions from the libstdc++ 
</span><br>
<span class="quotelev1">&gt; (based on the C++ naming conventions and the name from the stack 
</span><br>
<span class="quotelev1">&gt; _ZNSt13basic_filebufIcSt11char_traitsIcEE4openEPKcSt13_ I guess it was 
</span><br>
<span class="quotelev1">&gt; open), which called some undetermined function from the libc ... which 
</span><br>
<span class="quotelev1">&gt; segfault.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is pretty strange to segfault in a standard function, they are 
</span><br>
<span class="quotelev1">&gt; usually pretty well protected, except if you do something blatantly 
</span><br>
<span class="quotelev1">&gt; wrong (such as messing up the memory). I suggest using some memory 
</span><br>
<span class="quotelev1">&gt; checker tools such as valgrind to check the memory consistency of your 
</span><br>
<span class="quotelev1">&gt; application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 5, 2009, at 17:37 , Biagio Lucini wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have an application that runs for a very long time with 16 
</span><br>
<span class="quotelev2">&gt;&gt; processes (the time is order a few months; we do have check points, 
</span><br>
<span class="quotelev2">&gt;&gt; but this won't be the issue). It has happened twice that it fails 
</span><br>
<span class="quotelev2">&gt;&gt; with the error message appended below after running undisturbed for 
</span><br>
<span class="quotelev2">&gt;&gt; 20-25 days. It has happened twice so far. This error is not 
</span><br>
<span class="quotelev2">&gt;&gt; systematically reproducible, and I believe this is not just because 
</span><br>
<span class="quotelev2">&gt;&gt; the program is parallel. We use openmpi-1.2.5 as distributed in the 
</span><br>
<span class="quotelev2">&gt;&gt; RH 5.2-clone Scientific Linux, on which our cluster is based. Is this 
</span><br>
<span class="quotelev2">&gt;&gt; stack suggesting anything to eyes more trained than main?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Biagio Lucini
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [node20:04178] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [node20:04178] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [node20:04178] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [node20:04178] Failing at address: 0x2aaadb8b31a0
</span><br>
<span class="quotelev2">&gt;&gt; [node20:04178] [ 0] /lib64/libpthread.so.0 [0x2b5d9c3ebe80]
</span><br>
<span class="quotelev2">&gt;&gt; [node20:04178] [ 1] 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/openmpi/1.2.5-gcc/lib/libopen-pal.so.0(_int_malloc+0x1d4) 
</span><br>
<span class="quotelev2">&gt;&gt; [0x2b5d9ccb2
</span><br>
<span class="quotelev2">&gt;&gt; f84]
</span><br>
<span class="quotelev2">&gt;&gt; [node20:04178] [ 2] 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/openmpi/1.2.5-gcc/lib/libopen-pal.so.0(malloc+0x93) 
</span><br>
<span class="quotelev2">&gt;&gt; [0x2b5d9ccb4d93]
</span><br>
<span class="quotelev2">&gt;&gt; [node20:04178] [ 3] /lib64/libc.so.6 [0x2b5d9d77729a]
</span><br>
<span class="quotelev2">&gt;&gt; [node20:04178] [ 4] 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/libstdc++.so.6(_ZNSt12__basic_fileIcE4openEPKcSt13_Ios_Openmodei+0x54) 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0x2b5d9bf05cb4]
</span><br>
<span class="quotelev2">&gt;&gt; [node20:04178] [ 5] 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/libstdc++.so.6(_ZNSt13basic_filebufIcSt11char_traitsIcEE4openEPKcSt13_ 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ios_Openmode+0x83) [0x2b5d9beb45c3]
</span><br>
<span class="quotelev2">&gt;&gt; [node20:04178] [ 6] ./k-string(wait_thread_+0x2a1) [0x42e101]
</span><br>
<span class="quotelev2">&gt;&gt; [node20:04178] [ 7] ./k-string(MAIN__+0x2a72) [0x4212d2]
</span><br>
<span class="quotelev2">&gt;&gt; [node20:04178] [ 8] ./k-string(main+0xe) [0x42e2ce]
</span><br>
<span class="quotelev2">&gt;&gt; [node20:04178] [ 9] /lib64/libc.so.6(__libc_start_main+0xf4) 
</span><br>
<span class="quotelev2">&gt;&gt; [0x2b5d9d7338b4]
</span><br>
<span class="quotelev2">&gt;&gt; [node20:04178] [10] ./k-string(__gxx_personality_v0+0xb9) [0x404719]
</span><br>
<span class="quotelev2">&gt;&gt; [node20:04178] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that job rank 0 with PID 4152 on node node19 exited on 
</span><br>
<span class="quotelev2">&gt;&gt; signal 15 (Terminated).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="8346.php">Shinta Bonnefoy: "Re: [OMPI users] Runtime error only on one node."</a>
<li><strong>Previous message:</strong> <a href="8344.php">George Bosilca: "Re: [OMPI users] &quot;casual&quot; error"</a>
<li><strong>In reply to:</strong> <a href="8344.php">George Bosilca: "Re: [OMPI users] &quot;casual&quot; error"</a>
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
