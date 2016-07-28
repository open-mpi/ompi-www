<?
$subject_val = "Re: [OMPI users] opal_cr_tmp_dir";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 12 14:46:37 2010" -->
<!-- isoreceived="20100512184637" -->
<!-- sent="Wed, 12 May 2010 11:45:30 -0700" -->
<!-- isosent="20100512184530" -->
<!-- name="ananda.mudar_at_[hidden]" -->
<!-- email="ananda.mudar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] opal_cr_tmp_dir" -->
<!-- id="1E3BF6B8D1243842A175F7C7069EB0E70712AD1F_at_usa-mv-msg.wipro.com" -->
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
<strong>Date:</strong> 2010-05-12 14:45:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13034.php">Fernando Lemos: "Re: [OMPI users] getc in openmpi"</a>
<li><strong>Previous message:</strong> <a href="13032.php">Ralph Castain: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Maybe in reply to:</strong> <a href="13031.php">ananda.mudar_at_[hidden]: "[OMPI users] opal_cr_tmp_dir"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13036.php">Ralph Castain: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Reply:</strong> <a href="13036.php">Ralph Castain: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph.
<br>
<p>Another question. Even though I am setting opal_cr_tmp_dir to a
<br>
directory other than /tmp while calling ompi-restart command, this
<br>
setting is not getting passed to the mpirun command that gets generated
<br>
by ompi-restart. How do I overcome this constraint?
<br>
<p>&nbsp;
<br>
<p>Thanks
<br>
<p>Ananda
<br>
<p>==============
<br>
<p>Subject: Re: [OMPI users] opal_cr_tmp_dir
<br>
From: Ralph Castain (rhc_at_[hidden])
<br>
Date: 2010-05-12 14:38:00 
<br>
<p>*	Previous message: ananda.mudar_at_[hidden]: &quot;[OMPI users]
<br>
opal_cr_tmp_dir&quot;
<br>
&lt;<a href="http://www.open-mpi.org/community/lists/users/2010/05/13031.php">http://www.open-mpi.org/community/lists/users/2010/05/13031.php</a>&gt;  
<br>
*	In reply to: ananda.mudar_at_[hidden]: &quot;[OMPI users]
<br>
opal_cr_tmp_dir&quot;
<br>
&lt;<a href="http://www.open-mpi.org/community/lists/users/2010/05/13031.php">http://www.open-mpi.org/community/lists/users/2010/05/13031.php</a>&gt;  
<br>
<p>________________________________
<br>
<p>It's a different MCA param: orte_tmpdir_base 
<br>
<p>On May 12, 2010, at 12:33 PM, &lt;ananda.mudar_at_[hidden]&gt; wrote: 
<br>
<p><span class="quotelev1">&gt; I am setting the MCA parameter &quot;opal_cr_tmp_dir&quot; to a directory other
</span><br>
than /tmp while calling &quot;mpirun&quot;, &quot;ompi-restart&quot;, and &quot;ompi-checkpoint&quot;
<br>
commands so that I don't fill up /tmp filesystem. But I see that
<br>
openmpi-sessions* directory is still getting created under /tmp. How do
<br>
I overcome this problem so that openmpi-sessions* directory also gets
<br>
created under the same directory I have defined for &quot;opal_cr_tmp_dir&quot;? 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a way to clean up these temporary files after their
</span><br>
requirement is over? 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks 
</span><br>
<span class="quotelev1">&gt; Ananda 
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
<p><p>Please do not print this email unless it is absolutely necessary. 

The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 

WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 

www.wipro.com
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13033/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13034.php">Fernando Lemos: "Re: [OMPI users] getc in openmpi"</a>
<li><strong>Previous message:</strong> <a href="13032.php">Ralph Castain: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Maybe in reply to:</strong> <a href="13031.php">ananda.mudar_at_[hidden]: "[OMPI users] opal_cr_tmp_dir"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13036.php">Ralph Castain: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Reply:</strong> <a href="13036.php">Ralph Castain: "Re: [OMPI users] opal_cr_tmp_dir"</a>
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
