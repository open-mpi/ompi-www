<?
$subject_val = "Re: [OMPI users] segfault issue - possible bug in openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  6 14:10:18 2008" -->
<!-- isoreceived="20081006181018" -->
<!-- sent="Mon, 6 Oct 2008 14:10:10 -0400" -->
<!-- isosent="20081006181010" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segfault issue - possible bug in openmpi" -->
<!-- id="4334B9B3-D1F8-410F-BC1D-671D533FFD8E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7B2F02C7-DF84-4162-BBE1-682CAFCADF94_at_rain.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] segfault issue - possible bug in openmpi<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-06 14:10:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6869.php">arun dhakne: "[OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<li><strong>Previous message:</strong> <a href="6867.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>In reply to:</strong> <a href="6860.php">Doug Reeder: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, there still could be a dependence on a number of processors and  
<br>
using threads.  But it's not clear from the stack trace if this is a  
<br>
threaded problem or not (and it is correct that OMPI v1.2's thread  
<br>
support is non-functional).
<br>
<p>As for more information that would help diagnose the problem, please see
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>Thanks.
<br>
<p><p>On Oct 4, 2008, at 9:28 PM, Doug Reeder wrote:
<br>
<p><span class="quotelev1">&gt; Shafagh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I missed the dependence on the number of processors. Apparently  
</span><br>
<span class="quotelev1">&gt; there is some thread support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doug
</span><br>
<span class="quotelev1">&gt; On Oct 4, 2008, at 5:29 PM, Shafagh Jafer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Doug Reeder,
</span><br>
<span class="quotelev2">&gt;&gt; Daniel is saying that the problem only occurs in openmpi when  
</span><br>
<span class="quotelev2">&gt;&gt; running more than 16 processes. So could that still be cause  
</span><br>
<span class="quotelev2">&gt;&gt; becasue openmpi does not support threads??!!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- On Fri, 10/3/08, Doug Reeder &lt;dlr_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; From: Doug Reeder &lt;dlr_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] segfault issue - possible bug in openmpi
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Friday, October 3, 2008, 2:40 PM
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Daniel,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you using threads. I don't think the opempi-1.2.x work with  
</span><br>
<span class="quotelev2">&gt;&gt; threads.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Doug Reeder
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 3, 2008, at 2:30 PM, Daniel Hansen wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oh, by the way, here is the segfault:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [m4b-1-8:11481] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [m4b-1-8:11481] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [m4b-1-8:11481] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [m4b-1-8:11481] Failing at address: 0x2b91c69eed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [m4b-1-8:11483] [ 0] /lib64/libpthread.so.0 [0x33e8c0de70]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [m4b-1-8:11483] [ 1] /fslhome/dhansen7/openmpi/lib/libmpi.so.0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2aaaaabea7c0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [m4b-1-8:11483] [ 2] /fslhome/dhansen7/openmpi/lib/libmpi.so.0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2aaaaabea675]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [m4b-1-8:11483] [ 3] /fslhome/dhansen7/openmpi/lib/libmpi.so. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0(mca_pml_ob1_send+0x2da) [0x2aaaaabeaf55]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [m4b-1-8:11483] [ 4] /fslhome/dhansen7/openmpi/lib/libmpi.so. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0(MPI_Send+0x28e) [0x2aaaaab52c5a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [m4b-1-8:11483] [ 5] /fslhome/dhansen7/compute/for_DanielHansen/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; replica_mpi_marylou2/Openmpi_md_twham(twham_init+0x708) [0x42a8a8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [m4b-1-8:11483] [ 6] /fslhome/dhansen7/compute/for_DanielHansen/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; replica_mpi_marylou2/Openmpi_md_twham(repexch+0x73c) [0x425d5c]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [m4b-1-8:11483] [ 7] /fslhome/dhansen7/compute/for_DanielHansen/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; replica_mpi_marylou2/Openmpi_md_twham(main+0x855) [0x4133a5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [m4b-1-8:11483] [ 8] /lib64/libc.so.6(__libc_start_main+0xf4)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x33e841d8a4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [m4b-1-8:11483] [ 9] /fslhome/dhansen7/compute/for_DanielHansen/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; replica_mpi_marylou2/Openmpi_md_twham [0x4040b9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [m4b-1-8:11483] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Oct 3, 2008 at 3:20 PM, Daniel Hansen &lt;dhansen_at_[hidden]&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have been testing some code against openmpi lately that always  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; causes it to crash during certain mpi function calls.  The code  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does not seem to be the problem, as it runs just fine against  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpich.  I have tested it against openmpi 1.2.5, 1.2.6, and 1.2.7  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and they all exhibit the same problem.  Also, the problem only  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; occurs in openmpi when running more than 16 processes.  I have  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; posted this stack trace to the list before, but I am submitting it  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; now as a potential bug report.  I need some help debugging it and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; finding out exactly what is going on in openmpi when the segfault  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; occurs.  Are there any suggestions on how best to do this?  Is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there an easy way to attach gdb to one of the processes or  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something??  I have already compiled openmpi with debugging,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory profiling, etc.  How can I best take advantage of these  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; features?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Daniel Hansen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Systems Administrator
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BYU Fulton Supercomputing Lab
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6869.php">arun dhakne: "[OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<li><strong>Previous message:</strong> <a href="6867.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>In reply to:</strong> <a href="6860.php">Doug Reeder: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
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
