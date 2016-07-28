<?
$subject_val = "[OMPI users] Windows CMake build problems ... (cont.)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 14 02:34:22 2010" -->
<!-- isoreceived="20100114073422" -->
<!-- sent="Thu, 14 Jan 2010 00:34:16 -0700" -->
<!-- isosent="20100114073416" -->
<!-- name="cjohnson_at_[hidden]" -->
<!-- email="cjohnson_at_[hidden]" -->
<!-- subject="[OMPI users] Windows CMake build problems ... (cont.)" -->
<!-- id="20100114003416.0430d53b3e916c69cc97ff130928da34.3a6dfded68.wbe_at_email02.secureserver.net" -->
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
<strong>Subject:</strong> [OMPI users] Windows CMake build problems ... (cont.)<br>
<strong>From:</strong> <a href="mailto:cjohnson_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Windows%20CMake%20build%20problems%20...%20(cont.)"><em>cjohnson_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-01-14 02:34:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11763.php">Andreea Costea: "[OMPI users] OpenMPI checkpoint/restart"</a>
<li><strong>Previous message:</strong> <a href="11761.php">SpiduS Okami: "[OMPI users] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11765.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Reply:</strong> <a href="11765.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Reply:</strong> <a href="11766.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Reply:</strong> <a href="11774.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Maybe reply:</strong> <a href="11787.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Maybe reply:</strong> <a href="11858.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Maybe reply:</strong> <a href="11860.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Maybe reply:</strong> <a href="11885.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<body><span style="font-family:Verdana; color:#000000; font-size:10pt;"><div>The OpenMPI build problem I'm having occurs in both OpenMPI 1.4 and 1.3.4.<br><br>I am on a Windows 7 (US) Enterprise (x86) OS on an HP system with Intel core 2 extreme x9000 (4GB RAM), using the 2005 Visual Studio for S/W Architects (release 8.0.50727.867).</div><div><br></div><div>[That release has everything the platform SDK would have.]<br><br>I'm using CMake 2.8 to generate code, I used it correctly, pointing at the root directory where the makelists are located for the source side and to an empty directory for the build side: did configure, <u><b>I did not click debug this time as suggested by Shiqing</b></u>, configure again, generate and opened the OpenMPI.sln file created by CMake. Then I right-clicked on the "ALL_BUILD" project and selected "build". Then did one "rebuild", just in case build order might get one more success (which it seemed to, but I could not find).<br><br>2 projects built, 12 did not. I have the build listing. [I'm afraid of what the mailing list server would do if I attached it to this email.]<br><br>All the compiles were successful (warnings at most.) All the errors were were from linking the VC projects:<br><br><b>1&gt;libopen-pal - 0 error(s), 9 warning(s)</b><br>3&gt;opal-restart - 32 error(s), 0 warning(s)<br>4&gt;opal-wrapper - 21 error(s), 0 warning(s)<br>2&gt;libopen-rte - 749 error(s), 7 warning(s)<br>5&gt;orte-checkpoint - 32 error(s), 0 warning(s)<br>7&gt;orte-ps - 28 error(s), 0 warning(s)<br>8&gt;orted - 2 error(s), 0 warning(s)<br>9&gt;orte-clean - 13 error(s), 0 warning(s)<br>10&gt;orterun - 100 error(s), 3 warning(s)<br>6&gt;libmpi - 2133 error(s), 42 warning(s)<br>12&gt;ompi-server - 27 error(s), 0 warning(s)<br>11&gt;ompi_info - 146 error(s), 0 warning(s)<br>13&gt;libmpi_cxx - 456 error(s), 61 warning(s)<br>========== Rebuild All: 2 succeeded, 12 failed, 0 skipped ==========<br><br>It said that 2 succeeded, I could not find the second build success in the listing.<br><br><b>However, everything did compile, and thank you Shiqing !</b><br><br>Here is the listing for the first failed link, on "opal-restart":<br><br>3&gt;------ Rebuild All started: Project: opal-restart, Configuration: Debug Win32 ------<br>3&gt;Deleting intermediate and output files for project 'opal-restart', configuration 'Debug|Win32'<br>3&gt;Compiling...<br>3&gt;opal-restart.c<br>2&gt;Compiling...<br>2&gt;snapc_base_select.c<br>3&gt;Compiling manifest to resources...<br>3&gt;Linking...<br>2&gt;snapc_base_open.c<br>3&gt;opal-restart.obj : error LNK2001: unresolved external symbol __imp__opal_crs<br>3&gt;opal-restart.obj : error LNK2001: unresolved external symbol __imp__opal_crs_base_snapshot_t_class<br>3&gt;opal-restart.obj : error LNK2001: unresolved external symbol __imp__opal_crs_base_selected_component<br>3&gt;opal-restart.obj : error LNK2019: unresolved external symbol __imp__opal_crs_base_select referenced in function _main<br>3&gt;opal-restart.obj : error LNK2019: unresolved external symbol __imp__opal_crs_base_open referenced in function _main<br>3&gt;opal-restart.obj : error LNK2019: unresolved external symbol __imp__opal_output_verbose referenced in function _main<br>3&gt;opal-restart.obj : error LNK2019: unresolved external symbol __imp__opal_crs_base_extract_expected_component referenced in function _main<br>3&gt;opal-restart.obj : error LNK2019: unresolved external symbol __imp__opal_crs_base_get_snapshot_directory referenced in function _main<br>3&gt;opal-restart.obj : error LNK2019: unresolved external symbol __imp__opal_setenv referenced in function _main<br>3&gt;opal-restart.obj : error LNK2019: unresolved external symbol __imp__mca_base_param_env_var referenced in function _main<br>3&gt;opal-restart.obj : error LNK2019: unresolved external symbol __imp__opal_show_help referenced in function _main<br>3&gt;opal-restart.obj : error LNK2019: unresolved external symbol __imp__opal_class_initialize referenced in function "struct opal_object_t * __cdecl opal_obj_new(struct opal_class_t *)" (?opal_obj_new@@YAPAUopal_object_t@@PAUopal_class_t@@@Z)<br>3&gt;opal-restart.obj : error LNK2001: unresolved external symbol __imp__opal_cr_is_tool<br>3&gt;opal-restart.obj : error LNK2019: unresolved external symbol __imp__opal_init referenced in function "int __cdecl initialize(int,char * * const)" (?initialize@@YAHHQAPAD@Z)<br>3&gt;opal-restart.obj : error LNK2019: unresolved external symbol __imp__opal_output_set_verbosity referenced in function "int __cdecl initialize(int,char * * const)" (?initialize@@YAHHQAPAD@Z)<br>3&gt;opal-restart.obj : error LNK2019: unresolved external symbol __imp__opal_output_open referenced in function "int __cdecl initialize(int,char * * const)" (?initialize@@YAHHQAPAD@Z)<br>3&gt;opal-restart.obj : error LNK2019: unresolved external symbol __imp__opal_init_util referenced in function "int __cdecl initialize(int,char * * const)" (?initialize@@YAHHQAPAD@Z)<br>3&gt;opal-restart.obj : error LNK2019: unresolved external symbol __imp__opal_finalize referenced in function "int __cdecl finalize(void)" (?finalize@@YAHXZ)<br>3&gt;opal-restart.obj : error LNK2019: unresolved external symbol __imp__opal_argv_join referenced in function "int __cdecl parse_args(int,char * * const)" (?parse_args@@YAHHQAPAD@Z)<br>3&gt;opal-restart.obj : error LNK2019: unresolved external symbol __imp__opal_cmd_line_get_tail referenced in function "int __cdecl parse_args(int,char * * const)" (?parse_args@@YAHHQAPAD@Z)<br>3&gt;opal-restart.obj : error LNK2019: unresolved external symbol __imp__opal_cmd_line_get_usage_msg referenced in function "int __cdecl parse_args(int,char * * const)" (?parse_args@@YAHHQAPAD@Z)<br>3&gt;opal-restart.obj : error LNK2019: unresolved external symbol __imp__opal_argv_count referenced in function "int __cdecl parse_args(int,char * * const)" (?parse_args@@YAHHQAPAD@Z)<br>3&gt;opal-restart.obj : error LNK2019: unresolved external symbol __imp__mca_base_cmd_line_process_args referenced in function "int __cdecl parse_args(int,char * * const)" (?parse_args@@YAHHQAPAD@Z)<br>3&gt;opal-restart.obj : error LNK2019: unresolved external symbol __imp__opal_cmd_line_parse referenced in function "int __cdecl parse_args(int,char * * const)" (?parse_args@@YAHHQAPAD@Z)<br>3&gt;opal-restart.obj : error LNK2019: unresolved external symbol __imp__mca_base_cmd_line_setup referenced in function "int __cdecl parse_args(int,char * * const)" (?parse_args@@YAHHQAPAD@Z)<br>3&gt;opal-restart.obj : error LNK2019: unresolved external symbol __imp__mca_base_open referenced in function "int __cdecl parse_args(int,char * * const)" (?parse_args@@YAHHQAPAD@Z)<br>3&gt;opal-restart.obj : error LNK2019: unresolved external symbol __imp__opal_cmd_line_create referenced in function "int __cdecl parse_args(int,char * * const)" (?parse_args@@YAHHQAPAD@Z)<br>3&gt;opal-restart.obj : error LNK2019: unresolved external symbol __imp__opal_argv_free referenced in function "int __cdecl check_file(char *)" (?check_file@@YAHPAD@Z)<br>3&gt;opal-restart.obj : error LNK2019: unresolved external symbol __imp__opal_output referenced in function "int __cdecl check_file(char *)" (?check_file@@YAHPAD@Z)<br>3&gt;opal-restart.obj : error LNK2019: unresolved external symbol __imp__opal_crs_base_metadata_read_token referenced in function "int __cdecl post_env_vars(int,char *)" (?post_env_vars@@YAHHPAD@Z)<br>3&gt;opal-restart.obj : error LNK2019: unresolved external symbol __imp__opal_asprintf referenced in function "int __cdecl post_env_vars(int,char *)" (?post_env_vars@@YAHHPAD@Z)<br>3&gt;C:\prog\mon\Debug\opal-restart.exe : fatal error LNK1120: 31 unresolved externals<br>3&gt;Build log was saved at "file://c:\prog\mon\opal\tools\opal-restart\opal-restart.dir\Debug\BuildLog.htm"<br>3&gt;opal-restart - 32 error(s), 0 warning(s)<br><br>Now, these link errors may be from missing networking software and hardware, I was just following the instructions in openmpi-1.4.tar.gz:a/openmpi-1.4/README.WINDOWS:<br><br>&gt; First approach: Using CMake<br>&gt;<br>&gt; NOTE: CMake support is available in the Open MPI development<br>&gt; trunk and 1.3.3 release.<br>&gt;<br>&gt; 1. Download the latest version of CMake (at least v2.4).<br>&gt;<br>&gt; 2. In the CMake GUI, add the source path and build path of Open MPI<br>&gt;&nbsp;&nbsp;&nbsp; (out of source build is recommended).<br>&gt;<br>&gt; 3. Then configure, and after the first time configuration, all<br>&gt;&nbsp;&nbsp;&nbsp; available options will show up in the CMake GUI.&nbsp; Select the<br>&gt;&nbsp;&nbsp;&nbsp; options that you require.<br>&gt;<br>&gt; 4. Run configure again to generate all Windows solution files; they<br>&gt;&nbsp;&nbsp;&nbsp; will be generated in build path.<br>&gt;<br>&gt; 5. Go to the build directory, open the generated Windows solution<br>&gt;&nbsp;&nbsp;&nbsp; file, and compile.<br>&gt;<br>&gt; 6. To generate a installer, you should install NSIS, and build the<br>&gt;&nbsp;&nbsp;&nbsp;&nbsp; 'PACKAGE' project in the Open MPI sulotion.<br>&gt;<br><br>These instructions did not mention any link libraries I had to add to complete the build.</div><div><br></div><div>Thanks in advance for any help !<br></div><div><br></div><div>Charlie ...</div><div><br></div></span></body>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11763.php">Andreea Costea: "[OMPI users] OpenMPI checkpoint/restart"</a>
<li><strong>Previous message:</strong> <a href="11761.php">SpiduS Okami: "[OMPI users] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11765.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Reply:</strong> <a href="11765.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Reply:</strong> <a href="11766.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Reply:</strong> <a href="11774.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Maybe reply:</strong> <a href="11787.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Maybe reply:</strong> <a href="11858.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Maybe reply:</strong> <a href="11860.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Maybe reply:</strong> <a href="11885.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
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
