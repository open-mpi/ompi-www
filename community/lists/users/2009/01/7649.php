<?
$subject_val = "Re: [OMPI users] mpirun hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  6 15:11:34 2009" -->
<!-- isoreceived="20090106201134" -->
<!-- sent="Tue, 6 Jan 2009 21:11:29 +0100" -->
<!-- isosent="20090106201129" -->
<!-- name="Maciej Kazulak" -->
<!-- email="kazulakm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hangs" -->
<!-- id="492f5c190901061211l77a2e171w6097a70aa0068e49_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="C37197F8-D12C-47F6-87B6-C2BE8B87B0C5_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun hangs<br>
<strong>From:</strong> Maciej Kazulak (<em>kazulakm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-06 15:11:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7650.php">Adam C Powell IV: "Re: [OMPI users] Open MPI and mpi-defaults"</a>
<li><strong>Previous message:</strong> <a href="7648.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>In reply to:</strong> <a href="7644.php">Ralph Castain: "Re: [OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2009/1/6 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 5, 2009, at 5:19 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Jan 5, 2009, at 5:01 PM, Maciej Kazulak wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Interesting though. I thought in such a simple scenario shared memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would be used for IPC (or whatever's fastest) . But nope. Even with one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process still it wants to use TCP/IP to communicate between mpirun and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orted.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Correct -- we only have TCP enabled for MPI process &lt;--&gt; orted
</span><br>
<span class="quotelev2">&gt;&gt; communication.  There are several reasons why; the simplest is that this is
</span><br>
<span class="quotelev2">&gt;&gt; our &quot;out of band&quot; channel and it is only used to setup and tear down the
</span><br>
<span class="quotelev2">&gt;&gt; job.  As such, we don't care that it's a little slower than other possible
</span><br>
<span class="quotelev2">&gt;&gt; channels (such as sm).  MPI traffic will use shmem, OpenFabrics-based
</span><br>
<span class="quotelev2">&gt;&gt; networks, Myrinet, ...etc.  But not MPI process &lt;--&gt; orted communication.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  What's even more surprising to me it won't use loopback for that. Hence
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my maybe a little bit over-restrictive iptables rules were the problem. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allowed traffic from 127.0.0.1 to 127.0.0.1 on lo but not from &lt;eth0_addr&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to &lt;eth0_addr&gt; on eth0 and both processes ended up waiting for IO.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can I somehow configure it to use something other than TCP/IP here? Or at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; least switch it to loopback?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't remember how it works in the v1.2 series offhand; I think it's
</span><br>
<span class="quotelev2">&gt;&gt; different in the v1.3 series (where all MPI processes *only* talk to the
</span><br>
<span class="quotelev2">&gt;&gt; local orted, vs. MPI processes making direct TCP connections back to mpirun
</span><br>
<span class="quotelev2">&gt;&gt; and any other MPI process with which it needs to bootstrap other
</span><br>
<span class="quotelev2">&gt;&gt; communication channels).  I'm *guessing* that the MPI process &lt;--&gt; orted
</span><br>
<span class="quotelev2">&gt;&gt; communication either uses a named unix socket or TCP loopback.  Ralph -- can
</span><br>
<span class="quotelev2">&gt;&gt; you explain the details?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the 1.2 series, mpirun spawns a local orted to handle all local procs.
</span><br>
<span class="quotelev1">&gt; The code that discovers local interfaces specifically ignores any interfaces
</span><br>
<span class="quotelev1">&gt; that are not up or are just local loopbacks. My guess is that the person who
</span><br>
<span class="quotelev1">&gt; wrote that code long, long ago was assuming that the sole purpose was to
</span><br>
<span class="quotelev1">&gt; talk to remote nodes, not to loop back onto yourself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I imagine it could be changed to include loopback, but I would first need
</span><br>
<span class="quotelev1">&gt; to work with other developers to ensure there are no unexpected consequences
</span><br>
<span class="quotelev1">&gt; in doing so. Since no TCP interface is found, mpirun fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the 1.3 series, mpirun handles the local procs itself. Thus, this issue
</span><br>
<span class="quotelev1">&gt; does not appear and things run just fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<p>Thanks for the answer. Think i'll just update my firewall rules for now and
<br>
wait for a 1.3 release.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7649/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7650.php">Adam C Powell IV: "Re: [OMPI users] Open MPI and mpi-defaults"</a>
<li><strong>Previous message:</strong> <a href="7648.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>In reply to:</strong> <a href="7644.php">Ralph Castain: "Re: [OMPI users] mpirun hangs"</a>
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
