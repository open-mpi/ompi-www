<?
$subject_val = "[OMPI users] ofa-default-subnet-gid";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 14:45:28 2008" -->
<!-- isoreceived="20080221194528" -->
<!-- sent="Thu, 21 Feb 2008 14:45:16 -0500" -->
<!-- isosent="20080221194516" -->
<!-- name="Bill Wichser" -->
<!-- email="bill_at_[hidden]" -->
<!-- subject="[OMPI users] ofa-default-subnet-gid" -->
<!-- id="47BDD4CC.9020500_at_princeton.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8B9101BC-A214-482E-AEDA-0FFC5F558564_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI users] ofa-default-subnet-gid<br>
<strong>From:</strong> Bill Wichser (<em>bill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-21 14:45:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5061.php">George Bosilca: "Re: [OMPI users] ofa-default-subnet-gid"</a>
<li><strong>Previous message:</strong> <a href="5059.php">R.C.Pasianot: "Re: [OMPI users] Specifying -wdir"</a>
<li><strong>In reply to:</strong> <a href="5018.php">David Gunter: "[OMPI users] Info needed for building Open-MPI against external ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5061.php">George Bosilca: "Re: [OMPI users] ofa-default-subnet-gid"</a>
<li><strong>Reply:</strong> <a href="5061.php">George Bosilca: "Re: [OMPI users] ofa-default-subnet-gid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In trying to get openmpi up and running on a new cluster, I came across 
<br>
this error about having both of my IB switches set to the same 
<br>
subnet-gid.  Snooping around on my hosts which run the opensm daemon, I 
<br>
indeed found this to be the case in the /var/log/osm-ib[0-1].log files, 
<br>
giving up finding it with ibstat which showed these values to be 
<br>
different, at least the second part of the GID.
<br>
<p>Before I try and pursue how to actually change this value for the opensm 
<br>
daemon, I do have a question.
<br>
<p>Since both of my hosts are connected to each switch, how am I to 
<br>
instruct openmpi to use port0?  I'm trying to use port0 as the MPI 
<br>
network and port1 as the storage network.  Is there something that I 
<br>
need to add someplace forcing connections only to some default-subnet-gid?
<br>
<p>Thanks,
<br>
Bill
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5061.php">George Bosilca: "Re: [OMPI users] ofa-default-subnet-gid"</a>
<li><strong>Previous message:</strong> <a href="5059.php">R.C.Pasianot: "Re: [OMPI users] Specifying -wdir"</a>
<li><strong>In reply to:</strong> <a href="5018.php">David Gunter: "[OMPI users] Info needed for building Open-MPI against external ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5061.php">George Bosilca: "Re: [OMPI users] ofa-default-subnet-gid"</a>
<li><strong>Reply:</strong> <a href="5061.php">George Bosilca: "Re: [OMPI users] ofa-default-subnet-gid"</a>
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
