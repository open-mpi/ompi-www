<?
$subject_val = "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 28 18:15:16 2011" -->
<!-- isoreceived="20111228231516" -->
<!-- sent="Thu, 29 Dec 2011 00:15:10 +0100" -->
<!-- isosent="20111228231510" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3" -->
<!-- id="4EFBA2FE.3040300_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EF352BB.9070704_at_quantumbioinc.com" -->
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
<strong>Date:</strong> 2011-12-28 18:15:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18067.php">Roger Martin: "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
<li><strong>Previous message:</strong> <a href="18065.php">Sabela Ramos Garea: "Re: [OMPI users] MPI 2 support in sm btl"</a>
<li><strong>In reply to:</strong> <a href="18042.php">Roger Martin: "[OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18067.php">Roger Martin: "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
<li><strong>Reply:</strong> <a href="18067.php">Roger Martin: "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Roger,
<br>
<p>To be honest, this MinGW support for Open MPI was integrated when the 64 
<br>
bit MinGW wasn't available, so I haven't tested it for the 64 bit build. 
<br>
I'll give a try, and come back to you soon.
<br>
<p>Thanks for your report.
<br>
<p>Regards,
<br>
Shiqing
<br>
<p>On 2011-12-22 4:54 PM, Roger Martin wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Working on building on windows with MinGW.  Have built libopen-pal, 
</span><br>
<span class="quotelev1">&gt; opal-restart, opal-wrapper and am at the open-rte stage of the build.
</span><br>
<span class="quotelev1">&gt; The  OBJ_CLASS_INSTANCE hits errors about 'initializer element is not 
</span><br>
<span class="quotelev1">&gt; constant'. Open-pal also uses OBJ_CLASS_INSTANCE and doesn't throw 
</span><br>
<span class="quotelev1">&gt; this error.
</span><br>
<span class="quotelev1">&gt; Tried g++ instead of gcc and source such as rmcast_base_open.c 
</span><br>
<span class="quotelev1">&gt; compiled successfully but then I get into name mangling issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Being not familiar with the code I haven't yet determined why open-pal 
</span><br>
<span class="quotelev1">&gt; is successful and open-rte isn't.  Flag difference?  Is there code 
</span><br>
<span class="quotelev1">&gt; difference between them in how they apply the OBJ_CLASS_INSTANCE?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ../../mingw64/bin/gcc.exe --version
</span><br>
<span class="quotelev1">&gt; gcc.exe (GCC) 4.6.3 20111105 (prerelease)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ..............line 325 of 
</span><br>
<span class="quotelev1">&gt; rmcast_base_open.c.........................................
</span><br>
<span class="quotelev1">&gt;  OBJ_CLASS_INSTANCE(rmcast_base_send_t,
</span><br>
<span class="quotelev1">&gt;                    opal_list_item_t,
</span><br>
<span class="quotelev1">&gt;                    send_construct,
</span><br>
<span class="quotelev1">&gt;                    send_destruct);
</span><br>
<span class="quotelev1">&gt; ............
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C:\Software\openmpi-build&gt;gmake
</span><br>
<span class="quotelev1">&gt; [ 14%] Built target libopen-pal
</span><br>
<span class="quotelev1">&gt; [ 14%] Built target opal-restart
</span><br>
<span class="quotelev1">&gt; [ 14%] Built target opal-wrapper
</span><br>
<span class="quotelev1">&gt; [ 14%] Building C object 
</span><br>
<span class="quotelev1">&gt; orte/CMakeFiles/libopen-rte.dir/mca/rmcast/base/rmcast_
</span><br>
<span class="quotelev1">&gt; base_open.obj
</span><br>
<span class="quotelev1">&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:325:1: 
</span><br>
<span class="quotelev1">&gt; erro
</span><br>
<span class="quotelev1">&gt; r: initializer element is not constant
</span><br>
<span class="quotelev1">&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:325:1: 
</span><br>
<span class="quotelev1">&gt; erro
</span><br>
<span class="quotelev1">&gt; r: (near initialization for 'rmcast_base_send_t_class.cls_parent')
</span><br>
<span class="quotelev1">&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:363:1: 
</span><br>
<span class="quotelev1">&gt; erro
</span><br>
<span class="quotelev1">&gt; r: initializer element is not constant
</span><br>
<span class="quotelev1">&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:363:1: 
</span><br>
<span class="quotelev1">&gt; erro
</span><br>
<span class="quotelev1">&gt; r: (near initialization for 'rmcast_base_recv_t_class.cls_parent')
</span><br>
<span class="quotelev1">&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:403:1: 
</span><br>
<span class="quotelev1">&gt; erro
</span><br>
<span class="quotelev1">&gt; r: initializer element is not constant
</span><br>
<span class="quotelev1">&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:403:1: 
</span><br>
<span class="quotelev1">&gt; erro
</span><br>
<span class="quotelev1">&gt; r: (near initialization for 'rmcast_base_channel_t_class.cls_parent')
</span><br>
<span class="quotelev1">&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:413:1: 
</span><br>
<span class="quotelev1">&gt; erro
</span><br>
<span class="quotelev1">&gt; r: initializer element is not constant
</span><br>
<span class="quotelev1">&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:413:1: 
</span><br>
<span class="quotelev1">&gt; erro
</span><br>
<span class="quotelev1">&gt; r: (near initialization for 'rmcast_seq_tracker_t_class.cls_parent')
</span><br>
<span class="quotelev1">&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:434:1: 
</span><br>
<span class="quotelev1">&gt; erro
</span><br>
<span class="quotelev1">&gt; r: initializer element is not constant
</span><br>
<span class="quotelev1">&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:434:1: 
</span><br>
<span class="quotelev1">&gt; erro
</span><br>
<span class="quotelev1">&gt; r: (near initialization for 'rmcast_recv_log_t_class.cls_parent')
</span><br>
<span class="quotelev1">&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:451:1: 
</span><br>
<span class="quotelev1">&gt; erro
</span><br>
<span class="quotelev1">&gt; r: initializer element is not constant
</span><br>
<span class="quotelev1">&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:451:1: 
</span><br>
<span class="quotelev1">&gt; erro
</span><br>
<span class="quotelev1">&gt; r: (near initialization for 'rmcast_send_log_t_class.cls_parent')
</span><br>
<span class="quotelev1">&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:466:1: 
</span><br>
<span class="quotelev1">&gt; erro
</span><br>
<span class="quotelev1">&gt; r: initializer element is not constant
</span><br>
<span class="quotelev1">&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:466:1: 
</span><br>
<span class="quotelev1">&gt; erro
</span><br>
<span class="quotelev1">&gt; r: (near initialization for 'orte_rmcast_msg_t_class.cls_parent')
</span><br>
<span class="quotelev1">&gt; gmake[2]: *** 
</span><br>
<span class="quotelev1">&gt; [orte/CMakeFiles/libopen-rte.dir/mca/rmcast/base/rmcast_base_open.
</span><br>
<span class="quotelev1">&gt; obj] Error 1
</span><br>
<span class="quotelev1">&gt; gmake[1]: *** [orte/CMakeFiles/libopen-rte.dir/all] Error 2
</span><br>
<span class="quotelev1">&gt; gmake: *** [all] Error 2
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
<li><strong>Next message:</strong> <a href="18067.php">Roger Martin: "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
<li><strong>Previous message:</strong> <a href="18065.php">Sabela Ramos Garea: "Re: [OMPI users] MPI 2 support in sm btl"</a>
<li><strong>In reply to:</strong> <a href="18042.php">Roger Martin: "[OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18067.php">Roger Martin: "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
<li><strong>Reply:</strong> <a href="18067.php">Roger Martin: "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
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
