<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Nov 12 10:20:58 2005" -->
<!-- isoreceived="20051112152058" -->
<!-- sent="Sat, 12 Nov 2005 08:20:48 -0700" -->
<!-- isosent="20051112152048" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] 1.0rc5 is up" -->
<!-- id="64B746A8-B534-4975-8147-0BA3A9D4A67A_at_linuxnetworx.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49329.128.165.0.81.1131762375.squirrel_at_webmail.lanl.gov" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-12 10:20:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0324.php">Yaron Kretchmer: "[O-MPI users] Synchronizing C++ STL objects"</a>
<li><strong>Previous message:</strong> <a href="0322.php">Brian Barrett: "Re: [O-MPI users] Tests with current version"</a>
<li><strong>In reply to:</strong> <a href="0321.php">Timothy S. Woodall: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0327.php">Jeff Squyres: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Reply:</strong> <a href="0327.php">Jeff Squyres: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; We have very limited openib resources for testing at the moment. Can
</span><br>
<span class="quotelev1">&gt; you provide details on how to reproduce?
</span><br>
<p>My bad; I must've been in a bigger hurry to go home for the weekend  
<br>
than I thought.
<br>
<p>I'm going to start with the assumption you're interested in the steps  
<br>
to reproduce it in OpenMPI, and are less interested in the specifics  
<br>
of the OpenIB setup.
<br>
<p>Hardware Data:
<br>
Dual Opteron
<br>
4 GB RAM
<br>
PCI-X Mellanox IB HCA's
<br>
<p>Software:
<br>
SuSE Linux Enterprise Server 9es, SP2
<br>
Linux Kernel 2.6.14 (Kernel IB drivers)
<br>
OpenIB.org svn build of the userspace libraries and utilities.  (I  
<br>
mentioned the revision number in an earlier post)
<br>
<p>Setup:
<br>
Recompiled Presta, Intel MPI Benchmark, HPL, and HPCC against OpenIB  
<br>
1.0RC5
<br>
<p>HPL.dat and HPCC.dat are identical to versions previously posted by  
<br>
myself. (not included to reduce redundant traffic)
<br>
<p>Execution was started by commenting out the desied binary from the  
<br>
following (truncated) script:
<br>
#mpirun --prefix /usr/x86_64-gcc-3.3.3/openmpi-1.0rc5/ --mca btl  
<br>
openib -np 16 -machinefile $work_dir/node $work_dir/hello_world
<br>
#mpirun --prefix /usr/x86_64-gcc-3.3.3/openmpi-1.0rc5/ --mca btl  
<br>
openib -np 16 -machinefile $work_dir/node $work_dir/IMB-MPI1
<br>
#mpirun --prefix /usr/x86_64-gcc-3.3.3/openmpi-1.0rc5/ --mca btl  
<br>
openib -np 16 -machinefile $work_dir/node $work_dir/com -o100
<br>
#mpirun --prefix /usr/x86_64-gcc-3.3.3/openmpi-1.0rc5/ --mca btl  
<br>
openib -np 16 -machinefile $work_dir/node $work_dir/allred 1000 100 1000
<br>
#mpirun --prefix /usr/x86_64-gcc-3.3.3/openmpi-1.0rc5/ --mca btl  
<br>
openib -np 16 -machinefile $work_dir/node $work_dir/globalop --help
<br>
#mpirun --prefix /usr/x86_64-gcc-3.3.3/openmpi-1.0rc5/ --mca ptl  
<br>
openib -np 16 -machinefile $work_dir/node $work_dir/laten -o 100
<br>
#mpirun --prefix /usr/x86_64-gcc-3.3.3/openmpi-1.0rc5/ --mca btl  
<br>
openib -np 16 -machinefile $work_dir/node $work_dir/hpcc
<br>
mpirun --prefix /usr/x86_64-gcc-3.3.3/openmpi-1.0rc5/ --mca btl  
<br>
openib -np 16 -machinefile $work_dir/node $work_dir/xhpl
<br>
<p>As to which tests produce the error:  The presta 'com' test almost  
<br>
always produces it; although at different places in the test on each  
<br>
run.  (there are two files, presta.com-16.rc5 and presta.gen2-16rc5.   
<br>
Both of these are running he 'com' test, however, note both fail at  
<br>
different points).
<br>
<p>In addition IMB (Intel MPI Benchmark) also exhibits the same  
<br>
behavior, halting execution in different places.  Similarly, the  
<br>
'allred' and 'globalop' tests would also behave the same way,  
<br>
producing the same error.  (However, I did manage to get 'allred' to  
<br>
actually complete once... somehow.)
<br>
<p>HPL and HPCC also would exit, producing the same errors.
<br>
<p>If there's anything else I may have left out, I'll see what I can do.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0324.php">Yaron Kretchmer: "[O-MPI users] Synchronizing C++ STL objects"</a>
<li><strong>Previous message:</strong> <a href="0322.php">Brian Barrett: "Re: [O-MPI users] Tests with current version"</a>
<li><strong>In reply to:</strong> <a href="0321.php">Timothy S. Woodall: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0327.php">Jeff Squyres: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Reply:</strong> <a href="0327.php">Jeff Squyres: "Re: [O-MPI users] 1.0rc5 is up"</a>
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
