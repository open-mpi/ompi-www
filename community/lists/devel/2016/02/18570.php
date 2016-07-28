<?
$subject_val = "Re: [OMPI devel] orted hangs on SLES12 when running 80 ranks per node";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  7 08:30:34 2016" -->
<!-- isoreceived="20160207133034" -->
<!-- sent="Sun, 7 Feb 2016 13:30:32 +0000" -->
<!-- isosent="20160207133032" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orted hangs on SLES12 when running 80 ranks per node" -->
<!-- id="FF318F59-4CE7-4FF0-A197-8B5297FC4B7F_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="39196F20B4590A4A8337B6A6F7F0FD8D8534FCDE_at_FMSMSX102.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] orted hangs on SLES12 when running 80 ranks per node<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-07 08:30:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18571.php">Lisandro Dalcin: "Re: [OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY"</a>
<li><strong>Previous message:</strong> <a href="18569.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi-release branch v2.x updated. v2.x-dev-1078-gefeac60"</a>
<li><strong>In reply to:</strong> <a href="18542.php">Cabral, Matias A: "[OMPI devel] orted hangs on SLES12 when running 80 ranks per node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Matthias:
<br>

<br>
It looks like this is a duplicate of a reported issue (although with significantly more detail): <a href="https://github.com/open-mpi/ompi/issues/1136">https://github.com/open-mpi/ompi/issues/1136</a>
<br>

<br>
<span class="quotelev1">&gt; On Feb 3, 2016, at 8:40 PM, Cabral, Matias A &lt;matias.a.cabral_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I have hit an issue in which orted hangs during the finalization of a job. This is reproduced by running 80 ranks per node (yes, oversubscribed) on a 4 nodes cluster that runs SLES12 with OMPI 1.10.2 (I also see it with 1.10.0). I found that it is independent of the binary used (I used a very simple sample to init ranks do nothing and finalize) and also saw happens after MPI_Finalize(). It is not a deterministic issue and takes a few attempts to reproduce. When the hang occurs, the mpirun process does not get to wait() its childs (see below(1)) and is stuck on a poll() (see below (2)). I logged in the other nodes and found all the &#226;&#128;&#156;other&#226;&#128;&#157; orted processes are also held on a different poll (see below (3)).  I found that after attaching gdb to mpirun and letting it continue the execution finishes with no issues. Same thing sending a SIGSTOP and SIGCONT the hung mpirun.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; (1)
</span><br>
<span class="quotelev1">&gt; root     164356 161186  0 16:50 pts/0    00:00:00 mpirun -np 320 --allow-run-as-root -machinefile ./user/hostfile /scratch/user/osu_multi_lat
</span><br>
<span class="quotelev1">&gt; root     164358 164356  0 16:50 pts/0    00:00:00 /usr/bin/ssh -x n3     PATH=/scratch/user/bin:$PATH ; export PATH ; LD_LIBRARY_PATH=/scratch/user/lib:$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ; DYLD
</span><br>
<span class="quotelev1">&gt; root     164359 164356  0 16:50 pts/0    00:00:00 /usr/bin/ssh -x n2     PATH=/scratch/user/bin:$PATH ; export PATH ; LD_LIBRARY_PATH=/scratch/user/lib:$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ; DYLD
</span><br>
<span class="quotelev1">&gt; root     164361 164356  0 16:50 pts/0    00:00:06 [osu_multi_lat] &lt;defunct&gt;
</span><br>
<span class="quotelev1">&gt; root     164362 164356  0 16:50 pts/0    00:00:06 [osu_multi_lat] &lt;defunct&gt;
</span><br>
<span class="quotelev1">&gt; root     164364 164356  0 16:50 pts/0    00:00:06 [osu_multi_lat] &lt;defunct&gt;
</span><br>
<span class="quotelev1">&gt; root     164365 164356  0 16:50 pts/0    00:00:06 [osu_multi_lat] &lt;defunct&gt;
</span><br>
<span class="quotelev1">&gt; root     164366 164356  0 16:50 pts/0    00:00:06 [osu_multi_lat] &lt;defunct&gt;
</span><br>
<span class="quotelev1">&gt; root     164367 164356  0 16:50 pts/0    00:00:06 [osu_multi_lat] &lt;defunct&gt;
</span><br>
<span class="quotelev1">&gt; root     164370 164356  0 16:50 pts/0    00:00:06 [osu_multi_lat] &lt;defunct&gt;
</span><br>
<span class="quotelev1">&gt; root     164372 164356  0 16:50 pts/0    00:00:06 [osu_multi_lat] &lt;defunct&gt;
</span><br>
<span class="quotelev1">&gt; root     164374 164356  0 16:50 pts/0    00:00:06 [osu_multi_lat] &lt;defunct&gt;
</span><br>
<span class="quotelev1">&gt; root     164375 164356  0 16:50 pts/0    00:00:06 [osu_multi_lat] &lt;defunct&gt;
</span><br>
<span class="quotelev1">&gt; root     164378 164356  0 16:50 pts/0    00:00:06 [osu_multi_lat] &lt;defunct&gt;
</span><br>
<span class="quotelev1">&gt; root     164379 164356  0 16:50 pts/0    00:00:06 [osu_multi_lat] &lt;defunct&gt;
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#166;.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; (2)
</span><br>
<span class="quotelev1">&gt; gdb -p 164356
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#166;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Missing separate debuginfos, use: zypper install glibc-debuginfo-2.19-17.72.x86_64
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00007f143177a3cd in poll () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007f14325e0636 in poll_dispatch () from /scratch/user/lib/libopen-pal.so.13
</span><br>
<span class="quotelev1">&gt; #2  0x00007f14325d77bf in opal_libevent2021_event_base_loop () from /scratch/user/lib/libopen-pal.so.13
</span><br>
<span class="quotelev1">&gt; #3  0x00000000004051cd in orterun (argc=7, argv=0x7fff8c4bb428) at orterun.c:1133
</span><br>
<span class="quotelev1">&gt; #4  0x0000000000403a8d in main (argc=7, argv=0x7fff8c4bb428) at main.c:13
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; (3) (remote nodes orted)
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00007f8c288d33b0 in __poll_nocancel () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007f8c29941186 in poll_dispatch () /scratch/user/lib/libopen-pal.so.13
</span><br>
<span class="quotelev1">&gt; #2  0x00007f8c2993830f in opal_libevent2021_event_base_loop () from /scratch/user/lib/libopen-pal.so.13
</span><br>
<span class="quotelev1">&gt; #3  0x00007f8c29be75c4 in orte_daemon () from /scratch/user/lib/libopen-rte.so.12
</span><br>
<span class="quotelev1">&gt; #4  0x0000000000400827 in main ()
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _MAC
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18542.php">http://www.open-mpi.org/community/lists/devel/2016/02/18542.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18571.php">Lisandro Dalcin: "Re: [OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY"</a>
<li><strong>Previous message:</strong> <a href="18569.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi-release branch v2.x updated. v2.x-dev-1078-gefeac60"</a>
<li><strong>In reply to:</strong> <a href="18542.php">Cabral, Matias A: "[OMPI devel] orted hangs on SLES12 when running 80 ranks per node"</a>
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
