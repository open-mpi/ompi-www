<?
$subject_val = "[OMPI devel] New binding warnings in master";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 20 11:16:18 2015" -->
<!-- isoreceived="20150320151618" -->
<!-- sent="Fri, 20 Mar 2015 15:16:10 +0000" -->
<!-- isosent="20150320151610" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] New binding warnings in master" -->
<!-- id="54776244e2c24ebe95c301814a937fe3_at_HQMAIL102.nvidia.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] New binding warnings in master<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-20 11:16:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17141.php">Ralph Castain: "Re: [OMPI devel] New binding warnings in master"</a>
<li><strong>Previous message:</strong> <a href="17139.php">Ralph Castain: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17141.php">Ralph Castain: "Re: [OMPI devel] New binding warnings in master"</a>
<li><strong>Reply:</strong> <a href="17141.php">Ralph Castain: "Re: [OMPI devel] New binding warnings in master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings:
<br>
<p>I am now seeing the following message for all my calls to mpirun on ompi master.  This started with last night's MTT run.  Is this intentional?
<br>
<p><p>[rvandevaart_at_ivy0 ~]$ mpirun -np 1 hostname
<br>
--------------------------------------------------------------------------
<br>
WARNING: a request was made to bind a process. While the system
<br>
supports binding the process itself, at least one node does NOT
<br>
support binding memory to the process location.
<br>
<p>&nbsp;&nbsp;Node:  ivy0
<br>
<p>This usually is due to not having the required NUMA support installed
<br>
on the node. In some Linux distributions, the required support is
<br>
contained in the libnumactl and libnumactl-devel packages.
<br>
This is a warning only; your job will continue, though performance may be degraded.
<br>
--------------------------------------------------------------------------
<br>
ivy0.nvidia.com
<br>
<p><p><p>On another note, I noticed on both 1.8 and master that we get different number of nodes if we specify the hostname.  This is not too big a deal, but surprised me.
<br>
<p>[rvandevaart_at_ivy0 ~]$ /opt/openmpi/v1.8.4/bin/mpirun hostname
<br>
ivy0.nvidia.com
<br>
ivy0.nvidia.com
<br>
ivy0.nvidia.com
<br>
ivy0.nvidia.com
<br>
ivy0.nvidia.com
<br>
ivy0.nvidia.com
<br>
ivy0.nvidia.com
<br>
ivy0.nvidia.com
<br>
ivy0.nvidia.com
<br>
ivy0.nvidia.com
<br>
ivy0.nvidia.com
<br>
ivy0.nvidia.com
<br>
ivy0.nvidia.com
<br>
ivy0.nvidia.com
<br>
ivy0.nvidia.com
<br>
ivy0.nvidia.com
<br>
ivy0.nvidia.com
<br>
ivy0.nvidia.com
<br>
ivy0.nvidia.com
<br>
ivy0.nvidia.com
<br>
[rvandevaart_at_ivy0 ~]$ /opt/openmpi/v1.8.4/bin/mpirun -host ivy0 hostname
<br>
ivy0.nvidia.com
<br>
[rvandevaart_at_ivy0 ~]$
<br>
<p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17140/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17141.php">Ralph Castain: "Re: [OMPI devel] New binding warnings in master"</a>
<li><strong>Previous message:</strong> <a href="17139.php">Ralph Castain: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17141.php">Ralph Castain: "Re: [OMPI devel] New binding warnings in master"</a>
<li><strong>Reply:</strong> <a href="17141.php">Ralph Castain: "Re: [OMPI devel] New binding warnings in master"</a>
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
