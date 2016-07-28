<?
$subject_val = "[OMPI users] Communication Round-trip time";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  8 22:59:21 2012" -->
<!-- isoreceived="20121009025921" -->
<!-- sent="Tue, 9 Oct 2012 10:59:17 +0800" -->
<!-- isosent="20121009025917" -->
<!-- name="huydanlin" -->
<!-- email="huydanlin_at_[hidden]" -->
<!-- subject="[OMPI users] Communication Round-trip time" -->
<!-- id="CAFAp2dLFJtsg5+LMd0yP59+xA1hXK+6VmthO8Mu83SuVMzsBug_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Communication Round-trip time<br>
<strong>From:</strong> huydanlin (<em>huydanlin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-08 22:59:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20425.php">Jeff Squyres: "Re: [OMPI users] Communication Round-trip time"</a>
<li><strong>Previous message:</strong> <a href="20423.php">Ralph Castain: "Re: [OMPI users] [threads] How to configure Open MPI for thread support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20425.php">Jeff Squyres: "Re: [OMPI users] Communication Round-trip time"</a>
<li><strong>Reply:</strong> <a href="20425.php">Jeff Squyres: "Re: [OMPI users] Communication Round-trip time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;I'm currently doing MPI project in NUS University. My professor require
<br>
me make a monitoring tool to check the connection among processes in
<br>
Cluster. And also measure communication round-trip time.
<br>
&nbsp;&nbsp;&nbsp;My solution is :
<br>
1. At the source process : start MPI_Send
<br>
2. At the destination process : start MPI_Recv to receive the message from
<br>
source
<br>
3. At the destination process : start MPI_Send to send immediately the same
<br>
message to source
<br>
4. At the source process : start MPI_Recv to receive the message from
<br>
destination
<br>
&nbsp;&nbsp;&nbsp;I start timer( before (1) - t1=MPI_Wtime &amp; after (4) - t2=MPI_Wtime )
<br>
&nbsp;&nbsp;&nbsp;then t2 - t1 is time for communication. I also do (1) to (4) for N
<br>
times. then i calculate the avg round-trip time by (t2-t1)/N.
<br>
&nbsp;&nbsp;&nbsp;So is it right? Because he tells it 's wrong. And what exactly is the
<br>
communication round-trip time ?
<br>
&nbsp;&nbsp;Regards and hope to see your reply soon.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20424/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20425.php">Jeff Squyres: "Re: [OMPI users] Communication Round-trip time"</a>
<li><strong>Previous message:</strong> <a href="20423.php">Ralph Castain: "Re: [OMPI users] [threads] How to configure Open MPI for thread support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20425.php">Jeff Squyres: "Re: [OMPI users] Communication Round-trip time"</a>
<li><strong>Reply:</strong> <a href="20425.php">Jeff Squyres: "Re: [OMPI users] Communication Round-trip time"</a>
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
