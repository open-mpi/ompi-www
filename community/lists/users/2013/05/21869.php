<?
$subject_val = "Re: [OMPI users] running openmpi with specified lib path";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  7 11:07:17 2013" -->
<!-- isoreceived="20130507150717" -->
<!-- sent="Tue, 07 May 2013 22:07:09 +0700" -->
<!-- isosent="20130507150709" -->
<!-- name="Duke Nguyen" -->
<!-- email="duke.lists_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running openmpi with specified lib path" -->
<!-- id="5189189D.5050602_at_gmx.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E267134-3BA5-4640-BD46-0EC29F46E849_at_open-mpi.org" -->
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
<strong>From:</strong> Duke Nguyen (<em>duke.lists_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-07 11:07:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21870.php">Nenad Vujicic: "[OMPI users] Problems with building with VS 2010 and VS 2012"</a>
<li><strong>Previous message:</strong> <a href="21868.php">Ralph Castain: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>In reply to:</strong> <a href="21868.php">Ralph Castain: "Re: [OMPI users] running openmpi with specified lib path"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5/7/13 9:48 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 7, 2013, at 7:39 AM, Duke Nguyen &lt;duke.lists_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No I didnt (and that maybe the reason, I am not really sure I was
</span><br>
<span class="quotelev2">&gt;&gt; correct when installation these things). What I did was:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ cd /opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163
</span><br>
<span class="quotelev2">&gt;&gt; $ ./configure CC=/opt/intel/composer_xe_2013.3.163/bin/intel64/icc
</span><br>
<span class="quotelev2">&gt;&gt; CXX=/opt/intel/composer_xe_2013.3.163/bin/intel64/icpc
</span><br>
<span class="quotelev2">&gt;&gt; F77=/opt/intel/composer_xe_2013.3.163/bin/intel64/ifort
</span><br>
<span class="quotelev2">&gt;&gt; FC=/opt/intel/composer_xe_2013.3.163/bin/intel64/ifort
</span><br>
<span class="quotelev2">&gt;&gt; $ make -j8
</span><br>
<span class="quotelev2">&gt;&gt; $ DESTDIR=`pwd` make -j8 install
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; so all the compiled openmpi components were installed at
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ ls /opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/
</span><br>
<span class="quotelev2">&gt;&gt; bin  etc  include  lib  share
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am I doing wrong??? Please advise.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's the problem - you have to give a prefix that matches the ld-libary-path. This installation is looking for its libs in /usr/local, not in your actual location
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>You SAVED me a whole week of headache!!!!! I was messing between DESTDIR
<br>
and PREFIX. I think it is sorted out now :).
<br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21869/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21870.php">Nenad Vujicic: "[OMPI users] Problems with building with VS 2010 and VS 2012"</a>
<li><strong>Previous message:</strong> <a href="21868.php">Ralph Castain: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>In reply to:</strong> <a href="21868.php">Ralph Castain: "Re: [OMPI users] running openmpi with specified lib path"</a>
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
