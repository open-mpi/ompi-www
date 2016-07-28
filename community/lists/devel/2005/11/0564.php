<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 29 15:31:04 2005" -->
<!-- isoreceived="20051129203104" -->
<!-- sent="Tue, 29 Nov 2005 15:25:36 -0500" -->
<!-- isosent="20051129202536" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re:  TCP performance" -->
<!-- id="B718B52C-0DCA-4937-B22C-77A3F357B323_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="438C919A.5090108_at_lanl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-29 15:25:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0565.php">Tim S. Woodall: "Re:  TCP performance"</a>
<li><strong>Previous message:</strong> <a href="0563.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<li><strong>In reply to:</strong> <a href="0559.php">Tim S. Woodall: "Re:  TCP performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0565.php">Tim S. Woodall: "Re:  TCP performance"</a>
<li><strong>Reply:</strong> <a href="0565.php">Tim S. Woodall: "Re:  TCP performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tim,
<br>
<p>It looks a little bit better. Here are the latencies for 1 to 4 bytes  
<br>
messages as well as for the maximum length in Netpipe (8 MB).
<br>
<p>old ob1:
<br>
&nbsp;&nbsp;&nbsp;0:       1 bytes    694 times --&gt;      0.06 Mbps in     137.54 usec
<br>
&nbsp;&nbsp;&nbsp;1:       2 bytes    727 times --&gt;      0.11 Mbps in     140.54 usec
<br>
&nbsp;&nbsp;&nbsp;2:       3 bytes    711 times --&gt;      0.16 Mbps in     141.54 usec
<br>
&nbsp;&nbsp;&nbsp;3:       4 bytes    470 times --&gt;      0.22 Mbps in     140.55 usec
<br>
121: 8388605 bytes      3 times --&gt;    889.75 Mbps in   71929.97 usec
<br>
122: 8388608 bytes      3 times --&gt;    889.72 Mbps in   71932.47 usec
<br>
123: 8388611 bytes      3 times --&gt;    889.59 Mbps in   71943.16 usec
<br>
<p>new ob1:
<br>
&nbsp;&nbsp;&nbsp;0:       1 bytes    760 times --&gt;      0.07 Mbps in     116.08 usec
<br>
&nbsp;&nbsp;&nbsp;1:       2 bytes    861 times --&gt;      0.13 Mbps in     116.73 usec
<br>
&nbsp;&nbsp;&nbsp;2:       3 bytes    856 times --&gt;      0.20 Mbps in     116.69 usec
<br>
&nbsp;&nbsp;&nbsp;3:       4 bytes    571 times --&gt;      0.26 Mbps in     117.48 usec
<br>
121: 8388605 bytes      3 times --&gt;    890.37 Mbps in   71880.14 usec
<br>
122: 8388608 bytes      3 times --&gt;    890.33 Mbps in   71883.64 usec
<br>
123: 8388611 bytes      3 times --&gt;    890.40 Mbps in   71878.00 usec
<br>
<p>teg:
<br>
&nbsp;&nbsp;&nbsp;0:       1 bytes    867 times --&gt;      0.07 Mbps in     114.91 usec
<br>
&nbsp;&nbsp;&nbsp;1:       2 bytes    870 times --&gt;      0.13 Mbps in     115.99 usec
<br>
&nbsp;&nbsp;&nbsp;2:       3 bytes    862 times --&gt;      0.20 Mbps in     114.37 usec
<br>
&nbsp;&nbsp;&nbsp;3:       4 bytes    582 times --&gt;      0.26 Mbps in     115.20 usec
<br>
121: 8388605 bytes      3 times --&gt;    893.42 Mbps in   71634.49 usec
<br>
122: 8388608 bytes      3 times --&gt;    893.22 Mbps in   71651.18 usec
<br>
123: 8388611 bytes      3 times --&gt;    893.24 Mbps in   71649.35 usec
<br>
<p>uniq:
<br>
&nbsp;&nbsp;&nbsp;0:       1 bytes    870 times --&gt;      0.07 Mbps in     114.59 usec
<br>
&nbsp;&nbsp;&nbsp;1:       2 bytes    872 times --&gt;      0.13 Mbps in     114.20 usec
<br>
&nbsp;&nbsp;&nbsp;2:       3 bytes    875 times --&gt;      0.20 Mbps in     114.52 usec
<br>
&nbsp;&nbsp;&nbsp;3:       4 bytes    582 times --&gt;      0.27 Mbps in     113.70 usec
<br>
121: 8388605 bytes      3 times --&gt;    893.41 Mbps in   71635.64 usec
<br>
122: 8388608 bytes      3 times --&gt;    893.57 Mbps in   71623.01 usec
<br>
123: 8388611 bytes      3 times --&gt;    893.39 Mbps in   71637.67 usec
<br>
<p>raw tcp:
<br>
&nbsp;&nbsp;&nbsp;0:       1 bytes   1081 times --&gt;      0.08 Mbps in      90.74 usec
<br>
&nbsp;&nbsp;&nbsp;1:       2 bytes   1102 times --&gt;      0.17 Mbps in      90.88 usec
<br>
&nbsp;&nbsp;&nbsp;2:       3 bytes   1100 times --&gt;      0.25 Mbps in      90.66 usec
<br>
&nbsp;&nbsp;&nbsp;3:       4 bytes    735 times --&gt;      0.34 Mbps in      89.21 usec
<br>
121: 8388605 bytes      3 times --&gt;    894.90 Mbps in   71516.32 usec
<br>
122: 8388608 bytes      3 times --&gt;    894.99 Mbps in   71508.84 usec
<br>
123: 8388611 bytes      3 times --&gt;    894.96 Mbps in   71511.51 usec
<br>
<p>The changes seems to remove around 20 micro-seconds ... that's not  
<br>
bad. However, we are still 25 microseconds away from the raw TCP  
<br>
stream. And these 25 microsecond should come from somewhere on the  
<br>
TCP BTL because the request management is quite quick in Open MPI. I  
<br>
think I have an explanation. In the Netpipe TCP they are not using  
<br>
any select or poll functions, they just wait on the receive until  
<br>
they get the full messages. As we do a select/poll before going to  
<br>
read from the socket that should explain at least partially the  
<br>
difference. But there is still a small problem. Why ob1 is 3 micro- 
<br>
seconds slower than teg or uniq ?
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>PS: I will print again the graph and send them around this evening  
<br>
because the rest on the data are on my laptop (and it's at home right  
<br>
now).
<br>
<p>On Nov 29, 2005, at 12:36 PM, Tim S. Woodall wrote:
<br>
<p><span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you try out the changes I just commited on the trunk? We were  
</span><br>
<span class="quotelev1">&gt; doing
</span><br>
<span class="quotelev1">&gt; more select/recvs then necessary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I run Netpipe on 4 different clusters with differents OSes and  
</span><br>
<span class="quotelev2">&gt;&gt; Eternet
</span><br>
<span class="quotelev2">&gt;&gt; devices. The results is that nearly the same behaviour happens all  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; time for small messages. Basically, our latency is really bad.  
</span><br>
<span class="quotelev2">&gt;&gt; Attached
</span><br>
<span class="quotelev2">&gt;&gt; are 2 of the graphs on one MAC OS X cluster (wotan) and a Linux  
</span><br>
<span class="quotelev2">&gt;&gt; 2.6.10
</span><br>
<span class="quotelev2">&gt;&gt; 32 bits one. The graph are for Netpipe compiled over tcp, and for  
</span><br>
<span class="quotelev2">&gt;&gt; Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI with all the PMLs (uniq, teg and ob1).Here is the global trend:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - we are always slower than native TCP (what a guess!)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - uniq is faster than teg by a fraction of second (it's more  
</span><br>
<span class="quotelev2">&gt;&gt; visible on
</span><br>
<span class="quotelev2">&gt;&gt; fast networks).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - teg and uniq are always better than ob1 in terms of latency.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - the behaviour of ob1 differ on wotan and boba. On boba the
</span><br>
<span class="quotelev2">&gt;&gt; performances are a lot closer to the other PML when on wotan it's  
</span><br>
<span class="quotelev2">&gt;&gt; like
</span><br>
<span class="quotelev2">&gt;&gt; 40 micro-second slower (it nearly double the raw TCP latency).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On the same nodes I run other Netpipe with SM and MX and the  
</span><br>
<span class="quotelev2">&gt;&gt; results are
</span><br>
<span class="quotelev2">&gt;&gt; pretty good. So I think we have this latency problem only on TCP.  
</span><br>
<span class="quotelev2">&gt;&gt; I will
</span><br>
<span class="quotelev2">&gt;&gt; take a look to see how exactly is happens but any help is welcome.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;We must accept finite disappointment, but we must never lose  
</span><br>
<span class="quotelev2">&gt;&gt; infinite
</span><br>
<span class="quotelev2">&gt;&gt; hope.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                                   Martin Luther King
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0565.php">Tim S. Woodall: "Re:  TCP performance"</a>
<li><strong>Previous message:</strong> <a href="0563.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<li><strong>In reply to:</strong> <a href="0559.php">Tim S. Woodall: "Re:  TCP performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0565.php">Tim S. Woodall: "Re:  TCP performance"</a>
<li><strong>Reply:</strong> <a href="0565.php">Tim S. Woodall: "Re:  TCP performance"</a>
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
