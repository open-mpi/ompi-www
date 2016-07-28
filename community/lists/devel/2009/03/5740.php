<?
$subject_val = "Re: [OMPI devel] ***SPAM*** Re: [ewg] Seg fault running OpenMPI-1.3.1rc4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 11:42:33 2009" -->
<!-- isoreceived="20090330154233" -->
<!-- sent="Mon, 30 Mar 2009 11:42:28 -0400" -->
<!-- isosent="20090330154228" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ***SPAM*** Re: [ewg] Seg fault running OpenMPI-1.3.1rc4" -->
<!-- id="896E5408-0812-4494-9E53-F26BF8D9C4C8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49D0DDB3.80007_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ***SPAM*** Re: [ewg] Seg fault running OpenMPI-1.3.1rc4<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 11:42:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5741.php">Leonardo Fialho: "[OMPI devel] Error in VT"</a>
<li><strong>Previous message:</strong> <a href="5739.php">Steve Wise: "Re: [OMPI devel] ***SPAM*** Re: [ewg] Seg fault running OpenMPI-1.3.1rc4"</a>
<li><strong>In reply to:</strong> <a href="5739.php">Steve Wise: "Re: [OMPI devel] ***SPAM*** Re: [ewg] Seg fault running OpenMPI-1.3.1rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5742.php">Pavel Shamis (Pasha): "Re: [OMPI devel] ***SPAM*** Re: [ewg] Seg fault running	OpenMPI-1.3.1rc4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send a gdb bt from a corresponding corefile?  That would help  
<br>
immensely...
<br>
<p>The stack trace we get from glibc unfortunately does not show file/ 
<br>
line numbers.
<br>
<p><p>On Mar 30, 2009, at 10:56 AM, Steve Wise wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hey Pasha,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just applied r20872 and retested, and I still hit this seg fault.   
</span><br>
<span class="quotelev1">&gt; So
</span><br>
<span class="quotelev1">&gt; I think this is a new bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lemme pull the trunk and try that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I think you problem is related to this bug:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1823">https://svn.open-mpi.org/trac/ompi/ticket/1823</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And it is resolved on the ompi-trunk.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Pasha.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Steve Wise wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; When this happens, that node logs this type of message also in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /var/log/messages:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; IMB-MPI1[8859]: segfault at 0000000000000018 rip 00002b7bfc880800  
</span><br>
<span class="quotelev1">&gt; rsp
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 00007fffb1021330 error 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Steve Wise wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hey Jeff,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Have you seen this?  I'm hitting this regularly running on
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ofed-1.4.1-rc2.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Test:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [ompi_at_vic12 ~]$ cat doit-ompi
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; while : ; do
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        mpirun -np 16 --host vic12-10g,vic20-10g,vic9-10g,vic21-10g
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --mca btl openib,self,sm  --mca btl_openib_max_btls 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/mpi/gcc/openmpi-1.3.1rc4/tests/IMB-3.1/IMB-MPI1 -npmin 16
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; bcast scatter sendrecv exchange &lt;/dev/null
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; done
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Seg Fault output:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [vic21:04047] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [vic21:04047] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [vic21:04047] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [vic21:04047] Failing at address: 0x18
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [vic21:04047] [ 0] /lib64/libpthread.so.0 [0x3dde20e4c0]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [vic21:04047] [ 1]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/mpi/gcc/openmpi-1.3.1rc4/lib64/openmpi/mca_btl_openib.so
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [0x2b911bc33800]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [vic21:04047] [ 2]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/mpi/gcc/openmpi-1.3.1rc4/lib64/openmpi/mca_btl_openib.so
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [0x2b911bc38c2d]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [vic21:04047] [ 3]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/mpi/gcc/openmpi-1.3.1rc4/lib64/openmpi/mca_btl_openib.so
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [0x2b911bc33fcb]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [vic21:04047] [ 4]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/mpi/gcc/openmpi-1.3.1rc4/lib64/openmpi/mca_btl_openib.so
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [0x2b911bc22af8]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [vic21:04047] [ 5]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/mpi/gcc/openmpi-1.3.1rc4/lib64/libopen-pal.so. 
</span><br>
<span class="quotelev1">&gt; 0(mca_base_components_close+0x83)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [0x2b911933da33]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [vic21:04047] [ 6]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/mpi/gcc/openmpi-1.3.1rc4/lib64/libmpi.so. 
</span><br>
<span class="quotelev1">&gt; 0(mca_btl_base_close+0xe0)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [0x2b9118ea3fb0]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [vic21:04047] [ 7]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/mpi/gcc/openmpi-1.3.1rc4/lib64/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [0x2b911ba1938f]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [vic21:04047] [ 8]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/mpi/gcc/openmpi-1.3.1rc4/lib64/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [0x2b911b601cde]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [vic21:04047] [ 9] /usr/mpi/gcc/openmpi-1.3.1rc4/lib64/libmpi.so.0
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [0x2b9118e7241b]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [vic21:04047] [10]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/mpi/gcc/openmpi-1.3.1rc4/tests/IMB-3.1/IMB-MPI1(main+0x178)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [0x403498]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [vic21:04047] [11] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [0x3ddd61d974]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [vic21:04047] [12]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/mpi/gcc/openmpi-1.3.1rc4/tests/IMB-3.1/IMB-MPI1 [0x403269]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [vic21:04047] *** End of error message ***
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ewg mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ewg_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://lists.openfabrics.org/cgi-bin/mailman/listinfo/ewg">http://lists.openfabrics.org/cgi-bin/mailman/listinfo/ewg</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; ewg mailing list
</span><br>
<span class="quotelev2">&gt; &gt; ewg_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://lists.openfabrics.org/cgi-bin/mailman/listinfo/ewg">http://lists.openfabrics.org/cgi-bin/mailman/listinfo/ewg</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="5741.php">Leonardo Fialho: "[OMPI devel] Error in VT"</a>
<li><strong>Previous message:</strong> <a href="5739.php">Steve Wise: "Re: [OMPI devel] ***SPAM*** Re: [ewg] Seg fault running OpenMPI-1.3.1rc4"</a>
<li><strong>In reply to:</strong> <a href="5739.php">Steve Wise: "Re: [OMPI devel] ***SPAM*** Re: [ewg] Seg fault running OpenMPI-1.3.1rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5742.php">Pavel Shamis (Pasha): "Re: [OMPI devel] ***SPAM*** Re: [ewg] Seg fault running	OpenMPI-1.3.1rc4"</a>
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
