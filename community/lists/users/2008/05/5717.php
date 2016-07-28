<?
$subject_val = "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 22 05:47:38 2008" -->
<!-- isoreceived="20080522094738" -->
<!-- sent="Thu, 22 May 2008 11:25:07 +0200 (CEST)" -->
<!-- isosent="20080522092507" -->
<!-- name="Alex L." -->
<!-- email="alex_mlists_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Sorry!  You were supposed to get help about...&amp;quot;" -->
<!-- id="alpine.DEB.1.00.0805221100300.2512_at_kurgan.scythia.net" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2DDCFDD5-ECFF-4791-9FDF-DA20C0E3C00C_at_cisco.com" -->
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
<strong>Date:</strong> 2008-05-22 05:25:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5718.php">Romaric David: "[OMPI users] Maui + Slurm + OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5716.php">Brock Palen: "Re: [OMPI users] different interconnects (myrinet and gige)"</a>
<li><strong>In reply to:</strong> <a href="5714.php">Jeff Squyres: "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff,
<br>
<p>thank you so far, it helped me partially, now i can see some error
<br>
messages, some are still missed, this RPM package seems to be a 
<br>
little bit weird :-/
<br>
<p>Kind regards, Alex.
<br>
<p>On Wed, 21 May 2008, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; If everything that should be in the OMPI package data directory is in  
</span><br>
<span class="quotelev1">&gt; a different location, then you can setenv OPAL_PKGDATADIR to the new  
</span><br>
<span class="quotelev1">&gt; location.  The two sets of files that are normally in this location  
</span><br>
<span class="quotelev1">&gt; are the OMPI help files (help-*.txt) and the wrapper compiler data  
</span><br>
<span class="quotelev1">&gt; files (mpi*-wrapper-data.txt).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 20, 2008, at 10:59 AM, Alex L. wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;rpm -q -f ...&quot; tells me that the files came from RedHat's
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.2.3-1 RPM package which is distributed with this RHEL 4 U6
</span><br>
<span class="quotelev2">&gt; &gt; release. Of course i can (and will) report this to RedHat, and waite  
</span><br>
<span class="quotelev2">&gt; &gt; for
</span><br>
<span class="quotelev2">&gt; &gt; their bug fix. But for the fast way: without moving any files  
</span><br>
<span class="quotelev2">&gt; &gt; through the
</span><br>
<span class="quotelev2">&gt; &gt; filesystem is there any way to tell OMPI where the files are, anyone ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance, Alex.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, 19 May 2008, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It feels like OMPI is somehow looking for the help files in the wrong
</span><br>
<span class="quotelev3">&gt; &gt;&gt; place.  Were they moved after OMPI was installed?  How did you  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; install
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OMPI?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On May 16, 2008, at 10:30 AM, Alex L. wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello Everybody,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; i got a little bit annoying situation with OMPI error messages
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; on a RHEL 4-something box. Every time i should see a error
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; message i recieve something like:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ---------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   orterun:init-failure
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; from the file:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   help-orterun.txt
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; But I couldn't find any file matching that name.  Sorry!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ---------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; i know that the help-files (and only the help-files not
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the whole installation) are located in:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/share/openmpi/1.2.3-gcc/help64/openmpi/*
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Is it possible to tell OMPI to look for the help files
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; in this direcotry ? Some ENV variable or a --option ?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thank you in advance, Alex
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
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
<li><strong>Next message:</strong> <a href="5718.php">Romaric David: "[OMPI users] Maui + Slurm + OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5716.php">Brock Palen: "Re: [OMPI users] different interconnects (myrinet and gige)"</a>
<li><strong>In reply to:</strong> <a href="5714.php">Jeff Squyres: "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;"</a>
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
