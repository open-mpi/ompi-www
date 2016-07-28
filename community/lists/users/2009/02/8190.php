<?
$subject_val = "[OMPI users] 3.5 seconds before application launches";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 19:42:26 2009" -->
<!-- isoreceived="20090225004226" -->
<!-- sent="Wed, 25 Feb 2009 01:42:21 +0100" -->
<!-- isosent="20090225004221" -->
<!-- name="Vittorio" -->
<!-- email="vitto.giova_at_[hidden]" -->
<!-- subject="[OMPI users] 3.5 seconds before application launches" -->
<!-- id="4de51c660902241642w63fb0235x998bb89ffbae641e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] 3.5 seconds before application launches<br>
<strong>From:</strong> Vittorio (<em>vitto.giova_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-24 19:42:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8191.php">Ralph Castain: "Re: [OMPI users] New User question"</a>
<li><strong>Previous message:</strong> <a href="8189.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3:"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8203.php">doriankrause: "Re: [OMPI users] 3.5 seconds before application launches"</a>
<li><strong>Reply:</strong> <a href="8203.php">doriankrause: "Re: [OMPI users] 3.5 seconds before application launches"</a>
<li><strong>Maybe reply:</strong> <a href="8240.php">Vittorio Giovara: "Re: [OMPI users] 3.5 seconds before application launches"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
I'm using OpenMPI 1.3 on two nodes connected with Infiniband; i'm using
<br>
Gentoo Linux x86_64.
<br>
<p>I've noticed that before any application starts there is a variable amount
<br>
of time (around 3.5 seconds) in which the terminal just hangs with no output
<br>
and then the application starts and works well.
<br>
<p>I imagined that there might have been some initialization routine somewhere
<br>
in the Infiniband layer or in the software stack, but as i continued my
<br>
tests i observed that this &quot;latency&quot; time is not present in other MPI
<br>
implementations (like mvapich2) where my application starts immediately (but
<br>
performs worse).
<br>
<p>Is my MPI configuration/installation broken or is this expected behaviour?
<br>
thanks a lot!
<br>
Vittorio
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8190/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8191.php">Ralph Castain: "Re: [OMPI users] New User question"</a>
<li><strong>Previous message:</strong> <a href="8189.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3:"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8203.php">doriankrause: "Re: [OMPI users] 3.5 seconds before application launches"</a>
<li><strong>Reply:</strong> <a href="8203.php">doriankrause: "Re: [OMPI users] 3.5 seconds before application launches"</a>
<li><strong>Maybe reply:</strong> <a href="8240.php">Vittorio Giovara: "Re: [OMPI users] 3.5 seconds before application launches"</a>
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
