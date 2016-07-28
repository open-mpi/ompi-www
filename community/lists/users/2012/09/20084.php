<?
$subject_val = "Re: [OMPI users] Error: argv0 not available";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  1 12:41:06 2012" -->
<!-- isoreceived="20120901164106" -->
<!-- sent="Sat, 1 Sep 2012 16:41:00 +0000" -->
<!-- isosent="20120901164100" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error: argv0 not available" -->
<!-- id="731A04ED-2815-41AA-84FB-B920109CF6B5_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-01 12:41:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20085.php">Austin Baker: "Re: [OMPI users] Error: argv0 not available"</a>
<li><strong>Previous message:</strong> <a href="20083.php">Austin Baker: "[OMPI users] Error: argv0 not available"</a>
<li><strong>In reply to:</strong> <a href="20083.php">Austin Baker: "[OMPI users] Error: argv0 not available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20085.php">Austin Baker: "Re: [OMPI users] Error: argv0 not available"</a>
<li><strong>Reply:</strong> <a href="20085.php">Austin Baker: "Re: [OMPI users] Error: argv0 not available"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The root cause is that you didn't specify an executable to run.
<br>
<p>However, we might have some help messages missing, too. What version of OMPI are you running?
<br>
<p>Sent from my phone. No type good.
<br>
<p>On Sep 1, 2012, at 12:22 PM, &quot;Austin Baker&quot; &lt;asb93_at_[hidden]&lt;mailto:asb93_at_[hidden]&gt;&gt; wrote:
<br>
<p>All,
<br>
<p>I am quite new to using Open MPI as it is required by programs that I use for research. While running a chemistry program through Terminal, I inadvertently hit enter after I tried to run the program over multiple processors and am now getting one of two errors when I try and run the programs that I need. I've seen a couple of help topics that are along the same lines, but I can't seem to find an actual solution.
<br>
<p>When I just ran the MPI this is the error I got
<br>
Austins-iMac:man1 ABProds$ /Applications/OpenEye/arch/osx-10.7-x64/oedocking/3.0.0/mpi/bin/mpirun -np 3
<br>
--------------------------------------------------------------------------
<br>
Sorry!  You were supposed to get help about:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orterun:executable-not-specified
<br>
from the file:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;help-orterun.txt
<br>
But I couldn't find any file matching that name.  Sorry!
<br>
<p>When I try and run other programs that I need this is the error:
<br>
Austins-iMac:man1 ABProds$ /Applications/OpenEye/arch/osx-10.7-x64/oedocking/3.0.0/mpi/bin/mpirun -np 3 /Applications/arch/osx-10.7-x64/oedocking/3.0.0/fred -receptor   ~/Documents/Research2012/FredData/Fyn_TargetSite.oeb -dbase ~/Documents/Research2012/FredData/Zinc1/TopScores/zinc_57078852.mo;2 -numposes 1500
<br>
--------------------------------------------------------------------------
<br>
Sorry!  You were supposed to get help about:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;argv0-not-accessible
<br>
from the file:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;help-rmgr-base.txt
<br>
But I couldn't find any file matching that name.  Sorry!
<br>
<p><p>Very much appreciated for the help
<br>
<p><p>Austin Baker
<br>
asb93_at_[hidden]&lt;mailto:asb93_at_[hidden]&gt;
<br>
Graduate Student
<br>
Department of Chemistry
<br>
University of Pittsburgh
<br>
<p>Everything is Experimental
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-20084/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20085.php">Austin Baker: "Re: [OMPI users] Error: argv0 not available"</a>
<li><strong>Previous message:</strong> <a href="20083.php">Austin Baker: "[OMPI users] Error: argv0 not available"</a>
<li><strong>In reply to:</strong> <a href="20083.php">Austin Baker: "[OMPI users] Error: argv0 not available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20085.php">Austin Baker: "Re: [OMPI users] Error: argv0 not available"</a>
<li><strong>Reply:</strong> <a href="20085.php">Austin Baker: "Re: [OMPI users] Error: argv0 not available"</a>
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
