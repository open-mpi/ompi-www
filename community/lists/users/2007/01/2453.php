<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan  9 15:57:22 2007" -->
<!-- isoreceived="20070109205722" -->
<!-- sent="Tue, 9 Jan 2007 14:56:41 -0600" -->
<!-- isosent="20070109205641" -->
<!-- name="Robert Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] external32 i/o not implemented?" -->
<!-- id="20070109205641.GZ24143_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="45A2B85E.7050808_at_cora.nwra.com" -->
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
<strong>From:</strong> Robert Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-09 15:56:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2454.php">Tom Lund: "Re: [OMPI users] external32 i/o not implemented?"</a>
<li><strong>Previous message:</strong> <a href="2452.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2443.php">Tom Lund: "Re: [OMPI users] external32 i/o not implemented?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2454.php">Tom Lund: "Re: [OMPI users] external32 i/o not implemented?"</a>
<li><strong>Reply:</strong> <a href="2454.php">Tom Lund: "Re: [OMPI users] external32 i/o not implemented?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jan 08, 2007 at 02:32:14PM -0700, Tom Lund wrote:
<br>
<span class="quotelev1">&gt; Rainer,
</span><br>
<span class="quotelev1">&gt;    Thank you for taking time to reply to my querry.  Do I understand 
</span><br>
<span class="quotelev1">&gt; correctly that external32 data representation for i/o is not 
</span><br>
<span class="quotelev1">&gt; implemented?  I am puzzled since the MPI-2 standard clearly indicates 
</span><br>
<span class="quotelev1">&gt; the existence of external32 and has lots of words regarding how nice 
</span><br>
<span class="quotelev1">&gt; this feature is for file interoperability.  So do both Open MPI and 
</span><br>
<span class="quotelev1">&gt; MPIch2 not adhere to the standard in this regard?  If this is really the 
</span><br>
<span class="quotelev1">&gt; case, how difficult is it to define a custom data representation that is 
</span><br>
<span class="quotelev1">&gt; 32-bit big endian on all platforms?  Do you know of any documentation 
</span><br>
<span class="quotelev1">&gt; that explains how to do this?
</span><br>
<span class="quotelev1">&gt;    Thanks again.
</span><br>
<p>Hi Tom
<br>
<p>You do understand correctly.  I do not know of an MPI-IO
<br>
implementation that supports external32.  
<br>
<p>When you say &quot;custom data representation&quot; do you mean an MPI-IO
<br>
user-defined data representation?  
<br>
<p>An alternate approach would be to use a higher level library like
<br>
parallel-netcdf or HDF5 (configured for parallel i/o).  Those
<br>
libraries already define a file format and implement all the necessary
<br>
data conversion routines, and they have a wealth of ancilary tools and
<br>
programs to work with their respective file formats.  Additionally,
<br>
those higher-level libraries will offer you more features than MPI-IO
<br>
such as the ability to define atributes on variables and datafiles.
<br>
Even better, there is the potential that these libraries might offer
<br>
some clever optimizations for your workload, saving you the effort.
<br>
Further, you can use those higher-level libraries on top of any MPI-IO
<br>
implementation, not just OpenMPI or MPICH2.  
<br>
<p>This is a little bit of a diversion from your original question, but
<br>
to sum it up, I'd say one potential answer to the lack of external32
<br>
is to use a higher level library and sidestep the issue of MPI-IO data
<br>
representations altogether. 
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division    A215 0178 EA2D B059 8CDF
Argonne National Lab, IL USA                 B29D F333 664A 4280 315B
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2454.php">Tom Lund: "Re: [OMPI users] external32 i/o not implemented?"</a>
<li><strong>Previous message:</strong> <a href="2452.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2443.php">Tom Lund: "Re: [OMPI users] external32 i/o not implemented?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2454.php">Tom Lund: "Re: [OMPI users] external32 i/o not implemented?"</a>
<li><strong>Reply:</strong> <a href="2454.php">Tom Lund: "Re: [OMPI users] external32 i/o not implemented?"</a>
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
