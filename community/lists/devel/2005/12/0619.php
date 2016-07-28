<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec 13 16:51:43 2005" -->
<!-- isoreceived="20051213215143" -->
<!-- sent="Tue, 13 Dec 2005 16:51:39 -0500" -->
<!-- isosent="20051213215139" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  rsh and fork pls components" -->
<!-- id="F025E9C9-E623-4156-9F23-7C904B327571_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CE5905A6-EAD6-4436-935D-381769BD8272_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-12-13 16:51:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0620.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0618.php">Jeff Squyres: "Re:  rsh and fork pls components"</a>
<li><strong>In reply to:</strong> <a href="0618.php">Jeff Squyres: "Re:  rsh and fork pls components"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 13, 2005, at 4:48 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev2">&gt;&gt; On the orted check for the fork pls, you will find that there is a
</span><br>
<span class="quotelev2">&gt;&gt; flag in the process info structure that indicates &quot;I am a daemon&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; You may just need to check that flag - gets set very early and so
</span><br>
<span class="quotelev2">&gt;&gt; should be available in time for this purpose.
</span><br>
<p>I should have read that more carefully -- you're saying that that  
<br>
flag *is* in liborte, and is not a symbol that only exists in the orted.
<br>
<p>Hence, that is perfect.
<br>
<p>Thanks!  :-)
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
<li><strong>Next message:</strong> <a href="0620.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0618.php">Jeff Squyres: "Re:  rsh and fork pls components"</a>
<li><strong>In reply to:</strong> <a href="0618.php">Jeff Squyres: "Re:  rsh and fork pls components"</a>
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
