<?
$subject_val = "[OMPI users] Using Open MPI for creating services";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  7 03:36:21 2013" -->
<!-- isoreceived="20130807073621" -->
<!-- sent="Wed, 07 Aug 2013 09:36:16 +0200" -->
<!-- isosent="20130807073616" -->
<!-- name="Mads" -->
<!-- email="mads_at_[hidden]" -->
<!-- subject="[OMPI users] Using Open MPI for creating services" -->
<!-- id="5da6470a13fbb134869fa2528e2c2223_at_ab3.no" -->
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
<strong>Subject:</strong> [OMPI users] Using Open MPI for creating services<br>
<strong>From:</strong> Mads (<em>mads_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-07 03:36:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22453.php">RoboBeans: "[OMPI users] openmpi-1.7.2 rpm"</a>
<li><strong>Previous message:</strong> <a href="22451.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>I'm currently looking into Open MPI to see if there's a way to use the 
<br>
framework for writing persistent services. With services I mean services 
<br>
published with MPI_Publish_name, connected to from clients with 
<br>
MPI_Lookup_name / MPI_Comm_connect (then doing simple Send/Receive for 
<br>
now).
<br>
<p>Getting the Publish/Lookup/Connect thing working isn't that hard - what 
<br>
I wonder is:
<br>
<p>- Is it possible to structure a server program using Open MPI to accept 
<br>
an arbritrary amount of client connections? If so, how? Using threads?
<br>
<p>- How can you deal with unexpected terminations of clients and/or 
<br>
servers? If a server program crashes, is it possible to start a new 
<br>
instance of it connecting to the same ompi-server URI, and make it take 
<br>
over the current published service? Or is this a task for some kind of 
<br>
checkpoint/restore technique...? (I haven't managed to take over a 
<br>
published service from a crashed server program in any way yet, it seems 
<br>
there's some permission issue if you publish the same service twice)
<br>
<p>- Is it possible for a server to handle unclean client disconnects in 
<br>
any way? (Clients not running Finalize(), lost connectivity etc). Maybe 
<br>
by registering an error handler in a way?
<br>
<p>If anyone has any input on these issues, it would be greatly 
<br>
appreciated :) Not asking for source code examples, but maybe some 
<br>
pseudo code and/or explaining of what techniques you could utilize to 
<br>
achieve something like a persistent service - if it's possible at all :)
<br>
<p>I found this interesting paper on the subject at 
<br>
www.mcs.anl.gov/~thakur/papers/mpi-servers.pdf&#226;&#128;&#142;, but it only talks about 
<br>
the possibilities, not so much implementation details.
<br>
<p><p>Best regards,
<br>
<p>Mads L&#195;&#184;nsethagen
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22453.php">RoboBeans: "[OMPI users] openmpi-1.7.2 rpm"</a>
<li><strong>Previous message:</strong> <a href="22451.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<!-- nextthread="start" -->
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
