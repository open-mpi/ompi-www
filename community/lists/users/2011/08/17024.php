<?
$subject_val = "Re: [OMPI users] parallel I/O on 64-bit indexed arays";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  5 09:42:04 2011" -->
<!-- isoreceived="20110805134204" -->
<!-- sent="Fri, 5 Aug 2011 08:41:58 -0500" -->
<!-- isosent="20110805134158" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] parallel I/O on 64-bit indexed arays" -->
<!-- id="20110805134158.GA28241_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E303911.7030604_at_nbi.dk" -->
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
<strong>Subject:</strong> Re: [OMPI users] parallel I/O on 64-bit indexed arays<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-05 09:41:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17025.php">David Warren: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>Previous message:</strong> <a href="17023.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.2.8 on Xgrid noob issue"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16997.php">Troels Haugboelle: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jul 27, 2011 at 06:13:05PM +0200, Troels Haugboelle wrote:
<br>
<span class="quotelev1">&gt; and we get good (+GB/s) performance when writing files from large runs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Interestingly, an alternative and conceptually simpler option is to
</span><br>
<span class="quotelev1">&gt; use MPI_FILE_WRITE_ORDERED, but the performance of that function on
</span><br>
<span class="quotelev1">&gt; Blue-Gene/P sucks - 20 MB/s instead of GB/s. I do not know why.
</span><br>
<p>Ordered mode as implemented in ROMIO is awful.  Entirely serialized.
<br>
We pass a token from process to process. Each process acquires the
<br>
token, updates the shared file pointer, does its i/o, then passes the
<br>
token to the next process. 
<br>
<p>What we should do, and have done in test branches [1], is use MPI_SCAN
<br>
to look at the shared file pointer once, tell all the processors their
<br>
offset, then update the shared file pointer while all processes do I/O
<br>
in parallel. 
<br>
<p>[1]: Robert Latham, Robert Ross, and Rajeev Thakur. &quot;Implementing
<br>
MPI-IO Atomic Mode and Shared File Pointers Using MPI One-Sided
<br>
Communication&quot;. International Journal of High Performance Computing
<br>
Applications, 21(2):132-143, 2007
<br>
<p>Since no one uses the shared file pointers, and even fewer people use
<br>
ordered mode, we just haven't seen the need to do so. 
<br>
<p>Do you want to rebuild your MPI library on BlueGene?  I can pretty
<br>
quickly generate and send a patch that will make ordered mode go whip
<br>
fast. 
<br>
<p>==rob
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Troels
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 6/7/11 15:04 , Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt;On Jun 7, 2011, at 4:53 AM, Troels Haugboelle wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;In principle yes, but the problem is we have an unequal amount of particles on each node, so the length of each array is not guaranteed to be divisible by 2, 4 or any other number. If I have understood the definition of MPI_TYPE_CREATE_SUBARRAY correctly the offset can be 64-bit, but not the global array size, so, optimally, what I am looking for is something that has unequal size for each thread, simple vector, and with 64-bit offsets and global array size.
</span><br>
<span class="quotelev2">&gt; &gt;It's a bit awkward, but you can still make datatypes to give the offset that you want.  E.g., if you need an offset of 2B+31 bytes, you can make datatype A with type contig of N=(2B/sizeof(int)) int's.  Then make datatype B with type struct, containing type A and 31 MPI_BYTEs.  Then use 1 instance of datatype B to get the offset that you want.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;You could make utility functions that, given a specific (64 bit) offset, it makes an MPI datatype that matches the offset, and then frees it (and all sub-datatypes).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;There is a bit of overhead in creating these datatypes, but it should be dwarfed by the amount of data that you're reading/writing, right?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;It's awkward, but it should work.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Another possible workaround would be to identify subsections that do not pass 2B elements, make sub communicators, and then let each of them dump their elements with proper offsets. It may work. The problematic architecture is a BG/P. On other clusters doing simple I/O, letting all threads open the file, seek to their position, and then write their chunk works fine, but somehow on BG/P performance drops dramatically. My guess is that there is some file locking, or we are overwhelming the I/O nodes..
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;This ticket for the MPI-3 standard is a first step in the right direction, but won't do everything you need (this is more FYI):
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     <a href="https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/265">https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/265</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;See the PDF attached to the ticket; it's going up for a &quot;first reading&quot; in a month.  It'll hopefully be part of the MPI-3 standard by the end of the year (Fab Tillier, CC'ed, has been the chief proponent of this ticket for the past several months).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Quincey Koziol from the HDF group is going to propose a follow on to this ticket, specifically about the case you're referring to -- large counts for file functions and datatype constructors.  Quincey -- can you expand on what you'll be proposing, perchance?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Interesting, I think something along the lines of the note would be very useful and needed for large applications.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Thanks a lot for the pointers and your suggestions,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;cheers,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Troels
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17025.php">David Warren: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>Previous message:</strong> <a href="17023.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.2.8 on Xgrid noob issue"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16997.php">Troels Haugboelle: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
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
