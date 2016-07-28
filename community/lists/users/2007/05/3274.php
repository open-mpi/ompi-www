<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 14 17:50:41 2007" -->
<!-- isoreceived="20070514215041" -->
<!-- sent="Mon, 14 May 2007 15:50:10 -0600" -->
<!-- isosent="20070514215010" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] AlphaServers &amp;amp; OpenMPI" -->
<!-- id="89F0C85F-7D30-40AF-AF77-3F57A595BF4C_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46470346.3040302_at_informatik.uni-halle.de" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-14 17:50:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3275.php">Ron Brightwell: "[OMPI users] CFP: IEEE Cluster'07"</a>
<li><strong>Previous message:</strong> <a href="3273.php">Brian Barrett: "Re: [OMPI users] newbie question"</a>
<li><strong>In reply to:</strong> <a href="3261.php">Bert Wesarg: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 13, 2007, at 6:23 AM, Bert Wesarg wrote:
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Even better: is there a patch available to fix this in the 1.2.1
</span><br>
<span class="quotelev2">&gt;&gt; tarball, so that
</span><br>
<span class="quotelev2">&gt;&gt; I can set the full path again with CC?
</span><br>
<span class="quotelev1">&gt; The patch is quite trivial, but requires a rebuild of the  build  
</span><br>
<span class="quotelev1">&gt; system
</span><br>
<span class="quotelev1">&gt; (autoheader, autoconf, automake,...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; see here:
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/14610">https://svn.open-mpi.org/trac/ompi/changeset/14610</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but you can try to hack the current configure script, just by  
</span><br>
<span class="quotelev1">&gt; search for
</span><br>
<span class="quotelev1">&gt; the affected line
</span><br>
<p>As Bert said, the patch to fix the bug causes a bunch of files to  
<br>
rebuild using tools you probably don't want to bother installing.   
<br>
The easiest solution for now is to use the 1.2.2rc1 pre-release,  
<br>
available on the download page:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.2/">http://www.open-mpi.org/software/ompi/v1.2/</a>
<br>
<p>Fixes a bunch of small issues found in the 1.2 and 1.2.1 releases,  
<br>
including the CC with a path in it bug that you've stumbled upon.
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian W. Barrett
   Open MPI Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3275.php">Ron Brightwell: "[OMPI users] CFP: IEEE Cluster'07"</a>
<li><strong>Previous message:</strong> <a href="3273.php">Brian Barrett: "Re: [OMPI users] newbie question"</a>
<li><strong>In reply to:</strong> <a href="3261.php">Bert Wesarg: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
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
