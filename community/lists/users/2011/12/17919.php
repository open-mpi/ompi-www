<?
$subject_val = "[OMPI users] mca_btl_sm_component_progress read an unknown type of header";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  9 10:44:23 2011" -->
<!-- isoreceived="20111209154423" -->
<!-- sent="Fri, 9 Dec 2011 10:43:54 -0500" -->
<!-- isosent="20111209154354" -->
<!-- name="Patrik Jonsson" -->
<!-- email="code_at_[hidden]" -->
<!-- subject="[OMPI users] mca_btl_sm_component_progress read an unknown type of header" -->
<!-- id="CA+Py04C8QbKc6h7LwasGxn_ibaO1o5mrY2BuTNKyggbGJWXF7g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mca_btl_sm_component_progress read an unknown type of header<br>
<strong>From:</strong> Patrik Jonsson (<em>code_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-09 10:43:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17920.php">Brett Tully: "[OMPI users] MPI_Allgather problem"</a>
<li><strong>Previous message:</strong> <a href="17918.php">Patrik Jonsson: "Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>This question was buried in an earlier question, and I got no replies,
<br>
so I'll try reposting it with a more enticing subject.
<br>
<p>I have a multithreaded openmpi code where each task has N+1 threads,
<br>
the N threads send nonblocking messages that are received by the 1
<br>
thread on the other tasks. When I run this code with 2 tasks, 5+1
<br>
threads on a single node with 12 cores, after about a million messages
<br>
has been exchanged, the tasks segfault after printing the following
<br>
error:
<br>
<p>[sunrise01.rc.fas.harvard.edu:10009] mca_btl_sm_component_progress
<br>
read an unknown type of header
<br>
<p>The debugger spits me out on line 674 of btl_sm_component.c, in the
<br>
default of a switch on fragment type. There's a comment there that
<br>
says:
<br>
<p>* This code path should presumably never be called.
<br>
* It's unclear if it should exist or, if so, how it should be written.
<br>
* If we want to return it to the sending process,
<br>
* we have to figure out who the sender is.
<br>
* It seems we need to subtract the mask bits.
<br>
* Then, hopefully this is an sm header that has an smp_rank field.
<br>
* Presumably that means the received header was relative.
<br>
* Or, maybe this code should just be removed.
<br>
<p>It seems like whoever wrote that code didn't know quite what was going
<br>
on, and I guess the assumption was wrong because dereferencing that
<br>
result seems to be what's causing the segfault. Does anyone here know
<br>
what could cause this error? If I run the code with the tcp btl
<br>
instead of sm, it runs fine, albeit with a bit lower performance.
<br>
<p>This is with OpenMPI 1.5.3 using MPI_THREAD_MULTIPLE on a Dell
<br>
PowerEdge C6100 running linux kernel 2.6.18-194.32.1.el5, using Intel
<br>
12.3.174. I've attached the ompi_info output.
<br>
<p>Thanks,
<br>
<p>/Patrik J.
<br>
<p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17919/ompi_info.gz">ompi_info.gz</a>
</ul>
<!-- attachment="ompi_info.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17920.php">Brett Tully: "[OMPI users] MPI_Allgather problem"</a>
<li><strong>Previous message:</strong> <a href="17918.php">Patrik Jonsson: "Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
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
