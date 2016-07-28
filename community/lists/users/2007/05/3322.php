<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 25 21:23:56 2007" -->
<!-- isoreceived="20070526012356" -->
<!-- sent="Sat, 26 May 2007 13:23:52 +1200" -->
<!-- isosent="20070526012352" -->
<!-- name="Code Master" -->
<!-- email="cpp.codemaster_at_[hidden]" -->
<!-- subject="Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication" -->
<!-- id="1626092b0705251823v7d2ab16dq70a106139f0d7991_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070519074041.GE14385_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> Code Master (<em>cpp.codemaster_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-25 21:23:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3323.php">smairal_at_[hidden]: "[OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="3321.php">Jeff Squyres: "Re: [OMPI users] settings not read from env"</a>
<li><strong>In reply to:</strong> <a href="3302.php">Adrian Knoth: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>Now I discover that I can actually use tcpdump to capture tcp packets and
<br>
use wireshark (the successor of ethereal) for post-capture analysis, where I
<br>
could use the filter:
<br>
<p>not (tcp.port &lt;= 1024) and not nfs
<br>
<p>to filter non-related traffics
<br>
<p>However is there a better way I can filter the traffic and also does TCP use
<br>
a special range of ports which I can look for?
<br>
<p><p>On 5/19/07, Adrian Knoth &lt;adi_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, May 18, 2007 at 05:53:21PM -0400, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [bind BTL/TCP+OOB to specific port]
</span><br>
<span class="quotelev2">&gt; &gt; As the linux kernel need some time before completely cleaning up the
</span><br>
<span class="quotelev2">&gt; &gt; socket, this approach can lead to many problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Absolutely. My propose cannot be consired useful for productive
</span><br>
<span class="quotelev1">&gt; environments. As you've already mentioned, it wouldn't be possible to
</span><br>
<span class="quotelev1">&gt; run more than one process per node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see two additional approaches: let the BTL component write its
</span><br>
<span class="quotelev1">&gt; listening output to stdout (or a file) and collect these information
</span><br>
<span class="quotelev1">&gt; from every participating node. This is more or less a very reduced
</span><br>
<span class="quotelev1">&gt; version of WANT_PEER_DUMP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The second option would dump the corresponding GPR entries, e.g. on
</span><br>
<span class="quotelev1">&gt; rank 0. I'm thinking of btl_tcp_proc.c:111, somewhere after
</span><br>
<span class="quotelev1">&gt; mca_pml_base_modex_recv(). In line 144, we iterate over each received
</span><br>
<span class="quotelev1">&gt; address. It shouldn't be too hard for &quot;Code Master&quot; to write the
</span><br>
<span class="quotelev1">&gt; ports into a file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev1">&gt; Friedrich-Schiller-Universit&#228;t Jena, Germany
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; private: <a href="http://adi.thur.de">http://adi.thur.de</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3322/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3323.php">smairal_at_[hidden]: "[OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="3321.php">Jeff Squyres: "Re: [OMPI users] settings not read from env"</a>
<li><strong>In reply to:</strong> <a href="3302.php">Adrian Knoth: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
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
