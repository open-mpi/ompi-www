<?
$subject_val = "Re: [OMPI users] unknown af_family recieved errors...";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 28 07:43:03 2012" -->
<!-- isoreceived="20120128124303" -->
<!-- sent="Sat, 28 Jan 2012 07:42:56 -0500" -->
<!-- isosent="20120128124256" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] unknown af_family recieved errors..." -->
<!-- id="C45B8A2E-3DC7-4DDA-954C-1398D425AB9C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1326766291.85726.YahooMailNeo_at_web113101.mail.gq1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] unknown af_family recieved errors...<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-28 07:42:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18310.php">Jeff Squyres: "Re: [OMPI users] Running osu benchmark test suite with open-mpi"</a>
<li><strong>Previous message:</strong> <a href="18308.php">Jeff Squyres: "Re: [OMPI users] SIGSEGV on MPI_Test"</a>
<li><strong>In reply to:</strong> <a href="18177.php">Hamilton Fischer: "[OMPI users] unknown af_family recieved errors..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(sorry for the delay in this reply; this mail came while I was at the MPI Forum meeting. Travel always makes my disastrous INBOX even worse...)
<br>
<p>As a bit of explanation, I can surmise part of what is happening here.
<br>
<p>When you run on only one machine, the TCP communications plugin (i.e., the &quot;BTL&quot;) is not used -- only the shared memory (sm) BTL is used.  Hence, you don't see the warnings.  That being said, you could force the TCP BTL to be used instead of the sm BTL by using:
<br>
<p>&nbsp;&nbsp;mpirun --mca btl tcp,self -np 2 my_test_program
<br>
<p>When you run across multiple nodes, the TCP BTL is used by default.  And therefore these warnings come up.
<br>
<p>These warnings refer to IP interfaces that Open MPI found that it doesn't recognize.  What is the output of ifconfig on your machine?
<br>
<p><p>On Jan 16, 2012, at 9:11 PM, Hamilton Fischer wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Forwarded Message -----
</span><br>
<span class="quotelev1">&gt; From: Hamilton Fischer &lt;fischerhamilton_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: &quot;user_at_[hidden]&quot; &lt;user_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Sent: Monday, January 16, 2012 9:09 PM
</span><br>
<span class="quotelev1">&gt; Subject: unknown af_family recieved errors...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi, I'm having odd issues with my &quot;cluster&quot;, I guess. This very simple example works on one machine, but it gives a load of errors and hangs afterwards when I try to make it work on parrallelize it across the network.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int rank, size;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   if (rank == 0)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;       int i;
</span><br>
<span class="quotelev1">&gt;       for(i=1; i &lt; size; ++i)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;       int s=1;
</span><br>
<span class="quotelev1">&gt;       MPI_Send(&amp;s, 1, MPI_INT, i, 1, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;   else
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;       int r;
</span><br>
<span class="quotelev1">&gt;       MPI_Recv(&amp;r, 1, MPI_INT, 0, 1, MPI_COMM_WORLD, NULL);
</span><br>
<span class="quotelev1">&gt;       printf(&quot;%d got a %d\n&quot;, rank, r);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I do `mpirun -np 3 a.out', where a.out is the executable, I get obvious output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1 got a 1
</span><br>
<span class="quotelev1">&gt; 2 got a 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, let's say I go on the network. I use `mpirun --hostfile ../combin_host a.out', where my hostfile is simply:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Hostfile
</span><br>
<span class="quotelev1">&gt; angryrock_at_192.168.0.1 slots=4
</span><br>
<span class="quotelev1">&gt; # Hostfile
</span><br>
<span class="quotelev1">&gt; user_at_192.168.0.102 slots=2
</span><br>
<span class="quotelev1">&gt; user_at_192.168.0.103 slots=2
</span><br>
<span class="quotelev1">&gt; user_at_192.168.0.104 slots=2
</span><br>
<span class="quotelev1">&gt; user_at_192.168.0.105 slots=2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get this...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [localhost:04756] mca_btl_tcp_proc: unknown af_family received: 1
</span><br>
<span class="quotelev1">&gt; [localhost:04756] unknown address family for tcp: 0
</span><br>
<span class="quotelev1">&gt; [localhost:04756] mca_btl_tcp_proc: unknown af_family received: 1
</span><br>
<span class="quotelev1">&gt; [localhost:04756] unknown address family for tcp: 0
</span><br>
<span class="quotelev1">&gt; [localhost:04610] mca_btl_tcp_proc: unknown af_family received: 1
</span><br>
<span class="quotelev1">&gt; [localhost:04610] unknown address family for tcp: 0
</span><br>
<span class="quotelev1">&gt; [localhost:04048] mca_btl_tcp_proc: unknown af_family received: 1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; [localhost:04123] unknown address family for tcp: 0
</span><br>
<span class="quotelev1">&gt; 1 got a 1
</span><br>
<span class="quotelev1">&gt; 2 got a 1
</span><br>
<span class="quotelev1">&gt; 3 got a 1
</span><br>
<span class="quotelev1">&gt; ^Cmpirun: killing job...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The ellipsis encompases a few lines of the same thing probably for each host. The ending part no doubt is a.out executing on my machine. As is obvious, at the end, I have to kill it because it hangs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help as to what my issue might be? It obviously is an installation issue...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; noobermin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18310.php">Jeff Squyres: "Re: [OMPI users] Running osu benchmark test suite with open-mpi"</a>
<li><strong>Previous message:</strong> <a href="18308.php">Jeff Squyres: "Re: [OMPI users] SIGSEGV on MPI_Test"</a>
<li><strong>In reply to:</strong> <a href="18177.php">Hamilton Fischer: "[OMPI users] unknown af_family recieved errors..."</a>
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
