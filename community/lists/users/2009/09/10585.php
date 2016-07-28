<?
$subject_val = "[OMPI users] OMPI Connection Retry Policy";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  8 06:16:22 2009" -->
<!-- isoreceived="20090908101622" -->
<!-- sent="Tue, 8 Sep 2009 06:11:14 -0400" -->
<!-- isosent="20090908101114" -->
<!-- name="Charles Salvia" -->
<!-- email="chsalvia_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI Connection Retry Policy" -->
<!-- id="afc7dbc60909080311u33fc9877rb20735eac277222c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OMPI Connection Retry Policy<br>
<strong>From:</strong> Charles Salvia (<em>chsalvia_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-08 06:11:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10586.php">George Bosilca: "Re: [OMPI users] OMPI Connection Retry Policy"</a>
<li><strong>Previous message:</strong> <a href="10584.php">Christophe Peyret: "[OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.058 =&gt; Segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10586.php">George Bosilca: "Re: [OMPI users] OMPI Connection Retry Policy"</a>
<li><strong>Reply:</strong> <a href="10586.php">George Bosilca: "Re: [OMPI users] OMPI Connection Retry Policy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
According to the OpenMPI FAQ, OpenMPI creates point-to-point socket
<br>
connections &quot;lazily&quot;, i.e. only when needed.
<br>
<p>I have a few questions about this, and how it affect program performance.
<br>
<p>1) Does this mean that MPI_Send will call connect() if necessary, and
<br>
MPI_Recv will call accept()?
<br>
<p>2) If so, what is the policy for dealing with the race condition where one
<br>
process calls connect() before the destination process is listening with
<br>
accept()?  Is there a retry interval?  And if so, how long is the interval
<br>
and how many times will it retry?  I ask because I want to know how much of
<br>
a performance impact this has.
<br>
<p>3) I'm confused as to something the FAQ says regarding this issue.  The
<br>
OpenMPI FAQ says &quot;Open MPI opens sockets as they are required -- so the
<br>
first time a process sends a message to a peer and there is a TCP connection
<br>
between the two, Open MPI will automatically open a new socket.&quot;  Shouldn't
<br>
this read &quot;so the first time a process sends a message to a peer and there
<br>
is *NO* TCP connection between the two&quot;?  Or am I misunderstanding something
<br>
here?
<br>
<p>I appreciate any feed back regarding this issue.
<br>
Thanks,
<br>
<p>Charles Salvia
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10585/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10586.php">George Bosilca: "Re: [OMPI users] OMPI Connection Retry Policy"</a>
<li><strong>Previous message:</strong> <a href="10584.php">Christophe Peyret: "[OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.058 =&gt; Segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10586.php">George Bosilca: "Re: [OMPI users] OMPI Connection Retry Policy"</a>
<li><strong>Reply:</strong> <a href="10586.php">George Bosilca: "Re: [OMPI users] OMPI Connection Retry Policy"</a>
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
