<?
$subject_val = "[OMPI devel] RFC: configure / m4 reorganization";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 26 09:48:26 2009" -->
<!-- isoreceived="20091026134826" -->
<!-- sent="Mon, 26 Oct 2009 09:48:21 -0400" -->
<!-- isosent="20091026134821" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: configure / m4 reorganization" -->
<!-- id="A9253582-7857-4EB8-A538-3AFA8C721FC9_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: configure / m4 reorganization<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-26 09:48:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7023.php">Rainer Keller: "[OMPI devel] RFC for patches r22113 and r22138 (and followup fixes)"</a>
<li><strong>Previous message:</strong> <a href="7021.php">Christopher Yeoh: "[OMPI devel] MPI_Grequest_start and MPI_Wait clarification"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Split configury across the opal, orte, and ompi trees as relevant.
<br>
<p>WHERE: mostly configure.ac, config/, opal/config/, orte/config/, and  
<br>
ompi/config/, and various component configure.m4 scripts
<br>
<p>WHY: To fix autogen's -no-ompi feature, fix the opalc++ and ortec++  
<br>
wrapper compilers, and improve the layering in the OMPI build system
<br>
<p>WHEN: Retroactive (see below)
<br>
<p>Details:
<br>
<p>Cisco recently had a desire to fix the long-broken -no-ompi option to  
<br>
autogen.sh.  So we did it, and along the way, it seemed useful to take  
<br>
a first swipe at splitting up OMPI's m4 scriptery to be in each of the  
<br>
projects where they are needed.  Specifically:
<br>
<p>- move OPAL-specific m4 to opal/config/
<br>
- move ORTE-specific m4 to orte/config/
<br>
- move OMPI-specific m4 to ompi/config/
<br>
<p>We got it *mostly* right before committing to the trunk, but there  
<br>
were a few lingering issues that took a few more commits over the next  
<br>
day or three to get right (sorry!).
<br>
<p>While waiting for some long compiles late last week, I took a second  
<br>
swipe at further separating obvious project-specific configury.  In  
<br>
particular, I moved and renamed resource manager checks to orte/ 
<br>
config, and moved and renamed network checks to ompi/config.
<br>
<p>Finally, we also fixed the opalc++ and ortec++ wrappers compilers --  
<br>
there were a few long-standing problems with them that probably no one  
<br>
had noticed/cared about.
<br>
<p>We did not send out an RFC before doing any of this work because we  
<br>
viewed the -no-ompi stuff as fixing a long-standing issue.  We viewed  
<br>
the m4 separation as a long-standing goal to help projects like STCI  
<br>
and others (i.e., improve the distinct layering in the build system).   
<br>
We didn't think that reorganizing the m4 stuff was a big deal, but in  
<br>
hindsight, it did touch a lot of files and we probably should have  
<br>
said something first.  I found out after the fact that in doing this  
<br>
work, we did expose at least one problem for another developer.  :- 
<br>
(  Our apologies.
<br>
<p>FWIW: it is unlikely that we'll be doing much (any?) further work on  
<br>
separating the configury in the near future.  Ralph filed a future- 
<br>
looking ticket about what *could* be done, if someone gets ambitious (<a href="https://svn.open-mpi.org/trac/ompi/ticket/2062">https://svn.open-mpi.org/trac/ompi/ticket/2062</a> 
<br>
).
<br>
<p>All this being said, we're open to discussion about all the work that  
<br>
was done.  If someone objects to it, please let us know -- if  
<br>
necessary, it may be possible to back out the project-specific m4  
<br>
trees from the -no-ompi autogen.sh and wrapper compiler fixes.
<br>
<p>Len -- can we add this to the agenda for tomorrow's teleconference,  
<br>
and perhaps also next week (if people don't have time to think about  
<br>
this in depth before tomorrow's teleconference)?
<br>
<p>Thanks!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7023.php">Rainer Keller: "[OMPI devel] RFC for patches r22113 and r22138 (and followup fixes)"</a>
<li><strong>Previous message:</strong> <a href="7021.php">Christopher Yeoh: "[OMPI devel] MPI_Grequest_start and MPI_Wait clarification"</a>
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
