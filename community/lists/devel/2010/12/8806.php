<?
$subject_val = "[OMPI devel]  Connect/Accept and Disconnect";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 21 08:41:55 2010" -->
<!-- isoreceived="20101221134155" -->
<!-- sent="Tue, 21 Dec 2010 14:41:46 +0100" -->
<!-- isosent="20101221134146" -->
<!-- name="Suraj Prabhakaran" -->
<!-- email="suraj.prabhakaran_at_[hidden]" -->
<!-- subject="[OMPI devel]  Connect/Accept and Disconnect" -->
<!-- id="4D10AE9A.7080202_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D0B5769.1040406_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel]  Connect/Accept and Disconnect<br>
<strong>From:</strong> Suraj Prabhakaran (<em>suraj.prabhakaran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-21 08:41:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8807.php">Ralph Castain: "Re: [OMPI devel] Connect/Accept and Disconnect"</a>
<li><strong>Previous message:</strong> <a href="8805.php">William George: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>In reply to:</strong> <a href="8785.php">Suraj Prabhakaran: "[OMPI devel]  Problems with Connect/Accept and Disconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8807.php">Ralph Castain: "Re: [OMPI devel] Connect/Accept and Disconnect"</a>
<li><strong>Reply:</strong> <a href="8807.php">Ralph Castain: "Re: [OMPI devel] Connect/Accept and Disconnect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>This is basically a repost of my previous mail regarding problems with 
<br>
connect/accept and disconnect (**this is not related to spawning, 
<br>
parent/child**).
<br>
I *sometimes* find processes blocking indefinitely at Connect/Accept 
<br>
calls or at Disconnect calls. I have an example below.
<br>
<p>Process A
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Open_port(...);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Publish_name(...);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_accept(... &amp;b_comm);  // -----&gt; (1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Do something1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_disconnect(&amp;b_comm);  // ------&gt; (2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Do something2
<br>
<p>}
<br>
<p>Process B
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Lookup_name(...);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_connect(... &amp;a_comm); // -----&gt; (1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Do something1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_disconnect(&amp;a_comm); // ------&gt; (2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Do something2
<br>
}
<br>
<p>In the above scenario, in a perfect case where A reaches (1) without any 
<br>
problems, **sometimes** B blocks at its (1) indefinitely. All arguments 
<br>
passed to both the functions are perfect.
<br>
Again, **sometimes** one of them block infinitely at (2) while the other 
<br>
goes on to do the something2. This could only be a problem at the 
<br>
application level only if the one that blocks indefinitely is always the 
<br>
same but it is not so. Sometimes A blocks and B is busy doing something2 
<br>
or A is busy doing its something2 while B blocks.
<br>
<p>Is this a known issue? or am I the only person experiencing this and is 
<br>
clean for others who frequently use connect/accept/disconnect calls?
<br>
<p>Thanks,
<br>
Suraj
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8806/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8807.php">Ralph Castain: "Re: [OMPI devel] Connect/Accept and Disconnect"</a>
<li><strong>Previous message:</strong> <a href="8805.php">William George: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>In reply to:</strong> <a href="8785.php">Suraj Prabhakaran: "[OMPI devel]  Problems with Connect/Accept and Disconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8807.php">Ralph Castain: "Re: [OMPI devel] Connect/Accept and Disconnect"</a>
<li><strong>Reply:</strong> <a href="8807.php">Ralph Castain: "Re: [OMPI devel] Connect/Accept and Disconnect"</a>
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
