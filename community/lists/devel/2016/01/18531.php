<?
$subject_val = "[OMPI devel] Minutes from Telcon today";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 26 16:05:26 2016" -->
<!-- isoreceived="20160126210526" -->
<!-- sent="Tue, 26 Jan 2016 21:05:13 +0000" -->
<!-- isosent="20160126210513" -->
<!-- name="Geoffrey Paulsen" -->
<!-- email="gpaulsen_at_[hidden]" -->
<!-- subject="[OMPI devel] Minutes from Telcon today" -->
<!-- id="201601262105.u0QL5L5g019178_at_d03av01.boulder.ibm.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Minutes from Telcon today<br>
<strong>From:</strong> Geoffrey Paulsen (<em>gpaulsen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-26 16:05:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18532.php">Lisandro Dalcin: "[OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY"</a>
<li><strong>Previous message:</strong> <a href="18530.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<div class="socmaildefaultfont" dir="ltr" style="font-family:Arial;font-size:10.5pt" ><div dir="ltr" ><a href="https://github.com/open-mpi/ompi/wiki/WeeklyTelcon_20160126" >https://github.com/open-mpi/ompi/wiki/WeeklyTelcon_20160126</a></div>
<h1 dir="ltr" >Open MPI Weekly Telcon</h1>
<hr dir="ltr" ><ul dir="ltr" >        <li>Dialup Info: (Do not post to public mailing list or public wiki)</li></ul>
<h2 dir="ltr" >&nbsp;</h2>
<h2 dir="ltr" >Attendees</h2>
<ul dir="ltr" >        <li>Geoff Paulsen</li>        <li>Jeff Squyres</li>        <li>Brad Benton</li>        <li>Edgar Gabriel</li>        <li>Geoffroy Vallee</li>        <li>Joshua Ladd</li>        <li>Nathan Hjelm</li>        <li>Ralph Castain</li>        <li>Ryan Grant</li>        <li>Sylvain Jeaugey</li>        <li>Todd Kordenbrock</li></ul>
<hr dir="ltr" ><h2 dir="ltr" >&nbsp;</h2>
<h2 dir="ltr" >Agenda</h2>
<h3 dir="ltr" >&nbsp;</h3>
<h3 dir="ltr" >Review 1.10</h3>
<ul dir="ltr" >        <li>Milestones: <a href="https://github.com/open-mpi/ompi-release/milestones/v1.10.3" >https://github.com/open-mpi/ompi-release/milestones/v1.10.3</a></li>        <li>1.10.2 went out the Door.</li>        <li>Already have a bug (Giles) Ralph fixed.</li>        <li>Another bug Fortran - broken F08 bindings (Jeff) saw late last night.
        <ul>                <li>Issue <a href="https://github.com/open-mpi/ompi/issues/1323" >https://github.com/open-mpi/ompi/issues/1323</a></li>                <li>If it's broken, how did it pass testing? Jeff needs a day or two to dig into.</li>        </ul>        </li>        <li>Need to verify that library versions are still correct? -Jeff took care of.</li>        <li>MPI_Abort investigation (Ralph)? - Periodically have this issue where MPI_Abort + MTT has some issue. Perl is suspect, Ralph will look into ruby or another language.</li>        <li>1.10 C Strided mutex lock issue. (Nathan)?</li>        <li>High CPU utilization on Async progress thread (Ralph)? Ralph Fixed... One off 1.10, not in master. In 1.10.2</li></ul>
<h3 dir="ltr" >&nbsp;</h3>
<h3 dir="ltr" >Review 2.0.x</h3>
<ul dir="ltr" >        <li>Wiki: <a href="https://github.com/open-mpi/ompi/wiki/Releasev20" >https://github.com/open-mpi/ompi/wiki/Releasev20</a></li>        <li>Blocker Issues: <a href="https://github.com/open-mpi/ompi/issues?utf8=%E2%9C%93&amp;q=is%3Aopen+milestone%3Av2.0.0+label%3Ablocker" >https://github.com/open-mpi/ompi/issues?utf8=%E2%9C%93&amp;q=is%3Aopen+milestone%3Av2.0.0+label%3Ablocker</a>        <ol>                <li>Issue 1252 - Nathan's progression decay function progress? Looking at files today.
                <ul>                        <li>udcm, openib_error_handler - opal_outputs would be sufficent.</li>                </ul>                </li>                <li>Issue 1215 - Group Comm Errors thing (Ralph) - Deal with race condition in ORTE collectives.
                <ul>                        <li>Launch goes down the tree. Mutex goes across the tree.</li>                        <li>So possible to receive a modex message before you receive launch message.</li>                </ul>                </li>        </ol>        </li>        <li>Milestones: <a href="https://github.com/open-mpi/ompi-release/milestones/v2.0.0" >https://github.com/open-mpi/ompi-release/milestones/v2.0.0</a></li>        <li>Group Comms weren't working for Comms of powers of 2. (Nathan)? Fixed.</li>        <li>ROMIO default for OMPI on Luster (only) PR 896?</li>        <li>894, 890, 900, 901 - Jeff and Howard are good with. Jeff?
        <ul>                <li>Taking all of those merged.</li>        </ul>        </li>        <li>Issue 1292 - Asked Ralph if this is right way to fix this. (Ralph)</li>        <li>Issue 1177 - large message writev, fixed but not merged to master - Test working everywhere but OS X / BSD (George).
        <ul>                <li>OS X / BSD limits large message total size to 32K?</li>                <li>Not going to fix for 2.0.0</li>                <li>Someone can write code to handle OS X / BSD.</li>        </ul>        </li>        <li>Issue 1299 - hang (Nathan)? Need to go ahead an fix this today. Giles has patch, Nathan just needs to verify.</li>        <li>2.0.0 does not compile on Solaris due to statfs(). Now that we moved to OMPIO, we're now hitting the problem.
        <ul>                <li>Edgar is working on it. Solaris has different number of args and return code.</li>        </ul>        </li>        <li>Issue 1301 - check max CQ size before creating CQ. (Josh)
        <ul>                <li>If it passes Jenkins, happy. UD OOB (Mellanox runs). Approved, Pending Jenkins.</li>        </ul>        </li>        <li>HWThreads - Ralph? Talk to Mike about use case? A commit has been done, and moved to 1.10.
        <ul>                <li>Pinged Giles that it should go to 2.0 also.</li>        </ul>        </li>        <li>Travis Status on 2.0?
        <ul>                <li>Going well.</li>        </ul>        </li>        <li>Nathan is good with 2.0 for 1sided</li>        <li>PR918 - Ralph reviewed on master. Giles PRed it to 2.0.</li>        <li>PR919 - hwloc - Ralph will review</li>        <li>PR911 - use correct endpoint. Just got word from nVidia that this is good.</li>        <li>PR917 - Ryan will look at today. LANL hardware that hits this is going away. Doesn't affect Aries. Aries doesn't have get_alignment(). Want this in.</li></ul>
<h3 dir="ltr" >&nbsp;</h3>
<h3 dir="ltr" >Review Master?</h3>
<ul dir="ltr" >        <li>BTL flags = 305 perf got horrible? Edgar? Worked around by removing this on his cluster. Don't understand why. He always used to set it, but now doesn't.</li>        <li>OMPIO not finding PDFS2 - configure work Edgar is</li></ul>
<h3 dir="ltr" >&nbsp;</h3>
<h3 dir="ltr" >MTT status:</h3>
<ul dir="ltr" >        <li>Cisco was showing timeouts. Jeff found 2 things on cluster. Specific problem couldn't replicate.
        <ul>                <li>not handling OOB on Master or 1.10. Cisco cluster 4 or 5 IP addresses on each node. eth0 was down on one node. Timeout on eth0 was taking quite a while. Jeff removed those two nodes. Unusual for real world. OOB verbosity exposes.</li>                <li>Long running problem, need a good solution.</li>        </ul>        </li></ul>
<h3 dir="ltr" >&nbsp;</h3>
<h3 dir="ltr" >Status Updates:</h3>
<ul dir="ltr" >        <li>Cisco - Been working on Cluster, Release issues with Howard. have a couple of small scalability improvements for usNIC.</li>        <li>ORNL - Not much to report. Any progress with UBUNTU package ownership? Geoffroy will look on Saturday.</li>        <li>UTK - Not much to report.</li>        <li>NVIDIA - Sylvain not much, A user issue not finding CUDA. User got an error message in log, but job ran fine.
        <ul>                <li>Looking at some error</li>        </ul>        </li></ul>
<h3 dir="ltr" >&nbsp;</h3>
<h3 dir="ltr" >New items (dev list discussions, RFCs, etc)</h3>
<ul dir="ltr" >        <li>Discussion about configure summary at end of configure?
        <ul>                <li>67 Frameworks and over 200 components.</li>                <li>6 Major Frameworks: RAZ, PLM, PML, MTL, BTL, OOB.
                <ul>                        <li>Could someone moch up what they'd like to see.</li>                </ul>                </li>                <li>Leary of runtime environment. Moab on top of SLURM, then there are env vars that are not job related.</li>                <li>ompi_info to lookup how it was built.</li>                <li>--with behavior to help also.</li>        </ul>
        <h2>&nbsp;</h2>        </li></ul>
<h2 dir="ltr" >* Decided to add to Feb Face2Face.</h2></div><BR>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18532.php">Lisandro Dalcin: "[OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY"</a>
<li><strong>Previous message:</strong> <a href="18530.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
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
