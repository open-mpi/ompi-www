<?
$subject_val = "[OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 20 07:39:16 2011" -->
<!-- isoreceived="20111120123916" -->
<!-- sent="Sun, 20 Nov 2011 04:39:07 -0800 (PST)" -->
<!-- isosent="20111120123907" -->
<!-- name="Mudassar Majeed" -->
<!-- email="mudassarm30_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe" -->
<!-- id="1321792747.6279.YahooMailNeo_at_web121703.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe<br>
<strong>From:</strong> Mudassar Majeed (<em>mudassarm30_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-20 07:39:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17794.php">Lukas Razik: "Re: [OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe"</a>
<li><strong>Previous message:</strong> <a href="17792.php">Lukas Razik: "Re: [OMPI users] UDP like messaging with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17794.php">Lukas Razik: "Re: [OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe"</a>
<li><strong>Reply:</strong> <a href="17794.php">Lukas Razik: "Re: [OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear people, 
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; I have a scenario as shown below, please tell me if it is possible or not


------------------------------------------------------------------
while(!IsDone)
{

// some code here

MPI_Irecv( .......... );

// some code here

MPI_Iprobe( ........., &amp;is_there_a_message);

if(is_there_a_message)
&#160;&#160;&#160; MPI_Wait( ....... );

// move forward ... some other code here....

}
--------------------------------------------------------------------

My scenario is an asynchronous communication where some other process may or may not send a message to this process, will MPI_Iprobe find out whether it is necessary to call MPI_Wait() 
or not ? because if we do not do this the process may start waiting for a message that may not come and will block. 

regards,
Mudassar
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17793/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17794.php">Lukas Razik: "Re: [OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe"</a>
<li><strong>Previous message:</strong> <a href="17792.php">Lukas Razik: "Re: [OMPI users] UDP like messaging with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17794.php">Lukas Razik: "Re: [OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe"</a>
<li><strong>Reply:</strong> <a href="17794.php">Lukas Razik: "Re: [OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe"</a>
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
