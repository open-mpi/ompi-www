<?
$subject_val = "Re: [OMPI users] openmpi 1.6.1 Questions";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 25 07:06:57 2012" -->
<!-- isoreceived="20120825110657" -->
<!-- sent="Sat, 25 Aug 2012 07:06:53 -0400" -->
<!-- isosent="20120825110653" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.6.1 Questions" -->
<!-- id="13274E8C-2D99-4FFF-BFA3-52087B5A7AAA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="66A8D099-223D-49DC-BDB7-996F5D101D6F_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.6.1 Questions<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-25 07:06:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20009.php">Jeff Squyres: "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="20007.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<li><strong>In reply to:</strong> <a href="20001.php">Brock Palen: "Re: [OMPI users] openmpi 1.6.1 Questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20010.php">Brock Palen: "Re: [OMPI users] openmpi 1.6.1 Questions"</a>
<li><strong>Reply:</strong> <a href="20010.php">Brock Palen: "Re: [OMPI users] openmpi 1.6.1 Questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 24, 2012, at 10:45 AM, Brock Palen wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Right now we should be just warning if we can't register 3/4 of your physical memory (we can't really test for anything more than that).  But it doesn't abort.
</span><br>
<span class="quotelev1">&gt; Ok
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We could add a tunable that makes it abort in this case, if you think that would be useful.
</span><br>
<span class="quotelev1">&gt; I think so, in my case that would mean a node is miss-configured, and rather than running slowly I want it brought to my attention, 
</span><br>
<p><p>Ok, this is easy enough to add.  Due to a PGI compilation issue, it looks like we're going to probably roll a 1.6.2 in the immediate future; we can include this in there.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20009.php">Jeff Squyres: "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="20007.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<li><strong>In reply to:</strong> <a href="20001.php">Brock Palen: "Re: [OMPI users] openmpi 1.6.1 Questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20010.php">Brock Palen: "Re: [OMPI users] openmpi 1.6.1 Questions"</a>
<li><strong>Reply:</strong> <a href="20010.php">Brock Palen: "Re: [OMPI users] openmpi 1.6.1 Questions"</a>
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
