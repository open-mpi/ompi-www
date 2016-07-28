<?
$subject_val = "Re: [OMPI users] Different CC for orte and opmi?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 10 14:58:18 2008" -->
<!-- isoreceived="20080610185818" -->
<!-- sent="Tue, 10 Jun 2008 11:51:39 -0700" -->
<!-- isosent="20080610185139" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Different CC for orte and opmi?" -->
<!-- id="45D0FC1D-4534-48F6-BC41-CAAEE9634E91_at_rain.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1213097324.8434.19.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Different CC for orte and opmi?<br>
<strong>From:</strong> Doug Reeder (<em>dlr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-10 14:51:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5860.php">jody: "[OMPI users] orted runs on host, but doesn't seem to communicate"</a>
<li><strong>Previous message:</strong> <a href="5858.php">jody: "Re: [OMPI users] no reaction of remote hosts after ompi reinstall [follow up]"</a>
<li><strong>In reply to:</strong> <a href="5857.php">Ashley Pittman: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ashley,
<br>
<p>I had a similar situation linking to the intel libraries and used the  
<br>
following in the link step
<br>
<p>-L/opt/intel/compiler_10.1/x86_64/lib -Wl,-non_shared -limf -lsvml - 
<br>
lintlc -Wl,-call_shared
<br>
<p>This created binaries statically linked to the intel compiler  
<br>
libraries so I didn't have to push the intel libraries out to the  
<br>
nodes or worry about the LD_LIBRARY_PATH.
<br>
<p>Doug Reeder
<br>
On Jun 10, 2008, at 4:28 AM, Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry, I'll try and fill in the background.  I'm attempting to package
</span><br>
<span class="quotelev1">&gt; openmpi for a number of customers we have, whenever possible on our
</span><br>
<span class="quotelev1">&gt; clusters we use modules to provide users with a choice of MPI
</span><br>
<span class="quotelev1">&gt; environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using the 1.2.6 stable release and have built the code twice, once
</span><br>
<span class="quotelev1">&gt; to /opt/openmpi-1.2.6/gnu and once to /opt/openmpi-1.2.6/intel, I have
</span><br>
<span class="quotelev1">&gt; create two modules environments called openmpi-gnu and openmpi- 
</span><br>
<span class="quotelev1">&gt; intel and
</span><br>
<span class="quotelev1">&gt; am also using a existing one called intel-compiler.  The build was
</span><br>
<span class="quotelev1">&gt; successful in both cases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I load the openmpi-gnu module I can compile and run code using
</span><br>
<span class="quotelev1">&gt; mpicc/mpirun as expected, if I load openmpi-intel and intel-compiler I
</span><br>
<span class="quotelev1">&gt; find I can compile code but I get an error about missing libimf.so  
</span><br>
<span class="quotelev1">&gt; when
</span><br>
<span class="quotelev1">&gt; I try to run it (reproduced below).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The application *will* run if I add the line &quot;module load
</span><br>
<span class="quotelev1">&gt; intel-compiler&quot; to my bashrc as this allows orted to link.  What I  
</span><br>
<span class="quotelev1">&gt; think
</span><br>
<span class="quotelev1">&gt; I want to do is to compile the actual library with icc but to compile
</span><br>
<span class="quotelev1">&gt; orted with gcc so that I don't need to load the intel environment by
</span><br>
<span class="quotelev1">&gt; default.  I'm assuming that the link problems only exist with orted  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; not with the actual application as the LD_LIBRARY_PATH is set  
</span><br>
<span class="quotelev1">&gt; correctly
</span><br>
<span class="quotelev1">&gt; in the shell which is launching the program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley Pittman.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sccomp_at_demo4-sles-10-1-fe:~/benchmarks/IMB_3.0/src&gt; mpirun -H  
</span><br>
<span class="quotelev1">&gt; comp00,comp01 ./IMB-MPI1
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.2.6/intel/bin/orted: error while loading shared  
</span><br>
<span class="quotelev1">&gt; libraries: libimf.so: cannot open shared object file: No such file  
</span><br>
<span class="quotelev1">&gt; or directory
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.2.6/intel/bin/orted: error while loading shared  
</span><br>
<span class="quotelev1">&gt; libraries: libimf.so: cannot open shared object file: No such file  
</span><br>
<span class="quotelev1">&gt; or directory
</span><br>
<span class="quotelev1">&gt; [demo4-sles-10-1-fe:29303] ERROR: A daemon on node comp01 failed to  
</span><br>
<span class="quotelev1">&gt; start as expected.
</span><br>
<span class="quotelev1">&gt; [demo4-sles-10-1-fe:29303] ERROR: There may be more information  
</span><br>
<span class="quotelev1">&gt; available from
</span><br>
<span class="quotelev1">&gt; [demo4-sles-10-1-fe:29303] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [demo4-sles-10-1-fe:29303] ERROR: The daemon exited unexpectedly  
</span><br>
<span class="quotelev1">&gt; with status 127.
</span><br>
<span class="quotelev1">&gt; [demo4-sles-10-1-fe:29303] [0,0,0] ORTE_ERROR_LOG: Timeout in file  
</span><br>
<span class="quotelev1">&gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev1">&gt; [demo4-sles-10-1-fe:29303] [0,0,0] ORTE_ERROR_LOG: Timeout in file  
</span><br>
<span class="quotelev1">&gt; pls_rsh_module.c at line 1166
</span><br>
<span class="quotelev1">&gt; [demo4-sles-10-1-fe:29303] [0,0,0] ORTE_ERROR_LOG: Timeout in file  
</span><br>
<span class="quotelev1">&gt; errmgr_hnp.c at line 90
</span><br>
<span class="quotelev1">&gt; [demo4-sles-10-1-fe:29303] ERROR: A daemon on node comp00 failed to  
</span><br>
<span class="quotelev1">&gt; start as expected.
</span><br>
<span class="quotelev1">&gt; [demo4-sles-10-1-fe:29303] ERROR: There may be more information  
</span><br>
<span class="quotelev1">&gt; available from
</span><br>
<span class="quotelev1">&gt; [demo4-sles-10-1-fe:29303] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [demo4-sles-10-1-fe:29303] ERROR: The daemon exited unexpectedly  
</span><br>
<span class="quotelev1">&gt; with status 127.
</span><br>
<span class="quotelev1">&gt; [demo4-sles-10-1-fe:29303] [0,0,0] ORTE_ERROR_LOG: Timeout in file  
</span><br>
<span class="quotelev1">&gt; base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev1">&gt; [demo4-sles-10-1-fe:29303] [0,0,0] ORTE_ERROR_LOG: Timeout in file  
</span><br>
<span class="quotelev1">&gt; pls_rsh_module.c at line 1198
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons for this job.  
</span><br>
<span class="quotelev1">&gt; Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ldd /opt/openmpi-1.2.6/intel/bin/orted
</span><br>
<span class="quotelev1">&gt;         linux-vdso.so.1 =&gt;  (0x00007fff877fe000)
</span><br>
<span class="quotelev1">&gt;         libopen-rte.so.0 =&gt; /opt/openmpi-1.2.6/intel/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; rte.so.0 (0x00007fe97f3ac000)
</span><br>
<span class="quotelev1">&gt;         libopen-pal.so.0 =&gt; /opt/openmpi-1.2.6/intel/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; pal.so.0 (0x00007fe97f239000)
</span><br>
<span class="quotelev1">&gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00007fe97f135000)
</span><br>
<span class="quotelev1">&gt;         libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00007fe97f01f000)
</span><br>
<span class="quotelev1">&gt;         libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00007fe97ef1c000)
</span><br>
<span class="quotelev1">&gt;         libm.so.6 =&gt; /lib64/libm.so.6 (0x00007fe97edc7000)
</span><br>
<span class="quotelev1">&gt;         libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00007fe97ecba000)
</span><br>
<span class="quotelev1">&gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007fe97eba3000)
</span><br>
<span class="quotelev1">&gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x00007fe97e972000)
</span><br>
<span class="quotelev1">&gt;         libimf.so =&gt; /opt/intel/compiler_10.1/x86_64/lib/libimf.so  
</span><br>
<span class="quotelev1">&gt; (0x00007fe97e610000)
</span><br>
<span class="quotelev1">&gt;         libsvml.so =&gt; /opt/intel/compiler_10.1/x86_64/lib/ 
</span><br>
<span class="quotelev1">&gt; libsvml.so (0x00007fe97e489000)
</span><br>
<span class="quotelev1">&gt;         libintlc.so.5 =&gt; /opt/intel/compiler_10.1/x86_64/lib/ 
</span><br>
<span class="quotelev1">&gt; libintlc.so.5 (0x00007fe97e350000)
</span><br>
<span class="quotelev1">&gt;         /lib64/ld-linux-x86-64.so.2 (0x00007fe97f525000)
</span><br>
<span class="quotelev1">&gt; $ ssh comp00 ldd /opt/openmpi-1.2.6/intel/bin/orted
</span><br>
<span class="quotelev1">&gt;         libopen-rte.so.0 =&gt; /opt/openmpi-1.2.6/intel/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; rte.so.0 (0x00002b1f0c0c5000)
</span><br>
<span class="quotelev1">&gt;         libopen-pal.so.0 =&gt; /opt/openmpi-1.2.6/intel/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; pal.so.0 (0x00002b1f0c23e000)
</span><br>
<span class="quotelev1">&gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00002b1f0c3bc000)
</span><br>
<span class="quotelev1">&gt;         libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00002b1f0c4c0000)
</span><br>
<span class="quotelev1">&gt;         libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00002b1f0c5d7000)
</span><br>
<span class="quotelev1">&gt;         libm.so.6 =&gt; /lib64/libm.so.6 (0x00002b1f0c6da000)
</span><br>
<span class="quotelev1">&gt;         libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00002b1f0c82f000)
</span><br>
<span class="quotelev1">&gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00002b1f0c93d000)
</span><br>
<span class="quotelev1">&gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x00002b1f0ca54000)
</span><br>
<span class="quotelev1">&gt;         /lib64/ld-linux-x86-64.so.2 (0x00002b1f0bfa9000)
</span><br>
<span class="quotelev1">&gt;         libimf.so =&gt; not found
</span><br>
<span class="quotelev1">&gt;         libsvml.so =&gt; not found
</span><br>
<span class="quotelev1">&gt;         libintlc.so.5 =&gt; not found
</span><br>
<span class="quotelev1">&gt;         libimf.so =&gt; not found
</span><br>
<span class="quotelev1">&gt;         libsvml.so =&gt; not found
</span><br>
<span class="quotelev1">&gt;         libintlc.so.5 =&gt; not found
</span><br>
<span class="quotelev1">&gt; $ ldd ./IMB-MPI1
</span><br>
<span class="quotelev1">&gt;         linux-vdso.so.1 =&gt;  (0x00007fff2cbfe000)
</span><br>
<span class="quotelev1">&gt;         libmpi.so.0 =&gt; /opt/openmpi-1.2.6/intel/lib/libmpi.so.0  
</span><br>
<span class="quotelev1">&gt; (0x00007f1624821000)
</span><br>
<span class="quotelev1">&gt;         libopen-rte.so.0 =&gt; /opt/openmpi-1.2.6/intel/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; rte.so.0 (0x00007f16246a8000)
</span><br>
<span class="quotelev1">&gt;         libopen-pal.so.0 =&gt; /opt/openmpi-1.2.6/intel/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; pal.so.0 (0x00007f1624535000)
</span><br>
<span class="quotelev1">&gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00007f1624431000)
</span><br>
<span class="quotelev1">&gt;         libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00007f162431b000)
</span><br>
<span class="quotelev1">&gt;         libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00007f1624218000)
</span><br>
<span class="quotelev1">&gt;         libm.so.6 =&gt; /lib64/libm.so.6 (0x00007f16240c3000)
</span><br>
<span class="quotelev1">&gt;         libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00007f1623fb6000)
</span><br>
<span class="quotelev1">&gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007f1623e9f000)
</span><br>
<span class="quotelev1">&gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x00007f1623c6e000)
</span><br>
<span class="quotelev1">&gt;         libimf.so =&gt; /opt/intel/compiler_10.1/x86_64/lib/libimf.so  
</span><br>
<span class="quotelev1">&gt; (0x00007f162390c000)
</span><br>
<span class="quotelev1">&gt;         libsvml.so =&gt; /opt/intel/compiler_10.1/x86_64/lib/ 
</span><br>
<span class="quotelev1">&gt; libsvml.so (0x00007f1623785000)
</span><br>
<span class="quotelev1">&gt;         libintlc.so.5 =&gt; /opt/intel/compiler_10.1/x86_64/lib/ 
</span><br>
<span class="quotelev1">&gt; libintlc.so.5 (0x00007f162364c000)
</span><br>
<span class="quotelev1">&gt;         /lib64/ld-linux-x86-64.so.2 (0x00007f16249e0000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, 2008-06-09 at 13:02 -0700, Doug Reeder wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ashley,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am confused. In your first post you said orted fails, with link
</span><br>
<span class="quotelev2">&gt;&gt; errors, when you try to launch a job. From this I inferred that the
</span><br>
<span class="quotelev2">&gt;&gt; build and install steps for creating openmpi were successful. Was the
</span><br>
<span class="quotelev2">&gt;&gt; build/install step successful. If so what dynamic libraries does ldd
</span><br>
<span class="quotelev2">&gt;&gt; say that orted is using.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Doug Reeder
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 9, 2008, at 12:54 PM, Ashley Pittman wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Putting to side any religious views I might have about static  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; how would that help in this case?   It appears to be orted itself  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fails to link, I'm assuming that the application would actually run,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; either because the LD_LIBRARY_PATH is set correctly on the front
</span><br>
<span class="quotelev3">&gt;&gt;&gt; end or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the --prefix option to mpirun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or do you mean static linking of the tools?  I could go for that if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there is a configure option for it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ashley Pittman.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, 2008-06-09 at 08:27 -0700, Doug Reeder wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ashley,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It could work but I think you would be better off to try and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; statically link the intel libraries.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Doug Reeder
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 9, 2008, at 4:34 AM, Ashley Pittman wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is there a way to use a different compiler for the orte component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the shared library component when using openmpi?  We are finding
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that if
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; we use icc to compile openmpi then orted fails with link errors
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; when I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; try and launch a job as the intel environment isn't loaded by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; default.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We use the module command heavily and have modules for openmpi-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; gnu and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; openmpi-intel as well as a intel_compiler module.  To use openmpi-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; intel
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; we have to load intel_compiler by default on the compute nodes  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; which
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; isn't ideal, is it possible to compile the orte component with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; gcc and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the library component with icc?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Yours,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ashley Pittman,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5860.php">jody: "[OMPI users] orted runs on host, but doesn't seem to communicate"</a>
<li><strong>Previous message:</strong> <a href="5858.php">jody: "Re: [OMPI users] no reaction of remote hosts after ompi reinstall [follow up]"</a>
<li><strong>In reply to:</strong> <a href="5857.php">Ashley Pittman: "Re: [OMPI users] Different CC for orte and opmi?"</a>
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
