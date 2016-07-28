<?
$subject_val = "Re: [OMPI users] issue with addresses";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 24 13:10:40 2012" -->
<!-- isoreceived="20120724171040" -->
<!-- sent="Tue, 24 Jul 2012 17:10:33 +0000" -->
<!-- isosent="20120724171033" -->
<!-- name="Iliev, Hristo" -->
<!-- email="iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] issue with addresses" -->
<!-- id="18D6FE2F-7A68-4D1A-94FE-C14058BA400B_at_rz.rwth-aachen.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CALXD7G54Gcsc7rdPbh2TTNOmfzXw3k-Mzdz845uyB8ZYx9hM0g_at_mail.gmail.com" -->
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
<strong>From:</strong> Iliev, Hristo (<em>iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-24 13:10:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19817.php">George Bosilca: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<li><strong>Previous message:</strong> <a href="19815.php">Richard Shaw: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<li><strong>In reply to:</strong> <a href="19809.php">Priyesh Srivastava: "Re: [OMPI users] issue with addresses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19828.php">Priyesh Srivastava: "Re: [OMPI users] issue with addresses"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Priyesh,
<br>
<p>The output of your program is pretty much what one would expect. 140736841025492 is 0x7FFFD96A87D4 which pretty much corresponds to a location in the stack, which is to be expected as a and b are scalar variables and most likely end up on the stack. As c is array its location is compiler-dependent. Some compilers put small arrays on the stack while others make them global or allocate them on the heap. In your case 0x6ABAD0 could either be somewhere in the BSS (where uninitialised global variables reside) or in the heap, which starts right after BSS (I would say it is the BSS). If the array is placed in BSS its location is fixed with respect to the image base.
<br>
<p>Linux by default implements partial Address Space Layout Randomisation (ASLR) by placing the program stack at slightly different location with each run (this is to make remote stack based exploits harder). That's why you see different addresses for variables on the stack. But things in BSS would pretty much have the same addresses when the code is executed multiple times or on different machines having the same architecture and similar OS with similar settings since executable images are still loaded at the same base virtual address.
<br>
<p>Having different addresses is not an issue for MPI as it only operates with pointers which are local to the process as well as with relative offsets. You pass the MPI_Send or MPI_Recv function the address of the data buffer in the current process and it has nothing to do with where those buffers are located in the other processes. Note also that MPI supports heterogeneous computing, e.g. the sending process might be 32-bit and the receiving one 64-bit. In this scenario it is quite probable that the addresses will differ by very large margin (e.g. the stack address of your 64-bit output is not even valid on 32-bit system).
<br>
<p>Hope that helps more :)
<br>
<p>Kind regards,
<br>
Hristo
<br>
<p>On 24.07.2012, at 02:02, Priyesh Srivastava wrote:
<br>
<p><span class="quotelev1">&gt; hello  Hristo 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your reply. I was able to understand some parts of your response, but still had some doubts due to my lack of knowledge about the way memory is allocated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have created a small sample program and the resulting output which will help me  pin point my question.
</span><br>
<span class="quotelev1">&gt; The program is : 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        
</span><br>
<span class="quotelev1">&gt; program test
</span><br>
<span class="quotelev1">&gt; 	include'mpif.h'
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 	integer a,b,c(10),ierr,id,datatype,size(3),type(3),i,status
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 	integer(kind=MPI_ADDRESS_KIND) add(3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	call MPI_INIT(ierr)
</span><br>
<span class="quotelev1">&gt; 	call MPI_COMM_RANK(MPI_COMM_WORLD,id,ierr)
</span><br>
<span class="quotelev1">&gt; 	call MPI_GET_ADDRESS(a,add(1),ierr)
</span><br>
<span class="quotelev1">&gt; 	write(*,*) 'address of a ,id ', add(1), id
</span><br>
<span class="quotelev1">&gt; 	call MPI_GET_ADDRESS(b,add(2),ierr)
</span><br>
<span class="quotelev1">&gt; 	write(*,*) 'address of b,id ', add(2), id 
</span><br>
<span class="quotelev1">&gt; 	call MPI_GET_ADDRESS(c,add(3),ierr)
</span><br>
<span class="quotelev1">&gt; 	write(*,*) 'address of c,id ', add(3), id
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	add(3)=add(3)-add(1)
</span><br>
<span class="quotelev1">&gt; 	add(2)=add(2)-add(1)
</span><br>
<span class="quotelev1">&gt; 	add(1)=add(1)-add(1)
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 	size(1)=1
</span><br>
<span class="quotelev1">&gt; 	size(2)=1
</span><br>
<span class="quotelev1">&gt; 	size(3)=10
</span><br>
<span class="quotelev1">&gt; 	type(1)=MPI_INTEGER
</span><br>
<span class="quotelev1">&gt; 	type(2)=MPI_INTEGER
</span><br>
<span class="quotelev1">&gt; 	type(3)=MPI_INTEGER
</span><br>
<span class="quotelev1">&gt; 	call MPI_TYPE_CREATE_STRUCT(3,size,add,type,datatype,ierr)
</span><br>
<span class="quotelev1">&gt; 	call MPI_TYPE_COMMIT(datatype,ierr)
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 	write(*,*) 'datatype ,id', datatype , id
</span><br>
<span class="quotelev1">&gt; 	write(*,*) ' relative add1 ',add(1), 'id',id
</span><br>
<span class="quotelev1">&gt; 	write(*,*) ' relative add2 ',add(2), 'id',id
</span><br>
<span class="quotelev1">&gt; 	write(*,*) ' relative add3 ',add(3), 'id',id
</span><br>
<span class="quotelev1">&gt; 	if(id==0) then
</span><br>
<span class="quotelev1">&gt; 	a = 1000
</span><br>
<span class="quotelev1">&gt; 	b=2000
</span><br>
<span class="quotelev1">&gt; 	do i=1,10
</span><br>
<span class="quotelev1">&gt; 	c(i)=i
</span><br>
<span class="quotelev1">&gt; 	end do
</span><br>
<span class="quotelev1">&gt; 	c(10)=700
</span><br>
<span class="quotelev1">&gt; 	c(1)=600
</span><br>
<span class="quotelev1">&gt; 	end if
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         if(id==0) then
</span><br>
<span class="quotelev1">&gt; 	call MPI_SEND(a,1,datatype,1,8,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt; 	end if
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	if(id==1) then
</span><br>
<span class="quotelev1">&gt; 	call MPI_RECV(a,1,datatype,0,8,MPI_COMM_WORLD,status,ierr)
</span><br>
<span class="quotelev1">&gt; 	write(*,*) 'id =',id
</span><br>
<span class="quotelev1">&gt; 	write(*,*) 'a=' , a
</span><br>
<span class="quotelev1">&gt; 	write(*,*) 'b=' , b
</span><br>
<span class="quotelev1">&gt; 	do i=1,10
</span><br>
<span class="quotelev1">&gt; 	write(*,*) 'c(',i,')=',c(i)
</span><br>
<span class="quotelev1">&gt; 	end do
</span><br>
<span class="quotelev1">&gt; 	end if
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 	call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev1">&gt; 	end
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; the output is :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  address of a ,id        140736841025492           0
</span><br>
<span class="quotelev1">&gt;  address of b,id        140736841025496            0
</span><br>
<span class="quotelev1">&gt;  address of c,id                        6994640            0
</span><br>
<span class="quotelev1">&gt;  datatype ,id                                         58           0
</span><br>
<span class="quotelev1">&gt;   relative add1                                      0   id      0
</span><br>
<span class="quotelev1">&gt;   relative add2                                      4   id      0
</span><br>
<span class="quotelev1">&gt;   relative add3         -140736834030852   id      0
</span><br>
<span class="quotelev1">&gt;  address of a ,id        140736078234324           1
</span><br>
<span class="quotelev1">&gt;  address of b,id         140736078234328           1
</span><br>
<span class="quotelev1">&gt;  address of c,id                         6994640           1
</span><br>
<span class="quotelev1">&gt;  datatype ,id                                         58           1
</span><br>
<span class="quotelev1">&gt;   relative add1                                     0  id        1
</span><br>
<span class="quotelev1">&gt;   relative add2                                     4 id         1
</span><br>
<span class="quotelev1">&gt;   relative add3       -140736071239684 id          1
</span><br>
<span class="quotelev1">&gt;  id =           1
</span><br>
<span class="quotelev1">&gt;  a=        1000
</span><br>
<span class="quotelev1">&gt;  b=        2000
</span><br>
<span class="quotelev1">&gt;  c( 1 )=         600
</span><br>
<span class="quotelev1">&gt;  c( 2 )=           2
</span><br>
<span class="quotelev1">&gt;  c( 3 )=           3
</span><br>
<span class="quotelev1">&gt;  c( 4 )=           4
</span><br>
<span class="quotelev1">&gt;  c(5 )=            5
</span><br>
<span class="quotelev1">&gt;  c( 6 )=           6
</span><br>
<span class="quotelev1">&gt;  c( 7 )=           7
</span><br>
<span class="quotelev1">&gt;  c( 8 )=           8
</span><br>
<span class="quotelev1">&gt;  c(9 )=            9
</span><br>
<span class="quotelev1">&gt;  c(10 )=         700
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I had mentioned that the smaller address(of array c) is same for both the processors. However the larger ones(of 'a' and 'b' ) are different. This gets explained by what you had mentioned.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So the relative address of the array 'c ' with respect to 'a' is  different for both the processors . The way I am passing data should not work(specifically the passing of array 'c') but still everything is correctly sent from processor 0 to 1. I have noticed that  this way of sending non contiguous data is common but I am confused why this works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; priyesh
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 23, 2012 at 12:00 PM, &lt;users-request_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Send users mailing list submissions to
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
<span class="quotelev1">&gt;         &lt;CAJ1ofpdNxSVD=_FFN1j3kN9KTzjgJehB0XJF3EyL76ajwvDN2Q_at_[hidden]&gt;
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
<span class="quotelev1">&gt; &amp;nbsp;Hi all,How can I create ckpt files regularly? I mean, do checkpoint every 100 seconds. Is there any options to do this? Or I have to write a script myself?THANKS,---------------CHEN SongR&amp;amp;D DepartmentNational Supercomputer Center in TianjinBinhai New Area, Tianjin, China
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
<span class="quotelev1">&gt; To: ?? &lt;chensong_at_[hidden]&gt;,       Open MPI Users &lt;users_at_[hidden]&gt;
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
<span class="quotelev2">&gt; &gt; How can I create ckpt files regularly? I mean, do checkpoint every 100 seconds. Is there any options to do this? Or I have to write a script myself?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, or use a queuing system which supports creation of a checkpoint in fixed time intervals.
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
<span class="quotelev1">&gt; note that support for THREAD_MULTIPLE is available in [newer] versions of open
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
<span class="quotelev1">&gt; You may check the available threading supprt level by using the attaches program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 07/20/12 19:33, Jack Galloway wrote:
</span><br>
<span class="quotelev2">&gt; &gt; This is an old thread, and I'm curious if there is support now for this?  I have
</span><br>
<span class="quotelev2">&gt; &gt; a large code that I'm running, a hybrid MPI/OpenMP code, that is having trouble
</span><br>
<span class="quotelev2">&gt; &gt; over our infiniband network.  I'm running a fairly large problem (uses about
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
<span class="quotelev1">&gt; URL: &lt;<a href="http://www.open-mpi.org/MailArchives/users/attachments/20120723/1f30ae61/attachment.bin">http://www.open-mpi.org/MailArchives/users/attachments/20120723/1f30ae61/attachment.bin</a>&gt;
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
<span class="quotelev1">&gt; URL: &lt;<a href="http://www.open-mpi.org/MailArchives/users/attachments/20120723/1f30ae61/attachment-0001.bin">http://www.open-mpi.org/MailArchives/users/attachments/20120723/1f30ae61/attachment-0001.bin</a>&gt;
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
<span class="quotelev1">&gt;         &lt;FDAA43115FAF4A4F88865097FC2C3CC9030E21BF_at_[hidden]&gt;
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
<span class="quotelev1">&gt; Placement of data in memory is highly implementation dependent. I assume you
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
<span class="quotelev1">&gt; URL: &lt;<a href="http://www.open-mpi.org/MailArchives/users/attachments/20120723/abceb9c3/attachment.bin">http://www.open-mpi.org/MailArchives/users/attachments/20120723/abceb9c3/attachment.bin</a>&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
--
Hristo Iliev, Ph.D. -- High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241 80 24367 -- Fax/UMS: +49 241 80 624367

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19816/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19817.php">George Bosilca: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<li><strong>Previous message:</strong> <a href="19815.php">Richard Shaw: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<li><strong>In reply to:</strong> <a href="19809.php">Priyesh Srivastava: "Re: [OMPI users] issue with addresses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19828.php">Priyesh Srivastava: "Re: [OMPI users] issue with addresses"</a>
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
