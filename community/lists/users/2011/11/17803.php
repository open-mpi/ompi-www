<?
$subject_val = "Re: [OMPI users] openmpi and mingw32?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 21 13:18:05 2011" -->
<!-- isoreceived="20111121181805" -->
<!-- sent="Mon, 21 Nov 2011 11:17:56 -0700" -->
<!-- isosent="20111121181756" -->
<!-- name="John R. Cary" -->
<!-- email="cary_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi and mingw32?" -->
<!-- id="4ECA95D4.8040008_at_txcorp.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4ECA4755.6080004_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi and mingw32?<br>
<strong>From:</strong> John R. Cary (<em>cary_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-21 13:17:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17804.php">Mudassar Majeed: "Re: [OMPI users] UDP like messaging with MPI"</a>
<li><strong>Previous message:</strong> <a href="17802.php">Jeff Squyres: "Re: [OMPI users] UDP like messaging with MPI"</a>
<li><strong>In reply to:</strong> <a href="17798.php">Shiqing Fan: "Re: [OMPI users] openmpi and mingw32?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/21/2011 5:43 AM, Shiqing Fan wrote:
<br>
<span class="quotelev1">&gt; Hi John,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, there will be an initial build support for MinGW, but a few 
</span><br>
<span class="quotelev1">&gt; runtime issues still need to be fixed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want to try the current one, please download one of the latest 
</span><br>
<span class="quotelev1">&gt; 1.5 nightly tarballs. Please just let me know if you got problems on 
</span><br>
<span class="quotelev1">&gt; that. Feedback would be helpful and appreciated.
</span><br>
<p>Hi Shiqing,
<br>
<p>I went ahead and tried the svn trunk.  I configured with
<br>
<p>cmake \
<br>
&nbsp;&nbsp;&nbsp;-DCMAKE_INSTALL_PREFIX:PATH=C:/winsame/contrib-mingw/openmpi-try \
<br>
&nbsp;&nbsp;&nbsp;-DCMAKE_BUILD_TYPE:STRING=Release \
<br>
&nbsp;&nbsp;&nbsp;-DCMAKE_VERBOSE_MAKEFILE:BOOL=TRUE \
<br>
&nbsp;&nbsp;&nbsp;-DCMAKE_COLOR_MAKEFILE:BOOL=FALSE \
<br>
&nbsp;&nbsp;&nbsp;-G 'NMake Makefiles JOM' \
<br>
&nbsp;&nbsp;&nbsp;-DCMAKE_C_COMPILER:FILEPATH='mingw32-gcc' \
<br>
&nbsp;&nbsp;&nbsp;-DCMAKE_CXX_COMPILER:FILEPATH='mingw32-g++' \
<br>
&nbsp;&nbsp;&nbsp;-DCMAKE_Fortran_COMPILER:FILEPATH='mingw32-gfortran' \
<br>
&nbsp;&nbsp;&nbsp;..
<br>
<p>It fails right away at
<br>
<p>&nbsp;&nbsp;C:\MinGW\bin\mingw32-gcc.exe  -Dlibopen_pal_EXPORTS -D_USRDLL 
<br>
-DOPAL_EXPORTS -O3 -DNDEBUG @CMakeFiles/libopen-pal.dir/includes_C.rsp 
<br>
-o CMakeFiles\libopen-pal.dir\class\opal_list.obj   -c 
<br>
C:\winsame\builds-mingw\facetsall-mingw\ompi-trunk\opal\class\opal_list.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cd C:\winsame\builds-mingw\facetsall-mingw\ompi-trunk\try
<br>
In file included from 
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/try/opal/include/opal_config.h:1495:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from 
<br>
C:\winsame\builds-mingw\facetsall-mingw\ompi-trunk\opal\class\opal_atomic_lifo.c:19:
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/opal/include/opal_config_bottom.h:561:0: 
<br>
warning: &quot;PF_UNSPEC&quot; redefined
<br>
c:\mingw\bin\../lib/gcc/mingw32/4.5.2/../../../../include/winsock2.h:368:0: 
<br>
note: this is the location of the previous definition
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/opal/include/opal_config_bottom.h:564:0: 
<br>
warning: &quot;AF_INET6&quot; redefined
<br>
c:\mingw\bin\../lib/gcc/mingw32/4.5.2/../../../../include/winsock2.h:329:0: 
<br>
note: this is the location of the previous definition
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/opal/include/opal_config_bottom.h:567:0: 
<br>
warning: &quot;PF_INET6&quot; redefined
<br>
c:\mingw\bin\../lib/gcc/mingw32/4.5.2/../../../../include/winsock2.h:392:0: 
<br>
note: this is the location of the previous definition
<br>
In file included from 
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/try/opal/include/opal_config.h:1495:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from 
<br>
C:\winsame\builds-mingw\facetsall-mingw\ompi-trunk\opal\class\opal_free_list.c:20:
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/opal/include/opal_config_bottom.h:561:0: 
<br>
warning: &quot;PF_UNSPEC&quot; redefined
<br>
c:\mingw\bin\../lib/gcc/mingw32/4.5.2/../../../../include/winsock2.h:368:0: 
<br>
note: this is the location of the previous definition
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/opal/include/opal_config_bottom.h:564:0: 
<br>
warning: &quot;AF_INET6&quot; redefined
<br>
c:\mingw\bin\../lib/gcc/mingw32/4.5.2/../../../../include/winsock2.h:329:0: 
<br>
note: this is the location of the previous definition
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/opal/include/opal_config_bottom.h:567:0: 
<br>
warning: &quot;PF_INET6&quot; redefined
<br>
c:\mingw\bin\../lib/gcc/mingw32/4.5.2/../../../../include/winsock2.h:392:0: 
<br>
note: this is the location of the previous definition
<br>
In file included from 
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/opal/class/opal_free_list.h:25:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from 
<br>
C:\winsame\builds-mingw\facetsall-mingw\ompi-trunk\opal\class\opal_free_list.c:22:
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/opal/threads/condition.h:116:57: 
<br>
warning: 'struct timespec' declared inside parameter list
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/opal/threads/condition.h:116:57: 
<br>
warning: its scope is only this definition or declaration, which is 
<br>
probably not what you want
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/opal/threads/condition.h: 
<br>
In function 'opal_condition_timedwait':
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/opal/threads/condition.h:140:34: 
<br>
error: dereferencing pointer to incomplete type
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/opal/threads/condition.h:141:35: 
<br>
error: dereferencing pointer to incomplete type
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/opal/threads/condition.h:155:34: 
<br>
error: dereferencing pointer to incomplete type
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/opal/threads/condition.h:156:35: 
<br>
error: dereferencing pointer to incomplete type
<br>
command failed with exit code 1
<br>
In file included from 
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/try/opal/include/opal_config.h:1495:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from 
<br>
C:\winsame\builds-mingw\facetsall-mingw\ompi-trunk\opal\class\opal_hash_table.c:19:
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/opal/include/opal_config_bottom.h:561:0: 
<br>
warning: &quot;PF_UNSPEC&quot; redefined
<br>
c:\mingw\bin\../lib/gcc/mingw32/4.5.2/../../../../include/winsock2.h:368:0: 
<br>
note: this is the location of the previous definition
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/opal/include/opal_config_bottom.h:564:0: 
<br>
warning: &quot;AF_INET6&quot; redefined
<br>
c:\mingw\bin\../lib/gcc/mingw32/4.5.2/../../../../include/winsock2.h:329:0: 
<br>
note: this is the location of the previous definition
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/opal/include/opal_config_bottom.h:567:0: 
<br>
warning: &quot;PF_INET6&quot; redefined
<br>
c:\mingw\bin\../lib/gcc/mingw32/4.5.2/../../../../include/winsock2.h:392:0: 
<br>
note: this is the location of the previous definition
<br>
In file included from 
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/try/opal/include/opal_config.h:1495:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from 
<br>
C:\winsame\builds-mingw\facetsall-mingw\ompi-trunk\opal\asm\asm.c:19:
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/opal/include/opal_config_bottom.h:561:0: 
<br>
warning: &quot;PF_UNSPEC&quot; redefined
<br>
c:\mingw\bin\../lib/gcc/mingw32/4.5.2/../../../../include/winsock2.h:368:0: 
<br>
note: this is the location of the previous definition
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/opal/include/opal_config_bottom.h:564:0: 
<br>
warning: &quot;AF_INET6&quot; redefined
<br>
c:\mingw\bin\../lib/gcc/mingw32/4.5.2/../../../../include/winsock2.h:329:0: 
<br>
note: this is the location of the previous definition
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/opal/include/opal_config_bottom.h:567:0: 
<br>
warning: &quot;PF_INET6&quot; redefined
<br>
c:\mingw\bin\../lib/gcc/mingw32/4.5.2/../../../../include/winsock2.h:392:0: 
<br>
note: this is the location of the previous definition
<br>
In file included from 
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/try/opal/include/opal_config.h:1495:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from 
<br>
C:\winsame\builds-mingw\facetsall-mingw\ompi-trunk\opal\class\opal_bitmap.c:21:
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/opal/include/opal_config_bottom.h:561:0: 
<br>
warning: &quot;PF_UNSPEC&quot; redefined
<br>
c:\mingw\bin\../lib/gcc/mingw32/4.5.2/../../../../include/winsock2.h:368:0: 
<br>
note: this is the location of the previous definition
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/opal/include/opal_config_bottom.h:564:0: 
<br>
warning: &quot;AF_INET6&quot; redefined
<br>
c:\mingw\bin\../lib/gcc/mingw32/4.5.2/../../../../include/winsock2.h:329:0: 
<br>
note: this is the location of the previous definition
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/opal/include/opal_config_bottom.h:567:0: 
<br>
warning: &quot;PF_INET6&quot; redefined
<br>
c:\mingw\bin\../lib/gcc/mingw32/4.5.2/../../../../include/winsock2.h:392:0: 
<br>
note: this is the location of the previous definition
<br>
In file included from 
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/try/opal/include/opal_config.h:1495:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from 
<br>
C:\winsame\builds-mingw\facetsall-mingw\ompi-trunk\opal\class\opal_list.c:20:
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/opal/include/opal_config_bottom.h:561:0: 
<br>
warning: &quot;PF_UNSPEC&quot; redefined
<br>
c:\mingw\bin\../lib/gcc/mingw32/4.5.2/../../../../include/winsock2.h:368:0: 
<br>
note: this is the location of the previous definition
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/opal/include/opal_config_bottom.h:564:0: 
<br>
warning: &quot;AF_INET6&quot; redefined
<br>
c:\mingw\bin\../lib/gcc/mingw32/4.5.2/../../../../include/winsock2.h:329:0: 
<br>
note: this is the location of the previous definition
<br>
C:/winsame/builds-mingw/facetsall-mingw/ompi-trunk/opal/include/opal_config_bottom.h:567:0: 
<br>
warning: &quot;PF_INET6&quot; redefined
<br>
c:\mingw\bin\../lib/gcc/mingw32/4.5.2/../../../../include/winsock2.h:392:0: 
<br>
note: this is the location of the previous definition
<br>
<p><p>Should I configure differently?
<br>
<p>Thx...John
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17804.php">Mudassar Majeed: "Re: [OMPI users] UDP like messaging with MPI"</a>
<li><strong>Previous message:</strong> <a href="17802.php">Jeff Squyres: "Re: [OMPI users] UDP like messaging with MPI"</a>
<li><strong>In reply to:</strong> <a href="17798.php">Shiqing Fan: "Re: [OMPI users] openmpi and mingw32?"</a>
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
