<?
$subject_val = "Re: [OMPI devel] 1.7.4rc1 build failure: Solaris 11 / x86_64";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 19:03:21 2013" -->
<!-- isoreceived="20131220000321" -->
<!-- sent="Thu, 19 Dec 2013 16:03:19 -0800" -->
<!-- isosent="20131220000319" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc1 build failure: Solaris 11 / x86_64" -->
<!-- id="CAAvDA16ebu1YWEchtjXwFCNziBhKj+O4N-1YV7p0xgEpc_WZxQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI devel] 1.7.4rc1 build failure: Solaris 11 / x86_64" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc1 build failure: Solaris 11 / x86_64<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 19:03:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13506.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun	Studio 12.3"</a>
<li><strong>Previous message:</strong> <a href="13504.php">Paul Hargrove: "[OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've confirmed that the ifr_hwaddr problem also occurs with this system's
<br>
/usr/bin/gcc:
<br>
<p>Making all in mca/if/posix_ipv4
<br>
make[2]: Entering directory
<br>
`/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-gcc452/BLD/opal/mca/if/posix_ipv4'
<br>
&nbsp;&nbsp;CC       if_posix.lo
<br>
/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-gcc452/openmpi-1.7.4rc1/opal/mca/if/posix_ipv4/if_posix.c:
<br>
In function &#239;&#191;&#189;if_posix_open&#239;&#191;&#189;:
<br>
/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-gcc452/openmpi-1.7.4rc1/opal/mca/if/posix_ipv4/if_posix.c:272:37:
<br>
error: &#239;&#191;&#189;struct ifreq&#239;&#191;&#189; has no member named &#239;&#191;&#189;ifr_hwaddr&#239;&#191;&#189;
<br>
make[2]: *** [if_posix.lo] Error 1
<br>
make[2]: Leaving directory
<br>
`/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-gcc452/BLD/opal/mca/if/posix_ipv4
<br>
<p><p>-Paul
<br>
<p><p>On Thu, Dec 19, 2013 at 3:51 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; In 1.7.4rc1's README support is still claimed for Solaris 11 on x86_64
</span><br>
<span class="quotelev1">&gt; with Sun Studio (12.2 and 12.3):
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
<span class="quotelev1">&gt;         CXX=CC CXXFLAGS='-m64 -library=stlport4'
</span><br>
<span class="quotelev1">&gt; --with-wrapper-cxxflags=-m64
</span><br>
<span class="quotelev1">&gt;         FC=f90 FCFLAGS=-m64 --with-wrapper-fcflags=-m64
</span><br>
<span class="quotelev1">&gt;         --with-openib --prefix=...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The failure doesn't appear to be compiler specific, and I will be testing
</span><br>
<span class="quotelev1">&gt; gcc ASAP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/BLD/opal/mca/if/posix_ipv4'
</span><br>
<span class="quotelev1">&gt;   CC       if_posix.lo
</span><br>
<span class="quotelev1">&gt; &quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/include/opal/sys/amd64/atomic.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 136: warning: parameter in inline asm statement unused: %3
</span><br>
<span class="quotelev1">&gt; &quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/include/opal/sys/amd64/atomic.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 182: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/include/opal/sys/amd64/atomic.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 203: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/include/opal/sys/amd64/atomic.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 224: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/include/opal/sys/amd64/atomic.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 245: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/mca/if/posix_ipv4/if_posix.c&quot;,
</span><br>
<span class="quotelev1">&gt; line 272: undefined struct/union member: ifr_hwaddr
</span><br>
<span class="quotelev1">&gt; &quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/mca/if/posix_ipv4/if_posix.c&quot;,
</span><br>
<span class="quotelev1">&gt; line 272: warning: left operand of &quot;.&quot; must be struct/union object
</span><br>
<span class="quotelev1">&gt; &quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/mca/if/posix_ipv4/if_posix.c&quot;,
</span><br>
<span class="quotelev1">&gt; line 272: cannot access member of non-struct/union object
</span><br>
<span class="quotelev1">&gt; cc: acomp failed for
</span><br>
<span class="quotelev1">&gt; /shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/mca/if/posix_ipv4/if_posix.c
</span><br>
<span class="quotelev1">&gt; make[2]: *** [if_posix.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/BLD/opal/mca/if/posix_ipv4'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The atomics warnings are concerning (and appear *MANY* times in the
</span><br>
<span class="quotelev1">&gt; output).
</span><br>
<span class="quotelev1">&gt; However the *real* problem is the three errors in
</span><br>
<span class="quotelev1">&gt; opal/mca/if/posix_ipv4/if_posix.c&quot;, line 272
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Solaris does't have a ifr_hwaddr field in struct if_req.
</span><br>
<span class="quotelev1">&gt; It *does* have an ifr_addr field, but this posting:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://comments.gmane.org/gmane.os.solaris.opensolaris.networking/12839">http://comments.gmane.org/gmane.os.solaris.opensolaris.networking/12839</a>
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
<span class="quotelev1">&gt;                 opal_output(0, &quot;btl_usnic_opal_ifinit:
</span><br>
<span class="quotelev1">&gt; ioctl(SIOCGIFHWADDR) failed with errno=%d&quot;, errno);
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
<span class="quotelev1">&gt;                 opal_output(0, &quot;btl_usnic_opal_ifinit: ioctl(SIOCGIFMTU)
</span><br>
<span class="quotelev1">&gt; failed with errno=%d&quot;, errno);
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
<span class="quotelev1">&gt; Note the &quot;btl_usnic_open_ifinit:&quot; in the opal_output lines is probably a
</span><br>
<span class="quotelev1">&gt; cut-and-paste error.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13505/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13506.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun	Studio 12.3"</a>
<li><strong>Previous message:</strong> <a href="13504.php">Paul Hargrove: "[OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
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
