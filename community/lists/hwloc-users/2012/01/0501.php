<?
$subject_val = "Re: [hwloc-users] Compiling hwloc into a static library on Windows	and Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 11 20:12:32 2012" -->
<!-- isoreceived="20120112011232" -->
<!-- sent="Wed, 11 Jan 2012 18:12:25 -0700" -->
<!-- isosent="20120112011225" -->
<!-- name="Andrew Helwer" -->
<!-- email="Andrew.Helwer_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Compiling hwloc into a static library on Windows	and Linux" -->
<!-- id="AD3E5D661CED404A842D89A45C87D566332808D995_at_axe-post.Acceleware.local" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AED5A7E3-7CBA-439B-8B63-7DAB0D5EAD1C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Compiling hwloc into a static library on Windows	and Linux<br>
<strong>From:</strong> Andrew Helwer (<em>Andrew.Helwer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-11 20:12:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0502.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>Previous message:</strong> <a href="0500.php">Jeff Squyres: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>In reply to:</strong> <a href="0500.php">Jeff Squyres: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0502.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; To be clear: I think you're misunderstanding what --enable-embedded-
</span><br>
<span class="quotelev1">&gt; mode is for.  Per Samuel's comment, I think you want --enable-static
</span><br>
<span class="quotelev1">&gt; (and possibly --disable-shared).
</span><br>
<p>Ah yes, I was misunderstanding the purpose of --enable-embedded-mode. I understand now, and also use the --enable-static and --disable-shared flags. I have been able to successfully compile into only a static library with headers on Linux, but Windows is still giving me some trouble.
<br>
<p>I've installed MinGW and Cygwin, and specified HWLOC_MS_LIB as the path to the VS lib tool when running configure. Make works just fine (although the include directory isn't set properly, but that's easy to work around) until the Windows library linking stage:
<br>
<p>C:\hwloc-1.3.1&gt;make
<br>
Making all in src
<br>
make[1]: Entering directory `/cygdrive/c/hwloc-1.3.1/src'
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
&nbsp;&nbsp;CCLD   libhwloc_embedded.la
<br>
copying selected object files to avoid basename conflicts...
<br>
&nbsp;&nbsp;CCLD   libhwloc.la
<br>
libtool: link: warning: `-version-info/-version-number' is ignored for convenien
<br>
ce libraries
<br>
copying selected object files to avoid basename conflicts...
<br>
gcc -I/cygdrive/c/hwloc-1.3.1/include -I/cygdrive/c/hwloc-1.3.1/include -I/cygdr
<br>
ive/c/hwloc-1.3.1/include    dolib.c   -o dolib
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
make[1]: Leaving directory `/cygdrive/c/hwloc-1.3.1/src'
<br>
Makefile:450: recipe for target `all-recursive' failed
<br>
make: *** [all-recursive] Error 1
<br>
<p>If I run the command manually, it can't find the libhwloc.def file. Which is reasonable, as it does not appear to exist in the .lib directory. Am I missing something?
<br>
<p>Thanks,
<br>
<p>Andrew Helwer
<br>
Software Developer &#160;- Intern
<br>
Acceleware Ltd. (TSX-V:AXE)
<br>
www.acceleware.com
<br>
<p>Phone: +1.403.249.9099&#160; ext. 348
<br>
Fax: +1.403.249.9881
<br>
Email: andrew.helwer_at_[hidden]
<br>
<p><p>Get&#160;superpowered! 
<br>
Acceleware gets your products to market faster, better and stronger!&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 
<br>
<p><p>This e-mail may contain information that is privileged and confidential and subject to legal restrictions and penalties regarding its unauthorized disclosure or use. You are prohibited from copying, distributing or otherwise using this information if you are not the intended recipient. If you have received this e-mail in error, please notify us immediately by return e-mail and delete this e-mail and its attachments from your system. Thank you.
<br>
&#169; 2012 Acceleware Ltd., All Rights Reserved 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0502.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>Previous message:</strong> <a href="0500.php">Jeff Squyres: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>In reply to:</strong> <a href="0500.php">Jeff Squyres: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0502.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
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
