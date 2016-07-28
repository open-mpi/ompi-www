<?
$subject_val = "[OMPI users] New User question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 13:54:45 2009" -->
<!-- isoreceived="20090224185445" -->
<!-- sent="Tue, 24 Feb 2009 10:54:40 -0800 (PST)" -->
<!-- isosent="20090224185440" -->
<!-- name="Larry Adelberg" -->
<!-- email="terpsgeorgia_at_[hidden]" -->
<!-- subject="[OMPI users] New User question" -->
<!-- id="974996.81242.qm_at_web57801.mail.re3.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] New User question<br>
<strong>From:</strong> Larry Adelberg (<em>terpsgeorgia_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-24 13:54:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8189.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3:"</a>
<li><strong>Previous message:</strong> <a href="8187.php">Ricardo Fern&#225;ndez-Perea: "[OMPI users] openmpi 1.2.9 with Xgrid support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8191.php">Ralph Castain: "Re: [OMPI users] New User question"</a>
<li><strong>Reply:</strong> <a href="8191.php">Ralph Castain: "Re: [OMPI users] New User question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all, 

I am sorry to ask what is probably a newbie question, I have searched the archives but am probably not using the proper key word to locate. 

I am working on an atmospheric model which uses openmpi/openrte.  I have two nodes setup but the model only runs on one node.  

I can use mpirun to execute an application on another node by entering the below on HOST1: 

mpirun --np 2 --host HOST2 APPNAME

In this scenario, the system connects via ssh to HOST2 and runs the application without a problem.  

If I attempt to run:
mpirun --np 2 --nolocal APPNAME

I get: 
[virtualModel1:03939] [0,0,0] ORTE_ERROR_LOG: Temporarily out of resource in file base/rmaps_base_support_fns.c at line 168
[virtualModel1:03939] [0,0,0] ORTE_ERROR_LOG: Temporarily out of resource in file rmaps_rr.c at line 402
[virtualModel1:03939] [0,0,0] ORTE_ERROR_LOG: Temporarily out of resource in file base/rmaps_base_map_job.c at line 210
[virtualModel1:03939] [0,0,0] ORTE_ERROR_LOG: Temporarily out of resource in file rmgr_urm.c at line 372
[virtualModel1:03939] mpirun: spawn failed with errno=-3


Looking at the source code, that is the area where the available nodes are enumerated and this error appears to indicate no &quot;non-local&quot; node is available if I am interpreting this correctly. 

I have the hosts file correct along with the ssh key so the user can login without a password etc etc.  I don't know where the system looks for identification of node IPs so this can be enumerated.

Can someone give me a quick pointer to the correct location in the manual (I realize the answer is RTM but I have not found the answer in the manual thus far so I figured I would throw it out there to the experts). 

Thanks for your patience with my query.



      
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8188/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8189.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3:"</a>
<li><strong>Previous message:</strong> <a href="8187.php">Ricardo Fern&#225;ndez-Perea: "[OMPI users] openmpi 1.2.9 with Xgrid support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8191.php">Ralph Castain: "Re: [OMPI users] New User question"</a>
<li><strong>Reply:</strong> <a href="8191.php">Ralph Castain: "Re: [OMPI users] New User question"</a>
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
