<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 29 15:40:04 2005" -->
<!-- isoreceived="20051129204004" -->
<!-- sent="Tue, 29 Nov 2005 13:40:00 -0700" -->
<!-- isosent="20051129204000" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re:  TCP performance" -->
<!-- id="438CBCA0.1070405_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B718B52C-0DCA-4937-B22C-77A3F357B323_at_cs.utk.edu" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-29 15:40:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0566.php">George Bosilca: "bug in iof/orted"</a>
<li><strong>Previous message:</strong> <a href="0564.php">George Bosilca: "Re:  TCP performance"</a>
<li><strong>In reply to:</strong> <a href="0564.php">George Bosilca: "Re:  TCP performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0567.php">George Bosilca: "Re:  TCP performance"</a>
<li><strong>Reply:</strong> <a href="0567.php">George Bosilca: "Re:  TCP performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Tim,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks a little bit better. Here are the latencies for 1 to 4 bytes  
</span><br>
<span class="quotelev1">&gt; messages as well as for the maximum length in Netpipe (8 MB).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; old ob1:
</span><br>
<span class="quotelev1">&gt;    0:       1 bytes    694 times --&gt;      0.06 Mbps in     137.54 usec
</span><br>
<span class="quotelev1">&gt;    1:       2 bytes    727 times --&gt;      0.11 Mbps in     140.54 usec
</span><br>
<span class="quotelev1">&gt;    2:       3 bytes    711 times --&gt;      0.16 Mbps in     141.54 usec
</span><br>
<span class="quotelev1">&gt;    3:       4 bytes    470 times --&gt;      0.22 Mbps in     140.55 usec
</span><br>
<span class="quotelev1">&gt; 121: 8388605 bytes      3 times --&gt;    889.75 Mbps in   71929.97 usec
</span><br>
<span class="quotelev1">&gt; 122: 8388608 bytes      3 times --&gt;    889.72 Mbps in   71932.47 usec
</span><br>
<span class="quotelev1">&gt; 123: 8388611 bytes      3 times --&gt;    889.59 Mbps in   71943.16 usec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; new ob1:
</span><br>
<span class="quotelev1">&gt;    0:       1 bytes    760 times --&gt;      0.07 Mbps in     116.08 usec
</span><br>
<span class="quotelev1">&gt;    1:       2 bytes    861 times --&gt;      0.13 Mbps in     116.73 usec
</span><br>
<span class="quotelev1">&gt;    2:       3 bytes    856 times --&gt;      0.20 Mbps in     116.69 usec
</span><br>
<span class="quotelev1">&gt;    3:       4 bytes    571 times --&gt;      0.26 Mbps in     117.48 usec
</span><br>
<span class="quotelev1">&gt; 121: 8388605 bytes      3 times --&gt;    890.37 Mbps in   71880.14 usec
</span><br>
<span class="quotelev1">&gt; 122: 8388608 bytes      3 times --&gt;    890.33 Mbps in   71883.64 usec
</span><br>
<span class="quotelev1">&gt; 123: 8388611 bytes      3 times --&gt;    890.40 Mbps in   71878.00 usec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; teg:
</span><br>
<span class="quotelev1">&gt;    0:       1 bytes    867 times --&gt;      0.07 Mbps in     114.91 usec
</span><br>
<span class="quotelev1">&gt;    1:       2 bytes    870 times --&gt;      0.13 Mbps in     115.99 usec
</span><br>
<span class="quotelev1">&gt;    2:       3 bytes    862 times --&gt;      0.20 Mbps in     114.37 usec
</span><br>
<span class="quotelev1">&gt;    3:       4 bytes    582 times --&gt;      0.26 Mbps in     115.20 usec
</span><br>
<span class="quotelev1">&gt; 121: 8388605 bytes      3 times --&gt;    893.42 Mbps in   71634.49 usec
</span><br>
<span class="quotelev1">&gt; 122: 8388608 bytes      3 times --&gt;    893.22 Mbps in   71651.18 usec
</span><br>
<span class="quotelev1">&gt; 123: 8388611 bytes      3 times --&gt;    893.24 Mbps in   71649.35 usec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; uniq:
</span><br>
<span class="quotelev1">&gt;    0:       1 bytes    870 times --&gt;      0.07 Mbps in     114.59 usec
</span><br>
<span class="quotelev1">&gt;    1:       2 bytes    872 times --&gt;      0.13 Mbps in     114.20 usec
</span><br>
<span class="quotelev1">&gt;    2:       3 bytes    875 times --&gt;      0.20 Mbps in     114.52 usec
</span><br>
<span class="quotelev1">&gt;    3:       4 bytes    582 times --&gt;      0.27 Mbps in     113.70 usec
</span><br>
<span class="quotelev1">&gt; 121: 8388605 bytes      3 times --&gt;    893.41 Mbps in   71635.64 usec
</span><br>
<span class="quotelev1">&gt; 122: 8388608 bytes      3 times --&gt;    893.57 Mbps in   71623.01 usec
</span><br>
<span class="quotelev1">&gt; 123: 8388611 bytes      3 times --&gt;    893.39 Mbps in   71637.67 usec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; raw tcp:
</span><br>
<span class="quotelev1">&gt;    0:       1 bytes   1081 times --&gt;      0.08 Mbps in      90.74 usec
</span><br>
<span class="quotelev1">&gt;    1:       2 bytes   1102 times --&gt;      0.17 Mbps in      90.88 usec
</span><br>
<span class="quotelev1">&gt;    2:       3 bytes   1100 times --&gt;      0.25 Mbps in      90.66 usec
</span><br>
<span class="quotelev1">&gt;    3:       4 bytes    735 times --&gt;      0.34 Mbps in      89.21 usec
</span><br>
<span class="quotelev1">&gt; 121: 8388605 bytes      3 times --&gt;    894.90 Mbps in   71516.32 usec
</span><br>
<span class="quotelev1">&gt; 122: 8388608 bytes      3 times --&gt;    894.99 Mbps in   71508.84 usec
</span><br>
<span class="quotelev1">&gt; 123: 8388611 bytes      3 times --&gt;    894.96 Mbps in   71511.51 usec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The changes seems to remove around 20 micro-seconds ... that's not  
</span><br>
<span class="quotelev1">&gt; bad. However, we are still 25 microseconds away from the raw TCP  
</span><br>
<span class="quotelev1">&gt; stream. And these 25 microsecond should come from somewhere on the  
</span><br>
<span class="quotelev1">&gt; TCP BTL because the request management is quite quick in Open MPI. I  
</span><br>
<span class="quotelev1">&gt; think I have an explanation. In the Netpipe TCP they are not using  
</span><br>
<span class="quotelev1">&gt; any select or poll functions, they just wait on the receive until  
</span><br>
<span class="quotelev1">&gt; they get the full messages. As we do a select/poll before going to  
</span><br>
<span class="quotelev1">&gt; read from the socket that should explain at least partially the  
</span><br>
<span class="quotelev1">&gt; difference. But there is still a small problem. Why ob1 is 3 micro- 
</span><br>
<span class="quotelev1">&gt; seconds slower than teg or uniq ?
</span><br>
<p>Due to the structure of the pml/btl interface, the btl code does an
<br>
extra recv call. The cost of this varies, on odin it appears to be
<br>
closer to 0.5us... Have to think about this a bit - may be able to
<br>
remove this.
<br>
<p><p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0566.php">George Bosilca: "bug in iof/orted"</a>
<li><strong>Previous message:</strong> <a href="0564.php">George Bosilca: "Re:  TCP performance"</a>
<li><strong>In reply to:</strong> <a href="0564.php">George Bosilca: "Re:  TCP performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0567.php">George Bosilca: "Re:  TCP performance"</a>
<li><strong>Reply:</strong> <a href="0567.php">George Bosilca: "Re:  TCP performance"</a>
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
