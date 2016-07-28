<?
$subject_val = "Re: [OMPI users] sge tight integration leads to bad allocation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 20 09:29:31 2012" -->
<!-- isoreceived="20120420132931" -->
<!-- sent="Fri, 20 Apr 2012 15:29:26 +0200" -->
<!-- isosent="20120420132926" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eloi.gaudry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sge tight integration leads to bad allocation" -->
<!-- id="zarafa.4f9164b6.0a77.76bd902f028bb39a_at_mail.fft" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="053BFBFA-496B-4CC5-B69F-ED5C20B8A610_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Eloi Gaudry (<em>eloi.gaudry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-20 09:29:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19060.php">seshendra seshu: "[OMPI users] Regarding installation procedure for installing openmpi for 1master and 16 slaves"</a>
<li><strong>Previous message:</strong> <a href="19058.php">Reuti: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<li><strong>In reply to:</strong> <a href="19058.php">Reuti: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Those are related to the GM/MX component that are built within OpenMPI.
<br>
Actually, I used the --with-mx=PATH_TO_MX_INSTALL_DIRECTORY option while configuring OpenMPI and the mx btl and mtl were properly built.
<br>
It seems that OpenMPI wrongly tries to check for/use the gm module (which is of no use here as I'm using the mx2g myrinet libraries) upon startup instead of only probing the mx modules.
<br>
<p>I don't think that those problems are somehow related to the allocation issue.
<br>
Regards,
<br>
Eloi
<br>
<p><p><p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Reuti
<br>
Sent: vendredi 20 avril 2012 15:20
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] sge tight integration leads to bad allocation
<br>
<p>Am 20.04.2012 um 15:04 schrieb Eloi Gaudry:
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
<p>component_find: unable to open /opt/openmpi-1.4.4/lib/openmpi/mca_btl_gm: perhaps a missing symbol, or compiled for a different version of Open MPI? (ignored) [charlie:23188] mca: base: 
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
<span class="quotelev1">&gt; &lt;job1882.log&gt;&lt;job1882.sh&gt;&lt;pselfax.carl&gt;&lt;pselfax.charlie&gt;&lt;qstat-gt&gt;&lt;qst
</span><br>
<span class="quotelev1">&gt; at-j1882&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19060.php">seshendra seshu: "[OMPI users] Regarding installation procedure for installing openmpi for 1master and 16 slaves"</a>
<li><strong>Previous message:</strong> <a href="19058.php">Reuti: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<li><strong>In reply to:</strong> <a href="19058.php">Reuti: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
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
