<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in	remote nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  2 09:56:37 2014" -->
<!-- isoreceived="20141202145637" -->
<!-- sent="Tue, 2 Dec 2014 14:56:23 +0000" -->
<!-- isosent="20141202145623" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in	remote nodes?" -->
<!-- id="27D3AFBC-6863-4095-98D8-EFBBBC30EDC9_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="C3495BBB-B997-4108-B49C-C5B052030A77_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in	remote nodes?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-02 09:56:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25903.php">Nick Papior Andersen: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Previous message:</strong> <a href="25901.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>In reply to:</strong> <a href="25901.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25903.php">Nick Papior Andersen: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Reply:</strong> <a href="25903.php">Nick Papior Andersen: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Reply:</strong> <a href="25912.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 2, 2014, at 1:10 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Are you referring to something Adam Moody proposed?  Or some other Adam?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; He did more than proposing, he provided a link to the implementation in SCR. So yes, I was indeed referring to Adam Moody.
</span><br>
<p>Ah -- you're referring to <a href="http://www.open-mpi.org/community/lists/users/2014/11/25871.php">http://www.open-mpi.org/community/lists/users/2014/11/25871.php</a>.  Got it.
<br>
<p><span class="quotelev2">&gt;&gt; FWIW, we&#146;ve traditionally named Open MPI-specific extensions &quot;OMPI_&quot; instead of &quot;MPIX_&quot; (which can be confused with other MPI implementation extensions).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed, it was a choice we made long ago. Thinking about this retroactively it was a bad choice. We (UTK) maintain some of the extensions, and as other MPI libraries start providing similar extensions (while they are discussed in the MPI Forum), users start asking for a common naming scheme in order to simplify their life.
</span><br>
<p>I've talked to users who ask for the opposite -- since MPI extensions are, by definition, specific to a particular MPI implementation, they specifically asked for OMPI MPI extensions to *not* be MPIX_*, because then it's easy to identify that it's an Open MPI extension (vs. an extension for some other MPI implementation).
<br>
<p><span class="quotelev1">&gt; Other than a preferential reason, what other competing reason do we have to stick with OMPI_ instead of MPIX_?
</span><br>
<p>I think it's largely informal, so we can do whatever we want.
<br>
<p>The namespace MPIX_ is not regulated (nor mandated), so there's possibilities for collisions, which would be pretty dreadful for users.
<br>
<p>I like the OMPI_ prefix because it clearly identifies the function as specific to Open MPI (i.e., you really should enclose it in #if defined(OPEN_MPI) / #endif).
<br>
<p>If you/users really want MPIX_, how about: use OMPI_Foo as the &quot;real&quot; name, and have alternate entry points via MPIX_Foo?  (via #define, wrapper functions, or whatever)
<br>
<p>Then we all win.  Huzzah!
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
<li><strong>Next message:</strong> <a href="25903.php">Nick Papior Andersen: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Previous message:</strong> <a href="25901.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>In reply to:</strong> <a href="25901.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25903.php">Nick Papior Andersen: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Reply:</strong> <a href="25903.php">Nick Papior Andersen: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Reply:</strong> <a href="25912.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
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
