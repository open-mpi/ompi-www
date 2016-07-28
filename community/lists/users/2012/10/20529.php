<?
$subject_val = "Re: [OMPI users] Java binding requirements";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 24 22:58:27 2012" -->
<!-- isoreceived="20121025025827" -->
<!-- sent="Thu, 25 Oct 2012 11:58:34 +0900" -->
<!-- isosent="20121025025834" -->
<!-- name="Yoshiki SATO" -->
<!-- email="yoshiki_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Java binding requirements" -->
<!-- id="D282CB9B-1708-4A20-8725-78607B6B2516_at_ci.i.u-tokyo.ac.jp" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="27A1CF7C-165C-4276-8E93-0D22E0BEEC8C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Java binding requirements<br>
<strong>From:</strong> Yoshiki SATO (<em>yoshiki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-24 22:58:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20530.php">Ralph Castain: "Re: [OMPI users] Java binding requirements"</a>
<li><strong>Previous message:</strong> <a href="20528.php">Jeff Squyres: "Re: [OMPI users] ompi-clean on single executable"</a>
<li><strong>In reply to:</strong> <a href="20524.php">Ralph Castain: "Re: [OMPI users] Java binding requirements"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20530.php">Ralph Castain: "Re: [OMPI users] Java binding requirements"</a>
<li><strong>Reply:</strong> <a href="20530.php">Ralph Castain: "Re: [OMPI users] Java binding requirements"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for you comments.
<br>
<p><span class="quotelev2">&gt;&gt; If so, my question is if I need NOT to install JDK to the all nodes.  In other words is it possible to have a machine used as a worker without JDK installed?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You do not need JDK installed on worker nodes - it only has to be on the node where you compile your code. However, we launch a JVM for each process, so you must at least have the JVM installed on each worker. This is typically included in a base Linux installation (just look for the &quot;java&quot; command, usually in /usr/bin), so you usually don't have to do anything special (as opposed to installing the JDK, which doesn't usually come in the base install)
</span><br>
<p>Ok, but I meant to say about JVM, because my requirement is to leverage such nodes as have no JVM supported, for example, Gentoo Linux/SPARC64 as workers.  I thought that the Java binding implementation wraps Open MPI only on the rank zero side.  This is because the FAQ says:
<br>
<p><span class="quotelev1">&gt; 8. Do the Java bindings impact performance of my non-Java application?
</span><br>
<span class="quotelev1">&gt; The Java bindings in Open MPI are completely transparent to all other Open MPI users and have zero performance impact on the rest of the code/bindings.
</span><br>
<p><p>But I realize that this perhaps mentions about the Open MPI applications that use a Java-enabled Open MPI build.  Meantime, the next FAQ is specifying the possibility of performance penalties for Java applications that use Open MPI.
<br>
<p>Regards,
<br>
--yoshiki
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20530.php">Ralph Castain: "Re: [OMPI users] Java binding requirements"</a>
<li><strong>Previous message:</strong> <a href="20528.php">Jeff Squyres: "Re: [OMPI users] ompi-clean on single executable"</a>
<li><strong>In reply to:</strong> <a href="20524.php">Ralph Castain: "Re: [OMPI users] Java binding requirements"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20530.php">Ralph Castain: "Re: [OMPI users] Java binding requirements"</a>
<li><strong>Reply:</strong> <a href="20530.php">Ralph Castain: "Re: [OMPI users] Java binding requirements"</a>
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
