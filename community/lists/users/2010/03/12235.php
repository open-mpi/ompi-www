<?
$subject_val = "[OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 22:07:54 2010" -->
<!-- isoreceived="20100304030754" -->
<!-- sent="Thu, 4 Mar 2010 11:07:48 +0800" -->
<!-- isosent="20100304030748" -->
<!-- name="&#194;&#237;&#201;&#217;&#189;&#220;" -->
<!-- email="mashao_jie_at_[hidden]" -->
<!-- subject="[OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint" -->
<!-- id="201003041107482652456_at_163.com" -->
<!-- charset="gb2312" -->
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
<strong>Subject:</strong> [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint<br>
<strong>From:</strong> &#194;&#237;&#201;&#217;&#189;&#220; (<em>mashao_jie_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 22:07:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12236.php">Fernando Lemos: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>Previous message:</strong> <a href="12234.php">Terry Frankcombe: "Re: [OMPI users] running external program	on	same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12247.php">Joshua Hursey: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<li><strong>Reply:</strong> <a href="12247.php">Joshua Hursey: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>

<br>

<br>
2010-03-04 
<br>

<br>

<br>

<br>
&#194;&#237;&#201;&#217;&#189;&#220; 
<br>
Dear Sir:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I want to use blcr  and openmpi to checkpoint, now I can save check point and restart my work successfully. How erver I find the option &quot;--am ft-enable-cr&quot; will case large cost . For example ,  when I run my HPL job  without and with the option &quot;--am ft-enable-cr&quot; on 4 hosts (32 process, IB network) respectively , the time costed are   8m21.180s    and 16m37.732s respctively. it is should be noted that I did not save the checkpoint when I run the job, the additional cost is caused by &quot;--am ft-enable-cr&quot; independently. Why can the optin &quot;--am ft-enable-cr&quot;  case so much system  cost? Is it normal? How can I solve the problem. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I also test  other mpi applications, the problem still exists.   
<br>
<p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12235/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12236.php">Fernando Lemos: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>Previous message:</strong> <a href="12234.php">Terry Frankcombe: "Re: [OMPI users] running external program	on	same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12247.php">Joshua Hursey: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<li><strong>Reply:</strong> <a href="12247.php">Joshua Hursey: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
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
