<?
$subject_val = "Re: [OMPI devel] RFC: Resilient ORTE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 18:35:35 2011" -->
<!-- isoreceived="20110607223535" -->
<!-- sent="Tue, 7 Jun 2011 16:35:29 -0600" -->
<!-- isosent="20110607223529" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Resilient ORTE" -->
<!-- id="BANLkTinzc3C+2ANC9=T7OBUQL3_OjN2BuQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BD39E82833DC4B21A335DC54D0E75D6C_at_gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-07 18:35:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9324.php">Josh Hursey: "[OMPI devel] RFC: Fortran support in Open MPI Extensions"</a>
<li><strong>Previous message:</strong> <a href="9322.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9320.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9314.php">George Bosilca: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks - that helps!
<br>
<p><p>On Tue, Jun 7, 2011 at 1:25 PM, Wesley Bland &lt;wbland_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Definitely we are targeting ORTED failures here. If an ORTED fails than
</span><br>
<span class="quotelev1">&gt; any other ORTEDs connected to it will notice and report the failure. Of
</span><br>
<span class="quotelev1">&gt; course if the failure is an application than the ORTED on that node will be
</span><br>
<span class="quotelev1">&gt; the only one to detect it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, if an ORTED is lost, all of the applications running underneath it
</span><br>
<span class="quotelev1">&gt; are also lost because we have no way to communicate with them anymore.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tuesday, June 7, 2011 at 3:14 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Quick question: could you please clarify this statement:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...because more than one ORTED could (and often will) detect the failure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't understand how this can be true, except for detecting an ORTED
</span><br>
<span class="quotelev1">&gt; failure. Only one orted can detect an MPI process failure, unless you have
</span><br>
<span class="quotelev1">&gt; now involved orted's in MPI communications (and I don't believe you did). If
</span><br>
<span class="quotelev1">&gt; the HNP directs another orted to restart that proc, and then that
</span><br>
<span class="quotelev1">&gt; incarnation fails, then the epoch number -should- increment again, shouldn't
</span><br>
<span class="quotelev1">&gt; it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So are you concerned (re having the HNP mark a proc down multiple times)
</span><br>
<span class="quotelev1">&gt; about orted failure detection? In that case, I agree that you can have
</span><br>
<span class="quotelev1">&gt; multiple failure detections - we dealt with it differently in orcm, but I
</span><br>
<span class="quotelev1">&gt; have no issue with doing it another way. Just helps to know what problem you
</span><br>
<span class="quotelev1">&gt; are trying to solve.
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
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9323/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9324.php">Josh Hursey: "[OMPI devel] RFC: Fortran support in Open MPI Extensions"</a>
<li><strong>Previous message:</strong> <a href="9322.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9320.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9314.php">George Bosilca: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
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
