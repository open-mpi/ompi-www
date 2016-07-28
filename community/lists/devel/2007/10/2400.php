<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  8 10:01:45 2007" -->
<!-- isoreceived="20071008140145" -->
<!-- sent="Mon, 08 Oct 2007 10:01:47 -0400" -->
<!-- isosent="20071008140147" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Remove opal message buffer" -->
<!-- id="470A384B.1020305_at_cs.indiana.edu" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-08 10:01:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2401.php">Tim Prins: "[OMPI devel] Non-blocking modex"</a>
<li><strong>Previous message:</strong> <a href="2399.php">Aurelien Bouteiller: "[OMPI devel] Indirect calls to wait* and test*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2413.php">George Bosilca: "Re: [OMPI devel] RFC: Remove opal message buffer"</a>
<li><strong>Reply:</strong> <a href="2413.php">George Bosilca: "Re: [OMPI devel] RFC: Remove opal message buffer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Remove the opal message buffer code
<br>
<p>WHY: It is not used
<br>
<p>WHERE: Remove references from opal/mca/base/Makefile.am and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal/mca/base/base.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;svn rm opal/mca/base/mca_base_msgbuf*
<br>
<p>WHEN: After timeout
<br>
<p>TIMEOUT: COB, Wednesday October 10, 2007
<br>
<p><pre>
----
I ran into this code accidentally while looking at other things. It 
looks like it was originally designed to be our data packing/unpacking 
system, but we now use the dss for that.
A couple grep's through the code does not find anyone who actually uses 
this functionality. So, to reduce future confusion and excess code, I 
would like to remove it.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2401.php">Tim Prins: "[OMPI devel] Non-blocking modex"</a>
<li><strong>Previous message:</strong> <a href="2399.php">Aurelien Bouteiller: "[OMPI devel] Indirect calls to wait* and test*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2413.php">George Bosilca: "Re: [OMPI devel] RFC: Remove opal message buffer"</a>
<li><strong>Reply:</strong> <a href="2413.php">George Bosilca: "Re: [OMPI devel] RFC: Remove opal message buffer"</a>
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
