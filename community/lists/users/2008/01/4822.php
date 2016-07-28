<?
$subject_val = "Re: [OMPI users] OpenMP + OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 12 22:20:38 2008" -->
<!-- isoreceived="20080113032038" -->
<!-- sent="Sat, 12 Jan 2008 22:20:29 -0500" -->
<!-- isosent="20080113032029" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMP + OMPI" -->
<!-- id="CA134252-A61D-401F-879D-5C5998F548B5_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="309AA089-D16E-48F9-8E6F-E82BA5CE4F63_at_umich.edu" -->
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
<strong>Date:</strong> 2008-01-12 22:20:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4823.php">Brock Palen: "Re: [OMPI users] OpenMP + OMPI"</a>
<li><strong>Previous message:</strong> <a href="4821.php">Brock Palen: "[OMPI users] OpenMP + OMPI"</a>
<li><strong>In reply to:</strong> <a href="4821.php">Brock Palen: "[OMPI users] OpenMP + OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4823.php">Brock Palen: "Re: [OMPI users] OpenMP + OMPI"</a>
<li><strong>Reply:</strong> <a href="4823.php">Brock Palen: "Re: [OMPI users] OpenMP + OMPI"</a>
<li><strong>Reply:</strong> <a href="4902.php">Stephen Wornom: "Re: [OMPI users] OpenMP + OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Both cases should work just fine. In fact as long as there is only one  
<br>
execution flow using MPI functions, the user will not face any problems.
<br>
<p>In a non-threaded build, there is no real progress outside the MPI  
<br>
calls. Here by real progress I understand MPI request progress,  
<br>
something that is visible from the user level (such as request  
<br>
completion).
<br>
<p>If a blocking send is used, and the length of the data is under the  
<br>
eager limit, the message will stay in the network until the receiver  
<br>
access some MPI function. However, in this case the sender is free to  
<br>
continue its execution. In the case where the length exceed the eager  
<br>
size, the sender will be blocked until the corresponding receive is  
<br>
posted (and then the rendez-vous protocol completed and data  
<br>
transmitted).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jan 12, 2008, at 9:16 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; Hey guys,
</span><br>
<span class="quotelev1">&gt; I know that threading is very immature (or broken) in the 1.2
</span><br>
<span class="quotelev1">&gt; series,  But what happens if a user wants to use a threaded BLAS
</span><br>
<span class="quotelev1">&gt; (GOTO) library with their MPI code and never has OpenMP/pthreads
</span><br>
<span class="quotelev1">&gt; parallel regions with MPI calls?  Would this work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What about using OpenMP in their code but again all MPI calls happen
</span><br>
<span class="quotelev1">&gt; outside parallel regions.  How would a process who is behind in
</span><br>
<span class="quotelev1">&gt; execution handle a incoming message when it has not yet hit outside
</span><br>
<span class="quotelev1">&gt; the threaded region ware the MPI_Recv() is called?  Would the library
</span><br>
<span class="quotelev1">&gt; just hold on to it (if below the eager limit) and wait until someone
</span><br>
<span class="quotelev1">&gt; calls the Recv that matches the message?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4822/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4823.php">Brock Palen: "Re: [OMPI users] OpenMP + OMPI"</a>
<li><strong>Previous message:</strong> <a href="4821.php">Brock Palen: "[OMPI users] OpenMP + OMPI"</a>
<li><strong>In reply to:</strong> <a href="4821.php">Brock Palen: "[OMPI users] OpenMP + OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4823.php">Brock Palen: "Re: [OMPI users] OpenMP + OMPI"</a>
<li><strong>Reply:</strong> <a href="4823.php">Brock Palen: "Re: [OMPI users] OpenMP + OMPI"</a>
<li><strong>Reply:</strong> <a href="4902.php">Stephen Wornom: "Re: [OMPI users] OpenMP + OMPI"</a>
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
