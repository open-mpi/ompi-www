<?
$subject_val = "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 16 01:33:06 2015" -->
<!-- isoreceived="20150116063306" -->
<!-- sent="Fri, 16 Jan 2015 01:39:30 -0500" -->
<!-- isosent="20150116063930" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous" -->
<!-- id="604D31C9-6774-4646-992E-687D48F19FF7_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="54B85BD3.8020608_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2015-01-16 01:39:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26196.php">Leonid: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<li><strong>Previous message:</strong> <a href="26194.php">Gus Correa: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>In reply to:</strong> <a href="26194.php">Gus Correa: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26197.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Reply:</strong> <a href="26197.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Reply:</strong> <a href="26206.php">Gus Correa: "[OMPI users] How to handle strides in MPI_Create_type_subarray - Re: MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;The subarray creation is an multi-dimension extension of the vector type. You can see it as a vector of vector of vector and so on, one vector per dimension. The stride array is used to declare on each dimension what is the relative displacement (in number of elements) from the beginning of the dimension array.
<br>
<p>It is important to use regular type creation when you can take advantage of such regularity instead of resorting to use of struct or h*. This insure better packing/unpacking performance, as well as possible future support for one-sided communications.
<br>
<p>George.
<br>
<p><p><p><span class="quotelev1">&gt; On Jan 15, 2015, at 19:31, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I never used MPI_Type_create_subarray, only MPI_Type_Vector.
</span><br>
<span class="quotelev1">&gt; What I like about MPI_Type_Vector is that you can define a stride,
</span><br>
<span class="quotelev1">&gt; hence you can address any regular pattern in memory.
</span><br>
<span class="quotelev1">&gt; However, it envisages the array layout in memory as a big 1-D array,
</span><br>
<span class="quotelev1">&gt; with a linear index progressing in either Fortran or C order.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Somebody correct me please if I am wrong, but at first sight MPI_Type_Vector sounds more flexible to me than MPI_Type_create_subarray, exactly because the latter doesn't have strides.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The downside is that you need to do some index arithmetic to figure
</span><br>
<span class="quotelev1">&gt; the right strides, etc, to match the corresponding
</span><br>
<span class="quotelev1">&gt; Fortran90 array sections.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are good examples in the &quot;MPI - The complete reference&quot; books I suggested to you before (actually in vol 1).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Online I could find the two man pages (good information, but no example):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/doc/v1.8/man3/MPI_Type_vector.3.php">http://www.open-mpi.org/doc/v1.8/man3/MPI_Type_vector.3.php</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/doc/v1.8/man3/MPI_Type_create_subarray.3.php">http://www.open-mpi.org/doc/v1.8/man3/MPI_Type_create_subarray.3.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is a very simple 2D example of MPI_Type_vector using strides here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://computing.llnl.gov/tutorials/mpi/#Derived_Data_Types">https://computing.llnl.gov/tutorials/mpi/#Derived_Data_Types</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and a similar one here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://static.msi.umn.edu/tutorial/scicomp/general/MPI/content6.html">http://static.msi.umn.edu/tutorial/scicomp/general/MPI/content6.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 01/15/2015 06:53 PM, Diego Avesani wrote:
</span><br>
<span class="quotelev2">&gt;&gt; dear George, dear Gus, dear all,
</span><br>
<span class="quotelev2">&gt;&gt; Could you please tell me where I can find a good example?
</span><br>
<span class="quotelev2">&gt;&gt; I am sorry but I can not understand the 3D array.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Really Thanks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Diego
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 15 January 2015 at 20:13, George Bosilca &lt;bosilca_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    On Jan 15, 2015, at 06:02 , Diego Avesani &lt;diego.avesani_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    &lt;mailto:diego.avesani_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Dear Gus, Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Thanks a lot.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Type_Struct works well for the first part of my problem, so I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    am very happy to be able to use it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Regarding MPI_TYPE_VECTOR.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    I have studied it and for simple case it is clear to me what id
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    does (at least I believe). Foe example if I have a matrix define as:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    REAL, ALLOCATABLE (AA(:,:))
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ALLOCATE AA(100,5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    I could send part of it defining
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    CALL MPI_TYPE_VECTOR(5,1,5,MPI_DOUBLE_PRECISION,/MY_NEW_TYPE/)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    after that I can send part of it with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    CALL MPI_SEND( AA(1:/10/,:), /10/, /MY_NEW_TYPE/, 1, 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_COMM_WORLD );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Have I understood correctly?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    What I can do in case of three dimensional array? for example
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    AA(:,:,:), I am looking to MPI_TYPE_CREATE_SUBARRAY.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Is that the correct way?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Thanks again
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Indeed, using the subarray is the right approach independent on the
</span><br>
<span class="quotelev2">&gt;&gt;    number of dimensions of the data (you can use it instead of
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_TYPE_VECTOR as well).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Diego
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    On 13 January 2015 at 19:04, Gus Correa &lt;gus_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Hi Diego
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        I guess MPI_Type_Vector is the natural way to send and receive
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Fortran90 array sections (e.g. your QQMLS(:,50:100,:)).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        I used that before and it works just fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        I think that is pretty standard MPI programming style.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        I guess MPI_Type_Struct tries to emulate Fortran90 and C
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        structures
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        (as you did in your previous code, with all the surprises
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        regarding alignment, etc), not array sections.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Also, MPI type vector should be more easy going (and probably
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        more efficient) than MPI type struct, with less memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        alignment problems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        I hope this helps,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        PS - These books have a quite complete description and several
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        examples
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        of all MPI objects and functions, including MPI types (native
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        and user defined):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        <a href="http://mitpress.mit.edu/books/__mpi-complete-reference-0">http://mitpress.mit.edu/books/__mpi-complete-reference-0</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        &lt;<a href="http://mitpress.mit.edu/books/mpi-complete-reference-0">http://mitpress.mit.edu/books/mpi-complete-reference-0</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        <a href="http://mitpress.mit.edu/books/__mpi-complete-reference-1">http://mitpress.mit.edu/books/__mpi-complete-reference-1</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        &lt;<a href="http://mitpress.mit.edu/books/mpi-complete-reference-1">http://mitpress.mit.edu/books/mpi-complete-reference-1</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        [They cover MPI 1 and 2. I guess there is a new/upcoming book
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        with MPI 3, but for what you're doing 1 and 2 are more than
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        enough.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        On 01/13/2015 09:22 AM, Diego Avesani wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            I had some wonderful talking about MPI_type_create_struct adn
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            isend\irecv with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Gilles, Gustavo, George, Gus, Tom and Jeff. Now all is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            more clear and my
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            program works.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Now I have another question. In may program I have matrix:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            /QQMLS(:,:,:) /that is allocate as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            /ALLOCATE(QQMLS(9,npt,18)/), where npt is the number of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            particles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            QQMLS is double precision.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            I would like to sent form a CPU to another part of it, for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            example,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            sending QQMLS(:,50:100,:). I mean sending the QQMLS of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            particles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            between 50 to 100.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            I suppose that i could use MPI_Type_vector but I am not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            sure. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            particle that I want to sent could be from 25 to 50 ecc..
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            ecc..so
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              blocklength changes everytime.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Do I have to use MPI_type_create_struct?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Do I have correctly understood MPI_Type_vector?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Thanks a lot
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Diego
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            _________________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            <a href="http://www.open-mpi.org/__community/lists/users/2015/01/__26171.php">http://www.open-mpi.org/__community/lists/users/2015/01/__26171.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/01/26171.php">http://www.open-mpi.org/community/lists/users/2015/01/26171.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        _________________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        <a href="http://www.open-mpi.org/__community/lists/users/2015/01/__26172.php">http://www.open-mpi.org/__community/lists/users/2015/01/__26172.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/01/26172.php">http://www.open-mpi.org/community/lists/users/2015/01/26172.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    <a href="http://www.open-mpi.org/community/lists/users/2015/01/26184.php">http://www.open-mpi.org/community/lists/users/2015/01/26184.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;    users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;    Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/community/lists/users/2015/01/26192.php">http://www.open-mpi.org/community/lists/users/2015/01/26192.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26193.php">http://www.open-mpi.org/community/lists/users/2015/01/26193.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26194.php">http://www.open-mpi.org/community/lists/users/2015/01/26194.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26196.php">Leonid: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<li><strong>Previous message:</strong> <a href="26194.php">Gus Correa: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>In reply to:</strong> <a href="26194.php">Gus Correa: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26197.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Reply:</strong> <a href="26197.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Reply:</strong> <a href="26206.php">Gus Correa: "[OMPI users] How to handle strides in MPI_Create_type_subarray - Re: MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
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
