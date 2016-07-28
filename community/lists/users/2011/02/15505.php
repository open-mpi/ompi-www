<?
$subject_val = "Re: [OMPI users] OpenMPI version syntax?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  3 09:48:03 2011" -->
<!-- isoreceived="20110203144803" -->
<!-- sent="Thu, 03 Feb 2011 09:47:59 -0500" -->
<!-- isosent="20110203144759" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI version syntax?" -->
<!-- id="4D4AC01F.6020800_at_ias.edu" -->
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
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-03 09:47:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15506.php">Gus Correa: "Re: [OMPI users] OpenMPI version syntax?"</a>
<li><strong>Previous message:</strong> <a href="15504.php">Shiqing Fan: "Re: [OMPI users] Windows release 1.5.1"</a>
<li><strong>In reply to:</strong> <a href="15495.php">Jeffrey A Cummings: "Re: [OMPI users] OpenMPI version syntax?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15506.php">Gus Correa: "Re: [OMPI users] OpenMPI version syntax?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
rpm -qi &lt;packagename&gt; might give you more detailed information.
<br>
<p>If not, as a last resort, you can download and installed the SRPM and
<br>
then look at the name of the tarball in /usr/src/redhat/SOURCES.
<br>
<p>Prentice
<br>
<p>Jeffrey A Cummings wrote:
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
<span class="quotelev2">&gt;&gt; I've encountered a supposed OpenMPI version of 1.4-4.  Is the hyphen a
</span><br>
<span class="quotelev1">&gt; typo or is this syntax correct and if so what does it mean?
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15506.php">Gus Correa: "Re: [OMPI users] OpenMPI version syntax?"</a>
<li><strong>Previous message:</strong> <a href="15504.php">Shiqing Fan: "Re: [OMPI users] Windows release 1.5.1"</a>
<li><strong>In reply to:</strong> <a href="15495.php">Jeffrey A Cummings: "Re: [OMPI users] OpenMPI version syntax?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15506.php">Gus Correa: "Re: [OMPI users] OpenMPI version syntax?"</a>
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
