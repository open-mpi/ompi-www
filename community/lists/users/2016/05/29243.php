<?
$subject_val = "[OMPI users] The effect of --bind-to in the presence of PE=N in --map-by";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 15:06:08 2016" -->
<!-- isoreceived="20160519190608" -->
<!-- sent="Thu, 19 May 2016 15:06:07 -0400" -->
<!-- isosent="20160519190607" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="[OMPI users] The effect of --bind-to in the presence of PE=N in --map-by" -->
<!-- id="CA+ssbKV1HkaaBR=QC-3dNDdwNWH9=pSTifj0dfboBxf6PBx-_w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] The effect of --bind-to in the presence of PE=N in --map-by<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-19 15:06:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29244.php">Ralph Castain: "Re: [OMPI users] The effect of --bind-to in the presence of PE=N in --map-by"</a>
<li><strong>Previous message:</strong> <a href="29242.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29244.php">Ralph Castain: "Re: [OMPI users] The effect of --bind-to in the presence of PE=N in --map-by"</a>
<li><strong>Reply:</strong> <a href="29244.php">Ralph Castain: "Re: [OMPI users] The effect of --bind-to in the presence of PE=N in --map-by"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I understand --map-by will determine the process placement whereas
<br>
--bind-to will keep the processes pinned to the given resource. If this
<br>
understanding is correct, then I've got a doubt with the following.
<br>
<p>On a node with 2 sockets and 12 cores each,
<br>
<p>--map-by ppr:3:socket,PE=4  --bind-to socket
<br>
<p>My understanding is that this will give each process 4 cores. Now, with
<br>
bind to socket, does that mean it's possible that within a socket the
<br>
assgined 4 cores for a process may change? Or will they stay in the same 4
<br>
cores always?
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
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29243/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29244.php">Ralph Castain: "Re: [OMPI users] The effect of --bind-to in the presence of PE=N in --map-by"</a>
<li><strong>Previous message:</strong> <a href="29242.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() small issue with mutex destruction"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29244.php">Ralph Castain: "Re: [OMPI users] The effect of --bind-to in the presence of PE=N in --map-by"</a>
<li><strong>Reply:</strong> <a href="29244.php">Ralph Castain: "Re: [OMPI users] The effect of --bind-to in the presence of PE=N in --map-by"</a>
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
