<?
$subject_val = "Re: [OMPI users] Pb in configure script when using ifort with	&quot;-fast&quot; + link of opal_wrapper";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 10:14:00 2009" -->
<!-- isoreceived="20090603141400" -->
<!-- sent="Wed, 03 Jun 2009 16:14:17 +0200" -->
<!-- isosent="20090603141417" -->
<!-- name="DEVEL Michel" -->
<!-- email="Michel.Devel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pb in configure script when using ifort with	&amp;quot;-fast&amp;quot; + link of opal_wrapper" -->
<!-- id="4A268539.60304_at_ens2m.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71d2d8cc0906030642m3f6c88fewfd126f9862118a3f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Pb in configure script when using ifort with	&quot;-fast&quot; + link of opal_wrapper<br>
<strong>From:</strong> DEVEL Michel (<em>Michel.Devel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-03 10:14:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9513.php">tsilva_at_[hidden]: "Re: [OMPI users] top question"</a>
<li><strong>Previous message:</strong> <a href="9511.php">Ralph Castain: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
<li><strong>In reply to:</strong> <a href="9511.php">Ralph Castain: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9520.php">Rainer Keller: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; I assume you re-did the ./configure command?
</span><br>
Thanks for your answer.
<br>
Yes.
<br>
<span class="quotelev1">&gt; Did you also remember to &quot;make clean&quot; before doing your &quot;make all
</span><br>
<span class="quotelev1">&gt; install&quot;?
</span><br>
No, but now that I have done it, the result is the same: &quot;ld: attempted
<br>
static link of dynamic object `../../../opal/.libs/libopen-pal.so'
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, I note that your prefix looks really strange - it looks like you
</span><br>
<span class="quotelev1">&gt; are trying to install OMPI where the Intel compiler is located? Are
</span><br>
<span class="quotelev1">&gt; you sure you want to do that?
</span><br>
Well yes, but maybe it is a silly thing. I wanted to do that because of
<br>
lazyness to avoid having to make a script to add the directories to
<br>
$PATH $LD_LIBRARY_PATH and so on. Furthermore, I would like to keep a
<br>
version compiled with gcc and gfortran in /usr/local.
<br>
<pre>
-- 
Sincerely yours,
Michel DEVEL
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9512/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9513.php">tsilva_at_[hidden]: "Re: [OMPI users] top question"</a>
<li><strong>Previous message:</strong> <a href="9511.php">Ralph Castain: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
<li><strong>In reply to:</strong> <a href="9511.php">Ralph Castain: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9520.php">Rainer Keller: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
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
