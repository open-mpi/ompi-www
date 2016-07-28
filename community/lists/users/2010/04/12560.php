<?
$subject_val = "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 13:47:02 2010" -->
<!-- isoreceived="20100406174702" -->
<!-- sent="Tue, 06 Apr 2010 12:46:36 -0500" -->
<!-- isosent="20100406174636" -->
<!-- name="Oliver Geisler" -->
<!-- email="openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times" -->
<!-- id="4BBB737C.5040001_at_docawk.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201004011349.23139.keller_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times<br>
<strong>From:</strong> Oliver Geisler (<em>openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 13:46:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12561.php">Serge: "[OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>Previous message:</strong> <a href="12559.php">Terry Frankcombe: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>In reply to:</strong> <a href="12516.php">Rainer Keller: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12732.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/1/2010 12:49 PM, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; On Thursday 01 April 2010 12:16:25 pm Oliver Geisler wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone know a benchmark program, I could use for testing?
</span><br>
<span class="quotelev1">&gt; There's an abundance of benchmarks (IMB, netpipe, SkaMPI...) and performance 
</span><br>
<span class="quotelev1">&gt; analysis tools (Scalasca, Vampir, Paraver, Opt, Jumpshot).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I used SkaMPI to test communication: Most important the third column
<br>
showing the communication time. Same effect, kernel lower 2.6.24 showing
<br>
faster communication(by thousands) against higher kernel version with
<br>
slow communication.
<br>
<p>Hm. The issue seems not to be linked to the application. The kernel
<br>
configuration was carried forward from the working kernel 2.6.18 thru to
<br>
2.6.33 mostly using defaults for new features.
<br>
<p>Any ideas what to look for? What other tests could I make to give you
<br>
guys more information?
<br>
<p>Thanks so far,
<br>
<p>oli
<br>
<p><p><p>Tested on Intel Core2 Duo with openmpi 1.4.1
<br>
<p>&quot;skampi_coll&quot;-test
<br>
<p>kernel 2.6.18.6:
<br>
# begin result &quot;MPI_Bcast-length&quot;
<br>
count= 1        4       1.0       0.0       16       0.1       1.0
<br>
count= 2        8       1.0       0.0        8       0.0       1.0
<br>
count= 3       12       1.0       0.0       16       0.0       1.0
<br>
count= 4       16       1.3       0.1       32       0.0       1.3
<br>
count= 6       24       1.0       0.0        8       0.2       1.0
<br>
count= 8       32       1.0       0.0       32       0.1       1.0
<br>
{...}
<br>
count= 370728  1482912    1023.8      42.3        8    1023.8    1023.1
<br>
count= 524288  2097152    1440.3       3.7        8    1440.3    1439.5
<br>
# end result &quot;MPI_Bcast-length&quot;
<br>
# duration = 0.09 sec
<br>
<p>kernel 2.6.33.1:
<br>
# begin result &quot;MPI_Bcast-length&quot;
<br>
count= 1        4    1786.5     131.2       34    1095.3    1786.5
<br>
count= 2        8    1504.9      77.1       34     759.3    1504.9
<br>
count= 3       12    1852.4     139.2       35    1027.9    1852.4
<br>
count= 4       16    2430.5     152.0       38    1200.5    2430.5
<br>
count= 6       24    1898.7      69.5       35     807.6    1898.7
<br>
count= 8       32    1769.1      16.3       34     763.3    1769.1
<br>
{...}
<br>
count= 370728  1482912  216145.9    3011.6       29  216145.9  214898.1
<br>
count= 524288  2097152  274813.7    1519.5       12  274813.7  274087.4
<br>
# end result &quot;MPI_Bcast-length&quot;
<br>
# duration = 140.64 sec
<br>
<p><pre>
-- 
This message has been scanned for viruses and
dangerous content by MailScanner, and is
believed to be clean.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12561.php">Serge: "[OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>Previous message:</strong> <a href="12559.php">Terry Frankcombe: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>In reply to:</strong> <a href="12516.php">Rainer Keller: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12732.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
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
