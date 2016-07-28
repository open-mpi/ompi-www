<?
$subject_val = "[OMPI devel] Possible memory leak";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 31 17:25:02 2010" -->
<!-- isoreceived="20100831212502" -->
<!-- sent="Tue, 31 Aug 2010 14:21:29 -0700" -->
<!-- isosent="20100831212129" -->
<!-- name="ananda.mudar_at_[hidden]" -->
<!-- email="ananda.mudar_at_[hidden]" -->
<!-- subject="[OMPI devel] Possible memory leak" -->
<!-- id="1E3BF6B8D1243842A175F7C7069EB0E717D708_at_usa-mv-msg.wipro.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Possible memory leak<br>
<strong>From:</strong> <a href="mailto:ananda.mudar_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Possible%20memory%20leak"><em>ananda.mudar_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-08-31 17:21:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8432.php">Larry Baker: "[OMPI devel] Fwd:  1.5rc5 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8430.php">Barrett, Brian W: "Re: [OMPI devel] New interface code refactor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/09/8434.php">Sylvain Jeaugey: "Re: [OMPI devel] Possible memory leak"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/09/8434.php">Sylvain Jeaugey: "Re: [OMPI devel] Possible memory leak"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/09/8436.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Possible memory leak"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
&nbsp;
<br>
When I run the attached program with the following arguments, the size of MPI processes keep increasing alarmingly (I saw that the size grew from 18M to 12G in under 10 minutes) making me suspect that there is a major memory leak:
<br>
&nbsp;
<br>
mpirun -am ft-enable-cr --mca coll basic -np 2 &lt;name of the executable&gt;
<br>
&nbsp;
<br>
If I run this program without checkpoint control ie; remove &quot;-am ft-enable-cr&quot;,  the size of MPI processes stays constant.
<br>
&nbsp;
<br>
Also if I run this program without setting &quot;--mca coll basic&quot;, the size of the MPI processes stays constant.
<br>
&nbsp;
<br>
I set the mca parameter to &quot;--mca coll basic&quot; during my debugging attempts of the problem related to checkpointing the program that has repetitive MPI_Bcast() calls.
<br>
&nbsp;
<br>
FYI, I am using OpenMPI v1.4.2 with BLCR 0.8.2
<br>
&nbsp;
<br>
Thanks
<br>
Ananda
<br>
&nbsp;
<br>
Ananda B Mudar, PMP 
<br>
Senior Technical Architect 
<br>
Wipro Technologies 
<br>
Ph: 972 765 8093 
<br>
<p>Please do not print this email unless it is absolutely necessary. 

The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 

WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 

www.wipro.com
<br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8431/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8431/bcast-checkpoint-bug.c">bcast-checkpoint-bug.c</a>
</ul>
<!-- attachment="bcast-checkpoint-bug.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8432.php">Larry Baker: "[OMPI devel] Fwd:  1.5rc5 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8430.php">Barrett, Brian W: "Re: [OMPI devel] New interface code refactor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/09/8434.php">Sylvain Jeaugey: "Re: [OMPI devel] Possible memory leak"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/09/8434.php">Sylvain Jeaugey: "Re: [OMPI devel] Possible memory leak"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/09/8436.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Possible memory leak"</a>
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
