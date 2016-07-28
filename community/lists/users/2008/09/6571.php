<?
$subject_val = "Re: [OMPI users] Why compilig in global paths (only)	for	configuretion files?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 08:29:04 2008" -->
<!-- isoreceived="20080917122904" -->
<!-- sent="Wed, 17 Sep 2008 08:28:54 -0400" -->
<!-- isosent="20080917122854" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why compilig in global paths (only)	for	configuretion files?" -->
<!-- id="2C92962C-A6C3-40B0-9EE9-818A5E8A4C60_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48D0D29C.3090101_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Why compilig in global paths (only)	for	configuretion files?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-17 08:28:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6572.php">Josh Hursey: "Re: [OMPI users] BLCR not found"</a>
<li><strong>Previous message:</strong> <a href="6570.php">George Bosilca: "Re: [OMPI users] mpirun hang"</a>
<li><strong>In reply to:</strong> <a href="6562.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths (only)	for	configuretion files?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6574.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<li><strong>Reply:</strong> <a href="6574.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 17, 2008, at 5:49 AM, Paul Kapinos wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; But the setting of the environtemt variable OPAL_PREFIX to an  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appropriate value (assuming PATH and LD_LIBRARY_PATH are setted  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; too) is not enough to let the OpenMPI rock&amp;roll from the new  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lokation.
</span><br>
<span class="quotelev2">&gt;&gt; Hmm.  It should be.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (update) it works with &quot;truly&quot; OpenMPI, but it works *not* with SUN  
</span><br>
<span class="quotelev1">&gt; Cluster Tools 8.0 (which is also an OpenMPI). So, it seems be an SUN  
</span><br>
<span class="quotelev1">&gt; problem and not general problem of openMPI. Sorry for false relating  
</span><br>
<span class="quotelev1">&gt; the problem.
</span><br>
<p>Ah, gotcha.  I guess my Sun colleagues on this list will need to  
<br>
address that.  ;-)
<br>
<p><span class="quotelev1">&gt; The only trouble we have now are the error messages like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt;    no hca params found
</span><br>
<span class="quotelev1">&gt; from the file:
</span><br>
<span class="quotelev1">&gt;    help-mpi-btl-openib.txt
</span><br>
<span class="quotelev1">&gt; But I couldn't find any file matching that name.  Sorry!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (the job still runs without problems! :o)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if running openmpi from new location, and the old location being  
</span><br>
<span class="quotelev1">&gt; removed. (if the old location being also persistense there is no  
</span><br>
<span class="quotelev1">&gt; error, so it seems to be an attempt to access to an file on old path).
</span><br>
<p>Doh; that's weird.
<br>
<p><span class="quotelev1">&gt; Maybe we have to explicitly pass the OPAL_PREFIX environment  
</span><br>
<span class="quotelev1">&gt; variable to all processes?
</span><br>
<p>Hmm.  I don't need to do this in my 1.2.7 installation.  I do  
<br>
something like this (I assume you're using rsh/ssh as a launcher?):
<br>
<p># OMPI installed to /home/jsquyres/bogus, then mv'ed to /home/jsquyres/ 
<br>
bogus/foo
<br>
tcsh% set path = (/home/jsquyres/bogus/foo/bin $path)
<br>
tcsh% setenv LD_LIBRARY_PATH /home/jsquyres/bogus/foo/lib: 
<br>
$LD_LIBRARY_PATH
<br>
tcsh% setenv OPAL_PREFIX /home/jsquyres/bogus/foo
<br>
tcsh% mpirun --hostfile whatever hostname
<br>
...works fine
<br>
tcsh% mpicc ring.c -o ring
<br>
tcsh% mpirun --hostfile whatever --mca btl openib,self ring
<br>
...works fine
<br>
<p>Is this different for you?
<br>
<p><span class="quotelev3">&gt;&gt;&gt; Note one of configure files contained in Sun ClusterMPI 8.0 (see  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attached file). The paths are really hard-coded in instead of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usage of variables; this makes the package really not relocable  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without parsing the configure files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you (or anyone reading this message) have any contact to SUN  
</span><br>
<span class="quotelev1">&gt; developers to point to this circumstance? *Why* do them use hard- 
</span><br>
<span class="quotelev1">&gt; coded paths? :o)
</span><br>
<p>I don't know -- this sounds like an issue with the Sun CT 8 build  
<br>
process.  It could also be a by-product of using the combined 32/64  
<br>
feature...?  I haven't used that in forever and I don't remember the  
<br>
restrictions.  Terry/Rolf -- can you comment?
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
<li><strong>Next message:</strong> <a href="6572.php">Josh Hursey: "Re: [OMPI users] BLCR not found"</a>
<li><strong>Previous message:</strong> <a href="6570.php">George Bosilca: "Re: [OMPI users] mpirun hang"</a>
<li><strong>In reply to:</strong> <a href="6562.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths (only)	for	configuretion files?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6574.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<li><strong>Reply:</strong> <a href="6574.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
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
