<?
$subject_val = "Re: [OMPI devel] trunk hangs since r19010";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 08:41:10 2008" -->
<!-- isoreceived="20080728124110" -->
<!-- sent="Mon, 28 Jul 2008 06:41:01 -0600" -->
<!-- isosent="20080728124101" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk hangs since r19010" -->
<!-- id="5D7E76F8-83AF-47AA-B2BB-F9DB29F8F950_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990807280501t2e71f297ibbe442522b22c732_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk hangs since r19010<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-28 08:41:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4447.php">Ralph Castain: "[OMPI devel] Funny warning message"</a>
<li><strong>Previous message:</strong> <a href="4445.php">Lenny Verkhovsky: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>In reply to:</strong> <a href="4445.php">Lenny Verkhovsky: "Re: [OMPI devel] trunk hangs since r19010"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4451.php">Ralph Castain: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Reply:</strong> <a href="4451.php">Ralph Castain: "Re: [OMPI devel] trunk hangs since r19010"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It could also be something new. Brad and I noted on Fri that IB was  
<br>
locking up as soon as we tried any cross-node communications. Hadn't  
<br>
seen that before, and at least I haven't explored it further - planned  
<br>
to do so today.
<br>
<p><p>On Jul 28, 2008, at 6:01 AM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt; I believe it it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/28/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Jul 28, 2008, at 7:51 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this related to r1378?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gah -- I meant #1378, meaning the &quot;PML ob1 deadlock&quot; ticket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 28, 2008, at 7:13 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I experience hanging of tests ( latency ) since r19010
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4446/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4447.php">Ralph Castain: "[OMPI devel] Funny warning message"</a>
<li><strong>Previous message:</strong> <a href="4445.php">Lenny Verkhovsky: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>In reply to:</strong> <a href="4445.php">Lenny Verkhovsky: "Re: [OMPI devel] trunk hangs since r19010"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4451.php">Ralph Castain: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Reply:</strong> <a href="4451.php">Ralph Castain: "Re: [OMPI devel] trunk hangs since r19010"</a>
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
