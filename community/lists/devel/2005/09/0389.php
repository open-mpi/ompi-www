<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 21 13:58:58 2005" -->
<!-- isoreceived="20050921185858" -->
<!-- sent="Wed, 21 Sep 2005 12:58:53 -0600" -->
<!-- isosent="20050921185853" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="[Fwd: OMPI mpif.h problems]" -->
<!-- id="4331AD6D.6010006_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-21 13:58:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0390.php">David R. (Chip) Kent IV: "mpif.h problems"</a>
<li><strong>Previous message:</strong> <a href="0388.php">Galen M. Shipman: "Re:  Registration Cache changes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can anyone comment on this?
<br>
<p><p>-------- Original Message --------
<br>
Subject: OMPI mpif.h problems
<br>
Date: Wed, 21 Sep 2005 12:27:13 -0600
<br>
From: David R. (Chip) Kent IV &lt;drkent_at_[hidden]&gt;
<br>
To: Tim S. Woodall &lt;twoodall_at_[hidden]&gt;
<br>
References: &lt;20050914164817.GJ2895_at_[hidden]&gt; &lt;432857A8.3060808_at_[hidden]&gt; &lt;20050914202150.GO2895_at_[hidden]&gt; 
<br>
&lt;43288959.7070408_at_[hidden]&gt; &lt;20050915142252.GG5147_at_[hidden]&gt; &lt;43298466.4050502_at_[hidden]&gt;
<br>
<p>Tim,
<br>
<p>I managed to find a number of problems with the mpif.h when I tried it on
<br>
a big application.  It looks like a lot of key constants are not defined
<br>
in this file.  So far, MPI_SEEK_SET, MPI_MODE_CREATE, MPI_MODE_WRONLY
<br>
have broken the build.  I add them into the mpif.h file as I find them,
<br>
but it takes ~10 minutes to redo the build.  Let me know if you make a fix
<br>
for this, and I'll test it out.
<br>
<p>Chip
<br>
<p>-----------------------------------------------------
<br>
David R. &quot;Chip&quot; Kent IV
<br>
<p>Parallel Tools Team
<br>
High Performance Computing Environments Group (CCN-8)
<br>
Los Alamos National Laboratory
<br>
<p>(505)665-5021
<br>
drkent_at_[hidden]
<br>
-----------------------------------------------------
<br>
<p>This message is &quot;Technical data or Software  Publicly
<br>
Available&quot; or &quot;Correspondence&quot;.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0390.php">David R. (Chip) Kent IV: "mpif.h problems"</a>
<li><strong>Previous message:</strong> <a href="0388.php">Galen M. Shipman: "Re:  Registration Cache changes"</a>
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
