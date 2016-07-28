<?
$subject_val = "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 13:06:55 2009" -->
<!-- isoreceived="20090603170655" -->
<!-- sent="Wed, 03 Jun 2009 19:07:13 +0200" -->
<!-- isosent="20090603170713" -->
<!-- name="DEVEL Michel" -->
<!-- email="Michel.Devel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pb in configure script when using ifort with &amp;quot;-fast&amp;quot; + link of opal_wrapper" -->
<!-- id="4A26ADC1.6050906_at_ens2m.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200906031134.46449.keller_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper<br>
<strong>From:</strong> DEVEL Michel (<em>Michel.Devel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-03 13:07:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9528.php">George Bosilca: "Re: [OMPI users] top question"</a>
<li><strong>Previous message:</strong> <a href="9526.php">Gus Correa: "Re: [OMPI users] Pb in configure script when using ifort with	&quot;-fast&quot; +	link of opal_wrapper"</a>
<li><strong>In reply to:</strong> <a href="9520.php">Rainer Keller: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9549.php">Jeff Squyres: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
<li><strong>Reply:</strong> <a href="9549.php">Jeff Squyres: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Reiner, Jeff, Gus and list,
<br>
<p>Thanks for your suggestions, I will test them tomorrow.
<br>
<p>I did not check your mails before because I was busy trying the
<br>
gcc/gfortran way.
<br>
I have other problems:
<br>
- for static linking I am missing plenty of ibv_* routines. I saw on the
<br>
net that they should be in a libibverbs library, but I cannot find it.
<br>
- dynamic linking is OK, but when I test a simple test program on my
<br>
machine (i7 920) with an mpd-hosts containing a single line with the
<br>
name of the machine and slots=4, the program only execute provided I
<br>
give my password, allthough I do have a .rhosts file with the name of my
<br>
machine in my home directory.
<br>
<pre>
-- 
Sincerely yours,
Michel DEVEL
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9527/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9528.php">George Bosilca: "Re: [OMPI users] top question"</a>
<li><strong>Previous message:</strong> <a href="9526.php">Gus Correa: "Re: [OMPI users] Pb in configure script when using ifort with	&quot;-fast&quot; +	link of opal_wrapper"</a>
<li><strong>In reply to:</strong> <a href="9520.php">Rainer Keller: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9549.php">Jeff Squyres: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
<li><strong>Reply:</strong> <a href="9549.php">Jeff Squyres: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
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
