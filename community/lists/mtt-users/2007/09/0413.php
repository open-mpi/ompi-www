<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 18 18:37:03 2007" -->
<!-- isoreceived="20070918223703" -->
<!-- sent="Tue, 18 Sep 2007 18:36:52 -0400" -->
<!-- isosent="20070918223652" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business" -->
<!-- id="973EB06E-9157-4970-80C1-BFC230FCED17_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.62.0709181743520.6095_at_reliant.cs.utk.edu" -->
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
<strong>Date:</strong> 2007-09-18 18:36:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0414.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>Previous message:</strong> <a href="0412.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>In reply to:</strong> <a href="0412.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0414.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>Reply:</strong> <a href="0414.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 18, 2007, at 5:48 PM, Jelena Pjesivac-Grbovic wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the info.
</span><br>
<span class="quotelev1">&gt; so I handled the ssl stuff (installed module locally and added &quot;use  
</span><br>
<span class="quotelev1">&gt; lib &lt;path to CRYPT::SSleys&gt;&quot; to client)
</span><br>
<span class="quotelev1">&gt; I am still having problems understanding what is going on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The system I am running on uses PBS, but I wanted to use it in  
</span><br>
<span class="quotelev1">&gt; interactive
</span><br>
<span class="quotelev1">&gt; mode so I wanted to specify hostfiles.
</span><br>
<span class="quotelev1">&gt; I am receiving the following warnings
</span><br>
<span class="quotelev1">&gt; ---------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Test run [netpipe]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Running with [ompi-nightly-v1.2] / [1.2.4b1r16141] /
</span><br>
<span class="quotelev1">&gt; [ompi/gnu-standard]
</span><br>
<span class="quotelev1">&gt;     Using MPI Details [ompi] with MPI Install [ompi/gnu-standard]
</span><br>
<span class="quotelev1">&gt;     Total of 1 tests to run in this section
</span><br>
<span class="quotelev1">&gt;     Test: NPmpi, np=2, variant=1: Passed
</span><br>
<span class="quotelev1">&gt; *** WARNING: Unrecognized resource manager name (hostfile); the only
</span><br>
<span class="quotelev1">&gt;      permitted names are: &quot;slurm tm loadleveler n1ge none unknown&quot;;  
</span><br>
<span class="quotelev1">&gt; skipped
</span><br>
<p>Doh -- looks like a corner case that I missed (if you use a hostfile,  
<br>
it should automatically set the resource manager to &quot;none&quot;, I would  
<br>
think).  Did you set a value for &quot;resource_manager&quot; in the INI file?   
<br>
If so, take it out or just set it to none.  I'll file a bug to fix  
<br>
this tomorrow (i.e., if you don't set it at all and are using a  
<br>
hostlist/hostfile, the Right Thing happens).
<br>
<p>For the moment, this is just a warning, so you can ignore it.
<br>
<p><span class="quotelev1">&gt;     Test: NPmpi, np=2, variant=2: Passed
</span><br>
<span class="quotelev1">&gt; *** WARNING: Unrecognized resource manager name (hostfile); the only
</span><br>
<span class="quotelev1">&gt;      permitted names are: &quot;slurm tm loadleveler n1ge none unknown&quot;;  
</span><br>
<span class="quotelev1">&gt; skipped
</span><br>
<span class="quotelev1">&gt;     Test: NPmpi, np=2, variant=3: Passed
</span><br>
<span class="quotelev1">&gt; ---------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is causing this warning? (apart from the fact that hostfile is  
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; known_resource_manager_names in Defaults.pm)
</span><br>
<span class="quotelev1">&gt; What does it mean?
</span><br>
<span class="quotelev1">&gt; I think I should set resource manager to none - but I am not sure  
</span><br>
<span class="quotelev1">&gt; where.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was able to submit trial results for NP to the database, but OSU  
</span><br>
<span class="quotelev1">&gt; tests
</span><br>
<span class="quotelev1">&gt; are timing out.
</span><br>
<p>If you want to see why the OSU tests are timing out, all the stdout/ 
<br>
stderr should be sent to the database and you can view it in the web  
<br>
reporter.  If you're submitting trials, you need to go into the  
<br>
[preferences] link and enable the checkbox to show trials.  You can  
<br>
also fill in &quot;testbake&quot; in the search description field (or &quot;bakeoff&quot;  
<br>
if you're running real numbers) in the [advanced] link to help  
<br>
further delimit your searching in the reporter.
<br>
<p>It's usually easiest to search for your organization (utk) for &quot;past  
<br>
15 minutes&quot; or something like that when you're running a bunch of  
<br>
little tests.  Then you can find the specific test that you're  
<br>
looking for, look at the stdout, etc.
<br>
<p>Make sense?
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
<li><strong>Next message:</strong> <a href="0414.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>Previous message:</strong> <a href="0412.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>In reply to:</strong> <a href="0412.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0414.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
<li><strong>Reply:</strong> <a href="0414.php">Jeff Squyres: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for business"</a>
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
