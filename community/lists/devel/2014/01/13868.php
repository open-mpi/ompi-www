<?
$subject_val = "Re: [OMPI devel] Unknown object files in libmpi.a";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 23 01:09:39 2014" -->
<!-- isoreceived="20140123060939" -->
<!-- sent="Wed, 22 Jan 2014 22:09:37 -0800" -->
<!-- isosent="20140123060937" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Unknown object files in libmpi.a" -->
<!-- id="CAAvDA17_s4moTv4L3eSBK_Hpj=T7vpiv_fhZ5rDLQFSoRYTDhQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAPgw+iPW6unisOXJ74ycSUi-weLEf4Yv9Nm=+DfDc1z2fH+4jw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Unknown object files in libmpi.a<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-23 01:09:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13869.php">Mike Dubman: "[OMPI devel] build failure in trunk"</a>
<li><strong>Previous message:</strong> <a href="13867.php">Paul Hargrove: "[OMPI devel] trunk and v1.7: xlc and lost atomics patch"</a>
<li><strong>In reply to:</strong> <a href="13865.php">Irvanda Kurniadi: "[OMPI devel] Unknown object files in libmpi.a"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Irvanda,
<br>
<p>Others on this list might have specific knowledge of the objects you
<br>
listed, but I am going to present a general solution that hopefully will
<br>
let you find the answers you seek.
<br>
<p>If you have libmpi.a build from sources configured with --enable-debug,
<br>
then the source file information is stored in the object files.  You can
<br>
use gdb to extract this information.
<br>
<p>I don't have an openmpi-1.6.x build on hand, but here is an example with
<br>
the current trunk.
<br>
None of the files you listed are present in this build, so I've picked one
<br>
of the profiling objects as an example.  You should replace &quot;[libdir]&quot; with
<br>
your actual openmpi installations lib directory.
<br>
<p>-bash-4.2$ ar x [libdir]/libmpi.a pcart_create.o
<br>
-bash-4.2$ gdb -q pcart_create.o
<br>
Reading symbols from
<br>
/home/phargrov/OMPI/openmpi-trunk-netbsd6-amd64/INST/lib/foo/pcart_create.o...done.
<br>
(gdb) list
<br>
1       pcart_create.c: No such file or directory.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in pcart_create.c
<br>
(gdb) info source
<br>
Current source file is pcart_create.c
<br>
Compilation directory is
<br>
/home/phargrov/OMPI/openmpi-trunk-netbsd6-amd64/BLD/ompi/mpi/c/profile
<br>
Source language is c.
<br>
Compiled with DWARF 2 debugging format.
<br>
Does not include preprocessor macro info.
<br>
<p><p>Notice I used 2 commands in gdb: &quot;list&quot; and &quot;info source&quot;.
<br>
The &quot;list&quot; appears to fail because the source directory has been deleted.
<br>
However, the &quot;list&quot; step is required to make gdb read the source info from
<br>
the object (or &quot;info source&quot; will fail).
<br>
The output from the second command, &quot;info source&quot;, is the important part:
<br>
&nbsp;+ The first is the name (without directory) of the source file.
<br>
&nbsp;+ The second is the directory in which the .o file was created.
<br>
That directory (for files generated at build time) or its &quot;twin&quot; in the
<br>
source tree (for normal source files) are the likely places to find the
<br>
source file.
<br>
<p>I hope that helps,
<br>
-Paul
<br>
<p>P.S.
<br>
If others have shorter sequences to get the same debug info from an object,
<br>
I am curious to hear them.
<br>
<p><p><p>On Wed, Jan 22, 2014 at 8:57 PM, Irvanda Kurniadi &lt;irvanda.k_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to port openmpi-1.6.5 in l4/fiasco. I checked the libmpi.a. I
</span><br>
<span class="quotelev1">&gt; did the &quot; ar t libmpi.a &quot; in my terminal. I can't find the source file (.c)
</span><br>
<span class="quotelev1">&gt; of some object files created in libmpi.a, such as:
</span><br>
<span class="quotelev1">&gt; ompi_bitmap.o
</span><br>
<span class="quotelev1">&gt; op_predefined.o
</span><br>
<span class="quotelev1">&gt; convertor.o
</span><br>
<span class="quotelev1">&gt; copy_functions.o
</span><br>
<span class="quotelev1">&gt; copy_functions_heterogeneous.o
</span><br>
<span class="quotelev1">&gt; datatype_pack.o
</span><br>
<span class="quotelev1">&gt; datatype_unpack.o
</span><br>
<span class="quotelev1">&gt; dt_add.o dt_args.o .. dt_sndrcv.o (15 files)
</span><br>
<span class="quotelev1">&gt; fake_stack.o
</span><br>
<span class="quotelev1">&gt; position.o
</span><br>
<span class="quotelev1">&gt; libdatatype_reliable_la-datatype_pack.o
</span><br>
<span class="quotelev1">&gt; libdatatype_reliable_la-datatype_unpack.o
</span><br>
<span class="quotelev1">&gt; common_sm_mmap.o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you tell me where is the source of those object files? Because I have
</span><br>
<span class="quotelev1">&gt; to compile every single .c file in openmpi which is needed to be compiled.
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; Irvanda
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13868/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13869.php">Mike Dubman: "[OMPI devel] build failure in trunk"</a>
<li><strong>Previous message:</strong> <a href="13867.php">Paul Hargrove: "[OMPI devel] trunk and v1.7: xlc and lost atomics patch"</a>
<li><strong>In reply to:</strong> <a href="13865.php">Irvanda Kurniadi: "[OMPI devel] Unknown object files in libmpi.a"</a>
<!-- nextthread="start" -->
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
