<?
$subject_val = "Re: [OMPI users] Incorrect function call in simple C program";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 16 11:49:44 2016" -->
<!-- isoreceived="20160516154944" -->
<!-- sent="Mon, 16 May 2016 17:49:29 +0200" -->
<!-- isosent="20160516154929" -->
<!-- name="Thomas Jahns" -->
<!-- email="jahns_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Incorrect function call in simple C program" -->
<!-- id="81AF0B99-2737-4FB4-A694-95FFA8F5D36C_at_dkrz.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CAAkFZ5v=zXKNYCS1AU8EncpX4FE6Jn0CZz7hWyZFKdG-sD2xPA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Incorrect function call in simple C program<br>
<strong>From:</strong> Thomas Jahns (<em>jahns_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-16 11:49:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29223.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mpirun invocation only works in debug mode, hangs in &quot;normal&quot; mode."</a>
<li><strong>Previous message:</strong> <a href="29221.php">Zabiziz Zaz: "Re: [OMPI users] ORTE has lost communication"</a>
<li><strong>In reply to:</strong> <a href="29153.php">Gilles Gouaillardet: "Re: [OMPI users] Incorrect function call in simple C program"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 10, 2016, at 12:26 , Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; except if you #include the libc header in your app, *and* your send  
</span><br>
<span class="quotelev1">&gt; function has a different prototype, I do not see how clang can issue  
</span><br>
<span class="quotelev1">&gt; a warning
</span><br>
<span class="quotelev1">&gt; (except of course if clang &quot;knows&quot; all the libc subroutines ...)
</span><br>
<p>not sure if that helps the OP, but for those who have it available:  
<br>
IBM xlc &quot;knows&quot; all the libc names and will warn (assuming the  
<br>
corresponding flags are set) even when not including the header in  
<br>
question. Expect to get warnings for things like parameters named  
<br>
index though.
<br>
<p>Regards, Thomas
<br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29222/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29222/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29223.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mpirun invocation only works in debug mode, hangs in &quot;normal&quot; mode."</a>
<li><strong>Previous message:</strong> <a href="29221.php">Zabiziz Zaz: "Re: [OMPI users] ORTE has lost communication"</a>
<li><strong>In reply to:</strong> <a href="29153.php">Gilles Gouaillardet: "Re: [OMPI users] Incorrect function call in simple C program"</a>
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
