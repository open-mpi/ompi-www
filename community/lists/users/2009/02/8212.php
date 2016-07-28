<?
$subject_val = "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 07:58:20 2009" -->
<!-- isoreceived="20090226125820" -->
<!-- sent="Thu, 26 Feb 2009 07:58:13 -0500" -->
<!-- isosent="20090226125813" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer" -->
<!-- id="139EC00B-8C1B-459B-B628-5FA79BE99F90_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1235652870.11392.51.camel_at_hp-laptop" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-26 07:58:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8213.php">Nader: "[OMPI users] OMPI, and HPUX"</a>
<li><strong>Previous message:</strong> <a href="8211.php">Kiril Dichev: "Re: [OMPI users] Problems in 1.3 loading shared libs when using	VampirServer"</a>
<li><strong>In reply to:</strong> <a href="8211.php">Kiril Dichev: "Re: [OMPI users] Problems in 1.3 loading shared libs when using	VampirServer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8178.php">michael.meinel_at_[hidden]: "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Schweet!  Sorry it took so long to figure out...
<br>
<p>On Feb 26, 2009, at 7:54 AM, Kiril Dichev wrote:
<br>
<p><span class="quotelev1">&gt; I am happy to confirm that Jeff's suggestion worked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem was following: in previous versions VampirServer issued
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ComLib = dlopen( driverName, RTLD_LAZY );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Changing this to following fixed the problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ComLib = dlopen( driverName, RTLD_LAZY | RTLD_GLOBAL );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The VampirServer guys compiled the modified version of VampirServer  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; now, the shared library Open MPI 1.3 launches VampirServer without
</span><br>
<span class="quotelev1">&gt; issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that the previous dlopen call did not have a global scope and
</span><br>
<span class="quotelev1">&gt; so the VampirServer plugin did not find the Open MPI 1.3 shared  
</span><br>
<span class="quotelev1">&gt; objects.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the help!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kiril
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, 2009-02-24 at 11:02 -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 23, 2009, at 8:59 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Err... I'm a little confused.  We've been emailing about this exact
</span><br>
<span class="quotelev3">&gt;&gt;&gt; issue for a week or two (off list); you just re-started the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conversation from the beginning, moved it to the user's list, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dropped all the CC's (which include several people who are not on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this list).  Why did you do that?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; GAAH!!  Mea maxima culpa.  :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My stupid mail program did something strange (exact details
</span><br>
<span class="quotelev2">&gt;&gt; unimportant) that made me think you re-sent your message to the users
</span><br>
<span class="quotelev2">&gt;&gt; list yesterday -- thereby re-starting the whole conversation, etc.
</span><br>
<span class="quotelev2">&gt;&gt; Upon double checking, I see that this is *not* what you did at all --
</span><br>
<span class="quotelev2">&gt;&gt; my mail program was showing me your original post from Feb 4 and
</span><br>
<span class="quotelev2">&gt;&gt; making it look like you re-sent it yesterday.  I just wasn't careful
</span><br>
<span class="quotelev2">&gt;&gt; in my reading.  Sorry about that; the fault and confusion was  
</span><br>
<span class="quotelev2">&gt;&gt; entirely
</span><br>
<span class="quotelev2">&gt;&gt; mine.  :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (we're continuing the conversation off-list just because it's gnarly
</span><br>
<span class="quotelev2">&gt;&gt; and full of details about Vampir that most people probably don't care
</span><br>
<span class="quotelev2">&gt;&gt; about; they're working on a small example to send to me that
</span><br>
<span class="quotelev2">&gt;&gt; replicates the problem -- will post back here when we have some kind
</span><br>
<span class="quotelev2">&gt;&gt; of solution...)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We now return you to your regularly scheduled programming...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inf. Kiril Dichev
</span><br>
<span class="quotelev1">&gt; Tel.: +49 711 685 60492
</span><br>
<span class="quotelev1">&gt; E-mail: dichev_at_[hidden]
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Universit&#228;t Stuttgart
</span><br>
<span class="quotelev1">&gt; 70550 Stuttgart
</span><br>
<span class="quotelev1">&gt; Germany
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8213.php">Nader: "[OMPI users] OMPI, and HPUX"</a>
<li><strong>Previous message:</strong> <a href="8211.php">Kiril Dichev: "Re: [OMPI users] Problems in 1.3 loading shared libs when using	VampirServer"</a>
<li><strong>In reply to:</strong> <a href="8211.php">Kiril Dichev: "Re: [OMPI users] Problems in 1.3 loading shared libs when using	VampirServer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8178.php">michael.meinel_at_[hidden]: "Re: [OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
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
