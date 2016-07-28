<?
$subject_val = "[OMPI users] Sharing (not copying) data with OpenMPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 16 09:52:44 2012" -->
<!-- isoreceived="20120416135244" -->
<!-- sent="Mon, 16 Apr 2012 15:52:40 +0200" -->
<!-- isosent="20120416135240" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="[OMPI users] Sharing (not copying) data with OpenMPI?" -->
<!-- id="CAKbzMGdS31eMng2aaPX3hRYxAWb9291OsdmzRdRLTToY4vndEw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Sharing (not copying) data with OpenMPI?<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-16 09:52:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19016.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Previous message:</strong> <a href="19014.php">Jeffrey Squyres: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19017.php">Ralph Castain: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="19017.php">Ralph Castain: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="19020.php">George Bosilca: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>In my application i have to generate a large block of data (several
<br>
gigs) which subsequently has to be accessed by all processes (read
<br>
only),
<br>
Because of its size, it would take quite some time to serialize and
<br>
send the data to the different processes. Furthermore, i risk
<br>
running out of memory if this data is instantiated more than once on
<br>
one machine.
<br>
<p>Does OpenMPI offer some way of sharing data between processes (on the
<br>
same machine) without needing to send (and therefore copy) it?
<br>
<p>Or would i have to do this by means of creating shared memory, writing
<br>
to it, and then make it accessible for reading by the processes?
<br>
<p>Thank You
<br>
&nbsp;&nbsp;Jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19016.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Previous message:</strong> <a href="19014.php">Jeffrey Squyres: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19017.php">Ralph Castain: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="19017.php">Ralph Castain: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="19020.php">George Bosilca: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
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
