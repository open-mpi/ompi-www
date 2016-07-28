<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  8 12:02:27 2007" -->
<!-- isoreceived="20070208170227" -->
<!-- sent="Thu, 8 Feb 2007 12:02:22 -0500" -->
<!-- isosent="20070208170222" -->
<!-- name="Alex Tumanov" -->
<!-- email="atumanov_at_[hidden]" -->
<!-- subject="[OMPI users] NetPipe benchmark &amp;amp; spanning multiple interconnects" -->
<!-- id="2453e2900702080902j3cef9a3fu35ef8520c4e6b3f2_at_mail.gmail.com" -->
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
<strong>From:</strong> Alex Tumanov (<em>atumanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-08 12:02:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2644.php">George Bosilca: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<li><strong>Previous message:</strong> <a href="2642.php">Ralph H Castain: "Re: [OMPI users] Does Open MPI  &quot;Realy&quot; support AIX?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2644.php">George Bosilca: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<li><strong>Reply:</strong> <a href="2644.php">George Bosilca: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff. Thanks for pointing out NetPipe to me. I've played around
<br>
with it a little in hope to see clear evidence/effect of message
<br>
striping in OpenMPI. Unfortunately, what I saw is that the result of
<br>
running NPmpi over several interconnects is identical to running it
<br>
over a single fastest one :-( That was not the expected behavior, and
<br>
I'm hoping that I'm doing something wrong. I'm using NetPIPE_3.6.2
<br>
over OMPI 1.1.4. NetPipe was compiled by making sure Open MPI's mpicc
<br>
can be found and simply  running 'make mpi' under NetPIPE_3.6.2
<br>
directory.
<br>
<p>I experimented with 3 interconnects: openib, gm, and gig-e.
<br>
Specifically, I found that the times (and, correspondingly, bandwidth)
<br>
reported for openib+gm is pretty much identical to the times reported
<br>
for just openib. Here are the commands I used to initiate the
<br>
benchmark:
<br>
<p>#  mpirun -H f0-0,c0-0 --prefix $MPIHOME --mca btl openib,gm,self
<br>
~/NPmpi &gt; ~/testdir/ompi/netpipe/ompi_netpipe_openib+gm.log 2&gt;&amp;1
<br>
#  mpirun -H f0-0,c0-0 --prefix $MPIHOME --mca btl openib,self ~/NPmpi
<br>
<span class="quotelev1">&gt; ompi_netpipe_openib.log 2&gt;&amp;1
</span><br>
<p>Similarly, for tcp+gm the reported times were identical to just
<br>
running the benchmark over gm alone. The commands were:
<br>
#  mpirun -H f0-0,c0-0 --prefix $MPIHOME --mca btl tcp,gm,self --mca
<br>
btl_tcp_if_exclude lo,ib0,ib1 ~/NPmpi
<br>
#  mpirun -H f0-0,c0-0 --prefix $MPIHOME --mca btl gm,self ~/NPmpi
<br>
<p>Orthogonally, I've also observed that trying to use any combination of
<br>
interconnects that includes openib (except using it exclusively) fails
<br>
as soon as the benchmark reaches trials with 1.5MB message sizes. In
<br>
fact the CPU load remained at 100% on the headnode, but no further
<br>
output is sent to the log file or the screen (see the tails below).
<br>
This behavior is fairly consistent and may be of interest to Open MPI
<br>
development community. If anybody has tried using openib in
<br>
combination with other interconnects please let me know what issues
<br>
you've encountered and what tips and tricks you could share in this
<br>
regard.
<br>
<p>Many thanks. Keep up the good work!
<br>
<p>Sincerely,
<br>
Alex.
<br>
<p>Tails (the log file name reflects the combination of interconnects in
<br>
that CL order):
<br>
# tail ompi_netpipe_gm+openib.log
<br>
101:  786432 bytes     38 times --&gt;   3582.46 Mbps in    1674.83 usec
<br>
102:  786435 bytes     39 times --&gt;   3474.50 Mbps in    1726.87 usec
<br>
103: 1048573 bytes     19 times --&gt;   3592.47 Mbps in    2226.87 usec
<br>
104: 1048576 bytes     22 times --&gt;   3515.15 Mbps in    2275.86 usec
<br>
105: 1048579 bytes     21 times --&gt;   3480.22 Mbps in    2298.71 usec
<br>
106: 1572861 bytes     21 times --&gt;   4174.76 Mbps in    2874.41 usec
<br>
107: 1572864 bytes     23 times --&gt; mpirun: killing job...
<br>
<p># tail ompi_netpipe_openib+gm.log
<br>
100:  786429 bytes     45 times --&gt;   3477.98 Mbps in    1725.13 usec
<br>
101:  786432 bytes     38 times --&gt;   3578.94 Mbps in    1676.47 usec
<br>
102:  786435 bytes     39 times --&gt;   3480.66 Mbps in    1723.82 usec
<br>
103: 1048573 bytes     19 times --&gt;   3594.26 Mbps in    2225.76 usec
<br>
104: 1048576 bytes     22 times --&gt;   3517.46 Mbps in    2274.37 usec
<br>
105: 1048579 bytes     21 times --&gt;   3482.13 Mbps in    2297.45 usec
<br>
106: 1572861 bytes     21 times --&gt; mpirun: killing job...
<br>
<p># tail ompi_netpipe_openib+tcp+gm.log
<br>
100:  786429 bytes     45 times --&gt;   3481.45 Mbps in    1723.41 usec
<br>
101:  786432 bytes     38 times --&gt;   3575.83 Mbps in    1677.93 usec
<br>
102:  786435 bytes     39 times --&gt;   3479.05 Mbps in    1724.61 usec
<br>
103: 1048573 bytes     19 times --&gt;   3589.68 Mbps in    2228.61 usec
<br>
104: 1048576 bytes     22 times --&gt;   3517.96 Mbps in    2274.05 usec
<br>
105: 1048579 bytes     21 times --&gt;   3484.12 Mbps in    2296.14 usec
<br>
106: 1572861 bytes     21 times --&gt; mpirun: killing job...
<br>
<p># tail -5 ompi_netpipe_openib.log
<br>
119: 6291456 bytes      5 times --&gt;   4036.63 Mbps in   11891.10 usec
<br>
120: 6291459 bytes      5 times --&gt;   4005.81 Mbps in   11982.61 usec
<br>
121: 8388605 bytes      3 times --&gt;   4033.78 Mbps in   15866.00 usec
<br>
122: 8388608 bytes      3 times --&gt;   4025.50 Mbps in   15898.66 usec
<br>
123: 8388611 bytes      3 times --&gt;   4017.58 Mbps in   15929.98 usec
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2644.php">George Bosilca: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<li><strong>Previous message:</strong> <a href="2642.php">Ralph H Castain: "Re: [OMPI users] Does Open MPI  &quot;Realy&quot; support AIX?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2644.php">George Bosilca: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<li><strong>Reply:</strong> <a href="2644.php">George Bosilca: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
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
