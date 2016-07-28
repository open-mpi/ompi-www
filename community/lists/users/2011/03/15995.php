<?
$subject_val = "[OMPI users] Shared Memory Problem.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 26 13:34:48 2011" -->
<!-- isoreceived="20110326173448" -->
<!-- sent="Sat, 26 Mar 2011 18:34:43 +0100" -->
<!-- isosent="20110326173443" -->
<!-- name="Michele Marena" -->
<!-- email="michelemarena_at_[hidden]" -->
<!-- subject="[OMPI users] Shared Memory Problem." -->
<!-- id="AANLkTi=iOz5830nAZ5K3f8huccFNcrKCthLodZoexsB3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Shared Memory Problem.<br>
<strong>From:</strong> Michele Marena (<em>michelemarena_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-26 13:34:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15996.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Previous message:</strong> <a href="15994.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15997.php">Ralph Castain: "Re: [OMPI users] Shared Memory Problem."</a>
<li><strong>Reply:</strong> <a href="15997.php">Ralph Castain: "Re: [OMPI users] Shared Memory Problem."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I've a problem with shared memory. When my application runs using pure
<br>
message passing (one process for node), it terminates and returns correct
<br>
results. When 2 processes share a node and use shared memory for exchanges
<br>
messages, my application don't terminate. At shell I write &quot;mpirun -nolocal
<br>
--mca self,sm,tcp ... (forces interface to eth0)... -np (number of
<br>
processes) executable arguments&quot;.
<br>
<p>I hope you help me.
<br>
I thank you.
<br>
Michele
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15995/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15996.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Previous message:</strong> <a href="15994.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15997.php">Ralph Castain: "Re: [OMPI users] Shared Memory Problem."</a>
<li><strong>Reply:</strong> <a href="15997.php">Ralph Castain: "Re: [OMPI users] Shared Memory Problem."</a>
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
