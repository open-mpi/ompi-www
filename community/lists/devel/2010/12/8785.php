<?
$subject_val = "[OMPI devel]  Problems with Connect/Accept and Disconnect";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 17 07:28:31 2010" -->
<!-- isoreceived="20101217122831" -->
<!-- sent="Fri, 17 Dec 2010 13:28:25 +0100" -->
<!-- isosent="20101217122825" -->
<!-- name="Suraj Prabhakaran" -->
<!-- email="suraj.prabhakaran_at_[hidden]" -->
<!-- subject="[OMPI devel]  Problems with Connect/Accept and Disconnect" -->
<!-- id="4D0B5769.1040406_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D0B53E2.9040909_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel]  Problems with Connect/Accept and Disconnect<br>
<strong>From:</strong> Suraj Prabhakaran (<em>suraj.prabhakaran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-17 07:28:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8786.php">N.M. Maclaren: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<li><strong>Previous message:</strong> <a href="8784.php">Suraj Prabhakaran: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<li><strong>In reply to:</strong> <a href="8784.php">Suraj Prabhakaran: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8806.php">Suraj Prabhakaran: "[OMPI devel]  Connect/Accept and Disconnect"</a>
<li><strong>Reply:</strong> <a href="8806.php">Suraj Prabhakaran: "[OMPI devel]  Connect/Accept and Disconnect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have been having some problems with connect and disconnect between two 
<br>
processes. The processes seem to be indefinitely blocking at 
<br>
Connect/Accept stage or at Disconnect stage. For example
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
or A is busy doing its something2 while B blocks. Perhaps there is any 
<br>
work around for this already?
<br>
<p>Thanks,
<br>
Suraj
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8785/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8786.php">N.M. Maclaren: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<li><strong>Previous message:</strong> <a href="8784.php">Suraj Prabhakaran: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<li><strong>In reply to:</strong> <a href="8784.php">Suraj Prabhakaran: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8806.php">Suraj Prabhakaran: "[OMPI devel]  Connect/Accept and Disconnect"</a>
<li><strong>Reply:</strong> <a href="8806.php">Suraj Prabhakaran: "[OMPI devel]  Connect/Accept and Disconnect"</a>
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
