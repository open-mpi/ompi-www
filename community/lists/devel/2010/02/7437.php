<?
$subject_val = "[OMPI devel] Rankfile related problems";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 15 12:45:08 2010" -->
<!-- isoreceived="20100215174508" -->
<!-- sent="Mon, 15 Feb 2010 18:39:52 +0100" -->
<!-- isosent="20100215173952" -->
<!-- name="Bogdan Costescu" -->
<!-- email="bcostescu_at_[hidden]" -->
<!-- subject="[OMPI devel] Rankfile related problems" -->
<!-- id="c609bc801002150939t58303e33pdf46a97ab8f0eba4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Rankfile related problems<br>
<strong>From:</strong> Bogdan Costescu (<em>bcostescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-15 12:39:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7438.php">Nadia Derbey: "[OMPI devel] PATCH: remove trailing colon at the end of the generated	LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="7436.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7514.php">Ralph Castain: "Re: [OMPI devel] Rankfile related problems"</a>
<li><strong>Reply:</strong> <a href="7514.php">Ralph Castain: "Re: [OMPI devel] Rankfile related problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>With version 1.4.1 I get a rather strange crash in mpirun whenever I
<br>
try to run a job using (I think) a rankfile which doesn't contain the
<br>
specified number of ranks. F.e. I ask for 4 ranks ('-np 4'), but the
<br>
rankfile contains only one entry:
<br>
<p>rank 0=mbm-01-24 slot=1:*
<br>
<p>and the following comes out:
<br>
<p>[mbm-01-24:20985] *** Process received signal ***
<br>
[mbm-01-24:20985] Signal: Segmentation fault (11)
<br>
[mbm-01-24:20985] Signal code: Address not mapped (1)
<br>
[mbm-01-24:20985] Failing at address: 0x50
<br>
[mbm-01-24:20985] [ 0] /lib64/libpthread.so.0 [0x2b9de894f7c0]
<br>
[mbm-01-24:20985] [ 1]
<br>
/sw/openmpi/1.4.1/gcc/4.4.3/lib/libopen-rte.so.0(orte_util_encode_pidmap+0xbb)
<br>
[0x2b9de79b9f7b]
<br>
[mbm-01-24:20985] [ 2]
<br>
/sw/openmpi/1.4.1/gcc/4.4.3/lib/libopen-rte.so.0(orte_odls_base_default_get_add_procs_data+0x2d0)
<br>
[0x2b9de79d49c0]
<br>
[mbm-01-24:20985] [ 3]
<br>
/sw/openmpi/1.4.1/gcc/4.4.3/lib/libopen-rte.so.0(orte_plm_base_launch_apps+0xbc)
<br>
[0x2b9de79e1fcc]
<br>
[mbm-01-24:20985] [ 4]
<br>
/sw/openmpi/1.4.1/gcc/4.4.3/lib/libopen-rte.so.0 [0x2b9de79e6251]
<br>
[mbm-01-24:20985] [ 5] mpirun [0x403782]
<br>
[mbm-01-24:20985] [ 6] mpirun [0x402cb4]
<br>
[mbm-01-24:20985] [ 7] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b9de8b79994]
<br>
[mbm-01-24:20985] [ 8] mpirun [0x402bd9]
<br>
[mbm-01-24:20985] *** End of error message ***
<br>
Segmentation fault
<br>
<p>However if the rankfile contains a second entry, like:
<br>
<p>rank 0=mbm-01-24 slot=1:*
<br>
rank 1=mbm-01-24 slot=1:*
<br>
<p>I get an error, but no segmentation fault. I guess that the
<br>
segmentation fault is unintended... Is this known ? If not, how could
<br>
I debug this ?
<br>
Now to the second problem: the exact same error keeps coming even if I
<br>
specify 4 ranks, the messages are:
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun was unable to start the specified application as it encountered an error:
<br>
<p>Error name: Error
<br>
Node: mbm-01-24
<br>
<p>when attempting to start process rank 0.
<br>
--------------------------------------------------------------------------
<br>
[mbm-01-24:21011] Rank 0: PAFFINITY cannot get physical core id for
<br>
logical core 4 in physical socket 1 (1)
<br>
--------------------------------------------------------------------------
<br>
We were unable to successfully process/set the requested processor
<br>
affinity settings:
<br>
<p>Specified slot list: 1:*
<br>
Error: Error
<br>
<p>This could mean that a non-existent processor was specified, or
<br>
that the specification had improper syntax.
<br>
--------------------------------------------------------------------------
<br>
<p>The node has 2 slots, each with 4 cores, so what I'm trying to achieve
<br>
is using the 4 cores of the second slot. When searching the archives,
<br>
I stumbled on an e-mail from not too long ago which seemingly dealt
<br>
with the same error:
<br>
<p><a href="http://www.open-mpi.org/community/lists/devel/2009/07/6513.php">http://www.open-mpi.org/community/lists/devel/2009/07/6513.php</a>
<br>
<p>which suggests that a fix was found, but no commit was specified, so I
<br>
can't track down whether this was actually also applied to the stable
<br>
series. Could someone more knowledgeable in this area shed some light
<br>
?
<br>
<p>Thanks in advance!
<br>
Bogdan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7438.php">Nadia Derbey: "[OMPI devel] PATCH: remove trailing colon at the end of the generated	LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="7436.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7514.php">Ralph Castain: "Re: [OMPI devel] Rankfile related problems"</a>
<li><strong>Reply:</strong> <a href="7514.php">Ralph Castain: "Re: [OMPI devel] Rankfile related problems"</a>
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
