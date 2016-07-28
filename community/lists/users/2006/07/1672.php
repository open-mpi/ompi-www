<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 20 18:17:45 2006" -->
<!-- isoreceived="20060720221745" -->
<!-- sent="Thu, 20 Jul 2006 18:17:34 -0400" -->
<!-- isosent="20060720221734" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Finalize runtime error" -->
<!-- id="C0E5793E.B1AA%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1153188840.2642.9.camel_at_manallpt.cse.unsw.EDU.AU" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-20 18:17:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1673.php">Jeff Squyres: "Re: [OMPI users] BTL devices"</a>
<li><strong>Previous message:</strong> <a href="1671.php">Frank Gruellich: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>In reply to:</strong> <a href="1639.php">Manal Helal: "[OMPI users] MPI_Finalize runtime error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What version of Open MPI are you using?
<br>
<p>Can you run your application through a memory-checking debugger such as
<br>
Valgrind to see if it gives any more information about where the original
<br>
problem occurs?
<br>
<p><p>On 7/17/06 10:14 PM, &quot;Manal Helal&quot; &lt;manalorama_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; after I finish execution, and all results are reported, and both
</span><br>
<span class="quotelev1">&gt; processes are about to call MPI_Finalize, I get this runtime error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; any help is appreciated, thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Manal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0xa
</span><br>
<span class="quotelev1">&gt; [0] func:/usr/local/bin/openmpi/lib/libopal.so.0 [0x3e526c]
</span><br>
<span class="quotelev1">&gt; [1] func:[0x4bfc7440]
</span><br>
<span class="quotelev1">&gt; [2] func:/usr/local/bin/openmpi/lib/libopal.so.0(free+0xb4) [0x3e9ff4]
</span><br>
<span class="quotelev1">&gt; [3] func:/usr/local/bin/openmpi/lib/libmpi.so.0 [0x70484e]
</span><br>
<span class="quotelev1">&gt; [4]
</span><br>
<span class="quotelev1">&gt; func:/usr/local/bin/openmpi//lib/openmpi/mca_btl_tcp.so(mca_btl_tcp_component_
</span><br>
<span class="quotelev1">&gt; close+0x278) [0xc78a58]
</span><br>
<span class="quotelev1">&gt; [5]
</span><br>
<span class="quotelev1">&gt; func:/usr/local/bin/openmpi/lib/libopal.so.0(mca_base_components_close
</span><br>
<span class="quotelev1">&gt; +0x6a) [0x3d93fa]
</span><br>
<span class="quotelev1">&gt; [6] func:/usr/local/bin/openmpi/lib/libmpi.so.0(mca_btl_base_close+0xbd)
</span><br>
<span class="quotelev1">&gt; [0x75154d]
</span><br>
<span class="quotelev1">&gt; [7] func:/usr/local/bin/openmpi/lib/libmpi.so.0(mca_bml_base_close+0x17)
</span><br>
<span class="quotelev1">&gt; [0x751427]
</span><br>
<span class="quotelev1">&gt; [8]
</span><br>
<span class="quotelev1">&gt; func:/usr/local/bin/openmpi//lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_component_
</span><br>
<span class="quotelev1">&gt; close+0x3a) [0x625a0a]
</span><br>
<span class="quotelev1">&gt; [9]
</span><br>
<span class="quotelev1">&gt; func:/usr/local/bin/openmpi/lib/libopal.so.0(mca_base_components_close
</span><br>
<span class="quotelev1">&gt; +0x6a) [0x3d93fa]
</span><br>
<span class="quotelev1">&gt; [10] func:/usr/local/bin/openmpi/lib/libmpi.so.0(mca_pml_base_close
</span><br>
<span class="quotelev1">&gt; +0x65) [0x7580e5]
</span><br>
<span class="quotelev1">&gt; [11] func:/usr/local/bin/openmpi/lib/libmpi.so.0(ompi_mpi_finalize
</span><br>
<span class="quotelev1">&gt; +0x1b4) [0x71e984]
</span><br>
<span class="quotelev1">&gt; [12] func:/usr/local/bin/openmpi/lib/libmpi.so.0(MPI_Finalize+0x4b)
</span><br>
<span class="quotelev1">&gt; [0x73cb5b]
</span><br>
<span class="quotelev1">&gt; [13] func:master/mmMaster(main+0x3cc) [0x804b2dc]
</span><br>
<span class="quotelev1">&gt; [14] func:/lib/libc.so.6(__libc_start_main+0xdc) [0x4bffa724]
</span><br>
<span class="quotelev1">&gt; [15] func:master/mmMaster [0x8049b91]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
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
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1673.php">Jeff Squyres: "Re: [OMPI users] BTL devices"</a>
<li><strong>Previous message:</strong> <a href="1671.php">Frank Gruellich: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>In reply to:</strong> <a href="1639.php">Manal Helal: "[OMPI users] MPI_Finalize runtime error"</a>
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
