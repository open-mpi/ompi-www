<?
$subject_val = "[OMPI users] Environment variables [documentation]";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 27 06:43:02 2012" -->
<!-- isoreceived="20120227114302" -->
<!-- sent="Mon, 27 Feb 2012 12:42:57 +0100" -->
<!-- isosent="20120227114257" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI users] Environment variables [documentation]" -->
<!-- id="4F4B6C41.6040205_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> [OMPI users] Environment variables [documentation]<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-27 06:42:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18561.php">Ralph Castain: "Re: [OMPI users] Environment variables [documentation]"</a>
<li><strong>Previous message:</strong> <a href="18559.php">Beat Rubischon: "Re: [OMPI users] IMB-OpenMPI on Centos 6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18561.php">Ralph Castain: "Re: [OMPI users] Environment variables [documentation]"</a>
<li><strong>Reply:</strong> <a href="18561.php">Ralph Castain: "Re: [OMPI users] Environment variables [documentation]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI developer,
<br>
here:
<br>
<a href="http://www.open-mpi.org/faq/?category=running#mpi-environmental-variables">http://www.open-mpi.org/faq/?category=running#mpi-environmental-variables</a>
<br>
are enlisted four envvars Open MPI set for every process. We use they for some 
<br>
scripting and thank you for providing they.
<br>
<p>But simple &quot;mpiexec -np 1 env | grep OMPI&quot; brings lotz more envvars. These are 
<br>
interesting for us:
<br>
<p>1) OMPI_COMM_WORLD_LOCAL_SIZE - seem to contain the number of processes which 
<br>
are running on the specific node, see also
<br>
<a href="http://www.open-mpi.org/community/lists/users/2008/07/6054.php">http://www.open-mpi.org/community/lists/users/2008/07/6054.php</a>
<br>
<p>Is this envvar also &quot;stable&quot; as OMPI_COMM_WORLD_LOCAL_RANK is? (This would make 
<br>
sense as it looks like the  OMPI_COMM_WORLD_SIZE, OMPI_COMM_WORLD_RANK pair.)
<br>
<p>If yes, maybe it also should be documented in the Wiki page.
<br>
<p><p><p>2) OMPI_COMM_WORLD_NODE_RANK - is that just a double of 
<br>
OMPI_COMM_WORLD_LOCAL_RANK ?
<br>
<p>Best wishes,
<br>
Paul Kapinos
<br>
<p><p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18560/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18561.php">Ralph Castain: "Re: [OMPI users] Environment variables [documentation]"</a>
<li><strong>Previous message:</strong> <a href="18559.php">Beat Rubischon: "Re: [OMPI users] IMB-OpenMPI on Centos 6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18561.php">Ralph Castain: "Re: [OMPI users] Environment variables [documentation]"</a>
<li><strong>Reply:</strong> <a href="18561.php">Ralph Castain: "Re: [OMPI users] Environment variables [documentation]"</a>
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
