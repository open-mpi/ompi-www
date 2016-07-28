<?
$subject_val = "[OMPI devel] ibcm private header file";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 22 12:28:29 2008" -->
<!-- isoreceived="20080722162829" -->
<!-- sent="Tue, 22 Jul 2008 12:28:22 -0400" -->
<!-- isosent="20080722162822" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] ibcm private header file" -->
<!-- id="89241346-0A93-417B-8594-3C8A17344068_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] ibcm private header file<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-22 12:28:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4394.php">Roland Dreier: "Re: [OMPI devel] ibcm private header file"</a>
<li><strong>Previous message:</strong> <a href="4392.php">Jeff Squyres: "Re: [OMPI devel] v1.3: libnbc and sm2 coll components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4394.php">Roland Dreier: "Re: [OMPI devel] ibcm private header file"</a>
<li><strong>Reply:</strong> <a href="4394.php">Roland Dreier: "Re: [OMPI devel] ibcm private header file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pasha --
<br>
<p>I notice that all of IU's builds failed last night with errors like  
<br>
this:
<br>
<p>libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include - 
<br>
I../../../../orte/include -I../../../../ompi/include -I../../../../ 
<br>
opal/mca/paffinity/linux/plpa/src/libplpa -I/usr/local/ofed/include - 
<br>
I../../../.. -O3 -DNDEBUG -m32 -pipe -finline-functions -fno-strict- 
<br>
aliasing -pthread -fvisibility=hidden -MT connect/ 
<br>
btl_openib_connect_ibcm.lo -MD -MP -MF connect/.deps/ 
<br>
btl_openib_connect_ibcm.Tpo -c connect/btl_openib_connect_ibcm.c  - 
<br>
fPIC -DPIC -o connect/.libs/btl_openib_connect_ibcm.o
<br>
In file included from /usr/include/asm/byteorder.h:7,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from connect/btl_openib_connect_ibcm.c:260:
<br>
/usr/include/asm-i386/byteorder.h:6:2: warning: #warning using private  
<br>
kernel header; include instead!
<br>
In file included from ../../../../opal/util/if.h:33,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from connect/btl_openib_connect_ibcm.c:262:
<br>
/usr/include/netinet/in.h:354: error: syntax error before '(' token
<br>
/usr/include/netinet/in.h:354: error: syntax error before &quot;__u32&quot;
<br>
/usr/include/netinet/in.h:355: error: syntax error before '(' token
<br>
/usr/include/netinet/in.h:355: error: syntax error before &quot;__u16&quot;
<br>
/usr/include/netinet/in.h:357: error: syntax error before '(' token
<br>
/usr/include/netinet/in.h:357: error: syntax error before &quot;__u32&quot;
<br>
/usr/include/netinet/in.h:359: error: syntax error before '(' token
<br>
/usr/include/netinet/in.h:359: error: syntax error before &quot;__u16&quot;
<br>
make[2]: *** [connect/btl_openib_connect_ibcm.lo] Error 1
<br>
<p>So I think using byteorder.h is not a good idea (note the warning).   
<br>
How about just having two #defines, picking the Right one based on  
<br>
WORDS_BIGENDIAN?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4394.php">Roland Dreier: "Re: [OMPI devel] ibcm private header file"</a>
<li><strong>Previous message:</strong> <a href="4392.php">Jeff Squyres: "Re: [OMPI devel] v1.3: libnbc and sm2 coll components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4394.php">Roland Dreier: "Re: [OMPI devel] ibcm private header file"</a>
<li><strong>Reply:</strong> <a href="4394.php">Roland Dreier: "Re: [OMPI devel] ibcm private header file"</a>
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
