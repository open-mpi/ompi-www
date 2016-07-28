<?
$subject_val = "Re: [OMPI users] 1.4 OpenMPI build not working well with TotalView on Darwin";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 22 12:55:19 2010" -->
<!-- isoreceived="20100122175519" -->
<!-- sent="Fri, 22 Jan 2010 17:54:31 +0000" -->
<!-- isosent="20100122175431" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.4 OpenMPI build not working well with TotalView on Darwin" -->
<!-- id="1264182871.10204.15.camel_at_alpha" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B57B966.4060000_at_totalviewtech.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.4 OpenMPI build not working well with TotalView on Darwin<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-22 12:54:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11856.php">David Turner: "[OMPI users] which ofed rpms for openmpi"</a>
<li><strong>Previous message:</strong> <a href="11854.php">Shiqing Fan: "Re: [OMPI users] flex.exe"</a>
<li><strong>In reply to:</strong> <a href="11837.php">Peter Thompson: "Re: [OMPI users] 1.4 OpenMPI build not working well with TotalView on Darwin"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2010-01-20 at 21:18 -0500, Peter Thompson wrote:
<br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry, speaking in shorthand again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 8, 2010, at 5:03 PM, Peter Thompson wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I've tried a few builds of 1.4 on Snow Leopard, and trying to start up TotalView
</span><br>
<span class="quotelev3">&gt; &gt;&gt; gets some of the more 'standard' problems.  
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I don't quite know what you mean by &quot;standard&quot; problems...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's more or less 'standard problems' that I hear described when someone tries 
</span><br>
<span class="quotelev1">&gt; to build and MPI (not just OpenMPI) and things don't work on first try.  I don't 
</span><br>
<span class="quotelev1">&gt; know if you've worked on the interface directly, but you are probably aware that 
</span><br>
<span class="quotelev1">&gt; TotalView has an API where we set up a structure, MPIR_PROCTABLE, based on a 
</span><br>
<span class="quotelev1">&gt; typedef MPIR_PROCDESC, which gets filled in as to what processes are started up 
</span><br>
<span class="quotelev1">&gt; on which nodes.  Which allows the debugger to attach to things automatically. 
</span><br>
<span class="quotelev1">&gt; If the build is done so that the files that hold these structures are optimized, 
</span><br>
<span class="quotelev1">&gt; sometimes the typedef is optimized away.  Or in the case of other builds, the 
</span><br>
<span class="quotelev1">&gt; file may have the correct optimization (none) but the symbol info is stripped in 
</span><br>
<span class="quotelev1">&gt; the link phase.  So it's a typical, or 'standard' issue I face, but hopefully 
</span><br>
<span class="quotelev1">&gt; not for you.
</span><br>
<p>I've seen several OpenMPI installs in the wild like this where the type
<br>
information for MPIR_PROCTABLE is missing.  The fact the type
<br>
information is missing however doesn't affect the code or contents of
<br>
memory at all, just that it's not described by debug information.  As
<br>
there is a standard (sort of) to describe MPIR_PROCTABLE what I choose
<br>
to do in padb is to use the standard to calculate the struct size and
<br>
offsets rather than the debug info.  This allows padb to work even when
<br>
the debug information is missing.
<br>
<p>If the debug information is available that it matches what I expect it
<br>
to be.
<br>
<p>Don't use the debug info but rather use fixed sizes and offsets:
<br>
<a href="http://code.google.com/p/padb/source/detail?r=355">http://code.google.com/p/padb/source/detail?r=355</a>
<br>
<p>Verify the type information if present:
<br>
<a href="http://code.google.com/p/padb/source/detail?r=386">http://code.google.com/p/padb/source/detail?r=386</a>
<br>
<p><span class="quotelev1">&gt; However, 
</span><br>
<span class="quotelev1">&gt; some users prefer the classic launch with -tv, and this seems to be failing with 
</span><br>
<span class="quotelev1">&gt; the latest builds I've done on Darwin.
</span><br>
<p>I've seen this 'problem' on Linux as well.  I'm unsure of the OpenMPI
<br>
version although I could ask the organisation concerned if required.
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11856.php">David Turner: "[OMPI users] which ofed rpms for openmpi"</a>
<li><strong>Previous message:</strong> <a href="11854.php">Shiqing Fan: "Re: [OMPI users] flex.exe"</a>
<li><strong>In reply to:</strong> <a href="11837.php">Peter Thompson: "Re: [OMPI users] 1.4 OpenMPI build not working well with TotalView on Darwin"</a>
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
