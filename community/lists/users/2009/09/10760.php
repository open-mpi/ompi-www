<?
$subject_val = "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 24 18:28:31 2009" -->
<!-- isoreceived="20090924222831" -->
<!-- sent="Thu, 24 Sep 2009 15:28:27 -0700 (PDT)" -->
<!-- isosent="20090924222827" -->
<!-- name="Pallab Datta" -->
<!-- email="datta_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless" -->
<!-- id="53877.198.133.185.25.1253831307.squirrel_at_mercury.nsi.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4ABBCBAB.6030406_at_penguincomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless<br>
<strong>From:</strong> Pallab Datta (<em>datta_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-24 18:28:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10761.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Previous message:</strong> <a href="10759.php">Eugene Loh: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
<li><strong>In reply to:</strong> <a href="10754.php">Joshua Bernstein: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I resolved the name resolution issue and re-ran it but it still hangs at
<br>
the send-receive calls.
<br>
I ran it using:
<br>
<p><p>&nbsp;/usr/local/bin/mpirun --mca btl_tcp_port_min_v4 36900 -mca
<br>
btl_tcp_port_range_v4 32 --mca btl_base_verbose 30 --mca
<br>
OMPI_mca_mpi_preconnect_all 1 -np 2 -hetero -H localhost,10.11.14.205
<br>
/tmp/hello
<br>
<p><span class="quotelev1">&gt; Hmm,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	On another angle, could this be a name resolution issue? Perhaps
</span><br>
<span class="quotelev1">&gt; apex-backpack
</span><br>
<span class="quotelev1">&gt; isn't able to resolve fuji.local and visa versa. Can you ping between the
</span><br>
<span class="quotelev1">&gt; two of
</span><br>
<span class="quotelev1">&gt; them using their hostnames rather then their IPs?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Joshua Bernstein
</span><br>
<span class="quotelev1">&gt; Senior Software Engineer
</span><br>
<span class="quotelev1">&gt; Penguin Computing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pallab Datta wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Yes it came up when i put the verbose mode in i.e. the debug output..
</span><br>
<span class="quotelev2">&gt;&gt; yes i knew its privileged so thats why i explicity asked it to connect
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; a higher port but still it blocks there..:(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 24, 2009, at 12:54 PM, Pallab Datta wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes I had tried that initially it (apex-backpack) was trying to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; connect
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the Mac (10.11.14.203) at port number 4 which is too low. So that's
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; why I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; made the port range higher..
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Port 4?  OMPI should never connect at port 4; it's privileged.  Was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that in the debug output?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="10761.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Previous message:</strong> <a href="10759.php">Eugene Loh: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
<li><strong>In reply to:</strong> <a href="10754.php">Joshua Bernstein: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
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
