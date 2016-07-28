<?
$subject_val = "Re: [OMPI users] Help on Mpi derived datatype for class with static members";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  9 10:24:03 2010" -->
<!-- isoreceived="20101209152403" -->
<!-- sent="Thu, 9 Dec 2010 10:23:58 -0500" -->
<!-- isosent="20101209152358" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help on Mpi derived datatype for class with static members" -->
<!-- id="3F99AAF0-9146-4F36-8242-DFE55945F6C4_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinJEk=GQ4qW72cJ9vhy=Ph-O4xfbPFjzcEPQqR0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help on Mpi derived datatype for class with static members<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-09 10:23:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15050.php">Siegmar Gross: "[OMPI users] Open MPI on Cygwin"</a>
<li><strong>Previous message:</strong> <a href="15048.php">Reuti: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>In reply to:</strong> <a href="15047.php">Santosh Ansumali: "[OMPI users] Help on Mpi derived datatype for class with static members"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15051.php">Santosh Ansumali: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<li><strong>Reply:</strong> <a href="15051.php">Santosh Ansumali: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You will have to use the MPI_Type_create_struct (<a href="http://www.open-mpi.org/doc/v1.5/man3/MPI_Type_create_struct.3.php">http://www.open-mpi.org/doc/v1.5/man3/MPI_Type_create_struct.3.php</a>).
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Dec 8, 2010, at 16:04 , Santosh Ansumali wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;   I am confused with the use of MPI derived datatype for classes with
</span><br>
<span class="quotelev1">&gt; static member. How to create derived datatype for something like
</span><br>
<span class="quotelev1">&gt; class test{
</span><br>
<span class="quotelev1">&gt; static const int i=5;
</span><br>
<span class="quotelev1">&gt; double data[5];
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your help!
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Santosh
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
<li><strong>Next message:</strong> <a href="15050.php">Siegmar Gross: "[OMPI users] Open MPI on Cygwin"</a>
<li><strong>Previous message:</strong> <a href="15048.php">Reuti: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>In reply to:</strong> <a href="15047.php">Santosh Ansumali: "[OMPI users] Help on Mpi derived datatype for class with static members"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15051.php">Santosh Ansumali: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<li><strong>Reply:</strong> <a href="15051.php">Santosh Ansumali: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
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
