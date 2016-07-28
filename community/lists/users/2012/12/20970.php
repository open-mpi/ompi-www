<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Problems with shared libraries while launching jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 17 10:43:32 2012" -->
<!-- isoreceived="20121217154332" -->
<!-- sent="Mon, 17 Dec 2012 15:42:47 +0000" -->
<!-- isosent="20121217154247" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Problems with shared libraries while launching jobs" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F1A2628_at_HDXDSP53.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8F816D5D-4E9E-4B39-9C4F-BA62A07F9840_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: Problems with shared libraries while launching jobs<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-17 10:42:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20971.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Problems with shared libraries while launching jobs"</a>
<li><strong>Previous message:</strong> <a href="20969.php">Daniel Davidson: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>In reply to:</strong> <a href="20953.php">Ralph Castain: "Re: [OMPI users] Problems with shared libraries while launching jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20971.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Problems with shared libraries while launching jobs"</a>
<li><strong>Reply:</strong> <a href="20971.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Problems with shared libraries while launching jobs"</a>
<li><strong>Reply:</strong> <a href="20984.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Problems with shared libraries while launching jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Unfortunately I didn't see the ssh output.  The output I got was pretty much as before.
<br>
<p>You know, the fact that the error message is not prefixed with a host name makes me think it could be happening on the host where the job is placed by PBS. If there is something wrong in the user environment prior to mpirun, that is not an OpenMPI problem. And yet, in one of the jobs that failed, I have also printed out the results of 'ldd' on the mpirun executable just prior to executing the command, and all the shared libraries were resolved:
<br>
<p>ldd /release/cfd/openmpi-intel/bin/mpirun
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007fffbbb39000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; /release/cfd/openmpi-intel/lib/libopen-rte.so.0 (0x00002abdf75d2000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; /release/cfd/openmpi-intel/lib/libopen-pal.so.0 (0x00002abdf7887000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00002abdf7b39000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00002abdf7d3d000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00002abdf7f56000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x00002abdf8159000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00002abdf83af000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00002abdf85c7000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x00002abdf87e4000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libimf.so =&gt; /appserv/intel/Compiler/11.1/072/lib/intel64/libimf.so (0x00002abdf8b42000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libsvml.so =&gt; /appserv/intel/Compiler/11.1/072/lib/intel64/libsvml.so (0x00002abdf8ed7000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libintlc.so.5 =&gt; /appserv/intel/Compiler/11.1/072/lib/intel64/libintlc.so.5 (0x00002abdf90ed000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00002abdf73b1000)
<br>
<p>Hence my initial assumption that the shared-library problem was happening with one of the child processes on a remote node.
<br>
<p>So at this point I have more questions than answers.  I still don't know if this message comes from the main mpirun process or one of the child processes, although it seems that it should not be the main process because of the output of ldd above.
<br>
<p>Any more suggestions are welcomed of course.
<br>
<p>Thanks
<br>
<p><p>/release/cfd/openmpi-intel/bin/mpirun --machinefile /var/spool/PBS/aux/20804.maruhpc4-mgt -np 160 -x LD_LIBRARY_PATH -x MPI_ENVIRONMENT=1 --mca plm_base_verbose 5 --leave-session-attached /tmp/fv420804.maruhpc4-mgt/test_jsgl -v -cycles 10000 -ri restart.5000 -ro /tmp/fv420804.maruhpc4-mgt/restart.5000
<br>
<p>[c6n38:16219] mca:base:select:(  plm) Querying component [rsh]
<br>
[c6n38:16219] mca:base:select:(  plm) Query of component [rsh] set priority to 10
<br>
[c6n38:16219] mca:base:select:(  plm) Selected component [rsh]
<br>
Warning: Permanently added 'c6n39' (RSA) to the list of known hosts.^M
<br>
Warning: Permanently added 'c6n40' (RSA) to the list of known hosts.^M
<br>
Warning: Permanently added 'c6n41' (RSA) to the list of known hosts.^M
<br>
Warning: Permanently added 'c6n42' (RSA) to the list of known hosts.^M
<br>
Warning: Permanently added 'c5n26' (RSA) to the list of known hosts.^M
<br>
Warning: Permanently added 'c3n20' (RSA) to the list of known hosts.^M
<br>
Warning: Permanently added 'c4n10' (RSA) to the list of known hosts.^M
<br>
Warning: Permanently added 'c4n40' (RSA) to the list of known hosts.^M
<br>
/release/cfd/openmpi-intel/bin/orted: error while loading shared libraries: libimf.so: cannot open shared object file: No such file or directory
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 16227) died unexpectedly with status 127 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
Warning: Permanently added 'c3n27' (RSA) to the list of known hosts.^M
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons on the nodes shown
<br>
below. Additional manual cleanup may be required - please refer to
<br>
the &quot;orte-clean&quot; tool for assistance.
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c6n39 - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c6n40 - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c6n41 - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c6n42 - daemon did not report back when launched
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Friday, December 14, 2012 2:25 PM
<br>
To: Open MPI Users
<br>
Subject: EXTERNAL: Re: [OMPI users] Problems with shared libraries while launching jobs
<br>
<p>Add -mca plm_base_verbose 5 --leave-session-attached to the cmd line - that will show the ssh command being used to start each orted.
<br>
<p>On Dec 14, 2012, at 12:17 PM, &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]&lt;mailto:edwin.l.blosch_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>I am having a weird problem launching cases with OpenMPI 1.4.3.  It is most likely a problem with a particular node of our cluster, as the jobs will run fine on some submissions, but not other submissions.  It seems to depend on the node list.  I just am having trouble diagnosing which node, and what is the nature of the problem it has.
<br>
<p>One or perhaps more of the orted are indicating they cannot find an Intel Math library.  The error is:
<br>
/release/cfd/openmpi-intel/bin/orted: error while loading shared libraries: libimf.so: cannot open shared object file: No such file or directory
<br>
<p>I've checked the environment just before launching mpirun, and LD_LIBRARY_PATH includes the necessary component to point to where the Intel shared libraries are located.  Furthermore, my mpirun command line says to export the LD_LIBRARY_PATH variable:
<br>
Executing ['/release/cfd/openmpi-intel/bin/mpirun', '--machinefile /var/spool/PBS/aux/20761.maruhpc4-mgt', '-np 160', '-x LD_LIBRARY_PATH', '-x MPI_ENVIRONMENT=1', '/tmp/fv420761.maruhpc4-mgt/falconv4_openmpi_jsgl', '-v', '-cycles', '10000', '-ri', 'restart.1', '-ro', '/tmp/fv420761.maruhpc4-mgt/restart.1']
<br>
<p>My shell-initialization script (.bashrc) does not overwrite LD_LIBRARY_PATH.  OpenMPI is built explicitly --without-torque and should be using ssh to launch the orted.
<br>
<p>What options can I add to get more debugging of problems launching orted?
<br>
<p>Thanks,
<br>
<p>Ed
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20970/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20971.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Problems with shared libraries while launching jobs"</a>
<li><strong>Previous message:</strong> <a href="20969.php">Daniel Davidson: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>In reply to:</strong> <a href="20953.php">Ralph Castain: "Re: [OMPI users] Problems with shared libraries while launching jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20971.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Problems with shared libraries while launching jobs"</a>
<li><strong>Reply:</strong> <a href="20971.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Problems with shared libraries while launching jobs"</a>
<li><strong>Reply:</strong> <a href="20984.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Problems with shared libraries while launching jobs"</a>
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
