<?
$subject_val = "Re: [OMPI users] [WARNING: SPOOFED E-MAIL--Non-Aerospace Sender] Re: Problem with prebuilt ver 1.5.3 for windows";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 08:36:59 2011" -->
<!-- isoreceived="20110708123659" -->
<!-- sent="Fri, 08 Jul 2011 14:36:54 +0200" -->
<!-- isosent="20110708123654" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [WARNING: SPOOFED E-MAIL--Non-Aerospace Sender] Re: Problem with prebuilt ver 1.5.3 for windows" -->
<!-- id="4E16F9E6.3020806_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF21812C9D.D1BCC498-ON852578C7.003EC718-852578C7.003F0DF3_at_notes.aero.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] [WARNING: SPOOFED E-MAIL--Non-Aerospace Sender] Re: Problem with prebuilt ver 1.5.3 for windows<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-08 08:36:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16855.php">yanyg_at_[hidden]: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="16853.php">Jeffrey A Cummings: "Re: [OMPI users] [WARNING: SPOOFED E-MAIL--Non-Aerospace Sender] Re: Problem with prebuilt ver 1.5.3 for windows"</a>
<li><strong>In reply to:</strong> <a href="16853.php">Jeffrey A Cummings: "Re: [OMPI users] [WARNING: SPOOFED E-MAIL--Non-Aerospace Sender] Re: Problem with prebuilt ver 1.5.3 for windows"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Sorry for answering late. These emails were hidden in another thread in 
<br>
my email client, so I didn't catch it until now.
<br>
<p>The prebuild version of Open MPI was based on Windows 2008, which has 
<br>
InterlockedCompareExchange64 natively.
<br>
<p>Windows XP doesn't have support of this function, so the prebuild Open 
<br>
MPI is not possible to be used under Windows XP. The only solution now 
<br>
is to build Open MPI on your XP from source.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>On 2011-07-08 1:28 PM, Jeffrey A Cummings wrote:
<br>
<span class="quotelev1">&gt; I've been following this list for several months now and have been 
</span><br>
<span class="quotelev1">&gt; quite impressed by the helpfulness of the list experts in response to 
</span><br>
<span class="quotelev1">&gt; most questions.  So how come the pregnant silence in response to my 
</span><br>
<span class="quotelev1">&gt; question?  I could really use some help here.
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
<span class="quotelev1">&gt; From: Jeffrey A Cummings &lt;Jeffrey.A.Cummings_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: 06/29/2011 04:18 PM
</span><br>
<span class="quotelev1">&gt; Subject: [WARNING: SPOOFED E-MAIL--Non-Aerospace Sender] Re: [OMPI 
</span><br>
<span class="quotelev1">&gt; users] Problem with prebuilt ver 1.5.3 for windows
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
<span class="quotelev1">&gt; Anyone (Shiqing perhaps) have any more thoughts on this problem?
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
<span class="quotelev1">&gt; Date: 06/24/2011 03:59 PM
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
<span class="quotelev1">&gt; Yeah, and I'm wrong too, InterlockedCompareExchange64 is available on 
</span><br>
<span class="quotelev1">&gt; 32-bit.  I think this is one for Shiqing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You could build OpenMPI yourself if you have VS2008.  It's pretty easy 
</span><br>
<span class="quotelev1">&gt; to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 24/06/2011 1:51 PM, Jeffrey A Cummings wrote:
</span><br>
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
<span class="quotelev1">&gt; From: Damien _&lt;damien_at_[hidden]&gt;_ &lt;mailto:damien_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users _&lt;users_at_[hidden]&gt;_ &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: 06/24/2011 02:35 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Problem with prebuilt ver 1.5.3 for windows
</span><br>
<span class="quotelev1">&gt; Sent by: _users-bounces_at_[hidden]_ &lt;mailto:users-bounces_at_[hidden]&gt;
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
<span class="quotelev1">&gt; users mailing list_
</span><br>
<span class="quotelev1">&gt; __users_at_[hidden]_ &lt;mailto:users_at_[hidden]&gt;_
</span><br>
<span class="quotelev1">&gt; __<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>________________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list_
</span><br>
<span class="quotelev1">&gt; __users_at_[hidden]_ &lt;mailto:users_at_[hidden]&gt;_
</span><br>
<span class="quotelev1">&gt; __<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list_
</span><br>
<span class="quotelev1">&gt; __users_at_[hidden]_ &lt;mailto:users_at_[hidden]&gt;_
</span><br>
<span class="quotelev1">&gt; __<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>________________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]_
</span><br>
<span class="quotelev1">&gt; __<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>________________________________________________
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
<p><p><pre>
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16854/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16855.php">yanyg_at_[hidden]: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="16853.php">Jeffrey A Cummings: "Re: [OMPI users] [WARNING: SPOOFED E-MAIL--Non-Aerospace Sender] Re: Problem with prebuilt ver 1.5.3 for windows"</a>
<li><strong>In reply to:</strong> <a href="16853.php">Jeffrey A Cummings: "Re: [OMPI users] [WARNING: SPOOFED E-MAIL--Non-Aerospace Sender] Re: Problem with prebuilt ver 1.5.3 for windows"</a>
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
