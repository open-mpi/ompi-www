<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Apr 21 07:05:14 2007" -->
<!-- isoreceived="20070421110514" -->
<!-- sent="Sat, 21 Apr 2007 07:05:04 -0400" -->
<!-- isosent="20070421110504" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] -prefix not working" -->
<!-- id="DD36980B-965F-4DEF-9F91-0786A60F26EA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="461BAFC2.4030009_at_mscsoftware.com" -->
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
<strong>Date:</strong> 2007-04-21 07:05:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3115.php">Mostyn Lewis: "[OMPI users] How do you switch off paffinity?"</a>
<li><strong>Previous message:</strong> <a href="3113.php">Jeff Squyres: "Re: [OMPI users] OMPI and NPB3.2.1"</a>
<li><strong>In reply to:</strong> <a href="3054.php">Joe Griffin: "Re: [OMPI users] -prefix not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3115.php">Mostyn Lewis: "[OMPI users] How do you switch off paffinity?"</a>
<li><strong>Reply:</strong> <a href="3115.php">Mostyn Lewis: "[OMPI users] How do you switch off paffinity?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 10, 2007, at 11:39 AM, Joe Griffin wrote:
<br>
<p><span class="quotelev1">&gt; If I set the env:
</span><br>
<span class="quotelev1">&gt; em64t6 &lt;160&gt; setenv OPAL_PREFIX /tmp/openmpi-1.2-1
</span><br>
<span class="quotelev1">&gt; em64t6 &lt;164&gt; setenv OPAL_DESTDIR /tmp/openmpi-1.2-1/
</span><br>
<span class="quotelev1">&gt; em64t6 &lt;166&gt; set path=( /tmp/openmpi-1.2-1/bin $path)
</span><br>
<span class="quotelev1">&gt; em64t6 &lt;168&gt; setenv LD_LIBRARY_PATH /tmp/openmpi-1.2-1/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error becomes:
</span><br>
<span class="quotelev1">&gt; em64t6 &lt;169&gt; /tmp/openmpi-1.2-1/bin/mpirun -n 1 --host em64t6 hostname
</span><br>
<span class="quotelev1">&gt; [em64t6:30103] [NO-NAME] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_init_stage1.c at line 214
</span><br>
<p>Sorry for the delay in replying -- this message got lost in my  
<br>
inbox.  :-(
<br>
<p>1. The installdirs functionality did not exist in the community v1.2  
<br>
release.  It existed in some pre-release tarballs with the version  
<br>
string &quot;v1.2ofed&quot; (we thought that was going to be a separate  
<br>
release, but this past week we rolled all the &quot;v1.2ofed&quot;  
<br>
functionality -- including the installdirs functionality -- into the  
<br>
main community v1.2 branch).  As such, the installdirs functionality  
<br>
will be included in the general 1.2.1 release, which should be  
<br>
available shortly.  Installdirs is currently available in the 1.2  
<br>
nightly tarballs and the 1.2rc1 tarball that is available on the web  
<br>
site.
<br>
<p>2. I think you want to simply set OPAL_PREFIX -- not OPAL_PREFIX  
<br>
*and* OPAL_DESTDIR.
<br>
<p>Sorry for all the confusion on this issue -- could you try the  
<br>
functionality again?
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
<li><strong>Next message:</strong> <a href="3115.php">Mostyn Lewis: "[OMPI users] How do you switch off paffinity?"</a>
<li><strong>Previous message:</strong> <a href="3113.php">Jeff Squyres: "Re: [OMPI users] OMPI and NPB3.2.1"</a>
<li><strong>In reply to:</strong> <a href="3054.php">Joe Griffin: "Re: [OMPI users] -prefix not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3115.php">Mostyn Lewis: "[OMPI users] How do you switch off paffinity?"</a>
<li><strong>Reply:</strong> <a href="3115.php">Mostyn Lewis: "[OMPI users] How do you switch off paffinity?"</a>
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
