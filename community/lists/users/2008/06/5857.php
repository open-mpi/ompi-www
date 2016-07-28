<?
$subject_val = "Re: [OMPI users] Different CC for orte and opmi?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 10 07:28:56 2008" -->
<!-- isoreceived="20080610112856" -->
<!-- sent="Tue, 10 Jun 2008 12:28:44 +0100" -->
<!-- isosent="20080610112844" -->
<!-- name="Ashley Pittman" -->
<!-- email="apittman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Different CC for orte and opmi?" -->
<!-- id="1213097324.8434.19.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
<!-- inreplyto="32781610-3B7E-4AB6-8F71-6B47E52A6267_at_rain.org" -->
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
<strong>From:</strong> Ashley Pittman (<em>apittman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-10 07:28:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5858.php">jody: "Re: [OMPI users] no reaction of remote hosts after ompi reinstall [follow up]"</a>
<li><strong>Previous message:</strong> <a href="5856.php">jody: "[OMPI users] no reaction of remote hosts after ompi reinstall"</a>
<li><strong>In reply to:</strong> <a href="5855.php">Doug Reeder: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5859.php">Doug Reeder: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<li><strong>Reply:</strong> <a href="5859.php">Doug Reeder: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, I'll try and fill in the background.  I'm attempting to package
<br>
openmpi for a number of customers we have, whenever possible on our
<br>
clusters we use modules to provide users with a choice of MPI
<br>
environment.
<br>
<p>I'm using the 1.2.6 stable release and have built the code twice, once
<br>
to /opt/openmpi-1.2.6/gnu and once to /opt/openmpi-1.2.6/intel, I have
<br>
create two modules environments called openmpi-gnu and openmpi-intel and
<br>
am also using a existing one called intel-compiler.  The build was
<br>
successful in both cases.
<br>
<p>If I load the openmpi-gnu module I can compile and run code using
<br>
mpicc/mpirun as expected, if I load openmpi-intel and intel-compiler I
<br>
find I can compile code but I get an error about missing libimf.so when
<br>
I try to run it (reproduced below).
<br>
<p>The application *will* run if I add the line &quot;module load
<br>
intel-compiler&quot; to my bashrc as this allows orted to link.  What I think
<br>
I want to do is to compile the actual library with icc but to compile
<br>
orted with gcc so that I don't need to load the intel environment by
<br>
default.  I'm assuming that the link problems only exist with orted and
<br>
not with the actual application as the LD_LIBRARY_PATH is set correctly
<br>
in the shell which is launching the program.
<br>
<p>Ashley Pittman.
<br>
<p>sccomp_at_demo4-sles-10-1-fe:~/benchmarks/IMB_3.0/src&gt; mpirun -H comp00,comp01 ./IMB-MPI1
<br>
/opt/openmpi-1.2.6/intel/bin/orted: error while loading shared libraries: libimf.so: cannot open shared object file: No such file or directory
<br>
/opt/openmpi-1.2.6/intel/bin/orted: error while loading shared libraries: libimf.so: cannot open shared object file: No such file or directory
<br>
[demo4-sles-10-1-fe:29303] ERROR: A daemon on node comp01 failed to start as expected.
<br>
[demo4-sles-10-1-fe:29303] ERROR: There may be more information available from
<br>
[demo4-sles-10-1-fe:29303] ERROR: the remote shell (see above).
<br>
[demo4-sles-10-1-fe:29303] ERROR: The daemon exited unexpectedly with status 127.
<br>
[demo4-sles-10-1-fe:29303] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/pls_base_orted_cmds.c at line 275
<br>
[demo4-sles-10-1-fe:29303] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at line 1166
<br>
[demo4-sles-10-1-fe:29303] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at line 90
<br>
[demo4-sles-10-1-fe:29303] ERROR: A daemon on node comp00 failed to start as expected.
<br>
[demo4-sles-10-1-fe:29303] ERROR: There may be more information available from
<br>
[demo4-sles-10-1-fe:29303] ERROR: the remote shell (see above).
<br>
[demo4-sles-10-1-fe:29303] ERROR: The daemon exited unexpectedly with status 127.
<br>
[demo4-sles-10-1-fe:29303] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/pls_base_orted_cmds.c at line 188
<br>
[demo4-sles-10-1-fe:29303] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at line 1198
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons for this job. Returned value Timeout instead of ORTE_SUCCESS.
<br>
--------------------------------------------------------------------------
<br>
<p>$ ldd /opt/openmpi-1.2.6/intel/bin/orted
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007fff877fe000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; /opt/openmpi-1.2.6/intel/lib/libopen-rte.so.0 (0x00007fe97f3ac000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; /opt/openmpi-1.2.6/intel/lib/libopen-pal.so.0 (0x00007fe97f239000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00007fe97f135000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00007fe97f01f000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00007fe97ef1c000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x00007fe97edc7000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00007fe97ecba000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007fe97eba3000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x00007fe97e972000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libimf.so =&gt; /opt/intel/compiler_10.1/x86_64/lib/libimf.so (0x00007fe97e610000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libsvml.so =&gt; /opt/intel/compiler_10.1/x86_64/lib/libsvml.so (0x00007fe97e489000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libintlc.so.5 =&gt; /opt/intel/compiler_10.1/x86_64/lib/libintlc.so.5 (0x00007fe97e350000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00007fe97f525000)
<br>
$ ssh comp00 ldd /opt/openmpi-1.2.6/intel/bin/orted
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; /opt/openmpi-1.2.6/intel/lib/libopen-rte.so.0 (0x00002b1f0c0c5000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; /opt/openmpi-1.2.6/intel/lib/libopen-pal.so.0 (0x00002b1f0c23e000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00002b1f0c3bc000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00002b1f0c4c0000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00002b1f0c5d7000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x00002b1f0c6da000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00002b1f0c82f000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00002b1f0c93d000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x00002b1f0ca54000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00002b1f0bfa9000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libimf.so =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libsvml.so =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libintlc.so.5 =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libimf.so =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libsvml.so =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libintlc.so.5 =&gt; not found
<br>
$ ldd ./IMB-MPI1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007fff2cbfe000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.0 =&gt; /opt/openmpi-1.2.6/intel/lib/libmpi.so.0 (0x00007f1624821000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; /opt/openmpi-1.2.6/intel/lib/libopen-rte.so.0 (0x00007f16246a8000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; /opt/openmpi-1.2.6/intel/lib/libopen-pal.so.0 (0x00007f1624535000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00007f1624431000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00007f162431b000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00007f1624218000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x00007f16240c3000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00007f1623fb6000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007f1623e9f000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x00007f1623c6e000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libimf.so =&gt; /opt/intel/compiler_10.1/x86_64/lib/libimf.so (0x00007f162390c000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libsvml.so =&gt; /opt/intel/compiler_10.1/x86_64/lib/libsvml.so (0x00007f1623785000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libintlc.so.5 =&gt; /opt/intel/compiler_10.1/x86_64/lib/libintlc.so.5 (0x00007f162364c000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00007f16249e0000)
<br>
<p><p><p>On Mon, 2008-06-09 at 13:02 -0700, Doug Reeder wrote:
<br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am confused. In your first post you said orted fails, with link  
</span><br>
<span class="quotelev1">&gt; errors, when you try to launch a job. From this I inferred that the  
</span><br>
<span class="quotelev1">&gt; build and install steps for creating openmpi were successful. Was the  
</span><br>
<span class="quotelev1">&gt; build/install step successful. If so what dynamic libraries does ldd  
</span><br>
<span class="quotelev1">&gt; say that orted is using.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt; On Jun 9, 2008, at 12:54 PM, Ashley Pittman wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Putting to side any religious views I might have about static linking
</span><br>
<span class="quotelev2">&gt; &gt; how would that help in this case?   It appears to be orted itself that
</span><br>
<span class="quotelev2">&gt; &gt; fails to link, I'm assuming that the application would actually run,
</span><br>
<span class="quotelev2">&gt; &gt; either because the LD_LIBRARY_PATH is set correctly on the front  
</span><br>
<span class="quotelev2">&gt; &gt; end or
</span><br>
<span class="quotelev2">&gt; &gt; the --prefix option to mpirun.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Or do you mean static linking of the tools?  I could go for that if
</span><br>
<span class="quotelev2">&gt; &gt; there is a configure option for it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ashley Pittman.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, 2008-06-09 at 08:27 -0700, Doug Reeder wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ashley,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It could work but I think you would be better off to try and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; statically link the intel libraries.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Doug Reeder
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jun 9, 2008, at 4:34 AM, Ashley Pittman wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Is there a way to use a different compiler for the orte component  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the shared library component when using openmpi?  We are finding
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; that if
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; we use icc to compile openmpi then orted fails with link errors  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; when I
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; try and launch a job as the intel environment isn't loaded by  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; default.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; We use the module command heavily and have modules for openmpi- 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; gnu and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; openmpi-intel as well as a intel_compiler module.  To use openmpi-
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; intel
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; we have to load intel_compiler by default on the compute nodes which
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; isn't ideal, is it possible to compile the orte component with  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; gcc and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the library component with icc?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Yours,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ashley Pittman,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="5858.php">jody: "Re: [OMPI users] no reaction of remote hosts after ompi reinstall [follow up]"</a>
<li><strong>Previous message:</strong> <a href="5856.php">jody: "[OMPI users] no reaction of remote hosts after ompi reinstall"</a>
<li><strong>In reply to:</strong> <a href="5855.php">Doug Reeder: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5859.php">Doug Reeder: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<li><strong>Reply:</strong> <a href="5859.php">Doug Reeder: "Re: [OMPI users] Different CC for orte and opmi?"</a>
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
