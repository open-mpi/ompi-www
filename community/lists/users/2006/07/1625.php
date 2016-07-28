<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jul 16 08:10:43 2006" -->
<!-- isoreceived="20060716121043" -->
<!-- sent="Sun, 16 Jul 2006 13:12:29 +0100" -->
<!-- isosent="20060716121229" -->
<!-- name="Keith Refson" -->
<!-- email="Keith.lists_at_[hidden]" -->
<!-- subject="[OMPI users] Openmpi, LSF and GM" -->
<!-- id="44BA2D2D.1010700_at_ntlworld.com" -->
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
<strong>From:</strong> Keith Refson (<em>Keith.lists_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-16 08:12:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1626.php">Brian Barrett: "Re: [OMPI users] Openmpi, LSF and GM"</a>
<li><strong>Previous message:</strong> <a href="1624.php">Eric Thibodeau: "[OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1626.php">Brian Barrett: "Re: [OMPI users] Openmpi, LSF and GM"</a>
<li><strong>Reply:</strong> <a href="1626.php">Brian Barrett: "Re: [OMPI users] Openmpi, LSF and GM"</a>
<li><strong>Maybe reply:</strong> <a href="1642.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Openmpi, LSF and GM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying out openmpi for the first time on
<br>
a cluster of dual AMD Opterons with  Myrinet
<br>
interconnect using GM.   There are two outstanding
<br>
but possibly connected problems, (a) how to interact
<br>
correctly with the LSF job manager and (2) how to
<br>
use the gm interconnect.
<br>
<p>The compile of openmpi 1.1 was without problems and
<br>
appears to have correctly built the GM btl.
<br>
$ ompi_info -a | egrep &quot;\bgm\b|_gm_&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: gm (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: gm (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: parameter &quot;mpool_gm_priority&quot; (current value: &quot;0&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_free_list_num&quot; (current value: &quot;8&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_free_list_max&quot; (current value: &quot;-1&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_free_list_inc&quot; (current value: &quot;8&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_debug&quot; (current value: &quot;0&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_mpool&quot; (current value: &quot;gm&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_max_ports&quot; (current value: &quot;16&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_max_boards&quot; (current value: &quot;4&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_max_modules&quot; (current value: &quot;4&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_num_high_priority&quot; (current value: &quot;8&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_num_repost&quot; (current value: &quot;4&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_num_mru&quot; (current value: &quot;64&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_port_name&quot; (current value: &quot;OMPI&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_exclusivity&quot; (current value: &quot;1024&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_eager_limit&quot; (current value: &quot;32768&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_min_send_size&quot; (current value: &quot;32768&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_max_send_size&quot; (current value: &quot;65536&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_min_rdma_size&quot; (current value: &quot;524288&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_max_rdma_size&quot; (current value: &quot;131072&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_flags&quot; (current value: &quot;2&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_bandwidth&quot; (current value: &quot;250&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_priority&quot; (current value: &quot;0&quot;)
<br>
<p>However I have been unable to sey up a parallel run which uses gm.
<br>
If I start a run using the openmpi mpirun command, the program executes
<br>
correctly in parallel. However the timings appear to suggest that it is
<br>
using tcp, and the command executed on the node looks  like:
<br>
<p>&nbsp;&nbsp;orted --bootproxy 1 --name 0.0.1 --num_procs 3 --vpid_start 0 --nodename
<br>
scarf-cn001.rl.ac.uk --universe
<br>
cse0000_at_[hidden]:default-universe-28588 --nsreplica
<br>
&quot;0.0.0;tcp://192.168.1.1:52491;tcp://130.246.142.1:52491&quot; --gprreplica
<br>
&quot;0.0.0;tcp://192.168.1.1:52491;t
<br>
<p>Furthermore if attempt to start with the mpirun arguments &quot;--mca btl
<br>
gm,self,^tcp&quot; the run aborts at the MPI_INIT call.
<br>
<p>Q1:  Is there anything else I have to do to get openmpi to use gm?
<br>
Q2:  Is there any way of diagnosing which btl is actually being used
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and why?  None &quot;-v&quot; option to mpirun, &quot;-mca btl  btl_base_verbose&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or &quot;-mca btl  btl_gm_debug=1&quot; make any difference or produce any
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;more output
<br>
Q3:  Is there a way to make openmpi work with the LSF commands?  So far
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have constructed a hostfile from the LSF environment variable
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LSB_HOSTS and used the openmpi mpirun command to start the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;parallel executable.
<br>
<p>Sincerely
<br>
<p>Keith Refson
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1626.php">Brian Barrett: "Re: [OMPI users] Openmpi, LSF and GM"</a>
<li><strong>Previous message:</strong> <a href="1624.php">Eric Thibodeau: "[OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1626.php">Brian Barrett: "Re: [OMPI users] Openmpi, LSF and GM"</a>
<li><strong>Reply:</strong> <a href="1626.php">Brian Barrett: "Re: [OMPI users] Openmpi, LSF and GM"</a>
<li><strong>Maybe reply:</strong> <a href="1642.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Openmpi, LSF and GM"</a>
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
