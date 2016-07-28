<?
$subject_val = "Re: [OMPI users] Error: argv0 not available";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  1 13:49:36 2012" -->
<!-- isoreceived="20120901174936" -->
<!-- sent="Sat, 1 Sep 2012 10:49:27 -0700" -->
<!-- isosent="20120901174927" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error: argv0 not available" -->
<!-- id="ADBDA39E-B84C-44CB-8726-586168634F15_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8839D9C3-B81B-4FF1-A286-90277B4158E1_at_pitt.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-01 13:49:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20098.php">Reuti: "Re: [OMPI users] Error: argv0 not available"</a>
<li><strong>Previous message:</strong> <a href="20096.php">Austin Baker: "Re: [OMPI users] Error: argv0 not available"</a>
<li><strong>In reply to:</strong> <a href="20096.php">Austin Baker: "Re: [OMPI users] Error: argv0 not available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20098.php">Reuti: "Re: [OMPI users] Error: argv0 not available"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Current meaning 1.6.1, 1.9, 1.7,....???
<br>
<p>A simple &quot;ompi_info&quot; will tell you at the very top:
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package: Open MPI rhc_at_Ralphs-iMac.local Distribution
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.9a1r27207M
<br>
&nbsp;
<br>
<p>On Sep 1, 2012, at 10:10 AM, Austin Baker &lt;asb93_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have the most current version installed. I tried that first.
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
<span class="quotelev1">&gt; On Sep 1, 2012, at 12:41 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The root cause is that you didn't specify an executable to run. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, we might have some help messages missing, too. What version of OMPI are you running?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sent from my phone. No type good. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 1, 2012, at 12:22 PM, &quot;Austin Baker&quot; &lt;asb93_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am quite new to using Open MPI as it is required by programs that I use for research. While running a chemistry program through Terminal, I inadvertently hit enter after I tried to run the program over multiple processors and am now getting one of two errors when I try and run the programs that I need. I've seen a couple of help topics that are along the same lines, but I can't seem to find an actual solution.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I just ran the MPI this is the error I got
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Austins-iMac:man1 ABProds$ /Applications/OpenEye/arch/osx-10.7-x64/oedocking/3.0.0/mpi/bin/mpirun -np 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     orterun:executable-not-specified
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from the file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     help-orterun.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But I couldn't find any file matching that name.  Sorry!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I try and run other programs that I need this is the error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Austins-iMac:man1 ABProds$ /Applications/OpenEye/arch/osx-10.7-x64/oedocking/3.0.0/mpi/bin/mpirun -np 3 /Applications/arch/osx-10.7-x64/oedocking/3.0.0/fred -receptor   ~/Documents/Research2012/FredData/Fyn_TargetSite.oeb -dbase ~/Documents/Research2012/FredData/Zinc1/TopScores/zinc_57078852.mo;2 -numposes 1500
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     argv0-not-accessible
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from the file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     help-rmgr-base.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But I couldn't find any file matching that name.  Sorry!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Very much appreciated for the help
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Austin Baker
</span><br>
<span class="quotelev3">&gt;&gt;&gt; asb93_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Graduate Student
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Department of Chemistry
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of Pittsburgh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Everything is Experimental
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20097/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20098.php">Reuti: "Re: [OMPI users] Error: argv0 not available"</a>
<li><strong>Previous message:</strong> <a href="20096.php">Austin Baker: "Re: [OMPI users] Error: argv0 not available"</a>
<li><strong>In reply to:</strong> <a href="20096.php">Austin Baker: "Re: [OMPI users] Error: argv0 not available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20098.php">Reuti: "Re: [OMPI users] Error: argv0 not available"</a>
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
