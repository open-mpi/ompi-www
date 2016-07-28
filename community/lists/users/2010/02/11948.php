<?
$subject_val = "Re: [OMPI users] Checkpoint/Restart error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  1 10:04:32 2010" -->
<!-- isoreceived="20100201150432" -->
<!-- sent="Mon, 1 Feb 2010 10:04:28 -0500" -->
<!-- isosent="20100201150428" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint/Restart error" -->
<!-- id="8B031806-B392-4E6D-9F2A-ADCD601288BE_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="50ca5db71001291341q75d811adye584fb220ea6a255_at_mail.gmail.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-01 10:04:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11949.php">Lee Manko: "[OMPI users] Cluster Configuration Issue???"</a>
<li><strong>Previous message:</strong> <a href="11947.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<li><strong>In reply to:</strong> <a href="../../2010/01/11939.php">Jazcek Braden: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the bug report. There are a couple of places in the code  
<br>
that, in a sense, hard code '/tmp' as the temporary directory. It  
<br>
shouldn't be to hard to fix since there is a common function used in  
<br>
the code to discovery the 'true' temporary directory (which defaults  
<br>
to /tmp). Of course there might be other complexities once I dig into  
<br>
the problem.
<br>
<p>I don't know when I will get to this, but I filed a ticket about this  
<br>
if you want to track it:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2208">https://svn.open-mpi.org/trac/ompi/ticket/2208</a>
<br>
<p>Thanks again,
<br>
Josh
<br>
<p>On Jan 29, 2010, at 4:41 PM, Jazcek Braden wrote:
<br>
<p><span class="quotelev1">&gt; Josh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was following this thread as I had similar symptoms and discovered a
</span><br>
<span class="quotelev1">&gt; peculiar error.  when I launch the program, openmpi follows the
</span><br>
<span class="quotelev1">&gt; $TMPDIR environment variable and puts the session information in the
</span><br>
<span class="quotelev1">&gt; $TMPDIR directory.  However ompi-checkpoint seems to be requiring the
</span><br>
<span class="quotelev1">&gt; sessions file to be in /tmp ignoring the $TMPDIR.  Is this by design
</span><br>
<span class="quotelev1">&gt; and what would I have to do to get it to obey the $TMPDIR environment
</span><br>
<span class="quotelev1">&gt; variable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jazcek Braden
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11949.php">Lee Manko: "[OMPI users] Cluster Configuration Issue???"</a>
<li><strong>Previous message:</strong> <a href="11947.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<li><strong>In reply to:</strong> <a href="../../2010/01/11939.php">Jazcek Braden: "Re: [OMPI users] Checkpoint/Restart error"</a>
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
