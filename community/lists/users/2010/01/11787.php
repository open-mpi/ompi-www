<?
$subject_val = "Re: [OMPI users] Windows CMake build problems ... (cont.)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 15 01:48:25 2010" -->
<!-- isoreceived="20100115064825" -->
<!-- sent="Thu, 14 Jan 2010 23:48:18 -0700" -->
<!-- isosent="20100115064818" -->
<!-- name="cjohnson_at_[hidden]" -->
<!-- email="cjohnson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows CMake build problems ... (cont.)" -->
<!-- id="20100114234818.0430d53b3e916c69cc97ff130928da34.896c557ff0.wbe_at_email02.secureserver.net" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] Windows CMake build problems ... (cont.)" -->
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
<strong>From:</strong> <a href="mailto:cjohnson_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Windows%20CMake%20build%20problems%20...%20(cont.)"><em>cjohnson_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-01-15 01:48:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11788.php">Ralph Castain: "[OMPI users] Open MPI v1.4.1 released"</a>
<li><strong>Previous message:</strong> <a href="11786.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Maybe in reply to:</strong> <a href="11762.php">cjohnson_at_[hidden]: "[OMPI users] Windows CMake build problems ... (cont.)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11790.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Reply:</strong> <a href="11790.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<body><span style="font-family:Verdana; color:#000000; font-size:10pt;"><div>Yes that was it.</div><div><br>A much improved result now from CMake 2.6.4, no errors from compiling openmpi-1.4:<br><br>1&gt;libopen-pal - 0 error(s), 9 warning(s)<br>2&gt;libopen-rte - 0 error(s), 7 warning(s)<br>3&gt;opal-restart - 0 error(s), 0 warning(s)<br>4&gt;opal-wrapper - 0 error(s), 0 warning(s)<br>5&gt;libmpi - 0 error(s), 42 warning(s)<br>6&gt;orte-checkpoint - 0 error(s), 0 warning(s)<br>7&gt;orte-ps - 0 error(s), 0 warning(s)<br>8&gt;orted - 0 error(s), 0 warning(s)<br>9&gt;orte-clean - 0 error(s), 0 warning(s)<br>10&gt;orterun - 0 error(s), 3 warning(s)<br>11&gt;ompi_info - 0 error(s), 0 warning(s)<br>12&gt;ompi-server - 0 error(s), 0 warning(s)<br>13&gt;libmpi_cxx - 0 error(s), 61 warning(s)<br>========== Build: 13 succeeded, 0 failed, 1 up-to-date, 0 skipped ==========<br><br>And only one failure from compiling openmpi-1.3.4 (the ompi_info project):<br><br>&gt; 1&gt;libopen-pal - 0 error(s), 9 warning(s)<br>&gt; 2&gt;libopen-rte - 0 error(s), 7 warning(s)<br>&gt; 3&gt;opal-restart - 0 error(s), 0 warning(s)<br>&gt; 4&gt;opal-wrapper - 0 error(s), 0 warning(s)<br>&gt; 5&gt;orte-checkpoint - 0 error(s), 0 warning(s)<br>&gt; 6&gt;libmpi - 0 error(s), 42 warning(s)<br>&gt; 7&gt;orte-ps - 0 error(s), 0 warning(s)<br>&gt; 8&gt;orted - 0 error(s), 0 warning(s)<br>&gt; 9&gt;orte-clean - 0 error(s), 0 warning(s)<br>&gt; 10&gt;orterun - 0 error(s), 3 warning(s)<br>&gt; 11&gt;ompi_info - 3 error(s), 0 warning(s)<br>&gt; 12&gt;ompi-server - 0 error(s), 0 warning(s)<br>&gt; 13&gt;libmpi_cxx - 0 error(s), 61 warning(s)<br>&gt; ========== Rebuild All: 13 succeeded, 1 failed, 0 skipped ==========<br><br>Here's the listing from the non-linking project:<br><br>11&gt;------ Rebuild All started: Project: ompi_info, Configuration: Debug Win32 ------<br>11&gt;Deleting intermediate and output files for project 'ompi_info', configuration 'Debug|Win32'<br>11&gt;Compiling...<br>11&gt;version.cc<br>11&gt;..\..\..\..\openmpi-1.3.4\ompi\tools\ompi_info\version.cc(136) : error C2059: syntax error : ','<br>11&gt;..\..\..\..\openmpi-1.3.4\ompi\tools\ompi_info\version.cc(147) : error C2059: syntax error : ','<br>11&gt;..\..\..\..\openmpi-1.3.4\ompi\tools\ompi_info\version.cc(158) : error C2059: syntax error : ','<br>11&gt;param.cc<br>11&gt;output.cc<br>11&gt;ompi_info.cc<br>11&gt;components.cc<br>11&gt;Generating Code...<br>11&gt;Build log was saved at "file://c:\prog\mon\ompi\tools\ompi_info\ompi_info.dir\Debug\BuildLog.htm"<br>11&gt;ompi_info - 3 error(s), 0 warning(s)<br></div><div><br></div><div>Thank you Shiqing !</div><div><br></div><div>Charlie ...<br></div>
<blockquote id="replyBlockquote" webmail="1" style="border-left: 2px solid blue; margin-left: 8px; padding-left: 8px; font-size: 10pt; color: black; font-family: verdana;">
<div   >
-------- Original Message --------<br>
Subject: Re: [OMPI users] Windows CMake build problems ... (cont.)<br>
From: Shiqing Fan &lt;fan@hlrs.de&gt;<br>
Date: Thu, January 14, 2010 11:20 am<br>
To: Open MPI Users &lt;users@open-mpi.org&gt;, cjohnson@valverdecomputing.com<br>
<br>
<br>
Hi Charlie,<br>
<br>
The problem turns out to be the different behavior of one CMake macro in <br>
different version of CMake. And it's fixed in Open MPI trunk with <br>
r22405. I also created a ticket to move the fix over to 1.4 branch, see <br>
#2169: <a target="_blank" href="https://svn.open-mpi.org/trac/ompi/ticket/2169">https://svn.open-mpi.org/trac/ompi/ticket/2169</a> .<br>
<br>
So you could either switch to use OMPI trunk or use CMake 2.6 to solve <br>
the problem. Thanks a lot.<br>
<br>
<br>
Best Regards,<br>
Shiqing<br>
<br>
<br>
cjohnson@valverdecomputing.com wrote:<br>
&gt; The OpenMPI build problem I'm having occurs in both OpenMPI 1.4 and 1.3.4.<br>
&gt;<br>
&gt; I am on a Windows 7 (US) Enterprise (x86) OS on an HP system with <br>
&gt; Intel core 2 extreme x9000 (4GB RAM), using the 2005 Visual Studio for <br>
&gt; S/W Architects (release 8.0.50727.867).<br>
&gt;<br>
&gt; [That release has everything the platform SDK would have.]<br>
&gt;<br>
&gt; I'm using CMake 2.8 to generate code, I used it correctly, pointing at <br>
&gt; the root directory where the makelists are located for the source side <br>
&gt; and to an empty directory for the build side: did configure, _*I did <br>
&gt; not click debug this time as suggested by Shiqing*_, configure again, <br>
&gt; generate and opened the OpenMPI.sln file created by CMake. Then I <br>
&gt; right-clicked on the "ALL_BUILD" project and selected "build". Then <br>
&gt; did one "rebuild", just in case build order might get one more success <br>
&gt; (which it seemed to, but I could not find).<br>
&gt;<br>
&gt; 2 projects built, 12 did not. I have the build listing. [I'm afraid of <br>
&gt; what the mailing list server would do if I attached it to this email.]<br>
&gt;<br>
&gt; All the compiles were successful (warnings at most.) All the errors <br>
&gt; were were from linking the VC projects:<br>
&gt;<br>
&gt; *1&gt;libopen-pal - 0 error(s), 9 warning(s)*<br>
&gt; 3&gt;opal-restart - 32 error(s), 0 warning(s)<br>
&gt; 4&gt;opal-wrapper - 21 error(s), 0 warning(s)<br>
&gt; 2&gt;libopen-rte - 749 error(s), 7 warning(s)<br>
&gt; 5&gt;orte-checkpoint - 32 error(s), 0 warning(s)<br>
&gt; 7&gt;orte-ps - 28 error(s), 0 warning(s)<br>
&gt; 8&gt;orted - 2 error(s), 0 warning(s)<br>
&gt; 9&gt;orte-clean - 13 error(s), 0 warning(s)<br>
&gt; 10&gt;orterun - 100 error(s), 3 warning(s)<br>
&gt; 6&gt;libmpi - 2133 error(s), 42 warning(s)<br>
&gt; 12&gt;ompi-server - 27 error(s), 0 warning(s)<br>
&gt; 11&gt;ompi_info - 146 error(s), 0 warning(s)<br>
&gt; 13&gt;libmpi_cxx - 456 error(s), 61 warning(s)<br>
&gt; ========== Rebuild All: 2 succeeded, 12 failed, 0 skipped ==========<br>
&gt;<br>
&gt; It said that 2 succeeded, I could not find the second build success in <br>
&gt; the listing.<br>
&gt;<br>
&gt; *However, everything did compile, and thank you Shiqing !*<br>
&gt;<br>
&gt; Here is the listing for the first failed link, on "opal-restart":<br>
&gt;<br>
&gt; 3&gt;------ Rebuild All started: Project: opal-restart, Configuration: <br>
&gt; Debug Win32 ------<br>
&gt; 3&gt;Deleting intermediate and output files for project 'opal-restart', <br>
&gt; configuration 'Debug|Win32'<br>
&gt; 3&gt;Compiling...<br>
&gt; 3&gt;opal-restart.c<br>
&gt; 2&gt;Compiling...<br>
&gt; 2&gt;snapc_base_select.c<br>
&gt; 3&gt;Compiling manifest to resources...<br>
&gt; 3&gt;Linking...<br>
&gt; 2&gt;snapc_base_open.c<br>
&gt; 3&gt;opal-restart.obj : error LNK2001: unresolved external symbol <br>
&gt; __imp__opal_crs<br>
&gt; 3&gt;opal-restart.obj : error LNK2001: unresolved external symbol <br>
&gt; __imp__opal_crs_base_snapshot_t_class<br>
&gt; 3&gt;opal-restart.obj : error LNK2001: unresolved external symbol <br>
&gt; __imp__opal_crs_base_selected_component<br>
&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol <br>
&gt; __imp__opal_crs_base_select referenced in function _main<br>
&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol <br>
&gt; __imp__opal_crs_base_open referenced in function _main<br>
&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol <br>
&gt; __imp__opal_output_verbose referenced in function _main<br>
&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol <br>
&gt; __imp__opal_crs_base_extract_expected_component referenced in function <br>
&gt; _main<br>
&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol <br>
&gt; __imp__opal_crs_base_get_snapshot_directory referenced in function _main<br>
&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol <br>
&gt; __imp__opal_setenv referenced in function _main<br>
&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol <br>
&gt; __imp__mca_base_param_env_var referenced in function _main<br>
&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol <br>
&gt; __imp__opal_show_help referenced in function _main<br>
&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol <br>
&gt; __imp__opal_class_initialize referenced in function "struct <br>
&gt; opal_object_t * __cdecl opal_obj_new(struct opal_class_t *)" <br>
&gt; (?opal_obj_new@@YAPAUopal_object_t@@PAUopal_class_t@@@Z)<br>
&gt; 3&gt;opal-restart.obj : error LNK2001: unresolved external symbol <br>
&gt; __imp__opal_cr_is_tool<br>
&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol <br>
&gt; __imp__opal_init referenced in function "int __cdecl <br>
&gt; initialize(int,char * * const)" (?initialize@@YAHHQAPAD@Z)<br>
&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol <br>
&gt; __imp__opal_output_set_verbosity referenced in function "int __cdecl <br>
&gt; initialize(int,char * * const)" (?initialize@@YAHHQAPAD@Z)<br>
&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol <br>
&gt; __imp__opal_output_open referenced in function "int __cdecl <br>
&gt; initialize(int,char * * const)" (?initialize@@YAHHQAPAD@Z)<br>
&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol <br>
&gt; __imp__opal_init_util referenced in function "int __cdecl <br>
&gt; initialize(int,char * * const)" (?initialize@@YAHHQAPAD@Z)<br>
&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol <br>
&gt; __imp__opal_finalize referenced in function "int __cdecl <br>
&gt; finalize(void)" (?finalize@@YAHXZ)<br>
&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol <br>
&gt; __imp__opal_argv_join referenced in function "int __cdecl <br>
&gt; parse_args(int,char * * const)" (?parse_args@@YAHHQAPAD@Z)<br>
&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol <br>
&gt; __imp__opal_cmd_line_get_tail referenced in function "int __cdecl <br>
&gt; parse_args(int,char * * const)" (?parse_args@@YAHHQAPAD@Z)<br>
&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol <br>
&gt; __imp__opal_cmd_line_get_usage_msg referenced in function "int __cdecl <br>
&gt; parse_args(int,char * * const)" (?parse_args@@YAHHQAPAD@Z)<br>
&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol <br>
&gt; __imp__opal_argv_count referenced in function "int __cdecl <br>
&gt; parse_args(int,char * * const)" (?parse_args@@YAHHQAPAD@Z)<br>
&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol <br>
&gt; __imp__mca_base_cmd_line_process_args referenced in function "int <br>
&gt; __cdecl parse_args(int,char * * const)" (?parse_args@@YAHHQAPAD@Z)<br>
&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol <br>
&gt; __imp__opal_cmd_line_parse referenced in function "int __cdecl <br>
&gt; parse_args(int,char * * const)" (?parse_args@@YAHHQAPAD@Z)<br>
&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol <br>
&gt; __imp__mca_base_cmd_line_setup referenced in function "int __cdecl <br>
&gt; parse_args(int,char * * const)" (?parse_args@@YAHHQAPAD@Z)<br>
&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol <br>
&gt; __imp__mca_base_open referenced in function "int __cdecl <br>
&gt; parse_args(int,char * * const)" (?parse_args@@YAHHQAPAD@Z)<br>
&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol <br>
&gt; __imp__opal_cmd_line_create referenced in function "int __cdecl <br>
&gt; parse_args(int,char * * const)" (?parse_args@@YAHHQAPAD@Z)<br>
&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol <br>
&gt; __imp__opal_argv_free referenced in function "int __cdecl <br>
&gt; check_file(char *)" (?check_file@@YAHPAD@Z)<br>
&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol <br>
&gt; __imp__opal_output referenced in function "int __cdecl check_file(char <br>
&gt; *)" (?check_file@@YAHPAD@Z)<br>
&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol <br>
&gt; __imp__opal_crs_base_metadata_read_token referenced in function "int <br>
&gt; __cdecl post_env_vars(int,char *)" (?post_env_vars@@YAHHPAD@Z)<br>
&gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol <br>
&gt; __imp__opal_asprintf referenced in function "int __cdecl <br>
&gt; post_env_vars(int,char *)" (?post_env_vars@@YAHHPAD@Z)<br>
&gt; 3&gt;C:\prog\mon\Debug\opal-restart.exe : fatal error LNK1120: 31 <br>
&gt; unresolved externals<br>
&gt; 3&gt;Build log was saved at <br>
&gt; "<a target="_blank" href="file://c:%5Cprog%5Cmon%5Copal%5Ctools%5Copal-restart%5Copal-restart.dir%5CDebug%5CBuildLog.htm">file://c:\prog\mon\opal\tools\opal-restart\opal-restart.dir\Debug\BuildLog.htm</a>"<br>
&gt; 3&gt;opal-restart - 32 error(s), 0 warning(s)<br>
&gt;<br>
&gt; Now, these link errors may be from missing networking software and <br>
&gt; hardware, I was just following the instructions in <br>
&gt; openmpi-1.4.tar.gz:a/openmpi-1.4/README.WINDOWS:<br>
&gt;<br>
&gt; &gt; First approach: Using CMake<br>
&gt; &gt;<br>
&gt; &gt; NOTE: CMake support is available in the Open MPI development<br>
&gt; &gt; trunk and 1.3.3 release.<br>
&gt; &gt;<br>
&gt; &gt; 1. Download the latest version of CMake (at least v2.4).<br>
&gt; &gt;<br>
&gt; &gt; 2. In the CMake GUI, add the source path and build path of Open MPI<br>
&gt; &gt;    (out of source build is recommended).<br>
&gt; &gt;<br>
&gt; &gt; 3. Then configure, and after the first time configuration, all<br>
&gt; &gt;    available options will show up in the CMake GUI.  Select the<br>
&gt; &gt;    options that you require.<br>
&gt; &gt;<br>
&gt; &gt; 4. Run configure again to generate all Windows solution files; they<br>
&gt; &gt;    will be generated in build path.<br>
&gt; &gt;<br>
&gt; &gt; 5. Go to the build directory, open the generated Windows solution<br>
&gt; &gt;    file, and compile.<br>
&gt; &gt;<br>
&gt; &gt; 6. To generate a installer, you should install NSIS, and build the<br>
&gt; &gt;     'PACKAGE' project in the Open MPI sulotion.<br>
&gt; &gt;<br>
&gt;<br>
&gt; These instructions did not mention any link libraries I had to add to <br>
&gt; complete the build.<br>
&gt;<br>
&gt; Thanks in advance for any help !<br>
&gt;<br>
&gt; Charlie ...<br>
&gt;<br>
&gt; ------------------------------------------------------------------------<br>
&gt;<br>
&gt; _______________________________________________<br>
&gt; users mailing list<br>
&gt; users@open-mpi.org<br>
&gt; <a target="_blank" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br>
<br>
<br>
-- <br>
--------------------------------------------------------------<br>
Shiqing Fan                          <a target="_blank" href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a><br>
High Performance Computing           Tel.: +49 711 685 87234<br>
  Center Stuttgart (HLRS)            Fax.: +49 711 685 65832<br>
Address:Allmandring 30               email: fan@hlrs.de    <br>
70569 Stuttgart<br>
<br>

</div>
</blockquote></span></body>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11788.php">Ralph Castain: "[OMPI users] Open MPI v1.4.1 released"</a>
<li><strong>Previous message:</strong> <a href="11786.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Maybe in reply to:</strong> <a href="11762.php">cjohnson_at_[hidden]: "[OMPI users] Windows CMake build problems ... (cont.)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11790.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Reply:</strong> <a href="11790.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
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
