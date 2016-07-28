<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan  9 16:53:30 2007" -->
<!-- isoreceived="20070109215330" -->
<!-- sent="Tue, 09 Jan 2007 14:53:24 -0700" -->
<!-- isosent="20070109215324" -->
<!-- name="Tom Lund" -->
<!-- email="lund_at_[hidden]" -->
<!-- subject="Re: [OMPI users] external32 i/o not implemented?" -->
<!-- id="45A40ED4.4010808_at_cora.nwra.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070109205641.GZ24143_at_mcs.anl.gov" -->
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
<strong>From:</strong> Tom Lund (<em>lund_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-09 16:53:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2455.php">Robert Latham: "Re: [OMPI users] external32 i/o not implemented?"</a>
<li><strong>Previous message:</strong> <a href="2453.php">Robert Latham: "Re: [OMPI users] external32 i/o not implemented?"</a>
<li><strong>In reply to:</strong> <a href="2453.php">Robert Latham: "Re: [OMPI users] external32 i/o not implemented?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2455.php">Robert Latham: "Re: [OMPI users] external32 i/o not implemented?"</a>
<li><strong>Reply:</strong> <a href="2455.php">Robert Latham: "Re: [OMPI users] external32 i/o not implemented?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rob,
<br>
&nbsp;&nbsp;&nbsp;Thank you for your informative reply.  I had no luck finding the 
<br>
external32 data representation in any of several mpi implementations and 
<br>
thus I do need to devise an alternative strategy.  Do you know of a good 
<br>
reference explaining how to combine HDF5 with mpi?
<br>
<p>&nbsp;&nbsp;&nbsp;---Tom
<br>
<p>Robert Latham wrote:
<br>
<span class="quotelev1">&gt; On Mon, Jan 08, 2007 at 02:32:14PM -0700, Tom Lund wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Rainer,
</span><br>
<span class="quotelev2">&gt;&gt;    Thank you for taking time to reply to my querry.  Do I understand 
</span><br>
<span class="quotelev2">&gt;&gt; correctly that external32 data representation for i/o is not 
</span><br>
<span class="quotelev2">&gt;&gt; implemented?  I am puzzled since the MPI-2 standard clearly indicates 
</span><br>
<span class="quotelev2">&gt;&gt; the existence of external32 and has lots of words regarding how nice 
</span><br>
<span class="quotelev2">&gt;&gt; this feature is for file interoperability.  So do both Open MPI and 
</span><br>
<span class="quotelev2">&gt;&gt; MPIch2 not adhere to the standard in this regard?  If this is really the 
</span><br>
<span class="quotelev2">&gt;&gt; case, how difficult is it to define a custom data representation that is 
</span><br>
<span class="quotelev2">&gt;&gt; 32-bit big endian on all platforms?  Do you know of any documentation 
</span><br>
<span class="quotelev2">&gt;&gt; that explains how to do this?
</span><br>
<span class="quotelev2">&gt;&gt;    Thanks again.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Tom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You do understand correctly.  I do not know of an MPI-IO
</span><br>
<span class="quotelev1">&gt; implementation that supports external32.  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When you say &quot;custom data representation&quot; do you mean an MPI-IO
</span><br>
<span class="quotelev1">&gt; user-defined data representation?  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; An alternate approach would be to use a higher level library like
</span><br>
<span class="quotelev1">&gt; parallel-netcdf or HDF5 (configured for parallel i/o).  Those
</span><br>
<span class="quotelev1">&gt; libraries already define a file format and implement all the necessary
</span><br>
<span class="quotelev1">&gt; data conversion routines, and they have a wealth of ancilary tools and
</span><br>
<span class="quotelev1">&gt; programs to work with their respective file formats.  Additionally,
</span><br>
<span class="quotelev1">&gt; those higher-level libraries will offer you more features than MPI-IO
</span><br>
<span class="quotelev1">&gt; such as the ability to define atributes on variables and datafiles.
</span><br>
<span class="quotelev1">&gt; Even better, there is the potential that these libraries might offer
</span><br>
<span class="quotelev1">&gt; some clever optimizations for your workload, saving you the effort.
</span><br>
<span class="quotelev1">&gt; Further, you can use those higher-level libraries on top of any MPI-IO
</span><br>
<span class="quotelev1">&gt; implementation, not just OpenMPI or MPICH2.  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a little bit of a diversion from your original question, but
</span><br>
<span class="quotelev1">&gt; to sum it up, I'd say one potential answer to the lack of external32
</span><br>
<span class="quotelev1">&gt; is to use a higher level library and sidestep the issue of MPI-IO data
</span><br>
<span class="quotelev1">&gt; representations altogether. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
===========================================================
   Thomas S. Lund
   Sr. Research Scientist
   Colorado Research Associates, a division of
   NorthWest Research Associates
   3380 Mitchell Ln.
   Boulder, CO 80301
   (303) 415-9701 X 209 (voice)
   (303) 415-9702       (fax)
   lund_at_[hidden]
===========================================================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2455.php">Robert Latham: "Re: [OMPI users] external32 i/o not implemented?"</a>
<li><strong>Previous message:</strong> <a href="2453.php">Robert Latham: "Re: [OMPI users] external32 i/o not implemented?"</a>
<li><strong>In reply to:</strong> <a href="2453.php">Robert Latham: "Re: [OMPI users] external32 i/o not implemented?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2455.php">Robert Latham: "Re: [OMPI users] external32 i/o not implemented?"</a>
<li><strong>Reply:</strong> <a href="2455.php">Robert Latham: "Re: [OMPI users] external32 i/o not implemented?"</a>
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
