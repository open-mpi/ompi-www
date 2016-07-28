<?
$subject_val = "Re: [OMPI users] mpi_file_read and arrays of custom datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  1 11:50:45 2014" -->
<!-- isoreceived="20141201165045" -->
<!-- sent="Mon, 1 Dec 2014 10:50:44 -0600" -->
<!-- isosent="20141201165044" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_file_read and arrays of custom datatypes" -->
<!-- id="547C9C64.9080108_at_mcs.anl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CABNNtPDkz1Bc+tyDbVN50aVzHifPuZSWQRq9Mt+5L4bS=fVxGg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_file_read and arrays of custom datatypes<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-01 11:50:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25895.php">Ralph Castain: "Re: [OMPI users] &quot;default-only MCA variable&quot;?"</a>
<li><strong>Previous message:</strong> <a href="25893.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/09/25381.php">Au Eelis: "[OMPI users] mpi_file_read and arrays of custom datatypes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 09/24/2014 01:56 AM, Au Eelis wrote:
<br>
<span class="quotelev1">&gt; I want to convert the input/output of my program to MPI-IO routines. To
</span><br>
<span class="quotelev1">&gt; write the same data, as is written in the already implement textmode
</span><br>
<span class="quotelev1">&gt; routines, I need a custom datatype consisting of several integers and reals.
</span><br>
<p>I was hoping someone else would step up and answer for you, but after 
<br>
two months let's see if I can give you some guidance.
<br>
<p><span class="quotelev1">&gt; My problem is, that I don't really understand the way, how mpi_file_read
</span><br>
<span class="quotelev1">&gt; uses this extent to perform file-io on arrays of this data.
</span><br>
<p>When writing data you have two things working together: the memory 
<br>
description (given by  the &quot;buffer, count, datatype&quot; tuple in 
<br>
mpi_file_write) and the file view (by default, etype and ftype of 
<br>
MPI_BYTE with a displacement of 0: the same way POSIX 
<br>
open/read/write/close treats data in a file)
<br>
<p>For memory, the extent is used the same way it is used when sending data 
<br>
between processes: if you have a count greater than 1, the extent tells 
<br>
MPI how to walk through memory (tells it to skip over any padding, ghost 
<br>
cells, or anything else that doesn't belong in the file)
<br>
<p>For the file side of things, the extent is how one tiles the datatype. 
<br>
Three integers have an extent of... three integers, no padding.  So if 
<br>
you write 12 integers to the file, your file view is tiled 4 times, and 
<br>
12 integers end up in the file.
<br>
<p>Real followed by int is more complicated as you see. Maybe a compiler 
<br>
padded it, maybe it didn't.
<br>
<p><span class="quotelev1"> &gt; On the one
</span><br>
<span class="quotelev1">&gt; hand, the data, which is written to the file, is only the data, which is
</span><br>
<span class="quotelev1">&gt; actually used, i.e. no padding is written to the file and thus, only the
</span><br>
<span class="quotelev1">&gt; mpi_type_size is interesting for the writing. On the other hand, the
</span><br>
<span class="quotelev1">&gt; missing padding in the extent of ifort causes mpi_file_read to skip some
</span><br>
<span class="quotelev1">&gt; of the last datasets. In my opinion, this would make some sense, if the
</span><br>
<span class="quotelev1">&gt; padding of the datasets would cause corruption on the read data after
</span><br>
<span class="quotelev1">&gt; the first padding, but this is not the case. If you execute the appended
</span><br>
<span class="quotelev1">&gt; program with 4 processes, the last two of eight datasets stay
</span><br>
<span class="quotelev1">&gt; uninitialized (keep their values of -1 for each member) what suggests
</span><br>
<span class="quotelev1">&gt; that the amount of data is somehow related to the extent rather than the
</span><br>
<span class="quotelev1">&gt; type_size.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the problem here? Do I misunderstand, how these routines should
</span><br>
<span class="quotelev1">&gt; work?
</span><br>
<p>I don't see the problem on my system with your test case: I am using 
<br>
gfortran.
<br>
<p><span class="quotelev1">&gt; PS: Does the stat(1) variable mean anything? It returns 0 all the time.
</span><br>
<p>That is an MPI status object.  You can't do much with it directly, but 
<br>
you can call MPI_Status_get_bytes to see how much data was transferred.
<br>
<p>PS you have created a type without freeing and your variable names are 
<br>
inscrutable -- and I like C-style 6 character variables a lot!
<br>
<p>==rob
<br>
<pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25895.php">Ralph Castain: "Re: [OMPI users] &quot;default-only MCA variable&quot;?"</a>
<li><strong>Previous message:</strong> <a href="25893.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/09/25381.php">Au Eelis: "[OMPI users] mpi_file_read and arrays of custom datatypes"</a>
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
