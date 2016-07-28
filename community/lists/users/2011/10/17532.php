<?
$subject_val = "[OMPI users] crash with hardware virtualization";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 13 04:33:48 2011" -->
<!-- isoreceived="20111013083348" -->
<!-- sent="Thu, 13 Oct 2011 10:33:40 +0200 (CEST)" -->
<!-- isosent="20111013083340" -->
<!-- name="Philippe Gouret" -->
<!-- email="philippe.gouret_at_[hidden]" -->
<!-- subject="[OMPI users] crash with hardware virtualization" -->
<!-- id="11584617.68332.1318494821713.JavaMail.root_at_frontal1" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] crash with hardware virtualization<br>
<strong>From:</strong> Philippe Gouret (<em>philippe.gouret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-13 04:33:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17533.php">George Bosilca: "[OMPI users] [Open MPI Announce] Open MPI 1.4.4 released"</a>
<li><strong>Previous message:</strong> <a href="17531.php">George Bosilca: "Re: [OMPI users] Private and public IP mixing."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone
<br>
<p>I use OpenMPI on single a multi-cores computer to benefit of parralel computing with bioinformatics tools like: tree-ppuzzle ... (computation tools using MPI standard).
<br>
<p>Workstation's caracteristics:
<br>
AMD, 64-bits, 2 processors, 4 cores by processors, Ubuntu 64 bits
<br>
AMD-V hardware virtualization technology is activated
<br>
<p>The command &quot;mpirun -np 8 tree-ppuzzle data_file&quot; works perfectly and produces the expected results.
<br>
<p><p>I would like to be able to do the same things on VirtualBox VMs. To produce some tests, i created an Ubuntu (11.04) 64 bits VM with Virtualbox, i installed OpenMPI 1.4.3 and tree-ppuzzle 5.2.
<br>
<p>When i run the same command: &quot;mpirun -np 8 tree-ppuzzle data_file&quot;, it crashes after few seconds. The error message is:
<br>
<p>[philippe-VirtualBox:01542] Signal: Segmentation fault (11)
<br>
[philippe-VirtualBox:01542] Signal code: Address not mapped (1)
<br>
[philippe-VirtualBox:01542] Failing at address: (nil)
<br>
[philippe-VirtualBox:01541] [ 0] /lib/x86_64-linux-gnu/libpthread.so.0(+0xfc60) [0x7f5b23fb4c60]
<br>
[philippe-VirtualBox:01541] [ 1] /usr/lib/libsprng.so.2(get_rn_dbl+0x4) [0x7f5b251c3d20]
<br>
[philippe-VirtualBox:01542] [ 0] /lib/x86_64-linux-gnu/libpthread.so.0(+0xfc60) [0x7fb9de606c60]
<br>
[philippe-VirtualBox:01542] [ 1] /usr/lib/libsprng.so.2(get_rn_dbl+0x4) [0x7fb9df815d20]
<br>
[philippe-VirtualBox:01542] [ 2] tree-ppuzzle(randominteger+0xf) [0x4347ef]
<br>
[philippe-VirtualBox:01542] [ 3] tree-ppuzzle(chooser+0x4a) [0x43513a]
<br>
[philippe-VirtualBox:01542] [ 4] tree-ppuzzle(allpstep+0x8c) [0x432f2c]
<br>
[philippe-VirtualBox:01542] [ 5] tree-ppuzzle(slave_main+0x539) [0x43f119]
<br>
[philippe-VirtualBox:01542] [ 6] tree-ppuzzle(main+0x67e) [0x42e84e]
<br>
[philippe-VirtualBox:01542] [ 7] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xff) [0x7fb9de281eff]
<br>
[philippe-VirtualBox:01542] [ 8] tree-ppuzzle() [0x4099d9]
<br>
[philippe-VirtualBox:01542] *** End of error message ***
<br>
[philippe-VirtualBox:01541] [ 2] tree-ppuzzle(randominteger+0xf) [0x4347ef]
<br>
[philippe-VirtualBox:01541] [ 3] tree-ppuzzle(chooser+0x4a) [0x43513a]
<br>
[philippe-VirtualBox:01541] [ 4] tree-ppuzzle(allpstep+0x8c) [0x432f2c]
<br>
[philippe-VirtualBox:01541] [ 5] tree-ppuzzle(slave_main+0x539) [0x43f119]
<br>
[philippe-VirtualBox:01541] [ 6] tree-ppuzzle(main+0x67e) [0x42e84e]
<br>
[philippe-VirtualBox:01541] [ 7] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xff) [0x7f5b23c2feff]
<br>
[philippe-VirtualBox:01541] [ 8] tree-ppuzzle() [0x4099d9]
<br>
[philippe-VirtualBox:01541] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 7 with PID 1542 on node philippe-VirtualBox exited on signal 11 (Segmentation fault).
<br>
<p><p>If i disable AMD-V virtualization, all works perfectly.
<br>
<p>I join the data_file to this email.
<br>
<p>can you help me ?
<br>
<p><p>Thanks by advance
<br>
<p>Best regards
<br>
<p>Philippe Gouret
<br>
EBM Laboratory - UMR 6632
<br>
University of Provence
<br>
Marseille - France
<br>
<p><p><p><p><p><p><p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17532/test_tp3.alig">File Attachment: test_tp3.alig</a>
</ul>
<!-- attachment="test_tp3.alig" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17533.php">George Bosilca: "[OMPI users] [Open MPI Announce] Open MPI 1.4.4 released"</a>
<li><strong>Previous message:</strong> <a href="17531.php">George Bosilca: "Re: [OMPI users] Private and public IP mixing."</a>
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
