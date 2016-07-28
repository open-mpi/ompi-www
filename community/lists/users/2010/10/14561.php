<?
$subject_val = "Re: [OMPI users] OPEN MPI data transfer error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 22 17:54:45 2010" -->
<!-- isoreceived="20101022215445" -->
<!-- sent="Fri, 22 Oct 2010 14:54:20 -0700" -->
<!-- isosent="20101022215420" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPEN MPI data transfer error" -->
<!-- id="AANLkTimmw-gGg2obyujdLOKn5qZ5Z6LV-fu80buqMMqL_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="84455D65-22EB-4804-B8D9-789E9A1BEFB5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OPEN MPI data transfer error<br>
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-22 17:54:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14562.php">Brandon Fulcher: "[OMPI users] Running simple MPI program"</a>
<li><strong>Previous message:</strong> <a href="14560.php">Jeff Squyres: "Re: [OMPI users] OPEN MPI data transfer error"</a>
<li><strong>In reply to:</strong> <a href="14560.php">Jeff Squyres: "Re: [OMPI users] OPEN MPI data transfer error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you use the waitall on the sender or the receiver side? I noticed you
<br>
didn't have the request variable at the receiver side that is needed in the
<br>
waitall.
<br>
<p>On Fri, Oct 22, 2010 at 2:48 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 22, 2010, at 5:36 PM, Jack Bryan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have used mpi_waitall() to do it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The data can be received but the contents are wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send a more accurate code snipit, and/or the code that you are
</span><br>
<span class="quotelev1">&gt; using to check whether the data is right/wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ask because I'm a little suspect of what you sent already (e.g., you
</span><br>
<span class="quotelev1">&gt; didn't include the waitall, which is kinda important :-) ).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14561/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14562.php">Brandon Fulcher: "[OMPI users] Running simple MPI program"</a>
<li><strong>Previous message:</strong> <a href="14560.php">Jeff Squyres: "Re: [OMPI users] OPEN MPI data transfer error"</a>
<li><strong>In reply to:</strong> <a href="14560.php">Jeff Squyres: "Re: [OMPI users] OPEN MPI data transfer error"</a>
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
