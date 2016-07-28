<?
$subject_val = "[OMPI users] Windows CMake build problems ...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 12 18:40:25 2010" -->
<!-- isoreceived="20100112234025" -->
<!-- sent="Tue, 12 Jan 2010 16:40:18 -0700" -->
<!-- isosent="20100112234018" -->
<!-- name="cjohnson_at_[hidden]" -->
<!-- email="cjohnson_at_[hidden]" -->
<!-- subject="[OMPI users] Windows CMake build problems ..." -->
<!-- id="20100112164018.0430d53b3e916c69cc97ff130928da34.6f6879808f.wbe_at_email02.secureserver.net" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Windows CMake build problems ...<br>
<strong>From:</strong> <a href="mailto:cjohnson_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Windows%20CMake%20build%20problems%20..."><em>cjohnson_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-01-12 18:40:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11747.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ..."</a>
<li><strong>Previous message:</strong> <a href="11745.php">Evan Smyth: "[OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11747.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ..."</a>
<li><strong>Reply:</strong> <a href="11747.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ..."</a>
<li><strong>Maybe reply:</strong> <a href="11886.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ..."</a>
<li><strong>Maybe reply:</strong> <a href="11891.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<body><span style="font-family:Verdana; color:#000000; font-size:10pt;"><div><br>The OpenMPI build problem I'm having occurs in both OpenMPI 1.4 and 1.3.4.<br><br>I am on a Windows 7 (US) Enterprise (x86) OS on an HP system with Intel core 2 extreme x9000 (4GB RAM), using the 2005 Visual Studio for S/W Architects (release 8.0.50727.867). [That release has everything the platform SDK would have.]<br><br>I'm using CMake 2.8 to generate code, I used it correctly, pointing at the root directory where the makelists are located for the source side and to an empty directory for the build side: did configure, click debug, configure again, generate and opened the OpenMPI.sln file created by CMake. Then I right-clicked on the "ALL_BUILD" project and selected "build".</div><div><br></div><div>1 project built, 13 did not. I have the build listing. [I'm afraid of what the mailing list server would do if I attached it to this email.;<br></div><div><br></div><div>The first error in the listing points to source line: C:\prog\openmpi-1.3.4\opal/class/opal_object.h(182),<br><br>After that critical error, the compile falls apart due to it. Here's the section of the listing with the first error in the center:<br><br>1&gt;Generating Code...<br>1&gt;Compiling...<br>1&gt;signal.c<br>1&gt;select.c<br>1&gt;log.c<br>1&gt;evutil.c<br>1&gt;event.c<br>1&gt;win32.c<br>1&gt;c:\prog\openmpi-1.3.4\opal\event\win32-code\./config.h(185) : warning C4005: 'PACKAGE_BUGREPORT' : macro redefinition<br>1&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; c:\prog\mon\opal\include\opal_config.h(1307) : see previous definition of 'PACKAGE_BUGREPORT'<br>1&gt;c:\prog\openmpi-1.3.4\opal\event\win32-code\./config.h(188) : warning C4005: 'PACKAGE_NAME' : macro redefinition<br>1&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; c:\prog\mon\opal\include\opal_config.h(1310) : see previous definition of 'PACKAGE_NAME'<br>1&gt;c:\prog\openmpi-1.3.4\opal\event\win32-code\./config.h(191) : warning C4005: 'PACKAGE_STRING' : macro redefinition<br>1&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; c:\prog\mon\opal\include\opal_config.h(1313) : see previous definition of 'PACKAGE_STRING'<br>1&gt;c:\prog\openmpi-1.3.4\opal\event\win32-code\./config.h(194) : warning C4005: 'PACKAGE_TARNAME' : macro redefinition<br>1&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; c:\prog\mon\opal\include\opal_config.h(1316) : see previous definition of 'PACKAGE_TARNAME'<br>1&gt;c:\prog\openmpi-1.3.4\opal\event\win32-code\./config.h(197) : warning C4005: 'PACKAGE_VERSION' : macro redefinition<br>1&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; c:\prog\mon\opal\include\opal_config.h(1319) : see previous definition of 'PACKAGE_VERSION'<br>1&gt;c:\prog\openmpi-1.3.4\opal\event\win32-code\./config.h(212) : warning C4005: '__func__' : macro redefinition<br>1&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; C:\prog\openmpi-1.3.4\opal\include\opal_config_bottom.h(449) : see previous definition of '__func__'<br><br>****************************** First error in build listing, below:<br>1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(182) : error C2016: C requires that a struct or union has at least one member<br>1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(182) : error C2061: syntax error : identifier '__uint64_t'<br>1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(190) : error C2059: syntax error : '}'<br>1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(248) : error C2037: left of 'obj_magic_id' specifies undefined struct/union 'opal_object_t'<br>1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(249) : error C2037: left of 'cls_init_file_name' specifies undefined struct/union 'opal_object_t'<br>1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(250) : error C2037: left of 'cls_init_lineno' specifies undefined struct/union 'opal_object_t'<br>1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(421) : error C2037: left of 'obj_class' specifies undefined struct/union 'opal_object_t'<br>1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(423) : error C2037: left of 'obj_class' specifies undefined struct/union 'opal_object_t'<br>1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(443) : error C2037: left of 'obj_class' specifies undefined struct/union 'opal_object_t'<br>1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(445) : error C2037: left of 'obj_class' specifies undefined struct/union 'opal_object_t'<br>1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(466) : error C2027: use of undefined type 'opal_object_t'<br>1&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; C:\prog\openmpi-1.3.4\opal/class/opal_object.h(178) : see declaration of 'opal_object_t'<br>1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(473) : error C2037: left of 'obj_class' specifies undefined struct/union 'opal_object_t'<br>1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(474) : error C2037: left of 'obj_reference_count' specifies undefined struct/union 'opal_object_t'<br>1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(497) : error C2037: left of 'obj_reference_count' specifies undefined struct/union 'opal_object_t'<br>1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(498) : error C2037: left of 'obj_reference_count' specifies undefined struct/union 'opal_object_t'<br>1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(498) : warning C4033: 'opal_obj_update' must return a value<br>1&gt;C:\prog\openmpi-1.3.4\opal/util/output.h(99) : error C2079: 'super' uses undefined struct 'opal_object_t'<br><br>Here's the source file section with the error line indicated:<br><br>---&gt; Opal_object.h (lines 173-190)<br><br>/**<br>&nbsp;* For static initializations of OBJects.<br>&nbsp;*<br>&nbsp;* @param NAME&nbsp;&nbsp; Name of the class to initialize<br>&nbsp;*/<br>#if OMPI_ENABLE_DEBUG<br>#define OPAL_OBJ_STATIC_INIT(BASE_CLASS) { OPAL_OBJ_MAGIC_ID, OBJ_CLASS(BASE_CLASS), 1, __FILE__, __LINE__ }<br>#else<br>#define OPAL_OBJ_STATIC_INIT(BASE_CLASS) { OBJ_CLASS(BASE_CLASS), 1 }<br>#endif<br><br>/**<br>&nbsp;* Base object.<br>&nbsp;*<br>&nbsp;* This is special and does not follow the pattern for other classes.<br>&nbsp;*/<br>struct opal_object_t {<br>#if OMPI_ENABLE_DEBUG<br>&nbsp;&nbsp;&nbsp; /** Magic ID -- want this to be the very first item in the<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; struct's memory */<br></div><div><br></div><div>************************* Error (the first one) C2016 points to line 182 below:<br>182-&gt;&nbsp;&nbsp;&nbsp; uint64_t obj_magic_id;<br>#endif<br>&nbsp;&nbsp;&nbsp; opal_class_t *obj_class;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; /**&lt; class descriptor */<br>&nbsp;&nbsp;&nbsp; volatile int32_t obj_reference_count;&nbsp;&nbsp; /**&lt; reference count */<br>#if OMPI_ENABLE_DEBUG<br>&nbsp;&nbsp; const char* cls_init_file_name;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; /**&lt; In debug mode store the file where the object get contructed */<br>&nbsp;&nbsp; int&nbsp;&nbsp; cls_init_lineno;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; /**&lt; In debug mode store the line number where the object get contructed */<br>#endif&nbsp; /* OMPI_ENABLE_DEBUG */<br>};<br><br>Usually, compile errors in a system are like a missing path or a header file not found, this one has me stumped.<br><br>C.S. Johnson ...<br><br mce_bogus="1"></div></span></body>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11747.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ..."</a>
<li><strong>Previous message:</strong> <a href="11745.php">Evan Smyth: "[OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11747.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ..."</a>
<li><strong>Reply:</strong> <a href="11747.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ..."</a>
<li><strong>Maybe reply:</strong> <a href="11886.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ..."</a>
<li><strong>Maybe reply:</strong> <a href="11891.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ..."</a>
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
