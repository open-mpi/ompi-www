Index: orte/mca/plm/base/plm_base_launch_support.c
===================================================================
--- orte/mca/plm/base/plm_base_launch_support.c	(revision 18092)
+++ orte/mca/plm/base/plm_base_launch_support.c	(working copy)
@@ -151,7 +151,7 @@
                              ORTE_JOBID_PRINT(job), ORTE_ERROR_NAME(rc)));
         return rc;
     }
-    
+   return ORTE_ERROR; 
     /* complete wiring up the iof */
     OPAL_OUTPUT_VERBOSE((5, orte_plm_globals.output,
                          "%s plm:base:launch wiring up iof",
