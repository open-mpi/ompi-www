<?
$subject_val = "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 19:12:40 2013" -->
<!-- isoreceived="20131220001240" -->
<!-- sent="Thu, 19 Dec 2013 16:12:38 -0800" -->
<!-- isosent="20131220001238" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3" -->
<!-- id="CAAvDA17V7hsZ3koxkXa6qyCCuCwHFOyuvsLoOhfD0y2DdxfmTw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3657DD4E-94EF-49A9-A4AD-9DEEA0143588_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 19:12:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13508.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
<li><strong>Previous message:</strong> <a href="13506.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun	Studio 12.3"</a>
<li><strong>In reply to:</strong> <a href="13506.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun	Studio 12.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13508.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
<li><strong>Reply:</strong> <a href="13508.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>The patch looks fine to my eyes, but I cannot test it:
<br>
<p>1) Not sure if email botched withepsace or what, but the patch didn't apply
<br>
to if_posix.c.
<br>
2) Even if it did, I don't have sufficiently new autoconf on that system to
<br>
&quot;use&quot; the configure.m4 part of the patch.
<br>
<p>Any chance of a patched-and-autogen'ed tarball to test?
<br>
<p>-Paul
<br>
<p><p>On Thu, Dec 19, 2013 at 4:04 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Paul --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does this patch fix it for you?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: opal/mca/if/posix_ipv4/configure.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/mca/if/posix_ipv4/configure.m4 (revision 29997)
</span><br>
<span class="quotelev1">&gt; +++ opal/mca/if/posix_ipv4/configure.m4 (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -42,8 +42,10 @@
</span><br>
<span class="quotelev1">&gt;           )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      AS_IF([test &quot;$opal_if_posix_ipv4_happy&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt; -          [AC_CHECK_MEMBERS([struct ifreq.ifr_mtu], [], [],
</span><br>
<span class="quotelev1">&gt; +          [AC_CHECK_MEMBERS([struct ifreq.ifr_hwaddr], [], [],
</span><br>
<span class="quotelev1">&gt;                             [[#include &lt;net/if.h&gt;]])
</span><br>
<span class="quotelev1">&gt; +           AC_CHECK_MEMBERS([struct ifreq.ifr_mtu], [], [],
</span><br>
<span class="quotelev1">&gt; +                           [[#include &lt;net/if.h&gt;]])
</span><br>
<span class="quotelev1">&gt;            ])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      AS_IF([test &quot;$opal_if_posix_ipv4_happy&quot; = &quot;yes&quot;], [$1], [$2]);
</span><br>
<span class="quotelev1">&gt; Index: opal/mca/if/posix_ipv4/if_posix.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/mca/if/posix_ipv4/if_posix.c   (revision 29997)
</span><br>
<span class="quotelev1">&gt; +++ opal/mca/if/posix_ipv4/if_posix.c   (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -263,22 +263,22 @@
</span><br>
<span class="quotelev1">&gt;          /* generate CIDR and assign to netmask */
</span><br>
<span class="quotelev1">&gt;          intf-&gt;if_mask = prefix(((struct sockaddr_in*)
</span><br>
<span class="quotelev1">&gt; &amp;ifr-&gt;ifr_addr)-&gt;sin_addr.s_addr);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -#ifdef SIOCGIFHWADDR
</span><br>
<span class="quotelev1">&gt; -            /* get the MAC address */
</span><br>
<span class="quotelev1">&gt; -            if (ioctl(sd, SIOCGIFHWADDR, ifr) &lt; 0) {
</span><br>
<span class="quotelev1">&gt; -                opal_output(0, &quot;btl_usnic_opal_ifinit:
</span><br>
<span class="quotelev1">&gt; ioctl(SIOCGIFHWADDR) failed with errno=%d&quot;, errno);
</span><br>
<span class="quotelev1">&gt; -                break;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -            memcpy(intf-&gt;if_mac, ifr-&gt;ifr_hwaddr.sa_data, 6);
</span><br>
<span class="quotelev1">&gt; +#ifdef SIOCGIFHWADDR &amp;&amp; defined(HAVE_STRUCT_IFREQ_IFR_HWADDR)
</span><br>
<span class="quotelev1">&gt; +        /* get the MAC address */
</span><br>
<span class="quotelev1">&gt; +        if (ioctl(sd, SIOCGIFHWADDR, ifr) &lt; 0) {
</span><br>
<span class="quotelev1">&gt; +            opal_output(0, &quot;opal_ifinit: ioctl(SIOCGIFHWADDR) failed with
</span><br>
<span class="quotelev1">&gt; errno=%d&quot;, errno);
</span><br>
<span class="quotelev1">&gt; +            break;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        memcpy(intf-&gt;if_mac, ifr-&gt;ifr_hwaddr.sa_data, 6);
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #if defined(SIOCGIFMTU) &amp;&amp; defined(HAVE_STRUCT_IFREQ_IFR_MTU)
</span><br>
<span class="quotelev1">&gt; -            /* get the MTU */
</span><br>
<span class="quotelev1">&gt; -            if (ioctl(sd, SIOCGIFMTU, ifr) &lt; 0) {
</span><br>
<span class="quotelev1">&gt; -                opal_output(0, &quot;btl_usnic_opal_ifinit: ioctl(SIOCGIFMTU)
</span><br>
<span class="quotelev1">&gt; failed with errno=%d&quot;, errno);
</span><br>
<span class="quotelev1">&gt; -                break;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -            intf-&gt;if_mtu = ifr-&gt;ifr_mtu;
</span><br>
<span class="quotelev1">&gt; +        /* get the MTU */
</span><br>
<span class="quotelev1">&gt; +        if (ioctl(sd, SIOCGIFMTU, ifr) &lt; 0) {
</span><br>
<span class="quotelev1">&gt; +            opal_output(0, &quot;opal_ifinit: ioctl(SIOCGIFMTU) failed with
</span><br>
<span class="quotelev1">&gt; errno=%d&quot;, errno);
</span><br>
<span class="quotelev1">&gt; +            break;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        intf-&gt;if_mtu = ifr-&gt;ifr_mtu;
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          opal_list_append(&amp;opal_if_list, &amp;(intf-&gt;super));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 19, 2013, at 6:51 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; In 1.7.4rc1's README support is still claimed for Solaris 11 on x86_64
</span><br>
<span class="quotelev1">&gt; with Sun Studio (12.2 and 12.3):
</span><br>
<span class="quotelev2">&gt; &gt;   - Oracle Solaris 10 and 11, 32 and 64 bit (SPARC, i386, x86_64),
</span><br>
<span class="quotelev2">&gt; &gt;     with Oracle Solaris Studio 12.2 and 12.3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, I get a build failure when configured with:
</span><br>
<span class="quotelev2">&gt; &gt;         CC=cc CFLAGS=-m64 --with-wrapper-cflags=-m64
</span><br>
<span class="quotelev2">&gt; &gt;         CXX=CC CXXFLAGS='-m64 -library=stlport4'
</span><br>
<span class="quotelev1">&gt; --with-wrapper-cxxflags=-m64
</span><br>
<span class="quotelev2">&gt; &gt;         FC=f90 FCFLAGS=-m64 --with-wrapper-fcflags=-m64
</span><br>
<span class="quotelev2">&gt; &gt;         --with-openib --prefix=...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The failure doesn't appear to be compiler specific, and I will be
</span><br>
<span class="quotelev1">&gt; testing gcc ASAP.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/BLD/opal/mca/if/posix_ipv4'
</span><br>
<span class="quotelev2">&gt; &gt;   CC       if_posix.lo
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/include/opal/sys/amd64/atomic.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 136: warning: parameter in inline asm statement unused: %3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/include/opal/sys/amd64/atomic.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 182: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/include/opal/sys/amd64/atomic.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 203: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/include/opal/sys/amd64/atomic.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 224: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/include/opal/sys/amd64/atomic.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 245: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/mca/if/posix_ipv4/if_posix.c&quot;,
</span><br>
<span class="quotelev1">&gt; line 272: undefined struct/union member: ifr_hwaddr
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/mca/if/posix_ipv4/if_posix.c&quot;,
</span><br>
<span class="quotelev1">&gt; line 272: warning: left operand of &quot;.&quot; must be struct/union object
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/mca/if/posix_ipv4/if_posix.c&quot;,
</span><br>
<span class="quotelev1">&gt; line 272: cannot access member of non-struct/union object
</span><br>
<span class="quotelev2">&gt; &gt; cc: acomp failed for
</span><br>
<span class="quotelev1">&gt; /shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/mca/if/posix_ipv4/if_posix.c
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [if_posix.lo] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/BLD/opal/mca/if/posix_ipv4'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The atomics warnings are concerning (and appear *MANY* times in the
</span><br>
<span class="quotelev1">&gt; output).
</span><br>
<span class="quotelev2">&gt; &gt; However the *real* problem is the three errors in
</span><br>
<span class="quotelev1">&gt; opal/mca/if/posix_ipv4/if_posix.c&quot;, line 272
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Solaris does't have a ifr_hwaddr field in struct if_req.
</span><br>
<span class="quotelev2">&gt; &gt; It *does* have an ifr_addr field, but this posting:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://comments.gmane.org/gmane.os.solaris.opensolaris.networking/12839">http://comments.gmane.org/gmane.os.solaris.opensolaris.networking/12839</a>
</span><br>
<span class="quotelev2">&gt; &gt; suggests that this ioctl probably fails on PF_INET sockets.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The surrounding code looks like:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #ifdef SIOCGIFHWADDR
</span><br>
<span class="quotelev2">&gt; &gt;             /* get the MAC address */
</span><br>
<span class="quotelev2">&gt; &gt;             if (ioctl(sd, SIOCGIFHWADDR, ifr) &lt; 0) {
</span><br>
<span class="quotelev2">&gt; &gt;                 opal_output(0, &quot;btl_usnic_opal_ifinit:
</span><br>
<span class="quotelev1">&gt; ioctl(SIOCGIFHWADDR) failed with errno=%d&quot;, errno);
</span><br>
<span class="quotelev2">&gt; &gt;                 break;
</span><br>
<span class="quotelev2">&gt; &gt;             }
</span><br>
<span class="quotelev2">&gt; &gt;             memcpy(intf-&gt;if_mac, ifr-&gt;ifr_hwaddr.sa_data, 6);
</span><br>
<span class="quotelev2">&gt; &gt; #endif
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #if defined(SIOCGIFMTU) &amp;&amp; defined(HAVE_STRUCT_IFREQ_IFR_MTU)
</span><br>
<span class="quotelev2">&gt; &gt;             /* get the MTU */
</span><br>
<span class="quotelev2">&gt; &gt;             if (ioctl(sd, SIOCGIFMTU, ifr) &lt; 0) {
</span><br>
<span class="quotelev2">&gt; &gt;                 opal_output(0, &quot;btl_usnic_opal_ifinit: ioctl(SIOCGIFMTU)
</span><br>
<span class="quotelev1">&gt; failed with errno=%d&quot;, errno);
</span><br>
<span class="quotelev2">&gt; &gt;                 break;
</span><br>
<span class="quotelev2">&gt; &gt;             }
</span><br>
<span class="quotelev2">&gt; &gt;             intf-&gt;if_mtu = ifr-&gt;ifr_mtu;
</span><br>
<span class="quotelev2">&gt; &gt; #endif
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Note the &quot;btl_usnic_open_ifinit:&quot; in the opal_output lines is probably a
</span><br>
<span class="quotelev1">&gt; cut-and-paste error.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13507/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13508.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
<li><strong>Previous message:</strong> <a href="13506.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun	Studio 12.3"</a>
<li><strong>In reply to:</strong> <a href="13506.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun	Studio 12.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13508.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
<li><strong>Reply:</strong> <a href="13508.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
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
