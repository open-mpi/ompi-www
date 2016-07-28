<?
$subject_val = "Re: [OMPI users] 1.3 and --preload-files and --preload-binary";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 22 13:59:42 2009" -->
<!-- isoreceived="20090122185942" -->
<!-- sent="Thu, 22 Jan 2009 10:49:49 -0800" -->
<!-- isosent="20090122184949" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.3 and --preload-files and --preload-binary" -->
<!-- id="2248C92E-4C59-42B6-9D88-5C676D969C2D_at_rain.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D4B94D4B-C13B-4FB2-8D3E-AA0C0AEF914B_at_open-mpi.org" -->
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
<strong>From:</strong> Doug Reeder (<em>dlr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-22 13:49:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7768.php">Jeff Squyres: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="7766.php">Josh Hursey: "Re: [OMPI users] 1.3 and --preload-files and --preload-binary"</a>
<li><strong>In reply to:</strong> <a href="7766.php">Josh Hursey: "Re: [OMPI users] 1.3 and --preload-files and --preload-binary"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7799.php">Josh Hursey: "Re: [OMPI users] 1.3 and --preload-files and --preload-binary"</a>
<li><strong>Reply:</strong> <a href="7799.php">Josh Hursey: "Re: [OMPI users] 1.3 and --preload-files and --preload-binary"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh,
<br>
<p>It sounds like . is not in your path. That would prevent mpirun from  
<br>
seeing the binary in the current directory.
<br>
<p>Doug Reeder
<br>
On Jan 22, 2009, at 10:48 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; As a followup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can confirm that --preload-files is not working as it should.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was able to use --preload-binary with a full path to the binary  
</span><br>
<span class="quotelev1">&gt; without a problem though. The following commands worked fine (where / 
</span><br>
<span class="quotelev1">&gt; tmp is not mounted on all machines):
</span><br>
<span class="quotelev1">&gt;   shell$ mpirun -np 2 --preload-binary /tmp/hello
</span><br>
<span class="quotelev1">&gt;   shell$ mpirun -np 2 -s /tmp/hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However if I referred directly to the binary in the current  
</span><br>
<span class="quotelev1">&gt; directory I saw the same failure:
</span><br>
<span class="quotelev1">&gt; shell$ cd /tmp
</span><br>
<span class="quotelev1">&gt; shell$ mpirun -np 2 -s hello
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to launch the specified application as it could  
</span><br>
<span class="quotelev1">&gt; not find an executable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Executable: hello
</span><br>
<span class="quotelev1">&gt; Node: odin101
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll keep digging into this bug, and let you know when I have a fix.  
</span><br>
<span class="quotelev1">&gt; I filed a ticket (below) that you can use to track the progress on  
</span><br>
<span class="quotelev1">&gt; this bug.
</span><br>
<span class="quotelev1">&gt;  <a href="https://svn.open-mpi.org/trac/ompi/ticket/1770">https://svn.open-mpi.org/trac/ompi/ticket/1770</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again for the bug report, I'll try to resolve this soon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 22, 2009, at 10:49 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The warning is to be expected if the file already exists on the  
</span><br>
<span class="quotelev2">&gt;&gt; remote side. Open MPI has a policy not to replace the file if it  
</span><br>
<span class="quotelev2">&gt;&gt; already exists.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The segv is concerning. :/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will take a look and see if I can diagnose what is going on here.  
</span><br>
<span class="quotelev2">&gt;&gt; Probably in the next day or two.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the bug report,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 22, 2009, at 10:11 AM, Geoffroy Pignot wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As you can notice , I am trying the work done on this new release.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; preload-files and preload-binary options are very interesting to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; me because I work on a cluster without any shared space between  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried those basically , but no success . You will find below the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error messages.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I did things wrong,  would it be possible to get simple  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; examples showing how these options work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Geoffroy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/openmpi-1.3/bin/mpirun --preload-files hello.c --hostfile / 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tmp/hostlist -np 2 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: Could not preload specified file: File already exists.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fileset: /tmp/hello.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host: compil03
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Will continue attempting to launch the process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compil03:26657] filem:rsh: get(): Failed to preare the request  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; structure (-1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: Could not preload the requested files and directories.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fileset:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fileset: hello.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Will continue attempting to launch the process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compil03:26657] [[13938,0],0] ORTE_ERROR_LOG: Error in file base/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; odls_base_state.c at line 127
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compil03:26657] [[13938,0],0] ORTE_ERROR_LOG: Error in file base/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; odls_base_default_fns.c at line 831
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compil03:26657] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compil03:26657] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compil03:26657] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compil03:26657] Failing at address: 0x395eb15000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compil03:26657] [ 0] /lib64/tls/libpthread.so.0 [0x395f80c420]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compil03:26657] [ 1] /lib64/tls/libc.so.6(memcpy+0x3f)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x395ed718df]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compil03:26657] [ 2] /tmp/openmpi-1.3/lib64/libopen-pal.so.0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2a956b0a10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compil03:26657] [ 3] /tmp/openmpi-1.3/lib64/libopen-rte.so. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0(orte_odls_base_default_launch_local+0x55c) [0x2a955809cc]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compil03:26657] [ 4] /tmp/openmpi-1.3/lib64/openmpi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_odls_default.so [0x2a963655f2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compil03:26657] [ 5] /tmp/openmpi-1.3/lib64/libopen-rte.so. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0(orte_daemon_cmd_processor+0x57d) [0x2a9557812d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compil03:26657] [ 6] /tmp/openmpi-1.3/lib64/libopen-pal.so.0  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2a956b9828]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compil03:26657] [ 7] /tmp/openmpi-1.3/lib64/libopen-pal.so. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0(opal_progress+0xb0) [0x2a956ae820]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compil03:26657] [ 8] /tmp/openmpi-1.3/lib64/libopen-rte.so. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0(orte_plm_base_launch_apps+0x1ed) [0x2a95584e7d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compil03:26657] [ 9] /tmp/openmpi-1.3/lib64/openmpi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_plm_rsh.so [0x2a95c3ed98]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compil03:26657] [10] /tmp/openmpi-1.3/bin/mpirun [0x403330]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compil03:26657] [11] /tmp/openmpi-1.3/bin/mpirun [0x402ad3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compil03:26657] [12] /lib64/tls/libc.so.6(__libc_start_main+0xdb)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x395ed1c4bb]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compil03:26657] [13] /tmp/openmpi-1.3/bin/mpirun [0x402a2a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compil03:26657] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And it's not better with --preload-binary . a.out_32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compil03% /tmp/openmpi-1.3/bin/mpirun -s --hostfile /tmp/hostlist - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wdir /tmp -np 2 a.out_32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun was unable to launch the specified application as it could  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not find an executable:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Executable: a.out_32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Node: compil02
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; while attempting to start process rank 1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7767/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7768.php">Jeff Squyres: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="7766.php">Josh Hursey: "Re: [OMPI users] 1.3 and --preload-files and --preload-binary"</a>
<li><strong>In reply to:</strong> <a href="7766.php">Josh Hursey: "Re: [OMPI users] 1.3 and --preload-files and --preload-binary"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7799.php">Josh Hursey: "Re: [OMPI users] 1.3 and --preload-files and --preload-binary"</a>
<li><strong>Reply:</strong> <a href="7799.php">Josh Hursey: "Re: [OMPI users] 1.3 and --preload-files and --preload-binary"</a>
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
