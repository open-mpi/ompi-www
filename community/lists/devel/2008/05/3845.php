<?
$subject_val = "[OMPI devel] [RFC] mca_base_open() NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 14:09:04 2008" -->
<!-- isoreceived="20080506180904" -->
<!-- sent="Tue, 6 May 2008 14:09:00 -0400" -->
<!-- isosent="20080506180900" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[OMPI devel] [RFC] mca_base_open() NULL" -->
<!-- id="7F46204F-EAD1-4F3F-B933-AA78028F865B_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] [RFC] mca_base_open() NULL<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-06 14:09:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3846.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>Previous message:</strong> <a href="3844.php">Jeff Squyres: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3857.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>Reply:</strong> <a href="3857.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What:  Add a MCA-NULL option to open no components in mca_base_open()
<br>
Why:   Sometimes we do not want to open or select any components of a  
<br>
framework.
<br>
Where: patch attached for current trunk.
<br>
When:  Needs further discussion.
<br>
Timeout: Unknown. [May 13, 2008 (After teleconf)?]
<br>
<p><p>Short Version:
<br>
--------------
<br>
This RFC is intended to continue discussion on the thread started here:
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2008/05/3793.php">http://www.open-mpi.org/community/lists/devel/2008/05/3793.php</a>
<br>
<p>Discussion should occur on list, but maybe try to come to some  
<br>
settlement on this RFC in the next week or two.
<br>
<p>Longer Version:
<br>
---------------
<br>
Currently there is no way to express to the MCA system that absolutely  
<br>
no components of a framework are needed and therefore nothing should  
<br>
be opened. The addition of a sentinel value is needed to explicitly  
<br>
express this intention. It was suggested that if a 'MCA-NULL' value is  
<br>
passed as an argument for a framework then this should be taken to  
<br>
indicate such an intention.
<br>
<p><p>

<br><p>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3845/mca-null.diff">mca-null.diff</a>
</ul>
<!-- attachment="mca-null.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3846.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>Previous message:</strong> <a href="3844.php">Jeff Squyres: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3857.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>Reply:</strong> <a href="3857.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_open() NULL"</a>
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
