<?
$subject_val = "Re: [OMPI users] segfault issue - possible bug in openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct  4 20:29:48 2008" -->
<!-- isoreceived="20081005002948" -->
<!-- sent="Sat, 4 Oct 2008 17:29:44 -0700 (PDT)" -->
<!-- isosent="20081005002944" -->
<!-- name="Shafagh Jafer" -->
<!-- email="barfy27_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segfault issue - possible bug in openmpi" -->
<!-- id="598023.16356.qm_at_web34803.mail.mud.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="431C501B-2944-45AB-8A39-DE6C094A7121_at_rain.org" -->
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
<strong>From:</strong> Shafagh Jafer (<em>barfy27_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-04 20:29:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6860.php">Doug Reeder: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<li><strong>Previous message:</strong> <a href="6858.php">Raymond Muno: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<li><strong>In reply to:</strong> <a href="6855.php">Doug Reeder: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6860.php">Doug Reeder: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<li><strong>Reply:</strong> <a href="6860.php">Doug Reeder: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Doug Reeder,
<br>
Daniel is saying that the problem only occurs in openmpi when running more than 16 processes. So could that still be cause becasue openmpi does not support threads??!! 
<br>
<p>--- On Fri, 10/3/08, Doug Reeder &lt;dlr_at_[hidden]&gt; wrote:
<br>
<p>From: Doug Reeder &lt;dlr_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] segfault issue - possible bug in openmpi
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Friday, October 3, 2008, 2:40 PM
<br>
<p><p>Daniel,
<br>
<p><p>Are you using threads. I don't think the opempi-1.2.x work with threads.
<br>
<p><p>Doug Reeder
<br>
<p><p>On Oct 3, 2008, at 2:30 PM, Daniel Hansen wrote:
<br>
<p><p>Oh, by the way, here is the segfault:
<br>
<p>[m4b-1-8:11481] *** Process received signal ***
<br>
[m4b-1-8:11481] Signal: Segmentation fault (11)
<br>
[m4b-1-8:11481] Signal code: Address not mapped (1)
<br>
[m4b-1-8:11481] Failing at address: 0x2b91c69eed
<br>
[m4b-1-8:11483] [ 0] /lib64/libpthread.so.0 [0x33e8c0de70]
<br>
[m4b-1-8:11483] [ 1] /fslhome/dhansen7/openmpi/lib/libmpi.so.0 [0x2aaaaabea7c0]
<br>
[m4b-1-8:11483] [ 2] /fslhome/dhansen7/openmpi/lib/libmpi.so.0 [0x2aaaaabea675]
<br>
[m4b-1-8:11483] [ 3] /fslhome/dhansen7/openmpi/lib/libmpi.so.0(mca_pml_ob1_send+0x2da) [0x2aaaaabeaf55]
<br>
[m4b-1-8:11483] [ 4] /fslhome/dhansen7/openmpi/lib/libmpi.so.0(MPI_Send+0x28e) [0x2aaaaab52c5a]
<br>
[m4b-1-8:11483] [ 5] /fslhome/dhansen7/compute/for_DanielHansen/replica_mpi_marylou2/Openmpi_md_twham(twham_init+0x708) [0x42a8a8]
<br>
[m4b-1-8:11483] [ 6] /fslhome/dhansen7/compute/for_DanielHansen/replica_mpi_marylou2/Openmpi_md_twham(repexch+0x73c) [0x425d5c]
<br>
[m4b-1-8:11483] [ 7] /fslhome/dhansen7/compute/for_DanielHansen/replica_mpi_marylou2/Openmpi_md_twham(main+0x855) [0x4133a5]
<br>
[m4b-1-8:11483] [ 8] /lib64/libc.so.6(__libc_start_main+0xf4) [0x33e841d8a4]
<br>
[m4b-1-8:11483] [ 9] /fslhome/dhansen7/compute/for_DanielHansen/replica_mpi_marylou2/Openmpi_md_twham [0x4040b9]
<br>
[m4b-1-8:11483] *** End of error message ***
<br>
<p><p><p><p>On Fri, Oct 3, 2008 at 3:20 PM, Daniel Hansen &lt;dhansen_at_[hidden]&gt; wrote:
<br>
<p><p>I have been testing some code against openmpi lately that always causes it to crash during certain mpi function calls.&#160; The code does not seem to be the problem, as it runs just fine against mpich.&#160; I have tested it against openmpi 1.2.5, 1.2.6, and 1.2.7 and they all exhibit the same problem.&#160; Also, the problem only occurs in openmpi when running more than 16 processes.&#160; I have posted this stack trace to the list before, but I am submitting it now as a potential bug report.&#160; I need some help debugging it and finding out exactly what is going on in openmpi when the segfault occurs.&#160; Are there any suggestions on how best to do this?&#160; Is there an easy way to attach gdb to one of the processes or something??&#160; I have already compiled openmpi with debugging, memory profiling, etc.&#160; How can I best take advantage of these features?
<br>
<p>Thanks,
<br>
Daniel Hansen
<br>
Systems Administrator
<br>
BYU Fulton Supercomputing Lab
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


      
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6859/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6860.php">Doug Reeder: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<li><strong>Previous message:</strong> <a href="6858.php">Raymond Muno: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<li><strong>In reply to:</strong> <a href="6855.php">Doug Reeder: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6860.php">Doug Reeder: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<li><strong>Reply:</strong> <a href="6860.php">Doug Reeder: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
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
