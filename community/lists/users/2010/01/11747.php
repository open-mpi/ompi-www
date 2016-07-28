<?
$subject_val = "Re: [OMPI users] Windows CMake build problems ...";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 13 05:17:55 2010" -->
<!-- isoreceived="20100113101755" -->
<!-- sent="Wed, 13 Jan 2010 11:16:29 +0100" -->
<!-- isosent="20100113101629" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows CMake build problems ..." -->
<!-- id="4B4D9D7D.4020204_at_hlrs.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20100112164018.0430d53b3e916c69cc97ff130928da34.6f6879808f.wbe_at_email02.secureserver.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Windows CMake build problems ...<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-13 05:16:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11748.php">gina.scorre1979_at_[hidden]: "[OMPI users] execution problem on remote nodes with MPI 1.3"</a>
<li><strong>Previous message:</strong> <a href="11746.php">cjohnson_at_[hidden]: "[OMPI users] Windows CMake build problems ..."</a>
<li><strong>In reply to:</strong> <a href="11746.php">cjohnson_at_[hidden]: "[OMPI users] Windows CMake build problems ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11886.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Johnson,
<br>
<p>I can see the reason for the errors, that's because you enabled option 
<br>
&quot;OMPI_ENABLE_DEBUG&quot; option in CMake GUI, and for some reason, this 
<br>
option will not work properly right now.
<br>
<p>So please just disable &quot;OMPI_ENABLE_DEBUG&quot;, and configure/compile again, 
<br>
those errors will disappear.
<br>
<p><p>Best Regards,
<br>
Shiqing
<br>
<p><p>cjohnson_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The OpenMPI build problem I'm having occurs in both OpenMPI 1.4 and 1.3.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am on a Windows 7 (US) Enterprise (x86) OS on an HP system with 
</span><br>
<span class="quotelev1">&gt; Intel core 2 extreme x9000 (4GB RAM), using the 2005 Visual Studio for 
</span><br>
<span class="quotelev1">&gt; S/W Architects (release 8.0.50727.867). [That release has everything 
</span><br>
<span class="quotelev1">&gt; the platform SDK would have.]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using CMake 2.8 to generate code, I used it correctly, pointing at 
</span><br>
<span class="quotelev1">&gt; the root directory where the makelists are located for the source side 
</span><br>
<span class="quotelev1">&gt; and to an empty directory for the build side: did configure, click 
</span><br>
<span class="quotelev1">&gt; debug, configure again, generate and opened the OpenMPI.sln file 
</span><br>
<span class="quotelev1">&gt; created by CMake. Then I right-clicked on the &quot;ALL_BUILD&quot; project and 
</span><br>
<span class="quotelev1">&gt; selected &quot;build&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1 project built, 13 did not. I have the build listing. [I'm afraid of 
</span><br>
<span class="quotelev1">&gt; what the mailing list server would do if I attached it to this email.;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first error in the listing points to source line: 
</span><br>
<span class="quotelev1">&gt; C:\prog\openmpi-1.3.4\opal/class/opal_object.h(182),
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After that critical error, the compile falls apart due to it. Here's 
</span><br>
<span class="quotelev1">&gt; the section of the listing with the first error in the center:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1&gt;Generating Code...
</span><br>
<span class="quotelev1">&gt; 1&gt;Compiling...
</span><br>
<span class="quotelev1">&gt; 1&gt;signal.c
</span><br>
<span class="quotelev1">&gt; 1&gt;select.c
</span><br>
<span class="quotelev1">&gt; 1&gt;log.c
</span><br>
<span class="quotelev1">&gt; 1&gt;evutil.c
</span><br>
<span class="quotelev1">&gt; 1&gt;event.c
</span><br>
<span class="quotelev1">&gt; 1&gt;win32.c
</span><br>
<span class="quotelev1">&gt; 1&gt;c:\prog\openmpi-1.3.4\opal\event\win32-code\./config.h(185) : 
</span><br>
<span class="quotelev1">&gt; warning C4005: 'PACKAGE_BUGREPORT' : macro redefinition
</span><br>
<span class="quotelev1">&gt; 1&gt;        c:\prog\mon\opal\include\opal_config.h(1307) : see previous 
</span><br>
<span class="quotelev1">&gt; definition of 'PACKAGE_BUGREPORT'
</span><br>
<span class="quotelev1">&gt; 1&gt;c:\prog\openmpi-1.3.4\opal\event\win32-code\./config.h(188) : 
</span><br>
<span class="quotelev1">&gt; warning C4005: 'PACKAGE_NAME' : macro redefinition
</span><br>
<span class="quotelev1">&gt; 1&gt;        c:\prog\mon\opal\include\opal_config.h(1310) : see previous 
</span><br>
<span class="quotelev1">&gt; definition of 'PACKAGE_NAME'
</span><br>
<span class="quotelev1">&gt; 1&gt;c:\prog\openmpi-1.3.4\opal\event\win32-code\./config.h(191) : 
</span><br>
<span class="quotelev1">&gt; warning C4005: 'PACKAGE_STRING' : macro redefinition
</span><br>
<span class="quotelev1">&gt; 1&gt;        c:\prog\mon\opal\include\opal_config.h(1313) : see previous 
</span><br>
<span class="quotelev1">&gt; definition of 'PACKAGE_STRING'
</span><br>
<span class="quotelev1">&gt; 1&gt;c:\prog\openmpi-1.3.4\opal\event\win32-code\./config.h(194) : 
</span><br>
<span class="quotelev1">&gt; warning C4005: 'PACKAGE_TARNAME' : macro redefinition
</span><br>
<span class="quotelev1">&gt; 1&gt;        c:\prog\mon\opal\include\opal_config.h(1316) : see previous 
</span><br>
<span class="quotelev1">&gt; definition of 'PACKAGE_TARNAME'
</span><br>
<span class="quotelev1">&gt; 1&gt;c:\prog\openmpi-1.3.4\opal\event\win32-code\./config.h(197) : 
</span><br>
<span class="quotelev1">&gt; warning C4005: 'PACKAGE_VERSION' : macro redefinition
</span><br>
<span class="quotelev1">&gt; 1&gt;        c:\prog\mon\opal\include\opal_config.h(1319) : see previous 
</span><br>
<span class="quotelev1">&gt; definition of 'PACKAGE_VERSION'
</span><br>
<span class="quotelev1">&gt; 1&gt;c:\prog\openmpi-1.3.4\opal\event\win32-code\./config.h(212) : 
</span><br>
<span class="quotelev1">&gt; warning C4005: '__func__' : macro redefinition
</span><br>
<span class="quotelev1">&gt; 1&gt;        C:\prog\openmpi-1.3.4\opal\include\opal_config_bottom.h(449) 
</span><br>
<span class="quotelev1">&gt; : see previous definition of '__func__'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ****************************** First error in build listing, below:
</span><br>
<span class="quotelev1">&gt; 1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(182) : error C2016: C 
</span><br>
<span class="quotelev1">&gt; requires that a struct or union has at least one member
</span><br>
<span class="quotelev1">&gt; 1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(182) : error C2061: 
</span><br>
<span class="quotelev1">&gt; syntax error : identifier '__uint64_t'
</span><br>
<span class="quotelev1">&gt; 1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(190) : error C2059: 
</span><br>
<span class="quotelev1">&gt; syntax error : '}'
</span><br>
<span class="quotelev1">&gt; 1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(248) : error C2037: 
</span><br>
<span class="quotelev1">&gt; left of 'obj_magic_id' specifies undefined struct/union 'opal_object_t'
</span><br>
<span class="quotelev1">&gt; 1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(249) : error C2037: 
</span><br>
<span class="quotelev1">&gt; left of 'cls_init_file_name' specifies undefined struct/union 
</span><br>
<span class="quotelev1">&gt; 'opal_object_t'
</span><br>
<span class="quotelev1">&gt; 1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(250) : error C2037: 
</span><br>
<span class="quotelev1">&gt; left of 'cls_init_lineno' specifies undefined struct/union 'opal_object_t'
</span><br>
<span class="quotelev1">&gt; 1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(421) : error C2037: 
</span><br>
<span class="quotelev1">&gt; left of 'obj_class' specifies undefined struct/union 'opal_object_t'
</span><br>
<span class="quotelev1">&gt; 1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(423) : error C2037: 
</span><br>
<span class="quotelev1">&gt; left of 'obj_class' specifies undefined struct/union 'opal_object_t'
</span><br>
<span class="quotelev1">&gt; 1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(443) : error C2037: 
</span><br>
<span class="quotelev1">&gt; left of 'obj_class' specifies undefined struct/union 'opal_object_t'
</span><br>
<span class="quotelev1">&gt; 1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(445) : error C2037: 
</span><br>
<span class="quotelev1">&gt; left of 'obj_class' specifies undefined struct/union 'opal_object_t'
</span><br>
<span class="quotelev1">&gt; 1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(466) : error C2027: 
</span><br>
<span class="quotelev1">&gt; use of undefined type 'opal_object_t'
</span><br>
<span class="quotelev1">&gt; 1&gt;        C:\prog\openmpi-1.3.4\opal/class/opal_object.h(178) : see 
</span><br>
<span class="quotelev1">&gt; declaration of 'opal_object_t'
</span><br>
<span class="quotelev1">&gt; 1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(473) : error C2037: 
</span><br>
<span class="quotelev1">&gt; left of 'obj_class' specifies undefined struct/union 'opal_object_t'
</span><br>
<span class="quotelev1">&gt; 1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(474) : error C2037: 
</span><br>
<span class="quotelev1">&gt; left of 'obj_reference_count' specifies undefined struct/union 
</span><br>
<span class="quotelev1">&gt; 'opal_object_t'
</span><br>
<span class="quotelev1">&gt; 1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(497) : error C2037: 
</span><br>
<span class="quotelev1">&gt; left of 'obj_reference_count' specifies undefined struct/union 
</span><br>
<span class="quotelev1">&gt; 'opal_object_t'
</span><br>
<span class="quotelev1">&gt; 1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(498) : error C2037: 
</span><br>
<span class="quotelev1">&gt; left of 'obj_reference_count' specifies undefined struct/union 
</span><br>
<span class="quotelev1">&gt; 'opal_object_t'
</span><br>
<span class="quotelev1">&gt; 1&gt;C:\prog\openmpi-1.3.4\opal/class/opal_object.h(498) : warning C4033: 
</span><br>
<span class="quotelev1">&gt; 'opal_obj_update' must return a value
</span><br>
<span class="quotelev1">&gt; 1&gt;C:\prog\openmpi-1.3.4\opal/util/output.h(99) : error C2079: 'super' 
</span><br>
<span class="quotelev1">&gt; uses undefined struct 'opal_object_t'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the source file section with the error line indicated:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---&gt; Opal_object.h (lines 173-190)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /**
</span><br>
<span class="quotelev1">&gt;  * For static initializations of OBJects.
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;  * @param NAME   Name of the class to initialize
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; #if OMPI_ENABLE_DEBUG
</span><br>
<span class="quotelev1">&gt; #define OPAL_OBJ_STATIC_INIT(BASE_CLASS) { OPAL_OBJ_MAGIC_ID, 
</span><br>
<span class="quotelev1">&gt; OBJ_CLASS(BASE_CLASS), 1, __FILE__, __LINE__ }
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; #define OPAL_OBJ_STATIC_INIT(BASE_CLASS) { OBJ_CLASS(BASE_CLASS), 1 }
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /**
</span><br>
<span class="quotelev1">&gt;  * Base object.
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt;  * This is special and does not follow the pattern for other classes.
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; struct opal_object_t {
</span><br>
<span class="quotelev1">&gt; #if OMPI_ENABLE_DEBUG
</span><br>
<span class="quotelev1">&gt;     /** Magic ID -- want this to be the very first item in the
</span><br>
<span class="quotelev1">&gt;         struct's memory */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ************************* Error (the first one) C2016 points to line 
</span><br>
<span class="quotelev1">&gt; 182 below:
</span><br>
<span class="quotelev1">&gt; 182-&gt;    uint64_t obj_magic_id;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;     opal_class_t *obj_class;            /**&lt; class descriptor */
</span><br>
<span class="quotelev1">&gt;     volatile int32_t obj_reference_count;   /**&lt; reference count */
</span><br>
<span class="quotelev1">&gt; #if OMPI_ENABLE_DEBUG
</span><br>
<span class="quotelev1">&gt;    const char* cls_init_file_name;        /**&lt; In debug mode store the 
</span><br>
<span class="quotelev1">&gt; file where the object get contructed */
</span><br>
<span class="quotelev1">&gt;    int   cls_init_lineno;           /**&lt; In debug mode store the line 
</span><br>
<span class="quotelev1">&gt; number where the object get contructed */
</span><br>
<span class="quotelev1">&gt; #endif  /* OMPI_ENABLE_DEBUG */
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Usually, compile errors in a system are like a missing path or a 
</span><br>
<span class="quotelev1">&gt; header file not found, this one has me stumped.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C.S. Johnson ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
  Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]    
70569 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11748.php">gina.scorre1979_at_[hidden]: "[OMPI users] execution problem on remote nodes with MPI 1.3"</a>
<li><strong>Previous message:</strong> <a href="11746.php">cjohnson_at_[hidden]: "[OMPI users] Windows CMake build problems ..."</a>
<li><strong>In reply to:</strong> <a href="11746.php">cjohnson_at_[hidden]: "[OMPI users] Windows CMake build problems ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11886.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ..."</a>
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
