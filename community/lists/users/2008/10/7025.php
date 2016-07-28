<?
$subject_val = "[OMPI users] Bus Error in ompi_free_list_grow";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 21:14:43 2008" -->
<!-- isoreceived="20081018011443" -->
<!-- sent="Fri, 17 Oct 2008 21:14:33 -0400" -->
<!-- isosent="20081018011433" -->
<!-- name="Allen Barnett" -->
<!-- email="allen_at_[hidden]" -->
<!-- subject="[OMPI users] Bus Error in ompi_free_list_grow" -->
<!-- id="1224292473.24516.167.camel_at_alpaca.lan" -->
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
<strong>From:</strong> Allen Barnett (<em>allen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-17 21:14:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7026.php">Jeff Squyres: "Re: [OMPI users] --mca btl_openib_if_include"</a>
<li><strong>Previous message:</strong> <a href="7024.php">Raymond Wan: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi: A customer is running our parallel application on an SGI Altix
<br>
machine. They compiled OMPI 1.2.8 themselves. The Altix uses IB
<br>
interfaces and they recently upgraded to OFED 1.3 (in SGI Propack 6).
<br>
They are receiving a bus error in ompi_free_list_grow:
<br>
<p>[r1i0n0:01321] *** Process received signal ***
<br>
[r1i0n0:01321] Signal: Bus error (7)
<br>
[r1i0n0:01321] Signal code:  (2)
<br>
[r1i0n0:01321] Failing at address: 0x2b04ba07c4a0
<br>
[r1i0n0:01321] [ 0] /lib64/libpthread.so.0 [0x2b04b00cfc00]
<br>
[r1i0n0:01321] [ 1] 
<br>
/usr/local/attila/severian-0.3.2-beta/lib/x86_64-Linux/libmpi.so.0(ompi_free_list_grow+0x14a) 
<br>
[0x2b04af7dc058]
<br>
[r1i0n0:01321] [ 2] 
<br>
/usr/local/attila/severian-0.3.2-beta/lib/x86_64-Linux/openmpi/mca_btl_sm.so(mca_btl_sm_alloc+0x321) 
<br>
[0x2b04b38c8e35]
<br>
[r1i0n0:01321] [ 3] 
<br>
/usr/local/attila/severian-0.3.2-beta/lib/x86_64-Linux/openmpi/mca_pml_ob1.so(mca_pml_ob1_send_request_start_copy+0x26d) 
<br>
[0x2b04b3378f91]
<br>
[r1i0n0:01321] [ 4] 
<br>
/usr/local/attila/severian-0.3.2-beta/lib/x86_64-Linux/openmpi/mca_pml_ob1.so(mca_pml_ob1_send+0x546) 
<br>
[0x2b04b3370c7e]
<br>
[r1i0n0:01321] [ 5] 
<br>
/usr/local/attila/severian-0.3.2-beta/lib/x86_64-Linux/libmpi.so.0(MPI_Send+0x28) 
<br>
[0x2b04af814098]
<br>
<p>Here is some more information about the machine:
<br>
<p>SGI Altix ICE 8200 cluster; each node has two quad core Xeons with 16GB
<br>
SUSE Linux Enterprise Server 10 Service Pack 2
<br>
GNU C Library stable release version 2.4 (20080421)
<br>
gcc (GCC) 4.1.2 20070115 (SUSE Linux)
<br>
SGI Propack 6 (just upgraded from Propack 5 SP3: changed from 
<br>
OFED 1.2 to 1.3)
<br>
<p>The output from ompi_info is attached.
<br>
<p>I would appreciate any help debugging this.
<br>
<p>Thanks,
<br>
Allen
<br>
<p><pre>
-- 
Allen Barnett
E-Mail: allen_at_[hidden]
Skype:  allenbarnett
Ph:     518-887-2930

</pre>
<p>
<p><hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7025/ompi_info.txt.bz2">ompi_info.txt.bz2</a>
</ul>
<!-- attachment="ompi_info.txt.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7026.php">Jeff Squyres: "Re: [OMPI users] --mca btl_openib_if_include"</a>
<li><strong>Previous message:</strong> <a href="7024.php">Raymond Wan: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
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
