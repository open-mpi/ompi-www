<?
$subject_val = "Re: [OMPI devel] RFC: Remove heterogeneous support";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 28 13:39:02 2014" -->
<!-- isoreceived="20140428173902" -->
<!-- sent="Mon, 28 Apr 2014 11:39:01 -0600" -->
<!-- isosent="20140428173901" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove heterogeneous support" -->
<!-- id="20140428173901.GB89774_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A134A0FA-0634-4A87-8A98-BF91F588E82F_at_open-mpi.org" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-28 13:39:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14636.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14634.php">Nathan Hjelm: "Re: [OMPI devel] memory leaks upon dup/split/create of communicators?"</a>
<li><strong>In reply to:</strong> <a href="14633.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14636.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="14636.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This part of the heterogeneous support being broken was my fault. I
<br>
fixed it in r31535. I will try to spend some time over the next month or
<br>
so fixing heterogeneous support in the one-sided code. Right now the
<br>
packed datatype representation will not work if sizeof (int) is not
<br>
consistent. Not sure if we ever claimed to support this case though.
<br>
<p>-Nathan
<br>
<p>On Mon, Apr 28, 2014 at 09:26:36AM -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt;    I'm afraid I honestly don't remember the last time I tested with
</span><br>
<span class="quotelev1">&gt;    enable-hetero - at least 2-3 weeks ago. I'd suggest starting ~6 months ago
</span><br>
<span class="quotelev1">&gt;    and see if that still worked.
</span><br>
<span class="quotelev1">&gt;    On Apr 28, 2014, at 7:04 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      When did you tested last? I have no idea what is broken so it is
</span><br>
<span class="quotelev1">&gt;      difficult to assess the complexity of the fix. Let's try to find the
</span><br>
<span class="quotelev1">&gt;      last working &quot;version&quot; and then run a dihcotomic test to  find the
</span><br>
<span class="quotelev1">&gt;      culprit (with s hopefully).
</span><br>
<span class="quotelev1">&gt;        George.
</span><br>
<span class="quotelev1">&gt;      On Apr 28, 2014, at 09:05 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        No, it looks like something has broken it since I last tested. Sorry
</span><br>
<span class="quotelev1">&gt;        about the confusion.
</span><br>
<span class="quotelev1">&gt;        On Apr 27, 2014, at 10:55 PM, Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt;        &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          I might have misunderstood Jeff's comment :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  The broken part(s) is(are) likely somewhere in the datatype and/or PML code (my guess).  Keep in mind that my only testing of this feature is in *homogeneous* mode -- i.e., I compile with --enable-heterogeneous and then run tests on homogeneous machines.  Meaning: it's not only broken for actual heterogeneity, it's also broken in the &quot;unity&quot;/homogeneous case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          Unfortunatly, a trivial send/recv can hang in this case
</span><br>
<span class="quotelev1">&gt;          (--enable-heterogeneous and homogenous cluster of little endian
</span><br>
<span class="quotelev1">&gt;          procs).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          i opened #4568 <a href="https://svn.open-mpi.org/trac/ompi/ticket/4568">https://svn.open-mpi.org/trac/ompi/ticket/4568</a> in
</span><br>
<span class="quotelev1">&gt;          order to track this issue
</span><br>
<span class="quotelev1">&gt;          (uninitialized data can cause a hang with this config)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          trunk is affected, v1.8 is very likely affected too
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          On 2014/04/28 12:22, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  I think you misunderstood his comment. It works fine on a homogeneous cluster, even with --enable-hetero. I've run it that way on my cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  On Apr 27, 2014, at 7:50 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  According to Jeff's comment, OpenMPI compiled with
</span><br>
<span class="quotelev1">&gt;  --enable-heterogeneous is broken even in an homogeneous cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  as a first step, MTT could be ran with OpenMPI compiled with
</span><br>
<span class="quotelev1">&gt;  --enable-heterogenous and running on an homogeneous cluster
</span><br>
<span class="quotelev1">&gt;  (ideally on both little and big endian) in order to identify and fix the
</span><br>
<span class="quotelev1">&gt;  bug/regression.
</span><br>
<span class="quotelev1">&gt;  /* this build is currently disabled in the MTT config of the
</span><br>
<span class="quotelev1">&gt;  cisco-community cluster */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          _______________________________________________
</span><br>
<span class="quotelev1">&gt;          devel mailing list
</span><br>
<span class="quotelev1">&gt;          devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;          Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;          Link to this post:
</span><br>
<span class="quotelev1">&gt;          <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14624.php">http://www.open-mpi.org/community/lists/devel/2014/04/14624.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        _______________________________________________
</span><br>
<span class="quotelev1">&gt;        devel mailing list
</span><br>
<span class="quotelev1">&gt;        devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;        Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;        Link to this post:
</span><br>
<span class="quotelev1">&gt;        <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14625.php">http://www.open-mpi.org/community/lists/devel/2014/04/14625.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      _______________________________________________
</span><br>
<span class="quotelev1">&gt;      devel mailing list
</span><br>
<span class="quotelev1">&gt;      devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;      Link to this post:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14626.php">http://www.open-mpi.org/community/lists/devel/2014/04/14626.php</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14633.php">http://www.open-mpi.org/community/lists/devel/2014/04/14633.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14635/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14636.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14634.php">Nathan Hjelm: "Re: [OMPI devel] memory leaks upon dup/split/create of communicators?"</a>
<li><strong>In reply to:</strong> <a href="14633.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14636.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="14636.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
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
