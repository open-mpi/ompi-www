<?
$subject_val = "Re: [OMPI users] Why? MPI_Scatter problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 13 13:00:26 2010" -->
<!-- isoreceived="20101213180026" -->
<!-- sent="Mon, 13 Dec 2010 20:00:19 +0200" -->
<!-- isosent="20101213180019" -->
<!-- name="Kechagias Apostolos" -->
<!-- email="pasxal.antix_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why? MPI_Scatter problem" -->
<!-- id="AANLkTi=zmpRUX8eM8R6=Hj2iJfDwobcH0jR8iH0fE5jD_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D065D66.6060805_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Why? MPI_Scatter problem<br>
<strong>From:</strong> Kechagias Apostolos (<em>pasxal.antix_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-13 13:00:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15115.php">Gus Correa: "Re: [OMPI users] Why? MPI_Scatter problem"</a>
<li><strong>Previous message:</strong> <a href="15113.php">Gus Correa: "Re: [OMPI users] Why? MPI_Scatter problem"</a>
<li><strong>In reply to:</strong> <a href="15113.php">Gus Correa: "Re: [OMPI users] Why? MPI_Scatter problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15115.php">Gus Correa: "Re: [OMPI users] Why? MPI_Scatter problem"</a>
<li><strong>Reply:</strong> <a href="15115.php">Gus Correa: "Re: [OMPI users] Why? MPI_Scatter problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sure it helps. I had no idea about this source.
<br>
I hope that it is up to date.
<br>
<p>2010/12/13 Gus Correa &lt;gus_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hi Kechagias
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The figures in Chapter 4 of
</span><br>
<span class="quotelev1">&gt; &quot;MPI: The Complete Reference, Vol 1, 2nd Ed.&quot;,
</span><br>
<span class="quotelev1">&gt; by Snir et. al. are good reminders.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here are a few:
</span><br>
<span class="quotelev1">&gt; //www.dartmouth.edu/~rc/classes/intro_mpi/mpi_comm_modes2.html#top
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kechagias Apostolos wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I thought that every process will receive the data as is.
</span><br>
<span class="quotelev2">&gt;&gt; Thanks that solved my problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2010/12/13 Gus Correa &lt;gus_at_[hidden] &lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; gus_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Kechagias Apostolos wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        I have the code that is in the attachment.
</span><br>
<span class="quotelev2">&gt;&gt;        Can anybody explain how to use scatter function?
</span><br>
<span class="quotelev2">&gt;&gt;        It seems that this way im using it doesnt do the job.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;        users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;        users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    int main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt;&gt;    {
</span><br>
<span class="quotelev2">&gt;&gt;           int  error_code, err, rank, size, N, i, N1, start, end;
</span><br>
<span class="quotelev2">&gt;&gt;                      float  W, pi=0, sum=0;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;           MPI_Comm_rank( MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;           MPI_Comm_size( MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           N=atoi(argv[1]);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           int n[N],data[N];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           N1 = N/size;
</span><br>
<span class="quotelev2">&gt;&gt;           W=1.0/N;
</span><br>
<span class="quotelev2">&gt;&gt;           //printf(&quot;N1:%d W:%f\n&quot;,N1,W);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                         if(size&lt;2)
</span><br>
<span class="quotelev2">&gt;&gt;           {
</span><br>
<span class="quotelev2">&gt;&gt;                   printf(&quot;You must have 2 or more ranks to complete
</span><br>
<span class="quotelev2">&gt;&gt;    this action\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;                   MPI_Abort(MPI_COMM_WORLD,err);
</span><br>
<span class="quotelev2">&gt;&gt;           }
</span><br>
<span class="quotelev2">&gt;&gt;           if(argc&lt;2)
</span><br>
<span class="quotelev2">&gt;&gt;           {
</span><br>
<span class="quotelev2">&gt;&gt;                   printf(&quot;Not enough arguments given\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;                   MPI_Abort(MPI_COMM_WORLD,err);             }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           if(rank == 0) {for(i=0;i&lt;N;i++) n[i]=i;}
</span><br>
<span class="quotelev2">&gt;&gt;                      MPI_Scatter (n, N1, MPI_INT,data, N1,MPI_INT, 0,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           pi = 0;
</span><br>
<span class="quotelev2">&gt;&gt;                      start = rank*N1;
</span><br>
<span class="quotelev2">&gt;&gt;       end = (rank+1)*N1;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           for(i=data[start];i&lt;data[end];i++)
</span><br>
<span class="quotelev2">&gt;&gt;    pi+=4*W/(1+(i+0.5)*(i+0.5)*W*W);
</span><br>
<span class="quotelev2">&gt;&gt;       //  printf(&quot;rank:%d tmppi:%f\n&quot;,rank,pi);
</span><br>
<span class="quotelev2">&gt;&gt; printf(&quot;data[start]:%d data[end]:%d &quot;,data[start],data[end]);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       printf(&quot;rankN1:%d rank+1N1:%d\n&quot;,start,end);
</span><br>
<span class="quotelev2">&gt;&gt;           MPI_Reduce(&amp;pi, &amp;sum, 1, MPI_FLOAT, MPI_SUM, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           if (rank == 0) printf(&quot;Pi is:%f size:%d\n&quot;,sum,size);
</span><br>
<span class="quotelev2">&gt;&gt;                              MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    #########
</span><br>
<span class="quotelev2">&gt;&gt;    Hi Kechagias
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    If you use MPI_Scatter, the receive buffers start receiving
</span><br>
<span class="quotelev2">&gt;&gt;    at the zero offset (i.e. at data[0]), not at data[start].
</span><br>
<span class="quotelev2">&gt;&gt;    Also, your receive buffers could have size N1, not N.
</span><br>
<span class="quotelev2">&gt;&gt;    I guess the MPI_Scatter call is right.
</span><br>
<span class="quotelev2">&gt;&gt;    The subsequent code needs to change.
</span><br>
<span class="quotelev2">&gt;&gt;    The loop should go from data[0] to data[N1-1].
</span><br>
<span class="quotelev2">&gt;&gt;    (However, be careful with edge cases where the number
</span><br>
<span class="quotelev2">&gt;&gt;    of processes doesn't divide N evenly.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Alternatively you could use MPI_Alltoallw to scatter the way
</span><br>
<span class="quotelev2">&gt;&gt;    your code suggests you want to do, but that would be an overkill.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;    users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15114/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15115.php">Gus Correa: "Re: [OMPI users] Why? MPI_Scatter problem"</a>
<li><strong>Previous message:</strong> <a href="15113.php">Gus Correa: "Re: [OMPI users] Why? MPI_Scatter problem"</a>
<li><strong>In reply to:</strong> <a href="15113.php">Gus Correa: "Re: [OMPI users] Why? MPI_Scatter problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15115.php">Gus Correa: "Re: [OMPI users] Why? MPI_Scatter problem"</a>
<li><strong>Reply:</strong> <a href="15115.php">Gus Correa: "Re: [OMPI users] Why? MPI_Scatter problem"</a>
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
