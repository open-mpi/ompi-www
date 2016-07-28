<?
$subject_val = "Re: [OMPI users] MPI_Allreduce()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 12 18:05:18 2008" -->
<!-- isoreceived="20080312220518" -->
<!-- sent="Wed, 12 Mar 2008 18:05:14 -0400" -->
<!-- isosent="20080312220514" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce()" -->
<!-- id="B47186D7-ED2C-4B09-9DB8-F28D4D98197A_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4497B096-1576-4155-9DFA-43902DD8C21E_at_umich.edu" -->
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
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-12 18:05:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5182.php">jody: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>Previous message:</strong> <a href="5180.php">Brock Palen: "[OMPI users] MPI_Allreduce()"</a>
<li><strong>In reply to:</strong> <a href="5180.php">Brock Palen: "[OMPI users] MPI_Allreduce()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5185.php">Brock Palen: "Re: [OMPI users] MPI_Allreduce()"</a>
<li><strong>Reply:</strong> <a href="5185.php">Brock Palen: "Re: [OMPI users] MPI_Allreduce()"</a>
<li><strong>Reply:</strong> <a href="5186.php">Ashley Pittman: "Re: [OMPI users] MPI_Allreduce()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you can avoid them it is better to avoid them. However it is always  
<br>
better to use a MPI_Alltoall than coding your own all to all with  
<br>
point to point, and in some algorithms you *need* to make a all to all  
<br>
communication. What you should understand by &quot;avoid all to all&quot; is not  
<br>
avoid MPI_alltoall, but choose a mathematic algorithm that does not  
<br>
need all to all.
<br>
<p>&nbsp;&nbsp;The algorithmic complexity of AllReduce is the same as AlltoAll.
<br>
<p>Aurelien
<br>
<p>Le 12 mars 08 &#224; 17:01, Brock Palen a &#233;crit :
<br>
<p><span class="quotelev1">&gt; I have always been told that calls like MPI_Barrior() MPI_Allreduce()
</span><br>
<span class="quotelev1">&gt; and MPI_Alltoall() should be avoided.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I understand MPI_Alltoall()  as it goes n*(n-1) sends and thus grows
</span><br>
<span class="quotelev1">&gt; very very quickly.  MPI_Barrior() is very latency sensitive and
</span><br>
<span class="quotelev1">&gt; generally is not needed in most cases I have seen it used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But why MPI_Allreduce()?
</span><br>
<span class="quotelev1">&gt; What other functions should generally be avoided?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry this is kinda off topic for the list :-)
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5182.php">jody: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>Previous message:</strong> <a href="5180.php">Brock Palen: "[OMPI users] MPI_Allreduce()"</a>
<li><strong>In reply to:</strong> <a href="5180.php">Brock Palen: "[OMPI users] MPI_Allreduce()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5185.php">Brock Palen: "Re: [OMPI users] MPI_Allreduce()"</a>
<li><strong>Reply:</strong> <a href="5185.php">Brock Palen: "Re: [OMPI users] MPI_Allreduce()"</a>
<li><strong>Reply:</strong> <a href="5186.php">Ashley Pittman: "Re: [OMPI users] MPI_Allreduce()"</a>
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
