<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 27 15:27:13 2005" -->
<!-- isoreceived="20050927202713" -->
<!-- sent="Tue, 27 Sep 2005 14:27:22 -0600" -->
<!-- isosent="20050927202722" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="bproc question" -->
<!-- id="F6793505-6A6E-4BB9-A507-BC2101A3867C_at_lanl.gov" -->
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
<strong>Date:</strong> 2005-09-27 15:27:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0422.php">Ralf Wildenhues: "Re:  bproc question"</a>
<li><strong>Previous message:</strong> <a href="0420.php">Ralf Wildenhues: "Re:  Back to 32bit on 64bit machines..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0422.php">Ralf Wildenhues: "Re:  bproc question"</a>
<li><strong>Reply:</strong> <a href="0422.php">Ralf Wildenhues: "Re:  bproc question"</a>
<li><strong>Reply:</strong> <a href="0423.php">Jeff Squyres: "Re:  bproc question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Trying to install ompi on a bproc machine with no network filesystem.  
<br>
I've copied the contents of the ompi lib directory into /tmp/ompi on  
<br>
each node and set my LD_LIBRARY_PATH to /tmp/ompi. However when I run  
<br>
the program, I get the following error. Any suggestions on what else  
<br>
I need to do?
<br>
<p>Thanks,
<br>
<p>Greg
<br>
<p>[n0:31161] [NO-NAME] ORTE_ERROR_LOG: Not found in file  
<br>
orte_init_stage1.c at line 191
<br>
[n0:31161] [NO-NAME] ORTE_ERROR_LOG: Not found in file  
<br>
orte_system_init.c at line 39
<br>
[n0:31161] [NO-NAME] ORTE_ERROR_LOG: Not found in file orte_init.c at  
<br>
line 47
<br>
------------------------------------------------------------------------ 
<br>
<pre>
--
Sorry!  You were supposed to get help about:
     orted:init-failure
from the file:
     help-orted.txt
But I couldn't find any file matching that name.  Sorry!
------------------------------------------------------------------------ 
--
------------------------------------------------------------------------ 
--
A daemon (pid 31161) launched by the bproc PLS component on node 0 died
unexpectedly so we are aborting.
This may be because the daemon was unable to find all the needed shared
libraries on the remote node. You may set your LD_LIBRARY_PATH to  
have the
location of the shared libraries on the remote nodes and this will
automatically be forwarded to the remote nodes.
------------------------------------------------------------------------ 
--
[bluesteel.lanl.gov:31160] [0,0,0] ORTE_ERROR_LOG: Error in file  
pls_bproc.c at line 870
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0422.php">Ralf Wildenhues: "Re:  bproc question"</a>
<li><strong>Previous message:</strong> <a href="0420.php">Ralf Wildenhues: "Re:  Back to 32bit on 64bit machines..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0422.php">Ralf Wildenhues: "Re:  bproc question"</a>
<li><strong>Reply:</strong> <a href="0422.php">Ralf Wildenhues: "Re:  bproc question"</a>
<li><strong>Reply:</strong> <a href="0423.php">Jeff Squyres: "Re:  bproc question"</a>
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
