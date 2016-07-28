<?
$subject_val = "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 29 16:42:01 2011" -->
<!-- isoreceived="20111229214201" -->
<!-- sent="Thu, 29 Dec 2011 22:42:00 +0100" -->
<!-- isosent="20111229214200" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3" -->
<!-- id="4EFCDEA8.5020003_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EFBA62F.3080406_at_quantumbioinc.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-29 16:42:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18073.php">Dmitry N. Mikushin: "[OMPI users] possibly undefined macro: AC_PROG_LIBTOOL"</a>
<li><strong>Previous message:</strong> <a href="18071.php">Josh Hursey: "Re: [OMPI users] segfault when resuming on different host"</a>
<li><strong>In reply to:</strong> <a href="18067.php">Roger Martin: "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Roger,
<br>
<p>Have you tested also with 32 bit build?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was able to build the open-rte and the rest by applying g++.exe 
</span><br>
<span class="quotelev1">&gt; instead of gcc.exe.  I couldn't find any combination of --std=C9x to 
</span><br>
<span class="quotelev1">&gt; make the c compiling happy for gcc.exe.
</span><br>
<p>Actually, the C9x option is not really necessary here, but &quot;-x c&quot; should 
<br>
do the work.  It is defined in the CMake variable OMPI_C_LAN_FLAG, is it 
<br>
also empty in your CMakeCache file?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For open-rte build I ran into issues with opal_ifisloopback impl 
</span><br>
<span class="quotelev1">&gt; unreferenced.  I'll regenerate my steps and post more discrete pieces.
</span><br>
<p>It would be great if you can provide your CMake Config settings and 
<br>
log/cache file. Thanks a lot.
<br>
<p>Regards,
<br>
Shiqing
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Roger
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/28/2011 06:15 PM, Shiqing Fan wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Roger,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To be honest, this MinGW support for Open MPI was integrated when the 
</span><br>
<span class="quotelev2">&gt;&gt; 64 bit MinGW wasn't available, so I haven't tested it for the 64 bit 
</span><br>
<span class="quotelev2">&gt;&gt; build. I'll give a try, and come back to you soon.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your report.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2011-12-22 4:54 PM, Roger Martin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Working on building on windows with MinGW.  Have built libopen-pal, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal-restart, opal-wrapper and am at the open-rte stage of the build.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The  OBJ_CLASS_INSTANCE hits errors about 'initializer element is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not constant'. Open-pal also uses OBJ_CLASS_INSTANCE and doesn't 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; throw this error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tried g++ instead of gcc and source such as rmcast_base_open.c 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiled successfully but then I get into name mangling issues.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Being not familiar with the code I haven't yet determined why 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open-pal is successful and open-rte isn't.  Flag difference?  Is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there code difference between them in how they apply the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OBJ_CLASS_INSTANCE?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ../../mingw64/bin/gcc.exe --version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc.exe (GCC) 4.6.3 20111105 (prerelease)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ..............line 325 of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmcast_base_open.c.........................................
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OBJ_CLASS_INSTANCE(rmcast_base_send_t,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    opal_list_item_t,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    send_construct,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    send_destruct);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ............
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C:\Software\openmpi-build&gt;gmake
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ 14%] Built target libopen-pal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ 14%] Built target opal-restart
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ 14%] Built target opal-wrapper
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ 14%] Building C object 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte/CMakeFiles/libopen-rte.dir/mca/rmcast/base/rmcast_
</span><br>
<span class="quotelev3">&gt;&gt;&gt; base_open.obj
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:325:1: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; erro
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r: initializer element is not constant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:325:1: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; erro
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r: (near initialization for 'rmcast_base_send_t_class.cls_parent')
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:363:1: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; erro
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r: initializer element is not constant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:363:1: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; erro
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r: (near initialization for 'rmcast_base_recv_t_class.cls_parent')
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:403:1: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; erro
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r: initializer element is not constant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:403:1: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; erro
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r: (near initialization for 'rmcast_base_channel_t_class.cls_parent')
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:413:1: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; erro
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r: initializer element is not constant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:413:1: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; erro
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r: (near initialization for 'rmcast_seq_tracker_t_class.cls_parent')
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:434:1: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; erro
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r: initializer element is not constant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:434:1: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; erro
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r: (near initialization for 'rmcast_recv_log_t_class.cls_parent')
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:451:1: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; erro
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r: initializer element is not constant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:451:1: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; erro
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r: (near initialization for 'rmcast_send_log_t_class.cls_parent')
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:466:1: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; erro
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r: initializer element is not constant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:466:1: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; erro
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r: (near initialization for 'orte_rmcast_msg_t_class.cls_parent')
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gmake[2]: *** 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [orte/CMakeFiles/libopen-rte.dir/mca/rmcast/base/rmcast_base_open.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; obj] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gmake[1]: *** [orte/CMakeFiles/libopen-rte.dir/all] Error 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gmake: *** [all] Error 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18073.php">Dmitry N. Mikushin: "[OMPI users] possibly undefined macro: AC_PROG_LIBTOOL"</a>
<li><strong>Previous message:</strong> <a href="18071.php">Josh Hursey: "Re: [OMPI users] segfault when resuming on different host"</a>
<li><strong>In reply to:</strong> <a href="18067.php">Roger Martin: "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
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
