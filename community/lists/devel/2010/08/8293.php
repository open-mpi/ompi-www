<?
$subject_val = "[OMPI devel] Fwd: [all-osl-users] Outage of the OSL NFS server";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 18 14:34:30 2010" -->
<!-- isoreceived="20100818183430" -->
<!-- sent="Wed, 18 Aug 2010 11:35:55 -0700" -->
<!-- isosent="20100818183555" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [all-osl-users] Outage of the OSL NFS server" -->
<!-- id="85005161-E0BC-49D4-ADFC-5D6826E7C409_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DE8244FD-DA4F-4321-BB31-CD3CA1498AB5_at_osl.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: [all-osl-users] Outage of the OSL NFS server<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-18 14:35:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8294.php">Brice Goglin: "Re: [OMPI devel] knem_dma_min"</a>
<li><strong>Previous message:</strong> <a href="8292.php">Ralf Wildenhues: "Re: [OMPI devel] [PATCH] openmpi: get it built with newer autoconf"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This means that SVN and Trac will be out as well.
<br>
<p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: DongInn Kim &lt;dikim_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: August 18, 2010 11:31:51 AM PDT
</span><br>
<span class="quotelev1">&gt; To: all-osl-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cc: Bruce Shing-Shong &lt;shei_at_[hidden]&gt;, Rob Henderson &lt;robh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [all-osl-users] Outage of the OSL NFS server
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We found that we need to load up a new kernel on all the OSL server machines and this is the perfect timing to reboot them to load up the new kernel.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We  would like to use the NFS outage time for rebooting the OSL server machines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following servers would be rebooted:
</span><br>
<span class="quotelev1">&gt; - sourcehaven
</span><br>
<span class="quotelev1">&gt; - milliways
</span><br>
<span class="quotelev1">&gt; - rontok
</span><br>
<span class="quotelev1">&gt; - deep-thought
</span><br>
<span class="quotelev1">&gt; - wowbagger
</span><br>
<span class="quotelev1">&gt; - eddie
</span><br>
<span class="quotelev1">&gt; - vogon
</span><br>
<span class="quotelev1">&gt; - magrathea
</span><br>
<span class="quotelev1">&gt; - gibson
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please let me know if you have any concerns or questions about the reboot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 18, 2010, at 11:39 AM, DongInn Kim wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There is the NFS server migration in the OSL.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We will migrate /l/osl/* to the new server (deep-thought) on Aug 20 and we expect the following services to be unavailable for an hour.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Date: Friday, Aug 20, 2010
</span><br>
<span class="quotelev2">&gt;&gt; TIme:
</span><br>
<span class="quotelev2">&gt;&gt; - 5:00am-6:00am Pacific US time
</span><br>
<span class="quotelev2">&gt;&gt; - 6:00am-7:00am Mountain US time
</span><br>
<span class="quotelev2">&gt;&gt; - 7:00am-8:00am Central US time
</span><br>
<span class="quotelev2">&gt;&gt; - 8:00am-9:00am Eastern US time
</span><br>
<span class="quotelev2">&gt;&gt; - 12:00pm-1:00pm GMT
</span><br>
<span class="quotelev2">&gt;&gt; Unavailable services:
</span><br>
<span class="quotelev2">&gt;&gt; - All the websites sitting on NFS.
</span><br>
<span class="quotelev2">&gt;&gt; 	<a href="http://www.open-mpi.org">http://www.open-mpi.org</a>
</span><br>
<span class="quotelev2">&gt;&gt; 	<a href="http://www.osl.iu.edu">http://www.osl.iu.edu</a>
</span><br>
<span class="quotelev2">&gt;&gt; 	<a href="http://www.scalabletools.org">http://www.scalabletools.org</a>
</span><br>
<span class="quotelev2">&gt;&gt; 	etc
</span><br>
<span class="quotelev2">&gt;&gt; - License servers
</span><br>
<span class="quotelev2">&gt;&gt; - Module features to load up or unload some specific versions of software
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Due to the recent malfunction to the NFS server connection on milliways, we need to reboot milliways at the same time(8AM E.T.) and it will take about 10~15 mins.
</span><br>
<span class="quotelev2">&gt;&gt; During the reboot of milliways, the following services would not be available:
</span><br>
<span class="quotelev2">&gt;&gt; - web
</span><br>
<span class="quotelev2">&gt;&gt; - mysql/postgresql
</span><br>
<span class="quotelev2">&gt;&gt; - mail / archive
</span><br>
<span class="quotelev2">&gt;&gt; - mailman
</span><br>
<span class="quotelev2">&gt;&gt; - jabber
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please let me know if you have any issues or question about the outage.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- DongInn Kim
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- DongInn Kim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8294.php">Brice Goglin: "Re: [OMPI devel] knem_dma_min"</a>
<li><strong>Previous message:</strong> <a href="8292.php">Ralf Wildenhues: "Re: [OMPI devel] [PATCH] openmpi: get it built with newer autoconf"</a>
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
