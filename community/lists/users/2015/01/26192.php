<?
$subject_val = "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 15 14:13:44 2015" -->
<!-- isoreceived="20150115191344" -->
<!-- sent="Thu, 15 Jan 2015 14:13:45 -0500" -->
<!-- isosent="20150115191345" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous" -->
<!-- id="8A01ECC4-0428-4F5C-84E8-8673B4997ED7_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAG8o1y42hyd6Ze3Ag8kJpJ22gtvvQBThn-HOOCkFRjwdZpbMYA_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-15 14:13:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26193.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Previous message:</strong> <a href="26191.php">Ralph Castain: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<li><strong>In reply to:</strong> <a href="26184.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26193.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Reply:</strong> <a href="26193.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Jan 15, 2015, at 06:02 , Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear Gus, Dear all,
</span><br>
<span class="quotelev1">&gt; Thanks a lot.
</span><br>
<span class="quotelev1">&gt; MPI_Type_Struct works well for the first part of my problem, so I am very happy to be able to use it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regarding MPI_TYPE_VECTOR.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have studied it and for simple case it is clear to me what id does (at least I believe). Foe example if I have a matrix define as:
</span><br>
<span class="quotelev1">&gt; REAL, ALLOCATABLE (AA(:,:))
</span><br>
<span class="quotelev1">&gt; ALLOCATE AA(100,5)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I could send part of it defining
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CALL MPI_TYPE_VECTOR(5,1,5,MPI_DOUBLE_PRECISION,MY_NEW_TYPE)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; after that I can send part of it with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CALL MPI_SEND( AA(1:10,:), 10, MY_NEW_TYPE, 1, 0, MPI_COMM_WORLD );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have I understood correctly?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I can do in case of three dimensional array? for example AA(:,:,:), I am looking to MPI_TYPE_CREATE_SUBARRAY.
</span><br>
<span class="quotelev1">&gt; Is that the correct way?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks again
</span><br>
<p>Indeed, using the subarray is the right approach independent on the number of dimensions of the data (you can use it instead of MPI_TYPE_VECTOR as well).
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; On 13 January 2015 at 19:04, Gus Correa &lt;gus_at_[hidden] &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Diego
</span><br>
<span class="quotelev1">&gt; I guess MPI_Type_Vector is the natural way to send and receive Fortran90 array sections (e.g. your QQMLS(:,50:100,:)).
</span><br>
<span class="quotelev1">&gt; I used that before and it works just fine.
</span><br>
<span class="quotelev1">&gt; I think that is pretty standard MPI programming style.
</span><br>
<span class="quotelev1">&gt; I guess MPI_Type_Struct tries to emulate Fortran90 and C structures
</span><br>
<span class="quotelev1">&gt; (as you did in your previous code, with all the surprises regarding alignment, etc), not array sections.
</span><br>
<span class="quotelev1">&gt; Also, MPI type vector should be more easy going (and probably more efficient) than MPI type struct, with less memory alignment problems.
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS - These books have a quite complete description and several examples
</span><br>
<span class="quotelev1">&gt; of all MPI objects and functions, including MPI types (native and user defined):
</span><br>
<span class="quotelev1">&gt; <a href="http://mitpress.mit.edu/books/mpi-complete-reference-0">http://mitpress.mit.edu/books/mpi-complete-reference-0</a> &lt;<a href="http://mitpress.mit.edu/books/mpi-complete-reference-0">http://mitpress.mit.edu/books/mpi-complete-reference-0</a>&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://mitpress.mit.edu/books/mpi-complete-reference-1">http://mitpress.mit.edu/books/mpi-complete-reference-1</a> &lt;<a href="http://mitpress.mit.edu/books/mpi-complete-reference-1">http://mitpress.mit.edu/books/mpi-complete-reference-1</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [They cover MPI 1 and 2. I guess there is a new/upcoming book
</span><br>
<span class="quotelev1">&gt; with MPI 3, but for what you're doing 1 and 2 are more than enough.]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 01/13/2015 09:22 AM, Diego Avesani wrote:
</span><br>
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
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26171.php">http://www.open-mpi.org/community/lists/users/2015/01/26171.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/01/26171.php">http://www.open-mpi.org/community/lists/users/2015/01/26171.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26172.php">http://www.open-mpi.org/community/lists/users/2015/01/26172.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/01/26172.php">http://www.open-mpi.org/community/lists/users/2015/01/26172.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26184.php">http://www.open-mpi.org/community/lists/users/2015/01/26184.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26192/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26193.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Previous message:</strong> <a href="26191.php">Ralph Castain: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<li><strong>In reply to:</strong> <a href="26184.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26193.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Reply:</strong> <a href="26193.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
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
