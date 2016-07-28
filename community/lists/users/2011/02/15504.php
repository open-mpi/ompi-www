<?
$subject_val = "Re: [OMPI users] Windows release 1.5.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  3 09:01:55 2011" -->
<!-- isoreceived="20110203140155" -->
<!-- sent="Thu, 03 Feb 2011 15:01:53 +0100" -->
<!-- isosent="20110203140153" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows release 1.5.1" -->
<!-- id="4D4AB551.9040900_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="75F36E2A242F1441ABDB5FA05E31B22D045D66C3_at_GLKMS2100.GREENLNK.NET" -->
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
<strong>Subject:</strong> Re: [OMPI users] Windows release 1.5.1<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-03 09:01:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15505.php">Prentice Bisbal: "Re: [OMPI users] OpenMPI version syntax?"</a>
<li><strong>Previous message:</strong> <a href="15503.php">Shiqing Fan: "Re: [OMPI users] Windows release 1.5.1"</a>
<li><strong>Maybe in reply to:</strong> <a href="15501.php">Page, Andy (UK): "[OMPI users] Windows release 1.5.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Andy,
<br>
<p>I see the problem, your version is not up-to-date, as it is shown 
<br>
&quot;16/12/2010&quot; in your jpeg. You can go to Open MPI website, and download 
<br>
the latest one, which was out on 1st, Feb.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>On 2/3/2011 2:28 PM, Page, Andy (UK) wrote:
<br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt; Thanks for reply.
</span><br>
<span class="quotelev1">&gt; Maybe i was niot that clear in what i meant.
</span><br>
<span class="quotelev1">&gt; I was looking for a library mpi_f77.lib and mpif.h neither of which i 
</span><br>
<span class="quotelev1">&gt; could see in the install direction see attached jpeg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* Shiqing Fan [mailto:fan_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent:* 03 February 2011 13:20
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Cc:* Page, Andy (UK)
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Windows release 1.5.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     *** WARNING ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   This message has originated outside your organisation,
</span><br>
<span class="quotelev1">&gt;   either from an external partner or the Global Internet.
</span><br>
<span class="quotelev1">&gt;       Keep this in mind if you answer this message.
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure if I got it correct. The libraries provided in the 
</span><br>
<span class="quotelev1">&gt; installers are MPI libraries with Fortran bindings, but they are not 
</span><br>
<span class="quotelev1">&gt; the Fortran libraries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want to compile Open MPI, you need to install a Fortran 
</span><br>
<span class="quotelev1">&gt; compiler, for example, Intel Fortran Compiler. And in the CMake GUI, 
</span><br>
<span class="quotelev1">&gt; you'll be able to enable building MPI Fortran bindings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/3/2011 11:53 AM, Page, Andy (UK) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear Users,
</span><br>
<span class="quotelev2">&gt;&gt; I am looking to compile on windows against openmpi in particular the 
</span><br>
<span class="quotelev2">&gt;&gt; Fortran libraries,
</span><br>
<span class="quotelev2">&gt;&gt; I looked at the *MS Release notes for 1.5.1* and it gave the 
</span><br>
<span class="quotelev2">&gt;&gt; *impression Fortran libraries were included but* after installing *i 
</span><br>
<span class="quotelev2">&gt;&gt; dont see them !!*
</span><br>
<span class="quotelev2">&gt;&gt; Can you advise what i am doing wrong.
</span><br>
<span class="quotelev2">&gt;&gt; Can i download just the Fortran side of openmpi and compile it up ( 
</span><br>
<span class="quotelev2">&gt;&gt; using hopefully a vsiual studio project file) ?
</span><br>
<span class="quotelev2">&gt;&gt; Or should a download the full release and try compiling it up ?
</span><br>
<span class="quotelev2">&gt;&gt; Cheers.
</span><br>
<span class="quotelev2">&gt;&gt; BAE Systems (Operations) Limited
</span><br>
<span class="quotelev2">&gt;&gt; Registered Office: Warwick House, PO Box 87, Farnborough Aerospace 
</span><br>
<span class="quotelev2">&gt;&gt; Centre, Farnborough, Hants, GU14 6YU, UK
</span><br>
<span class="quotelev2">&gt;&gt; Registered in England &amp; Wales No: 1996687
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ********************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; This email and any attachments are confidential to the intended
</span><br>
<span class="quotelev2">&gt;&gt; recipient and may also be privileged. If you are not the intended
</span><br>
<span class="quotelev2">&gt;&gt; recipient please delete it from your system and notify the sender.
</span><br>
<span class="quotelev2">&gt;&gt; You should not copy it or use it for any purpose nor disclose or
</span><br>
<span class="quotelev2">&gt;&gt; distribute its contents to any other person.
</span><br>
<span class="quotelev2">&gt;&gt; ********************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15504/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15505.php">Prentice Bisbal: "Re: [OMPI users] OpenMPI version syntax?"</a>
<li><strong>Previous message:</strong> <a href="15503.php">Shiqing Fan: "Re: [OMPI users] Windows release 1.5.1"</a>
<li><strong>Maybe in reply to:</strong> <a href="15501.php">Page, Andy (UK): "[OMPI users] Windows release 1.5.1"</a>
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
