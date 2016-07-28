<?
$subject_val = "Re: [OMPI users] questions to some open problems";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 15 11:05:04 2012" -->
<!-- isoreceived="20121215160504" -->
<!-- sent="Sat, 15 Dec 2012 08:04:53 -0800" -->
<!-- isosent="20121215160453" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] questions to some open problems" -->
<!-- id="0541FB23-6372-4333-A205-0E396F4016CA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201212150941.qBF9fq6o023975_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] questions to some open problems<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-15 11:04:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20968.php">Stephan Mohr: "[OMPI users] segfault with one-sided communication and derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="20966.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>In reply to:</strong> <a href="20961.php">Siegmar Gross: "Re: [OMPI users] questions to some open problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...you shouldn't need to specify a hostfile in addition to the rankfile, so something has gotten messed up in the allocator. I'll take a look at it.
<br>
<p>As for cpus-per-proc, I'm hoping to tackle it over the holiday while I take a break from my regular job. Will let you know when fixed.
<br>
<p>Thanks for your patience!
<br>
<p><p>On Dec 15, 2012, at 1:41 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some weeks ago (mainly in the beginning of October) I reported
</span><br>
<span class="quotelev3">&gt;&gt;&gt; several problems and I would be grateful if you can tell me if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and probably when somebody will try to solve them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) I don't get the expected results, when I try to send or scatter
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  the columns of a matrix in Java. The received column values have
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  nothing to do with the original values, if I use a homogeneous
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  environment and the program breaks with &quot;An error occurred in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm_dup&quot; and &quot;MPI_ERR_INTERN: internal error&quot;, if I use
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  a heterogeneous environment. I would like to use the Java API.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) I don't get the expected result, when I try to scatter an object
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  in Java.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  <a href="https://svn.open-mpi.org/trac/ompi/ticket/3351">https://svn.open-mpi.org/trac/ompi/ticket/3351</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Nothing has happened on these yet
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have an idea when somebody will have time to fix these problems?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3) I still get only a message that all nodes are already filled up
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  when I use a &quot;rankfile&quot; and nothing else happens. I would like
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  to use a rankfile. You filed a bug fix for it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I believe rankfile was fixed, at least on the trunk - not sure if it
</span><br>
<span class="quotelev2">&gt;&gt; was moved to 1.7. I assume that's the release you are talking about?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using the trunk for my tests. It didn't work for me because I used
</span><br>
<span class="quotelev1">&gt; the rankfile without a hostfile or a hostlist (it is not enough to
</span><br>
<span class="quotelev1">&gt; specify the hosts in the rankfile). Everything works fine when I provide
</span><br>
<span class="quotelev1">&gt; a &quot;correct&quot; hostfile or hostlist and the binding isn't too compilicated
</span><br>
<span class="quotelev1">&gt; (see my last example below).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My rankfile:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rank 0=sunpc0 slot=0:0
</span><br>
<span class="quotelev1">&gt; rank 1=sunpc1 slot=0:0
</span><br>
<span class="quotelev1">&gt; rank 2=sunpc0 slot=1:0
</span><br>
<span class="quotelev1">&gt; rank 3=sunpc1 slot=1:0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My hostfile:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc0 slots=4
</span><br>
<span class="quotelev1">&gt; sunpc1 slots=4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It will not work without a hostfile or hostlist.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc0 mpi-probleme 128 mpiexec -report-bindings -rf rankfile_1.openmpi \
</span><br>
<span class="quotelev1">&gt;  -np 4 hostname
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The rankfile that was used claimed that a host was either not
</span><br>
<span class="quotelev1">&gt; allocated or oversubscribed its slots.  Please review your rank-slot
</span><br>
<span class="quotelev1">&gt; assignments and your host allocation to ensure a proper match.  Also,
</span><br>
<span class="quotelev1">&gt; some systems may require using full hostnames, such as
</span><br>
<span class="quotelev1">&gt; &quot;host1.example.com&quot; (instead of just plain &quot;host1&quot;).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Host: sunpc1
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; sunpc0 mpi-probleme 129 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the expected output, if I add &quot;-hostfile host_sunpc&quot; or
</span><br>
<span class="quotelev1">&gt; &quot;-host sunpc0,sunpc1&quot; on the command line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc0 mpi-probleme 129 mpiexec -report-bindings -rf rankfile_1.openmpi \
</span><br>
<span class="quotelev1">&gt;  -np 4 -hostfile host_sunpc hostname
</span><br>
<span class="quotelev1">&gt; [sunpc0:06954] MCW rank 0 bound to socket 0[core 0[hwt 0]]: [B/.][./.]
</span><br>
<span class="quotelev1">&gt; [sunpc0:06954] MCW rank 2 bound to socket 1[core 2[hwt 0]]: [./.][B/.]
</span><br>
<span class="quotelev1">&gt; sunpc0
</span><br>
<span class="quotelev1">&gt; sunpc0
</span><br>
<span class="quotelev1">&gt; [sunpc1:12583] MCW rank 1 bound to socket 0[core 0[hwt 0]]: [B/.][./.]
</span><br>
<span class="quotelev1">&gt; [sunpc1:12583] MCW rank 3 bound to socket 1[core 2[hwt 0]]: [./.][B/.]
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt; sunpc0 mpi-probleme 130 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Furthermore it is necessary that both the rankfile and the hostfile
</span><br>
<span class="quotelev1">&gt; contain qualified or unqualified hostnames in the same way. Otherwise
</span><br>
<span class="quotelev1">&gt; it will not work as you can see in the following output where my
</span><br>
<span class="quotelev1">&gt; hostfile contains a qualified hostname and my rankfile only the hostname
</span><br>
<span class="quotelev1">&gt; without domain name.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc0 mpi-probleme 131 mpiexec -report-bindings -rf rankfile_1.openmpi \
</span><br>
<span class="quotelev1">&gt;  -np 4 -hostfile host_sunpc_full hostname
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The rankfile that was used claimed that a host was either not
</span><br>
<span class="quotelev1">&gt; allocated or oversubscribed its slots.  Please review your rank-slot
</span><br>
<span class="quotelev1">&gt; assignments and your host allocation to ensure a proper match.  Also,
</span><br>
<span class="quotelev1">&gt; some systems may require using full hostnames, such as
</span><br>
<span class="quotelev1">&gt; &quot;host1.example.com&quot; (instead of just plain &quot;host1&quot;).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Host: sunpc1
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; sunpc0 mpi-probleme 132 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately my complicated rankfile still doesn't work, although
</span><br>
<span class="quotelev1">&gt; you told me some weeks ago that it is correct.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rank 0=sunpc0 slot=0:0-1,1:0-1
</span><br>
<span class="quotelev1">&gt; rank 1=sunpc1 slot=0:0-1
</span><br>
<span class="quotelev1">&gt; rank 2=sunpc1 slot=1:0
</span><br>
<span class="quotelev1">&gt; rank 3=sunpc1 slot=1:1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc1 mpi-probleme 103 mpiexec -report-bindings -rf rankfile -np 4 \
</span><br>
<span class="quotelev1">&gt;  -hostfile host_sunpc hostname
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt; [sunpc1:12741] MCW rank 2 bound to socket 1[core 2[hwt 0]]: [./.][B/.]
</span><br>
<span class="quotelev1">&gt; [sunpc1:12741] MCW rank 3 bound to socket 1[core 3[hwt 0]]: [./.][./B]
</span><br>
<span class="quotelev1">&gt; [sunpc1:12741] MCW rank 1 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev1">&gt;   socket 0[core 1[hwt 0]]: [B/B][./.]
</span><br>
<span class="quotelev1">&gt; [sunpc0:07075] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev1">&gt;   socket 0[core 1[hwt 0]]: [B/B][./.]
</span><br>
<span class="quotelev1">&gt; sunpc0
</span><br>
<span class="quotelev1">&gt; sunpc1 mpi-probleme 104 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The bindings for ranks 1 to 3 are correct, but rank 0 didn't get the
</span><br>
<span class="quotelev1">&gt; cores from the second socket.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4) I would like to have &quot;-cpus-per-proc&quot;, &quot;-npersocket&quot;, etc for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  every set of machines/applications and not globally for all
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  machines/applications if I specify several colon-separated sets
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  of machines or applications on the command line. You told me that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  it could be done.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5) By the way, it seems that the option &quot;-cpus-per-proc&quot; isn't any
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  longer supported in openmpi-1.7 and openmpi-1.9. How can I bind a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  multi-threaded process to more than one core in these versions?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm afraid I haven't gotten around to working on cpus-per-proc, though
</span><br>
<span class="quotelev2">&gt;&gt; I believe npersocket was fixed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Will you also support &quot;-cpus-per-proc&quot; in openmpi-1.7 and openmpi-1.9?
</span><br>
<span class="quotelev1">&gt; At the moment it isn't available.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc1 mpi-probleme 106 mpiexec -report-bindings -np 4 \
</span><br>
<span class="quotelev1">&gt;  -host linpc0,linpc1,sunpc0,sunpc1 -cpus-per-proc 4 -map-by core \
</span><br>
<span class="quotelev1">&gt;  -bind-to core hostname
</span><br>
<span class="quotelev1">&gt; mpiexec: Error: unknown option &quot;-p&quot;
</span><br>
<span class="quotelev1">&gt; Type 'mpiexec --help' for usage.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc1 mpi-probleme 110 mpiexec --help | grep cpus
</span><br>
<span class="quotelev1">&gt;                         cpus allocated to this job [default: none]
</span><br>
<span class="quotelev1">&gt;   -use-hwthread-cpus|--use-hwthread-cpus 
</span><br>
<span class="quotelev1">&gt;                         Use hardware threads as independent cpus
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can provide my small programs once more if you need them. Thank
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you very much for any answer in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much for all your help and time
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20968.php">Stephan Mohr: "[OMPI users] segfault with one-sided communication and derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="20966.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>In reply to:</strong> <a href="20961.php">Siegmar Gross: "Re: [OMPI users] questions to some open problems"</a>
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
