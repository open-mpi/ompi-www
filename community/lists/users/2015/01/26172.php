<?
$subject_val = "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 13:04:54 2015" -->
<!-- isoreceived="20150113180454" -->
<!-- sent="Tue, 13 Jan 2015 13:04:42 -0500" -->
<!-- isosent="20150113180442" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous" -->
<!-- id="54B55E3A.1050800_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAG8o1y7h9snMNNr2-D03jB49Wzq7O7Vd4S7p5R6h1udATCHjhw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-13 13:04:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26173.php">Novosielski, Ryan: "[OMPI users] Problems compiling OpenMPI 1.8.4 with GCC 4.9.2"</a>
<li><strong>Previous message:</strong> <a href="26171.php">Diego Avesani: "[OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>In reply to:</strong> <a href="26171.php">Diego Avesani: "[OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26184.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Reply:</strong> <a href="26184.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Diego
<br>
I guess MPI_Type_Vector is the natural way to send and receive Fortran90 
<br>
array sections (e.g. your QQMLS(:,50:100,:)).
<br>
I used that before and it works just fine.
<br>
I think that is pretty standard MPI programming style.
<br>
I guess MPI_Type_Struct tries to emulate Fortran90 and C structures
<br>
(as you did in your previous code, with all the surprises regarding 
<br>
alignment, etc), not array sections.
<br>
Also, MPI type vector should be more easy going (and probably more 
<br>
efficient) than MPI type struct, with less memory alignment problems.
<br>
I hope this helps,
<br>
Gus Correa
<br>
<p>PS - These books have a quite complete description and several examples
<br>
of all MPI objects and functions, including MPI types (native and user 
<br>
defined):
<br>
<a href="http://mitpress.mit.edu/books/mpi-complete-reference-0">http://mitpress.mit.edu/books/mpi-complete-reference-0</a>
<br>
<a href="http://mitpress.mit.edu/books/mpi-complete-reference-1">http://mitpress.mit.edu/books/mpi-complete-reference-1</a>
<br>
<p>[They cover MPI 1 and 2. I guess there is a new/upcoming book
<br>
with MPI 3, but for what you're doing 1 and 2 are more than enough.]
<br>
<p><p>On 01/13/2015 09:22 AM, Diego Avesani wrote:
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had some wonderful talking about MPI_type_create_struct adn
</span><br>
<span class="quotelev1">&gt; isend\irecv with
</span><br>
<span class="quotelev1">&gt; Gilles, Gustavo, George, Gus, Tom and Jeff. Now all is more clear and my
</span><br>
<span class="quotelev1">&gt; program works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I have another question. In may program I have matrix:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /QQMLS(:,:,:) /that is allocate as
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /ALLOCATE(QQMLS(9,npt,18)/), where npt is the number of particles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; QQMLS is double precision.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to sent form a CPU to another part of it, for example,
</span><br>
<span class="quotelev1">&gt; sending QQMLS(:,50:100,:). I mean sending the QQMLS of the particles
</span><br>
<span class="quotelev1">&gt; between 50 to 100.
</span><br>
<span class="quotelev1">&gt; I suppose that i could use MPI_Type_vector but I am not sure. The
</span><br>
<span class="quotelev1">&gt; particle that I want to sent could be from 25 to 50 ecc.. ecc..so
</span><br>
<span class="quotelev1">&gt;   blocklength changes everytime.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do I have to use MPI_type_create_struct?
</span><br>
<span class="quotelev1">&gt; Do I have correctly understood MPI_Type_vector?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26171.php">http://www.open-mpi.org/community/lists/users/2015/01/26171.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26173.php">Novosielski, Ryan: "[OMPI users] Problems compiling OpenMPI 1.8.4 with GCC 4.9.2"</a>
<li><strong>Previous message:</strong> <a href="26171.php">Diego Avesani: "[OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>In reply to:</strong> <a href="26171.php">Diego Avesani: "[OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26184.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Reply:</strong> <a href="26184.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
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
