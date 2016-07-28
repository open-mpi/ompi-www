<?
$subject_val = "[OMPI users] Error: argv0 not available";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  1 12:21:03 2012" -->
<!-- isoreceived="20120901162103" -->
<!-- sent="Sat, 01 Sep 2012 12:20:59 -0400" -->
<!-- isosent="20120901162059" -->
<!-- name="Austin Baker" -->
<!-- email="asb93_at_[hidden]" -->
<!-- subject="[OMPI users] Error: argv0 not available" -->
<!-- id="0379DADE-09BF-470E-9406-3500DB99FCD9_at_pitt.edu" -->
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
<strong>Subject:</strong> [OMPI users] Error: argv0 not available<br>
<strong>From:</strong> Austin Baker (<em>asb93_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-01 12:20:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20095.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error: argv0 not available"</a>
<li><strong>Previous message:</strong> <a href="20093.php">Ralph Castain: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20095.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error: argv0 not available"</a>
<li><strong>Reply:</strong> <a href="20095.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error: argv0 not available"</a>
<li><strong>Reply:</strong> <a href="20098.php">Reuti: "Re: [OMPI users] Error: argv0 not available"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am quite new to using Open MPI as it is required by programs that I use for research. While running a chemistry program through Terminal, I inadvertently hit enter after I tried to run the program over multiple processors and am now getting one of two errors when I try and run the programs that I need. I've seen a couple of help topics that are along the same lines, but I can't seem to find an actual solution.
<br>
<p>When I just ran the MPI this is the error I got
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Austins-iMac:man1 ABProds$ /Applications/OpenEye/arch/osx-10.7-x64/oedocking/3.0.0/mpi/bin/mpirun -np 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sorry!  You were supposed to get help about:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orterun:executable-not-specified
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from the file:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;help-orterun.txt
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;But I couldn't find any file matching that name.  Sorry!
<br>
<p>When I try and run other programs that I need this is the error:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Austins-iMac:man1 ABProds$ /Applications/OpenEye/arch/osx-10.7-x64/oedocking/3.0.0/mpi/bin/mpirun -np 3 		/Applications/arch/osx-10.7-x64/oedocking/3.0.0/fred -receptor 												  ~/Documents/Research2012/FredData/Fyn_TargetSite.oeb -dbase 											~/Documents/Research2012/FredData/Zinc1/TopScores/zinc_57078852.mo;2 -numposes 1500
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sorry!  You were supposed to get help about:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;argv0-not-accessible
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from the file:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;help-rmgr-base.txt
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;But I couldn't find any file matching that name.  Sorry!
<br>
<p><p>Very much appreciated for the help
<br>
<p><p>Austin Baker
<br>
asb93_at_[hidden]
<br>
Graduate Student
<br>
Department of Chemistry
<br>
University of Pittsburgh
<br>
<p>Everything is Experimental
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20094/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20095.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error: argv0 not available"</a>
<li><strong>Previous message:</strong> <a href="20093.php">Ralph Castain: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20095.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error: argv0 not available"</a>
<li><strong>Reply:</strong> <a href="20095.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error: argv0 not available"</a>
<li><strong>Reply:</strong> <a href="20098.php">Reuti: "Re: [OMPI users] Error: argv0 not available"</a>
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
