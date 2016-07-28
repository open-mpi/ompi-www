<?
$subject_val = "Re: [OMPI users] segfault issue - possible bug in openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct  4 21:36:32 2008" -->
<!-- isoreceived="20081005013632" -->
<!-- sent="Sat, 4 Oct 2008 18:28:04 -0700" -->
<!-- isosent="20081005012804" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segfault issue - possible bug in openmpi" -->
<!-- id="7B2F02C7-DF84-4162-BBE1-682CAFCADF94_at_rain.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="598023.16356.qm_at_web34803.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Doug Reeder (<em>dlr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-04 21:28:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6861.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Previous message:</strong> <a href="6859.php">Shafagh Jafer: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<li><strong>In reply to:</strong> <a href="6859.php">Shafagh Jafer: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6868.php">Jeff Squyres: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<li><strong>Reply:</strong> <a href="6868.php">Jeff Squyres: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shafagh,
<br>
<p>I missed the dependence on the number of processors. Apparently there  
<br>
is some thread support.
<br>
<p>Doug
<br>
On Oct 4, 2008, at 5:29 PM, Shafagh Jafer wrote:
<br>
<p><span class="quotelev1">&gt; Doug Reeder,
</span><br>
<span class="quotelev1">&gt; Daniel is saying that the problem only occurs in openmpi when  
</span><br>
<span class="quotelev1">&gt; running more than 16 processes. So could that still be cause  
</span><br>
<span class="quotelev1">&gt; becasue openmpi does not support threads??!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On Fri, 10/3/08, Doug Reeder &lt;dlr_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; From: Doug Reeder &lt;dlr_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] segfault issue - possible bug in openmpi
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Friday, October 3, 2008, 2:40 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Daniel,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you using threads. I don't think the opempi-1.2.x work with  
</span><br>
<span class="quotelev1">&gt; threads.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt; On Oct 3, 2008, at 2:30 PM, Daniel Hansen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Oh, by the way, here is the segfault:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [m4b-1-8:11481] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [m4b-1-8:11481] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [m4b-1-8:11481] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [m4b-1-8:11481] Failing at address: 0x2b91c69eed
</span><br>
<span class="quotelev2">&gt;&gt; [m4b-1-8:11483] [ 0] /lib64/libpthread.so.0 [0x33e8c0de70]
</span><br>
<span class="quotelev2">&gt;&gt; [m4b-1-8:11483] [ 1] /fslhome/dhansen7/openmpi/lib/libmpi.so.0  
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaaaabea7c0]
</span><br>
<span class="quotelev2">&gt;&gt; [m4b-1-8:11483] [ 2] /fslhome/dhansen7/openmpi/lib/libmpi.so.0  
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaaaabea675]
</span><br>
<span class="quotelev2">&gt;&gt; [m4b-1-8:11483] [ 3] /fslhome/dhansen7/openmpi/lib/libmpi.so.0 
</span><br>
<span class="quotelev2">&gt;&gt; (mca_pml_ob1_send+0x2da) [0x2aaaaabeaf55]
</span><br>
<span class="quotelev2">&gt;&gt; [m4b-1-8:11483] [ 4] /fslhome/dhansen7/openmpi/lib/libmpi.so.0 
</span><br>
<span class="quotelev2">&gt;&gt; (MPI_Send+0x28e) [0x2aaaaab52c5a]
</span><br>
<span class="quotelev2">&gt;&gt; [m4b-1-8:11483] [ 5] /fslhome/dhansen7/compute/for_DanielHansen/ 
</span><br>
<span class="quotelev2">&gt;&gt; replica_mpi_marylou2/Openmpi_md_twham(twham_init+0x708) [0x42a8a8]
</span><br>
<span class="quotelev2">&gt;&gt; [m4b-1-8:11483] [ 6] /fslhome/dhansen7/compute/for_DanielHansen/ 
</span><br>
<span class="quotelev2">&gt;&gt; replica_mpi_marylou2/Openmpi_md_twham(repexch+0x73c) [0x425d5c]
</span><br>
<span class="quotelev2">&gt;&gt; [m4b-1-8:11483] [ 7] /fslhome/dhansen7/compute/for_DanielHansen/ 
</span><br>
<span class="quotelev2">&gt;&gt; replica_mpi_marylou2/Openmpi_md_twham(main+0x855) [0x4133a5]
</span><br>
<span class="quotelev2">&gt;&gt; [m4b-1-8:11483] [ 8] /lib64/libc.so.6(__libc_start_main+0xf4)  
</span><br>
<span class="quotelev2">&gt;&gt; [0x33e841d8a4]
</span><br>
<span class="quotelev2">&gt;&gt; [m4b-1-8:11483] [ 9] /fslhome/dhansen7/compute/for_DanielHansen/ 
</span><br>
<span class="quotelev2">&gt;&gt; replica_mpi_marylou2/Openmpi_md_twham [0x4040b9]
</span><br>
<span class="quotelev2">&gt;&gt; [m4b-1-8:11483] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Oct 3, 2008 at 3:20 PM, Daniel Hansen &lt;dhansen_at_[hidden]&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I have been testing some code against openmpi lately that always  
</span><br>
<span class="quotelev2">&gt;&gt; causes it to crash during certain mpi function calls.  The code  
</span><br>
<span class="quotelev2">&gt;&gt; does not seem to be the problem, as it runs just fine against  
</span><br>
<span class="quotelev2">&gt;&gt; mpich.  I have tested it against openmpi 1.2.5, 1.2.6, and 1.2.7  
</span><br>
<span class="quotelev2">&gt;&gt; and they all exhibit the same problem.  Also, the problem only  
</span><br>
<span class="quotelev2">&gt;&gt; occurs in openmpi when running more than 16 processes.  I have  
</span><br>
<span class="quotelev2">&gt;&gt; posted this stack trace to the list before, but I am submitting it  
</span><br>
<span class="quotelev2">&gt;&gt; now as a potential bug report.  I need some help debugging it and  
</span><br>
<span class="quotelev2">&gt;&gt; finding out exactly what is going on in openmpi when the segfault  
</span><br>
<span class="quotelev2">&gt;&gt; occurs.  Are there any suggestions on how best to do this?  Is  
</span><br>
<span class="quotelev2">&gt;&gt; there an easy way to attach gdb to one of the processes or  
</span><br>
<span class="quotelev2">&gt;&gt; something??  I have already compiled openmpi with debugging,  
</span><br>
<span class="quotelev2">&gt;&gt; memory profiling, etc.  How can I best take advantage of these  
</span><br>
<span class="quotelev2">&gt;&gt; features?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Daniel Hansen
</span><br>
<span class="quotelev2">&gt;&gt; Systems Administrator
</span><br>
<span class="quotelev2">&gt;&gt; BYU Fulton Supercomputing Lab
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6860/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6861.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Previous message:</strong> <a href="6859.php">Shafagh Jafer: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<li><strong>In reply to:</strong> <a href="6859.php">Shafagh Jafer: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6868.php">Jeff Squyres: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<li><strong>Reply:</strong> <a href="6868.php">Jeff Squyres: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
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
