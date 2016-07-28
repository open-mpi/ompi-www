<?
$subject_val = "Re: [OMPI users] Problem with sending vectors";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  6 15:45:23 2008" -->
<!-- isoreceived="20080406194523" -->
<!-- sent="Sun, 6 Apr 2008 21:45:17 +0200" -->
<!-- isosent="20080406194517" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with sending vectors" -->
<!-- id="20080406194517.GA10771_at_wintermute" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="212149977.8209861207505679772.JavaMail.root_at_zcs.TCNJ.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with sending vectors<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-06 15:45:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5332.php">Teng Lin: "[OMPI users] 32-bit openib btl fails on 64-bit OS"</a>
<li><strong>Previous message:</strong> <a href="5330.php">Jeff Squyres: "Re: [OMPI users] mpirun script and the SYNCLOC option"</a>
<li><strong>In reply to:</strong> <a href="5325.php">Albert Babinskas: "[OMPI users] Problem with sending vectors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5333.php">Albert Babinskas: "[OMPI users] Fwd: Problem with sending vectors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Albert,
<br>
<p><p>On 14:14 Sun 06 Apr     , Albert Babinskas wrote:
<br>
<span class="quotelev1">&gt; I want to send vectors of myclass between nodes. But myclass has 
</span><br>
<span class="quotelev1">&gt; arrays inside of it. 
</span><br>
<p>Without knowing your code I can only guess the problem, but I have two
<br>
hypotheses: a) If those arrays are dynamically allocated via &quot;new&quot;,
<br>
then you cannot send multiple objects using the same MPI datatype as
<br>
the offset of the array content to the containing object will vary
<br>
between multiple instances. b) A frequent error when using vectors is
<br>
the assumption that the address of the first element can be obtained
<br>
by &quot;&amp;vector&quot; (works almost never) or &quot;&amp;vector.begin()&quot; (works for some
<br>
implementations). The correct method would be &quot;&amp;vector[0]&quot; or
<br>
&quot;&amp;vector.front()&quot;.
<br>
<p>You could get more detailed feedback if you would attach a minimal
<br>
excerpt of your code that reproduces the error (and still constitutes
<br>
a valid/complete MPI program).
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
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5331/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5332.php">Teng Lin: "[OMPI users] 32-bit openib btl fails on 64-bit OS"</a>
<li><strong>Previous message:</strong> <a href="5330.php">Jeff Squyres: "Re: [OMPI users] mpirun script and the SYNCLOC option"</a>
<li><strong>In reply to:</strong> <a href="5325.php">Albert Babinskas: "[OMPI users] Problem with sending vectors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5333.php">Albert Babinskas: "[OMPI users] Fwd: Problem with sending vectors"</a>
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
