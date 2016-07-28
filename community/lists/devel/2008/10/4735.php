<?
$subject_val = "[OMPI devel] segfault issue - possible bug in openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 18:21:09 2008" -->
<!-- isoreceived="20081003222109" -->
<!-- sent="Fri, 3 Oct 2008 16:21:05 -0600" -->
<!-- isosent="20081003222105" -->
<!-- name="Daniel Hansen" -->
<!-- email="dhansen_at_[hidden]" -->
<!-- subject="[OMPI devel] segfault issue - possible bug in openmpi" -->
<!-- id="f50c46db0810031521t59580051r8f83383b8a02fc48_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] segfault issue - possible bug in openmpi<br>
<strong>From:</strong> Daniel Hansen (<em>dhansen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-03 18:21:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4736.php">Ralf Wildenhues: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Previous message:</strong> <a href="4734.php">George Bosilca: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have been testing some code against openmpi lately that always causes it
<br>
to crash during certain mpi function calls.  The code does not seem to be
<br>
the problem, as it runs just fine against mpich.  I have tested it against
<br>
openmpi 1.2.5, 1.2.6, and 1.2.7 and they all exhibit the same problem.
<br>
Also, the problem only occurs in openmpi when running more than 16
<br>
processes.  I have posted this stack trace to the list before, but I am
<br>
submitting it now as a potential bug report.  I need some help debugging it
<br>
and finding out exactly what is going on in openmpi when the segfault
<br>
occurs.  Are there any suggestions on how best to do this?  Is there an easy
<br>
way to attach gdb to one of the processes or something??  I have already
<br>
compiled openmpi with debugging, memory profiling, etc.  How can I best take
<br>
advantage of these features?
<br>
<p>Here is the segfault:
<br>
[m4b-1-8:11481] *** Process received signal ***
<br>
[m4b-1-8:11481] Signal: Segmentation fault (11)
<br>
[m4b-1-8:11481] Signal code: Address not mapped (1)
<br>
[m4b-1-8:11481] Failing at address: 0x2b91c69eed
<br>
[m4b-1-8:11483] [ 0] /lib64/libpthread.so.0 [0x33e8c0de70]
<br>
[m4b-1-8:11483] [ 1] /fslhome/dhansen7/openmpi/lib/libmpi.so.0
<br>
[0x2aaaaabea7c0]
<br>
[m4b-1-8:11483] [ 2] /fslhome/dhansen7/openmpi/lib/libmpi.so.0
<br>
[0x2aaaaabea675]
<br>
[m4b-1-8:11483] [ 3]
<br>
/fslhome/dhansen7/openmpi/lib/libmpi.so.0(mca_pml_ob1_send+0x2da)
<br>
[0x2aaaaabeaf55]
<br>
[m4b-1-8:11483] [ 4]
<br>
/fslhome/dhansen7/openmpi/lib/libmpi.so.0(MPI_Send+0x28e) [0x2aaaaab52c5a]
<br>
[m4b-1-8:11483] [ 5]
<br>
/fslhome/dhansen7/compute/for_DanielHansen/replica_mpi_marylou2/Openmpi_md_twham(twham_init+0x708)
<br>
[0x42a8a8]
<br>
[m4b-1-8:11483] [ 6]
<br>
/fslhome/dhansen7/compute/for_DanielHansen/replica_mpi_marylou2/Openmpi_md_twham(repexch+0x73c)
<br>
[0x425d5c]
<br>
[m4b-1-8:11483] [ 7]
<br>
/fslhome/dhansen7/compute/for_DanielHansen/replica_mpi_marylou2/Openmpi_md_twham(main+0x855)
<br>
[0x4133a5]
<br>
[m4b-1-8:11483] [ 8] /lib64/libc.so.6(__libc_start_main+0xf4) [0x33e841d8a4]
<br>
[m4b-1-8:11483] [ 9]
<br>
/fslhome/dhansen7/compute/for_DanielHansen/replica_mpi_marylou2/Openmpi_md_twham
<br>
[0x4040b9]
<br>
[m4b-1-8:11483] *** End of error message ***
<br>
<p>There is also an mpi error that just precedes the segfault:
<br>
[m4b-1-7i][0,1,0][btl_tcp_component.c:623:mca_btl_tcp_component_recv_handler]
<br>
errno=11
<br>
[m4b-1-7i][0,1,0][btl_tcp_component.c:623:mca_btl_tcp_component_recv_handler]
<br>
errno=11
<br>
[m4b-1-7i][0,1,0][btl_tcp_component.c:623:mca_btl_tcp_component_recv_handler]
<br>
errno=11
<br>
[m4b-1-7i][0,1,0][btl_tcp_component.c:623:mca_btl_tcp_component_recv_handler]
<br>
errno=11
<br>
<p>Thanks,
<br>
Daniel Hansen
<br>
Systems Administrator
<br>
BYU Fulton Supercomputing Lab
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4735/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4736.php">Ralf Wildenhues: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Previous message:</strong> <a href="4734.php">George Bosilca: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
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
