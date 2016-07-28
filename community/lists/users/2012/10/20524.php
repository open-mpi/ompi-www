<?
$subject_val = "Re: [OMPI users] Java binding requirements";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 24 12:23:46 2012" -->
<!-- isoreceived="20121024162346" -->
<!-- sent="Wed, 24 Oct 2012 09:23:38 -0700" -->
<!-- isosent="20121024162338" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Java binding requirements" -->
<!-- id="27A1CF7C-165C-4276-8E93-0D22E0BEEC8C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="08FA02FE-6E69-4B64-BF31-226C6EC6B4D0_at_ci.i.u-tokyo.ac.jp" -->
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
<strong>Date:</strong> 2012-10-24 12:23:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20525.php">Ralph Castain: "Re: [OMPI users] ompi-clean on single executable"</a>
<li><strong>Previous message:</strong> <a href="20523.php">Nicolas Deladerriere: "Re: [OMPI users] ompi-clean on single executable"</a>
<li><strong>In reply to:</strong> <a href="20518.php">Yoshiki SATO: "[OMPI users] Java binding requirements"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20529.php">Yoshiki SATO: "Re: [OMPI users] Java binding requirements"</a>
<li><strong>Reply:</strong> <a href="20529.php">Yoshiki SATO: "Re: [OMPI users] Java binding requirements"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 23, 2012, at 9:51 PM, Yoshiki SATO &lt;yoshiki_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Recently, I tried to use Java bindings in Open MPI released this February.  As far as mentioned in the Java FAQ ( <a href="http://www.open-mpi.org/faq/?category=java">http://www.open-mpi.org/faq/?category=java</a> ), the Java binding implementation doesn't cause any performance degradation because of just wrapping native Open MPI with mpiJava-based APIs.  I believe this means no Java code is required to run on all processing nodes (workers) but it has only to run on a master node.  Is this understanding correct?
</span><br>
<p>Not sure I fully understand, but I believe the answer is no - Java code is going to run on all nodes where there are processes.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If so, my question is if I need NOT to install JDK to the all nodes.  In other words is it possible to have a machine used as a worker without JDK installed?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>You do not need JDK installed on worker nodes - it only has to be on the node where you compile your code. However, we launch a JVM for each process, so you must at least have the JVM installed on each worker. This is typically included in a base Linux installation (just look for the &quot;java&quot; command, usually in /usr/bin), so you usually don't have to do anything special (as opposed to installing the JDK, which doesn't usually come in the base install)
<br>
<p>HTH
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; Thanks a lot for any comment in advance.
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="20525.php">Ralph Castain: "Re: [OMPI users] ompi-clean on single executable"</a>
<li><strong>Previous message:</strong> <a href="20523.php">Nicolas Deladerriere: "Re: [OMPI users] ompi-clean on single executable"</a>
<li><strong>In reply to:</strong> <a href="20518.php">Yoshiki SATO: "[OMPI users] Java binding requirements"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20529.php">Yoshiki SATO: "Re: [OMPI users] Java binding requirements"</a>
<li><strong>Reply:</strong> <a href="20529.php">Yoshiki SATO: "Re: [OMPI users] Java binding requirements"</a>
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
