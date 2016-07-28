<?
$subject_val = "Re: [OMPI users] opal_cr_tmp_dir";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 12 19:48:26 2010" -->
<!-- isoreceived="20100512234826" -->
<!-- sent="Wed, 12 May 2010 17:48:16 -0600" -->
<!-- isosent="20100512234816" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] opal_cr_tmp_dir" -->
<!-- id="9EE8A2C2-0534-4BF2-B595-FFD6186C244F_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1E3BF6B8D1243842A175F7C7069EB0E70712AF53_at_usa-mv-msg.wipro.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-12 19:48:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13042.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Previous message:</strong> <a href="13040.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>In reply to:</strong> <a href="13040.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13042.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Define them in your environment prior to executing any of those commands.
<br>
<p>On May 12, 2010, at 4:43 PM, &lt;ananda.mudar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When you say manually, do you mean setting these parameters in the command line while calling mpirun, ompi-restart, and ompi-checkpoint? Or is there another way to set these parameters?
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
<span class="quotelev1">&gt; ==================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] opal_cr_tmp_dir
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain (rhc_at_[hidden])
</span><br>
<span class="quotelev1">&gt; Date: 2010-05-12 18:09:17
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Previous message: ananda.mudar_at_[hidden]: &quot;Re: [OMPI users] opal_cr_tmp_dir&quot;
</span><br>
<span class="quotelev1">&gt; In reply to: ananda.mudar_at_[hidden]: &quot;Re: [OMPI users] opal_cr_tmp_dir&quot;
</span><br>
<span class="quotelev1">&gt; You shouldn't have to, but there may be a bug in the system. Try manually setting both envars and see if it fixes the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 12, 2010, at 3:59 PM, &lt;ananda.mudar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ralph 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have these parameters set in ~/.openmpi/mca-params.conf file 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ cat ~/.openmpi/mca-params.conf 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; orte_tmpdir_base = /home/ananda/ORTE 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; opal_cr_tmp_dir = /home/ananda/OPAL 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Should I be setting OMPI_MCA_opal_cr_tmp_dir? 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; FYI, I am using openmpi 1.3.4 with blcr 0.8.2 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ananda 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ============================= 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] opal_cr_tmp_dir 
</span><br>
<span class="quotelev2">&gt; &gt; From: Ralph Castain (rhc_at_[hidden]) 
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2010-05-12 16:47:16 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Previous message: Jeff Squyres: &quot;Re: [OMPI users] getc in openmpi&quot; 
</span><br>
<span class="quotelev2">&gt; &gt; In reply to: ananda.mudar_at_[hidden]: &quot;Re: [OMPI users] opal_cr_tmp_dir&quot; 
</span><br>
<span class="quotelev2">&gt; &gt; ompi-restart just does a fork/exec of the mpirun, so it should get the param if it is in your environ. How are you setting it? Have you tried adding OMPI_MCA_opal_cr_tmp_dir=&lt;whatever&gt; to your environment? 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On May 12, 2010, at 12:45 PM, &lt;ananda.mudar_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks Ralph. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Another question. Even though I am setting opal_cr_tmp_dir to a directory other than /tmp while calling ompi-restart command, this setting is not getting passed to the mpirun command that gets generated by ompi-restart. How do I overcome this constraint? 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Ananda 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ============== 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: Re: [OMPI users] opal_cr_tmp_dir 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: Ralph Castain (rhc_at_[hidden]) 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Date: 2010-05-12 14:38:00 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Previous message: ananda.mudar_at_[hidden]: &quot;[OMPI users] opal_cr_tmp_dir&quot; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; In reply to: ananda.mudar_at_[hidden]: &quot;[OMPI users] opal_cr_tmp_dir&quot; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It's a different MCA param: orte_tmpdir_base 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On May 12, 2010, at 12:33 PM, &lt;ananda.mudar_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I am setting the MCA parameter &#147;opal_cr_tmp_dir&#148; to a directory other than /tmp while calling &#147;mpirun&#148;, &#147;ompi-restart&#148;, and &#147;ompi-checkpoint&#148; commands so that I don&#146;t fill up /tmp filesystem. But I see that openmpi-sessions* directory is still getting created under /tmp. How do I overcome this problem so that openmpi-sessions* directory also gets created under the same directory I have defined for &#147;opal_cr_tmp_dir&#148;? 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Is there a way to clean up these temporary files after their requirement is over? 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Thanks 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Ananda 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Please do not print this email unless it is absolutely necessary. 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; www.wipro.com 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________ 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden] 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Please do not print this email unless it is absolutely necessary. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; www.wipro.com 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________ 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden] 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ananda B Mudar, PMP 
</span><br>
<span class="quotelev2">&gt; &gt; Senior Technical Architect 
</span><br>
<span class="quotelev2">&gt; &gt; Wipro Technologies 
</span><br>
<span class="quotelev2">&gt; &gt; Ph: 972 765 8093              972 765 8093       
</span><br>
<span class="quotelev2">&gt; &gt; ananda.mudar_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Please do not print this email unless it is absolutely necessary. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 
</span><br>
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
<span class="quotelev1">&gt; The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email.
</span><br>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13041/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13042.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Previous message:</strong> <a href="13040.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>In reply to:</strong> <a href="13040.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13042.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] opal_cr_tmp_dir"</a>
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
