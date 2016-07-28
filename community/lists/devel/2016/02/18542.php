<?
$subject_val = "[OMPI devel] orted hangs on SLES12 when running 80 ranks per node";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  3 20:40:20 2016" -->
<!-- isoreceived="20160204014020" -->
<!-- sent="Thu, 4 Feb 2016 01:40:16 +0000" -->
<!-- isosent="20160204014016" -->
<!-- name="Cabral, Matias A" -->
<!-- email="matias.a.cabral_at_[hidden]" -->
<!-- subject="[OMPI devel] orted hangs on SLES12 when running 80 ranks per node" -->
<!-- id="39196F20B4590A4A8337B6A6F7F0FD8D8534FCDE_at_FMSMSX102.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] orted hangs on SLES12 when running 80 ranks per node<br>
<strong>From:</strong> Cabral, Matias A (<em>matias.a.cabral_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-03 20:40:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18543.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<li><strong>Previous message:</strong> <a href="18541.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18570.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] orted hangs on SLES12 when running 80 ranks per node"</a>
<li><strong>Reply:</strong> <a href="18570.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] orted hangs on SLES12 when running 80 ranks per node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have hit an issue in which orted hangs during the finalization of a job. This is reproduced by running 80 ranks per node (yes, oversubscribed) on a 4 nodes cluster that runs SLES12 with OMPI 1.10.2 (I also see it with 1.10.0). I found that it is independent of the binary used (I used a very simple sample to init ranks do nothing and finalize) and also saw happens after MPI_Finalize(). It is not a deterministic issue and takes a few attempts to reproduce. When the hang occurs, the mpirun process does not get to wait() its childs (see below(1)) and is stuck on a poll() (see below (2)). I logged in the other nodes and found all the &quot;other&quot; orted processes are also held on a different poll (see below (3)).  I found that after attaching gdb to mpirun and letting it continue the execution finishes with no issues. Same thing sending a SIGSTOP and SIGCONT the hung mpirun.
<br>
<p>(1)
<br>
root     164356 161186  0 16:50 pts/0    00:00:00 mpirun -np 320 --allow-run-as-root -machinefile ./user/hostfile /scratch/user/osu_multi_lat
<br>
root     164358 164356  0 16:50 pts/0    00:00:00 /usr/bin/ssh -x n3     PATH=/scratch/user/bin:$PATH ; export PATH ; LD_LIBRARY_PATH=/scratch/user/lib:$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ; DYLD
<br>
root     164359 164356  0 16:50 pts/0    00:00:00 /usr/bin/ssh -x n2     PATH=/scratch/user/bin:$PATH ; export PATH ; LD_LIBRARY_PATH=/scratch/user/lib:$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ; DYLD
<br>
root     164361 164356  0 16:50 pts/0    00:00:06 [osu_multi_lat] &lt;defunct&gt;
<br>
root     164362 164356  0 16:50 pts/0    00:00:06 [osu_multi_lat] &lt;defunct&gt;
<br>
root     164364 164356  0 16:50 pts/0    00:00:06 [osu_multi_lat] &lt;defunct&gt;
<br>
root     164365 164356  0 16:50 pts/0    00:00:06 [osu_multi_lat] &lt;defunct&gt;
<br>
root     164366 164356  0 16:50 pts/0    00:00:06 [osu_multi_lat] &lt;defunct&gt;
<br>
root     164367 164356  0 16:50 pts/0    00:00:06 [osu_multi_lat] &lt;defunct&gt;
<br>
root     164370 164356  0 16:50 pts/0    00:00:06 [osu_multi_lat] &lt;defunct&gt;
<br>
root     164372 164356  0 16:50 pts/0    00:00:06 [osu_multi_lat] &lt;defunct&gt;
<br>
root     164374 164356  0 16:50 pts/0    00:00:06 [osu_multi_lat] &lt;defunct&gt;
<br>
root     164375 164356  0 16:50 pts/0    00:00:06 [osu_multi_lat] &lt;defunct&gt;
<br>
root     164378 164356  0 16:50 pts/0    00:00:06 [osu_multi_lat] &lt;defunct&gt;
<br>
root     164379 164356  0 16:50 pts/0    00:00:06 [osu_multi_lat] &lt;defunct&gt;
<br>
....
<br>
<p>(2)
<br>
gdb -p 164356
<br>
...
<br>
<p>Missing separate debuginfos, use: zypper install glibc-debuginfo-2.19-17.72.x86_64
<br>
(gdb) bt
<br>
#0  0x00007f143177a3cd in poll () from /lib64/libc.so.6
<br>
#1  0x00007f14325e0636 in poll_dispatch () from /scratch/user/lib/libopen-pal.so.13
<br>
#2  0x00007f14325d77bf in opal_libevent2021_event_base_loop () from /scratch/user/lib/libopen-pal.so.13
<br>
#3  0x00000000004051cd in orterun (argc=7, argv=0x7fff8c4bb428) at orterun.c:1133
<br>
#4  0x0000000000403a8d in main (argc=7, argv=0x7fff8c4bb428) at main.c:13
<br>
<p><p>(3) (remote nodes orted)
<br>
(gdb) bt
<br>
#0  0x00007f8c288d33b0 in __poll_nocancel () from /lib64/libc.so.6
<br>
#1  0x00007f8c29941186 in poll_dispatch () /scratch/user/lib/libopen-pal.so.13
<br>
#2  0x00007f8c2993830f in opal_libevent2021_event_base_loop () from /scratch/user/lib/libopen-pal.so.13
<br>
#3  0x00007f8c29be75c4 in orte_daemon () from /scratch/user/lib/libopen-rte.so.12
<br>
#4  0x0000000000400827 in main ()
<br>
<p><p>Thanks,
<br>
<p>_MAC
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18542/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18543.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<li><strong>Previous message:</strong> <a href="18541.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18570.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] orted hangs on SLES12 when running 80 ranks per node"</a>
<li><strong>Reply:</strong> <a href="18570.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] orted hangs on SLES12 when running 80 ranks per node"</a>
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
