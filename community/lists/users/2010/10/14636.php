<?
$subject_val = "Re: [OMPI users] Open MPI program cannot complete";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 27 11:35:12 2010" -->
<!-- isoreceived="20101027153512" -->
<!-- sent="Wed, 27 Oct 2010 09:35:07 -0600" -->
<!-- isosent="20101027153507" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI program cannot complete" -->
<!-- id="SNT134-w29EF5969285727800158C7CB430_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="0A9EB153-D9D9-4F66-9758-A77C5CCC1B38_at_pittman.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI program cannot complete<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-27 11:35:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14637.php">Eugene Loh: "Re: [OMPI users] Using hostfile with default hostfile"</a>
<li><strong>Previous message:</strong> <a href="14635.php">Shiqing Fan: "Re: [OMPI users] Help passing filename arguments with spaces	through mpirun on windows"</a>
<li><strong>Maybe in reply to:</strong> <a href="14581.php">Jack Bryan: "[OMPI users] Open MPI program cannot complete"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanksI got :-bash-3.2$ padb -Ormgr=pbs -Q 48516.cystorm2$VAR1 = {};Job 48516.cluster  is not activeActually, the job is running. Any help is appreciated. thanksJinxu DingOct. 27 2010
<br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open MPI program cannot complete
</span><br>
<span class="quotelev1">&gt; From: ashley_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Tue, 26 Oct 2010 23:18:57 +0100
</span><br>
<span class="quotelev1">&gt; To: dtustudy68_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The &quot;^M: bad interpreter&quot; tells me that you've downloaded the file in Windows and have got dos-based new-lines in the file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Assuming it's installed on your machine run &quot;dos2unix padb&quot; and it'll remove them, if that doesn't work save the file using a unix based email program.  I hope this helps you when we finally get it working!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 26 Oct 2010, at 22:14, Jack Bryan wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi, 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I put your attahced padb in mypath and also set it up in env variable.
</span><br>
<span class="quotelev2">&gt; &gt; I got this: 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -bash-3.2$ padb -Ormgr=pbs -Q 48494.cystorm2
</span><br>
<span class="quotelev2">&gt; &gt; -bash: /mypath/padb_patch_2010_10_26/padb: /usr/bin/perl^M: bad interpreter: No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Any help is appreciated. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; thanks
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Jack 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Oct. 26 2010
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Open MPI program cannot complete
</span><br>
<span class="quotelev2">&gt; &gt; From: ashley_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Date: Tue, 26 Oct 2010 08:39:56 +0100
</span><br>
<span class="quotelev2">&gt; &gt; CC: tomviewisu_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; To: dtustudy68_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt; Sorry, I forgot to attach it last night.
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14636/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14637.php">Eugene Loh: "Re: [OMPI users] Using hostfile with default hostfile"</a>
<li><strong>Previous message:</strong> <a href="14635.php">Shiqing Fan: "Re: [OMPI users] Help passing filename arguments with spaces	through mpirun on windows"</a>
<li><strong>Maybe in reply to:</strong> <a href="14581.php">Jack Bryan: "[OMPI users] Open MPI program cannot complete"</a>
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
