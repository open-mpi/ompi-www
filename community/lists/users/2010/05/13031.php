<?
$subject_val = "[OMPI users] opal_cr_tmp_dir";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 12 14:33:57 2010" -->
<!-- isoreceived="20100512183357" -->
<!-- sent="Wed, 12 May 2010 11:33:06 -0700" -->
<!-- isosent="20100512183306" -->
<!-- name="ananda.mudar_at_[hidden]" -->
<!-- email="ananda.mudar_at_[hidden]" -->
<!-- subject="[OMPI users] opal_cr_tmp_dir" -->
<!-- id="1E3BF6B8D1243842A175F7C7069EB0E70712AD04_at_usa-mv-msg.wipro.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] opal_cr_tmp_dir<br>
<strong>From:</strong> <a href="mailto:ananda.mudar_at_[hidden]?Subject=Re:%20[OMPI%20users]%20opal_cr_tmp_dir"><em>ananda.mudar_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-05-12 14:33:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13032.php">Ralph Castain: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Previous message:</strong> <a href="13030.php">Jeff Squyres: "Re: [OMPI users] getc in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13032.php">Ralph Castain: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Reply:</strong> <a href="13032.php">Ralph Castain: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Maybe reply:</strong> <a href="13033.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Maybe reply:</strong> <a href="13037.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Maybe reply:</strong> <a href="13040.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Maybe reply:</strong> <a href="13042.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Maybe reply:</strong> <a href="13076.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am setting the MCA parameter &quot;opal_cr_tmp_dir&quot; to a directory other
<br>
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
<p>&nbsp;
<br>
<p>Is there a way to clean up these temporary files after their requirement
<br>
is over?
<br>
<p>&nbsp;
<br>
<p>Thanks
<br>
<p>Ananda
<br>
<p><p>Please do not print this email unless it is absolutely necessary. 

The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 

WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 

www.wipro.com
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13031/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13032.php">Ralph Castain: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Previous message:</strong> <a href="13030.php">Jeff Squyres: "Re: [OMPI users] getc in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13032.php">Ralph Castain: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Reply:</strong> <a href="13032.php">Ralph Castain: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Maybe reply:</strong> <a href="13033.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Maybe reply:</strong> <a href="13037.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Maybe reply:</strong> <a href="13040.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Maybe reply:</strong> <a href="13042.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Maybe reply:</strong> <a href="13076.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] opal_cr_tmp_dir"</a>
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
