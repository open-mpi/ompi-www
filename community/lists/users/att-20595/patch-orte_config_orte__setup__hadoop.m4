$NetBSD$

"==" is not portable, use "="

--- orte/config/orte_setup_hadoop.m4.orig	2012-10-31 02:08:44.000000000 +0000
+++ orte/config/orte_setup_hadoop.m4
@@ -30,7 +30,7 @@ AC_DEFUN([ORTE_SETUP_HADOOP],[
     ORTE_HAVE_HADOOP_SERIES_2=0
 
     # Only build the Hadoop support if requested
-    if test "$enable_hadoop" == "yes"; then
+    if test "$enable_hadoop" = "yes"; then
         AC_MSG_RESULT([yes])
         orte_enable_hadoop_support=0
         # if this is Hadoop 2.x, we will find a share/hadoop/common
