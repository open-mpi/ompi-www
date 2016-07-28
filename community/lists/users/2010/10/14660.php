<?
$subject_val = "Re: [OMPI users] open MPI please recommend a debugger for open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 29 13:38:33 2010" -->
<!-- isoreceived="20101029173833" -->
<!-- sent="Fri, 29 Oct 2010 18:38:25 +0100" -->
<!-- isosent="20101029173825" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open MPI please recommend a debugger for open MPI" -->
<!-- id="659736B4-5A14-49E3-ACF5-B58F848FD4C2_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="SNT134-w61A6AD454A1E26A16D3DF4CB450_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] open MPI please recommend a debugger for open MPI<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-29 13:38:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14661.php">Jack Bryan: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<li><strong>Previous message:</strong> <a href="14659.php">Jack Bryan: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<li><strong>In reply to:</strong> <a href="14659.php">Jack Bryan: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14661.php">Jack Bryan: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<li><strong>Reply:</strong> <a href="14661.php">Jack Bryan: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you try the following and send me the output.
<br>
<p>qstat -n -u `whoami` @clusterName
<br>
<p>The output sent before implies that your cluster is called &quot;clusterName&quot; rather than &quot;cluster&quot; which is a little surprising but let's see what it gives us if we query on that basis.
<br>
<p>Ashley.
<br>
<p>On 29 Oct 2010, at 18:29, Jack Bryan wrote:
<br>
<p><span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have run padb (the new one with your patch) on my system and got :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -bash-3.2$ padb -Ormgr=pbs -Q 48516.cluster
</span><br>
<span class="quotelev1">&gt; $VAR1 = {};
</span><br>
<span class="quotelev1">&gt; Job 48516.cluster  is not active
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, the job is running. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How to check whether my system has pbs_pro ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help is appreciated. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; Jinxu Ding
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oct. 29 2010
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; From: ashley_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Date: Fri, 29 Oct 2010 18:21:46 +0100
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] open MPI please recommend a debugger for open MPI
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On 29 Oct 2010, at 12:06, Jeremy Roberts wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'd suggest looking into TotalView (<a href="http://www.totalviewtech.com">http://www.totalviewtech.com</a>) and/or DDT (<a href="http://www.allinea.com/">http://www.allinea.com/</a>). I've used TotalView pretty extensively and found it to be pretty easy to use. They are both commercial, however, and not cheap. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; As far as I know, there isn't a whole lot of open source support for parallel debugging. The Parallel Tools Platform of Eclipse claims to provide a parallel debugger, though I have yet to try it (<a href="http://www.eclipse.org/ptp/">http://www.eclipse.org/ptp/</a>).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Jeremy has covered the graphical parallel debuggers that I'm aware of, for a different approach there is padb which isn't a &quot;parallel debugger&quot; in the traditional model but is able to show you the same type of information, it won't allow you to point-and-click through the source or single step through the code but it is lightweight and will show you the information which you need to know. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Padb needs to integrate with the resource manager, I know it works with pbs_pro but it seems there are a few issues on your system which is pbs (without the pro). I can help you with this and work through the problems but only if you work with me and provide details of the integration, in particular I've sent you a version which has a small patch and some debug printfs added, if you could send me the output from this I'd be able to tell you if it was likely to work and how to go about making it do so.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ashley.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14661.php">Jack Bryan: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<li><strong>Previous message:</strong> <a href="14659.php">Jack Bryan: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<li><strong>In reply to:</strong> <a href="14659.php">Jack Bryan: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14661.php">Jack Bryan: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
<li><strong>Reply:</strong> <a href="14661.php">Jack Bryan: "Re: [OMPI users] open MPI please recommend a debugger for open MPI"</a>
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
