<?
$subject_val = "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  5 09:10:28 2010" -->
<!-- isoreceived="20100305141028" -->
<!-- sent="Fri, 5 Mar 2010 09:10:22 -0500" -->
<!-- isosent="20100305141022" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint" -->
<!-- id="C21F89B6-B4C6-4E29-B2A5-CD3FA08F98CF_at_open-mpi.org" -->
<!-- charset="GB2312" -->
<!-- inreplyto="201003051615565157032_at_163.com" -->
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
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-05 09:10:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12258.php">abc def: "Re: [OMPI users] running external program on	same	processor	(Fortran)"</a>
<li><strong>Previous message:</strong> <a href="12256.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<li><strong>In reply to:</strong> <a href="12255.php">&#194;&#237;&#201;&#217;&#189;&#220;: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12279.php">马少杰: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr tocheckpoint"</a>
<li><strong>Reply:</strong> <a href="12279.php">马少杰: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr tocheckpoint"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 5, 2010, at 3:15 AM, &#194;&#237;&#201;&#217;&#189;&#220; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Sir:
</span><br>
<span class="quotelev1">&gt; - What version of Open MPI are you using?
</span><br>
<span class="quotelev1">&gt; my version is 1.3.4
</span><br>
<span class="quotelev1">&gt;  - What configure options are you using?
</span><br>
<span class="quotelev1">&gt; ./configure --with-ft=cr --enable-mpi-threads --enable-ft-thread --with-blcr=$dir --with-blcr-libdir=/$dir/lib --prefix=/public/mpi/openmpi134-gnu-cr --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; make install
</span><br>
<span class="quotelev1">&gt;  - What MCA parameters are you using?
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 --am ft-enable-cr  -machinefile ma  xhpl
</span><br>
<span class="quotelev1">&gt; vim $HOME/.openmpi/mca-params.conf
</span><br>
<span class="quotelev1">&gt; # Local snapshot directory (not used in this scenario)
</span><br>
<span class="quotelev1">&gt; crs_base_snapshot_dir=/home/me/tmp
</span><br>
<span class="quotelev1">&gt; # Remote snapshot directory (globally mounted file system))
</span><br>
<span class="quotelev1">&gt; snapc_base_global_snapshot_dir=/home/me/checkpoints
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  - Are you building from a release tarball or a SVN checkout?
</span><br>
<span class="quotelev1">&gt; building from openmpi-1.3.4.tar.gz
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Now, I solve the problem successfully.
</span><br>
<span class="quotelev1">&gt; I found that the mpirun command as
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 --am ft-enable-cr  --mca opal_cr_use_thread 0  -machinefile ma  ./xhpl
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; the time cost is almost equal to the time cost by the command: mpirun -np 8  -machinefile ma  ./xhpl
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I think it should be  a bug.
</span><br>
<p>Since you have configured Open MPI to use the C/R thread (--enable-ft-thread) then Open MPI will start the concurrent C/R thread when you ask for C/R to be enabled. By default the thread polls very aggressively (waiting only 0 microseconds, or the same as calling sched_yeild() on most systems). By turning it off you eliminate the contention the thread is causing on the system. There are two MCA parameters that control this behavior, links below:
<br>
&nbsp;&nbsp;<a href="http://osl.iu.edu/research/ft/ompi-cr/api.php#mca-opal_cr_thread_sleep_check">http://osl.iu.edu/research/ft/ompi-cr/api.php#mca-opal_cr_thread_sleep_check</a>
<br>
&nbsp;&nbsp;<a href="http://osl.iu.edu/research/ft/ompi-cr/api.php#mca-opal_cr_thread_sleep_wait">http://osl.iu.edu/research/ft/ompi-cr/api.php#mca-opal_cr_thread_sleep_wait</a>
<br>
<p>I agree that the default behavior is probably too aggressive for most applications. However by increasing these values the user is also increasing the amount of time before a checkpoint can begin. In my setup I usually set:
<br>
&nbsp;&nbsp;opal_cr_thread_sleep_wait=1000
<br>
Which will throttle down the thread when the application is in the MPI library.
<br>
<p>You might want to play around with these MCA parameters to tune the aggressiveness of the C/R thread to your performance needs. In the mean time I will look into finding better default parameters for these options.
<br>
<p>Cheers,
<br>
Josh
<br>
<p><p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 2010-03-05
</span><br>
<span class="quotelev1">&gt; &#194;&#237;&#201;&#217;&#189;&#220;
</span><br>
<span class="quotelev1">&gt; &#183;&#162;&#188;&#254;&#200;&#203;&#163;&#186; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; &#183;&#162;&#203;&#205;&#202;&#177;&#188;&#228;&#163;&#186; 2010-03-05  00:07:19
</span><br>
<span class="quotelev1">&gt; &#202;&#213;&#188;&#254;&#200;&#203;&#163;&#186; Open MPI Users
</span><br>
<span class="quotelev1">&gt; &#179;&#173;&#203;&#205;&#163;&#186;
</span><br>
<span class="quotelev1">&gt; &#214;&#247;&#204;&#226;&#163;&#186; Re: [OMPI users] low efficiency when we use --am ft-enable-cr tocheckpoint
</span><br>
<span class="quotelev1">&gt; There is some overhead involved when activating the current C/R functionality in Open MPI due to the wrapping of the internal point-to-point stack. The wrapper (CRCP framework) tracks the signature of each message (not the buffer, so constant time for any size MPI message) so that when we need to quiesce the network we know of all the outstanding messages that need to be drained.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; So there is an overhead, but it should not be as significant as you have mentioned. I looked at some of the performance aspects in the paper at the link below:
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/papers/hpdc-2009/">http://www.open-mpi.org/papers/hpdc-2009/</a>
</span><br>
<span class="quotelev1">&gt; Though I did not look at HPL explicitly in this paper (just NPB, GROMACS, and NetPipe), I have in testing and the time difference was definitely not 2x (cannot recall the exact differences at the moment).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Can you tell me a bit about your setup:
</span><br>
<span class="quotelev1">&gt;  - What version of Open MPI are you using?
</span><br>
<span class="quotelev1">&gt;  - What configure options are you using?
</span><br>
<span class="quotelev1">&gt;  - What MCA parameters are you using?
</span><br>
<span class="quotelev1">&gt;  - Are you building from a release tarball or a SVN checkout?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Mar 3, 2010, at 10:07 PM, &#194;&#237;&#201;&#217;&#189;&#220; wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt; 2010-03-04
</span><br>
<span class="quotelev2">&gt; &gt; &#194;&#237;&#201;&#217;&#189;&#220;
</span><br>
<span class="quotelev2">&gt; &gt; Dear Sir:
</span><br>
<span class="quotelev2">&gt; &gt;        I want to use blcr  and openmpi to checkpoint, now I can save check point and restart my work successfully. How erver I find the option &quot;--am ft-enable-cr&quot; will case large cost . For example ,  when I run my HPL job  without and with the option &quot;--am ft-enable-cr&quot; on 4 hosts (32 process, IB network) respectively , the time costed are   8m21.180s    and 16m37.732s respctively. it is should be noted that I did not save the checkpoint when I run the job, the additional cost is caused by &quot;--am ft-enable-cr&quot; independently. Why can the optin &quot;--am ft-enable-cr&quot;  case so much system  cost? Is it normal? How can I solve the problem.
</span><br>
<span class="quotelev2">&gt; &gt;       I also test  other mpi applications, the problem still exists.   
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
<span class="quotelev1">&gt;  
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
<li><strong>Next message:</strong> <a href="12258.php">abc def: "Re: [OMPI users] running external program on	same	processor	(Fortran)"</a>
<li><strong>Previous message:</strong> <a href="12256.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<li><strong>In reply to:</strong> <a href="12255.php">&#194;&#237;&#201;&#217;&#189;&#220;: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12279.php">马少杰: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr tocheckpoint"</a>
<li><strong>Reply:</strong> <a href="12279.php">马少杰: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr tocheckpoint"</a>
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
