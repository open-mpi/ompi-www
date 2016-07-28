<?
$subject_val = "Re: [MTT users] mtt reports arrive without subject.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 14 06:55:23 2008" -->
<!-- isoreceived="20080114115523" -->
<!-- sent="Mon, 14 Jan 2008 13:55:14 +0200" -->
<!-- isosent="20080114115514" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [MTT users] mtt reports arrive without subject." -->
<!-- id="478B4DA2.1030009_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4789F3BC.1000401_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [MTT users] mtt reports arrive without subject.<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-14 06:55:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0487.php">Jennis Pruett: "[MTT users] question on MTT setup instructions."</a>
<li><strong>Previous message:</strong> <a href="0485.php">Pavel Shamis (Pasha): "Re: [MTT users] mtt reports arrive without subject."</a>
<li><strong>In reply to:</strong> <a href="0485.php">Pavel Shamis (Pasha): "Re: [MTT users] mtt reports arrive without subject."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I found the problem .... it was a typo in name of variable. I had 
<br>
something like :
<br>
email_subject: MPI regression $broken_name
<br>
<p>After fixing the name I started to get reports !
<br>
<p>Thanks.
<br>
<p>Pasha
<br>
<p><p>Pavel Shamis (Pasha) wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I might've misread your last email. Did the new
</span><br>
<span class="quotelev2">&gt;&gt; email_subject INI parameter from above solve your issue? I'd
</span><br>
<span class="quotelev2">&gt;&gt; have to see the --debug output to know why the Subject was
</span><br>
<span class="quotelev2">&gt;&gt; blank.
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; Sorry I forgot to test the  &quot;email_subject = MPI test results: 
</span><br>
<span class="quotelev1">&gt; &amp;current_section()&quot;
</span><br>
<span class="quotelev1">&gt; I just tested the command line mailer and it works well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; email_subject = MPI test results: $phase / $sectiona
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In mail body I got:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; start_timestamp: Thu Jan 10 12:25:56 2008
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Was the body of the email okay, or was it really blank
</span><br>
<span class="quotelev2">&gt;&gt; following the start_timestamp line?
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; The email body was ok and only the subj. was empty.
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Ethan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pasha
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Pavel Shamis (Pasha)
Mellanox Technologies
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0487.php">Jennis Pruett: "[MTT users] question on MTT setup instructions."</a>
<li><strong>Previous message:</strong> <a href="0485.php">Pavel Shamis (Pasha): "Re: [MTT users] mtt reports arrive without subject."</a>
<li><strong>In reply to:</strong> <a href="0485.php">Pavel Shamis (Pasha): "Re: [MTT users] mtt reports arrive without subject."</a>
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
