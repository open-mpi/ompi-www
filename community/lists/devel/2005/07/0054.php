<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 27 13:49:54 2005" -->
<!-- isoreceived="20050727184954" -->
<!-- sent="Wed, 27 Jul 2005 12:50:09 -0600" -->
<!-- isosent="20050727185009" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="Launching orted from Eclipse problem: solved" -->
<!-- id="0EC7F3B5-D6AF-46DD-9B43-DA585114DD1F_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Greg Watson (<em>gwatson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-07-27 13:50:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0055.php">Jeff Squyres: "Re:  Launching orted from Eclipse problem: solved"</a>
<li><strong>Previous message:</strong> <a href="0053.php">Jeff Squyres: "Re:  openib trees"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0055.php">Jeff Squyres: "Re:  Launching orted from Eclipse problem: solved"</a>
<li><strong>Reply:</strong> <a href="0055.php">Jeff Squyres: "Re:  Launching orted from Eclipse problem: solved"</a>
<li><strong>Reply:</strong> <a href="0057.php">Tim S. Woodall: "Re:  Launching orted from Eclipse problem: solved"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>To recap: the problem was that if orted was launched from Eclipse (on  
<br>
OS X) then subsequent attempts to run a program (using mpirun or  
<br>
whatever) returned immediately. If orted was launched from anywhere  
<br>
else (java, command line, etc.) it worked fine.
<br>
<p>Turning on daemon logging showed that the reason that the program was  
<br>
aborting immediately was that the execv() of the ssh command to the  
<br>
remote machine was exiting with errno=14 (EFAULT). Clearly there was  
<br>
some environment difference, and after much checking it became  
<br>
apparent that the difference was that the Eclipse-launched orted did  
<br>
not have $(OMPI_INSTALL) in it's path. The orte_pls_rsh_launch()  
<br>
function checks if you're launching onto the local or a remote  
<br>
machine. For local machines (as it was in this case), it calls  
<br>
opal_path_findv() to find the local path of orted. Unfortunately  
<br>
because $(OMPI_INSTALL) is not included in the local path, this fails  
<br>
by returning NULL. The NULL is then passed to the first argument of  
<br>
execv() which returns EFAULT.
<br>
<p>The problem is easily reproducible by taking $(OMPI_INSTALL) out of  
<br>
your path, running $(OMPI_INSTALL)/orted, then trying to run  
<br>
something with mpirun.
<br>
<p>Why did it work from the command line? On OS X, the shell gets the  
<br>
PATH set in ~/.bash_profile, etc., (which in this case contained  
<br>
OMPI_INSTALL) but applications launched from window system get their  
<br>
path from the loginwindow app, which looks in ~/.MacOSX/ 
<br>
environment.plist for environment variables (which didn't contain  
<br>
OMPI_INSTALL). I suspect, but haven't tried, launching Eclipse from  
<br>
the command line would have worked.
<br>
<p>I'm not sure why the logic is there to look up the path again for  
<br>
local launches, since it should be the same as the path in the  
<br>
component. It should certainly check for a NULL return though.
<br>
<p>Greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0055.php">Jeff Squyres: "Re:  Launching orted from Eclipse problem: solved"</a>
<li><strong>Previous message:</strong> <a href="0053.php">Jeff Squyres: "Re:  openib trees"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0055.php">Jeff Squyres: "Re:  Launching orted from Eclipse problem: solved"</a>
<li><strong>Reply:</strong> <a href="0055.php">Jeff Squyres: "Re:  Launching orted from Eclipse problem: solved"</a>
<li><strong>Reply:</strong> <a href="0057.php">Tim S. Woodall: "Re:  Launching orted from Eclipse problem: solved"</a>
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
