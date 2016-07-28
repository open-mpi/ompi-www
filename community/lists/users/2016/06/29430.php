<?
$subject_val = "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 14 04:42:04 2016" -->
<!-- isoreceived="20160614084204" -->
<!-- sent="Tue, 14 Jun 2016 10:42:01 +0200" -->
<!-- isosent="20160614084201" -->
<!-- name="Peter Kjellstr&#195;&#182;m" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Big jump from OFED 1.5.4.1 -&amp;gt; recent (stable). Any suggestions?" -->
<!-- id="20160614104201.311504ae_at_yaydoe" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="66ed6269-17a6-d387-8297-22f93b9b675e_at_oit.gatech.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?<br>
<strong>From:</strong> Peter Kjellstr&#195;&#182;m (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-14 04:42:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29431.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>Previous message:</strong> <a href="29429.php">Llolsten Kaonga: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any	suggestions?"</a>
<li><strong>In reply to:</strong> <a href="29428.php">Mehmet Belgin: "[OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29436.php">Grigory Shamov: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>Reply:</strong> <a href="29436.php">Grigory Shamov: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 13 Jun 2016 19:04:59 -0400
<br>
Mehmet Belgin &lt;mehmet.belgin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Greetings!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have not upgraded our OFED stack for a very long time, and still 
</span><br>
<span class="quotelev1">&gt; running on an ancient version (1.5.4.1, yeah we know). We are now 
</span><br>
<span class="quotelev1">&gt; considering a big jump from this version to a tested and stable
</span><br>
<span class="quotelev1">&gt; recent version and would really appreciate any suggestions from the
</span><br>
<span class="quotelev1">&gt; community.
</span><br>
<p>Some thoughts on the subject.
<br>
<p>* Not installing an external ibstack is quite attractive imo.
<br>
&nbsp;&nbsp;RHEL/CentOS stack (not based on any direct OFED version) works fine
<br>
&nbsp;&nbsp;for us. It simplifies cluster maintenance (kernel updates etc.).
<br>
<p>* If you use an external IB-stack consider the constraints it may put
<br>
&nbsp;&nbsp;on your update plans (for example, you want to update to CentOS-7.3
<br>
&nbsp;&nbsp;but your OFED only supports 7.2...).
<br>
<p>* Also consider updates for the stack itself wrt. security. Upstream
<br>
&nbsp;&nbsp;OFED has been quite good at patching security bus but they DO NOT
<br>
&nbsp;&nbsp;maintain older releases (-&gt; you may have to run a nightly build of
<br>
&nbsp;&nbsp;latest). Mellanox has patched when poked at but also only for latest
<br>
&nbsp;&nbsp;version. Intel does not seem to do security afaict and with a dist
<br>
&nbsp;&nbsp;stack it's covered by the normal dist updates.
<br>
<p>/Peter K
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29431.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>Previous message:</strong> <a href="29429.php">Llolsten Kaonga: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any	suggestions?"</a>
<li><strong>In reply to:</strong> <a href="29428.php">Mehmet Belgin: "[OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29436.php">Grigory Shamov: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>Reply:</strong> <a href="29436.php">Grigory Shamov: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
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
