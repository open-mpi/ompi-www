<?
$subject_val = "Re: [OMPI users] 1.3 and --preload-files and --preload-binary";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 10:35:17 2009" -->
<!-- isoreceived="20090123153517" -->
<!-- sent="Fri, 23 Jan 2009 10:34:51 -0500" -->
<!-- isosent="20090123153451" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.3 and --preload-files and --preload-binary" -->
<!-- id="22834614-0334-4F9B-99CD-C0407A5ADFE0_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2248C92E-4C59-42B6-9D88-5C676D969C2D_at_rain.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.3 and --preload-files and --preload-binary<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 10:34:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7800.php">Sangamesh B: "Re: [OMPI users] Cluster with IB hosts and Ethernet hosts"</a>
<li><strong>Previous message:</strong> <a href="7798.php">George Bosilca: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>In reply to:</strong> <a href="7767.php">Doug Reeder: "Re: [OMPI users] 1.3 and --preload-files and --preload-binary"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The preload-binary problem had to do with how we were resolving  
<br>
relative path names before moving files. While fixing these bugs I  
<br>
also cleaned up some error reporting mechanisms.
<br>
<p>I believe that I have fixed both the --preload-binary and --preload- 
<br>
files options in the trunk (r20331). If you want to test the patch  
<br>
before the release I attached it to the ticket. The patch should  
<br>
apply cleanly to the v1.3 release and SVN branch.
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1770">https://svn.open-mpi.org/trac/ompi/ticket/1770</a>
<br>
<p>Let me know if you run into any more problems with this  
<br>
functionality. There are a few places that still need to be cleaned  
<br>
up, but I think this should work much better for you now. I'll file a  
<br>
request to have this moved into the v1.3.1 release.
<br>
<p>Thanks,
<br>
Josh
<br>
<p>On Jan 22, 2009, at 1:49 PM, Doug Reeder wrote:
<br>
<p><span class="quotelev1">&gt; Josh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It sounds like . is not in your path. That would prevent mpirun  
</span><br>
<span class="quotelev1">&gt; from seeing the binary in the current directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt; On Jan 22, 2009, at 10:48 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As a followup.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can confirm that --preload-files is not working as it should.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was able to use --preload-binary with a full path to the binary  
</span><br>
<span class="quotelev2">&gt;&gt; without a problem though. The following commands worked fine  
</span><br>
<span class="quotelev2">&gt;&gt; (where /tmp is not mounted on all machines):
</span><br>
<span class="quotelev2">&gt;&gt;   shell$ mpirun -np 2 --preload-binary /tmp/hello
</span><br>
<span class="quotelev2">&gt;&gt;   shell$ mpirun -np 2 -s /tmp/hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However if I referred directly to the binary in the current  
</span><br>
<span class="quotelev2">&gt;&gt; directory I saw the same failure:
</span><br>
<span class="quotelev2">&gt;&gt; shell$ cd /tmp
</span><br>
<span class="quotelev2">&gt;&gt; shell$ mpirun -np 2 -s hello
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; mpirun was unable to launch the specified application as it could  
</span><br>
<span class="quotelev2">&gt;&gt; not find an executable:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Executable: hello
</span><br>
<span class="quotelev2">&gt;&gt; Node: odin101
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll keep digging into this bug, and let you know when I have a  
</span><br>
<span class="quotelev2">&gt;&gt; fix. I filed a ticket (below) that you can use to track the  
</span><br>
<span class="quotelev2">&gt;&gt; progress on this bug.
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="https://svn.open-mpi.org/trac/ompi/ticket/1770">https://svn.open-mpi.org/trac/ompi/ticket/1770</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks again for the bug report, I'll try to resolve this soon.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 22, 2009, at 10:49 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The warning is to be expected if the file already exists on the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remote side. Open MPI has a policy not to replace the file if it  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; already exists.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The segv is concerning. :/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will take a look and see if I can diagnose what is going on  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here. Probably in the next day or two.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for the bug report,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 22, 2009, at 10:11 AM, Geoffroy Pignot wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As you can notice , I am trying the work done on this new  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; release. preload-files and preload-binary options are very  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; interesting to me because I work on a cluster without any shared  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; space between nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried those basically , but no success . You will find below  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the error messages.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If I did things wrong,  would it be possible to get simple  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; examples showing how these options work.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Geoffroy
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-1.3/bin/mpirun --preload-files hello.c --hostfile / 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tmp/hostlist -np 2 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WARNING: Could not preload specified file: File already exists.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fileset: /tmp/hello.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Host: compil03
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Will continue attempting to launch the process.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compil03:26657] filem:rsh: get(): Failed to preare the request  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; structure (-1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WARNING: Could not preload the requested files and directories.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fileset:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fileset: hello.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Will continue attempting to launch the process.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compil03:26657] [[13938,0],0] ORTE_ERROR_LOG: Error in file  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; base/odls_base_state.c at line 127
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compil03:26657] [[13938,0],0] ORTE_ERROR_LOG: Error in file  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; base/odls_base_default_fns.c at line 831
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compil03:26657] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compil03:26657] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compil03:26657] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compil03:26657] Failing at address: 0x395eb15000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compil03:26657] [ 0] /lib64/tls/libpthread.so.0 [0x395f80c420]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compil03:26657] [ 1] /lib64/tls/libc.so.6(memcpy+0x3f)  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x395ed718df]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compil03:26657] [ 2] /tmp/openmpi-1.3/lib64/libopen-pal.so.0  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x2a956b0a10]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compil03:26657] [ 3] /tmp/openmpi-1.3/lib64/libopen-rte.so.0 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (orte_odls_base_default_launch_local+0x55c) [0x2a955809cc]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compil03:26657] [ 4] /tmp/openmpi-1.3/lib64/openmpi/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_odls_default.so [0x2a963655f2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compil03:26657] [ 5] /tmp/openmpi-1.3/lib64/libopen-rte.so.0 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (orte_daemon_cmd_processor+0x57d) [0x2a9557812d]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compil03:26657] [ 6] /tmp/openmpi-1.3/lib64/libopen-pal.so.0  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x2a956b9828]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compil03:26657] [ 7] /tmp/openmpi-1.3/lib64/libopen-pal.so.0 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (opal_progress+0xb0) [0x2a956ae820]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compil03:26657] [ 8] /tmp/openmpi-1.3/lib64/libopen-rte.so.0 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (orte_plm_base_launch_apps+0x1ed) [0x2a95584e7d]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compil03:26657] [ 9] /tmp/openmpi-1.3/lib64/openmpi/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_plm_rsh.so [0x2a95c3ed98]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compil03:26657] [10] /tmp/openmpi-1.3/bin/mpirun [0x403330]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compil03:26657] [11] /tmp/openmpi-1.3/bin/mpirun [0x402ad3]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compil03:26657] [12] /lib64/tls/libc.so.6(__libc_start_main 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +0xdb) [0x395ed1c4bb]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compil03:26657] [13] /tmp/openmpi-1.3/bin/mpirun [0x402a2a]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compil03:26657] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And it's not better with --preload-binary . a.out_32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compil03% /tmp/openmpi-1.3/bin/mpirun -s --hostfile /tmp/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hostlist -wdir /tmp -np 2 a.out_32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun was unable to launch the specified application as it  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; could not find an executable:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Executable: a.out_32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Node: compil02
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; while attempting to start process rank 1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="7800.php">Sangamesh B: "Re: [OMPI users] Cluster with IB hosts and Ethernet hosts"</a>
<li><strong>Previous message:</strong> <a href="7798.php">George Bosilca: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>In reply to:</strong> <a href="7767.php">Doug Reeder: "Re: [OMPI users] 1.3 and --preload-files and --preload-binary"</a>
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
