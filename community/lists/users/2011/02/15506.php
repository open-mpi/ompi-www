<?
$subject_val = "Re: [OMPI users] OpenMPI version syntax?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  3 10:34:09 2011" -->
<!-- isoreceived="20110203153409" -->
<!-- sent="Thu, 03 Feb 2011 10:33:45 -0500" -->
<!-- isosent="20110203153345" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI version syntax?" -->
<!-- id="4D4ACAD9.5010902_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF02C59A19.050E9817-ON8525782C.00135E6F-8525782C.0013B445_at_notes.aero.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI version syntax?<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-03 10:33:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15507.php">Gus Correa: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>Previous message:</strong> <a href="15505.php">Prentice Bisbal: "Re: [OMPI users] OpenMPI version syntax?"</a>
<li><strong>In reply to:</strong> <a href="15495.php">Jeffrey A Cummings: "Re: [OMPI users] OpenMPI version syntax?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeffrey A Cummings wrote:
<br>
<span class="quotelev1">&gt; The context was wrt the OpenMPI version that is bundled with a specific 
</span><br>
<span class="quotelev1">&gt; version of CentOS Linux which my IT folks are about to install on one of 
</span><br>
<span class="quotelev1">&gt; our servers.  Since the most recent 1.4 stream version is 1.4.3, I'm 
</span><br>
<span class="quotelev1">&gt; afraid that 1.4-4 is really some variant of 1.4 (i.e., 1.4.0) and hence 
</span><br>
<span class="quotelev1">&gt; not that new.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From:        Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To:        Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:        02/02/2011 07:38 PM
</span><br>
<span class="quotelev1">&gt; Subject:        Re: [OMPI users] OpenMPI version syntax?
</span><br>
<span class="quotelev1">&gt; Sent by:        users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 2, 2011, at 1:44 PM, Jeffrey A Cummings wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;  &gt; I've encountered a supposed OpenMPI version of 1.4-4.  Is the hyphen 
</span><br>
<span class="quotelev1">&gt; a typo or is this syntax correct and if so what does it mean?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this an RPM version number?  It's fairly common for RPMs to add &quot;-X&quot; 
</span><br>
<span class="quotelev1">&gt; at the end of the version number.  The &quot;X&quot; indicates the RPM version 
</span><br>
<span class="quotelev1">&gt; number (i.e., the version number of the packaging -- not the package 
</span><br>
<span class="quotelev1">&gt; itself).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI's version number scheme is explained here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/software/ompi/versions/">http://www.open-mpi.org/software/ompi/versions/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<p>Jeff (Cummings)
<br>
<p>&nbsp;&nbsp;ompi_info | grep 'Open MPI' should tell,
<br>
<p>(*If* you know to which version your ompi_info is pointing to!
<br>
Otherwise, use full path.)
<br>
<p>Here is yet another reason for installing OpenMPI
<br>
from the source tarball
<br>
(you'll be 100% sure it is 1.4.3), and put it in a non-system
<br>
directory of choice, such as ${HOME}/openmpi/1.4.3.
<br>
<p>My two cents (which were not asked for).
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15507.php">Gus Correa: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>Previous message:</strong> <a href="15505.php">Prentice Bisbal: "Re: [OMPI users] OpenMPI version syntax?"</a>
<li><strong>In reply to:</strong> <a href="15495.php">Jeffrey A Cummings: "Re: [OMPI users] OpenMPI version syntax?"</a>
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
