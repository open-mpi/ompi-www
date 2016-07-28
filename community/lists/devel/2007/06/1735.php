<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 20 11:36:35 2007" -->
<!-- isoreceived="20070620153635" -->
<!-- sent="Wed, 20 Jun 2007 09:35:59 -0600" -->
<!-- isosent="20070620153559" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="[OMPI devel] forcing a component to build static" -->
<!-- id="4DF75B93-4D8D-42E1-9B5C-73D8CD7D09EF_at_lanl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-20 11:35:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1736.php">Jeff Squyres: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<li><strong>Previous message:</strong> <a href="1734.php">Jeff Squyres: "[OMPI devel] PML/BTL MCA params review"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Following up on the telecon conversation about automatically forcing  
<br>
components to build statically (ie, part of libmpi and friends  
<br>
instead of a stand-alone dso), here's an example of how to do so:
<br>
<p><p>AC_DEFUN([MCA_backtrace_darwin_COMPILE_MODE], [
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING([for MCA component $2:$3 compile mode])
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$4=&quot;static&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_RESULT([$$4])
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test &quot;$DSO_$2&quot; = &quot;1&quot; -o &quot;$DSO_$2_$3&quot; = &quot;1&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_WARN([Forcing static build of component])])
<br>
])
<br>
<p><p>This snippet of M4 would go in the configure.m4 for the given  
<br>
component (a configure.m4 is *required* for this).  Just change the  
<br>
backtrace_darwin to the framework_component pair for the given  
<br>
component, reautogen, and life is good.  The various OPAL components  
<br>
currently in the trunk that use this trick do not have the if check  
<br>
at the bottom to warn the user that the component changed what the  
<br>
user said to do, but it probably makes sense to do so in the general  
<br>
case and I'll be updating the OPAL components in the near future.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1736.php">Jeff Squyres: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<li><strong>Previous message:</strong> <a href="1734.php">Jeff Squyres: "[OMPI devel] PML/BTL MCA params review"</a>
<!-- nextthread="start" -->
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
