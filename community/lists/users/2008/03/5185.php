<?
$subject_val = "Re: [OMPI users] MPI_Allreduce()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 13 10:30:13 2008" -->
<!-- isoreceived="20080313143013" -->
<!-- sent="Thu, 13 Mar 2008 10:29:10 -0400" -->
<!-- isosent="20080313142910" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce()" -->
<!-- id="E2DDE6E8-5EF1-40B3-85B0-1A77CC0A0FBF_at_umich.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B47186D7-ED2C-4B09-9DB8-F28D4D98197A_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Allreduce()<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-13 10:29:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5186.php">Ashley Pittman: "Re: [OMPI users] MPI_Allreduce()"</a>
<li><strong>Previous message:</strong> <a href="5184.php">George Bosilca: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>In reply to:</strong> <a href="5181.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] MPI_Allreduce()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5187.php">Lawrence Stewart: "Re: [OMPI users] MPI_Allreduce()"</a>
<li><strong>Reply:</strong> <a href="5187.php">Lawrence Stewart: "Re: [OMPI users] MPI_Allreduce()"</a>
<li><strong>Reply:</strong> <a href="5188.php">George Bosilca: "Re: [OMPI users] MPI_Allreduce()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, I know what you mean about if you have to use a 'all to all'   
<br>
use MPI_Alltoall() don't roll your own.
<br>
<p>So on paper, alltoall at first glance appears to be:  n*(n-1) -&gt; n^2- 
<br>
n  -&gt; n^2 (for large n).
<br>
<p>Allreduce  appears to be  simplest, n point to points followed by a  
<br>
bcast().  Which can be simplified to gather + bcast.
<br>
<p>Last I knew MPI_Bcast() was log(n)  and gather is (n).  So for  
<br>
allreduce I get:
<br>
<p>n+log(n)
<br>
<p>I guess I am confused how to get alltoall() down from n^2.
<br>
<p>Thanks.
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Mar 12, 2008, at 6:05 PM, Aur&#233;lien Bouteiller wrote:
<br>
<p><span class="quotelev1">&gt; If you can avoid them it is better to avoid them. However it is always
</span><br>
<span class="quotelev1">&gt; better to use a MPI_Alltoall than coding your own all to all with
</span><br>
<span class="quotelev1">&gt; point to point, and in some algorithms you *need* to make a all to all
</span><br>
<span class="quotelev1">&gt; communication. What you should understand by &quot;avoid all to all&quot; is not
</span><br>
<span class="quotelev1">&gt; avoid MPI_alltoall, but choose a mathematic algorithm that does not
</span><br>
<span class="quotelev1">&gt; need all to all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   The algorithmic complexity of AllReduce is the same as AlltoAll.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 12 mars 08 &#224; 17:01, Brock Palen a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have always been told that calls like MPI_Barrior() MPI_Allreduce()
</span><br>
<span class="quotelev2">&gt;&gt; and MPI_Alltoall() should be avoided.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I understand MPI_Alltoall()  as it goes n*(n-1) sends and thus grows
</span><br>
<span class="quotelev2">&gt;&gt; very very quickly.  MPI_Barrior() is very latency sensitive and
</span><br>
<span class="quotelev2">&gt;&gt; generally is not needed in most cases I have seen it used.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But why MPI_Allreduce()?
</span><br>
<span class="quotelev2">&gt;&gt; What other functions should generally be avoided?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry this is kinda off topic for the list :-)
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5186.php">Ashley Pittman: "Re: [OMPI users] MPI_Allreduce()"</a>
<li><strong>Previous message:</strong> <a href="5184.php">George Bosilca: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>In reply to:</strong> <a href="5181.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] MPI_Allreduce()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5187.php">Lawrence Stewart: "Re: [OMPI users] MPI_Allreduce()"</a>
<li><strong>Reply:</strong> <a href="5187.php">Lawrence Stewart: "Re: [OMPI users] MPI_Allreduce()"</a>
<li><strong>Reply:</strong> <a href="5188.php">George Bosilca: "Re: [OMPI users] MPI_Allreduce()"</a>
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
