<?
$subject_val = "[OMPI users] Code Seg Faults in Devel Series";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 27 04:10:17 2008" -->
<!-- isoreceived="20080627081017" -->
<!-- sent="Fri, 27 Jun 2008 04:10:10 -0400 (EDT)" -->
<!-- isosent="20080627081010" -->
<!-- name="Doug Roberts" -->
<!-- email="roberpj_at_[hidden]" -->
<!-- subject="[OMPI users] Code Seg Faults in Devel Series" -->
<!-- id="Pine.LNX.4.64.0806262334410.20171_at_localhost.localdomain" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Code Seg Faults in Devel Series<br>
<strong>From:</strong> Doug Roberts (<em>roberpj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-27 04:10:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5994.php">Joao Marcelo: "[OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
<li><strong>Previous message:</strong> <a href="5992.php">Ralph H Castain: "Re: [OMPI users] mca parameters: meaning and use"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6005.php">Doug Roberts: "Re: [OMPI users] Code Seg Faults in Devel Series"</a>
<li><strong>Reply:</strong> <a href="6005.php">Doug Roberts: "Re: [OMPI users] Code Seg Faults in Devel Series"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I am trying to use the latest release of v1.3 to test with BLCR
<br>
however i just noticed that sometime after 1.3a1r18423 the standard
<br>
mpich sample code (cpi.c) stopped working on our rel4 based myrinet
<br>
gm clusters which raises some concern.
<br>
<p>Please find attached: gm_board_info.out, ompi_info--all.out,
<br>
ompi_info--param-btl-gm.out and config-1.4a1r18743.log bundled
<br>
in mpi-output.tar.gz for your analysis.
<br>
<p>Below shows the sample code runs with 1.3a1r18423, but crashes with
<br>
1.3a1r18740 and further crashes with all snapshots greater than
<br>
1.3a1r18423 i have tested.  Both gnu 4.2.1 and 4.2.2 were used to
<br>
build openmpi and yield the same results.  I have not tried 4.2.4
<br>
yet, but could next if this looks like a compiler related issue ?
<br>
Note also the code runs with both 1.2.6 and 1.2.7rc1 but fails in
<br>
all 1.4 releases of the devel trunk.
<br>
<p>I also tried the code on a debian myrinet/mx cluster and in contrast
<br>
it runs without errors for all 1.3 and 1.4 releases, suggesting the
<br>
problem is related to some compatibility issue between open mpi and
<br>
our rel4 clusters software stack. Or possibly some parameters simply
<br>
need to be applied to the mpirun command that i am not aware of ?
<br>
<p>1.3a1r18423
<br>
-----------
<br>
# /opt/testing/openmpi/1.3a1r18423/bin/mpicc cpi.c
<br>
# /opt/testing/openmpi/1.3a1r18423/bin/mpirun -np 12 --host \
<br>
ic-bru25,ic-bru27,ic-bru29 a.out
<br>
Process 4 of 12 is on bru27
<br>
Process 7 of 12 is on bru27
<br>
Process 10 of 12 is on bru27
<br>
Process 5 of 12 is on bru29
<br>
Process 8 of 12 is on bru29
<br>
Process 11 of 12 is on bru29
<br>
Process 0 of 12 is on bru25
<br>
Process 3 of 12 is on bru25
<br>
Process 9 of 12 is on bru25
<br>
Process 2 of 12 is on bru29
<br>
Process 1 of 12 is on bru27
<br>
Process 6 of 12 is on bru25
<br>
pi is approximately 3.1415926544231252, Error is 0.0000000008333321
<br>
wall clock time = 0.013029
<br>
<p>1.3a1r18740
<br>
-----------
<br>
# /opt/testing/openmpi/1.3a1r18740/bin/mpicc cpi.c
<br>
# /opt/testing/openmpi/1.3a1r18740/bin/mpirun -np 12 --host \
<br>
ic-bru25,ic-bru27,ic-bru29 a.out
<br>
Process 5 of 12 is on bru29
<br>
Process 8 of 12 is on bru29
<br>
Process 11 of 12 is on bru29
<br>
Process 1 of 12 is on bru27
<br>
Process 4 of 12 is on bru27
<br>
Process 7 of 12 is on bru27
<br>
Process 10 of 12 is on bru27
<br>
Process 0 of 12 is on bru25
<br>
[bru25:11224] *** Process received signal ***
<br>
[bru25:11224] Signal: Segmentation fault (11)
<br>
[bru25:11224] Signal code: Address not mapped (1)
<br>
[bru25:11224] Failing at address: 0x9
<br>
Process 3 of 12 is on bru25
<br>
Process 6 of 12 is on bru25
<br>
Process 9 of 12 is on bru25
<br>
[bru25:11224] [ 0] /lib64/tls/libpthread.so.0 [0x38c090c420]
<br>
[bru25:11224] [ 1] 
<br>
/opt/testing/openmpi/1.3a1r18740/lib/openmpi/mca_btl_gm.so [0x2a9707ffb9]
<br>
[bru25:11224] [ 2] 
<br>
/opt/testing/openmpi/1.3a1r18740/lib/openmpi/mca_pml_ob1.so [0x2a96d71c1d]
<br>
[bru25:11224] [ 3] 
<br>
/opt/testing/openmpi/1.3a1r18740/lib/openmpi/mca_pml_ob1.so [0x2a96d66753]
<br>
[bru25:11224] [ 4] 
<br>
/opt/testing/openmpi/1.3a1r18740/lib/openmpi/mca_coll_tuned.so [0x2a97c7cb1c]
<br>
[bru25:11224] [ 5] 
<br>
/opt/testing/openmpi/1.3a1r18740/lib/openmpi/mca_coll_tuned.so [0x2a97c7ce27]
<br>
[bru25:11224] [ 6] 
<br>
/opt/testing/openmpi/1.3a1r18740/lib/openmpi/mca_coll_tuned.so [0x2a97c72eec]
<br>
[bru25:11224] [ 7] 
<br>
/opt/testing/openmpi/1.3a1r18740/lib/libmpi.so.0(PMPI_Bcast+0x13e) [0x2a9559f05e]
<br>
[bru25:11224] [ 8] a.out(main+0xd6) [0x400d0f]
<br>
[bru25:11224] [ 9] /lib64/tls/libc.so.6(__libc_start_main+0xdb) [0x32ce51c4bb]
<br>
[bru25:11224] [10] a.out [0x400b7a]
<br>
[bru25:11224] *** End of error message ***
<br>
Process 2 of 12 is on bru29
<br>
[bru34:29907] 
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 11224 on node ic-bru25 exited 
<br>
on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>Any help much appreciated!
<br>
-Doug
<br>

<br><hr>
<ul>
<li>APPLICATION/X-GZIP attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5993/mpi-output.tar.gz">mpi-output.tar.gz</a>
</ul>
<!-- attachment="mpi-output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5994.php">Joao Marcelo: "[OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
<li><strong>Previous message:</strong> <a href="5992.php">Ralph H Castain: "Re: [OMPI users] mca parameters: meaning and use"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6005.php">Doug Roberts: "Re: [OMPI users] Code Seg Faults in Devel Series"</a>
<li><strong>Reply:</strong> <a href="6005.php">Doug Roberts: "Re: [OMPI users] Code Seg Faults in Devel Series"</a>
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
