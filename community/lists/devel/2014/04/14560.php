<?
$subject_val = "[OMPI devel] v1.8.1 release";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 18 12:57:40 2014" -->
<!-- isoreceived="20140418165740" -->
<!-- sent="Fri, 18 Apr 2014 09:57:35 -0700" -->
<!-- isosent="20140418165735" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] v1.8.1 release" -->
<!-- id="C0E4C04E-D32A-4666-B4BE-7D341DE1EFDC_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] v1.8.1 release<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-18 12:57:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14561.php">Lisandro Dalcin: "[OMPI devel] querying Op commutativity for predefined reduction operations."</a>
<li><strong>Previous message:</strong> <a href="14559.php">Rolf vandeVaart: "Re: [OMPI devel] Possible bug with derived datatypes and openib BTL	in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14572.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.1 release"</a>
<li><strong>Reply:</strong> <a href="14572.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.1 release"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>As several of you know, we have had a report of a rather nasty bug in the 1.8.0 release - only manifests itself if you run as root, but some people unfortunately do so. This necessitates that we release 1.8.1 with that bug fix in the next week.
<br>
<p>I would like to get as many of the pending bug fixes as possible AND appropriate into that release. I'm specifically looking at bug fixes that (a) involve minimal change, and (b) affect primary use cases. Things that are at all questionable as to whether they are appropriate for the 1.8 series, involve significant code change, are in ancillary code areas, or simply aren't able to be reviewed in time will be deferred to 1.8.2.
<br>
<p>In this way, I am hoping to avoid releasing 1.8.1 only to be followed a few weeks later with another bug fix release. Thus, my intention is to get 1.8.1 out next week, and delay release of 1.8.2 by at least two months.
<br>
<p>What this means:
<br>
<p>* PLEASE get your CMRs reviewed ASAP. This falls primarily on Nathan and Manju, and a bit on Pasha. See my comments below as to your deadlines!!
<br>
<p>* I have asked Jeff to defer the OSHMEM CMRs to 1.8.2 as (a) we have to define a policy for how we deal with that code area (not every commit should be CMRd to 1.8!), and it isn't in the primary use area at this time
<br>
<p>* I have similarly asked Jeff to defer the Java CMR (and any new ones in that area) for the same reasons
<br>
<p>Note that I am on vacation all of next week, and I will *not* be responding to email during that time. I have asked Jeff to fill-in for me, and he has agreed to do so. He has my phone number in case he absolutely needs to call me about something, though I trust him enough to know that he won't do so unless absolutely necessary.
<br>
<p>Jeff and I have talked and agreed on a target release date for 1.8.1 of Thurs, April 24th. This means we need to roll a release candidate Tues, April 22nd. So any CMR that has *not* been cleared by COB Mon April 23rd will automatically be deferred to 1.8.2 - exceptions will *only* be accepted in cases of demonstrated catastrophic behavior.
<br>
<p>I appreciate everyone's cooperation, and deeply appreciate Jeff taking on the additional burden during my absence.
<br>
Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14560/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14561.php">Lisandro Dalcin: "[OMPI devel] querying Op commutativity for predefined reduction operations."</a>
<li><strong>Previous message:</strong> <a href="14559.php">Rolf vandeVaart: "Re: [OMPI devel] Possible bug with derived datatypes and openib BTL	in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14572.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.1 release"</a>
<li><strong>Reply:</strong> <a href="14572.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.1 release"</a>
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
