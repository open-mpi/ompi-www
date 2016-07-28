<?
$subject_val = "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 20 16:42:35 2008" -->
<!-- isoreceived="20080820204235" -->
<!-- sent="Wed, 20 Aug 2008 16:42:01 -0400" -->
<!-- isosent="20080820204201" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays" -->
<!-- id="OFE81BBD75.392DDD3F-ON852574AB.006FDE4F-852574AB.0071B5CB_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48AC5D73.1080709_at_ncsu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-20 16:42:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6402.php">C.Y. Lee: "Re: [OMPI users] Segmentation fault (11) Address not mapped (1)"</a>
<li><strong>Previous message:</strong> <a href="6400.php">Jitendra Kumar: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<li><strong>In reply to:</strong> <a href="6400.php">Jitendra Kumar: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jitendra
<br>
<p>Before you worry too much about the inefficiency of using a contiguous
<br>
scratch buffer to pack into and send from and a second contiguous scratch
<br>
buffer to receive into and unpack from, it would be worth knowing how
<br>
OpenMPI processes a discontiguous datatype on your platform.
<br>
<p>Gathering outgoing data directly from discontiguous memory to a network
<br>
interface and scattering incoming data from a network interface directly to
<br>
discontiguous memory is practical in some cases but not in all. When it is
<br>
not practical, the fallback inside the MPI implementation can involve
<br>
allocating scratch buffers under the covers and doing pack/unpack guided by
<br>
the datatype.   If that is what is happening then you can do the
<br>
pack/unpack at least as efficiently as libmpi interpreting a datatype to do
<br>
the same thing.
<br>
<p>If the data is being passed via shared memory then it should be practical
<br>
for the MPI implementation to avoid pack/unpack scratch buffers.
<br>
<p>The use of a datatype is clearly more elegant and when the MPI
<br>
implementation is able to avoid intermediate buffering, it is likely to be
<br>
more efficient as well.
<br>
<p><p>Dick Treumann  -  MPI Team
<br>
IBM Systems &amp; Technology Group
<br>
Dept 0lva / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 08/20/2008 02:07:47 PM:
<br>
<p><span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt; Yes that's what I understood after struggling with it over a week. I
</span><br>
<span class="quotelev1">&gt; need to send such messages frequently so creating and destroying the
</span><br>
<span class="quotelev1">&gt; data type each time may be expensive. What would be the best alternative
</span><br>
<span class="quotelev1">&gt; for sending such malloced data ? Though I can always pack the data in a
</span><br>
<span class="quotelev1">&gt; long array and unpack at the opposite end as I know the structure of the
</span><br>
<span class="quotelev1">&gt; data at each node. Anything more efficient and elegant will be better.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the help.
</span><br>
<span class="quotelev1">&gt; Jitendra
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6401/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6402.php">C.Y. Lee: "Re: [OMPI users] Segmentation fault (11) Address not mapped (1)"</a>
<li><strong>Previous message:</strong> <a href="6400.php">Jitendra Kumar: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<li><strong>In reply to:</strong> <a href="6400.php">Jitendra Kumar: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
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
