<?
$subject_val = "Re: [OMPI users] detect hung node";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 20:35:53 2010" -->
<!-- isoreceived="20100407003553" -->
<!-- sent="Tue, 6 Apr 2010 20:35:48 -0400" -->
<!-- isosent="20100407003548" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] detect hung node" -->
<!-- id="1B56FAFF-B3C6-4BBA-9851-13EB16515EBF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="v2sf9b550811004061003n851f7977r3cd7df89633038d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] detect hung node<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 20:35:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12572.php">Ralph Castain: "Re: [OMPI users] excluding hosts"</a>
<li><strong>Previous message:</strong> <a href="12570.php">David Turner: "Re: [OMPI users] excluding hosts"</a>
<li><strong>In reply to:</strong> <a href="12556.php">Sam Preston: "[OMPI users] detect hung node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 6, 2010, at 1:03 PM, Sam Preston wrote:
<br>
<p><span class="quotelev1">&gt; I have a problem with the cluster I'm currently using where nodes
</span><br>
<span class="quotelev1">&gt; 'hang' silently from time to time during an MPI call.  This causes the
</span><br>
<span class="quotelev1">&gt; blocked MPI processes to block indefinitely -- the only way to detect
</span><br>
<span class="quotelev1">&gt; an error is to notice that no more output is being written to the log
</span><br>
<span class="quotelev1">&gt; files.  We're trying to resolve the underlying cause of the nodes
</span><br>
<span class="quotelev1">&gt; hanging, but in the mean time, is there a way to set a timeout or
</span><br>
<span class="quotelev1">&gt; something similar to detect this situation?  Sorry if this has been
</span><br>
<span class="quotelev1">&gt; addressed before, I searched the FAQ and archives and didn't come up
</span><br>
<span class="quotelev1">&gt; with anything.
</span><br>
<p>Unfortunately, no.  MPI doesn't actively check to see if an application has deadlocked (although there are tools for doing this kind of thing -- google around for them).  Or if something has gone wrong, Open MPI may not be detecting it properly.  Hopefully, it's not an Open MPI bug!
<br>
<p>I wish I had more helpful information for you -- let us know what you find about the underlying cause.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12572.php">Ralph Castain: "Re: [OMPI users] excluding hosts"</a>
<li><strong>Previous message:</strong> <a href="12570.php">David Turner: "Re: [OMPI users] excluding hosts"</a>
<li><strong>In reply to:</strong> <a href="12556.php">Sam Preston: "[OMPI users] detect hung node"</a>
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
