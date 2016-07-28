<?
$subject_val = "Re: [OMPI devel] RFC: Java MPI bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  7 15:05:30 2012" -->
<!-- isoreceived="20120207200530" -->
<!-- sent="Tue, 7 Feb 2012 15:05:26 -0500" -->
<!-- isosent="20120207200526" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Java MPI bindings" -->
<!-- id="CAHwLALNek8+jVK=sKF8r+8i=AcDOxXrUmu1io2Pz1JWmOqnNvw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E94FEE9D-21D4-436F-9C64-1D1C42FEACA6_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Java MPI bindings<br>
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-07 15:05:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10321.php">Ralph Castain: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>Previous message:</strong> <a href="10319.php">George Bosilca: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>In reply to:</strong> <a href="10305.php">Ralph Castain: "[OMPI devel] RFC: Java MPI bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10321.php">Ralph Castain: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>Reply:</strong> <a href="10321.php">Ralph Castain: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Currently, Hadoop tasks (in a job) are independent of each. If Hadoop
<br>
is going to use MPI for inter-task communication, then make sure they
<br>
understand that the MPI standard currently does not address fault
<br>
folerant.
<br>
<p>Note that it is not uncommon to run map reduce jobs on Amazon EC2's
<br>
spot instances, which can be taken back by Amazon at any time if the
<br>
spot price rises above the bid price of the user. If Hadoop is going
<br>
to use MPI, and without a fault folerant MPI implementation, then the
<br>
whole job needs to be rerun.
<br>
<p><a href="http://www.youtube.com/watch?v=66rfnFA0jpM">http://www.youtube.com/watch?v=66rfnFA0jpM</a>
<br>
<p>Rayson
<br>
<p>=================================
<br>
Open Grid Scheduler / Grid Engine
<br>
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
<br>
<p>Scalable Grid Engine Support Program
<br>
<a href="http://www.scalablelogic.com/">http://www.scalablelogic.com/</a>
<br>
<p><p>On Wed, Feb 1, 2012 at 3:20 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; FROM: LANL, HLRS, Cisco, Oracle, and IBM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHAT: Adds Java bindings
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY: The Hadoop community would like to use MPI in their efforts, and most of their code is in Java
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE: ompi/mpi/java plus one new config file in ompi/config
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Feb 10, 2012
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hadoop is a Java-based environment for processing extremely large data sets. Modeled on the Google enterprise system, it has evolved into its own open-source community. Currently, they use their own IPC for messaging, but acknowledge that it is nowhere near as efficient or well-developed as found in MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While 3rd party Java bindings are available, the Hadoop business world is leery of depending on something that &quot;bolts on&quot; - they would be more willing to adopt the technology if it were included in a &quot;standard&quot; distribution. Hence, they have requested that Open MPI provide that capability, and in exchange will help champion broader adoption of Java support within the MPI community.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have based the OMPI bindings on the mpiJava code originally developed at IU, and currently maintained by HLRS. Adding the bindings to OMPI is completely transparent to all other OMPI users and has zero performance impact on the rest of the code/bindings. We have setup the configure so that the Java bindings will build if/when they can or are explicitly requested, just as with other language support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As the Hadoop community represents a rapidly-growing new set of customers and needs, we feel that adding these bindings is appropriate. The bindings will be maintained by those organizations that have an interest in this use-case.
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
<p><p><p><pre>
-- 
Rayson
==================================================
Open Grid Scheduler - The Official Open Source Grid Engine
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10321.php">Ralph Castain: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>Previous message:</strong> <a href="10319.php">George Bosilca: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>In reply to:</strong> <a href="10305.php">Ralph Castain: "[OMPI devel] RFC: Java MPI bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10321.php">Ralph Castain: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>Reply:</strong> <a href="10321.php">Ralph Castain: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
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
