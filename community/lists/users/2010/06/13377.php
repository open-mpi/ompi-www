<?
$subject_val = "Re: [OMPI users] Problems with memchecker in version 1.4.2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 22 11:43:17 2010" -->
<!-- isoreceived="20100622154317" -->
<!-- sent="Tue, 22 Jun 2010 11:43:03 -0400" -->
<!-- isosent="20100622154303" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with memchecker in version 1.4.2" -->
<!-- id="8223AD2D-73B2-4F89-937A-845E9495FFE1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimQv3ZSbmhFjIivmBRxElAjRsHdiymLcZJ9xqjL_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with memchecker in version 1.4.2<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-22 11:43:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13378.php">Riccardo Murri: "Re: [OMPI users] Cannot start (WAS: Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2)"</a>
<li><strong>Previous message:</strong> <a href="13376.php">Michele De Stefano: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<li><strong>In reply to:</strong> <a href="13376.php">Michele De Stefano: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 22, 2010, at 10:57 AM, Michele De Stefano wrote:
<br>
<p><span class="quotelev1">&gt; Anyway, I've discovered that configure searches for
</span><br>
<span class="quotelev1">&gt; &lt;valgrind/valgrind.h&gt; and does not find it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Installing valgrind-devel solves the problem ... but I didn't need it
</span><br>
<span class="quotelev1">&gt; before (I mean I didn't need it before Open MPI 1.4.2).
</span><br>
<p>Yes, you did.  :-)
<br>
<p>OMPI always searched for valgrind.h because that's how it gets the valgrind support (there is no valgrind library; just valgrind.h).
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
<li><strong>Next message:</strong> <a href="13378.php">Riccardo Murri: "Re: [OMPI users] Cannot start (WAS: Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2)"</a>
<li><strong>Previous message:</strong> <a href="13376.php">Michele De Stefano: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<li><strong>In reply to:</strong> <a href="13376.php">Michele De Stefano: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
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
