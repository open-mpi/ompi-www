<?
$subject_val = "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun	Studio 12.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 19:04:46 2013" -->
<!-- isoreceived="20131220000446" -->
<!-- sent="Fri, 20 Dec 2013 00:04:44 +0000" -->
<!-- isosent="20131220000444" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun	Studio 12.3" -->
<!-- id="3657DD4E-94EF-49A9-A4AD-9DEEA0143588_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA15nVhxfsb_UG6ffqH57Cz=KspUPhPPGWha9j8sFOruWEg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun	Studio 12.3<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 19:04:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13507.php">Paul Hargrove: "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
<li><strong>Previous message:</strong> <a href="13505.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 build failure: Solaris 11 / x86_64"</a>
<li><strong>In reply to:</strong> <a href="13504.php">Paul Hargrove: "[OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13507.php">Paul Hargrove: "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
<li><strong>Reply:</strong> <a href="13507.php">Paul Hargrove: "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul --
<br>
<p>Does this patch fix it for you?
<br>
<p>Index: opal/mca/if/posix_ipv4/configure.m4
<br>
===================================================================
<br>
--- opal/mca/if/posix_ipv4/configure.m4	(revision 29997)
<br>
+++ opal/mca/if/posix_ipv4/configure.m4	(working copy)
<br>
@@ -42,8 +42,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test &quot;$opal_if_posix_ipv4_happy&quot; = &quot;yes&quot;],
<br>
-          [AC_CHECK_MEMBERS([struct ifreq.ifr_mtu], [], [],
<br>
+          [AC_CHECK_MEMBERS([struct ifreq.ifr_hwaddr], [], [],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[[#include &lt;net/if.h&gt;]])
<br>
+           AC_CHECK_MEMBERS([struct ifreq.ifr_mtu], [], [],
<br>
+                           [[#include &lt;net/if.h&gt;]])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;])
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test &quot;$opal_if_posix_ipv4_happy&quot; = &quot;yes&quot;], [$1], [$2]);
<br>
Index: opal/mca/if/posix_ipv4/if_posix.c
<br>
===================================================================
<br>
--- opal/mca/if/posix_ipv4/if_posix.c	(revision 29997)
<br>
+++ opal/mca/if/posix_ipv4/if_posix.c	(working copy)
<br>
@@ -263,22 +263,22 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* generate CIDR and assign to netmask */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intf-&gt;if_mask = prefix(((struct sockaddr_in*) &amp;ifr-&gt;ifr_addr)-&gt;sin_addr.s_addr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
-#ifdef SIOCGIFHWADDR
<br>
-            /* get the MAC address */
<br>
-            if (ioctl(sd, SIOCGIFHWADDR, ifr) &lt; 0) {
<br>
-                opal_output(0, &quot;btl_usnic_opal_ifinit: ioctl(SIOCGIFHWADDR) failed with errno=%d&quot;, errno);
<br>
-                break;
<br>
-            }
<br>
-            memcpy(intf-&gt;if_mac, ifr-&gt;ifr_hwaddr.sa_data, 6);
<br>
+#ifdef SIOCGIFHWADDR &amp;&amp; defined(HAVE_STRUCT_IFREQ_IFR_HWADDR)
<br>
+        /* get the MAC address */
<br>
+        if (ioctl(sd, SIOCGIFHWADDR, ifr) &lt; 0) {
<br>
+            opal_output(0, &quot;opal_ifinit: ioctl(SIOCGIFHWADDR) failed with errno=%d&quot;, errno);
<br>
+            break;
<br>
+        }
<br>
+        memcpy(intf-&gt;if_mac, ifr-&gt;ifr_hwaddr.sa_data, 6);
<br>
&nbsp;#endif
<br>
&nbsp;
<br>
&nbsp;#if defined(SIOCGIFMTU) &amp;&amp; defined(HAVE_STRUCT_IFREQ_IFR_MTU)
<br>
-            /* get the MTU */
<br>
-            if (ioctl(sd, SIOCGIFMTU, ifr) &lt; 0) {
<br>
-                opal_output(0, &quot;btl_usnic_opal_ifinit: ioctl(SIOCGIFMTU) failed with errno=%d&quot;, errno);
<br>
-                break;
<br>
-            }
<br>
-            intf-&gt;if_mtu = ifr-&gt;ifr_mtu;
<br>
+        /* get the MTU */
<br>
+        if (ioctl(sd, SIOCGIFMTU, ifr) &lt; 0) {
<br>
+            opal_output(0, &quot;opal_ifinit: ioctl(SIOCGIFMTU) failed with errno=%d&quot;, errno);
<br>
+            break;
<br>
+        }
<br>
+        intf-&gt;if_mtu = ifr-&gt;ifr_mtu;
<br>
&nbsp;#endif
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_list_append(&amp;opal_if_list, &amp;(intf-&gt;super));
<br>
<p><p><p><p><p>On Dec 19, 2013, at 6:51 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; In 1.7.4rc1's README support is still claimed for Solaris 11 on x86_64 with Sun Studio (12.2 and 12.3):
</span><br>
<span class="quotelev1">&gt;   - Oracle Solaris 10 and 11, 32 and 64 bit (SPARC, i386, x86_64),
</span><br>
<span class="quotelev1">&gt;     with Oracle Solaris Studio 12.2 and 12.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I get a build failure when configured with:
</span><br>
<span class="quotelev1">&gt;         CC=cc CFLAGS=-m64 --with-wrapper-cflags=-m64
</span><br>
<span class="quotelev1">&gt;         CXX=CC CXXFLAGS='-m64 -library=stlport4' --with-wrapper-cxxflags=-m64
</span><br>
<span class="quotelev1">&gt;         FC=f90 FCFLAGS=-m64 --with-wrapper-fcflags=-m64
</span><br>
<span class="quotelev1">&gt;         --with-openib --prefix=...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The failure doesn't appear to be compiler specific, and I will be testing gcc ASAP.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/BLD/opal/mca/if/posix_ipv4'
</span><br>
<span class="quotelev1">&gt;   CC       if_posix.lo
</span><br>
<span class="quotelev1">&gt; &quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/include/opal/sys/amd64/atomic.h&quot;, line 136: warning: parameter in inline asm statement unused: %3
</span><br>
<span class="quotelev1">&gt; &quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/include/opal/sys/amd64/atomic.h&quot;, line 182: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/include/opal/sys/amd64/atomic.h&quot;, line 203: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/include/opal/sys/amd64/atomic.h&quot;, line 224: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/include/opal/sys/amd64/atomic.h&quot;, line 245: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/mca/if/posix_ipv4/if_posix.c&quot;, line 272: undefined struct/union member: ifr_hwaddr
</span><br>
<span class="quotelev1">&gt; &quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/mca/if/posix_ipv4/if_posix.c&quot;, line 272: warning: left operand of &quot;.&quot; must be struct/union object
</span><br>
<span class="quotelev1">&gt; &quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/mca/if/posix_ipv4/if_posix.c&quot;, line 272: cannot access member of non-struct/union object
</span><br>
<span class="quotelev1">&gt; cc: acomp failed for /shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/mca/if/posix_ipv4/if_posix.c
</span><br>
<span class="quotelev1">&gt; make[2]: *** [if_posix.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/BLD/opal/mca/if/posix_ipv4'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The atomics warnings are concerning (and appear *MANY* times in the output).
</span><br>
<span class="quotelev1">&gt; However the *real* problem is the three errors in opal/mca/if/posix_ipv4/if_posix.c&quot;, line 272
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Solaris does't have a ifr_hwaddr field in struct if_req.
</span><br>
<span class="quotelev1">&gt; It *does* have an ifr_addr field, but this posting:
</span><br>
<span class="quotelev1">&gt;     <a href="http://comments.gmane.org/gmane.os.solaris.opensolaris.networking/12839">http://comments.gmane.org/gmane.os.solaris.opensolaris.networking/12839</a>
</span><br>
<span class="quotelev1">&gt; suggests that this ioctl probably fails on PF_INET sockets.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The surrounding code looks like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #ifdef SIOCGIFHWADDR
</span><br>
<span class="quotelev1">&gt;             /* get the MAC address */
</span><br>
<span class="quotelev1">&gt;             if (ioctl(sd, SIOCGIFHWADDR, ifr) &lt; 0) {
</span><br>
<span class="quotelev1">&gt;                 opal_output(0, &quot;btl_usnic_opal_ifinit: ioctl(SIOCGIFHWADDR) failed with errno=%d&quot;, errno);
</span><br>
<span class="quotelev1">&gt;                 break;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;             memcpy(intf-&gt;if_mac, ifr-&gt;ifr_hwaddr.sa_data, 6);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if defined(SIOCGIFMTU) &amp;&amp; defined(HAVE_STRUCT_IFREQ_IFR_MTU)
</span><br>
<span class="quotelev1">&gt;             /* get the MTU */
</span><br>
<span class="quotelev1">&gt;             if (ioctl(sd, SIOCGIFMTU, ifr) &lt; 0) {
</span><br>
<span class="quotelev1">&gt;                 opal_output(0, &quot;btl_usnic_opal_ifinit: ioctl(SIOCGIFMTU) failed with errno=%d&quot;, errno);
</span><br>
<span class="quotelev1">&gt;                 break;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;             intf-&gt;if_mtu = ifr-&gt;ifr_mtu;
</span><br>
<span class="quotelev1">&gt; #endif 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note the &quot;btl_usnic_open_ifinit:&quot; in the opal_output lines is probably a cut-and-paste error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul                     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13507.php">Paul Hargrove: "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
<li><strong>Previous message:</strong> <a href="13505.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 build failure: Solaris 11 / x86_64"</a>
<li><strong>In reply to:</strong> <a href="13504.php">Paul Hargrove: "[OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13507.php">Paul Hargrove: "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
<li><strong>Reply:</strong> <a href="13507.php">Paul Hargrove: "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
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
