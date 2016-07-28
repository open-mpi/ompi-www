<?
$subject_val = "Re: [OMPI users] Bus Error in ompi_free_list_grow";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 14 07:41:33 2008" -->
<!-- isoreceived="20081114124133" -->
<!-- sent="Fri, 14 Nov 2008 10:41:27 -0200" -->
<!-- isosent="20081114124127" -->
<!-- name="Geraldo Veiga" -->
<!-- email="gveiga+openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bus Error in ompi_free_list_grow" -->
<!-- id="5969679e0811140441i789e07f1k40cf03fd648f6cc3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="491C4B61.3000204_at_inl.gov" -->
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
<strong>From:</strong> Geraldo Veiga (<em>gveiga+openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-14 07:41:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7313.php">Jeff Squyres: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>Previous message:</strong> <a href="7311.php">Sun, Yongqi (E F ES EN 72): "[OMPI users] avoid usage of ssh on local machine"</a>
<li><strong>In reply to:</strong> <a href="7307.php">Peter Cebull: "Re: [OMPI users] Bus Error in ompi_free_list_grow"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7315.php">Jeff Squyres: "Re: [OMPI users] Bus Error in ompi_free_list_grow"</a>
<li><strong>Reply:</strong> <a href="7315.php">Jeff Squyres: "Re: [OMPI users] Bus Error in ompi_free_list_grow"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Peter.  Blocking the shared memory layer did the trick for our
<br>
program too.
<br>
<p>For the record, we also have SGI Propack 6 installed
<br>
(sgi-propack-release-6-sgi600r3).
<br>
<p>Is the on-node shared memory support completely blocked?  What if the MPI
<br>
process calls a procedure that uses OpenMP threads, for instance?
<br>
<p><p>On Thu, Nov 13, 2008 at 1:44 PM, Peter Cebull &lt;peter.cebull_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Geraldo,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The previous message you saw was for our Altix ICE system. Since we started
</span><br>
<span class="quotelev1">&gt; seeing these errors after upgrading to SGI Propack 6, I wonder if there's a
</span><br>
<span class="quotelev1">&gt; bug somewhere in the Propack software or an incompatibility between Open MPI
</span><br>
<span class="quotelev1">&gt; and OFED 1.3 (we had no problems under OFED 1.2). A workaround I stumbled
</span><br>
<span class="quotelev1">&gt; across is to turn off the sm component:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl ^sm . . .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That seems to allow our application to run, although I guess at the expense
</span><br>
<span class="quotelev1">&gt; of losing on-node shared memory support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Peter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Geraldo Veiga wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi to all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using the same subject of a recent message I found in the list
</span><br>
<span class="quotelev2">&gt;&gt; archives of this mailing list:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2008/10/7025.php">http://www.open-mpi.org/community/lists/users/2008/10/7025.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There was no follow-up  on that one, but will add this similar report in
</span><br>
<span class="quotelev2">&gt;&gt; case a list member can give us an idea of how to correct it.  Or whose bug
</span><br>
<span class="quotelev2">&gt;&gt; this could be.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My application behaves as expected when I run it in a single host and
</span><br>
<span class="quotelev2">&gt;&gt; multiple MPI nodes  of  our  SGI Altix ICE 8200 cluster  with in InfiniBand.
</span><br>
<span class="quotelev2">&gt;&gt;   When I try the same with multiple hosts, using the PBS batch system the
</span><br>
<span class="quotelev2">&gt;&gt; program terminates with a segmentation fault:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------
</span><br>
<span class="quotelev2">&gt;&gt; [r1i0n9:09192] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [r1i0n9:09192] Signal: Bus error (7)
</span><br>
<span class="quotelev2">&gt;&gt; [r1i0n9:09192] Signal code:  (2)
</span><br>
<span class="quotelev2">&gt;&gt; [r1i0n9:09192] Failing at address: 0x2b67ca0c8c20
</span><br>
<span class="quotelev2">&gt;&gt; [r1i0n9:09192] [ 0] /lib64/libpthread.so.0 [0x2b67bfdb1c00]
</span><br>
<span class="quotelev2">&gt;&gt; [r1i0n9:09192] [ 1]
</span><br>
<span class="quotelev2">&gt;&gt; /sw/openmpi_intel/1.2.8/lib/libmpi.so.0(ompi_free_list_grow+0x14a)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2b67bf499b38]
</span><br>
<span class="quotelev2">&gt;&gt; [r1i0n9:09192] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt; /sw/openmpi_intel/1.2.8/lib/openmpi/mca_btl_sm.so(mca_btl_sm_alloc+0x321)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2b67c3a43e15]
</span><br>
<span class="quotelev2">&gt;&gt; [r1i0n9:09192] [ 3]
</span><br>
<span class="quotelev2">&gt;&gt; /sw/openmpi_intel/1.2.8/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_send_request_start_copy+0x26d)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2b67c34e9041]
</span><br>
<span class="quotelev2">&gt;&gt; [r1i0n9:09192] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt; /sw/openmpi_intel/1.2.8/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_isend+0x540)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2b67c34e17ec]
</span><br>
<span class="quotelev2">&gt;&gt; [r1i0n9:09192] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt; /sw/openmpi_intel/1.2.8/lib/libmpi.so.0(PMPI_Isend+0x63) [0x2b67bf4dcd1f]
</span><br>
<span class="quotelev2">&gt;&gt; [r1i0n9:09192] [ 6]
</span><br>
<span class="quotelev2">&gt;&gt; /sw/openmpi_intel/1.2.8/lib/libmpi_f77.so.0(pmpi_isend+0x8f)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2b67bf36a03f]
</span><br>
<span class="quotelev2">&gt;&gt; [r1i0n9:09192] [ 7] dsimpletest(dmumps_comm_buffer_mp_dmumps_519_+0x449)
</span><br>
<span class="quotelev2">&gt;&gt; [0x53e19b]
</span><br>
<span class="quotelev2">&gt;&gt; [r1i0n9:09192] [ 8] dsimpletest(dmumps_load_mp_dmumps_512_+0x20b)
</span><br>
<span class="quotelev2">&gt;&gt; [0x54fda1]
</span><br>
<span class="quotelev2">&gt;&gt; [r1i0n9:09192] [ 9] dsimpletest(dmumps_251_+0x4995) [0x4d273b]
</span><br>
<span class="quotelev2">&gt;&gt; [r1i0n9:09192] [10] dsimpletest(dmumps_244_+0x808) [0x484e38]
</span><br>
<span class="quotelev2">&gt;&gt; [r1i0n9:09192] [11] dsimpletest(dmumps_142_+0x8717) [0x4bf5eb]
</span><br>
<span class="quotelev2">&gt;&gt; [r1i0n9:09192] [12] dsimpletest(dmumps_+0x1554) [0x43a720]
</span><br>
<span class="quotelev2">&gt;&gt; [r1i0n9:09192] [13] dsimpletest(MAIN__+0x50b) [0x41e4c3]
</span><br>
<span class="quotelev2">&gt;&gt; [r1i0n9:09192] [14] dsimpletest(main+0x3c) [0x683d4c]
</span><br>
<span class="quotelev2">&gt;&gt; [r1i0n9:09192] [15] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2b67bfeda184]
</span><br>
<span class="quotelev2">&gt;&gt; [r1i0n9:09192] [16] dsimpletest(dtrmv_+0xa1) [0x41df29]
</span><br>
<span class="quotelev2">&gt;&gt; [r1i0n9:09192] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Most of the software infrastructure is provided by the Intel propack.  Any
</span><br>
<span class="quotelev2">&gt;&gt; hints of where to look further into this bug?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Geraldo Veiga &lt;gveiga_at_[hidden] &lt;mailto:gveiga_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<span class="quotelev2">&gt;&gt;
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
<p><p><p><pre>
-- 
Geraldo Veiga &lt;gveiga_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7312/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7313.php">Jeff Squyres: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>Previous message:</strong> <a href="7311.php">Sun, Yongqi (E F ES EN 72): "[OMPI users] avoid usage of ssh on local machine"</a>
<li><strong>In reply to:</strong> <a href="7307.php">Peter Cebull: "Re: [OMPI users] Bus Error in ompi_free_list_grow"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7315.php">Jeff Squyres: "Re: [OMPI users] Bus Error in ompi_free_list_grow"</a>
<li><strong>Reply:</strong> <a href="7315.php">Jeff Squyres: "Re: [OMPI users] Bus Error in ompi_free_list_grow"</a>
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
