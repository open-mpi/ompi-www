<?
$subject_val = "Re: [OMPI users] opal_cr_tmp_dir";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 12 18:00:03 2010" -->
<!-- isoreceived="20100512220003" -->
<!-- sent="Wed, 12 May 2010 14:59:22 -0700" -->
<!-- isosent="20100512215922" -->
<!-- name="ananda.mudar_at_[hidden]" -->
<!-- email="ananda.mudar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] opal_cr_tmp_dir" -->
<!-- id="1E3BF6B8D1243842A175F7C7069EB0E70712AF11_at_usa-mv-msg.wipro.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] opal_cr_tmp_dir" -->
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
<strong>Subject:</strong> Re: [OMPI users] opal_cr_tmp_dir<br>
<strong>From:</strong> <a href="mailto:ananda.mudar_at_[hidden]?Subject=Re:%20[OMPI%20users]%20opal_cr_tmp_dir"><em>ananda.mudar_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-05-12 17:59:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13038.php">Ralph Castain: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Previous message:</strong> <a href="13036.php">Ralph Castain: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Maybe in reply to:</strong> <a href="13031.php">ananda.mudar_at_[hidden]: "[OMPI users] opal_cr_tmp_dir"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13038.php">Ralph Castain: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Reply:</strong> <a href="13038.php">Ralph Castain: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph
<br>
<p>I have these parameters set in ~/.openmpi/mca-params.conf file
<br>
<p>$ cat ~/.openmpi/mca-params.conf
<br>
<p>orte_tmpdir_base = /home/ananda/ORTE
<br>
<p>opal_cr_tmp_dir = /home/ananda/OPAL
<br>
<p>$
<br>
<p>&nbsp;
<br>
<p>Should I be setting OMPI_MCA_opal_cr_tmp_dir?
<br>
<p>&nbsp;
<br>
<p>FYI, I am using openmpi 1.3.4 with blcr 0.8.2
<br>
<p><p>Thanks
<br>
<p>Ananda
<br>
<p>=============================
<br>
<p>Subject: Re: [OMPI users] opal_cr_tmp_dir
<br>
From: Ralph Castain (rhc_at_[hidden])
<br>
Date: 2010-05-12 16:47:16 
<br>
<p>*	Previous message: Jeff Squyres: &quot;Re: [OMPI users] getc in
<br>
openmpi&quot;
<br>
&lt;<a href="http://www.open-mpi.org/community/lists/users/2010/05/13035.php">http://www.open-mpi.org/community/lists/users/2010/05/13035.php</a>&gt;  
<br>
*	In reply to: ananda.mudar_at_[hidden]: &quot;Re: [OMPI users]
<br>
opal_cr_tmp_dir&quot;
<br>
&lt;<a href="http://www.open-mpi.org/community/lists/users/2010/05/13033.php">http://www.open-mpi.org/community/lists/users/2010/05/13033.php</a>&gt;  
<br>
<p>________________________________
<br>
<p>ompi-restart just does a fork/exec of the mpirun, so it should get the
<br>
param if it is in your environ. How are you setting it? Have you tried
<br>
adding OMPI_MCA_opal_cr_tmp_dir=&lt;whatever&gt; to your environment? 
<br>
<p>On May 12, 2010, at 12:45 PM, &lt;ananda.mudar_at_[hidden]&gt; wrote: 
<br>
<p><span class="quotelev1">&gt; Thanks Ralph. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another question. Even though I am setting opal_cr_tmp_dir to a
</span><br>
directory other than /tmp while calling ompi-restart command, this
<br>
setting is not getting passed to the mpirun command that gets generated
<br>
by ompi-restart. How do I overcome this constraint? 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ananda 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ============== 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] opal_cr_tmp_dir 
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain (rhc_at_[hidden]) 
</span><br>
<span class="quotelev1">&gt; Date: 2010-05-12 14:38:00 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Previous message: ananda.mudar_at_[hidden]: &quot;[OMPI users]
</span><br>
opal_cr_tmp_dir&quot; 
<br>
<span class="quotelev1">&gt; In reply to: ananda.mudar_at_[hidden]: &quot;[OMPI users] opal_cr_tmp_dir&quot; 
</span><br>
<span class="quotelev1">&gt; It's a different MCA param: orte_tmpdir_base 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 12, 2010, at 12:33 PM, &lt;ananda.mudar_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am setting the MCA parameter &quot;opal_cr_tmp_dir&quot; to a directory
</span><br>
other than /tmp while calling &quot;mpirun&quot;, &quot;ompi-restart&quot;, and
<br>
&quot;ompi-checkpoint&quot; commands so that I don't fill up /tmp filesystem. But
<br>
I see that openmpi-sessions* directory is still getting created under
<br>
/tmp. How do I overcome this problem so that openmpi-sessions* directory
<br>
also gets created under the same directory I have defined for
<br>
&quot;opal_cr_tmp_dir&quot;? 
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is there a way to clean up these temporary files after their
</span><br>
requirement is over? 
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks 
</span><br>
<span class="quotelev2">&gt; &gt; Ananda 
</span><br>
<span class="quotelev2">&gt; &gt; Please do not print this email unless it is absolutely necessary. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The information contained in this electronic message and any
</span><br>
attachments to this message are intended for the exclusive use of the
<br>
addressee(s) and may contain proprietary, confidential or privileged
<br>
information. If you are not the intended recipient, you should not
<br>
disseminate, distribute or copy this e-mail. Please notify the sender
<br>
immediately and destroy all copies of this message and any attachments. 
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; WARNING: Computer viruses can be transmitted via email. The
</span><br>
recipient should check this email and any attachments for the presence
<br>
of viruses. The company accepts no liability for any damage caused by
<br>
any virus transmitted by this email. 
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; www.wipro.com 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________ 
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list 
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please do not print this email unless it is absolutely necessary. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The information contained in this electronic message and any
</span><br>
attachments to this message are intended for the exclusive use of the
<br>
addressee(s) and may contain proprietary, confidential or privileged
<br>
information. If you are not the intended recipient, you should not
<br>
disseminate, distribute or copy this e-mail. Please notify the sender
<br>
immediately and destroy all copies of this message and any attachments. 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING: Computer viruses can be transmitted via email. The recipient
</span><br>
should check this email and any attachments for the presence of viruses.
<br>
The company accepts no liability for any damage caused by any virus
<br>
transmitted by this email. 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; www.wipro.com 
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
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>Ananda B Mudar, PMP
<br>
<p>Senior Technical Architect
<br>
<p>Wipro Technologies
<br>
<p>Ph: 972 765 8093
<br>
<p>ananda.mudar_at_[hidden]
<br>
<p>&nbsp;
<br>
<p><p>Please do not print this email unless it is absolutely necessary. 

The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 

WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 

www.wipro.com
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13037/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13038.php">Ralph Castain: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Previous message:</strong> <a href="13036.php">Ralph Castain: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Maybe in reply to:</strong> <a href="13031.php">ananda.mudar_at_[hidden]: "[OMPI users] opal_cr_tmp_dir"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13038.php">Ralph Castain: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Reply:</strong> <a href="13038.php">Ralph Castain: "Re: [OMPI users] opal_cr_tmp_dir"</a>
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
