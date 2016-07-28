<?
$subject_val = "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 22 16:34:57 2011" -->
<!-- isoreceived="20110922203457" -->
<!-- sent="Fri, 23 Sep 2011 02:09:55 +0530" -->
<!-- isosent="20110922203955" -->
<!-- name="Uday Kumar Reddy B" -->
<!-- email="udayreddy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi -cc=&amp;lt;compiler name&amp;gt; option" -->
<!-- id="4E7B9D1B.7070004_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="737AFE8D-A4A5-49EA-A9C3-5C9972828D27_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option<br>
<strong>From:</strong> Uday Kumar Reddy B (<em>udayreddy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-22 16:39:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17398.php">Gus Correa: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Previous message:</strong> <a href="17396.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>In reply to:</strong> <a href="17396.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17399.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Reply:</strong> <a href="17399.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 09/23/2011 01:49 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 22, 2011, at 4:17 PM, Uday Kumar Reddy B wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, but I can't find anything about -cc in openmpi's mpicc man page. So, -cc should either not be supported or work as per mpich's mpicc if you are wrapping around it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicc has no way of knowing that an option is not supposed to work.  It only knows about a small number of options that it can understand (e.g., --showme).  Any other command line tokens are passed through to the underlying compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More specifically: how is mpicc supposed to know that any given option was intended for mpicc and not the underlying compiler, particularly the ones that it doesn't support?
</span><br>
<p>Yes, it won't in the general case, but since -cc is accepted by mpich, 
<br>
you can as well assume it is not intended for the underlying compiler. 
<br>
If a user is indeed trying to pass -cc to some unknown compiler, the 
<br>
code is anyway not going to work with MPICH and probably most other 
<br>
MPIs.  In any case, for portability purposes, shouldn't you support -cc? 
<br>
Or one could end up with distributions that compile on some or don't on 
<br>
another. If you indeed would not like to support it, it's better to 
<br>
check for -cc and throw an error than compile with a compiler user 
<br>
didn't intend to - the latter may go unnoticed.
<br>
<p>-- Uday
<br>
<p><span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17398.php">Gus Correa: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Previous message:</strong> <a href="17396.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>In reply to:</strong> <a href="17396.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17399.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Reply:</strong> <a href="17399.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
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
