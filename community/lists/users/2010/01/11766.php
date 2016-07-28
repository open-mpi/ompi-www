<?
$subject_val = "Re: [OMPI users] Windows CMake build problems ... (cont.)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 14 08:11:31 2010" -->
<!-- isoreceived="20100114131131" -->
<!-- sent="Thu, 14 Jan 2010 14:11:04 +0100" -->
<!-- isosent="20100114131104" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows CMake build problems ... (cont.)" -->
<!-- id="4B4F17E8.5010502_at_hlrs.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20100114003416.0430d53b3e916c69cc97ff130928da34.3a6dfded68.wbe_at_email02.secureserver.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Windows CMake build problems ... (cont.)<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-14 08:11:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11767.php">Andreea Costea: "[OMPI users] Checkpoint/Restart error"</a>
<li><strong>Previous message:</strong> <a href="11765.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>In reply to:</strong> <a href="11762.php">cjohnson_at_[hidden]: "[OMPI users] Windows CMake build problems ... (cont.)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11774.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Charlie,
<br>
<p>Could you also try to use CMake 2.6.4 and see what happens? I found 
<br>
there might be some incompatibility between CMake 2.8 and 2.6 series.
<br>
<p><p>Thanks,
<br>
Shiqing
<br>
<p><p>cjohnson_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; The OpenMPI build problem I'm having occurs in both OpenMPI 1.4 and 1.3.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am on a Windows 7 (US) Enterprise (x86) OS on an HP system with 
</span><br>
<span class="quotelev1">&gt; Intel core 2 extreme x9000 (4GB RAM), using the 2005 Visual Studio for 
</span><br>
<span class="quotelev1">&gt; S/W Architects (release 8.0.50727.867).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [That release has everything the platform SDK would have.]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using CMake 2.8 to generate code, I used it correctly, pointing at 
</span><br>
<span class="quotelev1">&gt; the root directory where the makelists are located for the source side 
</span><br>
<span class="quotelev1">&gt; and to an empty directory for the build side: did configure, _*I did 
</span><br>
<span class="quotelev1">&gt; not click debug this time as suggested by Shiqing*_, configure again, 
</span><br>
<span class="quotelev1">&gt; generate and opened the OpenMPI.sln file created by CMake. Then I 
</span><br>
<span class="quotelev1">&gt; right-clicked on the &quot;ALL_BUILD&quot; project and selected &quot;build&quot;. Then 
</span><br>
<span class="quotelev1">&gt; did one &quot;rebuild&quot;, just in case build order might get one more success 
</span><br>
<span class="quotelev1">&gt; (which it seemed to, but I could not find).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2 projects built, 12 did not. I have the build listing. [I'm afraid of 
</span><br>
<span class="quotelev1">&gt; what the mailing list server would do if I attached it to this email.]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All the compiles were successful (warnings at most.) All the errors 
</span><br>
<span class="quotelev1">&gt; were were from linking the VC projects:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *1&gt;libopen-pal - 0 error(s), 9 warning(s)*
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart - 32 error(s), 0 warning(s)
</span><br>
<span class="quotelev1">&gt; 4&gt;opal-wrapper - 21 error(s), 0 warning(s)
</span><br>
<span class="quotelev1">&gt; 2&gt;libopen-rte - 749 error(s), 7 warning(s)
</span><br>
<span class="quotelev1">&gt; 5&gt;orte-checkpoint - 32 error(s), 0 warning(s)
</span><br>
<span class="quotelev1">&gt; 7&gt;orte-ps - 28 error(s), 0 warning(s)
</span><br>
<span class="quotelev1">&gt; 8&gt;orted - 2 error(s), 0 warning(s)
</span><br>
<span class="quotelev1">&gt; 9&gt;orte-clean - 13 error(s), 0 warning(s)
</span><br>
<span class="quotelev1">&gt; 10&gt;orterun - 100 error(s), 3 warning(s)
</span><br>
<span class="quotelev1">&gt; 6&gt;libmpi - 2133 error(s), 42 warning(s)
</span><br>
<span class="quotelev1">&gt; 12&gt;ompi-server - 27 error(s), 0 warning(s)
</span><br>
<span class="quotelev1">&gt; 11&gt;ompi_info - 146 error(s), 0 warning(s)
</span><br>
<span class="quotelev1">&gt; 13&gt;libmpi_cxx - 456 error(s), 61 warning(s)
</span><br>
<span class="quotelev1">&gt; ========== Rebuild All: 2 succeeded, 12 failed, 0 skipped ==========
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It said that 2 succeeded, I could not find the second build success in 
</span><br>
<span class="quotelev1">&gt; the listing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *However, everything did compile, and thank you Shiqing !*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the listing for the first failed link, on &quot;opal-restart&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3&gt;------ Rebuild All started: Project: opal-restart, Configuration: 
</span><br>
<span class="quotelev1">&gt; Debug Win32 ------
</span><br>
<span class="quotelev1">&gt; 3&gt;Deleting intermediate and output files for project 'opal-restart', 
</span><br>
<span class="quotelev1">&gt; configuration 'Debug|Win32'
</span><br>
<span class="quotelev1">&gt; 3&gt;Compiling...
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.c
</span><br>
<span class="quotelev1">&gt; 2&gt;Compiling...
</span><br>
<span class="quotelev1">&gt; 2&gt;snapc_base_select.c
</span><br>
<span class="quotelev1">&gt; 3&gt;Compiling manifest to resources...
</span><br>
<span class="quotelev1">&gt; 3&gt;Linking...
</span><br>
<span class="quotelev1">&gt; 2&gt;snapc_base_open.c
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__opal_crs
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__opal_crs_base_snapshot_t_class
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__opal_crs_base_selected_component
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__opal_crs_base_select referenced in function _main
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__opal_crs_base_open referenced in function _main
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__opal_output_verbose referenced in function _main
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__opal_crs_base_extract_expected_component referenced in function 
</span><br>
<span class="quotelev1">&gt; _main
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__opal_crs_base_get_snapshot_directory referenced in function _main
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__opal_setenv referenced in function _main
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__mca_base_param_env_var referenced in function _main
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__opal_show_help referenced in function _main
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__opal_class_initialize referenced in function &quot;struct 
</span><br>
<span class="quotelev1">&gt; opal_object_t * __cdecl opal_obj_new(struct opal_class_t *)&quot; 
</span><br>
<span class="quotelev1">&gt; (?opal_obj_new@@YAPAUopal_object_t@@PAUopal_class_t@@@Z)
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2001: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__opal_cr_is_tool
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__opal_init referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; initialize(int,char * * const)&quot; (?initialize@@YAHHQAPAD_at_Z)
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__opal_output_set_verbosity referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; initialize(int,char * * const)&quot; (?initialize@@YAHHQAPAD_at_Z)
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__opal_output_open referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; initialize(int,char * * const)&quot; (?initialize@@YAHHQAPAD_at_Z)
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__opal_init_util referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; initialize(int,char * * const)&quot; (?initialize@@YAHHQAPAD_at_Z)
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__opal_finalize referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; finalize(void)&quot; (?finalize@@YAHXZ)
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__opal_argv_join referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; parse_args(int,char * * const)&quot; (?parse_args@@YAHHQAPAD_at_Z)
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__opal_cmd_line_get_tail referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; parse_args(int,char * * const)&quot; (?parse_args@@YAHHQAPAD_at_Z)
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__opal_cmd_line_get_usage_msg referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; parse_args(int,char * * const)&quot; (?parse_args@@YAHHQAPAD_at_Z)
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__opal_argv_count referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; parse_args(int,char * * const)&quot; (?parse_args@@YAHHQAPAD_at_Z)
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__mca_base_cmd_line_process_args referenced in function &quot;int 
</span><br>
<span class="quotelev1">&gt; __cdecl parse_args(int,char * * const)&quot; (?parse_args@@YAHHQAPAD_at_Z)
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__opal_cmd_line_parse referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; parse_args(int,char * * const)&quot; (?parse_args@@YAHHQAPAD_at_Z)
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__mca_base_cmd_line_setup referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; parse_args(int,char * * const)&quot; (?parse_args@@YAHHQAPAD_at_Z)
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__mca_base_open referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; parse_args(int,char * * const)&quot; (?parse_args@@YAHHQAPAD_at_Z)
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__opal_cmd_line_create referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; parse_args(int,char * * const)&quot; (?parse_args@@YAHHQAPAD_at_Z)
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__opal_argv_free referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; check_file(char *)&quot; (?check_file@@YAHPAD_at_Z)
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__opal_output referenced in function &quot;int __cdecl check_file(char 
</span><br>
<span class="quotelev1">&gt; *)&quot; (?check_file@@YAHPAD_at_Z)
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__opal_crs_base_metadata_read_token referenced in function &quot;int 
</span><br>
<span class="quotelev1">&gt; __cdecl post_env_vars(int,char *)&quot; (?post_env_vars@@YAHHPAD_at_Z)
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol 
</span><br>
<span class="quotelev1">&gt; __imp__opal_asprintf referenced in function &quot;int __cdecl 
</span><br>
<span class="quotelev1">&gt; post_env_vars(int,char *)&quot; (?post_env_vars@@YAHHPAD_at_Z)
</span><br>
<span class="quotelev1">&gt; 3&gt;C:\prog\mon\Debug\opal-restart.exe : fatal error LNK1120: 31 
</span><br>
<span class="quotelev1">&gt; unresolved externals
</span><br>
<span class="quotelev1">&gt; 3&gt;Build log was saved at 
</span><br>
<span class="quotelev1">&gt; &quot;file://c:\prog\mon\opal\tools\opal-restart\opal-restart.dir\Debug\BuildLog.htm&quot;
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart - 32 error(s), 0 warning(s)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, these link errors may be from missing networking software and 
</span><br>
<span class="quotelev1">&gt; hardware, I was just following the instructions in 
</span><br>
<span class="quotelev1">&gt; openmpi-1.4.tar.gz:a/openmpi-1.4/README.WINDOWS:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; First approach: Using CMake
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; NOTE: CMake support is available in the Open MPI development
</span><br>
<span class="quotelev2">&gt; &gt; trunk and 1.3.3 release.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. Download the latest version of CMake (at least v2.4).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. In the CMake GUI, add the source path and build path of Open MPI
</span><br>
<span class="quotelev2">&gt; &gt;    (out of source build is recommended).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 3. Then configure, and after the first time configuration, all
</span><br>
<span class="quotelev2">&gt; &gt;    available options will show up in the CMake GUI.  Select the
</span><br>
<span class="quotelev2">&gt; &gt;    options that you require.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 4. Run configure again to generate all Windows solution files; they
</span><br>
<span class="quotelev2">&gt; &gt;    will be generated in build path.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 5. Go to the build directory, open the generated Windows solution
</span><br>
<span class="quotelev2">&gt; &gt;    file, and compile.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 6. To generate a installer, you should install NSIS, and build the
</span><br>
<span class="quotelev2">&gt; &gt;     'PACKAGE' project in the Open MPI sulotion.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These instructions did not mention any link libraries I had to add to 
</span><br>
<span class="quotelev1">&gt; complete the build.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for any help !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Charlie ...
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
<li><strong>Next message:</strong> <a href="11767.php">Andreea Costea: "[OMPI users] Checkpoint/Restart error"</a>
<li><strong>Previous message:</strong> <a href="11765.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>In reply to:</strong> <a href="11762.php">cjohnson_at_[hidden]: "[OMPI users] Windows CMake build problems ... (cont.)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11774.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
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
