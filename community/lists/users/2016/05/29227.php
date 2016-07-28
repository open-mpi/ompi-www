<?
$subject_val = "Re: [OMPI users] Eager sending on InfiniBand";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 16 18:35:44 2016" -->
<!-- isoreceived="20160516223544" -->
<!-- sent="Mon, 16 May 2016 16:35:42 -0600" -->
<!-- isosent="20160516223542" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Eager sending on InfiniBand" -->
<!-- id="20160516223542.GB80855_at_mordor.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAOEhc2Dm7yDcipQgnVrmKpbg6ysobSND2k-0tP8DQNoGS0qWEg_at_mail.gmail.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-16 18:35:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29228.php">Xiaolong Cui: "Re: [OMPI users] Eager sending on InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="29226.php">Ralph Castain: "Re: [OMPI users] ORTE has lost communication"</a>
<li><strong>In reply to:</strong> <a href="29224.php">Xiaolong Cui: "[OMPI users] Eager sending on InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29228.php">Xiaolong Cui: "Re: [OMPI users] Eager sending on InfiniBand"</a>
<li><strong>Reply:</strong> <a href="29228.php">Xiaolong Cui: "Re: [OMPI users] Eager sending on InfiniBand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When using eager_rdma the sender will block once it runs out of
<br>
&quot;credits&quot;. If the receiver enters MPI for any reason the incoming
<br>
messages will be placed in the ob1 unexpected queue and the credits will
<br>
be returned to the sender. If you turn off eager_rdma you will probably
<br>
get different results. That said, the unexpected message path is
<br>
non-optimal and it would be best to ensure a matching receive is posted
<br>
before the send.
<br>
<p>Additionally, if you are using infiniband I recommend against adding a
<br>
per-peer queue pair to btl_openib_receive_queues. We have not seen any
<br>
performance benefit to using per-peer queue pairs and they do not
<br>
scale.
<br>
<p>-Nathan Hjelm
<br>
HPC-ENV, LANL
<br>
<p>On Mon, May 16, 2016 at 12:21:41PM -0400, Xiaolong Cui wrote:
<br>
<span class="quotelev1">&gt;    Hi,
</span><br>
<span class="quotelev1">&gt;    I am using Open MPI 1.8.6. I guess my question is related to the flow
</span><br>
<span class="quotelev1">&gt;    control algorithm for small messages. The question is how to avoid the
</span><br>
<span class="quotelev1">&gt;    sender being blocked by the receiver when using openib module for small
</span><br>
<span class="quotelev1">&gt;    messages and using blocking send. I have looked through this
</span><br>
<span class="quotelev1">&gt;    FAQ(<a href="https://www.open-mpi.org/faq/?category=openfabrics#ofa-troubleshoot">https://www.open-mpi.org/faq/?category=openfabrics#ofa-troubleshoot</a>)
</span><br>
<span class="quotelev1">&gt;    but didn't find the answer. My understanding of &quot;eager sending protocol&quot;
</span><br>
<span class="quotelev1">&gt;    is that if a message is &quot;small&quot;, it will be transported to the receiver
</span><br>
<span class="quotelev1">&gt;    immediately, even if the receiver is not ready. As a result, the sender
</span><br>
<span class="quotelev1">&gt;    won't be blocked until the receiver posts the receive operation. 
</span><br>
<span class="quotelev1">&gt;    I am trying to observe such behavior with a simple program of two MPI
</span><br>
<span class="quotelev1">&gt;    ranks (attached). My confusion is that while I can see the behavior with
</span><br>
<span class="quotelev1">&gt;    &quot;vader&quot; module (shared memory) when running the two ranks on the same
</span><br>
<span class="quotelev1">&gt;    node, 
</span><br>
<span class="quotelev1">&gt;    [output]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    [0] size = 16, loop = 78, time = 0.00007
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    [1] size = 16, loop = 78, time = 3.42426
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    [/output]
</span><br>
<span class="quotelev1">&gt;    but I cannot see it when running them on two nodes using the &quot;openib&quot;
</span><br>
<span class="quotelev1">&gt;    module. 
</span><br>
<span class="quotelev1">&gt;    [output]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    [0] size = 16, loop = 78, time = 3.42627
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    [1] size = 16, loop = 78, time = 3.42426
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    [/output]
</span><br>
<span class="quotelev1">&gt;    So anyone knows the reason? My runtime configuration is also attached.
</span><br>
<span class="quotelev1">&gt;    Thanks!
</span><br>
<span class="quotelev1">&gt;    Sincerely,
</span><br>
<span class="quotelev1">&gt;    Michael
</span><br>
<span class="quotelev1">&gt;    --
</span><br>
<span class="quotelev1">&gt;    Xiaolong Cui (Michael)
</span><br>
<span class="quotelev1">&gt;    Department of Computer Science
</span><br>
<span class="quotelev1">&gt;    Dietrich School of Arts &amp; Science
</span><br>
<span class="quotelev1">&gt;    University of Pittsburgh
</span><br>
<span class="quotelev1">&gt;    Pittsburgh, PA 15260
</span><br>
<p><span class="quotelev1">&gt; btl = openib,vader,self
</span><br>
<span class="quotelev1">&gt; #btl_base_verbose = 100
</span><br>
<span class="quotelev1">&gt; btl_openib_use_eager_rdma = 1
</span><br>
<span class="quotelev1">&gt; btl_openib_eager_limit = 160000
</span><br>
<span class="quotelev1">&gt; btl_openib_rndv_eager_limit = 160000
</span><br>
<span class="quotelev1">&gt; btl_openib_max_send_size = 160000
</span><br>
<span class="quotelev1">&gt; btl_openib_receive_queues = P,128,256,192,64:S,2048,1024,1008,80:S,12288,1024,1008,80:S,160000,1024,512,512
</span><br>
<p><span class="quotelev1">&gt; #include &quot;mpi.h&quot; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi-ext.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[]) 
</span><br>
<span class="quotelev1">&gt; { 
</span><br>
<span class="quotelev1">&gt;    int size, rank, psize; 
</span><br>
<span class="quotelev1">&gt;    int loops = 78;
</span><br>
<span class="quotelev1">&gt;    int length = 4;
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;argc, &amp;argv); 
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;    int *code = (int *)malloc(length * sizeof(int));
</span><br>
<span class="quotelev1">&gt;    MPI_Status status;
</span><br>
<span class="quotelev1">&gt;    long long i = 0;
</span><br>
<span class="quotelev1">&gt;    double time_s = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    if(rank % 2 == 1)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;        int i ;
</span><br>
<span class="quotelev1">&gt;        int j ;
</span><br>
<span class="quotelev1">&gt;        double a = 0.3, b = 0.5;
</span><br>
<span class="quotelev1">&gt;        for(i = 0; i &lt; 30000; i++)
</span><br>
<span class="quotelev1">&gt;            for(j = 0; j &lt; 30000; j++){
</span><br>
<span class="quotelev1">&gt;                a = a * 2;
</span><br>
<span class="quotelev1">&gt;                b = b + a;
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    for(i = 0; i &lt; loops; i++){
</span><br>
<span class="quotelev1">&gt;        if(rank % 2 == 0){
</span><br>
<span class="quotelev1">&gt;            MPI_Send(code, length, MPI_INT, rank + 1, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;        else if(rank % 2 == 1){
</span><br>
<span class="quotelev1">&gt;            MPI_Recv(code, length, MPI_INT, rank - 1, 0, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    double time_e = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;    printf(&quot;[%d] size = %d, loop = %d, time = %.5f\n&quot;, rank, length * sizeof(int), loops, time_e - time_s);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize(); 
</span><br>
<span class="quotelev1">&gt;    return 0; 
</span><br>
<span class="quotelev1">&gt; } 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29224.php">http://www.open-mpi.org/community/lists/users/2016/05/29224.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29227/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29228.php">Xiaolong Cui: "Re: [OMPI users] Eager sending on InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="29226.php">Ralph Castain: "Re: [OMPI users] ORTE has lost communication"</a>
<li><strong>In reply to:</strong> <a href="29224.php">Xiaolong Cui: "[OMPI users] Eager sending on InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29228.php">Xiaolong Cui: "Re: [OMPI users] Eager sending on InfiniBand"</a>
<li><strong>Reply:</strong> <a href="29228.php">Xiaolong Cui: "Re: [OMPI users] Eager sending on InfiniBand"</a>
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
