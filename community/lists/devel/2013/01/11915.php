<?
$subject_val = "Re: [OMPI devel] [OMPI users] Backward Compatibility of MPI Java	Binding";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 06:46:03 2013" -->
<!-- isoreceived="20130110114603" -->
<!-- sent="Thu, 10 Jan 2013 11:45:58 +0000" -->
<!-- isosent="20130110114558" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] Backward Compatibility of MPI Java	Binding" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC380B05EB_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6DF063E9-EA08-41AC-8426-8A18AA04DB15_at_ci.i.u-tokyo.ac.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] Backward Compatibility of MPI Java	Binding<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-10 06:45:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11916.php">Phil Carns: "Re: [OMPI devel] use of stat() during malloc initialization"</a>
<li><strong>Previous message:</strong> <a href="11914.php">George Bosilca: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>In reply to:</strong> <a href="11913.php">Yoshiki SATO: "Re: [OMPI devel] [OMPI users] Backward Compatibility of MPI Java Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11918.php">Yoshiki SATO: "Re: [OMPI devel] [OMPI users] Backward Compatibility of MPI Java	Binding"</a>
<li><strong>Reply:</strong> <a href="11918.php">Yoshiki SATO: "Re: [OMPI devel] [OMPI users] Backward Compatibility of MPI Java	Binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 9, 2013, at 10:30 PM, Yoshiki SATO &lt;yoshiki_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; The 1.7's Java implementation under ompi/mpi/java seem to be able to build up independently.  Do you think we can build just them and run it (via prunjava?) with our custom OpenMPI build based on 1.6?
</span><br>
<p><p>Yes -- IIRC, the Java interface isn't really dependent upon anything specific in the back-end C implementation of Open MPI.  So I'm guessing/assuming that if you can build it, it should work against the 1.6 OMPI C engine just fine.
<br>
<p>Is MPI-for-Java of interest to you?  I ask because Ralph and I have been trying to figure out how to get the cycles to do more with the Java interface (e.g., make it more like a 1:1 set of bindings).  Is this something you'd be willing to work on / contribute, perchance?
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
<li><strong>Next message:</strong> <a href="11916.php">Phil Carns: "Re: [OMPI devel] use of stat() during malloc initialization"</a>
<li><strong>Previous message:</strong> <a href="11914.php">George Bosilca: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>In reply to:</strong> <a href="11913.php">Yoshiki SATO: "Re: [OMPI devel] [OMPI users] Backward Compatibility of MPI Java Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11918.php">Yoshiki SATO: "Re: [OMPI devel] [OMPI users] Backward Compatibility of MPI Java	Binding"</a>
<li><strong>Reply:</strong> <a href="11918.php">Yoshiki SATO: "Re: [OMPI devel] [OMPI users] Backward Compatibility of MPI Java	Binding"</a>
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
