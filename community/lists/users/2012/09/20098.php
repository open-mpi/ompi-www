<?
$subject_val = "Re: [OMPI users] Error: argv0 not available";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  1 18:42:04 2012" -->
<!-- isoreceived="20120901224204" -->
<!-- sent="Sun, 2 Sep 2012 00:41:55 +0200" -->
<!-- isosent="20120901224155" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error: argv0 not available" -->
<!-- id="F0AF7FC5-7ABF-4536-9CC7-516D6C29EBF1_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0379DADE-09BF-470E-9406-3500DB99FCD9_at_pitt.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error: argv0 not available<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-01 18:41:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20099.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Previous message:</strong> <a href="20097.php">Ralph Castain: "Re: [OMPI users] Error: argv0 not available"</a>
<li><strong>In reply to:</strong> <a href="20094.php">Austin Baker: "[OMPI users] Error: argv0 not available"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 01.09.2012 um 18:20 schrieb Austin Baker:
<br>
<p><span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	I am quite new to using Open MPI as it is required by programs that I use for research. While running a chemistry program through Terminal, I inadvertently hit enter after I tried to run the program over multiple processors and am now getting one of two errors when I try and run the programs that I need. I've seen a couple of help topics that are along the same lines, but I can't seem to find an actual solution.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I just ran the MPI this is the error I got
</span><br>
<span class="quotelev1">&gt; 	Austins-iMac:man1 ABProds$ /Applications/OpenEye/arch/osx-10.7-x64/oedocking/3.0.0/mpi/bin/mpirun -np 3
</span><br>
<span class="quotelev1">&gt; 	--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 	Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt; 	    orterun:executable-not-specified
</span><br>
<span class="quotelev1">&gt; 	from the file:
</span><br>
<span class="quotelev1">&gt;   	  help-orterun.txt
</span><br>
<span class="quotelev1">&gt; 	But I couldn't find any file matching that name.  Sorry!
</span><br>
<p>Was the Open MPI installation moved after compilation? You can try to define:
<br>
<p>export OPAL_PREFIX=/Applications/OpenEye/arch/osx-10.7-x64/oedocking/3.0.0/mpi
<br>
<p>to get a better error message.
<br>
<p><p><span class="quotelev1">&gt; When I try and run other programs that I need this is the error:
</span><br>
<span class="quotelev1">&gt; 	Austins-iMac:man1 ABProds$ /Applications/OpenEye/arch/osx-10.7-x64/oedocking/3.0.0/mpi/bin/mpirun -np 3 		/Applications/arch/osx-10.7-x64/oedocking/3.0.0/fred -receptor 
</span><br>
<p>Whatever &quot;argv0-not-accessible&quot; means - you missed &quot;OpenEye&quot; in the above line.
<br>
<p><p><span class="quotelev1">&gt; 												  ~/Documents/Research2012/FredData/Fyn_TargetSite.oeb -dbase 											~/Documents/Research2012/FredData/Zinc1/TopScores/zinc_57078852.mo;2 -numposes 1500
</span><br>
<p>Although a &quot;;&quot; is valid in a filename and can easily be entered in the Finder, it's necessary to escape it on the command line or put the complete argument in quotation marks.
<br>
<p>As it's a commercial application, I would suggest to ask the vendor and/or use their forum/knowledgebase. Especially as they suggest to use their own wrapper `oempirun`.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; 	--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 	Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt; 	    argv0-not-accessible
</span><br>
<span class="quotelev1">&gt; 	from the file:
</span><br>
<span class="quotelev1">&gt; 	    help-rmgr-base.txt
</span><br>
<span class="quotelev1">&gt; 	But I couldn't find any file matching that name.  Sorry!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Very much appreciated for the help
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Austin Baker
</span><br>
<span class="quotelev1">&gt; asb93_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Graduate Student
</span><br>
<span class="quotelev1">&gt; Department of Chemistry
</span><br>
<span class="quotelev1">&gt; University of Pittsburgh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Everything is Experimental
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20099.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Previous message:</strong> <a href="20097.php">Ralph Castain: "Re: [OMPI users] Error: argv0 not available"</a>
<li><strong>In reply to:</strong> <a href="20094.php">Austin Baker: "[OMPI users] Error: argv0 not available"</a>
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
