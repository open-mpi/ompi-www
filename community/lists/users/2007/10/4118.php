<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  1 15:16:03 2007" -->
<!-- isoreceived="20071001191603" -->
<!-- sent="Mon, 01 Oct 2007 21:13:41 +0200" -->
<!-- isosent="20071001191341" -->
<!-- name="Dino Rossegger" -->
<!-- email="dino.rossegger_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255." -->
<!-- id="470146E5.5090607_at_gmx.at" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0709280028w5db69f71te2f9301c19981595_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-10-01 15:13:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4119.php">jody: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>Previous message:</strong> <a href="4117.php">Si Hammond: "Re: [OMPI users] problem with 'orted'"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/09/4088.php">jody: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4119.php">jody: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>Reply:</strong> <a href="4119.php">jody: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jodi,
<br>
did the steps as you said, but it didn't work for me.
<br>
I set LD_LIBRARY_PATH in /etc/environment and ~/.shh/environment and
<br>
made the changes to sshd_config.
<br>
<p>But this all didn't solve my problem, although the pahts seemed to be
<br>
set correctly (judging what ssh saturn `printenv &gt;&gt; test` says). I also
<br>
restarted the ssh server, the error is the same.
<br>
<p>Hope you can help me out here and thanks for your help so far
<br>
dino
<br>
<p>jody schrieb:
<br>
<span class="quotelev1">&gt; Dino -
</span><br>
<span class="quotelev1">&gt; I had a similar problem.
</span><br>
<span class="quotelev1">&gt; I was only able to solve it by setting PATH and LS_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; in the file ~/ssh/environment on the client and setting
</span><br>
<span class="quotelev1">&gt;   PermitUserEnvironment yes
</span><br>
<span class="quotelev1">&gt; in /etc/ssh/sshd_config on the server (for this you need root
</span><br>
<span class="quotelev1">&gt; prioviledge though)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To be on the safe side, i did both on all my nodes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 9/27/07, Dino Rossegger &lt;dino.rossegger_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jody,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your help, it really is the case that either in PATH nor in
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH the path to the libs is set correctly. I'll try out,
</span><br>
<span class="quotelev2">&gt;&gt; hope it works.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; jody schrieb:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Dino
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Try
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ssh saturn printenv | grep PATH
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;from your host sun to see what your environment variables are when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ssh is run without a shell.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 9/27/07, Dino Rossegger &lt;dino.rossegger_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a problem running a simple programm mpihello.cpp.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here is a excerp of the error and the command
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; root_at_sun:~# mpirun -H sun,saturn main
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sun:25213] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sun:25213] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; line 1164
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sun:25213] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at line 90
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sun:25213] ERROR: A daemon on node saturn failed to start as expected.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sun:25213] ERROR: There may be more information available from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sun:25213] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sun:25213] ERROR: The daemon exited unexpectedly with status 255.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sun:25213] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sun:25213] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; line 1196
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun was unable to cleanly terminate the daemons for this job.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The program is runable from each node alone (mpirun -np2 main)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My PathVariables:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $PATH
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/opt/c3-4/:/usr/lib:/usr/local/libecho
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $LD_LIBRARY_PATH
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/opt/c3-4/:/usr/lib:/usr/local/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Passwordless ssh is up 'n running
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I walked through the FAQ and Mailing Lists but couldn't find any
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; solution for my problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dino R.
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
<li><strong>Next message:</strong> <a href="4119.php">jody: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>Previous message:</strong> <a href="4117.php">Si Hammond: "Re: [OMPI users] problem with 'orted'"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/09/4088.php">jody: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4119.php">jody: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>Reply:</strong> <a href="4119.php">jody: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
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
