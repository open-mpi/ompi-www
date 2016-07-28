<?
$subject_val = "Re: [OMPI users] Can't get OPENMPI to run parallel job with	Myrinet/GM";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 19 18:01:42 2008" -->
<!-- isoreceived="20080219230142" -->
<!-- sent="Tue, 19 Feb 2008 18:01:35 -0500" -->
<!-- isosent="20080219230135" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't get OPENMPI to run parallel job with	Myrinet/GM" -->
<!-- id="B8415E52-6893-4B4C-9627-22C7B9A8D0DB_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF828575E1.21AFD447-ON852573F4.00789899-852573F4.0078C94B_at_goodyear.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can't get OPENMPI to run parallel job with	Myrinet/GM<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-19 18:01:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5045.php">yoshi.plala: "[OMPI users] shared libraly problem with openmpi-1.2.3 and opensuse10.2"</a>
<li><strong>Previous message:</strong> <a href="5043.php">twurgl_at_[hidden]: "Re: [OMPI users] Can't get OPENMPI to run parallel job with	Myrinet/GM"</a>
<li><strong>In reply to:</strong> <a href="5043.php">twurgl_at_[hidden]: "Re: [OMPI users] Can't get OPENMPI to run parallel job with	Myrinet/GM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tom,
<br>
<p>Here is how I configured Open MPI. It's mostly the default  
<br>
configuration ...
<br>
<p>../../ompi-trunk/configure --prefix=/nfs/home/bosilca/opt/unstable/fog/ 
<br>
fast --disable-debug --enable-picky --with-platform=optimized -- 
<br>
disable-mpi-cxx --disable-mpi-f90 --enable-mpi-f77 --disable-mpi- 
<br>
profiling --with-gm=/opt/gm -enable-visibility
<br>
<p>No specific arguments were required to run the tests. You can force  
<br>
the GM BTL by using &quot;--mca btl gm,self&quot; or &quot;--mca btl gm,sm,self&quot; if  
<br>
you need shared memory.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Feb 19, 2008, at 4:59 PM, twurgl_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Would you be able to send me the mpirun command and args that you use?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; how can I get more output to study?  I added &quot;--display-map -d -v &quot;  
</span><br>
<span class="quotelev1">&gt; to my
</span><br>
<span class="quotelev1">&gt; mpirun command, which gives more output, but not the reason for the
</span><br>
<span class="quotelev1">&gt; failure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The information contained herein is GOODYEAR PROPRIETARY information  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; includes GOODYEAR CONFIDENTIAL information. Reproduction of this
</span><br>
<span class="quotelev1">&gt; document, disclosure of the information, and use for any purpose  
</span><br>
<span class="quotelev1">&gt; other than
</span><br>
<span class="quotelev1">&gt; to conduct business with Goodyear is expressly prohibited.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             George Bosilca
</span><br>
<span class="quotelev1">&gt;             &lt;bosilca_at_eecs.utk
</span><br>
<span class="quotelev1">&gt;             .edu 
</span><br>
<span class="quotelev2">&gt; &gt;                                                      To
</span><br>
<span class="quotelev1">&gt;             Sent by:                  Open MPI Users &lt;users_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;             users- 
</span><br>
<span class="quotelev1">&gt; bounces_at_ope                                          cc
</span><br>
<span class="quotelev1">&gt;             n-mpi.org                 t901353_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                                                                    
</span><br>
<span class="quotelev1">&gt; Subject
</span><br>
<span class="quotelev1">&gt;                                       Re: [OMPI users] Can't get  
</span><br>
<span class="quotelev1">&gt; OPENMPI
</span><br>
<span class="quotelev1">&gt;             02/14/2008 10:18          to run parallel job with  
</span><br>
<span class="quotelev1">&gt; Myrinet/GM
</span><br>
<span class="quotelev1">&gt;             PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Please respond to
</span><br>
<span class="quotelev1">&gt;              Open MPI Users
</span><br>
<span class="quotelev1">&gt;             &lt;users_at_open-mpi.o
</span><br>
<span class="quotelev1">&gt;                    rg&gt;
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
<span class="quotelev1">&gt; I run a full testing on the GM with 1.2.5 and with the trunk. Both of
</span><br>
<span class="quotelev1">&gt; them run to completion without any errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Moreover, the error message only say that one of the processes was
</span><br>
<span class="quotelev1">&gt; terminated, which usually means that something bad happened somewhere
</span><br>
<span class="quotelev1">&gt; else, and the runtime decided to terminate the whole job. This might
</span><br>
<span class="quotelev1">&gt; be a segfault, an abort. Without more information it will be difficult
</span><br>
<span class="quotelev1">&gt; to help or to offer any advice..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 14, 2008, at 11:15 AM, Tom Wurgler wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to use openmpi 1.2.5 (I also tried 1.2.4) to run a
</span><br>
<span class="quotelev2">&gt;&gt; parallel job
</span><br>
<span class="quotelev2">&gt;&gt; using GM drivers.  The only message I get is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that job rank 0 with PID 19508 on node node93 exited  
</span><br>
<span class="quotelev2">&gt;&gt; on
</span><br>
<span class="quotelev2">&gt;&gt; signal 15 (Terminated).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can run serially on one node (4 processors), it just dies when
</span><br>
<span class="quotelev2">&gt;&gt; trying to use
</span><br>
<span class="quotelev2">&gt;&gt; more than one node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help appreciated.
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5044/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5045.php">yoshi.plala: "[OMPI users] shared libraly problem with openmpi-1.2.3 and opensuse10.2"</a>
<li><strong>Previous message:</strong> <a href="5043.php">twurgl_at_[hidden]: "Re: [OMPI users] Can't get OPENMPI to run parallel job with	Myrinet/GM"</a>
<li><strong>In reply to:</strong> <a href="5043.php">twurgl_at_[hidden]: "Re: [OMPI users] Can't get OPENMPI to run parallel job with	Myrinet/GM"</a>
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
