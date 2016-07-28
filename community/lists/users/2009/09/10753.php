<?
$subject_val = "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 24 15:26:14 2009" -->
<!-- isoreceived="20090924192614" -->
<!-- sent="Thu, 24 Sep 2009 15:25:42 -0400" -->
<!-- isosent="20090924192542" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless" -->
<!-- id="6B0C4C85-9941-4E61-8467-8A1AF14107C3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="50701.198.133.185.25.1253812780.squirrel_at_mercury.nsi.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-24 15:25:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10754.php">Joshua Bernstein: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Previous message:</strong> <a href="10752.php">Pallab Datta: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>In reply to:</strong> <a href="10752.php">Pallab Datta: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10755.php">Pallab Datta: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Reply:</strong> <a href="10755.php">Pallab Datta: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, I think we're outta options here :-( -- our debugging output is  
<br>
not sufficient to tell us what is going wrong.  If I make a mercurial  
<br>
repo with some extra debugging output in it, can you check it out and  
<br>
build it?  That way we can run it and add relevant printf's in the  
<br>
Right places to see exactly what is failing.
<br>
<p>Here's the requirements we need for you to be able to build a  
<br>
developer's copy of Open MPI (if you can do this, I'll send you a  
<br>
specific Mercurial repository URL):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/svn/building.php">http://www.open-mpi.org/svn/building.php</a>
<br>
<p><p><p>On Sep 24, 2009, at 1:19 PM, Pallab Datta wrote:
<br>
<p><span class="quotelev1">&gt; Yes it came up when i put the verbose mode in i.e. the debug output..
</span><br>
<span class="quotelev1">&gt; yes i knew its privileged so thats why i explicity asked it to  
</span><br>
<span class="quotelev1">&gt; connect to
</span><br>
<span class="quotelev1">&gt; a higher port but still it blocks there..:(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 24, 2009, at 12:54 PM, Pallab Datta wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes I had tried that initially it (apex-backpack) was trying to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the Mac (10.11.14.203) at port number 4 which is too low. So that's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; why I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; made the port range higher..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Port 4?  OMPI should never connect at port 4; it's privileged.  Was
</span><br>
<span class="quotelev2">&gt;&gt; that in the debug output?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10754.php">Joshua Bernstein: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Previous message:</strong> <a href="10752.php">Pallab Datta: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>In reply to:</strong> <a href="10752.php">Pallab Datta: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10755.php">Pallab Datta: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Reply:</strong> <a href="10755.php">Pallab Datta: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
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
