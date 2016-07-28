<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  1 15:58:34 2007" -->
<!-- isoreceived="20071001195834" -->
<!-- sent="Mon, 01 Oct 2007 21:56:16 +0200" -->
<!-- isosent="20071001195616" -->
<!-- name="Dino Rossegger" -->
<!-- email="dino.rossegger_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255." -->
<!-- id="470150E0.4040809_at_gmx.at" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0710011235p3ee9fc0bs521df648d304a502_at_mail.gmail.com" -->
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
<strong>From:</strong> Dino Rossegger (<em>dino.rossegger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-01 15:56:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4122.php">Oleg Morajko: "[OMPI users] Tool communication"</a>
<li><strong>Previous message:</strong> <a href="4120.php">Joao Vicente Lima: "[OMPI users] init_thread + spawn error"</a>
<li><strong>In reply to:</strong> <a href="4119.php">jody: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4125.php">Tim Prins: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>Reply:</strong> <a href="4125.php">Tim Prins: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again,
<br>
<p>Yes the error output is the same:
<br>
root_at_sun:~# mpirun --hostfile hostfile main
<br>
[sun:23748] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
base/pls_base_orted_cmds.c at line 275
<br>
[sun:23748] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at
<br>
line 1164
<br>
[sun:23748] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at line 90
<br>
[sun:23748] ERROR: A daemon on node saturn failed to start as expected.
<br>
[sun:23748] ERROR: There may be more information available from
<br>
[sun:23748] ERROR: the remote shell (see above).
<br>
[sun:23748] ERROR: The daemon exited unexpectedly with status 255.
<br>
[sun:23748] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
base/pls_base_orted_cmds.c at line 188
<br>
[sun:23748] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at
<br>
line 1196
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons for this job.
<br>
Returned value Timeout instead of ORTE_SUCCESS.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>I wrote the following to my .ssh/environment (on all machines)
<br>
LD_LIBRARY_PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/opt/c3-4/:/usr/lib:/usr/local/lib;
<br>
<p>PATH=$PATH:/usr/local/lib;
<br>
<p>export LD_LIBRARY_PATH;
<br>
export PATH;
<br>
<p>and added the statement you told me to the ssd_config (on all machines):
<br>
PermitUserEnvironment yes
<br>
<p>And it seems to me that the pathes are correct now.
<br>
<p>My shell is bash (/bin/bash)
<br>
<p>When running locate orted (to find out where exactly my openmpi
<br>
installation is (compilation defaults) i saw that, on sun there was a
<br>
/usr/bin/orted while there wasn't one on saturn.
<br>
I deleted /usr/bin/orted on sun and tried again with the option --prefix
<br>
&nbsp;/usr/local/ (which seems to be  my installation directory) but it
<br>
didn't work (same error).
<br>
<p>Is there a script or anything like that with which I can uninstall
<br>
openmpi, because i'll might try a new compilation to /opt/openmpi since
<br>
it doesn't look like I would be able to solve the problem.
<br>
<p><p><p><p>jody schrieb:
<br>
<span class="quotelev1">&gt; Now that the PATHs seem to be set correctly for
</span><br>
<span class="quotelev1">&gt; ssh i don't know what the problem could be.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is the error message still the same on as in the first mail?
</span><br>
<span class="quotelev1">&gt; Did you do the envorpnment/sshd_config on both machines?
</span><br>
<span class="quotelev1">&gt; What shell are you using?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On other test you could make is to start your application
</span><br>
<span class="quotelev1">&gt; with the --prefix option:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $mpirun -np 2 --prefix /opt/openmpi -H sun,saturn ./main
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (assuming your Open MPI installation lies in /opt/openmpi
</span><br>
<span class="quotelev1">&gt; on both machines)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 10/1/07, Dino Rossegger &lt;dino.rossegger_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jodi,
</span><br>
<span class="quotelev2">&gt;&gt; did the steps as you said, but it didn't work for me.
</span><br>
<span class="quotelev2">&gt;&gt; I set LD_LIBRARY_PATH in /etc/environment and ~/.shh/environment and
</span><br>
<span class="quotelev2">&gt;&gt; made the changes to sshd_config.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But this all didn't solve my problem, although the pahts seemed to be
</span><br>
<span class="quotelev2">&gt;&gt; set correctly (judging what ssh saturn `printenv &gt;&gt; test` says). I also
</span><br>
<span class="quotelev2">&gt;&gt; restarted the ssh server, the error is the same.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hope you can help me out here and thanks for your help so far
</span><br>
<span class="quotelev2">&gt;&gt; dino
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; jody schrieb:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dino -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I had a similar problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was only able to solve it by setting PATH and LS_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the file ~/ssh/environment on the client and setting
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   PermitUserEnvironment yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in /etc/ssh/sshd_config on the server (for this you need root
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prioviledge though)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To be on the safe side, i did both on all my nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 9/27/07, Dino Rossegger &lt;dino.rossegger_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Jody,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for your help, it really is the case that either in PATH nor in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LD_LIBRARY_PATH the path to the libs is set correctly. I'll try out,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hope it works.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jody schrieb:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Dino
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Try
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  ssh saturn printenv | grep PATH
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;from your host sun to see what your environment variables are when
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ssh is run without a shell.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 9/27/07, Dino Rossegger &lt;dino.rossegger_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have a problem running a simple programm mpihello.cpp.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Here is a excerp of the error and the command
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; root_at_sun:~# mpirun -H sun,saturn main
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sun:25213] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sun:25213] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; line 1164
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sun:25213] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at line 90
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sun:25213] ERROR: A daemon on node saturn failed to start as expected.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sun:25213] ERROR: There may be more information available from
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sun:25213] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sun:25213] ERROR: The daemon exited unexpectedly with status 255.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sun:25213] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sun:25213] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; line 1196
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun was unable to cleanly terminate the daemons for this job.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The program is runable from each node alone (mpirun -np2 main)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; My PathVariables:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $PATH
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/opt/c3-4/:/usr/lib:/usr/local/libecho
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/opt/c3-4/:/usr/lib:/usr/local/lib
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Passwordless ssh is up 'n running
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I walked through the FAQ and Mailing Lists but couldn't find any
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; solution for my problem.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Dino R.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4122.php">Oleg Morajko: "[OMPI users] Tool communication"</a>
<li><strong>Previous message:</strong> <a href="4120.php">Joao Vicente Lima: "[OMPI users] init_thread + spawn error"</a>
<li><strong>In reply to:</strong> <a href="4119.php">jody: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4125.php">Tim Prins: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>Reply:</strong> <a href="4125.php">Tim Prins: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
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
