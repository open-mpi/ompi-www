<?
$subject_val = "Re: [OMPI users] Valgrind writev() errors with 1.3.2.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  8 15:24:10 2009" -->
<!-- isoreceived="20090608192410" -->
<!-- sent="Mon, 8 Jun 2009 13:24:04 -0600" -->
<!-- isosent="20090608192404" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Valgrind writev() errors with 1.3.2." -->
<!-- id="71d2d8cc0906081224i7ef119e3ga1b3174e3b116bba_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="auto-000019643315_at_sci.utah.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Valgrind writev() errors with 1.3.2.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-08 15:24:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9567.php">George Bosilca: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Previous message:</strong> <a href="9565.php">tom fogal: "[OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>In reply to:</strong> <a href="9565.php">tom fogal: "[OMPI users] Valgrind writev() errors with 1.3.2."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9567.php">George Bosilca: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Reply:</strong> <a href="9567.php">George Bosilca: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We deliberately choose to not initialize our msg buffers as this takes
<br>
considerable time. Instead, we fill in only the portion required by a given
<br>
message, and then send only that much of the buffer. Thus, the uninitialized
<br>
portion is ignored.
<br>
<p>I don't know of a way to tell valgrind to ignore it, I'm afraid - perhaps a
<br>
valgrind guru can be of help. :-/
<br>
<p>Ralph
<br>
<p><p>On Mon, Jun 8, 2009 at 1:09 PM, tom fogal &lt;tfogal_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've configured a source build of OpenMPI 1.3.2 with valgrind enabled
</span><br>
<span class="quotelev1">&gt; [1], and I'm seeing a lot of errors with writev() when I run this under
</span><br>
<span class="quotelev1">&gt; valgrind.  For example, with the following `hello, world' program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;  #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    puts(&quot;Hello, world!&quot;);
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see errors like the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ==12342== Syscall param writev(vector[...]) points to uninitialised
</span><br>
<span class="quotelev1">&gt; byte(s)
</span><br>
<span class="quotelev1">&gt;  ==12342==    at 0x61DF733: writev (in /lib/libc-2.7.so)
</span><br>
<span class="quotelev1">&gt;  ==12342==    by 0x7889AB9: mca_oob_tcp_msg_send_handler
</span><br>
<span class="quotelev1">&gt; (oob_tcp_msg.c:265)
</span><br>
<span class="quotelev1">&gt;  ==12342==    by 0x788B1A0: mca_oob_tcp_peer_send (oob_tcp_peer.c:197)
</span><br>
<span class="quotelev1">&gt;  ==12342==    by 0x788FF2A: mca_oob_tcp_send_nb (oob_tcp_send.c:167)
</span><br>
<span class="quotelev1">&gt;  ==12342==    by 0x767C7EC: orte_rml_oob_send (rml_oob_send.c:137)
</span><br>
<span class="quotelev1">&gt;  ==12342==    by 0x767D19A: orte_rml_oob_send_buffer (rml_oob_send.c:269)
</span><br>
<span class="quotelev1">&gt;  ==12342==    by 0x7C9F3DF: allgather (grpcomm_bad_module.c:369)
</span><br>
<span class="quotelev1">&gt;  ==12342==    by 0x7C9FD9E: modex (grpcomm_bad_module.c:497)
</span><br>
<span class="quotelev1">&gt;  ==12342==    by 0x4E6DCAF: ompi_mpi_init (ompi_mpi_init.c:626)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The full vg log is appended [2].  Of course, I could just suppress
</span><br>
<span class="quotelev1">&gt; this error, but I get this for a lot (every?) MPI call which does
</span><br>
<span class="quotelev1">&gt; communication, it seems (broadcasts, sends, recv's, allgathers, etc.).
</span><br>
<span class="quotelev1">&gt; I'm worried a suppression would suppress too much / suppress an error
</span><br>
<span class="quotelev1">&gt; I've caused.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have others seen this?  Can I suppress perhaps from the
</span><br>
<span class="quotelev1">&gt; orte_rml_oob_send_buffer down (safely)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -tom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1] configured via: gnu_pkg \
</span><br>
<span class="quotelev1">&gt;    --enable-debug \
</span><br>
<span class="quotelev1">&gt;    --enable-memchecker \
</span><br>
<span class="quotelev1">&gt;    --disable-mpi-f77 \
</span><br>
<span class="quotelev1">&gt;    --enable-pretty-print-stacktrace \
</span><br>
<span class="quotelev1">&gt;    --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;    --enable-mpi-threads \
</span><br>
<span class="quotelev1">&gt;    --with-valgrind=${PREFIX} \
</span><br>
<span class="quotelev1">&gt;    --without-gm \
</span><br>
<span class="quotelev1">&gt;    --without-mx \
</span><br>
<span class="quotelev1">&gt;    --without-openib \
</span><br>
<span class="quotelev1">&gt;    --without-psm \
</span><br>
<span class="quotelev1">&gt;    --with-pic \
</span><br>
<span class="quotelev1">&gt;    --with-gnu-ld
</span><br>
<span class="quotelev1">&gt;  where gnu_pkg is basically a function which calls configure with
</span><br>
<span class="quotelev1">&gt;  --prefix=${PREFIX}.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [2]
</span><br>
<span class="quotelev1">&gt; ==12342== Memcheck, a memory error detector.
</span><br>
<span class="quotelev1">&gt; ==12342== Copyright (C) 2002-2008, and GNU GPL'd, by Julian Seward et al.
</span><br>
<span class="quotelev1">&gt; ==12342== Using LibVEX rev 1884, a library for dynamic binary translation.
</span><br>
<span class="quotelev1">&gt; ==12342== Copyright (C) 2004-2008, and GNU GPL'd, by OpenWorks LLP.
</span><br>
<span class="quotelev1">&gt; ==12342== Using valgrind-3.4.1, a dynamic binary instrumentation framework.
</span><br>
<span class="quotelev1">&gt; ==12342== Copyright (C) 2000-2008, and GNU GPL'd, by Julian Seward et al.
</span><br>
<span class="quotelev1">&gt; ==12342== For more details, rerun with: -v
</span><br>
<span class="quotelev1">&gt; ==12342==
</span><br>
<span class="quotelev1">&gt; ==12342== My PID = 12342, parent PID = 12341.  Prog and args are:
</span><br>
<span class="quotelev1">&gt; ==12342==    ./a.out
</span><br>
<span class="quotelev1">&gt; ==12342==
</span><br>
<span class="quotelev1">&gt; ==12342== Warning: client syscall munmap tried to modify addresses
</span><br>
<span class="quotelev1">&gt; 0xffffffffffffffff-0xffe
</span><br>
<span class="quotelev1">&gt; ==12342== Syscall param writev(vector[...]) points to uninitialised byte(s)
</span><br>
<span class="quotelev1">&gt; ==12342==    at 0x61DF733: writev (in /lib/libc-2.7.so)
</span><br>
<span class="quotelev1">&gt; ==12342==    by 0x7889AB9: mca_oob_tcp_msg_send_handler (oob_tcp_msg.c:265)
</span><br>
<span class="quotelev1">&gt; ==12342==    by 0x788B1A0: mca_oob_tcp_peer_send (oob_tcp_peer.c:197)
</span><br>
<span class="quotelev1">&gt; ==12342==    by 0x788FF2A: mca_oob_tcp_send_nb (oob_tcp_send.c:167)
</span><br>
<span class="quotelev1">&gt; ==12342==    by 0x767C7EC: orte_rml_oob_send (rml_oob_send.c:137)
</span><br>
<span class="quotelev1">&gt; ==12342==    by 0x767D19A: orte_rml_oob_send_buffer (rml_oob_send.c:269)
</span><br>
<span class="quotelev1">&gt; ==12342==    by 0x7C9F3DF: allgather (grpcomm_bad_module.c:369)
</span><br>
<span class="quotelev1">&gt; ==12342==    by 0x7C9FD9E: modex (grpcomm_bad_module.c:497)
</span><br>
<span class="quotelev1">&gt; ==12342==    by 0x4E6DCAF: ompi_mpi_init (ompi_mpi_init.c:626)
</span><br>
<span class="quotelev1">&gt; ==12342==    by 0x4EAAC88: PMPI_Init (pinit.c:80)
</span><br>
<span class="quotelev1">&gt; ==12342==    by 0x400857: main (hello.c:5)
</span><br>
<span class="quotelev1">&gt; ==12342==  Address 0x677697b is 107 bytes inside a block of size 256
</span><br>
<span class="quotelev1">&gt; alloc'd
</span><br>
<span class="quotelev1">&gt; ==12342==    at 0x4C22A51: realloc (vg_replace_malloc.c:429)
</span><br>
<span class="quotelev1">&gt; ==12342==    by 0x53DCBE0: opal_dss_buffer_extend
</span><br>
<span class="quotelev1">&gt; (dss_internal_functions.c:63)
</span><br>
<span class="quotelev1">&gt; ==12342==    by 0x53DE4BA: opal_dss_copy_payload (dss_load_unload.c:164)
</span><br>
<span class="quotelev1">&gt; ==12342==    by 0x7C9F314: allgather (grpcomm_bad_module.c:363)
</span><br>
<span class="quotelev1">&gt; ==12342==    by 0x7C9FD9E: modex (grpcomm_bad_module.c:497)
</span><br>
<span class="quotelev1">&gt; ==12342==    by 0x4E6DCAF: ompi_mpi_init (ompi_mpi_init.c:626)
</span><br>
<span class="quotelev1">&gt; ==12342==    by 0x4EAAC88: PMPI_Init (pinit.c:80)
</span><br>
<span class="quotelev1">&gt; ==12342==    by 0x400857: main (hello.c:5)
</span><br>
<span class="quotelev1">&gt; ==12342==  Uninitialised value was created by a stack allocation
</span><br>
<span class="quotelev1">&gt; ==12342==    at 0x53FFA60: opal_ifinit (if.c:147)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   &lt;insert a suppression name here&gt;
</span><br>
<span class="quotelev1">&gt;   Memcheck:Param
</span><br>
<span class="quotelev1">&gt;   writev(vector[...])
</span><br>
<span class="quotelev1">&gt;   fun:writev
</span><br>
<span class="quotelev1">&gt;   fun:mca_oob_tcp_msg_send_handler
</span><br>
<span class="quotelev1">&gt;   fun:mca_oob_tcp_peer_send
</span><br>
<span class="quotelev1">&gt;   fun:mca_oob_tcp_send_nb
</span><br>
<span class="quotelev1">&gt;   fun:orte_rml_oob_send
</span><br>
<span class="quotelev1">&gt;   fun:orte_rml_oob_send_buffer
</span><br>
<span class="quotelev1">&gt;   fun:allgather
</span><br>
<span class="quotelev1">&gt;   fun:modex
</span><br>
<span class="quotelev1">&gt;   fun:ompi_mpi_init
</span><br>
<span class="quotelev1">&gt;   fun:PMPI_Init
</span><br>
<span class="quotelev1">&gt;   fun:main
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; ==12342==
</span><br>
<span class="quotelev1">&gt; ==12342== ERROR SUMMARY: 1 errors from 1 contexts (suppressed: 307 from 3)
</span><br>
<span class="quotelev1">&gt; ==12342== malloc/free: in use at exit: 204,012 bytes in 2,022 blocks.
</span><br>
<span class="quotelev1">&gt; ==12342== malloc/free: 10,382 allocs, 8,360 frees, 14,603,162 bytes
</span><br>
<span class="quotelev1">&gt; allocated.
</span><br>
<span class="quotelev1">&gt; ==12342== For a detailed leak analysis,  rerun with: --leak-check=yes
</span><br>
<span class="quotelev1">&gt; ==12342== For counts of detected errors, rerun with: -v
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9566/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9567.php">George Bosilca: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Previous message:</strong> <a href="9565.php">tom fogal: "[OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>In reply to:</strong> <a href="9565.php">tom fogal: "[OMPI users] Valgrind writev() errors with 1.3.2."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9567.php">George Bosilca: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Reply:</strong> <a href="9567.php">George Bosilca: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
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
