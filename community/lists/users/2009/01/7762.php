<?
$subject_val = "[OMPI users] 1.3 and --preload-files and --preload-binary";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 22 10:11:24 2009" -->
<!-- isoreceived="20090122151124" -->
<!-- sent="Thu, 22 Jan 2009 16:11:19 +0100" -->
<!-- isosent="20090122151119" -->
<!-- name="Geoffroy Pignot" -->
<!-- email="geopignot_at_[hidden]" -->
<!-- subject="[OMPI users] 1.3 and --preload-files and --preload-binary" -->
<!-- id="b4f9bf870901220711x48ff5dd4yeb90758ffcde1c4d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] 1.3 and --preload-files and --preload-binary<br>
<strong>From:</strong> Geoffroy Pignot (<em>geopignot_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-22 10:11:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7763.php">Josh Hursey: "Re: [OMPI users] 1.3 and --preload-files and --preload-binary"</a>
<li><strong>Previous message:</strong> <a href="7761.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7763.php">Josh Hursey: "Re: [OMPI users] 1.3 and --preload-files and --preload-binary"</a>
<li><strong>Reply:</strong> <a href="7763.php">Josh Hursey: "Re: [OMPI users] 1.3 and --preload-files and --preload-binary"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>As you can notice , I am trying the work done on this new release.
<br>
preload-files and preload-binary options are very interesting to me because
<br>
I work on a cluster without any shared space between nodes.
<br>
I tried those basically , but no success . You will find below the error
<br>
messages.
<br>
If I did things wrong,  would it be possible to get simple examples showing
<br>
how these options work.
<br>
<p>Thanks
<br>
<p>Geoffroy
<br>
<p>* /tmp/openmpi-1.3/bin/mpirun --preload-files hello.c --hostfile
<br>
/tmp/hostlist -np 2 hostname
<br>
--------------------------------------------------------------------------
<br>
WARNING: Could not preload specified file: File already exists.
<br>
<p>Fileset: /tmp/hello.c
<br>
Host: compil03
<br>
<p>Will continue attempting to launch the process.
<br>
<p>--------------------------------------------------------------------------
<br>
[compil03:26657] filem:rsh: get(): Failed to preare the request structure
<br>
(-1)
<br>
--------------------------------------------------------------------------
<br>
WARNING: Could not preload the requested files and directories.
<br>
<p>Fileset:
<br>
Fileset: hello.c
<br>
<p>Will continue attempting to launch the process.
<br>
<p>--------------------------------------------------------------------------
<br>
[compil03:26657] [[13938,0],0] ORTE_ERROR_LOG: Error in file
<br>
base/odls_base_state.c at line 127
<br>
[compil03:26657] [[13938,0],0] ORTE_ERROR_LOG: Error in file
<br>
base/odls_base_default_fns.c at line 831
<br>
[compil03:26657] *** Process received signal ***
<br>
[compil03:26657] Signal: Segmentation fault (11)
<br>
[compil03:26657] Signal code: Address not mapped (1)
<br>
[compil03:26657] Failing at address: 0x395eb15000
<br>
[compil03:26657] [ 0] /lib64/tls/libpthread.so.0 [0x395f80c420]
<br>
[compil03:26657] [ 1] /lib64/tls/libc.so.6(memcpy+0x3f) [0x395ed718df]
<br>
[compil03:26657] [ 2] /tmp/openmpi-1.3/lib64/libopen-pal.so.0 [0x2a956b0a10]
<br>
[compil03:26657] [ 3]
<br>
/tmp/openmpi-1.3/lib64/libopen-rte.so.0(orte_odls_base_default_launch_local+0x55c)
<br>
[0x2a955809cc]
<br>
[compil03:26657] [ 4] /tmp/openmpi-1.3/lib64/openmpi/mca_odls_default.so
<br>
[0x2a963655f2]
<br>
[compil03:26657] [ 5]
<br>
/tmp/openmpi-1.3/lib64/libopen-rte.so.0(orte_daemon_cmd_processor+0x57d)
<br>
[0x2a9557812d]
<br>
[compil03:26657] [ 6] /tmp/openmpi-1.3/lib64/libopen-pal.so.0 [0x2a956b9828]
<br>
[compil03:26657] [ 7]
<br>
/tmp/openmpi-1.3/lib64/libopen-pal.so.0(opal_progress+0xb0) [0x2a956ae820]
<br>
[compil03:26657] [ 8]
<br>
/tmp/openmpi-1.3/lib64/libopen-rte.so.0(orte_plm_base_launch_apps+0x1ed)
<br>
[0x2a95584e7d]
<br>
[compil03:26657] [ 9] /tmp/openmpi-1.3/lib64/openmpi/mca_plm_rsh.so
<br>
[0x2a95c3ed98]
<br>
[compil03:26657] [10] /tmp/openmpi-1.3/bin/mpirun [0x403330]
<br>
[compil03:26657] [11] /tmp/openmpi-1.3/bin/mpirun [0x402ad3]
<br>
[compil03:26657] [12] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
<br>
[0x395ed1c4bb]
<br>
[compil03:26657] [13] /tmp/openmpi-1.3/bin/mpirun [0x402a2a]
<br>
[compil03:26657] *** End of error message ***
<br>
Segmentation fault
<br>
<p>*And it's not better with --preload-binary . a.out_32
<br>
<p>*compil03% /tmp/openmpi-1.3/bin/mpirun -s --hostfile /tmp/hostlist -wdir
<br>
/tmp -np 2 a.out_32
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to launch the specified application as it could not find
<br>
an executable:
<br>
<p>Executable: a.out_32
<br>
Node: compil02
<br>
<p>while attempting to start process rank 1.*
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7762/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7763.php">Josh Hursey: "Re: [OMPI users] 1.3 and --preload-files and --preload-binary"</a>
<li><strong>Previous message:</strong> <a href="7761.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7763.php">Josh Hursey: "Re: [OMPI users] 1.3 and --preload-files and --preload-binary"</a>
<li><strong>Reply:</strong> <a href="7763.php">Josh Hursey: "Re: [OMPI users] 1.3 and --preload-files and --preload-binary"</a>
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
