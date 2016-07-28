<?
$subject_val = "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 12 19:36:56 2012" -->
<!-- isoreceived="20120113003656" -->
<!-- sent="Thu, 12 Jan 2012 17:36:50 -0700" -->
<!-- isosent="20120113003650" -->
<!-- name="Andrew Helwer" -->
<!-- email="Andrew.Helwer_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux" -->
<!-- id="AD3E5D661CED404A842D89A45C87D566332808D9F8_at_axe-post.Acceleware.local" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20120112233756.GD4233_at_type.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux<br>
<strong>From:</strong> Andrew Helwer (<em>Andrew.Helwer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-12 19:36:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0510.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>Previous message:</strong> <a href="0508.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>In reply to:</strong> <a href="0508.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0510.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It fails with the following:
<br>
<p>C:\hwloc-asdf&gt;make
<br>
Making all in src
<br>
make[1]: Entering directory `/cygdrive/c/hwloc-asdf/src'
<br>
&nbsp;&nbsp;CC     topology.lo
<br>
&nbsp;&nbsp;CC     traversal.lo
<br>
&nbsp;&nbsp;CC     distances.lo
<br>
&nbsp;&nbsp;CC     topology-synthetic.lo
<br>
&nbsp;&nbsp;CC     topology-xml.lo
<br>
&nbsp;&nbsp;CC     bind.lo
<br>
&nbsp;&nbsp;CC     cpuset.lo
<br>
&nbsp;&nbsp;CC     misc.lo
<br>
&nbsp;&nbsp;CC     topology-windows.lo
<br>
topology-windows.c: In function 'hwloc_win_get_VirtualAllocExNumaProc':
<br>
topology-windows.c:323:30: warning: assignment from incompatible pointer type [e
<br>
nabled by default]
<br>
topology-windows.c:328:28: warning: assignment from incompatible pointer type [e
<br>
nabled by default]
<br>
topology-windows.c: In function 'hwloc_look_windows':
<br>
topology-windows.c:469:36: warning: assignment from incompatible pointer type [e
<br>
nabled by default]
<br>
topology-windows.c:470:38: warning: assignment from incompatible pointer type [e
<br>
nabled by default]
<br>
&nbsp;&nbsp;CCLD   libhwloc.la
<br>
<p>*** Warning: linker path does not have real file for library -lgdi32.
<br>
*** I have the capability to make that library automatically link in when
<br>
*** you link to this library.  But I can only do this if you have a
<br>
*** shared version of the library, which you do not appear to have
<br>
*** because I did check the linker path looking for a file starting
<br>
*** with libgdi32 and none of the candidates passed a file format test
<br>
*** using a file magic. Last file checked: /usr/lib/w32api/libgdi32.a
<br>
*** The inter-library dependencies that have been dropped here will be
<br>
*** automatically added whenever a program is linked with this library
<br>
*** or is declared to -dlopen it.
<br>
<p>*** Since this library must not contain undefined symbols,
<br>
*** because either the platform does not support them or
<br>
*** it was explicitly requested with -no-undefined,
<br>
*** libtool will only create a static version of it.
<br>
copying selected object files to avoid basename conflicts...
<br>
gcc -I/cygdrive/c/hwloc-asdf/include -I/cygdrive/c/hwloc-asdf/include -I/cygdriv
<br>
e/c/hwloc-asdf/include    dolib.c   -o dolib
<br>
./dolib &quot;/cygdrive/c/Program Files (x86)/Microsoft Visual Studio 10.0/VC/bin/lib
<br>
&quot; X86 .libs/libhwloc.def libhwloc- .libs/libhwloc.lib
<br>
The system cannot find the path specified.
<br>
&quot;/cygdrive/c/Program Files (x86)/Microsoft Visual Studio 10.0/VC/bin/lib&quot; /machi
<br>
ne:X86 /def:.libs/libhwloc.def /name:libhwloc- /out:.libs/libhwloc.lib failed
<br>
Makefile:758: recipe for target `.libs/libhwloc.lib' failed
<br>
make[1]: *** [.libs/libhwloc.lib] Error 1
<br>
make[1]: Leaving directory `/cygdrive/c/hwloc-asdf/src'
<br>
Makefile:450: recipe for target `all-recursive' failed
<br>
make: *** [all-recursive] Error 1
<br>
<p>Andrew
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: hwloc-users-bounces_at_[hidden] [mailto:hwloc-users-
</span><br>
<span class="quotelev1">&gt; bounces_at_[hidden]] On Behalf Of Samuel Thibault
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, January 12, 2012 4:38 PM
</span><br>
<span class="quotelev1">&gt; To: Hardware locality user list
</span><br>
<span class="quotelev1">&gt; Subject: Re: [hwloc-users] Compiling hwloc into a static library on
</span><br>
<span class="quotelev1">&gt; Windows and Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrew Helwer, le Fri 13 Jan 2012 00:11:45 +0100, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; In mingw terms, .lib is meant for dynamic linking, not static
</span><br>
<span class="quotelev1">&gt; linking.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the .a file is meant for static linking.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; How can I get it to create a static windows lib?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Passing --enable-static to ./configure should do it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0510.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>Previous message:</strong> <a href="0508.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>In reply to:</strong> <a href="0508.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0510.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
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
