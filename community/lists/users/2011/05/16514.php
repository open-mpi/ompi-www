<?
$subject_val = "[OMPI users] TotalView Memory debugging and OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 11 16:05:11 2011" -->
<!-- isoreceived="20110511200511" -->
<!-- sent="Wed, 11 May 2011 16:05:04 -0400" -->
<!-- isosent="20110511200504" -->
<!-- name="Peter Thompson" -->
<!-- email="peter.thompson_at_[hidden]" -->
<!-- subject="[OMPI users] TotalView Memory debugging and OpenMPI" -->
<!-- id="4DCAEBF0.3090000_at_roguewave.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] TotalView Memory debugging and OpenMPI<br>
<strong>From:</strong> Peter Thompson (<em>peter.thompson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-11 16:05:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16515.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16513.php">Tran Hai Quan: "[OMPI users] error with checkpoint in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16517.php">Ralph Castain: "Re: [OMPI users] TotalView Memory debugging and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="16517.php">Ralph Castain: "Re: [OMPI users] TotalView Memory debugging and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="16555.php">Jeff Squyres: "Re: [OMPI users] TotalView Memory debugging and OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We've gotten a few reports of problems with memory debugging when using 
<br>
OpenMPI under TotalView.  Usually, TotalView will attach tot he 
<br>
processes started after an MPI_Init.  However in the case where memory 
<br>
debugging is enabled, things seemed to run away or fail.   My analysis 
<br>
showed that we had a number of core files left over from the attempt, 
<br>
and all were mpirun (or orterun) cores.   It seemed to be a regression 
<br>
on our part, since testing seemed to indicate this worked okay before 
<br>
TotalView 8.9.0-0, so I filed an internal bug and passed it to 
<br>
engineering.   After giving our engineer a brief tutorial on how to 
<br>
build a debug version of OpenMPI, he found what appears to be a problem 
<br>
in the code for orterun.c.   He's made a slight change that fixes the 
<br>
issue in 1.4.2, 1.4.3, 1.4.4rc2 and 1.5.3, those being the versions he's 
<br>
tested with so far.    He doesn't subscribe to this list that I know of, 
<br>
so I offered to pass this by the group.   Of course, I'm not sure if 
<br>
this is exactly the right place to submit patches, but I'm sure you'd 
<br>
tell me where to put it if I'm in the wrong here.   It's a short patch, 
<br>
so I'll cut and paste it, and attach as well, since cut and paste can do 
<br>
weird things to formatting.
<br>
<p>Credit goes to Ariel Burton for this patch.  Of course he used TotalVIew 
<br>
to find this ;-)  It shows up if you do 'mpirun -tv -np 4 ./foo'   or 
<br>
'totalview mpirun -a -np 4 ./foo'
<br>
<p>Cheers,
<br>
PeterT
<br>
<p><p>&nbsp;more ~/patches/anbs-patch
<br>
*** orte/tools/orterun/orterun.c        2010-04-13 13:30:34.000000000 -0400
<br>
--- 
<br>
/home/anb/packages/openmpi-1.4.2/linux-x8664-iwashi/installation/bin/../../.
<br>
./src/openmpi-1.4.2/orte/tools/orterun/orterun.c        2011-05-09 
<br>
20:28:16.5881
<br>
83000 -0400
<br>
***************
<br>
*** 1578,1588 ****
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != env) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size1 = opal_argv_count(env);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (j = 0; j &lt; size1; ++j) {
<br>
!             putenv(env[j]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* All done */
<br>
&nbsp;
<br>
--- 1578,1600 ----
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != env) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size1 = opal_argv_count(env);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (j = 0; j &lt; size1; ++j) {
<br>
!             /* Use-after-Free error possible here.  putenv does not copy
<br>
!                the string passed to it, and instead stores only the 
<br>
pointer.
<br>
!                env[j] may be freed later, in which case the pointer
<br>
!                in environ will now be left dangling into a deallocated
<br>
!                region.
<br>
!                So we make a copy of the variable.
<br>
!             */
<br>
!             char *s = strdup(env[j]);
<br>
!
<br>
!             if (NULL == s) {
<br>
!                 return OPAL_ERR_OUT_OF_RESOURCE;
<br>
!             }
<br>
!             putenv(s);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* All done */
<br>
&nbsp;
<br>
<p><p>
<br><p>
*** orte/tools/orterun/orterun.c	2010-04-13 13:30:34.000000000 -0400
<br>
--- /home/anb/packages/openmpi-1.4.2/linux-x8664-iwashi/installation/bin/../../../src/openmpi-1.4.2/orte/tools/orterun/orterun.c	2011-05-09 20:28:16.588183000 -0400
<br>
***************
<br>
*** 1578,1588 ****
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != env) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size1 = opal_argv_count(env);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (j = 0; j &lt; size1; ++j) {
<br>
!             putenv(env[j]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* All done */
<br>
&nbsp;&nbsp;
<br>
--- 1578,1600 ----
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != env) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size1 = opal_argv_count(env);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (j = 0; j &lt; size1; ++j) {
<br>
!             /* Use-after-Free error possible here.  putenv does not copy
<br>
!                the string passed to it, and instead stores only the pointer.
<br>
!                env[j] may be freed later, in which case the pointer
<br>
!                in environ will now be left dangling into a deallocated
<br>
!                region.
<br>
!                So we make a copy of the variable.
<br>
!             */
<br>
!             char *s = strdup(env[j]);
<br>
! 
<br>
!             if (NULL == s) {
<br>
!                 return OPAL_ERR_OUT_OF_RESOURCE;
<br>
!             }
<br>
!             putenv(s);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* All done */
<br>
&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16515.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16513.php">Tran Hai Quan: "[OMPI users] error with checkpoint in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16517.php">Ralph Castain: "Re: [OMPI users] TotalView Memory debugging and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="16517.php">Ralph Castain: "Re: [OMPI users] TotalView Memory debugging and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="16555.php">Jeff Squyres: "Re: [OMPI users] TotalView Memory debugging and OpenMPI"</a>
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
