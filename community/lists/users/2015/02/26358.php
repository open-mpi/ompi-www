<?
$subject_val = "Re: [OMPI users] Help on getting CMA works";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 16:35:02 2015" -->
<!-- isoreceived="20150219213502" -->
<!-- sent="Thu, 19 Feb 2015 16:35:00 -0500" -->
<!-- isosent="20150219213500" -->
<!-- name="Aur&#195;&#169;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help on getting CMA works" -->
<!-- id="43F19AD3-9672-4F84-A4B8-D2820A95F5CC_at_icl.utk.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20150219205349.GC1830_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help on getting CMA works<br>
<strong>From:</strong> Aur&#195;&#169;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-19 16:35:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26359.php">Nathan Hjelm: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Previous message:</strong> <a href="26357.php">Eric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>In reply to:</strong> <a href="26356.php">Nathan Hjelm: "Re: [OMPI users] Help on getting CMA works"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26359.php">Nathan Hjelm: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Reply:</strong> <a href="26359.php">Nathan Hjelm: "Re: [OMPI users] Help on getting CMA works"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan, 
<br>
<p>I think I already pushed a patch for this particular issue last month. I do not know if it has been back ported to release yet. 
<br>
<p>See here:<a href="https://github.com/open-mpi/ompi/commit/ee3b0903164898750137d3b71a8f067e16521102">https://github.com/open-mpi/ompi/commit/ee3b0903164898750137d3b71a8f067e16521102</a>
<br>
<p>Aurelien 
<br>
<p><pre>
--
          ~~~ Aur&#195;&#169;lien Bouteiller, Ph.D. ~~~
             ~ Research Scientist @ ICL ~
The University of Tennessee, Innovative Computing Laboratory
1122 Volunteer Blvd, suite 309, Knoxville, TN 37996
tel: +1 (865) 974-9375       fax: +1 (865) 974-8296
<a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a>
&gt; Le 19 f&#195;&#169;vr. 2015 &#195;&#160; 15:53, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; a &#195;&#169;crit :
&gt; 
&gt; 
&gt; Great! I will add an MCA variable to force CMA and also enable it if 1)
&gt; no yama and 2) no PR_SET_PTRACER.
&gt; 
&gt; You might also look at using xpmem. You can find a version that supports
&gt; 3.x @ <a href="https://github.com/hjelmn/xpmem">https://github.com/hjelmn/xpmem</a> . It is a kernel module +
&gt; userspace library that can be used by vader as a single-copy mechanism.
&gt; 
&gt; In benchmarks it performs better than CMA but it may or may not perform
&gt; better with a real application.
&gt; 
&gt; See:
&gt; 
&gt; <a href="http://blogs.cisco.com/performance/the-vader-shared-memory-transport-in-open-mpi-now-featuring-3-flavors-of-zero-copy">http://blogs.cisco.com/performance/the-vader-shared-memory-transport-in-open-mpi-now-featuring-3-flavors-of-zero-copy</a>
&gt; 
&gt; -Nathan
&gt; 
&gt; On Thu, Feb 19, 2015 at 03:32:43PM -0500, Eric Chamberland wrote:
&gt;&gt; On 02/19/2015 02:58 PM, Nathan Hjelm wrote:
&gt;&gt;&gt; On Thu, Feb 19, 2015 at 12:16:49PM -0500, Eric Chamberland wrote:
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; On 02/19/2015 11:56 AM, Nathan Hjelm wrote:
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; If you have yama installed you can try:
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Nope, I do not have it installed... is it absolutely necessary? (and would
&gt;&gt;&gt;&gt; it change something when it fails when I am root?)
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Other question: In addition to &quot;--with-cma&quot; configure flag, do we have to
&gt;&gt;&gt;&gt; pass any options to &quot;mpicc&quot; when compiling/linking an mpi application to use
&gt;&gt;&gt;&gt; cma?
&gt;&gt;&gt; 
&gt;&gt;&gt; No. CMA should work out of the box. You appear to have a setup I haven't
&gt;&gt;&gt; yet tested. It doesn't have yama nor does it have the PR_SET_PTRACER
&gt;&gt;&gt; prctl. Its quite possible there are no restriction on ptrace in this
&gt;&gt;&gt; setup. Can you try changing the following line at
&gt;&gt;&gt; opal/mca/btl/vader/btl_vader_component.c:370 from:
&gt;&gt;&gt; 
&gt;&gt;&gt; bool cma_happy = false;
&gt;&gt;&gt; 
&gt;&gt;&gt; to
&gt;&gt;&gt; 
&gt;&gt;&gt; bool cma_happy = true;
&gt;&gt;&gt; 
&gt;&gt; 
&gt;&gt; ok! (as of the officiel release, this is line 386.)
&gt;&gt; 
&gt;&gt;&gt; and let me know if that works. If it does I will update vader to allow
&gt;&gt;&gt; CMA in this configuration.
&gt;&gt; 
&gt;&gt; Yep!  It now works perfectly.  Testing with
&gt;&gt; <a href="https://computing.llnl.gov/tutorials/mpi/samples/C/mpi_bandwidth.c">https://computing.llnl.gov/tutorials/mpi/samples/C/mpi_bandwidth.c</a>, on my
&gt;&gt; own computer (dual Xeon), I have this:
&gt;&gt; 
&gt;&gt; Without CMA:
&gt;&gt; 
&gt;&gt; ***Message size:  1000000 *** best  /  avg  / worst (MB/sec)
&gt;&gt;   task pair:    0 -    1:    8363.52 / 7946.77 / 5391.14
&gt;&gt; 
&gt;&gt; with CMA:
&gt;&gt;   task pair:    0 -    1:    9137.92 / 8955.98 / 7489.83
&gt;&gt; 
&gt;&gt; Great!
&gt;&gt; 
&gt;&gt; Now I have to bench my real application... ;-)
&gt;&gt; 
&gt;&gt; Thanks!
&gt;&gt; 
&gt;&gt; Eric
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26355.php">http://www.open-mpi.org/community/lists/users/2015/02/26355.php</a>
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26356.php">http://www.open-mpi.org/community/lists/users/2015/02/26356.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26359.php">Nathan Hjelm: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Previous message:</strong> <a href="26357.php">Eric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>In reply to:</strong> <a href="26356.php">Nathan Hjelm: "Re: [OMPI users] Help on getting CMA works"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26359.php">Nathan Hjelm: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Reply:</strong> <a href="26359.php">Nathan Hjelm: "Re: [OMPI users] Help on getting CMA works"</a>
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
