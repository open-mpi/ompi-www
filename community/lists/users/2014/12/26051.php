<?
$subject_val = "[OMPI users] Question on Mapping and Binding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 22 11:32:46 2014" -->
<!-- isoreceived="20141222163246" -->
<!-- sent="Mon, 22 Dec 2014 11:32:46 -0500" -->
<!-- isosent="20141222163246" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="[OMPI users] Question on Mapping and Binding" -->
<!-- id="CA+ssbKW1+b+dM7QAQw2JWOGsGrcHyz2uGb+mqPvChOGQdYO+-A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Question on Mapping and Binding<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-22 11:32:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26052.php">Siegmar Gross: "[OMPI users] processes hang with openmpi-dev-602-g82c02b4"</a>
<li><strong>Previous message:</strong> <a href="26050.php">Saliya Ekanayake: "[OMPI users] Accessing Process Affinity within MPI Program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26053.php">Ralph Castain: "Re: [OMPI users] Question on Mapping and Binding"</a>
<li><strong>Reply:</strong> <a href="26053.php">Ralph Castain: "Re: [OMPI users] Question on Mapping and Binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've been using --map-by socket:PE=N, where N is used to control the number
<br>
of cores a proc gets mapped to. Does this also guarantee that a proc is
<br>
bound to N cores in the socket? I am asking this because I see some threads
<br>
spawned by the process run outside the given N cores in the socket.
<br>
<p>Is this expected or I guess I am missing some binding parameter here? Also,
<br>
is there some documentation on these different choices? Are the options in
<br>
[1] available in current release?
<br>
<p>[1]
<br>
<a href="http://www.slideshare.net/jsquyres/open-mpi-explorations-in-process-affinity-eurompi13-presentation">http://www.slideshare.net/jsquyres/open-mpi-explorations-in-process-affinity-eurompi13-presentation</a>
<br>
<p>Thank you,
<br>
Saliya
<br>
<p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington
Cell 812-391-4914
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26051/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26052.php">Siegmar Gross: "[OMPI users] processes hang with openmpi-dev-602-g82c02b4"</a>
<li><strong>Previous message:</strong> <a href="26050.php">Saliya Ekanayake: "[OMPI users] Accessing Process Affinity within MPI Program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26053.php">Ralph Castain: "Re: [OMPI users] Question on Mapping and Binding"</a>
<li><strong>Reply:</strong> <a href="26053.php">Ralph Castain: "Re: [OMPI users] Question on Mapping and Binding"</a>
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
