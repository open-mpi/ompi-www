<?
$subject_val = "Re: [OMPI devel] [Open MPI] #3161: openib udcm finalize causes open async thread to abort";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 17 20:49:05 2012" -->
<!-- isoreceived="20120818004905" -->
<!-- sent="Fri, 17 Aug 2012 20:49:00 -0400" -->
<!-- isosent="20120818004900" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Open MPI] #3161: openib udcm finalize causes open async thread to abort" -->
<!-- id="ED17E2CA-AFC8-42B0-BA6B-358405182739_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="056.7af0d8aa5c2d03c5cfdcec09a8e8a0e7_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [Open MPI] #3161: openib udcm finalize causes open async thread to abort<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-17 20:49:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11408.php">Jeff Squyres: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="11406.php">Jeff Squyres: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Chris --
<br>
<p>I see that this was fixed on the trunk.  Does it need to be CMR'ed to v1.7?
<br>
<p><p><p>On Aug 15, 2012, at 11:56 PM, Open MPI wrote:
<br>
<p><span class="quotelev1">&gt; #3161: openib udcm finalize causes open async thread to abort
</span><br>
<span class="quotelev1">&gt; -------------------+---------------------------
</span><br>
<span class="quotelev1">&gt; Reporter:  cyeoh   |       Owner:  ompi-rm1.7
</span><br>
<span class="quotelev1">&gt;    Type:  defect  |      Status:  closed
</span><br>
<span class="quotelev1">&gt; Priority:  major   |   Milestone:  Open MPI 1.7
</span><br>
<span class="quotelev1">&gt; Version:  trunk   |  Resolution:  fixed
</span><br>
<span class="quotelev1">&gt; Keywords:          |
</span><br>
<span class="quotelev1">&gt; -------------------+---------------------------
</span><br>
<span class="quotelev1">&gt; Changes (by cyeoh):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * status:  assigned =&gt; closed
</span><br>
<span class="quotelev1">&gt; * resolution:   =&gt; fixed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Comment:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (In [27064]) Adds synchronisation between main thread and service thread
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_udcm when notifying not to listen to an fd to ensure
</span><br>
<span class="quotelev1">&gt; that the main thread does not continue until the service thread has
</span><br>
<span class="quotelev1">&gt; processed the message
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Adds ability to send message to openib async thread to tell it to
</span><br>
<span class="quotelev1">&gt; ignore the ERR state on a specific QP. Adds this call to
</span><br>
<span class="quotelev1">&gt; udcm_module_finalize
</span><br>
<span class="quotelev1">&gt; so when we set the error state on the QP it doesn't cause the
</span><br>
<span class="quotelev1">&gt; openib async thread to abort the mpi program prematurely
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fixes #3161
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ticket URL: &lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/3161#comment:13">https://svn.open-mpi.org/trac/ompi/ticket/3161#comment:13</a>&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="11408.php">Jeff Squyres: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="11406.php">Jeff Squyres: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
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
