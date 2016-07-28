<?
$subject_val = "[OMPI devel]  Quick fix for MPI_Publish_name";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  4 11:36:49 2011" -->
<!-- isoreceived="20110304163649" -->
<!-- sent="Fri, 04 Mar 2011 17:36:41 +0100" -->
<!-- isosent="20110304163641" -->
<!-- name="Suraj Prabhakaran" -->
<!-- email="suraj.prabhakaran_at_[hidden]" -->
<!-- subject="[OMPI devel]  Quick fix for MPI_Publish_name" -->
<!-- id="4D711519.5090704_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D7041EE.6060906_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel]  Quick fix for MPI_Publish_name<br>
<strong>From:</strong> Suraj Prabhakaran (<em>suraj.prabhakaran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-04 11:36:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9025.php">Ralph Castain: "Re: [OMPI devel] Quick fix for MPI_Publish_name"</a>
<li><strong>Previous message:</strong> <a href="9023.php">Tony Lam: "Re: [OMPI devel] Help needed to run OMPI jobs under internal resource manager"</a>
<li><strong>In reply to:</strong> <a href="9023.php">Tony Lam: "Re: [OMPI devel] Help needed to run OMPI jobs under internal resource manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9025.php">Ralph Castain: "Re: [OMPI devel] Quick fix for MPI_Publish_name"</a>
<li><strong>Reply:</strong> <a href="9025.php">Ralph Castain: "Re: [OMPI devel] Quick fix for MPI_Publish_name"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Referring to the following bug
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/2681">https://svn.open-mpi.org/trac/ompi/ticket/2681</a>
<br>
<p>that MPI_Publish_name was hanging, in fact, any call that contacted the 
<br>
ompi-server was hanging. By looking at all communication between the 
<br>
application and ompi-server, it seemed that the ompi-server was getting 
<br>
the wrong/bad route to reach the application in order to send back the 
<br>
answer of publish/lookup/unpublish.
<br>
<p>In orte/mca/routed/binomial/routed_binomial.c, I found the following loc 
<br>
in the get_route() function,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_PROC_IS_TOOL) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = target;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto found;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>which, I believe, returned the target directly as the route to any tool. 
<br>
Comparing with 1.4.3, I could not understand the change that brought in 
<br>
the above case. So I simply commented it out and ompi-server worked 
<br>
perfect with all the calls doing their job.
<br>
What I do not know if this affects any other tool.
<br>
Hope this is useful.
<br>
<p>Best,
<br>
Suraj Prabhakaran
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9024/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9025.php">Ralph Castain: "Re: [OMPI devel] Quick fix for MPI_Publish_name"</a>
<li><strong>Previous message:</strong> <a href="9023.php">Tony Lam: "Re: [OMPI devel] Help needed to run OMPI jobs under internal resource manager"</a>
<li><strong>In reply to:</strong> <a href="9023.php">Tony Lam: "Re: [OMPI devel] Help needed to run OMPI jobs under internal resource manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9025.php">Ralph Castain: "Re: [OMPI devel] Quick fix for MPI_Publish_name"</a>
<li><strong>Reply:</strong> <a href="9025.php">Ralph Castain: "Re: [OMPI devel] Quick fix for MPI_Publish_name"</a>
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
