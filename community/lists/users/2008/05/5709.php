<?
$subject_val = "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 20 10:59:30 2008" -->
<!-- isoreceived="20080520145930" -->
<!-- sent="Tue, 20 May 2008 16:59:20 +0200 (CEST)" -->
<!-- isosent="20080520145920" -->
<!-- name="Alex L." -->
<!-- email="alex_mlists_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Sorry!  You were supposed to get help about...&amp;quot;" -->
<!-- id="alpine.DEB.1.00.0805201641380.2512_at_kurgan.scythia.net" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CF8C6FB2-015F-419F-9840-4368F840BB91_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;<br>
<strong>From:</strong> Alex L. (<em>alex_mlists_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-20 10:59:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5710.php">Rudd, James: "[OMPI users] ORTE_ERROR_LOG Timeout"</a>
<li><strong>Previous message:</strong> <a href="5708.php">Brian Barrett: "Re: [OMPI users] Memory manager"</a>
<li><strong>In reply to:</strong> <a href="5703.php">Jeff Squyres: "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5714.php">Jeff Squyres: "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;"</a>
<li><strong>Reply:</strong> <a href="5714.php">Jeff Squyres: "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;rpm -q -f ...&quot; tells me that the files came from RedHat's 
<br>
openmpi-1.2.3-1 RPM package which is distributed with this RHEL 4 U6
<br>
release. Of course i can (and will) report this to RedHat, and waite for 
<br>
their bug fix. But for the fast way: without moving any files through the 
<br>
filesystem is there any way to tell OMPI where the files are, anyone ?
<br>
<p>Thanks in advance, Alex.
<br>
<p>On Mon, 19 May 2008, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; It feels like OMPI is somehow looking for the help files in the wrong  
</span><br>
<span class="quotelev1">&gt; place.  Were they moved after OMPI was installed?  How did you install  
</span><br>
<span class="quotelev1">&gt; OMPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 16, 2008, at 10:30 AM, Alex L. wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello Everybody,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i got a little bit annoying situation with OMPI error messages
</span><br>
<span class="quotelev2">&gt; &gt; on a RHEL 4-something box. Every time i should see a error
</span><br>
<span class="quotelev2">&gt; &gt; message i recieve something like:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ---------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev2">&gt; &gt;    orterun:init-failure
</span><br>
<span class="quotelev2">&gt; &gt; from the file:
</span><br>
<span class="quotelev2">&gt; &gt;    help-orterun.txt
</span><br>
<span class="quotelev2">&gt; &gt; But I couldn't find any file matching that name.  Sorry!
</span><br>
<span class="quotelev2">&gt; &gt; ---------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i know that the help-files (and only the help-files not
</span><br>
<span class="quotelev2">&gt; &gt; the whole installation) are located in:
</span><br>
<span class="quotelev2">&gt; &gt;  /usr/share/openmpi/1.2.3-gcc/help64/openmpi/*
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is it possible to tell OMPI to look for the help files
</span><br>
<span class="quotelev2">&gt; &gt; in this direcotry ? Some ENV variable or a --option ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you in advance, Alex
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="5710.php">Rudd, James: "[OMPI users] ORTE_ERROR_LOG Timeout"</a>
<li><strong>Previous message:</strong> <a href="5708.php">Brian Barrett: "Re: [OMPI users] Memory manager"</a>
<li><strong>In reply to:</strong> <a href="5703.php">Jeff Squyres: "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5714.php">Jeff Squyres: "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;"</a>
<li><strong>Reply:</strong> <a href="5714.php">Jeff Squyres: "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;"</a>
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
