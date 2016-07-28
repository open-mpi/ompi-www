<?
$subject_val = "[OMPI devel] 1.5rc5: attribute((noreturn)) and pointers to functions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 25 17:23:26 2010" -->
<!-- isoreceived="20100825212326" -->
<!-- sent="Wed, 25 Aug 2010 14:23:01 -0700" -->
<!-- isosent="20100825212301" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.5rc5: attribute((noreturn)) and pointers to functions" -->
<!-- id="4C7589B5.5060308_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] 1.5rc5: attribute((noreturn)) and pointers to functions<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-25 17:23:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8362.php">Paul H. Hargrove: "[OMPI devel] nit-pick: typo in README (1.4.3rc1 and 1.5rc5)"</a>
<li><strong>Previous message:</strong> <a href="8360.php">Paul H. Hargrove: "[OMPI devel] Some positive test results (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8385.php">Rainer Keller: "Re: [OMPI devel] 1.5rc5: attribute((noreturn)) and pointers to functions"</a>
<li><strong>Reply:</strong> <a href="8385.php">Rainer Keller: "Re: [OMPI devel] 1.5rc5: attribute((noreturn)) and pointers to functions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Building 1.5rc5 with xlc on linux/ppc I see many instances of the 
<br>
following warnings
<br>
<p>&quot;../../../../orte/mca/ess/ess.h&quot;, line 61.16: 1506-959 (W) The attribute 
<br>
&quot;noreturn&quot; is not a valid type attribute and is ignored.
<br>
&quot;../../../../orte/mca/errmgr/errmgr.h&quot;, line 134.16: 1506-959 (W) The 
<br>
attribute &quot;noreturn&quot; is not a valid type attribute and is ignored.
<br>
<p>This is nearly the same as the Sun C 5.10 warning I reported in 
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2010/08/8323.php">http://www.open-mpi.org/community/lists/devel/2010/08/8323.php</a>
<br>
<p>&quot;../../../../openmpi-1.5rc5/orte/mca/ess/ess.h&quot;, line 61: warning: 
<br>
attribute &quot;noreturn&quot; may not be applied to variable, ignored
<br>
&quot;../../../../openmpi-1.5rc5/orte/mca/errmgr/errmgr.h&quot;, line 138: 
<br>
warning: attribute &quot;noreturn&quot; may not be applied to variable, ignored
<br>
<p>This indicates a common cause and suggests a common solution:
<br>
<p>In both cases the configure probe for compiler support for the 
<br>
&quot;noreturn&quot; attribute has passed.  However, in both cases the compiler is 
<br>
not happy applying this attribute to a pointer-to-function, (though gcc 
<br>
is apparently fine with this).  I believe that the solution to this is 
<br>
simply to add a &quot;noreturn_funcptr&quot; probe to 
<br>
opal/config/opal_check_attributes.m4, analogous to the format_funcptr 
<br>
probe and then define and use a __opal_attribute_noreturn_funcptr__ as 
<br>
appropriate.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8362.php">Paul H. Hargrove: "[OMPI devel] nit-pick: typo in README (1.4.3rc1 and 1.5rc5)"</a>
<li><strong>Previous message:</strong> <a href="8360.php">Paul H. Hargrove: "[OMPI devel] Some positive test results (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8385.php">Rainer Keller: "Re: [OMPI devel] 1.5rc5: attribute((noreturn)) and pointers to functions"</a>
<li><strong>Reply:</strong> <a href="8385.php">Rainer Keller: "Re: [OMPI devel] 1.5rc5: attribute((noreturn)) and pointers to functions"</a>
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
