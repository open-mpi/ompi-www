<?
$subject_val = "Re: [OMPI users] running openmpi with specified lib path";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  7 10:48:27 2013" -->
<!-- isoreceived="20130507144827" -->
<!-- sent="Tue, 7 May 2013 07:48:21 -0700" -->
<!-- isosent="20130507144821" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running openmpi with specified lib path" -->
<!-- id="4E267134-3BA5-4640-BD46-0EC29F46E849_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51891232.2010407_at_gmx.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] running openmpi with specified lib path<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-07 10:48:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21869.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Previous message:</strong> <a href="21867.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>In reply to:</strong> <a href="21867.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21869.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Reply:</strong> <a href="21869.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 7, 2013, at 7:39 AM, Duke Nguyen &lt;duke.lists_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No I didnt (and that maybe the reason, I am not really sure I was
</span><br>
<span class="quotelev1">&gt; correct when installation these things). What I did was:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cd /opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163
</span><br>
<span class="quotelev1">&gt; $ ./configure CC=/opt/intel/composer_xe_2013.3.163/bin/intel64/icc
</span><br>
<span class="quotelev1">&gt; CXX=/opt/intel/composer_xe_2013.3.163/bin/intel64/icpc
</span><br>
<span class="quotelev1">&gt; F77=/opt/intel/composer_xe_2013.3.163/bin/intel64/ifort
</span><br>
<span class="quotelev1">&gt; FC=/opt/intel/composer_xe_2013.3.163/bin/intel64/ifort
</span><br>
<span class="quotelev1">&gt; $ make -j8
</span><br>
<span class="quotelev1">&gt; $ DESTDIR=`pwd` make -j8 install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so all the compiled openmpi components were installed at
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ls /opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/
</span><br>
<span class="quotelev1">&gt; bin  etc  include  lib  share
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am I doing wrong??? Please advise.
</span><br>
<p>That's the problem - you have to give a prefix that matches the ld-libary-path. This installation is looking for its libs in /usr/local, not in your actual location
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21869.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Previous message:</strong> <a href="21867.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>In reply to:</strong> <a href="21867.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21869.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Reply:</strong> <a href="21869.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
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
