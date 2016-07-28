<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 23 10:41:48 2007" -->
<!-- isoreceived="20070523144148" -->
<!-- sent="Wed, 23 May 2007 10:41:19 -0400" -->
<!-- isosent="20070523144119" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] Strange schema error" -->
<!-- id="CE141A2A-3916-465F-A43A-ABBA0E523D9C_at_cs.utk.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-23 10:41:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1569.php">Ralph H Castain: "Re: [OMPI devel] Strange schema error"</a>
<li><strong>Previous message:</strong> <a href="1567.php">Josh Hursey: "Re: [OMPI devel] [devel-core] Dumping process status etc."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1569.php">Ralph H Castain: "Re: [OMPI devel] Strange schema error"</a>
<li><strong>Reply:</strong> <a href="1569.php">Ralph H Castain: "Re: [OMPI devel] Strange schema error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>Starting from yesterday I'm unable to run any Open MPI application. I  
<br>
get an error in the schema URM component, which complain about a  
<br>
missing something ...
<br>
<p>[dancer:01083] [0,0,0] ORTE_ERROR_LOG: Not found in file ../../../../ 
<br>
ompi-trunk/orte/mca/schema/base/schema_base_fns.c at line 163
<br>
[dancer:01083] [0,0,0] ORTE_ERROR_LOG: Not found in file ../../../../ 
<br>
ompi-trunk/orte/mca/rds/base/rds_base_registry_fns.c at line 81
<br>
[dancer:01083] [0,0,0] ORTE_ERROR_LOG: Not found in  
<br>
file ../../../../../ompi-trunk/orte/mca/rmgr/urm/rmgr_urm.c at line 398
<br>
<p>The only thing I'm doing which is not completely default is that I  
<br>
specify the rds_hostfile_path in my Open MPI configuration file. I  
<br>
trim down the host file as well as the config file to their bare  
<br>
minimum but the errors is still popping up. I tried to reinstall  
<br>
everything cleanly from the beginning but it didn't solve any issue.
<br>
<p>I'm the only one having issues right now ? Any idea on how to solve it ?
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1569.php">Ralph H Castain: "Re: [OMPI devel] Strange schema error"</a>
<li><strong>Previous message:</strong> <a href="1567.php">Josh Hursey: "Re: [OMPI devel] [devel-core] Dumping process status etc."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1569.php">Ralph H Castain: "Re: [OMPI devel] Strange schema error"</a>
<li><strong>Reply:</strong> <a href="1569.php">Ralph H Castain: "Re: [OMPI devel] Strange schema error"</a>
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
