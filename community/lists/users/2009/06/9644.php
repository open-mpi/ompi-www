<?
$subject_val = "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 19 13:28:08 2009" -->
<!-- isoreceived="20090619172808" -->
<!-- sent="Fri, 19 Jun 2009 13:28:04 -0400" -->
<!-- isosent="20090619172804" -->
<!-- name="Mark Bolstad" -->
<!-- email="the.render.dude_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes" -->
<!-- id="82dde0906191028w23ee5bd5gfb16463d9db224df_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A3BC81B.70604_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes<br>
<strong>From:</strong> Mark Bolstad (<em>the.render.dude_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-19 13:28:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9645.php">Brock Palen: "[OMPI users] Linking MPI applications with pgi IPA"</a>
<li><strong>Previous message:</strong> <a href="9643.php">Eugene Loh: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>In reply to:</strong> <a href="9643.php">Eugene Loh: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9647.php">George Bosilca: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>Reply:</strong> <a href="9647.php">George Bosilca: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, but that won't help. In the real application the messages are at
<br>
least 25,000 bytes long, mostly much larger.
<br>
<p>Thanks,
<br>
Mark
<br>
<p><p>On Fri, Jun 19, 2009 at 1:17 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Mark Bolstad wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I have a small test code that I've managed to duplicate the results from a
</span><br>
<span class="quotelev2">&gt;&gt; larger code. In essence, using the sm btl with ISend, I wind up with the
</span><br>
<span class="quotelev2">&gt;&gt; communication being completely serialized, i.e., all the calls from process
</span><br>
<span class="quotelev2">&gt;&gt; 1 complete, then all from 2, ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need to do some other stuff, but might spend time on this later.  For
</span><br>
<span class="quotelev1">&gt; now, I'll just observe that your sends are rendezvous sends.  E.g., if you
</span><br>
<span class="quotelev1">&gt; decrease BUFLEN from 25000 to 2500 (namely, from over 4K to under 4K), the
</span><br>
<span class="quotelev1">&gt; behavior should change (to what you'd expect).  That may or may not help
</span><br>
<span class="quotelev1">&gt; you, but I think it's an important observation in reasoning about this
</span><br>
<span class="quotelev1">&gt; behavior.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9644/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9645.php">Brock Palen: "[OMPI users] Linking MPI applications with pgi IPA"</a>
<li><strong>Previous message:</strong> <a href="9643.php">Eugene Loh: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>In reply to:</strong> <a href="9643.php">Eugene Loh: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9647.php">George Bosilca: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>Reply:</strong> <a href="9647.php">George Bosilca: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
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
