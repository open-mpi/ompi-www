<?
$subject_val = "Re: [OMPI devel] RFC: Remove heterogeneous support";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 28 12:27:02 2014" -->
<!-- isoreceived="20140428162702" -->
<!-- sent="Mon, 28 Apr 2014 09:26:36 -0700" -->
<!-- isosent="20140428162636" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove heterogeneous support" -->
<!-- id="A134A0FA-0634-4A87-8A98-BF91F588E82F_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="AD16FC6D-9B11-4DBE-A233-BA4F495E6BBC_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove heterogeneous support<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-28 12:26:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14634.php">Nathan Hjelm: "Re: [OMPI devel] memory leaks upon dup/split/create of communicators?"</a>
<li><strong>Previous message:</strong> <a href="14632.php">Brice Goglin: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="14626.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14635.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="14635.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid I honestly don't remember the last time I tested with enable-hetero - at least 2-3 weeks ago. I'd suggest starting ~6 months ago and see if that still worked.
<br>
<p><p>On Apr 28, 2014, at 7:04 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; When did you tested last? I have no idea what is broken so it is difficult to assess the complexity of the fix. Let&#146;s try to find the last working &#147;version&#148; and then run a dihcotomic test to  find the culprit (with s hopefully).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 28, 2014, at 09:05 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No, it looks like something has broken it since I last tested. Sorry about the confusion.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 27, 2014, at 10:55 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I might have misunderstood Jeff's comment :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The broken part(s) is(are) likely somewhere in the datatype and/or PML code (my guess).  Keep in mind that my only testing of this feature is in *homogeneous* mode -- i.e., I compile with --enable-heterogeneous and then run tests on homogeneous machines.  Meaning: it's not only broken for actual heterogeneity, it's also broken in the &quot;unity&quot;/homogeneous case.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunatly, a trivial send/recv can hang in this case (--enable-heterogeneous and homogenous cluster of little endian procs).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i opened #4568 <a href="https://svn.open-mpi.org/trac/ompi/ticket/4568">https://svn.open-mpi.org/trac/ompi/ticket/4568</a> in order to track this issue
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (uninitialized data can cause a hang with this config)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk is affected, v1.8 is very likely affected too
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2014/04/28 12:22, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think you misunderstood his comment. It works fine on a homogeneous cluster, even with --enable-hetero. I've run it that way on my cluster.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 27, 2014, at 7:50 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; According to Jeff's comment, OpenMPI compiled with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --enable-heterogeneous is broken even in an homogeneous cluster.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; as a first step, MTT could be ran with OpenMPI compiled with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --enable-heterogenous and running on an homogeneous cluster
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (ideally on both little and big endian) in order to identify and fix the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; bug/regression.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /* this build is currently disabled in the MTT config of the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cisco-community cluster */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14624.php">http://www.open-mpi.org/community/lists/devel/2014/04/14624.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14625.php">http://www.open-mpi.org/community/lists/devel/2014/04/14625.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14626.php">http://www.open-mpi.org/community/lists/devel/2014/04/14626.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14633/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14634.php">Nathan Hjelm: "Re: [OMPI devel] memory leaks upon dup/split/create of communicators?"</a>
<li><strong>Previous message:</strong> <a href="14632.php">Brice Goglin: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="14626.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14635.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="14635.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
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
