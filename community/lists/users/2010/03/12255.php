<?
$subject_val = "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  5 03:16:04 2010" -->
<!-- isoreceived="20100305081604" -->
<!-- sent="Fri, 5 Mar 2010 16:15:56 +0800" -->
<!-- isosent="20100305081556" -->
<!-- name="&#194;&#237;&#201;&#217;&#189;&#220;" -->
<!-- email="mashao_jie_at_[hidden]" -->
<!-- subject="Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint" -->
<!-- id="201003051615565157032_at_163.com" -->
<!-- charset="gb2312" -->
<!-- inreplyto="86105F29-A502-4000-B689-61BCFAD52A47_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint<br>
<strong>From:</strong> &#194;&#237;&#201;&#217;&#189;&#220; (<em>mashao_jie_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-05 03:15:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12256.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<li><strong>Previous message:</strong> <a href="12254.php">&#194;&#237;&#201;&#217;&#189;&#220;: "[OMPI users] change hosts to restart the checkpoint"</a>
<li><strong>In reply to:</strong> <a href="12247.php">Joshua Hursey: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12257.php">Joshua Hursey: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<li><strong>Reply:</strong> <a href="12257.php">Joshua Hursey: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Sir:
<br>
- What version of Open MPI are you using?
<br>
my version is 1.3.4
<br>
&nbsp;- What configure options are you using?
<br>
./configure --with-ft=cr --enable-mpi-threads --enable-ft-thread --with-blcr=$dir --with-blcr-libdir=/$dir/lib --prefix=/public/mpi/openmpi134-gnu-cr --enable-mpirun-prefix-by-default
<br>
make 
<br>
make install
<br>
&nbsp;- What MCA parameters are you using?
<br>
mpirun -np 8 --am ft-enable-cr  -machinefile ma  xhpl
<br>
vim $HOME/.openmpi/mca-params.conf
<br>
# Local snapshot directory (not used in this scenario)
<br>
crs_base_snapshot_dir=/home/me/tmp
<br>
# Remote snapshot directory (globally mounted file system))
<br>
snapc_base_global_snapshot_dir=/home/me/checkpoints
<br>

<br>

<br>
&nbsp;- Are you building from a release tarball or a SVN checkout?
<br>
building from openmpi-1.3.4.tar.gz
<br>

<br>

<br>
Now, I solve the problem successfully.
<br>
I found that the mpirun command as
<br>

<br>
mpirun -np 8 --am ft-enable-cr  --mca opal_cr_use_thread 0  -machinefile ma  ./xhpl
<br>

<br>
the time cost is almost equal to the time cost by the command: mpirun -np 8  -machinefile ma  ./xhpl
<br>

<br>
I think it should be  a bug. 
<br>

<br>

<br>
2010-03-05 
<br>

<br>

<br>

<br>
&#194;&#237;&#201;&#217;&#189;&#220; 
<br>

<br>

<br>

<br>
&#183;&#162;&#188;&#254;&#200;&#203;&#163;&#186; Joshua Hursey 
<br>
&#183;&#162;&#203;&#205;&#202;&#177;&#188;&#228;&#163;&#186; 2010-03-05  00:07:19 
<br>
&#202;&#213;&#188;&#254;&#200;&#203;&#163;&#186; Open MPI Users 
<br>
&#179;&#173;&#203;&#205;&#163;&#186; 
<br>
&#214;&#247;&#204;&#226;&#163;&#186; Re: [OMPI users] low efficiency when we use --am ft-enable-cr tocheckpoint 
<br>
&nbsp;
<br>
There is some overhead involved when activating the current C/R functionality in Open MPI due to the wrapping of the internal point-to-point stack. The wrapper (CRCP framework) tracks the signature of each message (not the buffer, so constant time for any size MPI message) so that when we need to quiesce the network we know of all the outstanding messages that need to be drained.
<br>

<br>
So there is an overhead, but it should not be as significant as you have mentioned. I looked at some of the performance aspects in the paper at the link below:
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/papers/hpdc-2009/">http://www.open-mpi.org/papers/hpdc-2009/</a>
<br>
Though I did not look at HPL explicitly in this paper (just NPB, GROMACS, and NetPipe), I have in testing and the time difference was definitely not 2x (cannot recall the exact differences at the moment).
<br>

<br>
Can you tell me a bit about your setup:
<br>
&nbsp;- What version of Open MPI are you using?
<br>
&nbsp;- What configure options are you using?
<br>
&nbsp;- What MCA parameters are you using?
<br>
&nbsp;- Are you building from a release tarball or a SVN checkout?
<br>

<br>
-- Josh
<br>

<br>

<br>
On Mar 3, 2010, at 10:07 PM, &#194;&#237;&#201;&#217;&#189;&#220; wrote:
<br>

<br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 2010-03-04
</span><br>
<span class="quotelev1">&gt; &#194;&#237;&#201;&#217;&#189;&#220;
</span><br>
<span class="quotelev1">&gt; Dear Sir:
</span><br>
<span class="quotelev1">&gt;        I want to use blcr  and openmpi to checkpoint, now I can save check point and restart my work successfully. How erver I find the option &quot;--am ft-enable-cr&quot; will case large cost . For example ,  when I run my HPL job  without and with the option &quot;--am ft-enable-cr&quot; on 4 hosts (32 process, IB network) respectively , the time costed are   8m21.180s    and 16m37.732s respctively. it is should be noted that I did not save the checkpoint when I run the job, the additional cost is caused by &quot;--am ft-enable-cr&quot; independently. Why can the optin &quot;--am ft-enable-cr&quot;  case so much system  cost? Is it normal? How can I solve the problem.
</span><br>
<span class="quotelev1">&gt;       I also test  other mpi applications, the problem still exists.   
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>

<br>

<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12255/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12256.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<li><strong>Previous message:</strong> <a href="12254.php">&#194;&#237;&#201;&#217;&#189;&#220;: "[OMPI users] change hosts to restart the checkpoint"</a>
<li><strong>In reply to:</strong> <a href="12247.php">Joshua Hursey: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12257.php">Joshua Hursey: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<li><strong>Reply:</strong> <a href="12257.php">Joshua Hursey: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
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
