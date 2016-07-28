<?
$subject_val = "Re: [OMPI users] selectively bind MPI to one HCA out of available ones";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 15 09:33:38 2009" -->
<!-- isoreceived="20090715133338" -->
<!-- sent="Wed, 15 Jul 2009 16:33:33 +0300" -->
<!-- isosent="20090715133333" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] selectively bind MPI to one HCA out of available ones" -->
<!-- id="453d39990907150633g572b9f7ft3b559566457e2532_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71d2d8cc0907150620rf67e63bsecc50ab0b6b95335_at_mail.gmail.com" -->
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
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-15 09:33:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9978.php">Matthias Jurenz: "Re: [OMPI users] questions about tracing OpenMPI program"</a>
<li><strong>Previous message:</strong> <a href="9976.php">neeraj_at_[hidden]: "Re: [OMPI users] selectively bind MPI to one HCA out of available	ones"</a>
<li><strong>In reply to:</strong> <a href="9974.php">Ralph Castain: "Re: [OMPI users] selectively bind MPI to one HCA out of available ones"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9991.php">Pavel Shamis (Pasha): "Re: [OMPI users] [OMPI devel] selectively bind MPI to one HCA out of available ones"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Make sure you have Open MPI 1.3 series,
<br>
I dont think the if_include param is not avaliable in 1.2 series.
<br>
<p>max btls controls fragmentation and load balancing over similar BTLS (
<br>
example using LMC &gt; 0, or 2 ports connected to 1 network )
<br>
you need if_include param
<br>
<p><p><p>On Wed, Jul 15, 2009 at 4:20 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Take a look at the output from &quot;ompi_info --params btl openib&quot; and you will
</span><br>
<span class="quotelev1">&gt; see the available MCA params to direct the openib subsystem. I believe you
</span><br>
<span class="quotelev1">&gt; will find that you can indeed specify the interface.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   On Wed, Jul 15, 2009 at 7:15 AM, &lt;neeraj_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I have a cluster where both HCA's of blade are active, but
</span><br>
<span class="quotelev2">&gt;&gt; connected to different subnet.
</span><br>
<span class="quotelev2">&gt;&gt;         Is there an option in MPI to select one HCA out of available
</span><br>
<span class="quotelev2">&gt;&gt; one's? I know it can be done by making changes in openmpi code, but i need
</span><br>
<span class="quotelev2">&gt;&gt; clean interface like option during mpi launch time to select mthca0 or
</span><br>
<span class="quotelev2">&gt;&gt; mthca1?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Any help is appreciated. Btw i just checked Mvapich and feature is
</span><br>
<span class="quotelev2">&gt;&gt; there inside.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Neeraj Chourasia (MTS)
</span><br>
<span class="quotelev2">&gt;&gt; Computational Research Laboratories Ltd.
</span><br>
<span class="quotelev2">&gt;&gt; (A wholly Owned Subsidiary of TATA SONS Ltd)
</span><br>
<span class="quotelev2">&gt;&gt; B-101, ICC Trade Towers, Senapati Bapat Road
</span><br>
<span class="quotelev2">&gt;&gt; Pune 411016 (Mah) INDIA
</span><br>
<span class="quotelev2">&gt;&gt; (O) +91-20-6620 9863  (Fax) +91-20-6620 9862
</span><br>
<span class="quotelev2">&gt;&gt; M: +91.9225520634
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; =====-----=====-----===== Notice: The information contained in this e-mail
</span><br>
<span class="quotelev2">&gt;&gt; message and/or attachments to it may contain confidential or privileged
</span><br>
<span class="quotelev2">&gt;&gt; information. If you are not the intended recipient, any dissemination, use,
</span><br>
<span class="quotelev2">&gt;&gt; review, distribution, printing or copying of the information contained in
</span><br>
<span class="quotelev2">&gt;&gt; this e-mail message and/or attachments to it are strictly prohibited. If you
</span><br>
<span class="quotelev2">&gt;&gt; have received this communication in error, please notify us by reply e-mail
</span><br>
<span class="quotelev2">&gt;&gt; or telephone and immediately and permanently delete the message and any
</span><br>
<span class="quotelev2">&gt;&gt; attachments. Internet communications cannot be guaranteed to be timely,
</span><br>
<span class="quotelev2">&gt;&gt; secure, error or virus-free. The sender does not accept liability for any
</span><br>
<span class="quotelev2">&gt;&gt; errors or omissions.Thank you =====-----=====-----=====
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9977/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9978.php">Matthias Jurenz: "Re: [OMPI users] questions about tracing OpenMPI program"</a>
<li><strong>Previous message:</strong> <a href="9976.php">neeraj_at_[hidden]: "Re: [OMPI users] selectively bind MPI to one HCA out of available	ones"</a>
<li><strong>In reply to:</strong> <a href="9974.php">Ralph Castain: "Re: [OMPI users] selectively bind MPI to one HCA out of available ones"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9991.php">Pavel Shamis (Pasha): "Re: [OMPI users] [OMPI devel] selectively bind MPI to one HCA out of available ones"</a>
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
