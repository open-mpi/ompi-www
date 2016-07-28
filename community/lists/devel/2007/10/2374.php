<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  2 09:44:04 2007" -->
<!-- isoreceived="20071002134404" -->
<!-- sent="Tue, 02 Oct 2007 09:43:48 -0400" -->
<!-- isosent="20071002134348" -->
<!-- name="Rolf.Vandevaart_at_[hidden]" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] --mca btl_base_debug" -->
<!-- id="47024B14.3090409_at_Sun.COM" -->
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
<strong>From:</strong> <a href="mailto:Rolf.Vandevaart_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20--mca%20btl_base_debug"><em>Rolf.Vandevaart_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-10-02 09:43:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2375.php">Brian Barrett: "Re: [OMPI devel] OpenIB component static compile failures"</a>
<li><strong>Previous message:</strong> <a href="2373.php">Jeff Squyres: "Re: [OMPI devel] OpenIB component static compile failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2386.php">Jeff Squyres: "Re: [OMPI devel] --mca btl_base_debug"</a>
<li><strong>Reply:</strong> <a href="2386.php">Jeff Squyres: "Re: [OMPI devel] --mca btl_base_debug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks:
<br>
I propose that we drop the mca parameter &quot;btl_base_debug&quot;.   It is an added
<br>
level of complexity that does not provide any benefit.  In fact, the 
<br>
debug/verbose
<br>
code in the btl_base_open.c is such that we can never turn on verbose 
<br>
messages.
<br>
<p>A quick research of the other base components in the OMPI area show that 
<br>
none
<br>
of them have a *_base_debug mca parameter.  They only have a *_base_verbose
<br>
parameter.
<br>
<p>I will plan on making this change but just thought I would check and see if
<br>
there is some historical or other reason why btl_base_debug should *not* 
<br>
be removed.
<br>
(This came up as I was trying to figure out how to turn on verbosity for
<br>
the MX problem reported on the users list. )
<br>
<p><p><p>Rolf
<br>
<p>&nbsp;burl-ct-v440-0 141 =&gt;ompi_info -all | egrep 
<br>
&quot;pml_base_verbose|btl_base_verbose|bml_base_verbose|coll_base_verbose|mpool_base_verbose&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: parameter &quot;coll_base_verbose&quot; (current value: &quot;0&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: parameter &quot;mpool_base_verbose&quot; (current value: 
<br>
&quot;0&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: parameter &quot;pml_base_verbose&quot; (current value: &quot;0&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA bml: parameter &quot;bml_base_verbose&quot; (current value: &quot;0&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_base_verbose&quot; (current value: &quot;0&quot;)
<br>
&nbsp;burl-ct-v440-0 142 =&gt;ompi_info -all | egrep 
<br>
&quot;pml_base_debug|btl_base_debug|bml_base_debug|coll_base_debug|mpool_base_debug&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_base_debug&quot; (current value: &quot;0&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If btl_base_debug is 1 standard debug is 
<br>
output, if &gt; 1 verbose debug is output
<br>
&nbsp;burl-ct-v440-0 143 =&gt;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2375.php">Brian Barrett: "Re: [OMPI devel] OpenIB component static compile failures"</a>
<li><strong>Previous message:</strong> <a href="2373.php">Jeff Squyres: "Re: [OMPI devel] OpenIB component static compile failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2386.php">Jeff Squyres: "Re: [OMPI devel] --mca btl_base_debug"</a>
<li><strong>Reply:</strong> <a href="2386.php">Jeff Squyres: "Re: [OMPI devel] --mca btl_base_debug"</a>
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
