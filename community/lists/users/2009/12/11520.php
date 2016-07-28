<?
$subject_val = "Re: [OMPI users] Problem building OpenMPI with PGI compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 11 12:05:48 2009" -->
<!-- isoreceived="20091211170548" -->
<!-- sent="Fri, 11 Dec 2009 12:05:44 -0500" -->
<!-- isosent="20091211170544" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem building OpenMPI with PGI compilers" -->
<!-- id="7CD5C22D-B0DB-41F0-AD71-C3B4A78EF800_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20A9114B-FD4C-4B14-AEFC-187E3F6B4A28_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem building OpenMPI with PGI compilers<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-11 12:05:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11521.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.4 RPM Spec file problem"</a>
<li><strong>Previous message:</strong> <a href="11519.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="11503.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11642.php">Joshua Bernstein: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Reply:</strong> <a href="11642.php">Joshua Bernstein: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry -- I neglected to update the list yesterday: I got the RM approval and committed the fix to the v1.4 branch.  So the PGI fix should be in last night's 1.4 snapshot.
<br>
<p>Could someone out in the wild give it a whirl and let me know if it works for you?  (it works for *me*)
<br>
<p><p><p>On Dec 10, 2009, at 4:15 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; On Dec 10, 2009, at 4:02 PM, Joshua Bernstein wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Dec 9, 2009, at 4:36 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Given that we haven't moved this patch to the v1.4 branch yet (i.e., it's not
</span><br>
<span class="quotelev3">&gt; &gt; &gt; yet in a nightly v1.4 tarball), probably the easiest thing to do is to apply
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the attached patch to a v1.4 tarball.  I tried it with my PGI 10.0 install
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and it seems to work.  So -- forget everything about autogen.sh and just
</span><br>
<span class="quotelev3">&gt; &gt; &gt; apply the attached patch.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there a reason why it hasn't moved into 1.4 yet or wasn't included with the
</span><br>
<span class="quotelev2">&gt; &gt; 1.4 release?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.4 was *ONLY* about upgrading to Libtool 2.2.6b.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only reason it hasn't moved to the 1.4 branch yet is because Brian hadn't reviewed my patch yet.  :-)  He reviewed it this afternoon, so it's just awaiting release manager approval.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Can I toss my two cents in here and request it be made available in a mainline
</span><br>
<span class="quotelev2">&gt; &gt; release, or at least in a snapshot sooner rather then later? I'd like to get it
</span><br>
<span class="quotelev2">&gt; &gt; included in our build in time for our next release.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll see if I can nudge everyone to get it into the branch today and therefore into tonight's snapshot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11521.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.4 RPM Spec file problem"</a>
<li><strong>Previous message:</strong> <a href="11519.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="11503.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11642.php">Joshua Bernstein: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Reply:</strong> <a href="11642.php">Joshua Bernstein: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
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
