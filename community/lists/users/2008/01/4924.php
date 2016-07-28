<?
$subject_val = "Re: [OMPI users] SCALAPACK: Segmentation Fault (11) and Signal code:Address not mapped (1)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 11:01:33 2008" -->
<!-- isoreceived="20080130160133" -->
<!-- sent="Wed, 30 Jan 2008 10:01:25 -0600" -->
<!-- isosent="20080130160125" -->
<!-- name="Backlund, Daniel" -->
<!-- email="daniel.backlund_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SCALAPACK: Segmentation Fault (11) and Signal code:Address not mapped (1)" -->
<!-- id="2FE28C0766F7274AB44868F97FBF7EBF1A0291_at_CETO.net.ttu.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2FE28C0766F7274AB44868F97FBF7EBF1A028D_at_CETO.net.ttu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] SCALAPACK: Segmentation Fault (11) and Signal code:Address not mapped (1)<br>
<strong>From:</strong> Backlund, Daniel (<em>daniel.backlund_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-30 11:01:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4925.php">Dirk Eddelbuettel: "Re: [OMPI users] Debian package of open mpi?"</a>
<li><strong>Previous message:</strong> <a href="4923.php">Jeff Squyres: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>In reply to:</strong> <a href="4865.php">Backlund, Daniel: "[OMPI users] SCALAPACK: Segmentation Fault (11) and Signal code: Address not mapped (1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4932.php">흆e Sandgren: "Re: [OMPI users] SCALAPACK: Segmentation Fault (11) and Signal	code:Address not mapped (1)"</a>
<li><strong>Reply:</strong> <a href="4932.php">흆e Sandgren: "Re: [OMPI users] SCALAPACK: Segmentation Fault (11) and Signal	code:Address not mapped (1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff, thank your for your suggestion, I am sure that the correct mpif.h is being included. One 
<br>
thing that I did not do in my original message was submit the job to SGE. I did that and the 
<br>
program still failed with the same seg fault messages.
<br>
<p>Below is the output of the job submitted to SGE.
<br>
<p>&lt;&lt;&lt; example1.output &gt;&gt;&gt;
<br>
<p>[compute-0-1:19367] *** Process received signal ***
<br>
[compute-0-5:19650] *** Process received signal ***
<br>
[compute-0-3:17571] *** Process received signal ***
<br>
[compute-0-1:19366] *** Process received signal ***
<br>
[compute-0-1:19366] Signal: Segmentation fault (11)
<br>
[compute-0-1:19366] Signal code: Address not mapped (1)
<br>
[compute-0-1:19366] Failing at address: 0x44000070
<br>
[compute-0-1:19366] *** End of error message ***
<br>
[compute-0-5:19650] Signal: Segmentation fault (11)
<br>
[compute-0-5:19650] Signal code: Address not mapped (1)
<br>
[compute-0-5:19650] Failing at address: 0x44000070
<br>
[compute-0-5:19650] *** End of error message ***
<br>
[compute-0-3:17571] Signal: Segmentation fault (11)
<br>
[compute-0-3:17571] Signal code: Address not mapped (1)
<br>
[compute-0-3:17571] Failing at address: 0x44000070
<br>
[compute-0-3:17571] *** End of error message ***
<br>
[compute-0-1:19367] Signal: Segmentation fault (11)
<br>
[compute-0-1:19367] Signal code: Address not mapped (1)
<br>
[compute-0-1:19367] Failing at address: 0x44000070
<br>
[compute-0-1:19367] *** End of error message ***
<br>
[compute-0-5:19651] *** Process received signal ***
<br>
[compute-0-5:19651] Signal: Segmentation fault (11)
<br>
[compute-0-5:19651] Signal code: Address not mapped (1)
<br>
[compute-0-5:19651] Failing at address: 0x44000070
<br>
[compute-0-5:19651] *** End of error message ***
<br>
[compute-0-3:17572] *** Process received signal ***
<br>
[compute-0-3:17572] Signal: Segmentation fault (11)
<br>
[compute-0-3:17572] Signal code: Address not mapped (1)
<br>
[compute-0-3:17572] Failing at address: 0x44000070
<br>
[compute-0-3:17572] *** End of error message ***
<br>
[compute-0-1.local:19292] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/pls_base_orted_cmds.c at line 275
<br>
[compute-0-1.local:19292] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_gridengine_module.c at line 791
<br>
[compute-0-1.local:19292] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at line 90
<br>
mpirun noticed that job rank 2 with PID 19650 on node compute-0-5.local exited on signal 11 (Segmentation fault). 
<br>
*** glibc detected *** free(): invalid pointer: 0x0000000000606b80 ***
<br>
[compute-0-1.local:19292] ERROR: A daemon on node compute-0-5.local failed to start as expected.
<br>
[compute-0-1.local:19292] ERROR: There may be more information available from
<br>
[compute-0-1.local:19292] ERROR: the 'qstat -t' command on the Grid Engine tasks.
<br>
[compute-0-1.local:19292] ERROR: If the problem persists, please restart the
<br>
[compute-0-1.local:19292] ERROR: Grid Engine PE job
<br>
[compute-0-1.local:19292] The daemon received a signal 6 (with core).
<br>
[compute-0-1.local:19292] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/pls_base_orted_cmds.c at line 188
<br>
[compute-0-1.local:19292] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_gridengine_module.c at line 826
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons for this job. Returned value Timeout instead of ORTE_SUCCESS.
<br>
--------------------------------------------------------------------------
<br>
[compute-0-1.local:19365] OOB: Connection to HNP lost
<br>
<p>&lt;&lt;&lt; END example1.output &gt;&gt;&gt;
<br>
<p>Is it possible that the ACML libraries are incompatible with linking to my version of OMPI? 
<br>
Or like Jeff said, maybe it is just a Pathscale bug. I hope not.
<br>
<p>Daniel
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] on behalf of Backlund, Daniel
<br>
Sent: Tue 1/22/2008 3:06 PM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] SCALAPACK: Segmentation Fault (11) and Signal code:Address not mapped (1)
<br>
&nbsp;
<br>
<p>Hello all, I am using OMPI 1.2.4 on a Linux cluster (Rocks 4.2). OMPI was configured to use the 
<br>
Pathscale Compiler Suite installed in the (NFS mounted on nodes) /home/PROGRAMS/pathscale. I am 
<br>
trying to compile and run the example1.f that comes with the ACML package from AMD, and I am 
<br>
unable to get it to run. All nodes have the same Opteron processors and 2GB ram per core. OMPI 
<br>
was configured as below.
<br>
<p>export CC=pathcc
<br>
export CXX=pathCC
<br>
export FC=pathf90
<br>
export F77=pathf90
<br>
<p>./configure --prefix=/opt/openmpi/1.2.4 --enable-static --without-threads --without-memory-manager \
<br>
&nbsp;&nbsp;--without-libnuma --disable-mpi-threads
<br>
<p>The configuration was successful, the install was successful, I can even run a sample mpihello.f90 
<br>
program. I would eventually like to link the ACML SCALAPACK and BLACS libraries to our code, but I 
<br>
need some help. The ACML version is 3.1.0 for pathscale64. I go into the scalapack_examples directory, 
<br>
modify GNUmakefile to the correct values, and compile successfully. I have made openmpi into an rpm and 
<br>
pushed it to the nodes, modified LD_LIBRARY_PATH and PATH, and made sure I can see it on all nodes. 
<br>
When I try to run the example1.exe which is generated, using /opt/openmpi/1.2.4/bin/mpirun -np 6 example1.exe
<br>
I get the following output:
<br>
<p>&lt;&lt;&lt;&lt; example1.res &gt;&gt;&gt;&gt;
<br>
<p>[XXXXXXX:31295] *** Process received signal ***
<br>
[XXXXXXX:31295] Signal: Segmentation fault (11)
<br>
[XXXXXXX:31295] Signal code: Address not mapped (1)
<br>
[XXXXXXX:31295] Failing at address: 0x44000070
<br>
[XXXXXXX:31295] *** End of error message ***
<br>
[XXXXXXX:31298] *** Process received signal ***
<br>
[XXXXXXX:31298] Signal: Segmentation fault (11)
<br>
[XXXXXXX:31298] Signal code: Address not mapped (1)
<br>
[XXXXXXX:31298] Failing at address: 0x44000070
<br>
[XXXXXXX:31298] *** End of error message ***
<br>
[XXXXXXX:31299] *** Process received signal ***
<br>
[XXXXXXX:31299] Signal: Segmentation fault (11)
<br>
[XXXXXXX:31299] Signal code: Address not mapped (1)
<br>
[XXXXXXX:31299] Failing at address: 0x44000070
<br>
[XXXXXXX:31299] *** End of error message ***
<br>
[XXXXXXX:31300] *** Process received signal ***
<br>
[XXXXXXX:31300] Signal: Segmentation fault (11)
<br>
[XXXXXXX:31300] Signal code: Address not mapped (1)
<br>
[XXXXXXX:31300] Failing at address: 0x44000070
<br>
[XXXXXXX:31300] *** End of error message ***
<br>
[XXXXXXX:31296] *** Process received signal ***
<br>
[XXXXXXX:31296] Signal: Segmentation fault (11)
<br>
[XXXXXXX:31296] Signal code: Address not mapped (1)
<br>
[XXXXXXX:31296] Failing at address: 0x44000070
<br>
[XXXXXXX:31296] *** End of error message ***
<br>
[XXXXXXX:31297] *** Process received signal ***
<br>
[XXXXXXX:31297] Signal: Segmentation fault (11)
<br>
[XXXXXXX:31297] Signal code: Address not mapped (1)
<br>
[XXXXXXX:31297] Failing at address: 0x44000070
<br>
[XXXXXXX:31297] *** End of error message ***
<br>
mpirun noticed that job rank 0 with PID 31295 on node XXXXXXX.ourdomain.com exited on signal 11 (Segmentation fault). 
<br>
5 additional processes aborted (not shown)
<br>
<p>&lt;&lt;&lt;&lt; end example1.res &gt;&gt;&gt;&gt;
<br>
<p>Here is the result of ldd example1.exe
<br>
<p>&lt;&lt;&lt;&lt; ldd example1.exe &gt;&gt;&gt;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi_f90.so.0 =&gt; /opt/openmpi/1.2.4/lib/libmpi_f90.so.0 (0x0000002a9557d000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi_f77.so.0 =&gt; /opt/openmpi/1.2.4/lib/libmpi_f77.so.0 (0x0000002a95681000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.0 =&gt; /opt/openmpi/1.2.4/lib/libmpi.so.0 (0x0000002a957b3000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; /opt/openmpi/1.2.4/lib/libopen-rte.so.0 (0x0000002a959fb000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; /opt/openmpi/1.2.4/lib/libopen-pal.so.0 (0x0000002a95be7000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;librt.so.1 =&gt; /lib64/tls/librt.so.1 (0x0000003e7cd00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000003e7c200000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x0000003e79e00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmv.so.1 =&gt; /home/PROGRAMS/pathscale/lib/3.0/libmv.so.1 (0x0000002a95d4d000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpath.so.1 =&gt; /home/PROGRAMS/pathscale/lib/3.0/libmpath.so.1 (0x0000002a95e76000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/tls/libm.so.6 (0x0000003e77a00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x0000003e77c00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpathfortran.so.1 =&gt; /home/PROGRAMS/pathscale/lib/3.0/libpathfortran.so.1 (0x0000002a95f97000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/tls/libc.so.6 (0x0000003e77700000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/tls/libpthread.so.0 (0x0000003e78200000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x0000003e76800000)
<br>
&lt;&lt;&lt;&lt; end ldd &gt;&gt;&gt;&gt;
<br>
<p>Like I said, the compilation of the example program yields no errors, it just will not run. 
<br>
Does anybody have any suggestions? Am I doing something wrong?
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>
<br><hr>
<ul>
<li>application/ms-tnef attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4924/winmail.dat">winmail.dat</a>
</ul>
<!-- attachment="winmail.dat" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4925.php">Dirk Eddelbuettel: "Re: [OMPI users] Debian package of open mpi?"</a>
<li><strong>Previous message:</strong> <a href="4923.php">Jeff Squyres: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>In reply to:</strong> <a href="4865.php">Backlund, Daniel: "[OMPI users] SCALAPACK: Segmentation Fault (11) and Signal code: Address not mapped (1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4932.php">흆e Sandgren: "Re: [OMPI users] SCALAPACK: Segmentation Fault (11) and Signal	code:Address not mapped (1)"</a>
<li><strong>Reply:</strong> <a href="4932.php">흆e Sandgren: "Re: [OMPI users] SCALAPACK: Segmentation Fault (11) and Signal	code:Address not mapped (1)"</a>
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
