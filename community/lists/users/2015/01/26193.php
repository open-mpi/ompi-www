<?
$subject_val = "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 15 18:53:31 2015" -->
<!-- isoreceived="20150115235331" -->
<!-- sent="Fri, 16 Jan 2015 00:53:30 +0100" -->
<!-- isosent="20150115235330" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous" -->
<!-- id="CAG8o1y4j93398cQbczGO2LftTacrQCEo5Dswh54i98pGm6RXkA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="8A01ECC4-0428-4F5C-84E8-8673B4997ED7_at_icl.utk.edu" -->
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
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-15 18:53:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26194.php">Gus Correa: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Previous message:</strong> <a href="26192.php">George Bosilca: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>In reply to:</strong> <a href="26192.php">George Bosilca: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26194.php">Gus Correa: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Reply:</strong> <a href="26194.php">Gus Correa: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
dear George, dear Gus, dear all,
<br>
Could you please tell me where I can find a good example?
<br>
I am sorry but I can not understand the 3D array.
<br>
<p><p>Really Thanks
<br>
<p>Diego
<br>
<p><p>On 15 January 2015 at 20:13, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 15, 2015, at 06:02 , Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Gus, Dear all,
</span><br>
<span class="quotelev1">&gt; Thanks a lot.
</span><br>
<span class="quotelev1">&gt; MPI_Type_Struct works well for the first part of my problem, so I am very
</span><br>
<span class="quotelev1">&gt; happy to be able to use it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regarding MPI_TYPE_VECTOR.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have studied it and for simple case it is clear to me what id does (at
</span><br>
<span class="quotelev1">&gt; least I believe). Foe example if I have a matrix define as:
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
<span class="quotelev1">&gt; CALL MPI_TYPE_VECTOR(5,1,5,MPI_DOUBLE_PRECISION,*MY_NEW_TYPE*)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; after that I can send part of it with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CALL MPI_SEND( AA(1:*10*,:), *10*, *MY_NEW_TYPE*, 1, 0, MPI_COMM_WORLD );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have I understood correctly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I can do in case of three dimensional array? for example AA(:,:,:), I
</span><br>
<span class="quotelev1">&gt; am looking to MPI_TYPE_CREATE_SUBARRAY.
</span><br>
<span class="quotelev1">&gt; Is that the correct way?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Indeed, using the subarray is the right approach independent on the number
</span><br>
<span class="quotelev1">&gt; of dimensions of the data (you can use it instead of MPI_TYPE_VECTOR as
</span><br>
<span class="quotelev1">&gt; well).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; On 13 January 2015 at 19:04, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Diego
</span><br>
<span class="quotelev2">&gt;&gt; I guess MPI_Type_Vector is the natural way to send and receive Fortran90
</span><br>
<span class="quotelev2">&gt;&gt; array sections (e.g. your QQMLS(:,50:100,:)).
</span><br>
<span class="quotelev2">&gt;&gt; I used that before and it works just fine.
</span><br>
<span class="quotelev2">&gt;&gt; I think that is pretty standard MPI programming style.
</span><br>
<span class="quotelev2">&gt;&gt; I guess MPI_Type_Struct tries to emulate Fortran90 and C structures
</span><br>
<span class="quotelev2">&gt;&gt; (as you did in your previous code, with all the surprises regarding
</span><br>
<span class="quotelev2">&gt;&gt; alignment, etc), not array sections.
</span><br>
<span class="quotelev2">&gt;&gt; Also, MPI type vector should be more easy going (and probably more
</span><br>
<span class="quotelev2">&gt;&gt; efficient) than MPI type struct, with less memory alignment problems.
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PS - These books have a quite complete description and several examples
</span><br>
<span class="quotelev2">&gt;&gt; of all MPI objects and functions, including MPI types (native and user
</span><br>
<span class="quotelev2">&gt;&gt; defined):
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://mitpress.mit.edu/books/mpi-complete-reference-0">http://mitpress.mit.edu/books/mpi-complete-reference-0</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://mitpress.mit.edu/books/mpi-complete-reference-1">http://mitpress.mit.edu/books/mpi-complete-reference-1</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [They cover MPI 1 and 2. I guess there is a new/upcoming book
</span><br>
<span class="quotelev2">&gt;&gt; with MPI 3, but for what you're doing 1 and 2 are more than enough.]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 01/13/2015 09:22 AM, Diego Avesani wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I had some wonderful talking about MPI_type_create_struct adn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; isend\irecv with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles, Gustavo, George, Gus, Tom and Jeff. Now all is more clear and my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program works.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now I have another question. In may program I have matrix:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /QQMLS(:,:,:) /that is allocate as
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /ALLOCATE(QQMLS(9,npt,18)/), where npt is the number of particles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; QQMLS is double precision.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would like to sent form a CPU to another part of it, for example,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sending QQMLS(:,50:100,:). I mean sending the QQMLS of the particles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; between 50 to 100.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I suppose that i could use MPI_Type_vector but I am not sure. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; particle that I want to sent could be from 25 to 50 ecc.. ecc..so
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   blocklength changes everytime.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do I have to use MPI_type_create_struct?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do I have correctly understood MPI_Type_vector?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks a lot
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Diego
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; community/lists/users/2015/01/26171.php
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/">http://www.open-mpi.org/community/lists/users/2015/01/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 26172.php
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26184.php">http://www.open-mpi.org/community/lists/users/2015/01/26184.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26192.php">http://www.open-mpi.org/community/lists/users/2015/01/26192.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26193/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26194.php">Gus Correa: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Previous message:</strong> <a href="26192.php">George Bosilca: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>In reply to:</strong> <a href="26192.php">George Bosilca: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26194.php">Gus Correa: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Reply:</strong> <a href="26194.php">Gus Correa: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
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
