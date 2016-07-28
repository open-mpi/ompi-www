<?
$subject_val = "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 16 05:32:49 2015" -->
<!-- isoreceived="20150116103249" -->
<!-- sent="Fri, 16 Jan 2015 11:32:48 +0100" -->
<!-- isosent="20150116103248" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous" -->
<!-- id="CAG8o1y7JG1CacPyiE73_QaBkG15Su7QHWA1S+Gw8ViWPE9DqhA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="604D31C9-6774-4646-992E-687D48F19FF7_at_icl.utk.edu" -->
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
<strong>Date:</strong> 2015-01-16 05:32:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26198.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Previous message:</strong> <a href="26196.php">Leonid: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<li><strong>In reply to:</strong> <a href="26195.php">George Bosilca: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26199.php">George Bosilca: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Reply:</strong> <a href="26199.php">George Bosilca: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
I'm sorry to insist, but I am not able to understand. Moreover, I have
<br>
realized that I have to explain myself better.
<br>
<p>I try to explain in may program. Each CPU has *npt* particles. My program
<br>
understand how many particles each CPU has to send, according to their
<br>
positions. Then I can do:
<br>
<p>*icount=1*
<br>
* DO i=1,npt*
<br>
*    IF(i is a particle to send)THEN*
<br>
<p>*        DATASEND(icount)%ip     = PART(ip)%ip*
<br>
*        DATASEND(icount)%mc     = PART(ip)%mc*
<br>
<p>*        DATASEND(icount)%RP     = PART(ip)%RP*
<br>
*        DATASEND(icount)%QQ     = PART(ip)%QQ*
<br>
<p>*        icount=icount+1*
<br>
*    ENDIF*
<br>
* ENDDO*
<br>
<p>After that, I can send *DATASEND*
<br>
<p>I *DATASEND* is a   *MPI_my_STRUCT.* I can allocate it according to
<br>
the number of particles that I have to send:
<br>
<p>TYPE(tParticle)  ,ALLOCATABLE,DIMENSION(:) :: DATASEND,DATARECV
<br>
<p>This means that the number of particles which I have to send can change
<br>
every time.
<br>
<p>After that, I compute for each particles, somethins called QQmls(:,:,:).
<br>
QQmls has all real elements. Now I would like to to the same that I did
<br>
with PART, but in this case:
<br>
<p>*icount=1*
<br>
*DO i=1,npt*
<br>
*    IF(i is a particle to send)THEN*
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*DATASEND_REAL(:,icount,:)=QQmls(:,i,:)*
<br>
*      icount=icount+1*
<br>
<p>*    ENDIF*
<br>
*ENDDO*
<br>
<p>I would like to have a sort  *MPI_my_TYPE to do that (like *
<br>
*MPI_my_STRUCT**) *and not to create every time *MPI_TYPE_VECTOR
<br>
*because  *DATASEND_REAL
<br>
*changes size every time.
<br>
<p>I hope to make myself clear.
<br>
<p>So is it correct to use *MPI_TYPE_VECTOR?, *Can I do what I want?
<br>
<p>In the meantime, I will study some examples.
<br>
<p>Thanks again
<br>
<p><p><p><p><p>Diego
<br>
<p><p>On 16 January 2015 at 07:39, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  The subarray creation is an multi-dimension extension of the vector type.
</span><br>
<span class="quotelev1">&gt; You can see it as a vector of vector of vector and so on, one vector per
</span><br>
<span class="quotelev1">&gt; dimension. The stride array is used to declare on each dimension what is
</span><br>
<span class="quotelev1">&gt; the relative displacement (in number of elements) from the beginning of the
</span><br>
<span class="quotelev1">&gt; dimension array.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is important to use regular type creation when you can take advantage
</span><br>
<span class="quotelev1">&gt; of such regularity instead of resorting to use of struct or h*. This insure
</span><br>
<span class="quotelev1">&gt; better packing/unpacking performance, as well as possible future support
</span><br>
<span class="quotelev1">&gt; for one-sided communications.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 15, 2015, at 19:31, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I never used MPI_Type_create_subarray, only MPI_Type_Vector.
</span><br>
<span class="quotelev2">&gt; &gt; What I like about MPI_Type_Vector is that you can define a stride,
</span><br>
<span class="quotelev2">&gt; &gt; hence you can address any regular pattern in memory.
</span><br>
<span class="quotelev2">&gt; &gt; However, it envisages the array layout in memory as a big 1-D array,
</span><br>
<span class="quotelev2">&gt; &gt; with a linear index progressing in either Fortran or C order.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Somebody correct me please if I am wrong, but at first sight
</span><br>
<span class="quotelev1">&gt; MPI_Type_Vector sounds more flexible to me than MPI_Type_create_subarray,
</span><br>
<span class="quotelev1">&gt; exactly because the latter doesn't have strides.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The downside is that you need to do some index arithmetic to figure
</span><br>
<span class="quotelev2">&gt; &gt; the right strides, etc, to match the corresponding
</span><br>
<span class="quotelev2">&gt; &gt; Fortran90 array sections.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There are good examples in the &quot;MPI - The complete reference&quot; books I
</span><br>
<span class="quotelev1">&gt; suggested to you before (actually in vol 1).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Online I could find the two man pages (good information, but no example):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/doc/v1.8/man3/MPI_Type_vector.3.php">http://www.open-mpi.org/doc/v1.8/man3/MPI_Type_vector.3.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/doc/v1.8/man3/MPI_Type_create_subarray.3.php">http://www.open-mpi.org/doc/v1.8/man3/MPI_Type_create_subarray.3.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There is a very simple 2D example of MPI_Type_vector using strides here:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://computing.llnl.gov/tutorials/mpi/#Derived_Data_Types">https://computing.llnl.gov/tutorials/mpi/#Derived_Data_Types</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and a similar one here:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://static.msi.umn.edu/tutorial/scicomp/general/MPI/content6.html">http://static.msi.umn.edu/tutorial/scicomp/general/MPI/content6.html</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gus Correa
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 01/15/2015 06:53 PM, Diego Avesani wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; dear George, dear Gus, dear all,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Could you please tell me where I can find a good example?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am sorry but I can not understand the 3D array.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Really Thanks
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Diego
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 15 January 2015 at 20:13, George Bosilca &lt;bosilca_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    On Jan 15, 2015, at 06:02 , Diego Avesani &lt;diego.avesani_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    &lt;mailto:diego.avesani_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    Dear Gus, Dear all,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    Thanks a lot.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    MPI_Type_Struct works well for the first part of my problem, so I
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    am very happy to be able to use it.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    Regarding MPI_TYPE_VECTOR.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    I have studied it and for simple case it is clear to me what id
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    does (at least I believe). Foe example if I have a matrix define as:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    REAL, ALLOCATABLE (AA(:,:))
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    ALLOCATE AA(100,5)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    I could send part of it defining
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    CALL MPI_TYPE_VECTOR(5,1,5,MPI_DOUBLE_PRECISION,/MY_NEW_TYPE/)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    after that I can send part of it with
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    CALL MPI_SEND( AA(1:/10/,:), /10/, /MY_NEW_TYPE/, 1, 0,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    MPI_COMM_WORLD );
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    Have I understood correctly?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    What I can do in case of three dimensional array? for example
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    AA(:,:,:), I am looking to MPI_TYPE_CREATE_SUBARRAY.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    Is that the correct way?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    Thanks again
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Indeed, using the subarray is the right approach independent on the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    number of dimensions of the data (you can use it instead of
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    MPI_TYPE_VECTOR as well).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       George.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    Diego
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    On 13 January 2015 at 19:04, Gus Correa &lt;gus_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        Hi Diego
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        I guess MPI_Type_Vector is the natural way to send and receive
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        Fortran90 array sections (e.g. your QQMLS(:,50:100,:)).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        I used that before and it works just fine.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        I think that is pretty standard MPI programming style.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        I guess MPI_Type_Struct tries to emulate Fortran90 and C
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        structures
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        (as you did in your previous code, with all the surprises
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        regarding alignment, etc), not array sections.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        Also, MPI type vector should be more easy going (and probably
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        more efficient) than MPI type struct, with less memory
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        alignment problems.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        I hope this helps,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        Gus Correa
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        PS - These books have a quite complete description and several
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        examples
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        of all MPI objects and functions, including MPI types (native
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        and user defined):
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        <a href="http://mitpress.mit.edu/books/__mpi-complete-reference-0">http://mitpress.mit.edu/books/__mpi-complete-reference-0</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        &lt;<a href="http://mitpress.mit.edu/books/mpi-complete-reference-0">http://mitpress.mit.edu/books/mpi-complete-reference-0</a>&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        <a href="http://mitpress.mit.edu/books/__mpi-complete-reference-1">http://mitpress.mit.edu/books/__mpi-complete-reference-1</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        &lt;<a href="http://mitpress.mit.edu/books/mpi-complete-reference-1">http://mitpress.mit.edu/books/mpi-complete-reference-1</a>&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        [They cover MPI 1 and 2. I guess there is a new/upcoming book
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        with MPI 3, but for what you're doing 1 and 2 are more than
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        enough.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        On 01/13/2015 09:22 AM, Diego Avesani wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            Dear all,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            I had some wonderful talking about MPI_type_create_struct
</span><br>
<span class="quotelev1">&gt; adn
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            isend\irecv with
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            Gilles, Gustavo, George, Gus, Tom and Jeff. Now all is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            more clear and my
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            program works.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            Now I have another question. In may program I have matrix:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            /QQMLS(:,:,:) /that is allocate as
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            /ALLOCATE(QQMLS(9,npt,18)/), where npt is the number of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            particles
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            QQMLS is double precision.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            I would like to sent form a CPU to another part of it, for
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            example,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            sending QQMLS(:,50:100,:). I mean sending the QQMLS of the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            particles
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            between 50 to 100.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            I suppose that i could use MPI_Type_vector but I am not
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            sure. The
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            particle that I want to sent could be from 25 to 50 ecc..
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            ecc..so
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;              blocklength changes everytime.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            Do I have to use MPI_type_create_struct?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            Do I have correctly understood MPI_Type_vector?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            Thanks a lot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            Diego
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            _________________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            Subscription:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            Link to this post:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/__community/lists/users/2015/01/__26171.php">http://www.open-mpi.org/__community/lists/users/2015/01/__26171.php</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;            &lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26171.php">http://www.open-mpi.org/community/lists/users/2015/01/26171.php</a>&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        _________________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        Subscription:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        Link to this post:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/__community/lists/users/2015/01/__26172.php">http://www.open-mpi.org/__community/lists/users/2015/01/__26172.php</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        &lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26172.php">http://www.open-mpi.org/community/lists/users/2015/01/26172.php</a>&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    Link to this post:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    <a href="http://www.open-mpi.org/community/lists/users/2015/01/26184.php">http://www.open-mpi.org/community/lists/users/2015/01/26184.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    <a href="http://www.open-mpi.org/community/lists/users/2015/01/26192.php">http://www.open-mpi.org/community/lists/users/2015/01/26192.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26193.php">http://www.open-mpi.org/community/lists/users/2015/01/26193.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26194.php">http://www.open-mpi.org/community/lists/users/2015/01/26194.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26195.php">http://www.open-mpi.org/community/lists/users/2015/01/26195.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26197/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26198.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Previous message:</strong> <a href="26196.php">Leonid: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<li><strong>In reply to:</strong> <a href="26195.php">George Bosilca: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26199.php">George Bosilca: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Reply:</strong> <a href="26199.php">George Bosilca: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
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
