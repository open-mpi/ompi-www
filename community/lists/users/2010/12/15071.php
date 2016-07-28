<?
$subject_val = "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 10 13:26:54 2010" -->
<!-- isoreceived="20101210182654" -->
<!-- sent="Fri, 10 Dec 2010 13:26:41 -0500" -->
<!-- isosent="20101210182641" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Method for worker to determine its &amp;quot;rank&amp;quot; on	a	single machine?" -->
<!-- id="4D0270E1.8020401_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E1PR69h-000585-QJ_at_mendel.bio.caltech.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-10 13:26:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15072.php">Ashley Pittman: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>Previous message:</strong> <a href="15070.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>In reply to:</strong> <a href="15069.php">David Mathog: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15075.php">David Mathog: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<li><strong>Maybe reply:</strong> <a href="15075.php">David Mathog: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi David
<br>
<p>For what it is worth, the method suggested by
<br>
Terry Dontje and Richard Troutmann is what is used in several 
<br>
generations of climate coupled models that we've been using for the
<br>
past 8+ years.
<br>
<p>The goals are slightly different from yours:
<br>
they cut across logical boundaries
<br>
(i.e. who's atmosphere, who's ocean, etc),
<br>
whereas you want to cut across physical boundaries
<br>
(i.e. belonging to the same computer,
<br>
as diffuse as the notion of &quot;same computer&quot; can be these days).
<br>
<p>The variants of this technique that I know of
<br>
are slightly different from Terry's suggestion:
<br>
they don't split the (MPI_COMM_WORLD) communicator,
<br>
but create additional sub-communicators instead.
<br>
However, the idea is the same.
<br>
<p>The upside of this technique, as Terry and Richard point out,
<br>
is portability.
<br>
These models have been run in IBM Blue Genes using the IBM MPI,
<br>
on Kraken and Jaguar (Cray XT5  or XT6?) using whatever MPI they
<br>
have there, and I can even run them in our modest Beowulf clusters,
<br>
using OpenMPI or MVAPICH2, or even MPICH2.
<br>
All MPI calls are completely standard, hence the code is portable.
<br>
If the code had calls to the &quot;orte&quot; layer
<br>
(or to &quot;P4&quot; in the old days of MPICH) for instance, it wouldn't be.
<br>
<p>If portability, specially portability across MPI variants, is important
<br>
to you, you may think of implementing the functionality you need
<br>
this way.
<br>
<p>And to the MPI insiders/developers, a plea from a mere user:
<br>
Whatever you take to the Forum,
<br>
please keep this functionality (creating new communicators, splitting 
<br>
old ones, getting processor name, etc) in the standard,
<br>
although the extensions suggested by Ralph Castain and Eugene Loh
<br>
would be certainly welcome.
<br>
<p>Cheers,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p>David Mathog wrote:
<br>
<span class="quotelev2">&gt;&gt; The answer is yes - sort of...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In OpenMPI, every process has information about not only its own local
</span><br>
<span class="quotelev1">&gt; rank, but the local rank of all its peers regardless of what node they
</span><br>
<span class="quotelev1">&gt; are on. We use that info internally for a variety of things.
</span><br>
<span class="quotelev2">&gt;&gt; Now the &quot;sort of&quot;. That info isn't exposed via an MPI API at this
</span><br>
<span class="quotelev1">&gt; time. If that doesn't matter, then I can tell you how to get it - it's
</span><br>
<span class="quotelev1">&gt; pretty trivial to do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please tell me how to do this using the internal information.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For now I will use that to write these functions (which might at some
</span><br>
<span class="quotelev1">&gt; point correspond to standard functions, or not) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my_MPI_Local_size(MPI_Comm comm, int *lmax, int *lactual)
</span><br>
<span class="quotelev1">&gt; my_MPI_Local_rank(MPI_Comm comm, int *lrank)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These will return N for lmax, a value M in 1-&gt;N for lactual, and a value
</span><br>
<span class="quotelev1">&gt; in 1-&gt;M for lrank, for any worker on a machine corresponding to a
</span><br>
<span class="quotelev1">&gt; hostfile line like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node123.cluster slots=N
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As usual, this could get complicated.  There are probably race
</span><br>
<span class="quotelev1">&gt; conditions on lactual vs. lrank as the workers start, but I'm guessing
</span><br>
<span class="quotelev1">&gt; the lrank to lmax relationship won't have that problem.  Similarly, the
</span><br>
<span class="quotelev1">&gt; meaning of &quot;local&quot; is pretty abstract. For now all that is intended is
</span><br>
<span class="quotelev1">&gt; &quot;a group of equivalent cores within a single enclosure, where
</span><br>
<span class="quotelev1">&gt; communication between them is strictly internal to the enclosure, and
</span><br>
<span class="quotelev1">&gt; where all have equivalent access to the local disks and the network
</span><br>
<span class="quotelev1">&gt; interface(s)&quot;.  Other ways to define &quot;local&quot; might make more sense on
</span><br>
<span class="quotelev1">&gt; more complex hardware. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another function that logically belongs with these is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my_MPI_Local_list(MPI_Comm comm, int *llist, int *lactual)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't need it now, but can imagine applications that would.  This
</span><br>
<span class="quotelev1">&gt; would return the (current)  lactual value and the corresponding list of
</span><br>
<span class="quotelev1">&gt; rank numbers of all the local workers.  The array llist must be of size
</span><br>
<span class="quotelev1">&gt; lmax.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David Mathog
</span><br>
<span class="quotelev1">&gt; mathog_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Manager, Sequence Analysis Facility, Biology Division, Caltech
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
<li><strong>Next message:</strong> <a href="15072.php">Ashley Pittman: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>Previous message:</strong> <a href="15070.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>In reply to:</strong> <a href="15069.php">David Mathog: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15075.php">David Mathog: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<li><strong>Maybe reply:</strong> <a href="15075.php">David Mathog: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
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
