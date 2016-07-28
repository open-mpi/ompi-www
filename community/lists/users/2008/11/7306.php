<?
$subject_val = "[OMPI users] Bus Error in ompi_free_list_grow";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 13 10:16:39 2008" -->
<!-- isoreceived="20081113151639" -->
<!-- sent="Thu, 13 Nov 2008 13:16:34 -0200" -->
<!-- isosent="20081113151634" -->
<!-- name="Geraldo Veiga" -->
<!-- email="gveiga+openmpi_at_[hidden]" -->
<!-- subject="[OMPI users] Bus Error in ompi_free_list_grow" -->
<!-- id="5969679e0811130716n428dada6wc06d78c10386cc4e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Bus Error in ompi_free_list_grow<br>
<strong>From:</strong> Geraldo Veiga (<em>gveiga+openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-13 10:16:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7307.php">Peter Cebull: "Re: [OMPI users] Bus Error in ompi_free_list_grow"</a>
<li><strong>Previous message:</strong> <a href="7305.php">Jeff Squyres: "[OMPI users] Open MPI at SC'08: win a Wii!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7307.php">Peter Cebull: "Re: [OMPI users] Bus Error in ompi_free_list_grow"</a>
<li><strong>Reply:</strong> <a href="7307.php">Peter Cebull: "Re: [OMPI users] Bus Error in ompi_free_list_grow"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi to all,
<br>
<p>I am using the same subject of a recent message I found in the list archives
<br>
of this mailing list:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2008/10/7025.php">http://www.open-mpi.org/community/lists/users/2008/10/7025.php</a>
<br>
<p>There was no follow-up  on that one, but will add this similar report in
<br>
case a list member can give us an idea of how to correct it.  Or whose bug
<br>
this could be.
<br>
<p>My application behaves as expected when I run it in a single host and
<br>
multiple MPI nodes  of  our  SGI Altix ICE 8200 cluster  with in
<br>
InfiniBand.   When I try the same with multiple hosts, using the PBS batch
<br>
system the program terminates with a segmentation fault:
<br>
<p>-------
<br>
[r1i0n9:09192] *** Process received signal ***
<br>
[r1i0n9:09192] Signal: Bus error (7)
<br>
[r1i0n9:09192] Signal code:  (2)
<br>
[r1i0n9:09192] Failing at address: 0x2b67ca0c8c20
<br>
[r1i0n9:09192] [ 0] /lib64/libpthread.so.0 [0x2b67bfdb1c00]
<br>
[r1i0n9:09192] [ 1]
<br>
/sw/openmpi_intel/1.2.8/lib/libmpi.so.0(ompi_free_list_grow+0x14a)
<br>
[0x2b67bf499b38]
<br>
[r1i0n9:09192] [ 2]
<br>
/sw/openmpi_intel/1.2.8/lib/openmpi/mca_btl_sm.so(mca_btl_sm_alloc+0x321)
<br>
[0x2b67c3a43e15]
<br>
[r1i0n9:09192] [ 3]
<br>
/sw/openmpi_intel/1.2.8/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_send_request_start_copy+0x26d)
<br>
[0x2b67c34e9041]
<br>
[r1i0n9:09192] [ 4]
<br>
/sw/openmpi_intel/1.2.8/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_isend+0x540)
<br>
[0x2b67c34e17ec]
<br>
[r1i0n9:09192] [ 5] /sw/openmpi_intel/1.2.8/lib/libmpi.so.0(PMPI_Isend+0x63)
<br>
[0x2b67bf4dcd1f]
<br>
[r1i0n9:09192] [ 6]
<br>
/sw/openmpi_intel/1.2.8/lib/libmpi_f77.so.0(pmpi_isend+0x8f)
<br>
[0x2b67bf36a03f]
<br>
[r1i0n9:09192] [ 7] dsimpletest(dmumps_comm_buffer_mp_dmumps_519_+0x449)
<br>
[0x53e19b]
<br>
[r1i0n9:09192] [ 8] dsimpletest(dmumps_load_mp_dmumps_512_+0x20b) [0x54fda1]
<br>
[r1i0n9:09192] [ 9] dsimpletest(dmumps_251_+0x4995) [0x4d273b]
<br>
[r1i0n9:09192] [10] dsimpletest(dmumps_244_+0x808) [0x484e38]
<br>
[r1i0n9:09192] [11] dsimpletest(dmumps_142_+0x8717) [0x4bf5eb]
<br>
[r1i0n9:09192] [12] dsimpletest(dmumps_+0x1554) [0x43a720]
<br>
[r1i0n9:09192] [13] dsimpletest(MAIN__+0x50b) [0x41e4c3]
<br>
[r1i0n9:09192] [14] dsimpletest(main+0x3c) [0x683d4c]
<br>
[r1i0n9:09192] [15] /lib64/libc.so.6(__libc_start_main+0xf4)
<br>
[0x2b67bfeda184]
<br>
[r1i0n9:09192] [16] dsimpletest(dtrmv_+0xa1) [0x41df29]
<br>
[r1i0n9:09192] *** End of error message ***
<br>
<pre>
----
Most of the software infrastructure is provided by the Intel propack.  Any
hints of where to look further into this bug?
Thanks in advance.
-- 
Geraldo Veiga &lt;gveiga_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7306/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7307.php">Peter Cebull: "Re: [OMPI users] Bus Error in ompi_free_list_grow"</a>
<li><strong>Previous message:</strong> <a href="7305.php">Jeff Squyres: "[OMPI users] Open MPI at SC'08: win a Wii!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7307.php">Peter Cebull: "Re: [OMPI users] Bus Error in ompi_free_list_grow"</a>
<li><strong>Reply:</strong> <a href="7307.php">Peter Cebull: "Re: [OMPI users] Bus Error in ompi_free_list_grow"</a>
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
