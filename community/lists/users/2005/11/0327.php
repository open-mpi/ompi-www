<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Nov 13 15:02:31 2005" -->
<!-- isoreceived="20051113200231" -->
<!-- sent="Sun, 13 Nov 2005 15:02:16 -0500" -->
<!-- isosent="20051113200216" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] 1.0rc5 is up" -->
<!-- id="1ee9cdb8a0df3510c5449d0944c563d6_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="64B746A8-B534-4975-8147-0BA3A9D4A67A_at_linuxnetworx.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-13 15:02:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0328.php">Jeff Squyres: "Re: [O-MPI users] HPL anf TCP"</a>
<li><strong>Previous message:</strong> <a href="0326.php">Jeff Squyres: "Re: [O-MPI users] can't get openmpi to run across twomulti-NICmachines"</a>
<li><strong>In reply to:</strong> <a href="0323.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0329.php">Brian Barrett: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Reply:</strong> <a href="0329.php">Brian Barrett: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Troy --
<br>
<p>Were you perchance using multiple processes per node?  If so, we 
<br>
literally just fixed some sm btl bugs that could have been affecting 
<br>
you (they could have caused hangs).  They're fixed in the nightly 
<br>
snapshots from today (both trunk and v1.0): r8140.  If you were using 
<br>
the sm btl and multiple processes per node, could you try again?
<br>
<p><p>On Nov 12, 2005, at 10:20 AM, Troy Telford wrote:
<br>
<p><span class="quotelev2">&gt;&gt; We have very limited openib resources for testing at the moment. Can
</span><br>
<span class="quotelev2">&gt;&gt; you provide details on how to reproduce?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My bad; I must've been in a bigger hurry to go home for the weekend
</span><br>
<span class="quotelev1">&gt; than I thought.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm going to start with the assumption you're interested in the steps
</span><br>
<span class="quotelev1">&gt; to reproduce it in OpenMPI, and are less interested in the specifics
</span><br>
<span class="quotelev1">&gt; of the OpenIB setup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hardware Data:
</span><br>
<span class="quotelev1">&gt; Dual Opteron
</span><br>
<span class="quotelev1">&gt; 4 GB RAM
</span><br>
<span class="quotelev1">&gt; PCI-X Mellanox IB HCA's
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Software:
</span><br>
<span class="quotelev1">&gt; SuSE Linux Enterprise Server 9es, SP2
</span><br>
<span class="quotelev1">&gt; Linux Kernel 2.6.14 (Kernel IB drivers)
</span><br>
<span class="quotelev1">&gt; OpenIB.org svn build of the userspace libraries and utilities.  (I
</span><br>
<span class="quotelev1">&gt; mentioned the revision number in an earlier post)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Setup:
</span><br>
<span class="quotelev1">&gt; Recompiled Presta, Intel MPI Benchmark, HPL, and HPCC against OpenIB
</span><br>
<span class="quotelev1">&gt; 1.0RC5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HPL.dat and HPCC.dat are identical to versions previously posted by
</span><br>
<span class="quotelev1">&gt; myself. (not included to reduce redundant traffic)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Execution was started by commenting out the desied binary from the
</span><br>
<span class="quotelev1">&gt; following (truncated) script:
</span><br>
<span class="quotelev1">&gt; #mpirun --prefix /usr/x86_64-gcc-3.3.3/openmpi-1.0rc5/ --mca btl
</span><br>
<span class="quotelev1">&gt; openib -np 16 -machinefile $work_dir/node $work_dir/hello_world
</span><br>
<span class="quotelev1">&gt; #mpirun --prefix /usr/x86_64-gcc-3.3.3/openmpi-1.0rc5/ --mca btl
</span><br>
<span class="quotelev1">&gt; openib -np 16 -machinefile $work_dir/node $work_dir/IMB-MPI1
</span><br>
<span class="quotelev1">&gt; #mpirun --prefix /usr/x86_64-gcc-3.3.3/openmpi-1.0rc5/ --mca btl
</span><br>
<span class="quotelev1">&gt; openib -np 16 -machinefile $work_dir/node $work_dir/com -o100
</span><br>
<span class="quotelev1">&gt; #mpirun --prefix /usr/x86_64-gcc-3.3.3/openmpi-1.0rc5/ --mca btl
</span><br>
<span class="quotelev1">&gt; openib -np 16 -machinefile $work_dir/node $work_dir/allred 1000 100 
</span><br>
<span class="quotelev1">&gt; 1000
</span><br>
<span class="quotelev1">&gt; #mpirun --prefix /usr/x86_64-gcc-3.3.3/openmpi-1.0rc5/ --mca btl
</span><br>
<span class="quotelev1">&gt; openib -np 16 -machinefile $work_dir/node $work_dir/globalop --help
</span><br>
<span class="quotelev1">&gt; #mpirun --prefix /usr/x86_64-gcc-3.3.3/openmpi-1.0rc5/ --mca ptl
</span><br>
<span class="quotelev1">&gt; openib -np 16 -machinefile $work_dir/node $work_dir/laten -o 100
</span><br>
<span class="quotelev1">&gt; #mpirun --prefix /usr/x86_64-gcc-3.3.3/openmpi-1.0rc5/ --mca btl
</span><br>
<span class="quotelev1">&gt; openib -np 16 -machinefile $work_dir/node $work_dir/hpcc
</span><br>
<span class="quotelev1">&gt; mpirun --prefix /usr/x86_64-gcc-3.3.3/openmpi-1.0rc5/ --mca btl
</span><br>
<span class="quotelev1">&gt; openib -np 16 -machinefile $work_dir/node $work_dir/xhpl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As to which tests produce the error:  The presta 'com' test almost
</span><br>
<span class="quotelev1">&gt; always produces it; although at different places in the test on each
</span><br>
<span class="quotelev1">&gt; run.  (there are two files, presta.com-16.rc5 and presta.gen2-16rc5.
</span><br>
<span class="quotelev1">&gt; Both of these are running he 'com' test, however, note both fail at
</span><br>
<span class="quotelev1">&gt; different points).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In addition IMB (Intel MPI Benchmark) also exhibits the same
</span><br>
<span class="quotelev1">&gt; behavior, halting execution in different places.  Similarly, the
</span><br>
<span class="quotelev1">&gt; 'allred' and 'globalop' tests would also behave the same way,
</span><br>
<span class="quotelev1">&gt; producing the same error.  (However, I did manage to get 'allred' to
</span><br>
<span class="quotelev1">&gt; actually complete once... somehow.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HPL and HPCC also would exit, producing the same errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If there's anything else I may have left out, I'll see what I can do.
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
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0328.php">Jeff Squyres: "Re: [O-MPI users] HPL anf TCP"</a>
<li><strong>Previous message:</strong> <a href="0326.php">Jeff Squyres: "Re: [O-MPI users] can't get openmpi to run across twomulti-NICmachines"</a>
<li><strong>In reply to:</strong> <a href="0323.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0329.php">Brian Barrett: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Reply:</strong> <a href="0329.php">Brian Barrett: "Re: [O-MPI users] 1.0rc5 is up"</a>
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
