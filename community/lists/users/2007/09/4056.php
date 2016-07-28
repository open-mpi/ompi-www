<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 25 05:24:15 2007" -->
<!-- isoreceived="20070925092415" -->
<!-- sent="Tue, 25 Sep 2007 12:24:07 +0300" -->
<!-- isosent="20070925092407" -->
<!-- name="Olli-Pekka Lehto" -->
<!-- email="oplehto_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI on Cray XT4 CNL" -->
<!-- id="46F8D3B7.4060301_at_csc.fi" -->
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
<strong>From:</strong> Olli-Pekka Lehto (<em>oplehto_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-25 05:24:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4057.php">Rayne: "[OMPI users] readv failed with errno=104"</a>
<li><strong>Previous message:</strong> <a href="4055.php">Michael Clover: "[OMPI users] sed: 33: ...: unescaped newline inside substitute pattern"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4059.php">Richard Graham: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<li><strong>Reply:</strong> <a href="4059.php">Richard Graham: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Has anyone experimented with building OpenMPI for Cray XT4 with Compute 
<br>
Node Linux (CNL) OS? My first attempt to build it out-of-the-box using 
<br>
the '--with-portals-config=xt3' switch failed with the complaint:
<br>
<p>In file included from common_portals.c:30:
<br>
common_portals_crayxt3.c:19:35: catamount/cnos_mpi_os.h: No such file or 
<br>
directory
<br>
<p>It would be great to get this working because it could potentially allow 
<br>
for cross-platform compatibility for parallel applications between our 
<br>
clusters and XT4 in the future.
<br>
<p>best regards,
<br>
Olli-Pekka
<br>
<pre>
-- 
Olli-Pekka Lehto, Systems Specialist, Special Computing, CSC
PO Box 405 02101 Espoo, Finland; tel +358 9 457 2215, fax +358 9 4572302
CSC is the Finnish IT Center for Science, www.csc.fi,
e-mail: Olli-Pekka.Lehto_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4057.php">Rayne: "[OMPI users] readv failed with errno=104"</a>
<li><strong>Previous message:</strong> <a href="4055.php">Michael Clover: "[OMPI users] sed: 33: ...: unescaped newline inside substitute pattern"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4059.php">Richard Graham: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<li><strong>Reply:</strong> <a href="4059.php">Richard Graham: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
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
