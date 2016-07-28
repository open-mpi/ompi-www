<?
$subject_val = "Re: [OMPI users] Problem with linking on OS X";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 19 20:35:55 2009" -->
<!-- isoreceived="20090820003555" -->
<!-- sent="Wed, 19 Aug 2009 17:35:50 -0700" -->
<!-- isosent="20090820003550" -->
<!-- name="Jody Klymak" -->
<!-- email="jklymak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with linking on OS X" -->
<!-- id="F9AA0678-1450-4826-8296-682306270715_at_uvic.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D6846880-50C4-4C0E-916F-F855B7529831_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with linking on OS X<br>
<strong>From:</strong> Jody Klymak (<em>jklymak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-19 20:35:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10444.php">tomek: "[OMPI users] Blocking communication a thread better then asynchronous progress?"</a>
<li><strong>Previous message:</strong> <a href="10442.php">tomek: "[OMPI users] OpenMPI extremely slow with progress threads"</a>
<li><strong>In reply to:</strong> <a href="10441.php">tomek: "Re: [OMPI users] Problem with linking on OS X"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tomek,
<br>
<p>Did you try mpicc --showme?
<br>
<p>I get:
<br>
<p>gcc -D_REENTRANT -I/Network/Xgrid/openmpi/include -L/Network/Xgrid/ 
<br>
openmpi/lib -lmpi -lopen-rte -lopen-pal -lutil
<br>
<p>If your -L isn't correct in there, then I would guess your  
<br>
configuration found the wrong library somehow when you compiled mpicc  
<br>
and friends...
<br>
<p>Cheers,  Jody
<br>
<p>On Aug 19, 2009, at  15:57 PM, tomek wrote:
<br>
<p><span class="quotelev1">&gt; OK - I have fixed it by including -L/opt/openmpi/lib at the very  
</span><br>
<span class="quotelev1">&gt; beginning of mpicc ... -L/opt/openmpi/lib -o app.exe the rest ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But something is wrong with dyld anyhow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 19 Aug 2009, at 21:04, Jody Klymak wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Tomek,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using 10.5.7, and just went through a painful process that we  
</span><br>
<span class="quotelev2">&gt;&gt; thought was library related (but it wasn't), so I'll give my less- 
</span><br>
<span class="quotelev2">&gt;&gt; than-learned response, and if you sill have difficulties hopefully  
</span><br>
<span class="quotelev2">&gt;&gt; others will chime in:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What is the result of &quot;which mpicc&quot; (or whatever you are using for  
</span><br>
<span class="quotelev2">&gt;&gt; your compiling/linking?  I'm pretty sure that's where the library  
</span><br>
<span class="quotelev2">&gt;&gt; paths get set, and if you are calling /usr/bin/mpicc you will get  
</span><br>
<span class="quotelev2">&gt;&gt; the wrong library paths in the executable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 19, 2009, at  10:57 AM, tomek wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
--
Jody Klymak
<a href="http://web.uvic.ca/~jklymak/">http://web.uvic.ca/~jklymak/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10444.php">tomek: "[OMPI users] Blocking communication a thread better then asynchronous progress?"</a>
<li><strong>Previous message:</strong> <a href="10442.php">tomek: "[OMPI users] OpenMPI extremely slow with progress threads"</a>
<li><strong>In reply to:</strong> <a href="10441.php">tomek: "Re: [OMPI users] Problem with linking on OS X"</a>
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
