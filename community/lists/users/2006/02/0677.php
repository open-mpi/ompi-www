<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 21 02:05:57 2006" -->
<!-- isoreceived="20060221070557" -->
<!-- sent="Tue, 21 Feb 2006 02:06:05 -0500 (Eastern Standard Time)" -->
<!-- isosent="20060221070605" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] couple of subversion questions" -->
<!-- id="Pine.WNT.4.64.0602210158390.2536_at_bosilca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A15335FBE9BD2449AF2C9EF3D1EB8EA30153063B_at_xmb-sjc-216.amer.cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-21 02:06:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0678.php">Max Manfrin: "[OMPI users] Is there a Debian package for OMPI?"</a>
<li><strong>Previous message:</strong> <a href="0676.php">Scott Weitzenkamp \(sweitzen\): "[OMPI users] couple of subversion questions"</a>
<li><strong>In reply to:</strong> <a href="0676.php">Scott Weitzenkamp \(sweitzen\): "[OMPI users] couple of subversion questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0680.php">Jeff Squyres: "Re: [OMPI users] couple of subversion questions"</a>
<li><strong>Reply:</strong> <a href="0680.php">Jeff Squyres: "Re: [OMPI users] couple of subversion questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Scott,
<br>
<p>I'm not an SVN expert, but unfortunately we all get these messages from 
<br>
time to time. Keep doing &quot;svn up&quot; and somehow they dissapear. When svn up 
<br>
succeed, all the changes have been merged in your local copy.
<br>
<p><span class="quotelev1">&gt; 2) I saw a commit message with Subject &quot;[OMPI svn] svn:open-mpi-tests
</span><br>
<span class="quotelev1">&gt; r490&quot; and another one with Subject &quot;[OMPI svn] svn:open-mpi r9098&quot;.  Are
</span><br>
<span class="quotelev1">&gt; there two sets of revision numbers on the same subversion repository?
</span><br>
<span class="quotelev1">&gt; How do I check out r490?
</span><br>
<p>These 2 commits are on 2 separate repositories. The first one is in the 
<br>
ompi-mpi-tests while the second is on the ompi trunk. We're using the 
<br>
tests to validate our changes, so as long as you just look into the code 
<br>
having an up2date ompi-trunk is enough. However, we have some benchmarks 
<br>
on the tests repository. You might be interested in them. You can checkout 
<br>
the tests using
<br>
<p>svn co <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk">https://svn.open-mpi.org/svn/ompi-tests/trunk</a> ompi-tests
<br>
<p><p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0678.php">Max Manfrin: "[OMPI users] Is there a Debian package for OMPI?"</a>
<li><strong>Previous message:</strong> <a href="0676.php">Scott Weitzenkamp \(sweitzen\): "[OMPI users] couple of subversion questions"</a>
<li><strong>In reply to:</strong> <a href="0676.php">Scott Weitzenkamp \(sweitzen\): "[OMPI users] couple of subversion questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0680.php">Jeff Squyres: "Re: [OMPI users] couple of subversion questions"</a>
<li><strong>Reply:</strong> <a href="0680.php">Jeff Squyres: "Re: [OMPI users] couple of subversion questions"</a>
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
