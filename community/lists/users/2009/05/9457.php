<?
$subject_val = "Re: [OMPI users] users Digest, Vol 1242, Issue 5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 28 07:23:27 2009" -->
<!-- isoreceived="20090528112327" -->
<!-- sent="Thu, 28 May 2009 07:23:21 -0400" -->
<!-- isosent="20090528112321" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 1242, Issue 5" -->
<!-- id="FCB5091E-B0B8-4F81-BB89-6CA19D95C04C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="845813.9178.qm_at_web31404.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 1242, Issue 5<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-28 07:23:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9458.php">Jeff Squyres: "Re: [OMPI users] Fwd: open mpi ptoblem with LAM previously installed"</a>
<li><strong>Previous message:</strong> <a href="9456.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>In reply to:</strong> <a href="9452.php">Michael Kuklik: "Re: [OMPI users] users Digest, Vol 1242, Issue 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9459.php">Joe Griffin: "Re: [OMPI users] users Digest, Vol 1242, Issue 5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 28, 2009, at 1:04 AM, Michael Kuklik wrote:
<br>
<p><span class="quotelev1">&gt; I don't know why I didn't think about it. It works with the whole  
</span><br>
<span class="quotelev1">&gt; path.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I put the intel env script in user .bash_login file.
</span><br>
<span class="quotelev1">&gt; Do you think I should put the intel env script in the global shell  
</span><br>
<span class="quotelev1">&gt; config file like /etc/profile in order for libtool to see icc?
</span><br>
<p>I think somehow your path is not always getting set properly, such  
<br>
that some shells and/or sub-shells are not getting icc in the path.
<br>
<p>Every site's default shell startup scripts are different; it's quite  
<br>
possible that some sub-shell-startup script is wholly overwriting path  
<br>
such that even though you added icc in your .bash_login, it disappears  
<br>
because something in .bashrc (or later) is completely overwriting the  
<br>
path with a new value.
<br>
<p>Try either moving the sourcing of the intel script to your .bashrc so  
<br>
that it's a per-shell invocation, or finding exactly what is  
<br>
overwriting your path in sub-shells.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9458.php">Jeff Squyres: "Re: [OMPI users] Fwd: open mpi ptoblem with LAM previously installed"</a>
<li><strong>Previous message:</strong> <a href="9456.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>In reply to:</strong> <a href="9452.php">Michael Kuklik: "Re: [OMPI users] users Digest, Vol 1242, Issue 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9459.php">Joe Griffin: "Re: [OMPI users] users Digest, Vol 1242, Issue 5"</a>
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
