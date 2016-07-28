<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May  3 05:02:35 2007" -->
<!-- isoreceived="20070503090235" -->
<!-- sent="Thu, 03 May 2007 11:02:26 +0200" -->
<!-- isosent="20070503090226" -->
<!-- name="Harald Servat" -->
<!-- email="harald_at_[hidden]" -->
<!-- subject="Re: [OMPI users] issues with peruse MSG_ARRIVED events" -->
<!-- id="4639A522.5090305_at_cepba.upc.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4638B023.70402_at_cepba.upc.edu" -->
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
<strong>Date:</strong> 2007-05-03 05:02:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3189.php">Chaloupka Zdenìk: "[OMPI users] MPI compiling error"</a>
<li><strong>Previous message:</strong> <a href="3187.php">Bert Wesarg: "Re: [OMPI users] Call to MPI_Init affects errno"</a>
<li><strong>In reply to:</strong> <a href="3183.php">Harald Servat: "[OMPI users] issues with peruse MSG_ARRIVED events"</a>
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
<p>Hello,
<br>
<p>&nbsp;&nbsp;I forgot to attach the sample code.
<br>
<p>Regards,
<br>
<p>Harald Servat wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   I'm using the PERUSE API from OpenMPI in order to know when messages
</span><br>
<span class="quotelev1">&gt; arrive. I've executed some simple tests in three different machines
</span><br>
<span class="quotelev1">&gt; (FreeBSD/x86 1cpu, SGI Altix/IA64 128cpus, Linux/ppc 4cpus) always using
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.2 and I see that sometimes I'm loosing such MSG_ARRIVED events.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   For example, from the 20 runs that I do, 5 at least, do not show that
</span><br>
<span class="quotelev1">&gt; every task but the root prints &quot;total_msg_arrived = 1&quot;, instead they
</span><br>
<span class="quotelev1">&gt; print some &quot;total_msg_arrived = 0&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George Bosilca told me that this never should happen due to the code
</span><br>
<span class="quotelev1">&gt; implementation, but it's happening to me. So I'm wondering why is this
</span><br>
<span class="quotelev1">&gt; happening in all the machines. Any idea?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   I run the configure just with the --prefix option and with
</span><br>
<span class="quotelev1">&gt; --enable-peruse. Shall I add any other option?
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
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.5 (FreeBSD)
<br>
<p>iD8DBQFGOaUiwMPeuqUCg9wRAkfaAJ9VMe/xVlv5/ejMaGUrQy4BJP2VKQCcCLWQ
<br>
QG06jJn0qe9SRhYo7hiTzhc=
<br>
=dVPw
<br>
-----END PGP SIGNATURE-----
<br>
<p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3188/mpi_wait.c">mpi_wait.c</a>
</ul>
<!-- attachment="mpi_wait.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3189.php">Chaloupka Zdenìk: "[OMPI users] MPI compiling error"</a>
<li><strong>Previous message:</strong> <a href="3187.php">Bert Wesarg: "Re: [OMPI users] Call to MPI_Init affects errno"</a>
<li><strong>In reply to:</strong> <a href="3183.php">Harald Servat: "[OMPI users] issues with peruse MSG_ARRIVED events"</a>
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
