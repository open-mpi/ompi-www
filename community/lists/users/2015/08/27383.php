<?
$subject_val = "[OMPI users] pbs vs openmpi node allocation";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  3 12:59:31 2015" -->
<!-- isoreceived="20150803165931" -->
<!-- sent="Mon, 3 Aug 2015 22:29:30 +0530" -->
<!-- isosent="20150803165930" -->
<!-- name="abhisek Mondal" -->
<!-- email="abhisek.mndl_at_[hidden]" -->
<!-- subject="[OMPI users] pbs vs openmpi node allocation" -->
<!-- id="CA+DemH_mghWFHnChKC4q2dDwkLNBMXP8K3RGgxOUDUC=xzH8iA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] pbs vs openmpi node allocation<br>
<strong>From:</strong> abhisek Mondal (<em>abhisek.mndl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-03 12:59:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27384.php">Andrus, Brian Contractor: "Re: [OMPI users] pbs vs openmpi node allocation"</a>
<li><strong>Previous message:</strong> <a href="27382.php">Gilles Gouaillardet: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27384.php">Andrus, Brian Contractor: "Re: [OMPI users] pbs vs openmpi node allocation"</a>
<li><strong>Reply:</strong> <a href="27384.php">Andrus, Brian Contractor: "Re: [OMPI users] pbs vs openmpi node allocation"</a>
<li><strong>Reply:</strong> <a href="27385.php">Gus Correa: "Re: [OMPI users] pbs vs openmpi node allocation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;&nbsp;I'm using openmpi-1.6.4 to distribute a jobs in 2 different nodes using
<br>
this command:
<br>
*&quot;mpirun --hostfile myhostfile -np 10 nwchem my_code.nw&quot;*
<br>
Here, &quot;myhostfile&quot; contains:
<br>
*cx0937 slots=5    *
<br>
*cx0934 slots=5*
<br>
<p>But as I have to submit the jobs using .pbs script, I'm wondering in this
<br>
case, how &quot;mpirun&quot; going to choose the node (free node allocation is done
<br>
by pbs) from &quot;myhostfile&quot;.
<br>
I mean, does it happen that until the specific-nodes (as mentioned in
<br>
myhostfile) become free &quot;mpirun&quot; is going to wait and then start ?
<br>
How can I forward the allocated node name(by pbs) to *mpirun* command ?
<br>
<p>A little light on this matter would be really great.
<br>
<p>Thank you.
<br>
<p><pre>
-- 
Abhisek Mondal
*Research Fellow*
*Structural Biology and Bioinformatics*
*Indian Institute of Chemical Biology*
*Kolkata 700032*
*INDIA*
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27383/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27384.php">Andrus, Brian Contractor: "Re: [OMPI users] pbs vs openmpi node allocation"</a>
<li><strong>Previous message:</strong> <a href="27382.php">Gilles Gouaillardet: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27384.php">Andrus, Brian Contractor: "Re: [OMPI users] pbs vs openmpi node allocation"</a>
<li><strong>Reply:</strong> <a href="27384.php">Andrus, Brian Contractor: "Re: [OMPI users] pbs vs openmpi node allocation"</a>
<li><strong>Reply:</strong> <a href="27385.php">Gus Correa: "Re: [OMPI users] pbs vs openmpi node allocation"</a>
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
