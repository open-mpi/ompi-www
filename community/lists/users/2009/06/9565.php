<?
$subject_val = "[OMPI users] Valgrind writev() errors with 1.3.2.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  8 15:09:14 2009" -->
<!-- isoreceived="20090608190914" -->
<!-- sent="Mon, 08 Jun 2009 13:09:10 -0600" -->
<!-- isosent="20090608190910" -->
<!-- name="tom fogal" -->
<!-- email="tfogal_at_[hidden]" -->
<!-- subject="[OMPI users] Valgrind writev() errors with 1.3.2." -->
<!-- id="auto-000019643315_at_sci.utah.edu" -->
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
<strong>Subject:</strong> [OMPI users] Valgrind writev() errors with 1.3.2.<br>
<strong>From:</strong> tom fogal (<em>tfogal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-08 15:09:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9566.php">Ralph Castain: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Previous message:</strong> <a href="9564.php">DEVEL Michel: "Re: [OMPI users] What flags for configure for a single	machine	installation ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9566.php">Ralph Castain: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Reply:</strong> <a href="9566.php">Ralph Castain: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I've configured a source build of OpenMPI 1.3.2 with valgrind enabled
<br>
[1], and I'm seeing a lot of errors with writev() when I run this under
<br>
valgrind.  For example, with the following `hello, world' program:
<br>
<p>&nbsp;&nbsp;#include &lt;stdio.h&gt;
<br>
&nbsp;&nbsp;#include &lt;mpi.h&gt;
<br>
<p>&nbsp;&nbsp;int main(int argc, char *argv[]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;puts(&quot;Hello, world!&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
&nbsp;&nbsp;}
<br>
<p>I see errors like the following:
<br>
<p>&nbsp;&nbsp;==12342== Syscall param writev(vector[...]) points to uninitialised byte(s)
<br>
&nbsp;&nbsp;==12342==    at 0x61DF733: writev (in /lib/libc-2.7.so)
<br>
&nbsp;&nbsp;==12342==    by 0x7889AB9: mca_oob_tcp_msg_send_handler (oob_tcp_msg.c:265)
<br>
&nbsp;&nbsp;==12342==    by 0x788B1A0: mca_oob_tcp_peer_send (oob_tcp_peer.c:197)
<br>
&nbsp;&nbsp;==12342==    by 0x788FF2A: mca_oob_tcp_send_nb (oob_tcp_send.c:167)
<br>
&nbsp;&nbsp;==12342==    by 0x767C7EC: orte_rml_oob_send (rml_oob_send.c:137)
<br>
&nbsp;&nbsp;==12342==    by 0x767D19A: orte_rml_oob_send_buffer (rml_oob_send.c:269)
<br>
&nbsp;&nbsp;==12342==    by 0x7C9F3DF: allgather (grpcomm_bad_module.c:369)
<br>
&nbsp;&nbsp;==12342==    by 0x7C9FD9E: modex (grpcomm_bad_module.c:497)
<br>
&nbsp;&nbsp;==12342==    by 0x4E6DCAF: ompi_mpi_init (ompi_mpi_init.c:626)
<br>
<p>The full vg log is appended [2].  Of course, I could just suppress
<br>
this error, but I get this for a lot (every?) MPI call which does
<br>
communication, it seems (broadcasts, sends, recv's, allgathers, etc.).
<br>
I'm worried a suppression would suppress too much / suppress an error
<br>
I've caused.
<br>
<p>Have others seen this?  Can I suppress perhaps from the
<br>
orte_rml_oob_send_buffer down (safely)?
<br>
<p>-tom
<br>
<p>[1] configured via: gnu_pkg \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-memchecker \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--disable-mpi-f77 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-pretty-print-stacktrace \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-cxx-exceptions \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpi-threads \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-valgrind=${PREFIX} \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--without-gm \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--without-mx \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--without-openib \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--without-psm \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-pic \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-gnu-ld
<br>
&nbsp;&nbsp;where gnu_pkg is basically a function which calls configure with
<br>
&nbsp;&nbsp;--prefix=${PREFIX}.
<br>
<p>[2]
<br>
==12342== Memcheck, a memory error detector.
<br>
==12342== Copyright (C) 2002-2008, and GNU GPL'd, by Julian Seward et al.
<br>
==12342== Using LibVEX rev 1884, a library for dynamic binary translation.
<br>
==12342== Copyright (C) 2004-2008, and GNU GPL'd, by OpenWorks LLP.
<br>
==12342== Using valgrind-3.4.1, a dynamic binary instrumentation framework.
<br>
==12342== Copyright (C) 2000-2008, and GNU GPL'd, by Julian Seward et al.
<br>
==12342== For more details, rerun with: -v
<br>
==12342== 
<br>
==12342== My PID = 12342, parent PID = 12341.  Prog and args are:
<br>
==12342==    ./a.out
<br>
==12342== 
<br>
==12342== Warning: client syscall munmap tried to modify addresses 0xffffffffffffffff-0xffe
<br>
==12342== Syscall param writev(vector[...]) points to uninitialised byte(s)
<br>
==12342==    at 0x61DF733: writev (in /lib/libc-2.7.so)
<br>
==12342==    by 0x7889AB9: mca_oob_tcp_msg_send_handler (oob_tcp_msg.c:265)
<br>
==12342==    by 0x788B1A0: mca_oob_tcp_peer_send (oob_tcp_peer.c:197)
<br>
==12342==    by 0x788FF2A: mca_oob_tcp_send_nb (oob_tcp_send.c:167)
<br>
==12342==    by 0x767C7EC: orte_rml_oob_send (rml_oob_send.c:137)
<br>
==12342==    by 0x767D19A: orte_rml_oob_send_buffer (rml_oob_send.c:269)
<br>
==12342==    by 0x7C9F3DF: allgather (grpcomm_bad_module.c:369)
<br>
==12342==    by 0x7C9FD9E: modex (grpcomm_bad_module.c:497)
<br>
==12342==    by 0x4E6DCAF: ompi_mpi_init (ompi_mpi_init.c:626)
<br>
==12342==    by 0x4EAAC88: PMPI_Init (pinit.c:80)
<br>
==12342==    by 0x400857: main (hello.c:5)
<br>
==12342==  Address 0x677697b is 107 bytes inside a block of size 256 alloc'd
<br>
==12342==    at 0x4C22A51: realloc (vg_replace_malloc.c:429)
<br>
==12342==    by 0x53DCBE0: opal_dss_buffer_extend (dss_internal_functions.c:63)
<br>
==12342==    by 0x53DE4BA: opal_dss_copy_payload (dss_load_unload.c:164)
<br>
==12342==    by 0x7C9F314: allgather (grpcomm_bad_module.c:363)
<br>
==12342==    by 0x7C9FD9E: modex (grpcomm_bad_module.c:497)
<br>
==12342==    by 0x4E6DCAF: ompi_mpi_init (ompi_mpi_init.c:626)
<br>
==12342==    by 0x4EAAC88: PMPI_Init (pinit.c:80)
<br>
==12342==    by 0x400857: main (hello.c:5)
<br>
==12342==  Uninitialised value was created by a stack allocation
<br>
==12342==    at 0x53FFA60: opal_ifinit (if.c:147)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&lt;insert a suppression name here&gt;
<br>
&nbsp;&nbsp;&nbsp;Memcheck:Param
<br>
&nbsp;&nbsp;&nbsp;writev(vector[...])
<br>
&nbsp;&nbsp;&nbsp;fun:writev
<br>
&nbsp;&nbsp;&nbsp;fun:mca_oob_tcp_msg_send_handler
<br>
&nbsp;&nbsp;&nbsp;fun:mca_oob_tcp_peer_send
<br>
&nbsp;&nbsp;&nbsp;fun:mca_oob_tcp_send_nb
<br>
&nbsp;&nbsp;&nbsp;fun:orte_rml_oob_send
<br>
&nbsp;&nbsp;&nbsp;fun:orte_rml_oob_send_buffer
<br>
&nbsp;&nbsp;&nbsp;fun:allgather
<br>
&nbsp;&nbsp;&nbsp;fun:modex
<br>
&nbsp;&nbsp;&nbsp;fun:ompi_mpi_init
<br>
&nbsp;&nbsp;&nbsp;fun:PMPI_Init
<br>
&nbsp;&nbsp;&nbsp;fun:main
<br>
}
<br>
==12342== 
<br>
==12342== ERROR SUMMARY: 1 errors from 1 contexts (suppressed: 307 from 3)
<br>
==12342== malloc/free: in use at exit: 204,012 bytes in 2,022 blocks.
<br>
==12342== malloc/free: 10,382 allocs, 8,360 frees, 14,603,162 bytes allocated.
<br>
==12342== For a detailed leak analysis,  rerun with: --leak-check=yes
<br>
==12342== For counts of detected errors, rerun with: -v
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9566.php">Ralph Castain: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Previous message:</strong> <a href="9564.php">DEVEL Michel: "Re: [OMPI users] What flags for configure for a single	machine	installation ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9566.php">Ralph Castain: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Reply:</strong> <a href="9566.php">Ralph Castain: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
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
