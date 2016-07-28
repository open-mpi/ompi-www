<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 22 10:46:30 2005" -->
<!-- isoreceived="20050322154630" -->
<!-- sent="Tue, 22 Mar 2005 10:46:28 -0500" -->
<!-- isosent="20050322154628" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[O-MPI users] Alternative to MPI ABI" -->
<!-- id="c3cefb95ef1f538ef67440eea262a41e_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-03-22 10:46:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0029.php">Greg Lindahl: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0027.php">Neil Storer: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0029.php">Greg Lindahl: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0029.php">Greg Lindahl: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0031.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have tried to reply to Greg's answer to my long-winded prior post 
<br>
about my thoughts on an MPI ABI 
<br>
(<a href="http://www.open-mpi.org/community/lists/users/2005/03/0021.php">http://www.open-mpi.org/community/lists/users/2005/03/0021.php</a>), but I 
<br>
simply have not had the time to compose a suitably-detailed/precise 
<br>
reply.
<br>
<p>Instead, I would like to propose an alternative to an MPI ABI.
<br>
<p>Create a new software project (preferably open source, preferably with 
<br>
an BSD-like license so that ISV's can incorporate this software into 
<br>
their products) that provides a compatibility layer for all the 
<br>
different MPI implementations out there.  Let's call it MorphMPI.  It 
<br>
would contain the following main components:
<br>
<p>1. its own mpi.h / mpif.h
<br>
2. its own wrapper compilers (mpicc et al.)
<br>
3. its own library (perhaps named libmpi.*)
<br>
<p>mpi.h contains all the normal mpi.h things (prototypes for all the MPI 
<br>
and PMPI functions, declarations of all the MPI constants, etc.), and 
<br>
then potentially a remapping from MPI functions to MorphMPI functions 
<br>
(e.g., &quot;#define MPI_Send morph_mpi.mpi_send&quot;, where morph_mpi is a 
<br>
struct full of function pointers).
<br>
<p>The wrapper compilers do the standard wrapper compiler things, enabling 
<br>
finding mpi.h / mpif.h, automatically finding and linking to MorphMPI's 
<br>
library(ies), etc.
<br>
<p>The library is where the bulk of the work will be.  In MorphMPI's 
<br>
equivalent to MPI_INIT (perhaps named Morph_MPI_Init()), it dlopen's a 
<br>
back-end MPI implementation and sets oodles of internal tables to point 
<br>
to the back-end MPI functions and constants.  For example, 
<br>
morph_mpi.mpi_send is set equal to the result of a dlsym to find the 
<br>
symbol for &quot;MPI_Send&quot;.
<br>
<p>Morph_MPI_Init() can do some clever / user friendly things to pick 
<br>
which back-end MPI to dlopen, what dependent libraries also need to be 
<br>
dlopen'ed, etc.  This can be arbitrarily feature-ized.
<br>
<p>There's still some technical issues to solve, but an industrious 
<br>
developer can figure them out.  For example, how to handle MPI 
<br>
compile-time constants (e.g., &quot;MPI_Comm mycomm = MPI_COMM_WORLD;&quot;)?  
<br>
One possible solution is to have MorphMPI have a wrapper function for 
<br>
each MPI function (e.g., &quot;#define MPI_Send Morph_MPI_Send&quot;).  The 
<br>
wrapper function does a translation of the MorphMPI MPI handles to the 
<br>
back-end MPI handles.  If MorphMPI's handles are integers, this can be 
<br>
relatively straightforward, something along the lines of:
<br>
<p>int Morph_MPI_Send(...dtype, ..., comm) {
<br>
&nbsp;&nbsp;&nbsp;return morph_mpi.mpi_send(..., Morph_MPI_datatypes[dtype], ..., 
<br>
Morph_MPI_communicators[comm]);
<br>
}
<br>
<p>You get the idea.
<br>
<p>There's a slight performance penalty for the translation layer, but for 
<br>
those who want an MPI ABI, this might well be an acceptable price to 
<br>
pay.
<br>
<p>------
<br>
<p>Of course, such a compatibility layer doesn't have to be *exactly* like 
<br>
this.  I simply proposed one possible implementation -- there's several 
<br>
other, similar ways to do it.  S/He who implements, wins.  :-)
<br>
<p>The main ideas of this proposal are:
<br>
<p>1. A 3rd party project can provide MPI ABI-like functionality (with all 
<br>
the benefits and drawbacks therein)
<br>
<p>2. Cancel the MPI Implementor's Ultimate Prize Fighting Cage Match on 
<br>
pay-per-view (read: no need for time-consuming, potentially fruitless 
<br>
attempts to get MPI implementors to agree on anything)
<br>
<p>3. With an appropriate FOSS license, anyone who wants ABI-like 
<br>
functionality can have it, but those who don't want it don't have it 
<br>
forced upon them
<br>
<p>4. MPI implementors can keep doing what they do best: working on making 
<br>
their software great
<br>
<p>This seems like a perfect project for a bright Master's student.  
<br>
Anyone care to open up a SourceForge project for it?  :-)
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0029.php">Greg Lindahl: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0027.php">Neil Storer: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0029.php">Greg Lindahl: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0029.php">Greg Lindahl: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0031.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
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
