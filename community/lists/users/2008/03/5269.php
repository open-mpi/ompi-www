<?
$subject_val = "Re: [OMPI users] [gentryx@gmx.de: Re:  2 questions about Open MPI]";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 14:38:17 2008" -->
<!-- isoreceived="20080325183817" -->
<!-- sent="Tue, 25 Mar 2008 19:38:06 +0100 (CET)" -->
<!-- isosent="20080325183806" -->
<!-- name="powernetfreak_at_[hidden]" -->
<!-- email="powernetfreak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [gentryx@gmx.de: Re:  2 questions about Open MPI]" -->
<!-- id="10473814.1206470286946.JavaMail.root_at_ps16" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] [gentryx_at_gmx.de: Re:  2 questions about Open MPI]" -->
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
<strong>Subject:</strong> Re: [OMPI users] [gentryx@gmx.de: Re:  2 questions about Open MPI]<br>
<strong>From:</strong> <a href="mailto:powernetfreak_at_[hidden]?Subject=Re:%20[OMPI%20users]%20[gentryx&amp;#64;gmx.de:%20Re:%20%202%20questions%20about%20Open%20MPI]"><em>powernetfreak_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-03-25 14:38:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5270.php">Andreas Schäfer: "Re: [OMPI users] [gentryx@gmx.de: Re:  2 questions about Open MPI]"</a>
<li><strong>Previous message:</strong> <a href="5268.php">George Bosilca: "Re: [OMPI users] communicating with the caller"</a>
<li><strong>Maybe in reply to:</strong> <a href="5266.php">Andreas Sch&#228;fer: "[OMPI users] [gentryx@gmx.de: Re:  2 questions about Open MPI]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5270.php">Andreas Schäfer: "Re: [OMPI users] [gentryx@gmx.de: Re:  2 questions about Open MPI]"</a>
<li><strong>Reply:</strong> <a href="5270.php">Andreas Schäfer: "Re: [OMPI users] [gentryx@gmx.de: Re:  2 questions about Open MPI]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
And i am also right when i think that Open MPI supports task level 
<br>
parallism.
<br>
because i think that i can create a process for each task (or create a 
<br>
task pool) and let them communicating over MPI.
<br>
am i right?
<br>
thanks.
<br>
<p>king regards,
<br>
<p>oeter
<br>
<p><span class="quotelev1">&gt;----Urspr&#195;&#188;ngliche Nachricht----
</span><br>
<span class="quotelev1">&gt;Von: gentryx_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Datum: 25.03.2008 16:15
</span><br>
<span class="quotelev1">&gt;An: &quot;Open MPI Users&quot;&lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Betreff: [OMPI users] [gentryx_at_[hidden]: Re:  2 questions about Open 
</span><br>
MPI]
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hall&#195;&#182;le,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 13:34 Tue 25 Mar     , powernetfreak_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; So Open MPI is OS dependent and actually it dont support Windows 
</span><br>
<span class="quotelev2">&gt;&gt; plattforms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Equating &quot;not running on Windows&quot; to &quot;OS dependent&quot; is a bit harsh, 
</span><br>
as
<br>
<span class="quotelev1">&gt;Open MPI will run on any Unixish OS (Linux, Solaris, BSD...). You
</span><br>
<span class="quotelev1">&gt;could have some luck with compiling Open MPI with Cygwin, then you'd
</span><br>
<span class="quotelev1">&gt;have it for Windows. But I'm not sure about the Cygwin stuff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would want to know if (Open) MPI sipports data decomposition and\ 
</span><br>
or 
<br>
<span class="quotelev2">&gt;&gt; task level parallelism.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;It supports data decomposition and you can build pretty much any form
</span><br>
<span class="quotelev1">&gt;of parallelism you like.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But i also think that OpenMPI dont support data decomposition 
</span><br>
(like 
<br>
<span class="quotelev2">&gt;&gt; here described: <a href="http://www.netlib.org/pvm3/book/node32.html">http://www.netlib.org/pvm3/book/node32.html</a> ) &quot;out-
</span><br>
of-
<br>
<span class="quotelev2">&gt;&gt; the-box&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;MPI does support data decomposition. The thing you need to understand
</span><br>
<span class="quotelev1">&gt;is that MPI stands for Message Passing Interface, i.e. it is used to
</span><br>
<span class="quotelev1">&gt;pass messages (possibly containing data). The functions defined in 
</span><br>
the
<br>
<span class="quotelev1">&gt;MPI standard provide a rich cornucopia of functions helping you to
</span><br>
<span class="quotelev1">&gt;distribute your data among nodes in whichever creative and colorful
</span><br>
<span class="quotelev1">&gt;way you like.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Cheers!
</span><br>
<span class="quotelev1">&gt;-Andreas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;============================================
</span><br>
<span class="quotelev1">&gt;Andreas Sch&#195;&#164;fer
</span><br>
<span class="quotelev1">&gt;Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev1">&gt;Friedrich-Schiller-Universit&#195;&#164;t Jena, Germany
</span><br>
<span class="quotelev1">&gt;PGP/GPG key via keyserver
</span><br>
<span class="quotelev1">&gt;I'm a bright... <a href="http://www.the-brights.net">http://www.the-brights.net</a>
</span><br>
<span class="quotelev1">&gt;============================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;(\___/)
</span><br>
<span class="quotelev1">&gt;(+'.'+)
</span><br>
<span class="quotelev1">&gt;(&quot;)_(&quot;)
</span><br>
<span class="quotelev1">&gt;This is Bunny. Copy and paste Bunny into your 
</span><br>
<span class="quotelev1">&gt;signature to help him gain world domination!
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p>Jetzt neu: Der Routenplaner von Tiscali
<br>
<a href="http://www.tiscali.de/trav/routenplaner.html">http://www.tiscali.de/trav/routenplaner.html</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5270.php">Andreas Schäfer: "Re: [OMPI users] [gentryx@gmx.de: Re:  2 questions about Open MPI]"</a>
<li><strong>Previous message:</strong> <a href="5268.php">George Bosilca: "Re: [OMPI users] communicating with the caller"</a>
<li><strong>Maybe in reply to:</strong> <a href="5266.php">Andreas Sch&#228;fer: "[OMPI users] [gentryx@gmx.de: Re:  2 questions about Open MPI]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5270.php">Andreas Schäfer: "Re: [OMPI users] [gentryx@gmx.de: Re:  2 questions about Open MPI]"</a>
<li><strong>Reply:</strong> <a href="5270.php">Andreas Schäfer: "Re: [OMPI users] [gentryx@gmx.de: Re:  2 questions about Open MPI]"</a>
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
