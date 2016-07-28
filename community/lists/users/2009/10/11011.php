<?
$subject_val = "Re: [OMPI users] mpi functions are slow when first called and become normal afterwards";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 15:45:12 2009" -->
<!-- isoreceived="20091029194512" -->
<!-- sent="Thu, 29 Oct 2009 15:45:06 -0400" -->
<!-- isosent="20091029194506" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi functions are slow when first called and become normal afterwards" -->
<!-- id="890CC430-68B0-4307-8260-24A6FADAE319_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BA05CBC3-1086-4F26-8752-44DE370B476F_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi functions are slow when first called and become normal afterwards<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-29 15:45:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11012.php">Andreea m. \(Costea\): "[OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11010.php">rightcfd: "[OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<li><strong>In reply to:</strong> <a href="11010.php">rightcfd: "[OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11167.php">RightCFD: "Re: [OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; When MPI_Bcast and MPI_Reduce are called for the first time, they  
</span><br>
<span class="quotelev1">&gt; are very slow. But after that, they run at normal and stable speed.  
</span><br>
<span class="quotelev1">&gt; Is there anybody out there who have encountered such problem? If you  
</span><br>
<span class="quotelev1">&gt; need any other information, please let me know and I'll provide.  
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<p>This is expected, and I think you can dig though the message archive  
<br>
to find the answer.  OMPI does not wireup all the communication at  
<br>
startup, thus the first time you communicate with a host the  
<br>
connection is made, but after that it is fast because it is already  
<br>
open.  This behavior is expected, and is needed for very large systems  
<br>
where you could run out of sockets for some types of communication  
<br>
with so many hosts.
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="11012.php">Andreea m. \(Costea\): "[OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11010.php">rightcfd: "[OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<li><strong>In reply to:</strong> <a href="11010.php">rightcfd: "[OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11167.php">RightCFD: "Re: [OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
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
