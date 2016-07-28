<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 17 22:14:09 2006" -->
<!-- isoreceived="20060718021409" -->
<!-- sent="Tue, 18 Jul 2006 12:14:00 +1000" -->
<!-- isosent="20060718021400" -->
<!-- name="Manal Helal" -->
<!-- email="manalorama_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Finalize runtime error" -->
<!-- id="1153188840.2642.9.camel_at_manallpt.cse.unsw.EDU.AU" -->
<!-- inreplyto="mailman.23.1153152004.8488.users_at_open-mpi.org" -->
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
<strong>From:</strong> Manal Helal (<em>manalorama_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-17 22:14:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1640.php">Bert Wesarg: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<li><strong>Previous message:</strong> <a href="1638.php">s anwar: "[OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1672.php">Jeff Squyres: "Re: [OMPI users] MPI_Finalize runtime error"</a>
<li><strong>Reply:</strong> <a href="1672.php">Jeff Squyres: "Re: [OMPI users] MPI_Finalize runtime error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>after I finish execution, and all results are reported, and both
<br>
processes are about to call MPI_Finalize, I get this runtime error:
<br>
<p>any help is appreciated, thanks
<br>
<p>Manal
<br>
<p><p>Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0xa
<br>
[0] func:/usr/local/bin/openmpi/lib/libopal.so.0 [0x3e526c]
<br>
[1] func:[0x4bfc7440]
<br>
[2] func:/usr/local/bin/openmpi/lib/libopal.so.0(free+0xb4) [0x3e9ff4]
<br>
[3] func:/usr/local/bin/openmpi/lib/libmpi.so.0 [0x70484e]
<br>
[4]
<br>
func:/usr/local/bin/openmpi//lib/openmpi/mca_btl_tcp.so(mca_btl_tcp_component_close+0x278) [0xc78a58]
<br>
[5]
<br>
func:/usr/local/bin/openmpi/lib/libopal.so.0(mca_base_components_close
<br>
+0x6a) [0x3d93fa]
<br>
[6] func:/usr/local/bin/openmpi/lib/libmpi.so.0(mca_btl_base_close+0xbd)
<br>
[0x75154d]
<br>
[7] func:/usr/local/bin/openmpi/lib/libmpi.so.0(mca_bml_base_close+0x17)
<br>
[0x751427]
<br>
[8]
<br>
func:/usr/local/bin/openmpi//lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_component_close+0x3a) [0x625a0a]
<br>
[9]
<br>
func:/usr/local/bin/openmpi/lib/libopal.so.0(mca_base_components_close
<br>
+0x6a) [0x3d93fa]
<br>
[10] func:/usr/local/bin/openmpi/lib/libmpi.so.0(mca_pml_base_close
<br>
+0x65) [0x7580e5]
<br>
[11] func:/usr/local/bin/openmpi/lib/libmpi.so.0(ompi_mpi_finalize
<br>
+0x1b4) [0x71e984]
<br>
[12] func:/usr/local/bin/openmpi/lib/libmpi.so.0(MPI_Finalize+0x4b)
<br>
[0x73cb5b]
<br>
[13] func:master/mmMaster(main+0x3cc) [0x804b2dc]
<br>
[14] func:/lib/libc.so.6(__libc_start_main+0xdc) [0x4bffa724]
<br>
[15] func:master/mmMaster [0x8049b91]
<br>
*** End of error message ***
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1640.php">Bert Wesarg: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<li><strong>Previous message:</strong> <a href="1638.php">s anwar: "[OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1672.php">Jeff Squyres: "Re: [OMPI users] MPI_Finalize runtime error"</a>
<li><strong>Reply:</strong> <a href="1672.php">Jeff Squyres: "Re: [OMPI users] MPI_Finalize runtime error"</a>
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
