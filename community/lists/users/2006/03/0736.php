<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar  1 09:58:04 2006" -->
<!-- isoreceived="20060301145804" -->
<!-- sent="Wed, 1 Mar 2006 09:56:38 -0500" -->
<!-- isosent="20060301145638" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1" -->
<!-- id="44019DD2-5774-4167-867C-9C94B3DF7B75_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="788137C1-8E65-4B18-9CDD-5E486AF58421_at_nrl.navy.mil" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-01 09:56:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0737.php">Galen Shipman: "Re: [OMPI users] anyone have OpenMPI working with OpenIB on RHEL4 U3 beta?"</a>
<li><strong>Previous message:</strong> <a href="0735.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<li><strong>In reply to:</strong> <a href="0735.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0740.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>Reply:</strong> <a href="0740.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>Reply:</strong> <a href="0744.php">Greg Lindahl: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 1, 2006, at 8:59 AM, Michael Kluskens wrote:
<br>
<p><span class="quotelev1">&gt; I'm sorry I don't understand what you are saying.  Are you saying
</span><br>
<span class="quotelev1">&gt; that when using &quot;free source form&quot; Fortran 90 code that the default
</span><br>
<span class="quotelev1">&gt; line length of 132 characters is ignored when compiling MPI function
</span><br>
<span class="quotelev1">&gt; calls?  I know for a fact this is not true in general and very much
</span><br>
<span class="quotelev1">&gt; doubt that this is the case here.
</span><br>
<p>I'm definitively not fluent in F90. But, now that I understand your  
<br>
explanation I see what was wrong with my program. I was using the  
<br>
&quot;fixed source form&quot; as my file ended in a &quot;.f&quot; so the compiler was  
<br>
right to ignore everything after the column 80. But, even if it was  
<br>
right to do so, it should at least print a warning message to inform  
<br>
me that I was stupid enough to do such basic mistakes ...
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More likely is a missing interface for MPI_Comm_Spawn in OpenMPI 1.0.1
</span><br>
<p>Now I look into this problem more and your right it's a missing  
<br>
interface. Somehow, it didn't get compiled. Until we fix this problem  
<br>
please use the old F77 approach by including the mpif.h file.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0737.php">Galen Shipman: "Re: [OMPI users] anyone have OpenMPI working with OpenIB on RHEL4 U3 beta?"</a>
<li><strong>Previous message:</strong> <a href="0735.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<li><strong>In reply to:</strong> <a href="0735.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0740.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>Reply:</strong> <a href="0740.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>Reply:</strong> <a href="0744.php">Greg Lindahl: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
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
