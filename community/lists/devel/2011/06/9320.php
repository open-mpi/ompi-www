<?
$subject_val = "Re: [OMPI devel] RFC: Resilient ORTE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 15:25:14 2011" -->
<!-- isoreceived="20110607192514" -->
<!-- sent="Tue, 7 Jun 2011 15:25:08 -0400" -->
<!-- isosent="20110607192508" -->
<!-- name="Wesley Bland" -->
<!-- email="wbland_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Resilient ORTE" -->
<!-- id="BD39E82833DC4B21A335DC54D0E75D6C_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="BANLkTik=vUDb9EVz40AvjS970Xf4LhQ2kQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Resilient ORTE<br>
<strong>From:</strong> Wesley Bland (<em>wbland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-07 15:25:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9321.php">Kishor Kharbas: "[OMPI devel] MPI application hangs after a checkpoint"</a>
<li><strong>Previous message:</strong> <a href="9319.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9319.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9323.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9323.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Definitely we are targeting ORTED failures here. If an ORTED fails than any other ORTEDs connected to it will notice and report the failure. Of course if the failure is an application than the ORTED on that node will be the only one to detect it.
<br>
<p>Also, if an ORTED is lost, all of the applications running underneath it are also lost because we have no way to communicate with them anymore.
<br>
<p>On Tuesday, June 7, 2011 at 3:14 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Quick question: could you please clarify this statement:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ...because more than one ORTED could (and often will) detect the failure. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't understand how this can be true, except for detecting an ORTED failure. Only one orted can detect an MPI process failure, unless you have now involved orted's in MPI communications (and I don't believe you did). If the HNP directs another orted to restart that proc, and then that incarnation fails, then the epoch number -should- increment again, shouldn't it? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So are you concerned (re having the HNP mark a proc down multiple times) about orted failure detection? In that case, I agree that you can have multiple failure detections - we dealt with it differently in orcm, but I have no issue with doing it another way. Just helps to know what problem you are trying to solve. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] (mailto:devel_at_[hidden])
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9320/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9321.php">Kishor Kharbas: "[OMPI devel] MPI application hangs after a checkpoint"</a>
<li><strong>Previous message:</strong> <a href="9319.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9319.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9323.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9323.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
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
