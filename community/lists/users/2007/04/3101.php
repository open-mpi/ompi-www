<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 20 03:04:45 2007" -->
<!-- isoreceived="20070420070445" -->
<!-- sent="Fri, 20 Apr 2007 09:04:40 +0200" -->
<!-- isosent="20070420070440" -->
<!-- name="Harald Servat" -->
<!-- email="harald_at_[hidden]" -->
<!-- subject="Re: [OMPI users] peruse MSG_ARRIVED events lost" -->
<!-- id="46286608.7090102_at_cepba.upc.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ECCBD2CA-0919-41FE-85E5-6D2C9A913950_at_cs.utk.edu" -->
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
<strong>From:</strong> Harald Servat (<em>harald_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-20 03:04:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3102.php">Keith Refson: "[OMPI users] local QP operation err"</a>
<li><strong>Previous message:</strong> <a href="3100.php">Babu Bhai: "Re: [OMPI users] new installation problem"</a>
<li><strong>In reply to:</strong> <a href="3096.php">George Bosilca: "Re: [OMPI users] peruse MSG_ARRIVED events lost"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p><p>Hello George,
<br>
<p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Harald,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I check the PERUSE code which generate the MSG_ARRIVED event. There
</span><br>
<span class="quotelev1">&gt; seems to be no way to miss one of this events if the following
</span><br>
<span class="quotelev1">&gt; conditions are respected:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - the communicator where the message arrive has the MSG_ARRIVED event
</span><br>
<span class="quotelev1">&gt; attached
</span><br>
<span class="quotelev1">&gt; - if this event is active.
</span><br>
<p>&nbsp;&nbsp;I do the COMM register and the activation. In fact, I just followed
<br>
the &quot;MPI PERUSE: An MPI Extension for Revealing Unexposed Implementation
<br>
Information&quot; examples.
<br>
<p><span class="quotelev1">&gt; If you can provide the source code of your example, I'll give it a try.
</span><br>
<p>&nbsp;&nbsp;Sure. I send you the smallest code that reproduces this problem. Run
<br>
it with 4 tasks (although it's quite easy to make it run for  lesser tasks).
<br>
<p>&nbsp;&nbsp;The output varies from run to run. Sometimes (in very rare) I have 3
<br>
MSG_ARRIVED messages, sometimes less.
<br>
&nbsp;&nbsp;Here's a sample:
<br>
<p>BSCIT03:~/tests/mpi-tests/peruse&gt;$HOME/aplic/openmpi/1.2/bin/mpirun -np
<br>
4 ./mpi_wait
<br>
RANK 0: total_msg_arrived = 0
<br>
RANK 1 : MSG_ARRIVED comm = 134517424 buf = 0x0 count = 0 peer = 0 tag =
<br>
1001
<br>
RANK 1: total_msg_arrived = 1
<br>
RANK 2 : MSG_ARRIVED comm = 134517424 buf = 0x0 count = 0 peer = 0 tag =
<br>
1001
<br>
RANK 2: total_msg_arrived = 1
<br>
RANK 3: total_msg_arrived = 0
<br>
<p>&nbsp;&nbsp;I'm running OpenMPI 1.2 on a FreeBSD 6.2 machine with a single processor.
<br>
<p>Thank you!
<br>
<p><span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 19, 2007, at 11:16 AM, Harald Servat wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   I'm interested on gathering MSG_ARRIVED events through the PERUSE API
</span><br>
<span class="quotelev1">&gt; offered by OpenMPI 1.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   I've written an small MPIC C program that performs some communication,
</span><br>
<span class="quotelev1">&gt; and although I receive some MSG_ARRIVED events, however I'm loosing some
</span><br>
<span class="quotelev1">&gt; events because the number of MSG_ARRIVED do not match with the total
</span><br>
<span class="quotelev1">&gt; number of sends (and waitalls).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Do you know if there's any reason that could cause this strange
</span><br>
<span class="quotelev1">&gt; behaviour?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.5 (FreeBSD)
<br>
<p>iD8DBQFGKGYIwMPeuqUCg9wRAmtNAJ0VrQFzgGWMazYEYxabIxJCUMDVdwCfTouJ
<br>
fGVTWgsPpjvX8E5gqFIWjlQ=
<br>
=ZKA9
<br>
-----END PGP SIGNATURE-----
<br>
<p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3101/mpi_wait.c">mpi_wait.c</a>
</ul>
<!-- attachment="mpi_wait.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3102.php">Keith Refson: "[OMPI users] local QP operation err"</a>
<li><strong>Previous message:</strong> <a href="3100.php">Babu Bhai: "Re: [OMPI users] new installation problem"</a>
<li><strong>In reply to:</strong> <a href="3096.php">George Bosilca: "Re: [OMPI users] peruse MSG_ARRIVED events lost"</a>
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
