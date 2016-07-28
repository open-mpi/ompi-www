<?
$subject_val = "[OMPI users] &quot;casual&quot; error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 17:37:45 2009" -->
<!-- isoreceived="20090305223745" -->
<!-- sent="Thu, 05 Mar 2009 22:37:28 +0000" -->
<!-- isosent="20090305223728" -->
<!-- name="Biagio Lucini" -->
<!-- email="B.Lucini_at_[hidden]" -->
<!-- subject="[OMPI users] &amp;quot;casual&amp;quot; error" -->
<!-- id="49B05428.4050206_at_swansea.ac.uk" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] &quot;casual&quot; error<br>
<strong>From:</strong> Biagio Lucini (<em>B.Lucini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 17:37:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8343.php">Ralph Castain: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<li><strong>Previous message:</strong> <a href="8341.php">Pavel Shamis (Pasha): "Re: [OMPI users] mlx4 error - looking for guidance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8344.php">George Bosilca: "Re: [OMPI users] &quot;casual&quot; error"</a>
<li><strong>Reply:</strong> <a href="8344.php">George Bosilca: "Re: [OMPI users] &quot;casual&quot; error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have an application that runs for a very long time with 16 processes 
<br>
(the time is order a few months; we do have check points, but this won't 
<br>
be the issue). It has happened twice that it fails with the error 
<br>
message appended below after running undisturbed for 20-25 days. It has 
<br>
happened twice so far. This error is not systematically reproducible, 
<br>
and I believe this is not just because the program is parallel. We use 
<br>
openmpi-1.2.5 as distributed in the RH 5.2-clone Scientific Linux, on 
<br>
which our cluster is based. Is this stack suggesting anything to eyes 
<br>
more trained than main?
<br>
<p>Many thanks,
<br>
Biagio Lucini
<br>
<p>-----------------------------------------------------------------------------------------------------------------------------------------
<br>
<p>[node20:04178] *** Process received signal ***
<br>
[node20:04178] Signal: Segmentation fault (11)
<br>
[node20:04178] Signal code: Address not mapped (1)
<br>
[node20:04178] Failing at address: 0x2aaadb8b31a0
<br>
[node20:04178] [ 0] /lib64/libpthread.so.0 [0x2b5d9c3ebe80]
<br>
[node20:04178] [ 1] 
<br>
/usr/lib64/openmpi/1.2.5-gcc/lib/libopen-pal.so.0(_int_malloc+0x1d4) 
<br>
[0x2b5d9ccb2
<br>
f84]
<br>
[node20:04178] [ 2] 
<br>
/usr/lib64/openmpi/1.2.5-gcc/lib/libopen-pal.so.0(malloc+0x93) 
<br>
[0x2b5d9ccb4d93]
<br>
[node20:04178] [ 3] /lib64/libc.so.6 [0x2b5d9d77729a]
<br>
[node20:04178] [ 4] 
<br>
/usr/lib64/libstdc++.so.6(_ZNSt12__basic_fileIcE4openEPKcSt13_Ios_Openmodei+0x54)
<br>
&nbsp;[0x2b5d9bf05cb4]
<br>
[node20:04178] [ 5] 
<br>
/usr/lib64/libstdc++.so.6(_ZNSt13basic_filebufIcSt11char_traitsIcEE4openEPKcSt13_
<br>
Ios_Openmode+0x83) [0x2b5d9beb45c3]
<br>
[node20:04178] [ 6] ./k-string(wait_thread_+0x2a1) [0x42e101]
<br>
[node20:04178] [ 7] ./k-string(MAIN__+0x2a72) [0x4212d2]
<br>
[node20:04178] [ 8] ./k-string(main+0xe) [0x42e2ce]
<br>
[node20:04178] [ 9] /lib64/libc.so.6(__libc_start_main+0xf4) 
<br>
[0x2b5d9d7338b4]
<br>
[node20:04178] [10] ./k-string(__gxx_personality_v0+0xb9) [0x404719]
<br>
[node20:04178] *** End of error message ***
<br>
mpirun noticed that job rank 0 with PID 4152 on node node19 exited on 
<br>
signal 15 (Terminated).
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8343.php">Ralph Castain: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<li><strong>Previous message:</strong> <a href="8341.php">Pavel Shamis (Pasha): "Re: [OMPI users] mlx4 error - looking for guidance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8344.php">George Bosilca: "Re: [OMPI users] &quot;casual&quot; error"</a>
<li><strong>Reply:</strong> <a href="8344.php">George Bosilca: "Re: [OMPI users] &quot;casual&quot; error"</a>
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
