<?
$subject_val = "[Open MPI Announce] New Open MPI release numbering scheme";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 20 07:09:10 2009" -->
<!-- isoreceived="20090320110910" -->
<!-- sent="Fri, 20 Mar 2009 07:09:01 -0400" -->
<!-- isosent="20090320110901" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[Open MPI Announce] New Open MPI release numbering scheme" -->
<!-- id="D079EB7A-73E2-4BBC-97A0-95888285C44D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [Open MPI Announce] New Open MPI release numbering scheme<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-20 07:09:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0029.php">Jeff Squyres: "[Open MPI Announce] Critical bug notice"</a>
<li><strong>Previous message:</strong> <a href="0027.php">Ralph Castain: "[Open MPI Announce] Open MPI v1.3.1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Short version:
<br>
--------------
<br>
<p>The Open MPI development team would like to announce a change in its  
<br>
release methodology.  Starting with the v1.3 series, the second digit  
<br>
in the Open MPI version number will carry additional significance:
<br>
<p>&nbsp;&nbsp;* _Even_ minor release numbers are part of &quot;super-stable&quot; release  
<br>
series (e.g., v1.4.x). Releases in super stable series are well- 
<br>
tested, time-tested, and mature. Such releases are recomended for  
<br>
production sites. Changes between subsequent releases in super stable  
<br>
series are expected to be fairly small.
<br>
<p>&nbsp;&nbsp;* _Odd_ minor release numbers are part of &quot;feature&quot; release series  
<br>
(e.g., 1.3.x). Releases in feature releases are well-tested, but they  
<br>
are not necessarily time-tested or as mature as super stable releases.  
<br>
Changes between subsequent releases in feature series may be large.   
<br>
Feature releases are expected to be &quot;somewhat frequent&quot;.
<br>
<p>Much more is explained on this wiki page: <a href="https://svn.open-mpi.org/trac/ompi/wiki/ReleaseMethodology">https://svn.open-mpi.org/trac/ompi/wiki/ReleaseMethodology</a>
<br>
<p>More details:
<br>
-------------
<br>
<p>(some of the text below is taken from the wiki page cited above)
<br>
<p>We have [at least] 2 competing forces in Open MPI:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;1. desire to release new features quickly. Fast is good.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2. desire to release based on production quality. Slow is good.
<br>
<p>The competition between these two forces has both created some tension  
<br>
in the Open MPI community as well as created a Very Long release cycle  
<br>
for OMPI v1.3 (yes, it was our specific and deliberate choice to be  
<br>
feature driven for v1.3 -- but it was still verrrrry loooong). Prior  
<br>
to the v1.3 series, we did not manage these competing forces well. We  
<br>
have come to realize that we should embrace both of these forces  
<br>
simultaneously, drawing inspiration from other well-established  
<br>
software release paradigms, such as:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Linux kernel &quot;odd/even&quot; version number release methodology
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Red Hat/Fedora stable vs. feature releases
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Agile development models
<br>
<p>Starting with the v1.3 series (although it wasn't formally decided  
<br>
until after v1.3.0 was released), Open MPI will have two concurrent  
<br>
release series:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;1. &quot;Super stable&quot;: for production users who care about stability  
<br>
above all else. They're willing to wait long periods of time before  
<br>
updating to a new version of Open MPI. Super Stable release series  
<br>
will have an even minor version number.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2. &quot;Feature driven&quot;: for users who are willing to take a few  
<br>
chances to get new OMPI features -- but cannot endure the chaos of  
<br>
nightly trunk tarballs. Feature release series will have an odd minor  
<br>
version number. Feature releases are expected to be &quot;somewhat  
<br>
frequent&quot;; probably no more often than once a month and no less often  
<br>
than once every three months.
<br>
<p>A typical release cycle starts with a &quot;feature&quot; series that eventually  
<br>
morphs into a &quot;super stable&quot; stable series.  Changes may be large  
<br>
between subreleases in feature series, while changes are expected to  
<br>
be fairly small in super stable subreleases.
<br>
<p>To bootstrap applying this release methodology to Open MPI:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;1. After the v1.3 series was released, it was declared a Feature  
<br>
release series.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* A small number of important features will be developed for  
<br>
the v1.3 series in subsequent v1.3.x releases.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* The v1.3 series will then morph into its Super Stable  
<br>
counterpart (v1.4) and only accept bug fixes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2. The v1.5 will branch from the development trunk and start  
<br>
working towards a v1.5.0 Feature release and eventual v1.6.0 Super  
<br>
Stable release.
<br>
<p>The wiki page contains more details: <a href="https://svn.open-mpi.org/trac/ompi/wiki/ReleaseMethodology">https://svn.open-mpi.org/trac/ompi/wiki/ReleaseMethodology</a>
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
<li><strong>Next message:</strong> <a href="0029.php">Jeff Squyres: "[Open MPI Announce] Critical bug notice"</a>
<li><strong>Previous message:</strong> <a href="0027.php">Ralph Castain: "[Open MPI Announce] Open MPI v1.3.1 released"</a>
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
