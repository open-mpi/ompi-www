<?
$subject_val = "[OMPI users] mpi and open-mpi newbie question - connect btl choices";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 14:18:51 2014" -->
<!-- isoreceived="20140715181851" -->
<!-- sent="Tue, 15 Jul 2014 11:15:57 -0700" -->
<!-- isosent="20140715181557" -->
<!-- name="Amy Hawke" -->
<!-- email="amy.hawke_at_[hidden]" -->
<!-- subject="[OMPI users] mpi and open-mpi newbie question - connect btl choices" -->
<!-- id="1405448157.34208.YahooMailNeo_at_web122505.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BOZO" -->
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
<strong>Subject:</strong> [OMPI users] mpi and open-mpi newbie question - connect btl choices<br>
<strong>From:</strong> Amy Hawke (<em>amy.hawke_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-15 14:15:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24775.php">Elken, Tom: "Re: [OMPI users] Running OSU benchmark latency test with Open MPI version 1.6.5 and version 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24773.php">Na Zhang: "Re: [OMPI users] Running OSU benchmark latency test with Open MPI version 1.6.5 and version 1.8.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,

I'm new to mpi and open-mpi. All in the same day is testing me. My thought is to compare openmpi to shared mem for ad-hoc inter-process channels on the same machine.

I've created a couple of little examples of a publisher and subscriber using MPI_Comm_accept and MPI_Comm_connect. (Ubuntu 14.04 with openmpi 1.8.1)&#160; Send and recv works ok.&#160; The travel time from process to process reports numbers like this from my demo:
&#160; travel time = 46.648068 microseconds
&#160; travel time = 34.275774 microseconds
Which is OK as it seems to be using TCP for the transport on the same machine.&#160;

Open-mpi is certainly nice and easy to get started. Thank you for the cool messaging!

A simple UDP localhost channel without MPI is about 10 us on this machine.

My question is how do I get this accept/connect channel set up for shared memory instead of tcp? A little google got me a little lost on where to begin. A quick pointer where to look and read would be much appreciated.

I'm interested in how low I can push the latency down inter-process.

If I do something similar with traditional MPI static processes rather than dyanmic/connect it chooses sm as the transport and gives latencies as expected:
&#160; travel time = 300.776560 nanoseconds

&#160; travel time = 286.763106 nanoseconds

Which is quite impressive of open-mpi for my little desktop i7. Any help in understanding how to get similar numbers for the MPI_Comm_accept case would be most welcome!

Kind regards,

Amy.

_______________________
I'm playing around with: ompi-server --no-daemonize -r -

My publisher has a:&#160;

&#160; &#160;MPI_Comm_accept(port_name, MPI_INFO_NULL, 0, MPI_COMM_SELF, &amp;channel );
&#160; &#160;...
&#160; &#160;MPI_Send(&amp;mess, sizeof(message_t), MPI_BYTE, 0, 0, channel);

My subscriber has a:
&#160; &#160; MPI_Comm_connect(port_name, MPI_INFO_NULL, 0, MPI_COMM_SELF, &amp;channel );
&#160; &#160; ...
&#160; &#160; MPI_Recv(buffer, 1024, MPI_BYTE, 0, 0, channel, MPI_STATUS_IGNORE );

Yes, I should use real MPI structures, but this will do for a test I hope.

The client test runs like this:&#160;
mpirun -np 1&#160; --ompi-server &quot;3997171712.0;tcp://10.12.14.12:57523&quot; ./mpi_client_test.helper
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24775.php">Elken, Tom: "Re: [OMPI users] Running OSU benchmark latency test with Open MPI version 1.6.5 and version 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24773.php">Na Zhang: "Re: [OMPI users] Running OSU benchmark latency test with Open MPI version 1.6.5 and version 1.8.1"</a>
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
