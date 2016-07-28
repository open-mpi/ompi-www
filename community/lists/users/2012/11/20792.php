<?
$subject_val = "Re: [OMPI users] Java MPI Bindings in 1.6.x";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 28 13:47:12 2012" -->
<!-- isoreceived="20121128184712" -->
<!-- sent="Wed, 28 Nov 2012 10:47:04 -0800" -->
<!-- isosent="20121128184704" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Java MPI Bindings in 1.6.x" -->
<!-- id="C73AD3D8-CC7E-4A28-8533-6936E4D965A6_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E217B4C2-B63E-4529-8342-0F8DB2B824EB_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Java MPI Bindings in 1.6.x<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-28 13:47:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20793.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="20791.php">Brock Palen: "Re: [OMPI users] Java MPI Bindings in 1.6.x"</a>
<li><strong>In reply to:</strong> <a href="20791.php">Brock Palen: "Re: [OMPI users] Java MPI Bindings in 1.6.x"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: Greenplum is about to release exactly that solution based on OMPI, though it will require the OMPI trunk. Not back portable to v1.6 I'm afraid, but allows you to run Hadoop on any cluster as opposed to requiring dedicated hardware.
<br>
<p>I can get an early-adopter release for you, if it helps.
<br>
<p><p>On Nov 28, 2012, at 10:38 AM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Our case is a single user expressing interest, and maybe long term mixing as we explore hadoop options, and would mix MPI+hadoop.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would not go into the effort if it is non-trivial to add it to 1.6.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 28, 2012, at 10:29 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 28, 2012, at 10:06 AM, Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I know java MPI bindings are in the development tree, and the FAQ states they are derived from the HLRS bindings (which I can't appear to find online).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't remember exactly where we got them; the repository might not have been public.  I know we (i.e., Ralph) scoured around for quite a while before settling on this particular set.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; IIRC, we might have gotten this set from our contacts at HLRS, and therefore it might not be on the open web anywhere else.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it possible to take the bindings from the dev tree and build them against the 1.6 stable?  If not what mpiJava bindings do you recommend? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Officially, we will not be porting the Java bindings to the v1.6 tree (because it's the stable tree -- no new features will be added).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That doesn't mean it can't be done, however.  I think the hard part was figuring out the build system mojo for it, but that's now been done.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you have users with a genuine interest in using the Java bindings but want to use them with v1.6, I might be able to put up a bitbucket based off the v1.6 branch that includes the Java bindings.  It would be great to get some feedback on these (admittedly incomplete) Java bindings.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20793.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="20791.php">Brock Palen: "Re: [OMPI users] Java MPI Bindings in 1.6.x"</a>
<li><strong>In reply to:</strong> <a href="20791.php">Brock Palen: "Re: [OMPI users] Java MPI Bindings in 1.6.x"</a>
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
