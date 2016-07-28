<?
$subject_val = "Re: [OMPI users] Pros and cons of --enable-heterogeneous";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  7 17:17:21 2010" -->
<!-- isoreceived="20101007211721" -->
<!-- sent="Thu, 7 Oct 2010 15:17:14 -0600" -->
<!-- isosent="20101007211714" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pros and cons of --enable-heterogeneous" -->
<!-- id="AANLkTi=NP=_f3vrk7aVgEZi4zr=sCw4WvThZMzGGGkL0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1286480662.28705.4.camel_at_ronispc.chem.mcgill.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Pros and cons of --enable-heterogeneous<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-07 17:17:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14413.php">Ralph Castain: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<li><strong>Previous message:</strong> <a href="14411.php">Durga Choudhury: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<li><strong>In reply to:</strong> <a href="14410.php">David Ronis: "[OMPI users] Pros and cons of --enable-heterogeneous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14415.php">David Ronis: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<li><strong>Reply:</strong> <a href="14415.php">David Ronis: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hetero operations tend to lose a little performance due to the need to
<br>
convert data, but otherwise there is no real negative. We don't do it by
<br>
default solely because the majority of installations don't need to, and
<br>
there is no reason to lose even a little performance if it isn't necessary.
<br>
<p>If you want an application to be able to span that mix, then you'll need to
<br>
set that configure flag.
<br>
<p>On Thu, Oct 7, 2010 at 1:44 PM, David Ronis &lt;David.Ronis_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have various boxes that run openmpi and I can't seem to use all of
</span><br>
<span class="quotelev1">&gt; them at once because they have different CPU's (e.g., pentiums, athlons
</span><br>
<span class="quotelev1">&gt; (both 32 bit) vs Intel I7 (64 bit)).   I'm about the build 1.4.3 and was
</span><br>
<span class="quotelev1">&gt; wondering if I should add --enable-heterogenous to the configure flags.
</span><br>
<span class="quotelev1">&gt; Any advice as to why or why not would be appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14412/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14413.php">Ralph Castain: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<li><strong>Previous message:</strong> <a href="14411.php">Durga Choudhury: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<li><strong>In reply to:</strong> <a href="14410.php">David Ronis: "[OMPI users] Pros and cons of --enable-heterogeneous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14415.php">David Ronis: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<li><strong>Reply:</strong> <a href="14415.php">David Ronis: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
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
