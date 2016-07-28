<?
$subject_val = "Re: [OMPI users] compiler upgrades require openmpi rebuild?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  3 14:15:55 2010" -->
<!-- isoreceived="20100903181555" -->
<!-- sent="Fri, 3 Sep 2010 20:15:42 +0200" -->
<!-- isosent="20100903181542" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compiler upgrades require openmpi rebuild?" -->
<!-- id="C47FD062-EC10-488F-813D-00402761C538_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2F854F6C-EA82-4225-9442-61B3542065E6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] compiler upgrades require openmpi rebuild?<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-03 14:15:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14176.php">David Singleton: "Re: [OMPI users] spin-wait backoff"</a>
<li><strong>Previous message:</strong> <a href="14174.php">Jeff Squyres: "Re: [OMPI users] Memory allocation error when linking with MPI libraries"</a>
<li><strong>In reply to:</strong> <a href="14172.php">Jeff Squyres: "Re: [OMPI users] compiler upgrades require openmpi rebuild?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 03.09.2010 um 19:51 schrieb Jeff Squyres:
<br>
<p><span class="quotelev1">&gt; On Aug 30, 2010, at 6:48 PM, David Turner wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have recently upgraded our default compiler suite from
</span><br>
<span class="quotelev2">&gt;&gt; PGI 10.5 to PGI 10.8.  We use the &quot;module&quot; system to manage
</span><br>
<span class="quotelev2">&gt;&gt; third-party software.  The module for PGI sets PATH and
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Using Open MPI 1.4.2, built with PGI 10.5, I have verified
</span><br>
<span class="quotelev2">&gt;&gt; that changing PATH is sufficient for the Open MPI compiler
</span><br>
<span class="quotelev2">&gt;&gt; wrappers to pick up version 10.8 of the PGI compilers.
</span><br>
<span class="quotelev2">&gt;&gt; However, it appears that the 10.5 PGI libraries are &quot;wired&quot;
</span><br>
<span class="quotelev2">&gt;&gt; into the wrappers somehow.  So I get an executable that
</span><br>
<span class="quotelev2">&gt;&gt; has been compiled with PGI 10.8 but linked against PGI 10.5
</span><br>
<span class="quotelev2">&gt;&gt; libraries.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Short of rebuilding Open MPI with PGI 10.8, is there any
</span><br>
<span class="quotelev2">&gt;&gt; (safe, reliable) way to get the compiler wrappers to link
</span><br>
<span class="quotelev2">&gt;&gt; against the PGI 10.8 libraries?  Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for the latency in reply.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would guess that the Open MPI libraries have been linked against the PGI 10.5 libraries, and it might not be easy to dis-entangle them.  It *might* be a simple as changing your LD_LIBRARY_PATH, but it might not.
</span><br>
<p>what's inside the binaries (like mpirun) can be checked with:
<br>
<p>$ readelf -a mpirun
<br>
...
<br>
&nbsp;0x000000000000000f (RPATH)              Library rpath: [/opt/pgi/linux86-64/9.0-4/lib]
<br>
&nbsp;0x000000000000001d (RUNPATH)            Library runpath: [/opt/pgi/linux86-64/9.0-4/lib]
<br>
<p>This can even be changed by:
<br>
<p>$ chrpatch -r ... mpirun
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since there's some question as to how to do it properly, it's probably safest / easiest / least total time spent to just build another copy of OMPI against 10.8.  :-\
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14176.php">David Singleton: "Re: [OMPI users] spin-wait backoff"</a>
<li><strong>Previous message:</strong> <a href="14174.php">Jeff Squyres: "Re: [OMPI users] Memory allocation error when linking with MPI libraries"</a>
<li><strong>In reply to:</strong> <a href="14172.php">Jeff Squyres: "Re: [OMPI users] compiler upgrades require openmpi rebuild?"</a>
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
