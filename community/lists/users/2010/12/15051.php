<?
$subject_val = "Re: [OMPI users] Help on Mpi derived datatype for class with static members";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  9 10:46:15 2010" -->
<!-- isoreceived="20101209154615" -->
<!-- sent="Thu, 9 Dec 2010 21:16:10 +0530" -->
<!-- isosent="20101209154610" -->
<!-- name="Santosh Ansumali" -->
<!-- email="ansumali_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help on Mpi derived datatype for class with static members" -->
<!-- id="AANLkTim8F_tZDfNX_fxxZkQCU4vRm5PYQf63QEiHqdR0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3F99AAF0-9146-4F36-8242-DFE55945F6C4_at_eecs.utk.edu" -->
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
<strong>From:</strong> Santosh Ansumali (<em>ansumali_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-09 10:46:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15052.php">David Zhang: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<li><strong>Previous message:</strong> <a href="15050.php">Siegmar Gross: "[OMPI users] Open MPI on Cygwin"</a>
<li><strong>In reply to:</strong> <a href="15049.php">George Bosilca: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15052.php">David Zhang: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<li><strong>Reply:</strong> <a href="15052.php">David Zhang: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Dec 9, 2010 at 8:53 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; You will have to use the MPI_Type_create_struct (<a href="http://www.open-mpi.org/doc/v1.5/man3/MPI_Type_create_struct.3.php">http://www.open-mpi.org/doc/v1.5/man3/MPI_Type_create_struct.3.php</a>).
</span><br>
<p>My doubt is what it means to  compute blocklength and displacement for
<br>
static variable. For example, if I have a class
<br>
<p>class testVect{
<br>
static const int size = 5;
<br>
double value[size] ;
<br>
}
<br>
<p>and  I want to create MPI derived data to pack value.  How block
<br>
length and displacement needs to be computed in this case, considering
<br>
the fact that size is static?
<br>
Thanks for the help!
<br>
Best,
<br>
Santosh
<br>
<p><p><p><p><span class="quotelev1">&gt; &#160;george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 8, 2010, at 16:04 , Santosh Ansumali wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt; &#160; I am confused with the use of MPI derived datatype for classes with
</span><br>
<span class="quotelev2">&gt;&gt; static member. How to create derived datatype for something like
</span><br>
<span class="quotelev2">&gt;&gt; class test{
</span><br>
<span class="quotelev2">&gt;&gt; static const int i=5;
</span><br>
<span class="quotelev2">&gt;&gt; double data[5];
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your help!
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt; Santosh
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15052.php">David Zhang: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<li><strong>Previous message:</strong> <a href="15050.php">Siegmar Gross: "[OMPI users] Open MPI on Cygwin"</a>
<li><strong>In reply to:</strong> <a href="15049.php">George Bosilca: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15052.php">David Zhang: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<li><strong>Reply:</strong> <a href="15052.php">David Zhang: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
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
