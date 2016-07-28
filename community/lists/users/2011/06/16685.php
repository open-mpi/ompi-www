<?
$subject_val = "Re: [OMPI users] parallel I/O on 64-bit indexed arays";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  6 21:07:26 2011" -->
<!-- isoreceived="20110607010726" -->
<!-- sent="Mon, 6 Jun 2011 21:07:19 -0400" -->
<!-- isosent="20110607010719" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] parallel I/O on 64-bit indexed arays" -->
<!-- id="7DA45E0D-1A7C-4207-A1B6-E7C33098621C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DEC9D63.7060600_at_nbi.dk" -->
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
<strong>Date:</strong> 2011-06-06 21:07:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16686.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Previous message:</strong> <a href="16684.php">Jeff Squyres: "Re: [OMPI users] difference between MTL and BTL"</a>
<li><strong>In reply to:</strong> <a href="16678.php">Troels Haugboelle: "[OMPI users] parallel I/O on 64-bit indexed arays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16687.php">Troels Haugboelle: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<li><strong>Reply:</strong> <a href="16687.php">Troels Haugboelle: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If I understand your question correctly, this is *exactly* one of the reasons that the MPI Forum has been arguing about the use of a new type, &quot;MPI_Count&quot;, for certain parameters that can get very, very large.
<br>
<p>-----
<br>
Sidenote: I believe that a workaround for you is to create some new MPI datatypes (e.g., of type contiguous) that you can then use to multiply to get to the offsets that you want.  I.e., if you make a type contig datatype of 4 doubles, you can still only specify up to 2B of them, but that will now get you up to an offset of (2B * 4 * sizeof(double)) rather than (2B * sizeof(double)).  Make sense?
<br>
-----
<br>
<p>This ticket for the MPI-3 standard is a first step in the right direction, but won't do everything you need (this is more FYI):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/265">https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/265</a>
<br>
<p>See the PDF attached to the ticket; it's going up for a &quot;first reading&quot; in a month.  It'll hopefully be part of the MPI-3 standard by the end of the year (Fab Tillier, CC'ed, has been the chief proponent of this ticket for the past several months).
<br>
<p>Quincey Koziol from the HDF group is going to propose a follow on to this ticket, specifically about the case you're referring to -- large counts for file functions and datatype constructors.  Quincey -- can you expand on what you'll be proposing, perchance?
<br>
<p><p><p>On Jun 6, 2011, at 5:26 AM, Troels Haugboelle wrote:
<br>
<p><span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem I face is not open-mpi specific, but I hope still the MPI wizards on the list can help me nonetheless.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running and developing a large-scale scientific code written in Fortran90. One type of objects are global 1-D vectors, which contains data for particles in the application. I want to use MPI commands for saving the particle data but the global 1D array holding the data can reach up to 100 billion elements, and array offsets and global sizes have to be 64-bit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We use MPI_TYPE_CREATE_SUBARRAY for making a custom type and then MPI_FILE_SET_VIEW and MPI_FILE_WRITE_ALL for saving the 3D field data. This works with good performance on even very large installations / runs, but arguments to MPI_TYPE_CREATE_SUBARRAY are 32 bit integers, and that is not sufficient for the 1D-particle array. It needs 64-bit offsets and 64-bit global sizes. Local sizes for each thread are 32-bit though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What MPI call could I use to make a custom MPI type that describes the above data, which has 64-bit indices / global size ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As an example, for 3 threads the type layout would be :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thread 0: n0 reals, n1 holes, n2 holes
</span><br>
<span class="quotelev1">&gt; Thread 1: n0 holes, n1 reals, n2 holes
</span><br>
<span class="quotelev1">&gt; Thread 2: n0 holes, n1 holes, n2 reals
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is I have to generalize that to 100 billion elements and 250k threads.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As a remark; given that data keeps on becoming bigger: It would be very nice if the arguments to MPI_TYPE_CREATE_SUBARRAY, and arguments to other similar routines could be 64-bit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIA,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Troels
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="16686.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Previous message:</strong> <a href="16684.php">Jeff Squyres: "Re: [OMPI users] difference between MTL and BTL"</a>
<li><strong>In reply to:</strong> <a href="16678.php">Troels Haugboelle: "[OMPI users] parallel I/O on 64-bit indexed arays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16687.php">Troels Haugboelle: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<li><strong>Reply:</strong> <a href="16687.php">Troels Haugboelle: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
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
