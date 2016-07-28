<?
$subject_val = "Re: [OMPI users] Java MPI Bindings in 1.6.x";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 28 10:29:06 2012" -->
<!-- isoreceived="20121128152906" -->
<!-- sent="Wed, 28 Nov 2012 10:29:01 -0500" -->
<!-- isosent="20121128152901" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Java MPI Bindings in 1.6.x" -->
<!-- id="CA5D8470-CA84-4DD7-A984-B172E1F764BC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9A5BAB97-AF18-4136-BC32-6FE49AD7C05E_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Java MPI Bindings in 1.6.x<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-28 10:29:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20789.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="20787.php">Brock Palen: "[OMPI users] Java MPI Bindings in 1.6.x"</a>
<li><strong>In reply to:</strong> <a href="20787.php">Brock Palen: "[OMPI users] Java MPI Bindings in 1.6.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20791.php">Brock Palen: "Re: [OMPI users] Java MPI Bindings in 1.6.x"</a>
<li><strong>Reply:</strong> <a href="20791.php">Brock Palen: "Re: [OMPI users] Java MPI Bindings in 1.6.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 28, 2012, at 10:06 AM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; I know java MPI bindings are in the development tree, and the FAQ states they are derived from the HLRS bindings (which I can't appear to find online).
</span><br>
<p>I don't remember exactly where we got them; the repository might not have been public.  I know we (i.e., Ralph) scoured around for quite a while before settling on this particular set.  
<br>
<p>IIRC, we might have gotten this set from our contacts at HLRS, and therefore it might not be on the open web anywhere else.
<br>
<p><span class="quotelev1">&gt; Is it possible to take the bindings from the dev tree and build them against the 1.6 stable?  If not what mpiJava bindings do you recommend? 
</span><br>
<p>Officially, we will not be porting the Java bindings to the v1.6 tree (because it's the stable tree -- no new features will be added).
<br>
<p>That doesn't mean it can't be done, however.  I think the hard part was figuring out the build system mojo for it, but that's now been done.
<br>
<p>If you have users with a genuine interest in using the Java bindings but want to use them with v1.6, I might be able to put up a bitbucket based off the v1.6 branch that includes the Java bindings.  It would be great to get some feedback on these (admittedly incomplete) Java bindings.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20789.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="20787.php">Brock Palen: "[OMPI users] Java MPI Bindings in 1.6.x"</a>
<li><strong>In reply to:</strong> <a href="20787.php">Brock Palen: "[OMPI users] Java MPI Bindings in 1.6.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20791.php">Brock Palen: "Re: [OMPI users] Java MPI Bindings in 1.6.x"</a>
<li><strong>Reply:</strong> <a href="20791.php">Brock Palen: "Re: [OMPI users] Java MPI Bindings in 1.6.x"</a>
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
