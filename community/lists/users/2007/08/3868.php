<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 16 05:34:14 2007" -->
<!-- isoreceived="20070816093414" -->
<!-- sent="Thu, 16 Aug 2007 11:34:03 +0200" -->
<!-- isosent="20070816093403" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hangs" -->
<!-- id="9b0da5ce0708160234u4a707d46q5564c750abfec2a6_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46C1D3CF.4020109_at_open-mpi.org" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-16 05:34:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3869.php">Rodrigo Faccioli: "[OMPI users] Unistall open-mpi"</a>
<li><strong>Previous message:</strong> <a href="3867.php">Sven Stork: "Re: [OMPI users] openMPI on openBSD, anyone?"</a>
<li><strong>In reply to:</strong> <a href="3856.php">Tim Prins: "Re: [OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3871.php">Jeff Squyres: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="3871.php">Jeff Squyres: "Re: [OMPI users] mpirun hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tim
<br>
<p>Just a quick update about my ssh/LD_LIBRARY_PATH problem.
<br>
<p>Apparently on my System the sshd was configured not to permit
<br>
user defined environment variables (security reasons?).
<br>
To fix that i had to change the file
<br>
&nbsp;&nbsp;/etc/ssh/sshd_config
<br>
By changing the entry
<br>
&nbsp;&nbsp;#PermitUserEnvironment no
<br>
to
<br>
&nbsp;&nbsp;PermitUserEnvironment yes
<br>
and adding these lines to the file ~/.ssh/environment
<br>
&nbsp;&nbsp;PATH=/opt/openmpi/bin:/usr/local/bin:/bin:/usr/bin
<br>
&nbsp;&nbsp;LD_LIBRARY_PATH=/opt/openmpi/lib
<br>
Maybe it is an overkill, but at least ssh now makes the two variables available,
<br>
and simple openmpi test applications run.
<br>
<p>I have done this fixes on all my 7 gentoo machines (nano_00 - nano_06),
<br>
and simple openmpi test applications run with any number of processes.
<br>
<p>But the fedora machine (plankton) still has problems in some cases.
<br>
In the test application i use, process #0 broadcasts a number to all
<br>
other processes.
<br>
This works in the following cases always calling from nano_02:
<br>
&nbsp;mpirun  -np 3 --host nano_00 ./MPITest
<br>
&nbsp;mpirun  -np 3 --host plankton ./MPITest
<br>
&nbsp;mpirun  -np 3 --host plankton,nano_00 ./MPITest
<br>
But it doesn't work like this:
<br>
&nbsp;mpirun -np 4 --host nano_00,plankton ./MPITest
<br>
as soon as the MPI_Broadcast statement is rached,
<br>
i get an errorr message:
<br>
[nano_00][0,1,0][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() failed with errno=113
<br>
<p>Does this still agree with your firewall hypothesis?
<br>
<p>Thanks
<br>
&nbsp;&nbsp;Jody
<br>
<p><p>On 8/14/07, Tim Prins &lt;tprins_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Jody,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jody wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi TIm
</span><br>
<span class="quotelev2">&gt; &gt; thanks for the suggestions.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I now set both paths  in .zshenv but it seems that LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt; &gt; still does not get set.
</span><br>
<span class="quotelev2">&gt; &gt; The ldd experment shows that all openmpi libraries are not found,
</span><br>
<span class="quotelev2">&gt; &gt; and indeed the printenv shows that PATH is there but LD_LIBRARY_PATH is
</span><br>
<span class="quotelev2">&gt; &gt; not.
</span><br>
<span class="quotelev1">&gt; Are you setting LD_LIBRARY_PATH anywhere else in your scripts? I have,
</span><br>
<span class="quotelev1">&gt; on more than one occasion, forgotten that I needed to do:
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=&quot;/foo:$LD_LIBRARY_PATH&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Instead of just:
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=&quot;/foo&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It is rather unclear why this happens...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As to thew second problem:
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun --debug-daemons -np 2 --prefix /opt/openmpi --host nano_02
</span><br>
<span class="quotelev2">&gt; &gt; ./MPI2Test2
</span><br>
<span class="quotelev2">&gt; &gt; [aim-nano_02:05455] [0,0,1]-[0,0,0] mca_oob_tcp_peer_try_connect:
</span><br>
<span class="quotelev2">&gt; &gt; connect to 130.60.49.134:40618 &lt;<a href="http://130.60.49.134:40618">http://130.60.49.134:40618</a>&gt; failed:
</span><br>
<span class="quotelev2">&gt; &gt; (103)
</span><br>
<span class="quotelev2">&gt; &gt; [aim-nano_02:05455] [0,0,1]-[0,0,0] mca_oob_tcp_peer_try_connect:
</span><br>
<span class="quotelev2">&gt; &gt; connect to 130.60.49.134:40618 &lt;<a href="http://130.60.49.134:40618">http://130.60.49.134:40618</a>&gt; failed,
</span><br>
<span class="quotelev2">&gt; &gt; connecting over all interfaces failed!
</span><br>
<span class="quotelev2">&gt; &gt; [aim-nano_02:05455] OOB: Connection to HNP lost
</span><br>
<span class="quotelev2">&gt; &gt; [aim-plankton.unizh.ch:24222 &lt;<a href="http://aim-plankton.unizh.ch:24222">http://aim-plankton.unizh.ch:24222</a>&gt;]
</span><br>
<span class="quotelev2">&gt; &gt; [0,0,0] ORTE_ERROR_LOG: Timeout in file base/pls_base_orted_cmds.c at
</span><br>
<span class="quotelev2">&gt; &gt; line 275
</span><br>
<span class="quotelev2">&gt; &gt; [aim-plankton.unizh.ch:24222 &lt;<a href="http://aim-plankton.unizh.ch:24222">http://aim-plankton.unizh.ch:24222</a>&gt;]
</span><br>
<span class="quotelev2">&gt; &gt; [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at line 1164
</span><br>
<span class="quotelev2">&gt; &gt; [aim-plankton.unizh.ch:24222 &lt;<a href="http://aim-plankton.unizh.ch:24222">http://aim-plankton.unizh.ch:24222</a>&gt;]
</span><br>
<span class="quotelev2">&gt; &gt; [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at line 90
</span><br>
<span class="quotelev2">&gt; &gt; [aim-plankton.unizh.ch:24222 &lt;<a href="http://aim-plankton.unizh.ch:24222">http://aim-plankton.unizh.ch:24222</a>&gt;]
</span><br>
<span class="quotelev2">&gt; &gt; ERROR: A daemon on node nano_02 failed to start as expected.
</span><br>
<span class="quotelev2">&gt; &gt; [ aim-plankton.unizh.ch:24222 &lt;<a href="http://aim-plankton.unizh.ch:24222">http://aim-plankton.unizh.ch:24222</a>&gt;]
</span><br>
<span class="quotelev2">&gt; &gt; ERROR: There may be more information available from
</span><br>
<span class="quotelev2">&gt; &gt; [aim-plankton.unizh.ch:24222 &lt;<a href="http://aim-plankton.unizh.ch:24222">http://aim-plankton.unizh.ch:24222</a>&gt;]
</span><br>
<span class="quotelev2">&gt; &gt; ERROR: the remote shell (see above).
</span><br>
<span class="quotelev2">&gt; &gt; [ aim-plankton.unizh.ch:24222 &lt;<a href="http://aim-plankton.unizh.ch:24222">http://aim-plankton.unizh.ch:24222</a>&gt;]
</span><br>
<span class="quotelev2">&gt; &gt; ERROR: The daemon exited unexpectedly with status 1.
</span><br>
<span class="quotelev2">&gt; &gt; [aim-plankton.unizh.ch:24222 &lt;<a href="http://aim-plankton.unizh.ch:24222">http://aim-plankton.unizh.ch:24222</a>&gt;]
</span><br>
<span class="quotelev2">&gt; &gt; [0,0,0] ORTE_ERROR_LOG: Timeout in file base/pls_base_orted_cmds.c at
</span><br>
<span class="quotelev2">&gt; &gt; line 188
</span><br>
<span class="quotelev2">&gt; &gt; [aim-plankton.unizh.ch:24222 &lt;<a href="http://aim-plankton.unizh.ch:24222">http://aim-plankton.unizh.ch:24222</a>&gt;]
</span><br>
<span class="quotelev2">&gt; &gt; [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at line 1196
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The strange thing is that nano_02's address is 130.60.49.130
</span><br>
<span class="quotelev2">&gt; &gt; &lt;<a href="http://130.60.49.130">http://130.60.49.130</a>&gt; and plankton's (the caller) is 130.60.49 134.
</span><br>
<span class="quotelev2">&gt; &gt; I also made sure that nano_02 cann ssh to plankton without password, but
</span><br>
<span class="quotelev2">&gt; &gt; that didn't change the output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is happening here is that the daemon launched on nano_02 is trying
</span><br>
<span class="quotelev1">&gt; to contact mpirun on plankton, and is failing for some reason.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have any firewalls/port filtering enabled on nano_02? Open MPI
</span><br>
<span class="quotelev1">&gt; generally cannot be run when there are any firewalls on the machines
</span><br>
<span class="quotelev1">&gt; being used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does this message give any hints as to the problem?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jody
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 8/14/07, *Tim Prins* &lt;tprins_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &lt;mailto:tprins_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Hi Jody,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     jody wrote:
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; Hi
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; I installed openmpi 1.2.2 on a quad core intel machine running
</span><br>
<span class="quotelev2">&gt; &gt;     fedora 6
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; (hostname plankton)
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; I set PATH and LD_LIBRARY in the .zshrc file:
</span><br>
<span class="quotelev2">&gt; &gt;     Note that .zshrc is only used for interactive logins. You need to setup
</span><br>
<span class="quotelev2">&gt; &gt;     your system so the LD_LIBRARY_PATH and PATH is also set for
</span><br>
<span class="quotelev2">&gt; &gt;     non-interactive logins. See this zsh FAQ entry for what files you need
</span><br>
<span class="quotelev2">&gt; &gt;     to modify:
</span><br>
<span class="quotelev2">&gt; &gt;     <a href="http://zsh.sourceforge.net/FAQ/zshfaq03.html#l19">http://zsh.sourceforge.net/FAQ/zshfaq03.html#l19</a>
</span><br>
<span class="quotelev2">&gt; &gt;     &lt;<a href="http://zsh.sourceforge.net/FAQ/zshfaq03.html#l19">http://zsh.sourceforge.net/FAQ/zshfaq03.html#l19</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     (BTW: I do not use zsh, but my assumption is that the file you want to
</span><br>
<span class="quotelev2">&gt; &gt;     set the PATH and LD_LIBRARY_PATH in is .zshenv)
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; $ echo $PATH
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /opt/openmpi/bin:/usr/kerberos/bin:/usr/local/bin:/usr/bin:/bin:/usr/X11R6/bin:/home/jody/bin
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; $ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; /opt/openmpi/lib:
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; When i run
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; $ mpirun -np 2 ./MPITest2
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; i get the message
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; ./MPI2Test2: error while loading shared libraries: libmpi_cxx.so.0:
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; ./MPI2Test2: error while loading shared libraries: libmpi_cxx.so.0:
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; However
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; $ mpirun -np 2 --prefix /opt/openmpi ./MPI2Test2
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; works.  Any explanation?
</span><br>
<span class="quotelev2">&gt; &gt;     Yes, the LD_LIBRARY_PATH is probably not set correctly. Try running:
</span><br>
<span class="quotelev2">&gt; &gt;     mpirun -np 2 ldd ./MPITest2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     This should show what libraries your executable is using. Make sure all
</span><br>
<span class="quotelev2">&gt; &gt;     of the libraries are resolved.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Also, try running:
</span><br>
<span class="quotelev2">&gt; &gt;     mpirun -np 1 printenv |grep LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt; &gt;     to see what the LD_LIBRARY_PATH is for you executables. Note that you
</span><br>
<span class="quotelev2">&gt; &gt;     can NOT simply run mpirun echo $LD_LIBRARY_PATH, as the variable
</span><br>
<span class="quotelev2">&gt; &gt;     will be
</span><br>
<span class="quotelev2">&gt; &gt;     interpreted in the executing shell.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; Second problem:
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; I have also  installed openmpi 1.2.2 on an AMD machine running gentoo
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; linux (hostname nano_02).
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; Here as well PATH and LD_LIBRARY_PATH are set correctly,
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; and
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; $ mpirun -np 2 ./MPITest2
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; works locally on nano_02.
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; If, however, from plankton i call
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; $ mpirun -np 2 --prefix /opt/openmpi --host nano_02 ./MPI2Test2
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; the call hangs with no output whatsoever.
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; Any pointers on how to solve this problem?
</span><br>
<span class="quotelev2">&gt; &gt;     Try running:
</span><br>
<span class="quotelev2">&gt; &gt;     mpirun --debug-daemons -np 2 --prefix /opt/openmpi --host nano_02
</span><br>
<span class="quotelev2">&gt; &gt;     ./MPI2Test2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     This should give some more output as to what is happening.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Hope this helps,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Tim
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; Thank You
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;   Jody
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;      &gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;      &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;     users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;     &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3869.php">Rodrigo Faccioli: "[OMPI users] Unistall open-mpi"</a>
<li><strong>Previous message:</strong> <a href="3867.php">Sven Stork: "Re: [OMPI users] openMPI on openBSD, anyone?"</a>
<li><strong>In reply to:</strong> <a href="3856.php">Tim Prins: "Re: [OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3871.php">Jeff Squyres: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="3871.php">Jeff Squyres: "Re: [OMPI users] mpirun hangs"</a>
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
