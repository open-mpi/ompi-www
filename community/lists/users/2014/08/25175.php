<?
$subject_val = "Re: [OMPI users] mxm 3.0 and knem warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 28 02:12:44 2014" -->
<!-- isoreceived="20140828061244" -->
<!-- sent="Thu, 28 Aug 2014 09:12:43 +0300" -->
<!-- isosent="20140828061243" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mxm 3.0 and knem warnings" -->
<!-- id="CAAO1KybgpBejLVqxsyfePQO8MLCU7UZQRQAA+snw9++h9wLBEA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="6DBEBD4D-871F-4470-B189-06F87A3B2ADF_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mxm 3.0 and knem warnings<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-28 02:12:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25176.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28 slots (updated findings)"</a>
<li><strong>Previous message:</strong> <a href="25174.php">Brock Palen: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<li><strong>In reply to:</strong> <a href="25174.php">Brock Palen: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25180.php">Brock Palen: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<li><strong>Reply:</strong> <a href="25180.php">Brock Palen: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
btw, you may want to use latest mxm v3.1 which is part of hpcx package
<br>
<a href="http://www.mellanox.com/products/hpcx">http://www.mellanox.com/products/hpcx</a>
<br>
<p><p><p>On Thu, Aug 28, 2014 at 4:10 AM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Brice, et al.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot for this info. We are setting up new builds of OMPI 1.8.2
</span><br>
<span class="quotelev1">&gt; with knem and mxm 3.0,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If we have questions we will let you know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev1">&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 27, 2014, at 12:44 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello Brock,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Some people complained that giving world-wide access to a device file by
</span><br>
<span class="quotelev1">&gt; default might be bad if we ever find a security leak in the kernel module.
</span><br>
<span class="quotelev1">&gt; So I needed a better default. The rdma group is often used for OFED
</span><br>
<span class="quotelev1">&gt; devices, and OFED and KNEM users are often the same, so it was a good
</span><br>
<span class="quotelev1">&gt; compromise.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There's no major issue with opening /dev/knem to everybody. A remote
</span><br>
<span class="quotelev1">&gt; process memory is only accessible if an attacker finds the corresponding
</span><br>
<span class="quotelev1">&gt; 64bit cookie. Only the memory buffer that was explicitly made readable
</span><br>
<span class="quotelev1">&gt; and/or writable can be accessed read and/or write through this cookie. And
</span><br>
<span class="quotelev1">&gt; recent KNEM releases also enforce by default that the attacker has the same
</span><br>
<span class="quotelev1">&gt; uid as the target process.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brice
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Le 27/08/2014 16:25, Brock Palen a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is there any major issues letting all users use it by setting /dev/knem
</span><br>
<span class="quotelev1">&gt; to 666 ?  It appears knem by default wants to only allow users of the rdma
</span><br>
<span class="quotelev1">&gt; group (if defined) to access knem.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; We are a generic provider and want everyone to be able to use it, just
</span><br>
<span class="quotelev1">&gt; feels strange to restrict it, so I am trying to understand why that is the
</span><br>
<span class="quotelev1">&gt; default.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Brock Palen
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (734)936-1985
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Aug 27, 2014, at 10:15 AM, Alina Sklarevich
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;alinas_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; KNEM can improve the performance significantly for intra-node
</span><br>
<span class="quotelev1">&gt; communication and that's why MXM is using it.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If you don't want to use it, you can suppress this warning by adding
</span><br>
<span class="quotelev1">&gt; the following to your command line after mpirun:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -x MXM_LOG_LEVEL=error
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Alina.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Wed, Aug 27, 2014 at 4:28 PM, Brock Palen
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &lt;brockp_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; We updated our ofed and started to rebuild our MPI builds with mxm
</span><br>
<span class="quotelev1">&gt; 3.0  .
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Now we get warnings bout knem
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [1409145437.578861] [flux-login1:31719:0]         shm.c:65   MXM
</span><br>
<span class="quotelev1">&gt; WARN  Could not open the KNEM device file at /dev/knem : No such file or
</span><br>
<span class="quotelev1">&gt; directory. Won't use knem.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have heard about it a little.  Should we investigate adding it to
</span><br>
<span class="quotelev1">&gt; our systems?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Is there a way to suppress this warning?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25166.php">http://www.open-mpi.org/community/lists/users/2014/08/25166.php</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25169.php">http://www.open-mpi.org/community/lists/users/2014/08/25169.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25170.php">http://www.open-mpi.org/community/lists/users/2014/08/25170.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25172.php">http://www.open-mpi.org/community/lists/users/2014/08/25172.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25174.php">http://www.open-mpi.org/community/lists/users/2014/08/25174.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind Regards,
M.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25175/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25176.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28 slots (updated findings)"</a>
<li><strong>Previous message:</strong> <a href="25174.php">Brock Palen: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<li><strong>In reply to:</strong> <a href="25174.php">Brock Palen: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25180.php">Brock Palen: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<li><strong>Reply:</strong> <a href="25180.php">Brock Palen: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
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
