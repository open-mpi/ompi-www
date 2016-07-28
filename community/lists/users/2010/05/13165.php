<?
$subject_val = "Re: [OMPI users] Building from the SRPM version creates an rpm with striped libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 26 13:09:54 2010" -->
<!-- isoreceived="20100526170954" -->
<!-- sent="Wed, 26 May 2010 13:09:47 -0400" -->
<!-- isosent="20100526170947" -->
<!-- name="Peter Thompson" -->
<!-- email="petert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building from the SRPM version creates an rpm with striped libraries" -->
<!-- id="4BFD55DB.70300_at_totalviewtech.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DF639891-8DB6-47D3-BEB0-63C37CDD160D_at_pittman.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building from the SRPM version creates an rpm with striped libraries<br>
<strong>From:</strong> Peter Thompson (<em>petert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-26 13:09:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13166.php">Michael E. Thomadakis: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>Previous message:</strong> <a href="13164.php">Josh Hursey: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>In reply to:</strong> <a href="13156.php">Ashley Pittman: "Re: [OMPI users] Building from the SRPM version creates an rpm with striped libraries"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ashley,  that did work, though I must say that %define __strip  
<br>
/bin/true is NOT very intuitive!
<br>
<p>I did get my symbols in the needed libraries, but unfortunately, at 
<br>
least for the compiler I used to build, I still have a typedef 
<br>
undefined, and that also prevents that method of launching TV.  But we 
<br>
have our own workarounds for that. 
<br>
<p>Cheers,
<br>
PeterT
<br>
<p>Ashley Pittman wrote:
<br>
<span class="quotelev1">&gt; This is a standard rpm feature although like most things it can be disabled.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; According to this mail and it's replies the two %defines below will prevent striping and the building of debuginfo rpms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://lists.rpm.org/pipermail/rpm-list/2009-January/000122.html">http://lists.rpm.org/pipermail/rpm-list/2009-January/000122.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; %define debug_package %{nil}
</span><br>
<span class="quotelev1">&gt; %define __strip /bin/true
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 25 May 2010, at 00:25, Peter Thompson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I have a user who prefers building rpm's from the srpm.  That's okay, but for debugging via TotalView it creates a version with the openmpi .so files stripped and we can't gain control of the processes when launched via mpirun -tv.  I've verified this with my own build of a 1.4.1 rpm which I then installed and noticed the same behavior that the user reports.  I was hoping to give them some advice as to how to avoid the stripping, as it appears that the actual build of those libraries is done with -g and everything looks fine.  But I can't figure out in the build (from the log file I created) just where that stripping takes place, or how to get around it if need be.  The best guess I have is that it may be happening at the very end when an rpm-tmp file is executed, but that file has disappeared so I don't really know what it does.  I thought it might be apparent in the spec file, but it's certainly not apparent to me!  Any help or advice would be appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13166.php">Michael E. Thomadakis: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>Previous message:</strong> <a href="13164.php">Josh Hursey: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>In reply to:</strong> <a href="13156.php">Ashley Pittman: "Re: [OMPI users] Building from the SRPM version creates an rpm with striped libraries"</a>
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
