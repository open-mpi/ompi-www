<?
$subject_val = "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 24 14:35:04 2011" -->
<!-- isoreceived="20110624183504" -->
<!-- sent="Fri, 24 Jun 2011 12:34:44 -0600" -->
<!-- isosent="20110624183444" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows" -->
<!-- id="4E04D8C4.6070401_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OFC2869683.4403889F-ON852578B9.00620401-852578B9.006462BD_at_notes.aero.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows<br>
<strong>From:</strong> Damien (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-24 14:34:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16760.php">Jeffrey A Cummings: "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
<li><strong>Previous message:</strong> <a href="16758.php">Alan Nichols: "Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008"</a>
<li><strong>In reply to:</strong> <a href="16757.php">Jeffrey A Cummings: "[OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16760.php">Jeffrey A Cummings: "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
<li><strong>Reply:</strong> <a href="16760.php">Jeffrey A Cummings: "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>InterlockedCompareExchange64 is a 64-bit-only instruction.  Are you 
<br>
running XP 32-bit (I think you are b/c I don't think there was a XP64 
<br>
SP3...).  You need the 32-bit OpenMPI version.  If you are running a 
<br>
64-bit OS, but building a 32-bit executable, that instruction isn't 
<br>
available in 32-bit and you still need to link with 32-bit OpenMPI.
<br>
<p>Damien
<br>
<p>On 24/06/2011 12:16 PM, Jeffrey A Cummings wrote:
<br>
<span class="quotelev1">&gt; I'm having a problem using the prebuilt Windows version 1.5.3 with my 
</span><br>
<span class="quotelev1">&gt; app built with MS VisualStudio 2010.  I get an error message (for each 
</span><br>
<span class="quotelev1">&gt; node) that says: &quot;The procedure entry point 
</span><br>
<span class="quotelev1">&gt; InterlockedCompareExchange64 could not be located in the dynamic link 
</span><br>
<span class="quotelev1">&gt; library KERNEL32.dll&quot;.  I'm running Windows XP, sp 3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Jeff Cummings
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16759/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16760.php">Jeffrey A Cummings: "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
<li><strong>Previous message:</strong> <a href="16758.php">Alan Nichols: "Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008"</a>
<li><strong>In reply to:</strong> <a href="16757.php">Jeffrey A Cummings: "[OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16760.php">Jeffrey A Cummings: "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
<li><strong>Reply:</strong> <a href="16760.php">Jeffrey A Cummings: "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
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
