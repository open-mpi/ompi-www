<?
$subject_val = "Re: [OMPI users] Heterogeneous OpenFabrics hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 27 11:01:21 2009" -->
<!-- isoreceived="20090127160121" -->
<!-- sent="Tue, 27 Jan 2009 11:01:14 -0500" -->
<!-- isosent="20090127160114" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Heterogeneous OpenFabrics hardware" -->
<!-- id="66AE1B79-3C14-4E2B-A1DA-D97FD8F17282_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200901271619.10948.cap_at_nsc.liu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] Heterogeneous OpenFabrics hardware<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-27 11:01:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7862.php">Jeff Squyres: "Re: [OMPI users] OpenMPI-1.3 and XGrid"</a>
<li><strong>Previous message:</strong> <a href="7860.php">Anthony Thevenin: "Re: [OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7"</a>
<li><strong>In reply to:</strong> <a href="7858.php">Peter Kjellstrom: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 27, 2009, at 10:19 AM, Peter Kjellstrom wrote:
<br>
<p><span class="quotelev2">&gt;&gt; It is worth clarifying a point in this discussion that I neglected to
</span><br>
<span class="quotelev2">&gt;&gt; mention in my initial post: although Open MPI may not work *by
</span><br>
<span class="quotelev2">&gt;&gt; default* with heterogeneous HCAs/RNICs, it is quite possible/likely
</span><br>
<span class="quotelev2">&gt;&gt; that if you manually configure Open MPI to use the same verbs/ 
</span><br>
<span class="quotelev2">&gt;&gt; hardware
</span><br>
<span class="quotelev2">&gt;&gt; settings across all your HCAs/RNICs (assuming that you use a set of
</span><br>
<span class="quotelev2">&gt;&gt; values that is compatible with all your hardware) that MPI jobs
</span><br>
<span class="quotelev2">&gt;&gt; spanning multiple different kinds of HCAs or RNICs will work fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See this post on the devel list for a few more details:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2009/01/5314.php">http://www.open-mpi.org/community/lists/devel/2009/01/5314.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So is it correct that each rank will check its HCA-model and then  
</span><br>
<span class="quotelev1">&gt; pick up
</span><br>
<span class="quotelev1">&gt; suitable settings for that HCA?
</span><br>
<p>Correct.  We have an INI-style file that is installed in $pkgdir/mca- 
<br>
btl-openib-device-params.ini (typically expands to $prefix/share/ 
<br>
openmpi/mca-btl-openib-device-params.ini).  This file contains a bunch  
<br>
of device-specific parameters, but it also has a &quot;general&quot; section  
<br>
that can be applied to any device if no specific match is found.
<br>
<p><span class="quotelev1">&gt; If so maybe OpenMPI could fall back to a very conservative settings  
</span><br>
<span class="quotelev1">&gt; if more
</span><br>
<span class="quotelev1">&gt; than one HCA model was detected among the ranks. Or would this require
</span><br>
<span class="quotelev1">&gt; communication in a stage where that would be complicated and/or ugly?
</span><br>
<p><p>Today we don't do this kind of check; we just assume that every other  
<br>
MPI process is using the same hardware and/or the settings pulled from  
<br>
the INI file will be compatible.  AFAIK, most (all?) other MPI's do  
<br>
the same thing.
<br>
<p>We *could* do that kind of check:
<br>
<p>a) there hasn't been enough customer demand for it / no one has  
<br>
submitted a patch to do so
<br>
b) it might be a bit complicated because the startup sequence in the  
<br>
openib BTL is a little complex
<br>
c) we are definitely moving to a scenario (at scale) where there is  
<br>
little/no communication at startup about coordinating information from  
<br>
all of the MPI peer processes; this strategy might be problematic in  
<br>
those scenarios (i.e., the coordination / determination of  
<br>
&quot;conservative&quot; settings would have to be done by a human and likely  
<br>
pre-posted to a file on each node -- still hand-waving a bit because  
<br>
that design isn't finalized/implemented yet)
<br>
d) programatically finding what &quot;conservative&quot; settings are workable  
<br>
across a wide variety of devices may be problematic because individual  
<br>
device capabilities can vary wildly (does it have SRQ?  can it support  
<br>
more than one BSRQ?  what's a good MTU?  ...?)
<br>
<p>I think d) is a big sticking point; we *could* make extremely  
<br>
conservative settings that should probably work everywhere.  I can see  
<br>
at least one potential problematic scenario:
<br>
<p>- cluster has N nodes
<br>
- a year later, an HCA in 1 node dies
<br>
- get a new HCA, perhaps even from a different vendor
<br>
- capabilities of the new HCA and old HCAs are different
<br>
- so OMPI falls back to &quot;extreme conservative&quot; settings
<br>
- jobs that run on that one node suffer in performance
<br>
- jobs that do not run on that node see &quot;normal&quot; performance
<br>
- users are confused
<br>
<p>I suppose that we could print a Big Hairy Warning(tm) if we fall back  
<br>
to extreme conservative settings, but it still seems to create the  
<br>
potential to violate the Law of Least Astonishment.
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
<li><strong>Next message:</strong> <a href="7862.php">Jeff Squyres: "Re: [OMPI users] OpenMPI-1.3 and XGrid"</a>
<li><strong>Previous message:</strong> <a href="7860.php">Anthony Thevenin: "Re: [OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7"</a>
<li><strong>In reply to:</strong> <a href="7858.php">Peter Kjellstrom: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
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
