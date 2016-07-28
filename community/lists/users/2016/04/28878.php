<?
$subject_val = "Re: [OMPI users] Newbie question";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  3 20:44:36 2016" -->
<!-- isoreceived="20160404004436" -->
<!-- sent="Sun, 3 Apr 2016 20:44:34 -0400" -->
<!-- isosent="20160404004434" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie question" -->
<!-- id="CAHXxYDhLzTFDrYtBhEqiH8Amd0taDDXi5=mqokGXFs2ypeQbrQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5701AFAB.4060001_at_rist.or.jp" -->
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
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-03 20:44:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28879.php">Gilles Gouaillardet: "Re: [OMPI users] Newbie question"</a>
<li><strong>Previous message:</strong> <a href="28877.php">Gilles Gouaillardet: "Re: [OMPI users] Newbie question"</a>
<li><strong>In reply to:</strong> <a href="28877.php">Gilles Gouaillardet: "Re: [OMPI users] Newbie question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28879.php">Gilles Gouaillardet: "Re: [OMPI users] Newbie question"</a>
<li><strong>Reply:</strong> <a href="28879.php">Gilles Gouaillardet: "Re: [OMPI users] Newbie question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Gilles
<br>
<p>Thanks for your help.
<br>
<p>My question was more of a sanity check on myself. That little program I
<br>
sent looked correct to me; do you see anything wrong with it?
<br>
<p>What I am running on my setup is an instrumented OMPI stack, taken from git
<br>
HEAD, in an attempt to understand how some of the internals work. If you
<br>
think the code is correct, it is quite possible that one of those
<br>
'instrumentations' is causing this.
<br>
<p>And BTW, adding -mca pml ob1 makes the code hang at MPI_Send (as opposed to
<br>
MPI_Recv())
<br>
<p>[smallMPI:51673] mca: bml: Using tcp btl for send to [[51894,1],1] on node
<br>
10.10.10.11
<br>
[smallMPI:51673] mca: bml: Using tcp btl for send to [[51894,1],1] on node
<br>
10.10.10.11
<br>
[smallMPI:51673] mca: bml: Using tcp btl for send to [[51894,1],1] on node
<br>
10.10.10.11
<br>
[smallMPI:51673] mca: bml: Using tcp btl for send to [[51894,1],1] on node
<br>
10.10.10.11
<br>
[smallMPI:51673] btl: tcp: attempting to connect() to [[51894,1],1] address
<br>
10.10.10.11 on port 1024 &lt;--- Hangs here
<br>
<p>But 10.10.10.11 is pingable:
<br>
[durga_at_smallMPI ~]$ ping bigMPI
<br>
PING bigMPI (10.10.10.11) 56(84) bytes of data.
<br>
64 bytes from bigMPI (10.10.10.11): icmp_seq=1 ttl=64 time=0.247 ms
<br>
<p><p>We learn from history that we never learn from history.
<br>
<p>On Sun, Apr 3, 2016 at 8:04 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; per a previous message, can you give a try to
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -hostfile ~/hostfile -mca btl self,tcp --mca pml ob1 ./mpitest
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if it still hangs, the issue could be OpenMPI think some subnets are
</span><br>
<span class="quotelev1">&gt; reachable but they are not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for diagnostic :
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_base_verbose 100 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you can explicitly include/exclude subnets with
</span><br>
<span class="quotelev1">&gt; --mca btl_tcp_if_include xxx
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; --mca btl_tcp_if_exclude yyy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for example,
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_btp_if_include 192.168.0.0/24 -np 2 -hostfile ~/hostfile
</span><br>
<span class="quotelev1">&gt; --mca btl self,tcp --mca pml ob1 ./mpitest
</span><br>
<span class="quotelev1">&gt; should do the trick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/4/2016 8:32 AM, dpchoudh . wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't mean to be competing for the 'silliest question of the year
</span><br>
<span class="quotelev1">&gt; award', but I can't figure this out on my own:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My 'cluster' has 2 machines, bigMPI and smallMPI. They are connected via
</span><br>
<span class="quotelev1">&gt; several (types of) networks and the connectivity is OK.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In this setup, the following program hangs after printing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello world from processor smallMPI, rank 0 out of 2 processors
</span><br>
<span class="quotelev1">&gt; Hello world from processor bigMPI, rank 1 out of 2 processors
</span><br>
<span class="quotelev1">&gt; smallMPI sent haha!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Obviously it is hanging at MPI_Recv(). But why? My command line is as
</span><br>
<span class="quotelev1">&gt; follows, but this happens if I try openib BTL (instead of TCP) as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -hostfile ~/hostfile -mca btl self,tcp ./mpitest
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It must be something *really* trivial, but I am drawing a blank right now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please help!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int world_size, world_rank, name_len;
</span><br>
<span class="quotelev1">&gt;     char hostname[MPI_MAX_PROCESSOR_NAME], buf[8];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;world_size);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;world_rank);
</span><br>
<span class="quotelev1">&gt;     MPI_Get_processor_name(hostname, &amp;name_len);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Hello world from processor %s, rank %d out of %d
</span><br>
<span class="quotelev1">&gt; processors\n&quot;, hostname, world_rank, world_size);
</span><br>
<span class="quotelev1">&gt;     if (world_rank == 1)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;     MPI_Recv(buf, 6, MPI_CHAR, 0, 99, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;%s received %s\n&quot;, hostname, buf);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     else
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;     strcpy(buf, &quot;haha!&quot;);
</span><br>
<span class="quotelev1">&gt;     MPI_Send(buf, 6, MPI_CHAR, 1, 99, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;%s sent %s\n&quot;, hostname, buf);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We learn from history that we never learn from history.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28876.php">http://www.open-mpi.org/community/lists/users/2016/04/28876.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28877.php">http://www.open-mpi.org/community/lists/users/2016/04/28877.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28878/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28879.php">Gilles Gouaillardet: "Re: [OMPI users] Newbie question"</a>
<li><strong>Previous message:</strong> <a href="28877.php">Gilles Gouaillardet: "Re: [OMPI users] Newbie question"</a>
<li><strong>In reply to:</strong> <a href="28877.php">Gilles Gouaillardet: "Re: [OMPI users] Newbie question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28879.php">Gilles Gouaillardet: "Re: [OMPI users] Newbie question"</a>
<li><strong>Reply:</strong> <a href="28879.php">Gilles Gouaillardet: "Re: [OMPI users] Newbie question"</a>
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
