<?
$subject_val = "Re: [OMPI users] Bus Error in ompi_free_list_grow";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 14 12:21:28 2008" -->
<!-- isoreceived="20081114172128" -->
<!-- sent="Fri, 14 Nov 2008 12:21:21 -0500" -->
<!-- isosent="20081114172121" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bus Error in ompi_free_list_grow" -->
<!-- id="35F70144-9C54-4D39-917A-3D5FA68384E5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5969679e0811140441i789e07f1k40cf03fd648f6cc3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bus Error in ompi_free_list_grow<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-14 12:21:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7316.php">Peter Cebull: "Re: [OMPI users] Bus Error in ompi_free_list_grow"</a>
<li><strong>Previous message:</strong> <a href="7314.php">Ralph Castain: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<li><strong>In reply to:</strong> <a href="7312.php">Geraldo Veiga: "Re: [OMPI users] Bus Error in ompi_free_list_grow"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7316.php">Peter Cebull: "Re: [OMPI users] Bus Error in ompi_free_list_grow"</a>
<li><strong>Reply:</strong> <a href="7316.php">Peter Cebull: "Re: [OMPI users] Bus Error in ompi_free_list_grow"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could this issue actually be related to:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2008/11/4882.php">http://www.open-mpi.org/community/lists/devel/2008/11/4882.php</a>
<br>
<p>(read through the thread to get to the error handling stuff)
<br>
<p><p><p>On Nov 14, 2008, at 7:41 AM, Geraldo Veiga wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Peter.  Blocking the shared memory layer did the trick for  
</span><br>
<span class="quotelev1">&gt; our program too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the record, we also have SGI Propack 6 installed (sgi-propack- 
</span><br>
<span class="quotelev1">&gt; release-6-sgi600r3).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the on-node shared memory support completely blocked?  What if  
</span><br>
<span class="quotelev1">&gt; the MPI process calls a procedure that uses OpenMP threads, for  
</span><br>
<span class="quotelev1">&gt; instance?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Nov 13, 2008 at 1:44 PM, Peter Cebull &lt;peter.cebull_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Geraldo,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The previous message you saw was for our Altix ICE system. Since we  
</span><br>
<span class="quotelev1">&gt; started seeing these errors after upgrading to SGI Propack 6, I  
</span><br>
<span class="quotelev1">&gt; wonder if there's a bug somewhere in the Propack software or an  
</span><br>
<span class="quotelev1">&gt; incompatibility between Open MPI and OFED 1.3 (we had no problems  
</span><br>
<span class="quotelev1">&gt; under OFED 1.2). A workaround I stumbled across is to turn off the  
</span><br>
<span class="quotelev1">&gt; sm component:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl ^sm . . .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That seems to allow our application to run, although I guess at the  
</span><br>
<span class="quotelev1">&gt; expense of losing on-node shared memory support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Peter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Geraldo Veiga wrote:
</span><br>
<span class="quotelev1">&gt; Hi to all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using the same subject of a recent message I found in the list  
</span><br>
<span class="quotelev1">&gt; archives of this mailing list:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2008/10/7025.php">http://www.open-mpi.org/community/lists/users/2008/10/7025.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There was no follow-up  on that one, but will add this similar  
</span><br>
<span class="quotelev1">&gt; report in case a list member can give us an idea of how to correct  
</span><br>
<span class="quotelev1">&gt; it.  Or whose bug this could be.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My application behaves as expected when I run it in a single host  
</span><br>
<span class="quotelev1">&gt; and multiple MPI nodes  of  our  SGI Altix ICE 8200 cluster  with in  
</span><br>
<span class="quotelev1">&gt; InfiniBand.   When I try the same with multiple hosts, using the PBS  
</span><br>
<span class="quotelev1">&gt; batch system the program terminates with a segmentation fault:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------
</span><br>
<span class="quotelev1">&gt; [r1i0n9:09192] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [r1i0n9:09192] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [r1i0n9:09192] Signal code:  (2)
</span><br>
<span class="quotelev1">&gt; [r1i0n9:09192] Failing at address: 0x2b67ca0c8c20
</span><br>
<span class="quotelev1">&gt; [r1i0n9:09192] [ 0] /lib64/libpthread.so.0 [0x2b67bfdb1c00]
</span><br>
<span class="quotelev1">&gt; [r1i0n9:09192] [ 1] /sw/openmpi_intel/1.2.8/lib/libmpi.so. 
</span><br>
<span class="quotelev1">&gt; 0(ompi_free_list_grow+0x14a) [0x2b67bf499b38]
</span><br>
<span class="quotelev1">&gt; [r1i0n9:09192] [ 2] /sw/openmpi_intel/1.2.8/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_btl_sm.so(mca_btl_sm_alloc+0x321) [0x2b67c3a43e15]
</span><br>
<span class="quotelev1">&gt; [r1i0n9:09192] [ 3] /sw/openmpi_intel/1.2.8/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1.so(mca_pml_ob1_send_request_start_copy+0x26d)  
</span><br>
<span class="quotelev1">&gt; [0x2b67c34e9041]
</span><br>
<span class="quotelev1">&gt; [r1i0n9:09192] [ 4] /sw/openmpi_intel/1.2.8/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1.so(mca_pml_ob1_isend+0x540) [0x2b67c34e17ec]
</span><br>
<span class="quotelev1">&gt; [r1i0n9:09192] [ 5] /sw/openmpi_intel/1.2.8/lib/libmpi.so. 
</span><br>
<span class="quotelev1">&gt; 0(PMPI_Isend+0x63) [0x2b67bf4dcd1f]
</span><br>
<span class="quotelev1">&gt; [r1i0n9:09192] [ 6] /sw/openmpi_intel/1.2.8/lib/libmpi_f77.so. 
</span><br>
<span class="quotelev1">&gt; 0(pmpi_isend+0x8f) [0x2b67bf36a03f]
</span><br>
<span class="quotelev1">&gt; [r1i0n9:09192] [ 7] dsimpletest(dmumps_comm_buffer_mp_dmumps_519_ 
</span><br>
<span class="quotelev1">&gt; +0x449) [0x53e19b]
</span><br>
<span class="quotelev1">&gt; [r1i0n9:09192] [ 8] dsimpletest(dmumps_load_mp_dmumps_512_+0x20b)  
</span><br>
<span class="quotelev1">&gt; [0x54fda1]
</span><br>
<span class="quotelev1">&gt; [r1i0n9:09192] [ 9] dsimpletest(dmumps_251_+0x4995) [0x4d273b]
</span><br>
<span class="quotelev1">&gt; [r1i0n9:09192] [10] dsimpletest(dmumps_244_+0x808) [0x484e38]
</span><br>
<span class="quotelev1">&gt; [r1i0n9:09192] [11] dsimpletest(dmumps_142_+0x8717) [0x4bf5eb]
</span><br>
<span class="quotelev1">&gt; [r1i0n9:09192] [12] dsimpletest(dmumps_+0x1554) [0x43a720]
</span><br>
<span class="quotelev1">&gt; [r1i0n9:09192] [13] dsimpletest(MAIN__+0x50b) [0x41e4c3]
</span><br>
<span class="quotelev1">&gt; [r1i0n9:09192] [14] dsimpletest(main+0x3c) [0x683d4c]
</span><br>
<span class="quotelev1">&gt; [r1i0n9:09192] [15] /lib64/libc.so.6(__libc_start_main+0xf4)  
</span><br>
<span class="quotelev1">&gt; [0x2b67bfeda184]
</span><br>
<span class="quotelev1">&gt; [r1i0n9:09192] [16] dsimpletest(dtrmv_+0xa1) [0x41df29]
</span><br>
<span class="quotelev1">&gt; [r1i0n9:09192] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Most of the software infrastructure is provided by the Intel  
</span><br>
<span class="quotelev1">&gt; propack.  Any hints of where to look further into this bug?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Geraldo Veiga &lt;gveiga_at_[hidden] &lt;mailto:gveiga_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Peter Cebull
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Geraldo Veiga &lt;gveiga_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7316.php">Peter Cebull: "Re: [OMPI users] Bus Error in ompi_free_list_grow"</a>
<li><strong>Previous message:</strong> <a href="7314.php">Ralph Castain: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<li><strong>In reply to:</strong> <a href="7312.php">Geraldo Veiga: "Re: [OMPI users] Bus Error in ompi_free_list_grow"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7316.php">Peter Cebull: "Re: [OMPI users] Bus Error in ompi_free_list_grow"</a>
<li><strong>Reply:</strong> <a href="7316.php">Peter Cebull: "Re: [OMPI users] Bus Error in ompi_free_list_grow"</a>
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
