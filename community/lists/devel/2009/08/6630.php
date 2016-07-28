<?
$subject_val = "[OMPI devel] XML request";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 14 11:25:49 2009" -->
<!-- isoreceived="20090814152549" -->
<!-- sent="Fri, 14 Aug 2009 11:25:42 -0400" -->
<!-- isosent="20090814152542" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="[OMPI devel] XML request" -->
<!-- id="0090A097-56E1-4AAB-935D-49385AAF8E06_at_computer.org" -->
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
<strong>Subject:</strong> [OMPI devel] XML request<br>
<strong>From:</strong> Greg Watson (<em>g.watson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-14 11:25:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6631.php">Rolf Vandevaart: "[OMPI devel] Too many fds per a.out in 1.3"</a>
<li><strong>Previous message:</strong> <a href="6629.php">Jeff Squyres: "Re: [OMPI devel] reorder parameter in MPI_Cart_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6644.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="6644.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Maybe reply:</strong> <a href="6731.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Maybe reply:</strong> <a href="6732.php">Chris Samuel: "Re: [OMPI devel] XML request"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/09/6744.php">Neil Ludban: "Re: [OMPI devel] XML request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Would it be possible to get mpirun to issue start and end tags if the - 
<br>
xml option is used? Currently there is no way to determine when the  
<br>
output starts and finishes, which makes parsing the XML tricky,  
<br>
particularly if something else generates output (e.g. the shell).  
<br>
Something like this would be ideal:
<br>
<p>&lt;mpirun&gt;
<br>
&lt;map&gt;
<br>
...
<br>
&lt;/map&gt;
<br>
&lt;stdout&gt;...&lt;/stdout&gt;
<br>
&lt;stderr&gt;...&lt;/stderr&gt;
<br>
&lt;/mpirun&gt;
<br>
<p>If we could get it in 1.3.4 even better. :-)
<br>
<p>Thanks,
<br>
Greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6631.php">Rolf Vandevaart: "[OMPI devel] Too many fds per a.out in 1.3"</a>
<li><strong>Previous message:</strong> <a href="6629.php">Jeff Squyres: "Re: [OMPI devel] reorder parameter in MPI_Cart_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6644.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="6644.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Maybe reply:</strong> <a href="6731.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Maybe reply:</strong> <a href="6732.php">Chris Samuel: "Re: [OMPI devel] XML request"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/09/6744.php">Neil Ludban: "Re: [OMPI devel] XML request"</a>
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
