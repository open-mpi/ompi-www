<?
$subject_val = "[OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 11 00:42:10 2010" -->
<!-- isoreceived="20100511044210" -->
<!-- sent="Tue, 11 May 2010 16:42:01 +1200" -->
<!-- isosent="20100511044201" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="[OMPI devel] The&amp;quot; Missing Symbol&amp;quot; issue and OpenMPI on NetBSD" -->
<!-- id="d8f5cc0fca4973bc6f96aa8f4aae1ab2.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD<br>
<strong>From:</strong> <a href="mailto:Kevin.Buckley_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20The&amp;amp;quot;%20Missing%20Symbol&amp;amp;quot;%20issue%20and%20OpenMPI%20on%20NetBSD"><em>Kevin.Buckley_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-05-11 00:42:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7910.php">Ralf Wildenhues: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="7908.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7910.php">Ralf Wildenhues: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<li><strong>Reply:</strong> <a href="7910.php">Ralf Wildenhues: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
<p>this is an issue that I started a while ago on the R HPC SIG mailing
<br>
list and which then moved into an off-list conversation with Jeff
<br>
Squyres but on which no progress has been made.
<br>
<p>I believe that the issue is less with Rmpi than with something
<br>
that Rmpi is exposing in OpenMPI specifically on NetBSD, hence
<br>
posting here.
<br>
<p>(FWIW, I have since had an Rmpi/R/SGE/OpenMPI stack running on
<br>
&nbsp;RHEL/Vmware, once I realised that I had to exclude the virbr0
<br>
&nbsp;interfaces that OpenMPI seemed to take quite a liking to!)
<br>
<p>I appreciate that few on the list are running OpenMPI on NetBSD
<br>
but, as detailed below, I found the OpenMPI thread
<br>
<p>&quot;[OMPI devel] Missing Symbol&quot;
<br>
<p>that seems to tie in with the problem I am seeing and. more
<br>
importantly, originated away from an NetBSD implementation.
<br>
<p>I thus thought I'd stick the guts of the off-list conversation
<br>
onto the OpenMPI list and see if anyone else who may have been
<br>
involved with the &quot;Missing Symbol&quot; thread has any ideas.
<br>
<p>There would seem to have been four emails of relevance from that
<br>
off-list conversation, so eyes down, looking for a full house:
<br>
<p><p><p>=== Part 1 ===
<br>
<p>Basically, when I come to load the Rmpi library
<br>
<p><span class="quotelev1">&gt; library(Rmpi, lib.loc=&quot;/local/scratch/kevin/Pkgs/R/&quot;)
</span><br>
<p>I get a swathe of OpenMPI errors (attached below)
<br>
<p><p>[europa.ecs.vuw.ac.nz:09687] mca: base: component_find: unable to open
<br>
/usr/pkg/lib/openmpi/mca_carto_auto_detect: perhaps a missing symbol, or
<br>
compiled for a different version of Open MPI? (ignored)
<br>
[europa.ecs.vuw.ac.nz:09687] mca: base: component_find: unable to open
<br>
/usr/pkg/lib/openmpi/mca_carto_file: perhaps a missing symbol, or compiled
<br>
for a different version of Open MPI? (ignored)
<br>
<p><p>=== Part 2 ===
<br>
<p><span class="quotelev1">&gt; An off the wall question -- do you have multiple versions of Open MPI
</span><br>
<span class="quotelev1">&gt; installed on the system, perchance?  I wonder if you compiled Rmpi.so with
</span><br>
<span class="quotelev1">&gt; one version of OMPI and it's picking up libmpi.so from the other version
</span><br>
<span class="quotelev1">&gt; (or something along those lines).  Mismatches between the versions might
</span><br>
<span class="quotelev1">&gt; well cause issues like this...?
</span><br>
<p>That's not it. Everything is from 1.4.1.
<br>
<p>I have once again delved deeper into the innards of the OpenMPI
<br>
source than I would have expected and seen that the error message
<br>
is coming from just after
<br>
<p>File:
<br>
opal/mca/base/mca_base_component_find.c
<br>
<p>Routine:
<br>
static int open_component(component_file_item_t *target_file,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_list_t *found_components)
<br>
<p>Code:
<br>
#if OPAL_HAVE_LTDL_ADVISE
<br>
&nbsp;&nbsp;component_handle = lt_dlopenadvise(target_file-&gt;filename,
<br>
opal_mca_dladvise);
<br>
#else
<br>
&nbsp;&nbsp;component_handle = lt_dlopenext(target_file-&gt;filename);
<br>
#endif
<br>
<p><p>where there's a bit of ferkling going on so as to check for
<br>
a given file existing, hence the &quot;slightly better error message&quot;.
<br>
<p>We have
<br>
<p>./opal/include/opal_config.h:#define OPAL_HAVE_LTDL_ADVISE 0
<br>
<p>so we are invoking the lt_dlopenext clause.
<br>
<p>That is a file that gets patched in the NetBSD build as follows
<br>
<p>$diff opal/mca/base/mca_base_component_find.c{.orig,}
<br>
44,46d43
<br>
&lt;   #ifndef __WINDOWS__
<br>
&lt;     #include &quot;opal/libltdl/ltdl.h&quot;
<br>
&lt;   #else
<br>
48d44
<br>
&lt;   #endif
<br>
<p>ie we have taken out the inclusion of
<br>
<p>opal/libltdl/ltdl.h
<br>
<p>to force the use of the NetBSD &quot;ltdl.h&quot; one, which I guess might point
<br>
to something underlying the issue but as to what ...
<br>
<p>OK, from what I can see, I have
<br>
<p>$ls -l /usr/pkg/lib/openmpi/mca_carto_auto_detect*
<br>
-rw-r--r-- 1 root wheel 3892 Mar 22 16:21
<br>
/usr/pkg/lib/openmpi/mca_carto_auto_detect.a
<br>
-rwxr-xr-x 1 root wheel 1105 Mar 22 16:21
<br>
/usr/pkg/lib/openmpi/mca_carto_auto_detect.la*
<br>
-rwxr-xr-x 1 root wheel 7078 Mar 22 16:21
<br>
/usr/pkg/lib/openmpi/mca_carto_auto_detect.so*
<br>
<p><p>however there are no &quot;versioned&quot; links for the .so file
<br>
(.so.0, .so.0.0.0 etc) but would that be an issue - probably not.
<br>
<p><p>Furthermore, the Autobook (yes, I read some of that too!) says:
<br>
<p>Function: lt_dlhandle lt_dlopenext (const char *filename)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;This function is used in precisely the same way as lt_dlopen. However,
<br>
if the search for the named module by exact match against filename
<br>
fails, it will try again with a `.la' extension, and then the native
<br>
shared library extension (`.sl' on HP-UX, for example).
<br>
<p>so the file that will end up being referenced obviously exists,
<br>
so why would
<br>
<p>lt_dlopenext
<br>
<p>not be able to open it the library there?
<br>
<p>It would seem (from the error message)that what's being passed
<br>
to the routine as
<br>
<p>target_file-&gt;filename
<br>
<p>is
<br>
<p>/usr/pkg/lib/openmpi/mca_carto_file
<br>
<p>and so lt_dlopenext should at least find the .la and the .so
<br>
rather than punt, no ?
<br>
<p>I am at a loss as to how to debug further this as my experience of
<br>
adding flags to openmpi invocations is zero.
<br>
<p><p>In case you speak libtool (?) I enclose the .la file but nothing
<br>
looks &quot;wrong&quot; to me.
<br>
<p>Kevin
<br>
<p><p># mca_carto_auto_detect.la - a libtool library file
<br>
# Generated by ltmain.sh (GNU libtool) 2.2.6b
<br>
#
<br>
# Please DO NOT delete this file!
<br>
# It is necessary for linking the library.
<br>
<p># The name that we can dlopen(3).
<br>
dlname='mca_carto_auto_detect.so'
<br>
<p># Names of this library.
<br>
library_names='mca_carto_auto_detect.so mca_carto_auto_detect.so
<br>
mca_carto_auto_
<br>
detect.so'
<br>
<p># The name of the static archive.
<br>
old_library='mca_carto_auto_detect.a'
<br>
<p># Linker flags that can not go in dependency_libs.
<br>
inherited_linker_flags=' -pthread'
<br>
<p># Libraries that this one depends upon.
<br>
dependency_libs='-L/usr/pkg/lib -lutil -lm -lpthread'
<br>
<p># Names of additional weak libraries provided by this library
<br>
weak_library_names=''
<br>
<p># Version information for mca_carto_auto_detect.
<br>
current=0
<br>
age=0
<br>
revision=0
<br>
<p># Is this an already installed library?
<br>
installed=yes
<br>
<p># Should we warn about portability when linking against -modules?
<br>
shouldnotlink=yes
<br>
<p># Files to dlopen/dlpreopen
<br>
dlopen=''
<br>
dlpreopen=''
<br>
<p># Directory that this library needs to be installed in:
<br>
libdir='/usr/pkg/lib/openmpi'
<br>
<p># This file has been modified by buildlink3.
<br>
<p><p>=== Part 3 ===
<br>
<p><span class="quotelev1">&gt; Furthermore, the Autobook (yes, I read some of that too!)
</span><br>
<p>Indeed, I read so much I thought I'd compile the example
<br>
it has about accessing a dynamic library, vis:
<br>
<p><a href="http://sourceware.org/autobook/autobook/autobook_169.html">http://sourceware.org/autobook/autobook/autobook_169.html</a>
<br>
<p>A slightly modified and compiled version of that code shows:
<br>
<p>$./test_lt_dlopnext /usr/pkg/lib/openmpi/mca_carto_auto_detect.so thing
<br>
./test_lt_dlopnext: file not found
<br>
<p>so for some reason, when used in this context, that lt_dlopnext()
<br>
is failing.
<br>
<p>However, as we know, OpenMPI does run on our systems here, so why
<br>
would we be tickling:
<br>
<p>opal/mca/base/mca_base_component_find.c
<br>
<p>here and not in other invocations of OpenMPI ?
<br>
<p><p>=== Part 4 ===
<br>
<p>Is this, in someway, tied into the OpenMPI devel thread I
<br>
just found containing this posting ?
<br>
<p><a href="http://www.open-mpi.org/community/lists/devel/2010/03/7556.php">http://www.open-mpi.org/community/lists/devel/2010/03/7556.php</a>
<br>
<p>&nbsp;&nbsp;Subject: Re: [OMPI devel] Missing Symbol
<br>
&nbsp;&nbsp;From: Jeff Squyres (jsquyres_at_[hidden])
<br>
&nbsp;&nbsp;Date: 2010-03-05 18:26:13
<br>
<p>In case it is of any benefit - as the actualities of what OpenMPI
<br>
is doing here may be escaping me and there's a suggestion in it
<br>
that implies dlopenext fails &quot;silently&quot; if there's a missing
<br>
symbol - what would be the missing symbol in this ?
<br>
<p>&nbsp;$ldd /usr/pkg/lib/openmpi/mca_carto_auto_detect.so
<br>
/usr/pkg/lib/openmpi/mca_carto_auto_detect.so:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-lc.12 =&gt; /usr/lib/libc.so.12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-lutil.7 =&gt; /usr/lib/libutil.so.7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-lm.0 =&gt; /usr/lib/libm.so.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-lpthread.0 =&gt; /usr/lib/libpthread.so.0
<br>
<p>$nm /usr/pkg/lib/openmpi/mca_carto_auto_detect.so
<br>
00001b54 A _DYNAMIC
<br>
00001c3c a _GLOBAL_OFFSET_TABLE_
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;w _Jv_RegisterClasses
<br>
00001a48 d __CTOR_END__
<br>
00001a44 d __CTOR_LIST__
<br>
00001a50 d __DTOR_END__
<br>
00001a4c d __DTOR_LIST__
<br>
00000a14 r __EH_FRAME_BEGIN__
<br>
00000a14 r __FRAME_END__
<br>
00001a54 d __JCR_END__
<br>
00001a54 d __JCR_LIST__
<br>
00001c74 A __bss_start
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;w __cxa_finalize
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;w __deregister_frame_info
<br>
00000954 t __do_global_ctors_aux
<br>
00000750 t __do_global_dtors_aux
<br>
00001c68 d __dso_handle
<br>
00000887 t __i686.get_pc_thunk.bx
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;w __register_frame_info
<br>
00001c74 A _edata
<br>
00001c90 A _end
<br>
00000990 T _fini
<br>
000006b0 T _init
<br>
00000830 t auto_detect_open
<br>
00001c74 b completed.3420
<br>
000007cc t frame_dummy
<br>
00001b38 d loc_module
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U mca_base_param_find
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U mca_base_param_lookup_int
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U mca_base_param_reg_int
<br>
00001a60 D mca_carto_auto_detect_component
<br>
00001c78 b object.3478
<br>
00000890 t opal_carto_auto_detect_component_query
<br>
00001c70 d opal_carto_auto_detect_component_version_string
<br>
000008f0 t opal_carto_auto_detect_finalize
<br>
00000920 t opal_carto_auto_detect_init
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U opal_carto_base_common_host_graph
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U opal_carto_base_free_graph_fn
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U opal_carto_base_get_nodes_distance_fn
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U opal_carto_base_graph_create_fn
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U opal_carto_base_graph_find_node_fn
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U opal_carto_base_graph_get_host_graph_fn
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U opal_carto_base_graph_spf_fn
<br>
00001c6c d p.3418
<br>
<p><p>Hoping against hope that someone might have an idea,
<br>
Kevin
<br>
<p><pre>
-- 
Kevin M. Buckley                                  Room:  CO327
School of Engineering and                         Phone: +64 4 463 5971
 Computer Science
Victoria University of Wellington
New Zealand
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7910.php">Ralf Wildenhues: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="7908.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7910.php">Ralf Wildenhues: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<li><strong>Reply:</strong> <a href="7910.php">Ralf Wildenhues: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
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
