<?
$subject_val = "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 14:06:48 2009" -->
<!-- isoreceived="20090121190648" -->
<!-- sent="Wed, 21 Jan 2009 14:06:42 -0500" -->
<!-- isosent="20090121190642" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express" -->
<!-- id="36FCDF58-9138-46A9-A432-CDF2A99A1CD7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4976F096.1000704_at_ec-lyon.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-21 14:06:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7757.php">jody: "[OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7755.php">Ralph Castain: "Re: [OMPI users] openmpi 1.3 and --wdir problem"</a>
<li><strong>In reply to:</strong> <a href="7745.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, I have run with my LD_LIBRARY_PATH set to a combination of  
<br>
multiple OMPI installations; it ended up using the leftmost entry in  
<br>
the LD_LIBRARY_PATH (as I intended).  I'm not quite sure why it  
<br>
wouldn't do that for you.  :-(
<br>
<p><p>On Jan 21, 2009, at 4:53 AM, Olivier Marsden wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Check that /opt/mpi_sun and /opt/mpi_gfortran* are actually  
</span><br>
<span class="quotelev2">&gt;&gt; distinct subdirectories; there's no hidden sym/hard links in there  
</span><br>
<span class="quotelev2">&gt;&gt; somewhere (where directories and/or individual files might  
</span><br>
<span class="quotelev2">&gt;&gt; accidentally be pointing to the other tree)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; no hidden links in the directories
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - does &quot;env | grep mpi_&quot; show anything interesting / revealing?   
</span><br>
<span class="quotelev2">&gt;&gt; What is your LD_LIBRARY_PATH set to?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Nothing in env | grep mpi,  and for the purposes of building,  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH is set to
</span><br>
<span class="quotelev1">&gt; /opt/sun/express/sunstudioceres/lib/:/opt/mpi_sun/lib:xxx
</span><br>
<span class="quotelev1">&gt; where xxx is, among other things, the other mpi installations.
</span><br>
<span class="quotelev1">&gt; This lead me to find a problem, but which seems to be more related  
</span><br>
<span class="quotelev1">&gt; to my linux configuration than openmpi:
</span><br>
<span class="quotelev1">&gt; I tried redefining ld_library_path to point just to sun, and  
</span><br>
<span class="quotelev1">&gt; everything works correctly.
</span><br>
<span class="quotelev1">&gt; Putting my previous paths back into the variable leads to erroneous  
</span><br>
<span class="quotelev1">&gt; behaviour, with ldd indicating that mpif90
</span><br>
<span class="quotelev1">&gt; is linked to libraries in the gfortran tree.
</span><br>
<span class="quotelev1">&gt; I thought that ld looked for libraries in folders in the order that  
</span><br>
<span class="quotelev1">&gt; the folders are given in ld_library_path, and so
</span><br>
<span class="quotelev1">&gt; having mpi_sun as the first folder would suffice for its libraries  
</span><br>
<span class="quotelev1">&gt; to be used; is that where I was wrong?
</span><br>
<span class="quotelev1">&gt; Sorry for the trouble, in any case redefining the ld_library_path to  
</span><br>
<span class="quotelev1">&gt; remove all references to other installations works.
</span><br>
<span class="quotelev1">&gt; Looks like I'll have to swot up on my linker configuration knowledge!
</span><br>
<span class="quotelev1">&gt; Thanks alot for your time,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Olivier Marsden
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7757.php">jody: "[OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7755.php">Ralph Castain: "Re: [OMPI users] openmpi 1.3 and --wdir problem"</a>
<li><strong>In reply to:</strong> <a href="7745.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
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
