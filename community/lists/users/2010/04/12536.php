<?
$subject_val = "Re: [OMPI users] Hide Abort output";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  5 16:21:12 2010" -->
<!-- isoreceived="20100405202112" -->
<!-- sent="Mon, 05 Apr 2010 16:21:02 -0400" -->
<!-- isosent="20100405202102" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hide Abort output" -->
<!-- id="4BBA462E.1000006_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BB3CDD6.9020401_at_anu.edu.au" -->
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
<strong>Date:</strong> 2010-04-05 16:21:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12537.php">Steve Swanekamp \(L3-Titan Contractor\): "[OMPI users] Trouble building openmpi 1.2.8 with intel compilers 10.0.23"</a>
<li><strong>Previous message:</strong> <a href="12535.php">Ricardo Reis: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12505.php">David Singleton: "Re: [OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12538.php">Prentice Bisbal: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Reply:</strong> <a href="12538.php">Prentice Bisbal: "Re: [OMPI users] Hide Abort output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would suggest that MPI_Abort take a string as an argument, and print
<br>
out the that string when MPI_Abort is called. If a programmer wanted to
<br>
NOT have an abort message, they could just omit the argument:
<br>
<p>MPI_Abort(&quot;Could not open file foo&quot;);
<br>
<p>or
<br>
<p>MPI_Abort();
<br>
<p>This would be similar to Perl's die command, where you can provide a
<br>
string to printout when die is called.
<br>
<p><p><pre>
--
Prentice
David Singleton wrote:
&gt; 
&gt; Yes, Dick has isolated the issue - novice users often believe Open MPI
&gt; (not their application) had a problem.  Anything along the lines he
&gt; suggests
&gt; can only help.
&gt; 
&gt; David
&gt; 
&gt; On 04/01/2010 01:12 AM, Richard Treumann wrote:
&gt;&gt;
&gt;&gt; I do not know what the OpenMPI message looks like or why people want to
&gt;&gt; hide it. It should be phrased to avoid any implication of a problem with
&gt;&gt; OpenMPI itself.
&gt;&gt;
&gt;&gt; How about something like this which:
&gt;&gt;
&gt;&gt; &quot;The application has called MPI_Abort. The application is terminated by
&gt;&gt; OpenMPI as the application demanded&quot;
&gt;&gt;
&gt;&gt;
&gt;&gt; Dick Treumann  -  MPI Team
&gt;&gt; IBM Systems&amp;  Technology Group
&gt;&gt; Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
&gt;&gt; Tele (845) 433-7846         Fax (845) 433-8363
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;    From:       &quot;Jeff Squyres (jsquyres)&quot;&lt;jsquyres_at_[hidden]&gt;
&gt;&gt;
&gt;&gt;    To:&lt;David.Singleton_at_[hidden]&gt;,&lt;users_at_[hidden]&gt;
&gt;&gt;
&gt;&gt;    Date:       03/31/2010 06:43 AM
&gt;&gt;
&gt;&gt;    Subject:    Re: [OMPI users] Hide Abort output
&gt;&gt;
&gt;&gt;    Sent by:    users-bounces_at_[hidden]
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; At present there is no such feature, but it should not be hard to add.
&gt;&gt;
&gt;&gt; Can you guys be a little more specific about exactly what you are seeing
&gt;&gt; and exactly what you want to see?  (And what version you're working
&gt;&gt; with -
&gt;&gt; I'll caveat my discussion that this may be a 1.5-and-forward thing)
&gt;&gt;
&gt;&gt; -jms
&gt;&gt; Sent from my PDA.  No type good.
&gt;&gt;
&gt;&gt; ----- Original Message -----
&gt;&gt; From: users-bounces_at_[hidden]&lt;users-bounces_at_[hidden]&gt;
&gt;&gt; To: Open MPI Users&lt;users_at_[hidden]&gt;
&gt;&gt; Sent: Wed Mar 31 05:38:48 2010
&gt;&gt; Subject: Re: [OMPI users] Hide Abort output
&gt;&gt;
&gt;&gt;
&gt;&gt; I have to say this is a very common issue for our users.  They repeatedly
&gt;&gt; report the long Open MPI MPI_Abort() message in help queries and fail to
&gt;&gt; look for the application error message about the root cause.  A short
&gt;&gt; MPI_Abort() message that said &quot;look elsewhere for the real error message&quot;
&gt;&gt; would be useful.
&gt;&gt;
&gt;&gt; Cheers,
&gt;&gt; David
&gt;&gt;
&gt;&gt; On 03/31/2010 07:58 PM, Yves Caniou wrote:
&gt;&gt;&gt; Dear all,
&gt;&gt;&gt;
&gt;&gt;&gt; I am using the MPI_Abort() command in a MPI program.
&gt;&gt;&gt; I would like to not see the note explaining that the command caused Open
&gt;&gt; MPI
&gt;&gt;&gt; to kill all the jobs and so on.
&gt;&gt;&gt; I thought that I could find a --mca parameter, but couldn't grep it. The
&gt;&gt; only
&gt;&gt;&gt; ones deal with the delay and printing more information (the stack).
&gt;&gt;&gt;
&gt;&gt;&gt; Is there a mean to avoid the printing of the note (except the
&gt;&gt;&gt; 2&gt;/dev/null
&gt;&gt;&gt; tips)? Or to delay this printing?
&gt;&gt;&gt;
&gt;&gt;&gt; Thank you.
&gt;&gt;&gt;
&gt;&gt;&gt; .Yves.
&gt;&gt;&gt;
&gt;&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12537.php">Steve Swanekamp \(L3-Titan Contractor\): "[OMPI users] Trouble building openmpi 1.2.8 with intel compilers 10.0.23"</a>
<li><strong>Previous message:</strong> <a href="12535.php">Ricardo Reis: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12505.php">David Singleton: "Re: [OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12538.php">Prentice Bisbal: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Reply:</strong> <a href="12538.php">Prentice Bisbal: "Re: [OMPI users] Hide Abort output"</a>
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
