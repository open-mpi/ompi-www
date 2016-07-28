<?
$subject_val = "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 24 16:08:24 2009" -->
<!-- isoreceived="20090924200824" -->
<!-- sent="Thu, 24 Sep 2009 13:08:19 -0700 (PDT)" -->
<!-- isosent="20090924200819" -->
<!-- name="Pallab Datta" -->
<!-- email="datta_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless" -->
<!-- id="52024.198.133.185.25.1253822899.squirrel_at_mercury.nsi.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="6B0C4C85-9941-4E61-8467-8A1AF14107C3_at_cisco.com" -->
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
<strong>Date:</strong> 2009-09-24 16:08:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10756.php">Eugene Loh: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>Previous message:</strong> <a href="10754.php">Joshua Bernstein: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>In reply to:</strong> <a href="10753.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10754.php">Joshua Bernstein: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can do it ..please send me the URL..i can rebuild ompi and see what the
<br>
output looks like..
<br>
<p><span class="quotelev1">&gt; Ok, I think we're outta options here :-( -- our debugging output is
</span><br>
<span class="quotelev1">&gt; not sufficient to tell us what is going wrong.  If I make a mercurial
</span><br>
<span class="quotelev1">&gt; repo with some extra debugging output in it, can you check it out and
</span><br>
<span class="quotelev1">&gt; build it?  That way we can run it and add relevant printf's in the
</span><br>
<span class="quotelev1">&gt; Right places to see exactly what is failing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the requirements we need for you to be able to build a
</span><br>
<span class="quotelev1">&gt; developer's copy of Open MPI (if you can do this, I'll send you a
</span><br>
<span class="quotelev1">&gt; specific Mercurial repository URL):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/svn/building.php">http://www.open-mpi.org/svn/building.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 24, 2009, at 1:19 PM, Pallab Datta wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes it came up when i put the verbose mode in i.e. the debug output..
</span><br>
<span class="quotelev2">&gt;&gt; yes i knew its privileged so thats why i explicity asked it to
</span><br>
<span class="quotelev2">&gt;&gt; connect to
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
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10756.php">Eugene Loh: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>Previous message:</strong> <a href="10754.php">Joshua Bernstein: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>In reply to:</strong> <a href="10753.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10754.php">Joshua Bernstein: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
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
