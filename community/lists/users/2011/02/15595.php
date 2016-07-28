<?
$subject_val = "Re: [OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 14 09:05:04 2011" -->
<!-- isoreceived="20110214140504" -->
<!-- sent="Mon, 14 Feb 2011 09:04:56 -0500" -->
<!-- isosent="20110214140456" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (no subject)" -->
<!-- id="E48F89DD-1AFA-40F7-9B79-23A8F130D1EE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="646868.71728.qm_at_web25301.mail.ukl.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] (no subject)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-14 09:04:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15596.php">Jeff Squyres: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15594.php">Reuti: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15588.php">lagoun brahim: "[OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This type of error message *usually* means that you haven't set your LD_LIBRARY_PATH to point to the intel library.  Further, this *usually* means that you aren't sourcing the iccvars.sh file in your shell startup file on remote nodes (or iccvars.csh, depending on your shell).
<br>
<p>Remember that the LD_LIBRARY_PATH has to be set to include the location of the intel libraries on *all* nodes -- and since mpirun launches on remote nodes, you need to set this in your shell startup files (e.g., $HOME/.bashrc if you are using bash).
<br>
<p><p><p>On Feb 13, 2011, at 12:38 PM, lagoun brahim wrote:
<br>
<p><span class="quotelev1">&gt; hi every one
</span><br>
<span class="quotelev1">&gt; i need your help
</span><br>
<span class="quotelev1">&gt; i have a dual core machine with os linux opensuse 10.3 64bits
</span><br>
<span class="quotelev1">&gt; i configure openmpi with ifort and icc (icpc)
</span><br>
<span class="quotelev1">&gt; i compiled a wien2k code but when i run the parralel version of it i gut the follow error message
</span><br>
<span class="quotelev1">&gt; /home/wien/lapw1_mpi: symbol lookup error: /usr/local/lib/libopen-pal.so.0: undefined symbol: __intel_sse2_strcpy
</span><br>
<span class="quotelev1">&gt; /home/wien/lapw1_mpi: symbol lookup error: /usr/local/lib/libopen-pal.so.0: undefined symbol: __intel_sse2_strcpy
</span><br>
<span class="quotelev1">&gt; cat: Pas de correspondance.
</span><br>
<span class="quotelev1">&gt; any suggestion 
</span><br>
<span class="quotelev1">&gt; and thanks in advance
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="15596.php">Jeff Squyres: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15594.php">Reuti: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15588.php">lagoun brahim: "[OMPI users] (no subject)"</a>
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
