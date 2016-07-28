<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 23 13:53:29 2006" -->
<!-- isoreceived="20061123185329" -->
<!-- sent="Wed, 22 Nov 2006 13:21:16 -0800 (PST)" -->
<!-- isosent="20061122212116" -->
<!-- name="Mostyn Lewis" -->
<!-- email="Mostyn.Lewis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi, mx" -->
<!-- id="Pine.GSO.4.64.0611221320350.20149_at_aragorn.brc.West.Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.53.0611222041520.20476_at_duss0-ast.phyast.dur.ac.uk" -->
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
<strong>From:</strong> Mostyn Lewis (<em>Mostyn.Lewis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-22 16:21:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2221.php">Laurent.POREZ_at_[hidden]: "[OMPI users] spawn on a cluster with 2 Ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="2219.php">Lydia Heck: "Re: [OMPI users] openmpi - mx - solaris and Gadget2"</a>
<li><strong>In reply to:</strong> <a href="2214.php">Lydia Heck: "[OMPI users] openmpi, mx"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe this is &quot;too many open files&quot;.
<br>
<p>ulimit -n some_number
<br>
<p>Regards,
<br>
Mostyn
<br>
<p>On Wed, 22 Nov 2006, Lydia Heck wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have - again - successfully built and installed
</span><br>
<span class="quotelev1">&gt; mx and openmpi and I can run 64 and 128 cpus jobs on a 256 CPU cluster
</span><br>
<span class="quotelev1">&gt; version of openmpi is 1.2b1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; compiler used: studio11
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code is a benchmark b_eff which runs usually fine - I have used extensively
</span><br>
<span class="quotelev1">&gt; it for benchmarking
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I try 192 CPUs I get
</span><br>
<span class="quotelev1">&gt; m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev1">&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev1">&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev1">&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev1">&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev1">&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev1">&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev1">&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev1">&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev1">&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev1">&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev1">&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev1">&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev1">&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev1">&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev1">&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev1">&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev1">&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev1">&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev1">&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev1">&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev1">&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev1">&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev1">&gt; [m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev1">&gt; ...........
</span><br>
<span class="quotelev1">&gt; ..............
</span><br>
<span class="quotelev1">&gt; ..............
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The myrinet ports have been opened and the job is running
</span><br>
<span class="quotelev1">&gt; as one of the nodes shows ....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ps -eaf | grep dph0elh
</span><br>
<span class="quotelev1">&gt; dph0elh  1068     1   0 20:40:00 ??          0:00 /opt/ompi/bin/orted
</span><br>
<span class="quotelev1">&gt; --bootproxy 1 --name 0.0.64 --num_procs 65 --vpid_start 0 -
</span><br>
<span class="quotelev1">&gt;    root  1110  1106   0 20:43:46 pts/4       0:00 grep dph0elh
</span><br>
<span class="quotelev1">&gt; dph0elh  1070  1068   0 20:40:02 ??          0:00 ../b_eff
</span><br>
<span class="quotelev1">&gt; dph0elh  1074  1068   0 20:40:02 ??          0:00 ../b_eff
</span><br>
<span class="quotelev1">&gt; dph0elh  1072  1068   0 20:40:02 ??          0:00 ../b_eff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; any idea ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lydia
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dr E L  Heck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; University of Durham
</span><br>
<span class="quotelev1">&gt; Institute for Computational Cosmology
</span><br>
<span class="quotelev1">&gt; Ogden Centre
</span><br>
<span class="quotelev1">&gt; Department of Physics
</span><br>
<span class="quotelev1">&gt; South Road
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DURHAM, DH1 3LE
</span><br>
<span class="quotelev1">&gt; United Kingdom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; e-mail: lydia.heck_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tel.: + 44 191 - 334 3628
</span><br>
<span class="quotelev1">&gt; Fax.: + 44 191 - 334 3645
</span><br>
<span class="quotelev1">&gt; ___________________________________________
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2221.php">Laurent.POREZ_at_[hidden]: "[OMPI users] spawn on a cluster with 2 Ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="2219.php">Lydia Heck: "Re: [OMPI users] openmpi - mx - solaris and Gadget2"</a>
<li><strong>In reply to:</strong> <a href="2214.php">Lydia Heck: "[OMPI users] openmpi, mx"</a>
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
