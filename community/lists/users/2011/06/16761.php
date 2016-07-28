<?
$subject_val = "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 24 15:59:17 2011" -->
<!-- isoreceived="20110624195917" -->
<!-- sent="Fri, 24 Jun 2011 13:58:56 -0600" -->
<!-- isosent="20110624195856" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows" -->
<!-- id="4E04EC80.7060101_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OFE9669A95.BE0F6AB7-ON852578B9.006CC55B-852578B9.006D1353_at_notes.aero.org" -->
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
<strong>Date:</strong> 2011-06-24 15:58:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16762.php">Jeff Squyres: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<li><strong>Previous message:</strong> <a href="16760.php">Jeffrey A Cummings: "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
<li><strong>In reply to:</strong> <a href="16760.php">Jeffrey A Cummings: "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16790.php">Jeffrey A Cummings: "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
<li><strong>Reply:</strong> <a href="16790.php">Jeffrey A Cummings: "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, and I'm wrong too, InterlockedCompareExchange64 is available on 
<br>
32-bit.  I think this is one for Shiqing.
<br>
<p>You could build OpenMPI yourself if you have VS2008.  It's pretty easy 
<br>
to do.
<br>
<p>Damien
<br>
<p>On 24/06/2011 1:51 PM, Jeffrey A Cummings wrote:
<br>
<span class="quotelev1">&gt; Damien -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using the 32 bit version of OpenMPI.  I think the 64 refers to the 
</span><br>
<span class="quotelev1">&gt; size of integer that the function works on, not the operating system 
</span><br>
<span class="quotelev1">&gt; version.  I didn't have this problem with VS 2008, so I think they've 
</span><br>
<span class="quotelev1">&gt; changed something in VS 2010.  I just don't know how to fix it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Damien &lt;damien_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: 06/24/2011 02:35 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows
</span><br>
<span class="quotelev1">&gt; Sent by: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; InterlockedCompareExchange64 is a 64-bit-only instruction.  Are you 
</span><br>
<span class="quotelev1">&gt; running XP 32-bit (I think you are b/c I don't think there was a XP64 
</span><br>
<span class="quotelev1">&gt; SP3...).  You need the 32-bit OpenMPI version.  If you are running a 
</span><br>
<span class="quotelev1">&gt; 64-bit OS, but building a 32-bit executable, that instruction isn't 
</span><br>
<span class="quotelev1">&gt; available in 32-bit and you still need to link with 32-bit OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 24/06/2011 12:16 PM, Jeffrey A Cummings wrote:
</span><br>
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
<span class="quotelev1">&gt; _users_at_[hidden]_ &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; _<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>________________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16761/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16762.php">Jeff Squyres: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<li><strong>Previous message:</strong> <a href="16760.php">Jeffrey A Cummings: "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
<li><strong>In reply to:</strong> <a href="16760.php">Jeffrey A Cummings: "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16790.php">Jeffrey A Cummings: "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
<li><strong>Reply:</strong> <a href="16790.php">Jeffrey A Cummings: "Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows"</a>
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
