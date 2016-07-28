<?
$subject_val = "Re: [OMPI users] Java binding requirements";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 25 00:08:55 2012" -->
<!-- isoreceived="20121025040855" -->
<!-- sent="Wed, 24 Oct 2012 21:08:47 -0700" -->
<!-- isosent="20121025040847" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Java binding requirements" -->
<!-- id="B21C5832-6988-46E6-B524-BDDAE9608628_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D282CB9B-1708-4A20-8725-78607B6B2516_at_ci.i.u-tokyo.ac.jp" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-25 00:08:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20531.php">Ralph Castain: "Re: [OMPI users] ompi-clean on single executable"</a>
<li><strong>Previous message:</strong> <a href="20529.php">Yoshiki SATO: "Re: [OMPI users] Java binding requirements"</a>
<li><strong>In reply to:</strong> <a href="20529.php">Yoshiki SATO: "Re: [OMPI users] Java binding requirements"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 24, 2012, at 7:58 PM, Yoshiki SATO &lt;yoshiki_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for you comments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If so, my question is if I need NOT to install JDK to the all nodes.  In other words is it possible to have a machine used as a worker without JDK installed?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You do not need JDK installed on worker nodes - it only has to be on the node where you compile your code. However, we launch a JVM for each process, so you must at least have the JVM installed on each worker. This is typically included in a base Linux installation (just look for the &quot;java&quot; command, usually in /usr/bin), so you usually don't have to do anything special (as opposed to installing the JDK, which doesn't usually come in the base install)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok, but I meant to say about JVM, because my requirement is to leverage such nodes as have no JVM supported, for example, Gentoo Linux/SPARC64 as workers.  I thought that the Java binding implementation wraps Open MPI only on the rank zero side.
</span><br>
<p>No, every process executes in Java - your application code IS, after all, in Java. What we mean by the FAQ is that the processes access the underlying MPI operations via a JNI module that translates from Java to the native C implementation. So you must have JVM support on each machine.
<br>
<p><span class="quotelev1">&gt;  This is because the FAQ says:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 8. Do the Java bindings impact performance of my non-Java application?
</span><br>
<span class="quotelev2">&gt;&gt; The Java bindings in Open MPI are completely transparent to all other Open MPI users and have zero performance impact on the rest of the code/bindings.
</span><br>
<p>That statement is intended to reassure all non-Java users that the Java bindings will in no way impact them.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I realize that this perhaps mentions about the Open MPI applications that use a Java-enabled Open MPI build.  Meantime, the next FAQ is specifying the possibility of performance penalties for Java applications that use Open MPI.
</span><br>
<p>That is correct - as the statement says, *non-Java* applications will see no impact of having Java enabled in the build. Java-based applications see a performance penalty relative to a C-based application.
<br>
<p>HTH
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; --yoshiki
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20531.php">Ralph Castain: "Re: [OMPI users] ompi-clean on single executable"</a>
<li><strong>Previous message:</strong> <a href="20529.php">Yoshiki SATO: "Re: [OMPI users] Java binding requirements"</a>
<li><strong>In reply to:</strong> <a href="20529.php">Yoshiki SATO: "Re: [OMPI users] Java binding requirements"</a>
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
