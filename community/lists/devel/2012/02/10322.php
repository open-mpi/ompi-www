<?
$subject_val = "Re: [OMPI devel] RFC: Java MPI bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  7 15:18:46 2012" -->
<!-- isoreceived="20120207201846" -->
<!-- sent="Tue, 7 Feb 2012 13:18:38 -0700" -->
<!-- isosent="20120207201838" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Java MPI bindings" -->
<!-- id="2F2F5217-4707-4228-8610-C70CBCE16360_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B4CA9104-A39A-404C-A25C-36EB1FB210AE_at_eecs.utk.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-07 15:18:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10323.php">Rayson Ho: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>Previous message:</strong> <a href="10321.php">Ralph Castain: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>In reply to:</strong> <a href="10319.php">George Bosilca: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10325.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>Reply:</strong> <a href="10325.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nobody is asking us to make any decision or take a position re standardization. The Hadoop community fully intends to bring the question of Java binding standards to the Forum over the next year, but we all know that is a long, arduous journey. In the interim, they not only asked that we provide the bindings in our release, but also are providing the support to maintain them.
<br>
<p>If members of the Python or R communities were to step forward, offer to do the work and maintain it, and could show it had zero impact on the rest of the code base, I for one would welcome their bindings. Can't see the harm - can always be removed if/when they ceased to support them on their own.
<br>
<p><p>On Feb 7, 2012, at 12:33 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; This doesn't sound like a very good idea, despite a significant support from a lot of institutions. There is no standardization efforts in the targeted community, and championing a broader support in the Java world was not one of our main target.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMPI does not include the Boost bindings, despite the fact that it was developed at IU. OMPI does not include Python nor R bindings despite their large user community. Why suddenly should we provide unstandardized Java bindings?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think we should not tackle such inclusion before there is at least a beginning of a standardization effort in the targeted community. They have to step up and address their needs (if they are real), instead of relying on us to take a decision. Until then, the fast growing targeted community should maintain the binding as a standalone project on their own.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 1, 2012, at 15:20 , Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FROM: LANL, HLRS, Cisco, Oracle, and IBM
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Adds Java bindings
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHY: The Hadoop community would like to use MPI in their efforts, and most of their code is in Java
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: ompi/mpi/java plus one new config file in ompi/config
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: Feb 10, 2012
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hadoop is a Java-based environment for processing extremely large data sets. Modeled on the Google enterprise system, it has evolved into its own open-source community. Currently, they use their own IPC for messaging, but acknowledge that it is nowhere near as efficient or well-developed as found in MPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; While 3rd party Java bindings are available, the Hadoop business world is leery of depending on something that &quot;bolts on&quot; - they would be more willing to adopt the technology if it were included in a &quot;standard&quot; distribution. Hence, they have requested that Open MPI provide that capability, and in exchange will help champion broader adoption of Java support within the MPI community.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have based the OMPI bindings on the mpiJava code originally developed at IU, and currently maintained by HLRS. Adding the bindings to OMPI is completely transparent to all other OMPI users and has zero performance impact on the rest of the code/bindings. We have setup the configure so that the Java bindings will build if/when they can or are explicitly requested, just as with other language support.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As the Hadoop community represents a rapidly-growing new set of customers and needs, we feel that adding these bindings is appropriate. The bindings will be maintained by those organizations that have an interest in this use-case.
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10323.php">Rayson Ho: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>Previous message:</strong> <a href="10321.php">Ralph Castain: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>In reply to:</strong> <a href="10319.php">George Bosilca: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10325.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>Reply:</strong> <a href="10325.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
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
