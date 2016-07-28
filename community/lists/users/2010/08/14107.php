<?
$subject_val = "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 24 13:35:03 2010" -->
<!-- isoreceived="20100824173503" -->
<!-- sent="Tue, 24 Aug 2010 12:34:35 -0500" -->
<!-- isosent="20100824173435" -->
<!-- name="Rahul Nabar" -->
<!-- email="rpnabar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?" -->
<!-- id="AANLkTik4PFswcDaexThy8uacKask4Zgeuwk=SnYrY8LM_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF4FCA91A9.57546BFD-ON85257788.008085AF-85257788.0081FF7C_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?<br>
<strong>From:</strong> Rahul Nabar (<em>rpnabar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-24 13:34:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14108.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Previous message:</strong> <a href="14106.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="14090.php">Richard Treumann: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14123.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Aug 23, 2010 at 6:39 PM, Richard Treumann &lt;treumann_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; It is hard to imagine how a total data load of 41,943,040 bytes could be a
</span><br>
<span class="quotelev1">&gt; problem. That is really not much data. By the time the BCAST is done, each
</span><br>
<span class="quotelev1">&gt; task (except root) will have received a single half meg message form one
</span><br>
<span class="quotelev1">&gt; sender. That is not much.
</span><br>
<p>Thanks very much for your comments Dick! I'm somewhat new to MPI so
<br>
appreciate all the advice I can get.My main roadblock is I'm not sure
<br>
how to attack this problem more? How can I obtain more diagnostic
<br>
output to help me trace what the origin of this &quot;broadcast stall&quot; is?
<br>
So far I've obtained a stack trace via padb (
<br>
<a href="http://dl.dropbox.com/u/118481/padb.log.new.new.txt">http://dl.dropbox.com/u/118481/padb.log.new.new.txt</a> ) but that is
<br>
about all.
<br>
<p>Any suggestions as to what else I could try? Would a full dump by
<br>
something like tcpdump or wireshark on the packets passing the network
<br>
be of any relevance? Or is there something useful to be known from the
<br>
switch side? The technology is fairly new for HPC (Chelsio 10GigE
<br>
adapters + Cisco Nexus5000 switches). So I wouldn't rule out some
<br>
strange hardware or firmware bug that's tickled by this particular
<br>
suite of tests.   I'm grasping at straws here.
<br>
<p>&nbsp;[ On the other hand I'm fairly new so I wouldn't rule out some silly
<br>
setting by me as well. ]
<br>
<p><pre>
-- 
Rahul
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14108.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Previous message:</strong> <a href="14106.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="14090.php">Richard Treumann: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14123.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
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
