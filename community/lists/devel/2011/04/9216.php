<?
$subject_val = "Re: [OMPI devel] Adaptive or fault-tolerant MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 25 09:22:56 2011" -->
<!-- isoreceived="20110425132256" -->
<!-- sent="Mon, 25 Apr 2011 07:22:49 -0600" -->
<!-- isosent="20110425132249" -->
<!-- name="Ken Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Adaptive or fault-tolerant MPI" -->
<!-- id="1303737769.19420.4.camel_at_localhost.localdomain" -->
<!-- charset="utf-8" -->
<!-- inreplyto="22BE9E38-E6DE-4EC9-AE2D-B5444A9320C7_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Adaptive or fault-tolerant MPI<br>
<strong>From:</strong> Ken Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-25 09:22:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9217.php">George Bosilca: "Re: [OMPI devel] Adaptive or fault-tolerant MPI"</a>
<li><strong>Previous message:</strong> <a href="9215.php">Joshua Hursey: "Re: [OMPI devel] Adaptive or fault-tolerant MPI"</a>
<li><strong>In reply to:</strong> <a href="9215.php">Joshua Hursey: "Re: [OMPI devel] Adaptive or fault-tolerant MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9217.php">George Bosilca: "Re: [OMPI devel] Adaptive or fault-tolerant MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks.  I've read your (Joshua Hersey's) Ph.D. thesis on fault
<br>
tolerance using checkpointing with much interest. It would be of further
<br>
interest to get the range of possible user requirements for defining the
<br>
behaviors in response to various faults.
<br>
<p>Ken Lloyd
<br>
<p>On Fri, 2011-04-22 at 15:03 -0400, Joshua Hursey wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 22, 2011, at 1:20 PM, N.M. Maclaren wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 22 2011, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Several of us are. Josh and George (plus teammates), and some other outside folks, are working the MPI side of it.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm working only the ORTE side of the problem.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Quite a bit of capability is already in the trunk, but there is always more to do :-)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is there a specification of what objectives are covered by 'fault-tolerant'?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We do not really have a website to point folks to at the moment. Some of the existing functionally in and planned functionality for Open MPI has been announced and documented, but not uniformly or in a central place at the moment. We have a developers meeting in a couple weeks and this is a topic I am planning on covering:
</span><br>
<span class="quotelev1">&gt;   <a href="https://svn.open-mpi.org/trac/ompi/wiki/May11Meeting">https://svn.open-mpi.org/trac/ompi/wiki/May11Meeting</a>
</span><br>
<span class="quotelev1">&gt; Once something is available, we'll post to the users/developers lists so that people know where to look for developments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am responsible for two fault tolerance features in Open MPI: Checkpoint/Restart and MPI Forum's Fault Tolerance Working Group proposals. The Checkpoint/Restart support is documented here:
</span><br>
<span class="quotelev1">&gt;   <a href="http://osl.iu.edu/research/ft/ompi-cr/">http://osl.iu.edu/research/ft/ompi-cr/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Most of my attention is focused on the MPI Forum's Fault Tolerance Working Group proposals that are focused on enabling fault tolerant applications to be developed on top of MPI (so non-transparent fault tolerance). The Open MPI prototype is not yet publicly available, but soon. Information about the semantics and interfaces of that project can be found at the links below:
</span><br>
<span class="quotelev1">&gt;   <a href="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/FaultToleranceWikiPage">https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/FaultToleranceWikiPage</a>
</span><br>
<span class="quotelev1">&gt;   <a href="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/ft/run_through_stabilization">https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/ft/run_through_stabilization</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is what I have been up to regarding fault tolerance. Others can probably elaborate on what they are working on if they wish.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Nick Maclaren.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9216/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9217.php">George Bosilca: "Re: [OMPI devel] Adaptive or fault-tolerant MPI"</a>
<li><strong>Previous message:</strong> <a href="9215.php">Joshua Hursey: "Re: [OMPI devel] Adaptive or fault-tolerant MPI"</a>
<li><strong>In reply to:</strong> <a href="9215.php">Joshua Hursey: "Re: [OMPI devel] Adaptive or fault-tolerant MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9217.php">George Bosilca: "Re: [OMPI devel] Adaptive or fault-tolerant MPI"</a>
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
