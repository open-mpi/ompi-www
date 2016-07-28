<?
$subject_val = "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 28 18:28:52 2011" -->
<!-- isoreceived="20111228232852" -->
<!-- sent="Wed, 28 Dec 2011 18:28:47 -0500" -->
<!-- isosent="20111228232847" -->
<!-- name="Roger Martin" -->
<!-- email="roger_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3" -->
<!-- id="4EFBA62F.3080406_at_quantumbioinc.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EFBA2FE.3040300_at_hlrs.de" -->
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
<strong>From:</strong> Roger Martin (<em>roger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-28 18:28:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18068.php">Venkateswara Rao Dokku: "[OMPI users] Problems when running open-MPI on OFED"</a>
<li><strong>Previous message:</strong> <a href="18066.php">Shiqing Fan: "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
<li><strong>In reply to:</strong> <a href="18066.php">Shiqing Fan: "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18072.php">Shiqing Fan: "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
<li><strong>Reply:</strong> <a href="18072.php">Shiqing Fan: "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Shiqing,
<br>
<p>I was able to build the open-rte and the rest by applying g++.exe 
<br>
instead of gcc.exe.  I couldn't find any combination of --std=C9x to 
<br>
make the c compiling happy for gcc.exe.
<br>
<p>For open-rte build I ran into issues with opal_ifisloopback impl 
<br>
unreferenced.  I'll regenerate my steps and post more discrete pieces.
<br>
<p>Regards,
<br>
Roger
<br>
<p><p>On 12/28/2011 06:15 PM, Shiqing Fan wrote:
<br>
<span class="quotelev1">&gt; Hi Roger,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To be honest, this MinGW support for Open MPI was integrated when the 
</span><br>
<span class="quotelev1">&gt; 64 bit MinGW wasn't available, so I haven't tested it for the 64 bit 
</span><br>
<span class="quotelev1">&gt; build. I'll give a try, and come back to you soon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your report.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2011-12-22 4:54 PM, Roger Martin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Working on building on windows with MinGW.  Have built libopen-pal, 
</span><br>
<span class="quotelev2">&gt;&gt; opal-restart, opal-wrapper and am at the open-rte stage of the build.
</span><br>
<span class="quotelev2">&gt;&gt; The  OBJ_CLASS_INSTANCE hits errors about 'initializer element is not 
</span><br>
<span class="quotelev2">&gt;&gt; constant'. Open-pal also uses OBJ_CLASS_INSTANCE and doesn't throw 
</span><br>
<span class="quotelev2">&gt;&gt; this error.
</span><br>
<span class="quotelev2">&gt;&gt; Tried g++ instead of gcc and source such as rmcast_base_open.c 
</span><br>
<span class="quotelev2">&gt;&gt; compiled successfully but then I get into name mangling issues.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Being not familiar with the code I haven't yet determined why 
</span><br>
<span class="quotelev2">&gt;&gt; open-pal is successful and open-rte isn't.  Flag difference?  Is 
</span><br>
<span class="quotelev2">&gt;&gt; there code difference between them in how they apply the 
</span><br>
<span class="quotelev2">&gt;&gt; OBJ_CLASS_INSTANCE?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ ../../mingw64/bin/gcc.exe --version
</span><br>
<span class="quotelev2">&gt;&gt; gcc.exe (GCC) 4.6.3 20111105 (prerelease)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ..............line 325 of 
</span><br>
<span class="quotelev2">&gt;&gt; rmcast_base_open.c.........................................
</span><br>
<span class="quotelev2">&gt;&gt;  OBJ_CLASS_INSTANCE(rmcast_base_send_t,
</span><br>
<span class="quotelev2">&gt;&gt;                    opal_list_item_t,
</span><br>
<span class="quotelev2">&gt;&gt;                    send_construct,
</span><br>
<span class="quotelev2">&gt;&gt;                    send_destruct);
</span><br>
<span class="quotelev2">&gt;&gt; ............
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; C:\Software\openmpi-build&gt;gmake
</span><br>
<span class="quotelev2">&gt;&gt; [ 14%] Built target libopen-pal
</span><br>
<span class="quotelev2">&gt;&gt; [ 14%] Built target opal-restart
</span><br>
<span class="quotelev2">&gt;&gt; [ 14%] Built target opal-wrapper
</span><br>
<span class="quotelev2">&gt;&gt; [ 14%] Building C object 
</span><br>
<span class="quotelev2">&gt;&gt; orte/CMakeFiles/libopen-rte.dir/mca/rmcast/base/rmcast_
</span><br>
<span class="quotelev2">&gt;&gt; base_open.obj
</span><br>
<span class="quotelev2">&gt;&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:325:1: 
</span><br>
<span class="quotelev2">&gt;&gt; erro
</span><br>
<span class="quotelev2">&gt;&gt; r: initializer element is not constant
</span><br>
<span class="quotelev2">&gt;&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:325:1: 
</span><br>
<span class="quotelev2">&gt;&gt; erro
</span><br>
<span class="quotelev2">&gt;&gt; r: (near initialization for 'rmcast_base_send_t_class.cls_parent')
</span><br>
<span class="quotelev2">&gt;&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:363:1: 
</span><br>
<span class="quotelev2">&gt;&gt; erro
</span><br>
<span class="quotelev2">&gt;&gt; r: initializer element is not constant
</span><br>
<span class="quotelev2">&gt;&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:363:1: 
</span><br>
<span class="quotelev2">&gt;&gt; erro
</span><br>
<span class="quotelev2">&gt;&gt; r: (near initialization for 'rmcast_base_recv_t_class.cls_parent')
</span><br>
<span class="quotelev2">&gt;&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:403:1: 
</span><br>
<span class="quotelev2">&gt;&gt; erro
</span><br>
<span class="quotelev2">&gt;&gt; r: initializer element is not constant
</span><br>
<span class="quotelev2">&gt;&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:403:1: 
</span><br>
<span class="quotelev2">&gt;&gt; erro
</span><br>
<span class="quotelev2">&gt;&gt; r: (near initialization for 'rmcast_base_channel_t_class.cls_parent')
</span><br>
<span class="quotelev2">&gt;&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:413:1: 
</span><br>
<span class="quotelev2">&gt;&gt; erro
</span><br>
<span class="quotelev2">&gt;&gt; r: initializer element is not constant
</span><br>
<span class="quotelev2">&gt;&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:413:1: 
</span><br>
<span class="quotelev2">&gt;&gt; erro
</span><br>
<span class="quotelev2">&gt;&gt; r: (near initialization for 'rmcast_seq_tracker_t_class.cls_parent')
</span><br>
<span class="quotelev2">&gt;&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:434:1: 
</span><br>
<span class="quotelev2">&gt;&gt; erro
</span><br>
<span class="quotelev2">&gt;&gt; r: initializer element is not constant
</span><br>
<span class="quotelev2">&gt;&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:434:1: 
</span><br>
<span class="quotelev2">&gt;&gt; erro
</span><br>
<span class="quotelev2">&gt;&gt; r: (near initialization for 'rmcast_recv_log_t_class.cls_parent')
</span><br>
<span class="quotelev2">&gt;&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:451:1: 
</span><br>
<span class="quotelev2">&gt;&gt; erro
</span><br>
<span class="quotelev2">&gt;&gt; r: initializer element is not constant
</span><br>
<span class="quotelev2">&gt;&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:451:1: 
</span><br>
<span class="quotelev2">&gt;&gt; erro
</span><br>
<span class="quotelev2">&gt;&gt; r: (near initialization for 'rmcast_send_log_t_class.cls_parent')
</span><br>
<span class="quotelev2">&gt;&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:466:1: 
</span><br>
<span class="quotelev2">&gt;&gt; erro
</span><br>
<span class="quotelev2">&gt;&gt; r: initializer element is not constant
</span><br>
<span class="quotelev2">&gt;&gt; C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:466:1: 
</span><br>
<span class="quotelev2">&gt;&gt; erro
</span><br>
<span class="quotelev2">&gt;&gt; r: (near initialization for 'orte_rmcast_msg_t_class.cls_parent')
</span><br>
<span class="quotelev2">&gt;&gt; gmake[2]: *** 
</span><br>
<span class="quotelev2">&gt;&gt; [orte/CMakeFiles/libopen-rte.dir/mca/rmcast/base/rmcast_base_open.
</span><br>
<span class="quotelev2">&gt;&gt; obj] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; gmake[1]: *** [orte/CMakeFiles/libopen-rte.dir/all] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; gmake: *** [all] Error 2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18068.php">Venkateswara Rao Dokku: "[OMPI users] Problems when running open-MPI on OFED"</a>
<li><strong>Previous message:</strong> <a href="18066.php">Shiqing Fan: "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
<li><strong>In reply to:</strong> <a href="18066.php">Shiqing Fan: "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18072.php">Shiqing Fan: "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
<li><strong>Reply:</strong> <a href="18072.php">Shiqing Fan: "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
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
