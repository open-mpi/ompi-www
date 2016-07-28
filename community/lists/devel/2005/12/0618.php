<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec 13 16:48:22 2005" -->
<!-- isoreceived="20051213214822" -->
<!-- sent="Tue, 13 Dec 2005 16:48:12 -0500" -->
<!-- isosent="20051213214812" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  rsh and fork pls components" -->
<!-- id="CE5905A6-EAD6-4436-935D-381769BD8272_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7.0.0.16.2.20051213144326.02591178_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-13 16:48:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0619.php">Jeff Squyres: "Re:  rsh and fork pls components"</a>
<li><strong>Previous message:</strong> <a href="0617.php">Ralph H. Castain: "Re:  rsh and fork pls components"</a>
<li><strong>In reply to:</strong> <a href="0617.php">Ralph H. Castain: "Re:  rsh and fork pls components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0619.php">Jeff Squyres: "Re:  rsh and fork pls components"</a>
<li><strong>Reply:</strong> <a href="0619.php">Jeff Squyres: "Re:  rsh and fork pls components"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 13, 2005, at 4:45 PM, Ralph H. Castain wrote:
<br>
<p><span class="quotelev1">&gt; No problem with me - seems straightforward and resolves some  
</span><br>
<span class="quotelev1">&gt; confusion.
</span><br>
<p>Cool.
<br>
<p><span class="quotelev1">&gt; On the orted check for the fork pls, you will find that there is a
</span><br>
<span class="quotelev1">&gt; flag in the process info structure that indicates &quot;I am a daemon&quot;.
</span><br>
<span class="quotelev1">&gt; You may just need to check that flag - gets set very early and so
</span><br>
<span class="quotelev1">&gt; should be available in time for this purpose.
</span><br>
<p>I can't do that because that means that that symbol will need to be  
<br>
linked into the rsh pls component -- that symbol only exists in the  
<br>
orted, so this would be problematic.
<br>
<p>Is there a liborte function that I can call that indicates whether  
<br>
the current process is an orted or not?  Or an environment variable  
<br>
that only exists for orted's?
<br>
<p><pre>
--
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0619.php">Jeff Squyres: "Re:  rsh and fork pls components"</a>
<li><strong>Previous message:</strong> <a href="0617.php">Ralph H. Castain: "Re:  rsh and fork pls components"</a>
<li><strong>In reply to:</strong> <a href="0617.php">Ralph H. Castain: "Re:  rsh and fork pls components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0619.php">Jeff Squyres: "Re:  rsh and fork pls components"</a>
<li><strong>Reply:</strong> <a href="0619.php">Jeff Squyres: "Re:  rsh and fork pls components"</a>
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
