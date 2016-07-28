<?
$subject_val = "[OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 22 10:54:41 2011" -->
<!-- isoreceived="20111222155441" -->
<!-- sent="Thu, 22 Dec 2011 10:54:35 -0500" -->
<!-- isosent="20111222155435" -->
<!-- name="Roger Martin" -->
<!-- email="roger_at_[hidden]" -->
<!-- subject="[OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3" -->
<!-- id="4EF352BB.9070704_at_quantumbioinc.com" -->
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
<strong>Subject:</strong> [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3<br>
<strong>From:</strong> Roger Martin (<em>roger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-22 10:54:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18043.php">Paul Kapinos: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<li><strong>Previous message:</strong> <a href="18041.php">Roger Martin: "[OMPI users] OMPI_C_DEF_PRE not set for MinGW build setup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18066.php">Shiqing Fan: "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
<li><strong>Reply:</strong> <a href="18066.php">Shiqing Fan: "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Working on building on windows with MinGW.  Have built libopen-pal, 
<br>
opal-restart, opal-wrapper and am at the open-rte stage of the build.
<br>
The  OBJ_CLASS_INSTANCE hits errors about 'initializer element is not 
<br>
constant'. Open-pal also uses OBJ_CLASS_INSTANCE and doesn't throw this 
<br>
error.
<br>
Tried g++ instead of gcc and source such as rmcast_base_open.c compiled 
<br>
successfully but then I get into name mangling issues.
<br>
<p>Being not familiar with the code I haven't yet determined why open-pal 
<br>
is successful and open-rte isn't.  Flag difference?  Is there code 
<br>
difference between them in how they apply the OBJ_CLASS_INSTANCE?
<br>
<p>$ ../../mingw64/bin/gcc.exe --version
<br>
gcc.exe (GCC) 4.6.3 20111105 (prerelease)
<br>
<p>..............line 325 of 
<br>
rmcast_base_open.c.........................................
<br>
&nbsp;&nbsp;OBJ_CLASS_INSTANCE(rmcast_base_send_t,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_list_item_t,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;send_construct,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;send_destruct);
<br>
............
<br>
<p>C:\Software\openmpi-build&gt;gmake
<br>
[ 14%] Built target libopen-pal
<br>
[ 14%] Built target opal-restart
<br>
[ 14%] Built target opal-wrapper
<br>
[ 14%] Building C object 
<br>
orte/CMakeFiles/libopen-rte.dir/mca/rmcast/base/rmcast_
<br>
base_open.obj
<br>
C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:325:1: 
<br>
erro
<br>
r: initializer element is not constant
<br>
C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:325:1: 
<br>
erro
<br>
r: (near initialization for 'rmcast_base_send_t_class.cls_parent')
<br>
C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:363:1: 
<br>
erro
<br>
r: initializer element is not constant
<br>
C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:363:1: 
<br>
erro
<br>
r: (near initialization for 'rmcast_base_recv_t_class.cls_parent')
<br>
C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:403:1: 
<br>
erro
<br>
r: initializer element is not constant
<br>
C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:403:1: 
<br>
erro
<br>
r: (near initialization for 'rmcast_base_channel_t_class.cls_parent')
<br>
C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:413:1: 
<br>
erro
<br>
r: initializer element is not constant
<br>
C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:413:1: 
<br>
erro
<br>
r: (near initialization for 'rmcast_seq_tracker_t_class.cls_parent')
<br>
C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:434:1: 
<br>
erro
<br>
r: initializer element is not constant
<br>
C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:434:1: 
<br>
erro
<br>
r: (near initialization for 'rmcast_recv_log_t_class.cls_parent')
<br>
C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:451:1: 
<br>
erro
<br>
r: initializer element is not constant
<br>
C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:451:1: 
<br>
erro
<br>
r: (near initialization for 'rmcast_send_log_t_class.cls_parent')
<br>
C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:466:1: 
<br>
erro
<br>
r: initializer element is not constant
<br>
C:\Software\openmpi-1.5.5rc1\orte\mca\rmcast\base\rmcast_base_open.c:466:1: 
<br>
erro
<br>
r: (near initialization for 'orte_rmcast_msg_t_class.cls_parent')
<br>
gmake[2]: *** 
<br>
[orte/CMakeFiles/libopen-rte.dir/mca/rmcast/base/rmcast_base_open.
<br>
obj] Error 1
<br>
gmake[1]: *** [orte/CMakeFiles/libopen-rte.dir/all] Error 2
<br>
gmake: *** [all] Error 2
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18043.php">Paul Kapinos: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<li><strong>Previous message:</strong> <a href="18041.php">Roger Martin: "[OMPI users] OMPI_C_DEF_PRE not set for MinGW build setup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18066.php">Shiqing Fan: "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
<li><strong>Reply:</strong> <a href="18066.php">Shiqing Fan: "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
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
