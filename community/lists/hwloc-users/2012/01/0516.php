<?
$subject_val = "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 13 12:17:57 2012" -->
<!-- isoreceived="20120113171757" -->
<!-- sent="Fri, 13 Jan 2012 10:17:52 -0700" -->
<!-- isosent="20120113171752" -->
<!-- name="Andrew Helwer" -->
<!-- email="Andrew.Helwer_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux" -->
<!-- id="AD3E5D661CED404A842D89A45C87D566332808DA1D_at_axe-post.Acceleware.local" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20120113171620.GA4399_at_type.famille.thibault.fr" -->
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
<strong>Date:</strong> 2012-01-13 12:17:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0517.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>Previous message:</strong> <a href="0515.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>In reply to:</strong> <a href="0515.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0517.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Z:\WORKSPACE\hello-hwloc&gt;scons
<br>
scons: Reading SConscript files ...
<br>
scons: done reading SConscript files.
<br>
scons: Building targets ...
<br>
link /nologo /OUT:test.exe /LIBPATH:lib libhwloc.lib main.obj
<br>
libhwloc.lib(topology.o) : warning LNK4217: locally defined symbol __iob_func im
<br>
ported in function hwloc_report_os_error
<br>
libhwloc.lib(distances.o) : warning LNK4049: locally defined symbol __iob_func i
<br>
mported
<br>
libhwloc.lib(topology-synthetic.o) : warning LNK4049: locally defined symbol __i
<br>
ob_func imported
<br>
libhwloc.lib(topology-xml.o) : warning LNK4049: locally defined symbol __iob_fun
<br>
c imported
<br>
libhwloc.lib(topology-windows.o) : warning LNK4049: locally defined symbol _errn
<br>
o imported
<br>
libhwloc.lib(misc.o) : warning LNK4049: locally defined symbol _errno imported
<br>
libhwloc.lib(topology.o) : warning LNK4217: locally defined symbol _errno import
<br>
ed in function hwloc_level_filter_objects
<br>
libhwloc.lib(bind.o) : warning LNK4049: locally defined symbol _errno imported
<br>
libhwloc.lib(distances.o) : warning LNK4049: locally defined symbol _errno impor
<br>
ted
<br>
libhwloc.lib(topology-synthetic.o) : warning LNK4049: locally defined symbol _er
<br>
rno imported
<br>
libhwloc.lib(traversal.o) : warning LNK4217: locally defined symbol _stricmp imp
<br>
orted in function hwloc_obj_type_of_string
<br>
libhwloc.lib(misc.o) : warning LNK4217: locally defined symbol tolower imported
<br>
in function hwloc_namecoloncmp
<br>
libhwloc.lib(cpuset.o) : error LNK2019: unresolved external symbol __popcountdi2
<br>
&nbsp;referenced in function hwloc_weight_long
<br>
libhwloc.lib(traversal.o) : error LNK2019: unresolved external symbol __ms_vsnpr
<br>
intf referenced in function snprintf
<br>
libhwloc.lib(distances.o) : error LNK2001: unresolved external symbol __ms_vsnpr
<br>
intf
<br>
libhwloc.lib(misc.o) : error LNK2001: unresolved external symbol __ms_vsnprintf
<br>
libhwloc.lib(topology-xml.o) : error LNK2019: unresolved external symbol strtoul
<br>
l referenced in function hwloc__xml_import_object_attr
<br>
libhwloc.lib(topology-windows.o) : error LNK2019: unresolved external symbol ___
<br>
chkstk_ms referenced in function hwloc_win_get_area_membind
<br>
test.exe : fatal error LNK1120: 4 unresolved externals
<br>
scons: *** [test.exe] Error 1120
<br>
scons: building terminated because of errors.
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: hwloc-users-bounces_at_[hidden] [mailto:hwloc-users-
</span><br>
<span class="quotelev1">&gt; bounces_at_[hidden]] On Behalf Of Samuel Thibault
</span><br>
<span class="quotelev1">&gt; Sent: Friday, January 13, 2012 10:16 AM
</span><br>
<span class="quotelev1">&gt; To: Hardware locality user list
</span><br>
<span class="quotelev1">&gt; Subject: Re: [hwloc-users] Compiling hwloc into a static library on
</span><br>
<span class="quotelev1">&gt; Windows and Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrew Helwer, le Fri 13 Jan 2012 18:09:11 +0100, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; You can perhaps try to rename it into a .lib file and give that to
</span><br>
<span class="quotelev1">&gt; VS.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Didn't work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What errors do you get?
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
<li><strong>Next message:</strong> <a href="0517.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>Previous message:</strong> <a href="0515.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>In reply to:</strong> <a href="0515.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0517.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
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
