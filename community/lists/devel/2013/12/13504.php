<?
$subject_val = "[OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 18:51:45 2013" -->
<!-- isoreceived="20131219235145" -->
<!-- sent="Thu, 19 Dec 2013 15:51:43 -0800" -->
<!-- isosent="20131219235143" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3" -->
<!-- id="CAAvDA15nVhxfsb_UG6ffqH57Cz=KspUPhPPGWha9j8sFOruWEg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 18:51:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13505.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 build failure: Solaris 11 / x86_64"</a>
<li><strong>Previous message:</strong> <a href="13503.php">Paul Hargrove: "[OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13506.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun	Studio 12.3"</a>
<li><strong>Reply:</strong> <a href="13506.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun	Studio 12.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In 1.7.4rc1's README support is still claimed for Solaris 11 on x86_64 with
<br>
Sun Studio (12.2 and 12.3):
<br>
&nbsp;&nbsp;- Oracle Solaris 10 and 11, 32 and 64 bit (SPARC, i386, x86_64),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;with Oracle Solaris Studio 12.2 and 12.3
<br>
<p>However, I get a build failure when configured with:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CC=cc CFLAGS=-m64 --with-wrapper-cflags=-m64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CXX=CC CXXFLAGS='-m64 -library=stlport4'
<br>
--with-wrapper-cxxflags=-m64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FC=f90 FCFLAGS=-m64 --with-wrapper-fcflags=-m64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-openib --prefix=...
<br>
<p>The failure doesn't appear to be compiler specific, and I will be testing
<br>
gcc ASAP.
<br>
<p>make[2]: Entering directory
<br>
`/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/BLD/opal/mca/if/posix_ipv4'
<br>
&nbsp;&nbsp;CC       if_posix.lo
<br>
&quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/include/opal/sys/amd64/atomic.h&quot;,
<br>
line 136: warning: parameter in inline asm statement unused: %3
<br>
&quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/include/opal/sys/amd64/atomic.h&quot;,
<br>
line 182: warning: parameter in inline asm statement unused: %2
<br>
&quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/include/opal/sys/amd64/atomic.h&quot;,
<br>
line 203: warning: parameter in inline asm statement unused: %2
<br>
&quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/include/opal/sys/amd64/atomic.h&quot;,
<br>
line 224: warning: parameter in inline asm statement unused: %2
<br>
&quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/include/opal/sys/amd64/atomic.h&quot;,
<br>
line 245: warning: parameter in inline asm statement unused: %2
<br>
&quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/mca/if/posix_ipv4/if_posix.c&quot;,
<br>
line 272: undefined struct/union member: ifr_hwaddr
<br>
&quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/mca/if/posix_ipv4/if_posix.c&quot;,
<br>
line 272: warning: left operand of &quot;.&quot; must be struct/union object
<br>
&quot;/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/mca/if/posix_ipv4/if_posix.c&quot;,
<br>
line 272: cannot access member of non-struct/union object
<br>
cc: acomp failed for
<br>
/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/openmpi-1.7.4rc1/opal/mca/if/posix_ipv4/if_posix.c
<br>
make[2]: *** [if_posix.lo] Error 1
<br>
make[2]: Leaving directory
<br>
`/shared/OMPI/openmpi-1.7.4rc1-solaris11-x64-ib-ss12u3/BLD/opal/mca/if/posix_ipv4'
<br>
<p>The atomics warnings are concerning (and appear *MANY* times in the output).
<br>
However the *real* problem is the three errors in
<br>
opal/mca/if/posix_ipv4/if_posix.c&quot;, line 272
<br>
<p>Solaris does't have a ifr_hwaddr field in struct if_req.
<br>
It *does* have an ifr_addr field, but this posting:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://comments.gmane.org/gmane.os.solaris.opensolaris.networking/12839">http://comments.gmane.org/gmane.os.solaris.opensolaris.networking/12839</a>
<br>
suggests that this ioctl probably fails on PF_INET sockets.
<br>
<p>The surrounding code looks like:
<br>
<p>#ifdef SIOCGIFHWADDR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* get the MAC address */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ioctl(sd, SIOCGIFHWADDR, ifr) &lt; 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(0, &quot;btl_usnic_opal_ifinit: ioctl(SIOCGIFHWADDR)
<br>
failed with errno=%d&quot;, errno);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memcpy(intf-&gt;if_mac, ifr-&gt;ifr_hwaddr.sa_data, 6);
<br>
#endif
<br>
<p>#if defined(SIOCGIFMTU) &amp;&amp; defined(HAVE_STRUCT_IFREQ_IFR_MTU)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* get the MTU */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ioctl(sd, SIOCGIFMTU, ifr) &lt; 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(0, &quot;btl_usnic_opal_ifinit: ioctl(SIOCGIFMTU)
<br>
failed with errno=%d&quot;, errno);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intf-&gt;if_mtu = ifr-&gt;ifr_mtu;
<br>
#endif
<br>
<p><p>Note the &quot;btl_usnic_open_ifinit:&quot; in the opal_output lines is probably a
<br>
cut-and-paste error.
<br>
<p>-Paul
<br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13504/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13505.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 build failure: Solaris 11 / x86_64"</a>
<li><strong>Previous message:</strong> <a href="13503.php">Paul Hargrove: "[OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13506.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun	Studio 12.3"</a>
<li><strong>Reply:</strong> <a href="13506.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun	Studio 12.3"</a>
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
