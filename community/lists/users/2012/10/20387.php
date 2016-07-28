<?
$subject_val = "Re: [OMPI users] Need solution- nodes can't find the paths.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  3 06:42:02 2012" -->
<!-- isoreceived="20121003104202" -->
<!-- sent="Wed, 3 Oct 2012 11:41:26 +0100" -->
<!-- isosent="20121003104126" -->
<!-- name="John Hearns" -->
<!-- email="hearnsj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need solution- nodes can't find the paths." -->
<!-- id="CAPqNE2WsOPb1e+Hw52izL3VD58jOPsKiaaRnr-+F1QJANZ0D-A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMvdAsJmVagneFWh+L1nfi80o5NeLwGzOX=anUxquC26Ysavow_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Need solution- nodes can't find the paths.<br>
<strong>From:</strong> John Hearns (<em>hearnsj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-03 06:41:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20388.php">John Hearns: "Re: [OMPI users] Need solution- nodes can't find the paths."</a>
<li><strong>Previous message:</strong> <a href="20386.php">Siegmar Gross: "[OMPI users] problem with rankfile and openmpi-1.6.2"</a>
<li><strong>In reply to:</strong> <a href="20385.php">Syed Ahsan Ali: "Re: [OMPI users] Need solution- nodes can't find the paths."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20388.php">John Hearns: "Re: [OMPI users] Need solution- nodes can't find the paths."</a>
<li><strong>Reply:</strong> <a href="20388.php">John Hearns: "Re: [OMPI users] Need solution- nodes can't find the paths."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Data is large and cannot be copied to the local drives od the compute
<br>
nodes as the data is large.
<br>
<p>I understand that.
<br>
I think that you have storage attached to your cluster head node - the
<br>
'SAN storage' you refer to.
<br>
Lets' call that volume   /data
<br>
<p>All you need to do is edit the /etc/exports file on the cluster head node,
<br>
and include the name of that storage area.  Just cut and paste one of
<br>
the other lines inthe file, which will have a definition of the IP
<br>
Address range of
<br>
the cluster nodes and the mount parameters.
<br>
<p>On all the cluster nodes, you will need to run a command    'mkdir /data/
<br>
The create a new  /etc/fstab file with an additional line which
<br>
contains   /data  and the name of the cluster head node
<br>
You will then have to update the node image with this new /etc/fstab,
<br>
or push the /etc/fstab out to all compute nodes
<br>
finally run the command  'mount /data/ on all compute nodes.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20388.php">John Hearns: "Re: [OMPI users] Need solution- nodes can't find the paths."</a>
<li><strong>Previous message:</strong> <a href="20386.php">Siegmar Gross: "[OMPI users] problem with rankfile and openmpi-1.6.2"</a>
<li><strong>In reply to:</strong> <a href="20385.php">Syed Ahsan Ali: "Re: [OMPI users] Need solution- nodes can't find the paths."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20388.php">John Hearns: "Re: [OMPI users] Need solution- nodes can't find the paths."</a>
<li><strong>Reply:</strong> <a href="20388.php">John Hearns: "Re: [OMPI users] Need solution- nodes can't find the paths."</a>
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
