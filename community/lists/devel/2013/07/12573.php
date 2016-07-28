<?
$subject_val = "Re: [OMPI devel] the sensors do not compile";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  9 10:50:11 2013" -->
<!-- isoreceived="20130709145011" -->
<!-- sent="Tue, 9 Jul 2013 07:50:04 -0700" -->
<!-- isosent="20130709145004" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] the sensors do not compile" -->
<!-- id="ED4893B6-01B0-49F5-BABA-F3440996F2F5_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAHYyVz6pEfHZ89R=RQRSYTU=_15wELR0VX0uWANW0twgCZWUUw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] the sensors do not compile<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-09 10:50:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12574.php">Eugene Loh: "Re: [OMPI devel] Annual OMPI membership review: SVN accounts"</a>
<li><strong>Previous message:</strong> <a href="12572.php">Rolf vandeVaart: "Re: [OMPI devel] Annual OMPI membership review: SVN accounts"</a>
<li><strong>In reply to:</strong> <a href="12544.php">Vasiliy: "[OMPI devel] the sensors do not compile"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
fixed now
<br>
<p>On Jul 8, 2013, at 11:43 AM, Vasiliy &lt;testtest_2005_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It has been taken from the compilation log:
</span><br>
<span class="quotelev1">&gt; &lt;code&gt;
</span><br>
<span class="quotelev1">&gt; Making all in mca/sensor/ft_tester
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/orte/mca/sensor/ft_tester'
</span><br>
<span class="quotelev1">&gt;  CC       sensor_ft_tester.lo
</span><br>
<span class="quotelev1">&gt;  CC       sensor_ft_tester_component.lo
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:
</span><br>
<span class="quotelev1">&gt; In function &#145;orte_sensor_ft_tester_register&#146;:
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:63:9:
</span><br>
<span class="quotelev1">&gt; error: expected identifier or &#145;(&#146; before &#145;)&#146; token
</span><br>
<span class="quotelev1">&gt;     void) mca_base_var_register (c, &quot;fail_prob&quot;, &quot;Probability of
</span><br>
<span class="quotelev1">&gt; killing a single executable&quot;,
</span><br>
<span class="quotelev1">&gt;         ^
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:74:35:
</span><br>
<span class="quotelev1">&gt; warning: passing argument 1 of &#145;mca_base_var_register&#146; from
</span><br>
<span class="quotelev1">&gt; incompatible pointer type [enabled by default]
</span><br>
<span class="quotelev1">&gt;                                   &amp;mca_sensor_ft_tester_component.multi_fail);
</span><br>
<span class="quotelev1">&gt;                                   ^
</span><br>
<span class="quotelev1">&gt; In file included from
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/base.h:35:0,
</span><br>
<span class="quotelev1">&gt;                 from
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:14:
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/mca_base_var.h:503:19:
</span><br>
<span class="quotelev1">&gt; note: expected &#145;const char *&#146; but argument is of type &#145;struct
</span><br>
<span class="quotelev1">&gt; mca_base_component_t *&#146;
</span><br>
<span class="quotelev1">&gt; OPAL_DECLSPEC int mca_base_var_register (const char *project_name,
</span><br>
<span class="quotelev1">&gt; const char *framework_name,
</span><br>
<span class="quotelev1">&gt;                   ^
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:74:35:
</span><br>
<span class="quotelev1">&gt; warning: passing argument 4 of &#145;mca_base_var_register&#146; makes pointer
</span><br>
<span class="quotelev1">&gt; from integer without a cast [enabled by default]
</span><br>
<span class="quotelev1">&gt;                                   &amp;mca_sensor_ft_tester_component.multi_fail);
</span><br>
<span class="quotelev1">&gt;                                   ^
</span><br>
<span class="quotelev1">&gt; In file included from
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/base.h:35:0,
</span><br>
<span class="quotelev1">&gt;                 from
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:14:
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/mca_base_var.h:503:19:
</span><br>
<span class="quotelev1">&gt; note: expected &#145;const char *&#146; but argument is of type &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; OPAL_DECLSPEC int mca_base_var_register (const char *project_name,
</span><br>
<span class="quotelev1">&gt; const char *framework_name,
</span><br>
<span class="quotelev1">&gt;                   ^
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:74:35:
</span><br>
<span class="quotelev1">&gt; error: incompatible type for argument 10 of &#145;mca_base_var_register&#146;
</span><br>
<span class="quotelev1">&gt;                                   &amp;mca_sensor_ft_tester_component.multi_fail);
</span><br>
<span class="quotelev1">&gt;                                   ^
</span><br>
<span class="quotelev1">&gt; In file included from
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/base.h:35:0,
</span><br>
<span class="quotelev1">&gt;                 from
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:14:
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/mca_base_var.h:503:19:
</span><br>
<span class="quotelev1">&gt; note: expected &#145;mca_base_var_info_lvl_t&#146; but argument is of type
</span><br>
<span class="quotelev1">&gt; &#145;_Bool *&#146;
</span><br>
<span class="quotelev1">&gt; OPAL_DECLSPEC int mca_base_var_register (const char *project_name,
</span><br>
<span class="quotelev1">&gt; const char *framework_name,
</span><br>
<span class="quotelev1">&gt;                   ^
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:74:35:
</span><br>
<span class="quotelev1">&gt; error: too few arguments to function &#145;mca_base_var_register&#146;
</span><br>
<span class="quotelev1">&gt;                                   &amp;mca_sensor_ft_tester_component.multi_fail);
</span><br>
<span class="quotelev1">&gt;                                   ^
</span><br>
<span class="quotelev1">&gt; In file included from
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/base.h:35:0,
</span><br>
<span class="quotelev1">&gt;                 from
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:14:
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/mca_base_var.h:503:19:
</span><br>
<span class="quotelev1">&gt; note: declared here
</span><br>
<span class="quotelev1">&gt; OPAL_DECLSPEC int mca_base_var_register (const char *project_name,
</span><br>
<span class="quotelev1">&gt; const char *framework_name,
</span><br>
<span class="quotelev1">&gt;                   ^
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:81:35:
</span><br>
<span class="quotelev1">&gt; warning: passing argument 1 of &#145;mca_base_var_register&#146; from
</span><br>
<span class="quotelev1">&gt; incompatible pointer type [enabled by default]
</span><br>
<span class="quotelev1">&gt;                                   &amp;daemon_fail_prob);
</span><br>
<span class="quotelev1">&gt;                                   ^
</span><br>
<span class="quotelev1">&gt; In file included from
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/base.h:35:0,
</span><br>
<span class="quotelev1">&gt;                 from
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:14:
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/mca_base_var.h:503:19:
</span><br>
<span class="quotelev1">&gt; note: expected &#145;const char *&#146; but argument is of type &#145;struct
</span><br>
<span class="quotelev1">&gt; mca_base_component_t *&#146;
</span><br>
<span class="quotelev1">&gt; OPAL_DECLSPEC int mca_base_var_register (const char *project_name,
</span><br>
<span class="quotelev1">&gt; const char *framework_name,
</span><br>
<span class="quotelev1">&gt;                   ^
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:81:35:
</span><br>
<span class="quotelev1">&gt; warning: passing argument 4 of &#145;mca_base_var_register&#146; makes pointer
</span><br>
<span class="quotelev1">&gt; from integer without a cast [enabled by default]
</span><br>
<span class="quotelev1">&gt;                                   &amp;daemon_fail_prob);
</span><br>
<span class="quotelev1">&gt;                                   ^
</span><br>
<span class="quotelev1">&gt; In file included from
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/base.h:35:0,
</span><br>
<span class="quotelev1">&gt;                 from
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:14:
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/mca_base_var.h:503:19:
</span><br>
<span class="quotelev1">&gt; note: expected &#145;const char *&#146; but argument is of type &#145;int&#146;
</span><br>
<span class="quotelev1">&gt; OPAL_DECLSPEC int mca_base_var_register (const char *project_name,
</span><br>
<span class="quotelev1">&gt; const char *framework_name,
</span><br>
<span class="quotelev1">&gt;                   ^
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:81:35:
</span><br>
<span class="quotelev1">&gt; error: incompatible type for argument 10 of &#145;mca_base_var_register&#146;
</span><br>
<span class="quotelev1">&gt;                                   &amp;daemon_fail_prob);
</span><br>
<span class="quotelev1">&gt;                                   ^
</span><br>
<span class="quotelev1">&gt; In file included from
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/base.h:35:0,
</span><br>
<span class="quotelev1">&gt;                 from
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:14:
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/mca_base_var.h:503:19:
</span><br>
<span class="quotelev1">&gt; note: expected &#145;mca_base_var_info_lvl_t&#146; but argument is of type &#145;char
</span><br>
<span class="quotelev1">&gt; **&#146;
</span><br>
<span class="quotelev1">&gt; OPAL_DECLSPEC int mca_base_var_register (const char *project_name,
</span><br>
<span class="quotelev1">&gt; const char *framework_name,
</span><br>
<span class="quotelev1">&gt;                   ^
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:81:35:
</span><br>
<span class="quotelev1">&gt; error: too few arguments to function &#145;mca_base_var_register&#146;
</span><br>
<span class="quotelev1">&gt;                                   &amp;daemon_fail_prob);
</span><br>
<span class="quotelev1">&gt;                                   ^
</span><br>
<span class="quotelev1">&gt; In file included from
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/base.h:35:0,
</span><br>
<span class="quotelev1">&gt;                 from
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/ft_tester/sensor_ft_tester_component.c:14:
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/mca_base_var.h:503:19:
</span><br>
<span class="quotelev1">&gt; note: declared here
</span><br>
<span class="quotelev1">&gt; OPAL_DECLSPEC int mca_base_var_register (const char *project_name,
</span><br>
<span class="quotelev1">&gt; const char *framework_name,
</span><br>
<span class="quotelev1">&gt;                   ^
</span><br>
<span class="quotelev1">&gt; Makefile:1591: recipe for target 'sensor_ft_tester_component.lo' failed
</span><br>
<span class="quotelev1">&gt; &lt;/code&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12574.php">Eugene Loh: "Re: [OMPI devel] Annual OMPI membership review: SVN accounts"</a>
<li><strong>Previous message:</strong> <a href="12572.php">Rolf vandeVaart: "Re: [OMPI devel] Annual OMPI membership review: SVN accounts"</a>
<li><strong>In reply to:</strong> <a href="12544.php">Vasiliy: "[OMPI devel] the sensors do not compile"</a>
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
