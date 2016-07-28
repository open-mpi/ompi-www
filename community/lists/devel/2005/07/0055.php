<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 28 08:03:08 2005" -->
<!-- isoreceived="20050728130308" -->
<!-- sent="Thu, 28 Jul 2005 07:03:06 -0600" -->
<!-- isosent="20050728130306" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  Launching orted from Eclipse problem: solved" -->
<!-- id="d78a5386071410fef843634059290bc1_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-07-28 08:03:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0056.php">Galen Shipman: "Mellanox VAPI SRQ."</a>
<li><strong>Previous message:</strong> <a href="0054.php">Greg Watson: "Launching orted from Eclipse problem: solved"</a>
<li><strong>In reply to:</strong> <a href="0054.php">Greg Watson: "Launching orted from Eclipse problem: solved"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0057.php">Tim S. Woodall: "Re:  Launching orted from Eclipse problem: solved"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for reporting this.  I just committed code to the rsh pls to  
<br>
specifically check $bindir if the orted is not found in your path (on  
<br>
the local node).  If orted is still not found, it'll now issue a  
<br>
friendly error message:
<br>
<p>[7:58] vogon:~/mpi % mpirun -np 1 hello
<br>
------------------------------------------------------------------------ 
<br>
<pre>
--
The rsh PLS component was not able to find the executable &quot;orted&quot; in
your PATH or in the directory where Open MPI was initially installed,
and therefore cannot continue.
For reference, your current PATH is:
    
/opt/torque/bin:/u/jsquyres/bogus/bin:/home/jsquyres/local/bin:/u/ 
jsquyres/local/bin:/l/osl/Software/i686-pc-linux-gnu/bin:/usr/local/ 
gnu/bin:/usr/local/bin:/usr/local/bin:/opt/bin:/usr/i686-pc-linux-gnu/ 
gcc-bin/3.3.5-20050130:/opt/intel_cc_80/bin:/opt/intel_idb_80/bin:/opt/ 
intel_fc_80/bin:/opt/ICAClient:/opt/stuffit/bin:/opt/sun-jdk-1.4.2.08/ 
bin:/opt/sun-jdk-1.4.2.08/jre/bin:/opt/sun-jdk-1.4.2.08/jre/javaws:/ 
usr/qt/3/bin:/usr/kde/3.3/bin:/usr/qt/2/bin:/opt/vmware/bin:/opt/aim:/ 
bin:/usr/bin:/opt/absoft/bin
We also looked for orte in the following directory:
   /u/jsquyres/bogus/bin
------------------------------------------------------------------------ 
--
[0,0,0] ORTE_ERROR_LOG: ORTE_ERR_NOT_FOUND in file rmgr_urm.c at line  
320
mpirun: spawn failed with errno=-16
ERROR: A daemon on node vogon failed to start as expected.
ERROR: There may be more information available from
ERROR: the remote shell (see above).
ERROR: The daemon exited unexpectedly with status 240.
[7:59] vogon:~/mpi %
I also included in there an output of your current $PATH, so that  
problems like you ran into are more obvious (some other agent changing  
your PATH to something that you didn't expect).
On Jul 27, 2005, at 12:50 PM, Greg Watson wrote:
&gt; Hi all,
&gt;
&gt; To recap: the problem was that if orted was launched from Eclipse (on
&gt; OS X) then subsequent attempts to run a program (using mpirun or
&gt; whatever) returned immediately. If orted was launched from anywhere
&gt; else (java, command line, etc.) it worked fine.
&gt;
&gt; Turning on daemon logging showed that the reason that the program was
&gt; aborting immediately was that the execv() of the ssh command to the
&gt; remote machine was exiting with errno=14 (EFAULT). Clearly there was
&gt; some environment difference, and after much checking it became
&gt; apparent that the difference was that the Eclipse-launched orted did
&gt; not have $(OMPI_INSTALL) in it's path. The orte_pls_rsh_launch()
&gt; function checks if you're launching onto the local or a remote
&gt; machine. For local machines (as it was in this case), it calls
&gt; opal_path_findv() to find the local path of orted. Unfortunately
&gt; because $(OMPI_INSTALL) is not included in the local path, this fails
&gt; by returning NULL. The NULL is then passed to the first argument of
&gt; execv() which returns EFAULT.
&gt;
&gt; The problem is easily reproducible by taking $(OMPI_INSTALL) out of
&gt; your path, running $(OMPI_INSTALL)/orted, then trying to run
&gt; something with mpirun.
&gt;
&gt; Why did it work from the command line? On OS X, the shell gets the
&gt; PATH set in ~/.bash_profile, etc., (which in this case contained
&gt; OMPI_INSTALL) but applications launched from window system get their
&gt; path from the loginwindow app, which looks in ~/.MacOSX/
&gt; environment.plist for environment variables (which didn't contain
&gt; OMPI_INSTALL). I suspect, but haven't tried, launching Eclipse from
&gt; the command line would have worked.
&gt;
&gt; I'm not sure why the logic is there to look up the path again for
&gt; local launches, since it should be the same as the path in the
&gt; component. It should certainly check for a NULL return though.
&gt;
&gt; Greg
&gt;
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0056.php">Galen Shipman: "Mellanox VAPI SRQ."</a>
<li><strong>Previous message:</strong> <a href="0054.php">Greg Watson: "Launching orted from Eclipse problem: solved"</a>
<li><strong>In reply to:</strong> <a href="0054.php">Greg Watson: "Launching orted from Eclipse problem: solved"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0057.php">Tim S. Woodall: "Re:  Launching orted from Eclipse problem: solved"</a>
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
