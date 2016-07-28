<?
$subject_val = "Re: [OMPI users] OpenMP + OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 12 22:30:25 2008" -->
<!-- isoreceived="20080113033025" -->
<!-- sent="Sat, 12 Jan 2008 22:29:23 -0500" -->
<!-- isosent="20080113032923" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMP + OMPI" -->
<!-- id="3EDE826E-09BE-45EF-815D-738A2FABAEEE_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CA134252-A61D-401F-879D-5C5998F548B5_at_eecs.utk.edu" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-12 22:29:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4824.php">Barry Rountree: "[OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Previous message:</strong> <a href="4822.php">George Bosilca: "Re: [OMPI users] OpenMP + OMPI"</a>
<li><strong>In reply to:</strong> <a href="4822.php">George Bosilca: "Re: [OMPI users] OpenMP + OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4902.php">Stephen Wornom: "Re: [OMPI users] OpenMP + OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Jan 12, 2008, at 10:20 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Both cases should work just fine. In fact as long as there is only  
</span><br>
<span class="quotelev1">&gt; one execution flow using MPI functions, the user will not face any  
</span><br>
<span class="quotelev1">&gt; problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In a non-threaded build, there is no real progress outside the MPI  
</span><br>
<span class="quotelev1">&gt; calls. Here by real progress I understand MPI request progress,  
</span><br>
<span class="quotelev1">&gt; something that is visible from the user level (such as request  
</span><br>
<span class="quotelev1">&gt; completion).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If a blocking send is used, and the length of the data is under the  
</span><br>
<span class="quotelev1">&gt; eager limit, the message will stay in the network until the  
</span><br>
<span class="quotelev1">&gt; receiver access some MPI function. However, in this case the sender  
</span><br>
<span class="quotelev1">&gt; is free to continue its execution. In the case where the length  
</span><br>
<span class="quotelev1">&gt; exceed the eager size, the sender will be blocked until the  
</span><br>
<span class="quotelev1">&gt; corresponding receive is posted (and then the rendez-vous protocol  
</span><br>
<span class="quotelev1">&gt; completed and data transmitted).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 12, 2008, at 9:16 PM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hey guys,
</span><br>
<span class="quotelev2">&gt;&gt; I know that threading is very immature (or broken) in the 1.2
</span><br>
<span class="quotelev2">&gt;&gt; series,  But what happens if a user wants to use a threaded BLAS
</span><br>
<span class="quotelev2">&gt;&gt; (GOTO) library with their MPI code and never has OpenMP/pthreads
</span><br>
<span class="quotelev2">&gt;&gt; parallel regions with MPI calls?  Would this work?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What about using OpenMP in their code but again all MPI calls happen
</span><br>
<span class="quotelev2">&gt;&gt; outside parallel regions.  How would a process who is behind in
</span><br>
<span class="quotelev2">&gt;&gt; execution handle a incoming message when it has not yet hit outside
</span><br>
<span class="quotelev2">&gt;&gt; the threaded region ware the MPI_Recv() is called?  Would the library
</span><br>
<span class="quotelev2">&gt;&gt; just hold on to it (if below the eager limit) and wait until someone
</span><br>
<span class="quotelev2">&gt;&gt; calls the Recv that matches the message?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4824.php">Barry Rountree: "[OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Previous message:</strong> <a href="4822.php">George Bosilca: "Re: [OMPI users] OpenMP + OMPI"</a>
<li><strong>In reply to:</strong> <a href="4822.php">George Bosilca: "Re: [OMPI users] OpenMP + OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4902.php">Stephen Wornom: "Re: [OMPI users] OpenMP + OMPI"</a>
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
