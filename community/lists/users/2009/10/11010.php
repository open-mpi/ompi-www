<?
$subject_val = "[OMPI users] mpi functions are slow when first called and become normal afterwards";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 15:39:46 2009" -->
<!-- isoreceived="20091029193946" -->
<!-- sent="Thu, 29 Oct 2009 14:39:32 -0500" -->
<!-- isosent="20091029193932" -->
<!-- name="rightcfd" -->
<!-- email="rightcfd_at_[hidden]" -->
<!-- subject="[OMPI users] mpi functions are slow when first called and become normal afterwards" -->
<!-- id="BA05CBC3-1086-4F26-8752-44DE370B476F_at_gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] mpi functions are slow when first called and become normal afterwards<br>
<strong>From:</strong> rightcfd (<em>rightcfd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-29 15:39:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11011.php">Brock Palen: "Re: [OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<li><strong>Previous message:</strong> <a href="11009.php">Justin Luitjens: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11011.php">Brock Palen: "Re: [OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<li><strong>Reply:</strong> <a href="11011.php">Brock Palen: "Re: [OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11167.php">RightCFD: "Re: [OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We installed a linux cluster recently. The OS is Ubuntu 8.04. The  
<br>
network is infiniband. We run a simple MPI program to compute the  
<br>
value of pi. The program follows three stages: MPI_Bcast, computation  
<br>
and MPI_Reduce. We measure the elapsed time on computation and  
<br>
communication, respectively. We also repeat the entire process in a  
<br>
loop terminated by user input. We run the program interactively using  
<br>
mpirun. We found an weird problem.
<br>
<p>When MPI_Bcast and MPI_Reduce are called for the first time, they are  
<br>
very slow. But after that, they run at normal and stable speed. Is  
<br>
there anybody out there who have encountered such problem? If you need  
<br>
any other information, please let me know and I'll provide. Thanks in  
<br>
advance.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11011.php">Brock Palen: "Re: [OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<li><strong>Previous message:</strong> <a href="11009.php">Justin Luitjens: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11011.php">Brock Palen: "Re: [OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<li><strong>Reply:</strong> <a href="11011.php">Brock Palen: "Re: [OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11167.php">RightCFD: "Re: [OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
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
