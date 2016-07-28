<?
$subject_val = "[OMPI users] Openmpi 1.8 &quot;rmaps seq&quot; doesn't work";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  6 22:17:13 2014" -->
<!-- isoreceived="20140407021713" -->
<!-- sent="Mon, 7 Apr 2014 10:17:10 +0800" -->
<!-- isosent="20140407021710" -->
<!-- name="Chen Bill" -->
<!-- email="billchen001_at_[hidden]" -->
<!-- subject="[OMPI users] Openmpi 1.8 &amp;quot;rmaps seq&amp;quot; doesn't work" -->
<!-- id="CADMff4Odzuw-M5Ui_3QraBdy1PRE1VhLWyOqi=fos1kQd9g5tw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Openmpi 1.8 &quot;rmaps seq&quot; doesn't work<br>
<strong>From:</strong> Chen Bill (<em>billchen001_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-06 22:17:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24071.php">Zehan Cui: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<li><strong>Previous message:</strong> <a href="24069.php">Filippo Spiga: "[OMPI users] OpenMPI 1.8.0 + PGI 13.6 = undeclared variable __LDBL_MANT_DIG__"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24077.php">Ralph Castain: "Re: [OMPI users] Openmpi 1.8 &quot;rmaps seq&quot; doesn't work"</a>
<li><strong>Reply:</strong> <a href="24077.php">Ralph Castain: "Re: [OMPI users] Openmpi 1.8 &quot;rmaps seq&quot; doesn't work"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi ,
<br>
<p>I just tried the openmpi 1.8, but I found the feature --mca rmaps seq
<br>
doesn't work.
<br>
<p>for example,
<br>
<p><span class="quotelev1">&gt;mpirun -np 4 -hostfile hostsfle --mca rmaps seq hostname
</span><br>
<p>It shows below error,
<br>
<p>--------------------------------------------------------------------------
<br>
Your job failed to map. Either no mapper was available, or none
<br>
of the available mappers was able to perform the requested
<br>
mapping operation. This can happen if you request a map type
<br>
(e.g., loadbalance) and the corresponding mapper was not built.
<br>
--------------------------------------------------------------------------
<br>
<p>but when I use ompi_info ,it shows has this feature
<br>
<p><p><span class="quotelev1">&gt;ompi_info |grep -i rmaps
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: lama (MCA v2.0, API v2.0, Component v1.8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: mindist (MCA v2.0, API v2.0, Component v1.8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: ppr (MCA v2.0, API v2.0, Component v1.8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*         MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.8)*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: staged (MCA v2.0, API v2.0, Component v1.8)
<br>
<p>Any suggestions?
<br>
<p>Many thanks,
<br>
Bill
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24070/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24071.php">Zehan Cui: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<li><strong>Previous message:</strong> <a href="24069.php">Filippo Spiga: "[OMPI users] OpenMPI 1.8.0 + PGI 13.6 = undeclared variable __LDBL_MANT_DIG__"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24077.php">Ralph Castain: "Re: [OMPI users] Openmpi 1.8 &quot;rmaps seq&quot; doesn't work"</a>
<li><strong>Reply:</strong> <a href="24077.php">Ralph Castain: "Re: [OMPI users] Openmpi 1.8 &quot;rmaps seq&quot; doesn't work"</a>
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
