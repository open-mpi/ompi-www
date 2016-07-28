<?
$subject_val = "Re: [OMPI devel] MPI-2.2 status #2223, #3127";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 18 05:47:52 2013" -->
<!-- isoreceived="20130118104752" -->
<!-- sent="Fri, 18 Jan 2013 11:47:45 +0100" -->
<!-- isosent="20130118104745" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI-2.2 status #2223, #3127" -->
<!-- id="90C383A8-3D3E-41D4-BC00-655A9936C5B4_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DF152F4B8E08AE4AAF80927EA5DC03AC0E978B1E_at_G01JPEXMBYT02" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-18 05:47:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11946.php">George Bosilca: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="11944.php">Paul Hargrove: "[OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>In reply to:</strong> <a href="11942.php">Kawashima, Takahiro: "[OMPI devel] MPI-2.2 status #2223, #3127"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11948.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI-2.2 status #2223, #3127"</a>
<li><strong>Reply:</strong> <a href="11948.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI-2.2 status #2223, #3127"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Takahiro,
<br>
<p>The MPI_Dist_graph effort is happening in ssh://hg@bitbucket.org/bosilca/ompi-topo. I would definitely be interested in seeing some test cases, and giving this branch a tough test.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Jan 18, 2013, at 02:43 , &quot;Kawashima, Takahiro&quot; &lt;t-kawashima_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fujitsu is interested in completing MPI-2.2 on Open MPI and Open MPI
</span><br>
<span class="quotelev1">&gt; -based Fujitsu MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We've read wiki and tickets. These two tickets seem to be almost done
</span><br>
<span class="quotelev1">&gt; but need testing and bug fixing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  <a href="https://svn.open-mpi.org/trac/ompi/ticket/2223">https://svn.open-mpi.org/trac/ompi/ticket/2223</a>
</span><br>
<span class="quotelev1">&gt;  MPI-2.2: MPI_Dist_graph_* functions missing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  <a href="https://svn.open-mpi.org/trac/ompi/ticket/3127">https://svn.open-mpi.org/trac/ompi/ticket/3127</a>
</span><br>
<span class="quotelev1">&gt;  MPI-2.2: Add reduction support for MPI_C_*COMPLEX and MPI::*COMPLEX
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My colleagues are planning to work on these. They will write test codes
</span><br>
<span class="quotelev1">&gt; and try to fix bugs. Test codes and patches can be contributed to the
</span><br>
<span class="quotelev1">&gt; community. If they cannot fix some bugs, we will report details. They
</span><br>
<span class="quotelev1">&gt; are planning to complete them in around March.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With that two questions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The latest statuses written in these ticket comments are correct?
</span><br>
<span class="quotelev1">&gt; Is there any more progress?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Where are the latest codes?
</span><br>
<span class="quotelev1">&gt; In ticket #2223 says it is on Jeff's ompi-topo-fixes bitbucket branch.
</span><br>
<span class="quotelev1">&gt;  <a href="https://bitbucket.org/jsquyres/ompi-topo-fixes">https://bitbucket.org/jsquyres/ompi-topo-fixes</a>
</span><br>
<span class="quotelev1">&gt; But Jeff seems to have one more branch with a similar name.
</span><br>
<span class="quotelev1">&gt;  <a href="https://bitbucket.org/jsquyres/ompi-topo-fixes-fixed">https://bitbucket.org/jsquyres/ompi-topo-fixes-fixed</a>
</span><br>
<span class="quotelev1">&gt; Ticket #3127 says it is on Jeff's mpi22-c-complex bitbucket branch.
</span><br>
<span class="quotelev1">&gt; But there is no such branch now.
</span><br>
<span class="quotelev1">&gt;  <a href="https://bitbucket.org/jsquyres/mpi22-c-complex">https://bitbucket.org/jsquyres/mpi22-c-complex</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Takahiro Kawashima,
</span><br>
<span class="quotelev1">&gt; MPI development team,
</span><br>
<span class="quotelev1">&gt; Fujitsu
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
<li><strong>Next message:</strong> <a href="11946.php">George Bosilca: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="11944.php">Paul Hargrove: "[OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>In reply to:</strong> <a href="11942.php">Kawashima, Takahiro: "[OMPI devel] MPI-2.2 status #2223, #3127"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11948.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI-2.2 status #2223, #3127"</a>
<li><strong>Reply:</strong> <a href="11948.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI-2.2 status #2223, #3127"</a>
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
