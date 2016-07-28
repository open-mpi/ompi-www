<?
$subject_val = "Re: [OMPI users] questions to some open problems";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 15 04:48:48 2012" -->
<!-- isoreceived="20121215094848" -->
<!-- sent="Sat, 15 Dec 2012 10:41:52 +0100 (CET)" -->
<!-- isosent="20121215094152" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] questions to some open problems" -->
<!-- id="201212150941.qBF9fq6o023975_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] questions to some open problems" -->
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
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-15 04:41:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20962.php">Jeff Squyres: "Re: [OMPI users] Problems with shared libraries while launching jobs"</a>
<li><strong>Previous message:</strong> <a href="20960.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>Maybe in reply to:</strong> <a href="20949.php">Siegmar Gross: "[OMPI users] questions to some open problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20965.php">Jeff Squyres: "Re: [OMPI users] questions to some open problems"</a>
<li><strong>Reply:</strong> <a href="20965.php">Jeff Squyres: "Re: [OMPI users] questions to some open problems"</a>
<li><strong>Reply:</strong> <a href="20967.php">Ralph Castain: "Re: [OMPI users] questions to some open problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph
<br>
<p><span class="quotelev2">&gt; &gt; some weeks ago (mainly in the beginning of October) I reported
</span><br>
<span class="quotelev2">&gt; &gt; several problems and I would be grateful if you can tell me if
</span><br>
<span class="quotelev2">&gt; &gt; and probably when somebody will try to solve them.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1) I don't get the expected results, when I try to send or scatter
</span><br>
<span class="quotelev2">&gt; &gt;   the columns of a matrix in Java. The received column values have
</span><br>
<span class="quotelev2">&gt; &gt;   nothing to do with the original values, if I use a homogeneous
</span><br>
<span class="quotelev2">&gt; &gt;   environment and the program breaks with &quot;An error occurred in
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Comm_dup&quot; and &quot;MPI_ERR_INTERN: internal error&quot;, if I use
</span><br>
<span class="quotelev2">&gt; &gt;   a heterogeneous environment. I would like to use the Java API.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 2) I don't get the expected result, when I try to scatter an object
</span><br>
<span class="quotelev2">&gt; &gt;   in Java.
</span><br>
<span class="quotelev2">&gt; &gt;   <a href="https://svn.open-mpi.org/trac/ompi/ticket/3351">https://svn.open-mpi.org/trac/ompi/ticket/3351</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nothing has happened on these yet
</span><br>
<p>Do you have an idea when somebody will have time to fix these problems?
<br>
<p><p><span class="quotelev2">&gt; &gt; 3) I still get only a message that all nodes are already filled up
</span><br>
<span class="quotelev2">&gt; &gt;   when I use a &quot;rankfile&quot; and nothing else happens. I would like
</span><br>
<span class="quotelev2">&gt; &gt;   to use a rankfile. You filed a bug fix for it.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe rankfile was fixed, at least on the trunk - not sure if it
</span><br>
<span class="quotelev1">&gt; was moved to 1.7. I assume that's the release you are talking about?
</span><br>
<p>I'm using the trunk for my tests. It didn't work for me because I used
<br>
the rankfile without a hostfile or a hostlist (it is not enough to
<br>
specify the hosts in the rankfile). Everything works fine when I provide
<br>
a &quot;correct&quot; hostfile or hostlist and the binding isn't too compilicated
<br>
(see my last example below).
<br>
<p>My rankfile:
<br>
<p>rank 0=sunpc0 slot=0:0
<br>
rank 1=sunpc1 slot=0:0
<br>
rank 2=sunpc0 slot=1:0
<br>
rank 3=sunpc1 slot=1:0
<br>
<p><p>My hostfile:
<br>
<p>sunpc0 slots=4
<br>
sunpc1 slots=4
<br>
<p><p>It will not work without a hostfile or hostlist.
<br>
<p>sunpc0 mpi-probleme 128 mpiexec -report-bindings -rf rankfile_1.openmpi \
<br>
&nbsp;&nbsp;-np 4 hostname
<br>
------------------------------------------------------------------------
<br>
The rankfile that was used claimed that a host was either not
<br>
allocated or oversubscribed its slots.  Please review your rank-slot
<br>
assignments and your host allocation to ensure a proper match.  Also,
<br>
some systems may require using full hostnames, such as
<br>
&quot;host1.example.com&quot; (instead of just plain &quot;host1&quot;).
<br>
<p>&nbsp;&nbsp;Host: sunpc1
<br>
------------------------------------------------------------------------
<br>
sunpc0 mpi-probleme 129 
<br>
<p><p>I get the expected output, if I add &quot;-hostfile host_sunpc&quot; or
<br>
&quot;-host sunpc0,sunpc1&quot; on the command line.
<br>
<p>sunpc0 mpi-probleme 129 mpiexec -report-bindings -rf rankfile_1.openmpi \
<br>
&nbsp;&nbsp;-np 4 -hostfile host_sunpc hostname
<br>
[sunpc0:06954] MCW rank 0 bound to socket 0[core 0[hwt 0]]: [B/.][./.]
<br>
[sunpc0:06954] MCW rank 2 bound to socket 1[core 2[hwt 0]]: [./.][B/.]
<br>
sunpc0
<br>
sunpc0
<br>
[sunpc1:12583] MCW rank 1 bound to socket 0[core 0[hwt 0]]: [B/.][./.]
<br>
[sunpc1:12583] MCW rank 3 bound to socket 1[core 2[hwt 0]]: [./.][B/.]
<br>
sunpc1
<br>
sunpc1
<br>
sunpc0 mpi-probleme 130 
<br>
<p><p>Furthermore it is necessary that both the rankfile and the hostfile
<br>
contain qualified or unqualified hostnames in the same way. Otherwise
<br>
it will not work as you can see in the following output where my
<br>
hostfile contains a qualified hostname and my rankfile only the hostname
<br>
without domain name.
<br>
<p>sunpc0 mpi-probleme 131 mpiexec -report-bindings -rf rankfile_1.openmpi \
<br>
&nbsp;&nbsp;-np 4 -hostfile host_sunpc_full hostname
<br>
------------------------------------------------------------------------
<br>
The rankfile that was used claimed that a host was either not
<br>
allocated or oversubscribed its slots.  Please review your rank-slot
<br>
assignments and your host allocation to ensure a proper match.  Also,
<br>
some systems may require using full hostnames, such as
<br>
&quot;host1.example.com&quot; (instead of just plain &quot;host1&quot;).
<br>
<p>&nbsp;&nbsp;Host: sunpc1
<br>
------------------------------------------------------------------------
<br>
sunpc0 mpi-probleme 132 
<br>
<p><p>Unfortunately my complicated rankfile still doesn't work, although
<br>
you told me some weeks ago that it is correct.
<br>
<p>rank 0=sunpc0 slot=0:0-1,1:0-1
<br>
rank 1=sunpc1 slot=0:0-1
<br>
rank 2=sunpc1 slot=1:0
<br>
rank 3=sunpc1 slot=1:1
<br>
<p>sunpc1 mpi-probleme 103 mpiexec -report-bindings -rf rankfile -np 4 \
<br>
&nbsp;&nbsp;-hostfile host_sunpc hostname
<br>
sunpc1
<br>
sunpc1
<br>
sunpc1
<br>
[sunpc1:12741] MCW rank 2 bound to socket 1[core 2[hwt 0]]: [./.][B/.]
<br>
[sunpc1:12741] MCW rank 3 bound to socket 1[core 3[hwt 0]]: [./.][./B]
<br>
[sunpc1:12741] MCW rank 1 bound to socket 0[core 0[hwt 0]],
<br>
&nbsp;&nbsp;&nbsp;socket 0[core 1[hwt 0]]: [B/B][./.]
<br>
[sunpc0:07075] MCW rank 0 bound to socket 0[core 0[hwt 0]],
<br>
&nbsp;&nbsp;&nbsp;socket 0[core 1[hwt 0]]: [B/B][./.]
<br>
sunpc0
<br>
sunpc1 mpi-probleme 104 
<br>
<p>The bindings for ranks 1 to 3 are correct, but rank 0 didn't get the
<br>
cores from the second socket.
<br>
<p><p><p><span class="quotelev2">&gt; &gt; 4) I would like to have &quot;-cpus-per-proc&quot;, &quot;-npersocket&quot;, etc for
</span><br>
<span class="quotelev2">&gt; &gt;   every set of machines/applications and not globally for all
</span><br>
<span class="quotelev2">&gt; &gt;   machines/applications if I specify several colon-separated sets
</span><br>
<span class="quotelev2">&gt; &gt;   of machines or applications on the command line. You told me that
</span><br>
<span class="quotelev2">&gt; &gt;   it could be done.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 5) By the way, it seems that the option &quot;-cpus-per-proc&quot; isn't any
</span><br>
<span class="quotelev2">&gt; &gt;   longer supported in openmpi-1.7 and openmpi-1.9. How can I bind a
</span><br>
<span class="quotelev2">&gt; &gt;   multi-threaded process to more than one core in these versions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm afraid I haven't gotten around to working on cpus-per-proc, though
</span><br>
<span class="quotelev1">&gt; I believe npersocket was fixed.
</span><br>
<p>Will you also support &quot;-cpus-per-proc&quot; in openmpi-1.7 and openmpi-1.9?
<br>
At the moment it isn't available.
<br>
<p>sunpc1 mpi-probleme 106 mpiexec -report-bindings -np 4 \
<br>
&nbsp;&nbsp;-host linpc0,linpc1,sunpc0,sunpc1 -cpus-per-proc 4 -map-by core \
<br>
&nbsp;&nbsp;-bind-to core hostname
<br>
mpiexec: Error: unknown option &quot;-p&quot;
<br>
Type 'mpiexec --help' for usage.
<br>
<p><p>sunpc1 mpi-probleme 110 mpiexec --help | grep cpus
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cpus allocated to this job [default: none]
<br>
&nbsp;&nbsp;&nbsp;-use-hwthread-cpus|--use-hwthread-cpus 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Use hardware threads as independent cpus
<br>
<p><p><p><span class="quotelev2">&gt; &gt; I can provide my small programs once more if you need them. Thank
</span><br>
<span class="quotelev2">&gt; &gt; you very much for any answer in advance.
</span><br>
<p>Thank you very much for all your help and time
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20962.php">Jeff Squyres: "Re: [OMPI users] Problems with shared libraries while launching jobs"</a>
<li><strong>Previous message:</strong> <a href="20960.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>Maybe in reply to:</strong> <a href="20949.php">Siegmar Gross: "[OMPI users] questions to some open problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20965.php">Jeff Squyres: "Re: [OMPI users] questions to some open problems"</a>
<li><strong>Reply:</strong> <a href="20965.php">Jeff Squyres: "Re: [OMPI users] questions to some open problems"</a>
<li><strong>Reply:</strong> <a href="20967.php">Ralph Castain: "Re: [OMPI users] questions to some open problems"</a>
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
