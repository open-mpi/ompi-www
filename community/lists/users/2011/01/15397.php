<?
$subject_val = "Re: [OMPI users] Hair depleting issue with Ompi143 and one program";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 21 15:51:01 2011" -->
<!-- isoreceived="20110121205101" -->
<!-- sent="Fri, 21 Jan 2011 12:50:57 -0800" -->
<!-- isosent="20110121205057" -->
<!-- name="David Mathog" -->
<!-- email="mathog_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hair depleting issue with Ompi143 and one program" -->
<!-- id="E1PgNwf-0003tW-BA_at_mendel.bio.caltech.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] Hair depleting issue with Ompi143 and one program" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hair depleting issue with Ompi143 and one program<br>
<strong>From:</strong> David Mathog (<em>mathog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-21 15:50:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15398.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_Spawn intercommunication"</a>
<li><strong>Previous message:</strong> <a href="15396.php">Gus Correa: "Re: [OMPI users] OpenMPI does not see other nodes"</a>
<li><strong>Maybe in reply to:</strong> <a href="15385.php">David Mathog: "[OMPI users] Hair depleting issue with Ompi143 and one program"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave Goodell &lt;goodell_at_[hidden]&gt; wrote:
<br>
<p><p><span class="quotelev1">&gt; Valgrind's &quot;--track-origins=yes&quot; option is usually helpful for
</span><br>
figuring out where the uninitialized values came from.
<br>
<p>Good suggestion - that did eventually lead to the solution.  
<br>
<p>The code always had two vector types (_m128i and _m128), and there are
<br>
still two types (_m64 and _m128), but whereas previously the two types
<br>
were the same size and a single vsz variable sufficed in the relevant
<br>
mpi send/receive functions, two such variables are now needed. The end
<br>
result was that an array was being half filled by MPI send/recv.  This
<br>
bit of code was only exercised in this one program, which is why it
<br>
didn't show up previously in any of the other programs in this package,
<br>
or in any of the other run modes.  On top of that there were a large
<br>
number of valgrind messages resulting from MPI_send operations passing
<br>
the full length of the allocated buffer instead of just the part used. 
<br>
Those don't seem to have been causing any run time problems, but they
<br>
added to the noise when trying to debug this.  
<br>
<p>The strangeness with seemingly uninitialized vector following a zeroing
<br>
operation turned out to be a red herring.  This:
<br>
<p>&nbsp;&nbsp;register __m128 xEv;	
<br>
fprintf(stderr,&quot;DEBUG xEV is %lld\n&quot;,xEv);fflush(stderr);
<br>
<p>just doesn't work, probably because xEv is 16 bytes but lld is 8.  Using
<br>
an alternative method eliminated that problem:
<br>
<p>typedef union {
<br>
&nbsp;__m128              vf;
<br>
&nbsp;&nbsp;float     	     f4[4];
<br>
} __uni16;
<br>
#define EMM_FLT4(a)    (((__uni16)(a)).f4)
<br>
<p><p>&nbsp;&nbsp;fprintf(stderr,&quot;DEBUG xEV values %f %f %f
<br>
%f\n&quot;,EMM_FLT4(xEv)[0],EMM_FLT4(xEv)[1],EMM_FLT4(xEv)[2],EMM_FLT4(xEv)[3]);fflush(stderr);
<br>
<p><p>Thanks!
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
<li><strong>Next message:</strong> <a href="15398.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_Spawn intercommunication"</a>
<li><strong>Previous message:</strong> <a href="15396.php">Gus Correa: "Re: [OMPI users] OpenMPI does not see other nodes"</a>
<li><strong>Maybe in reply to:</strong> <a href="15385.php">David Mathog: "[OMPI users] Hair depleting issue with Ompi143 and one program"</a>
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
