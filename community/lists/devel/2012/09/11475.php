<?
$subject_val = "[OMPI devel] trunk's mapping to nodes... local host";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  7 12:20:15 2012" -->
<!-- isoreceived="20120907162015" -->
<!-- sent="Fri, 07 Sep 2012 12:20:07 -0400" -->
<!-- isosent="20120907162007" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk's mapping to nodes... local host" -->
<!-- id="504A1EB7.6020508_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] trunk's mapping to nodes... local host<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-07 12:20:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11476.php">Ralph Castain: "Re: [OMPI devel] trunk's mapping to nodes... local host"</a>
<li><strong>Previous message:</strong> <a href="11474.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] OpenMPI CUDA 5 readiness?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11476.php">Ralph Castain: "Re: [OMPI devel] trunk's mapping to nodes... local host"</a>
<li><strong>Reply:</strong> <a href="11476.php">Ralph Castain: "Re: [OMPI devel] trunk's mapping to nodes... local host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Maybe this is related to Reuti's &quot;-hostfile ignored in 1.6.1&quot; on the 
<br>
users mail list, but not quite sure.
<br>
<p>Let's pretend my nodes are called local, r1, and r2.  That is, I launch 
<br>
mpirun from &quot;local&quot; and there are two other (remote) nodes available to 
<br>
me.  With the trunk (e.g., v1.9 r27247), I get
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;% mpirun --bynode --nooversubscribe --host r1,r1,r1,r2,r2,r2 -n 6 
<br>
--tag-output hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1,0]&lt;stdout&gt;:r1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1,1]&lt;stdout&gt;:r2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1,2]&lt;stdout&gt;:r1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1,3]&lt;stdout&gt;:r2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1,4]&lt;stdout&gt;:r1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1,5]&lt;stdout&gt;:r2
<br>
<p>which seems right to me.  But when the local node is involved:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;% mpirun --bynode --nooversubscribe --host 
<br>
local,local,local,r1,r1,r1 -np 4 --tag-output hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1,0]&lt;stdout&gt;:local
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1,1]&lt;stdout&gt;:r1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1,2]&lt;stdout&gt;:r1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1,3]&lt;stdout&gt;:r1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;% mpirun --bynode --nooversubscribe --host 
<br>
local,local,local,r1,r1,r1 -np 5 --tag-output hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;There are not enough slots available in the system to satisfy the 5 
<br>
slots
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;that were requested by the application:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostname
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Either request fewer slots for your application, or make more slots 
<br>
available
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for use.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
--------------------------------------------------------------------------
<br>
<p>I'm not seeing all the local slots I should be seeing.  We're seeing 
<br>
wide-scale MTT trunk failures due to this problem.
<br>
<p>There is a similar loss of local slots with hostfile syntax.  E.g.,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;% hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;local
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;% cat               hostfile
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;local
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;% mpirun --hostfile hostfile -n 2 hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A hostfile was provided that contains at least one node not
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;present in the allocation:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostfile:  hostfile
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node:      local
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If you are operating in a resource-managed environment, then only
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nodes that are in the allocation can be used in the hostfile. You
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;may find relative node syntax to be a useful alternative to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;specifying absolute node names see the orte_hosts man page for
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;further information.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
--------------------------------------------------------------------------
<br>
<p>The problem is solved with &quot;--mca orte_default_hostname hostfile&quot;.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11476.php">Ralph Castain: "Re: [OMPI devel] trunk's mapping to nodes... local host"</a>
<li><strong>Previous message:</strong> <a href="11474.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] OpenMPI CUDA 5 readiness?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11476.php">Ralph Castain: "Re: [OMPI devel] trunk's mapping to nodes... local host"</a>
<li><strong>Reply:</strong> <a href="11476.php">Ralph Castain: "Re: [OMPI devel] trunk's mapping to nodes... local host"</a>
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
