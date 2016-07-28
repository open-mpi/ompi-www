<?
$subject_val = "Re: [OMPI users] mxm 3.0 and knem warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 27 11:30:40 2014" -->
<!-- isoreceived="20140827153040" -->
<!-- sent="Wed, 27 Aug 2014 18:30:39 +0300" -->
<!-- isosent="20140827153039" -->
<!-- name="Alina Sklarevich" -->
<!-- email="alinas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mxm 3.0 and knem warnings" -->
<!-- id="CADGp0BT4tg7nt19QKURTY14_VwpYR8wnWSHzPpECOLJvwpPuvA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="B7C9282F-0BD9-447F-AF72-BFD940B092ED_at_umich.edu" -->
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
<strong>From:</strong> Alina Sklarevich (<em>alinas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-27 11:30:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25172.php">Brice Goglin: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<li><strong>Previous message:</strong> <a href="25170.php">Brock Palen: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<li><strong>In reply to:</strong> <a href="25170.php">Brock Palen: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25172.php">Brice Goglin: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure why this is the default but in your case you should set the
<br>
permissions to 666 to use it.
<br>
<p><p>On Wed, Aug 27, 2014 at 5:25 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Is there any major issues letting all users use it by setting /dev/knem to
</span><br>
<span class="quotelev1">&gt; 666 ?  It appears knem by default wants to only allow users of the rdma
</span><br>
<span class="quotelev1">&gt; group (if defined) to access knem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are a generic provider and want everyone to be able to use it, just
</span><br>
<span class="quotelev1">&gt; feels strange to restrict it, so I am trying to understand why that is the
</span><br>
<span class="quotelev1">&gt; default.
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
<span class="quotelev1">&gt; On Aug 27, 2014, at 10:15 AM, Alina Sklarevich &lt;alinas_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; KNEM can improve the performance significantly for intra-node
</span><br>
<span class="quotelev1">&gt; communication and that's why MXM is using it.
</span><br>
<span class="quotelev2">&gt; &gt; If you don't want to use it, you can suppress this warning by adding the
</span><br>
<span class="quotelev1">&gt; following to your command line after mpirun:
</span><br>
<span class="quotelev2">&gt; &gt; -x MXM_LOG_LEVEL=error
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Alina.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Aug 27, 2014 at 4:28 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; We updated our ofed and started to rebuild our MPI builds with mxm 3.0  .
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now we get warnings bout knem
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [1409145437.578861] [flux-login1:31719:0]         shm.c:65   MXM  WARN
</span><br>
<span class="quotelev1">&gt; Could not open the KNEM device file at /dev/knem : No such file or
</span><br>
<span class="quotelev1">&gt; directory. Won't use knem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have heard about it a little.  Should we investigate adding it to our
</span><br>
<span class="quotelev1">&gt; systems?
</span><br>
<span class="quotelev2">&gt; &gt; Is there a way to suppress this warning?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brock Palen
</span><br>
<span class="quotelev2">&gt; &gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt; &gt; CAEN Advanced Computing
</span><br>
<span class="quotelev2">&gt; &gt; XSEDE Campus Champion
</span><br>
<span class="quotelev2">&gt; &gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25166.php">http://www.open-mpi.org/community/lists/users/2014/08/25166.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25169.php">http://www.open-mpi.org/community/lists/users/2014/08/25169.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25170.php">http://www.open-mpi.org/community/lists/users/2014/08/25170.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25171/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25172.php">Brice Goglin: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<li><strong>Previous message:</strong> <a href="25170.php">Brock Palen: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<li><strong>In reply to:</strong> <a href="25170.php">Brock Palen: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25172.php">Brice Goglin: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
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
