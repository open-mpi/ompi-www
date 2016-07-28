<?
$subject_val = "[OMPI users] [gentryx@gmx.de: Re:  2 questions about Open MPI]";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 11:15:13 2008" -->
<!-- isoreceived="20080325151513" -->
<!-- sent="Tue, 25 Mar 2008 16:15:00 +0100" -->
<!-- isosent="20080325151500" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="[OMPI users] [gentryx@gmx.de: Re:  2 questions about Open MPI]" -->
<!-- id="20080325151500.GA18214_at_neuromancer" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] [gentryx@gmx.de: Re:  2 questions about Open MPI]<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-25 11:15:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5267.php">jody: "Re: [OMPI users] communicating with the caller"</a>
<li><strong>Previous message:</strong> <a href="5265.php">George Bosilca: "Re: [OMPI users] communicating with the caller"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5269.php">powernetfreak_at_[hidden]: "Re: [OMPI users] [gentryx@gmx.de: Re:  2 questions about Open MPI]"</a>
<li><strong>Maybe reply:</strong> <a href="5269.php">powernetfreak_at_[hidden]: "Re: [OMPI users] [gentryx@gmx.de: Re:  2 questions about Open MPI]"</a>
<li><strong>Maybe reply:</strong> <a href="5275.php">powernetfreak_at_[hidden]: "Re: [OMPI users] [gentryx@gmx.de: Re:  2 questions about Open MPI]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hall&#246;le,
<br>
<p>On 13:34 Tue 25 Mar     , powernetfreak_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; So Open MPI is OS dependent and actually it dont support Windows 
</span><br>
<span class="quotelev1">&gt; plattforms.
</span><br>
<p>Equating &quot;not running on Windows&quot; to &quot;OS dependent&quot; is a bit harsh, as
<br>
Open MPI will run on any Unixish OS (Linux, Solaris, BSD...). You
<br>
could have some luck with compiling Open MPI with Cygwin, then you'd
<br>
have it for Windows. But I'm not sure about the Cygwin stuff.
<br>
<p><span class="quotelev1">&gt; I would want to know if (Open) MPI sipports data decomposition and\ or 
</span><br>
<span class="quotelev1">&gt; task level parallelism.
</span><br>
<p>It supports data decomposition and you can build pretty much any form
<br>
of parallelism you like.
<br>
<p><span class="quotelev1">&gt; But i also think that OpenMPI dont support data decomposition (like 
</span><br>
<span class="quotelev1">&gt; here described: <a href="http://www.netlib.org/pvm3/book/node32.html">http://www.netlib.org/pvm3/book/node32.html</a> ) &quot;out-of-
</span><br>
<span class="quotelev1">&gt; the-box&quot;.
</span><br>
<p>MPI does support data decomposition. The thing you need to understand
<br>
is that MPI stands for Message Passing Interface, i.e. it is used to
<br>
pass messages (possibly containing data). The functions defined in the
<br>
MPI standard provide a rich cornucopia of functions helping you to
<br>
distribute your data among nodes in whichever creative and colorful
<br>
way you like.
<br>
<p>Cheers!
<br>
-Andreas
<br>
<p><p><pre>
-- 
============================================
Andreas Sch&#228;fer
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
PGP/GPG key via keyserver
I'm a bright... <a href="http://www.the-brights.net">http://www.the-brights.net</a>
============================================
(\___/)
(+'.'+)
(&quot;)_(&quot;)
This is Bunny. Copy and paste Bunny into your 
signature to help him gain world domination!

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5266/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5267.php">jody: "Re: [OMPI users] communicating with the caller"</a>
<li><strong>Previous message:</strong> <a href="5265.php">George Bosilca: "Re: [OMPI users] communicating with the caller"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5269.php">powernetfreak_at_[hidden]: "Re: [OMPI users] [gentryx@gmx.de: Re:  2 questions about Open MPI]"</a>
<li><strong>Maybe reply:</strong> <a href="5269.php">powernetfreak_at_[hidden]: "Re: [OMPI users] [gentryx@gmx.de: Re:  2 questions about Open MPI]"</a>
<li><strong>Maybe reply:</strong> <a href="5275.php">powernetfreak_at_[hidden]: "Re: [OMPI users] [gentryx@gmx.de: Re:  2 questions about Open MPI]"</a>
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
