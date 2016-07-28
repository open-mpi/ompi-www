<?
$subject_val = "Re: [OMPI devel] Adaptive or fault-tolerant MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 25 11:47:11 2011" -->
<!-- isoreceived="20110425154711" -->
<!-- sent="Mon, 25 Apr 2011 11:47:06 -0400" -->
<!-- isosent="20110425154706" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Adaptive or fault-tolerant MPI" -->
<!-- id="C8224BCD-A0ED-4257-A37C-736ED184FFD7_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-25 11:47:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9218.php">Kishor Kharbas: "[OMPI devel] Open MPI error"</a>
<li><strong>Previous message:</strong> <a href="9216.php">Ken Lloyd: "Re: [OMPI devel] Adaptive or fault-tolerant MPI"</a>
<li><strong>In reply to:</strong> <a href="9215.php">Joshua Hursey: "Re: [OMPI devel] Adaptive or fault-tolerant MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ken,
<br>
<p>At UTK we focus on developing two generic frameworks for scalable fault tolerant approaches. One is based on uncoordinated checkpoint/restart while the other is application level.
<br>
<p>1) uncoordinated C/R based on message logging. Such approaches are fully automatic, rely on an external checkpoint/restart mechanism (BLCR currently), and do not require any synchronization. A process restarts independently, and it catch-up with the others. During its recovery the others can continue their execution undisturbed. The framework developed by UTK is currently used by at our knowledge by two other team to implement different uncoordinated mechanisms.
<br>
<p>Redesigning the Message Logging Model for High Performance, Aurelien Bouteiller, G. Bosilca, and J. Dongarra, accepted in Concurrency and Computing: Practice and Experience, January 2010 (<a href="http://www.netlib.org/netlib/utk/people/JackDongarra/PAPERS/isc-cppe-final.pdf">http://www.netlib.org/netlib/utk/people/JackDongarra/PAPERS/isc-cppe-final.pdf</a>)
<br>
<p>Dodging the Cost of Unavoidable Memory Copies in Message Logging Protocols, George Bosilca, Aurelien Bouteiller, Thomas Herault, Pierre Lemarinier, and Jack Dongarra, Euro MPI 2010 (<a href="http://icl.cs.utk.edu/news_pub/submissions/hpc-ml.pdf">http://icl.cs.utk.edu/news_pub/submissions/hpc-ml.pdf</a>)
<br>
<p>Reasons to be Pessimist or Optimist for Failure Recovery in High Performance Clusters, Aurelien Bouteiller, Thomas Ropars, George Bosilca, Christine Morin and Jack Dongarra. , Cluster 2009 (<a href="http://www.netlib.org/netlib/utk/people/JackDongarra/PAPERS/msglog.final.pdf">http://www.netlib.org/netlib/utk/people/JackDongarra/PAPERS/msglog.final.pdf</a>)
<br>
<p>2) application level. We developed a framework allowing distinct application level responses to faults. In other terms the error is reported up to the application level, which become responsible for handling the error. The &quot;still alive&quot; processes in the MPI application as well as the whole runtime system remain totally functional, they can continue their work without interruption. On top of this generic framework we implemented a method very similar with FT-MPI, including some additions (such as supporting the MPI 2.0 standard).
<br>
<p>Extending the MPI Specification for Process Fault Tolerance on High Performance Computing Systems, Graham E. Fagg, Edgar Gabriel, George Bosilca, Thara Angskun, Zizhong Chen, Jelena Pjesivac-Grbovic, Kevin London and Jack J. Dongarra, Proceedings of the ISC2004 meeting Heidelberg, June 23, 2004. (<a href="http://www.netlib.org/utk/people/JackDongarra/PAPERS/isc2004-FT-MPI.pdf">http://www.netlib.org/utk/people/JackDongarra/PAPERS/isc2004-FT-MPI.pdf</a>)
<br>
<p>Hope this helps,
<br>
&nbsp;&nbsp;george.
<br>
<p><p>On Apr 22, 2011, at 15:03 , Joshua Hursey wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 22, 2011, at 1:20 PM, N.M. Maclaren wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 22 2011, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Several of us are. Josh and George (plus teammates), and some other outside folks, are working the MPI side of it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm working only the ORTE side of the problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Quite a bit of capability is already in the trunk, but there is always more to do :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a specification of what objectives are covered by 'fault-tolerant'?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We do not really have a website to point folks to at the moment. Some of the existing functionally in and planned functionality for Open MPI has been announced and documented, but not uniformly or in a central place at the moment. We have a developers meeting in a couple weeks and this is a topic I am planning on covering:
</span><br>
<span class="quotelev1">&gt;  <a href="https://svn.open-mpi.org/trac/ompi/wiki/May11Meeting">https://svn.open-mpi.org/trac/ompi/wiki/May11Meeting</a>
</span><br>
<span class="quotelev1">&gt; Once something is available, we'll post to the users/developers lists so that people know where to look for developments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am responsible for two fault tolerance features in Open MPI: Checkpoint/Restart and MPI Forum's Fault Tolerance Working Group proposals. The Checkpoint/Restart support is documented here:
</span><br>
<span class="quotelev1">&gt;  <a href="http://osl.iu.edu/research/ft/ompi-cr/">http://osl.iu.edu/research/ft/ompi-cr/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Most of my attention is focused on the MPI Forum's Fault Tolerance Working Group proposals that are focused on enabling fault tolerant applications to be developed on top of MPI (so non-transparent fault tolerance). The Open MPI prototype is not yet publicly available, but soon. Information about the semantics and interfaces of that project can be found at the links below:
</span><br>
<span class="quotelev1">&gt;  <a href="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/FaultToleranceWikiPage">https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/FaultToleranceWikiPage</a>
</span><br>
<span class="quotelev1">&gt;  <a href="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/ft/run_through_stabilization">https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/ft/run_through_stabilization</a>
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Nick Maclaren.
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<p>George Bosilca
<br>
Research Assistant Professor
<br>
Innovative Computing Laboratory
<br>
Department of Electrical Engineering and Computer Science
<br>
University of Tennessee, Knoxville
<br>
<a href="http://web.eecs.utk.edu/~bosilca/">http://web.eecs.utk.edu/~bosilca/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9218.php">Kishor Kharbas: "[OMPI devel] Open MPI error"</a>
<li><strong>Previous message:</strong> <a href="9216.php">Ken Lloyd: "Re: [OMPI devel] Adaptive or fault-tolerant MPI"</a>
<li><strong>In reply to:</strong> <a href="9215.php">Joshua Hursey: "Re: [OMPI devel] Adaptive or fault-tolerant MPI"</a>
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
