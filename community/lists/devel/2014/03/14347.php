<?
$subject_val = "[OMPI devel] usage of mca variables in orte-restart";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 14 17:05:22 2014" -->
<!-- isoreceived="20140314210522" -->
<!-- sent="Fri, 14 Mar 2014 22:05:21 +0100" -->
<!-- isosent="20140314210521" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] usage of mca variables in orte-restart" -->
<!-- id="20140314210521.GA12337_at_lisas.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] usage of mca variables in orte-restart<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-14 17:05:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14348.php">Ralph Castain: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<li><strong>Previous message:</strong> <a href="14346.php">Bibrak Qamar: "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14348.php">Ralph Castain: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<li><strong>Reply:</strong> <a href="14348.php">Ralph Castain: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<li><strong>Reply:</strong> <a href="14349.php">Hjelm, Nathan T: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am now trying to run orte-restart. As far as I understand it
<br>
orte-restart analyzes the checkpoint metadata and then tries to exec()
<br>
mpirun which then starts opal-restart. During the startup of
<br>
opal-restart (during initialize()) detection of the best CRS module is
<br>
disabled:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Turn off the selection of the CRS component,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* we need to do that later
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(void) mca_base_var_env_name(&quot;crs_base_do_not_select&quot;, &amp;tmp_env_var);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_setenv(tmp_env_var,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;1&quot;, /* turn off the selection */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;true, &amp;environ);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;free(tmp_env_var);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tmp_env_var = NULL;
<br>
<p>This seems to work. Later when actually selecting the correct CRS module
<br>
to restart the checkpointed process the selection is enabled again:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* Re-enable the selection of the CRS component, so we can choose the right one */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(void) mca_base_var_env_name(&quot;crs_base_do_not_select&quot;, &amp;tmp_env_var);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_setenv(tmp_env_var,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;0&quot;, /* turn on the selection */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;true, &amp;environ);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;free(tmp_env_var);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tmp_env_var = NULL;
<br>
<p>This does not seem to have an effect. The one reason why it does not work
<br>
is pretty obvious. The mca variable crs_base_do_not_select is registered during
<br>
opal_crs_base_register() and written to the bool variable opal_crs_base_do_not_select
<br>
only once (during register). Later in opal_crs_base_select() this bool
<br>
variable is queried if select should run or not and as it is only changed
<br>
during register it never changes. So from the code flow it cannot work
<br>
and is probably the result of one of the rewrites since C/R was introduced.
<br>
<p>To fix this I am trying to read the value of the MCA variable
<br>
opal_crs_base_do_not_select during opal_crs_base_select() like this:
<br>
<p>&nbsp;idx = mca_base_var_find(&quot;opal&quot;, &quot;crs&quot;, &quot;base&quot;, &quot;do_not_select&quot;)
<br>
&nbsp;mca_base_var_get_value(idx, &amp;value, NULL, NULL);
<br>
<p>This also seems to work because it is different if I change the first
<br>
opal_setenv() during initialize(). The problem I am seeing is that the
<br>
second opal_setenv() (back to 0) cannot be detected using mca_base_var_get_value().
<br>
<p>So my question is: what is the preferred way to read and write MCA
<br>
variables to access them in the different modules? Is the existing
<br>
code still correct? There is also mca_base_var_set_value() should I rather
<br>
use this to set 'opal_crs_base_do_not_select'. I was, however, not able
<br>
to use mca_base_var_set_value() without a segfault. There are not much
<br>
uses of mca_base_var_set_value() in the existing code and none uses
<br>
a bool variable.
<br>
<p>I also discovered I can just access to global C variable 'opal_crs_base_do_not_select'
<br>
from opal-restart.c as well as from opal_crs_base_select(). This also works.
<br>
This would solve my problem setting and reading MCA variables.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14348.php">Ralph Castain: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<li><strong>Previous message:</strong> <a href="14346.php">Bibrak Qamar: "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14348.php">Ralph Castain: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<li><strong>Reply:</strong> <a href="14348.php">Ralph Castain: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<li><strong>Reply:</strong> <a href="14349.php">Hjelm, Nathan T: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
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
