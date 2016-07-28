<?
$subject_val = "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  1 07:52:09 2008" -->
<!-- isoreceived="20081101115209" -->
<!-- sent="Sat, 1 Nov 2008 07:52:02 -0400" -->
<!-- isosent="20081101115202" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)" -->
<!-- id="BC3799D8-CBDA-4145-B769-8EF254D02CEE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="654BB3EC83894E319DD4EC111E07B5EC_at_exstream.local" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-01 07:52:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7183.php">Hahn Kim: "Re: [OMPI users] problem running Open MPI on Cells"</a>
<li><strong>Previous message:</strong> <a href="7181.php">Jeff Squyres: "Re: [OMPI users] problem running Open MPI on Cells"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/7165.php">Rajesh Ramaya: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7185.php">Terry Frankcombe: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<li><strong>Reply:</strong> <a href="7185.php">Terry Frankcombe: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 31, 2008, at 3:07 PM, Rajesh Ramaya wrote:
<br>
<p><span class="quotelev1">&gt;   Thank you very much for the immediate reply. I am able to  
</span><br>
<span class="quotelev1">&gt; successfully
</span><br>
<span class="quotelev1">&gt; access the data from the common block but the values are zero. In my
</span><br>
<span class="quotelev1">&gt; algorithm I even update a common block but the update made by the  
</span><br>
<span class="quotelev1">&gt; shared
</span><br>
<span class="quotelev1">&gt; library is not taken in to account by the executable.
</span><br>
<p>Can you reduce this to a small example that you can share, perchance?
<br>
<p>It might be worth stepping through one of your MPI processes with a  
<br>
debugger and see what the run-time-resolved addresses for your common  
<br>
block are, as viewed from each of the different entities in your  
<br>
application (to see if the linker is somehow mismatching them...  
<br>
that's a pretty wild guess, though).
<br>
<p><span class="quotelev1">&gt; Can you please be very
</span><br>
<span class="quotelev1">&gt; specific how to make the parallel algorithm aware of the data?
</span><br>
<p>All I was trying to [poorly] say is that based on whatever parallel  
<br>
algorithm is being used, all the data may now not be available in all  
<br>
MPI processes -- it may only be partially available in each MPI  
<br>
process.  So it may not be that the entire common block is empty, but  
<br>
perhaps only part of it (because this MPI process is not responsible  
<br>
for that part of the data).  This is entirely problem/application- 
<br>
specific, of course, and may or may not apply to your situation.
<br>
<p><span class="quotelev1">&gt; Actually I am
</span><br>
<span class="quotelev1">&gt; not writing any MPI code inside? It's the executable (third party  
</span><br>
<span class="quotelev1">&gt; software)
</span><br>
<span class="quotelev1">&gt; who does that part. All that I am doing is to compile my code with  
</span><br>
<span class="quotelev1">&gt; MPI c
</span><br>
<span class="quotelev1">&gt; compiler and add it in the LD_LIBIRARY_PATH.
</span><br>
<span class="quotelev1">&gt; In fact I did a simple test by creating a shared library using a  
</span><br>
<span class="quotelev1">&gt; FORTRAN
</span><br>
<span class="quotelev1">&gt; code and the update made to the common block is taken in to account  
</span><br>
<span class="quotelev1">&gt; by the
</span><br>
<span class="quotelev1">&gt; executable. Is there any flag or pragma that need to be activated  
</span><br>
<span class="quotelev1">&gt; for mixed
</span><br>
<span class="quotelev1">&gt; language MPI?
</span><br>
<p>No, there shouldn't be.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7183.php">Hahn Kim: "Re: [OMPI users] problem running Open MPI on Cells"</a>
<li><strong>Previous message:</strong> <a href="7181.php">Jeff Squyres: "Re: [OMPI users] problem running Open MPI on Cells"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/7165.php">Rajesh Ramaya: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7185.php">Terry Frankcombe: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<li><strong>Reply:</strong> <a href="7185.php">Terry Frankcombe: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
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
