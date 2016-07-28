<?
$subject_val = "[OMPI users] Problems Compiling ULFM";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 07:49:29 2015" -->
<!-- isoreceived="20150706114929" -->
<!-- sent="Mon, 06 Jul 2015 13:49:19 +0200" -->
<!-- isosent="20150706114919" -->
<!-- name="Rafael Lago" -->
<!-- email="rafael.lago_at_[hidden]" -->
<!-- subject="[OMPI users] Problems Compiling ULFM" -->
<!-- id="2621021.7TEj2qn2SF_at_mpcdflrafapc" -->
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
<strong>Subject:</strong> [OMPI users] Problems Compiling ULFM<br>
<strong>From:</strong> Rafael Lago (<em>rafael.lago_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-06 07:49:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27253.php">George Bosilca: "Re: [OMPI users] Problems Compiling ULFM"</a>
<li><strong>Previous message:</strong> <a href="27251.php">Ralph Castain: "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27253.php">George Bosilca: "Re: [OMPI users] Problems Compiling ULFM"</a>
<li><strong>Reply:</strong> <a href="27253.php">George Bosilca: "Re: [OMPI users] Problems Compiling ULFM"</a>
<li><strong>Reply:</strong> <a href="27254.php">Gilles Gouaillardet: "Re: [OMPI users] Problems Compiling ULFM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello there!
<br>
I'm trying to work in a fault-tolerance project, and I immediately got 
<br>
interested in the ULFM extension of OpenMPI. Although I've managed to compile 
<br>
and install OpenMPI-1.8.6 without a problem, I have been failing so far to 
<br>
compile ULFM.
<br>
<p>I am trying to follow the instructions in 
<br>
<a href="http://fault-tolerance.org/ulfm/ulfm-setup/">http://fault-tolerance.org/ulfm/ulfm-setup/</a>
<br>
but it seems that it is not enough. I'm using
<br>
m4-1.4.12
<br>
autoconf-2.69
<br>
automake-1.14.1
<br>
libtool-2.4.2
<br>
gcc-4.9.3
<br>
and I'm trying the mercurial version of ULFM. I am configuring with the exact 
<br>
command provided in the above link. When I try to make, I get the following 
<br>
error:
<br>
<p>make[2]: Leaving directory 
<br>
`/hydra/u/lrafa/local/ulfm/build/orte/mca/plm/slurm'
<br>
Making all in mca/plm/poe
<br>
make[2]: Entering directory `/hydra/u/lrafa/local/ulfm/build/orte/mca/plm/poe'
<br>
&nbsp;&nbsp;CC       plm_poe_component.lo
<br>
&nbsp;&nbsp;CC       plm_poe.lo
<br>
../../../../../orte/mca/plm/poe/plm_poe.c: In function 'spawn':
<br>
../../../../../orte/mca/plm/poe/plm_poe.c:135:34: error: 'orte_rmaps_t' has no 
<br>
member named 'get_job_map'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == (map = orte_rmaps.get_job_map(jdata-&gt;jobid))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../../../orte/mca/plm/poe/plm_poe.c:222:42: error: 'orte_job_map_t' has 
<br>
no member named 'policy'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_MAPPING_BYNODE &amp; map-&gt;policy) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
make[2]: *** [plm_poe.lo] Error 1
<br>
make[2]: Leaving directory `/hydra/u/lrafa/local/ulfm/build/orte/mca/plm/poe'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/hydra/u/lrafa/local/ulfm/build/orte'
<br>
make: *** [all-recursive] Error 1
<br>
<p>Has anybody experienced that?
<br>
Thanks in advance! Slainte
<br>
Rafael Lago
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27253.php">George Bosilca: "Re: [OMPI users] Problems Compiling ULFM"</a>
<li><strong>Previous message:</strong> <a href="27251.php">Ralph Castain: "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27253.php">George Bosilca: "Re: [OMPI users] Problems Compiling ULFM"</a>
<li><strong>Reply:</strong> <a href="27253.php">George Bosilca: "Re: [OMPI users] Problems Compiling ULFM"</a>
<li><strong>Reply:</strong> <a href="27254.php">Gilles Gouaillardet: "Re: [OMPI users] Problems Compiling ULFM"</a>
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
