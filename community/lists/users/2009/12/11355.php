<?
$subject_val = "Re: [OMPI users] Pointers for understanding failure messages on NetBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 21:59:38 2009" -->
<!-- isoreceived="20091202025938" -->
<!-- sent="Wed, 2 Dec 2009 15:59:32 +1300" -->
<!-- isosent="20091202025932" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pointers for understanding failure messages on NetBSD" -->
<!-- id="2409d237dad513265ce9ace684443253.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FEC4BBA-1284-4FF1-9407-B5DA94FF9AD6_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Pointers for understanding failure messages on NetBSD<br>
<strong>From:</strong> <a href="mailto:Kevin.Buckley_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Pointers%20for%20understanding%20failure%20messages%20on%20NetBSD"><em>Kevin.Buckley_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-12-01 21:59:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11356.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11354.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>In reply to:</strong> <a href="11350.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11356.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Reply:</strong> <a href="11356.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt; I assume that both of you have seen the reply from Aleksej Saushev,
</span><br>
<span class="quotelev2">&gt;&gt; who seems to be the bloke looking after the port of OpenMPI to the
</span><br>
<span class="quotelev2">&gt;&gt; NetBSD platform.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Aleksej suggested some mods he had partially looked at, in
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; opal/util/if.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nope - didn't see anything like that :-/
</span><br>
<p>Aah, just realised that that portion of Aleksej's comments were in
<br>
an offlist posting.
<br>
<p>It'll be interesting to compare which files Jeff thinks the munging
<br>
needs to be done in.
<br>
<p><p><span class="quotelev1">&gt; Since none of us (to my knowledge) have ever looked at NetBSD (in
</span><br>
<span class="quotelev1">&gt; fact, I never heard of it before), I would not be surprised to find
</span><br>
<span class="quotelev1">&gt; that there are going to be problems encountered in such a port.
</span><br>
<span class="quotelev1">&gt; There always are.
</span><br>
<p><p>I have not had a chance to start looking at this in earnest myself
<br>
yet but I include the relevant info here, in case experience with
<br>
porting to those platforms you have heard of suggests something
<br>
obvious.
<br>
<p>==
<br>
OpenMPI uses incorrect way to access network interface information,
<br>
what works for FreeBSD (by an accident) doesn't work for NetBSD,
<br>
we should rewrite respective parts of opal/util/if.c file to use BSD API,
<br>
that is getifaddrs(3) even when walking over IPv4 addresses.
<br>
<p>My old &quot;draft&quot; (which is simply pointer to that part) is below,
<br>
I don't remember which OpenMPI version it is based on, I hope that you
<br>
find the place yourself. If not, ask or wait. I do hope to find some
<br>
time for OpenMPI next week after I finish reworking Fortran support in
<br>
pkgsrc. Stay tuned.
<br>
<p>--- opal/util/if.c.orig        2009-03-18 18:42:39.000000000 +0300
<br>
+++ opal/util/if.c        2009-03-21 22:14:44.000000000 +0300
<br>
@@ -164,6 +164,135 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;false, false, (int)false, &amp;sd);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do_not_resolve = OPAL_INT_TO_BOOL(sd);
<br>
<p>+#if defined( __NetBSD__) || defined(__OpenBSD__) || defined(__FreeBSD__)
<br>
+/* || defined(__386BSD__) || defined(__bsdi__) || defined(__APPLE__) */
<br>
+/*           || defined(__linux__)  */
<br>
+
<br>
+    {
<br>
+        struct ifaddrs **ifadd_list;
<br>
+        struct ifaddrs *cur_ifaddrs;
<br>
+        struct sockaddr_in6* sin_addr;
<br>
+
<br>
+        /*
<br>
+         * the manpage claims that getifaddrs() allocates the memory,
<br>
+         * and freeifaddrs() is later used to release the allocated memory.
<br>
+         * however, without this malloc the call to getifaddrs() segfaults
<br>
+         */
<br>
+        ifadd_list = (struct ifaddrs **) malloc(sizeof(struct ifaddrs*));
<br>
+
<br>
+        /* create the linked list of ifaddrs structs */
<br>
+        if(getifaddrs(ifadd_list) &lt; 0) {
<br>
+            opal_output(0, &quot;opal_ifinit: getifaddrs() failed with
<br>
error=%d\n&quot;,
<br>
+                    errno);
<br>
+            return OPAL_ERROR;
<br>
+        }
<br>
+
<br>
+        for(cur_ifaddrs = *ifadd_list; NULL != cur_ifaddrs;
<br>
+                cur_ifaddrs = cur_ifaddrs-&gt;ifa_next) {
<br>
+
<br>
+            opal_if_t intf;
<br>
+            opal_if_t *intf_ptr;
<br>
+            struct in6_addr a6;
<br>
+
<br>
+            /* skip non-ipv6 interface addresses */
<br>
+            if(AF_INET6 != cur_ifaddrs-&gt;ifa_addr-&gt;sa_family) {
<br>
+#if 0
<br>
+                printf(&quot;skipping non-ipv6 interface %s.\n&quot;,
<br>
cur_ifaddrs-&gt;ifa_name);
<br>
+#endif
<br>
+                continue;
<br>
+            }
<br>
+
<br>
+            /* skip interface if it is down (IFF_UP not set) */
<br>
+            if(0 == (cur_ifaddrs-&gt;ifa_flags &amp; IFF_UP)) {
<br>
+#if 0
<br>
+                printf(&quot;skipping non-up interface %s.\n&quot;,
<br>
cur_ifaddrs-&gt;ifa_name);
<br>
+#endif
<br>
+                continue;
<br>
+            }
<br>
+
<br>
+            /* skip interface if it is a loopback device (IFF_LOOPBACK
<br>
set) */
<br>
+            /* or if it is a point-to-point interface */
<br>
+            /* TODO: do we really skip p2p? */
<br>
+            if(0 != (cur_ifaddrs-&gt;ifa_flags &amp; IFF_LOOPBACK)
<br>
+                    || 0!= (cur_ifaddrs-&gt;ifa_flags &amp; IFF_POINTOPOINT)) {
<br>
+#if 0
<br>
+                printf(&quot;skipping loopback interface %s.\n&quot;,
<br>
cur_ifaddrs-&gt;ifa_name);
<br>
+#endif
<br>
+                continue;
<br>
+            }
<br>
+
<br>
+            sin_addr = (struct sockaddr_in6 *) cur_ifaddrs-&gt;ifa_addr;
<br>
+
<br>
+            /*
<br>
+             * skip IPv6 address starting with fe80:, as this is supposed
<br>
to be
<br>
+             * link-local scope. sockaddr_in6-&gt;sin6_scope_id doesn't
<br>
always work
<br>
+             * TODO: test whether scope id is set to a sensible value on
<br>
+             * linux and/or bsd (including osx)
<br>
+             *
<br>
+             * MacOSX: fe80::... has a scope of 0, but ifconfig -a shows
<br>
+             * a scope of 4 on that particular machine,
<br>
+             * so the scope returned by getifaddrs() isn't working properly
<br>
+             */
<br>
+
<br>
+            if((IN6_IS_ADDR_LINKLOCAL (&amp;sin_addr-&gt;sin6_addr))) {
<br>
+#if 0
<br>
+                printf(&quot;skipping link-local ipv6 address on interface \
<br>
+                        %s with scope %d.\n&quot;,
<br>
+                        cur_ifaddrs-&gt;ifa_name, sin_addr-&gt;sin6_scope_id);
<br>
+#endif
<br>
+                continue;
<br>
+            }
<br>
+
<br>
+            OMPI_DEBUG_ZERO(intf);
<br>
+            OBJ_CONSTRUCT(&amp;intf, opal_list_item_t);
<br>
+#if 0
<br>
+            char *addr_name = (char *) malloc(48*sizeof(char));
<br>
+            inet_ntop(AF_INET6, &amp;sin_addr-&gt;sin6_addr, addr_name,
<br>
48*sizeof(char));
<br>
+            opal_output(0, &quot;ipv6 capable interface %s discovered, address
<br>
%s.\n&quot;,
<br>
+                    cur_ifaddrs-&gt;ifa_name, addr_name);
<br>
+            free(addr_name);
<br>
+#endif
<br>
+
<br>
+            /* fill values into the opal_if_t */
<br>
+            memcpy(&amp;a6, &amp;(sin_addr-&gt;sin6_addr), sizeof(struct in6_addr));
<br>
+
<br>
+            strncpy(intf.if_name, cur_ifaddrs-&gt;ifa_name, IF_NAMESIZE);
<br>
+            intf.if_index = opal_list_get_size(&amp;opal_if_list) + 1;
<br>
+            ((struct sockaddr_in6*) &amp;intf.if_addr)-&gt;sin6_addr = a6;
<br>
+            ((struct sockaddr_in6*) &amp;intf.if_addr)-&gt;sin6_family = AF_INET6;
<br>
+
<br>
+            /* since every scope != 0 is ignored, we just set the scope
<br>
to 0 */
<br>
+            ((struct sockaddr_in6*) &amp;intf.if_addr)-&gt;sin6_scope_id = 0;
<br>
+
<br>
+            /*
<br>
+             * hardcoded netmask, adrian says that's ok
<br>
+             */
<br>
+            intf.if_mask = 64;
<br>
+            intf.if_flags = cur_ifaddrs-&gt;ifa_flags;
<br>
+
<br>
+            /*
<br>
+             * FIXME: figure out how to gain access to the kernel index
<br>
+             * (or create our own), getifaddrs() does not contain such
<br>
+             * data
<br>
+             */
<br>
+
<br>
+            intf.if_kernel_index = (uint16_t)
<br>
if_nametoindex(cur_ifaddrs-&gt;ifa_name);
<br>
+
<br>
+            intf_ptr = (opal_if_t*) malloc(sizeof(opal_if_t));
<br>
+            OMPI_DEBUG_ZERO(*intf_ptr);
<br>
+            if(NULL == intf_ptr) {
<br>
+                opal_output(0, &quot;opal_ifinit: unable to allocate %lu
<br>
bytes\n&quot;,
<br>
+                            sizeof(opal_if_t));
<br>
+                OBJ_DESTRUCT(&amp;intf);
<br>
+                return OPAL_ERR_OUT_OF_RESOURCE;
<br>
+            }
<br>
+            memcpy(intf_ptr, &amp;intf, sizeof(intf));
<br>
+            opal_list_append(&amp;opal_if_list, (opal_list_item_t*) intf_ptr);
<br>
+            OBJ_DESTRUCT(&amp;intf);
<br>
+        }   /*  of for loop over ifaddrs list */
<br>
+
<br>
+    }
<br>
+#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* create the internet socket to test off */
<br>
&nbsp;/*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Change AF_INET to AF_UNSPEC (or AF_INET6) and everything will fail.
<br>
@@ -358,6 +487,9 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(ifconf.ifc_req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;close(sd);
<br>
+#endif  /* bsd,  macosx */
<br>
+
<br>
+
<br>
&nbsp;#if OPAL_WANT_IPV6
<br>
&nbsp;#ifdef __linux__ /* Linux does not have SIOCGL*, so parse
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/proc/net/if_inet6 instead */
<br>
<p><p>==
<br>
<p><pre>
-- 
Kevin M. Buckley                                  Room:  CO327
School of Engineering and                         Phone: +64 4 463 5971
 Computer Science
Victoria University of Wellington
New Zealand
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11356.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11354.php">Belaid MOA: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>In reply to:</strong> <a href="11350.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11356.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Reply:</strong> <a href="11356.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
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
