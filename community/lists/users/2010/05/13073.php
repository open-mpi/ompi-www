<?
$subject_val = "Re: [OMPI users] default hostfile (Ubuntu-9.10)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 18 09:46:40 2010" -->
<!-- isoreceived="20100518134640" -->
<!-- sent="Tue, 18 May 2010 07:46:34 -0600" -->
<!-- isosent="20100518134634" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] default hostfile (Ubuntu-9.10)" -->
<!-- id="AANLkTin60lOhgGpFaa1QH2mf37YQAJrTKdPhg_ZS8BUt_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BF29598.9030106_at_access.denied" -->
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
<strong>Subject:</strong> Re: [OMPI users] default hostfile (Ubuntu-9.10)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-18 09:46:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13074.php">Josh Hursey: "Re: [OMPI users] ompi-restart fails with &quot;found pid in use&quot;"</a>
<li><strong>Previous message:</strong> <a href="13072.php">Stefan Kuhne: "Re: [OMPI users] default hostfile (Ubuntu-9.10)"</a>
<li><strong>In reply to:</strong> <a href="13072.php">Stefan Kuhne: "Re: [OMPI users] default hostfile (Ubuntu-9.10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13084.php">Stefan Kuhne: "Re: [OMPI users] default hostfile (Ubuntu-9.10)"</a>
<li><strong>Reply:</strong> <a href="13084.php">Stefan Kuhne: "Re: [OMPI users] default hostfile (Ubuntu-9.10)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Starting in the 1.3 series, you have to tell OMPI where to find the default
<br>
hostfile. So put this in your default MCA param file:
<br>
<p>orte_default_hostfile=&lt;absolute-path-to-your-file&gt;
<br>
<p>That should fix it.
<br>
<p>On Tue, May 18, 2010 at 7:26 AM, Stefan Kuhne &lt;stefan.kuhne_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Am 18.05.2010 15:09, schrieb Ralph Castain:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Could you tell us what version of OMPI you are using?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; it's openmpi-1.3.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Stefan Kuhne
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13073/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13074.php">Josh Hursey: "Re: [OMPI users] ompi-restart fails with &quot;found pid in use&quot;"</a>
<li><strong>Previous message:</strong> <a href="13072.php">Stefan Kuhne: "Re: [OMPI users] default hostfile (Ubuntu-9.10)"</a>
<li><strong>In reply to:</strong> <a href="13072.php">Stefan Kuhne: "Re: [OMPI users] default hostfile (Ubuntu-9.10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13084.php">Stefan Kuhne: "Re: [OMPI users] default hostfile (Ubuntu-9.10)"</a>
<li><strong>Reply:</strong> <a href="13084.php">Stefan Kuhne: "Re: [OMPI users] default hostfile (Ubuntu-9.10)"</a>
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
