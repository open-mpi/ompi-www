<?
$subject_val = "Re: [OMPI users] UDP like messaging with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 19 10:08:51 2011" -->
<!-- isoreceived="20111119150851" -->
<!-- sent="Sat, 19 Nov 2011 15:08:40 +0000 (GMT)" -->
<!-- isosent="20111119150840" -->
<!-- name="Lukas Razik" -->
<!-- email="linux_at_[hidden]" -->
<!-- subject="Re: [OMPI users] UDP like messaging with MPI" -->
<!-- id="1321715320.98908.YahooMailNeo_at_web24702.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1321712702.35618.YahooMailNeo_at_web121717.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] UDP like messaging with MPI<br>
<strong>From:</strong> Lukas Razik (<em>linux_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-19 10:08:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17789.php">MM: "Re: [OMPI users] vs2010: MPI_Address() unresolved"</a>
<li><strong>Previous message:</strong> <a href="17787.php">Mudassar Majeed: "[OMPI users] UDP like messaging with MPI"</a>
<li><strong>In reply to:</strong> <a href="17787.php">Mudassar Majeed: "[OMPI users] UDP like messaging with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17791.php">Mudassar Majeed: "Re: [OMPI users] UDP like messaging with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Mudassar,

I think you want an &quot;asynchronous communication&quot;.

Therefore you could use these functions:
<a href="http://mpi.deino.net/mpi_functions/MPI_Isend.html">http://mpi.deino.net/mpi_functions/MPI_Isend.html</a>
<a href="http://mpi.deino.net/mpi_functions/MPI_Irecv.html">http://mpi.deino.net/mpi_functions/MPI_Irecv.html</a>
<a href="http://supercomputingblog.com/mpi/mpi-tutorial-5-asynchronous-communication/">http://supercomputingblog.com/mpi/mpi-tutorial-5-asynchronous-communication/</a>


Best regards and good speed!

Lukas





&gt;________________________________
&gt; Von: Mudassar Majeed &lt;mudassarm30_at_[hidden]&gt;
&gt;An: &quot;users_at_[hidden]&quot; &lt;users_at_[hidden]&gt; 
&gt;Gesendet: 15:25 Samstag, 19.November 2011
&gt;Betreff: [OMPI users] UDP like messaging with MPI
&gt; 
&gt;
&gt;Dear all, 
&gt;
&gt;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; I want to use MPI_Send just like UDP messaging. Let say I have 100 MPI processes such that any MPI process can send message to any other MPI process and the messages get added in the queue and when that process performs the receive operation it simply gets the message from the queue. Please help me in that.
&gt;
&gt;
&gt;regards,
&gt;Mudassar
&gt;&#160;
&gt;Life is the name of establishing a clear balance between hard work and praying to God for success. The one who could find out and order the major milestones of life in a proper way and acted upon them is successful. Faith in, and obedience to Allah, one's values, contribution for (nation, family &amp; human beings), career, earning, extra activities and hobbies.... The best ordered list of milestones of life...!!!
&gt;
&gt;_______________________________________________
&gt;users mailing list
&gt;users_at_[hidden]
&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17788/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17789.php">MM: "Re: [OMPI users] vs2010: MPI_Address() unresolved"</a>
<li><strong>Previous message:</strong> <a href="17787.php">Mudassar Majeed: "[OMPI users] UDP like messaging with MPI"</a>
<li><strong>In reply to:</strong> <a href="17787.php">Mudassar Majeed: "[OMPI users] UDP like messaging with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17791.php">Mudassar Majeed: "Re: [OMPI users] UDP like messaging with MPI"</a>
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
