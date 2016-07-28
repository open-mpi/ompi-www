<?
$subject_val = "Re: [OMPI users] Windows CMake build problems ... (cont.)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 15 04:58:02 2010" -->
<!-- isoreceived="20100115095802" -->
<!-- sent="Fri, 15 Jan 2010 10:56:28 +0100" -->
<!-- isosent="20100115095628" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows CMake build problems ... (cont.)" -->
<!-- id="4B503BCC.2010006_at_hlrs.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20100114234818.0430d53b3e916c69cc97ff130928da34.896c557ff0.wbe_at_email02.secureserver.net" -->
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
<strong>Date:</strong> 2010-01-15 04:56:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11791.php">Roman Martonak: "[OMPI users] dynamic rules"</a>
<li><strong>Previous message:</strong> <a href="11789.php">Ashley Pittman: "Re: [OMPI users] MPI debugger"</a>
<li><strong>In reply to:</strong> <a href="11787.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11858.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Charlie,
<br>
<p>Glad to hear that you compiled it successfully.
<br>
<p>The error you got with 1.3.4 is a bug that the CMake script didn't set 
<br>
the SVN information correctly, and it has been fixed in 1.4 and later.
<br>
<p><p>Thanks,
<br>
Shiqing
<br>
<p><p>cjohnson_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Yes that was it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A much improved result now from CMake 2.6.4, no errors from compiling 
</span><br>
<span class="quotelev1">&gt; openmpi-1.4:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1&gt;libopen-pal - 0 error(s), 9 warning(s)
</span><br>
<span class="quotelev1">&gt; 2&gt;libopen-rte - 0 error(s), 7 warning(s)
</span><br>
<span class="quotelev1">&gt; 3&gt;opal-restart - 0 error(s), 0 warning(s)
</span><br>
<span class="quotelev1">&gt; 4&gt;opal-wrapper - 0 error(s), 0 warning(s)
</span><br>
<span class="quotelev1">&gt; 5&gt;libmpi - 0 error(s), 42 warning(s)
</span><br>
<span class="quotelev1">&gt; 6&gt;orte-checkpoint - 0 error(s), 0 warning(s)
</span><br>
<span class="quotelev1">&gt; 7&gt;orte-ps - 0 error(s), 0 warning(s)
</span><br>
<span class="quotelev1">&gt; 8&gt;orted - 0 error(s), 0 warning(s)
</span><br>
<span class="quotelev1">&gt; 9&gt;orte-clean - 0 error(s), 0 warning(s)
</span><br>
<span class="quotelev1">&gt; 10&gt;orterun - 0 error(s), 3 warning(s)
</span><br>
<span class="quotelev1">&gt; 11&gt;ompi_info - 0 error(s), 0 warning(s)
</span><br>
<span class="quotelev1">&gt; 12&gt;ompi-server - 0 error(s), 0 warning(s)
</span><br>
<span class="quotelev1">&gt; 13&gt;libmpi_cxx - 0 error(s), 61 warning(s)
</span><br>
<span class="quotelev1">&gt; ========== Build: 13 succeeded, 0 failed, 1 up-to-date, 0 skipped 
</span><br>
<span class="quotelev1">&gt; ==========
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And only one failure from compiling openmpi-1.3.4 (the ompi_info project):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1&gt;libopen-pal - 0 error(s), 9 warning(s)
</span><br>
<span class="quotelev2">&gt; &gt; 2&gt;libopen-rte - 0 error(s), 7 warning(s)
</span><br>
<span class="quotelev2">&gt; &gt; 3&gt;opal-restart - 0 error(s), 0 warning(s)
</span><br>
<span class="quotelev2">&gt; &gt; 4&gt;opal-wrapper - 0 error(s), 0 warning(s)
</span><br>
<span class="quotelev2">&gt; &gt; 5&gt;orte-checkpoint - 0 error(s), 0 warning(s)
</span><br>
<span class="quotelev2">&gt; &gt; 6&gt;libmpi - 0 error(s), 42 warning(s)
</span><br>
<span class="quotelev2">&gt; &gt; 7&gt;orte-ps - 0 error(s), 0 warning(s)
</span><br>
<span class="quotelev2">&gt; &gt; 8&gt;orted - 0 error(s), 0 warning(s)
</span><br>
<span class="quotelev2">&gt; &gt; 9&gt;orte-clean - 0 error(s), 0 warning(s)
</span><br>
<span class="quotelev2">&gt; &gt; 10&gt;orterun - 0 error(s), 3 warning(s)
</span><br>
<span class="quotelev2">&gt; &gt; 11&gt;ompi_info - 3 error(s), 0 warning(s)
</span><br>
<span class="quotelev2">&gt; &gt; 12&gt;ompi-server - 0 error(s), 0 warning(s)
</span><br>
<span class="quotelev2">&gt; &gt; 13&gt;libmpi_cxx - 0 error(s), 61 warning(s)
</span><br>
<span class="quotelev2">&gt; &gt; ========== Rebuild All: 13 succeeded, 1 failed, 0 skipped ==========
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the listing from the non-linking project:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 11&gt;------ Rebuild All started: Project: ompi_info, Configuration: 
</span><br>
<span class="quotelev1">&gt; Debug Win32 ------
</span><br>
<span class="quotelev1">&gt; 11&gt;Deleting intermediate and output files for project 'ompi_info', 
</span><br>
<span class="quotelev1">&gt; configuration 'Debug|Win32'
</span><br>
<span class="quotelev1">&gt; 11&gt;Compiling...
</span><br>
<span class="quotelev1">&gt; 11&gt;version.cc
</span><br>
<span class="quotelev1">&gt; 11&gt;..\..\..\..\openmpi-1.3.4\ompi\tools\ompi_info\version.cc(136) : 
</span><br>
<span class="quotelev1">&gt; error C2059: syntax error : ','
</span><br>
<span class="quotelev1">&gt; 11&gt;..\..\..\..\openmpi-1.3.4\ompi\tools\ompi_info\version.cc(147) : 
</span><br>
<span class="quotelev1">&gt; error C2059: syntax error : ','
</span><br>
<span class="quotelev1">&gt; 11&gt;..\..\..\..\openmpi-1.3.4\ompi\tools\ompi_info\version.cc(158) : 
</span><br>
<span class="quotelev1">&gt; error C2059: syntax error : ','
</span><br>
<span class="quotelev1">&gt; 11&gt;param.cc
</span><br>
<span class="quotelev1">&gt; 11&gt;output.cc
</span><br>
<span class="quotelev1">&gt; 11&gt;ompi_info.cc
</span><br>
<span class="quotelev1">&gt; 11&gt;components.cc
</span><br>
<span class="quotelev1">&gt; 11&gt;Generating Code...
</span><br>
<span class="quotelev1">&gt; 11&gt;Build log was saved at 
</span><br>
<span class="quotelev1">&gt; &quot;file://c:\prog\mon\ompi\tools\ompi_info\ompi_info.dir\Debug\BuildLog.htm&quot;
</span><br>
<span class="quotelev1">&gt; 11&gt;ompi_info - 3 error(s), 0 warning(s)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you Shiqing !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Charlie ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -------- Original Message --------
</span><br>
<span class="quotelev1">&gt;     Subject: Re: [OMPI users] Windows CMake build problems ... (cont.)
</span><br>
<span class="quotelev1">&gt;     From: Shiqing Fan &lt;fan_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Date: Thu, January 14, 2010 11:20 am
</span><br>
<span class="quotelev1">&gt;     To: Open MPI Users &lt;users_at_[hidden]&gt;,
</span><br>
<span class="quotelev1">&gt;     cjohnson_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi Charlie,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The problem turns out to be the different behavior of one CMake
</span><br>
<span class="quotelev1">&gt;     macro in
</span><br>
<span class="quotelev1">&gt;     different version of CMake. And it's fixed in Open MPI trunk with
</span><br>
<span class="quotelev1">&gt;     r22405. I also created a ticket to move the fix over to 1.4
</span><br>
<span class="quotelev1">&gt;     branch, see
</span><br>
<span class="quotelev1">&gt;     #2169: <a href="https://svn.open-mpi.org/trac/ompi/ticket/2169">https://svn.open-mpi.org/trac/ompi/ticket/2169</a> .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     So you could either switch to use OMPI trunk or use CMake 2.6 to
</span><br>
<span class="quotelev1">&gt;     solve
</span><br>
<span class="quotelev1">&gt;     the problem. Thanks a lot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Best Regards,
</span><br>
<span class="quotelev1">&gt;     Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     cjohnson_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; The OpenMPI build problem I'm having occurs in both OpenMPI 1.4
</span><br>
<span class="quotelev1">&gt;     and 1.3.4.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I am on a Windows 7 (US) Enterprise (x86) OS on an HP system with
</span><br>
<span class="quotelev2">&gt;     &gt; Intel core 2 extreme x9000 (4GB RAM), using the 2005 Visual
</span><br>
<span class="quotelev1">&gt;     Studio for
</span><br>
<span class="quotelev2">&gt;     &gt; S/W Architects (release 8.0.50727.867).
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; [That release has everything the platform SDK would have.]
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I'm using CMake 2.8 to generate code, I used it correctly,
</span><br>
<span class="quotelev1">&gt;     pointing at
</span><br>
<span class="quotelev2">&gt;     &gt; the root directory where the makelists are located for the source
</span><br>
<span class="quotelev1">&gt;     side
</span><br>
<span class="quotelev2">&gt;     &gt; and to an empty directory for the build side: did configure, _*I did
</span><br>
<span class="quotelev2">&gt;     &gt; not click debug this time as suggested by Shiqing*_, configure
</span><br>
<span class="quotelev1">&gt;     again,
</span><br>
<span class="quotelev2">&gt;     &gt; generate and opened the OpenMPI.sln file created by CMake. Then I
</span><br>
<span class="quotelev2">&gt;     &gt; right-clicked on the &quot;ALL_BUILD&quot; project and selected &quot;build&quot;. Then
</span><br>
<span class="quotelev2">&gt;     &gt; did one &quot;rebuild&quot;, just in case build order might get one more
</span><br>
<span class="quotelev1">&gt;     success
</span><br>
<span class="quotelev2">&gt;     &gt; (which it seemed to, but I could not find).
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; 2 projects built, 12 did not. I have the build listing. [I'm
</span><br>
<span class="quotelev1">&gt;     afraid of
</span><br>
<span class="quotelev2">&gt;     &gt; what the mailing list server would do if I attached it to this
</span><br>
<span class="quotelev1">&gt;     email.]
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; All the compiles were successful (warnings at most.) All the errors
</span><br>
<span class="quotelev2">&gt;     &gt; were were from linking the VC projects:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; *1&gt;libopen-pal - 0 error(s), 9 warning(s)*
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart - 32 error(s), 0 warning(s)
</span><br>
<span class="quotelev2">&gt;     &gt; 4&gt;opal-wrapper - 21 error(s), 0 warning(s)
</span><br>
<span class="quotelev2">&gt;     &gt; 2&gt;libopen-rte - 749 error(s), 7 warning(s)
</span><br>
<span class="quotelev2">&gt;     &gt; 5&gt;orte-checkpoint - 32 error(s), 0 warning(s)
</span><br>
<span class="quotelev2">&gt;     &gt; 7&gt;orte-ps - 28 error(s), 0 warning(s)
</span><br>
<span class="quotelev2">&gt;     &gt; 8&gt;orted - 2 error(s), 0 warning(s)
</span><br>
<span class="quotelev2">&gt;     &gt; 9&gt;orte-clean - 13 error(s), 0 warning(s)
</span><br>
<span class="quotelev2">&gt;     &gt; 10&gt;orterun - 100 error(s), 3 warning(s)
</span><br>
<span class="quotelev2">&gt;     &gt; 6&gt;libmpi - 2133 error(s), 42 warning(s)
</span><br>
<span class="quotelev2">&gt;     &gt; 12&gt;ompi-server - 27 error(s), 0 warning(s)
</span><br>
<span class="quotelev2">&gt;     &gt; 11&gt;ompi_info - 146 error(s), 0 warning(s)
</span><br>
<span class="quotelev2">&gt;     &gt; 13&gt;libmpi_cxx - 456 error(s), 61 warning(s)
</span><br>
<span class="quotelev2">&gt;     &gt; ========== Rebuild All: 2 succeeded, 12 failed, 0 skipped ==========
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; It said that 2 succeeded, I could not find the second build
</span><br>
<span class="quotelev1">&gt;     success in
</span><br>
<span class="quotelev2">&gt;     &gt; the listing.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; *However, everything did compile, and thank you Shiqing !*
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Here is the listing for the first failed link, on &quot;opal-restart&quot;:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;------ Rebuild All started: Project: opal-restart, Configuration:
</span><br>
<span class="quotelev2">&gt;     &gt; Debug Win32 ------
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;Deleting intermediate and output files for project 'opal-restart',
</span><br>
<span class="quotelev2">&gt;     &gt; configuration 'Debug|Win32'
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;Compiling...
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.c
</span><br>
<span class="quotelev2">&gt;     &gt; 2&gt;Compiling...
</span><br>
<span class="quotelev2">&gt;     &gt; 2&gt;snapc_base_select.c
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;Compiling manifest to resources...
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;Linking...
</span><br>
<span class="quotelev2">&gt;     &gt; 2&gt;snapc_base_open.c
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2001: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__opal_crs
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2001: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__opal_crs_base_snapshot_t_class
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2001: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__opal_crs_base_selected_component
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__opal_crs_base_select referenced in function _main
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__opal_crs_base_open referenced in function _main
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__opal_output_verbose referenced in function _main
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__opal_crs_base_extract_expected_component referenced in
</span><br>
<span class="quotelev1">&gt;     function
</span><br>
<span class="quotelev2">&gt;     &gt; _main
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__opal_crs_base_get_snapshot_directory referenced in
</span><br>
<span class="quotelev1">&gt;     function _main
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__opal_setenv referenced in function _main
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__mca_base_param_env_var referenced in function _main
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__opal_show_help referenced in function _main
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__opal_class_initialize referenced in function &quot;struct
</span><br>
<span class="quotelev2">&gt;     &gt; opal_object_t * __cdecl opal_obj_new(struct opal_class_t *)&quot;
</span><br>
<span class="quotelev2">&gt;     &gt; (?opal_obj_new@@YAPAUopal_object_t@@PAUopal_class_t@@@Z)
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2001: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__opal_cr_is_tool
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__opal_init referenced in function &quot;int __cdecl
</span><br>
<span class="quotelev2">&gt;     &gt; initialize(int,char * * const)&quot; (?initialize@@YAHHQAPAD_at_Z)
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__opal_output_set_verbosity referenced in function &quot;int __cdecl
</span><br>
<span class="quotelev2">&gt;     &gt; initialize(int,char * * const)&quot; (?initialize@@YAHHQAPAD_at_Z)
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__opal_output_open referenced in function &quot;int __cdecl
</span><br>
<span class="quotelev2">&gt;     &gt; initialize(int,char * * const)&quot; (?initialize@@YAHHQAPAD_at_Z)
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__opal_init_util referenced in function &quot;int __cdecl
</span><br>
<span class="quotelev2">&gt;     &gt; initialize(int,char * * const)&quot; (?initialize@@YAHHQAPAD_at_Z)
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__opal_finalize referenced in function &quot;int __cdecl
</span><br>
<span class="quotelev2">&gt;     &gt; finalize(void)&quot; (?finalize@@YAHXZ)
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__opal_argv_join referenced in function &quot;int __cdecl
</span><br>
<span class="quotelev2">&gt;     &gt; parse_args(int,char * * const)&quot; (?parse_args@@YAHHQAPAD_at_Z)
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__opal_cmd_line_get_tail referenced in function &quot;int __cdecl
</span><br>
<span class="quotelev2">&gt;     &gt; parse_args(int,char * * const)&quot; (?parse_args@@YAHHQAPAD_at_Z)
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__opal_cmd_line_get_usage_msg referenced in function &quot;int
</span><br>
<span class="quotelev1">&gt;     __cdecl
</span><br>
<span class="quotelev2">&gt;     &gt; parse_args(int,char * * const)&quot; (?parse_args@@YAHHQAPAD_at_Z)
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__opal_argv_count referenced in function &quot;int __cdecl
</span><br>
<span class="quotelev2">&gt;     &gt; parse_args(int,char * * const)&quot; (?parse_args@@YAHHQAPAD_at_Z)
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__mca_base_cmd_line_process_args referenced in function &quot;int
</span><br>
<span class="quotelev2">&gt;     &gt; __cdecl parse_args(int,char * * const)&quot; (?parse_args@@YAHHQAPAD_at_Z)
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__opal_cmd_line_parse referenced in function &quot;int __cdecl
</span><br>
<span class="quotelev2">&gt;     &gt; parse_args(int,char * * const)&quot; (?parse_args@@YAHHQAPAD_at_Z)
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__mca_base_cmd_line_setup referenced in function &quot;int __cdecl
</span><br>
<span class="quotelev2">&gt;     &gt; parse_args(int,char * * const)&quot; (?parse_args@@YAHHQAPAD_at_Z)
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__mca_base_open referenced in function &quot;int __cdecl
</span><br>
<span class="quotelev2">&gt;     &gt; parse_args(int,char * * const)&quot; (?parse_args@@YAHHQAPAD_at_Z)
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__opal_cmd_line_create referenced in function &quot;int __cdecl
</span><br>
<span class="quotelev2">&gt;     &gt; parse_args(int,char * * const)&quot; (?parse_args@@YAHHQAPAD_at_Z)
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__opal_argv_free referenced in function &quot;int __cdecl
</span><br>
<span class="quotelev2">&gt;     &gt; check_file(char *)&quot; (?check_file@@YAHPAD_at_Z)
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__opal_output referenced in function &quot;int __cdecl
</span><br>
<span class="quotelev1">&gt;     check_file(char
</span><br>
<span class="quotelev2">&gt;     &gt; *)&quot; (?check_file@@YAHPAD_at_Z)
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__opal_crs_base_metadata_read_token referenced in function &quot;int
</span><br>
<span class="quotelev2">&gt;     &gt; __cdecl post_env_vars(int,char *)&quot; (?post_env_vars@@YAHHPAD_at_Z)
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart.obj : error LNK2019: unresolved external symbol
</span><br>
<span class="quotelev2">&gt;     &gt; __imp__opal_asprintf referenced in function &quot;int __cdecl
</span><br>
<span class="quotelev2">&gt;     &gt; post_env_vars(int,char *)&quot; (?post_env_vars@@YAHHPAD_at_Z)
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;C:\prog\mon\Debug\opal-restart.exe : fatal error LNK1120: 31
</span><br>
<span class="quotelev2">&gt;     &gt; unresolved externals
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;Build log was saved at
</span><br>
<span class="quotelev2">&gt;     &gt; &quot;file://c:\prog\mon\opal\tools\opal-restart\opal-restart.dir\Debug\BuildLog.htm
</span><br>
<span class="quotelev1">&gt;     &lt;file://c:%5Cprog%5Cmon%5Copal%5Ctools%5Copal-restart%5Copal-restart.dir%5CDebug%5CBuildLog.htm&gt;&quot;
</span><br>
<span class="quotelev2">&gt;     &gt; 3&gt;opal-restart - 32 error(s), 0 warning(s)
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Now, these link errors may be from missing networking software and
</span><br>
<span class="quotelev2">&gt;     &gt; hardware, I was just following the instructions in
</span><br>
<span class="quotelev2">&gt;     &gt; openmpi-1.4.tar.gz:a/openmpi-1.4/README.WINDOWS:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; First approach: Using CMake
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; NOTE: CMake support is available in the Open MPI development
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; trunk and 1.3.3 release.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; 1. Download the latest version of CMake (at least v2.4).
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; 2. In the CMake GUI, add the source path and build path of Open MPI
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; (out of source build is recommended).
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; 3. Then configure, and after the first time configuration, all
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; available options will show up in the CMake GUI. Select the
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; options that you require.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; 4. Run configure again to generate all Windows solution files; they
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; will be generated in build path.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; 5. Go to the build directory, open the generated Windows solution
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; file, and compile.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; 6. To generate a installer, you should install NSIS, and build the
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; 'PACKAGE' project in the Open MPI sulotion.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; These instructions did not mention any link libraries I had to
</span><br>
<span class="quotelev1">&gt;     add to
</span><br>
<span class="quotelev2">&gt;     &gt; complete the build.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Thanks in advance for any help !
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Charlie ...
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     Shiqing Fan <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
</span><br>
<span class="quotelev1">&gt;     High Performance Computing Tel.: +49 711 685 87234
</span><br>
<span class="quotelev1">&gt;     Center Stuttgart (HLRS) Fax.: +49 711 685 65832
</span><br>
<span class="quotelev1">&gt;     Address:Allmandring 30 email: fan_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     70569 Stuttgart
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="11791.php">Roman Martonak: "[OMPI users] dynamic rules"</a>
<li><strong>Previous message:</strong> <a href="11789.php">Ashley Pittman: "Re: [OMPI users] MPI debugger"</a>
<li><strong>In reply to:</strong> <a href="11787.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11858.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
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
