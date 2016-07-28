<?
$subject_val = "Re: [OMPI devel] TIPC BTL code ready for review";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  6 07:15:39 2011" -->
<!-- isoreceived="20110906111539" -->
<!-- sent="Tue, 6 Sep 2011 13:14:31 +0200" -->
<!-- isosent="20110906111431" -->
<!-- name="Xin He" -->
<!-- email="xin.i.he_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TIPC BTL code ready for review" -->
<!-- id="4E660097.1000900_at_ericsson.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C8E9A862-12BA-4C66-B4E7-5ADFC3A92056_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] TIPC BTL code ready for review<br>
<strong>From:</strong> Xin He (<em>xin.i.he_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-06 07:14:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9743.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>Previous message:</strong> <a href="9741.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>In reply to:</strong> <a href="9741.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, it took me so long to reply, I was out of office these days.
<br>
<p>The paper I sent, the author did the test using 100% CPU, but not in my 
<br>
case.
<br>
But since I did not look into the code of TIPC, I am afraid I cannot 
<br>
explain it. I can only
<br>
show you my result and hope you get the same or even better result in 
<br>
your environment :)
<br>
<p>I did Netpipe test on TCP, I have not found any good tools for TIPC, 
<br>
maybe I will write one myself later.
<br>
<p>/Xin
<br>
<p>Send and receive buffers are 16384 and 87380 bytes
<br>
(A bug in Linux doubles the requested buffer sizes)
<br>
Now starting the main loop
<br>
&nbsp;&nbsp;&nbsp;0:       1 bytes   1960 times --&gt;      0.14 Mbps in      53.00 usec
<br>
&nbsp;&nbsp;&nbsp;1:       2 bytes   1886 times --&gt;      0.29 Mbps in      53.28 usec
<br>
&nbsp;&nbsp;&nbsp;2:       3 bytes   1876 times --&gt;      0.43 Mbps in      53.23 usec
<br>
&nbsp;&nbsp;&nbsp;3:       4 bytes   1252 times --&gt;      0.57 Mbps in      53.28 usec
<br>
&nbsp;&nbsp;&nbsp;4:       6 bytes   1407 times --&gt;      0.87 Mbps in      52.74 usec
<br>
&nbsp;&nbsp;&nbsp;5:       8 bytes    948 times --&gt;      1.14 Mbps in      53.35 usec
<br>
&nbsp;&nbsp;&nbsp;6:      12 bytes   1171 times --&gt;      1.71 Mbps in      53.40 usec
<br>
&nbsp;&nbsp;&nbsp;7:      13 bytes    780 times --&gt;      1.86 Mbps in      53.32 usec
<br>
&nbsp;&nbsp;&nbsp;8:      16 bytes    865 times --&gt;      2.28 Mbps in      53.43 usec
<br>
&nbsp;&nbsp;&nbsp;9:      19 bytes   1052 times --&gt;      2.71 Mbps in      53.57 usec
<br>
&nbsp;&nbsp;10:      21 bytes   1178 times --&gt;      2.99 Mbps in      53.57 usec
<br>
&nbsp;&nbsp;11:      24 bytes   1244 times --&gt;      3.41 Mbps in      53.62 usec
<br>
&nbsp;&nbsp;12:      27 bytes   1320 times --&gt;      3.84 Mbps in      53.60 usec
<br>
&nbsp;&nbsp;13:      29 bytes    829 times --&gt;      4.14 Mbps in      53.47 usec
<br>
&nbsp;&nbsp;14:      32 bytes    902 times --&gt;      4.57 Mbps in      53.48 usec
<br>
&nbsp;&nbsp;15:      35 bytes    993 times --&gt;      4.98 Mbps in      53.62 usec
<br>
&nbsp;&nbsp;16:      45 bytes   1065 times --&gt;      6.40 Mbps in      53.63 usec
<br>
&nbsp;&nbsp;17:      48 bytes   1242 times --&gt;      6.82 Mbps in      53.66 usec
<br>
&nbsp;&nbsp;18:      51 bytes   1281 times --&gt;      7.25 Mbps in      53.65 usec
<br>
&nbsp;&nbsp;19:      61 bytes    730 times --&gt;      8.68 Mbps in      53.65 usec
<br>
&nbsp;&nbsp;20:      64 bytes    916 times --&gt;      9.10 Mbps in      53.65 usec
<br>
&nbsp;&nbsp;21:      67 bytes    961 times --&gt;      9.52 Mbps in      53.69 usec
<br>
&nbsp;&nbsp;22:      93 bytes   1000 times --&gt;     13.17 Mbps in      53.89 usec
<br>
&nbsp;&nbsp;23:      96 bytes   1237 times --&gt;     13.58 Mbps in      53.94 usec
<br>
&nbsp;&nbsp;24:      99 bytes   1255 times --&gt;     13.99 Mbps in      54.00 usec
<br>
&nbsp;&nbsp;25:     125 bytes    673 times --&gt;     17.64 Mbps in      54.06 usec
<br>
&nbsp;&nbsp;26:     128 bytes    917 times --&gt;     18.06 Mbps in      54.08 usec
<br>
&nbsp;&nbsp;27:     131 bytes    938 times --&gt;     18.46 Mbps in      54.14 usec
<br>
&nbsp;&nbsp;28:     189 bytes    958 times --&gt;     26.47 Mbps in      54.47 usec
<br>
&nbsp;&nbsp;29:     192 bytes   1223 times --&gt;     26.82 Mbps in      54.62 usec
<br>
&nbsp;&nbsp;30:     195 bytes   1230 times --&gt;     27.22 Mbps in      54.66 usec
<br>
&nbsp;&nbsp;31:     253 bytes    638 times --&gt;     35.26 Mbps in      54.75 usec
<br>
&nbsp;&nbsp;32:     256 bytes    909 times --&gt;     35.43 Mbps in      55.12 usec
<br>
&nbsp;&nbsp;33:     259 bytes    914 times --&gt;     35.84 Mbps in      55.14 usec
<br>
&nbsp;&nbsp;34:     381 bytes    924 times --&gt;     51.58 Mbps in      56.36 usec
<br>
&nbsp;&nbsp;35:     384 bytes   1182 times --&gt;     51.87 Mbps in      56.49 usec
<br>
&nbsp;&nbsp;36:     387 bytes   1184 times --&gt;     52.21 Mbps in      56.55 usec
<br>
&nbsp;&nbsp;37:     509 bytes    603 times --&gt;     63.56 Mbps in      61.10 usec
<br>
&nbsp;&nbsp;38:     512 bytes    816 times --&gt;     62.56 Mbps in      62.44 usec
<br>
&nbsp;&nbsp;39:     515 bytes    803 times --&gt;     62.56 Mbps in      62.81 usec
<br>
&nbsp;&nbsp;40:     765 bytes    803 times --&gt;     82.00 Mbps in      71.18 usec
<br>
&nbsp;&nbsp;41:     768 bytes    936 times --&gt;     82.32 Mbps in      71.18 usec
<br>
&nbsp;&nbsp;42:     771 bytes    938 times --&gt;     82.59 Mbps in      71.22 usec
<br>
&nbsp;&nbsp;43:    1021 bytes    473 times --&gt;    102.64 Mbps in      75.89 usec
<br>
&nbsp;&nbsp;44:    1024 bytes    658 times --&gt;    102.92 Mbps in      75.91 usec
<br>
&nbsp;&nbsp;45:    1027 bytes    659 times --&gt;    103.06 Mbps in      76.03 usec
<br>
&nbsp;&nbsp;46:    1533 bytes    660 times --&gt;    134.60 Mbps in      86.89 usec
<br>
&nbsp;&nbsp;47:    1536 bytes    767 times --&gt;    134.90 Mbps in      86.87 usec
<br>
&nbsp;&nbsp;48:    1539 bytes    768 times --&gt;    135.18 Mbps in      86.86 usec
<br>
&nbsp;&nbsp;49:    2045 bytes    385 times --&gt;    173.37 Mbps in      89.99 usec
<br>
&nbsp;&nbsp;50:    2048 bytes    555 times --&gt;    173.63 Mbps in      89.99 usec
<br>
&nbsp;&nbsp;51:    2051 bytes    556 times --&gt;    173.22 Mbps in      90.34 usec
<br>
&nbsp;&nbsp;52:    3069 bytes    554 times --&gt;    225.61 Mbps in     103.78 usec
<br>
&nbsp;&nbsp;53:    3072 bytes    642 times --&gt;    225.97 Mbps in     103.72 usec
<br>
&nbsp;&nbsp;54:    3075 bytes    643 times --&gt;    226.14 Mbps in     103.74 usec
<br>
&nbsp;&nbsp;55:    4093 bytes    322 times --&gt;    277.99 Mbps in     112.33 usec
<br>
&nbsp;&nbsp;56:    4096 bytes    445 times --&gt;    277.98 Mbps in     112.42 usec
<br>
&nbsp;&nbsp;57:    4099 bytes    444 times --&gt;    277.72 Mbps in     112.60 usec
<br>
&nbsp;&nbsp;58:    6141 bytes    444 times --&gt;    400.61 Mbps in     116.95 usec
<br>
&nbsp;&nbsp;59:    6144 bytes    570 times --&gt;    402.32 Mbps in     116.51 usec
<br>
&nbsp;&nbsp;60:    6147 bytes    572 times --&gt;    400.78 Mbps in     117.02 usec
<br>
&nbsp;&nbsp;61:    8189 bytes    285 times --&gt;    458.70 Mbps in     136.20 usec
<br>
&nbsp;&nbsp;62:    8192 bytes    367 times --&gt;    460.25 Mbps in     135.80 usec
<br>
&nbsp;&nbsp;63:    8195 bytes    368 times --&gt;    461.14 Mbps in     135.58 usec
<br>
&nbsp;&nbsp;64:   12285 bytes    368 times --&gt;    497.80 Mbps in     188.28 usec
<br>
&nbsp;&nbsp;65:   12288 bytes    354 times --&gt;    495.96 Mbps in     189.03 usec
<br>
&nbsp;&nbsp;66:   12291 bytes    352 times --&gt;    498.39 Mbps in     188.15 usec
<br>
&nbsp;&nbsp;67:   16381 bytes    177 times --&gt;    562.50 Mbps in     222.18 usec
<br>
&nbsp;&nbsp;68:   16384 bytes    225 times --&gt;    563.89 Mbps in     221.68 usec
<br>
&nbsp;&nbsp;69:   16387 bytes    225 times --&gt;    562.61 Mbps in     222.22 usec
<br>
&nbsp;&nbsp;70:   24573 bytes    225 times --&gt;    629.04 Mbps in     298.04 usec
<br>
&nbsp;&nbsp;71:   24576 bytes    223 times --&gt;    632.04 Mbps in     296.66 usec
<br>
&nbsp;&nbsp;72:   24579 bytes    224 times --&gt;    628.97 Mbps in     298.14 usec
<br>
&nbsp;&nbsp;73:   32765 bytes    111 times --&gt;    667.51 Mbps in     374.49 usec
<br>
&nbsp;&nbsp;74:   32768 bytes    133 times --&gt;    668.03 Mbps in     374.24 usec
<br>
&nbsp;&nbsp;75:   32771 bytes    133 times --&gt;    667.54 Mbps in     374.54 usec
<br>
&nbsp;&nbsp;76:   49149 bytes    133 times --&gt;    706.32 Mbps in     530.89 usec
<br>
&nbsp;&nbsp;77:   49152 bytes    125 times --&gt;    705.28 Mbps in     531.70 usec
<br>
&nbsp;&nbsp;78:   49155 bytes    125 times --&gt;    706.43 Mbps in     530.87 usec
<br>
&nbsp;&nbsp;79:   65533 bytes     62 times --&gt;    746.28 Mbps in     669.96 usec
<br>
&nbsp;&nbsp;80:   65536 bytes     74 times --&gt;    750.98 Mbps in     665.80 usec
<br>
&nbsp;&nbsp;81:   65539 bytes     75 times --&gt;    745.64 Mbps in     670.59 usec
<br>
&nbsp;&nbsp;82:   98301 bytes     74 times --&gt;    786.29 Mbps in     953.81 usec
<br>
&nbsp;&nbsp;83:   98304 bytes     69 times --&gt;    786.03 Mbps in     954.17 usec
<br>
&nbsp;&nbsp;84:   98307 bytes     69 times --&gt;    785.73 Mbps in     954.56 usec
<br>
&nbsp;&nbsp;85:  131069 bytes     34 times --&gt;    822.93 Mbps in    1215.15 usec
<br>
&nbsp;&nbsp;86:  131072 bytes     41 times --&gt;    825.56 Mbps in    1211.31 usec
<br>
&nbsp;&nbsp;87:  131075 bytes     41 times --&gt;    822.65 Mbps in    1215.61 usec
<br>
&nbsp;&nbsp;88:  196605 bytes     41 times --&gt;    847.04 Mbps in    1770.85 usec
<br>
&nbsp;&nbsp;89:  196608 bytes     37 times --&gt;    849.10 Mbps in    1766.57 usec
<br>
&nbsp;&nbsp;90:  196611 bytes     37 times --&gt;    846.81 Mbps in    1771.38 usec
<br>
&nbsp;&nbsp;91:  262141 bytes     18 times --&gt;    853.36 Mbps in    2343.64 usec
<br>
&nbsp;&nbsp;92:  262144 bytes     21 times --&gt;    853.44 Mbps in    2343.45 usec
<br>
&nbsp;&nbsp;93:  262147 bytes     21 times --&gt;    853.69 Mbps in    2342.81 usec
<br>
&nbsp;&nbsp;94:  393213 bytes     21 times --&gt;    865.59 Mbps in    3465.83 usec
<br>
&nbsp;&nbsp;95:  393216 bytes     19 times --&gt;    865.40 Mbps in    3466.61 usec
<br>
&nbsp;&nbsp;96:  393219 bytes     19 times --&gt;    865.48 Mbps in    3466.31 usec
<br>
&nbsp;&nbsp;97:  524285 bytes      9 times --&gt;    871.99 Mbps in    4587.17 usec
<br>
&nbsp;&nbsp;98:  524288 bytes     10 times --&gt;    871.85 Mbps in    4587.95 usec
<br>
&nbsp;&nbsp;99:  524291 bytes     10 times --&gt;    872.13 Mbps in    4586.50 usec
<br>
100:  786429 bytes     10 times --&gt;    878.77 Mbps in    6827.70 usec
<br>
101:  786432 bytes      9 times --&gt;    879.14 Mbps in    6824.83 usec
<br>
102:  786435 bytes      9 times --&gt;    878.82 Mbps in    6827.39 usec
<br>
103: 1048573 bytes      4 times --&gt;    884.29 Mbps in    9046.74 usec
<br>
104: 1048576 bytes      5 times --&gt;    884.41 Mbps in    9045.60 usec
<br>
105: 1048579 bytes      5 times --&gt;    884.15 Mbps in    9048.29 usec
<br>
106: 1572861 bytes      5 times --&gt;    887.90 Mbps in   13514.99 usec
<br>
107: 1572864 bytes      4 times --&gt;    887.90 Mbps in   13515.01 usec
<br>
108: 1572867 bytes      4 times --&gt;    887.81 Mbps in   13516.38 usec
<br>
109: 2097149 bytes      3 times --&gt;    889.80 Mbps in   17981.51 usec
<br>
110: 2097152 bytes      3 times --&gt;    889.91 Mbps in   17979.33 usec
<br>
111: 2097155 bytes      3 times --&gt;    889.90 Mbps in   17979.65 usec
<br>
112: 3145725 bytes      3 times --&gt;    892.55 Mbps in   26889.17 usec
<br>
113: 3145728 bytes      3 times --&gt;    892.60 Mbps in   26887.83 usec
<br>
114: 3145731 bytes      3 times --&gt;    892.57 Mbps in   26888.68 usec
<br>
115: 4194301 bytes      3 times --&gt;    893.98 Mbps in   35795.15 usec
<br>
116: 4194304 bytes      3 times --&gt;    893.95 Mbps in   35796.01 usec
<br>
117: 4194307 bytes      3 times --&gt;    893.94 Mbps in   35796.66 usec
<br>
118: 6291453 bytes      3 times --&gt;    895.36 Mbps in   53609.49 usec
<br>
119: 6291456 bytes      3 times --&gt;    895.36 Mbps in   53609.49 usec
<br>
120: 6291459 bytes      3 times --&gt;    895.39 Mbps in   53608.00 usec
<br>
121: 8388605 bytes      3 times --&gt;    895.86 Mbps in   71439.65 usec
<br>
122: 8388608 bytes      3 times --&gt;    895.87 Mbps in   71438.84 usec
<br>
123: 8388611 bytes      3 times --&gt;    895.80 Mbps in   71444.32 usec
<br>
<p><p><p><p>On 09/01/2011 04:08 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 1, 2011, at 7:05 AM, Xin He wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And get the result as in appendix. It seems that TCP has better performances with smaller message while TIPC with larger message.
</span><br>
<span class="quotelev1">&gt; Interesting.  Any idea why?  From the TIPC paper you sent, one of TIPC's strengths was that it was supposed to be faster than TCP for small messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you know what the raw performance numbers are for TCP and TIPC on this machine without MPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9743.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>Previous message:</strong> <a href="9741.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>In reply to:</strong> <a href="9741.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
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
