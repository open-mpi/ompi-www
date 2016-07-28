<?
$subject_val = "Re: [OMPI users] issue with addresses";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 26 10:31:05 2012" -->
<!-- isoreceived="20120726143105" -->
<!-- sent="Thu, 26 Jul 2012 10:30:59 -0400" -->
<!-- isosent="20120726143059" -->
<!-- name="Priyesh Srivastava" -->
<!-- email="priyesh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] issue with addresses" -->
<!-- id="CALXD7G43-j02t_s9Ug_QSd3RawO+2fkw1QFZJaSA+L9NHBLUjw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] issue with addresses" -->
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
<strong>Subject:</strong> Re: [OMPI users] issue with addresses<br>
<strong>From:</strong> Priyesh Srivastava (<em>priyesh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-26 10:30:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19829.php">Erik Nelson: "[OMPI users] restricting a job to a set of hosts"</a>
<li><strong>Previous message:</strong> <a href="19827.php">Shiqing Fan: "Re: [OMPI users] Fortran90 Bindings"</a>
<li><strong>Maybe in reply to:</strong> <a href="19802.php">Priyesh Srivastava: "[OMPI users] issue with addresses"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hello  Hristo
<br>
<p>Thank you for taking a look at the program and the output.
<br>
The detailed explanation was very helpful. I also found out that the
<br>
signature of a derived datatype is the specific sequence of the primitive
<br>
datatypes and is independent of the displacements. So the differences in
<br>
the relative addresses will not cause a problem.
<br>
<p>thanks again  :)
<br>
priyesh
<br>
<p>On Wed, Jul 25, 2012 at 12:00 PM, &lt;users-request_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt;         users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt;         users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    1. Re: issue with addresses (Iliev, Hristo)
</span><br>
<span class="quotelev1">&gt;    2. Re: Extent of Distributed Array Type? (George Bosilca)
</span><br>
<span class="quotelev1">&gt;    3. Re: Extent of Distributed Array Type? (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt;    4. Re: Extent of Distributed Array Type? (Richard Shaw)
</span><br>
<span class="quotelev1">&gt;    5. Mpi_leave_pinned=1 is thread safe? (tmishima_at_[hidden])
</span><br>
<span class="quotelev1">&gt;    6. Re: Fortran90 Bindings (Kumar, Sudhir)
</span><br>
<span class="quotelev1">&gt;    7. Re: Fortran90 Bindings (Damien)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Tue, 24 Jul 2012 17:10:33 +0000
</span><br>
<span class="quotelev1">&gt; From: &quot;Iliev, Hristo&quot; &lt;iliev_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] issue with addresses
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;18D6FE2F-7A68-4D1A-94FE-C14058BA400B_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi, Priyesh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output of your program is pretty much what one would expect.
</span><br>
<span class="quotelev1">&gt; 140736841025492 is 0x7FFFD96A87D4 which pretty much corresponds to a
</span><br>
<span class="quotelev1">&gt; location in the stack, which is to be expected as a and b are scalar
</span><br>
<span class="quotelev1">&gt; variables and most likely end up on the stack. As c is array its location
</span><br>
<span class="quotelev1">&gt; is compiler-dependent. Some compilers put small arrays on the stack while
</span><br>
<span class="quotelev1">&gt; others make them global or allocate them on the heap. In your case 0x6ABAD0
</span><br>
<span class="quotelev1">&gt; could either be somewhere in the BSS (where uninitialised global variables
</span><br>
<span class="quotelev1">&gt; reside) or in the heap, which starts right after BSS (I would say it is the
</span><br>
<span class="quotelev1">&gt; BSS). If the array is placed in BSS its location is fixed with respect to
</span><br>
<span class="quotelev1">&gt; the image base.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linux by default implements partial Address Space Layout Randomisation
</span><br>
<span class="quotelev1">&gt; (ASLR) by placing the program stack at slightly different location with
</span><br>
<span class="quotelev1">&gt; each run (this is to make remote stack based exploits harder). That's why
</span><br>
<span class="quotelev1">&gt; you see different addresses for variables on the stack. But things in BSS
</span><br>
<span class="quotelev1">&gt; would pretty much have the same addresses when the code is executed
</span><br>
<span class="quotelev1">&gt; multiple times or on different machines having the same architecture and
</span><br>
<span class="quotelev1">&gt; similar OS with similar settings since executable images are still loaded
</span><br>
<span class="quotelev1">&gt; at the same base virtual address.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Having different addresses is not an issue for MPI as it only operates
</span><br>
<span class="quotelev1">&gt; with pointers which are local to the process as well as with relative
</span><br>
<span class="quotelev1">&gt; offsets. You pass the MPI_Send or MPI_Recv function the address of the data
</span><br>
<span class="quotelev1">&gt; buffer in the current process and it has nothing to do with where those
</span><br>
<span class="quotelev1">&gt; buffers are located in the other processes. Note also that MPI supports
</span><br>
<span class="quotelev1">&gt; heterogeneous computing, e.g. the sending process might be 32-bit and the
</span><br>
<span class="quotelev1">&gt; receiving one 64-bit. In this scenario it is quite probable that the
</span><br>
<span class="quotelev1">&gt; addresses will differ by very large margin (e.g. the stack address of your
</span><br>
<span class="quotelev1">&gt; 64-bit output is not even valid on 32-bit system).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps more :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; Hristo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 24.07.2012, at 02:02, Priyesh Srivastava wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; hello  Hristo
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you for your reply. I was able to understand some parts of your
</span><br>
<span class="quotelev1">&gt; response, but still had some doubts due to my lack of knowledge about the
</span><br>
<span class="quotelev1">&gt; way memory is allocated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have created a small sample program and the resulting output which
</span><br>
<span class="quotelev1">&gt; will help me  pin point my question.
</span><br>
<span class="quotelev2">&gt; &gt; The program is :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; program test
</span><br>
<span class="quotelev2">&gt; &gt;       include'mpif.h'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       integer a,b,c(10),ierr,id,datatype,size(3),type(3),i,status
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       integer(kind=MPI_ADDRESS_KIND) add(3)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       call MPI_INIT(ierr)
</span><br>
<span class="quotelev2">&gt; &gt;       call MPI_COMM_RANK(MPI_COMM_WORLD,id,ierr)
</span><br>
<span class="quotelev2">&gt; &gt;       call MPI_GET_ADDRESS(a,add(1),ierr)
</span><br>
<span class="quotelev2">&gt; &gt;       write(*,*) 'address of a ,id ', add(1), id
</span><br>
<span class="quotelev2">&gt; &gt;       call MPI_GET_ADDRESS(b,add(2),ierr)
</span><br>
<span class="quotelev2">&gt; &gt;       write(*,*) 'address of b,id ', add(2), id
</span><br>
<span class="quotelev2">&gt; &gt;       call MPI_GET_ADDRESS(c,add(3),ierr)
</span><br>
<span class="quotelev2">&gt; &gt;       write(*,*) 'address of c,id ', add(3), id
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       add(3)=add(3)-add(1)
</span><br>
<span class="quotelev2">&gt; &gt;       add(2)=add(2)-add(1)
</span><br>
<span class="quotelev2">&gt; &gt;       add(1)=add(1)-add(1)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       size(1)=1
</span><br>
<span class="quotelev2">&gt; &gt;       size(2)=1
</span><br>
<span class="quotelev2">&gt; &gt;       size(3)=10
</span><br>
<span class="quotelev2">&gt; &gt;       type(1)=MPI_INTEGER
</span><br>
<span class="quotelev2">&gt; &gt;       type(2)=MPI_INTEGER
</span><br>
<span class="quotelev2">&gt; &gt;       type(3)=MPI_INTEGER
</span><br>
<span class="quotelev2">&gt; &gt;       call MPI_TYPE_CREATE_STRUCT(3,size,add,type,datatype,ierr)
</span><br>
<span class="quotelev2">&gt; &gt;       call MPI_TYPE_COMMIT(datatype,ierr)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       write(*,*) 'datatype ,id', datatype , id
</span><br>
<span class="quotelev2">&gt; &gt;       write(*,*) ' relative add1 ',add(1), 'id',id
</span><br>
<span class="quotelev2">&gt; &gt;       write(*,*) ' relative add2 ',add(2), 'id',id
</span><br>
<span class="quotelev2">&gt; &gt;       write(*,*) ' relative add3 ',add(3), 'id',id
</span><br>
<span class="quotelev2">&gt; &gt;       if(id==0) then
</span><br>
<span class="quotelev2">&gt; &gt;       a = 1000
</span><br>
<span class="quotelev2">&gt; &gt;       b=2000
</span><br>
<span class="quotelev2">&gt; &gt;       do i=1,10
</span><br>
<span class="quotelev2">&gt; &gt;       c(i)=i
</span><br>
<span class="quotelev2">&gt; &gt;       end do
</span><br>
<span class="quotelev2">&gt; &gt;       c(10)=700
</span><br>
<span class="quotelev2">&gt; &gt;       c(1)=600
</span><br>
<span class="quotelev2">&gt; &gt;       end if
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         if(id==0) then
</span><br>
<span class="quotelev2">&gt; &gt;       call MPI_SEND(a,1,datatype,1,8,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev2">&gt; &gt;       end if
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       if(id==1) then
</span><br>
<span class="quotelev2">&gt; &gt;       call MPI_RECV(a,1,datatype,0,8,MPI_COMM_WORLD,status,ierr)
</span><br>
<span class="quotelev2">&gt; &gt;       write(*,*) 'id =',id
</span><br>
<span class="quotelev2">&gt; &gt;       write(*,*) 'a=' , a
</span><br>
<span class="quotelev2">&gt; &gt;       write(*,*) 'b=' , b
</span><br>
<span class="quotelev2">&gt; &gt;       do i=1,10
</span><br>
<span class="quotelev2">&gt; &gt;       write(*,*) 'c(',i,')=',c(i)
</span><br>
<span class="quotelev2">&gt; &gt;       end do
</span><br>
<span class="quotelev2">&gt; &gt;       end if
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev2">&gt; &gt;       end
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; the output is :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  address of a ,id        140736841025492           0
</span><br>
<span class="quotelev2">&gt; &gt;  address of b,id        140736841025496            0
</span><br>
<span class="quotelev2">&gt; &gt;  address of c,id                        6994640            0
</span><br>
<span class="quotelev2">&gt; &gt;  datatype ,id                                         58           0
</span><br>
<span class="quotelev2">&gt; &gt;   relative add1                                      0   id      0
</span><br>
<span class="quotelev2">&gt; &gt;   relative add2                                      4   id      0
</span><br>
<span class="quotelev2">&gt; &gt;   relative add3         -140736834030852   id      0
</span><br>
<span class="quotelev2">&gt; &gt;  address of a ,id        140736078234324           1
</span><br>
<span class="quotelev2">&gt; &gt;  address of b,id         140736078234328           1
</span><br>
<span class="quotelev2">&gt; &gt;  address of c,id                         6994640           1
</span><br>
<span class="quotelev2">&gt; &gt;  datatype ,id                                         58           1
</span><br>
<span class="quotelev2">&gt; &gt;   relative add1                                     0  id        1
</span><br>
<span class="quotelev2">&gt; &gt;   relative add2                                     4 id         1
</span><br>
<span class="quotelev2">&gt; &gt;   relative add3       -140736071239684 id          1
</span><br>
<span class="quotelev2">&gt; &gt;  id =           1
</span><br>
<span class="quotelev2">&gt; &gt;  a=        1000
</span><br>
<span class="quotelev2">&gt; &gt;  b=        2000
</span><br>
<span class="quotelev2">&gt; &gt;  c( 1 )=         600
</span><br>
<span class="quotelev2">&gt; &gt;  c( 2 )=           2
</span><br>
<span class="quotelev2">&gt; &gt;  c( 3 )=           3
</span><br>
<span class="quotelev2">&gt; &gt;  c( 4 )=           4
</span><br>
<span class="quotelev2">&gt; &gt;  c(5 )=            5
</span><br>
<span class="quotelev2">&gt; &gt;  c( 6 )=           6
</span><br>
<span class="quotelev2">&gt; &gt;  c( 7 )=           7
</span><br>
<span class="quotelev2">&gt; &gt;  c( 8 )=           8
</span><br>
<span class="quotelev2">&gt; &gt;  c(9 )=            9
</span><br>
<span class="quotelev2">&gt; &gt;  c(10 )=         700
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As I had mentioned that the smaller address(of array c) is same for both
</span><br>
<span class="quotelev1">&gt; the processors. However the larger ones(of 'a' and 'b' ) are different.
</span><br>
<span class="quotelev1">&gt; This gets explained by what you had mentioned.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So the relative address of the array 'c ' with respect to 'a' is
</span><br>
<span class="quotelev1">&gt;  different for both the processors . The way I am passing data should not
</span><br>
<span class="quotelev1">&gt; work(specifically the passing of array 'c') but still everything is
</span><br>
<span class="quotelev1">&gt; correctly sent from processor 0 to 1. I have noticed that  this way of
</span><br>
<span class="quotelev1">&gt; sending non contiguous data is common but I am confused why this works.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; thanks
</span><br>
<span class="quotelev2">&gt; &gt; priyesh
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Jul 23, 2012 at 12:00 PM, &lt;users-request_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Send users mailing list submissions to
</span><br>
<span class="quotelev2">&gt; &gt;         users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev2">&gt; &gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev2">&gt; &gt;         users-request_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You can reach the person managing the list at
</span><br>
<span class="quotelev2">&gt; &gt;         users-owner_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev2">&gt; &gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Today's Topics:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    1. Efficient polling for both incoming messages and  request
</span><br>
<span class="quotelev2">&gt; &gt;       completion (Geoffrey Irving)
</span><br>
<span class="quotelev2">&gt; &gt;    2. checkpoint problem (=?gb2312?B?s8LLyQ==?=)
</span><br>
<span class="quotelev2">&gt; &gt;    3. Re: checkpoint problem (Reuti)
</span><br>
<span class="quotelev2">&gt; &gt;    4. Re: Re :Re:  OpenMP and OpenMPI Issue (Paul Kapinos)
</span><br>
<span class="quotelev2">&gt; &gt;    5. Re: issue with addresses (Iliev, Hristo)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 1
</span><br>
<span class="quotelev2">&gt; &gt; Date: Sun, 22 Jul 2012 15:01:09 -0700
</span><br>
<span class="quotelev2">&gt; &gt; From: Geoffrey Irving &lt;irving_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: [OMPI users] Efficient polling for both incoming messages and
</span><br>
<span class="quotelev2">&gt; &gt;         request completion
</span><br>
<span class="quotelev2">&gt; &gt; To: users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID:
</span><br>
<span class="quotelev2">&gt; &gt;         &lt;CAJ1ofpdNxSVD=_
</span><br>
<span class="quotelev1">&gt; FFN1j3kN9KTzjgJehB0XJF3EyL76ajwvDN2Q_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=ISO-8859-1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is it possible to efficiently poll for both incoming messages and
</span><br>
<span class="quotelev2">&gt; &gt; request completion using only one thread?  As far as I know, busy
</span><br>
<span class="quotelev2">&gt; &gt; waiting with alternate MPI_Iprobe and MPI_Testsome calls is the only
</span><br>
<span class="quotelev2">&gt; &gt; way to do this.  Is that approach dangerous to do performance-wise?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Background: my application is memory constrained, so when requests
</span><br>
<span class="quotelev2">&gt; &gt; complete I may suddenly be able to schedule new computation.  At the
</span><br>
<span class="quotelev2">&gt; &gt; same time, I need to be responding to a variety of asynchronous
</span><br>
<span class="quotelev2">&gt; &gt; messages from unknown processors with unknown message sizes, which as
</span><br>
<span class="quotelev2">&gt; &gt; far as I know I can't turn into a request to poll on.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Geoffrey
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 2
</span><br>
<span class="quotelev2">&gt; &gt; Date: Mon, 23 Jul 2012 16:02:03 +0800
</span><br>
<span class="quotelev2">&gt; &gt; From: &quot;=?gb2312?B?s8LLyQ==?=&quot; &lt;chensong_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: [OMPI users] checkpoint problem
</span><br>
<span class="quotelev2">&gt; &gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID: &lt;4b55b3e5fc79bad3009c21962e84892c_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=&quot;gb2312&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &amp;nbsp;Hi all,How can I create ckpt files regularly? I mean, do
</span><br>
<span class="quotelev1">&gt; checkpoint every 100 seconds. Is there any options to do this? Or I have to
</span><br>
<span class="quotelev1">&gt; write a script myself?THANKS,---------------CHEN SongR&amp;amp;D
</span><br>
<span class="quotelev1">&gt; DepartmentNational Supercomputer Center in TianjinBinhai New Area, Tianjin,
</span><br>
<span class="quotelev1">&gt; China
</span><br>
<span class="quotelev2">&gt; &gt; -------------- next part --------------
</span><br>
<span class="quotelev2">&gt; &gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 3
</span><br>
<span class="quotelev2">&gt; &gt; Date: Mon, 23 Jul 2012 12:15:49 +0200
</span><br>
<span class="quotelev2">&gt; &gt; From: Reuti &lt;reuti_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] checkpoint problem
</span><br>
<span class="quotelev2">&gt; &gt; To: ?? &lt;chensong_at_[hidden]&gt;,       Open MPI Users &lt;
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID:
</span><br>
<span class="quotelev2">&gt; &gt;         &lt;623C01F7-8D8C-4DCF-AA47-2C3EDED2811F_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=GB2312
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Am 23.07.2012 um 10:02 schrieb ????:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; How can I create ckpt files regularly? I mean, do checkpoint every 100
</span><br>
<span class="quotelev1">&gt; seconds. Is there any options to do this? Or I have to write a script
</span><br>
<span class="quotelev1">&gt; myself?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes, or use a queuing system which supports creation of a checkpoint in
</span><br>
<span class="quotelev1">&gt; fixed time intervals.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- Reuti
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; THANKS,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ---------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; CHEN Song
</span><br>
<span class="quotelev3">&gt; &gt; &gt; R&amp;D Department
</span><br>
<span class="quotelev3">&gt; &gt; &gt; National Supercomputer Center in Tianjin
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Binhai New Area, Tianjin, China
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 4
</span><br>
<span class="quotelev2">&gt; &gt; Date: Mon, 23 Jul 2012 12:26:24 +0200
</span><br>
<span class="quotelev2">&gt; &gt; From: Paul Kapinos &lt;kapinos_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID: &lt;500D26D0.4070704_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jack,
</span><br>
<span class="quotelev2">&gt; &gt; note that support for THREAD_MULTIPLE is available in [newer] versions
</span><br>
<span class="quotelev1">&gt; of open
</span><br>
<span class="quotelev2">&gt; &gt; MPI, but disabled by default. You have to enable it by configuring, in
</span><br>
<span class="quotelev1">&gt; 1.6:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    --enable-mpi-thread-multiple
</span><br>
<span class="quotelev2">&gt; &gt;                            Enable MPI_THREAD_MULTIPLE support (default:
</span><br>
<span class="quotelev2">&gt; &gt;                            disabled)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You may check the available threading supprt level by using the attaches
</span><br>
<span class="quotelev1">&gt; program.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 07/20/12 19:33, Jack Galloway wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This is an old thread, and I'm curious if there is support now for
</span><br>
<span class="quotelev1">&gt; this?  I have
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a large code that I'm running, a hybrid MPI/OpenMP code, that is
</span><br>
<span class="quotelev1">&gt; having trouble
</span><br>
<span class="quotelev3">&gt; &gt; &gt; over our infiniband network.  I'm running a fairly large problem (uses
</span><br>
<span class="quotelev1">&gt; about
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 18GB), and part way in, I get the following errors:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You say &quot;big footprint&quot;? I hear a bell ringing...
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem">http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev2">&gt; &gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev2">&gt; &gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev2">&gt; &gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev2">&gt; &gt; -------------- next part --------------
</span><br>
<span class="quotelev2">&gt; &gt; A non-text attachment was scrubbed...
</span><br>
<span class="quotelev2">&gt; &gt; Name: mpi_threading_support.f
</span><br>
<span class="quotelev2">&gt; &gt; Type: text/x-fortran
</span><br>
<span class="quotelev2">&gt; &gt; Size: 411 bytes
</span><br>
<span class="quotelev2">&gt; &gt; Desc: not available
</span><br>
<span class="quotelev2">&gt; &gt; URL: &lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/MailArchives/users/attachments/20120723/1f30ae61/attachment.bin">http://www.open-mpi.org/MailArchives/users/attachments/20120723/1f30ae61/attachment.bin</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -------------- next part --------------
</span><br>
<span class="quotelev2">&gt; &gt; A non-text attachment was scrubbed...
</span><br>
<span class="quotelev2">&gt; &gt; Name: smime.p7s
</span><br>
<span class="quotelev2">&gt; &gt; Type: application/pkcs7-signature
</span><br>
<span class="quotelev2">&gt; &gt; Size: 4471 bytes
</span><br>
<span class="quotelev2">&gt; &gt; Desc: S/MIME Cryptographic Signature
</span><br>
<span class="quotelev2">&gt; &gt; URL: &lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/MailArchives/users/attachments/20120723/1f30ae61/attachment-0001.bin">http://www.open-mpi.org/MailArchives/users/attachments/20120723/1f30ae61/attachment-0001.bin</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 5
</span><br>
<span class="quotelev2">&gt; &gt; Date: Mon, 23 Jul 2012 11:18:32 +0000
</span><br>
<span class="quotelev2">&gt; &gt; From: &quot;Iliev, Hristo&quot; &lt;iliev_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] issue with addresses
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID:
</span><br>
<span class="quotelev2">&gt; &gt;         &lt;
</span><br>
<span class="quotelev1">&gt; FDAA43115FAF4A4F88865097FC2C3CC9030E21BF_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Placement of data in memory is highly implementation dependent. I assume
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev2">&gt; &gt; are running on Linux. This OS? libc (glibc) provides two different
</span><br>
<span class="quotelev1">&gt; methods
</span><br>
<span class="quotelev2">&gt; &gt; for dynamic allocation of memory ? heap allocation and anonymous
</span><br>
<span class="quotelev1">&gt; mappings.
</span><br>
<span class="quotelev2">&gt; &gt; Heap allocation is used for small data up to MMAP_TRESHOLD bytes in
</span><br>
<span class="quotelev1">&gt; length
</span><br>
<span class="quotelev2">&gt; &gt; (128 KiB by default, controllable by calls to ?mallopt(3)?). Such
</span><br>
<span class="quotelev2">&gt; &gt; allocations end up at predictable memory addresses as long as all
</span><br>
<span class="quotelev1">&gt; processes
</span><br>
<span class="quotelev2">&gt; &gt; in your MPI job allocate memory following exactly the same pattern. For
</span><br>
<span class="quotelev2">&gt; &gt; larger memory blocks malloc() uses private anonymous mappings which might
</span><br>
<span class="quotelev2">&gt; &gt; end at different locations in the virtual address space depending on how
</span><br>
<span class="quotelev1">&gt; it
</span><br>
<span class="quotelev2">&gt; &gt; is being used.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What this has to do with your Fortran code? Fortran runtimes use malloc()
</span><br>
<span class="quotelev2">&gt; &gt; behind the scenes to allocate automatic heap arrays as well as
</span><br>
<span class="quotelev1">&gt; ALLOCATABLE
</span><br>
<span class="quotelev2">&gt; &gt; ones. Small arrays are allocated on the stack usually and will mostly
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev2">&gt; &gt; the same addresses unless some stack placement randomisation is in
</span><br>
<span class="quotelev1">&gt; effect.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hope that helps.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards,
</span><br>
<span class="quotelev2">&gt; &gt; Hristo
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; On
</span><br>
<span class="quotelev2">&gt; &gt; Behalf Of Priyesh Srivastava
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Sent: Saturday, July 21, 2012 10:00 PM
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: [OMPI users] issue with addresses
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am working on a mpi program. I have been printing?the?addresses of
</span><br>
<span class="quotelev2">&gt; &gt; different variables and arrays using the MPI_GET_ADDRESS command. What I
</span><br>
<span class="quotelev2">&gt; &gt; have &gt; noticed is that all the processors are giving the same address of
</span><br>
<span class="quotelev1">&gt; a
</span><br>
<span class="quotelev2">&gt; &gt; particular variable as long as the address is less than 2 GB size. When
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; address of a &gt; variable/ array?is?more than 2GB size different processors
</span><br>
<span class="quotelev2">&gt; &gt; are giving different addresses for the same variable. (I am working on a
</span><br>
<span class="quotelev1">&gt; 64
</span><br>
<span class="quotelev2">&gt; &gt; bit system and am using &gt; the new MPI Functions and MPI_ADDRESS_KIND
</span><br>
<span class="quotelev2">&gt; &gt; integers for getting?the?addresses).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; my question is that should?all?the processors give the same address for
</span><br>
<span class="quotelev2">&gt; &gt; same variables? If so then why is this not happening for variables with
</span><br>
<span class="quotelev2">&gt; &gt; larger addresses.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; thanks
</span><br>
<span class="quotelev3">&gt; &gt; &gt; priyesh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Hristo Iliev, Ph.D. -- High Performance Computing
</span><br>
<span class="quotelev2">&gt; &gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev2">&gt; &gt; Rechen- und Kommunikationszentrum der RWTH Aachen
</span><br>
<span class="quotelev2">&gt; &gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev2">&gt; &gt; Tel: +49 241 80 24367 -- Fax/UMS: +49 241 80 624367
</span><br>
<span class="quotelev2">&gt; &gt; -------------- next part --------------
</span><br>
<span class="quotelev2">&gt; &gt; A non-text attachment was scrubbed...
</span><br>
<span class="quotelev2">&gt; &gt; Name: smime.p7s
</span><br>
<span class="quotelev2">&gt; &gt; Type: application/pkcs7-signature
</span><br>
<span class="quotelev2">&gt; &gt; Size: 5494 bytes
</span><br>
<span class="quotelev2">&gt; &gt; Desc: not available
</span><br>
<span class="quotelev2">&gt; &gt; URL: &lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/MailArchives/users/attachments/20120723/abceb9c3/attachment.bin">http://www.open-mpi.org/MailArchives/users/attachments/20120723/abceb9c3/attachment.bin</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; End of users Digest, Vol 2304, Issue 1
</span><br>
<span class="quotelev2">&gt; &gt; **************************************
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Hristo Iliev, Ph.D. -- High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241 80 24367 -- Fax/UMS: +49 241 80 624367
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; A non-text attachment was scrubbed...
</span><br>
<span class="quotelev1">&gt; Name: smime.p7s
</span><br>
<span class="quotelev1">&gt; Type: application/pkcs7-signature
</span><br>
<span class="quotelev1">&gt; Size: 4389 bytes
</span><br>
<span class="quotelev1">&gt; Desc: not available
</span><br>
<span class="quotelev1">&gt; URL: &lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/MailArchives/users/attachments/20120724/b8c0b538/attachment.bin">http://www.open-mpi.org/MailArchives/users/attachments/20120724/b8c0b538/attachment.bin</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Wed, 25 Jul 2012 00:28:19 +0200
</span><br>
<span class="quotelev1">&gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Extent of Distributed Array Type?
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;5D76FA7F-E7A8-4D4E-A109-523D7B492723_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Richard,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for identifying this issue and for the short example. I can confirm
</span><br>
<span class="quotelev1">&gt; your original understanding was right, the upper bound should be identical
</span><br>
<span class="quotelev1">&gt; on all ranks. I just pushed a patch (r26862), let me know if this fixes
</span><br>
<span class="quotelev1">&gt; your issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 24, 2012, at 17:27 , Richard Shaw wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've been speaking off line to Jonathan Dursi about this problem. And it
</span><br>
<span class="quotelev1">&gt; does seems to be a bug.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The same problem crops up in a simplified 1d only case (test case
</span><br>
<span class="quotelev1">&gt; attached). In this instance the specification seems to be comprehensible -
</span><br>
<span class="quotelev1">&gt; looking at the pdf copy of MPI-2.2 spec, p92-93, the definition of cyclic
</span><br>
<span class="quotelev1">&gt; gives MPI_LB=0, MPI_UB=gsize*ex.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Test case is creating a data type for an array of 10 doubles, cyclicly
</span><br>
<span class="quotelev1">&gt; distributed across two processes with a block size of 1. Expected extent is
</span><br>
<span class="quotelev1">&gt; 10*extent(MPI_DOUBLE) = 80. Results for OpenMPI v 1.4.4:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun -np 2 ./testextent1d
</span><br>
<span class="quotelev2">&gt; &gt; Rank 0, size=40, extent=80, lb=0
</span><br>
<span class="quotelev2">&gt; &gt; Rank 1, size=40, extent=88, lb=0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can anyone else confirm this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Richard
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sunday, 15 July, 2012 at 6:21 PM, Richard Shaw wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm getting thoroughly confused trying to work out what is the correct
</span><br>
<span class="quotelev1">&gt; extent of a block-cyclic distributed array type (created with
</span><br>
<span class="quotelev1">&gt; MPI_Type_create_darray), and I'm hoping someone can clarify it for me.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My expectation is that calling MPI_Get_extent on this type should
</span><br>
<span class="quotelev1">&gt; return the size of the original, global, array in bytes, whereas
</span><br>
<span class="quotelev1">&gt; MPI_Type_size gives the size of the local section. This isn't really clear
</span><br>
<span class="quotelev1">&gt; from the MPI 2.2 spec, but from reading around it sound like that's the
</span><br>
<span class="quotelev1">&gt; obvious thing to expect.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I've attached a minimal C example which tests this behaviour, it
</span><br>
<span class="quotelev1">&gt; creates a type which views a 10x10 array of doubles, in 3x3 blocks with a
</span><br>
<span class="quotelev1">&gt; 2x2 process grid. So my expectation is that the extent is
</span><br>
<span class="quotelev1">&gt; 10*10*sizeof(double) = 800. I've attached the results from running this
</span><br>
<span class="quotelev1">&gt; below.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In practice both versions of OpenMPI (v1.4.4 and v1.6) I've tested
</span><br>
<span class="quotelev1">&gt; don't give the behaviour I expect. It gives the correct type size on all
</span><br>
<span class="quotelev1">&gt; processes, but only the rank 0 process gets the expected extent, all the
</span><br>
<span class="quotelev1">&gt; others get a somewhat higher value. As a comparison IntelMPI (v4.0.3) does
</span><br>
<span class="quotelev1">&gt; give the expected value for the extent (included below).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'd be very grateful if someone could explain what the extent means for
</span><br>
<span class="quotelev1">&gt; a darray type? And why it isn't the global array size?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Richard
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; == OpenMPI (v1.4.4 and 1.6) ==
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ mpirun -np 4 ./testextent
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Rank 0, size=288, extent=800, lb=0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Rank 1, size=192, extent=824, lb=0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Rank 2, size=192, extent=1040, lb=0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Rank 3, size=128, extent=1064, lb=0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; == IntelMPI ==
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ mpirun -np 4 ./testextent
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Rank 0, size=288, extent=800, lb=0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Rank 1, size=192, extent=800, lb=0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Rank 2, size=192, extent=800, lb=0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Rank 3, size=128, extent=800, lb=0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Attachments:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - testextent.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;testextent1d.c&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 3
</span><br>
<span class="quotelev1">&gt; Date: Tue, 24 Jul 2012 18:31:36 -0400
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Extent of Distributed Array Type?
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;E5DD4476-970F-402A-B526-8E64029F0BE6_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 24, 2012, at 6:28 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for identifying this issue and for the short example. I can
</span><br>
<span class="quotelev1">&gt; confirm your original understanding was right, the upper bound should be
</span><br>
<span class="quotelev1">&gt; identical on all ranks. I just pushed a patch (r26862), let me know if this
</span><br>
<span class="quotelev1">&gt; fixes your issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that this patch is on the OMPI SVN trunk.  You can either build
</span><br>
<span class="quotelev1">&gt; directly from an SVN checkout or grab a nightly tarball here (get any r
</span><br>
<span class="quotelev1">&gt; number &gt;= 26862, obviously, which will be tonight around 10pm US Eastern
</span><br>
<span class="quotelev1">&gt; time at the earliest):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 4
</span><br>
<span class="quotelev1">&gt; Date: Tue, 24 Jul 2012 19:02:34 -0400
</span><br>
<span class="quotelev1">&gt; From: Richard Shaw &lt;jrs65_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Extent of Distributed Array Type?
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;F1689C9EE55C49DA87E63FFB2A425F3A_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks George, I'm glad it wasn't just me being crazy. I'll try and test
</span><br>
<span class="quotelev1">&gt; that one soon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Richard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tuesday, 24 July, 2012 at 6:28 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Richard,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for identifying this issue and for the short example. I can
</span><br>
<span class="quotelev1">&gt; confirm your original understanding was right, the upper bound should be
</span><br>
<span class="quotelev1">&gt; identical on all ranks. I just pushed a patch (r26862), let me know if this
</span><br>
<span class="quotelev1">&gt; fixes your issue.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;     george.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 5
</span><br>
<span class="quotelev1">&gt; Date: Wed, 25 Jul 2012 14:14:20 +0900
</span><br>
<span class="quotelev1">&gt; From: tmishima_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Mpi_leave_pinned=1 is thread safe?
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;         &lt;
</span><br>
<span class="quotelev1">&gt; OF5312E466.CDFDABB2-ON49257A46.001A10BE-49257A46.001CFD35_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-2022-JP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear openmpi developers,
</span><br>
<span class="quotelev1">&gt; I have been developing our hybrid(MPI+OpenMP) application using openmpi
</span><br>
<span class="quotelev1">&gt; for five years.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This time, I tyied to install a new function, which is c++ based multi-
</span><br>
<span class="quotelev1">&gt; threaded library and it heavily repeats new and delete objects in each
</span><br>
<span class="quotelev1">&gt; thread.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our application is so called &quot;MPI_THREAD_FUNNELED&quot;, and openmpi-1.6
</span><br>
<span class="quotelev1">&gt; is built using --with-tm --with-openib --disable-ipv6.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My trouble is that it works very well with &quot;--mca mpi_leave_pinned 0&quot;
</span><br>
<span class="quotelev1">&gt; but, when mpi_leave_pinned is enabled, it often causes segfault like below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I note that it works fine on Windows multi-threaded platform combined
</span><br>
<span class="quotelev1">&gt; with mpich2. Furthermore, regarding multi-thread(none MPI) version,
</span><br>
<span class="quotelev1">&gt; it also works fine enven on linux environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #0  0x00002b36f1ab35fa in malloc_consolidate (av=0x2aaab0c00020)
</span><br>
<span class="quotelev1">&gt; at ./malloc.c:4556
</span><br>
<span class="quotelev1">&gt; #1  0x00002b36f1ab34d9 in opal_memory_ptmalloc2_int_free
</span><br>
<span class="quotelev1">&gt; (av=0x2aaab0c00020, mem=0x2aaab0c00a70) at ./malloc.c:4453
</span><br>
<span class="quotelev1">&gt; #2  0x00002b36f1ab1ce2 in opal_memory_ptmalloc2_free (mem=0x2aaab0c00a70)
</span><br>
<span class="quotelev1">&gt; at ./malloc.c:3511
</span><br>
<span class="quotelev1">&gt; #3  0x00002b36f1ab0ca9 in opal_memory_linux_free_hook
</span><br>
<span class="quotelev1">&gt; (__ptr=0x2aaab0c00a70, caller=0xa075c8) at ./hooks.c:705
</span><br>
<span class="quotelev1">&gt; #4  0x00000037b4a758a7 in free () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #5  0x0000000000a075c8 in CErrorReporter&lt;std::basic_ostringstream&lt;char,
</span><br>
<span class="quotelev1">&gt; std::char_traits&lt;char&gt;, std::allocator&lt;char&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; ::Clear ()
</span><br>
<span class="quotelev1">&gt; #6  0x0000000000a01eec in IPhreeqc::AccumulateLine ()
</span><br>
<span class="quotelev1">&gt; #7  0x0000000000a01180 in AccumulateLine ()
</span><br>
<span class="quotelev1">&gt; #8  0x0000000000a0078e in accumulatelinef_ ()
</span><br>
<span class="quotelev1">&gt; #9  0x0000000000576ce6 in initial_conditions_ () at ./PHREEQC-model.f:307
</span><br>
<span class="quotelev1">&gt; #10 0x0000000000577b3a in iphreeqc_main_ () at ./PHREEQC-model.f:505
</span><br>
<span class="quotelev1">&gt; #11 0x0000000000577fa1 in basicphreeqc_ () at ./PHREEQC-model.f:944
</span><br>
<span class="quotelev1">&gt; #12 0x00000000004b492a in phrqbl_ () at ./MULTI-COM.f:8371
</span><br>
<span class="quotelev1">&gt; #13 0x00000000004aa6e9 in smxmknp&#239;&#188;&#154;&#239;&#189;&#145;ois_ () at ./MULTI-COM.f:5112
</span><br>
<span class="quotelev1">&gt; #14 0x00000000004a2c5e in solvenpois_ () at ./MULTI-COM.f:4276
</span><br>
<span class="quotelev1">&gt; #15 0x000000000049e731 in solducom_ () at ./MULTI-COM.f:3782
</span><br>
<span class="quotelev1">&gt; #16 0x000000000048b60c in MAIN () at ./MULTI-COM.f:1208
</span><br>
<span class="quotelev1">&gt; #17 0x0000000000481350 in main ()
</span><br>
<span class="quotelev1">&gt; #18 0x00000037b4a1d974 in __libc_start_main () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #19 0x0000000000481259 in _start ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regard,
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 6
</span><br>
<span class="quotelev1">&gt; Date: Wed, 25 Jul 2012 14:55:03 +0000
</span><br>
<span class="quotelev1">&gt; From: &quot;Kumar, Sudhir&quot; &lt;kums_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Fortran90 Bindings
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;         &lt;
</span><br>
<span class="quotelev1">&gt; 8A9547392E2EB443894AF275470DF5E31A3292B4_at_hou150w8xmbx02.hou150.chevrontexaco
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; I have one more related question. Is the F77 bindings available for both
</span><br>
<span class="quotelev1">&gt; 64bit and 32 bit windows environments or just for the 32 bit environment.
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Damien
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, July 18, 2012 10:11 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Fortran90 Bindings
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmmm.  6 months ago there weren't F90 bindings in the Windows version (the
</span><br>
<span class="quotelev1">&gt; F90 bindings are large and tricky).  It's an option you can select when you
</span><br>
<span class="quotelev1">&gt; compile it yourself, but looking at the one I just did a month ago, there's
</span><br>
<span class="quotelev1">&gt; still no mpif90.exe built, so I'd say that's still not supported on
</span><br>
<span class="quotelev1">&gt; Windows.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt; On 18/07/2012 9:00 AM, Kumar, Sudhir wrote:
</span><br>
<span class="quotelev1">&gt; Hi had meant to say if Fortran90 bindings  for Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sudhir Kumar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Damien
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, July 18, 2012 9:56 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Fortran90 Bindings
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yep.
</span><br>
<span class="quotelev1">&gt; On 18/07/2012 8:53 AM, Kumar, Sudhir wrote:
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; Just wondering if Fortran90 bindings are available for OpemMPI 1.6
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sudhir Kumar
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 7
</span><br>
<span class="quotelev1">&gt; Date: Wed, 25 Jul 2012 09:51:32 -0600
</span><br>
<span class="quotelev1">&gt; From: Damien &lt;damien_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Fortran90 Bindings
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;50101604.5030708_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sudhir,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; F77 works on both.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 25/07/2012 8:55 AM, Kumar, Sudhir wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have one more related question. Is the F77 bindings available for
</span><br>
<span class="quotelev2">&gt; &gt; both 64bit and 32 bit windows environments or just for the 32 bit
</span><br>
<span class="quotelev2">&gt; &gt; environment.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *From:*users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt; &gt; *On Behalf Of *Damien
</span><br>
<span class="quotelev2">&gt; &gt; *Sent:* Wednesday, July 18, 2012 10:11 AM
</span><br>
<span class="quotelev2">&gt; &gt; *To:* Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt; *Subject:* Re: [OMPI users] Fortran90 Bindings
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hmmm.  6 months ago there weren't F90 bindings in the Windows version
</span><br>
<span class="quotelev2">&gt; &gt; (the F90 bindings are large and tricky).  It's an option you can
</span><br>
<span class="quotelev2">&gt; &gt; select when you compile it yourself, but looking at the one I just did
</span><br>
<span class="quotelev2">&gt; &gt; a month ago, there's still no mpif90.exe built, so I'd say that's
</span><br>
<span class="quotelev2">&gt; &gt; still not supported on Windows.  :-(
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Damien
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 18/07/2012 9:00 AM, Kumar, Sudhir wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Hi had meant to say if Fortran90 bindings for Windows
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     *Sudhir Kumar*
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     *From:*users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;     &lt;mailto:users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;     [mailto:users-bounces_at_[hidden]] *On Behalf Of *Damien
</span><br>
<span class="quotelev2">&gt; &gt;     *Sent:* Wednesday, July 18, 2012 9:56 AM
</span><br>
<span class="quotelev2">&gt; &gt;     *To:* Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt;     *Subject:* Re: [OMPI users] Fortran90 Bindings
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Yep.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     On 18/07/2012 8:53 AM, Kumar, Sudhir wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         Hi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         Just wondering if Fortran90 bindings are available for OpemMPI
</span><br>
<span class="quotelev1">&gt; 1.6
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         Thanks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         *Sudhir Kumar*
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; End of users Digest, Vol 2306, Issue 1
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19828/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19829.php">Erik Nelson: "[OMPI users] restricting a job to a set of hosts"</a>
<li><strong>Previous message:</strong> <a href="19827.php">Shiqing Fan: "Re: [OMPI users] Fortran90 Bindings"</a>
<li><strong>Maybe in reply to:</strong> <a href="19802.php">Priyesh Srivastava: "[OMPI users] issue with addresses"</a>
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
