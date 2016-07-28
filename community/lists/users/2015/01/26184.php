<?
$subject_val = "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 15 06:02:49 2015" -->
<!-- isoreceived="20150115110249" -->
<!-- sent="Thu, 15 Jan 2015 12:02:49 +0100" -->
<!-- isosent="20150115110249" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous" -->
<!-- id="CAG8o1y42hyd6Ze3Ag8kJpJ22gtvvQBThn-HOOCkFRjwdZpbMYA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="54B55E3A.1050800_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2015-01-15 06:02:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26185.php">Ralph Castain: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<li><strong>Previous message:</strong> <a href="26183.php">Victor Vysotskiy: "Re: [OMPI users] Valgrind reports a plenty of Invalid read's in osc_rdma_data_move.c"</a>
<li><strong>In reply to:</strong> <a href="26172.php">Gus Correa: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26192.php">George Bosilca: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Reply:</strong> <a href="26192.php">George Bosilca: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Gus, Dear all,
<br>
Thanks a lot.
<br>
MPI_Type_Struct works well for the first part of my problem, so I am very
<br>
happy to be able to use it.
<br>
<p>Regarding MPI_TYPE_VECTOR.
<br>
<p>I have studied it and for simple case it is clear to me what id does (at
<br>
least I believe). Foe example if I have a matrix define as:
<br>
REAL, ALLOCATABLE (AA(:,:))
<br>
ALLOCATE AA(100,5)
<br>
<p>I could send part of it defining
<br>
<p>CALL MPI_TYPE_VECTOR(5,1,5,MPI_DOUBLE_PRECISION,*MY_NEW_TYPE*)
<br>
<p>after that I can send part of it with
<br>
<p>CALL MPI_SEND( AA(1:*10*,:), *10*, *MY_NEW_TYPE*, 1, 0, MPI_COMM_WORLD );
<br>
<p>Have I understood correctly?
<br>
<p>What I can do in case of three dimensional array? for example AA(:,:,:), I
<br>
am looking to MPI_TYPE_CREATE_SUBARRAY.
<br>
Is that the correct way?
<br>
<p>Thanks again
<br>
<p><p><p><p>Diego
<br>
<p><p>On 13 January 2015 at 19:04, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Diego
</span><br>
<span class="quotelev1">&gt; I guess MPI_Type_Vector is the natural way to send and receive Fortran90
</span><br>
<span class="quotelev1">&gt; array sections (e.g. your QQMLS(:,50:100,:)).
</span><br>
<span class="quotelev1">&gt; I used that before and it works just fine.
</span><br>
<span class="quotelev1">&gt; I think that is pretty standard MPI programming style.
</span><br>
<span class="quotelev1">&gt; I guess MPI_Type_Struct tries to emulate Fortran90 and C structures
</span><br>
<span class="quotelev1">&gt; (as you did in your previous code, with all the surprises regarding
</span><br>
<span class="quotelev1">&gt; alignment, etc), not array sections.
</span><br>
<span class="quotelev1">&gt; Also, MPI type vector should be more easy going (and probably more
</span><br>
<span class="quotelev1">&gt; efficient) than MPI type struct, with less memory alignment problems.
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS - These books have a quite complete description and several examples
</span><br>
<span class="quotelev1">&gt; of all MPI objects and functions, including MPI types (native and user
</span><br>
<span class="quotelev1">&gt; defined):
</span><br>
<span class="quotelev1">&gt; <a href="http://mitpress.mit.edu/books/mpi-complete-reference-0">http://mitpress.mit.edu/books/mpi-complete-reference-0</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://mitpress.mit.edu/books/mpi-complete-reference-1">http://mitpress.mit.edu/books/mpi-complete-reference-1</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I had some wonderful talking about MPI_type_create_struct adn
</span><br>
<span class="quotelev2">&gt;&gt; isend\irecv with
</span><br>
<span class="quotelev2">&gt;&gt; Gilles, Gustavo, George, Gus, Tom and Jeff. Now all is more clear and my
</span><br>
<span class="quotelev2">&gt;&gt; program works.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now I have another question. In may program I have matrix:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /QQMLS(:,:,:) /that is allocate as
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /ALLOCATE(QQMLS(9,npt,18)/), where npt is the number of particles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; QQMLS is double precision.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would like to sent form a CPU to another part of it, for example,
</span><br>
<span class="quotelev2">&gt;&gt; sending QQMLS(:,50:100,:). I mean sending the QQMLS of the particles
</span><br>
<span class="quotelev2">&gt;&gt; between 50 to 100.
</span><br>
<span class="quotelev2">&gt;&gt; I suppose that i could use MPI_Type_vector but I am not sure. The
</span><br>
<span class="quotelev2">&gt;&gt; particle that I want to sent could be from 25 to 50 ecc.. ecc..so
</span><br>
<span class="quotelev2">&gt;&gt;   blocklength changes everytime.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do I have to use MPI_type_create_struct?
</span><br>
<span class="quotelev2">&gt;&gt; Do I have correctly understood MPI_Type_vector?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks a lot
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Diego
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; 26171.php
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/">http://www.open-mpi.org/community/lists/users/2015/01/</a>
</span><br>
<span class="quotelev1">&gt; 26172.php
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26184/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26185.php">Ralph Castain: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<li><strong>Previous message:</strong> <a href="26183.php">Victor Vysotskiy: "Re: [OMPI users] Valgrind reports a plenty of Invalid read's in osc_rdma_data_move.c"</a>
<li><strong>In reply to:</strong> <a href="26172.php">Gus Correa: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26192.php">George Bosilca: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Reply:</strong> <a href="26192.php">George Bosilca: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
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
