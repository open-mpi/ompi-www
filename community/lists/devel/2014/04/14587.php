<?
$subject_val = "Re: [OMPI devel] openmpi and XRC API from ofed-3.12";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 15:02:39 2014" -->
<!-- isoreceived="20140423190239" -->
<!-- sent="Wed, 23 Apr 2014 12:02:37 -0700" -->
<!-- isosent="20140423190237" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi and XRC API from ofed-3.12" -->
<!-- id="CAAvDA15EhGx7C4sPZfoaMC=2J2SM4MCyG-AmP8825yvrX+6cfw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20140423140158.GA1132_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi and XRC API from ofed-3.12<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-23 15:02:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14588.php">George Bosilca: "Re: [OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault"</a>
<li><strong>Previous message:</strong> <a href="14586.php">Rupert Nash: "[OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault"</a>
<li><strong>In reply to:</strong> <a href="14585.php">Nathan Hjelm: "Re: [OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16445.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As maintainer of a different communications library over Verbs I'd like to
<br>
ask:
<br>
&nbsp;&nbsp;Where can one find information on the new APIs and their use?
<br>
<p>-Paul
<br>
<p><p>On Wed, Apr 23, 2014 at 7:01 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yes, we plan to fix support for XRC due to the changes in 3.12. It will
</span><br>
<span class="quotelev1">&gt; probably not happen before 1.8.2 though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Apr 23, 2014 at 02:58:49PM +0200, Piotr Lesnicki wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In OFED-3.12 the API for XRC has changed. I did not find
</span><br>
<span class="quotelev2">&gt; &gt; corresponding changes in Open MPI: for example the function
</span><br>
<span class="quotelev2">&gt; &gt; 'ibv_create_xrc_rcv_qp()' queried in openmpi configure script no
</span><br>
<span class="quotelev2">&gt; &gt; longer exists in ofed-3.12-rc1.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Are there any plans to support the new XRC API ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Piotr
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14583.php">http://www.open-mpi.org/community/lists/devel/2014/04/14583.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14585.php">http://www.open-mpi.org/community/lists/devel/2014/04/14585.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14587/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14588.php">George Bosilca: "Re: [OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault"</a>
<li><strong>Previous message:</strong> <a href="14586.php">Rupert Nash: "[OMPI devel] Bug report: non-blocking allreduce with user-defined operation gives segfault"</a>
<li><strong>In reply to:</strong> <a href="14585.php">Nathan Hjelm: "Re: [OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16445.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi and XRC API from ofed-3.12"</a>
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
