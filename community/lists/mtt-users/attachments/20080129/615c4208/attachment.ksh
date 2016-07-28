Index: client/whatami/whatami
===================================================================
--- client/whatami/whatami	(revision 1142)
+++ client/whatami/whatami	(working copy)
@@ -189,6 +189,10 @@
                         #distro=${distro_brand}${distro_version}_${sub_distro}
                         distro=${distro_brand}${distro_version}
 
+                elif [ -n "`egrep 'Red Hat Enterprise Linux Server release [0-9]*' /etc/issue`" ]; then
+                        distro_brand=rhel_server
+                        distro_version=`grep 'Red Hat' /etc/issue | sed -e 's/Red Hat Enterprise Linux Server release \([0-9]*\).*/\1/' `
+                        distro=${distro_brand}${distro_version} 
                 elif [ -n "`egrep 'Cray Rocks Linux release 1.3' /etc/issue`" ]; then
                         distro=rh73
                 
