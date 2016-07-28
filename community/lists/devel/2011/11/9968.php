<?
$subject_val = "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 14 21:09:00 2011" -->
<!-- isoreceived="20111115020900" -->
<!-- sent="Tue, 15 Nov 2011 13:08:53 +1100" -->
<!-- isosent="20111115020853" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;Open MPI&amp;quot;-based MPI library used by K computer" -->
<!-- id="4EC1C9B5.6060803_at_unimelb.edu.au" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4EC0ED1E.7010200_at_jp.fujitsu.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-14 21:08:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9969.php">Eugene Loh: "[OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<li><strong>Previous message:</strong> <a href="9967.php">George Bosilca: "Re: [OMPI devel] VT issue"</a>
<li><strong>In reply to:</strong> <a href="9965.php">Y.MATSUMOTO: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9997.php">George Bosilca: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 14/11/11 21:27, Y.MATSUMOTO wrote:
<br>
<p><span class="quotelev1">&gt; I'm a member of MPI library development team in Fujitsu,
</span><br>
<span class="quotelev1">&gt; Takahiro Kawashima, who sent mail before, is my colleague.
</span><br>
<span class="quotelev1">&gt; We start to feed back.
</span><br>
<p>First of all I'd like to say congratulations on breaking
<br>
10PF, and also a big thanks for working on contributing
<br>
changes back to Open-MPI!
<br>
<p>Whilst I can't comment on the fix I can confirm that I also
<br>
see segfaults with Open-MPI 1.4.2 and 1.4.4 with your example
<br>
program.
<br>
<p>Intel compilers 11.1:
<br>
<p>- --------------------------------------------------------------------------
<br>
[bruce002:03973] *** Process received signal ***
<br>
[bruce002:03973] Signal: Segmentation fault (11)
<br>
[bruce002:03973] Signal code: Address not mapped (1)
<br>
[bruce002:03973] Failing at address: 0x100000009
<br>
[bruce002:03973] [ 0] /lib64/libpthread.so.0 [0x3e1320eb10]
<br>
[bruce002:03973] [ 1] /usr/local/openmpi/1.4.4-intel/lib/libmpi.so.0 [0x2aaaaab5d79d]
<br>
[bruce002:03973] [ 2] /usr/local/openmpi/1.4.4-intel/lib/libopen-pal.so.0(opal_progress+0x87) [0x2aaaab1fdc27]
<br>
[bruce002:03973] [ 3] /usr/local/openmpi/1.4.4-intel/lib/libmpi.so.0 [0x2aaaaabce252]
<br>
[bruce002:03973] [ 4] /usr/local/openmpi/1.4.4-intel/lib/libmpi.so.0(PMPI_Recv+0x213) [0x2aaaaab1e0f3]
<br>
[bruce002:03973] [ 5] ./tp_lb_ub_ng(main+0x29b) [0x4021ab]
<br>
[bruce002:03973] [ 6] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3e12a1d994]
<br>
[bruce002:03973] [ 7] ./tp_lb_ub_ng [0x401e59]
<br>
[bruce002:03973] *** End of error message ***
<br>
- --------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 1 with PID 3973 on node bruce002 exited on signal 11 (Segmentation fault).
<br>
- --------------------------------------------------------------------------
<br>
[bruce002:03972] *** Process received signal ***
<br>
[bruce002:03972] Signal: Segmentation fault (11)
<br>
[bruce002:03972] Signal code: Address not mapped (1)
<br>
[bruce002:03972] Failing at address: 0xffffffffff84bad0
<br>
[bruce002:03972] [ 0] /lib64/libpthread.so.0 [0x3e1320eb10]
<br>
[bruce002:03972] [ 1] ./tp_lb_ub_ng(__intel_new_memcpy+0x2c) [0x403c9c]
<br>
[bruce002:03972] *** End of error message ***
<br>
<p><p>GCC 4.4.4:
<br>
<p>- --------------------------------------------------------------------------
<br>
[bruce002:04049] *** Process received signal ***
<br>
[bruce002:04049] Signal: Segmentation fault (11)
<br>
[bruce002:04049] Signal code: Address not mapped (1)
<br>
[bruce002:04049] Failing at address: 0x100000009
<br>
[bruce002:04049] [ 0] /lib64/libpthread.so.0 [0x3e1320eb10]
<br>
[bruce002:04049] [ 1] /usr/local/openmpi/1.4.4-gcc/lib/libmpi.so.0 [0x2aaaaab51f27]
<br>
[bruce002:04049] [ 2] /usr/local/openmpi/1.4.4-gcc/lib/libopen-pal.so.0(opal_progress+0x5a) [0x2aaaab14bb3a]
<br>
[bruce002:04049] [ 3] /usr/local/openmpi/1.4.4-gcc/lib/libmpi.so.0 [0x2aaaaabb9985]
<br>
[bruce002:04049] [ 4] /usr/local/openmpi/1.4.4-gcc/lib/libmpi.so.0(PMPI_Recv+0x12f) [0x2aaaaab1913f]
<br>
[bruce002:04049] [ 5] ./tp_lb_ub_ng(main+0x21c) [0x400dd0]
<br>
[bruce002:04049] [ 6] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3e12a1d994]
<br>
[bruce002:04049] [ 7] ./tp_lb_ub_ng [0x400af9]
<br>
[bruce002:04049] *** End of error message ***
<br>
- --------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 1 with PID 4049 on node bruce002 exited on signal 11 (Segmentation fault).
<br>
- --------------------------------------------------------------------------
<br>
[bruce002:04048] *** Process received signal ***
<br>
[bruce002:04048] Signal: Segmentation fault (11)
<br>
[bruce002:04048] Signal code: Address not mapped (1)
<br>
[bruce002:04048] Failing at address: 0x2aaab0833000
<br>
[bruce002:04048] [ 0] /lib64/libpthread.so.0 [0x3e1320eb10]
<br>
[bruce002:04048] [ 1] /lib64/libc.so.6(memcpy+0x3ff) [0x3e12a7c63f]
<br>
[bruce002:04048] [ 2] /usr/local/openmpi/1.4.4-gcc/lib/libmpi.so.0 [0x2aaaaaafef7b]
<br>
[bruce002:04048] [ 3] /usr/local/openmpi/1.4.4-gcc/lib/libmpi.so.0 [0x2aaaaab4fcdd]
<br>
[bruce002:04048] [ 4] /usr/local/openmpi/1.4.4-gcc/lib/libmpi.so.0 [0x2aaaaabc1563]
<br>
[bruce002:04048] [ 5] /usr/local/openmpi/1.4.4-gcc/lib/libmpi.so.0 [0x2aaaaabbce78]
<br>
[bruce002:04048] [ 6] /usr/local/openmpi/1.4.4-gcc/lib/libmpi.so.0 [0x2aaaaab52036]
<br>
[bruce002:04048] [ 7] /usr/local/openmpi/1.4.4-gcc/lib/libopen-pal.so.0(opal_progress+0x5a) [0x2aaaab14bb3a]
<br>
[bruce002:04048] [ 8] /usr/local/openmpi/1.4.4-gcc/lib/libmpi.so.0 [0x2aaaaabba5f5]
<br>
[bruce002:04048] [ 9] /usr/local/openmpi/1.4.4-gcc/lib/libmpi.so.0(MPI_Send+0x177) [0x2aaaaab1b1d7]
<br>
[bruce002:04048] [10] ./tp_lb_ub_ng(main+0x1e4) [0x400d98]
<br>
[bruce002:04048] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3e12a1d994]
<br>
[bruce002:04048] [12] ./tp_lb_ub_ng [0x400af9]
<br>
[bruce002:04048] *** End of error message ***
<br>
<p><p>- -- 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Christopher Samuel - Senior Systems Administrator
<br>
&nbsp;VLSCI - Victorian Life Sciences Computation Initiative
<br>
&nbsp;Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.11 (GNU/Linux)
<br>
Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
<br>
<p>iEYEARECAAYFAk7BybUACgkQO2KABBYQAh9/mwCdEx6FrXaahHRlfIlKX+GqvScO
<br>
+tcAn0ieXCjxG5JrOvkgSy0YQ9EgA7S8
<br>
=nUtx
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9969.php">Eugene Loh: "[OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<li><strong>Previous message:</strong> <a href="9967.php">George Bosilca: "Re: [OMPI devel] VT issue"</a>
<li><strong>In reply to:</strong> <a href="9965.php">Y.MATSUMOTO: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9997.php">George Bosilca: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
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
