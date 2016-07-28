<?
$subject_val = "Re: [OMPI users] parallel I/O on 64-bit indexed arays";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 27 12:13:11 2011" -->
<!-- isoreceived="20110727161311" -->
<!-- sent="Wed, 27 Jul 2011 18:13:05 +0200" -->
<!-- isosent="20110727161305" -->
<!-- name="Troels Haugboelle" -->
<!-- email="haugboel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] parallel I/O on 64-bit indexed arays" -->
<!-- id="4E303911.7030604_at_nbi.dk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9C808302-4863-4FBD-91B3-4933B9570C4B_at_cisco.com" -->
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
<strong>From:</strong> Troels Haugboelle (<em>haugboel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-27 12:13:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16998.php">Lane, William: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots	in	cluster, but nothing more than that"</a>
<li><strong>Previous message:</strong> <a href="16996.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16690.php">Jeff Squyres: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/08/17024.php">Rob Latham: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/08/17024.php">Rob Latham: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For the benefit of people running into similar problems and ending up 
<br>
reading this thread, we finally found a solution.
<br>
<p>One can use the mpi function MPI_TYPE_CREATE_HINDEXED to create an mpi 
<br>
data type with 32-bit local variable count and 64-bit offsets, which 
<br>
will work good enough for us for the time being.
<br>
<p>Specifically the code looks like this :
<br>
<p>&nbsp;&nbsp;&nbsp;! Create vector type with 64-bit offset measured in bytes
<br>
&nbsp;&nbsp;&nbsp;CALL MPI_TYPE_CREATE_HINDEXED (1, local_particle_number, 
<br>
offset_in_global_particle_array, MPI_REAL, filetype, err)
<br>
&nbsp;&nbsp;&nbsp;CALL MPI_TYPE_COMMIT (filetype, err)
<br>
&nbsp;&nbsp;&nbsp;! Write data
<br>
&nbsp;&nbsp;&nbsp;CALL MPI_FILE_SET_VIEW (file_handle, file_position, MPI_REAL, 
<br>
filetype, 'native', MPI_INFO_NULL, err)
<br>
&nbsp;&nbsp;&nbsp;CALL MPI_FILE_WRITE_ALL(file_handle, data, local_particle_number, 
<br>
MPI_REAL, status, err)
<br>
&nbsp;&nbsp;&nbsp;file_position = file_position + global_particle_number
<br>
&nbsp;&nbsp;&nbsp;! Free type
<br>
&nbsp;&nbsp;&nbsp;CALL MPI_TYPE_FREE (filetype, err)
<br>
<p>and we get good (+GB/s) performance when writing files from large runs.
<br>
<p>Interestingly, an alternative and conceptually simpler option is to use 
<br>
MPI_FILE_WRITE_ORDERED, but the performance of that function on 
<br>
Blue-Gene/P sucks - 20 MB/s instead of GB/s. I do not know why.
<br>
<p>best,
<br>
<p>Troels
<br>
<p>On 6/7/11 15:04 , Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 7, 2011, at 4:53 AM, Troels Haugboelle wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In principle yes, but the problem is we have an unequal amount of particles on each node, so the length of each array is not guaranteed to be divisible by 2, 4 or any other number. If I have understood the definition of MPI_TYPE_CREATE_SUBARRAY correctly the offset can be 64-bit, but not the global array size, so, optimally, what I am looking for is something that has unequal size for each thread, simple vector, and with 64-bit offsets and global array size.
</span><br>
<span class="quotelev1">&gt; It's a bit awkward, but you can still make datatypes to give the offset that you want.  E.g., if you need an offset of 2B+31 bytes, you can make datatype A with type contig of N=(2B/sizeof(int)) int's.  Then make datatype B with type struct, containing type A and 31 MPI_BYTEs.  Then use 1 instance of datatype B to get the offset that you want.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You could make utility functions that, given a specific (64 bit) offset, it makes an MPI datatype that matches the offset, and then frees it (and all sub-datatypes).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a bit of overhead in creating these datatypes, but it should be dwarfed by the amount of data that you're reading/writing, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's awkward, but it should work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another possible workaround would be to identify subsections that do not pass 2B elements, make sub communicators, and then let each of them dump their elements with proper offsets. It may work. The problematic architecture is a BG/P. On other clusters doing simple I/O, letting all threads open the file, seek to their position, and then write their chunk works fine, but somehow on BG/P performance drops dramatically. My guess is that there is some file locking, or we are overwhelming the I/O nodes..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This ticket for the MPI-3 standard is a first step in the right direction, but won't do everything you need (this is more FYI):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      <a href="https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/265">https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/265</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See the PDF attached to the ticket; it's going up for a &quot;first reading&quot; in a month.  It'll hopefully be part of the MPI-3 standard by the end of the year (Fab Tillier, CC'ed, has been the chief proponent of this ticket for the past several months).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Quincey Koziol from the HDF group is going to propose a follow on to this ticket, specifically about the case you're referring to -- large counts for file functions and datatype constructors.  Quincey -- can you expand on what you'll be proposing, perchance?
</span><br>
<span class="quotelev2">&gt;&gt; Interesting, I think something along the lines of the note would be very useful and needed for large applications.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks a lot for the pointers and your suggestions,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Troels
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16998.php">Lane, William: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots	in	cluster, but nothing more than that"</a>
<li><strong>Previous message:</strong> <a href="16996.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16690.php">Jeff Squyres: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/08/17024.php">Rob Latham: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/08/17024.php">Rob Latham: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
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
