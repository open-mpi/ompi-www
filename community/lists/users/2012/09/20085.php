<?
$subject_val = "Re: [OMPI users] Error: argv0 not available";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  1 13:10:21 2012" -->
<!-- isoreceived="20120901171021" -->
<!-- sent="Sat, 01 Sep 2012 13:10:17 -0400" -->
<!-- isosent="20120901171017" -->
<!-- name="Austin Baker" -->
<!-- email="asb93_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error: argv0 not available" -->
<!-- id="8839D9C3-B81B-4FF1-A286-90277B4158E1_at_pitt.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="731A04ED-2815-41AA-84FB-B920109CF6B5_at_cisco.com" -->
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
<strong>From:</strong> Austin Baker (<em>asb93_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-01 13:10:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20086.php">Ralph Castain: "Re: [OMPI users] Error: argv0 not available"</a>
<li><strong>Previous message:</strong> <a href="20084.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error: argv0 not available"</a>
<li><strong>In reply to:</strong> <a href="20084.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error: argv0 not available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20086.php">Ralph Castain: "Re: [OMPI users] Error: argv0 not available"</a>
<li><strong>Reply:</strong> <a href="20086.php">Ralph Castain: "Re: [OMPI users] Error: argv0 not available"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have the most current version installed. I tried that first.
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
<p>On Sep 1, 2012, at 12:41 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; The root cause is that you didn't specify an executable to run. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, we might have some help messages missing, too. What version of OMPI are you running?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 1, 2012, at 12:22 PM, &quot;Austin Baker&quot; &lt;asb93_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; All,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am quite new to using Open MPI as it is required by programs that I use for research. While running a chemistry program through Terminal, I inadvertently hit enter after I tried to run the program over multiple processors and am now getting one of two errors when I try and run the programs that I need. I've seen a couple of help topics that are along the same lines, but I can't seem to find an actual solution.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I just ran the MPI this is the error I got
</span><br>
<span class="quotelev2">&gt;&gt; Austins-iMac:man1 ABProds$ /Applications/OpenEye/arch/osx-10.7-x64/oedocking/3.0.0/mpi/bin/mpirun -np 3
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev2">&gt;&gt;     orterun:executable-not-specified
</span><br>
<span class="quotelev2">&gt;&gt; from the file:
</span><br>
<span class="quotelev2">&gt;&gt;     help-orterun.txt
</span><br>
<span class="quotelev2">&gt;&gt; But I couldn't find any file matching that name.  Sorry!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I try and run other programs that I need this is the error:
</span><br>
<span class="quotelev2">&gt;&gt; Austins-iMac:man1 ABProds$ /Applications/OpenEye/arch/osx-10.7-x64/oedocking/3.0.0/mpi/bin/mpirun -np 3 /Applications/arch/osx-10.7-x64/oedocking/3.0.0/fred -receptor   ~/Documents/Research2012/FredData/Fyn_TargetSite.oeb -dbase ~/Documents/Research2012/FredData/Zinc1/TopScores/zinc_57078852.mo;2 -numposes 1500
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev2">&gt;&gt;     argv0-not-accessible
</span><br>
<span class="quotelev2">&gt;&gt; from the file:
</span><br>
<span class="quotelev2">&gt;&gt;     help-rmgr-base.txt
</span><br>
<span class="quotelev2">&gt;&gt; But I couldn't find any file matching that name.  Sorry!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Very much appreciated for the help
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Austin Baker
</span><br>
<span class="quotelev2">&gt;&gt; asb93_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Graduate Student
</span><br>
<span class="quotelev2">&gt;&gt; Department of Chemistry
</span><br>
<span class="quotelev2">&gt;&gt; University of Pittsburgh
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Everything is Experimental
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-20085/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20086.php">Ralph Castain: "Re: [OMPI users] Error: argv0 not available"</a>
<li><strong>Previous message:</strong> <a href="20084.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error: argv0 not available"</a>
<li><strong>In reply to:</strong> <a href="20084.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error: argv0 not available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20086.php">Ralph Castain: "Re: [OMPI users] Error: argv0 not available"</a>
<li><strong>Reply:</strong> <a href="20086.php">Ralph Castain: "Re: [OMPI users] Error: argv0 not available"</a>
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
