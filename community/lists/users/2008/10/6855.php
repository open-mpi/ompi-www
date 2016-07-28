<?
$subject_val = "Re: [OMPI users] segfault issue - possible bug in openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 17:48:53 2008" -->
<!-- isoreceived="20081003214853" -->
<!-- sent="Fri, 3 Oct 2008 14:40:40 -0700" -->
<!-- isosent="20081003214040" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segfault issue - possible bug in openmpi" -->
<!-- id="431C501B-2944-45AB-8A39-DE6C094A7121_at_rain.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="f50c46db0810031430h49ca9dd5jd8411929280cecb_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-10-03 17:40:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6856.php">Raymond Muno: "[OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<li><strong>Previous message:</strong> <a href="6854.php">Daniel Hansen: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<li><strong>In reply to:</strong> <a href="6854.php">Daniel Hansen: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6859.php">Shafagh Jafer: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<li><strong>Reply:</strong> <a href="6859.php">Shafagh Jafer: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Daniel,
<br>
<p>Are you using threads. I don't think the opempi-1.2.x work with threads.
<br>
<p>Doug Reeder
<br>
On Oct 3, 2008, at 2:30 PM, Daniel Hansen wrote:
<br>
<p><span class="quotelev1">&gt; Oh, by the way, here is the segfault:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [m4b-1-8:11481] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [m4b-1-8:11481] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [m4b-1-8:11481] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [m4b-1-8:11481] Failing at address: 0x2b91c69eed
</span><br>
<span class="quotelev1">&gt; [m4b-1-8:11483] [ 0] /lib64/libpthread.so.0 [0x33e8c0de70]
</span><br>
<span class="quotelev1">&gt; [m4b-1-8:11483] [ 1] /fslhome/dhansen7/openmpi/lib/libmpi.so.0  
</span><br>
<span class="quotelev1">&gt; [0x2aaaaabea7c0]
</span><br>
<span class="quotelev1">&gt; [m4b-1-8:11483] [ 2] /fslhome/dhansen7/openmpi/lib/libmpi.so.0  
</span><br>
<span class="quotelev1">&gt; [0x2aaaaabea675]
</span><br>
<span class="quotelev1">&gt; [m4b-1-8:11483] [ 3] /fslhome/dhansen7/openmpi/lib/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; (mca_pml_ob1_send+0x2da) [0x2aaaaabeaf55]
</span><br>
<span class="quotelev1">&gt; [m4b-1-8:11483] [ 4] /fslhome/dhansen7/openmpi/lib/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; (MPI_Send+0x28e) [0x2aaaaab52c5a]
</span><br>
<span class="quotelev1">&gt; [m4b-1-8:11483] [ 5] /fslhome/dhansen7/compute/for_DanielHansen/ 
</span><br>
<span class="quotelev1">&gt; replica_mpi_marylou2/Openmpi_md_twham(twham_init+0x708) [0x42a8a8]
</span><br>
<span class="quotelev1">&gt; [m4b-1-8:11483] [ 6] /fslhome/dhansen7/compute/for_DanielHansen/ 
</span><br>
<span class="quotelev1">&gt; replica_mpi_marylou2/Openmpi_md_twham(repexch+0x73c) [0x425d5c]
</span><br>
<span class="quotelev1">&gt; [m4b-1-8:11483] [ 7] /fslhome/dhansen7/compute/for_DanielHansen/ 
</span><br>
<span class="quotelev1">&gt; replica_mpi_marylou2/Openmpi_md_twham(main+0x855) [0x4133a5]
</span><br>
<span class="quotelev1">&gt; [m4b-1-8:11483] [ 8] /lib64/libc.so.6(__libc_start_main+0xf4)  
</span><br>
<span class="quotelev1">&gt; [0x33e841d8a4]
</span><br>
<span class="quotelev1">&gt; [m4b-1-8:11483] [ 9] /fslhome/dhansen7/compute/for_DanielHansen/ 
</span><br>
<span class="quotelev1">&gt; replica_mpi_marylou2/Openmpi_md_twham [0x4040b9]
</span><br>
<span class="quotelev1">&gt; [m4b-1-8:11483] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Oct 3, 2008 at 3:20 PM, Daniel Hansen &lt;dhansen_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I have been testing some code against openmpi lately that always  
</span><br>
<span class="quotelev1">&gt; causes it to crash during certain mpi function calls.  The code  
</span><br>
<span class="quotelev1">&gt; does not seem to be the problem, as it runs just fine against  
</span><br>
<span class="quotelev1">&gt; mpich.  I have tested it against openmpi 1.2.5, 1.2.6, and 1.2.7  
</span><br>
<span class="quotelev1">&gt; and they all exhibit the same problem.  Also, the problem only  
</span><br>
<span class="quotelev1">&gt; occurs in openmpi when running more than 16 processes.  I have  
</span><br>
<span class="quotelev1">&gt; posted this stack trace to the list before, but I am submitting it  
</span><br>
<span class="quotelev1">&gt; now as a potential bug report.  I need some help debugging it and  
</span><br>
<span class="quotelev1">&gt; finding out exactly what is going on in openmpi when the segfault  
</span><br>
<span class="quotelev1">&gt; occurs.  Are there any suggestions on how best to do this?  Is  
</span><br>
<span class="quotelev1">&gt; there an easy way to attach gdb to one of the processes or  
</span><br>
<span class="quotelev1">&gt; something??  I have already compiled openmpi with debugging, memory  
</span><br>
<span class="quotelev1">&gt; profiling, etc.  How can I best take advantage of these features?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Daniel Hansen
</span><br>
<span class="quotelev1">&gt; Systems Administrator
</span><br>
<span class="quotelev1">&gt; BYU Fulton Supercomputing Lab
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6855/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6856.php">Raymond Muno: "[OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<li><strong>Previous message:</strong> <a href="6854.php">Daniel Hansen: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<li><strong>In reply to:</strong> <a href="6854.php">Daniel Hansen: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6859.php">Shafagh Jafer: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<li><strong>Reply:</strong> <a href="6859.php">Shafagh Jafer: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
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
