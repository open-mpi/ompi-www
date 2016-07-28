<?
$subject_val = "Re: [OMPI devel] MPI-2.2 status #2223, #3127";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 18 09:40:45 2013" -->
<!-- isoreceived="20130118144045" -->
<!-- sent="Fri, 18 Jan 2013 14:40:30 +0000" -->
<!-- isosent="20130118144030" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI-2.2 status #2223, #3127" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC3E0865F1_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-18 09:40:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11948.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI-2.2 status #2223, #3127"</a>
<li><strong>Previous message:</strong> <a href="11946.php">George Bosilca: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>In reply to:</strong> <a href="11942.php">Kawashima, Takahiro: "[OMPI devel] MPI-2.2 status #2223, #3127"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 17, 2013, at 8:43 PM, &quot;Kawashima, Takahiro&quot; &lt;t-kawashima_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; Fujitsu is interested in completing MPI-2.2 on Open MPI and Open MPI
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
<p>Great!
<br>
<p><span class="quotelev1">&gt; The latest statuses written in these ticket comments are correct?
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
<p>You are correct; I should update #2223 -- the &quot;-fixed&quot; one is the right one.
<br>
<p>I think the original one got hosed somehow, and I created the &quot;-fixed&quot; one for all future commits.
<br>
<p>George and I did a bunch of work on this ticket, but AFAIK, it never got finished.  It might be within a delta of debugging, though.  I notice that some of the IBM topology tests are failing (i.e., not Dist_graph stuff -- normal topology stuff).  So something possibly got a little hosed in the topo base in the revamp.
<br>
<p>And then, as mentioned on the ticket, there's no Dist_graph tests to know what the status is of the implementation of those functions.
<br>
<p><span class="quotelev1">&gt; Ticket #3127 says it is on Jeff's mpi22-c-complex bitbucket branch.
</span><br>
<span class="quotelev1">&gt; But there is no such branch now.
</span><br>
<span class="quotelev1">&gt;  <a href="https://bitbucket.org/jsquyres/mpi22-c-complex">https://bitbucket.org/jsquyres/mpi22-c-complex</a>
</span><br>
<p>Oops -- I put it back.
<br>
<p>It looks like I did one commit that is annotated &quot;First cut -- doesn't work yet.&quot;  I think the last status on that ticket is probably accurate.
<br>
<p>I updated both bitbuckets this morning to be at the head of the SVN trunk, so they're good and recent.
<br>
<p>Let me know if you want to fork/do pull requests, or if you just want write access to those repos.
<br>
<p>Thanks!
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
<li><strong>Next message:</strong> <a href="11948.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI-2.2 status #2223, #3127"</a>
<li><strong>Previous message:</strong> <a href="11946.php">George Bosilca: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>In reply to:</strong> <a href="11942.php">Kawashima, Takahiro: "[OMPI devel] MPI-2.2 status #2223, #3127"</a>
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
