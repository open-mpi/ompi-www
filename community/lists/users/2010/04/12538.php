<?
$subject_val = "Re: [OMPI users] Hide Abort output";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  5 16:28:03 2010" -->
<!-- isoreceived="20100405202803" -->
<!-- sent="Mon, 05 Apr 2010 16:27:55 -0400" -->
<!-- isosent="20100405202755" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hide Abort output" -->
<!-- id="4BBA47CB.9050502_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BBA462E.1000006_at_ias.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hide Abort output<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-05 16:27:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12539.php">David Turner: "[OMPI users] IPoIB"</a>
<li><strong>Previous message:</strong> <a href="12537.php">Steve Swanekamp \(L3-Titan Contractor\): "[OMPI users] Trouble building openmpi 1.2.8 with intel compilers 10.0.23"</a>
<li><strong>In reply to:</strong> <a href="12536.php">Prentice Bisbal: "Re: [OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12544.php">Yves Caniou: "Re: [OMPI users] Hide Abort output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I sent that last message to quick. I was ignoring that MPI_Abort already
<br>
takes two args. I've been doing a lot of Perl the past few weeks, so I'm
<br>
&nbsp;in a perl state of mind.
<br>
<p>I would say add a third arg to MPI_Abort for a programmer-defined error
<br>
string, but that would violate the standard, wouldn't it? Nevermind...
<br>
<p>Prentice
<br>
<p>Prentice Bisbal wrote:
<br>
<span class="quotelev1">&gt; I would suggest that MPI_Abort take a string as an argument, and print
</span><br>
<span class="quotelev1">&gt; out the that string when MPI_Abort is called. If a programmer wanted to
</span><br>
<span class="quotelev1">&gt; NOT have an abort message, they could just omit the argument:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Abort(&quot;Could not open file foo&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Abort();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This would be similar to Perl's die command, where you can provide a
</span><br>
<span class="quotelev1">&gt; string to printout when die is called.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Prentice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David Singleton wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Yes, Dick has isolated the issue - novice users often believe Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; (not their application) had a problem.  Anything along the lines he
</span><br>
<span class="quotelev2">&gt;&gt; suggests
</span><br>
<span class="quotelev2">&gt;&gt; can only help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; David
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 04/01/2010 01:12 AM, Richard Treumann wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I do not know what the OpenMPI message looks like or why people want to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hide it. It should be phrased to avoid any implication of a problem with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI itself.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How about something like this which:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;The application has called MPI_Abort. The application is terminated by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI as the application demanded&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dick Treumann  -  MPI Team
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IBM Systems&amp;  Technology Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tele (845) 433-7846         Fax (845) 433-8363
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    From:       &quot;Jeff Squyres (jsquyres)&quot;&lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    To:&lt;David.Singleton_at_[hidden]&gt;,&lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Date:       03/31/2010 06:43 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Subject:    Re: [OMPI users] Hide Abort output
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Sent by:    users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At present there is no such feature, but it should not be hard to add.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you guys be a little more specific about exactly what you are seeing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and exactly what you want to see?  (And what version you're working
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll caveat my discussion that this may be a 1.5-and-forward thing)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -jms
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent from my PDA.  No type good.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden]&lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users&lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Wed Mar 31 05:38:48 2010
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Hide Abort output
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have to say this is a very common issue for our users.  They repeatedly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; report the long Open MPI MPI_Abort() message in help queries and fail to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; look for the application error message about the root cause.  A short
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Abort() message that said &quot;look elsewhere for the real error message&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would be useful.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; David
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 03/31/2010 07:58 PM, Yves Caniou wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am using the MPI_Abort() command in a MPI program.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I would like to not see the note explaining that the command caused Open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to kill all the jobs and so on.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I thought that I could find a --mca parameter, but couldn't grep it. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ones deal with the delay and printing more information (the stack).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there a mean to avoid the printing of the note (except the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2&gt;/dev/null
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tips)? Or to delay this printing?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .Yves.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Prentice Bisbal
Linux Software Support Specialist/System Administrator
School of Natural Sciences
Institute for Advanced Study
Princeton, NJ
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12539.php">David Turner: "[OMPI users] IPoIB"</a>
<li><strong>Previous message:</strong> <a href="12537.php">Steve Swanekamp \(L3-Titan Contractor\): "[OMPI users] Trouble building openmpi 1.2.8 with intel compilers 10.0.23"</a>
<li><strong>In reply to:</strong> <a href="12536.php">Prentice Bisbal: "Re: [OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12544.php">Yves Caniou: "Re: [OMPI users] Hide Abort output"</a>
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
