<?
$subject_val = "Re: [OMPI users] orte has lost communication";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 12 10:34:16 2016" -->
<!-- isoreceived="20160412143416" -->
<!-- sent="Tue, 12 Apr 2016 07:34:14 -0700" -->
<!-- isosent="20160412143414" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte has lost communication" -->
<!-- id="CAMD57oe4TzydkQpKLzvvQ1opdHmevSqgWQTO-J88SgqwrTuNZw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20160412142246.GD1487_at_woyzeck" -->
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
<strong>Subject:</strong> Re: [OMPI users] orte has lost communication<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-12 10:34:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28929.php">dpchoudh .: "[OMPI users] Debugging help"</a>
<li><strong>Previous message:</strong> <a href="28927.php">Stefan Friedel: "Re: [OMPI users] orte has lost communication"</a>
<li><strong>In reply to:</strong> <a href="28927.php">Stefan Friedel: "Re: [OMPI users] orte has lost communication"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My apologies for the tardy response - been stuck in meetings. I'm glad to
<br>
hear that you are making progress tracking this down. FWIW: the error
<br>
message you received indicates that the socket from that node unexpectedly
<br>
reset during execution of the application. So it sounds like there is
<br>
something flaky in the Ethernet.
<br>
<p>One thing I've found that can cause that problem is two nodes having the
<br>
same IP address. This causes periodic random resets of the connections. So
<br>
you might want to just do an IP scan to ensure that all the addresses are
<br>
unique.
<br>
<p>Let us know if we can be of help
<br>
Ralph
<br>
<p><p>On Tue, Apr 12, 2016 at 7:22 AM, Stefan Friedel &lt;
<br>
stefan.friedel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Apr 12, 2016 at 01:30:37PM +0200, Stefan Friedel wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -thanks for you support!- nope, no core, just the &quot;orte has lost&quot;...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Dear list - the problem is _not_ related to openmpi. I compiled mvapich2
</span><br>
<span class="quotelev1">&gt; and I
</span><br>
<span class="quotelev1">&gt; get communication errors,too. Probably this is a hardware problem.
</span><br>
<span class="quotelev1">&gt; Sorry for the noise - I will report about the real reason for the orte has
</span><br>
<span class="quotelev1">&gt; lost... message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MfG/Sincerely
</span><br>
<span class="quotelev1">&gt; Stefan Friedel
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; IWR * 4.317 * INF205 * 69120 Heidelberg
</span><br>
<span class="quotelev1">&gt; T +49 6221 5414404 * F +49 6221 5414427
</span><br>
<span class="quotelev1">&gt; stefan.friedel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28927.php">http://www.open-mpi.org/community/lists/users/2016/04/28927.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28928/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28929.php">dpchoudh .: "[OMPI users] Debugging help"</a>
<li><strong>Previous message:</strong> <a href="28927.php">Stefan Friedel: "Re: [OMPI users] orte has lost communication"</a>
<li><strong>In reply to:</strong> <a href="28927.php">Stefan Friedel: "Re: [OMPI users] orte has lost communication"</a>
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
