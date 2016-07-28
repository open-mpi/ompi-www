<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 14 11:53:59 2006" -->
<!-- isoreceived="20060814155359" -->
<!-- sent="Mon, 14 Aug 2006 09:53:56 -0600" -->
<!-- isosent="20060814155356" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pvfs2 and romio" -->
<!-- id="1155570836.8618.18.camel_at_boxtop.lanl.gov" -->
<!-- inreplyto="71F43528-5BFD-4284-A0CC-46254A607C9E_at_umich.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-14 11:53:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1744.php">Joachim Worringen: "[OMPI users] EuroPVM/MPI 2006: Early Registation Deadline ahead!"</a>
<li><strong>Previous message:</strong> <a href="1742.php">Brock Palen: "[OMPI users] pvfs2 and romio"</a>
<li><strong>In reply to:</strong> <a href="1742.php">Brock Palen: "[OMPI users] pvfs2 and romio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1745.php">Tom Rosmond: "[OMPI users] Testing 1-sided MPI again"</a>
<li><strong>Reply:</strong> <a href="1745.php">Tom Rosmond: "[OMPI users] Testing 1-sided MPI again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2006-08-14 at 10:57 -0400, Brock Palen wrote:
<br>
<span class="quotelev1">&gt; We will be evaluating pvfs2 (www.pvfs.org) in the future.  Is their  
</span><br>
<span class="quotelev1">&gt; any special considerations to take to get romio support with openmpi  
</span><br>
<span class="quotelev1">&gt; with pvfs2 ?
</span><br>
<span class="quotelev1">&gt; I have the following from ompi_info
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MCA io: romio (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does OMPI have to be built pointing at the pvfs2 libs?  If so how?  I  
</span><br>
<span class="quotelev1">&gt; remember there was a strange way of needing to do this with lam.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Guidance is much appreciated.
</span><br>
<p>Yeah, some minor trickery is required.  I believe you can just do
<br>
something like:
<br>
<p>&nbsp;&nbsp;./configure &lt;options&gt; --with-file-system=panfs+nfs+ufs
<br>
<p>but it's probably safest to do:
<br>
<p>&nbsp;&nbsp;./configure &lt;options&gt; --with-io-romio-flags=&quot;--with-file-system=panfs
<br>
+nfs+ufs&quot;
<br>
<p>Changing the filesystems you want to include, of course.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1744.php">Joachim Worringen: "[OMPI users] EuroPVM/MPI 2006: Early Registation Deadline ahead!"</a>
<li><strong>Previous message:</strong> <a href="1742.php">Brock Palen: "[OMPI users] pvfs2 and romio"</a>
<li><strong>In reply to:</strong> <a href="1742.php">Brock Palen: "[OMPI users] pvfs2 and romio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1745.php">Tom Rosmond: "[OMPI users] Testing 1-sided MPI again"</a>
<li><strong>Reply:</strong> <a href="1745.php">Tom Rosmond: "[OMPI users] Testing 1-sided MPI again"</a>
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
