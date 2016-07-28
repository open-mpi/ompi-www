<?
$subject_val = "[OMPI devel] RFC: PML/CM priority";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 14:32:50 2009" -->
<!-- isoreceived="20090811183250" -->
<!-- sent="Tue, 11 Aug 2009 14:33:24 -0400" -->
<!-- isosent="20090811183324" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: PML/CM priority" -->
<!-- id="200908111433.25098.keller_at_ornl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: PML/CM priority<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 14:33:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6619.php">Brian W. Barrett: "Re: [OMPI devel] RFC: PML/CM priority"</a>
<li><strong>Previous message:</strong> <a href="6617.php">Mike Dubman: "Re: [OMPI devel] Error: system limit exceeded on number of pipes that can be open"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6619.php">Brian W. Barrett: "Re: [OMPI devel] RFC: PML/CM priority"</a>
<li><strong>Reply:</strong> <a href="6619.php">Brian W. Barrett: "Re: [OMPI devel] RFC: PML/CM priority"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
as raised on todays telcon:
<br>
<p>WHAT: Obeying or lowering default priority of PML/CM.
<br>
<p>WHY: Not obvious why MTLs are not used for Portals/MX
<br>
<p>WHEN: On trunk, Tuesday afternoon 18 Aug 2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On 1.3 by CMR on 25 Aug 2009
<br>
<p>TIMEOUT: Tuesday telconf, 18 Aug 2009
<br>
<p>---------------------------------------------------------------
<br>
<p>When compiling on systems with MX or Portals, we offer MTLs and BTLs.
<br>
If MTLs are used, the PML/CM is loaded as well as the PML/OB1.
<br>
<p><p>The current default priority for them is:
<br>
@jaguar13:~&gt; ompi_info --param pml all | grep priority
<br>
MCA pml: parameter &quot;pml_cm_priority&quot; (current value: &lt;30&gt;, ...)
<br>
MCA pml: parameter &quot;pml_ob1_priority&quot; (current value: &lt;20&gt;, ...)
<br>
<p><p>Now in pml_cm_component.c:113 the priority however is changed:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else if(strcmp(ompi_mtl_base_selected_component-&gt; 
<br>
mtl_version.mca_component_name, &quot;psm&quot;) != 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* if mtl is not PSM then back down priority, and require user to*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*  specify pml cm directly if that is what they want priority */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*  of 1 is sufficient in that case as it is the only pml that */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*  will be considered */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*priority = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
which is kind of &quot;unexpected&quot; to the user ;-)
<br>
This moved into trunk in r13576. I had a off-list mail with Galen on the 
<br>
reasoning of this part of the patch, now I would like to address the 
<br>
community.
<br>
<p><p>Question 1: Is favoring OB1 over CM required for any MTL (MX, Portals, PSM)?
<br>
<p>Question 2: If it is, I would like to reflect this in the default priorities, 
<br>
aka have CM have a priority lower than OB1 and in the case of PSM raising it.
<br>
<p>I'd like to raise any issues until next week's telcon.
<br>
<p><p><p>Actions Taken:
<br>
<p>If no objections are raised for Question 1, I would like to remove the 
<br>
lowering of the CM's priority and have it always favoured over OB1.
<br>
<p>If there are issues with that, I would like to patch such that:
<br>
<p>svn diff pml_cm_component.c
<br>
Index: pml_cm_component.c
<br>
===================================================================
<br>
--- pml_cm_component.c  (revision 21786)
<br>
+++ pml_cm_component.c  (working copy)
<br>
@@ -106,7 +106,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;CM PML selection priority&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;false,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;false,
<br>
-                           30,
<br>
+                           10,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;ompi_pml_cm.default_priority);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
@@ -139,12 +139,12 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OMPI_SUCCESS != ret) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*priority = -1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
-    } else if(strcmp(ompi_mtl_base_selected_component-
<br>
<span class="quotelev1">&gt;mtl_version.mca_component_name, &quot;psm&quot;) != 0) {
</span><br>
+    } else if(strcmp(ompi_mtl_base_selected_component-
<br>
<span class="quotelev1">&gt;mtl_version.mca_component_name, &quot;psm&quot;) == 0) {
</span><br>
-         /* if mtl is not PSM then back down priority, and require the user 
<br>
to */
<br>
-         /*  specify pml cm directly if that is what they want priority */
<br>
-         /*  of 1 is sufficient in that case as it is the only pml that */
<br>
-         /*  will be considered */
<br>
-        *priority = 1;
<br>
+        *priority = 30;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
/* modulo updating the comment */
<br>
<p><p>Best regards,
<br>
Rainer
<br>
<pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: +1 (865) 241-6293
Oak Ridge National Lab          Fax: +1 (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6619.php">Brian W. Barrett: "Re: [OMPI devel] RFC: PML/CM priority"</a>
<li><strong>Previous message:</strong> <a href="6617.php">Mike Dubman: "Re: [OMPI devel] Error: system limit exceeded on number of pipes that can be open"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6619.php">Brian W. Barrett: "Re: [OMPI devel] RFC: PML/CM priority"</a>
<li><strong>Reply:</strong> <a href="6619.php">Brian W. Barrett: "Re: [OMPI devel] RFC: PML/CM priority"</a>
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
