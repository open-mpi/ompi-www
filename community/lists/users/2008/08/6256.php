<?
$subject_val = "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 01:00:03 2008" -->
<!-- isoreceived="20080804050003" -->
<!-- sent="Mon, 04 Aug 2008 00:59:51 -0400" -->
<!-- isosent="20080804045951" -->
<!-- name="Mark Borgerding" -->
<!-- email="markb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to specify hosts for MPI_Comm_spawn" -->
<!-- id="48968CC7.2040502_at_3dB-Labs.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1DF709B1-DCD4-494A-9846-127F42C1DBE9_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to specify hosts for MPI_Comm_spawn<br>
<strong>From:</strong> Mark Borgerding (<em>markb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-04 00:59:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6257.php">Lenny Verkhovsky: "Re: [OMPI users] Pathscale compiler and C++ bindings"</a>
<li><strong>Previous message:</strong> <a href="6255.php">Doug Reeder: "Re: [OMPI users] mpirun on 8-way node with rsh"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/07/6219.php">Robert Kubrick: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6261.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6261.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Robert Kubrick wrote:
<br>
<span class="quotelev1">&gt; You should be able to merge each child communicator from each accept 
</span><br>
<span class="quotelev1">&gt; thread into a global comm anyway.
</span><br>
<p>Can you elaborate? I am struggling to see how to implement this.  A 
<br>
pointer to sample code would be helpful.
<br>
<p>Specifically, I'd like to be able to have a single process 
<br>
merge/join/aggregate a bunch of intercommunicators into one group and 
<br>
have a single communicator for it.  FWIW, the intercommunicators are 
<br>
point-to-point from several calls to MPI_Comm_join.
<br>
<p>MPI_Group_union looks promising, but I cannot see any way of retrieving 
<br>
the communicator given a group.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6257.php">Lenny Verkhovsky: "Re: [OMPI users] Pathscale compiler and C++ bindings"</a>
<li><strong>Previous message:</strong> <a href="6255.php">Doug Reeder: "Re: [OMPI users] mpirun on 8-way node with rsh"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/07/6219.php">Robert Kubrick: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6261.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6261.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
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
