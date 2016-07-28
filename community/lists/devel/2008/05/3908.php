<?
$subject_val = "[OMPI devel] v1.3 Feature Freeze in effect";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 13 16:36:38 2008" -->
<!-- isoreceived="20080513203638" -->
<!-- sent="Tue, 13 May 2008 15:36:29 -0500" -->
<!-- isosent="20080513203629" -->
<!-- name="Brad Benton" -->
<!-- email="bradford.benton_at_[hidden]" -->
<!-- subject="[OMPI devel] v1.3 Feature Freeze in effect" -->
<!-- id="44079e5f0805131336xdd07e09k32523ba587db9857_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] v1.3 Feature Freeze in effect<br>
<strong>From:</strong> Brad Benton (<em>bradford.benton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-13 16:36:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3909.php">Jeff Squyres: "[OMPI devel] New orte_output / orte_show_help stuff"</a>
<li><strong>Previous message:</strong> <a href="3907.php">Jon Mason: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3912.php">Terry Dontje: "Re: [OMPI devel] v1.3 Feature Freeze in effect"</a>
<li><strong>Reply:</strong> <a href="3912.php">Terry Dontje: "Re: [OMPI devel] v1.3 Feature Freeze in effect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All:
<br>
<p>As of today (May 13, 2008), the trunk is under v1.3 feature freeze until it
<br>
is stabilized and branched (targeted for May 23, 2008).  Here are the
<br>
guidelines for activity in the trunk while we are under the v1.3 feature
<br>
freeze:
<br>
<p>&nbsp;&nbsp;&nbsp;1. New components can still be checked into the trunk, but do so with
<br>
&nbsp;&nbsp;&nbsp;.ompi_ignore so that they can be filtered out at branch time. Also,
<br>
&nbsp;&nbsp;&nbsp;for newly checked in components, enter a trac ticket as a reminder to clean
<br>
&nbsp;&nbsp;&nbsp;up the .ompi_ignore, if necessary, after the branch
<br>
<p>&nbsp;&nbsp;&nbsp;2. The following items have *special* dispensation to come into the
<br>
&nbsp;&nbsp;&nbsp;trunk late (cutoff date for them is May 20)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Final parts of 1.3 Thread Multiple Support
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Send &amp; Receive changes for improved latency
<br>
(#1250&lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1250">https://svn.open-mpi.org/trac/ompi/ticket/1250</a>&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- XML component for orte_output() and friends
<br>
<p><p>Thanks,
<br>
--Brad
<br>
<p><p>Brad Benton
<br>
Open MPI v1.3 co-release manager
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3908/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3909.php">Jeff Squyres: "[OMPI devel] New orte_output / orte_show_help stuff"</a>
<li><strong>Previous message:</strong> <a href="3907.php">Jon Mason: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3912.php">Terry Dontje: "Re: [OMPI devel] v1.3 Feature Freeze in effect"</a>
<li><strong>Reply:</strong> <a href="3912.php">Terry Dontje: "Re: [OMPI devel] v1.3 Feature Freeze in effect"</a>
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
