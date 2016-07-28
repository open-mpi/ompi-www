<?
$subject_val = "Re: [OMPI users] Problems with MPI_Issend and MX";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  3 10:53:43 2009" -->
<!-- isoreceived="20090703145343" -->
<!-- sent="Fri, 3 Jul 2009 10:53:29 -0400" -->
<!-- isosent="20090703145329" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with MPI_Issend and MX" -->
<!-- id="DB30C40A-C12C-481E-AF6D-ABB7EA0BFF0B_at_myri.com" -->
<!-- charset="ISO-2022-JP" -->
<!-- inreplyto="15952-59375_at_sneakemail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with MPI_Issend and MX<br>
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-03 10:53:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9814.php">Simone Pellegrini: "[OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
<li><strong>Previous message:</strong> <a href="9812.php">Simone Pellegrini: "[OMPI users] Request for C/C++ MPI applications kernels"</a>
<li><strong>In reply to:</strong> <a href="9811.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] Problems with MPI_Issend and MX"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Kris,
<br>
<p>Using MX_CSUM should _not_ make a difference by itself. But it  
<br>
requires the debug library which may alter the timing enough to avoid  
<br>
a race (in MX, OMPI, or the application).
<br>
<p>Correct, if you use the MTL then all messages are handled by MX  
<br>
(internode, shared memory and self).
<br>
<p>Scott
<br>
<p>On Jul 3, 2009, at 7:41 AM, 8mj6tc902_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Scott,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your advice! Good to know about the checksum debug
</span><br>
<span class="quotelev1">&gt; functionality! Strangely enough running with either &quot;MX_CSUM=1&quot; or &quot;- 
</span><br>
<span class="quotelev1">&gt; mca
</span><br>
<span class="quotelev1">&gt; pml cm&quot; allows Murasaki to work normally, and makes the test case I
</span><br>
<span class="quotelev1">&gt; attached in my previous mail work. Very suspicious, but at least this
</span><br>
<span class="quotelev1">&gt; does make a functional solution (however, if I understand OpenMPI
</span><br>
<span class="quotelev1">&gt; correctly, I shouldn't be able to use the CM PML over a network where
</span><br>
<span class="quotelev1">&gt; some nodes have MX and some don't, correct?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott Atchley atchley-at-myri.com |openmpi-users/Allow| wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Kris,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have not run your code yet, but I will try to this weekend.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can have MX checksum its messages if you set MX_CSUM=1 and use  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; MX debug library (e.g. LD_LIBRARY_PATH to /opt/mx/lib/debug).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you have the problem if you use the MX MTL? To test it modify your
</span><br>
<span class="quotelev2">&gt;&gt; mpirun as follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -mca pml cm ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and do not specify any BTL info.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Scott
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 2, 2009, at 6:05 PM, 8mj6tc902_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi. I've now spent many many hours tracking down a bug that was  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; causing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my program to die, as though either its memory were getting  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; corrupted or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; messages were getting clobbered while going through the network, I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; couldn't tell which. I really wish the checksum flag on btl_mx_flags
</span><br>
<span class="quotelev3">&gt;&gt;&gt; were working. But anyway, I think I've managed to recreate the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; core of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the problem in a small-ish test case which I've attached
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (verifycontent.cc). This usually segfaults at MPI_Issend after  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sending
</span><br>
<span class="quotelev3">&gt;&gt;&gt; about 60-90 messages for me while using OpenMPI 1.3.2 with myricom's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mx-1.2.9 drivers on linux using gcc 4.3.2. Disabling the mx btl  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mca btl ^mx) makes it work (likewise, the same for my own larger
</span><br>
<span class="quotelev3">&gt;&gt;&gt; project (Murasaki)). The MPI_Ssend using version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (verifycontent-ssend.cc) also works no problem over mx. So I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suspect the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; issue lies in OpenMPI 1.3.2's handling of MPI_Issend over mx, but  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; also possible I've horribly misunderstood something fundamental  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; about
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI and it's just my fault, so if that's the case, please let me  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; know
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (but both my this test case and Murasaki work over mpichmx, so  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is definitely doing something different).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's a brief description of verifycontent.cc to make reading it  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; easier:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * given -np=N, half the nodes will be sending, half will be  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; receiving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some number of messages (reps)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * each message consists of buflen (5000) chars, set to some value  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; based
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the sending node's rank and the sequence number of the message
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * the receiving node starts an irecv for each sending node, tests  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; each
</span><br>
<span class="quotelev3">&gt;&gt;&gt; request until a message arrives
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * the receiver then checks the contents of the message to make  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sure it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; matches what was supposed to be in there (this is where my real  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; project,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Murasaki, fails actually. I can't seem to replicate that however).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * the senders meanwhile keep sending messages and dequeuing them  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; their request tests as completed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Testing out the current subversion trunk version, 1.4a1r21594, that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seems to pass my test case, but also tends to show errors like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mca_btl_mx_init: mx_open_endpoint() failed with status 20 (Busy)&quot;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; start up, and Murasaki still fails (messages turn into zeros about  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 132KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in), so something still isn't right...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If anyone has any ideas about this test case failing, or my larger  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; issue
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of messages turning into zeros after 132KB (though sadly sometimes  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; isn't at 132KB, but straight from 0KB, which is very confusing)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; while on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MX, I'd greatly appreciate it. Even a simple confirmation of &quot;Yes,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Issend/Irecv with MX has issues in 1.3.2&quot; would help my sanity.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kris Popendorf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Keio University
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://murasaki">http://murasaki</a>................... &lt;- (Probably too cumbersome to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; most people to test, but if you feel daring, try putting in some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Human/Mouse chromosomes over MX)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; --Kris
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 叶ってしまう瘢雹夢は本当の夢と言えん。
</span><br>
<span class="quotelev1">&gt; [A dream that comes true can't really be called a dream.]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9814.php">Simone Pellegrini: "[OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
<li><strong>Previous message:</strong> <a href="9812.php">Simone Pellegrini: "[OMPI users] Request for C/C++ MPI applications kernels"</a>
<li><strong>In reply to:</strong> <a href="9811.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] Problems with MPI_Issend and MX"</a>
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
