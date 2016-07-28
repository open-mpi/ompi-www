<?
$subject_val = "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  7 06:18:38 2009" -->
<!-- isoreceived="20090207111838" -->
<!-- sent="Sat, 7 Feb 2009 06:17:59 -0500" -->
<!-- isosent="20090207111759" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV" -->
<!-- id="442B7F6C-9E67-45F5-8B4E-60D50FE5BEDB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="498A1F2F.3030009_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-07 06:17:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5385.php">Jeff Squyres: "[OMPI devel] meeting @Cisco on Wednesday"</a>
<li><strong>Previous message:</strong> <a href="5383.php">Christoph van W&#252;llen: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<li><strong>In reply to:</strong> <a href="5373.php">Eugene Loh: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5386.php">Brian W. Barrett: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<li><strong>Reply:</strong> <a href="5386.php">Brian W. Barrett: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 4, 2009, at 6:05 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev2">&gt;&gt; - Remove a function call from the critical performance path;  
</span><br>
<span class="quotelev2">&gt;&gt; possibly  save a little latency
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only &quot;benefit&quot; is &quot;possibly a little&quot;?  This is not at all  
</span><br>
<span class="quotelev1">&gt; compelling.  Is the hoped-for benefit measurable?  I assume a  
</span><br>
<span class="quotelev1">&gt; pingpong latency test over shared memory is the only hope you have  
</span><br>
<span class="quotelev1">&gt; of observing any benefit.  Have you attempted to measure this, or is  
</span><br>
<span class="quotelev1">&gt; this benefit only conjecture?
</span><br>
<p>When I wrote it, it was pure conjecture.  But your mail shamed me into  
<br>
actually testing.  It turns out that there is about 10ns of  
<br>
improvement by removing the function call.  Specifically, I tested  
<br>
with the following:
<br>
<p>- <a href="http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/fortran/">http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/fortran/</a> has a  
<br>
WANT_C #define in both ompi/mpi/f77/send_f.c and recv_f.c.  If you  
<br>
hand-edit these files and set it to 0 or 1, it'll do the layering on C  
<br>
or not.  The not-layering code is hacked up; it's just a proof of  
<br>
concept.  For the non-layered versions, I literally copied the guts of  
<br>
ompi/mpi/c/send.c to ompi/mpi/f77/send_f.c and added the convert- 
<br>
integer-to-pointer macros.  Ditto for recv.c/recv_f.c.  So the C and  
<br>
F77 versions *should* be doing [almost] exactly the same thing.
<br>
<p>- There's also a new top-level directory in that hg tree called &quot;f90&quot;  
<br>
that has a 0-byte latency test program.  I copied the osu-latency.c  
<br>
program and turned the inner send/recv loop into fortran.  Because  
<br>
there's so much latency jitter at these sizes, I changed the program  
<br>
to a) only run the 0 byte size and b) run the 0 byte size test 10,000  
<br>
times.
<br>
<p>- I configured OMPI with: ./configure --prefix=/home/jsquyres/bogus -- 
<br>
enable-mpirun-prefix-by-default --with-platform=optimized
<br>
<p>- I ran on a single 4-core wolfdale-class machine that was otherwise  
<br>
empty
<br>
<p>- I ran with --mca mpi_paffinity_alone 1 --mca mpi_param_check 0 --mca  
<br>
btl sm,self and saved stdout to a .csv file
<br>
<p>- I then changed the WANT_C #define in both files, recompiled/ 
<br>
reinstalled just the mpi_f77 library, and re-ran the same f90 test  
<br>
program (I did *NOT* recompile/relink the f90 test program -- the  
<br>
*only* thing that changed was the mpi_f77 library).  I ran with the  
<br>
same MPI params and saved the stdout to a different .csv file.
<br>
<p>- I took both sets of output numbers and graphed the first ~500 of  
<br>
them in Excel; see attached (trying to graph all 10,000 made Excel  
<br>
choke -- sigh)
<br>
<p>End result: I guess I'm a little surprised that the difference is that  
<br>
clear -- does a function call really take 10ns?  I'm also surprised  
<br>
that the layered C version has significantly more jitter than the non- 
<br>
layered version; I can't really explain that.  I'd welcome anyone else  
<br>
replicating experiment and/or eyeballing my code to make sure I didn't  
<br>
bork something up.
<br>
<p><span class="quotelev2">&gt;&gt; Drawback
</span><br>
<span class="quotelev2">&gt;&gt; - Duplicate some code (but this code rarely/never changes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's still code bloat.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - May violate MPI profiling libraries that assume that the Fortran  
</span><br>
<span class="quotelev2">&gt;&gt; MPI  API functions call the C MPI API functions
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not real familiar with the issues here, but this strikes me as a  
</span><br>
<span class="quotelev1">&gt; serious drawback.
</span><br>
<p>I think it would be pretty easy to have a compile time and/or run-time  
<br>
switch to decide which to use.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems

</pre>
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-5384/f90-c-vs-noc.png" alt="f90-c-vs-noc.png">
<!-- attachment="f90-c-vs-noc.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5385.php">Jeff Squyres: "[OMPI devel] meeting @Cisco on Wednesday"</a>
<li><strong>Previous message:</strong> <a href="5383.php">Christoph van W&#252;llen: "Re: [OMPI devel] bug in openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<li><strong>In reply to:</strong> <a href="5373.php">Eugene Loh: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5386.php">Brian W. Barrett: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<li><strong>Reply:</strong> <a href="5386.php">Brian W. Barrett: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
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
