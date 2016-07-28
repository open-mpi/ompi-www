<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul  6 17:20:11 2007" -->
<!-- isoreceived="20070706212011" -->
<!-- sent="Fri, 06 Jul 2007 17:20:56 -0400" -->
<!-- isosent="20070706212056" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="[OMPI devel] opal_output_verbose usage guidelines" -->
<!-- id="468EB238.7060501_at_Sun.COM" -->
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
<strong>From:</strong> Don Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-06 17:20:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1801.php">Tim Prins: "[OMPI devel] Ob1 segfault"</a>
<li><strong>Previous message:</strong> <a href="1799.php">Jeff Squyres: "Re: [OMPI devel] One-sided operations with Portals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1807.php">Jeff Squyres: "Re: [OMPI devel] opal_output_verbose usage guidelines"</a>
<li><strong>Reply:</strong> <a href="1807.php">Jeff Squyres: "Re: [OMPI devel] opal_output_verbose usage guidelines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hola,
<br>
<p>Are there any guidelines about the use of opal_output_verbose? 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Are there hidden meanings for a given verbose level? e.g. 0 
<br>
reserved for PML, or 50-100 for BTL and so on
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Maybe the base component output_id is ok to use in situation 
<br>
XYZ but a component specific output_id should be used in situation ABC?  
<br>
Or should never be used for component specific output?
<br>
<p>Why I ask.  I want to report a warning to the user when &quot;--enable-debug&quot; 
<br>
is not configured. I also do not want the error to show up all the time, 
<br>
only when for example --mca btl_base_debug is set to some value. I am 
<br>
thinking I will just use opal_output_verbose but wanted to see if there 
<br>
were any guidelines about its use? Or if I should be thinking about some 
<br>
other option all together.
<br>
<p>-DON
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1801.php">Tim Prins: "[OMPI devel] Ob1 segfault"</a>
<li><strong>Previous message:</strong> <a href="1799.php">Jeff Squyres: "Re: [OMPI devel] One-sided operations with Portals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1807.php">Jeff Squyres: "Re: [OMPI devel] opal_output_verbose usage guidelines"</a>
<li><strong>Reply:</strong> <a href="1807.php">Jeff Squyres: "Re: [OMPI devel] opal_output_verbose usage guidelines"</a>
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
