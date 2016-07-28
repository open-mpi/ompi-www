<?
$subject_val = "[OMPI users] Strange &quot;All-to-All&quot; behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 26 18:15:06 2013" -->
<!-- isoreceived="20130426221506" -->
<!-- sent="Fri, 26 Apr 2013 15:14:59 -0700" -->
<!-- isosent="20130426221459" -->
<!-- name="Stephan Wolf" -->
<!-- email="wolfst_at_[hidden]" -->
<!-- subject="[OMPI users] Strange &amp;quot;All-to-All&amp;quot; behavior" -->
<!-- id="CA+3Wo4dT_Dwi74YnPP4L81LmYgahctCShArXiE3gBkdOVTryyg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Strange &quot;All-to-All&quot; behavior<br>
<strong>From:</strong> Stephan Wolf (<em>wolfst_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-26 18:14:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21809.php">George Bosilca: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<li><strong>Previous message:</strong> <a href="21807.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21809.php">George Bosilca: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<li><strong>Reply:</strong> <a href="21809.php">George Bosilca: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<li><strong>Reply:</strong> <a href="21810.php">George Bosilca: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<li><strong>Reply:</strong> <a href="21811.php">Sebastian Rettenberger: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<li><strong>Reply:</strong> <a href="21839.php">Number Cruncher: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<li><strong>Reply:</strong> <a href="21840.php">Number Cruncher: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have encountered really bad performance when all the nodes send data
<br>
to all the other nodes. I use Isend and Irecv with multiple
<br>
outstanding sends per node. I debugged the behavior and came to the
<br>
following conclusion: It seems that one sender locks out all other
<br>
senders for one receiver. This sender releases the receiver only when
<br>
there are no more sends posted or a node with lower rank, wants to
<br>
send to this node (deadlock prevention). As a consequence, node 0
<br>
sends all its data to all nodes, while all others are waiting, then
<br>
node 1 sends all the data, &#226;&#128;&#166;
<br>
<p>What is the rationale behind this behaviour and can I change it by
<br>
some MCA parameter?
<br>
<p>Thanks
<br>
<p>Stephan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21809.php">George Bosilca: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<li><strong>Previous message:</strong> <a href="21807.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21809.php">George Bosilca: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<li><strong>Reply:</strong> <a href="21809.php">George Bosilca: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<li><strong>Reply:</strong> <a href="21810.php">George Bosilca: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<li><strong>Reply:</strong> <a href="21811.php">Sebastian Rettenberger: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<li><strong>Reply:</strong> <a href="21839.php">Number Cruncher: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<li><strong>Reply:</strong> <a href="21840.php">Number Cruncher: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
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
