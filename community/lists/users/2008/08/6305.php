<?
$subject_val = "Re: [OMPI users] OMPI without-rte-support?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 11 16:35:17 2008" -->
<!-- isoreceived="20080811203517" -->
<!-- sent="Mon, 11 Aug 2008 14:35:06 -0600" -->
<!-- isosent="20080811203506" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI without-rte-support?" -->
<!-- id="7E563ECB-AC68-493E-B089-6C4A5D76441F_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="06BE6436-6DAB-401E-90E5-21CCFBB8A2F8_at_castain.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI without-rte-support?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-11 16:35:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6306.php">Rayne: "[OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Previous message:</strong> <a href="6304.php">Abhishek Kulkarni: "[OMPI users] OMPI without-rte-support?"</a>
<li><strong>Maybe in reply to:</strong> <a href="6304.php">Abhishek Kulkarni: "[OMPI users] OMPI without-rte-support?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I found a typo in the config file that broke this support. It should  
<br>
indeed by without-rte-support. Unfortunately, someone in the interim  
<br>
mistakenly shortened it to just &quot;without-rte&quot;.
<br>
<p>Should have a fix in shortly. Thanks for bringing it to our attention!
<br>
Ralph
<br>
<p>PS. I will try to add some info about this to the wiki page - may be  
<br>
later this week.
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; From: &quot;Abhishek Kulkarni&quot; &lt;abbyzcool_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: August 11, 2008 11:17:41 AM MDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI users] OMPI without-rte-support?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I downloaded the openmpi-1.4a1r19231 nightly and trying to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure it without RTE support. It doesn't seem to recognize the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without-rte-support configure flag, or so it seems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It goes on well with &quot;with-rte=no&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ./configure --without-rte-support
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING: Unrecognized options: --without-rte-support
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for a BSD-compatible install... /usr/bin/install -c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking whether build environment is sane...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [snip]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, any additional information I can get on this option would be  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; great. I tried to dig up for anything on this -- the only thing I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; found is the original changeset 18664 by Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/18664">https://svn.open-mpi.org/trac/ompi/changeset/18664</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -- Abhishek
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6305/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6306.php">Rayne: "[OMPI users] Setting up Open MPI to run on multiple servers"</a>
<li><strong>Previous message:</strong> <a href="6304.php">Abhishek Kulkarni: "[OMPI users] OMPI without-rte-support?"</a>
<li><strong>Maybe in reply to:</strong> <a href="6304.php">Abhishek Kulkarni: "[OMPI users] OMPI without-rte-support?"</a>
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
