<?
$subject_val = "Re: [OMPI users] Accessing to the send buffer";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 18 12:38:03 2010" -->
<!-- isoreceived="20100818163803" -->
<!-- sent="Wed, 18 Aug 2010 12:37:56 -0400" -->
<!-- isosent="20100818163756" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Accessing to the send buffer" -->
<!-- id="OF62709B2D.8F054EC2-ON85257783.005B1460-85257783.005B5E08_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4C6C0588.7030702_at_idra.unipd.it" -->
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
<strong>Subject:</strong> Re: [OMPI users] Accessing to the send buffer<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-18 12:37:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14071.php">stabeek: "[OMPI users] mem lock limit &amp; ulimit"</a>
<li><strong>Previous message:</strong> <a href="14069.php">Alberto Canestrelli: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>In reply to:</strong> <a href="14069.php">Alberto Canestrelli: "Re: [OMPI users] Accessing to the send buffer"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As of MPI 2.2 there is no longer a restriction against read access to a 
<br>
live send buffer.  The wording was changed to now prohibit the user to 
<br>
&quot;modify&quot;.  You can look the subsection of Communication Modes in chapter 3 
<br>
but you will need to compare MPI 2.1 and 2.2 carefully to see the change.
<br>
<p>The change was done by the MPI Forum under Ticket 45.
<br>
<p><p>Dick Treumann  -  MPI Team 
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14070/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14071.php">stabeek: "[OMPI users] mem lock limit &amp; ulimit"</a>
<li><strong>Previous message:</strong> <a href="14069.php">Alberto Canestrelli: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>In reply to:</strong> <a href="14069.php">Alberto Canestrelli: "Re: [OMPI users] Accessing to the send buffer"</a>
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
