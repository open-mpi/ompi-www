<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 15 13:09:55 2006" -->
<!-- isoreceived="20060915170955" -->
<!-- sent="Fri, 15 Sep 2006 13:09:48 -0400 (EDT)" -->
<!-- isosent="20060915170948" -->
<!-- name="Graham E Fagg" -->
<!-- email="fagg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Inter vs Intracommunicator...Who is the best?" -->
<!-- id="Pine.GSO.4.62.0609151303330.5093_at_enterprise" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="10db25becf9.alfonso.isola_at_tin.it" -->
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
<strong>From:</strong> Graham E Fagg (<em>fagg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-15 13:09:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1879.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Previous message:</strong> <a href="1877.php">Eng. A.A. Isola: "[OMPI users] Inter vs Intracommunicator...Who is the best?"</a>
<li><strong>In reply to:</strong> <a href="1877.php">Eng. A.A. Isola: "[OMPI users] Inter vs Intracommunicator...Who is the best?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; But who is the best between the
</span><br>
<span class="quotelev1">&gt; intercommunicator and intracommunicator?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is better use an
</span><br>
<span class="quotelev1">&gt; intercommunicator with Send/Recv or Bcast...
</span><br>
<span class="quotelev1">&gt; or is better use the
</span><br>
<span class="quotelev1">&gt; MPI_Intercomm_merge and to use the Send/Recv or Bcast inside the new
</span><br>
<span class="quotelev1">&gt; intracommunicator created?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I talk about the performance...is more
</span><br>
<span class="quotelev1">&gt; faster the inter or the intracommunicator?
</span><br>
<span class="quotelev1">&gt; Do they have the same
</span><br>
<span class="quotelev1">&gt; performance?The same speed?
</span><br>
<p>Usually they do not have the same implementation due to differences in 
<br>
semmantics, the intercommunications can use highly optimized algorithms 
<br>
used in intracommunications but generally don't.
<br>
<p>It is currently better in Open MPI to 
<br>
do a merge and use intracommunications.
<br>
<p><p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;Graham.
<br>
-----------------------------------------------------------------------
<br>
Dr Graham E. Fagg       | Distributed, Parallel and Meta-Computing
<br>
Innovative Computing Lab. PVM3.4, HARNESS, FT-MPI &amp; Open MPI
<br>
Computer Science Dept   | Suite 203, 1122 Volunteer Blvd,
<br>
University of Tennessee | Knoxville, Tennessee, USA. TN 37996-3450
<br>
Email: fagg_at_[hidden]  | Phone:+1(865)974-5790 | Fax:+1(865)974-8296
<br>
Broken complex systems are always derived from working simple systems
<br>
-----------------------------------------------------------------------
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bye
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alfonso
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
<p><p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Graham.
<br>
----------------------------------------------------------------------
<br>
Dr Graham E. Fagg       | Distributed, Parallel and Meta-Computing
<br>
Innovative Computing Lab. PVM3.4, HARNESS, FT-MPI, SNIPE &amp; Open MPI
<br>
Computer Science Dept   | Suite 203, 1122 Volunteer Blvd,
<br>
University of Tennessee | Knoxville, Tennessee, USA. TN 37996-3450
<br>
Email: fagg_at_[hidden]  | Phone:+1(865)974-5790 | Fax:+1(865)974-8296
<br>
Broken complex systems are always derived from working simple systems
<br>
----------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1879.php">imran shaik: "Re: [OMPI users] Perl and MPI"</a>
<li><strong>Previous message:</strong> <a href="1877.php">Eng. A.A. Isola: "[OMPI users] Inter vs Intracommunicator...Who is the best?"</a>
<li><strong>In reply to:</strong> <a href="1877.php">Eng. A.A. Isola: "[OMPI users] Inter vs Intracommunicator...Who is the best?"</a>
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
