<?
$subject_val = "Re: [OMPI users] Two remote machines - asymmetric behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  5 09:29:17 2009" -->
<!-- isoreceived="20090805132917" -->
<!-- sent="Wed, 5 Aug 2009 09:29:13 -0400" -->
<!-- isosent="20090805132913" -->
<!-- name="David Doria" -->
<!-- email="daviddoria+openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Two remote machines - asymmetric behavior" -->
<!-- id="c19fcadc0908050629j3018ca1es7557cbd9f323a789_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71d2d8cc0908031041x5fa80faj653a074d51378624_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Two remote machines - asymmetric behavior<br>
<strong>From:</strong> David Doria (<em>daviddoria+openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-05 09:29:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10207.php">Pavel Shamis (Pasha): "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<li><strong>Previous message:</strong> <a href="10205.php">Ralph Castain: "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and 	ScaliMPI"</a>
<li><strong>In reply to:</strong> <a href="10194.php">Ralph Castain: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Aug 3, 2009 at 1:41 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The only thing that changes is the required connectivity. It sounds to me
</span><br>
<span class="quotelev1">&gt; like you may have a firewall issue here, where cloud3 is blocking
</span><br>
<span class="quotelev1">&gt; connectivity from cloud6, but cloud6 is allowing connectivity from cloud3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a firewall in operation, per chance?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I have turned off all firewalls. This is the wireshark log of the traffic on
<br>
one of the machines in the case that does not work:
<br>
<a href="http://rpi.edu/~doriad/cloud3_cloud3+6.wsk">http://rpi.edu/~doriad/cloud3_cloud3+6.wsk</a>
<br>
<p>I see a bunch of red lines, where in any of the working tests cases I do not
<br>
see any red lines. As you can tell from my analysis, I am an expert
<br>
wireshark user (haha!) - can anyone interpret the problem from this file?
<br>
Maybe I need to ask the wireshark mailing list for an analysis?
<br>
<p>Thanks,
<br>
<p>David
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10206/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10207.php">Pavel Shamis (Pasha): "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<li><strong>Previous message:</strong> <a href="10205.php">Ralph Castain: "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and 	ScaliMPI"</a>
<li><strong>In reply to:</strong> <a href="10194.php">Ralph Castain: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
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
