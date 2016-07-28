<?
$subject_val = "Re: [OMPI users] OpenMP + OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 13:27:45 2008" -->
<!-- isoreceived="20080129182745" -->
<!-- sent="Tue, 29 Jan 2008 13:27:36 -0500" -->
<!-- isosent="20080129182736" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMP + OMPI" -->
<!-- id="6CBA5C22-B8D0-4547-9AD5-721F911FE91D_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="479F3C7F.4020005_at_sophia.inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMP + OMPI<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-29 13:27:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4908.php">Brock Palen: "[OMPI users] process placement with toruqe and OpenMP"</a>
<li><strong>Previous message:</strong> <a href="4906.php">Leonardo Fialho: "Re: [OMPI users] Question about fault tolerance checkpointing"</a>
<li><strong>In reply to:</strong> <a href="4902.php">Stephen Wornom: "Re: [OMPI users] OpenMP + OMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The rank 0 received SIGTERM ... I wonder how this happens. Usually, we  
<br>
don't just send SIGTERM around without a good reason. One of these  
<br>
reasons might be that we detected a segfault, but then there is some  
<br>
output.
<br>
<p>Is that the complete output you get from your run ?
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jan 29, 2008, at 9:47 AM, Stephen Wornom wrote:
<br>
<p><span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Both cases should work just fine. In fact as long as there is only  
</span><br>
<span class="quotelev2">&gt;&gt; one
</span><br>
<span class="quotelev2">&gt;&gt; execution flow using MPI functions, the user will not face any  
</span><br>
<span class="quotelev2">&gt;&gt; problems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I compiled my mpi fortran code using the  -mp option to verify that  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; mpi code would still run. I get this message when I run the code on  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; sophia helios grid5000 cluster.
</span><br>
<span class="quotelev1">&gt; mpirun.openmpi noticed that job rank 0 with PID 4061 on node
</span><br>
<span class="quotelev1">&gt; helios-46.sophia.grid5000.fr exited on signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas as to what may be the problem?
</span><br>
<span class="quotelev1">&gt; Stephen
</span><br>
<span class="quotelev1">&gt; p.s.
</span><br>
<span class="quotelev1">&gt; I had added OMP directives to the code before simply verifying that  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; -mp option would work in the absense of OMP directives.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These are my compile options:
</span><br>
<span class="quotelev1">&gt; FCPATH  = /opt/openmpi/1.2.4/bin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LDLIBS   = -lmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FC       = ${FCPATH}/mpif90
</span><br>
<span class="quotelev1">&gt; CC       = ${FCPATH}/mpicc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FFLAGS     =-mp -pg -fast -Mvect -Mdalign -mcmodel=medium -Mextend -r8
</span><br>
<span class="quotelev1">&gt; -pc 64 -Mextend
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4907/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4908.php">Brock Palen: "[OMPI users] process placement with toruqe and OpenMP"</a>
<li><strong>Previous message:</strong> <a href="4906.php">Leonardo Fialho: "Re: [OMPI users] Question about fault tolerance checkpointing"</a>
<li><strong>In reply to:</strong> <a href="4902.php">Stephen Wornom: "Re: [OMPI users] OpenMP + OMPI"</a>
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
