<?
$subject_val = "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 24 16:31:22 2009" -->
<!-- isoreceived="20090924203122" -->
<!-- sent="Thu, 24 Sep 2009 13:31:18 -0700 (PDT)" -->
<!-- isosent="20090924203118" -->
<!-- name="Pallab Datta" -->
<!-- email="datta_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless" -->
<!-- id="52961.198.133.185.25.1253824278.squirrel_at_mercury.nsi.edu" -->
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
<strong>Date:</strong> 2009-09-24 16:31:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10758.php">Greg Fischer: "[OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
<li><strong>Previous message:</strong> <a href="10756.php">Eugene Loh: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>In reply to:</strong> <a href="10754.php">Joshua Bernstein: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10760.php">Pallab Datta: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I did try to ping using the hostname but i can't..can that be an issue..??
<br>
both of them are sitting on the same subnet !!! let me check if i can
<br>
resolve this thing..
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
<li><strong>Next message:</strong> <a href="10758.php">Greg Fischer: "[OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
<li><strong>Previous message:</strong> <a href="10756.php">Eugene Loh: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>In reply to:</strong> <a href="10754.php">Joshua Bernstein: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10760.php">Pallab Datta: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
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
