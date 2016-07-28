<?
$subject_val = "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 16 10:26:21 2015" -->
<!-- isoreceived="20150116152621" -->
<!-- sent="Fri, 16 Jan 2015 16:26:20 +0100" -->
<!-- isosent="20150116152620" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous" -->
<!-- id="CAG8o1y4+yNmipXfPoc1dNN3jiM4L13chsA3LjGtkKCFrKuizAQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkVELZQ94zwfQhqzAj+3+dHhE_9wWsh0VELc8wmxvEj31g_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-01-16 10:26:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26201.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Previous message:</strong> <a href="26199.php">George Bosilca: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>In reply to:</strong> <a href="26199.php">George Bosilca: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26201.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Reply:</strong> <a href="26201.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear George, Dear all,
<br>
<p>I have been studying. It's clear for 2D case QQ(:,:).
<br>
<p>For example if
<br>
real :: QQ(npt,9) , with 9 the characteristic of each particles.
<br>
<p>I can simple:
<br>
<p>&nbsp;call MPI_TYPE_VECTOR(QQ(1:50), 9, 9, MPI_REAL,  my_2D_type, ierr)
<br>
<p>I send 50 element of QQ. I am in fortran so a two dimensional array is
<br>
organized in a 1D array and a new row start after the 9 elements of a colum
<br>
<p>The problem is a 3D array. I belive that I have to create a sort of *vector
<br>
of vectors.*
<br>
More or less like:
<br>
<p>call MPI_TYPE_VECTOR(xxx, xxx, xxx, MPI_REAL,  my_row, ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and then
<br>
<p>call MPI_TYPE_VECTOR(xxx, xxx, xxx, *my_row*,  my_type, ierr).
<br>
<p>You can note that in the second case I have  *my_row *instead of mpi_real.
<br>
<p>I found somethind about it in a tutorial but I am not able to find it again
<br>
in google. I think that is not convinient the use of struct in this case, I
<br>
have only real. Moreover, mpi_struct is think to emulate Fortran90 and C
<br>
structures, as Gus' suggestion.
<br>
<p>Let's me look to that tutorial
<br>
What do you think?
<br>
<p>Thanks again
<br>
<p><p><p><p><p><p>Diego
<br>
<p><p>On 16 January 2015 at 16:02, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The operation you describe is a pack operation, agglomerating together in
</span><br>
<span class="quotelev1">&gt; a contiguous buffer originally discontinuous elements. As a result there is
</span><br>
<span class="quotelev1">&gt; no need to use the MPI_TYPE_VECTOR, but instead you can just use the type
</span><br>
<span class="quotelev1">&gt; you created so far (MPI_my_STRUCT) with a count.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 16, 2015 at 5:32 AM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear All,
</span><br>
<span class="quotelev2">&gt;&gt; I'm sorry to insist, but I am not able to understand. Moreover, I have
</span><br>
<span class="quotelev2">&gt;&gt; realized that I have to explain myself better.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I try to explain in may program. Each CPU has *npt* particles. My
</span><br>
<span class="quotelev2">&gt;&gt; program understand how many particles each CPU has to send, according to
</span><br>
<span class="quotelev2">&gt;&gt; their positions. Then I can do:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *icount=1*
</span><br>
<span class="quotelev2">&gt;&gt; * DO i=1,npt*
</span><br>
<span class="quotelev2">&gt;&gt; *    IF(i is a particle to send)THEN*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *        DATASEND(icount)%ip     = PART(ip)%ip*
</span><br>
<span class="quotelev2">&gt;&gt; *        DATASEND(icount)%mc     = PART(ip)%mc*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *        DATASEND(icount)%RP     = PART(ip)%RP*
</span><br>
<span class="quotelev2">&gt;&gt; *        DATASEND(icount)%QQ     = PART(ip)%QQ*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *        icount=icount+1*
</span><br>
<span class="quotelev2">&gt;&gt; *    ENDIF*
</span><br>
<span class="quotelev2">&gt;&gt; * ENDDO*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After that, I can send *DATASEND*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I *DATASEND* is a   *MPI_my_STRUCT.* I can allocate it according to
</span><br>
<span class="quotelev2">&gt;&gt; the number of particles that I have to send:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; TYPE(tParticle)  ,ALLOCATABLE,DIMENSION(:) :: DATASEND,DATARECV
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This means that the number of particles which I have to send can change
</span><br>
<span class="quotelev2">&gt;&gt; every time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After that, I compute for each particles, somethins called QQmls(:,:,:).
</span><br>
<span class="quotelev2">&gt;&gt; QQmls has all real elements. Now I would like to to the same that I did
</span><br>
<span class="quotelev2">&gt;&gt; with PART, but in this case:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *icount=1*
</span><br>
<span class="quotelev2">&gt;&gt; *DO i=1,npt*
</span><br>
<span class="quotelev2">&gt;&gt; *    IF(i is a particle to send)THEN*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        *DATASEND_REAL(:,icount,:)=QQmls(:,i,:)*
</span><br>
<span class="quotelev2">&gt;&gt; *      icount=icount+1*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *    ENDIF*
</span><br>
<span class="quotelev2">&gt;&gt; *ENDDO*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would like to have a sort  *MPI_my_TYPE to do that (like *
</span><br>
<span class="quotelev2">&gt;&gt; *MPI_my_STRUCT**) *and not to create every time *MPI_TYPE_VECTOR *because
</span><br>
<span class="quotelev2">&gt;&gt;   *DATASEND_REAL *changes size every time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope to make myself clear.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So is it correct to use *MPI_TYPE_VECTOR?, *Can I do what I want?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the meantime, I will study some examples.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks again
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; On 16 January 2015 at 07:39, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  The subarray creation is an multi-dimension extension of the vector
</span><br>
<span class="quotelev3">&gt;&gt;&gt; type. You can see it as a vector of vector of vector and so on, one vector
</span><br>
<span class="quotelev3">&gt;&gt;&gt; per dimension. The stride array is used to declare on each dimension what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is the relative displacement (in number of elements) from the beginning of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the dimension array.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is important to use regular type creation when you can take advantage
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of such regularity instead of resorting to use of struct or h*. This insure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; better packing/unpacking performance, as well as possible future support
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for one-sided communications.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; On Jan 15, 2015, at 19:31, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I never used MPI_Type_create_subarray, only MPI_Type_Vector.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; What I like about MPI_Type_Vector is that you can define a stride,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; hence you can address any regular pattern in memory.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; However, it envisages the array layout in memory as a big 1-D array,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; with a linear index progressing in either Fortran or C order.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Somebody correct me please if I am wrong, but at first sight
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Type_Vector sounds more flexible to me than MPI_Type_create_subarray,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exactly because the latter doesn't have strides.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; The downside is that you need to do some index arithmetic to figure
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; the right strides, etc, to match the corresponding
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Fortran90 array sections.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; There are good examples in the &quot;MPI - The complete reference&quot; books I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suggested to you before (actually in vol 1).
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Online I could find the two man pages (good information, but no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; example):
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/doc/v1.8/man3/MPI_Type_vector.3.php">http://www.open-mpi.org/doc/v1.8/man3/MPI_Type_vector.3.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/doc/v1.8/man3/MPI_Type_create_subarray.3.php">http://www.open-mpi.org/doc/v1.8/man3/MPI_Type_create_subarray.3.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; There is a very simple 2D example of MPI_Type_vector using strides
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="https://computing.llnl.gov/tutorials/mpi/#Derived_Data_Types">https://computing.llnl.gov/tutorials/mpi/#Derived_Data_Types</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; and a similar one here:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://static.msi.umn.edu/tutorial/scicomp/general/MPI/content6.html">http://static.msi.umn.edu/tutorial/scicomp/general/MPI/content6.html</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; On 01/15/2015 06:53 PM, Diego Avesani wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; dear George, dear Gus, dear all,
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Could you please tell me where I can find a good example?
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; I am sorry but I can not understand the 3D array.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Really Thanks
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Diego
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; On 15 January 2015 at 20:13, George Bosilca &lt;bosilca_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; &lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;    On Jan 15, 2015, at 06:02 , Diego Avesani &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; diego.avesani_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;    &lt;mailto:diego.avesani_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;    Dear Gus, Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;    Thanks a lot.
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;    MPI_Type_Struct works well for the first part of my problem, so I
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;    am very happy to be able to use it.
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;    Regarding MPI_TYPE_VECTOR.
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;    I have studied it and for simple case it is clear to me what id
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;    does (at least I believe). Foe example if I have a matrix define
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as:
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;    REAL, ALLOCATABLE (AA(:,:))
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;    ALLOCATE AA(100,5)
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;    I could send part of it defining
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;    CALL MPI_TYPE_VECTOR(5,1,5,MPI_DOUBLE_PRECISION,/MY_NEW_TYPE/)
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;    after that I can send part of it with
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;    CALL MPI_SEND( AA(1:/10/,:), /10/, /MY_NEW_TYPE/, 1, 0,
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;    MPI_COMM_WORLD );
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;    Have I understood correctly?
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;    What I can do in case of three dimensional array? for example
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;    AA(:,:,:), I am looking to MPI_TYPE_CREATE_SUBARRAY.
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;    Is that the correct way?
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;    Thanks again
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;    Indeed, using the subarray is the right approach independent on the
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;    number of dimensions of the data (you can use it instead of
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;    MPI_TYPE_VECTOR as well).
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;       George.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;    Diego
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;    On 13 January 2015 at 19:04, Gus Correa &lt;gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;    &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        Hi Diego
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        I guess MPI_Type_Vector is the natural way to send and receive
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        Fortran90 array sections (e.g. your QQMLS(:,50:100,:)).
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        I used that before and it works just fine.
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        I think that is pretty standard MPI programming style.
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        I guess MPI_Type_Struct tries to emulate Fortran90 and C
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        structures
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        (as you did in your previous code, with all the surprises
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        regarding alignment, etc), not array sections.
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        Also, MPI type vector should be more easy going (and probably
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        more efficient) than MPI type struct, with less memory
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        alignment problems.
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        PS - These books have a quite complete description and several
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        examples
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        of all MPI objects and functions, including MPI types (native
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        and user defined):
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        <a href="http://mitpress.mit.edu/books/__mpi-complete-reference-0">http://mitpress.mit.edu/books/__mpi-complete-reference-0</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        &lt;<a href="http://mitpress.mit.edu/books/mpi-complete-reference-0">http://mitpress.mit.edu/books/mpi-complete-reference-0</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        <a href="http://mitpress.mit.edu/books/__mpi-complete-reference-1">http://mitpress.mit.edu/books/__mpi-complete-reference-1</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        &lt;<a href="http://mitpress.mit.edu/books/mpi-complete-reference-1">http://mitpress.mit.edu/books/mpi-complete-reference-1</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        [They cover MPI 1 and 2. I guess there is a new/upcoming book
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        with MPI 3, but for what you're doing 1 and 2 are more than
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        enough.]
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        On 01/13/2015 09:22 AM, Diego Avesani wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            I had some wonderful talking about MPI_type_create_struct
</span><br>
<span class="quotelev3">&gt;&gt;&gt; adn
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            isend\irecv with
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            Gilles, Gustavo, George, Gus, Tom and Jeff. Now all is
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            more clear and my
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            program works.
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            Now I have another question. In may program I have matrix:
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            /QQMLS(:,:,:) /that is allocate as
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            /ALLOCATE(QQMLS(9,npt,18)/), where npt is the number of
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            particles
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            QQMLS is double precision.
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            I would like to sent form a CPU to another part of it, for
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            example,
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            sending QQMLS(:,50:100,:). I mean sending the QQMLS of the
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            particles
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            between 50 to 100.
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            I suppose that i could use MPI_Type_vector but I am not
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            sure. The
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            particle that I want to sent could be from 25 to 50 ecc..
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            ecc..so
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;              blocklength changes everytime.
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            Do I have to use MPI_type_create_struct?
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            Do I have correctly understood MPI_Type_vector?
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            Thanks a lot
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            Diego
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            _________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/__community/lists/users/2015/01/__26171.php">http://www.open-mpi.org/__community/lists/users/2015/01/__26171.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;            &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26171.php">http://www.open-mpi.org/community/lists/users/2015/01/26171.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        _________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/__community/lists/users/2015/01/__26172.php">http://www.open-mpi.org/__community/lists/users/2015/01/__26172.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;        &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26172.php">http://www.open-mpi.org/community/lists/users/2015/01/26172.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;    users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;    Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;    Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;    <a href="http://www.open-mpi.org/community/lists/users/2015/01/26184.php">http://www.open-mpi.org/community/lists/users/2015/01/26184.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;    users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;    Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;    Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;    <a href="http://www.open-mpi.org/community/lists/users/2015/01/26192.php">http://www.open-mpi.org/community/lists/users/2015/01/26192.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26193.php">http://www.open-mpi.org/community/lists/users/2015/01/26193.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26194.php">http://www.open-mpi.org/community/lists/users/2015/01/26194.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26195.php">http://www.open-mpi.org/community/lists/users/2015/01/26195.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26197.php">http://www.open-mpi.org/community/lists/users/2015/01/26197.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26199.php">http://www.open-mpi.org/community/lists/users/2015/01/26199.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26200/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26201.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Previous message:</strong> <a href="26199.php">George Bosilca: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>In reply to:</strong> <a href="26199.php">George Bosilca: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26201.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Reply:</strong> <a href="26201.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
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
