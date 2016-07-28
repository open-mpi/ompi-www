<?
$subject_val = "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  1 19:35:10 2011" -->
<!-- isoreceived="20110202003510" -->
<!-- sent="Tue, 1 Feb 2011 19:34:55 -0500" -->
<!-- isosent="20110202003455" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?" -->
<!-- id="02B149D9-0764-48E1-90E1-0A3B31B98748_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF108CC97F.B196FEFB-ON8525782A.0077CB83-8525782A.00790D1C_at_notes.aero.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-01 19:34:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15474.php">jody: "Re: [OMPI users] heterogenous cluster"</a>
<li><strong>Previous message:</strong> <a href="15472.php">Gustavo Correa: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>In reply to:</strong> <a href="15468.php">Jeffrey A Cummings: "[OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15477.php">Terry Dontje: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>Reply:</strong> <a href="15477.php">Terry Dontje: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>Reply:</strong> <a href="15482.php">Mehdi Bozzo-Rey: "Re: [OMPI users] How closely tied is a specific release of OpenMPIto the host operating system and other system software?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 1, 2011, at 5:02 PM, Jeffrey A Cummings wrote:
<br>
<p><span class="quotelev1">&gt; I'm getting a lot of push back from the SysAdmin folks claiming that OpenMPI is closely intertwined with the specific version of the operating system and/or other system software (i.e., Rocks on the clusters).  
</span><br>
<p>I wouldn't say that this is true.  We test across a wide variety of OS's and compilers.  I'm sure that there are particular platforms/environments that can trip up some kind of problem (it's happened before), but in general, Open MPI is pretty portable.
<br>
<p><span class="quotelev1">&gt; To state my question another way:  Apparently each release of Linux and/or Rocks comes with some version of OpenMPI bundled in.  Is it dangerous in some way to upgrade to a newer version of OpenMPI?  
</span><br>
<p>Not at all.  Others have said it, but I'm one of the developers and I'll reinforce their answers: I regularly have about a dozen different installations of Open MPI on my cluster at any given time (all in different stages of development -- all installed to different prefixes).  I switch between them quite easily by changing my PATH and LD_LIBRARY_PATH (both locally and on remote nodes).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15474.php">jody: "Re: [OMPI users] heterogenous cluster"</a>
<li><strong>Previous message:</strong> <a href="15472.php">Gustavo Correa: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>In reply to:</strong> <a href="15468.php">Jeffrey A Cummings: "[OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15477.php">Terry Dontje: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>Reply:</strong> <a href="15477.php">Terry Dontje: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>Reply:</strong> <a href="15482.php">Mehdi Bozzo-Rey: "Re: [OMPI users] How closely tied is a specific release of OpenMPIto the host operating system and other system software?"</a>
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
