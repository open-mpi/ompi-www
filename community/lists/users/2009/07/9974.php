<?
$subject_val = "Re: [OMPI users] selectively bind MPI to one HCA out of available ones";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 15 09:20:59 2009" -->
<!-- isoreceived="20090715132059" -->
<!-- sent="Wed, 15 Jul 2009 07:20:52 -0600" -->
<!-- isosent="20090715132052" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] selectively bind MPI to one HCA out of available ones" -->
<!-- id="71d2d8cc0907150620rf67e63bsecc50ab0b6b95335_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF4CCB46E9.BC0DBA7C-ON652575F4.0048780A-652575F4.00489E89_at_crlindia.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] selectively bind MPI to one HCA out of available ones<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-15 09:20:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9975.php">Lenny Verkhovsky: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9973.php">Klymak Jody: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>In reply to:</strong> <a href="9972.php">neeraj_at_[hidden]: "[OMPI users] selectively bind MPI to one HCA out of available ones"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9976.php">neeraj_at_[hidden]: "Re: [OMPI users] selectively bind MPI to one HCA out of available	ones"</a>
<li><strong>Reply:</strong> <a href="9976.php">neeraj_at_[hidden]: "Re: [OMPI users] selectively bind MPI to one HCA out of available	ones"</a>
<li><strong>Reply:</strong> <a href="9977.php">Lenny Verkhovsky: "Re: [OMPI users] selectively bind MPI to one HCA out of available ones"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Take a look at the output from &quot;ompi_info --params btl openib&quot; and you will
<br>
see the available MCA params to direct the openib subsystem. I believe you
<br>
will find that you can indeed specify the interface.
<br>
<p><p>On Wed, Jul 15, 2009 at 7:15 AM, &lt;neeraj_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I have a cluster where both HCA's of blade are active, but
</span><br>
<span class="quotelev1">&gt; connected to different subnet.
</span><br>
<span class="quotelev1">&gt;         Is there an option in MPI to select one HCA out of available one's?
</span><br>
<span class="quotelev1">&gt; I know it can be done by making changes in openmpi code, but i need clean
</span><br>
<span class="quotelev1">&gt; interface like option during mpi launch time to select mthca0 or mthca1?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Any help is appreciated. Btw i just checked Mvapich and feature is
</span><br>
<span class="quotelev1">&gt; there inside.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Neeraj Chourasia (MTS)
</span><br>
<span class="quotelev1">&gt; Computational Research Laboratories Ltd.
</span><br>
<span class="quotelev1">&gt; (A wholly Owned Subsidiary of TATA SONS Ltd)
</span><br>
<span class="quotelev1">&gt; B-101, ICC Trade Towers, Senapati Bapat Road
</span><br>
<span class="quotelev1">&gt; Pune 411016 (Mah) INDIA
</span><br>
<span class="quotelev1">&gt; (O) +91-20-6620 9863  (Fax) +91-20-6620 9862
</span><br>
<span class="quotelev1">&gt; M: +91.9225520634
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =====-----=====-----===== Notice: The information contained in this e-mail
</span><br>
<span class="quotelev1">&gt; message and/or attachments to it may contain confidential or privileged
</span><br>
<span class="quotelev1">&gt; information. If you are not the intended recipient, any dissemination, use,
</span><br>
<span class="quotelev1">&gt; review, distribution, printing or copying of the information contained in
</span><br>
<span class="quotelev1">&gt; this e-mail message and/or attachments to it are strictly prohibited. If you
</span><br>
<span class="quotelev1">&gt; have received this communication in error, please notify us by reply e-mail
</span><br>
<span class="quotelev1">&gt; or telephone and immediately and permanently delete the message and any
</span><br>
<span class="quotelev1">&gt; attachments. Internet communications cannot be guaranteed to be timely,
</span><br>
<span class="quotelev1">&gt; secure, error or virus-free. The sender does not accept liability for any
</span><br>
<span class="quotelev1">&gt; errors or omissions.Thank you =====-----=====-----=====
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9974/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9975.php">Lenny Verkhovsky: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9973.php">Klymak Jody: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>In reply to:</strong> <a href="9972.php">neeraj_at_[hidden]: "[OMPI users] selectively bind MPI to one HCA out of available ones"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9976.php">neeraj_at_[hidden]: "Re: [OMPI users] selectively bind MPI to one HCA out of available	ones"</a>
<li><strong>Reply:</strong> <a href="9976.php">neeraj_at_[hidden]: "Re: [OMPI users] selectively bind MPI to one HCA out of available	ones"</a>
<li><strong>Reply:</strong> <a href="9977.php">Lenny Verkhovsky: "Re: [OMPI users] selectively bind MPI to one HCA out of available ones"</a>
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
