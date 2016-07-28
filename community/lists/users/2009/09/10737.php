<?
$subject_val = "Re: [OMPI users] very bad parallel scaling of vasp using openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 23 08:23:28 2009" -->
<!-- isoreceived="20090923122328" -->
<!-- sent="Wed, 23 Sep 2009 08:23:34 -0400" -->
<!-- isosent="20090923122334" -->
<!-- name="Joe Landman" -->
<!-- email="landman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] very bad parallel scaling of vasp using openmpi" -->
<!-- id="4ABA1346.6030502_at_scalableinformatics.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="c4d69730909222130h3874eda3mbea8f2b06ba53769_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] very bad parallel scaling of vasp using openmpi<br>
<strong>From:</strong> Joe Landman (<em>landman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-23 08:23:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10738.php">Jonathan Dursi: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>Previous message:</strong> <a href="10736.php">Eugene Loh: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>In reply to:</strong> <a href="10735.php">Rahul Nabar: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10742.php">Dave Love: "[OMPI users] switch and NIC performance (was: very bad parallel scaling of vasp using openmpi)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rahul Nabar wrote:
<br>
<span class="quotelev1">&gt; On Tue, Aug 18, 2009 at 5:28 PM, Gerry Creager &lt;gerry.creager_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Most of that bandwidth is in marketing...  Sorry, but it's not a high
</span><br>
<span class="quotelev2">&gt;&gt; performance switch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, how does one figure out what exactly is a &quot;hih performance
</span><br>
<span class="quotelev1">&gt; switch&quot;? I've found this an exceedingly hard task. Like the OP posted
</span><br>
<span class="quotelev1">&gt; the Dell 6248 is rated to give more than a fully subscribed backbone
</span><br>
<span class="quotelev1">&gt; capacity. Nor I do not know any good third party test lab nor do I
</span><br>
<span class="quotelev1">&gt; know any switch load testing benchmarks that'd take a switch through
</span><br>
<span class="quotelev1">&gt; its paces.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, how does one go about selecting a good switch? &quot;The most expensive
</span><br>
<span class="quotelev1">&gt; the better&quot; is somewhat a unsatisfying option!
</span><br>
<p>There are several options.
<br>
<p>1) research the switches, get the numbers, and then find/interview the 
<br>
people who use it.  See if it is as advertised.
<br>
<p>2) hire a company to do the same for you, or more to the point, generate 
<br>
a reasonable recommendation given your needs.
<br>
<p>3) design a benchmark test, and try to run it against the switch.  The 
<br>
OSU tests from D. Panda could be used for switch testing as well as for 
<br>
HBA testing, with some simple adjustments (Panda's focus is mostly upon 
<br>
latency and bandwidth as a function of message size, you could change 
<br>
message size, and measure bandwidth/throughput as a function of number 
<br>
of workers).
<br>
<p>3 is likely the easiest for you to do.  2 is likely what you should do 
<br>
if you are designing a cluster and need expert (non-biased) opinion.
<br>
<p>Unfortunately, as Gerry indicates, there are a great deal of what I call 
<br>
marketing numbers out there.  There isn't enough real data.  Marketing 
<br>
numbers seem good on the surface.  Its when you use the product, you 
<br>
discover the reality isn't as rosy.
<br>
<p>We have found several good gigabit switches for HPC/MPI codes.  A number 
<br>
of our customers have started out with the least expensive switch 
<br>
possible, and ran into backplane problems in the 20's of nodes, never 
<br>
mind the hundred plus they needed to run on.
<br>
<p><p><pre>
-- 
Joseph Landman, Ph.D
Founder and CEO
Scalable Informatics, Inc.
email: landman_at_[hidden]
web  : <a href="http://scalableinformatics.com">http://scalableinformatics.com</a>
        <a href="http://scalableinformatics.com/jackrabbit">http://scalableinformatics.com/jackrabbit</a>
phone: +1 734 786 8423 x121
fax  : +1 866 888 3112
cell : +1 734 612 4615
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10738.php">Jonathan Dursi: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>Previous message:</strong> <a href="10736.php">Eugene Loh: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>In reply to:</strong> <a href="10735.php">Rahul Nabar: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10742.php">Dave Love: "[OMPI users] switch and NIC performance (was: very bad parallel scaling of vasp using openmpi)"</a>
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
