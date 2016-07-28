<?
$subject_val = "Re: [OMPI users] Scyld Beowulf and openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 14:08:43 2008" -->
<!-- isoreceived="20081103190843" -->
<!-- sent="Mon, 3 Nov 2008 12:08:36 -0700" -->
<!-- isosent="20081103190836" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Scyld Beowulf and openmpi" -->
<!-- id="91044A7E-ADA5-4B94-AA11-B3C1D9843606_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7503b17d0811030930i13acb974kc627983a1d481192_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Scyld Beowulf and openmpi<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-03 14:08:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7189.php">Gustavo Seabra: "[OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<li><strong>Previous message:</strong> <a href="7187.php">Rima Chaudhuri: "[OMPI users] Scyld Beowulf and openmpi"</a>
<li><strong>In reply to:</strong> <a href="7187.php">Rima Chaudhuri: "[OMPI users] Scyld Beowulf and openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For starters, there is no &quot;-no_local&quot; option to mpirun. You might want  
<br>
to look at mpirun --help, or man mpirun.
<br>
<p>I suspect the option you wanted was --nolocal. Note that --nolocal  
<br>
does not take an argument.
<br>
<p>Mpirun is confused by the incorrect option and looking for an  
<br>
incorrectly named executable.
<br>
Ralph
<br>
<p><p>On Nov 3, 2008, at 10:30 AM, Rima Chaudhuri wrote:
<br>
<p><span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; I am a new user of openmpi -- I've installed openmpi 1.2.6 for our
</span><br>
<span class="quotelev1">&gt; x86_64 linux scyld beowulf cluster inorder to make it run with amber10
</span><br>
<span class="quotelev1">&gt; MD simulation package.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The nodes can see the home directory i.e. a bpsh to the nodes works
</span><br>
<span class="quotelev1">&gt; fine and lists all the files in the home directory where I have both
</span><br>
<span class="quotelev1">&gt; openmpi and amber10 installed.
</span><br>
<span class="quotelev1">&gt; However if I try to run:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $MPI_HOME/bin/mpirun -no_local=1 -np 4 $AMBERHOME/exe/ 
</span><br>
<span class="quotelev1">&gt; sander.MPI ........
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the following error:
</span><br>
<span class="quotelev1">&gt; [0,0,0] ORTE_ERROR_LOG: Not available in file ras_bjs.c at line 247
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Failed to find the following executable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host:       helios.structure.uic.edu
</span><br>
<span class="quotelev1">&gt; Executable: -o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cannot continue.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [helios.structure.uic.edu:23611] [0,0,0] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev1">&gt; file rmgr_urm.c at line 462
</span><br>
<span class="quotelev1">&gt; [helios.structure.uic.edu:23611] mpirun: spawn failed with errno=-13
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; any cues?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; -Rima
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7189.php">Gustavo Seabra: "[OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<li><strong>Previous message:</strong> <a href="7187.php">Rima Chaudhuri: "[OMPI users] Scyld Beowulf and openmpi"</a>
<li><strong>In reply to:</strong> <a href="7187.php">Rima Chaudhuri: "[OMPI users] Scyld Beowulf and openmpi"</a>
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
