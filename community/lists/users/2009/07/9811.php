<?
$subject_val = "Re: [OMPI users] Problems with MPI_Issend and MX";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  3 07:42:24 2009" -->
<!-- isoreceived="20090703114224" -->
<!-- sent="Fri, 03 Jul 2009 20:41:44 +0900" -->
<!-- isosent="20090703114144" -->
<!-- name="8mj6tc902_at_[hidden]" -->
<!-- email="8mj6tc902_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with MPI_Issend and MX" -->
<!-- id="15952-59375_at_sneakemail.com" -->
<!-- charset="ISO-2022-JP" -->
<!-- inreplyto="71265009-E31C-45D2-A91F-CE75AD02A6BE_at_myri.com" -->
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
<strong>From:</strong> <a href="mailto:8mj6tc902_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Problems%20with%20MPI_Issend%20and%20MX"><em>8mj6tc902_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-07-03 07:41:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9812.php">Simone Pellegrini: "[OMPI users] Request for C/C++ MPI applications kernels"</a>
<li><strong>Previous message:</strong> <a href="9810.php">Scott Atchley: "Re: [OMPI users] Problems with MPI_Issend and MX"</a>
<li><strong>In reply to:</strong> <a href="9810.php">Scott Atchley: "Re: [OMPI users] Problems with MPI_Issend and MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9813.php">Scott Atchley: "Re: [OMPI users] Problems with MPI_Issend and MX"</a>
<li><strong>Reply:</strong> <a href="9813.php">Scott Atchley: "Re: [OMPI users] Problems with MPI_Issend and MX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Scott,
<br>
<p>Thanks for your advice! Good to know about the checksum debug
<br>
functionality! Strangely enough running with either &quot;MX_CSUM=1&quot; or &quot;-mca
<br>
pml cm&quot; allows Murasaki to work normally, and makes the test case I
<br>
attached in my previous mail work. Very suspicious, but at least this
<br>
does make a functional solution (however, if I understand OpenMPI
<br>
correctly, I shouldn't be able to use the CM PML over a network where
<br>
some nodes have MX and some don't, correct?).
<br>
<p>Scott Atchley atchley-at-myri.com |openmpi-users/Allow| wrote:
<br>
<span class="quotelev1">&gt; Hi Kris,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have not run your code yet, but I will try to this weekend.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can have MX checksum its messages if you set MX_CSUM=1 and use the
</span><br>
<span class="quotelev1">&gt; MX debug library (e.g. LD_LIBRARY_PATH to /opt/mx/lib/debug).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have the problem if you use the MX MTL? To test it modify your
</span><br>
<span class="quotelev1">&gt; mpirun as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca pml cm ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and do not specify any BTL info.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 2, 2009, at 6:05 PM, 8mj6tc902_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi. I've now spent many many hours tracking down a bug that was causing
</span><br>
<span class="quotelev2">&gt;&gt; my program to die, as though either its memory were getting corrupted or
</span><br>
<span class="quotelev2">&gt;&gt; messages were getting clobbered while going through the network, I
</span><br>
<span class="quotelev2">&gt;&gt; couldn't tell which. I really wish the checksum flag on btl_mx_flags
</span><br>
<span class="quotelev2">&gt;&gt; were working. But anyway, I think I've managed to recreate the core of
</span><br>
<span class="quotelev2">&gt;&gt; the problem in a small-ish test case which I've attached
</span><br>
<span class="quotelev2">&gt;&gt; (verifycontent.cc). This usually segfaults at MPI_Issend after sending
</span><br>
<span class="quotelev2">&gt;&gt; about 60-90 messages for me while using OpenMPI 1.3.2 with myricom's
</span><br>
<span class="quotelev2">&gt;&gt; mx-1.2.9 drivers on linux using gcc 4.3.2. Disabling the mx btl (mpirun
</span><br>
<span class="quotelev2">&gt;&gt; -mca btl ^mx) makes it work (likewise, the same for my own larger
</span><br>
<span class="quotelev2">&gt;&gt; project (Murasaki)). The MPI_Ssend using version
</span><br>
<span class="quotelev2">&gt;&gt; (verifycontent-ssend.cc) also works no problem over mx. So I suspect the
</span><br>
<span class="quotelev2">&gt;&gt; issue lies in OpenMPI 1.3.2's handling of MPI_Issend over mx, but it's
</span><br>
<span class="quotelev2">&gt;&gt; also possible I've horribly misunderstood something fundamental about
</span><br>
<span class="quotelev2">&gt;&gt; MPI and it's just my fault, so if that's the case, please let me know
</span><br>
<span class="quotelev2">&gt;&gt; (but both my this test case and Murasaki work over mpichmx, so OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; is definitely doing something different).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's a brief description of verifycontent.cc to make reading it easier:
</span><br>
<span class="quotelev2">&gt;&gt; * given -np=N, half the nodes will be sending, half will be receiving
</span><br>
<span class="quotelev2">&gt;&gt; some number of messages (reps)
</span><br>
<span class="quotelev2">&gt;&gt; * each message consists of buflen (5000) chars, set to some value based
</span><br>
<span class="quotelev2">&gt;&gt; on the sending node's rank and the sequence number of the message
</span><br>
<span class="quotelev2">&gt;&gt; * the receiving node starts an irecv for each sending node, tests each
</span><br>
<span class="quotelev2">&gt;&gt; request until a message arrives
</span><br>
<span class="quotelev2">&gt;&gt; * the receiver then checks the contents of the message to make sure it
</span><br>
<span class="quotelev2">&gt;&gt; matches what was supposed to be in there (this is where my real project,
</span><br>
<span class="quotelev2">&gt;&gt; Murasaki, fails actually. I can't seem to replicate that however).
</span><br>
<span class="quotelev2">&gt;&gt; * the senders meanwhile keep sending messages and dequeuing them when
</span><br>
<span class="quotelev2">&gt;&gt; their request tests as completed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Testing out the current subversion trunk version, 1.4a1r21594, that
</span><br>
<span class="quotelev2">&gt;&gt; seems to pass my test case, but also tends to show errors like
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mca_btl_mx_init: mx_open_endpoint() failed with status 20 (Busy)&quot; on
</span><br>
<span class="quotelev2">&gt;&gt; start up, and Murasaki still fails (messages turn into zeros about 132KB
</span><br>
<span class="quotelev2">&gt;&gt; in), so something still isn't right...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If anyone has any ideas about this test case failing, or my larger issue
</span><br>
<span class="quotelev2">&gt;&gt; of messages turning into zeros after 132KB (though sadly sometimes it
</span><br>
<span class="quotelev2">&gt;&gt; isn't at 132KB, but straight from 0KB, which is very confusing) while on
</span><br>
<span class="quotelev2">&gt;&gt; MX, I'd greatly appreciate it. Even a simple confirmation of &quot;Yes,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Issend/Irecv with MX has issues in 1.3.2&quot; would help my sanity.
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Kris Popendorf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Keio University
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://murasaki">http://murasaki</a>................... &lt;- (Probably too cumbersome to expect
</span><br>
<span class="quotelev2">&gt;&gt; most people to test, but if you feel daring, try putting in some
</span><br>
<span class="quotelev2">&gt;&gt; Human/Mouse chromosomes over MX)
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
<p><p><pre>
-- 
--Kris
叶ってしまう瘢雹夢は本当の夢と言えん。
[A dream that comes true can't really be called a dream.]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9812.php">Simone Pellegrini: "[OMPI users] Request for C/C++ MPI applications kernels"</a>
<li><strong>Previous message:</strong> <a href="9810.php">Scott Atchley: "Re: [OMPI users] Problems with MPI_Issend and MX"</a>
<li><strong>In reply to:</strong> <a href="9810.php">Scott Atchley: "Re: [OMPI users] Problems with MPI_Issend and MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9813.php">Scott Atchley: "Re: [OMPI users] Problems with MPI_Issend and MX"</a>
<li><strong>Reply:</strong> <a href="9813.php">Scott Atchley: "Re: [OMPI users] Problems with MPI_Issend and MX"</a>
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
