<?
$subject_val = "Re: [OMPI users] Newbie question";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  3 21:06:01 2016" -->
<!-- isoreceived="20160404010601" -->
<!-- sent="Mon, 4 Apr 2016 10:05:57 +0900" -->
<!-- isosent="20160404010557" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie question" -->
<!-- id="5701BDF5.5030801_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAHXxYDhLzTFDrYtBhEqiH8Amd0taDDXi5=mqokGXFs2ypeQbrQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Newbie question<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-03 21:05:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28880.php">dpchoudh .: "Re: [OMPI users] Newbie question"</a>
<li><strong>Previous message:</strong> <a href="28878.php">dpchoudh .: "Re: [OMPI users] Newbie question"</a>
<li><strong>In reply to:</strong> <a href="28878.php">dpchoudh .: "Re: [OMPI users] Newbie question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28880.php">dpchoudh .: "Re: [OMPI users] Newbie question"</a>
<li><strong>Reply:</strong> <a href="28880.php">dpchoudh .: "Re: [OMPI users] Newbie question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
your program works fine on my environment.
<br>
<p>this is typical of a firewall running on your host(s), can you double 
<br>
check that ?
<br>
<p>a simple way to do that is to
<br>
10.10.10.11# nc -l 1024
<br>
<p>and on the other node
<br>
echo ahah | nc 10.10.10.11 1024
<br>
<p>the first command should print &quot;ahah&quot; unless the host is unreachable 
<br>
and/or the tcp connection is denied by the firewall.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On 4/4/2016 9:44 AM, dpchoudh . wrote:
<br>
<span class="quotelev1">&gt; Hello Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question was more of a sanity check on myself. That little program 
</span><br>
<span class="quotelev1">&gt; I sent looked correct to me; do you see anything wrong with it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I am running on my setup is an instrumented OMPI stack, taken 
</span><br>
<span class="quotelev1">&gt; from git HEAD, in an attempt to understand how some of the internals 
</span><br>
<span class="quotelev1">&gt; work. If you think the code is correct, it is quite possible that one 
</span><br>
<span class="quotelev1">&gt; of those 'instrumentations' is causing this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And BTW, adding -mca pml ob1 makes the code hang at MPI_Send (as 
</span><br>
<span class="quotelev1">&gt; opposed to MPI_Recv())
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [smallMPI:51673] mca: bml: Using tcp btl for send to [[51894,1],1] on 
</span><br>
<span class="quotelev1">&gt; node 10.10.10.11
</span><br>
<span class="quotelev1">&gt; [smallMPI:51673] mca: bml: Using tcp btl for send to [[51894,1],1] on 
</span><br>
<span class="quotelev1">&gt; node 10.10.10.11
</span><br>
<span class="quotelev1">&gt; [smallMPI:51673] mca: bml: Using tcp btl for send to [[51894,1],1] on 
</span><br>
<span class="quotelev1">&gt; node 10.10.10.11
</span><br>
<span class="quotelev1">&gt; [smallMPI:51673] mca: bml: Using tcp btl for send to [[51894,1],1] on 
</span><br>
<span class="quotelev1">&gt; node 10.10.10.11
</span><br>
<span class="quotelev1">&gt; [smallMPI:51673] btl: tcp: attempting to connect() to [[51894,1],1] 
</span><br>
<span class="quotelev1">&gt; address 10.10.10.11 on port 1024 &lt;--- Hangs here
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But 10.10.10.11 is pingable:
</span><br>
<span class="quotelev1">&gt; [durga_at_smallMPI ~]$ ping bigMPI
</span><br>
<span class="quotelev1">&gt; PING bigMPI (10.10.10.11) 56(84) bytes of data.
</span><br>
<span class="quotelev1">&gt; 64 bytes from bigMPI (10.10.10.11): icmp_seq=1 ttl=64 time=0.247 ms
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We learn from history that we never learn from history.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Apr 3, 2016 at 8:04 PM, Gilles Gouaillardet &lt;gilles_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     per a previous message, can you give a try to
</span><br>
<span class="quotelev1">&gt;     mpirun -np 2 -hostfile ~/hostfile -mca btl self,tcp --mca pml ob1
</span><br>
<span class="quotelev1">&gt;     ./mpitest
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if it still hangs, the issue could be OpenMPI think some subnets
</span><br>
<span class="quotelev1">&gt;     are reachable but they are not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     for diagnostic :
</span><br>
<span class="quotelev1">&gt;     mpirun --mca btl_base_verbose 100 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     you can explicitly include/exclude subnets with
</span><br>
<span class="quotelev1">&gt;     --mca btl_tcp_if_include xxx
</span><br>
<span class="quotelev1">&gt;     or
</span><br>
<span class="quotelev1">&gt;     --mca btl_tcp_if_exclude yyy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     for example,
</span><br>
<span class="quotelev1">&gt;     mpirun --mca btl_btp_if_include 192.168.0.0/24
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://192.168.0.0/24">http://192.168.0.0/24</a>&gt; -np 2 -hostfile ~/hostfile --mca btl
</span><br>
<span class="quotelev1">&gt;     self,tcp --mca pml ob1 ./mpitest
</span><br>
<span class="quotelev1">&gt;     should do the trick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 4/4/2016 8:32 AM, dpchoudh . wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Hello all
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I don't mean to be competing for the 'silliest question of the
</span><br>
<span class="quotelev2">&gt;&gt;     year award', but I can't figure this out on my own:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     My 'cluster' has 2 machines, bigMPI and smallMPI. They are
</span><br>
<span class="quotelev2">&gt;&gt;     connected via several (types of) networks and the connectivity is OK.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     In this setup, the following program hangs after printing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Hello world from processor smallMPI, rank 0 out of 2 processors
</span><br>
<span class="quotelev2">&gt;&gt;     Hello world from processor bigMPI, rank 1 out of 2 processors
</span><br>
<span class="quotelev2">&gt;&gt;     smallMPI sent haha!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Obviously it is hanging at MPI_Recv(). But why? My command line
</span><br>
<span class="quotelev2">&gt;&gt;     is as follows, but this happens if I try openib BTL (instead of
</span><br>
<span class="quotelev2">&gt;&gt;     TCP) as well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     mpirun -np 2 -hostfile ~/hostfile -mca btl self,tcp ./mpitest
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     It must be something *really* trivial, but I am drawing a blank
</span><br>
<span class="quotelev2">&gt;&gt;     right now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Please help!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     int main(int argc, char** argv)
</span><br>
<span class="quotelev2">&gt;&gt;     {
</span><br>
<span class="quotelev2">&gt;&gt;         int world_size, world_rank, name_len;
</span><br>
<span class="quotelev2">&gt;&gt;         char hostname[MPI_MAX_PROCESSOR_NAME], buf[8];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Comm_size(MPI_COMM_WORLD, &amp;world_size);
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Comm_rank(MPI_COMM_WORLD, &amp;world_rank);
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Get_processor_name(hostname, &amp;name_len);
</span><br>
<span class="quotelev2">&gt;&gt;         printf(&quot;Hello world from processor %s, rank %d out of %d
</span><br>
<span class="quotelev2">&gt;&gt;     processors\n&quot;, hostname, world_rank, world_size);
</span><br>
<span class="quotelev2">&gt;&gt;         if (world_rank == 1)
</span><br>
<span class="quotelev2">&gt;&gt;         {
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Recv(buf, 6, MPI_CHAR, 0, 99, MPI_COMM_WORLD,
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev2">&gt;&gt;         printf(&quot;%s received %s\n&quot;, hostname, buf);
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;         else
</span><br>
<span class="quotelev2">&gt;&gt;         {
</span><br>
<span class="quotelev2">&gt;&gt;         strcpy(buf, &quot;haha!&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Send(buf, 6, MPI_CHAR, 1, 99, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;         printf(&quot;%s sent %s\n&quot;, hostname, buf);
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;         return 0;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     We learn from history that we never learn from history.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/04/28876.php">http://www.open-mpi.org/community/lists/users/2016/04/28876.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/04/28877.php">http://www.open-mpi.org/community/lists/users/2016/04/28877.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28878.php">http://www.open-mpi.org/community/lists/users/2016/04/28878.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28879/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28880.php">dpchoudh .: "Re: [OMPI users] Newbie question"</a>
<li><strong>Previous message:</strong> <a href="28878.php">dpchoudh .: "Re: [OMPI users] Newbie question"</a>
<li><strong>In reply to:</strong> <a href="28878.php">dpchoudh .: "Re: [OMPI users] Newbie question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28880.php">dpchoudh .: "Re: [OMPI users] Newbie question"</a>
<li><strong>Reply:</strong> <a href="28880.php">dpchoudh .: "Re: [OMPI users] Newbie question"</a>
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
