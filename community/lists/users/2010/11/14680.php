<?
$subject_val = "Re: [OMPI users] Configure error - ompi/mca/io/romio/romio/localdefs: No such file or directory";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  2 09:44:40 2010" -->
<!-- isoreceived="20101102134440" -->
<!-- sent="Tue, 2 Nov 2010 09:44:35 -0400" -->
<!-- isosent="20101102134435" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure error - ompi/mca/io/romio/romio/localdefs: No such file or directory" -->
<!-- id="26AA7141-DCB9-46AC-B323-BF6099860467_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20408_1288640851_oA1JlQq0014012_1593EC10-2242-4091-B0A6-9DADD4F663AE_at_utep.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configure error - ompi/mca/io/romio/romio/localdefs: No such file or directory<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-02 09:44:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14681.php">Jeff Squyres: "Re: [OMPI users] Question about collective messages implementation"</a>
<li><strong>Previous message:</strong> <a href="14679.php">Jeff Squyres: "Re: [OMPI users] link problem on 64bit platform"</a>
<li><strong>In reply to:</strong> <a href="14673.php">Carrasco, Cesar J.: "[OMPI users] Configure error - ompi/mca/io/romio/romio/localdefs: No such file or directory"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm guessing that our configure script doesn't handle directories with spaces in it properly.
<br>
<p>Can you re-build in a directory with an absolute name that does not contain a space and see if the problem goes away?
<br>
<p><p><p>On Nov 1, 2010, at 3:47 PM, Carrasco, Cesar J. wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to install OpenMPI (1.4.3) in a MacPro system running OS X 10.6.4.
</span><br>
<span class="quotelev1">&gt; I have installed xcode and gfortran.
</span><br>
<span class="quotelev1">&gt; When I run  ./configure --prefix=/opt/openmpi 2&gt;&amp;1 | tee config.out
</span><br>
<span class="quotelev1">&gt; After some time I get the message ./configure: line 150073: ompi/mca/io/romio/romio/localdefs: No such file or directory.
</span><br>
<span class="quotelev1">&gt; I checked in that folder and the loacaldefs file is there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am attaching the config.log and also the output of the ./configure script.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tanks for your help.
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cesar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt; **                                                                         **
</span><br>
<span class="quotelev1">&gt; ** WARNING:  This email contains an attachment of a very suspicious type.  **
</span><br>
<span class="quotelev1">&gt; ** You are urged NOT to open this attachment unless you are absolutely     **
</span><br>
<span class="quotelev1">&gt; ** sure it is legitimate.  Opening this attachment may cause irreparable   **
</span><br>
<span class="quotelev1">&gt; ** damage to your computer and your files.  If you have any questions      **
</span><br>
<span class="quotelev1">&gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
</span><br>
<span class="quotelev1">&gt; **                                                                         **
</span><br>
<span class="quotelev1">&gt; ** This warning was added by the IU Computer Science Dept. mail scanner.   **
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;Archive.zip&gt;
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14681.php">Jeff Squyres: "Re: [OMPI users] Question about collective messages implementation"</a>
<li><strong>Previous message:</strong> <a href="14679.php">Jeff Squyres: "Re: [OMPI users] link problem on 64bit platform"</a>
<li><strong>In reply to:</strong> <a href="14673.php">Carrasco, Cesar J.: "[OMPI users] Configure error - ompi/mca/io/romio/romio/localdefs: No such file or directory"</a>
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
