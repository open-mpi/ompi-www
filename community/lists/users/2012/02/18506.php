<?
$subject_val = "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 16 09:42:41 2012" -->
<!-- isoreceived="20120216144241" -->
<!-- sent="Thu, 16 Feb 2012 09:42:36 -0500" -->
<!-- isosent="20120216144236" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released" -->
<!-- id="4F3D15DC.20100_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0CE65167-C4D7-421C-AAC1-41E34FE51C66_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-16 09:42:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18507.php">Jeff Squyres: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Previous message:</strong> <a href="18505.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>In reply to:</strong> <a href="18474.php">Reuti: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/15/2012 07:44 AM, Reuti wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 15.02.2012 um 03:48 schrieb alexalex43210:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   But I am a novice for the parallel computation, I often use Fortran to compile my program, now I want to use the Parallel, can you give me some help how to begin?
</span><br>
<span class="quotelev2">&gt;&gt;   PS: I learned about OPEN MPI is the choice for my question solution. am I right?
</span><br>
<span class="quotelev1">&gt; This depends on your application and how easy it can be adopted to split the problem into smaller parts. It could also be the case, that you want to stay on one node only to use additional cores and could parallelize it better by using OpenMP, where all threads operate on the same memory area on a single node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://openmp.org/wp/">http://openmp.org/wp/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's built into many compilers by default nowadays.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In addition to the online courses Jeff mentioned there are several books available like Parallel Programming with MPI by Peter Pacheco (although it covers only MPI-1 due to its age <a href="http://www.cs.usfca.edu/~peter/ppmpi/">http://www.cs.usfca.edu/~peter/ppmpi/</a>), Parallel Programming in C with MPI and OpenMP by Michael Quinn.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Personally, I didn't like Peter Pacheco's book all that much, so I'd
<br>
like to add a couple more books to this list of recommendations:
<br>
<p>Using MPI: Portable Parallel Programming with the Message-Passing
<br>
Interface, 2nd Edition
<br>
William Gropp, Ewing Lusk, and Anthony Skjellum
<br>
Copyright 1997, MIT Press
<br>
<a href="http://www.mcs.anl.gov/research/projects/mpi/usingmpi/">http://www.mcs.anl.gov/research/projects/mpi/usingmpi/</a>
<br>
<p>Using MPI-2: Advanced Features of the Message-Passing Interface
<br>
William Gropp, Ewing Lusk, Rajeev Thakur
<br>
Copyright 1997, MIT Press
<br>
<a href="http://www.mcs.anl.gov/research/projects/mpi/usingmpi2/index.html">http://www.mcs.anl.gov/research/projects/mpi/usingmpi2/index.html</a>
<br>
<p>The second book covers the more advanced features of MPI-2.  As a n00b
<br>
just learning MPI, you probably don't need to learn that stuff until
<br>
you've mastered the material in the first book I listed,  or Pacheco's
<br>
book. 
<br>
<p><pre>
--
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18507.php">Jeff Squyres: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Previous message:</strong> <a href="18505.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>In reply to:</strong> <a href="18474.php">Reuti: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released"</a>
<!-- nextthread="start" -->
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
