<?
$subject_val = "[OMPI devel] Changes to classes in OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  8 12:14:38 2013" -->
<!-- isoreceived="20131008161438" -->
<!-- sent="Tue, 8 Oct 2013 09:14:34 -0700" -->
<!-- isosent="20131008161434" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Changes to classes in OMPI" -->
<!-- id="9463307C-2E40-4121-B4CD-B0E1B44AB5D8_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI devel] Changes to classes in OMPI<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-08 12:14:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13071.php">marco atzeri: "Re: [OMPI devel] 1.7.x support statement"</a>
<li><strong>Previous message:</strong> <a href="13069.php">Ralph Castain: "[OMPI devel] Moving BTLs to OPAL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13074.php">George Bosilca: "Re: [OMPI devel] Changes to classes in OMPI"</a>
<li><strong>Reply:</strong> <a href="13074.php">George Bosilca: "Re: [OMPI devel] Changes to classes in OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>This was one item from the last devel meeting that can be done independent of other things:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#149; resolution: all opal and orte (and possibly ompi) classes need to have a thread safe and thread-free interface
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#149; _st suffix: single thread (i.e., not thread safe variant)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#149; _mt suffix: multi thread (i.e., thread safe variant)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#149; for functions that have both st/mt, they will *both* have suffixes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#149; other functions (that do not have st/mt versions) will be naked names
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#149; need to rename all classes that have locking enabled already (e.g., opal_free_list)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#149; so today, we go rename all the functions (e.g., opal_free_list functions get _mt suffix) throughout the code base
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#149; as someone needs the _st version, they go create it and use it as they want to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#149; Ralph will do the orte classes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#149; Aurelien will do this for the ompi classes
<br>
<p>I believe some of these have been done - I will take care of the ORTE classes this week, so consider this a &quot;heads up&quot; for that change.
<br>
Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13070/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13071.php">marco atzeri: "Re: [OMPI devel] 1.7.x support statement"</a>
<li><strong>Previous message:</strong> <a href="13069.php">Ralph Castain: "[OMPI devel] Moving BTLs to OPAL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13074.php">George Bosilca: "Re: [OMPI devel] Changes to classes in OMPI"</a>
<li><strong>Reply:</strong> <a href="13074.php">George Bosilca: "Re: [OMPI devel] Changes to classes in OMPI"</a>
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
