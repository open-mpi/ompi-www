<?
$subject_val = "Re: [OMPI users] opal_cr_tmp_dir";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 18 12:10:02 2010" -->
<!-- isoreceived="20100518161002" -->
<!-- sent="Tue, 18 May 2010 09:09:58 -0700" -->
<!-- isosent="20100518160958" -->
<!-- name="ananda.mudar_at_[hidden]" -->
<!-- email="ananda.mudar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] opal_cr_tmp_dir" -->
<!-- id="1E3BF6B8D1243842A175F7C7069EB0E70720A8DB_at_usa-mv-msg.wipro.com" -->
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
<strong>Date:</strong> 2010-05-18 12:09:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13077.php">Josh Hursey: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="13075.php">Josh Hursey: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Maybe in reply to:</strong> <a href="13031.php">ananda.mudar_at_[hidden]: "[OMPI users] opal_cr_tmp_dir"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's correct. I have prefixed them with OMPI_MCA_ when I defined them
<br>
in my environment. Despite that I still see some of these files being
<br>
created under the default directory /tmp which is different from what I
<br>
had set.
<br>
<p>&nbsp;
<br>
<p>Thanks
<br>
<p>Ananda
<br>
<p>============================
<br>
<p>From: Josh Hursey &lt;jjhursey_at_[hidden]&gt;
<br>
<p>Subject: Re: [OMPI users] opal_cr_tmp_dir
<br>
<p>To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
<p>Message-ID: &lt;BE30B59A-C66E-4B47-B45D-A14A6A57F7F5_at_[hidden]&gt;
<br>
<p>Content-Type: text/plain; charset=WINDOWS-1252; format=flowed;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;delsp=yes
<br>
<p>&nbsp;
<br>
<p>When you defined them in your environment did you prefix them with
<br>
'OMPI_MCA_'? Open MPI looks for this prefix to identify which parameters
<br>
are intended for it specifically.
<br>
<p>&nbsp;
<br>
<p>-- Josh
<br>
<p>&nbsp;
<br>
<p>On May 12, 2010, at 11:09 PM, &lt;ananda.mudar_at_[hidden]&gt;
<br>
&lt;ananda.mudar_at_[hidden]  &lt;mailto:ananda.mudar_at_[hidden]%20%20&gt; &gt; wrote:
<br>
<p>&nbsp;
<br>
<p><span class="quotelev1">&gt; Ralph
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; Defining these parameters in my environment also did not resolve the 
</span><br>
<p><span class="quotelev1">&gt; problem. Whenever I restart my program, the temporary files are 
</span><br>
<p><span class="quotelev1">&gt; getting stored in the default /tmp directory instead of the directory 
</span><br>
<p><span class="quotelev1">&gt; I had defined.
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; Thanks
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; Ananda
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; =================
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; Subject: Re: [OMPI users] opal_cr_tmp_dir
</span><br>
<p><span class="quotelev1">&gt; From: Ralph Castain (rhc_at_[hidden])
</span><br>
<p><span class="quotelev1">&gt; Date: 2010-05-12 19:48:16
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt;     ? Previous message: ananda.mudar_at_[hidden]: &quot;Re: [OMPI users] 
</span><br>
<p><span class="quotelev1">&gt; opal_cr_tmp_dir&quot;
</span><br>
<p><span class="quotelev1">&gt;     ? In reply to: ananda.mudar_at_[hidden]: &quot;Re: [OMPI users] 
</span><br>
<p><span class="quotelev1">&gt; opal_cr_tmp_dir&quot;
</span><br>
<p><span class="quotelev1">&gt; Define them in your environment prior to executing any of those 
</span><br>
<p><span class="quotelev1">&gt; commands.
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; On May 12, 2010, at 4:43 PM, &lt;ananda.mudar_at_[hidden]&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; Ralph
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt; When you say manually, do you mean setting these parameters in the
</span><br>
<p><span class="quotelev1">&gt; command line while calling mpirun, ompi-restart, and ompi- checkpoint?
</span><br>
<p><p><span class="quotelev1">&gt; Or is there another way to set these parameters?
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt; Thanks
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt; Ananda
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt; ==================
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] opal_cr_tmp_dir
</span><br>
<p><span class="quotelev2">&gt; &gt; From: Ralph Castain (rhc_at_[hidden])
</span><br>
<p><span class="quotelev2">&gt; &gt; Date: 2010-05-12 18:09:17
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt; Previous message: ananda.mudar_at_[hidden]: &quot;Re: [OMPI users]
</span><br>
<p><span class="quotelev1">&gt; opal_cr_tmp_dir&quot;
</span><br>
<p><span class="quotelev2">&gt; &gt; In reply to: ananda.mudar_at_[hidden]: &quot;Re: [OMPI users]
</span><br>
<p><span class="quotelev1">&gt; opal_cr_tmp_dir&quot;
</span><br>
<p><span class="quotelev2">&gt; &gt; You shouldn't have to, but there may be a bug in the system. Try
</span><br>
<p><span class="quotelev1">&gt; manually setting both envars and see if it fixes the problem.
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt; On May 12, 2010, at 3:59 PM, &lt;ananda.mudar_at_[hidden]&gt; wrote:
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; Ralph
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; I have these parameters set in ~/.openmpi/mca-params.conf file
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; $ cat ~/.openmpi/mca-params.conf
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; orte_tmpdir_base = /home/ananda/ORTE
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; opal_cr_tmp_dir = /home/ananda/OPAL
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; $
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; Should I be setting OMPI_MCA_opal_cr_tmp_dir?
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; FYI, I am using openmpi 1.3.4 with blcr 0.8.2
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; Thanks
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; Ananda
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; =============================
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; Subject: Re: [OMPI users] opal_cr_tmp_dir
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; From: Ralph Castain (rhc_at_[hidden])
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; Date: 2010-05-12 16:47:16
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; Previous message: Jeff Squyres: &quot;Re: [OMPI users] getc in openmpi&quot;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; In reply to: ananda.mudar_at_[hidden]: &quot;Re: [OMPI users]
</span><br>
<p><span class="quotelev1">&gt; opal_cr_tmp_dir&quot;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; ompi-restart just does a fork/exec of the mpirun, so it should
</span><br>
<p><span class="quotelev1">&gt; get the param if it is in your environ. How are you setting it? Have 
</span><br>
<p><span class="quotelev1">&gt; you tried adding OMPI_MCA_opal_cr_tmp_dir=&lt;whatever&gt; to your 
</span><br>
<p><span class="quotelev1">&gt; environment?
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; On May 12, 2010, at 12:45 PM, &lt;ananda.mudar_at_[hidden]&gt; wrote:
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt; Thanks Ralph.
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt; Another question. Even though I am setting opal_cr_tmp_dir to
</span><br>
<p><span class="quotelev1">&gt; a directory other than /tmp while calling ompi-restart command, this 
</span><br>
<p><span class="quotelev1">&gt; setting is not getting passed to the mpirun command that gets 
</span><br>
<p><span class="quotelev1">&gt; generated by ompi-restart. How do I overcome this constraint?
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt; Thanks
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt; Ananda
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt; ==============
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt; Subject: Re: [OMPI users] opal_cr_tmp_dir
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt; From: Ralph Castain (rhc_at_[hidden])
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt; Date: 2010-05-12 14:38:00
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt; Previous message: ananda.mudar_at_[hidden]: &quot;[OMPI users]
</span><br>
<p><span class="quotelev1">&gt; opal_cr_tmp_dir&quot;
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt; In reply to: ananda.mudar_at_[hidden]: &quot;[OMPI users]
</span><br>
<p><span class="quotelev1">&gt; opal_cr_tmp_dir&quot;
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt; It's a different MCA param: orte_tmpdir_base
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt; On May 12, 2010, at 12:33 PM, &lt;ananda.mudar_at_[hidden]&gt; wrote:
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<p><span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I am setting the MCA parameter ?opal_cr_tmp_dir? to a
</span><br>
<p><span class="quotelev1">&gt; directory other than /tmp while calling ?mpirun?, ?ompi-restart?, and 
</span><br>
<p><span class="quotelev1">&gt; ?ompi-checkpoint? commands so that I don?t fill up /tmp filesystem. 
</span><br>
<p><span class="quotelev1">&gt; But I see that openmpi-sessions* directory is still getting created 
</span><br>
<p><span class="quotelev1">&gt; under /tmp. How do I overcome this problem so that
</span><br>
<p><span class="quotelev1">&gt; openmpi-sessions* directory also gets created under the same directory
</span><br>
<p><p><span class="quotelev1">&gt; I have defined for ?opal_cr_tmp_dir??
</span><br>
<p><span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<p><span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Is there a way to clean up these temporary files after their
</span><br>
<p><span class="quotelev1">&gt; requirement is over?
</span><br>
<p><span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<p><span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Thanks
</span><br>
<p><span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Ananda
</span><br>
<p><span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Please do not print this email unless it is absolutely
</span><br>
<p><span class="quotelev1">&gt; necessary.
</span><br>
<p><span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<p><span class="quotelev1">&gt; &gt; &gt; &gt; &gt; The information contained in this electronic message and any
</span><br>
<p><span class="quotelev1">&gt; attachments to this message are intended for the exclusive use of the 
</span><br>
<p><span class="quotelev1">&gt; addressee(s) and may contain proprietary, confidential or privileged 
</span><br>
<p><span class="quotelev1">&gt; information. If you are not the intended recipient, you should not 
</span><br>
<p><span class="quotelev1">&gt; disseminate, distribute or copy this e-mail. Please notify the sender 
</span><br>
<p><span class="quotelev1">&gt; immediately and destroy all copies of this message and any 
</span><br>
<p><span class="quotelev1">&gt; attachments.
</span><br>
<p><span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<p><span class="quotelev1">&gt; &gt; &gt; &gt; &gt; WARNING: Computer viruses can be transmitted via email. The
</span><br>
<p><span class="quotelev1">&gt; recipient should check this email and any attachments for the presence
</span><br>
<p><p><span class="quotelev1">&gt; of viruses. The company accepts no liability for any damage caused by 
</span><br>
<p><span class="quotelev1">&gt; any virus transmitted by this email.
</span><br>
<p><span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<p><span class="quotelev1">&gt; &gt; &gt; &gt; &gt; www.wipro.com
</span><br>
<p><span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<p><span class="quotelev1">&gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<p><span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<p><span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<p><span class="quotelev1">&gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt; Please do not print this email unless it is absolutely
</span><br>
<p><span class="quotelev1">&gt; necessary.
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt; The information contained in this electronic message and any
</span><br>
<p><span class="quotelev1">&gt; attachments to this message are intended for the exclusive use of the 
</span><br>
<p><span class="quotelev1">&gt; addressee(s) and may contain proprietary, confidential or privileged 
</span><br>
<p><span class="quotelev1">&gt; information. If you are not the intended recipient, you should not 
</span><br>
<p><span class="quotelev1">&gt; disseminate, distribute or copy this e-mail. Please notify the sender 
</span><br>
<p><span class="quotelev1">&gt; immediately and destroy all copies of this message and any 
</span><br>
<p><span class="quotelev1">&gt; attachments.
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt; WARNING: Computer viruses can be transmitted via email. The
</span><br>
<p><span class="quotelev1">&gt; recipient should check this email and any attachments for the presence
</span><br>
<p><p><span class="quotelev1">&gt; of viruses. The company accepts no liability for any damage caused by 
</span><br>
<p><span class="quotelev1">&gt; any virus transmitted by this email.
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt; www.wipro.com
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; Ananda B Mudar, PMP
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; Senior Technical Architect
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; Wipro Technologies
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; Ph: 972 765 8093 972 765 8093
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; ananda.mudar_at_[hidden]
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; Please do not print this email unless it is absolutely necessary.
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; The information contained in this electronic message and any
</span><br>
<p><span class="quotelev1">&gt; attachments to this message are intended for the exclusive use of the 
</span><br>
<p><span class="quotelev1">&gt; addressee(s) and may contain proprietary, confidential or privileged 
</span><br>
<p><span class="quotelev1">&gt; information. If you are not the intended recipient, you should not 
</span><br>
<p><span class="quotelev1">&gt; disseminate, distribute or copy this e-mail. Please notify the sender 
</span><br>
<p><span class="quotelev1">&gt; immediately and destroy all copies of this message and any 
</span><br>
<p><span class="quotelev1">&gt; attachments.
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; WARNING: Computer viruses can be transmitted via email. The
</span><br>
<p><span class="quotelev1">&gt; recipient should check this email and any attachments for the presence
</span><br>
<p><p><span class="quotelev1">&gt; of viruses. The company accepts no liability for any damage caused by 
</span><br>
<p><span class="quotelev1">&gt; any virus transmitted by this email.
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; www.wipro.com
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt; Please do not print this email unless it is absolutely necessary.
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt; The information contained in this electronic message and any
</span><br>
<p><span class="quotelev1">&gt; attachments to this message are intended for the exclusive use of the 
</span><br>
<p><span class="quotelev1">&gt; addressee(s) and may contain proprietary, confidential or privileged 
</span><br>
<p><span class="quotelev1">&gt; information. If you are not the intended recipient, you should not 
</span><br>
<p><span class="quotelev1">&gt; disseminate, distribute or copy this e-mail. Please notify the sender 
</span><br>
<p><span class="quotelev1">&gt; immediately and destroy all copies of this message and any 
</span><br>
<p><span class="quotelev1">&gt; attachments.
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt; WARNING: Computer viruses can be transmitted via email. The
</span><br>
<p><span class="quotelev1">&gt; recipient should check this email and any attachments for the presence
</span><br>
<p><p><span class="quotelev1">&gt; of viruses. The company accepts no liability for any damage caused by 
</span><br>
<p><span class="quotelev1">&gt; any virus transmitted by this email.
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt; www.wipro.com
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<p><span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<p><span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<p><span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; Please do not print this email unless it is absolutely necessary.
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; The information contained in this electronic message and any 
</span><br>
<p><span class="quotelev1">&gt; attachments to this message are intended for the exclusive use of the 
</span><br>
<p><span class="quotelev1">&gt; addressee(s) and may contain proprietary, confidential or privileged 
</span><br>
<p><span class="quotelev1">&gt; information. If you are not the intended recipient, you should not 
</span><br>
<p><span class="quotelev1">&gt; disseminate, distribute or copy this e-mail. Please notify the sender 
</span><br>
<p><span class="quotelev1">&gt; immediately and destroy all copies of this message and any 
</span><br>
<p><span class="quotelev1">&gt; attachments.
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; WARNING: Computer viruses can be transmitted via email. The recipient 
</span><br>
<p><span class="quotelev1">&gt; should check this email and any attachments for the presence of 
</span><br>
<p><span class="quotelev1">&gt; viruses. The company accepts no liability for any damage caused by any
</span><br>
<p><p><span class="quotelev1">&gt; virus transmitted by this email.
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; www.wipro.com
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<p><span class="quotelev1">&gt; users mailing list
</span><br>
<p><span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<p><span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>Please do not print this email unless it is absolutely necessary. 

The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 

WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 

www.wipro.com
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13076/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13077.php">Josh Hursey: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="13075.php">Josh Hursey: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Maybe in reply to:</strong> <a href="13031.php">ananda.mudar_at_[hidden]: "[OMPI users] opal_cr_tmp_dir"</a>
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
