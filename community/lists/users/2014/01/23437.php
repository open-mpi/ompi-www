<?
$subject_val = "[OMPI users] Getting past firewall &amp; something else? in Mac OS X";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 23 19:34:37 2014" -->
<!-- isoreceived="20140124003437" -->
<!-- sent="Thu, 23 Jan 2014 16:34:19 -0800" -->
<!-- isosent="20140124003419" -->
<!-- name="Dan Hsu" -->
<!-- email="dkhsu_at_[hidden]" -->
<!-- subject="[OMPI users] Getting past firewall &amp;amp; something else? in Mac OS X" -->
<!-- id="52E1B50B.6000702_at_ucdavis.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Getting past firewall &amp; something else? in Mac OS X<br>
<strong>From:</strong> Dan Hsu (<em>dkhsu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-23 19:34:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23438.php">Doug Roberts: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="23436.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23453.php">Ralph Castain: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<li><strong>Reply:</strong> <a href="23453.php">Ralph Castain: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All
<br>
<p>Am trying to run a parallel molecular simulation from the directory 
<br>
containing the executable (using only available cores on the local cpus) 
<br>
on Mac Lion and keep getting an apparent firewall error that cannot be 
<br>
resolved. I am entering:
<br>
<p>?mpirun  -np 2 -e ./mpierr1 dock6.mpi -otherinput
<br>
<p>and get transient (too quick to Allow) notification messages 'Do you 
<br>
want the application &quot;orterun&quot; to accept incoming network connections? 
<br>
Clicking Deny may limit....... The setting can be changed in the 
<br>
firewall pane.......&quot;
<br>
<p>The mpirun message says:
<br>
--------------
<br>
??Initializing MPI Routines...
<br>
Initializing MPI Routines...
<br>
--------------
<br>
<p>I can specify orterun as a trusted app with &quot;?sudo 
<br>
/usr/libexec/ApplicationFirewall/socketfilterfw -t 
<br>
/usr/local/bin/orterun&quot;. Before, and after allowing firewall access by 
<br>
orterun and dock6.mpi I get the following by viewing the 
<br>
?/var/log/appfirewall.log:
<br>
<p>?Jan 24 00:48:45 Dans-Mac Firewall[23513]: orterun is listening from 
<br>
0.0.0.0:50722 proto=6
<br>
Jan 24 00:48:45 Dans-Mac Firewall[23513]: dock6.mpi is listening from 
<br>
0.0.0.0:50723 proto=6
<br>
Jan 24 00:48:45 Dans-Mac Firewall[23513]: dock6.mpi is listening from 
<br>
0.0.0.0:50724 proto=6
<br>
Jan 24 00:48:45 Dans-Mac Firewall[23513]: dock6.mpi is listening from 
<br>
0.0.0.0:1024 proto=6
<br>
Jan 24 00:48:45 Dans-Mac Firewall[23513]: dock6.mpi is listening from 
<br>
0.0.0.0:1025 proto=6
<br>
<p>It appears that something is trying to start but cannot, and I dont know 
<br>
what else to try. Can anyone suggest how this might be resolved?
<br>
<p>Thanks much for any input!
<br>
Dan
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23437/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23438.php">Doug Roberts: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="23436.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23453.php">Ralph Castain: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<li><strong>Reply:</strong> <a href="23453.php">Ralph Castain: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
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
