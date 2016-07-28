<?
$subject_val = "Re: [OMPI users] Eager sending on InfiniBand";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 16 22:12:10 2016" -->
<!-- isoreceived="20160517021210" -->
<!-- sent="Mon, 16 May 2016 22:11:29 -0400" -->
<!-- isosent="20160517021129" -->
<!-- name="Xiaolong Cui" -->
<!-- email="sunshine870_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Eager sending on InfiniBand" -->
<!-- id="CAOEhc2CygLLimCN4oHoWJfVP+x7ivi36up-EKDzndcjdzKffdQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20160516223542.GB80855_at_mordor.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Eager sending on InfiniBand<br>
<strong>From:</strong> Xiaolong Cui (<em>sunshine870_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-16 22:11:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29229.php">Nathan Hjelm: "Re: [OMPI users] Eager sending on InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="29227.php">Nathan Hjelm: "Re: [OMPI users] Eager sending on InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="29227.php">Nathan Hjelm: "Re: [OMPI users] Eager sending on InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29229.php">Nathan Hjelm: "Re: [OMPI users] Eager sending on InfiniBand"</a>
<li><strong>Reply:</strong> <a href="29229.php">Nathan Hjelm: "Re: [OMPI users] Eager sending on InfiniBand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nathan,
<br>
<p>Thanks for your answer.
<br>
<p>The &quot;credits&quot; make sense for the purpose of flow control. However, the
<br>
sender in my case will be blocked even for the first message. This doesn't
<br>
seem to be the symptom of running out of credits. Is there any reason for
<br>
this? Also, is there a mac parameter for the number of credits?
<br>
<p>Best,
<br>
Michael
<br>
<p>On Mon, May 16, 2016 at 6:35 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When using eager_rdma the sender will block once it runs out of
</span><br>
<span class="quotelev1">&gt; &quot;credits&quot;. If the receiver enters MPI for any reason the incoming
</span><br>
<span class="quotelev1">&gt; messages will be placed in the ob1 unexpected queue and the credits will
</span><br>
<span class="quotelev1">&gt; be returned to the sender. If you turn off eager_rdma you will probably
</span><br>
<span class="quotelev1">&gt; get different results. That said, the unexpected message path is
</span><br>
<span class="quotelev1">&gt; non-optimal and it would be best to ensure a matching receive is posted
</span><br>
<span class="quotelev1">&gt; before the send.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additionally, if you are using infiniband I recommend against adding a
</span><br>
<span class="quotelev1">&gt; per-peer queue pair to btl_openib_receive_queues. We have not seen any
</span><br>
<span class="quotelev1">&gt; performance benefit to using per-peer queue pairs and they do not
</span><br>
<span class="quotelev1">&gt; scale.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan Hjelm
</span><br>
<span class="quotelev1">&gt; HPC-ENV, LANL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, May 16, 2016 at 12:21:41PM -0400, Xiaolong Cui wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    Hi,
</span><br>
<span class="quotelev2">&gt; &gt;    I am using Open MPI 1.8.6. I guess my question is related to the flow
</span><br>
<span class="quotelev2">&gt; &gt;    control algorithm for small messages. The question is how to avoid the
</span><br>
<span class="quotelev2">&gt; &gt;    sender being blocked by the receiver when using openib module for
</span><br>
<span class="quotelev1">&gt; small
</span><br>
<span class="quotelev2">&gt; &gt;    messages and using blocking send. I have looked through this
</span><br>
<span class="quotelev2">&gt; &gt;    FAQ(
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/faq/?category=openfabrics#ofa-troubleshoot">https://www.open-mpi.org/faq/?category=openfabrics#ofa-troubleshoot</a>)
</span><br>
<span class="quotelev2">&gt; &gt;    but didn't find the answer. My understanding of &quot;eager sending
</span><br>
<span class="quotelev1">&gt; protocol&quot;
</span><br>
<span class="quotelev2">&gt; &gt;    is that if a message is &quot;small&quot;, it will be transported to the
</span><br>
<span class="quotelev1">&gt; receiver
</span><br>
<span class="quotelev2">&gt; &gt;    immediately, even if the receiver is not ready. As a result, the
</span><br>
<span class="quotelev1">&gt; sender
</span><br>
<span class="quotelev2">&gt; &gt;    won't be blocked until the receiver posts the receive operation.
</span><br>
<span class="quotelev2">&gt; &gt;    I am trying to observe such behavior with a simple program of two MPI
</span><br>
<span class="quotelev2">&gt; &gt;    ranks (attached). My confusion is that while I can see the behavior
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev2">&gt; &gt;    &quot;vader&quot; module (shared memory) when running the two ranks on the same
</span><br>
<span class="quotelev2">&gt; &gt;    node,
</span><br>
<span class="quotelev2">&gt; &gt;    [output]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    [0] size = 16, loop = 78, time = 0.00007
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    [1] size = 16, loop = 78, time = 3.42426
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    [/output]
</span><br>
<span class="quotelev2">&gt; &gt;    but I cannot see it when running them on two nodes using the &quot;openib&quot;
</span><br>
<span class="quotelev2">&gt; &gt;    module.
</span><br>
<span class="quotelev2">&gt; &gt;    [output]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    [0] size = 16, loop = 78, time = 3.42627
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    [1] size = 16, loop = 78, time = 3.42426
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    [/output]
</span><br>
<span class="quotelev2">&gt; &gt;    So anyone knows the reason? My runtime configuration is also attached.
</span><br>
<span class="quotelev2">&gt; &gt;    Thanks!
</span><br>
<span class="quotelev2">&gt; &gt;    Sincerely,
</span><br>
<span class="quotelev2">&gt; &gt;    Michael
</span><br>
<span class="quotelev2">&gt; &gt;    --
</span><br>
<span class="quotelev2">&gt; &gt;    Xiaolong Cui (Michael)
</span><br>
<span class="quotelev2">&gt; &gt;    Department of Computer Science
</span><br>
<span class="quotelev2">&gt; &gt;    Dietrich School of Arts &amp; Science
</span><br>
<span class="quotelev2">&gt; &gt;    University of Pittsburgh
</span><br>
<span class="quotelev2">&gt; &gt;    Pittsburgh, PA 15260
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; btl = openib,vader,self
</span><br>
<span class="quotelev2">&gt; &gt; #btl_base_verbose = 100
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_use_eager_rdma = 1
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_eager_limit = 160000
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_rndv_eager_limit = 160000
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_max_send_size = 160000
</span><br>
<span class="quotelev2">&gt; &gt; btl_openib_receive_queues =
</span><br>
<span class="quotelev1">&gt; P,128,256,192,64:S,2048,1024,1008,80:S,12288,1024,1008,80:S,160000,1024,512,512
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi-ext.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;    int size, rank, psize;
</span><br>
<span class="quotelev2">&gt; &gt;    int loops = 78;
</span><br>
<span class="quotelev2">&gt; &gt;    int length = 4;
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt; &gt;    int *code = (int *)malloc(length * sizeof(int));
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Status status;
</span><br>
<span class="quotelev2">&gt; &gt;    long long i = 0;
</span><br>
<span class="quotelev2">&gt; &gt;    double time_s = MPI_Wtime();
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    if(rank % 2 == 1)
</span><br>
<span class="quotelev2">&gt; &gt;    {
</span><br>
<span class="quotelev2">&gt; &gt;        int i ;
</span><br>
<span class="quotelev2">&gt; &gt;        int j ;
</span><br>
<span class="quotelev2">&gt; &gt;        double a = 0.3, b = 0.5;
</span><br>
<span class="quotelev2">&gt; &gt;        for(i = 0; i &lt; 30000; i++)
</span><br>
<span class="quotelev2">&gt; &gt;            for(j = 0; j &lt; 30000; j++){
</span><br>
<span class="quotelev2">&gt; &gt;                a = a * 2;
</span><br>
<span class="quotelev2">&gt; &gt;                b = b + a;
</span><br>
<span class="quotelev2">&gt; &gt;            }
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    for(i = 0; i &lt; loops; i++){
</span><br>
<span class="quotelev2">&gt; &gt;        if(rank % 2 == 0){
</span><br>
<span class="quotelev2">&gt; &gt;            MPI_Send(code, length, MPI_INT, rank + 1, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;        }
</span><br>
<span class="quotelev2">&gt; &gt;        else if(rank % 2 == 1){
</span><br>
<span class="quotelev2">&gt; &gt;            MPI_Recv(code, length, MPI_INT, rank - 1, 0, MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt; MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev2">&gt; &gt;        }
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev2">&gt; &gt;    double time_e = MPI_Wtime();
</span><br>
<span class="quotelev2">&gt; &gt;    printf(&quot;[%d] size = %d, loop = %d, time = %.5f\n&quot;, rank, length *
</span><br>
<span class="quotelev1">&gt; sizeof(int), loops, time_e - time_s);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;    return 0;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29224.php">http://www.open-mpi.org/community/lists/users/2016/05/29224.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29227.php">http://www.open-mpi.org/community/lists/users/2016/05/29227.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Xiaolong Cui (Michael)
Department of Computer Science
Dietrich School of Arts &amp; Science
University of Pittsburgh
Pittsburgh, PA 15260
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29228/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29229.php">Nathan Hjelm: "Re: [OMPI users] Eager sending on InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="29227.php">Nathan Hjelm: "Re: [OMPI users] Eager sending on InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="29227.php">Nathan Hjelm: "Re: [OMPI users] Eager sending on InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29229.php">Nathan Hjelm: "Re: [OMPI users] Eager sending on InfiniBand"</a>
<li><strong>Reply:</strong> <a href="29229.php">Nathan Hjelm: "Re: [OMPI users] Eager sending on InfiniBand"</a>
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
