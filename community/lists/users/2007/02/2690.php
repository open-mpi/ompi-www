<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb 14 11:57:17 2007" -->
<!-- isoreceived="20070214165717" -->
<!-- sent="Wed, 14 Feb 2007 11:57:05 -0500 (EST)" -->
<!-- isosent="20070214165705" -->
<!-- name="Jelena Pjesivac-Grbovic" -->
<!-- email="pjesa_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SEGV in ompi_coll_tuned_reduce_generic (1.2b4r13488)" -->
<!-- id="Pine.LNX.4.62.0702141155180.9305_at_reliant.cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.53.0702141041570.28620_at_duss0-ast.phyast.dur.ac.uk" -->
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
<strong>From:</strong> Jelena Pjesivac-Grbovic (<em>pjesa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-14 11:57:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2691.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Previous message:</strong> <a href="2689.php">Lydia Heck: "[OMPI users] SEGV in ompi_coll_tuned_reduce_generic (1.2b4r13488)"</a>
<li><strong>In reply to:</strong> <a href="2689.php">Lydia Heck: "[OMPI users] SEGV in ompi_coll_tuned_reduce_generic (1.2b4r13488)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Lydia,
<br>
<p>how does the call to MPI_Reduce look like in your application?  Is the 
<br>
code available?
<br>
<p>Thank you,
<br>
Jelena
<br>
<p>On Wed, 14 Feb 2007, Lydia Heck wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When running either over myrinet or over gigabit one of our codes (Gagdet2)
</span><br>
<span class="quotelev1">&gt; it fails predictably with the following error message.
</span><br>
<span class="quotelev2">&gt;&gt; From the back trace it looks as if the SEGV is in
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_reduce_generic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have there been similar reportings and/or is there a fix for this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lydia Heck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [m2042:08002] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [m2042:08002] Signal: Segmentation Fault (11)
</span><br>
<span class="quotelev1">&gt; [m2042:08002] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [m2042:08002] Failing at address: 92
</span><br>
<span class="quotelev1">&gt; /opt/OMPI/ompi-1.2b4r13488/lib/libopen-pal.so.0.0.0:opal_backtrace_print+0x26
</span><br>
<span class="quotelev1">&gt; /opt/OMPI/ompi-1.2b4r13488/lib/libopen-pal.so.0.0.0:0xc3874
</span><br>
<span class="quotelev1">&gt; /lib/amd64/libc.so.1:0xcb686
</span><br>
<span class="quotelev1">&gt; /lib/amd64/libc.so.1:0xc0a52
</span><br>
<span class="quotelev1">&gt; /opt/OMPI/ompi-1.2b4r13488/lib/openmpi/mca_coll_tuned.so:ompi_coll_tuned_reduce_generic+0x11b
</span><br>
<span class="quotelev1">&gt; [ Signal 11 (SEGV)]
</span><br>
<span class="quotelev1">&gt; /opt/OMPI/ompi-1.2b4r13488/lib/openmpi/mca_coll_tuned.so:ompi_coll_tuned_reduce_intra_binary+0x162
</span><br>
<span class="quotelev1">&gt; /opt/OMPI/ompi-1.2b4r13488/lib/openmpi/mca_coll_tuned.so:ompi_coll_tuned_reduce_intra_dec_fixed+0x28d
</span><br>
<span class="quotelev1">&gt; /opt/OMPI/ompi-1.2b4r13488/lib/libmpi.so.0.0.0:PMPI_Reduce+0x3f6
</span><br>
<span class="quotelev1">&gt; /data/4/nil/tak_gadget/gadget2/P-Gadget2:gravity_tree+0x146c
</span><br>
<span class="quotelev1">&gt; /data/4/nil/tak_gadget/gadget2/P-Gadget2:compute_accelerations+0x7e
</span><br>
<span class="quotelev1">&gt; /data/4/nil/tak_gadget/gadget2/P-Gadget2:run+0xa5
</span><br>
<span class="quotelev1">&gt; /data/4/nil/tak_gadget/gadget2/P-Gadget2:main+0x22f
</span><br>
<span class="quotelev1">&gt; /data/4/nil/tak_gadget/gadget2/P-Gadget2:0x7c3c
</span><br>
<span class="quotelev1">&gt; [m2042:08002] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [m2043:07816] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/pls_base_orted_cmds.c
</span><br>
<span class="quotelev1">&gt; at line 275
</span><br>
<span class="quotelev1">&gt; [m2043:07816] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_gridengine_module.c at
</span><br>
<span class="quotelev1">&gt; line 793
</span><br>
<span class="quotelev1">&gt; [m2043:07816] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at line 90
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 2 with PID 0 on node m2043 exited on signal 11
</span><br>
<span class="quotelev1">&gt; (Segmentation Fault).
</span><br>
<span class="quotelev1">&gt; [m2043:07816] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/pls_base_orted_cmds.c
</span><br>
<span class="quotelev1">&gt; at line 188
</span><br>
<span class="quotelev1">&gt; [m2043:07816] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_gridengine_module.c at
</span><br>
<span class="quotelev1">&gt; line 828
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons for this job. Returned value
</span><br>
<span class="quotelev1">&gt; Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dr E L  Heck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; University of Durham
</span><br>
<span class="quotelev1">&gt; Institute for Computational Cosmology
</span><br>
<span class="quotelev1">&gt; Ogden Centre
</span><br>
<span class="quotelev1">&gt; Department of Physics
</span><br>
<span class="quotelev1">&gt; South Road
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DURHAM, DH1 3LE
</span><br>
<span class="quotelev1">&gt; United Kingdom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; e-mail: lydia.heck_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tel.: + 44 191 - 334 3628
</span><br>
<span class="quotelev1">&gt; Fax.: + 44 191 - 334 3645
</span><br>
<span class="quotelev1">&gt; ___________________________________________
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
<p><pre>
--
Jelena Pjesivac-Grbovic, Pjesa
Graduate Research Assistant
Innovative Computing Laboratory
Computer Science Department, UTK
Claxton Complex 350
(865) 974 - 6722 
(865) 974 - 6321
jpjesiva_at_[hidden]
Murphy's Law of Research:
         Enough research will tend to support your theory.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2691.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Previous message:</strong> <a href="2689.php">Lydia Heck: "[OMPI users] SEGV in ompi_coll_tuned_reduce_generic (1.2b4r13488)"</a>
<li><strong>In reply to:</strong> <a href="2689.php">Lydia Heck: "[OMPI users] SEGV in ompi_coll_tuned_reduce_generic (1.2b4r13488)"</a>
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
