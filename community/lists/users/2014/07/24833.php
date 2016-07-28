<?
$subject_val = "[OMPI users] Errors for openib, mpirun fails";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 21 03:17:42 2014" -->
<!-- isoreceived="20140721071742" -->
<!-- sent="Mon, 21 Jul 2014 12:17:41 +0500" -->
<!-- isosent="20140721071741" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="[OMPI users] Errors for openib, mpirun fails" -->
<!-- id="CAMvdAs+RGDf3dyUPGoPKYWBxkRM5f7LzgrvZiBT07j5LmSiRtw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Errors for openib, mpirun fails<br>
<strong>From:</strong> Syed Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-21 03:17:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24834.php">Dirk Schubert: "Re: [OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)"</a>
<li><strong>Previous message:</strong> <a href="24832.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24835.php">Shamis, Pavel: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<li><strong>Reply:</strong> <a href="24835.php">Shamis, Pavel: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All
<br>
<p>I need your help to solve this cluster related issue causing mpirun
<br>
malfunction. I get following warning for some of the nodes and then the
<br>
route failure message comes causing failure to mpirun.
<br>
<p><p><p>*WARNING: There is at least one OpenFabrics device found but there are no
<br>
active ports detected (or Open MPI was unable to use them).  This*
<br>
<p>*is most certainly not what you wanted.  Check your cables, subnet*
<br>
<p>*manager configuration, etc.  The openib BTL will be ignored for this*
<br>
<p>*job.*
<br>
<p>*   Local host: compute-01-01.private.dns.zone*
<br>
<p>*--------------------------------------------------------------------------*
<br>
<p>*   SETUP OF THE LM*
<br>
<p>*     INITIALIZATIONS *
<br>
<p>*     INPUT OF THE NAMELISTS*
<br>
<p>*[pmd.pakmet.com:30198 &lt;<a href="http://pmd.pakmet.com:30198">http://pmd.pakmet.com:30198</a>&gt;] 7 more processes have
<br>
sent help message help-mpi-btl-openib.txt / no active ports found*
<br>
<p>*[pmd.pakmet.com:30198 &lt;<a href="http://pmd.pakmet.com:30198">http://pmd.pakmet.com:30198</a>&gt;] Set MCA parameter
<br>
&quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages*
<br>
<p>*[compute-01-00.private.dns.zone][[40500,1],5][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 192.168.108.14 failed: No route to host (113)*
<br>
<p>*[compute-01-00.private.dns.zone][[40500,1],4][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 192.168.108.14 failed: No route to host (113)*
<br>
<p>*My questions are.*
<br>
<p>I don't include flags for running openmpi over infiniband then why it still
<br>
gives warning. If the infiniband ports are not active then it should start
<br>
the job over gigabit ethernet of cluster. Why it is unable to find the
<br>
route while the node can be pinged and ssh from other nodes and master node
<br>
as well.
<br>
<p>The ibstatus of the above node (for which I was getting error) shows that
<br>
both ports are up. What is causing error then?
<br>
<p><p>[root_at_compute-01-00 ~]# ibstatus
<br>
Infiniband device 'mlx4_0' port 1 status:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default gid:     fe80:0000:0000:0000:0024:e890:97ff:1c61
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;base lid:        0x5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm lid:          0x1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:           4: ACTIVE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys state:      5: LinkUp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rate:            20 Gb/sec (4X DDR)
<br>
Infiniband device 'mlx4_0' port 2 status:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default gid:     fe80:0000:0000:0000:0024:e890:97ff:1c62
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;base lid:        0x0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm lid:          0x0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:           2: INIT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys state:      5: LinkUp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rate:            20 Gb/sec (4X DDR)
<br>
<p><p>Thank you in advance for your guidance and support.
<br>
<p>Regards
<br>
<p><pre>
-- 
Ahsan
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24833/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24834.php">Dirk Schubert: "Re: [OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)"</a>
<li><strong>Previous message:</strong> <a href="24832.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24835.php">Shamis, Pavel: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<li><strong>Reply:</strong> <a href="24835.php">Shamis, Pavel: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
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
