<?
$subject_val = "Re: [OMPI devel] [OMPI users] Backward Compatibility of MPI Java	Binding";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 10:33:29 2013" -->
<!-- isoreceived="20130110153329" -->
<!-- sent="Fri, 11 Jan 2013 00:33:20 +0900" -->
<!-- isosent="20130110153320" -->
<!-- name="Yoshiki SATO" -->
<!-- email="yoshiki_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] Backward Compatibility of MPI Java	Binding" -->
<!-- id="EEDDCA3E-3BFF-4FF7-9CF5-FE7911ADA75C_at_ci.i.u-tokyo.ac.jp" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC380B05EB_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Yoshiki SATO (<em>yoshiki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-10 10:33:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11919.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Build open MPI"</a>
<li><strong>Previous message:</strong> <a href="11917.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] use of stat() during malloc initialization"</a>
<li><strong>In reply to:</strong> <a href="11915.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Backward Compatibility of MPI Java	Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11924.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Backward Compatibility of MPI	Java	Binding"</a>
<li><strong>Reply:</strong> <a href="11924.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Backward Compatibility of MPI	Java	Binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Yes -- IIRC, the Java interface isn't really dependent upon anything specific in the back-end C implementation of Open MPI.  So I'm guessing/assuming that if you can build it, it should work against the 1.6 OMPI C engine just fine.
</span><br>
<p>Sounds good :-)  I'm going to try to build it anyway, and let you know if stucked.
<br>
<p><span class="quotelev1">&gt; Is MPI-for-Java of interest to you?  I ask because Ralph and I have been trying to figure out how to get the cycles to do more with the Java interface (e.g., make it more like a 1:1 set of bindings).  Is this something you'd be willing to work on / contribute, perchance?
</span><br>
<p>Yes.  This is because one of our roles is enabling Java applications to run on top of the K computer (Fujitsu), which prevents user processes from TCP/IP communications directly.  It only allows communications via customized openmpi (scheduler) between inter node communications.  BTW, I don't fully understand what a 1:1 set of bindings mean.  I believe that the interfaces defined in mpiJava was carefully designed to match the MPI spec, and then should be a 1:1 set of bindings.  Otherwise, I'm willing to contribute something to make it better ;-)
<br>
<p>Thanks,
<br>
--yoshiki
<br>
<p><p>On 2013/01/10, at 20:45, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 9, 2013, at 10:30 PM, Yoshiki SATO &lt;yoshiki_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The 1.7's Java implementation under ompi/mpi/java seem to be able to build up independently.  Do you think we can build just them and run it (via prunjava?) with our custom OpenMPI build based on 1.6?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes -- IIRC, the Java interface isn't really dependent upon anything specific in the back-end C implementation of Open MPI.  So I'm guessing/assuming that if you can build it, it should work against the 1.6 OMPI C engine just fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is MPI-for-Java of interest to you?  I ask because Ralph and I have been trying to figure out how to get the cycles to do more with the Java interface (e.g., make it more like a 1:1 set of bindings).  Is this something you'd be willing to work on / contribute, perchance?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11919.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Build open MPI"</a>
<li><strong>Previous message:</strong> <a href="11917.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] use of stat() during malloc initialization"</a>
<li><strong>In reply to:</strong> <a href="11915.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Backward Compatibility of MPI Java	Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11924.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Backward Compatibility of MPI	Java	Binding"</a>
<li><strong>Reply:</strong> <a href="11924.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Backward Compatibility of MPI	Java	Binding"</a>
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
