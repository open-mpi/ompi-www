<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 20 06:58:52 2007" -->
<!-- isoreceived="20070620105852" -->
<!-- sent="Wed, 20 Jun 2007 06:58:24 -0400" -->
<!-- isosent="20070620105824" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with user shell and mpirun-prefix" -->
<!-- id="B9D20E25-BC28-4454-91B4-C3259AF094D6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0706190834530.19554_at_iris03.slac.stanford.edu" -->
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
<strong>Date:</strong> 2007-06-20 06:58:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3515.php">Andrew Friedley: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
<li><strong>Previous message:</strong> <a href="3513.php">Jeff Squyres: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
<li><strong>In reply to:</strong> <a href="3502.php">Alf Wachsmann: "[OMPI users] Problem with user shell and mpirun-prefix"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 19, 2007, at 11:35 AM, Alf Wachsmann wrote:
<br>
<p><span class="quotelev1">&gt; In line 568 of openmpi-1.2.2/orte/mca/pls/rsh/pls_rsh_module.c
</span><br>
<span class="quotelev1">&gt; the call &quot;p = getpwuid(getuid());&quot; returns an invalid shell on our  
</span><br>
<span class="quotelev1">&gt; compute
</span><br>
<span class="quotelev1">&gt; nodes. This leads to &quot;pls:rsh: local csh: 0, local sh: 0&quot;, i.e. the  
</span><br>
<span class="quotelev1">&gt; local
</span><br>
<span class="quotelev1">&gt; shell is not defined and only the user's ~/.profile gets exectuted  
</span><br>
<span class="quotelev1">&gt; in lines
</span><br>
<span class="quotelev1">&gt; 649ff. This forces users to set their LD_LIBRARY_PATH instead of  
</span><br>
<span class="quotelev1">&gt; having
</span><br>
<span class="quotelev1">&gt; OpenMPI do this for them in lines 981ff.
</span><br>
<p>Wow -- neat!  We certainly didn't think of this case.  :-)
<br>
<p><span class="quotelev1">&gt; Before LSF starts a user job, it sets their complete environment  
</span><br>
<span class="quotelev1">&gt; including
</span><br>
<span class="quotelev1">&gt; the SHELL environment variable. I am wondering whether OpenMPI  
</span><br>
<span class="quotelev1">&gt; could look
</span><br>
<span class="quotelev1">&gt; at that env. variable in lines 567ff in addition to or instead of the
</span><br>
<span class="quotelev1">&gt; getpwuid() call.
</span><br>
<p>A good idea; yes, we can do this.  I'm sorry that it won't make the  
<br>
1.2.3 release, though.  I'll file a ticket.
<br>
<p>FWIW: we're actively working on native LSF support in Open MPI such  
<br>
that this kind of rsh tomfoolery won't be necessary in the future.   
<br>
We hope to have it ready for the 1.3 series.
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
<li><strong>Next message:</strong> <a href="3515.php">Andrew Friedley: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
<li><strong>Previous message:</strong> <a href="3513.php">Jeff Squyres: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
<li><strong>In reply to:</strong> <a href="3502.php">Alf Wachsmann: "[OMPI users] Problem with user shell and mpirun-prefix"</a>
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
