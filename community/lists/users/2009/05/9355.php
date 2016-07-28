<?
$subject_val = "[OMPI users] scaling problem with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 15 18:21:03 2009" -->
<!-- isoreceived="20090515222103" -->
<!-- sent="Sat, 16 May 2009 00:20:58 +0200" -->
<!-- isosent="20090515222058" -->
<!-- name="Roman Martonak" -->
<!-- email="r.martonak_at_[hidden]" -->
<!-- subject="[OMPI users] scaling problem with openmpi" -->
<!-- id="d21ea44c0905151520r1d365880h21b7fd4d1e8e4c09_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] scaling problem with openmpi<br>
<strong>From:</strong> Roman Martonak (<em>r.martonak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-15 18:20:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9356.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9354.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9356.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9356.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I observe very poor scaling with openmpi on HP blade system consisting
<br>
of 8 blades (each having 2 quad-core AMD Barcelona 2.2 GHz CPU) and
<br>
interconnected with Infiniband fabric. When running the standard cpmd
<br>
32 waters test, I observe the following scaling (the numbers are
<br>
elapsed time)
<br>
<p>openmpi-1.2.6:
<br>
<p>using full blades (8 cores per blade)
<br>
np8            7 MINUTES 26.40 SECONDS
<br>
np16        4 MINUTES 19.91 SECONDS
<br>
np32        2 MINUTES 55.51 SECONDS
<br>
np48            2 MINUTES 38.18 SECONDS
<br>
np64            3 MINUTES 19.78 SECONDS
<br>
<p>I tried also openmpi-1.2.8 and openmpi-1.3 and it is about the same,
<br>
openmpi-1.3 is somewhat better for 32 cores but in all cases there is
<br>
practically no scaling beyond 4 blades (32 cores) and running on 64
<br>
cores is a disaster. With Intel MPI, however, I get the following
<br>
numbers
<br>
<p>Intel MPI-3.2.1.009
<br>
<p>using full blades (8 cores per blade)
<br>
np8    7 MINUTES 23.19 SECONDS
<br>
np16    4 MINUTES 22.17 SECONDS
<br>
np32    2 MINUTES 50.07 SECONDS
<br>
np48    1 MINUTES 42.87 SECONDS
<br>
np64    1 MINUTES 23.76 SECONDS
<br>
<p>so there is reasonably good scaling up to 64 cores. I am running with
<br>
the option
<br>
--mca mpi_paffinity_alone 1, I have tried also -mca btl_openib_use_srq
<br>
1 but it had only marginal effect. With mvapich I get similar scaling
<br>
as with Intel MPI. The system is running the Rocksclusters
<br>
distribution 5.1 with the mellanox ofed-1.4 roll. I would be grateful
<br>
if somebody could suggest me what could be the origin of the problem
<br>
and how to tune openmpi to get better scaling.
<br>
<p>Many thanks in advance.
<br>
<p>Best regards
<br>
<p>Roman
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9356.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9354.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9356.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9356.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
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
