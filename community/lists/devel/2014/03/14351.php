<?
$subject_val = "Re: [OMPI devel] usage of mca variables in orte-restart";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 15 14:20:55 2014" -->
<!-- isoreceived="20140315182055" -->
<!-- sent="Sat, 15 Mar 2014 19:20:54 +0100" -->
<!-- isosent="20140315182054" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] usage of mca variables in orte-restart" -->
<!-- id="20140315182054.GB12337_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AE45F2F55FE69B4F99BB3455E821D7153A8817FC_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] usage of mca variables in orte-restart<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-15 14:20:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14352.php">Hjelm, Nathan T: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
<li><strong>Previous message:</strong> <a href="14350.php">Ralph Castain: "[OMPI devel] 1.7.5 end-of-week status report"</a>
<li><strong>In reply to:</strong> <a href="14349.php">Hjelm, Nathan T: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14354.php">Adrian Reber: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, that was the information I needed.
<br>
<p>On Fri, Mar 14, 2014 at 10:18:06PM +0000, Hjelm, Nathan T wrote:
<br>
<span class="quotelev1">&gt; The preferred way is to use mca_base_var_find and then call mca_base_var_[set|get]_value. For performance sake we only look at the environment when the variable is registered.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please excuse the horrible Outlook top-posting. OWA sucks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: devel [devel-bounces_at_[hidden]] on behalf of Adrian Reber [adrian_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Friday, March 14, 2014 3:05 PM
</span><br>
<span class="quotelev1">&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] usage of mca variables in orte-restart
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am now trying to run orte-restart. As far as I understand it
</span><br>
<span class="quotelev1">&gt; orte-restart analyzes the checkpoint metadata and then tries to exec()
</span><br>
<span class="quotelev1">&gt; mpirun which then starts opal-restart. During the startup of
</span><br>
<span class="quotelev1">&gt; opal-restart (during initialize()) detection of the best CRS module is
</span><br>
<span class="quotelev1">&gt; disabled:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /*
</span><br>
<span class="quotelev1">&gt;      * Turn off the selection of the CRS component,
</span><br>
<span class="quotelev1">&gt;      * we need to do that later
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt;     (void) mca_base_var_env_name(&quot;crs_base_do_not_select&quot;, &amp;tmp_env_var);
</span><br>
<span class="quotelev1">&gt;     opal_setenv(tmp_env_var,
</span><br>
<span class="quotelev1">&gt;                 &quot;1&quot;, /* turn off the selection */
</span><br>
<span class="quotelev1">&gt;                 true, &amp;environ);
</span><br>
<span class="quotelev1">&gt;     free(tmp_env_var);
</span><br>
<span class="quotelev1">&gt;     tmp_env_var = NULL;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This seems to work. Later when actually selecting the correct CRS module
</span><br>
<span class="quotelev1">&gt; to restart the checkpointed process the selection is enabled again:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* Re-enable the selection of the CRS component, so we can choose the right one */
</span><br>
<span class="quotelev1">&gt;     (void) mca_base_var_env_name(&quot;crs_base_do_not_select&quot;, &amp;tmp_env_var);
</span><br>
<span class="quotelev1">&gt;     opal_setenv(tmp_env_var,
</span><br>
<span class="quotelev1">&gt;                 &quot;0&quot;, /* turn on the selection */
</span><br>
<span class="quotelev1">&gt;                 true, &amp;environ);
</span><br>
<span class="quotelev1">&gt;     free(tmp_env_var);
</span><br>
<span class="quotelev1">&gt;     tmp_env_var = NULL;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This does not seem to have an effect. The one reason why it does not work
</span><br>
<span class="quotelev1">&gt; is pretty obvious. The mca variable crs_base_do_not_select is registered during
</span><br>
<span class="quotelev1">&gt; opal_crs_base_register() and written to the bool variable opal_crs_base_do_not_select
</span><br>
<span class="quotelev1">&gt; only once (during register). Later in opal_crs_base_select() this bool
</span><br>
<span class="quotelev1">&gt; variable is queried if select should run or not and as it is only changed
</span><br>
<span class="quotelev1">&gt; during register it never changes. So from the code flow it cannot work
</span><br>
<span class="quotelev1">&gt; and is probably the result of one of the rewrites since C/R was introduced.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To fix this I am trying to read the value of the MCA variable
</span><br>
<span class="quotelev1">&gt; opal_crs_base_do_not_select during opal_crs_base_select() like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  idx = mca_base_var_find(&quot;opal&quot;, &quot;crs&quot;, &quot;base&quot;, &quot;do_not_select&quot;)
</span><br>
<span class="quotelev1">&gt;  mca_base_var_get_value(idx, &amp;value, NULL, NULL);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This also seems to work because it is different if I change the first
</span><br>
<span class="quotelev1">&gt; opal_setenv() during initialize(). The problem I am seeing is that the
</span><br>
<span class="quotelev1">&gt; second opal_setenv() (back to 0) cannot be detected using mca_base_var_get_value().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So my question is: what is the preferred way to read and write MCA
</span><br>
<span class="quotelev1">&gt; variables to access them in the different modules? Is the existing
</span><br>
<span class="quotelev1">&gt; code still correct? There is also mca_base_var_set_value() should I rather
</span><br>
<span class="quotelev1">&gt; use this to set 'opal_crs_base_do_not_select'. I was, however, not able
</span><br>
<span class="quotelev1">&gt; to use mca_base_var_set_value() without a segfault. There are not much
</span><br>
<span class="quotelev1">&gt; uses of mca_base_var_set_value() in the existing code and none uses
</span><br>
<span class="quotelev1">&gt; a bool variable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also discovered I can just access to global C variable 'opal_crs_base_do_not_select'
</span><br>
<span class="quotelev1">&gt; from opal-restart.c as well as from opal_crs_base_select(). This also works.
</span><br>
<span class="quotelev1">&gt; This would solve my problem setting and reading MCA variables.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 Adrian
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14352.php">Hjelm, Nathan T: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
<li><strong>Previous message:</strong> <a href="14350.php">Ralph Castain: "[OMPI devel] 1.7.5 end-of-week status report"</a>
<li><strong>In reply to:</strong> <a href="14349.php">Hjelm, Nathan T: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14354.php">Adrian Reber: "Re: [OMPI devel] usage of mca variables in orte-restart"</a>
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
