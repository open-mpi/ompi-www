<?
$subject_val = "Re: [OMPI devel] MPI-2.2 status #2223, #3127";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 18 09:42:20 2013" -->
<!-- isoreceived="20130118144220" -->
<!-- sent="Fri, 18 Jan 2013 14:42:15 +0000" -->
<!-- isosent="20130118144215" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI-2.2 status #2223, #3127" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC3E086614_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="90C383A8-3D3E-41D4-BC00-655A9936C5B4_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI-2.2 status #2223, #3127<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-18 09:42:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11949.php">George Bosilca: "Re: [OMPI devel] MPI-2.2 status #2223, #3127"</a>
<li><strong>Previous message:</strong> <a href="11947.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI-2.2 status #2223, #3127"</a>
<li><strong>In reply to:</strong> <a href="11945.php">George Bosilca: "Re: [OMPI devel] MPI-2.2 status #2223, #3127"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11949.php">George Bosilca: "Re: [OMPI devel] MPI-2.2 status #2223, #3127"</a>
<li><strong>Reply:</strong> <a href="11949.php">George Bosilca: "Re: [OMPI devel] MPI-2.2 status #2223, #3127"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George --
<br>
<p>Should I pull from your repo into <a href="https://bitbucket.org/jsquyres/ompi-topo-fixes-fixed">https://bitbucket.org/jsquyres/ompi-topo-fixes-fixed</a>?  Or did you effectively fork, and you guys will put back to SVN when you're done?
<br>
<p><p>On Jan 18, 2013, at 5:47 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; Takahiro,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The MPI_Dist_graph effort is happening in ssh://hg@bitbucket.org/bosilca/ompi-topo. I would definitely be interested in seeing some test cases, and giving this branch a tough test.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 18, 2013, at 02:43 , &quot;Kawashima, Takahiro&quot; &lt;t-kawashima_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Fujitsu is interested in completing MPI-2.2 on Open MPI and Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; -based Fujitsu MPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We've read wiki and tickets. These two tickets seem to be almost done
</span><br>
<span class="quotelev2">&gt;&gt; but need testing and bug fixing.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/2223">https://svn.open-mpi.org/trac/ompi/ticket/2223</a>
</span><br>
<span class="quotelev2">&gt;&gt; MPI-2.2: MPI_Dist_graph_* functions missing
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/3127">https://svn.open-mpi.org/trac/ompi/ticket/3127</a>
</span><br>
<span class="quotelev2">&gt;&gt; MPI-2.2: Add reduction support for MPI_C_*COMPLEX and MPI::*COMPLEX
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My colleagues are planning to work on these. They will write test codes
</span><br>
<span class="quotelev2">&gt;&gt; and try to fix bugs. Test codes and patches can be contributed to the
</span><br>
<span class="quotelev2">&gt;&gt; community. If they cannot fix some bugs, we will report details. They
</span><br>
<span class="quotelev2">&gt;&gt; are planning to complete them in around March.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; With that two questions.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The latest statuses written in these ticket comments are correct?
</span><br>
<span class="quotelev2">&gt;&gt; Is there any more progress?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Where are the latest codes?
</span><br>
<span class="quotelev2">&gt;&gt; In ticket #2223 says it is on Jeff's ompi-topo-fixes bitbucket branch.
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://bitbucket.org/jsquyres/ompi-topo-fixes">https://bitbucket.org/jsquyres/ompi-topo-fixes</a>
</span><br>
<span class="quotelev2">&gt;&gt; But Jeff seems to have one more branch with a similar name.
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://bitbucket.org/jsquyres/ompi-topo-fixes-fixed">https://bitbucket.org/jsquyres/ompi-topo-fixes-fixed</a>
</span><br>
<span class="quotelev2">&gt;&gt; Ticket #3127 says it is on Jeff's mpi22-c-complex bitbucket branch.
</span><br>
<span class="quotelev2">&gt;&gt; But there is no such branch now.
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://bitbucket.org/jsquyres/mpi22-c-complex">https://bitbucket.org/jsquyres/mpi22-c-complex</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Takahiro Kawashima,
</span><br>
<span class="quotelev2">&gt;&gt; MPI development team,
</span><br>
<span class="quotelev2">&gt;&gt; Fujitsu
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11949.php">George Bosilca: "Re: [OMPI devel] MPI-2.2 status #2223, #3127"</a>
<li><strong>Previous message:</strong> <a href="11947.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI-2.2 status #2223, #3127"</a>
<li><strong>In reply to:</strong> <a href="11945.php">George Bosilca: "Re: [OMPI devel] MPI-2.2 status #2223, #3127"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11949.php">George Bosilca: "Re: [OMPI devel] MPI-2.2 status #2223, #3127"</a>
<li><strong>Reply:</strong> <a href="11949.php">George Bosilca: "Re: [OMPI devel] MPI-2.2 status #2223, #3127"</a>
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
