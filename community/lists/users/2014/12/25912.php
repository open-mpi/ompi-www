<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  2 18:49:14 2014" -->
<!-- isoreceived="20141202234914" -->
<!-- sent="Tue, 2 Dec 2014 18:49:13 -0500" -->
<!-- isosent="20141202234913" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?" -->
<!-- id="CAMJJpkUcyPaRP1QWHg5=5MevE+Chnu6y6y6-qKMBC7ifPsibZw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="27D3AFBC-6863-4095-98D8-EFBBBC30EDC9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-02 18:49:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25913.php">Siegmar Gross: "[OMPI users] problems with openmpi-dev-428-g983bd49"</a>
<li><strong>Previous message:</strong> <a href="25911.php">Wildes Andrew: "Re: [OMPI users] Noob installation problem"</a>
<li><strong>In reply to:</strong> <a href="25902.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in	remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26019.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Reply:</strong> <a href="26019.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Dec 2, 2014 at 9:56 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; I like the OMPI_ prefix because it clearly identifies the function as
</span><br>
<span class="quotelev1">&gt; specific to Open MPI (i.e., you really should enclose it in #if
</span><br>
<span class="quotelev1">&gt; defined(OPEN_MPI) / #endif).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>That's not enough. They will have to check for the right version of Open
<br>
MPI and then for the availability of the OMPI_&lt;something&gt; functions. That
<br>
looks as having the sabe cost as checking for the MPIX_&lt;something&gt; function
<br>
without looking for a specific MPI library.
<br>
<p><p><span class="quotelev1">&gt; If you/users really want MPIX_, how about: use OMPI_Foo as the &quot;real&quot;
</span><br>
<span class="quotelev1">&gt; name, and have alternate entry points via MPIX_Foo?  (via #define, wrapper
</span><br>
<span class="quotelev1">&gt; functions, or whatever)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then we all win.  Huzzah!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>That will totally suck in Fortran.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25912/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25913.php">Siegmar Gross: "[OMPI users] problems with openmpi-dev-428-g983bd49"</a>
<li><strong>Previous message:</strong> <a href="25911.php">Wildes Andrew: "Re: [OMPI users] Noob installation problem"</a>
<li><strong>In reply to:</strong> <a href="25902.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in	remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26019.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Reply:</strong> <a href="26019.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
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
