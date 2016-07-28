<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 18 08:22:03 2007" -->
<!-- isoreceived="20070918122203" -->
<!-- sent="Tue, 18 Sep 2007 08:21:51 -0400" -->
<!-- isosent="20070918122151" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business" -->
<!-- id="C13B14B5-D2C2-43E7-83FA-7FA96836EBAF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.62.0709172321490.23331_at_reliant.cs.utk.edu" -->
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
<strong>Date:</strong> 2007-09-18 08:21:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0412.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>Previous message:</strong> <a href="0410.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>In reply to:</strong> <a href="0410.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0412.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>Reply:</strong> <a href="0412.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 17, 2007, at 11:26 PM, Jelena Pjesivac-Grbovic wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to set up mtt client for collectives on UTK clusters and I
</span><br>
<span class="quotelev1">&gt; received the following error
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; ./client/mtt --scratch /home/pjesa/mtt/scratch/ \
</span><br>
<span class="quotelev1">&gt;     --file /home/pjesa/mtt/collective-bakeoff/samples/ompi-core- 
</span><br>
<span class="quotelev1">&gt; perf-testing.ini \
</span><br>
<span class="quotelev1">&gt;     --verbose --print-time
</span><br>
<span class="quotelev1">&gt; *** MTT: ./client/mtt --scratch /home/pjesa/mtt/scratch/ --file
</span><br>
<span class="quotelev1">&gt;    /home/pjesa/mtt/collective-bakeoff/samples/ompi-core-perf- 
</span><br>
<span class="quotelev1">&gt; testing.ini
</span><br>
<span class="quotelev1">&gt;    --verbose --print-time
</span><br>
<span class="quotelev1">&gt; *** WARNING: Unable to read hostfile: /home/pjesa/machinefile  --  
</span><br>
<span class="quotelev1">&gt; ignoring
</span><br>
<p>Note this error as well -- make sure that this hostfile exists.  If  
<br>
you're running under Torque, you probably don't need a hostfile (I'm  
<br>
not sure how well we've tested under Torque, but it won't be hard to  
<br>
fix if there's a problem).
<br>
<p><span class="quotelev1">&gt; *** Reporter initializing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Initializing reporter module: MTTDatabase
</span><br>
<span class="quotelev1">&gt;     Set HTTP credentials for realm &quot;OMPI&quot;
</span><br>
<span class="quotelev1">&gt; *** WARNING: &gt;&gt; Failed test ping to MTTDatabase URL:
</span><br>
<span class="quotelev1">&gt;      <a href="https://www.open-mpi.org:443/mtt/submit/">https://www.open-mpi.org:443/mtt/submit/</a>
</span><br>
<span class="quotelev1">&gt; *** WARNING: &gt;&gt; Error was: 501 Protocol scheme 'https' is not  
</span><br>
<span class="quotelev1">&gt; supported
</span><br>
<span class="quotelev1">&gt;      (Crypt::SSLeay not installed)
</span><br>
<span class="quotelev1">&gt;      LWP will support https URLs if the Crypt::SSLeay module is  
</span><br>
<span class="quotelev1">&gt; installed.
</span><br>
<span class="quotelev1">&gt;      More information at &lt;<a href="http://www.linpro.no/lwp/libwww-perl/">http://www.linpro.no/lwp/libwww-perl/</a> 
</span><br>
<span class="quotelev1">&gt; README.SSL&gt;.
</span><br>
<span class="quotelev1">&gt; *** ERROR: Module aborted: MTT::Reporter::MTTDatabase:Init: ***  
</span><br>
<span class="quotelev1">&gt; ERROR: &gt;&gt;
</span><br>
<span class="quotelev1">&gt;      Do not want to continue with possible bad submission URL --
</span><br>
<span class="quotelev1">&gt;          aborting
</span><br>
<p>It's not that MTT itself requires SSL, it's that the OMPI test  
<br>
results submission URL https because a password is sent.
<br>
<p>Sorry.  :-(
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
<li><strong>Next message:</strong> <a href="0412.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>Previous message:</strong> <a href="0410.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>In reply to:</strong> <a href="0410.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0412.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>Reply:</strong> <a href="0412.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
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
