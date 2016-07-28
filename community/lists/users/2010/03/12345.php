<?
$subject_val = "Re: [OMPI users] openib BTL and MPI_THREAD_MULTIPLE";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 13 15:03:06 2010" -->
<!-- isoreceived="20100313200306" -->
<!-- sent="Sat, 13 Mar 2010 12:03:03 -0800" -->
<!-- isosent="20100313200303" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib BTL and MPI_THREAD_MULTIPLE" -->
<!-- id="5E5E1706-58A6-489A-B251-A7764EB6FF2A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="16ADBB0B-B28E-459B-812E-673378FA4C26_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] openib BTL and MPI_THREAD_MULTIPLE<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-13 15:03:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12346.php">cjohnson_at_[hidden]: "[OMPI users] Windows: problems running on a second system."</a>
<li><strong>Previous message:</strong> <a href="12344.php">Jed Brown: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>In reply to:</strong> <a href="12339.php">Nick Edmonds: "[OMPI users] openib BTL and MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 12, 2010, at 2:08 PM, Nick Edmonds wrote:
<br>
<p><span class="quotelev1">&gt; Currently the openib BTL silently refuses to run when MPI_THREAD_MULTIPLE is specified (ompi/mca/btl/openib/btl_openib_component.c:2367 in the current trunk, r22822) which leads to confusing (to some people) error messages such as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PML add procs failed  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would it be possible to provide a warning/error indicating that the BTL failed to load, and why?  
</span><br>
<p>Hmm.  My first thought was, &quot;sure!&quot;  But then after thinking about it for a minute, I realized that we actually *want* it to fail silently -- it's in keeping with the Open MPI philosophy of just using what's available and not complaining about what's not available.  More specifically, how exactly would you know when a user wants you to complain when something is not available?
<br>
<p>That being said, we can probably improve the &quot;PML add procs failed...&quot; message to make it more clear.  For example, this specific message means that some peer is unreachable, which *usually* means that there's no BTL available to reach it, which *usually* means that a BTL failed to load as you expected it to.  I'll make this better -- thanks for the heads-up.
<br>
<p><span class="quotelev1">&gt; The logical next question would be, is anyone working on an openib BTL that supports MPI_THREAD_MULTIPLE?  I'm currently stuck using IPoIB which is obviously undesirable from a performance standpoint.
</span><br>
<p>IBM has been doing a bunch of MPI_THREAD_MULTIPLE improvements recently, many of them surrounding the openib BTL.  I don't know what their specific goals are, though.
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
<li><strong>Next message:</strong> <a href="12346.php">cjohnson_at_[hidden]: "[OMPI users] Windows: problems running on a second system."</a>
<li><strong>Previous message:</strong> <a href="12344.php">Jed Brown: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>In reply to:</strong> <a href="12339.php">Nick Edmonds: "[OMPI users] openib BTL and MPI_THREAD_MULTIPLE"</a>
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
