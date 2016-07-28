<?
$subject_val = "Re: [OMPI users] sge tight integration leads to bad allocation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 20 09:20:00 2012" -->
<!-- isoreceived="20120420132000" -->
<!-- sent="Fri, 20 Apr 2012 15:19:47 +0200" -->
<!-- isosent="20120420131947" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sge tight integration leads to bad allocation" -->
<!-- id="053BFBFA-496B-4CC5-B69F-ED5C20B8A610_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="zarafa.4f915edf.7273.454c31620909df83_at_mail.fft" -->
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
<strong>Subject:</strong> Re: [OMPI users] sge tight integration leads to bad allocation<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-20 09:19:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19059.php">Eloi Gaudry: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<li><strong>Previous message:</strong> <a href="19057.php">Eloi Gaudry: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<li><strong>In reply to:</strong> <a href="19057.php">Eloi Gaudry: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19059.php">Eloi Gaudry: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<li><strong>Reply:</strong> <a href="19059.php">Eloi Gaudry: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 20.04.2012 um 15:04 schrieb Eloi Gaudry:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph, Reuti,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I've just observed the same issue without specifying -np.
</span><br>
<span class="quotelev1">&gt; Please find attached the ps -elfax output from the computing nodes and some sge related information.
</span><br>
<p>What about these error message:
<br>
<p>component_find: unable to open /opt/openmpi-1.4.4/lib/openmpi/mca_btl_gm: perhaps a missing symbol, or compiled for a different version of Open MPI? (ignored)
<br>
[charlie:23188] mca: base: 
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Eloi
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -----Original message-----
</span><br>
<span class="quotelev1">&gt; From:	Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent:	Wed 04-11-2012 02:25 pm
</span><br>
<span class="quotelev1">&gt; Subject:	Re: [OMPI users] sge tight integration leads to bad allocation
</span><br>
<span class="quotelev1">&gt; To:	Open MPI Users &lt;users_at_[hidden]&gt;; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 11, 2012, at 6:20 AM, Reuti wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Am 11.04.2012 um 04:26 schrieb Ralph Castain:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Reuti
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Can you replicate this problem on your machine? Can you try it with 1.5?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; No. It's also working fine in 1.5.5 in some tests. I even forced an uneven distribution by limiting the slots setting for some machines in the queue configuration.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks - that confirms what I've been able to test. It sounds like it is something in Eloi's setup, but I can't fathom what it would be - the allocations all look acceptable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm stumped. :-(
</span><br>
<span class="quotelev1">&gt; &lt;job1882.log&gt;&lt;job1882.sh&gt;&lt;pselfax.carl&gt;&lt;pselfax.charlie&gt;&lt;qstat-gt&gt;&lt;qstat-j1882&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19059.php">Eloi Gaudry: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<li><strong>Previous message:</strong> <a href="19057.php">Eloi Gaudry: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<li><strong>In reply to:</strong> <a href="19057.php">Eloi Gaudry: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19059.php">Eloi Gaudry: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<li><strong>Reply:</strong> <a href="19059.php">Eloi Gaudry: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
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
