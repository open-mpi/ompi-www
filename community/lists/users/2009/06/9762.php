<?
$subject_val = "Re: [OMPI users] Compile problems with 1.3.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 19:24:22 2009" -->
<!-- isoreceived="20090629232422" -->
<!-- sent="Mon, 29 Jun 2009 19:24:16 -0400" -->
<!-- isosent="20090629232416" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compile problems with 1.3.2" -->
<!-- id="10F5D41E-42B1-4959-B15F-7B1608EC3828_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="df8c8a6d0906291618k1e42e66ct436df671ca7adb32_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compile problems with 1.3.2<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-29 19:24:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9763.php">Eugene Loh: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9761.php">Jim Kusznir: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>In reply to:</strong> <a href="9761.php">Jim Kusznir: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/11/14729.php">Jim Kusznir: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/11/14729.php">Jim Kusznir: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 29, 2009, at 7:18 PM, Jim Kusznir wrote:
<br>
<p><span class="quotelev1">&gt; That sounds good; I'm glad there are a variety of tools out there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, this now brings me back to my origional problem.  I was
</span><br>
<span class="quotelev1">&gt; successful at compiling openmpi after disabling vt, but if I want to
</span><br>
<span class="quotelev1">&gt; use (some of) these tools, I'll need that enabled...So how do I fix
</span><br>
<span class="quotelev1">&gt; the actual problem and compile openmpi with vt?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I believe the problem has been fixed for the upcoming v1.3.3.  You  
<br>
might want to grab a nightly 1.3.3 pre-release tarball and verify:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/v1.3/">http://www.open-mpi.org/nightly/v1.3/</a>
<br>
<p><span class="quotelev1">&gt; Also, as a side note, the rpm generation process also mentioned
</span><br>
<span class="quotelev1">&gt; several files that were &quot;installed but unpackaged&quot;; many of these look
</span><br>
<span class="quotelev1">&gt; like they should not be:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; warning: Installed (but unpackaged) file(s) found:
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-gcc/1.3.2/bin/ompi-checkpoint
</span><br>
<span class="quotelev1">&gt;    /opt/openmpi-gcc/1.3.2/bin/ompi-clean
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Which RPM was this -- the SRPM on the OMPI web site?  If so, can you  
<br>
send your rpmbuild  command line?
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
<li><strong>Next message:</strong> <a href="9763.php">Eugene Loh: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9761.php">Jim Kusznir: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>In reply to:</strong> <a href="9761.php">Jim Kusznir: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/11/14729.php">Jim Kusznir: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/11/14729.php">Jim Kusznir: "Re: [OMPI users] Compile problems with 1.3.2"</a>
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
