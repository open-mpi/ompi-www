<?
$subject_val = "Re: [OMPI users] pbs vs openmpi node allocation";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  3 13:23:32 2015" -->
<!-- isoreceived="20150803172332" -->
<!-- sent="Mon, 3 Aug 2015 17:23:29 +0000" -->
<!-- isosent="20150803172329" -->
<!-- name="Andrus, Brian Contractor" -->
<!-- email="bdandrus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pbs vs openmpi node allocation" -->
<!-- id="ADC981242279AD408816CB7141A2789DD7906BED_at_GROWLER.ern.nps.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CA+DemH_mghWFHnChKC4q2dDwkLNBMXP8K3RGgxOUDUC=xzH8iA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] pbs vs openmpi node allocation<br>
<strong>From:</strong> Andrus, Brian Contractor (<em>bdandrus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-03 13:23:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27385.php">Gus Correa: "Re: [OMPI users] pbs vs openmpi node allocation"</a>
<li><strong>Previous message:</strong> <a href="27383.php">abhisek Mondal: "[OMPI users] pbs vs openmpi node allocation"</a>
<li><strong>In reply to:</strong> <a href="27383.php">abhisek Mondal: "[OMPI users] pbs vs openmpi node allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27385.php">Gus Correa: "Re: [OMPI users] pbs vs openmpi node allocation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Abhisek,
<br>

<br>
Generally, if you built openmpi with PBS support, it will automatically using the appropriate nodes with &#226;&#128;&#152;mpirun &lt;application&gt;&#226;&#128;&#153;
<br>
If not, you can use the environment variables provided to your session:
<br>

<br>
mpirun --hostfile $PBS_NODEFILE -np $(cat $PBS_NODEFILE|wc -l) &lt;application&gt;
<br>

<br>

<br>
Brian Andrus
<br>
ITACS/Research Computing
<br>
Naval Postgraduate School
<br>
Monterey, California
<br>
voice: 831-656-6238
<br>

<br>

<br>

<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of abhisek Mondal
<br>
Sent: Monday, August 03, 2015 10:00 AM
<br>
To: Open MPI Users
<br>
Subject: [OMPI users] pbs vs openmpi node allocation
<br>

<br>
Hi,
<br>

<br>
&nbsp;&nbsp;I'm using openmpi-1.6.4 to distribute a jobs in 2 different nodes using this command:
<br>
&quot;mpirun --hostfile myhostfile -np 10 nwchem my_code.nw&quot;
<br>
Here, &quot;myhostfile&quot; contains:
<br>
cx0937 slots=5
<br>
cx0934 slots=5
<br>

<br>
But as I have to submit the jobs using .pbs script, I'm wondering in this case, how &quot;mpirun&quot; going to choose the node (free node allocation is done by pbs) from &quot;myhostfile&quot;.
<br>
I mean, does it happen that until the specific-nodes (as mentioned in myhostfile) become free &quot;mpirun&quot; is going to wait and then start ?
<br>
How can I forward the allocated node name(by pbs) to mpirun command ?
<br>

<br>
A little light on this matter would be really great.
<br>

<br>
Thank you.
<br>

<br>
--
<br>
Abhisek Mondal
<br>
Research Fellow
<br>
Structural Biology and Bioinformatics
<br>
Indian Institute of Chemical Biology
<br>
Kolkata 700032
<br>
INDIA
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27384/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27385.php">Gus Correa: "Re: [OMPI users] pbs vs openmpi node allocation"</a>
<li><strong>Previous message:</strong> <a href="27383.php">abhisek Mondal: "[OMPI users] pbs vs openmpi node allocation"</a>
<li><strong>In reply to:</strong> <a href="27383.php">abhisek Mondal: "[OMPI users] pbs vs openmpi node allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27385.php">Gus Correa: "Re: [OMPI users] pbs vs openmpi node allocation"</a>
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
