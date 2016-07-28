<?
$subject_val = "[OMPI devel] the sensors do not compile";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  8 14:43:54 2013" -->
<!-- isoreceived="20130708184354" -->
<!-- sent="Mon, 8 Jul 2013 20:43:50 +0200" -->
<!-- isosent="20130708184350" -->
<!-- name="Vasiliy" -->
<!-- email="testtest_2005_at_[hidden]" -->
<!-- subject="[OMPI devel] the sensors do not compile" -->
<!-- id="CAHYyVz6pEfHZ89R=RQRSYTU=_15wELR0VX0uWANW0twgCZWUUw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] the sensors do not compile<br>
<strong>From:</strong> Vasiliy (<em>testtest_2005_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-08 14:43:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12545.php">Vasiliy: "Re: [OMPI devel] No such file(s) or directory"</a>
<li><strong>Previous message:</strong> <a href="12543.php">Vasiliy: "Re: [OMPI devel] No such file(s) or directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12573.php">Ralph Castain: "Re: [OMPI devel] the sensors do not compile"</a>
<li><strong>Reply:</strong> <a href="12573.php">Ralph Castain: "Re: [OMPI devel] the sensors do not compile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It has been taken from the compilation log:
<br>
&lt;code&gt;
<br>
Making all in mca/sensor/ft_tester
<br>
make[2]: Entering directory
<br>
'/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/orte/mca/sensor/ft_tester'
<br>
&nbsp;&nbsp;CC       sensor_ft_tester.lo
<br>
&nbsp;&nbsp;CC       sensor_ft_tester_component.lo
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:
<br>
In function &#145;orte_sensor_ft_tester_register&#146;:
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:63:9:
<br>
error: expected identifier or &#145;(&#146; before &#145;)&#146; token
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void) mca_base_var_register (c, &quot;fail_prob&quot;, &quot;Probability of
<br>
killing a single executable&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:74:35:
<br>
warning: passing argument 1 of &#145;mca_base_var_register&#146; from
<br>
incompatible pointer type [enabled by default]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;mca_sensor_ft_tester_component.multi_fail);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
In file included from
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/base.h:35:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:14:
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/mca_base_var.h:503:19:
<br>
note: expected &#145;const char *&#146; but argument is of type &#145;struct
<br>
mca_base_component_t *&#146;
<br>
&nbsp;OPAL_DECLSPEC int mca_base_var_register (const char *project_name,
<br>
const char *framework_name,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:74:35:
<br>
warning: passing argument 4 of &#145;mca_base_var_register&#146; makes pointer
<br>
from integer without a cast [enabled by default]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;mca_sensor_ft_tester_component.multi_fail);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
In file included from
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/base.h:35:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:14:
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/mca_base_var.h:503:19:
<br>
note: expected &#145;const char *&#146; but argument is of type &#145;int&#146;
<br>
&nbsp;OPAL_DECLSPEC int mca_base_var_register (const char *project_name,
<br>
const char *framework_name,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:74:35:
<br>
error: incompatible type for argument 10 of &#145;mca_base_var_register&#146;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;mca_sensor_ft_tester_component.multi_fail);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
In file included from
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/base.h:35:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:14:
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/mca_base_var.h:503:19:
<br>
note: expected &#145;mca_base_var_info_lvl_t&#146; but argument is of type
<br>
&#145;_Bool *&#146;
<br>
&nbsp;OPAL_DECLSPEC int mca_base_var_register (const char *project_name,
<br>
const char *framework_name,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:74:35:
<br>
error: too few arguments to function &#145;mca_base_var_register&#146;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;mca_sensor_ft_tester_component.multi_fail);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
In file included from
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/base.h:35:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:14:
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/mca_base_var.h:503:19:
<br>
note: declared here
<br>
&nbsp;OPAL_DECLSPEC int mca_base_var_register (const char *project_name,
<br>
const char *framework_name,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:81:35:
<br>
warning: passing argument 1 of &#145;mca_base_var_register&#146; from
<br>
incompatible pointer type [enabled by default]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;daemon_fail_prob);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
In file included from
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/base.h:35:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:14:
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/mca_base_var.h:503:19:
<br>
note: expected &#145;const char *&#146; but argument is of type &#145;struct
<br>
mca_base_component_t *&#146;
<br>
&nbsp;OPAL_DECLSPEC int mca_base_var_register (const char *project_name,
<br>
const char *framework_name,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:81:35:
<br>
warning: passing argument 4 of &#145;mca_base_var_register&#146; makes pointer
<br>
from integer without a cast [enabled by default]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;daemon_fail_prob);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
In file included from
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/base.h:35:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:14:
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/mca_base_var.h:503:19:
<br>
note: expected &#145;const char *&#146; but argument is of type &#145;int&#146;
<br>
&nbsp;OPAL_DECLSPEC int mca_base_var_register (const char *project_name,
<br>
const char *framework_name,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:81:35:
<br>
error: incompatible type for argument 10 of &#145;mca_base_var_register&#146;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;daemon_fail_prob);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
In file included from
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/base.h:35:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:14:
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/mca_base_var.h:503:19:
<br>
note: expected &#145;mca_base_var_info_lvl_t&#146; but argument is of type &#145;char
<br>
**&#146;
<br>
&nbsp;OPAL_DECLSPEC int mca_base_var_register (const char *project_name,
<br>
const char *framework_name,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:81:35:
<br>
error: too few arguments to function &#145;mca_base_var_register&#146;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;daemon_fail_prob);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
In file included from
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/base.h:35:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:14:
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/mca_base_var.h:503:19:
<br>
note: declared here
<br>
&nbsp;OPAL_DECLSPEC int mca_base_var_register (const char *project_name,
<br>
const char *framework_name,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
Makefile:1591: recipe for target 'sensor_ft_tester_component.lo' failed
<br>
&lt;/code&gt;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12545.php">Vasiliy: "Re: [OMPI devel] No such file(s) or directory"</a>
<li><strong>Previous message:</strong> <a href="12543.php">Vasiliy: "Re: [OMPI devel] No such file(s) or directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12573.php">Ralph Castain: "Re: [OMPI devel] the sensors do not compile"</a>
<li><strong>Reply:</strong> <a href="12573.php">Ralph Castain: "Re: [OMPI devel] the sensors do not compile"</a>
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
