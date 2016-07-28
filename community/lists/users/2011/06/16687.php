<?
$subject_val = "Re: [OMPI users] parallel I/O on 64-bit indexed arays";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 04:54:02 2011" -->
<!-- isoreceived="20110607085402" -->
<!-- sent="Tue, 07 Jun 2011 10:53:55 +0200" -->
<!-- isosent="20110607085355" -->
<!-- name="Troels Haugboelle" -->
<!-- email="haugboel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] parallel I/O on 64-bit indexed arays" -->
<!-- id="4DEDE723.6030301_at_nbi.dk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7DA45E0D-1A7C-4207-A1B6-E7C33098621C_at_cisco.com" -->
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
<strong>Date:</strong> 2011-06-07 04:53:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16688.php">Virginie trinite: "Re: [OMPI users] ifort 12.0.4 install problem"</a>
<li><strong>Previous message:</strong> <a href="16686.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>In reply to:</strong> <a href="16685.php">Jeff Squyres: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16690.php">Jeff Squyres: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<li><strong>Reply:</strong> <a href="16690.php">Jeff Squyres: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; If I understand your question correctly, this is *exactly* one of the reasons that the MPI Forum has been arguing about the use of a new type, &quot;MPI_Count&quot;, for certain parameters that can get very, very large.
</span><br>
<p>Yes, that would help, but unfortunately only in the future.
<br>
<p><span class="quotelev1">&gt; Sidenote: I believe that a workaround for you is to create some new MPI datatypes (e.g., of type contiguous) that you can then use to multiply to get to the offsets that you want.  I.e., if you make a type contig datatype of 4 doubles, you can still only specify up to 2B of them, but that will now get you up to an offset of (2B * 4 * sizeof(double)) rather than (2B * sizeof(double)).  Make sense?
</span><br>
<p>In principle yes, but the problem is we have an unequal amount of 
<br>
particles on each node, so the length of each array is not guaranteed to 
<br>
be divisible by 2, 4 or any other number. If I have understood the 
<br>
definition of MPI_TYPE_CREATE_SUBARRAY correctly the offset can be 
<br>
64-bit, but not the global array size, so, optimally, what I am looking 
<br>
for is something that has unequal size for each thread, simple vector, 
<br>
and with 64-bit offsets and global array size.
<br>
<p>Another possible workaround would be to identify subsections that do not 
<br>
pass 2B elements, make sub communicators, and then let each of them dump 
<br>
their elements with proper offsets. It may work. The problematic 
<br>
architecture is a BG/P. On other clusters doing simple I/O, letting all 
<br>
threads open the file, seek to their position, and then write their 
<br>
chunk works fine, but somehow on BG/P performance drops dramatically. My 
<br>
guess is that there is some file locking, or we are overwhelming the I/O 
<br>
nodes..
<br>
<p><span class="quotelev1">&gt; This ticket for the MPI-3 standard is a first step in the right direction, but won't do everything you need (this is more FYI):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/265">https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/265</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See the PDF attached to the ticket; it's going up for a &quot;first reading&quot; in a month.  It'll hopefully be part of the MPI-3 standard by the end of the year (Fab Tillier, CC'ed, has been the chief proponent of this ticket for the past several months).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Quincey Koziol from the HDF group is going to propose a follow on to this ticket, specifically about the case you're referring to -- large counts for file functions and datatype constructors.  Quincey -- can you expand on what you'll be proposing, perchance?
</span><br>
<p>Interesting, I think something along the lines of the note would be very 
<br>
useful and needed for large applications.
<br>
<p>Thanks a lot for the pointers and your suggestions,
<br>
<p>cheers,
<br>
<p>Troels
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16688.php">Virginie trinite: "Re: [OMPI users] ifort 12.0.4 install problem"</a>
<li><strong>Previous message:</strong> <a href="16686.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>In reply to:</strong> <a href="16685.php">Jeff Squyres: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16690.php">Jeff Squyres: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<li><strong>Reply:</strong> <a href="16690.php">Jeff Squyres: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
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
