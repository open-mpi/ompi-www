<?
$subject_val = "Re: [OMPI users] opal_cr_tmp_dir";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 18 10:23:54 2010" -->
<!-- isoreceived="20100518142354" -->
<!-- sent="Tue, 18 May 2010 10:23:50 -0400" -->
<!-- isosent="20100518142350" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] opal_cr_tmp_dir" -->
<!-- id="BE30B59A-C66E-4B47-B45D-A14A6A57F7F5_at_open-mpi.org" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="1E3BF6B8D1243842A175F7C7069EB0E70712B05F_at_usa-mv-msg.wipro.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-18 10:23:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13076.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Previous message:</strong> <a href="13074.php">Josh Hursey: "Re: [OMPI users] ompi-restart fails with &quot;found pid in use&quot;"</a>
<li><strong>In reply to:</strong> <a href="13042.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13076.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When you defined them in your environment did you prefix them with  
<br>
'OMPI_MCA_'? Open MPI looks for this prefix to identify which  
<br>
parameters are intended for it specifically.
<br>
<p>-- Josh
<br>
<p>On May 12, 2010, at 11:09 PM, &lt;ananda.mudar_at_[hidden]&gt; &lt;ananda.mudar_at_[hidden] 
<br>
<span class="quotelev1"> &gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Defining these parameters in my environment also did not resolve the  
</span><br>
<span class="quotelev1">&gt; problem. Whenever I restart my program, the temporary files are  
</span><br>
<span class="quotelev1">&gt; getting stored in the default /tmp directory instead of the  
</span><br>
<span class="quotelev1">&gt; directory I had defined.
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
<span class="quotelev1">&gt; =================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] opal_cr_tmp_dir
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain (rhc_at_[hidden])
</span><br>
<span class="quotelev1">&gt; Date: 2010-05-12 19:48:16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	&#149; Previous message: ananda.mudar_at_[hidden]: &quot;Re: [OMPI users]  
</span><br>
<span class="quotelev1">&gt; opal_cr_tmp_dir&quot;
</span><br>
<span class="quotelev1">&gt; 	&#149; In reply to: ananda.mudar_at_[hidden]: &quot;Re: [OMPI users]  
</span><br>
<span class="quotelev1">&gt; opal_cr_tmp_dir&quot;
</span><br>
<span class="quotelev1">&gt; Define them in your environment prior to executing any of those  
</span><br>
<span class="quotelev1">&gt; commands.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 12, 2010, at 4:43 PM, &lt;ananda.mudar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When you say manually, do you mean setting these parameters in the  
</span><br>
<span class="quotelev1">&gt; command line while calling mpirun, ompi-restart, and ompi- 
</span><br>
<span class="quotelev1">&gt; checkpoint? Or is there another way to set these parameters?
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
<span class="quotelev2">&gt; &gt; ==================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] opal_cr_tmp_dir
</span><br>
<span class="quotelev2">&gt; &gt; From: Ralph Castain (rhc_at_[hidden])
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2010-05-12 18:09:17
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Previous message: ananda.mudar_at_[hidden]: &quot;Re: [OMPI users]  
</span><br>
<span class="quotelev1">&gt; opal_cr_tmp_dir&quot;
</span><br>
<span class="quotelev2">&gt; &gt; In reply to: ananda.mudar_at_[hidden]: &quot;Re: [OMPI users]  
</span><br>
<span class="quotelev1">&gt; opal_cr_tmp_dir&quot;
</span><br>
<span class="quotelev2">&gt; &gt; You shouldn't have to, but there may be a bug in the system. Try  
</span><br>
<span class="quotelev1">&gt; manually setting both envars and see if it fixes the problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 12, 2010, at 3:59 PM, &lt;ananda.mudar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Ralph
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have these parameters set in ~/.openmpi/mca-params.conf file
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ cat ~/.openmpi/mca-params.conf
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; orte_tmpdir_base = /home/ananda/ORTE
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; opal_cr_tmp_dir = /home/ananda/OPAL
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Should I be setting OMPI_MCA_opal_cr_tmp_dir?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; FYI, I am using openmpi 1.3.4 with blcr 0.8.2
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
<span class="quotelev3">&gt; &gt; &gt; =============================
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: Re: [OMPI users] opal_cr_tmp_dir
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: Ralph Castain (rhc_at_[hidden])
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Date: 2010-05-12 16:47:16
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Previous message: Jeff Squyres: &quot;Re: [OMPI users] getc in openmpi&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; In reply to: ananda.mudar_at_[hidden]: &quot;Re: [OMPI users]  
</span><br>
<span class="quotelev1">&gt; opal_cr_tmp_dir&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ompi-restart just does a fork/exec of the mpirun, so it should  
</span><br>
<span class="quotelev1">&gt; get the param if it is in your environ. How are you setting it? Have  
</span><br>
<span class="quotelev1">&gt; you tried adding OMPI_MCA_opal_cr_tmp_dir=&lt;whatever&gt; to your  
</span><br>
<span class="quotelev1">&gt; environment?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On May 12, 2010, at 12:45 PM, &lt;ananda.mudar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Thanks Ralph.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Another question. Even though I am setting opal_cr_tmp_dir to  
</span><br>
<span class="quotelev1">&gt; a directory other than /tmp while calling ompi-restart command, this  
</span><br>
<span class="quotelev1">&gt; setting is not getting passed to the mpirun command that gets  
</span><br>
<span class="quotelev1">&gt; generated by ompi-restart. How do I overcome this constraint?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Thanks
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Ananda
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; ==============
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Subject: Re: [OMPI users] opal_cr_tmp_dir
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; From: Ralph Castain (rhc_at_[hidden])
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Date: 2010-05-12 14:38:00
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Previous message: ananda.mudar_at_[hidden]: &quot;[OMPI users]  
</span><br>
<span class="quotelev1">&gt; opal_cr_tmp_dir&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; In reply to: ananda.mudar_at_[hidden]: &quot;[OMPI users]  
</span><br>
<span class="quotelev1">&gt; opal_cr_tmp_dir&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; It's a different MCA param: orte_tmpdir_base
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On May 12, 2010, at 12:33 PM, &lt;ananda.mudar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I am setting the MCA parameter &#147;opal_cr_tmp_dir&#148; to a  
</span><br>
<span class="quotelev1">&gt; directory other than /tmp while calling &#147;mpirun&#148;, &#147;ompi-restart&#148;,  
</span><br>
<span class="quotelev1">&gt; and &#147;ompi-checkpoint&#148; commands so that I don&#146;t fill up /tmp  
</span><br>
<span class="quotelev1">&gt; filesystem. But I see that openmpi-sessions* directory is still  
</span><br>
<span class="quotelev1">&gt; getting created under /tmp. How do I overcome this problem so that  
</span><br>
<span class="quotelev1">&gt; openmpi-sessions* directory also gets created under the same  
</span><br>
<span class="quotelev1">&gt; directory I have defined for &#147;opal_cr_tmp_dir&#148;?
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Is there a way to clean up these temporary files after their  
</span><br>
<span class="quotelev1">&gt; requirement is over?
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Thanks
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Ananda
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Please do not print this email unless it is absolutely  
</span><br>
<span class="quotelev1">&gt; necessary.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; The information contained in this electronic message and any  
</span><br>
<span class="quotelev1">&gt; attachments to this message are intended for the exclusive use of  
</span><br>
<span class="quotelev1">&gt; the addressee(s) and may contain proprietary, confidential or  
</span><br>
<span class="quotelev1">&gt; privileged information. If you are not the intended recipient, you  
</span><br>
<span class="quotelev1">&gt; should not disseminate, distribute or copy this e-mail. Please  
</span><br>
<span class="quotelev1">&gt; notify the sender immediately and destroy all copies of this message  
</span><br>
<span class="quotelev1">&gt; and any attachments.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; WARNING: Computer viruses can be transmitted via email. The  
</span><br>
<span class="quotelev1">&gt; recipient should check this email and any attachments for the  
</span><br>
<span class="quotelev1">&gt; presence of viruses. The company accepts no liability for any damage  
</span><br>
<span class="quotelev1">&gt; caused by any virus transmitted by this email.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; www.wipro.com
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Please do not print this email unless it is absolutely  
</span><br>
<span class="quotelev1">&gt; necessary.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; The information contained in this electronic message and any  
</span><br>
<span class="quotelev1">&gt; attachments to this message are intended for the exclusive use of  
</span><br>
<span class="quotelev1">&gt; the addressee(s) and may contain proprietary, confidential or  
</span><br>
<span class="quotelev1">&gt; privileged information. If you are not the intended recipient, you  
</span><br>
<span class="quotelev1">&gt; should not disseminate, distribute or copy this e-mail. Please  
</span><br>
<span class="quotelev1">&gt; notify the sender immediately and destroy all copies of this message  
</span><br>
<span class="quotelev1">&gt; and any attachments.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; WARNING: Computer viruses can be transmitted via email. The  
</span><br>
<span class="quotelev1">&gt; recipient should check this email and any attachments for the  
</span><br>
<span class="quotelev1">&gt; presence of viruses. The company accepts no liability for any damage  
</span><br>
<span class="quotelev1">&gt; caused by any virus transmitted by this email.
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
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Ananda B Mudar, PMP
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Senior Technical Architect
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Wipro Technologies
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Ph: 972 765 8093 972 765 8093
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ananda.mudar_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Please do not print this email unless it is absolutely necessary.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The information contained in this electronic message and any  
</span><br>
<span class="quotelev1">&gt; attachments to this message are intended for the exclusive use of  
</span><br>
<span class="quotelev1">&gt; the addressee(s) and may contain proprietary, confidential or  
</span><br>
<span class="quotelev1">&gt; privileged information. If you are not the intended recipient, you  
</span><br>
<span class="quotelev1">&gt; should not disseminate, distribute or copy this e-mail. Please  
</span><br>
<span class="quotelev1">&gt; notify the sender immediately and destroy all copies of this message  
</span><br>
<span class="quotelev1">&gt; and any attachments.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; WARNING: Computer viruses can be transmitted via email. The  
</span><br>
<span class="quotelev1">&gt; recipient should check this email and any attachments for the  
</span><br>
<span class="quotelev1">&gt; presence of viruses. The company accepts no liability for any damage  
</span><br>
<span class="quotelev1">&gt; caused by any virus transmitted by this email.
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
<span class="quotelev2">&gt; &gt; Please do not print this email unless it is absolutely necessary.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The information contained in this electronic message and any  
</span><br>
<span class="quotelev1">&gt; attachments to this message are intended for the exclusive use of  
</span><br>
<span class="quotelev1">&gt; the addressee(s) and may contain proprietary, confidential or  
</span><br>
<span class="quotelev1">&gt; privileged information. If you are not the intended recipient, you  
</span><br>
<span class="quotelev1">&gt; should not disseminate, distribute or copy this e-mail. Please  
</span><br>
<span class="quotelev1">&gt; notify the sender immediately and destroy all copies of this message  
</span><br>
<span class="quotelev1">&gt; and any attachments.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; WARNING: Computer viruses can be transmitted via email. The  
</span><br>
<span class="quotelev1">&gt; recipient should check this email and any attachments for the  
</span><br>
<span class="quotelev1">&gt; presence of viruses. The company accepts no liability for any damage  
</span><br>
<span class="quotelev1">&gt; caused by any virus transmitted by this email.
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
<span class="quotelev1">&gt; The information contained in this electronic message and any  
</span><br>
<span class="quotelev1">&gt; attachments to this message are intended for the exclusive use of  
</span><br>
<span class="quotelev1">&gt; the addressee(s) and may contain proprietary, confidential or  
</span><br>
<span class="quotelev1">&gt; privileged information. If you are not the intended recipient, you  
</span><br>
<span class="quotelev1">&gt; should not disseminate, distribute or copy this e-mail. Please  
</span><br>
<span class="quotelev1">&gt; notify the sender immediately and destroy all copies of this message  
</span><br>
<span class="quotelev1">&gt; and any attachments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WARNING: Computer viruses can be transmitted via email. The  
</span><br>
<span class="quotelev1">&gt; recipient should check this email and any attachments for the  
</span><br>
<span class="quotelev1">&gt; presence of viruses. The company accepts no liability for any damage  
</span><br>
<span class="quotelev1">&gt; caused by any virus transmitted by this email.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13076.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Previous message:</strong> <a href="13074.php">Josh Hursey: "Re: [OMPI users] ompi-restart fails with &quot;found pid in use&quot;"</a>
<li><strong>In reply to:</strong> <a href="13042.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13076.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] opal_cr_tmp_dir"</a>
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
