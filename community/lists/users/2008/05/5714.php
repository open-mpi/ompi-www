<?
$subject_val = "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 13:09:53 2008" -->
<!-- isoreceived="20080521170953" -->
<!-- sent="Wed, 21 May 2008 13:09:32 -0400" -->
<!-- isosent="20080521170932" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Sorry!  You were supposed to get help about...&amp;quot;" -->
<!-- id="2DDCFDD5-ECFF-4791-9FDF-DA20C0E3C00C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.1.00.0805201641380.2512_at_kurgan.scythia.net" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-21 13:09:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5715.php">Borenstein, Bernard S: "[OMPI users] different interconnects (myrinet and gige)"</a>
<li><strong>Previous message:</strong> <a href="5713.php">Brian W. Barrett: "Re: [OMPI users] Memory manager"</a>
<li><strong>In reply to:</strong> <a href="5709.php">Alex L.: "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5717.php">Alex L.: "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;"</a>
<li><strong>Reply:</strong> <a href="5717.php">Alex L.: "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If everything that should be in the OMPI package data directory is in  
<br>
a different location, then you can setenv OPAL_PKGDATADIR to the new  
<br>
location.  The two sets of files that are normally in this location  
<br>
are the OMPI help files (help-*.txt) and the wrapper compiler data  
<br>
files (mpi*-wrapper-data.txt).
<br>
<p><p>On May 20, 2008, at 10:59 AM, Alex L. wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;rpm -q -f ...&quot; tells me that the files came from RedHat's
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.3-1 RPM package which is distributed with this RHEL 4 U6
</span><br>
<span class="quotelev1">&gt; release. Of course i can (and will) report this to RedHat, and waite  
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev1">&gt; their bug fix. But for the fast way: without moving any files  
</span><br>
<span class="quotelev1">&gt; through the
</span><br>
<span class="quotelev1">&gt; filesystem is there any way to tell OMPI where the files are, anyone ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance, Alex.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, 19 May 2008, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It feels like OMPI is somehow looking for the help files in the wrong
</span><br>
<span class="quotelev2">&gt;&gt; place.  Were they moved after OMPI was installed?  How did you  
</span><br>
<span class="quotelev2">&gt;&gt; install
</span><br>
<span class="quotelev2">&gt;&gt; OMPI?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 16, 2008, at 10:30 AM, Alex L. wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Everybody,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i got a little bit annoying situation with OMPI error messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on a RHEL 4-something box. Every time i should see a error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message i recieve something like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   orterun:init-failure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from the file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   help-orterun.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But I couldn't find any file matching that name.  Sorry!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i know that the help-files (and only the help-files not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the whole installation) are located in:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/share/openmpi/1.2.3-gcc/help64/openmpi/*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it possible to tell OMPI to look for the help files
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in this direcotry ? Some ENV variable or a --option ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you in advance, Alex
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5715.php">Borenstein, Bernard S: "[OMPI users] different interconnects (myrinet and gige)"</a>
<li><strong>Previous message:</strong> <a href="5713.php">Brian W. Barrett: "Re: [OMPI users] Memory manager"</a>
<li><strong>In reply to:</strong> <a href="5709.php">Alex L.: "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5717.php">Alex L.: "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;"</a>
<li><strong>Reply:</strong> <a href="5717.php">Alex L.: "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;"</a>
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
