<?
$subject_val = "Re: [OMPI users] About openmpi-mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 17 14:30:49 2009" -->
<!-- isoreceived="20091217193049" -->
<!-- sent="Thu, 17 Dec 2009 20:30:44 +0100" -->
<!-- isosent="20091217193044" -->
<!-- name="Jeroen Kleijer" -->
<!-- email="jeroen.kleijer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About openmpi-mpirun" -->
<!-- id="dad39cd60912171130t5b525a08rf0c75cc49f520f68_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="64102FE81CF56640B4AE9EEF9B0026F5818C9D_at_kl-exc-001.res.lan" -->
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
<strong>Subject:</strong> Re: [OMPI users] About openmpi-mpirun<br>
<strong>From:</strong> Jeroen Kleijer (<em>jeroen.kleijer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-17 14:30:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11587.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Previous message:</strong> <a href="11585.php">Min Zhu: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>In reply to:</strong> <a href="11585.php">Min Zhu: "Re: [OMPI users] About openmpi-mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11581.php">Ashley Pittman: "Re: [OMPI users] About openmpi-mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Min,
<br>
<p>I've had a chance  to use the openmpi-mpirun script.
<br>
Though unfortunately I do not have openmpi available at the moment
<br>
(customer where I'm at runs RHEL4 with LAM/MPI) I've been able to see
<br>
what quotes need to be used and this one seems to work on my end:
<br>
<p>&nbsp;bsub -e ERR -o OUT -n 16 './openmpi-mpirun /bin/sh -c &quot;ulimit -s
<br>
unlimited ; ./wrf.exe &quot; '
<br>
<p>Could you give this a try?
<br>
<p>Regards,
<br>
<p>Jeroen Kleijer
<br>
<p>On Thu, Dec 17, 2009 at 5:56 PM, Min Zhu &lt;min.zhu_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi, Jeroen,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot. Unfortunately I don't think I have got mpirun.lsf. The Dell company only asked us to use openmpi-mpirun as a wrapper script.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Min Zhu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Jeroen Kleijer
</span><br>
<span class="quotelev1">&gt; Sent: 17 December 2009 16:49
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] About openmpi-mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Min,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the mixup but it's been a while since I've actually used LSF.
</span><br>
<span class="quotelev1">&gt; I've had a look at my notes and to use mpirun with LSF you should give
</span><br>
<span class="quotelev1">&gt; something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bsub -a openmpi -n 16 &quot;mpirun.lsf &#160;-x PATH -x LD_LIBRARY_PATH -x
</span><br>
<span class="quotelev1">&gt; MPI_BUFFER_SIZE &#160;\&quot; ulimit -s unlimited ; ./wrf.exe \&quot; &quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (at least I think you should :) )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The mpirun.lsf is a wrapper provided by LSF and the -a openmpi tells
</span><br>
<span class="quotelev1">&gt; it to set the necessary openmpi environment varibales etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeroen Kleijer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Dec 17, 2009 at 5:32 PM, Min Zhu &lt;min.zhu_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This time the OUT file is
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Sender: LSF System &lt;lavaadmin_at_compute-01&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Job 667: &lt;openmpi-mpirun &quot;/bin/sh -c 'ulimit -s unlimited ; ./wrf.exe ' &quot; &gt; Exited
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Job &lt;openmpi-mpirun &quot;/bin/sh -c 'ulimit -s unlimited ; ./wrf.exe ' &quot; &gt; was submitted from host &lt;seamus&gt; by user &lt;mzh&gt;.
</span><br>
<span class="quotelev2">&gt;&gt; Job was executed on host(s) &lt;8*compute-01&gt;, in queue &lt;normal&gt;, as user &lt;mzh&gt;.
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&lt;8*compute-12&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;/home/mzh&gt; was used as the home directory.
</span><br>
<span class="quotelev2">&gt;&gt; &lt;/home/mzh/wrf-intel/test/em_real&gt; was used as the working directory.
</span><br>
<span class="quotelev2">&gt;&gt; Started at Thu Dec 17 18:27:58 2009
</span><br>
<span class="quotelev2">&gt;&gt; Results reported at Thu Dec 17 18:28:04 2009
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your job looked like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # LSBATCH: User input
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-mpirun &quot;/bin/sh -c 'ulimit -s unlimited ; ./wrf.exe ' &quot;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Exited with exit code 2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Resource usage summary:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160;CPU time &#160; : &#160; &#160; &#160;0.07 sec.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The output (if any) follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PS:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Read file &lt;ERR&gt; for stderr output of this job.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ERR file is,
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 0: unexpected EOF while looking for matching `''
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 1: syntax error: unexpected end of file
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 0: unexpected EOF while looking for matching `''
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 1: syntax error: unexpected end of file
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 0: unexpected EOF while looking for matching `''
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 1: syntax error: unexpected end of file
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 0: unexpected EOF while looking for matching `''
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 1: syntax error: unexpected end of file
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 0: unexpected EOF while looking for matching `''
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 1: syntax error: unexpected end of file
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 0: unexpected EOF while looking for matching `''
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 1: syntax error: unexpected end of file
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 0: unexpected EOF while looking for matching `''
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 1: syntax error: unexpected end of file
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 0: unexpected EOF while looking for matching `''
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 1: syntax error: unexpected end of file
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 0: unexpected EOF while looking for matching `''
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 1: syntax error: unexpected end of file
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 0: unexpected EOF while looking for matching `''
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 1: syntax error: unexpected end of file
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 0: unexpected EOF while looking for matching `''
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 1: syntax error: unexpected end of file
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 0: unexpected EOF while looking for matching `''
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 1: syntax error: unexpected end of file
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 0: unexpected EOF while looking for matching `''
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 1: syntax error: unexpected end of file
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 0: unexpected EOF while looking for matching `''
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 1: syntax error: unexpected end of file
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 0: unexpected EOF while looking for matching `''
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 1: syntax error: unexpected end of file
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 0: unexpected EOF while looking for matching `''
</span><br>
<span class="quotelev2">&gt;&gt; -s: -c: line 1: syntax error: unexpected end of file
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Min Zhu
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Jeroen Kleijer
</span><br>
<span class="quotelev2">&gt;&gt; Sent: 17 December 2009 16:24
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] About openmpi-mpirun
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Min,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Seems like the command ulimit was executed 16 times but after that
</span><br>
<span class="quotelev2">&gt;&gt; (the &quot;; ./wrf.exe&quot;) was ignored.
</span><br>
<span class="quotelev2">&gt;&gt; Could you give the following a try:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bsub -e ERR -o OUT -n 16 &quot;openmpi-mpirun \&quot;/bin/sh -c 'ulimit -s
</span><br>
<span class="quotelev2">&gt;&gt; unlimited ; ./wrf.exe ' \&quot; &quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Somewhere, quoting goes wrong and I'm trying to figure out where....
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeroen Kleijer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Dec 17, 2009 at 5:09 PM, Min Zhu &lt;min.zhu_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi, Jeroen,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is the OUT file, ERR file is empty.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sender: LSF System &lt;lavaadmin_at_compute-10&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Job 662: &lt;openmpi-mpirun /bin/sh -c 'ulimit -s unlimited; ./wrf.exe ' &gt; Done
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Job &lt;openmpi-mpirun /bin/sh -c 'ulimit -s unlimited; ./wrf.exe ' &gt; was submitted from host &lt;seamus&gt; by user &lt;mzh&gt;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Job was executed on host(s) &lt;8*compute-10&gt;, in queue &lt;normal&gt;, as user &lt;mzh&gt;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&lt;8*compute-11&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;/home/mzh&gt; was used as the home directory.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;/home/mzh/wrf-intel/test/run1&gt; was used as the working directory.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Started at Thu Dec 17 17:37:09 2009
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Results reported at Thu Dec 17 17:37:15 2009
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your job looked like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # LSBATCH: User input
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-mpirun /bin/sh -c 'ulimit -s unlimited; ./wrf.exe '
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Successfully completed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Resource usage summary:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160;CPU time &#160; : &#160; &#160; &#160;0.05 sec.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The output (if any) follows:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PS:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Read file &lt;ERR&gt; for stderr output of this job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Min Zhu
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Jeroen Kleijer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: 17 December 2009 16:05
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] About openmpi-mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Min
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did you get any type of error message in the ERR or OUT files?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't have mpirun installed in the environment at the moment but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; giving the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bsub -q interq -I &quot;ssh &lt;hostname&gt; /bin/sh -c 'ulimit -s unlimited ;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/hostname ' &quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seems to work for me, so I'm kind of curious what the error message is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you're seeing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeroen Kleijer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Dec 17, 2009 at 4:41 PM, Min Zhu &lt;min.zhu_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi, Jeroen,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for your reply. I tried the command bsub -e ERR -o OUT -n 16 &quot;openmpi-mpirun /bin/sh -c 'ulimit -s unlimited; ./wrf.exe ' &quot; and wrf.exe not executed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Min Zhu
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Jeroen Kleijer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: 17 December 2009 15:34
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] About openmpi-mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It's just that the &quot;'s on the command line get parsed by LSF / bash
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (or whatever shell you use)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you wish to use it without the script you can give this a try:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bsub -e ERR -o OUT -n 16 &quot;openmpi-mpirun /bin/sh -c 'ulimit -s
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unlimited; ./wrf.exe ' &quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This causes to pass the whole string &quot;openmpi-mpirun ....&quot; to be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; passed as a single string / command to LSF.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The second line between the single quotes is then passed as a single
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; argument to /bin/sh which is run by openmpi-mpirun.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kind regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeroen Kleijer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thu, Dec 17, 2009 at 4:03 PM, Min Zhu &lt;min.zhu_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi, Jeff,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Your script method works for me. Thank you very much,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Min Zhu
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sent: 17 December 2009 14:56
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] About openmpi-mpirun
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This might be something you need to talk to Platform about...?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Another option would be to openmpi-mpirun a script that is just a few
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lines long:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ulimit -s unlimited
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./wrf.exe
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Dec 17, 2009, at 9:40 AM, Min Zhu wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi, Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks. For bsub -e ERR -o OUT -n 16 openmpi-mpirun /bin/sh -c &quot;ulimit
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -s unlimited; ./wrf.exe&quot;, I tried and wrf.exe doesn't executed.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Here is the content of openmpi-mpirun file, so maybe something needs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; be changed?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ----------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # &#160;Copyright (c) 2007 Platform Computing
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # This script is a wrapper for openmpi mpirun
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # it generates the machine file based on the hosts
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # given to it by Lava.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; usage() {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; cat &lt;&lt;USEEOF
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; USAGE: &#160;$0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; This command is a wrapper for mpirun (openmpi). &#160;It can
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; only be run within Lava using bsub e.g.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; bsub -n # &quot;$0 -np # {my mpi command and args}&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; The wrapper will automatically generate the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; machinefile used by mpirun.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; NOTE: &#160;The list of hosts cannot exceed 4KBytes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; USEEOF
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; if [ x&quot;${LSB_JOBFILENAME}&quot; = x -o x&quot;${LSB_HOSTS}&quot; = x ]; then
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160; usage
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160; exit -1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MYARGS=$*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; WORKDIR=`dirname ${LSB_JOBFILENAME}`
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MACHFILE=${WORKDIR}/mpi_machines
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ARGLIST=${WORKDIR}/mpi_args
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # Check if mpirun is in the PATH
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; T=`which mpirun`
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; if [ $? -ne 0 ]; then
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160; echo &quot;Error: &#160;mpirun is not in your PATH.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160; exit -2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; echo &quot;${MYARGS}&quot; &gt; ${ARGLIST}
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; T=`grep -- -machinefile ${ARGLIST} |wc -l`
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; if [ $T -gt 0 ]; then
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160; echo &quot;Error: &#160;Do not provide the machinefile for mpirun.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160; echo &quot; &#160; &#160; &#160; &#160;It is generated automatically for you.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160; exit -3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # Make the open-mpi machine file
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; echo &quot;${LSB_HOSTS}&quot; &gt; ${MACHFILE}.lst
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tr '\/ ' '\r\n' &lt; ${MACHFILE}.lst &gt; ${MACHFILE}
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPIRUN=`which --skip-alias mpirun`
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ${MPIRUN} -x LD_LIBRARY_PATH -machinefile ${MACHFILE} ${MYARGS}
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; exit $?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ----------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Min Zhu
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sent: 17 December 2009 14:29
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] About openmpi-mpirun
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Dec 17, 2009, at 9:15 AM, Min Zhu wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Thanks for your reply. Yes, your mpirun command works for me. But I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; need to use bsub job scheduler. I wonder why
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; bsub -e ERR -o OUT -n 16 openmpi-mpirun &quot;/bin/sh -c ulimit -s
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; unlimited; ./wrf.exe&quot; doesn't work.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Try with different quoting...? &#160;I don't know the details of the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; openmpi-mpirun script, but perhaps it's trying to exec the whole
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; quoted
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; string as a single executable (which doesn't exist). &#160;Perhaps:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; bsub -e ERR -o OUT -n 16 openmpi-mpirun /bin/sh -c &quot;ulimit -s
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; unlimited;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ./wrf.exe&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; That's a (somewhat educated) guess...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; CONFIDENTIALITY NOTICE: This e-mail, including any attachments,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; contains information that may be confidential, and is protected by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; copyright. It is directed to the intended recipient(s) only. &#160;If you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; have received this e-mail in error please e-mail the sender by replying
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to this message, and then delete the e-mail. Unauthorised disclosure,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; publication, copying or use of this e-mail is prohibited. &#160;Any
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; communication of a personal nature in this e-mail is not made by or on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; behalf of any RES group company. E-mails sent or received may be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; monitored to ensure compliance with the law, regulation and/or our
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; policies.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CONFIDENTIALITY NOTICE: This e-mail, including any attachments, contains information that may be confidential, and is protected by copyright. It is directed to the intended recipient(s) only. &#160;If you have received this e-mail in error please e-mail the sender by replying to this message, and then delete the e-mail. Unauthorised disclosure, publication, copying or use of this e-mail is prohibited. &#160;Any communication of a personal nature in this e-mail is not made by or on behalf of any RES group company. E-mails sent or received may be monitored to ensure compliance with the law, regulation and/or our policies.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CONFIDENTIALITY NOTICE: This e-mail, including any attachments, contains information that may be confidential, and is protected by copyright. It is directed to the intended recipient(s) only. &#160;If you have received this e-mail in error please e-mail the sender by replying to this message, and then delete the e-mail. Unauthorised disclosure, publication, copying or use of this e-mail is prohibited. &#160;Any communication of a personal nature in this e-mail is not made by or on behalf of any RES group company. E-mails sent or received may be monitored to ensure compliance with the law, regulation and/or our policies.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CONFIDENTIALITY NOTICE: This e-mail, including any attachments, contains information that may be confidential, and is protected by copyright. It is directed to the intended recipient(s) only. &#160;If you have received this e-mail in error please e-mail the sender by replying to this message, and then delete the e-mail. Unauthorised disclosure, publication, copying or use of this e-mail is prohibited. &#160;Any communication of a personal nature in this e-mail is not made by or on behalf of any RES group company. E-mails sent or received may be monitored to ensure compliance with the law, regulation and/or our policies.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CONFIDENTIALITY NOTICE: This e-mail, including any attachments, contains information that may be confidential, and is protected by copyright. It is directed to the intended recipient(s) only. &#160;If you have received this e-mail in error please e-mail the sender by replying to this message, and then delete the e-mail. Unauthorised disclosure, publication, copying or use of this e-mail is prohibited. &#160;Any communication of a personal nature in this e-mail is not made by or on behalf of any RES group company. E-mails sent or received may be monitored to ensure compliance with the law, regulation and/or our policies.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CONFIDENTIALITY NOTICE: This e-mail, including any attachments, contains information that may be confidential, and is protected by copyright. It is directed to the intended recipient(s) only. &#160;If you have received this e-mail in error please e-mail the sender by replying to this message, and then delete the e-mail. Unauthorised disclosure, publication, copying or use of this e-mail is prohibited. &#160;Any communication of a personal nature in this e-mail is not made by or on behalf of any RES group company. E-mails sent or received may be monitored to ensure compliance with the law, regulation and/or our policies.
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11587.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Previous message:</strong> <a href="11585.php">Min Zhu: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>In reply to:</strong> <a href="11585.php">Min Zhu: "Re: [OMPI users] About openmpi-mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11581.php">Ashley Pittman: "Re: [OMPI users] About openmpi-mpirun"</a>
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
