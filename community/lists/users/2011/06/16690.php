<?
$subject_val = "Re: [OMPI users] parallel I/O on 64-bit indexed arays";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 09:05:05 2011" -->
<!-- isoreceived="20110607130505" -->
<!-- sent="Tue, 7 Jun 2011 09:04:57 -0400" -->
<!-- isosent="20110607130457" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] parallel I/O on 64-bit indexed arays" -->
<!-- id="9C808302-4863-4FBD-91B3-4933B9570C4B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DEDE723.6030301_at_nbi.dk" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-07 09:04:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16691.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Previous message:</strong> <a href="16689.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>In reply to:</strong> <a href="16687.php">Troels Haugboelle: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16997.php">Troels Haugboelle: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16997.php">Troels Haugboelle: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 7, 2011, at 4:53 AM, Troels Haugboelle wrote:
<br>
<p><span class="quotelev1">&gt; In principle yes, but the problem is we have an unequal amount of particles on each node, so the length of each array is not guaranteed to be divisible by 2, 4 or any other number. If I have understood the definition of MPI_TYPE_CREATE_SUBARRAY correctly the offset can be 64-bit, but not the global array size, so, optimally, what I am looking for is something that has unequal size for each thread, simple vector, and with 64-bit offsets and global array size.
</span><br>
<p>It's a bit awkward, but you can still make datatypes to give the offset that you want.  E.g., if you need an offset of 2B+31 bytes, you can make datatype A with type contig of N=(2B/sizeof(int)) int's.  Then make datatype B with type struct, containing type A and 31 MPI_BYTEs.  Then use 1 instance of datatype B to get the offset that you want.
<br>
<p>You could make utility functions that, given a specific (64 bit) offset, it makes an MPI datatype that matches the offset, and then frees it (and all sub-datatypes).
<br>
<p>There is a bit of overhead in creating these datatypes, but it should be dwarfed by the amount of data that you're reading/writing, right?
<br>
<p>It's awkward, but it should work.
<br>
<p><span class="quotelev1">&gt; Another possible workaround would be to identify subsections that do not pass 2B elements, make sub communicators, and then let each of them dump their elements with proper offsets. It may work. The problematic architecture is a BG/P. On other clusters doing simple I/O, letting all threads open the file, seek to their position, and then write their chunk works fine, but somehow on BG/P performance drops dramatically. My guess is that there is some file locking, or we are overwhelming the I/O nodes..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This ticket for the MPI-3 standard is a first step in the right direction, but won't do everything you need (this is more FYI):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/265">https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/265</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; See the PDF attached to the ticket; it's going up for a &quot;first reading&quot; in a month.  It'll hopefully be part of the MPI-3 standard by the end of the year (Fab Tillier, CC'ed, has been the chief proponent of this ticket for the past several months).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Quincey Koziol from the HDF group is going to propose a follow on to this ticket, specifically about the case you're referring to -- large counts for file functions and datatype constructors.  Quincey -- can you expand on what you'll be proposing, perchance?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Interesting, I think something along the lines of the note would be very useful and needed for large applications.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot for the pointers and your suggestions,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Troels
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16691.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Previous message:</strong> <a href="16689.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>In reply to:</strong> <a href="16687.php">Troels Haugboelle: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16997.php">Troels Haugboelle: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16997.php">Troels Haugboelle: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
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
