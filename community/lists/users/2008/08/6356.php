<?
$subject_val = "[OMPI users] Newbie: API usage";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 15 18:17:34 2008" -->
<!-- isoreceived="20080815221734" -->
<!-- sent="Fri, 15 Aug 2008 17:17:28 -0500" -->
<!-- isosent="20080815221728" -->
<!-- name="Hartzman, Les (MS)" -->
<!-- email="Les.Hartzman_at_[hidden]" -->
<!-- subject="[OMPI users] Newbie: API usage" -->
<!-- id="01B49D24DCA6104D925B3BCAC891D08C118C53_at_XMBTX133.northgrum.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Newbie: API usage<br>
<strong>From:</strong> Hartzman, Les (MS) (<em>Les.Hartzman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-15 18:17:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6357.php">Daniël Mantione: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<li><strong>Previous message:</strong> <a href="6355.php">Kozin, I \(Igor\): "[OMPI users] problem with alltoall with ppn=8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6358.php">Jeff Squyres: "Re: [OMPI users] Newbie: API usage"</a>
<li><strong>Reply:</strong> <a href="6358.php">Jeff Squyres: "Re: [OMPI users] Newbie: API usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm looking over some MPI code and saw something that concerned me.
<br>
Being a bit new to MPI I don't know if this is a bug or &quot;normal'.
<br>
<p>A call to MPI_Isend was made and followed by an MPI_Reqest_free on the
<br>
exact same request handle used in the Isend call. I saw the same thing
<br>
for ISsend.
<br>
<p>Is this normal or is the person/persons doing this taking changes that
<br>
all will work without ever checking for the completion of the issued
<br>
Sends?
<br>
<p>Thanks in advance.
<br>
<p>Les
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6356/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6357.php">Daniël Mantione: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<li><strong>Previous message:</strong> <a href="6355.php">Kozin, I \(Igor\): "[OMPI users] problem with alltoall with ppn=8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6358.php">Jeff Squyres: "Re: [OMPI users] Newbie: API usage"</a>
<li><strong>Reply:</strong> <a href="6358.php">Jeff Squyres: "Re: [OMPI users] Newbie: API usage"</a>
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
