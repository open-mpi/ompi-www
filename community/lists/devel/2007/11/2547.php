<?
$subject_val = "[OMPI devel] Multiworld MCA parameter values broken";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 14:10:12 2007" -->
<!-- isoreceived="20071105191012" -->
<!-- sent="Mon, 05 Nov 2007 14:10:20 -0500" -->
<!-- isosent="20071105191020" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="[OMPI devel] Multiworld MCA parameter values broken" -->
<!-- id="472F6A9C.1020009_at_cs.indiana.edu" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-05 14:10:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2548.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16644"</a>
<li><strong>Previous message:</strong> <a href="2546.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16644"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2560.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>Reply:</strong> <a href="2560.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Commit 16364 broke things when using multiword mca param values. For 
<br>
instance:
<br>
<p>mpirun --debug-daemons -mca orte_debug 1 -mca pls rsh -mca pls_rsh_agent 
<br>
&quot;ssh -Y&quot; xterm
<br>
<p>Will crash and burn, because the value &quot;ssh -Y&quot; is being stored into the 
<br>
argv orted_cmd_line in orterun.c:1506. This is then added to the launch 
<br>
command for the orted:
<br>
<p>/usr/bin/ssh -Y odin004  PATH=/san/homedirs/tprins/usr/rsl/bin:$PATH ; 
<br>
export PATH ; 
<br>
LD_LIBRARY_PATH=/san/homedirs/tprins/usr/rsl/lib:$LD_LIBRARY_PATH ; 
<br>
export LD_LIBRARY_PATH ; /san/homedirs/tprins/usr/rsl/bin/orted --debug 
<br>
--debug-daemons --name 0.1 --num_procs 2 --vpid_start 0 --nodename 
<br>
odin004 --universe tprins_at_[hidden]:default-universe-27872 
<br>
--nsreplica 
<br>
&quot;0.0;tcp://129.79.240.100:40907;tcp6://2001:18e8:2:240:2e0:81ff:fe2d:21a0:40908&quot; 
<br>
--gprreplica 
<br>
&quot;0.0;tcp://129.79.240.100:40907;tcp6://2001:18e8:2:240:2e0:81ff:fe2d:21a0:40908&quot; 
<br>
-mca orte_debug 1 -mca pls_rsh_agent ssh -Y -mca 
<br>
mca_base_param_file_path 
<br>
/u/tprins/usr/rsl/share/openmpi/amca-param-sets:/san/homedirs/tprins/rsl/examples 
<br>
-mca mca_base_param_file_path_force /san/homedirs/tprins/rsl/examples
<br>
<p>Notice that in this command we now have &quot;-mca pls_rsh_agent ssh -Y&quot;. So 
<br>
the quotes have been lost, as we die a horrible death.
<br>
<p>So we need to add the quotes back in somehow, or pass these options 
<br>
differently. I'm not sure what the best way to fix this.
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2548.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16644"</a>
<li><strong>Previous message:</strong> <a href="2546.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16644"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2560.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>Reply:</strong> <a href="2560.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
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
