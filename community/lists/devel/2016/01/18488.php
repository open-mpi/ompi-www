<?
$subject_val = "[OMPI devel] Minutes from today's Telcon";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 12 13:28:29 2016" -->
<!-- isoreceived="20160112182829" -->
<!-- sent="Tue, 12 Jan 2016 18:28:18 +0000" -->
<!-- isosent="20160112182818" -->
<!-- name="Geoffrey Paulsen" -->
<!-- email="gpaulsen_at_[hidden]" -->
<!-- subject="[OMPI devel] Minutes from today's Telcon" -->
<!-- id="201601121828.u0CISPYm028044_at_d03av02.boulder.ibm.com" -->
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
<strong>Subject:</strong> [OMPI devel] Minutes from today's Telcon<br>
<strong>From:</strong> Geoffrey Paulsen (<em>gpaulsen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-12 13:28:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18489.php">Geoffrey Paulsen: "[OMPI devel] Please sign up on wiki if you're coming to Face 2 Face in Dallas Feb 23-25"</a>
<li><strong>Previous message:</strong> <a href="18487.php">Nick Papior: "Re: [OMPI devel] Question for researchers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<div class="socmaildefaultfont" dir="ltr" style="font-family:Arial;font-size:10.5pt" ><div dir="ltr" >Also available here:</div>
<div dir="ltr" >&nbsp;</div>
<div dir="ltr" ><a href="https://github.com/open-mpi/ompi/wiki/WeeklyTelcon_20160112" >https://github.com/open-mpi/ompi/wiki/WeeklyTelcon_20160112</a></div>
<div dir="ltr" >&nbsp;</div>
<div dir="ltr" ><h1>Open MPI Weekly Telcon</h1>
<hr><ul>        <li>Dialup Info: (Do not post to public mailing list or public wiki)</li></ul>
<h2>&nbsp;</h2>
<h2>Attendees</h2>
<ul>        <li>Brad Benton</li>        <li>Edgar Gabriel</li>        <li>Geoffroy Vallee</li>        <li>George</li>        <li>Howard</li>        <li>Josh Hursey</li>        <li>Nathan Hjelm</li>        <li>Ralph</li>        <li>Ryan Grant</li>        <li>Sylvain Jeaugey</li>        <li>Todd Kordenbrock</li></ul>
<hr><h2>&nbsp;</h2>
<h2>Minutes</h2>
<h3>&nbsp;</h3>
<h3>Review 1.10</h3>
<ul>        <li>Milestones: <a href="https://github.com/open-mpi/ompi-release/milestones/v1.10.2" >https://github.com/open-mpi/ompi-release/milestones/v1.10.2</a>
        <ul>                <li>mpirun hangs on ONLY SLES 12. Minimum 40 procs/node. at very end of mpirun. Only seeing it in certain cases. Not sure what's going on.</li>                <li>Is mpirun not exiting because ORTED not exiting? Nathan saw this on 2.0</li>                <li>wait for Paul Hardgrove.</li>                <li>No objections for Ralph shipping 1.10.2</li>        </ul>        </li></ul>
<h3>&nbsp;</h3>
<h3>Review 2.0.x</h3>
<ul>        <li>Wiki: <a href="https://github.com/open-mpi/ompi/wiki/Releasev20" >https://github.com/open-mpi/ompi/wiki/Releasev20</a></li>        <li>Blocker Issues: <a href="https://github.com/open-mpi/ompi/issues?utf8=%E2%9C%93&amp;q=is%3Aopen+milestone%3Av2.0.0+label%3Ablocker" >https://github.com/open-mpi/ompi/issues?utf8=%E2%9C%93&amp;q=is%3Aopen+milestone%3Av2.0.0+label%3Ablocker</a></li>        <li>Milestones: <a href="https://github.com/open-mpi/ompi-release/milestones/v2.0.0" >https://github.com/open-mpi/ompi-release/milestones/v2.0.0</a>        <ul>                <li>Group Comms weren't working for Comms of powers of 2. Nathan found massive memory issue.</li>                <li><a href="https://github.com/open-mpi/ompi/issues/1252" >https://github.com/open-mpi/ompi/issues/1252</a> - Nathan working on a decay function for progress functions to "fix" this.
                <ul>                        <li>Nathan's been delayed until later this week. Could get done by middle of next week.</li>                        <li>George commented that openib btl specificly could be made to only progress if there is a send/recv message posted.
                        <ul>                                <li>ugeniee progress - could only check for data grams every (only 200ns hit).</li>                        </ul>                        </li>                        <li>Prefer to stick with nathan's original decay function without modifying openib.</li>                </ul>                </li>                <li><a href="https://github.com/open-mpi/ompi/issues/1225" >https://github.com/open-mpi/ompi/issues/1225</a> - Totalview debugger problem + PMPI-x.
                <ul>                        <li>SLURM users use srun, doesn't have this issue.</li>                        <li>DDT does NOT have this issue either. Don't know why it's different. Attach FIFO.
                        <ul>                                <li>mpirun waits on a pipe for debugger to write a 1 on that pipe.</li>                                <li>Don't see how that CAN work.</li>                                <li>Nathan's been using attach, rather than mpirun --debug. Attach happens after launch, so then it's not going through this step. Nathan thinks not so critical since attach works.</li>                        </ul>                        </li>                        <li>Anything will work, as long as you're ATTACHING to a running job, rather than launching through debugger.</li>                        <li>Barring a breakthrough with PMI-x notify in next week. We'll do an RC2 and just carfully document what works/doesn't as far as debuggers.</li>                        <li>Will disable <em>"mpirun --debug"</em> and print an error on 2.0 branch that says it's broken.</li>                        <li>No longer a blocker for 2.0.0 due to schedule. Still want to fix this for next release.</li>                </ul>                </li>                <li>No new features (except for
                <ul>                        <li>Howard will review</li>                        <li>review group comm</li>                        <li>don't know if we'll bother with pls filesystem.</li>                </ul>                </li>                <li>UXC using Modex stuff.</li>                <li>OMPI-IO + Luster slow on 2.0.0 (and master) branches. Discussed making ROMIO default for OMPI on Luster (only).</li>        </ul>        </li></ul>
<h3>&nbsp;</h3>
<h3>Review Master?</h3>
<ul>        <li>Bunch of failures on Master branch. No chance to look at yet.</li>        <li>Cisco and Ivy cluster.</li>        <li>Nathan's seeing a resource deadlock avoided on OMPI Waitall. Some TCP BTL issue. Looks like something going on down there. Should be fairly easy to test this. Cisco TCP one-sided stuff.
        <ul>                <li>Nathan will see if he can figure this out. Haven't changed one-sided pt2pt receintly. Surprised. Maybe proclocks on by default? Need to work this out. Just changed locks from being conditional to being unconditional.</li>        </ul>        </li>        <li>        <p>Edgar found some luster issues. OMPI master, has bad MPI-IO performance on luster. Looked reasonable on master, but now performance is poor. Not completely sure when get performance</p>
        <ul>                <li>Luster itself, could switch back to ROMIO for default.</li>                <li>GPFS, and others will look good, but Luster is bad. Can't have OMPI-IO as default on Luster.</li>                <li>Problem for 2.0.0 AND Master Branch.</li>        </ul>        </li>        <li>        <p><a href="https://github.com/open-mpi/ompi/issues/398" >https://github.com/open-mpi/ompi/issues/398</a> ready for Pull request</p>
        <ul>                <li>Nathan - Should go to 2.1 (since mpull changes pushed to 2.1).</li>        </ul>        </li>        <li><a href="https://github.com/open-mpi/ompi/pull/1118" >https://github.com/open-mpi/ompi/pull/1118</a> - mpull rewrite should be ready to go, but want George to look at make comments. Probably one of first 2.1 requests after into master.</li>        <li><a href="https://github.com/open-mpi/ompi/pull/1296" >https://github.com/open-mpi/ompi/pull/1296</a> - PMI-x - Spreading changes from PMI-x across non-PMI-x infrastructure. Is that OKay?
        <ul>                <li>This is just making changes in GLUE that is OMPI specific.</li>                <li>Should go into 2.0.0. plugs leaks, but minor.. still good.</li>        </ul>        </li>        <li><a href="https://github.com/open-mpi/ompi/pull/1290" >https://github.com/open-mpi/ompi/pull/1290</a> - OPAL HOTEL problem. Do we need to get this into 2.0 as well?
        <ul>                <li>Definately needs to go into 2.0! Jeff is using it in 1.10.</li>        </ul>        </li>        <li><a href="https://github.com/open-mpi/ompi/pull/1278" >https://github.com/open-mpi/ompi/pull/1278</a> - Nathan might want to look at. Giles fixing derived datatypes in one-sided.
        <ul>                <li>Nathan says it looks okay. Perfectly reasonable to use two different sets of tags.</li>                <li>Absolutely a 2.0.0 bug as well.</li>                <li>Nathan will merge it, and open the PR.</li>        </ul>        </li></ul>
<h3>&nbsp;</h3>
<h3>Status Updates:</h3>
<ul>        <li>Mellanox - (via email update after the meeting) &gt; We are just now preparing the patch to open a PR. We’ve just finished testing this morning and got the ‘OK’ from UCX folks to open a PR. Sorry for the delay, we just wanted to be sure all the ‘t’s were crossed and ‘I’s dotted before submission.</li>        <li>Sandia - Ryan, working on getting some bug fixes for 2.0. No major issues</li>        <li>Intel - Working on MTT re-write. Trying to track down error notification thing. not much cycles.
        <ul>                <li>re-writing client in python, and make it more pluggable. and extending feature set, to handle broader range of stages.</li>                <li>Josh has been working on reporter side (last 6 months) with some students. Thinking about more flexible architecture.
                <ul>                        <li>rest interface around database, to support Python, and more flexible javascript reporter. Hopefully get that to a stage where people can play with.</li>                </ul>                </li>        </ul>        </li></ul></div>
<div dir="ltr" >&nbsp;</div>
<div dir="ltr" >&nbsp;</div></div><BR>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18489.php">Geoffrey Paulsen: "[OMPI devel] Please sign up on wiki if you're coming to Face 2 Face in Dallas Feb 23-25"</a>
<li><strong>Previous message:</strong> <a href="18487.php">Nick Papior: "Re: [OMPI devel] Question for researchers"</a>
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
