<?
$subject_val = "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 10 11:49:17 2010" -->
<!-- isoreceived="20101210164917" -->
<!-- sent="Fri, 10 Dec 2010 08:49:13 -0800" -->
<!-- isosent="20101210164913" -->
<!-- name="David Mathog" -->
<!-- email="mathog_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Method for worker to determine its &amp;quot;rank&amp;quot; on a	single machine?" -->
<!-- id="E1PR69h-000585-QJ_at_mendel.bio.caltech.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] Method for worker to determine its &amp;quot;rank&amp;quot; on a	single machine?" -->
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
<strong>Subject:</strong> Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?<br>
<strong>From:</strong> David Mathog (<em>mathog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-10 11:49:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15070.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>Previous message:</strong> <a href="15068.php">Jose Agust&#237;n Garc&#237;a Reynoso: "[OMPI users] openmpi-1.4.3 atomic_cmpset check failed in mac OS X 10.6 intel ifort"</a>
<li><strong>Maybe in reply to:</strong> <a href="15063.php">Richard Treumann: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15070.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>Reply:</strong> <a href="15070.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>Reply:</strong> <a href="15071.php">Gus Correa: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; The answer is yes - sort of...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In OpenMPI, every process has information about not only its own local
</span><br>
rank, but the local rank of all its peers regardless of what node they
<br>
are on. We use that info internally for a variety of things.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now the &quot;sort of&quot;. That info isn't exposed via an MPI API at this
</span><br>
time. If that doesn't matter, then I can tell you how to get it - it's
<br>
pretty trivial to do.
<br>
<p>Please tell me how to do this using the internal information.  
<br>
<p>For now I will use that to write these functions (which might at some
<br>
point correspond to standard functions, or not) 
<br>
<p>my_MPI_Local_size(MPI_Comm comm, int *lmax, int *lactual)
<br>
my_MPI_Local_rank(MPI_Comm comm, int *lrank)
<br>
<p>These will return N for lmax, a value M in 1-&gt;N for lactual, and a value
<br>
in 1-&gt;M for lrank, for any worker on a machine corresponding to a
<br>
hostfile line like:
<br>
<p>node123.cluster slots=N
<br>
<p>As usual, this could get complicated.  There are probably race
<br>
conditions on lactual vs. lrank as the workers start, but I'm guessing
<br>
the lrank to lmax relationship won't have that problem.  Similarly, the
<br>
meaning of &quot;local&quot; is pretty abstract. For now all that is intended is
<br>
&quot;a group of equivalent cores within a single enclosure, where
<br>
communication between them is strictly internal to the enclosure, and
<br>
where all have equivalent access to the local disks and the network
<br>
interface(s)&quot;.  Other ways to define &quot;local&quot; might make more sense on
<br>
more complex hardware. 
<br>
<p>Another function that logically belongs with these is:
<br>
<p>my_MPI_Local_list(MPI_Comm comm, int *llist, int *lactual)
<br>
<p>I don't need it now, but can imagine applications that would.  This
<br>
would return the (current)  lactual value and the corresponding list of
<br>
rank numbers of all the local workers.  The array llist must be of size
<br>
lmax.
<br>
<p><p>Thanks,
<br>
<p>David Mathog
<br>
mathog_at_[hidden]
<br>
Manager, Sequence Analysis Facility, Biology Division, Caltech
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15070.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>Previous message:</strong> <a href="15068.php">Jose Agust&#237;n Garc&#237;a Reynoso: "[OMPI users] openmpi-1.4.3 atomic_cmpset check failed in mac OS X 10.6 intel ifort"</a>
<li><strong>Maybe in reply to:</strong> <a href="15063.php">Richard Treumann: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15070.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>Reply:</strong> <a href="15070.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>Reply:</strong> <a href="15071.php">Gus Correa: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
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
