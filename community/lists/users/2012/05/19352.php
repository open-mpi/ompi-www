<?
$subject_val = "Re: [OMPI users] openmpi-1.6 undefined reference";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 23 18:20:45 2012" -->
<!-- isoreceived="20120523222045" -->
<!-- sent="Thu, 24 May 2012 00:20:38 +0200" -->
<!-- isosent="20120523222038" -->
<!-- name="marco atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.6 undefined reference" -->
<!-- id="4FBD62B6.40902_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8B0DF9F4-617B-4DB3-ABEF-0FF38D8028B7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.6 undefined reference<br>
<strong>From:</strong> marco atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-23 18:20:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19353.php">Lisandro Dalcin: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Previous message:</strong> <a href="19351.php">Jeff Squyres: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19347.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19354.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>Reply:</strong> <a href="19354.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5/23/2012 11:20 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 23, 2012, at 9:53 AM, marco atzeri wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; experience says that autoreconf is a good approach on cygwin,
</span><br>
<span class="quotelev2">&gt;&gt; it is almost standard on our package build procedure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm still curious: why?  (I'm *assuming* that you're building from an official Open MPI tarball -- is that incorrect?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ask because we've already run autoreconf, meaning that official Open MPI tarballs are fully bootstrapped and do not need to have autogen (i.e., ultimately autoreconf) re-run on them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifically: I'm unaware of a reason why you should need to re-run autogen (autoreconf) on an otherwise-unaltered Open MPI that was freshly extracted from a tarball.  Does something happen differently if you *don't* re-run autogen (autoreconf)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Re-running autogen shouldn't be causing you any problems, of course -- this is just my curiosity asserting itself...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hi Jeff,
<br>
~ 90% of the time we have mismatch problems between upstream and
<br>
cygwin on autoconf/automake/libtool versions that are not cygwin
<br>
aware or updated.
<br>
<p>As safe approuch, we prefer apply &quot;autoreconf -i -f&quot; as default when
<br>
building binary packages.
<br>
<p>see cygautoreconf on
<br>
<a href="http://cygwin-ports.svn.sourceforge.net/viewvc/cygwin-ports/cygport/trunk/README">http://cygwin-ports.svn.sourceforge.net/viewvc/cygwin-ports/cygport/trunk/README</a>
<br>
<p>Regards
<br>
Marco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19353.php">Lisandro Dalcin: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Previous message:</strong> <a href="19351.php">Jeff Squyres: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19347.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19354.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>Reply:</strong> <a href="19354.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
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
