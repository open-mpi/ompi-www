<?
$subject_val = "[OMPI users] Add/remove &quot;Event Listeners&quot; in MPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 13 02:16:19 2012" -->
<!-- isoreceived="20121113071619" -->
<!-- sent="Tue, 13 Nov 2012 15:16:14 +0800" -->
<!-- isosent="20121113071614" -->
<!-- name="Lim Jiew Meng" -->
<!-- email="jiewmeng_at_[hidden]" -->
<!-- subject="[OMPI users] Add/remove &amp;quot;Event Listeners&amp;quot; in MPI?" -->
<!-- id="CAOzCuScRStWwA3Bgo6VoqWADXfBaPb7oKQ+rb4pWO48S4L0SvA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Add/remove &quot;Event Listeners&quot; in MPI?<br>
<strong>From:</strong> Lim Jiew Meng (<em>jiewmeng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-13 02:16:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20709.php">утс║: "[OMPI users] MPI_Recv MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="20707.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re:  gathering problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What I want to achieve is something like:
<br>
<p>&nbsp;&nbsp;&nbsp;- root process listens to children process
<br>
&nbsp;&nbsp;&nbsp;- children will listen to root for stop notification
<br>
&nbsp;&nbsp;&nbsp;- children starts doing work
<br>
&nbsp;&nbsp;&nbsp;- when 1st child completes, notify root
<br>
&nbsp;&nbsp;&nbsp;- root then notifies all processes to stop
<br>
<p>How can I implement something like this in (Open)MPI/C++?
<br>
<p>Listen will be something similar to IRecv? But how do I cancel those IRecv
<br>
later?
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20708/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20709.php">утс║: "[OMPI users] MPI_Recv MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="20707.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re:  gathering problem"</a>
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
