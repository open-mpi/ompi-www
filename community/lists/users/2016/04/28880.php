<?
$subject_val = "Re: [OMPI users] Newbie question";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  3 22:26:44 2016" -->
<!-- isoreceived="20160404022644" -->
<!-- sent="Sun, 3 Apr 2016 22:26:42 -0400" -->
<!-- isosent="20160404022642" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie question" -->
<!-- id="CAHXxYDgAuMn7tiNTo1mk1P1DXTfF33mK+cRu_3fjAQx91aa-gA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5701BDF5.5030801_at_rist.or.jp" -->
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
<strong>Date:</strong> 2016-04-03 22:26:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28881.php">Brock Palen: "[OMPI users] Building against XLC XLF"</a>
<li><strong>Previous message:</strong> <a href="28879.php">Gilles Gouaillardet: "Re: [OMPI users] Newbie question"</a>
<li><strong>In reply to:</strong> <a href="28879.php">Gilles Gouaillardet: "Re: [OMPI users] Newbie question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Gilles
<br>
<p>Thanks again for your inputs. Since that code snippet works for you, I am
<br>
now fairly certain that my 'instrumentation' has broken something; sorry
<br>
for troubling the whole community while I climb the learning curve. The
<br>
netcat script that you mention does work correctly; that and that fact that
<br>
the issue happens even when I use the openib BTL makes me convinced it is
<br>
not a firewall issue.
<br>
<p>Best regards
<br>
Durga
<br>
<p>We learn from history that we never learn from history.
<br>
<p>On Sun, Apr 3, 2016 at 9:05 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; your program works fine on my environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this is typical of a firewall running on your host(s), can you double
</span><br>
<span class="quotelev1">&gt; check that ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a simple way to do that is to
</span><br>
<span class="quotelev1">&gt; 10.10.10.11# nc -l 1024
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and on the other node
</span><br>
<span class="quotelev1">&gt; echo ahah | nc 10.10.10.11 1024
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the first command should print &quot;ahah&quot; unless the host is unreachable
</span><br>
<span class="quotelev1">&gt; and/or the tcp connection is denied by the firewall.
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
<span class="quotelev1">&gt; On 4/4/2016 9:44 AM, dpchoudh . wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question was more of a sanity check on myself. That little program I
</span><br>
<span class="quotelev1">&gt; sent looked correct to me; do you see anything wrong with it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I am running on my setup is an instrumented OMPI stack, taken from
</span><br>
<span class="quotelev1">&gt; git HEAD, in an attempt to understand how some of the internals work. If
</span><br>
<span class="quotelev1">&gt; you think the code is correct, it is quite possible that one of those
</span><br>
<span class="quotelev1">&gt; 'instrumentations' is causing this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And BTW, adding -mca pml ob1 makes the code hang at MPI_Send (as opposed
</span><br>
<span class="quotelev1">&gt; to MPI_Recv())
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [smallMPI:51673] mca: bml: Using tcp btl for send to [[51894,1],1] on node
</span><br>
<span class="quotelev1">&gt; 10.10.10.11
</span><br>
<span class="quotelev1">&gt; [smallMPI:51673] mca: bml: Using tcp btl for send to [[51894,1],1] on node
</span><br>
<span class="quotelev1">&gt; 10.10.10.11
</span><br>
<span class="quotelev1">&gt; [smallMPI:51673] mca: bml: Using tcp btl for send to [[51894,1],1] on node
</span><br>
<span class="quotelev1">&gt; 10.10.10.11
</span><br>
<span class="quotelev1">&gt; [smallMPI:51673] mca: bml: Using tcp btl for send to [[51894,1],1] on node
</span><br>
<span class="quotelev1">&gt; 10.10.10.11
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
<span class="quotelev1">&gt; On Sun, Apr 3, 2016 at 8:04 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; per a previous message, can you give a try to
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 -hostfile ~/hostfile -mca btl self,tcp --mca pml ob1
</span><br>
<span class="quotelev2">&gt;&gt; ./mpitest
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if it still hangs, the issue could be OpenMPI think some subnets are
</span><br>
<span class="quotelev2">&gt;&gt; reachable but they are not.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for diagnostic :
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca btl_base_verbose 100 ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; you can explicitly include/exclude subnets with
</span><br>
<span class="quotelev2">&gt;&gt; --mca btl_tcp_if_include xxx
</span><br>
<span class="quotelev2">&gt;&gt; or
</span><br>
<span class="quotelev2">&gt;&gt; --mca btl_tcp_if_exclude yyy
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for example,
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca btl_btp_if_include 192.168.0.0/24 -np 2 -hostfile
</span><br>
<span class="quotelev2">&gt;&gt; ~/hostfile --mca btl self,tcp --mca pml ob1 ./mpitest
</span><br>
<span class="quotelev2">&gt;&gt; should do the trick
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 4/4/2016 8:32 AM, dpchoudh . wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello all
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't mean to be competing for the 'silliest question of the year
</span><br>
<span class="quotelev2">&gt;&gt; award', but I can't figure this out on my own:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My 'cluster' has 2 machines, bigMPI and smallMPI. They are connected via
</span><br>
<span class="quotelev2">&gt;&gt; several (types of) networks and the connectivity is OK.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In this setup, the following program hangs after printing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello world from processor smallMPI, rank 0 out of 2 processors
</span><br>
<span class="quotelev2">&gt;&gt; Hello world from processor bigMPI, rank 1 out of 2 processors
</span><br>
<span class="quotelev2">&gt;&gt; smallMPI sent haha!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Obviously it is hanging at MPI_Recv(). But why? My command line is as
</span><br>
<span class="quotelev2">&gt;&gt; follows, but this happens if I try openib BTL (instead of TCP) as well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 -hostfile ~/hostfile -mca btl self,tcp ./mpitest
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It must be something *really* trivial, but I am drawing a blank right now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please help!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char** argv)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     int world_size, world_rank, name_len;
</span><br>
<span class="quotelev2">&gt;&gt;     char hostname[MPI_MAX_PROCESSOR_NAME], buf[8];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;world_size);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;world_rank);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Get_processor_name(hostname, &amp;name_len);
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;Hello world from processor %s, rank %d out of %d
</span><br>
<span class="quotelev2">&gt;&gt; processors\n&quot;, hostname, world_rank, world_size);
</span><br>
<span class="quotelev2">&gt;&gt;     if (world_rank == 1)
</span><br>
<span class="quotelev2">&gt;&gt;     {
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Recv(buf, 6, MPI_CHAR, 0, 99, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;%s received %s\n&quot;, hostname, buf);
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     else
</span><br>
<span class="quotelev2">&gt;&gt;     {
</span><br>
<span class="quotelev2">&gt;&gt;     strcpy(buf, &quot;haha!&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Send(buf, 6, MPI_CHAR, 1, 99, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;%s sent %s\n&quot;, hostname, buf);
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;     return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We learn from history that we never learn from history.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28876.php">http://www.open-mpi.org/community/lists/users/2016/04/28876.php</a>
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28877.php">http://www.open-mpi.org/community/lists/users/2016/04/28877.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28878.php">http://www.open-mpi.org/community/lists/users/2016/04/28878.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28879.php">http://www.open-mpi.org/community/lists/users/2016/04/28879.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28880/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28881.php">Brock Palen: "[OMPI users] Building against XLC XLF"</a>
<li><strong>Previous message:</strong> <a href="28879.php">Gilles Gouaillardet: "Re: [OMPI users] Newbie question"</a>
<li><strong>In reply to:</strong> <a href="28879.php">Gilles Gouaillardet: "Re: [OMPI users] Newbie question"</a>
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
