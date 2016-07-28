<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  9 02:09:27 2007" -->
<!-- isoreceived="20071009060927" -->
<!-- sent="Tue, 9 Oct 2007 08:08:43 +0200" -->
<!-- isosent="20071009060843" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt" -->
<!-- id="45980878-7787-41F7-955A-57EC5736F7E5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="18184.4566.423107.97790_at_ron.nulle.part" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-09 02:08:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4177.php">Michael Clover: "[OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
<li><strong>Previous message:</strong> <a href="4175.php">Jeff Squyres: "Re: [OMPI users] sed and openmpi on Mac OSX 10.4.10"</a>
<li><strong>In reply to:</strong> <a href="4164.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4182.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4182.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 7, 2007, at 12:53 AM, Dirk Eddelbuettel wrote:
<br>
<p><span class="quotelev1">&gt; | Not that I can tell.  What else could I test?  The build-logs  
</span><br>
<span class="quotelev1">&gt; don't reveal
</span><br>
<span class="quotelev1">&gt; | anything fishy -- all pt2pt occurrences look fine.  The build itself
</span><br>
<span class="quotelev1">&gt; | proceeded fine (and this was the Debian package build I then uplod)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Two more observations:
</span><br>
<span class="quotelev1">&gt; -- the message does not appear on my Ubuntu system
</span><br>
<span class="quotelev1">&gt; -- but it appears on Hao's Debian machine which does not use the  
</span><br>
<span class="quotelev1">&gt; Debian package
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could this be some dynamic loading issue?  How can we go about  
</span><br>
<span class="quotelev1">&gt; solving this?
</span><br>
<p>I'm disconnected from the network for the moment and can't test a  
<br>
tarball build myself (i.e., I don't have ready access to a  
<br>
distribution tarball), but I think that we disable showing dlopen  
<br>
errors for optimized/tarball builds.  Try running with this MCA  
<br>
parameter:
<br>
<p>&nbsp;&nbsp;&nbsp;mpriun --mca mca_component_show_load_errors 1 ...
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
<li><strong>Next message:</strong> <a href="4177.php">Michael Clover: "[OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
<li><strong>Previous message:</strong> <a href="4175.php">Jeff Squyres: "Re: [OMPI users] sed and openmpi on Mac OSX 10.4.10"</a>
<li><strong>In reply to:</strong> <a href="4164.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4182.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4182.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
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
