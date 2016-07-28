<?
$subject_val = "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 04:53:33 2009" -->
<!-- isoreceived="20090121095333" -->
<!-- sent="Wed, 21 Jan 2009 10:53:26 +0100" -->
<!-- isosent="20090121095326" -->
<!-- name="Olivier Marsden" -->
<!-- email="Olivier.Marsden_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express" -->
<!-- id="4976F096.1000704_at_ec-lyon.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="05922EA5-0A5A-4BAA-9377-72045EB9DCF1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express<br>
<strong>From:</strong> Olivier Marsden (<em>Olivier.Marsden_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-21 04:53:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7746.php">Geoffroy Pignot: "[OMPI users] openmpi 1.3 and --wdir problem"</a>
<li><strong>Previous message:</strong> <a href="7744.php">Jeff Squyres: "Re: [OMPI users] error opal/libltdl"</a>
<li><strong>In reply to:</strong> <a href="7743.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7756.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Reply:</strong> <a href="7756.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Check that /opt/mpi_sun and /opt/mpi_gfortran* are actually distinct 
</span><br>
<span class="quotelev1">&gt; subdirectories; there's no hidden sym/hard links in there somewhere 
</span><br>
<span class="quotelev1">&gt; (where directories and/or individual files might accidentally be 
</span><br>
<span class="quotelev1">&gt; pointing to the other tree)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>no hidden links in the directories
<br>
<p><span class="quotelev1">&gt; - does &quot;env | grep mpi_&quot; show anything interesting / revealing?  What 
</span><br>
<span class="quotelev1">&gt; is your LD_LIBRARY_PATH set to?
</span><br>
<span class="quotelev1">&gt;
</span><br>
Nothing in env | grep mpi,  and for the purposes of building, 
<br>
LD_LIBRARY_PATH is set to
<br>
&nbsp;/opt/sun/express/sunstudioceres/lib/:/opt/mpi_sun/lib:xxx
<br>
where xxx is, among other things, the other mpi installations.
<br>
This lead me to find a problem, but which seems to be more related to my 
<br>
linux configuration than openmpi:
<br>
I tried redefining ld_library_path to point just to sun, and everything 
<br>
works correctly.
<br>
Putting my previous paths back into the variable leads to erroneous 
<br>
behaviour, with ldd indicating that mpif90
<br>
is linked to libraries in the gfortran tree.
<br>
I thought that ld looked for libraries in folders in the order that the 
<br>
folders are given in ld_library_path, and so
<br>
having mpi_sun as the first folder would suffice for its libraries to be 
<br>
used; is that where I was wrong?
<br>
Sorry for the trouble, in any case redefining the ld_library_path to 
<br>
remove all references to other installations works.
<br>
Looks like I'll have to swot up on my linker configuration knowledge!
<br>
Thanks alot for your time,
<br>
<p>Olivier Marsden
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7746.php">Geoffroy Pignot: "[OMPI users] openmpi 1.3 and --wdir problem"</a>
<li><strong>Previous message:</strong> <a href="7744.php">Jeff Squyres: "Re: [OMPI users] error opal/libltdl"</a>
<li><strong>In reply to:</strong> <a href="7743.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7756.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Reply:</strong> <a href="7756.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
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
