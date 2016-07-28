<?
$subject_val = "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 10 21:42:13 2008" -->
<!-- isoreceived="20080911014213" -->
<!-- sent="Wed, 10 Sep 2008 21:42:09 -0400" -->
<!-- isosent="20080911014209" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2" -->
<!-- id="48C87771.4010101_at_neuralbs.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C4EDB50C.3075%prasanna_at_searchme.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2<br>
<strong>From:</strong> Eric Thibodeau (<em>kyron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-10 21:42:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6509.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6507.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6504.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6507.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Prasanna Ranganathan wrote:
<br>
<span class="quotelev1">&gt; Hi Eric,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot for the reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am currently working on upgrading to 1.2.7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not quite follow your directions; What do you refer to when you say say
</span><br>
<span class="quotelev1">&gt; &quot;try with USE=-threads...&quot;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I am referring to the USE variable which is used to set global package 
<br>
specificities. If you want to disable threads only for openmpi, edit 
<br>
/etc/portage/package.use and add the following line to it:
<br>
<p>sys-cluster/openmpi -threads
<br>
<p>And re-emerge openmpi, this will disable threads.
<br>
<span class="quotelev1">&gt; Kindly excuse if it is a silly question and pardon my ignorance :D
</span><br>
<span class="quotelev1">&gt;   
</span><br>
It is related to using Gentoo, if you're new to it, I suggest you give 
<br>
the documentation a shot:
<br>
<p><a href="http://www.gentoo.org/doc/en/index.xml?catid=gentoo">http://www.gentoo.org/doc/en/index.xml?catid=gentoo</a>
<br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Prasanna.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Eric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6509.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6507.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6504.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6507.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
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
