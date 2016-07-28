<?
$subject_val = "Re: [OMPI devel] ompi-ps broken or just changed?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 21 18:27:23 2009" -->
<!-- isoreceived="20090521222723" -->
<!-- sent="Thu, 21 May 2009 16:27:15 -0600" -->
<!-- isosent="20090521222715" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi-ps broken or just changed?" -->
<!-- id="71d2d8cc0905211527kf6db70n23d754eb057f3f3f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1242738453.26039.426.camel_at_localhost.localdomain" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ompi-ps broken or just changed?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-21 18:27:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6082.php">Greg Watson: "[OMPI devel] XML stdout/stderr"</a>
<li><strong>Previous message:</strong> <a href="6080.php">Brian Barrett: "Re: [OMPI devel] CMR one-sided changes?  (r21134)"</a>
<li><strong>In reply to:</strong> <a href="6071.php">Ashley Pittman: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6063.php">Ralph Castain: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ashley
<br>
<p>I dug into this deeper and fixed the problem last night. We were actually
<br>
hanging on the send operation as the recvr (a stale HNP, in this case)
<br>
wasn't there. I had to use a non-blocking send and put a timeout around it
<br>
so we could escape that situation.
<br>
<p>I also had to change a couple of tests to ensure we knew when to print local
<br>
help messages vs sending them to an HNP.
<br>
<p>I have tested the result in a scenario where several stale HNP contact files
<br>
existed and it worked fine. See if it works for you. I'll tinker with it to
<br>
print out a complete list of the stale HNPs later.
<br>
<p>Ralph
<br>
<p><p>On Tue, May 19, 2009 at 7:07 AM, Ashley Pittman &lt;ashley_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At least part of them problem is to do with error reporting, orte-ps is
</span><br>
<span class="quotelev1">&gt; hitting the error case for a stale hnp at around line 258 and is trying
</span><br>
<span class="quotelev1">&gt; to report the error via orte_show_help() however this function is
</span><br>
<span class="quotelev1">&gt; calling a rpc into the orted-run which is silently ignoring it for some
</span><br>
<span class="quotelev1">&gt; reason.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The failure itself seems to come from a timeout in comm.c:1114 where the
</span><br>
<span class="quotelev1">&gt; client process isn't waiting long enough for the orted-run to reply and
</span><br>
<span class="quotelev1">&gt; is returning ORTE_ERR_SILENT instead.  I can't think what to suggest
</span><br>
<span class="quotelev1">&gt; here other than increasing the timeout?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, 2009-05-18 at 17:06 +0100, Ashley Pittman wrote:
</span><br>
<span class="quotelev2">&gt; &gt; It's certainly helped and now runs for me however if I run mpirun under
</span><br>
<span class="quotelev2">&gt; &gt; valgrind and then opmi-ps in another window Valgrind reports errors and
</span><br>
<span class="quotelev2">&gt; &gt; ompi-ps doesn't list the job so there is clearly something still amiss.
</span><br>
<span class="quotelev2">&gt; &gt; I'm trying to do some more diagnostics now.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ==32362== Syscall param writev(vector[...]) points to uninitialised
</span><br>
<span class="quotelev2">&gt; &gt; byte(s)
</span><br>
<span class="quotelev2">&gt; &gt; ==32362==    at 0x41BF10C: writev (writev.c:46)
</span><br>
<span class="quotelev2">&gt; &gt; ==32362==    by 0x4EAAD52: mca_oob_tcp_msg_send_handler
</span><br>
<span class="quotelev2">&gt; &gt; (in
</span><br>
<span class="quotelev1">&gt; /mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_oob_tcp.so)
</span><br>
<span class="quotelev2">&gt; &gt; ==32362==    by 0x4EAC505: mca_oob_tcp_peer_send
</span><br>
<span class="quotelev2">&gt; &gt; (in
</span><br>
<span class="quotelev1">&gt; /mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_oob_tcp.so)
</span><br>
<span class="quotelev2">&gt; &gt; ==32362==    by 0x4EAEF89: mca_oob_tcp_send_nb
</span><br>
<span class="quotelev2">&gt; &gt; (in
</span><br>
<span class="quotelev1">&gt; /mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_oob_tcp.so)
</span><br>
<span class="quotelev2">&gt; &gt; ==32362==    by 0x4EA20BE: orte_rml_oob_send
</span><br>
<span class="quotelev2">&gt; &gt; (in
</span><br>
<span class="quotelev1">&gt; /mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_rml_oob.so)
</span><br>
<span class="quotelev2">&gt; &gt; ==32362==    by 0x4EA2359: orte_rml_oob_send_buffer
</span><br>
<span class="quotelev2">&gt; &gt; (in
</span><br>
<span class="quotelev1">&gt; /mnt/home/debian/ashley/code/OpenMPI/install/lib/openmpi/mca_rml_oob.so)
</span><br>
<span class="quotelev2">&gt; &gt; ==32362==    by 0x4050738: process_commands
</span><br>
<span class="quotelev2">&gt; &gt; (in
</span><br>
<span class="quotelev1">&gt; /mnt/home/debian/ashley/code/OpenMPI/install/lib/libopen-rte.so.0.0.0)
</span><br>
<span class="quotelev2">&gt; &gt; ==32362==    by 0x405108C: orte_daemon_cmd_processor
</span><br>
<span class="quotelev2">&gt; &gt; (in
</span><br>
<span class="quotelev1">&gt; /mnt/home/debian/ashley/code/OpenMPI/install/lib/libopen-rte.so.0.0.0)
</span><br>
<span class="quotelev2">&gt; &gt; ==32362==    by 0x4260B57: opal_event_base_loop
</span><br>
<span class="quotelev2">&gt; &gt; (in
</span><br>
<span class="quotelev1">&gt; /mnt/home/debian/ashley/code/OpenMPI/install/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev2">&gt; &gt; ==32362==    by 0x4260DF6: opal_event_loop
</span><br>
<span class="quotelev2">&gt; &gt; (in
</span><br>
<span class="quotelev1">&gt; /mnt/home/debian/ashley/code/OpenMPI/install/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev2">&gt; &gt; ==32362==    by 0x4260E1D: opal_event_dispatch
</span><br>
<span class="quotelev2">&gt; &gt; (in
</span><br>
<span class="quotelev1">&gt; /mnt/home/debian/ashley/code/OpenMPI/install/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev2">&gt; &gt; ==32362==    by 0x804B15F: orterun (orterun.c:757)
</span><br>
<span class="quotelev2">&gt; &gt; ==32362==  Address 0x448507c is 20 bytes inside a block of size 512
</span><br>
<span class="quotelev2">&gt; &gt; alloc'd
</span><br>
<span class="quotelev2">&gt; &gt; ==32362==    at 0x402613C: realloc (vg_replace_malloc.c:429)
</span><br>
<span class="quotelev2">&gt; &gt; ==32362==    by 0x42556B7: opal_dss_buffer_extend
</span><br>
<span class="quotelev2">&gt; &gt; (in
</span><br>
<span class="quotelev1">&gt; /mnt/home/debian/ashley/code/OpenMPI/install/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev2">&gt; &gt; ==32362==    by 0x4256C4F: opal_dss_pack_int32
</span><br>
<span class="quotelev2">&gt; &gt; (in
</span><br>
<span class="quotelev1">&gt; /mnt/home/debian/ashley/code/OpenMPI/install/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev2">&gt; &gt; ==32362==    by 0x42565C9: opal_dss_pack_buffer
</span><br>
<span class="quotelev2">&gt; &gt; (in
</span><br>
<span class="quotelev1">&gt; /mnt/home/debian/ashley/code/OpenMPI/install/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev2">&gt; &gt; ==32362==    by 0x403A60D: orte_dt_pack_job
</span><br>
<span class="quotelev2">&gt; &gt; (in
</span><br>
<span class="quotelev1">&gt; /mnt/home/debian/ashley/code/OpenMPI/install/lib/libopen-rte.so.0.0.0)
</span><br>
<span class="quotelev2">&gt; &gt; ==32362==    by 0x42565C9: opal_dss_pack_buffer
</span><br>
<span class="quotelev2">&gt; &gt; (in
</span><br>
<span class="quotelev1">&gt; /mnt/home/debian/ashley/code/OpenMPI/install/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev2">&gt; &gt; ==32362==    by 0x4256FFB: opal_dss_pack
</span><br>
<span class="quotelev2">&gt; &gt; (in
</span><br>
<span class="quotelev1">&gt; /mnt/home/debian/ashley/code/OpenMPI/install/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev2">&gt; &gt; ==32362==    by 0x40506F7: process_commands
</span><br>
<span class="quotelev2">&gt; &gt; (in
</span><br>
<span class="quotelev1">&gt; /mnt/home/debian/ashley/code/OpenMPI/install/lib/libopen-rte.so.0.0.0)
</span><br>
<span class="quotelev2">&gt; &gt; ==32362==    by 0x405108C: orte_daemon_cmd_processor
</span><br>
<span class="quotelev2">&gt; &gt; (in
</span><br>
<span class="quotelev1">&gt; /mnt/home/debian/ashley/code/OpenMPI/install/lib/libopen-rte.so.0.0.0)
</span><br>
<span class="quotelev2">&gt; &gt; ==32362==    by 0x4260B57: opal_event_base_loop
</span><br>
<span class="quotelev2">&gt; &gt; (in
</span><br>
<span class="quotelev1">&gt; /mnt/home/debian/ashley/code/OpenMPI/install/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev2">&gt; &gt; ==32362==    by 0x4260DF6: opal_event_loop
</span><br>
<span class="quotelev2">&gt; &gt; (in
</span><br>
<span class="quotelev1">&gt; /mnt/home/debian/ashley/code/OpenMPI/install/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev2">&gt; &gt; ==32362==    by 0x4260E1D: opal_event_dispatch
</span><br>
<span class="quotelev2">&gt; &gt; (in
</span><br>
<span class="quotelev1">&gt; /mnt/home/debian/ashley/code/OpenMPI/install/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, 2009-05-18 at 08:22 -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Aha! Thanks for spotting the problem - I had to move that var init to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; cover all cases, but it should be working now with r21249
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On May 18, 2009, at 8:08 AM, Ashley Pittman wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Ralph,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; This patch fixed it, num_nodes was being used initialised and hence
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; client was getting a bogus value for the number of nodes.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Ashley,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Mon, 2009-05-18 at 10:09 +0100, Ashley Pittman wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; No joy I'm afraid,  now I get errors when I run it.  This is a
</span><br>
<span class="quotelev1">&gt; single
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; node job run with the command line &quot;mpirun -n 3 ./a.out&quot;.  I've
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; attached
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; the strace output and gzipped /tmp files from the machine.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Valgrind on
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; the opmi-ps process doesn't show anything interesting.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; [alpha:29942] [[35044,0],0] ORTE_ERROR_LOG: Data unpack would read
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; past
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; end of buffer in
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; file /mnt/home/debian/ashley/code/OpenMPI/ompi-trunk-tes/trunk/orte/
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; util/comm/comm.c at line 242
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; [alpha:29942] [[35044,0],0] ORTE_ERROR_LOG: Data unpack would read
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; past
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; end of buffer in
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; file /mnt/home/debian/ashley/code/OpenMPI/ompi-trunk-tes/trunk/orte/
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; tools/orte-ps/orte-ps.c at line 818
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Ashley.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; On Sat, 2009-05-16 at 08:15 -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; This is fixed now, Ashley - sorry for the problem.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; On May 15, 2009, at 4:47 AM, Ashley Pittman wrote:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; On Thu, 2009-05-14 at 22:49 -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; It is definitely broken at the moment, Ashley. I have it pretty
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; well
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; fixed, but need/want to cleanup some corner cases that have
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; plagued
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; us
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; for a long time.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;&gt;&gt;&gt;&gt; Should have it for you sometime Friday.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; Ok, thanks.  I might try switching to slurm in the mean-time, I
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; know
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; my
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; code works with that.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; Can you let me know when it's fixed on or off list and I'll do an
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; update.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; Ashley,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &lt;ompi-ps.patch&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6081/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6082.php">Greg Watson: "[OMPI devel] XML stdout/stderr"</a>
<li><strong>Previous message:</strong> <a href="6080.php">Brian Barrett: "Re: [OMPI devel] CMR one-sided changes?  (r21134)"</a>
<li><strong>In reply to:</strong> <a href="6071.php">Ashley Pittman: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6063.php">Ralph Castain: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
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
