<?
$subject_val = "Re: [OMPI users] How to handle strides in MPI_Create_type_subarray - Re: MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 16 15:41:48 2015" -->
<!-- isoreceived="20150116204148" -->
<!-- sent="Fri, 16 Jan 2015 15:41:44 -0500" -->
<!-- isosent="20150116204144" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to handle strides in MPI_Create_type_subarray - Re: MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous" -->
<!-- id="00C34951-7C8A-40B6-98D2-BF9913C78476_at_icl.utk.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="54B96559.7080201_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to handle strides in MPI_Create_type_subarray - Re: MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-16 15:41:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26209.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with connecting to 3 or more nodes"</a>
<li><strong>Previous message:</strong> <a href="26207.php">Chan, Elbert: "[OMPI users] Problem with connecting to 3 or more nodes"</a>
<li><strong>In reply to:</strong> <a href="26206.php">Gus Correa: "[OMPI users] How to handle strides in MPI_Create_type_subarray - Re: MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26210.php">Gus Correa: "Re: [OMPI users] How to handle strides in MPI_Create_type_subarray - Re: MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Reply:</strong> <a href="26210.php">Gus Correa: "Re: [OMPI users] How to handle strides in MPI_Create_type_subarray - Re: MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gus,
<br>
<p>Please see my answers inline.
<br>
<p><span class="quotelev1">&gt; On Jan 16, 2015, at 14:24 , Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi George
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is still not clear to me how to deal with strides in MPI_Create_type_subarray.
</span><br>
<span class="quotelev1">&gt; The function/subroutine interface doesn&#226;&#128;&#153;t mention strides at all.
</span><br>
<p>That&#226;&#128;&#153;s indeed a little tricky. However, the trick here is that when you try to understand the subarray type you should think recursively about the datatypes involved in the operation.
<br>
<p><span class="quotelev1">&gt; It is a pity that there is little literature (books) about MPI,
</span><br>
<span class="quotelev1">&gt; and the existing books are lagging behind the new MPI developments and standards (MPI-2, MPI-3).
</span><br>
<span class="quotelev1">&gt; My most reliable sources so far were the &quot;MPI - The complete reference&quot; books, vol-1 (2nd ed.) and vol-2 (which presumably covers MPI-2).
</span><br>
<span class="quotelev1">&gt; However, they do not even mention MPI_Create_type_subarray,
</span><br>
<span class="quotelev1">&gt; which is part of the MPI-2 standard.
</span><br>
<p>Let me do a wild guess: you two guys must be the firsts to ask questions about it &#226;&#128;&#166;
<br>
<p><span class="quotelev1">&gt; I found it in the MPI-2 standard on the web, but it is not clear to me
</span><br>
<span class="quotelev1">&gt; how to achieve the same effect of strides that are available in MPI_Type_vector.
</span><br>
<span class="quotelev1">&gt; MPI_Create_type_subarray is in section 4.1.3.
</span><br>
<span class="quotelev1">&gt; The OMPI MPI_Create_type_subarray man page says there is an example in section 9.9.2 of the MPI-2 standard.
</span><br>
<span class="quotelev1">&gt; However, there is no section 9.9.2.
</span><br>
<span class="quotelev1">&gt; Chapter 9 is about something else (&quot;The info object&quot;), not derived types.
</span><br>
<span class="quotelev1">&gt; No good example of MPI_Create_type_subarray in section 4.1.3 either,
</span><br>
<span class="quotelev1">&gt; which is written in the typical terse and hermetic style in which
</span><br>
<span class="quotelev1">&gt; standards are.
</span><br>
<p>No comments on subjective topics &#226;&#128;&#166; ;) You just blew my day away, I was totally under the impression that the MPI standard reads like a children&#226;&#128;&#153;s bedtime story book !!!
<br>
<p><span class="quotelev1">&gt; So, how can one handle strides in MPI_Create_type_subarray?
</span><br>
<span class="quotelev1">&gt; Would one have to first create several MPI_Type_vector for the various dimensions, then use them as &quot;oldtype&quot; in  MPI_Create_type_subarray?
</span><br>
<span class="quotelev1">&gt; That sounds awkward, because there is only one &#226;&#128;&#156;oldtype&quot; in MPI_Create_type_subarray, not one for each dimension.
</span><br>
<p>Exactly. Take a look at how we handle the subarray in Open MPI, more precisely at the file ompi/datatype/ompi_datatype_create_subarray.c. My comment from few days ago referred exactly to this code, where the subarray is basically described in terms of vector (well maybe vector as I was lazy to check the LB/UB).
<br>
<p>As I said above think recursively. You start with the old type, then build another try on a dimension, then you use this to expose the second dimensions and so on. For each dimension your basic type is not the user provided old type, but the type you built so far.
<br>
<p>- size_array[i] is the number of elements in big data in the dimension i
<br>
- subsize_array[i] is the of element you will include in your datatype in the dimension i
<br>
- start_array[i] is how many elements you will skip in the dimension i before you start including them in your datatype. start[i] + subside[i] must be smaller or equal to size[i]
<br>
<p><span class="quotelev1">&gt; Is there any simple example of how to achieve  stride effect with
</span><br>
<span class="quotelev1">&gt; MPI_Create_type_subarray in a multi-dimensional array?
</span><br>
<p>Not as far as I know. But now that people expressed interest in this topic, maybe someone will write a blog or something about.
<br>
<p><span class="quotelev1">&gt; BTW, when are you gentlemen going to write an updated version of the
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#156;MPI - The Complete Reference&quot;?  :)
</span><br>
<p>Maybe after the release of MPI 4.0 would be a good target &#226;&#128;&#166; A lot of new and exciting technologies will hopefully be going in by then, writing a new book might be worth the effort.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; (Hijacking Diego Avesani's thread, apologies to Diego.)
</span><br>
<span class="quotelev1">&gt; (Also, I know this question is not about Open MPI, but about MPI in general.  But the lack of examples may warrant asking the question here.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 01/16/2015 01:39 AM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;  The subarray creation is an multi-dimension extension of the vector type.
</span><br>
<span class="quotelev1">&gt; You can see it as a vector of vector of vector and so on, one vector per dimension.
</span><br>
<span class="quotelev1">&gt; The stride array is used to declare on each dimension what is the relative displacement
</span><br>
<span class="quotelev1">&gt; (in number of elements) from the beginning of the dimension array.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It is important to use regular type creation when you can take advantage of such
</span><br>
<span class="quotelev1">&gt; regularity instead of resorting to use of struct or h*. This insure better
</span><br>
<span class="quotelev1">&gt; packing/unpacking performance, as well as possible future support for one-sided
</span><br>
<span class="quotelev1">&gt; communications.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 15, 2015, at 19:31, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I never used MPI_Type_create_subarray, only MPI_Type_Vector.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What I like about MPI_Type_Vector is that you can define a stride,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hence you can address any regular pattern in memory.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, it envisages the array layout in memory as a big 1-D array,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with a linear index progressing in either Fortran or C order.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Somebody correct me please if I am wrong, but at first sight MPI_Type_Vector sounds more flexible to me than MPI_Type_create_subarray, exactly because the latter doesn't have strides.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The downside is that you need to do some index arithmetic to figure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the right strides, etc, to match the corresponding
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fortran90 array sections.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are good examples in the &quot;MPI - The complete reference&quot; books I suggested to you before (actually in vol 1).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Online I could find the two man pages (good information, but no example):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/doc/v1.8/man3/MPI_Type_vector.3.php">http://www.open-mpi.org/doc/v1.8/man3/MPI_Type_vector.3.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/doc/v1.8/man3/MPI_Type_create_subarray.3.php">http://www.open-mpi.org/doc/v1.8/man3/MPI_Type_create_subarray.3.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is a very simple 2D example of MPI_Type_vector using strides here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://computing.llnl.gov/tutorials/mpi/#Derived_Data_Types">https://computing.llnl.gov/tutorials/mpi/#Derived_Data_Types</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and a similar one here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://static.msi.umn.edu/tutorial/scicomp/general/MPI/content6.html">http://static.msi.umn.edu/tutorial/scicomp/general/MPI/content6.html</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 01/15/2015 06:53 PM, Diego Avesani wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dear George, dear Gus, dear all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Could you please tell me where I can find a good example?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am sorry but I can not understand the 3D array.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Really Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Diego
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 15 January 2015 at 20:13, George Bosilca &lt;bosilca_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    On Jan 15, 2015, at 06:02 , Diego Avesani &lt;diego.avesani_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;mailto:diego.avesani_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Dear Gus, Dear all,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Thanks a lot.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    MPI_Type_Struct works well for the first part of my problem, so I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    am very happy to be able to use it.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Regarding MPI_TYPE_VECTOR.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    I have studied it and for simple case it is clear to me what id
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    does (at least I believe). Foe example if I have a matrix define as:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    REAL, ALLOCATABLE (AA(:,:))
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    ALLOCATE AA(100,5)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    I could send part of it defining
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    CALL MPI_TYPE_VECTOR(5,1,5,MPI_DOUBLE_PRECISION,/MY_NEW_TYPE/)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    after that I can send part of it with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    CALL MPI_SEND( AA(1:/10/,:), /10/, /MY_NEW_TYPE/, 1, 0,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    MPI_COMM_WORLD );
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Have I understood correctly?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    What I can do in case of three dimensional array? for example
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    AA(:,:,:), I am looking to MPI_TYPE_CREATE_SUBARRAY.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Is that the correct way?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Thanks again
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Indeed, using the subarray is the right approach independent on the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    number of dimensions of the data (you can use it instead of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    MPI_TYPE_VECTOR as well).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       George.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Diego
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    On 13 January 2015 at 19:04, Gus Correa &lt;gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        Hi Diego
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        I guess MPI_Type_Vector is the natural way to send and receive
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        Fortran90 array sections (e.g. your QQMLS(:,50:100,:)).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        I used that before and it works just fine.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        I think that is pretty standard MPI programming style.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        I guess MPI_Type_Struct tries to emulate Fortran90 and C
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        structures
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        (as you did in your previous code, with all the surprises
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        regarding alignment, etc), not array sections.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        Also, MPI type vector should be more easy going (and probably
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        more efficient) than MPI type struct, with less memory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        alignment problems.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        I hope this helps,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        Gus Correa
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        PS - These books have a quite complete description and several
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        examples
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        of all MPI objects and functions, including MPI types (native
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        and user defined):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        <a href="http://mitpress.mit.edu/books/__mpi-complete-reference-0">http://mitpress.mit.edu/books/__mpi-complete-reference-0</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        &lt;<a href="http://mitpress.mit.edu/books/mpi-complete-reference-0">http://mitpress.mit.edu/books/mpi-complete-reference-0</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        <a href="http://mitpress.mit.edu/books/__mpi-complete-reference-1">http://mitpress.mit.edu/books/__mpi-complete-reference-1</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        &lt;<a href="http://mitpress.mit.edu/books/mpi-complete-reference-1">http://mitpress.mit.edu/books/mpi-complete-reference-1</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        [They cover MPI 1 and 2. I guess there is a new/upcoming book
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        with MPI 3, but for what you're doing 1 and 2 are more than
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        enough.]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        On 01/13/2015 09:22 AM, Diego Avesani wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            Dear all,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            I had some wonderful talking about MPI_type_create_struct adn
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            isend\irecv with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            Gilles, Gustavo, George, Gus, Tom and Jeff. Now all is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            more clear and my
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            program works.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            Now I have another question. In may program I have matrix:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            /QQMLS(:,:,:) /that is allocate as
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            /ALLOCATE(QQMLS(9,npt,18)/), where npt is the number of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            particles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            QQMLS is double precision.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            I would like to sent form a CPU to another part of it, for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            example,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            sending QQMLS(:,50:100,:). I mean sending the QQMLS of the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            particles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            between 50 to 100.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            I suppose that i could use MPI_Type_vector but I am not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            sure. The
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            particle that I want to sent could be from 25 to 50 ecc..
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            ecc..so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              blocklength changes everytime.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            Do I have to use MPI_type_create_struct?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            Do I have correctly understood MPI_Type_vector?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            Thanks a lot
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            Diego
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            _________________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            Subscription:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            <a href="http://www.open-mpi.org/__community/lists/users/2015/01/__26171.php">http://www.open-mpi.org/__community/lists/users/2015/01/__26171.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/01/26171.php">http://www.open-mpi.org/community/lists/users/2015/01/26171.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        _________________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        Subscription:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        <a href="http://www.open-mpi.org/__community/lists/users/2015/01/__26172.php">http://www.open-mpi.org/__community/lists/users/2015/01/__26172.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/01/26172.php">http://www.open-mpi.org/community/lists/users/2015/01/26172.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    <a href="http://www.open-mpi.org/community/lists/users/2015/01/26184.php">http://www.open-mpi.org/community/lists/users/2015/01/26184.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    <a href="http://www.open-mpi.org/community/lists/users/2015/01/26192.php">http://www.open-mpi.org/community/lists/users/2015/01/26192.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26193.php">http://www.open-mpi.org/community/lists/users/2015/01/26193.php</a>
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
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26194.php">http://www.open-mpi.org/community/lists/users/2015/01/26194.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26195.php">http://www.open-mpi.org/community/lists/users/2015/01/26195.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26206.php">http://www.open-mpi.org/community/lists/users/2015/01/26206.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26209.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with connecting to 3 or more nodes"</a>
<li><strong>Previous message:</strong> <a href="26207.php">Chan, Elbert: "[OMPI users] Problem with connecting to 3 or more nodes"</a>
<li><strong>In reply to:</strong> <a href="26206.php">Gus Correa: "[OMPI users] How to handle strides in MPI_Create_type_subarray - Re: MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26210.php">Gus Correa: "Re: [OMPI users] How to handle strides in MPI_Create_type_subarray - Re: MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Reply:</strong> <a href="26210.php">Gus Correa: "Re: [OMPI users] How to handle strides in MPI_Create_type_subarray - Re: MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
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
