<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Nov  4 07:27:49 2006" -->
<!-- isoreceived="20061104122749" -->
<!-- sent="Sat, 4 Nov 2006 13:27:39 +0100" -->
<!-- isosent="20061104122739" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI between amd64 and x86" -->
<!-- id="20061104122739.GM27827_at_drcomp.erfurt.thur.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5d5f7eba0611040037j95f0cev3ab4565c9eb36da8_at_mail.gmail.com" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-04 07:27:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1162.php">Nysal Jan: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<li><strong>Previous message:</strong> <a href="1160.php">Nysal Jan: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<li><strong>In reply to:</strong> <a href="1160.php">Nysal Jan: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1162.php">Nysal Jan: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<li><strong>Reply:</strong> <a href="1162.php">Nysal Jan: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Nov 04, 2006 at 02:07:58PM +0530, Nysal Jan wrote:
<br>
<p><span class="quotelev2">&gt; &gt;come from the BTL headers where the fields do not have the same
</span><br>
<span class="quotelev2">&gt; &gt;alignment inside. The original question was asked by Nysal Jan on an
</span><br>
<span class="quotelev2">&gt; &gt;email with the subject &quot;SEGV in EM64T &lt;--&gt; PPC64 communication&quot; on
</span><br>
<span class="quotelev2">&gt; &gt;Oct. 11 2006. Unfortunately, we still have the same problem.
</span><br>
<span class="quotelev1">&gt; I'm forwarding that email. Further investigation showed that the same
</span><br>
<span class="quotelev1">&gt; issue exists with a few other ob1 headers as well. A 64-bit build doesn't
</span><br>
<span class="quotelev1">&gt; have this problem. I'm not sure if this might be the same issue that you
</span><br>
<span class="quotelev1">&gt; are facing. You could test if the attached patch works for you (Although
</span><br>
<span class="quotelev1">&gt; this is not the right solution).
</span><br>
<p>The attached patch solves my issue and I feel that it's right
<br>
the problem I was facing (I saw the hang in pml_ob1).
<br>
<p>Is there already a ticket assigned for it?
<br>
<p><p><pre>
-- 
mail: adi_at_[hidden]  	<a href="http://adi.thur.de">http://adi.thur.de</a>	PGP: v2-key via keyserver
Mathematik ohne Axiome ist nicht mehr als hei&#223;e Luft. (Matthias Heidbrink)
Auch mit Axiomen ist Mathematik nicht mehr als hei&#223;e Luft. (Florian Weimer)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1162.php">Nysal Jan: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<li><strong>Previous message:</strong> <a href="1160.php">Nysal Jan: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<li><strong>In reply to:</strong> <a href="1160.php">Nysal Jan: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1162.php">Nysal Jan: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<li><strong>Reply:</strong> <a href="1162.php">Nysal Jan: "Re: [OMPI devel] MPI between amd64 and x86"</a>
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
