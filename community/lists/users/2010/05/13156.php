<?
$subject_val = "Re: [OMPI users] Building from the SRPM version creates an rpm with striped libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 25 04:32:13 2010" -->
<!-- isoreceived="20100525083213" -->
<!-- sent="Tue, 25 May 2010 09:32:05 +0100" -->
<!-- isosent="20100525083205" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building from the SRPM version creates an rpm with striped libraries" -->
<!-- id="DF639891-8DB6-47D3-BEB0-63C37CDD160D_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BFB0AE6.6040305_at_totalviewtech.com" -->
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
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-25 04:32:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13157.php">Reuti: "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<li><strong>Previous message:</strong> <a href="13155.php">Shiqing Fan: "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<li><strong>In reply to:</strong> <a href="13150.php">Peter Thompson: "[OMPI users] Building from the SRPM version creates an rpm with striped libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13165.php">Peter Thompson: "Re: [OMPI users] Building from the SRPM version creates an rpm with striped libraries"</a>
<li><strong>Reply:</strong> <a href="13165.php">Peter Thompson: "Re: [OMPI users] Building from the SRPM version creates an rpm with striped libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is a standard rpm feature although like most things it can be disabled.
<br>
<p>According to this mail and it's replies the two %defines below will prevent striping and the building of debuginfo rpms.
<br>
<p><a href="http://lists.rpm.org/pipermail/rpm-list/2009-January/000122.html">http://lists.rpm.org/pipermail/rpm-list/2009-January/000122.html</a>
<br>
<p>%define debug_package %{nil}
<br>
%define __strip /bin/true
<br>
<p>Ashley.
<br>
<p>On 25 May 2010, at 00:25, Peter Thompson wrote:
<br>
<p><span class="quotelev1">&gt; I have a user who prefers building rpm's from the srpm.  That's okay, but for debugging via TotalView it creates a version with the openmpi .so files stripped and we can't gain control of the processes when launched via mpirun -tv.  I've verified this with my own build of a 1.4.1 rpm which I then installed and noticed the same behavior that the user reports.  I was hoping to give them some advice as to how to avoid the stripping, as it appears that the actual build of those libraries is done with -g and everything looks fine.  But I can't figure out in the build (from the log file I created) just where that stripping takes place, or how to get around it if need be.  The best guess I have is that it may be happening at the very end when an rpm-tmp file is executed, but that file has disappeared so I don't really know what it does.  I thought it might be apparent in the spec file, but it's certainly not apparent to me!  Any help or advice would be appreciated.
</span><br>
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
<li><strong>Next message:</strong> <a href="13157.php">Reuti: "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<li><strong>Previous message:</strong> <a href="13155.php">Shiqing Fan: "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<li><strong>In reply to:</strong> <a href="13150.php">Peter Thompson: "[OMPI users] Building from the SRPM version creates an rpm with striped libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13165.php">Peter Thompson: "Re: [OMPI users] Building from the SRPM version creates an rpm with striped libraries"</a>
<li><strong>Reply:</strong> <a href="13165.php">Peter Thompson: "Re: [OMPI users] Building from the SRPM version creates an rpm with striped libraries"</a>
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
