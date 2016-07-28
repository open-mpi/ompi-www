<?
$subject_val = "Re: [OMPI users] issue with addresses";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 23 20:03:02 2012" -->
<!-- isoreceived="20120724000302" -->
<!-- sent="Mon, 23 Jul 2012 20:02:56 -0400" -->
<!-- isosent="20120724000256" -->
<!-- name="Priyesh Srivastava" -->
<!-- email="priyesh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] issue with addresses" -->
<!-- id="CALXD7G54Gcsc7rdPbh2TTNOmfzXw3k-Mzdz845uyB8ZYx9hM0g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Date:</strong> 2012-07-23 20:02:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19810.php">Stephen J. Barr: "[OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error"</a>
<li><strong>Previous message:</strong> <a href="19808.php">Iliev, Hristo: "Re: [OMPI users] issue with addresses"</a>
<li><strong>Maybe in reply to:</strong> <a href="19802.php">Priyesh Srivastava: "[OMPI users] issue with addresses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19816.php">Iliev, Hristo: "Re: [OMPI users] issue with addresses"</a>
<li><strong>Reply:</strong> <a href="19816.php">Iliev, Hristo: "Re: [OMPI users] issue with addresses"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hello  Hristo
<br>
<p>Thank you for your reply. I was able to understand some parts of your
<br>
response, but still had some doubts due to my lack of knowledge about the
<br>
way memory is allocated.
<br>
<p>I have created a small sample program and the resulting output which will
<br>
help me  pin point my question.
<br>
The program is :
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*program test include'mpif.h' integer
<br>
a,b,c(10),ierr,id,datatype,size(3),type(3),i,status
<br>
integer(kind=MPI_ADDRESS_KIND) add(3)*
<br>
* call MPI_INIT(ierr) call MPI_COMM_RANK(MPI_COMM_WORLD,id,ierr) call
<br>
MPI_GET_ADDRESS(a,add(1),ierr) write(*,*) 'address of a ,id ', add(1), id
<br>
call MPI_GET_ADDRESS(b,add(2),ierr) write(*,*) 'address of b,id ', add(2),
<br>
id call MPI_GET_ADDRESS(c,add(3),ierr) write(*,*) 'address of c,id ',
<br>
add(3), id add(3)=add(3)-add(1) add(2)=add(2)-add(1) add(1)=add(1)-add(1)
<br>
size(1)=1 size(2)=1 size(3)=10 type(1)=MPI_INTEGER type(2)=MPI_INTEGER
<br>
type(3)=MPI_INTEGER call
<br>
MPI_TYPE_CREATE_STRUCT(3,size,add,type,datatype,ierr) call
<br>
MPI_TYPE_COMMIT(datatype,ierr) write(*,*) 'datatype ,id', datatype , id
<br>
write(*,*) ' relative add1 ',add(1), 'id',id write(*,*) ' relative add2
<br>
',add(2), 'id',id write(*,*) ' relative add3 ',add(3), 'id',id if(id==0)
<br>
then a = 1000 b=2000 do i=1,10 c(i)=i end do c(10)=700 c(1)=600 end if*
<br>
*
<br>
*
<br>
* if(id==0) then call MPI_SEND(a,1,datatype,1,8,MPI_COMM_WORLD,ierr) end if
<br>
if(id==1) then call MPI_RECV(a,1,datatype,0,8,MPI_COMM_WORLD,status,ierr)
<br>
write(*,*) 'id =',id write(*,*) 'a=' , a write(*,*) 'b=' , b do i=1,10
<br>
write(*,*) 'c(',i,')=',c(i) end do end if call MPI_FINALIZE(ierr) end*
<br>
*
<br>
*
<br>
* *
<br>
the output is *:*
<br>
*
<br>
*
<br>
* address of a ,id        140736841025492           0*
<br>
* address of b,id        140736841025496            0*
<br>
* address of c,id                        6994640            0*
<br>
* datatype ,id                                         58           0*
<br>
*  relative add1                                      0   id      0*
<br>
*  relative add2                                      4   id      0*
<br>
*  relative add3         -140736834030852   id      0*
<br>
* address of a ,id        140736078234324           1*
<br>
* address of b,id         140736078234328           1*
<br>
* address of c,id                         6994640           1*
<br>
* datatype ,id                                         58           1*
<br>
*  relative add1                                     0  id        1*
<br>
*  relative add2                                     4 id         1*
<br>
*  relative add3       -140736071239684 id          1*
<br>
* id =           1*
<br>
* a=        1000*
<br>
* b=        2000*
<br>
* c( 1 )=         600*
<br>
* c( 2 )=           2*
<br>
* c( 3 )=           3*
<br>
* c( 4 )=           4*
<br>
* c(5 )=            5*
<br>
* c( 6 )=           6*
<br>
* c( 7 )=           7*
<br>
* c( 8 )=           8*
<br>
* c(9 )=            9*
<br>
* c(10 )=         700*
<br>
*
<br>
*
<br>
<p>As I had mentioned that the smaller address(of array c) is same for both
<br>
the processors. However the larger ones(of 'a' and 'b' ) are different.
<br>
This gets explained by what you had mentioned.
<br>
<p>So the relative address of the array 'c ' with respect to 'a' is  different
<br>
for both the processors . The way I am passing data should not
<br>
work(specifically the passing of array 'c') but still everything is
<br>
correctly sent from processor 0 to 1. I have noticed that  this way of
<br>
sending non contiguous data is common but I am confused why this works.
<br>
<p>thanks
<br>
priyesh
<br>
On Mon, Jul 23, 2012 at 12:00 PM, &lt;users-request_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt;    1. Efficient polling for both incoming messages and  request
</span><br>
<span class="quotelev1">&gt;       completion (Geoffrey Irving)
</span><br>
<span class="quotelev1">&gt;    2. checkpoint problem (=?gb2312?B?s8LLyQ==?=)
</span><br>
<span class="quotelev1">&gt;    3. Re: checkpoint problem (Reuti)
</span><br>
<span class="quotelev1">&gt;    4. Re: Re :Re:  OpenMP and OpenMPI Issue (Paul Kapinos)
</span><br>
<span class="quotelev1">&gt;    5. Re: issue with addresses (Iliev, Hristo)
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
<span class="quotelev1">&gt; Date: Sun, 22 Jul 2012 15:01:09 -0700
</span><br>
<span class="quotelev1">&gt; From: Geoffrey Irving &lt;irving_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Efficient polling for both incoming messages and
</span><br>
<span class="quotelev1">&gt;         request completion
</span><br>
<span class="quotelev1">&gt; To: users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;         &lt;CAJ1ofpdNxSVD=_
</span><br>
<span class="quotelev1">&gt; FFN1j3kN9KTzjgJehB0XJF3EyL76ajwvDN2Q_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible to efficiently poll for both incoming messages and
</span><br>
<span class="quotelev1">&gt; request completion using only one thread?  As far as I know, busy
</span><br>
<span class="quotelev1">&gt; waiting with alternate MPI_Iprobe and MPI_Testsome calls is the only
</span><br>
<span class="quotelev1">&gt; way to do this.  Is that approach dangerous to do performance-wise?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Background: my application is memory constrained, so when requests
</span><br>
<span class="quotelev1">&gt; complete I may suddenly be able to schedule new computation.  At the
</span><br>
<span class="quotelev1">&gt; same time, I need to be responding to a variety of asynchronous
</span><br>
<span class="quotelev1">&gt; messages from unknown processors with unknown message sizes, which as
</span><br>
<span class="quotelev1">&gt; far as I know I can't turn into a request to poll on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Geoffrey
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Mon, 23 Jul 2012 16:02:03 +0800
</span><br>
<span class="quotelev1">&gt; From: &quot;=?gb2312?B?s8LLyQ==?=&quot; &lt;chensong_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] checkpoint problem
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;4b55b3e5fc79bad3009c21962e84892c_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;gb2312&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &amp;nbsp;Hi all,How can I create ckpt files regularly? I mean, do checkpoint
</span><br>
<span class="quotelev1">&gt; every 100 seconds. Is there any options to do this? Or I have to write a
</span><br>
<span class="quotelev1">&gt; script myself?THANKS,---------------CHEN SongR&amp;amp;D DepartmentNational
</span><br>
<span class="quotelev1">&gt; Supercomputer Center in TianjinBinhai New Area, Tianjin, China
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
<span class="quotelev1">&gt; Date: Mon, 23 Jul 2012 12:15:49 +0200
</span><br>
<span class="quotelev1">&gt; From: Reuti &lt;reuti_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] checkpoint problem
</span><br>
<span class="quotelev1">&gt; To: ?? &lt;chensong_at_[hidden]&gt;,       Open MPI Users &lt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;         &lt;623C01F7-8D8C-4DCF-AA47-2C3EDED2811F_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=GB2312
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 23.07.2012 um 10:02 schrieb ????:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; How can I create ckpt files regularly? I mean, do checkpoint every 100
</span><br>
<span class="quotelev1">&gt; seconds. Is there any options to do this? Or I have to write a script
</span><br>
<span class="quotelev1">&gt; myself?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, or use a queuing system which supports creation of a checkpoint in
</span><br>
<span class="quotelev1">&gt; fixed time intervals.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; THANKS,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ---------------
</span><br>
<span class="quotelev2">&gt; &gt; CHEN Song
</span><br>
<span class="quotelev2">&gt; &gt; R&amp;D Department
</span><br>
<span class="quotelev2">&gt; &gt; National Supercomputer Center in Tianjin
</span><br>
<span class="quotelev2">&gt; &gt; Binhai New Area, Tianjin, China
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
<span class="quotelev1">&gt; Date: Mon, 23 Jul 2012 12:26:24 +0200
</span><br>
<span class="quotelev1">&gt; From: Paul Kapinos &lt;kapinos_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;500D26D0.4070704_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jack,
</span><br>
<span class="quotelev1">&gt; note that support for THREAD_MULTIPLE is available in [newer] versions of
</span><br>
<span class="quotelev1">&gt; open
</span><br>
<span class="quotelev1">&gt; MPI, but disabled by default. You have to enable it by configuring, in 1.6:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    --enable-mpi-thread-multiple
</span><br>
<span class="quotelev1">&gt;                            Enable MPI_THREAD_MULTIPLE support (default:
</span><br>
<span class="quotelev1">&gt;                            disabled)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You may check the available threading supprt level by using the attaches
</span><br>
<span class="quotelev1">&gt; program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 07/20/12 19:33, Jack Galloway wrote:
</span><br>
<span class="quotelev2">&gt; &gt; This is an old thread, and I'm curious if there is support now for this?
</span><br>
<span class="quotelev1">&gt;  I have
</span><br>
<span class="quotelev2">&gt; &gt; a large code that I'm running, a hybrid MPI/OpenMP code, that is having
</span><br>
<span class="quotelev1">&gt; trouble
</span><br>
<span class="quotelev2">&gt; &gt; over our infiniband network.  I'm running a fairly large problem (uses
</span><br>
<span class="quotelev1">&gt; about
</span><br>
<span class="quotelev2">&gt; &gt; 18GB), and part way in, I get the following errors:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You say &quot;big footprint&quot;? I hear a bell ringing...
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem">http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; A non-text attachment was scrubbed...
</span><br>
<span class="quotelev1">&gt; Name: mpi_threading_support.f
</span><br>
<span class="quotelev1">&gt; Type: text/x-fortran
</span><br>
<span class="quotelev1">&gt; Size: 411 bytes
</span><br>
<span class="quotelev1">&gt; Desc: not available
</span><br>
<span class="quotelev1">&gt; URL: &lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/MailArchives/users/attachments/20120723/1f30ae61/attachment.bin">http://www.open-mpi.org/MailArchives/users/attachments/20120723/1f30ae61/attachment.bin</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; A non-text attachment was scrubbed...
</span><br>
<span class="quotelev1">&gt; Name: smime.p7s
</span><br>
<span class="quotelev1">&gt; Type: application/pkcs7-signature
</span><br>
<span class="quotelev1">&gt; Size: 4471 bytes
</span><br>
<span class="quotelev1">&gt; Desc: S/MIME Cryptographic Signature
</span><br>
<span class="quotelev1">&gt; URL: &lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/MailArchives/users/attachments/20120723/1f30ae61/attachment-0001.bin">http://www.open-mpi.org/MailArchives/users/attachments/20120723/1f30ae61/attachment-0001.bin</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 5
</span><br>
<span class="quotelev1">&gt; Date: Mon, 23 Jul 2012 11:18:32 +0000
</span><br>
<span class="quotelev1">&gt; From: &quot;Iliev, Hristo&quot; &lt;iliev_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] issue with addresses
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;         &lt;
</span><br>
<span class="quotelev1">&gt; FDAA43115FAF4A4F88865097FC2C3CC9030E21BF_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Placement of data in memory is highly implementation dependent. I assume
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev1">&gt; are running on Linux. This OS? libc (glibc) provides two different methods
</span><br>
<span class="quotelev1">&gt; for dynamic allocation of memory ? heap allocation and anonymous mappings.
</span><br>
<span class="quotelev1">&gt; Heap allocation is used for small data up to MMAP_TRESHOLD bytes in length
</span><br>
<span class="quotelev1">&gt; (128 KiB by default, controllable by calls to ?mallopt(3)?). Such
</span><br>
<span class="quotelev1">&gt; allocations end up at predictable memory addresses as long as all processes
</span><br>
<span class="quotelev1">&gt; in your MPI job allocate memory following exactly the same pattern. For
</span><br>
<span class="quotelev1">&gt; larger memory blocks malloc() uses private anonymous mappings which might
</span><br>
<span class="quotelev1">&gt; end at different locations in the virtual address space depending on how it
</span><br>
<span class="quotelev1">&gt; is being used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What this has to do with your Fortran code? Fortran runtimes use malloc()
</span><br>
<span class="quotelev1">&gt; behind the scenes to allocate automatic heap arrays as well as ALLOCATABLE
</span><br>
<span class="quotelev1">&gt; ones. Small arrays are allocated on the stack usually and will mostly have
</span><br>
<span class="quotelev1">&gt; the same addresses unless some stack placement randomisation is in effect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; Hristo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Priyesh Srivastava
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Saturday, July 21, 2012 10:00 PM
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: [OMPI users] issue with addresses
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am working on a mpi program. I have been printing?the?addresses of
</span><br>
<span class="quotelev1">&gt; different variables and arrays using the MPI_GET_ADDRESS command. What I
</span><br>
<span class="quotelev1">&gt; have &gt; noticed is that all the processors are giving the same address of a
</span><br>
<span class="quotelev1">&gt; particular variable as long as the address is less than 2 GB size. When the
</span><br>
<span class="quotelev1">&gt; address of a &gt; variable/ array?is?more than 2GB size different processors
</span><br>
<span class="quotelev1">&gt; are giving different addresses for the same variable. (I am working on a 64
</span><br>
<span class="quotelev1">&gt; bit system and am using &gt; the new MPI Functions and MPI_ADDRESS_KIND
</span><br>
<span class="quotelev1">&gt; integers for getting?the?addresses).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; my question is that should?all?the processors give the same address for
</span><br>
<span class="quotelev1">&gt; same variables? If so then why is this not happening for variables with
</span><br>
<span class="quotelev1">&gt; larger addresses.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; thanks
</span><br>
<span class="quotelev2">&gt; &gt; priyesh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Hristo Iliev, Ph.D. -- High Performance Computing
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Rechen- und Kommunikationszentrum der RWTH Aachen
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241 80 24367 -- Fax/UMS: +49 241 80 624367
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; A non-text attachment was scrubbed...
</span><br>
<span class="quotelev1">&gt; Name: smime.p7s
</span><br>
<span class="quotelev1">&gt; Type: application/pkcs7-signature
</span><br>
<span class="quotelev1">&gt; Size: 5494 bytes
</span><br>
<span class="quotelev1">&gt; Desc: not available
</span><br>
<span class="quotelev1">&gt; URL: &lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/MailArchives/users/attachments/20120723/abceb9c3/attachment.bin">http://www.open-mpi.org/MailArchives/users/attachments/20120723/abceb9c3/attachment.bin</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; End of users Digest, Vol 2304, Issue 1
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19809/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19810.php">Stephen J. Barr: "[OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error"</a>
<li><strong>Previous message:</strong> <a href="19808.php">Iliev, Hristo: "Re: [OMPI users] issue with addresses"</a>
<li><strong>Maybe in reply to:</strong> <a href="19802.php">Priyesh Srivastava: "[OMPI users] issue with addresses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19816.php">Iliev, Hristo: "Re: [OMPI users] issue with addresses"</a>
<li><strong>Reply:</strong> <a href="19816.php">Iliev, Hristo: "Re: [OMPI users] issue with addresses"</a>
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
