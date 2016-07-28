<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Apr  8 13:42:39 2006" -->
<!-- isoreceived="20060408174239" -->
<!-- sent="Sat, 08 Apr 2006 13:42:02 -0400" -->
<!-- isosent="20060408174202" -->
<!-- name="Prakash Velayutham" -->
<!-- email="Prakash.Velayutham_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and Torque error" -->
<!-- id="s437bdcc.070_at_n6mcgw16.cchmc.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] Open MPI and Torque error" -->
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
<strong>From:</strong> Prakash Velayutham (<em>Prakash.Velayutham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-08 13:42:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0981.php">Prakash Velayutham: "Re: [OMPI users] Open MPI and Torque error"</a>
<li><strong>Previous message:</strong> <a href="0979.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] job running question"</a>
<li><strong>Maybe in reply to:</strong> <a href="0949.php">Prakash Velayutham: "[OMPI users] Open MPI and Torque error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0981.php">Prakash Velayutham: "Re: [OMPI users] Open MPI and Torque error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p><span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden] 04/08/06 7:10 AM &gt;&gt;&gt;
</span><br>
I am also curious as to why this would not work -- I was not under the
<br>
impression that tm_init() would fail from a non mother-superior node...?
<br>
<p>What others say is that it will fail this way inside a Open MPI job as
<br>
Open MPI's RTE is taking the only TM connection available. But the
<br>
strange thing is that it works from Mother Superior without Garrick's
<br>
patch (actually, regardless of the patch, the behaviour is the same, but
<br>
I have not rigorously tested the patch in itself, so cannot comment
<br>
about that), which I think should have failed according to the above
<br>
contention.
<br>
<p>FWIW: It has been our experience with both Torque and the various
<br>
flavors of PBS that you can repeatedly call tm_init() and tm_finalize()
<br>
within a single process, so I would be surprised if that was the issue.
<br>
Indeed, I'd have to double check, but I'm pretty sure that our MPI
<br>
processes do not call tm_init() (I believe that only mpirun does).
<br>
<p>But I am running my code using mpirun, so is this expected behaviour? I
<br>
am attaching my simple code below:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;tm.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>extern char **environ;
<br>
<p>void do_check(int val, char *msg) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (TM_SUCCESS != val) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;ret is %d instead of %d: %s\n&quot;, val, TM_SUCCESS,
<br>
msg);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
<p>main (int argc, char *argv[]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int size, rank, ret, err, numnodes, local_err;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char **input;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;input[0] = &quot;/bin/echo&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;input[1] = &quot;Hello There&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct tm_roots task_root;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tm_node_id *nodelist;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tm_event_t event;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tm_task_id task_id;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char hostname[64];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char
<br>
buf[]=&quot;11000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000&quot;;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gethostname(hostname, 64);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = MPI_Init (&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ret) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;Error: %d\n&quot;, ret);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return (1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = MPI_Comm_size (MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ret) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Error: %d\n&quot;, ret);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return (1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ret) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Error: %d\n&quot;, ret);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return (1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;First Hostname: %s node %d out of %d\n&quot;, hostname,
<br>
rank, size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (size%2 &amp;&amp; rank==size-1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Sitting out\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank%2==0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(buf, strlen(buf), MPI_BYTE, rank+1, 11,
<br>
MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(buf, sizeof(buf), MPI_BYTE, rank-1, 11,
<br>
MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;Second Hostname: %s node %d out of %d\n&quot;, hostname,
<br>
rank, size);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = tm_init(NULL, &amp;task_root);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do_check(ret, &quot;tm_init failed&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;Special Hostname: %s node %d out of %d\n&quot;,
<br>
hostname, rank, size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;task_id = 0xdeadbeef;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;event = 0xdeadbeef;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%s\t%s&quot;, input[0], input[1]);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tm_finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize ();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return (0);
<br>
}
<br>
<p>And the error I am getting is:
<br>
<p>First Hostname: wins05 node 0 out of 4
<br>
First Hostname: wins03 node 1 out of 4
<br>
First Hostname: wins02 node 2 out of 4
<br>
First Hostname: wins01 node 3 out of 4
<br>
Second Hostname: wins05 node 0 out of 4
<br>
Second Hostname: wins02 node 2 out of 4
<br>
Second Hostname: wins03 node 1 out of 4
<br>
Second Hostname: wins01 node 3 out of 4
<br>
tm_poll: protocol number dis error 11
<br>
ret is 17002 instead of 0: tm_init failed
<br>
3 processes killed (possibly by Open MPI)
<br>
<p>I am using Torque-2.0.0p7 and Open MPI-1.0.1.
<br>
<p>Prakash: are you running an unmodified version of Torque 2.0.0p7?
<br>
<p>I will test an unmodified version of 2.0.0p8 right now and let you know,
<br>
but I am positive that is not the issue.
<br>
<p><p>TIA,
<br>
Prakash
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Prakash Velayutham
</span><br>
<span class="quotelev1">&gt; Sent: Friday, April 07, 2006 10:13 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Cc: Pak.Lui_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open MPI and Torque error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pak Lui wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Prakash,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; tm_poll: protocol number dis error 11
</span><br>
<span class="quotelev2">&gt; &gt; ret is 17002 instead of 0: tm_init failed
</span><br>
<span class="quotelev2">&gt; &gt; 3 processes killed (possibly by Open MPI)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I encountered similar problem with OpenPBS before, which 
</span><br>
<span class="quotelev1">&gt; also uses the 
</span><br>
<span class="quotelev2">&gt; &gt; TM interfaces. It returns a TM_ENOTCONNECTED (17002) when I 
</span><br>
<span class="quotelev1">&gt; tried to 
</span><br>
<span class="quotelev2">&gt; &gt; call tm_init for the second time (which in turns call tm_poll and 
</span><br>
<span class="quotelev2">&gt; &gt; returned that errno).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think what you did to start tm_init from another node and 
</span><br>
<span class="quotelev1">&gt; connect to 
</span><br>
<span class="quotelev2">&gt; &gt; another mom which I do not think is allowed. The TM module 
</span><br>
<span class="quotelev1">&gt; in OpenMPI 
</span><br>
<span class="quotelev2">&gt; &gt; already called tm_init once. I am curious to know about the 
</span><br>
<span class="quotelev1">&gt; reason that 
</span><br>
<span class="quotelev2">&gt; &gt; you need to call tm_init again?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If you are curious to know about the implementation for 
</span><br>
<span class="quotelev1">&gt; PBS, you can 
</span><br>
<span class="quotelev2">&gt; &gt; download the source from openpbs.org. OpenPBS source: 
</span><br>
<span class="quotelev2">&gt; &gt; v2.3.16/src/lib/Libifl/tm.c
</span><br>
<span class="quotelev1">&gt; I am interested in getting this to work as I am working on 
</span><br>
<span class="quotelev1">&gt; implementing 
</span><br>
<span class="quotelev1">&gt; support for dynamic scheduling in Torque. I want any node in an MPI-2 
</span><br>
<span class="quotelev1">&gt; job (basically Open MPI implementation) to be able to request the 
</span><br>
<span class="quotelev1">&gt; Torque/PBS server for more nodes. I am doing a little study in that 
</span><br>
<span class="quotelev1">&gt; right now. Instead of nodes talking directly to the server, I 
</span><br>
<span class="quotelev1">&gt; want them 
</span><br>
<span class="quotelev1">&gt; to be able to talk to Mother Superior and MS instead will talk to the 
</span><br>
<span class="quotelev1">&gt; Server.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you please explain why this does not work now? And why it works 
</span><br>
<span class="quotelev1">&gt; when I do the tm_init from MS, and only does not work from 
</span><br>
<span class="quotelev1">&gt; any other MOM?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Prakash
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0981.php">Prakash Velayutham: "Re: [OMPI users] Open MPI and Torque error"</a>
<li><strong>Previous message:</strong> <a href="0979.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] job running question"</a>
<li><strong>Maybe in reply to:</strong> <a href="0949.php">Prakash Velayutham: "[OMPI users] Open MPI and Torque error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0981.php">Prakash Velayutham: "Re: [OMPI users] Open MPI and Torque error"</a>
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
