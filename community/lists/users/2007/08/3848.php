<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 14 09:56:34 2007" -->
<!-- isoreceived="20070814135634" -->
<!-- sent="Tue, 14 Aug 2007 09:56:29 -0400" -->
<!-- isosent="20070814135629" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hangs" -->
<!-- id="46C1B48D.5090600_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0708140242x52b80329h1a890b22f2cdc0d9_at_mail.gmail.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-14 09:56:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3849.php">Tim Prins: "Re: [OMPI users] Help : Need some tuning, or is it a bug ?"</a>
<li><strong>Previous message:</strong> <a href="3847.php">Tim Prins: "Re: [OMPI users] libmpi.so.0 problem"</a>
<li><strong>In reply to:</strong> <a href="3845.php">jody: "[OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3851.php">jody: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="3851.php">jody: "Re: [OMPI users] mpirun hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jody,
<br>
<p>jody wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; I installed openmpi 1.2.2 on a quad core intel machine running fedora 6 
</span><br>
<span class="quotelev1">&gt; (hostname plankton)
</span><br>
<span class="quotelev1">&gt; I set PATH and LD_LIBRARY in the .zshrc file:
</span><br>
Note that .zshrc is only used for interactive logins. You need to setup 
<br>
your system so the LD_LIBRARY_PATH and PATH is also set for 
<br>
non-interactive logins. See this zsh FAQ entry for what files you need 
<br>
to modify:
<br>
<a href="http://zsh.sourceforge.net/FAQ/zshfaq03.html#l19">http://zsh.sourceforge.net/FAQ/zshfaq03.html#l19</a>
<br>
<p>(BTW: I do not use zsh, but my assumption is that the file you want to 
<br>
set the PATH and LD_LIBRARY_PATH in is .zshenv)
<br>
<span class="quotelev1">&gt; $ echo $PATH             
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin:/usr/kerberos/bin:/usr/local/bin:/usr/bin:/bin:/usr/X11R6/bin:/home/jody/bin 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/lib:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When i run
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 ./MPITest2
</span><br>
<span class="quotelev1">&gt; i get the message
</span><br>
<span class="quotelev1">&gt; ./MPI2Test2: error while loading shared libraries: libmpi_cxx.so.0: 
</span><br>
<span class="quotelev1">&gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; ./MPI2Test2: error while loading shared libraries: libmpi_cxx.so.0: 
</span><br>
<span class="quotelev1">&gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 --prefix /opt/openmpi ./MPI2Test2
</span><br>
<span class="quotelev1">&gt; works.  Any explanation?
</span><br>
Yes, the LD_LIBRARY_PATH is probably not set correctly. Try running:
<br>
mpirun -np 2 ldd ./MPITest2
<br>
<p>This should show what libraries your executable is using. Make sure all 
<br>
of the libraries are resolved.
<br>
<p>Also, try running:
<br>
mpirun -np 1 printenv |grep LD_LIBRARY_PATH
<br>
to see what the LD_LIBRARY_PATH is for you executables. Note that you 
<br>
can NOT simply run mpirun echo $LD_LIBRARY_PATH, as the variable will be 
<br>
interpreted in the executing shell.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Second problem:
</span><br>
<span class="quotelev1">&gt; I have also  installed openmpi 1.2.2 on an AMD machine running gentoo 
</span><br>
<span class="quotelev1">&gt; linux (hostname nano_02).
</span><br>
<span class="quotelev1">&gt; Here as well PATH and LD_LIBRARY_PATH are set correctly,
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 ./MPITest2
</span><br>
<span class="quotelev1">&gt; works locally on nano_02.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If, however, from plankton i call
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 --prefix /opt/openmpi --host nano_02 ./MPI2Test2
</span><br>
<span class="quotelev1">&gt; the call hangs with no output whatsoever.
</span><br>
<span class="quotelev1">&gt; Any pointers on how to solve this problem?
</span><br>
Try running:
<br>
mpirun --debug-daemons -np 2 --prefix /opt/openmpi --host nano_02 
<br>
./MPI2Test2
<br>
<p>This should give some more output as to what is happening.
<br>
<p>Hope this helps,
<br>
<p>Tim
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt;   Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="3849.php">Tim Prins: "Re: [OMPI users] Help : Need some tuning, or is it a bug ?"</a>
<li><strong>Previous message:</strong> <a href="3847.php">Tim Prins: "Re: [OMPI users] libmpi.so.0 problem"</a>
<li><strong>In reply to:</strong> <a href="3845.php">jody: "[OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3851.php">jody: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="3851.php">jody: "Re: [OMPI users] mpirun hangs"</a>
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
