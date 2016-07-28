<?
$subject_val = "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 15 19:31:23 2015" -->
<!-- isoreceived="20150116003123" -->
<!-- sent="Thu, 15 Jan 2015 19:31:15 -0500" -->
<!-- isosent="20150116003115" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous" -->
<!-- id="54B85BD3.8020608_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAG8o1y4j93398cQbczGO2LftTacrQCEo5Dswh54i98pGm6RXkA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-01-15 19:31:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26195.php">George Bosilca: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Previous message:</strong> <a href="26193.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>In reply to:</strong> <a href="26193.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26195.php">George Bosilca: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Reply:</strong> <a href="26195.php">George Bosilca: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I never used MPI_Type_create_subarray, only MPI_Type_Vector.
<br>
What I like about MPI_Type_Vector is that you can define a stride,
<br>
hence you can address any regular pattern in memory.
<br>
However, it envisages the array layout in memory as a big 1-D array,
<br>
with a linear index progressing in either Fortran or C order.
<br>
<p>Somebody correct me please if I am wrong, but at first sight 
<br>
MPI_Type_Vector sounds more flexible to me than 
<br>
MPI_Type_create_subarray, exactly because the latter doesn't have strides.
<br>
<p>The downside is that you need to do some index arithmetic to figure
<br>
the right strides, etc, to match the corresponding
<br>
Fortran90 array sections.
<br>
<p>There are good examples in the &quot;MPI - The complete reference&quot; books I 
<br>
suggested to you before (actually in vol 1).
<br>
<p>Online I could find the two man pages (good information, but no example):
<br>
<p><a href="http://www.open-mpi.org/doc/v1.8/man3/MPI_Type_vector.3.php">http://www.open-mpi.org/doc/v1.8/man3/MPI_Type_vector.3.php</a>
<br>
<a href="http://www.open-mpi.org/doc/v1.8/man3/MPI_Type_create_subarray.3.php">http://www.open-mpi.org/doc/v1.8/man3/MPI_Type_create_subarray.3.php</a>
<br>
<p>There is a very simple 2D example of MPI_Type_vector using strides here:
<br>
<p><a href="https://computing.llnl.gov/tutorials/mpi/#Derived_Data_Types">https://computing.llnl.gov/tutorials/mpi/#Derived_Data_Types</a>
<br>
<p>and a similar one here:
<br>
<p><a href="http://static.msi.umn.edu/tutorial/scicomp/general/MPI/content6.html">http://static.msi.umn.edu/tutorial/scicomp/general/MPI/content6.html</a>
<br>
<p>Gus Correa
<br>
<p>On 01/15/2015 06:53 PM, Diego Avesani wrote:
<br>
<span class="quotelev1">&gt; dear George, dear Gus, dear all,
</span><br>
<span class="quotelev1">&gt; Could you please tell me where I can find a good example?
</span><br>
<span class="quotelev1">&gt; I am sorry but I can not understand the 3D array.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Really Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 15 January 2015 at 20:13, George Bosilca &lt;bosilca_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Jan 15, 2015, at 06:02 , Diego Avesani &lt;diego.avesani_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:diego.avesani_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Dear Gus, Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;     Thanks a lot.
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Type_Struct works well for the first part of my problem, so I
</span><br>
<span class="quotelev2">&gt;&gt;     am very happy to be able to use it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Regarding MPI_TYPE_VECTOR.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I have studied it and for simple case it is clear to me what id
</span><br>
<span class="quotelev2">&gt;&gt;     does (at least I believe). Foe example if I have a matrix define as:
</span><br>
<span class="quotelev2">&gt;&gt;     REAL, ALLOCATABLE (AA(:,:))
</span><br>
<span class="quotelev2">&gt;&gt;     ALLOCATE AA(100,5)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I could send part of it defining
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     CALL MPI_TYPE_VECTOR(5,1,5,MPI_DOUBLE_PRECISION,/MY_NEW_TYPE/)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     after that I can send part of it with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     CALL MPI_SEND( AA(1:/10/,:), /10/, /MY_NEW_TYPE/, 1, 0,
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_COMM_WORLD );
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Have I understood correctly?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     What I can do in case of three dimensional array? for example
</span><br>
<span class="quotelev2">&gt;&gt;     AA(:,:,:), I am looking to MPI_TYPE_CREATE_SUBARRAY.
</span><br>
<span class="quotelev2">&gt;&gt;     Is that the correct way?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thanks again
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Indeed, using the subarray is the right approach independent on the
</span><br>
<span class="quotelev1">&gt;     number of dimensions of the data (you can use it instead of
</span><br>
<span class="quotelev1">&gt;     MPI_TYPE_VECTOR as well).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Diego
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On 13 January 2015 at 19:04, Gus Correa &lt;gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Hi Diego
</span><br>
<span class="quotelev2">&gt;&gt;         I guess MPI_Type_Vector is the natural way to send and receive
</span><br>
<span class="quotelev2">&gt;&gt;         Fortran90 array sections (e.g. your QQMLS(:,50:100,:)).
</span><br>
<span class="quotelev2">&gt;&gt;         I used that before and it works just fine.
</span><br>
<span class="quotelev2">&gt;&gt;         I think that is pretty standard MPI programming style.
</span><br>
<span class="quotelev2">&gt;&gt;         I guess MPI_Type_Struct tries to emulate Fortran90 and C
</span><br>
<span class="quotelev2">&gt;&gt;         structures
</span><br>
<span class="quotelev2">&gt;&gt;         (as you did in your previous code, with all the surprises
</span><br>
<span class="quotelev2">&gt;&gt;         regarding alignment, etc), not array sections.
</span><br>
<span class="quotelev2">&gt;&gt;         Also, MPI type vector should be more easy going (and probably
</span><br>
<span class="quotelev2">&gt;&gt;         more efficient) than MPI type struct, with less memory
</span><br>
<span class="quotelev2">&gt;&gt;         alignment problems.
</span><br>
<span class="quotelev2">&gt;&gt;         I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt;         Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         PS - These books have a quite complete description and several
</span><br>
<span class="quotelev2">&gt;&gt;         examples
</span><br>
<span class="quotelev2">&gt;&gt;         of all MPI objects and functions, including MPI types (native
</span><br>
<span class="quotelev2">&gt;&gt;         and user defined):
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://mitpress.mit.edu/books/__mpi-complete-reference-0">http://mitpress.mit.edu/books/__mpi-complete-reference-0</a>
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://mitpress.mit.edu/books/mpi-complete-reference-0">http://mitpress.mit.edu/books/mpi-complete-reference-0</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://mitpress.mit.edu/books/__mpi-complete-reference-1">http://mitpress.mit.edu/books/__mpi-complete-reference-1</a>
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://mitpress.mit.edu/books/mpi-complete-reference-1">http://mitpress.mit.edu/books/mpi-complete-reference-1</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         [They cover MPI 1 and 2. I guess there is a new/upcoming book
</span><br>
<span class="quotelev2">&gt;&gt;         with MPI 3, but for what you're doing 1 and 2 are more than
</span><br>
<span class="quotelev2">&gt;&gt;         enough.]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On 01/13/2015 09:22 AM, Diego Avesani wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             I had some wonderful talking about MPI_type_create_struct adn
</span><br>
<span class="quotelev2">&gt;&gt;             isend\irecv with
</span><br>
<span class="quotelev2">&gt;&gt;             Gilles, Gustavo, George, Gus, Tom and Jeff. Now all is
</span><br>
<span class="quotelev2">&gt;&gt;             more clear and my
</span><br>
<span class="quotelev2">&gt;&gt;             program works.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Now I have another question. In may program I have matrix:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             /QQMLS(:,:,:) /that is allocate as
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             /ALLOCATE(QQMLS(9,npt,18)/), where npt is the number of
</span><br>
<span class="quotelev2">&gt;&gt;             particles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             QQMLS is double precision.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             I would like to sent form a CPU to another part of it, for
</span><br>
<span class="quotelev2">&gt;&gt;             example,
</span><br>
<span class="quotelev2">&gt;&gt;             sending QQMLS(:,50:100,:). I mean sending the QQMLS of the
</span><br>
<span class="quotelev2">&gt;&gt;             particles
</span><br>
<span class="quotelev2">&gt;&gt;             between 50 to 100.
</span><br>
<span class="quotelev2">&gt;&gt;             I suppose that i could use MPI_Type_vector but I am not
</span><br>
<span class="quotelev2">&gt;&gt;             sure. The
</span><br>
<span class="quotelev2">&gt;&gt;             particle that I want to sent could be from 25 to 50 ecc..
</span><br>
<span class="quotelev2">&gt;&gt;             ecc..so
</span><br>
<span class="quotelev2">&gt;&gt;               blocklength changes everytime.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Do I have to use MPI_type_create_struct?
</span><br>
<span class="quotelev2">&gt;&gt;             Do I have correctly understood MPI_Type_vector?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Thanks a lot
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Diego
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             _________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;             users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/__community/lists/users/2015/01/__26171.php">http://www.open-mpi.org/__community/lists/users/2015/01/__26171.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/01/26171.php">http://www.open-mpi.org/community/lists/users/2015/01/26171.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/__community/lists/users/2015/01/__26172.php">http://www.open-mpi.org/__community/lists/users/2015/01/__26172.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/01/26172.php">http://www.open-mpi.org/community/lists/users/2015/01/26172.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/01/26184.php">http://www.open-mpi.org/community/lists/users/2015/01/26184.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/01/26192.php">http://www.open-mpi.org/community/lists/users/2015/01/26192.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26193.php">http://www.open-mpi.org/community/lists/users/2015/01/26193.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26195.php">George Bosilca: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Previous message:</strong> <a href="26193.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>In reply to:</strong> <a href="26193.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26195.php">George Bosilca: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Reply:</strong> <a href="26195.php">George Bosilca: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
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
