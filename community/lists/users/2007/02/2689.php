<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb 14 05:44:20 2007" -->
<!-- isoreceived="20070214104420" -->
<!-- sent="Wed, 14 Feb 2007 10:44:03 +0000 (GMT)" -->
<!-- isosent="20070214104403" -->
<!-- name="Lydia Heck" -->
<!-- email="lydia.heck_at_[hidden]" -->
<!-- subject="[OMPI users] SEGV in ompi_coll_tuned_reduce_generic (1.2b4r13488)" -->
<!-- id="Pine.GSO.4.53.0702141041570.28620_at_duss0-ast.phyast.dur.ac.uk" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.5978.1171391316.3932.users_at_open-mpi.org" -->
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
<strong>From:</strong> Lydia Heck (<em>lydia.heck_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-14 05:44:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2690.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] SEGV in ompi_coll_tuned_reduce_generic (1.2b4r13488)"</a>
<li><strong>Previous message:</strong> <a href="2688.php">Troy Telford: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2690.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] SEGV in ompi_coll_tuned_reduce_generic (1.2b4r13488)"</a>
<li><strong>Reply:</strong> <a href="2690.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] SEGV in ompi_coll_tuned_reduce_generic (1.2b4r13488)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When running either over myrinet or over gigabit one of our codes (Gagdet2)
<br>
it fails predictably with the following error message.
<br>
<span class="quotelev1">&gt;From the back trace it looks as if the SEGV is in
</span><br>
ompi_coll_tuned_reduce_generic.
<br>
<p>Have there been similar reportings and/or is there a fix for this?
<br>
<p>Lydia Heck
<br>
<p><p>[m2042:08002] *** Process received signal ***
<br>
[m2042:08002] Signal: Segmentation Fault (11)
<br>
[m2042:08002] Signal code: Address not mapped (1)
<br>
[m2042:08002] Failing at address: 92
<br>
/opt/OMPI/ompi-1.2b4r13488/lib/libopen-pal.so.0.0.0:opal_backtrace_print+0x26
<br>
/opt/OMPI/ompi-1.2b4r13488/lib/libopen-pal.so.0.0.0:0xc3874
<br>
/lib/amd64/libc.so.1:0xcb686
<br>
/lib/amd64/libc.so.1:0xc0a52
<br>
/opt/OMPI/ompi-1.2b4r13488/lib/openmpi/mca_coll_tuned.so:ompi_coll_tuned_reduce_generic+0x11b
<br>
[ Signal 11 (SEGV)]
<br>
/opt/OMPI/ompi-1.2b4r13488/lib/openmpi/mca_coll_tuned.so:ompi_coll_tuned_reduce_intra_binary+0x162
<br>
/opt/OMPI/ompi-1.2b4r13488/lib/openmpi/mca_coll_tuned.so:ompi_coll_tuned_reduce_intra_dec_fixed+0x28d
<br>
/opt/OMPI/ompi-1.2b4r13488/lib/libmpi.so.0.0.0:PMPI_Reduce+0x3f6
<br>
/data/4/nil/tak_gadget/gadget2/P-Gadget2:gravity_tree+0x146c
<br>
/data/4/nil/tak_gadget/gadget2/P-Gadget2:compute_accelerations+0x7e
<br>
/data/4/nil/tak_gadget/gadget2/P-Gadget2:run+0xa5
<br>
/data/4/nil/tak_gadget/gadget2/P-Gadget2:main+0x22f
<br>
/data/4/nil/tak_gadget/gadget2/P-Gadget2:0x7c3c
<br>
[m2042:08002] *** End of error message ***
<br>
[m2043:07816] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/pls_base_orted_cmds.c
<br>
at line 275
<br>
[m2043:07816] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_gridengine_module.c at
<br>
line 793
<br>
[m2043:07816] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at line 90
<br>
mpirun noticed that job rank 2 with PID 0 on node m2043 exited on signal 11
<br>
(Segmentation Fault).
<br>
[m2043:07816] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/pls_base_orted_cmds.c
<br>
at line 188
<br>
[m2043:07816] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_gridengine_module.c at
<br>
line 828
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons for this job. Returned value
<br>
Timeout instead of ORTE_SUCCESS.
<br>
<p><p><p><p>------------------------------------------
<br>
Dr E L  Heck
<br>
<p>University of Durham
<br>
Institute for Computational Cosmology
<br>
Ogden Centre
<br>
Department of Physics
<br>
South Road
<br>
<p>DURHAM, DH1 3LE
<br>
United Kingdom
<br>
<p>e-mail: lydia.heck_at_[hidden]
<br>
<p>Tel.: + 44 191 - 334 3628
<br>
Fax.: + 44 191 - 334 3645
<br>
___________________________________________
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2690.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] SEGV in ompi_coll_tuned_reduce_generic (1.2b4r13488)"</a>
<li><strong>Previous message:</strong> <a href="2688.php">Troy Telford: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2690.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] SEGV in ompi_coll_tuned_reduce_generic (1.2b4r13488)"</a>
<li><strong>Reply:</strong> <a href="2690.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] SEGV in ompi_coll_tuned_reduce_generic (1.2b4r13488)"</a>
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
