<?
$subject_val = "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 30 08:44:40 2010" -->
<!-- isoreceived="20101130134440" -->
<!-- sent="Tue, 30 Nov 2010 08:44:18 -0500" -->
<!-- isosent="20101130134418" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits" -->
<!-- id="D0CEBC17-8F93-4D82-AD8F-24B6D84E3BF8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CF4FDAD.3060400_at_aol.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-30 08:44:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14948.php">Ralph Castain: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="14946.php">Tim Prince: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>In reply to:</strong> <a href="14946.php">Tim Prince: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14951.php">Prentice Bisbal: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think we're all guessing until we get the full output.
<br>
<p>Note that the original error message showed that the link failed when trying to re-link libopen-rte.so.  This is deep within the install process.  Something very weird must have happened to make the installer suddenly be unable to find icc (after it had assumedly been able to find it all the way up until that point -- i.e., it must have been able to find icc when it installed/re-linked libopen-pal.so).
<br>
<p><p><p>On Nov 30, 2010, at 8:35 AM, Tim Prince wrote:
<br>
<p><span class="quotelev1">&gt; On 11/29/2010 3:03 PM, Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1- ./configure FC=ifort F77=ifort CC=icc CXX=icpc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2-make all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3 sudo make install all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; os passos 1 e 2 operam normalmente, mas quando uso o comando make install 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; aparece o erro que nao consigo solucionar.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You say only step 3 above fails.
</span><br>
<span class="quotelev2">&gt;&gt; You could try &quot;sudo -E make install&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; I take it that sudo -E should copy over the environment variable settings.  I haven't been able to find any documentation of this option, and I don't currently have an Ubuntu installation to check it.
</span><br>
<span class="quotelev1">&gt; Not being aware of such an option, I used to do:
</span><br>
<span class="quotelev1">&gt; sudo
</span><br>
<span class="quotelev1">&gt; source ...... compilervars.sh
</span><br>
<span class="quotelev1">&gt; make install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Prince
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
<li><strong>Next message:</strong> <a href="14948.php">Ralph Castain: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="14946.php">Tim Prince: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>In reply to:</strong> <a href="14946.php">Tim Prince: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14951.php">Prentice Bisbal: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
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
