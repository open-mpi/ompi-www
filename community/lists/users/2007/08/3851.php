<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 14 11:22:13 2007" -->
<!-- isoreceived="20070814152213" -->
<!-- sent="Tue, 14 Aug 2007 17:22:06 +0200" -->
<!-- isosent="20070814152206" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hangs" -->
<!-- id="9b0da5ce0708140822j4b942131o28696100f00c7d3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46C1B48D.5090600_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-08-14 11:22:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3852.php">Durga Choudhury: "Re: [OMPI users] libmpi.so.0 problem"</a>
<li><strong>Previous message:</strong> <a href="3850.php">Rodrigo Faccioli: "Re: [OMPI users] libmpi.so.0 problem"</a>
<li><strong>In reply to:</strong> <a href="3848.php">Tim Prins: "Re: [OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3856.php">Tim Prins: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="3856.php">Tim Prins: "Re: [OMPI users] mpirun hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi TIm
<br>
thanks for the suggestions.
<br>
<p>I now set both paths  in .zshenv but it seems that LD_LIBRARY_PATH
<br>
still does not get set.
<br>
The ldd experment shows that all openmpi libraries are not found,
<br>
and indeed the printenv shows that PATH is there but LD_LIBRARY_PATH is not.
<br>
<p>It is rather unclear why this happens...
<br>
<p>As to thew second problem:
<br>
$ mpirun --debug-daemons -np 2 --prefix /opt/openmpi --host nano_02
<br>
./MPI2Test2
<br>
[aim-nano_02:05455] [0,0,1]-[0,0,0] mca_oob_tcp_peer_try_connect: connect to
<br>
130.60.49.134:40618 failed: Software caused connection abort (103)
<br>
[aim-nano_02:05455] [0,0,1]-[0,0,0] mca_oob_tcp_peer_try_connect: connect to
<br>
130.60.49.134:40618 failed, connecting over all interfaces failed!
<br>
[aim-nano_02:05455] OOB: Connection to HNP lost
<br>
[aim-plankton.unizh.ch:24222] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
base/pls_base_orted_cmds.c at line 275
<br>
[aim-plankton.unizh.ch:24222] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
pls_rsh_module.c at line 1164
<br>
[aim-plankton.unizh.ch:24222] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
errmgr_hnp.c at line 90
<br>
[aim-plankton.unizh.ch:24222] ERROR: A daemon on node nano_02 failed to
<br>
start as expected.
<br>
[aim-plankton.unizh.ch:24222] ERROR: There may be more information available
<br>
from
<br>
[aim-plankton.unizh.ch:24222] ERROR: the remote shell (see above).
<br>
[aim-plankton.unizh.ch:24222] ERROR: The daemon exited unexpectedly with
<br>
status 1.
<br>
[aim-plankton.unizh.ch:24222] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
base/pls_base_orted_cmds.c at line 188
<br>
[aim-plankton.unizh.ch:24222] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
pls_rsh_module.c at line 1196
<br>
<p>The strange thing is that nano_02's address is 130.60.49.130 and plankton's
<br>
(the caller) is 130.60.49 134.
<br>
I also made sure that nano_02 cann ssh to plankton without password, but
<br>
that didn't change the output.
<br>
<p>Does this message give any hints as to the problem?
<br>
<p>Jody
<br>
<p><p>On 8/14/07, Tim Prins &lt;tprins_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Jody,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jody wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi
</span><br>
<span class="quotelev2">&gt; &gt; I installed openmpi 1.2.2 on a quad core intel machine running fedora 6
</span><br>
<span class="quotelev2">&gt; &gt; (hostname plankton)
</span><br>
<span class="quotelev2">&gt; &gt; I set PATH and LD_LIBRARY in the .zshrc file:
</span><br>
<span class="quotelev1">&gt; Note that .zshrc is only used for interactive logins. You need to setup
</span><br>
<span class="quotelev1">&gt; your system so the LD_LIBRARY_PATH and PATH is also set for
</span><br>
<span class="quotelev1">&gt; non-interactive logins. See this zsh FAQ entry for what files you need
</span><br>
<span class="quotelev1">&gt; to modify:
</span><br>
<span class="quotelev1">&gt; <a href="http://zsh.sourceforge.net/FAQ/zshfaq03.html#l19">http://zsh.sourceforge.net/FAQ/zshfaq03.html#l19</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (BTW: I do not use zsh, but my assumption is that the file you want to
</span><br>
<span class="quotelev1">&gt; set the PATH and LD_LIBRARY_PATH in is .zshenv)
</span><br>
<span class="quotelev2">&gt; &gt; $ echo $PATH
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin:/usr/kerberos/bin:/usr/local/bin:/usr/bin:/bin:/usr/X11R6/bin:/home/jody/bin
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi/lib:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When i run
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun -np 2 ./MPITest2
</span><br>
<span class="quotelev2">&gt; &gt; i get the message
</span><br>
<span class="quotelev2">&gt; &gt; ./MPI2Test2: error while loading shared libraries: libmpi_cxx.so.0:
</span><br>
<span class="quotelev2">&gt; &gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt; ./MPI2Test2: error while loading shared libraries: libmpi_cxx.so.0:
</span><br>
<span class="quotelev2">&gt; &gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun -np 2 --prefix /opt/openmpi ./MPI2Test2
</span><br>
<span class="quotelev2">&gt; &gt; works.  Any explanation?
</span><br>
<span class="quotelev1">&gt; Yes, the LD_LIBRARY_PATH is probably not set correctly. Try running:
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 ldd ./MPITest2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This should show what libraries your executable is using. Make sure all
</span><br>
<span class="quotelev1">&gt; of the libraries are resolved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, try running:
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 printenv |grep LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; to see what the LD_LIBRARY_PATH is for you executables. Note that you
</span><br>
<span class="quotelev1">&gt; can NOT simply run mpirun echo $LD_LIBRARY_PATH, as the variable will be
</span><br>
<span class="quotelev1">&gt; interpreted in the executing shell.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Second problem:
</span><br>
<span class="quotelev2">&gt; &gt; I have also  installed openmpi 1.2.2 on an AMD machine running gentoo
</span><br>
<span class="quotelev2">&gt; &gt; linux (hostname nano_02).
</span><br>
<span class="quotelev2">&gt; &gt; Here as well PATH and LD_LIBRARY_PATH are set correctly,
</span><br>
<span class="quotelev2">&gt; &gt; and
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun -np 2 ./MPITest2
</span><br>
<span class="quotelev2">&gt; &gt; works locally on nano_02.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If, however, from plankton i call
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun -np 2 --prefix /opt/openmpi --host nano_02 ./MPI2Test2
</span><br>
<span class="quotelev2">&gt; &gt; the call hangs with no output whatsoever.
</span><br>
<span class="quotelev2">&gt; &gt; Any pointers on how to solve this problem?
</span><br>
<span class="quotelev1">&gt; Try running:
</span><br>
<span class="quotelev1">&gt; mpirun --debug-daemons -np 2 --prefix /opt/openmpi --host nano_02
</span><br>
<span class="quotelev1">&gt; ./MPI2Test2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This should give some more output as to what is happening.
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
<span class="quotelev2">&gt; &gt; Thank You
</span><br>
<span class="quotelev2">&gt; &gt;   Jody
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3851/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3852.php">Durga Choudhury: "Re: [OMPI users] libmpi.so.0 problem"</a>
<li><strong>Previous message:</strong> <a href="3850.php">Rodrigo Faccioli: "Re: [OMPI users] libmpi.so.0 problem"</a>
<li><strong>In reply to:</strong> <a href="3848.php">Tim Prins: "Re: [OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3856.php">Tim Prins: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="3856.php">Tim Prins: "Re: [OMPI users] mpirun hangs"</a>
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
