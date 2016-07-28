<?
$subject_val = "Re: [OMPI users] 1.4.2 build problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 15 09:22:10 2010" -->
<!-- isoreceived="20100715132210" -->
<!-- sent="Thu, 15 Jul 2010 09:22:36 -0400" -->
<!-- isosent="20100715132236" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.4.2 build problem" -->
<!-- id="C5F08E25-CCFB-4095-A4A1-12865B4F7BAE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C06673E.1070505_at_txcorp.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.4.2 build problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-15 09:22:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13650.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI flags conditions"</a>
<li><strong>Previous message:</strong> <a href="13648.php">Jeff Squyres: "Re: [OMPI users] OpenMPI flags conditions"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13206.php">John Cary: "Re: [OMPI users] 1.4.2 build problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 2, 2010, at 10:14 AM, John Cary wrote:
<br>
<p><span class="quotelev1">&gt; It seems that the rpath arg is something that bites me over and again.
</span><br>
<span class="quotelev1">&gt; What are your thoughts about making this automatic?
</span><br>
<p>I'm trolling through the disaster that is my inbox and finding some orphaned email threads -- sorry for the delay, folks!
<br>
<p>We have some developers in the OMPI community who are passionate about adding only the bare minimum set of compiler / linker flags that are necessary for correctness.  Rpath has come up again and again (i.e., add rpath into the set of flags that is added by the wrappers) and has been soundly rejected because it is not part of that &quot;bare minimum set.&quot;
<br>
<p>That being said, I think the objections would be *much* less if adding rpath was optional (and probably not the default) -- e.g., perhaps rpath is added to wrapper compiler flags if OMPI was configured with a specific command line flag, or a specific MCA parameter is enabled.
<br>
<p>We'd be very happy to accept patches for this kind of thing...
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
<li><strong>Next message:</strong> <a href="13650.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI flags conditions"</a>
<li><strong>Previous message:</strong> <a href="13648.php">Jeff Squyres: "Re: [OMPI users] OpenMPI flags conditions"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13206.php">John Cary: "Re: [OMPI users] 1.4.2 build problem"</a>
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
