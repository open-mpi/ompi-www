<?
$subject_val = "[OMPI users] OPEN MPI with self";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 18 11:36:47 2009" -->
<!-- isoreceived="20090818153647" -->
<!-- sent="Tue, 18 Aug 2009 15:36:42 +0000 (GMT)" -->
<!-- isosent="20090818153642" -->
<!-- name="Jean Potsam" -->
<!-- email="jeanpotsam_at_[hidden]" -->
<!-- subject="[OMPI users] OPEN MPI with self" -->
<!-- id="798118.88905.qm_at_web28307.mail.ukl.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OPEN MPI with self<br>
<strong>From:</strong> Jean Potsam (<em>jeanpotsam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-18 11:36:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10411.php">Craig Plaisance: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Previous message:</strong> <a href="10409.php">Scott Atchley: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10431.php">Josh Hursey: "Re: [OMPI users] OPEN MPI with self"</a>
<li><strong>Reply:</strong> <a href="10431.php">Josh Hursey: "Re: [OMPI users] OPEN MPI with self"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear ALL,
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; I am trying to checkpoint MPI application using the self&#160; component. I had a look at the OPEN MPI FT user's guide Draft 1.4. but is still unsure.
<br>
<p>I have installed openmpi as follows:
<br>
<p>jean$ ./configure --prefix=/home/jean/openmpi/&#160; --enable-debug --enable-mpi-profile --enable-mpi-cxx&#160; --enable-binaries --enable-trace --enable-static=yes --enable-debug --with-devel-headers=1 --with-mpi-param-check=always --with-ft=cr --enable-ft-thread --enable-mpi-threads=yes
<br>
<p>jean$ make all install
<br>
<p>MY questions are:
<br>
<p>Q1) Have I properly configured openmpi with self?
<br>
<p>In the document, it is said:
<br>
&quot;To be absolutely clear: these functions are to be provided by the application - they are not included in the open mpi library&quot;
<br>
<p>q2) Does this means that i will have to write my own checkpoint, continue and restart functions and fucntion calls?
<br>
<p>Q3) has anyone experienced with self checkpointing? I would really appreaciate if a guide could be available.
<br>
<p>Thanks a lot
<br>
<p>cheers
<br>
<p>JEan
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10410/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10411.php">Craig Plaisance: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Previous message:</strong> <a href="10409.php">Scott Atchley: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10431.php">Josh Hursey: "Re: [OMPI users] OPEN MPI with self"</a>
<li><strong>Reply:</strong> <a href="10431.php">Josh Hursey: "Re: [OMPI users] OPEN MPI with self"</a>
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
