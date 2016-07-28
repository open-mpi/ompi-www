<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 28 09:24:53 2005" -->
<!-- isoreceived="20050728142453" -->
<!-- sent="Thu, 28 Jul 2005 08:24:50 -0600" -->
<!-- isosent="20050728142450" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re:  Launching orted from Eclipse problem: solved" -->
<!-- id="42E8EAB2.7090202_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0EC7F3B5-D6AF-46DD-9B43-DA585114DD1F_at_lanl.gov" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-07-28 09:24:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0058.php">Timothy B. Prins: "New Bproc Components"</a>
<li><strong>Previous message:</strong> <a href="0056.php">Galen Shipman: "Mellanox VAPI SRQ."</a>
<li><strong>In reply to:</strong> <a href="0054.php">Greg Watson: "Launching orted from Eclipse problem: solved"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greg,
<br>
<p>Thanks for tracking this down!
<br>
Tim
<br>
<p><p>Greg Watson wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To recap: the problem was that if orted was launched from Eclipse (on  
</span><br>
<span class="quotelev1">&gt; OS X) then subsequent attempts to run a program (using mpirun or  
</span><br>
<span class="quotelev1">&gt; whatever) returned immediately. If orted was launched from anywhere  
</span><br>
<span class="quotelev1">&gt; else (java, command line, etc.) it worked fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Turning on daemon logging showed that the reason that the program was  
</span><br>
<span class="quotelev1">&gt; aborting immediately was that the execv() of the ssh command to the  
</span><br>
<span class="quotelev1">&gt; remote machine was exiting with errno=14 (EFAULT). Clearly there was  
</span><br>
<span class="quotelev1">&gt; some environment difference, and after much checking it became  
</span><br>
<span class="quotelev1">&gt; apparent that the difference was that the Eclipse-launched orted did  
</span><br>
<span class="quotelev1">&gt; not have $(OMPI_INSTALL) in it's path. The orte_pls_rsh_launch()  
</span><br>
<span class="quotelev1">&gt; function checks if you're launching onto the local or a remote  
</span><br>
<span class="quotelev1">&gt; machine. For local machines (as it was in this case), it calls  
</span><br>
<span class="quotelev1">&gt; opal_path_findv() to find the local path of orted. Unfortunately  
</span><br>
<span class="quotelev1">&gt; because $(OMPI_INSTALL) is not included in the local path, this fails  
</span><br>
<span class="quotelev1">&gt; by returning NULL. The NULL is then passed to the first argument of  
</span><br>
<span class="quotelev1">&gt; execv() which returns EFAULT.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is easily reproducible by taking $(OMPI_INSTALL) out of  
</span><br>
<span class="quotelev1">&gt; your path, running $(OMPI_INSTALL)/orted, then trying to run  
</span><br>
<span class="quotelev1">&gt; something with mpirun.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why did it work from the command line? On OS X, the shell gets the  
</span><br>
<span class="quotelev1">&gt; PATH set in ~/.bash_profile, etc., (which in this case contained  
</span><br>
<span class="quotelev1">&gt; OMPI_INSTALL) but applications launched from window system get their  
</span><br>
<span class="quotelev1">&gt; path from the loginwindow app, which looks in ~/.MacOSX/ 
</span><br>
<span class="quotelev1">&gt; environment.plist for environment variables (which didn't contain  
</span><br>
<span class="quotelev1">&gt; OMPI_INSTALL). I suspect, but haven't tried, launching Eclipse from  
</span><br>
<span class="quotelev1">&gt; the command line would have worked.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure why the logic is there to look up the path again for  
</span><br>
<span class="quotelev1">&gt; local launches, since it should be the same as the path in the  
</span><br>
<span class="quotelev1">&gt; component. It should certainly check for a NULL return though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0058.php">Timothy B. Prins: "New Bproc Components"</a>
<li><strong>Previous message:</strong> <a href="0056.php">Galen Shipman: "Mellanox VAPI SRQ."</a>
<li><strong>In reply to:</strong> <a href="0054.php">Greg Watson: "Launching orted from Eclipse problem: solved"</a>
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
