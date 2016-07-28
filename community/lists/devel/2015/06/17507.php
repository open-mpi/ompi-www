<?
$subject_val = "[OMPI devel] Clarification on Open MPI's version requirements";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 19 16:46:15 2015" -->
<!-- isoreceived="20150619204615" -->
<!-- sent="Fri, 19 Jun 2015 20:46:13 +0000" -->
<!-- isosent="20150619204613" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Clarification on Open MPI's version requirements" -->
<!-- id="484C9D05-6DA3-4F87-B78E-5BE2A22356F1_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Clarification on Open MPI's version requirements<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-19 16:46:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17508.php">Lisandro Dalcin: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<li><strong>Previous message:</strong> <a href="17506.php">Ralph Castain: "Re: [OMPI devel] 1.8.6rc2 ready for test"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We had a lengthy discussion this past Tuesday about Open MPI's version number compatibility policy.  I just added text to the README about it -- see:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi/commit/ec44a25070f99b6e1d96886fe3990ad560ee63c0">https://github.com/open-mpi/ompi/commit/ec44a25070f99b6e1d96886fe3990ad560ee63c0</a>
<br>
<p>In short, we do not (and have never) support(ed) anything other than having exactly the same version of Open MPI in all instances of the runtime / MPI/OSHMEM processes in a single job.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;In a related sidenote: I'm (finally) preparing an email
<br>
&nbsp;&nbsp;&nbsp;&nbsp;to users/announce describing the new version number scheme.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;I'm hopeful that it will go out this afternoon.
<br>
<p>Here's some examples to drive the point home:
<br>
<p>* CASE 1
<br>
&nbsp;&nbsp;- Open MPI v1.8.2 is installed as shared libraries
<br>
&nbsp;&nbsp;- User compiles MPI app with mpicc v1.8.2
<br>
&nbsp;&nbsp;- User runs MPI app with mpirun v1.8.2
<br>
&nbsp;&nbsp;--&gt; WORKS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;because everything is v1.8.2
<br>
<p>* CASE 2
<br>
&nbsp;&nbsp;- Open MPI v1.8.2 is installed as shared libraries
<br>
&nbsp;&nbsp;- User compiles MPI app with mpicc v1.8.2
<br>
&nbsp;&nbsp;- Open MPI installation is upgraded to v1.8.5
<br>
&nbsp;&nbsp;- LD_LIBRARY_PATH is adjusted to find v1.8.5 libraries
<br>
&nbsp;&nbsp;- User runs MPI app with mpirun v1.8.5
<br>
&nbsp;&nbsp;--&gt; WORKS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;because everything is v1.8.5
<br>
<p>* CASE 3
<br>
&nbsp;&nbsp;- Same as case 2, except...
<br>
&nbsp;&nbsp;- User runs MPI app with mpirun v1.8.**2**
<br>
&nbsp;&nbsp;##&gt; IS NOT GUARANTEED TO WORK
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;because mpirun version (1.8.2) does not match the shared library version (1.8.5)
<br>
<p>* CASE 4
<br>
&nbsp;&nbsp;- Open MPI v1.8.2 is installed as *static* libraries
<br>
&nbsp;&nbsp;- User compiles MPI app with mpicc v1.8.2
<br>
&nbsp;&nbsp;- Open MPI installation is upgraded to v1.8.5
<br>
&nbsp;&nbsp;- User runs MPI app with mpirun v1.8.5
<br>
&nbsp;&nbsp;##&gt; IS NOT GUARANTEED TO WORK
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;because mpirun version (v1.8.5) does not match the statically-linked OMPI library version
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17508.php">Lisandro Dalcin: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<li><strong>Previous message:</strong> <a href="17506.php">Ralph Castain: "Re: [OMPI devel] 1.8.6rc2 ready for test"</a>
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
